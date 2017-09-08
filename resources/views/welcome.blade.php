@extends('layouts.app')

@section('content')
        <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
              <!-- Indicators -->
              <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol> -->

              <!-- Wrapper for slides -->
              <!-- <div class="carousel-inner">
                <div class="item active">
                  <img src="/image/6.jpg">
                </div>

                <div class="item">
                  <img src="/image/5.jpg">
                </div>

                <div class="item">
                  <img src="/image/4.jpg">
                </div>
              </div> -->

              <!-- Left and right controls -->
              <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>   -->
        <header>
          <div class="header-content">
              <div class="header-content-inner">
                  <h1 id="homeHeading">E-BOOK ONLINE PLN APD BALIKPAPAN</h1>
                  <h2>Free Download E-Book</h2>
                  <form class="form-group" action="" method="">
                      <input type="text" class="form-search" placeholder="SEARCH BOOK">
                      <button type="submit" class="btn btn-primary btn-form">SEARCH</button>
                  </form>
              </div>
          </div>
        </header>

      <div class="container-fluid">
        <h1 class="ebook-header">E-Book Terbaru</h1>
        <div class="row ebook">
            <div class="col-sm-2">
              <img src="/image/COVER-BUKU-PANDUAN-1.jpg" alt="">
            </div>
            <div class="col-sm-2">
              <img src="/image/cover-buku-pedoman.jpg" alt="">
            </div>
            <div class="col-sm-2">
              <img src="/image/cover-buku-laporan-tahunan-stmik-internal.jpg" alt="">
            </div>
            <div class="col-sm-2">
              <img src="/image/COVER-BUKU-PANDUAN-1.jpg" alt="">
            </div>
            <div class="col-sm-2">
              <img src="/image/cover-buku-pedoman.jpg" alt="">
            </div>
            <div class="col-sm-2">
              <img src="/image/cover-buku-laporan-tahunan-stmik-internal.jpg" alt="">
            </div>
        </div>    
      </div>
@endsection