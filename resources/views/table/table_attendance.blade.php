@extends('emp_attendance')
@section('attendance')
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
        <td>Harry Smith</td>
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
        <td>Will Howard</td>
        <td>iOS Developer</td>
        <td>05/05/2022</td>
        <td>N/A</td>
        <td>N/A</td>
      <td>
          <span class="absent">Absent</span>
        </td>
      <tr>
        <td>Att00003</td>
        <td>Frank Connor</td>
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
        <td>Philips Harvey</td>
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
@endsection
