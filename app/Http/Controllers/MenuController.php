<?php

namespace App\Http\Controllers;

use App\Buku;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Session;

class MenuController extends Controller
{
    public function index()
    {
        return view('/buku/tambah-buku');
    }

    public function store(Request $request){
        $rules = array(
            'nama'                => 'required',
            'kategori'            => 'required',
            'penulis'             => 'required',
            'jumlah'              => 'required',
            'synopsis'            => 'required',
            'cover'               => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'file_buku'           => 'required|required|mimes:pdf',
            'username'            => 'required',
            'deskripsi'           => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
  
        // process the login
        if ($validator->fails()) {
            return Redirect::to('buku/tambah-buku')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
  
        else {
  
            // Carbon::parse(Input::get('tgl'));
            
            //$coverName = time().'.'.$request->cover->getClientOriginalExtension();
            //$request->cover->move(public_path('cover'), $coverName);

            //new $file_buku;
            //$fileName = time().'.'.$request->file_buku->getClientOriginalExtension();
            //$request->cover->move(public_path('file_buku'), $fileName);

            $coverName = time().'.'.Request::file('cover')->getClientOriginalExtension();
            Request::file('cover')->move(public_path('cover'), $coverName);

            $fileName = time().'.'.Request::file('file_buku')->getClientOriginalExtension();
            Request::file('file_buku')->move(public_path('file_buku'), $fileName);
  
            // store
            $buku = new Buku;
            $buku->judul                 = Input::get('nama');
            $buku->kategori_id          = Input::get('kategori');
            $buku->penulis              = Input::get('penulis');
            $buku->halaman              = Input::get('jumlah');
            $buku->synopsis             = Input::get('synopsis');
            $buku->cover                = $coverName;
            $buku->file_buku            = $fileName;
            $buku->user_id              = Input::get('username');
            $buku->deskripsi            = Input::get('deskripsi');

            $buku->save();
  
            // redirect
            Session::flash('message_success', 'Berhasil Menambahkan Buku');
            return Redirect::to('buku/tambah-buku');
        }
    }

    public function getBuku(){
        $buku = Buku::get();
        return view('welcome', ['buku' => $buku]);
    }
}