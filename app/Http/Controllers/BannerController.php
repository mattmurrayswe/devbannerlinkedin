<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Dompdf\Dompdf;
use Spatie\PdfToImage\Pdf;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response; // Import the Response facade

class BannerController extends Controller
{
    public function downloadBanner(Request $request)
    {
        // Generate a unique name for the banner
        $uniqueName = Str::random(10) . '_' . time() . '.png';
    
        // Create a black banner canvas
        $banner = Image::canvas(1585, 396, '#000000');
    
        // Load, resize, and position PNG images
        $pngFiles = ['react.png', 'node.png', 'firebase.png', 'gcp.png'];
        $imageWidth = 120;
        $spacing = 20; // Adjust spacing between images as needed
    
        $xPosition = $banner->width() - $spacing; // Start from the right edge of the banner
    
        foreach ($pngFiles as $pngFile) {
            $png = Image::make(public_path('image/' . $pngFile));
            $png->resize($imageWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            // Position the image on the banner
            $yPosition = $banner->height() - $png->height() - 20; // Adjust the Y position as needed
            $banner->insert($png, 'top-left', $xPosition - $png->width(), $yPosition);
    
            // Update X position for the next image
            $xPosition -= $png->width() + $spacing;
        }
    
        $email = 'matheusmurraydev@gmail.com';
        $position = 'SOFTWARE ENGINEER';
        $textColor = imagecolorallocate($banner->getCore(), 255, 255, 255); // White color
        $fontSize = 18;
        $textXPosition = 20; // Adjust X position for text
        $textYPosition = 20; // Adjust Y position for text
    
        // Load the 'Roboto' font from public/fonts directory
        $fontPath = public_path('fonts/Roboto-Regular.ttf'); // Path to the downloaded 'Roboto' font
    
        // Load the image's GD resource
        $imageResource = $banner->getCore();
    
        // Add email text using GD library
        imagettftext($imageResource, $fontSize, 0, $textXPosition, $textYPosition, $textColor, $fontPath, $email);
    
        $textYPosition += $fontSize + 5; // Adjust Y position for the next text
    
        // Add position text using GD library
        imagettftext($imageResource, $fontSize, 0, $textXPosition, $textYPosition, $textColor, $fontPath, $position);
    
        // Save the banner with the PNG images and text
        imagepng($imageResource, public_path('banners/' . $uniqueName));
    
        // Return the banner image as a response
        return Response::file(public_path('banners/' . $uniqueName), [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'inline; filename=' . $uniqueName,
        ]);
    }

    public function downloadBannerByHTMLIntoPDFIntoImage(Request $request)
    {
        // Get HTML content from the request or use a default
        $html = $request->input('html', '<h1>Hello, Mock HTML</h1>');
    
        $response = Http::get('http://192.168.15.150:3000');
        $html = $response->body();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();
        
        // Create a temporary directory if it doesn't exist
        $tempDir = public_path('temp');
        if (!is_dir($tempDir)) {
            mkdir($tempDir);
        }
    
        // Generate a random ID for the image
        $imageId = Str::random(10); // Requires using Illuminate\Support\Str
    
        $pdfPath = $tempDir . '/' . $imageId . '.pdf';
        file_put_contents($pdfPath, $pdfContent);
    
        // Convert PDF to image using the image optimizer
        $imagePath = public_path('banners/' . $imageId . '.jpg'); // Change format if needed
    
        // Convert PDF to image
        $pdf = new Pdf($pdfPath);
        $pdf->saveImage($imagePath);
    
        // Clean up the temporary PDF file
        unlink($pdfPath);
    
        // Get the image content
        $imageContent = file_get_contents($imagePath);
        // unlink($imagePath); // Remove the image file now that we have its content
        
        // Create a response with headers and image content
        $response = response($imageContent)
            ->header('Content-Type', 'image/jpeg'); // Adjust the content type as needed
        
        // Add the image ID to the response headers
        $response->headers->set('X-Image-ID', $imageId);
    
        return $response;
    } 
}
