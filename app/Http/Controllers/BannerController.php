<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function downloadBanner(Request $request)
    {
        try {
            return response()->json("Download.", 200);

        } catch (\Throwable $th) {
            return response()->json("Erro ao informar sintoma.", 422);
        }
    }
}
