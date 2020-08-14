<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index(){
        $req = DB::table('employee')->get();
        dd($req);
        //Je suis le meilleur des meilleurs
        //dskmdlfsdklfmsdlkfdmsfldfmsfldlfds
        //dofsdmkfsdkfmskdfmldfsdfklds,fdfksdsd
        // sqskmdslkmdqsldmqsldkm

       
    }
}
