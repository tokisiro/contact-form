<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }
    //formタグから送られてきた値をRequestクラスで取り出す
    public function confirm(Request $request)
    {   
        //requestから指定したキーを取り出し、$contactに入れる
        //viewファイル内、inputタグのname属性で指定した文字を記述
        $contact = $request->only(['name', 'email', 'tel', 'content']);
            return view('confirm', compact('contact'));
    }
}
