@include('constants.headerAndSide')

<div class="container table-responsive">
    
<table class="table table-stripped table-bordered">
  <thead class="thead-light">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Occupation</th>
        <th scope="col">Gender</th>
        <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <tr class="has-success">
        <td>{{( $view -> name )}}</td>
        <td>{{( $view -> email )}}</td>
        <td>{{( $view -> occupation )}}</td>
        <td>{{( $view -> gender )}}</td>
        <td><img src="{{url('uploads/staff/'.$view->image)}}" alt="" style="width: 100px; height: 70px;"></td>
    </tr>
    
  </tbody>
</table>
</div>
