@extends('layouts.app')

@section('title', 'Friends')

    @section('content')
        
    <form action="/friends/{{ $friend['id'] }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ? old('nama') : $friend['nama'] }}">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="no_telp" class="form-label">No Telp</label>
        <input type="text" class="form-control" id="no_tlp" name="no_telp" value="{{ old('no_tlp') ? old('no_tlp') : $friend['no_telp'] }}">
        @error('no_tlp')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $friend['alamat'] }}">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection