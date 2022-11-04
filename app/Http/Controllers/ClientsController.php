<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('noBack');
    }

    /**
     * The function index() returns the view pages.client.index
     * 
     * @return The view pages.client.index
     */
    public function index()
    {
        return view('pages.client.index');
    }
}
