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
    
        // Create a black banner
        $banner = Image::canvas(1585, 396, '#000000');
    
        // Save the black banner with the unique name in the public/banners directory
        $banner->save(public_path('banners/' . $uniqueName));
    
        // Get the full path to the saved banner
        $bannerPath = public_path('banners/' . $uniqueName);
    
        // Return the banner image as a response
        return Response::file($bannerPath, [
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
