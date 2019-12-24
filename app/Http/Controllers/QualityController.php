<?php

namespace App\Http\Controllers;
use Charts;
use App\Quality;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function quality(){
        
$chart = Charts::database(Quality::all(),'area', 'highcharts')
          ->title("Water quality")
          ->responsive(false)
          ->width(0)
          ->elementLabel('PH')
          ->groupBy('day');

          return view('quality',['chart' => $chart ]);
                               
    }
}
