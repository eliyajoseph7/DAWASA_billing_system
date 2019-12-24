<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staff;
class staffsController extends Controller
{
    public function staffs()
    {
        // $staff_list = Staff::all();
        $staff_list = DB::table('staff')->simplePaginate(5);
          return view('staffs', ['staff_list' => $staff_list]);
    }

    // Adding staffs
    public function add(Request $request){

        $addstaff = new Staff;

        $this->validate($request, [
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

        if ($addstaff::where('email', '=', Input::get('email'))->exists()) {
            return redirect('/addStaff')->with('info','The staff exists');
            
         }else{
            $addstaff->name = $request->input('name');
            $addstaff->email = $request->input('email');
            $addstaff->occupation = $request->input('occupation');
            
            if( $request->has('image')) {
                $file = $request->file('image');
                $extension = $file -> getClientOriginalExtension();
                $filename = time() . '.'. $extension;
                $file-> move('uploads/staff/', $filename);
                $addstaff->image = $filename;
            } 
            
            $addstaff->gender = $request->input('gender');

            $addstaff->save();
                return redirect('/staff')->with('info','staff added successfully');

         }
    
  }
  public function view(Request $request, $id){
      $data = array(
        'name' => $request->input('name'),
        'email' => $request -> input('email'),
        'occupation' => $request -> input('occupation'),
        'gender' => $request -> input('gender'),
        'image' => $request -> input('image')
    );
    $view = Staff::find($id);
        return view('viewstaff',['view' => $view]);
  }

  public function edit($id){
      $edit = Staff::find($id);
        return view('editstaff',['edit' => $edit]);
  }
  public function update(Request $request,$id){
    $edit = Staff::find($id);

        $edit->name = $request->input('name');
        $edit->email = $request -> input('email');
        $edit->occupation = $request -> input('occupation');
        $edit->gender = $request -> input('gender');
    
        if( $request->has('image')) {
          $file = $request->file('image');
          $extension = $file -> getClientOriginalExtension();
          $filename = time() . '.'. $extension;
          $file-> move('uploads/staff/', $filename);
          $edit->image = $filename;

          $edit->save();
      } 
        
      $edit->save();
    // Staff::where('id', $id)
    // ->update($edit);
       return redirect('/staff')->with('info','staff updated successfully');
  }

  public function delete($id){
    Staff::where('id' , $id)
    ->delete();
     return redirect('/staff')->with('info','staff deleted successfully');
    //  return ($id);
  }

}