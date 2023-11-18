<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id=null){
        $id= $request->id;
       
        $name="Donald Trump";
        $age="75";
        $accessToken= $request->cookie("access_token");
        $path=$request->cookie("Path");
        $domain=$request->cookie("domain");
        $secure=$request->cookie("secure");
        $httpOnly=$request->cookie("httpOnly");
        $expires=$request->cookie("Expires");
        $data=array(
            "id"=>$id, 
            "name"=>$name, 
            "age"=>$age,
            "access_token"=>$accessToken,
            "Path"=>$path,
            "domain"=>$domain,
            "secure"=>$secure,
            "httpOnly"=>$httpOnly,
            "Expires"=>$expires
        );
        if (null==$id) {
            return response ("Please provide an ID", 400);
        } else {
            return response()->json($data, 200);
        }
        
    }
}
