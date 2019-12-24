@include('constants/headerAndSide')




    <!-- This is the wrapper! -->

<div class="tab-content" id="myTabContent">
    <!-- Kinondoni -->
    <div class="tab-pane fade show active" id="kino" role="tabpanel" aria-labelledby="kino-tab">
        <div class="container">
            <!-- <canvas id="myChart">
                {!! $chart->render() !!}
            </canvas> -->
            <div class="row responsive">
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            {!! $chart->render() !!}
                            

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default">
            
        
                    <div class="panel-body">
                        {!! $chart2->render() !!}
                 
                    </div>
                </div>
                </div>  
            </div>

            <div class="row responsive">
                <div class="col-md-12 col-md-offset-2">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            {!! $chart3->render() !!}
                            

                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>

        <!-- ILALA -->
<div class="tab-pane fade" id="ilala" role="tabpanel" aria-labelledby="ilala-tab">
        <div class="container">
            <div class="row responsive">
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            {!! $chart_ilala->render() !!}

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default">
        
                    <div class="panel-body">
                        {!! $chart_ilala2->render() !!}
                 
                    </div>
                </div>
                </div>  
            </div>
        </div>
        
    </div>
   
    <!-- TEMEKE -->
    <div class="tab-pane fade" id="temeke" role="tabpanel" aria-labelledby="temeke-tab">
        <div class="container">
            <div class="row responsive">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                {!! $chart_tmk->render() !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
            
                        <div class="panel-body">
                            {!! $chart_tmk2->render() !!}

                        </div>
                    </div>
                    </div>  
            </div>
        </div>  
    </div>
     <!-- Kibaha -->
     <div class="tab-pane fade" id="kibaha" role="tabpanel" aria-labelledby="kibaha-tab">
        <div class="container">
        <div class="row responsive">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                {!! $chart_kiba->render() !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                            {!! $chart_kiba2->render() !!}
         
                        </div>
                    </div>
                    </div>  
            </div>
        </div>  
    </div>
    <!-- Bagamoyo -->
    <div class="tab-pane fade" id="bagamoyo" role="tabpanel" aria-labelledby="bagamoyo-tab">
        <div class="container">
        <div class="row responsive">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                {!! $chart_baga->render() !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">

                        <div class="panel-body">
                            {!! $chart_baga2->render() !!}
                        </div>
                    </div>
                    </div>  
            </div>
        </div>  
    </div>
    
</div>

        <!-- wrapper end -->
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>
    </div>
                    
        </div>
    </div>
    
    
</body>
</html>

<script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to DAWASA billing system');

            }, 1300);


        //     var data1 = [
        //         [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        //     ];
        //     var data2 = [
        //         [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        //     ];
        //     $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
        //         data1, data2
        //     ],
        //             {
        //                 series: {
        //                     lines: {
        //                         show: false,
        //                         fill: true
        //                     },
        //                     splines: {
        //                         show: true,
        //                         tension: 0.4,
        //                         lineWidth: 1,
        //                         fill: 0.4
        //                     },
        //                     points: {
        //                         radius: 0,
        //                         show: true
        //                     },
        //                     shadowSize: 2
        //                 },
        //                 grid: {
        //                     hoverable: true,
        //                     clickable: true,
        //                     tickColor: "#d5d5d5",
        //                     borderWidth: 1,
        //                     color: '#d5d5d5'
        //                 },
        //                 colors: ["#1ab394", "#1C84C6"],
        //                 xaxis:{
        //                 },
        //                 yaxis: {
        //                     ticks: 4
        //                 },
        //                 tooltip: false
        //             }
        //     );

        //     var doughnutData = {
        //         labels: ["App","Software","Laptop" ],
        //         datasets: [{
        //             data: [300,50,100],
        //             backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
        //         }]
        //     } ;


        //     var doughnutOptions = {
        //         responsive: false,
        //         legend: {
        //             display: false
        //         }
        //     };


        //     var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        //     new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        //     var doughnutData = {
        //         labels: ["App","Software","Laptop" ],
        //         datasets: [{
        //             data: [70,27,85],
        //             backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
        //         }]
        //     } ;


        //     var doughnutOptions = {
        //         responsive: false,
        //         legend: {
        //             display: false
        //         }
        //     };


        //     var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        //     new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
        
    
    $('#dws').addClass('myClass2');

        });
    </script> 

