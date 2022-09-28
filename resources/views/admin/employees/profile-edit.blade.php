@extends('layouts.app')        

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
           
          </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="col-sm-12 text-center">
                    <h1 class="text-dark text-bold">Edit {{ $employee->first_name}}'s Profile</h1>
                  </div>
              {{-- <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div> --}}

              {{-- <h2 class=" text-center text-bold">{{ $employee->first_name. ' '. $employee->last_name. ' '. $employee->ext }}</h2>

              <p class="text-muted text-center">{{ $employee->desg }}</p> --}}
              <form action="{{ route('admin.employees.profile-update',  $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              
              <div class="card">
                       
                <div class="card-body m-5">
                    <div class="row">
                        <div class="col-md-4 mb-4 pb-2">
        
                            <div class="form-outline">
                              <input type="emp_id" id="emp_id" name="emp_id" value="{{$employee->emp_id}}" class="form-control form-control" />
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
                                    @foreach ($departments as $department)
                                    @if ($department->name == 'Offshore')
                                        <option value="Offshore" selected>Offshore</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Accounting">Accounting</option>                                   
                                    @endif    
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
                                <select name="desg" class="select form-control text-center">
                                    @foreach ($desgs as $desg)
                                    @if ($desg == 'Junior Developer')
                                        <option value="Junior Developer">Junior Developer</option>
                                        <option value="Mid-Level Developer" >Mid-Level Developer</option>
                                        <option value="Senior Developer">Senior Developer</option>
                                    @endif    
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
                                    @if ($employee->sex == 'Male')
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                    @else
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
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
                              <input type="email" id="email" name="email" value="{{$employee->email}}" class="form-control form-control" />
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
    
                          <div class="col-md-3 mx-2">
          
                            <div class="form-outline">
                              <input type="text" name="first_name" id="first_name" value="{{ $employee->first_name }}" class="form-control form-control" />
                              <label class="form-label" for="first_name">First Name</label>
                              @error('first_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
          
                          </div>
                          <div class="col-md-3 mx-2">
          
                            <div class="form-outline">
                              <input type="text" name="middle_name" id="middle_name" value="{{$employee->middle_name}}" class="form-control form-control" />
                              <label class="form-label" for="middle_name">Middle Name</label>
                              @error('middle_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
          
                          </div>
                          <div class="col-md-3 mx-2">
          
                            <div class="form-outline">
                              <input type="text"  name="last_name" id="last_name" value="{{$employee->last_name}}" class="form-control form-control" />
                              <label class="form-label" for="last_name">Last Name</label>
                              @error('last_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                          </div>
                            <div class="col-md-2 mx-2">
                            <div class="form-outline">
                                <input type="text"  name="ext" id="ext" value="{{$employee->ext}}" class="form-control form-control" />
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
                    <button type="submit" class="btn btn-flat btn-primary">Update</button>
                  </div>
            </div> 
        </form>        
            </div>
            <!-- /.card-body -->

          </div>
           
            
         

              
        </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


@endsection
@section('extra-js')
<script>
    $().ready(function() {
        dob = new Date('{{ $employee->dob }}');
        joinDate = new Date('{{ $employee->join_date }}');
        $('#dob').daterangepicker({
            "singleDatePicker": true,
            "startDate": dob,
            "locale": {
                "format": "DD-MM-YYYY"
            }
        });
        $('#join_date').daterangepicker({
            "singleDatePicker": true,
            "startDate": joinDate,
            "locale": {
                "format": "DD-MM-YYYY"
            }
        });
    });
</script>
@endsection