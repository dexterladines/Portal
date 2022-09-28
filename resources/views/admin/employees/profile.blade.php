@extends('layouts.app')        

@section('content')

<!-- Content Header (Page header) -->

<!-- /.content-header -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-dark text-bold">{{ $employee->first_name}}'s Profile</h1>
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
        {{-- <div class="col-md-3"> --}}

          <!-- Profile Image -->
          {{-- <div class="card card-primary card-outline">
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
          </div> --}}
          <!-- /.card -->

          <!-- About Me Box -->
          {{-- <div class="card card-primary">
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
          </div> --}}
          <!-- /.card -->
        {{-- </div> --}}
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h2 class=" text-center text-bold">{{ $employee->first_name. ' '. $employee->last_name. ' '. $employee->ext }}</h2>

              <p class="text-muted text-center">{{ $employee->desg }}</p>

              
              <ul class="list-group list-group-bordered mb-3 d-flex align-items-center justify-content-center">
                <li class="list-group-item col-md-10 text-center ">
                  <b>Email:  </b> <a class="col-md-6 float-center">{{ $employee->email }}</a>
                </li>
                <li class="list-group-item col-md-10 text-center">
                  <b>Employee ID:  </b> <a class="col-md-6 float-center">{{ $employee->emp_id }}</a>
                </li>
                <li class="list-group-item col-md-10 text-center">
                  <b>Date Hired:  </b> <a class="col-md-6 float-center">{{ $employee->join_date->format('d M, Y') }}</a>
                </li>
              </ul>   
                   
            </div>
            <!-- /.card-body -->
            <div class="" id="collapseExample">

                <div class="col-md-10 pt-3 m-auto">
                  <div class="accordion" id="accordionExample">
                  <div class="card text-center">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <h3 class="text-dark text-bold">Personal Data</h3>
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                          <form class="form-horizontal">
                              <div class="container">
                                  <div class="row">
                                    <div class="col-sm d-flex align-items-center justify-content-center">
                                      <label> First Name:</label>
                                          <h6 class=" col-sm-6" >
                                              {{ $employee->first_name }}
                                          </h6>                            
                                    </div>
                                    <div class="col-sm d-flex align-items-center justify-content-center">
                                      <label> Middle Name:</label>
                                          <h6 class="col-sm-6 " >
                                              {{ $employee->middle_name }}
                                          </h6>  
                                    </div>
                                    <div class="col-sm d-flex align-items-center justify-content-center">
                                      <label> Last Name:</label>
                                          <h6 class="col-sm-6 " >
                                              {{ $employee->last_name }}
                                          </h6>  
                                    </div>
                                  </div>
                                  <div class="row my-3">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Nickname:</label>
                                            <h6 class="col-sm-6   text-center" >
                                                {{ $employee->nickname }}
                                            </h6>                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Contact No:</label>
                                            <h6 class="col-sm-6   text-center" >
                                                {{ $employee->contact_no }}
                                            </h6>  
                                      
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Gender:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->sex }}
                                            </h6>   
                                      </div>
                                    </div>
                                    <div class="row my-3">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                      <label> Civil Status:</label>
                                          <h6 class="col-sm-6 " >
                                              {{ $employee->civil_status }}
                                          </h6> 
                                                         
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Place of Birth:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->birthplace }}
                                            </h6>  
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Birth Date:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->dob->format('d M, Y') }}
                                            </h6>  
                                      </div>
                                    </div>
                                    <div class="row my-2">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label>Height:</label>
                                            <h6 class="col-sm-6" >
                                                {{ $employee->height }}
                                            </h6>                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        
                                        <label> Religion:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->religion }}
                                            </h6>  
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label>Emergency <br> Contact No:</label>
                                            <h6 class="col-sm-6" >
                                                {{ $employee->econtact_no }}
                                            </h6>     
                                     
                                      </div>
                                                               
                                        
                                    </div>
                                    <div class="row my-2">
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Weight:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->weight }}
                                            </h6>  
                                                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Citizenship:</label>
                                            <h6 class="col-sm-6   text-center" >
                                                {{ $employee->citizenship }}
                                            </h6>
                                          </div>  
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label>Emergency<br> Contact Person:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->ename }}
                                            </h6>  
                                      </div>
                                      {{-- <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label> Relationship:</label>
                                            <h6 class="col-sm-6 " >
                                              {{ $employee->rel }}
                                            </h6>  
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
                          <h4 class="text-warning">Address</h4>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                          <div class="form-group row">
                              <label  class="col-sm-4 col-form-label" >Present Address:</label>
                              <p class="m-2">
                                {{$employee->pres_add}}
                              </p>
                          </div>
                          <div class="form-group row">
                              <label  class="col-sm-4 col-form-label">Provincial Address:</label>
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
                          <h4 class="text-dark">Family Background</h4>
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
                                            <p class="m-3 col-sm-6 " >
                                                {{-- {{ $employee->first_name }} --}}
                                            </p>                            
                                      </div>
                                      <div class="col-sm d-flex align-items-center justify-content-center">
                                        <label for="inputName"> Contact No:</label>
                                            <p class="m-3 col-sm-6 " >
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
                                            <label for=""> Father's Name:</label>
                                                <p class="m-3 col-sm-6" >
                                                    {{-- {{ $employee->first_name }} --}}
                                                </p>                            
                                          </div>
                                          <div class="col-sm d-flex align-items-center justify-content-center">
                                            <label for=""> Contact No:</label>
                                                <p class="m-3 col-sm-6 " >
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
                                            <label for=""> Spouse' Name:</label>
                                                <p class="m-3 col-sm-6 " >
                                                    {{-- {{ $employee->first_name }} --}}
                                                </p>                            
                                          </div>
                                          <div class="col-sm d-flex align-items-center justify-content-center">
                                            <label for=""> Contact No:</label>
                                                <p class="m-3 col-sm-6 " >
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
                                            <label for="">Number of Children:</label>
                                                <p class="m-3 col-sm-6 " >
                                                    {{-- {{ $employee->first_name }} --}}
                                                </p>                            
                                          </div>
                                          <div class="col-sm d-flex align-items-center justify-content-center">
                                            <label for="">Number of Children:</label>
                                                <p class="m-3 col-sm-6 " >
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

                
                  </div>
                </div>
              </div>
            </div>  
          </div>
            {{-- <div class="card">
              <ul class="nav nav-pills d-flex align-items-center justify-content-center m-3">
                <li class="nav-item"><a class="nav-link active" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Personal Data</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#school" role="button" aria-expanded="false" aria-controls="collapseExample">Scholastic Record</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Government Numbers</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Employment History</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Skills & PRC License</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Medical Info.</a></li>

              </ul> --}}
              
              
            {{-- </div> --}}
            
         

              
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
