@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Film</h2>
    <form method="POST" action="{{ route('films.update', $film->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul_film">Judul Film</label>
            <input type="text" name="judul_film" class="form-control" value="{{ $film->judul_film }}" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ $film->genre }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_rilis">Tanggal Rilis</label>
            <input type="date" name="tanggal_rilis
