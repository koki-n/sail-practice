<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $re)
    {
        $item = [
            'txt' => 'テキスト',
            'param' => $re->param
        ];
        return view('index', $item);
    }
}
