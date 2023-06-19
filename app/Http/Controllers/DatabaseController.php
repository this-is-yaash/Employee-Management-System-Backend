<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;

class DatabaseController extends Controller
{
    public function index()
    {
        $user_info= UserDetail::all();
        return view('table.table_dashboard')->with('user_info', $user_info);
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
        $user_info=UserDetail::find($id);
        return view('table/view')->with('user_info', $user_info);
    }
    public function edit($id)
    {
        $user_info= UserDetail::find($id);
        return view('/edit')->with('user_info', $user_info);
    }
    public function update(Request $request, $id)
    {
        $user_info = UserDetail::find($id);
        $input = $request->all();
        $user_info->update($input);
        return redirect('/dashboard')->with('flash_message', 'Employee Updated!');
    }
    public function destroy($id)
    {
        UserDetail::destroy($id);
        return redirect('/dashboard')->with('flash_message', 'Employee Deleted!');
    }

}

