<?php

namespace App\Http\Controllers;
use App\Kinondoni;
use App\Ilala;
use App\Temeke;
use App\Kibaha;
use App\Bagamoyo;
use Charts;
use Illuminate\Http\Request;

class regionsController extends Controller
{
    public function kino(){
        $kino_people = Kinondoni::all();
        
            
        return view('kinondoni', ['kino_people' => $kino_people]);
    }

    public function ilala(){
        $ilala_people = Ilala::all();
        
            
        return view('ilala', ['ilala_people' => $ilala_people]);
    }

    public function tmk(){
        $tmk_people = Temeke::all();
        
            
        return view('temeke', ['tmk_people' => $tmk_people]);
    }

    public function kiba(){
        $kibaha_people = Kibaha::all();
        
            
        return view('kibaha', ['kibaha_people' => $kibaha_people]);
    }
    public function baga(){
        $bagamoyo_people = Bagamoyo::all();
        
            
        return view('bagamoyo', ['bagamoyo_people' => $bagamoyo_people]);
    }
    
}
