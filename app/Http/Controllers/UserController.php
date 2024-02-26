<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private const DEFAULT_NAME = 'Default Name';
    private const USER_KEY = 'user';
    private int $default_role_id;
    private $roles;

    public function __construct(Role $role)
    {
        $this->roles = Role::all();
        $this->default_role_id = $role->where('key', $this::USER_KEY )->value('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            return view('settings.createUser', ['roles' => $this->roles]);
        }else{
            return redirect()->route('home');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', Rules\Password::defaults()],
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $this->default_role_id,
                'password' => Hash::make($request->password),
            ]);

            return redirect('settings');
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(int $id)
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            $user = User::find($id);
            return view('settings.editUser')->with(['user' => $user, 'roles' => $this->roles]);
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
//        dd($this->default_role_id);
        if(Auth::user() && Auth::user()->isAdmin()) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'password' => ['nullable','string', Rules\Password::defaults()],
            ]);

            User::find($id)->update([
                'name' => $request->has('name') ? $request->input('name') : $this::DEFAULT_NAME,
                'role_id' => $request->has('role_id') ? $request->input('role_id') : $this->default_role_id,
            ]);

            if($request->input('password') != null){
                User::find($id)->update([
                    'password' => Hash::make($request->input('password'))
                ]);
            }
            return redirect()->back();
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            User::find($id)->delete();
            return redirect()->back();
        }else{
            return redirect()->route('/');
        }
    }
}
