<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UjiLevelController extends Controller
{
    public function index(){
        return view('uji-level.index');
    }
}
