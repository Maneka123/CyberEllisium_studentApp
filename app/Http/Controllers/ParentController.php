<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    //middleware checks whether user is logged in or not.if not user is redirected to login
    public function __construct(){
       $this -> middleware(['auth', 'verified']);
    }
}
