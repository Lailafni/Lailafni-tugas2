@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Film</h2>
    <a href="{{ route('films.create') }}" class="btn btn-primary">Tambah Film</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Judul Film</th>
            <th>Genre</th>
            <th>Tanggal Rilis</th>
            <th>Aksi</th>
        </tr>
        @foreach ($films as $film)
            <tr>
                <td>{{ $film->id }}</td>
                <td>{{ $film->judul_film }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->tanggal_rilis }}</td>
                <td>
                    <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
