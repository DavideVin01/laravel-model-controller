@extends('layouts.main')

@section('title', 'Movies')

@section('section-title', 'Movies')

@section('main')
    <h1>MOVIES</h1>
    @forelse ($movies as $m)
        <section class="card">
            <ul>
                <li>
                    <h3>Titolo: {{ $m['title'] }}</h3>
                    <div>Titolo originale: {{ $m['original_title'] }}</div>
                    <div>Lingua: {{ $m['nationality'] }}</div>
                    <div>Data di pubblicazione: {{ $m['date'] }}</div>
                    <div>Voto: {{ $m['vote'] }}</div>
                </li>
            </ul>





        @empty
            <h3>Non ci sono libri da mostrare</h3>
        </section>
    @endforelse
@endsection
