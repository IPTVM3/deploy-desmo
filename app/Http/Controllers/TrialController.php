<?php

namespace App\Http\Controllers;

use App\Trial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrialController extends Controller
{

    private $supports = array(
        "33751036712",
        "33751364857",
        "33000000000"
    );

    public function index(){
        $trials = Trial::orderBy('id','desc')->paginate(10);
        return view('dashboard.trials.index',compact('trials'));
    }

    public function store(Request $request){
 
        $lastTrial = Trial::all() -> last(); 
        $sup = "";
        if($lastTrial->support == 'ChaKib Mayen'){
            $sup = 'Aissam Ichibi';
        }else{
            $sup = 'ChaKib Mayen';
        }

        $trial = Trial::create([
            'email'=>$request['email'],
            'support'=> $sup,
            'created_at'=>  Carbon::now()
        ]);
      
  

     
 

        return redirect()->route('home');
    }

    public function done($id){
        $trial = Trial::find($id);
        $trial->status = 1;
        $trial->update();

        
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
 
        return redirect()->route('trials.index');
    }

    public function contact(){

        $lastTrial = Trial::all()->last(); 
        $count = 0;
        foreach ($this->supports as $value) {
            if ($value == $lastTrial->support) {
                unset($this->supports[$count]); 
                if(isset($this->supports[$count+1])){
                    $lastTrial->support = $this->supports[$count+1];
                }else{ 
                 $lastTrial->support = $this->supports[0];
                }
           }
           $count++;
        }
        
        $lastTrial->update();
         
        return redirect('https://api.whatsapp.com/send?phone='.$lastTrial->support);
    }
}
