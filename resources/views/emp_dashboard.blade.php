<!DOCTYPE html>
<html>
<head>
</head>
<title>Dashboard</title>

<link rel="stylesheet" href="/css/details.css">
<link rel="stylesheet" href="/css/navibar.css">
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
  <div class="row">
<div class="col-2">
    <div class="vertical-menu">
      <a href="{{'dashboard'}}" class="active"><i class="fa-solid fa-address-card"></i><b>Employee Details</b></a>
      <a href="{{'attendance'}}"><i class="fa-solid fa-circle-check"></i><b>Employee Attendance</b></a>
      <a href="{{'request'}}"><i class="fa-sharp fa-solid fa-list-check"></i><b>Leave Request</b></a>
    </div>
  </div>
  <div class="col-10">
    <div><h1>Employee Details</h1></div>
    <a href="{{route('register')}}"><button class="btn btn-secondary" id="addemp">Add Employee</button></a>
    @yield('tablecontent')

</div>
  </div>

  </body>
</html>
