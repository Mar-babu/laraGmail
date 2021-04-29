<?php

namespace App\Http\Controllers;

use \Dacastro4\LaravelGmail\Facade;

class InboxController extends Controller
{
    public function index() {
        $messages = Facade\LaravelGmail::message()->subject('test')->unread()->preload()->all();

        return view('inbox_old',compact('messages'));
    }
}
