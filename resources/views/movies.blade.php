@extends('layouts.main')

@section('title', 'Movies')

@section('section-title', 'Movies')

@section('main')
    <h1>MOVIES</h1>
    <section class="card">
        @forelse ($movies as $m)
            <h3>Titolo: {{ $m['title'] }}</h3>
            <div>Titolo originale: {{ $m['original_title'] }}</div>
            <div>Lingua: {{ $m['nationality'] }}</div>
            <div>Data di pubblicazione: {{ $m['date'] }}</div>
            <div>Voto: {{ $m['vote'] }}</div>
        @empty
            <h3>Non ci sono libri da mostrare</h3>
        @endforelse
    </section>
@endsection
