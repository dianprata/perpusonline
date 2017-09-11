@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">TAMBAH BUKU</div>

                    <div class="panel-body">
                        <form action="/buku/store" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="nama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">       
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                                <div class="col-sm-9">
                                    <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Kategori">       
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="penulis" class="col-sm-2 control-label">Penulis</label>
                                <div class="col-sm-9">
                                    <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Penulis">  
                                </div>     
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-2 control-label">Halaman</label>
                                <div class="col-sm-9">
                                    <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Halaman">
                                </div>                                       
                            </div>
                            <div class="form-group">
                                <label for="synopsis" class="col-sm-2 control-label">Synopsis</label>
                                <div class="col-sm-9">
                                    <input type="text" id="synopsis" name="synopsis" class="form-control" placeholder="Synopsis">
                                </div>                                       
                            </div>
                            <div class="form-group">
                                <label for=cover"" class="col-sm-2 control-label">Cover Buku</label>
                                <div class="col-sm-9">
                                    <input type="file" id="cover" name="cover" class="form-control" placeholder="Cover Buku">       
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-sm-2 control-label">File Buku</label>
                                <div class="col-sm-9">
                                    <input type="file" id="file" name="file_buku" class="form-control" placeholder="File Buku">       
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">       
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Buku">       
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Tambah Buku
                                    </button>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection