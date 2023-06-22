@extends('emp_dashboard')

@section('tablecontent')
<table id="table" class="center" style="width: 100%">
<thead>
    <th>Employee Name</i></th>
    <th>Role</th>
    <th>Designation</i></th>
    <th>Phone Number</i></th>
    <th>Age</i></th>
    <th>Action</th>
</thead >
<tbody>
    @foreach ($user_details as $item)
        <tr>
                <td>{{$item->user_name}}</td>
                <td>{{$item->role}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->age}}</td>
                <td>
                    <a href="{{ url('/dashboard/' . $item->id) }}" title="View Employee"><button class="btn btn-info btn-sm"><i aria-hidden="true"></i> View</button></a>
                    <a href="{{ url("/dashboard/" . $item->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                    <form method="POST" action="{{ url('/dashboard' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
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
