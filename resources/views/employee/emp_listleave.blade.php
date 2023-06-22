<!DOCTYPE html>
<html>
<head>
</head>
<title>Home</title>

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
          <li><a href="{{'home'}}">Dashboard</a></li>
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
      <a href="{{'profile'}}"><i class="fa-solid fa-address-card"></i><b>Employee Profile</b></a>
      <a href="{{'leaverequest'}}"><i class="fa-solid fa-circle-check"></i><b>Employee Leave Request Form</b></a>
      <a href="{{'listofleave'}}"class="active"><i class="fa-sharp fa-solid fa-list-check"></i><b>List of Leave</b></a>
    </div>
  </div>
  <div class="col-10">
    <div><h1>Lists Of Leave</h1></div>
</div>
  </div>

  </body>
</html>
