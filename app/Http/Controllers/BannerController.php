<?php

namespace App\Http\Controllers;

use App\Domain\Banners\BannerGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BannerController extends Controller
{
    public function downloadBanner(Request $request)
    {
        $generator = new BannerGenerator();
        $banner = $generator->generate();
        
        $uniqueName = $generator->getUniqueName(); // Assuming the BannerGenerator class has a method to retrieve the unique name

        return Response::make($banner->encode('png'), 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'inline; filename=' . $uniqueName,
        ]);
    }
}
