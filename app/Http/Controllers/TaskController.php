<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function publish()
    {
       DB::table('actress')->where('public',0)->orderBy('id','asc')->limit(30);
    }
}
