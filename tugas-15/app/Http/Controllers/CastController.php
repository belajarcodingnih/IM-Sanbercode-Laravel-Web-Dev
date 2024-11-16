<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $users = DB::table('casts')->get();

        return view('cast', ['users' => $users]);
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:casts|max:255',
            'age' => 'required',
            'bio' => 'required',
        ]);

        DB::table('casts')->insert([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio']
        ]);

       return redirect('/cast');
    }

    public function show($id)
    {
        // dd($id);
        $users = DB::table('casts')->where('id', $id)->first();
        
        return view('detail', ['users' => $users]);
    }
}
