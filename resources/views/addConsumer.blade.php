@include('constants.header')

<div class="container">
    <form class="col-md-8 offset-md-2 mt-3">
      <div class="form-group">
        <label for="region">Region</label>
        <select id="region" class="form-control">
            <option></option>
            <option>Kinondoni</option>
            <option>Ilala</option>
            <option>Temeke</option>
            <option>Kibaha</option>
            <option>Bagamoyo</option>
        </select>
      </div>
     <div class="form-row responsive">
        <div class="col-md-6 form-group">
                <label for="street">Street</label>
                <select id="street" class="form-control">
                    <option></option>
                </select>
        </div>
        <div class="col-md-6 form-group">
                <label for="metre">Metre_no</label>
                <select id="metre" class="form-control">
                    <option></option>
                </select>
        </div>
      </div>
        <div class="form-group row">
            <label id="gender" class="col-md-1 col-form-label text-md-right">{{ __('Gender') }}</label>
            <div class="col-md-6 ">
                <div class="custom-control custom-radio col-md-6">
                    <input type="radio" id="male" name="gender" class="custom-control-input " value="male">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio col-md-8">
                    <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                    <label class="custom-control-label" for="female">Female</label>
                    <div class="custom-control-input  @error('gender') is-invalid @enderror col-md-6"></div>
                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                
            </div>
            
                
        </div>
        <div class="form-group">
            <label for="start">Start</label>
            <input type="date" id="start" class="form-control" />
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

</div>