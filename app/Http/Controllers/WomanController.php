<?php

namespace App\Http\Controllers;

use App\Models\Woman;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nok = Woman::all();
        return response()->json($nok,200,options:JSON_UNESCAPED_UNICODE);
    }
}
