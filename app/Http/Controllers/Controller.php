<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getview(){
        $data=[];
        $data['id']=10;
        $data['name']='mustafa_eltatawy';
        return view('log',$data);
    }
    public function tgeland(){
        return view('landing');
    }
}
