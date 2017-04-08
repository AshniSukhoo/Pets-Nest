<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Load Welcome Page which acts as home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWelcomePage()
    {
        return view('welcome');
    }

}
