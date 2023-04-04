<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function regindex()
    {
        # code..
        // return view('dashboard');
    }

    public function regstore(Request $request)
    {
        # code...
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
        return redirect('/')->with('success','akun berhasil dibuat');

    }


    public function logindex()
    {
        # code...
        $categories = category::all();
        $product = product::all();
        session()->flash('info', 'Silahkan login terlebih dahulu');
        return view('dashboard', compact('product','categories'));
    
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)) {
            return redirect('/')->with('success', 'Berhasil login');
        } else {
            return redirect('/')->with('error','Username dan password yang dimasukkan tidak valid');
        }

    }

    public function logout()
    {
        # code...
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout');
    }

    public function userindex()
    {
        # code...
        $users = user::all();
        return view('user.setting', compact('users'));
    }

    public function userstore(Request $request)
    {
        // if ($request->hasFile('image')) {
        //     $request->validate([
        //         'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
        //     ],[
        //         // pesan validasi
        //         'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
        //         'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
        //     ]);
        
        //     $fileName = time() . '.' . $request->image->extension();
        //     $request->image->storeAs('public/profile_pic', $fileName);
        // } else {
        //     $request->validate([
        //         'image' => 'required',
        //     ],[
        //         // pesan validasi
        //         'image.required' => 'Foto harus diisi',
        //     ]);
        
        //     $fileName = null; // set filename to null if no image is inserted
        // }
        // $user = Auth::user();
        // $users =[
            
        //     'image' => $fileName,
        // ];

        // user::save($users);
        // return redirect()->to('dashboard')->with('success', 'Berhasil menambahkan data');
    }
    
    public function userupdate(Request $request)
    {
        # code...
        // Validate the uploaded image
    // $request->validate([
    //     'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
    // ], [
    //     'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
    //     'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
    // ]);

    // Get the current user
    $user = Auth::user();

    // Handle the uploaded image
    if ($request->hasFile('image')) {
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/profile_pic', $fileName);
        $user->image = $fileName;
    } else {
        $user->image = null;
    }

    // Save the user data
    $user->save();

    return redirect()->to('/')->with('success', 'Berhasil mengupdate data');

    }
}
