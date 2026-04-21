<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello() {
    	    return 'Hello World';
	}

    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 244107020082<br>Nama : Rafazl Radana Diva';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Rafazl')
            ->with('occupation','Astronaut');

    }

}
