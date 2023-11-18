<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request){
        $id= $request->id;
        $name="Donald Trump";
        $age="75";
        $data=array(
            "id"=>$id, 
            "name"=>$name, 
            "age"=>$age
        );
        return $data;
    }
}
