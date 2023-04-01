<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = category::all();
        return view('kategori.k_index', compact('categories'));
        // 
    }

    public function dashindex()
    {
        //
        $categories = category::all();
        return view('dashboard', compact('categories'));
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //
        Session::flash('nama_kategori', $request->nama_kategori);
        
        // validasi
        $request->validate([
            'nama_kategori' => 'required',
        ],[
            // pesan validasi
            'nama_kategori.required' => 'kategori harus diisi',
        ]);

        // validasi data jika sudah ada di database
        $existingData = category::where('nama_kategori', $request->input('nama_kategori'))->first();
            if ($existingData) {
        $request->session()->flash('error', 'Data sudah ada.');
            return redirect()->back();
        }

        $categories =[
            'nama_kategori' =>$request->nama_kategori,
        ];

        category::create($categories);    
        return redirect()->to('category')->with('success', 'Berhasil menambahkan data');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $categories =[
            'nama_kategori' =>$request->nama_kategori,
        ];
        category::where('id',$id)->update($categories);
        return redirect()->to('category')->with('success', 'Berhasil melakukan update data kategori');
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
        category::where('id', $id)->delete();
        return redirect()->to('category')->with('success', 'Berhasil melakukan hapus category');
    }
}
