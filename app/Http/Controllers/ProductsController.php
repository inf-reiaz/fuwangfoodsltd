<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
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
        $products = Product::all();
        return view('admin.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.pages.products.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                           
        if($request->hasFile('product_photo_input'))
        {
            if($request->file('product_photo_input')->isValid())
            {
                
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/img/products/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('product_photo_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('product_photo_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('product_photo_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('product_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('product_photo_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                // Size:md
                $image->best_fit(640,400);
                $image->save($location.$image_md);
                
                // Size:sm
                $image->best_fit(320,225);
                $image->save($location.$image_sm);
                
                // Size:xs
                $image->best_fit(100,75);
                $image->save($location.$image_xs);
                
                $request['product_image'] = '/public/img/products/'.$image_lg;
                
            }
                        
        }
        
                
        
        $save_success = Product::create($request->all());

                
        if($save_success){
        
            return redirect()->action('ProductsController@index')->withErrors('Product has been stored successfully.');
        
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
        $product = Product::findOrFail($id);
        return view('admin.pages.products.edit',compact('product'));
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
        $product = Product::findOrFail($id);
        
        if($request->hasFile('product_photo_input'))
        {
            if($request->file('product_photo_input')->isValid())
            {

                /**
                *
                * At first, remove previous items, if they exist
                * 
                */
                
                if($product->product_image)
                {
                    
                    if(\Storage::has($product->product_image))
                    {
                        
                        \Storage::delete($product->product_image);
                        
                    }
                    
                }

                $file  = date('Ymdhis').'.'.$request->file('product_photo_input')->getClientOriginalExtension();
                
                if($request->file('product_photo_input')->move(public_path().'/img/products/', $file))
                {
                    
                    $request['product_image'] = '/public/img/products/'.$file;
                    
                }
                
            }
                        
        }
        
        
        $save_success = Product::find($id)->update($request->all());
                        
        if($save_success){
        
            return redirect()->action('ProductsController@index')->withErrors('Product has been updated successfully.');
        
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
        $product = Product::findOrFail($id);

        $product->delete();
        $productimg = $product->image;
        
        if (!empty($productimg) )
        {
            $imagePath     = public_path().'/img/products/'. $productimg;
            if ( file_exists($imagePath) ) unlink($imagePath);
        }
        

        return redirect()->back()->with('message', 'Your post has been deleted successfully');
    }
    

    
}
