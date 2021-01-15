<?php

namespace App\Http\Controllers\Dashboard;

use App\Categorie;
use App\Http\Controllers\ActionController;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $categories = Categorie::paginate(10);
        return view('dashboard.categories.index',compact('categories'));
    }

    public function create(){
        return view('dashboard.categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'max:2048',
        ]);

        $file_name = null;
        $exept_fields = ['_token', '_method'];
        if ($request['img'] == null) {
            $exept_fields[5] = 'img';
        } else {
            $file_name = ActionController::imageUpload($request, 'img');
        }


        $request_data = $request->except($exept_fields);
        if ($file_name) $request_data['img'] = $file_name;


        $categorie = Categorie::create($request_data);

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('categories.index');
    }

    public function edit($id){
        $categorie = Categorie::find($id);
        return view('dashboard.categories.edit',compact('categorie'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'max:2048',
        ]);


        $exept_fields = ['_token', '_method'];
        $request_data = $request->except($exept_fields);

        Categorie::find($id)->update($request_data);


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Categorie::find($id)->delete();

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.deleted_success'));
        return redirect()->route('categories.index');
    }
}
