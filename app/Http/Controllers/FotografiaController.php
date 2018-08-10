<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotografiaController extends Controller
{
    


	public function fotografia() {

        return view('pages.fotografia.foto');

	}

	public function album() {

        return view('pages.fotografia.album');

	}

	





}
