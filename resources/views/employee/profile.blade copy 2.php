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
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Personal Data</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Scholastic Record</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Government Numbers</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Employment History</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Skills & PRC License</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Medical Information</a></li>

              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="text-center mt-3 mb-5">
                        <h1>Personal Data</h1>
                    </div>
                    <form class="form-horizontal">
                        <div class="container">
                            <div class="row">
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
                            </div>
                            <div class="row  my-3">
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
                                  <label for="inputName"> Civil Status:</label>
                                      <p class="ml-3 col-sm-6 form-control" id="inputName">
                                          {{ $employee->civil_status }}
                                      </p>  
                                </div>
                              </div>
                              <div class="row  my-3">
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Contact No:</label>
                                      <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                          {{ $employee->nickname }}
                                      </p>                            
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Place of Birth:</label>
                                      <p class="ml-3 col-sm-6 form-control" id="inputName">
                                        {{-- {{ $employee->dob->format('d M, Y') }} --}}
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
                                  <label for="inputName">Height:</label>
                                      <p class="ml-3 col-sm-3 form-control text-center" id="inputName">
                                          {{ $employee->nickname }}
                                      </p>                            
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Weight:</label>
                                      <p class="ml-3 col-sm-3 form-control" id="inputName">
                                        {{-- {{ $employee->dob->format('d M, Y') }} --}}
                                      </p>  
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Religion:</label>
                                      <p class="ml-3 col-sm-6 form-control" id="inputName">
                                        {{-- {{ $employee->dob->format('d M, Y') }} --}}
                                      </p>  
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                    <label for="inputName"> Citizenship:</label>
                                        <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                            {{ $employee->nickname }}
                                        </p>                            
                                  </div>
                              </div>
                              <div class="row  my-3">
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName">Emergency Contact No:</label>
                                      <p class="ml-3 col-sm-6 form-control  text-center" id="inputName">
                                          {{ $employee->nickname }}
                                      </p>                            
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Name:</label>
                                      <p class="ml-3 col-sm-6 form-control" id="inputName">
                                        {{-- {{ $employee->dob->format('d M, Y') }} --}}
                                      </p>  
                                </div>
                                <div class="col-sm d-flex align-items-center justify-content-center">
                                  <label for="inputName"> Relationship:</label>
                                      <p class="ml-3 col-sm-6 form-control" id="inputName">
                                        {{-- {{ $employee->dob->format('d M, Y') }} --}}
                                      </p>  
                                </div>
                              </div>  
                              
                        </div>
                        
                       
                       
                  </div>
                  <!-- /.post -->
                  <div class="post">
                        <div class="text-center mt-3 mb-5">
                            <h1>Address</h1>
                        </div>
                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Present Address:</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Present Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Provincial Address:</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Provincial Address"></textarea>
                            </div>
                        </div>
                    </div>
                
                    <div class="post">
                        <div class="text-center mt-3 mb-5">
                            <h1>Family Background</h1>
                        </div>
                        <form class="form-horizonta">
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
                    <div>
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
                  <!-- Post -->
                  {{-- <div class="post clearfix">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Sarah Ross</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Sent you a message - 3 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Lorem ipsum represents a long-held tradition for designers,
                      typographers and the like. Some people hate it and argue for
                      its demise, but others ignore the hate as they create awesome
                      tools to help create filler text for everyone from bacon lovers
                      to Charlie Sheen fans.
                    </p>

                    <form class="form-horizontal">
                      <div class="input-group input-group-sm mb-0">
                        <input class="form-control form-control-sm" placeholder="Response">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                      </div>
                    </form>
                  </div> --}}
                  <!-- /.post -->

                  <!-- Post -->
                 
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                {{-- <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-danger">
                        10 Feb. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-envelope bg-primary"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-primary btn-sm">Read more</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-user bg-info"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-comments bg-warning"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-success">
                        3 Jan. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="https://placehold.it/150x100" alt="...">
                          <img src="https://placehold.it/150x100" alt="...">
                          <img src="https://placehold.it/150x100" alt="...">
                          <img src="https://placehold.it/150x100" alt="...">
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div> --}}
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
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
