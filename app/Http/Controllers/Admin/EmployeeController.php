<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employees' => Employee::all()
        ];
        return view('admin.employees.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'departments' => Department::all(),
            'desgs' => ['Senior Developer', 'Junior Developer', 'Mid-Level Developer']
        ];
        return view('admin.employees.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'emp_id' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'ext' => 'nullable',
            'sex' => 'required',
            'desg' => 'required',
            'department_id' => 'required',
            'email' => 'required|email',
            // 'photo' => 'image|nullable',
            'password' => 'required|confirmed|min:6',
            // 'nickname' => 'required',
            // 'civil_status' => 'required',
            // 'contact_no' => 'required',
            // 'birthplace' => 'required',
            // 'height' => 'required',
            // 'weight' => 'required',
            // 'religion' => 'required',
            // 'citizenship' => 'required',
            // 'econtact_no' => 'required',
            // 'ename' => 'required',
            // 'rel' => 'required',
            // 'pres_add' => 'required',
            // 'pro_ad' => 'required'
        ]);
        //$password =  Hash::make(Str::random(18));
        

        // $user = new User();
        // $user->name = $request->first_name.' '.$request->last_name;
        // $user->email = $request->input("email");

        // $user->password = Hash::make(8); //or some random hash generator

        // //set as empty string
        // $user->password = "";
        // $user->save();
        // return $user;

        // $signupMail = new SignupMail($user);
        // $signupMail->send();


        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        

        $employeeRole = Role::where('name', 'employee')->first();
        $user->roles()->attach($employeeRole);
        $employeeDetails = [
            'user_id' => $user->id, 
            'email' => $user->email,
            'emp_id' => $request->emp_id,
            'first_name' => $request->first_name, 
            'middle_name' => $request->middle_name, 
            'last_name' => $request->last_name,
            'ext' => $request->ext,
            'sex' => $request->sex, 
            'dob' => $request->dob, 
            'department_id' => $request->department_id, 
            'join_date' => $request->join_date,
            'desg' => $request->desg,
            // 'nickname' => $request->nickname,
            // 'civil_status' => $request->civil_status,
            // 'contact_no' => $request->contact_no,
            // 'height' => $request->height,
            // 'weight' => $request->weight,
            // 'religion' => $request->religion,
            // 'citizenship' => $request->citizenship,
            // 'econtact_no' => $request->econtact_no,
            // 'ename' => $request->ename,
            // 'rel' => $request->rel,
            // 'pres_add' => $request->pres_add,
            // 'pro_add' => $request->pro_add,
            // 'photo'  => 'user.png'
        ];
            
            
        // Photo upload
        // if ($request->hasFile('photo')) {
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
        //     $employeeDetails['photo'] = $filename_store;
        // }
        
        Employee::create($employeeDetails);
        
        Alert::success('Success', 'User has been  Successfully Added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        return view('admin.employees.profile')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($employee_id)
    {
        $data = [
            'user' => User::all(),
            'employee' => Employee::findOrFail($employee_id),
            'departments' => Department::all(),
            'desgs' => ['Junior Developer', 'Mid-Level Developer', 'Senior Developer']
        ];

        return view('admin.employees.profile-edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employee_id)
    {
        $this->validate($request, [
            'email' =>'required',
            'emp_id' => 'required',
            'first_name' => 'required', 
            'middle_name' => 'nullable', 
            'last_name' => 'required',
            'ext' => 'nullable',
            'sex' => 'required', 
            'dob' => 'required', 
            'department_id' => 'required', 
            'join_date' => 'required',
            'desg' => 'required',
        ]);

        $employee = Employee::findOrFail($employee_id);
       
        $employee->emp_id = $request->emp_id;
        $employee->email  = $request->email;   
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->ext = $request->ext;
        $employee->sex = $request->sex;
        $employee->dob = $request->dob;
        $employee->department_id = $request->department_id;
        $employee->join_date = $request->join_date;
        $employee->desg = $request->desg;
    

        $employee->save();
        Alert::success('Success', 'Your Profile has been  Successfully Updated!');
      
        return redirect()->route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $user = User::findOrFail($employee->user_id);
        // detaches all the roles
       
        $employee->delete();
        $user->roles()->detach();
        // deletes the users
        $user->delete();
        Alert::success('Success', 'User Record has been Successfully Deleted');
        // request()->session()->flash('success', 'Employee record has been successfully deleted');
        return back();
    }
}
