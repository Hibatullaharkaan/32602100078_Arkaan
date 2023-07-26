<?php
namespace App\Controllers;
class page extends  BaseController{
    public function about ()
    {
        return view('Hello');
    }
} 