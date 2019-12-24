<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Charts;
use Illuminate\Http\Request;
use App\Kinondoni;
use App\Ilala;
use App\Temeke;
use App\Kibaha;
use App\Bagamoyo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    	// 			->get();
        // $chart = Charts::database($users, 'bar', 'highcharts')
		// 	      ->title("Monthly new Register Users")
		// 	      ->elementLabel("Total Users")
		// 	      ->dimensions(1000, 500)
		// 	      ->responsive(false)
		// 	      ->groupByMonth(date('Y'), true);
        // return view('billshome',compact('chart'));
        $count_total = count(Kinondoni::all());
        $chart = Charts::database(Kinondoni::all(),'bar', 'highcharts')
			      ->title("Total registered customers".' = '.$count_total)
				  ->responsive(false)
				  ->width(0)
				  ->elementLabel('Total customers')
				  ->colors(['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00f0ff'])
                  ->groupBy('street');
                  
                  $kino = Kinondoni::where('status', '=', 'paid')->get();
                  $count = count($kino); 
                  $count = ($count/$count_total) * 100;
        $chart2 = Charts::database($kino,'area', 'highcharts')
                    ->title("Total paid bills".' = '.$count.'%')
                    ->responsive(false)
                    ->width(0)
                    ->elementLabel('Paid bills')
                    // ->colors(['#00ff00'])
                    ->groupBy('street');
                  $kino2 = Kinondoni::where('status', '=', 'notpaid')->get();
                  $count = count($kino2); 
        $chart3 = Charts::database($kino2,'area', 'highcharts')
                    ->title("Total unpaid bills".' = '.$count)
                    ->responsive(false)
                    ->width(0)
                    ->elementLabel('Unpaid bills')
                    ->colors(['#00f0ff'])
                    ->groupBy('street');

                    $count = count(Ilala::all());          
        $chart_ilala = Charts::database(Ilala::all(),'line', 'highcharts')
                    ->title("Total registered customers". ' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Total customers')
                    ->colors(['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00f0ff'])
                    ->groupBy('street');

                    $ilala = Ilala::where('status', '=', 'paid')->get();
                    $count = count($ilala);          
        $chart_ilala2 = Charts::database($ilala,'area', 'highcharts')
                    ->title("Total paid bills". ' = '. $count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Paid bills')
                    // ->colors(['#00ff00'])
                    ->groupBy('street');
            // Temeke
            $count = count(Temeke::all());
        $chart_tmk = Charts::database(Temeke::all(),'bar', 'highcharts')
                    ->title("Total registered customers".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Total customers')
                    ->colors(['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00f0ff'])
                    ->groupBy('street');

                    $tmk = Temeke::where('status', '=', 'paid')->get();
                    $count = count($tmk);           
        $chart_tmk2 = Charts::database($tmk,'area', 'highcharts')
                    ->title("Total paid bills".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Paid bills')
                    // ->colors(['#00ff00'])
                    ->groupBy('street');


            // Kibaha
            $count = count(Kibaha::all());
        $chart_kiba = Charts::database(Kibaha::all(),'bar', 'highcharts')
                    ->title("Total registered customers".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Total customers')
                    ->colors(['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00f0ff'])
                    ->groupBy('street');

                    $kiba = Kibaha::where('status', '=', 'paid')->get(); 
                    $count = count($kiba);          
        $chart_kiba2 = Charts::database($ilala,'area', 'highcharts')
                    ->title("Total paid bills".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Paid bills')
                    // ->colors(['#00ff00'])
                    ->groupBy('street');


            // Bagamoyo
            $count = count(Bagamoyo::all());
        $chart_baga = Charts::database(Bagamoyo::all(),'line', 'highcharts')
                    ->title("Total registered customers".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Total customers')
                    ->colors(['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00f0ff'])
                    ->groupBy('street');

                    $baga = Bagamoyo::where('status', '=', 'paid')->get(); 
                    $count = count($baga);          
        $chart_baga2 = Charts::database($baga,'area', 'highcharts')
                    ->title("Total paid bills".' = '.$count)
                    ->responsive(false)
                    // ->width(0)
                    ->elementLabel('Paid bills')
                    // ->colors(['#00ff00'])
                    ->groupBy('street');
			      
			      
        return view('billshome',['chart' => $chart,'chart2' => $chart2,'chart3' => $chart3,
                                'chart_ilala' => $chart_ilala,'chart_ilala2' => $chart_ilala2,
                                'chart_tmk' => $chart_tmk,'chart_tmk2' => $chart_tmk2,
                                'chart_kiba' => $chart_kiba, 'chart_kiba2' => $chart_kiba2,
                                'chart_baga' =>$chart_baga, 'chart_baga2' => $chart_baga2
                                ]);
       
        
    }

   
   
}
