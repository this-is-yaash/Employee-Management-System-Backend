<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;

class DatabaseController extends Controller
{
    public function index()
    {
        $users= UserDetail::all();
        return view('table.table_dashboard')->with('users', $users);
    }

    public function create()
    {
        return view('/register');
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $imageName = time().'.'.$request->file('image')->extension();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->move(public_path('Image'), $imageName);
        $input['image'] = $imageName;

        UserDetail::create($input);
        return redirect('/dashboard')->with('flash_message', 'Employee Added!');
    }
    public function show($id)
    {
        $users=UserDetail::find($id);
        return view('table/view')->with('users', $users);
    }
    public function edit($id)
    {
        $users= UserDetail::find($id);
        return view('/edit')->with('users', $users);
    }
    public function update(Request $request, $id)
    {
        $users = UserDetail::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('/dashboard')->with('flash_message', 'Employee Updated!');
    }
    public function destroy($id)
    {
        UserDetail::destroy($id);
        return redirect('/dashboard')->with('flash_message', 'Employee Deleted!');
    }

}

