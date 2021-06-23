<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

  public function home()
	{
    $data = [
      'title' => 'Home | Ci4 diva'
    ];
		echo view('pages/home',$data);
	}
  public function about()
	{
    $data = [
      'title' => 'About | Ci4 diva'
    ];
		echo view('pages/about',$data);
	}
}
