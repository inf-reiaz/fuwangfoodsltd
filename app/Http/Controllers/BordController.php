<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bord;
class BordController extends Controller
{

    public function index()
    {
        $bords = Bord::all();
        
        return view('admin.pages.bord.index',compact('bords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bord $bord)
    {
        return view('admin.pages.bord.create',compact('bord'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'          => 'required',
            'designation'   => 'required',
            'photo'         => 'required'
        ]);
        
        // return $request->all();
        
        
        if ($file = $request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . 'bord.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/cv/';
            $file->move($destinationPath, $filename);
            $img = '/public/front/cv/'.$filename;   
        }else{
            $img = "#";
        }
        
        $request['photo'] = $img;
        
        $bord = new Bord;  
        
        $bord->name         = $request->name;
        $bord->designation  = $request->designation;
        $bord->photo        = $img;
        $save_success       = $bord->save();
        
        if($save_success){
        
            return redirect()->action('BordController@index')->withErrors('Data has been stored successfully.');
        
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
        $bord = Bord::findOrFail($id);
        return view('admin.pages.bord.edit',compact('bord'));
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
        $bord = Bord::findOrFail($id);
        $old_img = $bord->photo;

        if ($file = $request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . 'R101R.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/cv/';
            $file->move($destinationPath, $filename);
            $img = '/public/front/cv/'.$filename;   
        }else{
            $img = $old_img;
        }
        
        $request['photo'] = $img;
        
        $bord->name         = $request->name;
        $bord->designation  = $request->designation;
        $bord->photo        = $img;
        
        $save_success = $bord->update();
        
                        
        if($save_success){
        
            return redirect()->action('BordController@index')->withErrors('Data has been updated successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
        
            
    }


    public function destroy($id)
    {
        $p = Bord::findOrFail($id);

        $p->delete();
        $productimg = $p->photo;
        
        if (!empty($productimg) )
        {
            $imagePath     = public_path().'/front/cv/'. $productimg;
            if ( file_exists($imagePath) ) unlink($imagePath);
        }
        
        return redirect()->back()->with('message', 'Your post has been deleted successfully');
    }
    
}
