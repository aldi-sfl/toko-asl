<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')) {
            $request->validate([
                'nama_kategori' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ],[
                // pesan validasi
                'nama_kategori.required' => 'kategori harus diisi',
                'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
                'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
            ]);
        
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/k_images', $fileName);
        } else {
            $request->validate([
                'nama_kategori' => 'required',
            ],[
                // pesan validasi
                'nama_kategori.required' => 'kategori harus diisi',
            ]);
        
            $fileName = null; // set filename to null if no image is inserted
        }

        // validasi data jika sudah ada di database
        $existingData = category::where('nama_kategori', $request->input('nama_kategori'))->first();
            if ($existingData) {
        $request->session()->flash('error', 'Data sudah ada.');
            return redirect()->back();
        }
       

        $categories =[
            'nama_kategori' =>$request->nama_kategori,
            'image' => $fileName,
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
        $categories = Category::find($id);
        Session::flash('nama_kategori', $request->nama_kategori);

        if ($request->hasFile('image')) {
            $request->validate([
                'nama_kategori' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ],[
                'nama_kategori.required' => 'kategori harus diisi',
                'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
                'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
            ]);
        
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/k_images', $fileName);

            // delete old image if exists
            if ($categories->image && Storage::exists('public/k_images/' . $categories->image)) {
                Storage::delete('public/k_images/' . $categories->image);
            }

            $categories->image = $fileName;
        } else {
            $request->validate([
                'nama_kategori' => 'required',
            ],[
                'nama_kategori.required' => 'kategori harus diisi',
            ]);

            $categories->image = $categories->image;
        }

        $categories->nama_kategori = $request->input('nama_kategori');
        $categories->save();

        return redirect()->to('category')
            ->with('success','Kategori berhasil diupdate.');
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
        $categories = Category::find($id);
        if ($categories->image && Storage::exists('public/k_images/' . $categories->image)) {
            Storage::delete('public/k_images/' . $categories->image);
        }

        $categories->delete();
        return redirect()->to('category')->with('success', 'Berhasil melakukan hapus category');
    }
}
