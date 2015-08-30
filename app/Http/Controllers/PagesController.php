<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }

    public function about()
    {
    	$items = [    		
            'Pack luggage',
            'Hello Testing',
            'Arrive in San Juan'
        ];

        $js = '<script>alert("hello")</script>';

        $name = "Set Kyar Wa Lar";

    	return view('pages.about', compact('items', 'name', 'js'));
    }
}
