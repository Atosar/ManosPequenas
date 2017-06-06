<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

class HomeController extends Controller
{
	public function index()
  {
  	return view('home');
  }

  public function download()
	{
    //PDF file is stored under project/public/download/info.pdf
    $file = public_path(). "/downloads/cv.pdf";

    $headers = array('Content-Type: application/pdf',);

    return Response::download($file, 'Agustin_Tosar.pdf', $headers);
	}
}