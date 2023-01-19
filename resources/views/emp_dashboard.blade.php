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
          <li><a href="{{'logout'}}">Logout</a></li>
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
    <h1>Employee Details</h1>
      <table id="table" class="center" style="width: 100%">
        <thead>
          <th>Employee Name</i></th>
          <th>Designation</i></th>
          <th>Phone Number</i></th>
          <th>Salary </i></th>
          <th>Age</i></th>
          <th>Date of Birth</i></th>
        </thead >
        <tr>
          <td>John Harvey</td>
          <td>Web Developer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>22</td>
          <td>12/12/2000</td>
        </tr>
        <tr>
          <td>Mark Luther</td>
          <td>Web Developer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>21</td>
          <td>12/10/2001</td>
        </tr>
        <tr>
          <td>Ben Johnson</td>
          <td>Web Designer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>23</td>
          <td>15/08/1999</td>
        </tr>
        <tr>
          <td>Sarah Connor</td>
          <td>Tester</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>25</td>
          <td>12/06/1997</td>
        </tr>
        <tr>
          <td>Hannah</td>
          <td>Debugger</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>22</td>
          <td>02/10/2000</td>
        </tr>
        <tr>
          <td>John Smith</td>
          <td>Android Developer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>23</td>
          <td>11/02/1999</td>
        </tr>
        <tr>
          <td>Will Smith</td>
          <td>iOS Developer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>24</td>
          <td>20/11/1998</td>
        </tr>
        <tr>
          <td>John Harvey</td>
          <td>Web Developer</td>
          <td>1234567890</td>
          <td>xyz$</td>
          <td>22</td>
          <td>12/12/2000</td>
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
