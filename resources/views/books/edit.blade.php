@extends('layouts.app')

@section('content')

<div class="card col-lg-6" style="margin: auto; padding: 15px">
<div class="container mt-2">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}" enctype="multipart/form-data"> Back</a>
        </div>
    </div>
</div>

@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif

<form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul buku:</strong>
                <input type="text" name="judul" value="{{ $book->judul }}" class="form-control" placeholder="Judul buku">
                @error('judul')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengaran Buku:</strong>
                <input type="text" name="pengarang" value="{{ $book->pengarang }}" class="form-control" placeholder="Pengarang Buku">
                @error('pengarang')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit Buku:</strong>
                <input type="text" name="penerbit" value="{{ $book->penerbit }}" class="form-control" placeholder="Penerbit Buku">
                @error('penerbit')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
       
        
        <button type="submit" class="btn btn-success ml-3">Submit</button>
      
    </div>

</form>
</div>
</div>
@endsection()