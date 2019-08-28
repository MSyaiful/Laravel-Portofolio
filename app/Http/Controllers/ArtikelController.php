<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\kategori;
use App\Comment;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kate = Kategori::all();
        $artikel = Artikel::orderBy('id','DESC')->get();
        return view('artikel')->withData($artikel)->withKate($kate);

    }

    public function get()
    {
        $kate = Kategori::all();
        $artikel = Artikel::all();
        $tag = Tag::all();
        return view('menuartikel')->withData($artikel)
                                  ->withKate($kate)
                                  ->withTag($tag);
    }

    public function isiartikel($id)
    {
        $artikel = Artikel::find($id);
        $artikel2 = comment::orderBy('id','deskripsi')->where('id_com',$id)->get();
        $artikel3 = DB::table('artikel_tag')->select('tag_id')->where('artikel_id',$id)->get();
        $namatag = DB::select("SELECT tag.nama_tag from tag, artikel_tag
        where artikel_tag.artikel_id = $id AND artikel_tag.tag_id = tag.id");
        
        return view('isiartikel')->withartikel($artikel)
                                 ->withartikel2($artikel2)
                                 ->withartikel3($artikel3)
                                 ->withNama($namatag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        $kate = Kategori::all();
        $tag = Tag::all();
        return view('tambahartikel')->withKate($kate)
                                    ->withTag($tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_save(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->author = $request->author;
        $file = $request->foto;

        $nama = $file->getClientOriginalName();
        $file->move('uploadimg/', $nama);
        $artikel->gambar = $nama;

        $artikel->save();
        $artikel->tag()->sync($request->tag, false);
    	return redirect('menuartikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $artikel2 = Comment::where('id_com',$id);
        $artikel2->delete();

        $artikel = Artikel::find($id);
        $artikel->delete();

        $artikel3 = Tag::where('id',$id);
        $artikel3->delete();
    	return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function change($id)
    {
        $artikel = Artikel::find($id); 
        $kate = Kategori::all();
        $tag = Tag::all();
        return view('editartikel')->withArtikel($artikel)
                                  ->withKate($kate)
                                  ->withTag($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel = Artikel::find($request->id);
        $artikel->judul = $request->judul;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->author = $request->author;
        $file = $request->foto;

        $nama = $file->getClientOriginalName();
        $file->move('uploadimg/', $nama);
        $artikel->gambar = $nama;

        $artikel->save();
        $artikel->tag()->sync($request->tag);
    	return redirect('menuartikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
