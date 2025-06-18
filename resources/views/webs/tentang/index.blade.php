@extends('layouts.web')

@section('tentang')

menu-active

@endsection

@section('header')

<h1 class="text-white">
    Tentang Kami
</h1>
<p>Dalam pengajaran modern, mungkin tidak ada satu pun lompatan ke depan selain pembangunan dan memberikan cara yang inovasi.</p>
<div class="link-nav">
    <span class="box">
        <a href="/">Home </a>
        <i class="lnr lnr-arrow-right"></i>
        <a href="{{ route('tentang') }}">Tentang</a>
    </span>
</div>
@endsection

@section('content')
<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <img src="{{asset('pengembang.jpeg')}}" alt="Girl in a jacket" width="200">
            </div>
            <div class="col-lg-6 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">

                    <div class="contact-details">
                        <h5>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: SONOAKHIMANTAPTIUS GULO</h5>

                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">

                    <div class="contact-details">
                        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : sonoakhimantaptius.gulo@gmail.com</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">

                    <div class="contact-details">
                        <p>whatsapp&nbsp; : 0823-6117-6532</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">

                    <div class="contact-details">
                        <p>Pendidik ini Lahir di Gunungsitoli, 14 Mei 2000 anak kedua dari bapak Atosokhi Gulo mahasiswa di Fakultas Teknik jurusan Pendidikan Teknik Elektro Tahun 2018 Universitas Negeri Medan, pernah bersekolah di SDN 075062 Doli-doli (2006-2012), SMP Negeri 2 Mandrehe (2012-2015), SMKN Binaan Provsu Medan(20015-2018).   </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->
@endsection
