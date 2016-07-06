<?php

namespace Marvision\Laravel\Controllers;

use Illiminate\Html\Request;
use Illuminate\Routing\Controller;

class MarvisionController extends Controller
{
	public function index(){
		return view('marvision_view::home');
	}

	public function test(){

		dd(lang('date.day'));
	}
}