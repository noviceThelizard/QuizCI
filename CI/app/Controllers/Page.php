<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo "about page";
        // return view('welcome_message');
	}
    
    public function contact()
	{
		echo "contact page";
	}
}