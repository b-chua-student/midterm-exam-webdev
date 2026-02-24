<?php

namespace App\Http\Controllers;

use App\Models\tbl_features;
use Illuminate\Http\Request;

class featuresController extends Controller
{
    public function __invoke()
    {
        $features = tbl_features::all();

        return view('features', compact('features'));
    }
}
