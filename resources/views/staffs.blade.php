@include('constants.headerAndSide')
<link href="{{ url('css/mystyle.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/datatable/bootstrap.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/datatable/dataTables.bootstrap4.min.css') }}">

<style>
   .addStf {
      width: 7%;
       padding: 10px;
       position: relative;
        float: right;
   }
</style>
@if(session('info'))
    <div class="alert alert-success">
    {{session('info')}}
    </div>
@endif
<div class="container">
            <div class="add">
                    <a href="{{ url('/addStaff') }}" class="add" title="add staff" data-toggle="tooltip">
                        <p class="btn btn-primary"><i class="fa fa-plus">Add new staff
                        </i></p></a>
                    
            </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Staff <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
                
            </div>
            
            <div class=" table-responsive">
            <table class="table table-striped table-hover table-bordered mydatatable" style="width:100%">
            
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Email</th>
                        <th>Occupation <i class="fa fa-sort"></i></th>
                        <th>Gender</th>
                        <th>Country <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $count = 0;
                
                ?>
                    @if(count($staff_list) > 0)
                        @foreach($staff_list -> all() as $staff)
                            <?php 
                              $count += 1;
                            ?>
                
                    <tr>
                        <td>{{( $count )}}</td>
                        <td>{{( $staff -> name )}}</td>
                        <td>{{( $staff -> email )}}</td>
                        <td>{{( $staff -> occupation )}}</td>
                        <td>{{( $staff -> gender )}}</td>
                        <td>USA</td>
                        <td>
                            <a href='{{ url("/view/{$staff -> id}") }}' class="view" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                            <a href='{{ url("/edit/{$staff -> id}") }}' class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
                            <a href='{{ url("/delete/{$staff -> id}") }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    @endif()
                </tbody>
            </table>
            </div>
            
        </div>
    </div>     
</body>
</html>     

<!-- <script src="{{ url('js/datatable/jquery-3.3.1.js') }}"></script> -->
<script src="{{ url('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('.mydatatable').DataTable();
    $('#myTab').addClass('myClass');

} );
</script>