<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    


	public function index() {

        return view('pages.landing');

	}

	public function texto() {

        return view('pages.texto.index');

	}

	public function fotografia() {

        return view('pages.fotografia.index');

	}





}
