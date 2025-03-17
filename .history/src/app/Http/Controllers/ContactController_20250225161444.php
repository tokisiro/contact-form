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
    {   //requestから
        $contact = $request->only(['name', 'email', 'tel', 'content']);
            return view('confirm', compact('contact'));
    }
}
