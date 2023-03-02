<?php

namespace LPP\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello(){
        return "hellow world from controller.";
    }
}
?>
