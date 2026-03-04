<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(){
        $parok = Partner::with('man','woman')->get();
        return response()->json($parok,200,options:JSON_UNESCAPED_UNICODE);
    }
}
