<?php

namespace App\Domain\Banners;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BannerGenerator
{
    protected $banner;
    protected $imageWidth = 120;
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
        $this->addText('matheusmurraydev@gmail.com', 20, 20);
        $this->addText('SOFTWARE ENGINEER', 20, 38 + $this->fontSize);
        $this->saveBanner();
        return $this->banner;
    }

    protected function positionImages()
    {
        $pngFiles = ['react.png', 'node.png', 'firebase.png', 'gcp.png'];
        $xPosition = $this->banner->width() - $this->spacing;

        foreach ($pngFiles as $pngFile) {
            $png = Image::make(public_path('image/' . $pngFile));
            $png->resize($this->imageWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $yPosition = $this->banner->height() - $png->height() - 20;
            $this->banner->insert($png, 'top-left', $xPosition - $png->width(), $yPosition);

            $xPosition -= $png->width() + $this->spacing;
        }
    }

    protected function addText($text, $x, $y)
    {
        $fontPath = public_path('fonts/Roboto-Regular.ttf');
        imagettftext($this->banner->getCore(), $this->fontSize, 0, $x, $y, $this->textColor, $fontPath, $text);
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