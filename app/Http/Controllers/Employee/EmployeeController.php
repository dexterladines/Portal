<?php

namespace App\Http\Controllers\Employee;

use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function index() {
        $data = [
            'employee' => Auth::user()->employee
        ];
        return view('employee.index')->with($data);
    }

    public function profile() {
        
        $data = [
           
            'employee' => Auth::user()->employee
        ];
        return view('employee.profile')->with($data);
    }

    public function profile_edit($employee_id) {
        $data = [
            'user' => User::all(),
            'employee' => Employee::findOrFail($employee_id),
            'departments' => Department::all(),
            'desgs' => ['Junior Developer', 'Mid-Level Developer', 'Senior Developer']
        ];
        // Gate::authorize('employee-profile-access', intval($employee_id));
        return view('employee.profile-edit')->with($data);
    }

    public function profile_update(Request $request, $employee_id) {
        // Gate::authorize('employee-profile-access', intval($employee_id));
        $this->validate($request, [
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            'photo' => 'image|nullable'
        ]);
        $employee = Employee::findOrFail($employee_id);
       
        $employee->dob = $request->dob;
        $employee->sex = $request->gender;
        $employee->nickname = $request->nickname;
        $employee->civil_status = $request->civil_status;
        $employee->contact_no = $request->contact_no;
        $employee->birthplace = $request->birthplace;
        $employee->height = $request->height;
        $employee->weight = $request->weight;
        $employee->religion = $request->religion;
        $employee->citizenship = $request->citizenship;
        $employee->econtact_no = $request->econtact_no;
        $employee->ename = $request->ename;
        $employee->rel = $request->rel;
        $employee->pres_add = $request->pres_add;
        $employee->pro_add = $request->pro_add;
       
        
        // if ($request->hasFile('photo')) {
        //     // Deleting the old image
        //     if ($employee->photo != 'user.png') {
        //         $old_filepath = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'employee_photos'.DIRECTORY_SEPARATOR. $employee->photo);
        //         if(file_exists($old_filepath)) {
        //             unlink($old_filepath);
        //         }    
        //     }
        //     // GET FILENAME
        //     $filename_ext = $request->file('photo')->getClientOriginalName();
        //     // GET FILENAME WITHOUT EXTENSION
        //     $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
        //     // GET EXTENSION
        //     $ext = $request->file('photo')->getClientOriginalExtension();
        //     //FILNAME TO STORE
        //     $filename_store = $filename.'_'.time().'.'.$ext;
        //     // UPLOAD IMAGE
        //     // $path = $request->file('photo')->storeAs('public'.DIRECTORY_SEPARATOR.'employee_photos', $filename_store);
        //     // add new file name
        //     $image = $request->file('photo');
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(300, 300);
        //     $image_resize->save(public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'employee_photos'.DIRECTORY_SEPARATOR.$filename_store));
        //     $employee->photo = $filename_store;
        // }
        $employee->save();
        Alert::success('Success', 'Your Profile has been  Successfully Updated!');
      
        return redirect()->route('employee.profile');
    }
}
