<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Trip;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('home', compact('cities'));
    }
    public function searche(Request $R){
       $DepartCity = $R->departcity;
       $ArivaleCity = $R->arivalecity;
       
       $result=Trip::where('departure_city_id',$DepartCity)->where('arrival_city_id',$ArivaleCity)->get();
       return view('search_results', compact('result'));
    }
}
