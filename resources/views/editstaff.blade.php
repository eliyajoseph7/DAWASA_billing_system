@include('constants.headerAndSide')

<div class="container">
  <div class="row">
     <div class="col-md-8 jumbotron">
        <form method="POST" action="{{ url('/update',array($edit->id)) }}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group ">
            <label class="form-control-label" for="inputSuccess1">Name</label>
            <input type="text" name="name" value="<?php echo $edit -> name; ?>" class="form-control" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div>    -->
        </div>
        <div class="form-group ">
            <label class="form-control-label" for="inputSuccess1">Email</label>
            <input type="email" name="email" value="<?php echo $edit -> email; ?>" class="form-control" id="inputValid">
             <!-- <div class="valid-feedback">Success! You've done it.</div>  -->
        </div>
        <div class="form-group ">
            <label class="form-control-label" for="inputSuccess1">Occupation</label>
            <input type="text" name="occupation" value="<?php echo $edit -> occupation; ?>" class="form-control" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
        
        <div class="form-group ">
            <label class="form-control-label" for="inputSuccess1">Gender</label>
            <div class="col-md-6 ">
                <div class="custom-control custom-radio col-md-6">
                    <input type="radio" id="male" name="gender" class="custom-control-input " value="male">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio col-md-8">
                    <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                    <label class="custom-control-label" for="female">Female</label>
                </div>   
            </div>
        </div>

        <!-- <div class="form-group ">
            <label class="form-control-label" for="inputSuccess1">Profile</label>
            <img src="{{url('uploads/staff/'.$edit->image)}}" class="form-control" alt="" style="width: 140px; height: 120px; border-radius: 10%;">
            <input type="file" name="image" value="<?php echo $edit->image; ?>"  class="form-control col-md-4" id="inputValid">
            <div class="valid-feedback">Success! You've done it.</div> 
        </div> -->
        
        <div class="modal-footer">
            <a href="{{url('/staff')}}" class="btn btn-primary">Back</a>
            <button type="submit" class="btn btn-primary">update</button>
        </div>
      </div>
    </div>
</div>      
</form>