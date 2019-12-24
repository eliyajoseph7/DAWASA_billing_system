@include('constants.headerAndSide')


<div class="container">
            
            <div class="row responsive">
                <div class="col-md-12 col-md-offset-2">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            {!! $chart->render() !!}
                            

                        </div>
                    </div>
                </div>
            </div>
 </div>
 <script type="text/javascript">
	$(document).ready(function() {
    $('#myTab').addClass('myClass');

} );
</script>