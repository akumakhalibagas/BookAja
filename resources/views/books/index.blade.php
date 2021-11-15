@extends('layouts.app')

@section('content')
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-primary" href="{{ route('books.create') }}"> Tambah</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<!--    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Cover Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th width="280px">Action</th>
        </tr> -->
        <div class="row">
            @foreach ($books as $book)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul }}</h5>
                        <img src="{{ Storage::url($book->gambar) }}" class="img img-fluid" style="width: 300px; height: 300px;" alt="" />
                        <hr>
                        <form action="{{ route('books.destroy',$book->id) }}" method="POST">
    
                            <a class="btn btn-warning" href="{{ route('books.edit',$book->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection