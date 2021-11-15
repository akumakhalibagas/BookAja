@extends('layouts.app')

@section('content')
<div class="card col-lg-6" style="margin: auto; padding: 15px">
<div class="container mt-2">
  
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left mb-2">
              <h2>Tambah Buku</h2>
          </div>
          <div class="pull-right mb-2">
              <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
          </div>
      </div>
  </div>
     
    @if(session('status'))
      <div class="alert alert-success mb-1 mt-1">
          {{ session('status') }}
      </div>
    @endif
     
  <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Judul Buku:</strong>
                  <input type="text" name="judul" class="form-control" placeholder="Judul Buku">
                 @error('judul')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Pengarang Buku:</strong>
                  <input type="text" name="pengarang" class="form-control" placeholder="Pengarang Buku">
                 @error('pengarang')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Penerbit Buku:</strong>
                  <input type="text" name="penerbit" class="form-control" placeholder="Penerbit Buku">
                 @error('penerbit')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
              </div>
          </div>
  
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Cover Buku:</strong>
                   <input type="file" name="gambar" class="form-control" placeholder="Gambar Buku">
                  @error('gambar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
              </div>
          </div>
          <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
     
  </form>
</div>
@endsection