<?php

namespace App\Http\Controllers;

use App\Models\management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $managements = Management::get();
        return view('management.index',compact('managements'));
        
    }

    public function create()
    {
        return view('management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'carname'=> 'required|max:255|string',
            'carcompany'=> 'required|max:255|string',
            'carmodel'=> 'required',
        ]);

         management::create([
            'carname'=> $request->carname,
            'carcompany'=> $request->carcompany,
            'carmodel'=> $request->carmodel,
         ]);

         return redirect('management/create')->with('status','Add Successfully');

    }

    public function edit(int $id)
    {
        $management = Management::findOrFail($id);
        return view('management.edit',compact('management'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'carname'=> 'required|max:255|string',
            'carcompany'=> 'required|max:255|string',
            'carmodel'=> 'required',
        ]);

         management::findOrFail($id)->update([
            'carname'=> $request->carname,
            'carcompany'=> $request->carcompany,
            'carmodel'=> $request->carmodel,
         ]);

         return redirect()->back()->with('status','Update Successfully');

    }
    public function destroy(int $id)
    {
        $management = Management::findOrFail($id);
        $management->delete();

        return redirect()->back()->with('status','Deleted');

    }
}
