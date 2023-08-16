<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Spatie\PdfToImage\Pdf;

class BannerController extends Controller
{

    public function downloadBanner(Request $request)
    {
        $html = '<h1>Hello, Mock HTML Cainan!</h1>';

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

        $pdfPath = $tempDir . '/mock.pdf';
        file_put_contents($pdfPath, $pdfContent);

        // Convert PDF to image using the image optimizer
        $imagePath = public_path('images/screenshot.jpg'); // Change format if needed

        // Convert PDF to image
        $pdf = new Pdf($pdfPath);
        $pdf->saveImage($imagePath);

        // Clean up the temporary PDF file
        unlink($pdfPath);

        return response()->json(['message' => 'Image saved successfully']);
    }
}
