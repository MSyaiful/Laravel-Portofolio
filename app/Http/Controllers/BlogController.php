<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function getData()
    {
    	$blog =Blog::all();
    	return view('home', ['blog' => $blog]);
    }
    public function delete($id)
    {
    	$blog = Blog::find($id); 
    	$blog->delete();
    	return back();
    }
    public function simpan()
    {
    	return view('input');
    }
    public function proses_simpan(Request $request)
    {
    	$blog = new Blog;
    	$blog->judul = $request->judul;
    	$blog->deskripsi = $request->deskripsi;
    	$blog->save();
    	return redirect('/Blog');
    }
    public function edit($id)
    {
    	$blog = Blog::find($id); 

    	return view('edit', ['blog' => $blog] );
    }
    public function update(Request $request)
    {
    	$blog = Blog::find($request->id);
    	$blog->judul = $request->judul;
    	$blog->deskripsi = $request->deskripsi;
    	$blog->save();

    	return redirect('/Blog');

    }
}

