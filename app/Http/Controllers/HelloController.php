<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function index()
    {
        // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('hello')
            ->with('nerds', $nerds);
    }
    
    //public function index()
    //{
    //    $users = DB::select('select * from users where active = ?', [1]);

    //    return view('user.index', ['users' => $users]);
    //}
}
