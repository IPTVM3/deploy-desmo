<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\ActionController;
use App\Notifications\TaskCompleted;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Rules\MatchOldPassword;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['ability:superadministrator,read_users'])->only(['index', 'show']);
        $this->middleware(['ability:superadministrator,create_users'])->only('create');
        $this->middleware(['ability:superadministrator,update_users'])->only(['edit', 'changestatus', 'export', 'print']);
        $this->middleware(['ability:superadministrator,delete_users'])->only('destroy');
    }

    public function index(Request $request)
    {
        /*
        $users = User::query()->when($request, function ($q) use ($request) {
            if ($request->search != "" and $request->role != "" and $request->status != "")
                return $q->where('name', 'like', '%' . $request->search . '%')
                    ->orwhere('first_name', 'like', '%' . $request->search . '%')
                    ->orwhere('last_name', 'like', '%' . $request->search . '%')
                    ->when($request, function ($s) use ($request) {
                        return $s->whereRoleIs($request->role)->when($request, function ($r) use ($request) {
                            return $r->where('activeAccount', $request->status);
                        });
                    });

            if ($request->search != "" and $request->role != "")
                return $q->where('name', 'like', '%' . $request->search . '%')
                    ->orwhere('first_name', 'like', '%' . $request->search . '%')
                    ->orwhere('last_name', 'like', '%' . $request->search . '%')
                    ->when($request, function ($s) use ($request) {
                        return $s->whereRoleIs($request->role);
                    });

            if ($request->role != "" and $request->status != "")
                return $q->whereRoleIs($request->role)
                    ->when($request, function ($s) use ($request) {
                        return $s->where('activeAccount', $request->status);
                    });

            if ($request->search != "" and $request->status != "")
                return $q->where('name', 'like', '%' . $request->search . '%')
                    ->orwhere('first_name', 'like', '%' . $request->search . '%')
                    ->orwhere('last_name', 'like', '%' . $request->search . '%')
                    ->when($request, function ($s) use ($request) {
                        return $s->where('activeAccount', $request->status);
                    });


            if ($request->role != "")
                return $q->whereRoleIs($request->role);

            if ($request->status != "")
                return $q->where('activeAccount', $request->status);
            //Error Here ------------------------------------------------------------------->
            if ($request->search != "")
                return $q->where('id', '!=', Auth::id())
                    ->when($request, function ($s) use ($request) {
                        return $s->where('name', 'like', '%' . $request->search . '%')
                            ->orwhere('first_name', 'like', '%' . $request->search . '%')
                            ->orwhere('last_name', 'like', '%' . $request->search . '%');
                    });
        })
            ->where('id', '!=', 2)
            ->where('id', '!=', Auth::id())
            ->paginate(10);
        */

        if ($request['role']) {

            $users = User::whereHas(
                'roles', function ($q) use ($request) {
                 return  $q->where('name', $request['role']);
            }
            )->where('id', '!=', Auth::user()->id)->paginate(10);

        } elseif ($request['status']) {
            $users = User::whereHas(
                'roles', function ($q) use ($request) {
                return $q->where('name', 'administrator')
                    ->orwhere('name', 'superadministrator')
                    ->when($request, function ($s) use ($request) {
                    return $s->where('activeAccount', $request['status']);
                });
            })->paginate(10);

        } else {
            $users = User::whereHas(
                'roles', function ($q) {
                $q->where('name', 'administrator')->orwhere('name', 'superadministrator');
            }
            )->where('id', '!=', Auth::user()->id)->paginate(10);
        }


        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'role' => 'required',
            'password' => 'required|confirmed',
            'picture' => 'max:2048',
        ]);

        $file_name = null;
        $exept_fields = ['password', '_token', '_method', 'role', 'permissions'];
        if ($request->picture == null) {
            $exept_fields[5] = 'picture';
        } else {
            $file_name = ActionController::imageUpload($request, 'picture');
        }


        $request_data = $request->except($exept_fields);
        $request_data['password'] = bcrypt($request->password);
        if ($file_name) $request_data['picture'] = $file_name;


        $user = User::create($request_data);
        $user->attachRole($request->role);
        if ($request->permissions && $request->role != 'superadministrator') $user->syncPermissions($request->permissions);

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.added_success'));
        return redirect()->route('users.index');

    }

    public function show(String $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            'role' => 'required',
        ]);


        $exept_fields = ['_token', '_method', 'role', 'permissions'];
        $request_data = $request->except($exept_fields);


        $user->update($request_data);
        $user->detachRoles(['superadministrator', 'administrator', 'user']);
        $user->attachRole($request->role);


        if ($request->permissions && $request->role != 'superadministrator') $user->syncPermissions($request->permissions);


        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.deleted_success'));
        return view('dashboard.index');
    }

    public function changestatus(String $id)
    {
        $user = User::findOrFail($id);
        $newStatus = 0;
        if ($user->activeAccount == 0) $newStatus = 1;
        $user->fill(['activeAccount' => $newStatus]);
        $user->save();
        session()->flash('noty_color', 'success');
        session()->flash('noty_message', __('site.edited_success'));
        return view('dashboard.index');
    }

    public function export()
    {
        return Excel::download(User::all(), 'users.xlsx');
    }

    public function profile()
    {

        return view('dashboard.users.profile');
    }

    public function profile_edit(Request $request)
    {

        if ($request['password']) {
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);

            //NOTIFICATION
            NotificationController::password_changed_notification();

            Auth::user()->fill(['password' => bcrypt($request['password'])]);
            Auth::user()->save();

            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.edited_success'));

        } else {

            $file_name = null;
            $old_image = null;
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'min:11|numeric',
                'gender' => 'required',
                'picture' => 'max:2048',
            ]);


            $exept_fields = ['_token', '_method'];


            if ($request->picture == null) {
                $exept_fields[2] = 'picture';
            } else {
                $file_name = ActionController::imageUpload($request, 'picture');
                $old_image = Auth::user()->picture;
            }


            $request_data = $request->except($exept_fields);
            if ($file_name) $request_data['picture'] = $file_name;

            Auth::user()->update($request_data);
            if($old_image) ActionController::unlinkImage($old_image);
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.edited_success'));


        }

        return redirect()->route('profile.show');
    }

    ///CUSTOMETS
    public function index_customer(Request $request)
    {


        $users = User::whereRoleIs('user')->paginate(10);

        return view('dashboard.users.customers.index', compact('users'));
    }
}
