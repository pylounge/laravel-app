<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $name = 'Guest';
         if (Auth::check())
         {
            $user = $request->user();
            $name = $user['name'];
         }
        return view('index', ['name' =>$name]);
    }
}
