<?php

namespace App\Http\Controllers;

use App\Models\Man;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferfiak = Man::all();
        return response()->json($ferfiak,200,options:JSON_UNESCAPED_UNICODE);
    }

}
