@extends('layouts.frontend')
@section('description','Lab Rekayasa Perangkat Lunak Fakultas Ilmu Komputer Universitas Jember')
@section('title','Beranda')
@section('content')
<div class="container-fluid p-0">
    <div class="bg-1" id="home-section">
      <div class="row no-gutters">
        <div class="landing mx-5 col-10 col-sm-8 col-md-8">
          <h1>Selamat Datang!</h1>
          <h5>di laman resmi</h5>
          <h1>Laboratorium Rekayasa Perangkat Lunak</h1>
          <h5>Fakultas ilmu komputer Universitas Jember</h5>
        </div>
      </div>
      <div class="row no-gutters">
        <div class=" mx-5 col-10 col-sm-10 col-md-10">
          <a href="#about-section"><button type="button" class="btn btn-home mt-3">Tentang Kami</button></a>
        </div>
      </div>
    </div>
    <div class="row no-gutters justify-content-center py-5 bg-3 text-white" id="about-section">
      <div class="col-8 col-sm-8 col-md-8 text-center">
        <h1>Tentang Kami</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row no-gutters justify-content-center bg-2 py-5" id="contact-section">
      <div class="col-10 col-sm-8 col-md-6">
        <h1 class="text-center">Hubungi Kami</h1>
        <form>
          <div class="form-group">
            <label for="inputNama">Nama</label>
            <input type="text" class="form-control "id="inputNama" placeholder="Masukkan Nama anda...">
          </div>
          <div class="form-group">
            <label for="inputNama">Nama</label>
            <textarea class="form-control" rows="8" cols="80" placeholder="Masukkan pesan anda..."></textarea>
          </div>
          <button type="submit" class="btn btn-masuk btn-outline-dark btn-hover">Kirim</button>
        </form>
      </div>
    </div>
@endsection