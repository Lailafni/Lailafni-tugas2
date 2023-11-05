@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Film</h2>
    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul_film">Judul Film</label>
            <input type="text" name="judul_film" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_rilis">Tanggal Rilis</label>
            <input type="date" name="tanggal_rilis" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
