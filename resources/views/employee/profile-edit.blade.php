@extends('layouts.app')        

@section('content')

<!-- Content Header (Page header) -->

<!-- /.content-header -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
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
<!-- /.content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $employee->first_name. ' '. $employee->last_name. ' '. $employee->ext }}</h3>

              <p class="text-muted text-center">{{ $employee->desg }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{ $employee->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Employee ID</b> <a class="float-right">{{ $employee->emp_id }}</a>
                </li>
                <li class="list-group-item">
                  <b>Date Hired</b> <a class="float-right">{{ $employee->join_date->format('d M, Y') }}</a>
                </li>
              </ul>            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            
            <div class="card">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Personal Data</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#school" role="button" aria-expanded="false" aria-controls="collapseExample">Scholastic Record</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Government Numbers</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Employment History</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Skills & PRC License</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Medical Information</a></li>

              </ul>
              <div class="" id="collapseExample">
                <div class="card card-body">
                  <div class="col-md-10 pt-5 m-auto">
                    {{-- <div class="m-3 d-flex justify-content-end">
                        <a href="{{ route('employee.profile-edit', $employee->id) }}" class="text-danger">
                            <i class="fas fa-pencil-alt mr-1"></i>
                        </a>
                    </div> --}}
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header text-center" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="text-primary" >Personal Data</h3>
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="{{ route('employee.profile-update', $employee->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="container">
                                    <div class="row">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="first_name"> First Name:</label>
                                         <p class="ml-3 col-sm-6 form-control" id="first_name">
                                                {{ $employee->first_name }}
                                            </p>                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="middle_name"> Middle Name:</label>
                                            <p class="ml-3 col-sm-6 form-control" id="middle_name">
                                                {{ $employee->middle_name }}
                                            </p>  
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="last_name"> Last Name:</label>
                                            <p class="ml-3 col-sm-6 form-control" id="last_name">
                                                {{ $employee->last_name }}
                                            </p>  
                                      </div>
                                    </div>
                                    <div class="row  my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="nickname"> Nickname:</label>
                                          <input type="text" name="nickname" class="ml-3 col-sm-6 form-control" id="nickname" value="{{$employee->nickname}}">                         
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="gender"> Gender:</label>
                                          <select name="gender" class="ml-3 col-sm-6 form-control">
                                            @if ($employee->sex == 'Male')
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>
                                            @else
                                                <option value="Male">Male</option>
                                                <option value="Female" selected>Female</option>
                                            @endif
                                        </select>                        

                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="civil_status"> Civil Status:</label>
                                          <select name="civil_status" class="ml-3 col-sm-6 form-control">
                                            @if ($employee->civil_status == 'Single')
                                                <option value="Single" selected>Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorce">Divorce</option>
                                                <option value="Widowed">Widowed</option>
                                            @elseif($employee->civil_status == 'Married')
                                            <option value="Single">Single</option>
                                            <option value="Divorce">Divorce</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Married" selected>Married</option>
                                            
                                                
                                            @elseif($employee->civil_status == 'Widowed')
                                                <option value="Single">Single</option>
                                                <option value="Divorce">Divorce</option>
                                                <option value="Married" >Married</option>
                                                <option value="Widowed" selected>Widowed</option>
                                            @else
                                                <option value="Single">Single</option>
                                                <option value="Widowed" >Widowed</option>
                                                <option value="Married" >Married</option>
                                                <option value="Divorce" selected>Divorce</option>
                                            @endif
                                        </select>    
                                        </div>
                                      </div>
                                      <div class="row  my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="contact_no"> Contact No:</label>
                                          <input type="text" name="contact_no" class="ml-3 col-sm-6 form-control" id="contact_no" value="{{$employee->contact_no}}">                         
                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="birthplace"> Place of Birth:</label>
                                          <input type="text" name="birthplace" class="ml-3 col-sm-6 form-control" id="birthplace" value="{{$employee->birthplace}}">                         

                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="dob"> Birth Date:</label>
                                          <input type="text" name="dob" id="dob" class="ml-3 col-sm-6 form-control">
                                        </div>
                                      </div>
                                      <div class="row my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="height">Height:</label>
                                          <input type="text" name="height" id="height" class="ml-2 col-sm-4 form-control" value="{{$employee->height}}">
                        
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="weight"> Weight:</label>
                                          <input type="text" name="weight" id="weight" class="ml-2 col-sm-4 form-control" value="{{$employee->weight}}">

                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="religion"> Religion:</label>
                                          <input type="text" name="religion" id="religion" class="ml-2 col-sm-4 form-control" value="{{$employee->religion}}">
 
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                            <label for="citizenship"> Citizenship:</label>
                                            <input type="text" name="citizenship" id="citizenship" class="ml-2 col-sm-4 form-control" value="{{$employee->citizenship}}">
                         
                                          </div>
                                      </div>
                                      <div class="row  my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="econtact_no">Emergency Contact No:</label>
                                          <input type="text" name="econtact_no" id="econtact_no" class="ml-2 col-sm-4 form-control" value="{{$employee->econtact_no}}">
                           
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="ename"> Name:</label>
                                          <input type="text" name="ename" id="ename" class="ml-2 col-sm-4 form-control" value="{{$employee->ename}}">

                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="rel"> Relationship:</label>
                                          <input type="text" name="rel" id="rel" class="ml-2 col-sm-4 form-control" value="{{$employee->rel}}">

                                        </div>
                                      </div>  
                                      
                                </div>
                                <div class="card-footer d-flex align-items-end justify-content-end ">
                                    <button type="submit" class="btn btn-flat btn-primary">Save</button>
                                </div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-warning">Address</h3>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="pres_add" class="col-sm-2 col-form-label">Present Address:</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" name="pres_add" id="pres_add" placeholder="Present Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_add" class="col-sm-2 col-form-label">Provincial Address:</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" name="pro_add" id="pro_add" placeholder="Provincial Address"></textarea>
                                </div>
                            </div>                    
                        </div>
                        <div class="card-footer d-flex align-items-end justify-content-end ">
                            <button type="submit" class="btn btn-flat btn-primary">Save</button>
                        </div>
                      </div>
                      
                    </div>
                    <div class="card text-center">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-dark">Family Background</h3>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div>
                            <form class="form-horizontal">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Mother's Name:</label>
                                              <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                  {{-- {{ $employee->first_name }} --}}
                                              </p>                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Contact No:</label>
                                              <p class="m-3 col-sm-6 form-control" id="inputName">
                                                  {{-- {{ $employee->middle_name }} --}}
                                              </p>  
                                        </div>
                                </div>
                            </form> 
                        </div>
                            <div>
                                <form class="form-horizontal">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Father's Name:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Contact No:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <form class="form-horizontal">  
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Spouse' Name:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Contact No:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div> 
                                </form>
                            </div>
                                <form class="form-horizontal">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName">Number of Children:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName">Number of Children:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div>
                                  </form>
                              
                          </div>                   
                        </div>
                      </div>
                    </div>
                    
                  </div>                
                </div>
                <div class="collapse" id="school">
                  <div class="card card-body">
                    <div class="card text-center">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3 class="text-dark">Schoolastic Record</h3>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div>
                            <form class="form-horizontal">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Mother's Name:</label>
                                              <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                  {{-- {{ $employee->first_name }} --}}
                                              </p>                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Contact No:</label>
                                              <p class="m-3 col-sm-6 form-control" id="inputName">
                                                  {{-- {{ $employee->middle_name }} --}}
                                              </p>  
                                        </div>
                                </div>
                            </form> 
                        </div>
                            <div>
                                <form class="form-horizontal">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Father's Name:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Contact No:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <form class="form-horizontal">  
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Spouse' Name:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName"> Contact No:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div> 
                                </form>
                            </div>
                                <form class="form-horizontal">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName">Number of Children:</label>
                                                  <p class="m-3 col-sm-6 form-control  text-center" id="inputName">
                                                      {{-- {{ $employee->first_name }} --}}
                                                  </p>                            
                                            </div>
                                            <div class="col-sm d-flex align-items-center justify-content-center">
                                              <label for="inputName">Number of Children:</label>
                                                  <p class="m-3 col-sm-6 form-control" id="inputName">
                                                      {{-- {{ $employee->middle_name }} --}}
                                                  </p>  
                                            </div>
                                    </div>
                                  </form>
                              
                          </div>                   </div>
                </div>
                  
                    </div>
                  </div>
                </div>
              </div>  
              
            </div>
            
          </div>

              
        </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
 
<!-- /.content-wrapper -->

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