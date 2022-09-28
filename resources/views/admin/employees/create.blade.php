@extends('layouts.app')        

@section('content')



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
               
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.index') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Add Employee
                    </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->

    <section class="content vh-100 gradient-custom">
        <div class="container py-1 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-12 col-xl-12">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center text-primary">Add New User</h3>
                  @include('messages.alerts')
                  <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                   
      
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                      <input type="emp_id" id="emp_id" name="emp_id" value="{{old('emp_id')}}" class="form-control form-control" />
                                      <label class="form-label" for="emp_id">Employee ID</label>
                                      @error('emp_id')
                                      <div class="text-danger">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                    </div>
                  
                                  </div>

                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                        <select name="department_id" class="select form-control  text-center">
                                            <option hidden disabled selected value>  -----Select an Option-----  </option>
                                            @foreach ($departments as $department)
                                            <option class="text-center" value="{{ $department->id }}"
                                                @if (old('department_id') == $department->id)
                                                selected
                                                @endif    
                                                >
                                                {{ $department->name }}
                                            </option>                                         
                                            @endforeach
                                        </select>
                                        @error('department')
                                        <div class="text-danger">
                                            Please select a valid option
                                        </div>
                                        @enderror
                                        <label class="form-label select-label ">Department</label>
                                    </div>
                  
                                  </div>

                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                        <select name="desg" class="select form-control  text-center">
                                            <option hidden disabled selected value>  -----Select an Option-----  </option>
                                            @foreach ($desgs as $desg)
                                            <option class="text-center" value="{{ $desg }}"
                                                @if (old('desg') == $desg)
                                                selected
                                                @endif    
                                                >
                                                {{ $desg}}
                                            </option>                                         
                                            @endforeach
                                        </select>
                                        @error('department')
                                        <div class="text-danger">
                                            Please select a valid option
                                        </div>
                                        @enderror
                                        <label class="form-label select-label ">Position</label>
                                    </div>
                  
                                  </div>
                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                      <input type="join_date" id="join_date" name="join_date" value="{{old('join_date')}}" class="form-control form-control" />
                                      <label class="form-label" for="join_date">Join Date</label>
                                    </div>
                  
                                  </div>
                
                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                      <input type="dob" id="dob" name="dob" value="{{old('dob')}}" class="form-control form-control" />
                                      <label class="form-label" for="dob">Birthday</label>
                                    </div>
                  
                                  </div>

                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                        <select name="sex" class="select form-control text-center">
                                            <option hidden disabled selected value>  -----Select an Option-----  </option>
                                            @if (old('sex') == 'Male')
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>
                                                @elseif (old('sex') == 'Female')
                                                <option value="Male">Male</option>
                                                <option value="Female" selected>Female</option>
                                                @else
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            @endif
                                                                                   
                                        </select>
                                        @error('sex')
                                        <div class="text-danger">
                                            Please select a valid option
                                        </div>
                                        @enderror
                                        <label class="form-label select-label ">Gender</label>
                                    </div>
                  
                                  </div>
                                  <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                      <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control form-control" />
                                      <label class="form-label" for="email">Email</label>
                                      @error('email')
                                      <div class="text-danger">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                    </div>
                  
                                  </div>
                                <div class="col-md-4 mb-4 pb-2">
                
                                  <div class="form-outline">
                                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control form-control" />
                                    <label class="form-label" for="password">Password</label>
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                  </div>
                
                                </div>
                                <div class="col-md-4 mb-4 pb-2">
                
                                    <div class="form-outline">
                                      <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control form-control" />
                                      <label class="form-label" for="password_confirmation">Confirm Password</label>
                                      @error('password_confirmation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                  
                                  </div>
                              </div>
                                </div>

                               
                                   

                               
                            
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
            
                                  <div class="col-md-3 mb-4 pb-2">
                  
                                    <div class="form-outline">
                                      <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control form-control" />
                                      <label class="form-label" for="first_name">First Name</label>
                                      @error('first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                  
                                  </div>
                                  <div class="col-md-3 mb-4 pb-2">
                  
                                    <div class="form-outline">
                                      <input type="text" name="middle_name" id="middle_name" class="form-control form-control" />
                                      <label class="form-label" for="middle_name">Middle Name</label>
                                      @error('middle_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                  
                                  </div>
                                  <div class="col-md-3 mb-4 pb-2">
                  
                                    <div class="form-outline">
                                      <input type="text"  name="last_name" id="last_name" class="form-control form-control" />
                                      <label class="form-label" for="last_name">Last Name</label>
                                      @error('last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                  </div>
                                    <div class="col-md-2 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="text"  name="ext" id="ext" class="form-control form-control" />
                                        <label class="form-label" for="ext">Suffix</label>
                                        @error('ext')
                                          <div class="text-danger">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                      </div>
                                    </div>
    
                                  {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2 text-center">
                            <input class="btn btn-primary btn" type="submit" value="Submit" />
                          </div>
                    </div>


                  
                    
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- /.container-fluid -->

<!-- /.content -->

<!-- /.content-wrapper -->

@endsection

@section('extra-js')
<script>
    $().ready(function() {
        if('{{ old('dob') }}') {
            const dob = moment('{{ old('dob') }}', 'DD-MM-YYYY');
            const join_date = moment('{{ old('join_date') }}', 'DD-MM-YYYY');
            console.log('{{ old('dob') }}')
            $('#dob').daterangepicker({
                "startDate": dob,
                "singleDatePicker": true,
                "showDropdowns": true,
                "locale": {
                    "format": "DD-MM-YYYY"
                }
            });
            $('#join_date').daterangepicker({
                "startDate": join_date,
                "singleDatePicker": true,
                "showDropdowns": true,
                "locale": {
                    "format": "DD-MM-YYYY"
                }
            });
        } else {
            $('#dob').daterangepicker({
                "singleDatePicker": true,
                "showDropdowns": true,
                "locale": {
                    "format": "DD-MM-YYYY"
                }
            });
            $('#join_date').daterangepicker({
                "singleDatePicker": true,
                "showDropdowns": true,
                "locale": {
                    "format": "DD-MM-YYYY"
                }
            });
        }
        
    });
</script>
@endsection