<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
class DirectorController extends Controller
{

    public function index()
    {
        $directors = Director::all();
        return view('admin.pages.dir.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Director $director)
    {
        return view('admin.pages.dir.create',compact('director'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // return $request->all();
        
        $this->validate($request, [
            'ctg' => 'required',
            'name_title' => 'required',
            'other' => 'required',
            'popup' => 'required',
            'photo' => 'required'
        ]);
        
        
        if ($file = $request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . 'R101R.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/cv/';
            $file->move($destinationPath, $filename);
            $photo = '/public/front/cv/'.$filename;   
        }else{
            $photo = "#";
        }
        
        // return $photo;
        
        $dir = new Director;  
        
        $dir->ctg    = $request->ctg;
        $dir->name_title    = $request->name_title;
        $dir->other    = $request->other;
        $dir->popup    = $request->popup;
        $dir->Photo    = $photo;
        $save_success = $dir->save();
        
        if($save_success){
        
            return redirect()->action('DirectorController@index')->withErrors('Data has been stored successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }


    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director = Director::findOrFail($id);
        return view('admin.pages.dir.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $director = Director::findOrFail($id);
        
 
        $this->validate($request, [
            'ctg' => 'required',
            'name_title' => 'required',
            'other' => 'required'
        ]);
        
        
        if ($file = $request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . 'R101R.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/cv/';
            $file->move($destinationPath, $filename);
            $cv = '/public/front/cv/'.$filename;   
        }else{
            $cv = $director->photo;
        }
        
        
        $director->ctg    = $request->ctg;
        $director->name_title    = $request->name_title;
        $director->other    = $request->other;
        $director->popup    = $request->popup;
        $director->photo    = $cv;
        $save_success = $director->update();
        
                        
        if($save_success){
        
            return redirect()->action('DirectorController@index')->withErrors('Data has been updated successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
        
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Director::findOrFail($id);

        $p->delete();
        $productimg = $p->image;
        
        if (!empty($productimg) )
        {
            $imagePath     = public_path().'/img/press/'. $productimg;
            if ( file_exists($imagePath) ) unlink($imagePath);
        }
        

        return redirect()->back()->with('message', 'Your post has been deleted successfully');
    }
    
}
