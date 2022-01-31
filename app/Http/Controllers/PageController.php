<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
        /**
     * Render Index page
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('index');
    }

    /**
     * Render login page
     * 
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function renderLogin()
    {
        return view('login');
    }

    /**
     * Render register page
     * 
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function renderRegister()
    {
        return view('register');
    }

    /**
     * Render Admin Index page
     * 
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function Adminindex()
    {
        return view('admin.index');
    }

        /**
     * Render Admin Index page
     * 
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function Admex()
    {
        return view('admin.layouts.app');
    }
}
