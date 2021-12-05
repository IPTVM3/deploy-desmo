<?php

namespace App\Http\Controllers;

use App\Trial;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrialController extends Controller
{

    private $contacts = [];

    public function __construct()
    {

                
                 $store = Store::first();  
                 $this->contacts = Trial::all(); 
 

    }

    public function index(){
        $trials = Trial::orderBy('id','desc')->paginate(10);
        return view('dashboard.trials.index',compact('trials'));
    }

    public function store(Request $request){
        /*
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
      
  

     
 
            */
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
 
       
        $store = Store::first();

        $mail = "";
        $numero = "";

        foreach ($this->contacts as $key => $value){
 

            if ($value->id == $store->apartement) {
               
                        unset($this->contacts[$key]); 
                        if(isset($this->contacts[$key+1])){
                            $store->apartement = $this->contacts[$key+1]->id;
                        }else{ 
                         $store->apartement = $this->contacts[0]->id;  
                        }
                        $store->update();
                        $mail = $value->email;
                        $numero = $value->support;
                        break;
                  

            }
        }


        return redirect('https://api.whatsapp.com/send?phone='.$numero);
          
    }

}
