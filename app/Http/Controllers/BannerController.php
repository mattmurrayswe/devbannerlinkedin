<?php

namespace App\Http\Controllers;

use App\Domain\Banners\BannerGenerator;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateTechnologiesRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BannerController extends Controller
{
    public function downloadBanner(ValidateTechnologiesRequest $request)
    {
        try {
            $validatedData = $request->validated();
    
            $generator = new BannerGenerator(
                $validatedData['tec_1'],
                $validatedData['tec_2'],
                $validatedData['tec_3'],
                $validatedData['tec_4'],
                $validatedData['email'],
                $validatedData['position']
            );
            $banner = $generator->generate();
            
            $uniqueName = $generator->getUniqueName();
    
            return Response::make($banner->encode('png'), 200, [
                'Content-Type' => 'image/png',
                'Content-Disposition' => 'inline; filename=' . $uniqueName,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while generating the banner.'], 500);
        }
    }
}
