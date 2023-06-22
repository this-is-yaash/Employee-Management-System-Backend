@extends('emp_request')
@section('leaverequest')

<table id="table" class="center" style="width: 100%">
    <thead>
      <th>Employee Name</i></th>
      <th>From Date</i></th>
      <th>To Date</i></th>
      <th>No of Days</i></th>
      <th>Reason </th>
      <th>Status</i></th>
      <th>Action</th>
    </thead>
    <tr>
      <td>John Smith</td>
      <td>5 June 2022</td>
      <td>7 June 2022</td>
      <td>2 Days</td>
      <td>Going to Hospital</td>
      <td><span class="sts">•  Pending</span></td>
      <td>
        <button type="button1" class="btn btn-success">Approve</button>
        <button type="button2" class="btn btn-danger">Decline</button>
      </td>
    </tr>
    <tr>
      <td>Will Smith</td>
      <td>8 July 2022</td>
      <td>10 July 2022</td>
      <td>2 Days</td>
      <td>Fever</td>
      <td><span class="sts">• Pending</span></td>
      <td>
        <button type="button1" class="btn btn-success">Approve</button>
        <button type="button2" class="btn btn-danger">Decline</button>
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


@endsection
