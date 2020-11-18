<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testDbController extends Controller
{
    public function testDBConection(){
        try{
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                return "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            }else{
                die("Could not find the database. Please chek your configuration.");
            }
        }
        catch (\Exeption $e){
            die("Could not open connection to database server. Pease check your configuration.");

        }
    }
}
