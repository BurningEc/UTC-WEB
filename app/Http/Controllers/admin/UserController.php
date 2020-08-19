<?php

namespace App\Http\Controllers\admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('filter'));
        $parameter = $request->parameter;
        if ($query != '') {
            $users = User::with('roles')
                ->where($parameter, 'like', '%' . $query . '%')
                ->paginate(10);
            return view('admin.users.index', compact('users', 'parameter'));
        } else {
            $users = User::paginate(10);
            return view('admin.users.index', compact('users', 'parameter'));
        }
    }

    public function getCustomers()
    {
        $customers = Customer::orderBy('created_at','ASC')->paginate(10);
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('status','activo')
        ->orderBy('name','ASC')
        ->pluck('name','id');
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        $validate = $request->validated();
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->url_image = $this->UploadImage($request);
        $user->password = $this->generatePassword($request->username);
        $user->save();
        $role = Role::findById($request->id_rol);
        $user->assignRole($role);

        return redirect()->route('get-user');

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
        $user = User::find($id);
        $roles = Role::where('status','activo')
        ->orderBy('name','ASC')
        ->pluck('name','id');
        return view('admin.users.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPut $request, $id)
    {
        $validate = $request->validated();
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->status = $request->status;
        if($request->file('url_image')){
            $user->url_image = $this->UploadImage($request);
        }
       // $user->password = $this->generatePassword($request->ci);
        $user->save();

        $roles_name = $user->getRoleNames();
        $user->removeRole($roles_name[0]);

        $role = Role::findById($request->id_rol);
        $user->assignRole($role);

        return redirect()->route('get-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deactivate(Request $request)
    {
        $user = User::find($request->id);
        if($user->status =='inactivo'){
            $user->status = 'activo';
        }else{
            $user->status = 'inactivo';
        }
        $user->save();
        $users =User::all();
        return view('admin.users.tableUsers')->with('users',$users)->render();
    }

    public function generatePassword($password)
    {
        $user_password = Hash::make($password);
        return $user_password;
    }
    public function UploadImage(Request $request)
    {
        $url_file = "img/users/";
        if ($request->file('url_image')) {
            $image = $request->file('url_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path($url_file) . $name);
            return $url_file . $name;
        } else {
            return "#";
        }
    }
    public function getUsers()
    {
        $users = User::paginate(10);

        return view('admin.users.tableUsers',compact('users'))->render();
    }

    public function getApiUsers()
    {
        $users = User::where('status','activo')->paginate(10);

        return response()->json(['users'=>$users],200);
    }

}
