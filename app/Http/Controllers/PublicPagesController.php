<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Press;
use App\Employee;
use App\Financial;
use App\Career;
use App\Resume;
use App\Director;
use App\Bord;

class PublicPagesController extends Controller
{
    
    public function getIndex()
    {
        return view('front.pages.home');
    }
    
    
    public function getAbout()
    {
        return view('front.pages.about');
    }
    
    
    public function getPress()
    {
        $press = Press::latest()->get();
        
        return view('front.pages.press',compact('press'));
    }
    
    public function getPressSingle($slug)
    {
        $press = Press::where('slug','=',$slug)->first();
        
        return view('front.pages.press_single',compact('press'));
    }
    
    
    public function getContact()
    {
        return view('front.pages.contact');
    }
    

    
    
    public function getServicesdetails()
    {
        return view('front.pages.servicesdetails');
    }
    
    
    public function getFuwangfoods()
    {
        return view('front.pages.fuwangfoods');
    }
    
    
    
    public function getFuwangBeverage()
    {
        return view('front.pages.fuwangbeverage');
    }
    
    
    public function getChocolatediv()
    {
        return view('front.pages.chocolatediv');
    }
    
    
    public function getDrinksdiv()
    {
        return view('front.pages.chocolatediv');
    }
    
    
    
    public function getProductDescription($slug)
    {
        $product = Product::where('slug','=',$slug)->first();
        return view('front.pages.product_description',compact('product'));
    }
    
    
    
    public function getFinancial()
    {
        $financials = Financial::orderBy('id', 'desc')->paginate(10);
        
        // return $financials;
        
        return view('front.pages.financial',compact('financials'));
    }
    
    
    public function Q11financial()
    {
        return view('front.pages.Q11financial');
    }
    
    
    
    public function Q12financial($id)
    {
        $financial = Financial::find($id);
        // return $financial;
        return view('front.pages.Q12financial',compact('financial'));
    }
    
    public function Q13financial()
    {
        return view('front.pages.Q13financial');
    }
    
    public function Q14financial()
    {
        return view('front.pages.Q14financial');
    }
    
    
    
    public function Q15financial()
    {
        return view('front.pages.Q15financial');
    }
    
    public function Q16financial()
    {
        return view('front.pages.Q16financial');
    }
    
    
    public function prices()
    {
        return view('front.pages.prices');
    }
    
    public function commercial()
    {
        return view('front.pages.commercial');
    }
    
    
    
    public function shareholding()
    {
        return view('front.pages.shareholding');
    }
    
    
    public function BoardOfDirectors()
    {
        $bord = Bord::all();
        
        return view('front.pages.BoardOfDirectors',compact('bord'));
        
    }
    
    
    
    public function CorporateGovernance()
    {
        return view('front.pages.CorporateGovernance');
    }
    
    
    
    public function ContactPersonForInestors()
    {
        return view('front.pages.contact_person');
    }
    
    
    public function TopManagement()
    {
        $topmanagements = Director::where('ctg','=','A')->latest()->get();
        
        return view('front.pages.TopManagement',compact('topmanagements'));
    }
    
    public function AuditCommittee()
    {
        $ctgC = Director::where('ctg','=','C')->get();
        
        return view('front.pages.audit_committee',compact('ctgC'));
    }
    
    public function Nomination()
    {
        $ctgD = Director::where('ctg','=','D')->get();
        
        return view('front.pages.nomination',compact('ctgD'));
        
    }
    
        
    
    public function getEmployee()
    {
        $ctgA = Career::where('ctg','A')->latest()->take(1)->get();
        $ctgB = Career::where('ctg','B')->latest()->take(1)->get();
        return view('front.pages.employee',compact('ctgA','ctgB'));
    }
    
    public function ResuumeBox(Request $request)
    {
        
        $this->validate($request, [
            'recruitment' => 'required',
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'mob_number' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'cv' => 'required'
        ]);
        
        
        if ($file = $request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '1.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/front/cv/';
            $file->move($destinationPath, $filename);
            $cv = '/public/front/cv/'.$filename;   
        }else{
            $cv = "#";
        }
        
        $request['cv'] = $cv;
        
        // return $request->all();
        
        $resume = Resume::create($request->all());
        
        return back();
        
    }
    
    
}
