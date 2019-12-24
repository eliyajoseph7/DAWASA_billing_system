@include('constants.headerAndSide')
<link href="{{ url('css/mystyle.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/datatable/bootstrap.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/datatable/dataTables.bootstrap4.min.css') }}">

<style>
   /* .addStf {
      width: 7%;
       padding: 10px;
       position: relative;
        float: right;
   } */
        .yes{
            color: green;
        }
        .no{
            color: red;
        }
   
</style>

@if(session('info'))
    <div class="alert alert-success">
    {{session('info')}}
    </div>
@endif
<div class="container">
            <div class="add">
                    <a href="{{ url('/addCustomer') }}" class="add" title="add customer" data-toggle="tooltip">
                        <p class="btn btn-primary"><i class="fa fa-plus"></i>Add new customer
                        </p></a>
                    
            </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
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
                        <th>Location</th>
                        <th>Email <i class="fa fa-sort"></i></th>
                        <th>Metre</th>
                        <th>Status <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $count = 0;
                
                ?>
                    @if(count($customer_list) > 0)
                        @foreach($customer_list -> all() as $customer)
                            <?php 
                              $count += 1;
                            ?>
                
                    <tr>
                        <td>{{( $count )}}</td>
                        <td>{{( $customer -> name )}}</td>
                        <td>{{( $customer -> location )}}</td>
                        <td>{{( $customer -> email )}}</td>
                        <td>{{( $customer -> metre )}}</td>
                        @if(($customer -> status)  == 'notpaid')
                            <td class="no" title="not paid" data-toggle="tooltip"><i class="fa fa-times-circle fa-2x"></<i></td>
                        @else
                            <td class="yes" title="paid" data-toggle="tooltip"><i class="fa fa-check-circle fa-2x"></<i></td>
                        @endif
                        <td>
                            <a href='{{ url("/view/{$customer -> id}") }}' class="view" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                            <a href='{{ url("/edit/{$customer -> id}") }}' class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
                            <a href='{{ url("/delete/{$customer -> id}") }}' class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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
       