<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function form(Request $request){
        return view("form");
    }

    public function queryStrings(Request $request){
        // $keyword = $request ->keyword;
        $keyword = $request->get('keyword','未設定');
        return 'キーワードは「'.$keyword.'」です。';
    }
}
