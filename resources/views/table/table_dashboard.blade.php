@extends('emp_dashboard')

@section('tablecontent')
<table id="table" class="center" style="width: 100%">
<thead>
    <th>Employee Name</i></th>
    <th>Designation</i></th>
    <th>Phone Number</i></th>
    <th>Salary </i></th>
    <th>Age</i></th>
    <th>Date of Birth</i></th>
</thead >
<tbody>
    @foreach ($user_info as $item)
        <tr>
                <td>{{$item->employee_name}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->salary}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->dob}}</td>
            </tr>
    @endforeach

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
