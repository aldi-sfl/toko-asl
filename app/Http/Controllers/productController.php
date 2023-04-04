<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        $product = product::all();
        return view('produk.p_index', compact('product','categories'));
    }
    
    public function dashindex()
    {
        $categories = category::all();
        $product = product::all();
        return view('dashboard', compact('product','categories'));
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
        Session::flash('nama_produk', $request->nama_produk);
        Session::flash('deskripsi', $request->deskripsi);
        Session::flash('image', $request->image);
        Session::flash('harga', $request->harga);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('category_id', $request->category_id);

    $validatedData = $request->validate([
        'nama_produk' => 'required|max:50',
        'deskripsi' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
        'harga' => 'required|numeric',
        'jumlah' => 'required|numeric',
        'category_id' => 'required|exists:categories,id'
    ],[
        'nama_produk' => 'produk harus diisi',
        'deskripsi' => 'deskripsi harus diisi',
        'image' => 'gambar tidak boleh kosong',
        'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
        'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
        'harga' => 'harga harus diisi',
        'jumlah' => 'jumlah harus diisi',
        'category_id' => ' kategori harus diisi',
        
    ]);

    $prefix = 'pdc-';
    $fileName = $prefix . time() . '.' . $request->image->extension();
    $request->image->storeAs('public/p_images', $fileName);


    $product = new Product;     
    $product->nama_produk = $validatedData['nama_produk'];
    $product->deskripsi = $validatedData['deskripsi'];
    $product->image = $fileName;
    $product->harga = $validatedData['harga'];
    $product->jumlah = $validatedData['jumlah'];
    $product->category_id = $validatedData['category_id'];
    $product->save();   
    

    return redirect()->back('product.index')->withInput()->with('success', 'produk berhasil ditambahkan');
        
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
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:50',
            'deskripsi' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ],[
            'nama_produk' => 'produk harus diisi',
            'deskripsi' => 'deskripsi harus diisi',
            'image.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG',
            // 'image.max' => 'Ukuran file tidak boleh lebih dari 7 MB.',
            'harga' => 'harga harus diisi',
            'jumlah' => 'jumlah harus diisi',
            'category_id' => ' kategori harus diisi',
            
        ]);
    
        $product = Product::findOrFail($id);     
        $product->nama_produk = $validatedData['nama_produk'];
        $product->deskripsi = $validatedData['deskripsi'];
        $product->harga = $validatedData['harga'];
        $product->jumlah = $validatedData['jumlah'];
        $product->category_id = $validatedData['category_id'];
    
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/p_images/' . $product->image);
    
            // Store new image
            $prefix = 'pdc-';
            $fileName = $prefix . time() . '.' . $request->image->extension();  
            $request->image->storeAs('public/p_images', $fileName);
            $product->image = $fileName;
        }
    
        $product->save();   
    
        return redirect()->to('product')->with('success', 'produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete('public/p_images/' . $product->image);
        }
    
        $product->delete();
    
        return redirect()->to('product')->with('success', 'Berhasil melakukan hapus ');
    }
}
