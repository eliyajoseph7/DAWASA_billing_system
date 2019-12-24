@include('constants.headerAndSide')

<div class="container">
            <div class="row responsive">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                      <div class="panel-heading">Projects</div>  
                        <div class="panel-body">
                        <div class=" table-responsive">
            <table class="table table-hover table-bordered mydatatable" style="width:100%">
            
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Task</th>
                        <th>Progress</i></th>
                        <th>Complete</th>
                       
                    </tr>
                </thead>
                <tbody>
                
                
                    <tr>
                        <td>1</td>
                        <td>Water installation</td>
                        <td ><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div></div></td>
                        <td><span class="badge label-info">50%</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kimara's pipes checkup</td>
                        <td ><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div></div></td>
                        <td><span class="badge label-success">90%</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Building Mbagala water tanks</td>
                        <td ><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></td>
                        <td><span class="badge label-primary">100%</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>installation of pre-paid metres at Mikocheni A</td>
                        <td ><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div></div></td>
                        <td><span class="badge label-secondary">0%</span></td>
                    </tr>
                      
                </tbody>
            </table>
            </div>
                            

                        </div>
                    </div>
                </div>
            </div>    
</div>

<script src="{{ url('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('.mydatatable').DataTable();
    $('#myTab').addClass('myClass');

} );
</script>