<?php

namespace App\Http\Controllers\Dashboard;

use App\Frais;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FraisController extends Controller
{
    public function index(){
        $frais = Frais::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.frais.frais',compact('frais'));
    }

    public function create(){
        return view('dashboard.frais.create');
    }

    public function store(Request $request){
        $frais = Frais::create();
        $frais->user_id = \auth()->user()->name;
        $frais->title = $request['title'];
        $frais->type = $request['type'];
        $frais->description = $request['description'];
        $frais->value = $request['price'];
        $frais->created_at = Carbon::now();
        $frais->update();

        
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('frais.index');
    }
}
