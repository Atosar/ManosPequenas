<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;


use Mail;
use App\Mail\Message;


class HomeController extends Controller
{
	public function index()
  {
  	return view('home');
  }
}