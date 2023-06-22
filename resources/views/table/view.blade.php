<!DOCTYPE html>
<html>
<head>
</head>
<title>Dashboard</title>

<link rel="stylesheet" href="/css/details.css">
<link rel="stylesheet" href="/css/navibar.css">
<link rel="stylesheet" href="/css/image.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<body>
  <div class="col-12">
    <div class="row">
      <ul id="navbar">
          <li><a href="{{'dashboard'}}">Dashboard</a></li>
        <div class="logout">
          <li><a href="{{route('logout')}}">Logout</a></li>
        </div>
      </ul>
    </div>
  </div>
  <br>
  <div class="align-item-center justify-content-center h-100">
    <div class="row">
        <div class="col-12">
            <div><h1>View Employee</h1></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-2">
            <img src="{{ url('Image/'.$user_details->image) }}" alt="Profile Picture">
        </div>
        <div class="col-6">
            <div class="col-12">
                <div class="col-8  ">
                    <div class="col-md-10">
                        <div class="card mb-5">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                {{$user_details->user_name}}
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                {{$user_details->email}}
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              {{$user_details->phone_number}}
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Role</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{$user_details->role}}
                              </div>
                              </div>
                              <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Designation</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                {{$user_details->designation}}
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Salary</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                {{$user_details->salary}}
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{$user_details->age}}
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">DOB</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{$user_details->dob}}
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
    </body>
</html>
