<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $managements = Management::where('user_id',$id)->get();
        return view('management.index',compact('managements'));
    }
    public function create()
    {
        return view('management.create');
    }
    public function store(Request $request)
    {
        $request['is_available'] = true;
        Management::create($request->all());
        session()->flash('success', 'Berhasil Ditambah');
        return redirect("/manajemen/$request->user_id");
    }
    public function edit(Request $request,$id)
    {
        $management = Management::find($id);
        return view('management.edit',compact('management'));
    }
    public function update(Request $request,$id)
    {
        Management::find($id)->update($request->all());
        session()->flash('success', 'Berhasil Diubah');
        return redirect("/manajemen/$request->user_id");
    }
    public function destroy($id)
    {
        Management::find($id)->delete();
        session()->flash('success', 'Berhasil Dibuang');
        return redirect()->back();
    }
}
