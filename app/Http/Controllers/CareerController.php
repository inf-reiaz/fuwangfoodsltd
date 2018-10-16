<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Career;

class CareerController extends Controller
{
    
    public function index()
    {
        $careers = Career::all();
        return view('admin.pages.career.index',compact('careers'));
    }

    public function create(Career $career)
    {
        return view('admin.pages.career.create',compact('career'));
    }

    public function store(Request $request)
    {

        $save_success = Career::create($request->all());

                
        if($save_success){
        
            return redirect()->action('CareerController@index')->withErrors('Career has been stored successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }


    }

    

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.pages.career.edit',compact('career'));
    }

    public function update(Request $request, $id)
    {
        $save_success = Career::find($id)->update($request->all());
                        
        if($save_success){
        
            return redirect()->action('CareerController@index')->withErrors('Data has been updated successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
        
    }

    public function destroy($id)
    {
        Career::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Data has been deleted successfully');
    }
    
}
