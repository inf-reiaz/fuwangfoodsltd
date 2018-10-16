<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Financial;
class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financials = Financial::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.pages.financial.index',compact('financials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Financial $financial)
    {
        return view('admin.pages.financial.create',compact('financial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        


        if ($file = $request->hasFile('first_pdf')) {
            $file = $request->file('first_pdf');
            $filename = time() . '1.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename);
            $imgpath = '/public/front/pdf/'.$filename;   
        }else{
            $imgpath = null;
        }
        
        
        
        if ($file = $request->hasFile('half_pdf')) {
            $file = $request->file('half_pdf');
            $filename2 = time() . '2.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename2);
            $imgpath2 = '/public/front/pdf/'.$filename2;
            
        }else{
            $imgpath2 = null;
        }
        
        
        
        if ($file = $request->hasFile('third_pdf')) {
            $file = $request->file('third_pdf');
            $filename3 = time() . '3.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename3);
            $imgpath3 = '/public/front/pdf/'.$filename3;
            
        }else{
            $imgpath3 = null;
        }
        
        if ($file = $request->hasFile('anual_report_pdf')) {
            $file = $request->file('anual_report_pdf');
            $filename4 = time() . '4.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename4);
            $imgpath4 = '/public/front/pdf/'.$filename4;
        }else{
            $imgpath4 = null;
        }

        
        
        $newFinancial = new Financial;
        $newFinancial->title             = $request->title;
        $newFinancial->first             = $request->first;
        $newFinancial->first_pdf         = $imgpath;
        $newFinancial->half              = $request->half;
        $newFinancial->half_pdf          = $imgpath2;
        $newFinancial->third             = $request->third;
        $newFinancial->third_pdf         = $imgpath3;
        $newFinancial->anual_report      = $request->anual_report;
        $newFinancial->anual_report_pdf  = $imgpath4;
        $save_success = $newFinancial->save();

                
        if($save_success){
        
            return redirect()->action('FinancialController@index')->withErrors('Data has been stored successfully.');
        
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
        $financial = Financial::findOrFail($id);
        return view('admin.pages.financial.edit',compact('financial'));
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
        $financial = Financial::findOrFail($id);
        
        
        if ($file = $request->hasFile('first_pdf')) {
            $file = $request->file('first_pdf');
            $filename = time() . '1.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename);
            $imgpath = '/public/front/pdf/'.$filename;
        }else{
            $imgpath = $financial->first_pdf;
        }
        
        if ($file = $request->hasFile('half_pdf')) {
            $file = $request->file('half_pdf');
            $filename2 = time() . '2.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename2);
            $imgpath2 = '/public/front/pdf/'.$filename2;
        }else{
            $imgpath2 = $financial->half_pdf;
        }

        if ($file = $request->hasFile('third_pdf')) {
            $file = $request->file('third_pdf');
            $filename3 = time() . '3.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename3);
            $imgpath3 = '/public/front/pdf/'.$filename3;
        }else{
            $imgpath3 = $financial->third_pdf;
        }
        
        if ($file = $request->hasFile('anual_report_pdf')) {
            $file = $request->file('anual_report_pdf');
            $filename4 = time() . '4.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/pdf/';
            $file->move($destinationPath, $filename4);
            $imgpath4 = '/public/front/pdf/'.$filename4;
        }else{
            $imgpath4 = $financial->anual_report_pdf;
        }
        
        
        $financial->title        = $request->title;
        $financial->first        = $request->first;
        $financial->first_pdf    = $imgpath;
        $financial->half         = $request->half;
        $financial->half_pdf     = $imgpath2;
        $financial->third        = $request->third;
        $financial->third_pdf    = $imgpath3;
        $financial->anual_report      = $request->anual_report;
        $financial->anual_report_pdf  = $imgpath4;
        
        
        $save_success = $financial->update();
        
                
        if($save_success){
        
            return redirect()->action('FinancialController@index')->withErrors('Data has been stored successfully.');
        
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
        
        $financial = Financial::findOrFail($id);

        $financial->delete();

        return redirect()->back()->with('message', 'Your data has been deleted successfully');
        
    }
}
