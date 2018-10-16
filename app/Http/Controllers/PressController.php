<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Press;

class PressController extends Controller
{
    
    //protected $uploadPath = config('ecom.image.directory');
    // protected $limit = 5;
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->uploadPath = config('ecom.image.directory');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function index()
    {
        $press = Press::all();
        return view('admin.pages.press.index',compact('press'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Press $press)
    {
        return view('admin.pages.press.create',compact('press'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                           
        if($request->hasFile('press_photo_input'))
        {
            if($request->file('press_photo_input')->isValid())
            {
                $location   = public_path().'/img/press/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('press_photo_input')->getClientOriginalExtension();

                $image = new \App\Http\Controllers\SimpleImage($request->file('press_photo_input'));
                
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $request['image'] = '/public/img/press/'.$image_lg;
                
            }
                        
        }
        

        $save_success = Press::create($request->all());

                
        if($save_success){
        
            return redirect()->action('PressController@index')->withErrors('Product has been stored successfully.');
        
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
        $press = Press::findOrFail($id);
        return view('admin.pages.press.edit',compact('press'));
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
        $press = Press::findOrFail($id);
        
        if($request->hasFile('press_photo_input'))
        {
            if($request->file('press_photo_input')->isValid())
            {

                /**
                *
                * At first, remove previous items, if they exist
                * 
                */
                
                if($press->image)
                {
                    
                    if(\Storage::has($press->image))
                    {
                        
                        \Storage::delete($press->image);
                        
                    }
                    
                }

                $file  = date('Ymdhis').'.'.$request->file('press_photo_input')->getClientOriginalExtension();
                
                if($request->file('press_photo_input')->move(public_path().'/img/press/', $file))
                {
                    
                    $request['image'] = '/public/img/press/'.$file;
                    
                }
                
            }
                        
        }
        
        
        $save_success = Press::find($id)->update($request->all());
                        
        if($save_success){
        
            return redirect()->action('PressController@index')->withErrors('Product has been updated successfully.');
        
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
        $p = Press::findOrFail($id);

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
