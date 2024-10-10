<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    public function index()
    {
        $iphones = Iphone::get();
        return view('iphone', compact('iphones'));
    }
}
