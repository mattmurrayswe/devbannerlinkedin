<?php

namespace App\Domain\Banners;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BannerGenerator
{
    protected $banner;
    protected $imageWidth = 180;
    protected $spacing = 20;
    protected $fontSize = 18;
    protected $textColor;
    protected $uniqueName;

    public function __construct()
    {
        // Create a black banner canvas
        $this->banner = Image::canvas(1585, 396, '#000000');
        $this->textColor = imagecolorallocate($this->banner->getCore(), 255, 255, 255); // White color
    }

    public function generate()
    {
        $this->positionImages();
        
        $textMargin = 35; // Adjust this value for vertical spacing
        $positionY = 20 + $textMargin; // Add top margin of 20px to position Y
        $lineSpacing = 10; // Adjust this value to control the spacing between lines
        $rightMargin = 35; // Adjust this value to increase the right margin
        
        $emailY = $positionY + $this->fontSize + $lineSpacing; // Adjust spacing between lines
    
        // Align text to the right with the specified right margin
        $this->addText('matheusmurraydev@gmail.com', 1585 - $rightMargin, $emailY);
        $this->addText('SOFTWARE ENGINEER', 1585 - $rightMargin, $positionY);
        
        $this->saveBanner();
        
        return $this->banner;
    }
    
    protected function positionImages()
    {
        $pngFiles = ['react.png', 'node.png', 'firebase.png', 'gcp.png'];
        $xPosition = $this->banner->width() - $this->spacing - $this->imageWidth - 10; // Adjusted X position
    
        foreach ($pngFiles as $pngFile) {
            $png = Image::make(public_path('image/' . $pngFile));
            $png->resize($this->imageWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $yPosition = $this->banner->height() - $png->height() - 30;
            $this->banner->insert($png, 'top-left', $xPosition, $yPosition);
    
            $xPosition -= $this->imageWidth + $this->spacing;
        }
    }

    protected function addText($text, $x, $y)
    {
        $fontPath = public_path('fonts/Roboto-Regular.ttf');
        $textWidth = imagettfbbox($this->fontSize, 0, $fontPath, $text);
        $textWidth = $textWidth[2] - $textWidth[0]; // Calculate text width
    
        $adjustedX = $x - $textWidth; // Adjust X position based on text width
    
        imagettftext($this->banner->getCore(), $this->fontSize, 0, $adjustedX, $y, $this->textColor, $fontPath, $text);
    }

    protected function saveBanner()
    {
        $this->uniqueName = Str::random(10) . '_' . time() . '.png';
        $this->banner->save(public_path('banners/' . $this->uniqueName));
    }

    public function getUniqueName()
    {
        return $this->uniqueName;
    }
}