<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $colors = Color::paginate(10);
        return view('color.index',compact('colors'));
    }
}
