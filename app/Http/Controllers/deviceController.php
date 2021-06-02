<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Larinfo;
class deviceController extends Controller
{
    public function getDevice(){    
        $larinfo = Larinfo::getHostIpinfo();
        print_r($larinfo);
        die;
    }
}
