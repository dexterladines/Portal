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
                     src="/dist/img/user4-128x128.jpg"
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

              <p class="text-muted">{{$employee->pres_add}}</p>

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
                  <div class="col-md-12 pt-5 m-auto">
                    <div class="m-3 d-flex justify-content-end">
                        <a href="{{ route('employee.profile-edit', $employee->id) }}" class="text-danger">
                            <i class="fas fa-pencil-alt mr-1"></i>
                        </a>
                    </div>
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header text-center" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="text-primary" >Personal Data</h3>
                           <h2 class="text-dark text-bold">{{ $employee->first_name. ' '. $employee->last_name. ' '. $employee->ext }}</h2>
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="container">
                                    {{-- <div class="row">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="inputName"> First Name:</label>
                                            <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                                {{ $employee->first_name }}
                                            </p>                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="inputName"> Middle Name:</label>
                                            <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                {{ $employee->middle_name }}
                                            </p>  
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="inputName"> Last Name:</label>
                                            <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                {{ $employee->last_name }}
                                            </p>  
                                      </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Nickname:</label>
                                              <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                                  {{ $employee->nickname }}
                                              </p>                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Gender:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                {{ $employee->sex }}
                                              </p>  
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="contact_no"> Contact No:</label>
                                              <p class="ml-3 col-sm-6 form-control  text-center" id="contact_no">
                                                  {{ $employee->contact_no }}
                                              </p>                            
                                        </div>
                                      </div>
                                      <div class="row  my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Civil Status:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                  {{ $employee->civil_status }}
                                              </p>  
                                        </div>                                      
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="birthplace"> Place of Birth:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="birthplace">
                                                {{ $employee->birthplace }}
                                              </p>  
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Birth Date:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                {{ $employee->dob->format('d M, Y') }}
                                              </p>  
                                        </div>
                                      </div>
                                      <div class="row my-3">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="height">Height:</label>
                                              <p class="ml-3 col-sm-6 form-control text-center" id="height">
                                                  {{ $employee->height }}
                                              </p>                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Religion:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="inputName">
                                                {{ $employee->religion }}
                                              </p>  
                                        </div>
                                        
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="econtact_no">Emergency Contact No:</label>
                                              <p class="ml-3 col-sm-6 form-control  text-center" id="econtact_no">
                                                  {{ $employee->econtact_no }}
                                              </p>                            
                                        </div>
                                       
                                        
                                      </div>
                                      <div class="row">
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="weight"> Weight:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="weight">
                                                {{ $employee->weight }}
                                              </p>  
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="inputName"> Citizenship:</label>
                                              <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                                  {{ $employee->citizenship }}
                                              </p>                            
                                        </div>
                                        <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="ename">Emrgency Contact Person:</label>
                                              <p class="ml-3 col-sm-6 form-control text-center" id="ename">
                                                {{ $employee->ename }}
                                              </p>  
                                        </div>
                                        {{-- <div class="col-sm d-flex align-items-center justify-content-center">
                                          <label for="rel"> Relationship:</label>
                                              <p class="ml-3 col-sm-6 form-control" id="rel">
                                                {{ $employee->rel }}
                                              </p>  
                                        </div> --}}
                                      </div>  
                                      
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
                                
                                  <p class="m-2">
                                    {{$employee->pres_add}}
                                  </p>
                               
                            </div>
                            <div class="form-group row">
                                <label for="pro_add" class="col-sm-2 col-form-label">Provincial Address:</label>
                               
                                  <p class="m-2">
                                    {{$employee->pro_add}}
                                  </p>                                
                               
                            </div>                   
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
                                          <h1>Post Graduate/Graduate Studies:</h1>
                                          <label for="inputName"> School:</label>
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
