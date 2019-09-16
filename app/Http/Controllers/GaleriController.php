<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Exports\GaleriExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use DataTables;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function api()
    {
        return response(Galeri::all());
    }
    
    public function get()
    {

        $get = Galeri::all();
        return view('menugaleri')->withGaleri($get);

    }

    public function get1()
    {

        $get = Galeri::all();
        return view('galeri')->withGaleri($get);

    }

    public function get2()
    {

        $get = Galeri::all();
        return view('tambahgaleri')->withGaleri($get);

    }

    public function tbh(Request $req)
    {

        $tbh = new Galeri;
        $tbh->author = $req->author;
        $file = $req->file('gambar');

        $this->validate($req, ['gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
        $fnm  = rand() . '.'. $file->getClientOriginalName();
        $req->file('gambar')->move('uploadimg/',$fnm);
        $tbh->gambar = $fnm;
        $tbh->save();
        return redirect('galeri');

    }

    public function save()
    {
        $galeri = Galeri::all();
        return view('tambahgaleri');
    }

    public function delete($id)
    {
        $galeri = Galeri::find($id); 
    	$galeri->delete();
    	return back();
    }

    public function excel()
    {
        return Excel::download(new GaleriExport, 'Data_Galeri.xlsx');
    }

    public function pdf()
    {
    	$galeri = Galeri::all();
 
    	$pdf = PDF::loadview('galeri_pdf',['galeri'=>$galeri]);
    	return $pdf->download('data-galeri.pdf');
    }

    public function json()
    {
        return Datatables::of(Galeri::all())->make(true);
    }

}
