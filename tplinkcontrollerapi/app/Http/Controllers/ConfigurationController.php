<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Http\Request;

class ConfigurationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    function GetConfigurationClient($idclient){
        return response()->json(['idClient'=>$idclient]);
    }

    function AddConfigurationClient(Request $request,$idclient){
        return response()->json(['idClient'=>$idclient]);
    }

    function  UpdateConfigurationClient(Request $request,$idclient){
        return response()->json(['idClient'=>$idclient]);
    }

    function DeleteConfigurationClient(Request $request,$idclient){
        return response()->json(['idClient'=>$idclient]);
    }
}
