@include('constants.header')


<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li> 
    <!-- <li class="breadcrumb-item"><a href="{{ url('/customer') }}">Customer</a></li> -->
    <li class="breadcrumb-item active" aria-current="page">Ilala</li>
  </ol>
</nav> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/datatable/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <style>
        .yes{
            color: green;
        }
        .no{
            color: red;
        }
    </style>
</head>
<body>
 	<div class="container mb-3 mt-3">
                <div class="add">
                    <a href="{{ url('/addConsumer') }}" class="add" title="add customer" data-toggle="tooltip">
                        <p class="btn btn-primary"><i class="fa fa-plus">Add new customer
                        </i></p></a>
                    
                </div>
 		<table class="table table-striped table-bordered mydatatable" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Street</th>
                <th>Metre no.</th>
                <th>Gender</th>
                <th>Start date</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
       
       
        @if(count($ilala_people) > 0)
        
            @foreach($ilala_people -> all() as $ilala)
            
            <tr>
                <td>{{ ($ilala -> name) }}</td>
                <td>{{ ($ilala -> street) }}</td>
                <td>{{ ($ilala -> metre_no)}}</td>
                <td>{{ ($ilala -> gender) }}</td>
                <td>{{ ($ilala -> start) }}</td>
                @if(($ilala -> status)  == 'notpaid')
                <td class="no" title="not paid" data-toggle="tooltip"><i class="fa fa-times-circle fa-2x"></<i></td>
                @else
                <td class="yes" title="paid" data-toggle="tooltip"><i class="fa fa-check-circle fa-2x"></<i></td>
                @endif
            </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
                <th>Street</th>
                <th>Metre no.</th>
                <th>Gender</th>
                <th>Start date</th>
                <th>status</th>
            </tr>
        </tfoot>
    </table>
 	</div>
</body>
<script src="{{ url('js/datatable/jquery-3.3.1.js') }}"></script>
<script src="{{ url('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('.mydatatable').DataTable();
} );
</script>
</html>
