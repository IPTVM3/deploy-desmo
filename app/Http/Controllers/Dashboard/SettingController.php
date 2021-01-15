<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\ActionController;
use App\SocialMedia;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:superadministrator, read_settings'])->only('index');
    }

    public function index(){
        $store = Store::first();
        return view('dashboard.settings.index',compact('store'));
    }

}
