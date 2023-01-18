<!DOCTYPE html>
<html>
<head>
</head>
<title>Attendance</title>
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
          <li><a href="{{'login'}}">Logout</a></li>
        </div>
      </ul>
    </div>
  </div>
  <br>
  <div class="row">
<div class="col-2">
    <div class="vertical-menu">
      <a href="{{url('dashboard')}}"><i class="fa-solid fa-address-card"></i><b>Employee Details</b></a>
      <a href="{{url('attendance')}}"class="active"><i class="fa-solid fa-circle-check"></i><b>Employee Attendance</b></a>
      <a href="{{url('request')}}"><i class="fa-sharp fa-solid fa-list-check"></i><b>Leave Request</b></a>
    </div>
  </div>
  <br>
  <div class="col-10">
    <h1>Employee Attendance</h1>
      <table id="table" class="center" style="width: 100%">
        <thead>
          <th>Attendance ID </i></th>
          <th>Employee Name</i></th>
          <th>Designation </i></th>
          <th>Date</th>
          <th>In Time </i></th>
          <th>Out Time </i></th>
          <th>Status </i></th>
        </thead>
        <tbody>
          <tr>
            <td>Att00001</td>
            <td>John Smith</td>
            <td>Android Developer</td>
            <td>05/04/2022</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>
              <span class="absent">Absent</span>
            </td>
          </tr>
          <tr>
            <td>Att00002</td>
            <td>Will Smith</td>
            <td>iOS Developer</td>
            <td>05/05/2022</td>
            <td>N/A</td>
            <td>N/A</td>
          <td>
              <span class="absent">Absent</span>
            </td>
          <tr>
            <td>Att00003</td>
            <td>Sarah Connor</td>
            <td>Tester</td>
            <td> 04/10/2022</td>
            <td>9.00</td>
            <td>18.00</td>
            <td>
              <span class="present">Present</span>
            </td>
          </tr>
          <tr>
            <td>Att00004</td>
            <td>John Harvey</td>
            <td>Web Developer</td>
            <td> 01/28/2022</td>
            <td>N/A</td>
            <td>N/A</td>
          <td>
              <span class="absent">Absent</span>
            </td>
          </tr>
          <tr>
            <td>Att00005</td>
            <td>Mark Luther</td>
            <td>Web Developer</td>
            <td>  09/22/2022</td>
            <td>9.00</td>
            <td>18.00</td>
          <td>
              <span class="present">Present</span>
            </td>  </tr>
          <tr>
            <td>Att00006</td>
            <td>Hannah</td>
            <td>Debugger</td>
            <td>08/12/2022</td>
            <td>9.00</td>
            <td>18.00</td>
          <td>
              <span class="present">Present</span>
            </td>  </tr>
          <tr>
            <td>Att00007</td>
            <td>Ben Johnson</td>
            <td>Web Designer</td>
            <td>12/30/2022</td>
            <td>9.00</td>
            <td>18.00</td>
          <td>
              <span class="present">Present</span>
          </td>
        </tr>
        <td>Att00001</td>
        <td>John Smith</td>
        <td>Android Developer</td>
        <td>05/04/2022</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>
          <span class="absent">Absent</span>
        </td>
      </tr>
      <tr>
        <td>Att00002</td>
        <td>Will Smith</td>
        <td>iOS Developer</td>
        <td>05/05/2022</td>
        <td>N/A</td>
        <td>N/A</td>
      <td>
          <span class="absent">Absent</span>
        </td>
      <tr>
        <td>Att00003</td>
        <td>Sarah Connor</td>
        <td>Tester</td>
        <td> 04/10/2022</td>
        <td>9.00</td>
        <td>18.00</td>
        <td>
          <span class="present">Present</span>
        </td>
      </tr>
      <tr>
        <td>Att00004</td>
        <td>John Harvey</td>
        <td>Web Developer</td>
        <td> 01/28/2022</td>
        <td>N/A</td>
        <td>N/A</td>
      <td>
          <span class="absent">Absent</span>
        </td>
      </tr>
      <tr>
        <td>Att00005</td>
        <td>Mark Luther</td>
        <td>Web Developer</td>
        <td>  09/22/2022</td>
        <td>9.00</td>
        <td>18.00</td>
      <td>
          <span class="present">Present</span>
        </td>  </tr>
      <tr>
        <td>Att00006</td>
        <td>Hannah</td>
        <td>Debugger</td>
        <td>08/12/2022</td>
        <td>9.00</td>
        <td>18.00</td>
      <td>
          <span class="present">Present</span>
        </td>  </tr>
      <tr>
        <td>Att00007</td>
        <td>Ben Johnson</td>
        <td>Web Designer</td>
        <td>12/30/2022</td>
        <td>9.00</td>
        <td>18.00</td>
      <td>
          <span class="present">Present</span>
      </td>
    </tr>
        </tbody>
      </table>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function () {
            $('#table').DataTable();
          });
      </script>
  </div>
  </div>

  </body>
</html>
