@extends('layouts.app')

@section('content')
    <ol>
        @foreach($fumetti as $fumetto)
            <li>
                <ul>
                    <li>{{ $fumetto->titolo }}</li>
                    <li>{{ $fumetto->autore }}</li>
                    <li>{{ $fumetto->anno }}</li>
                    <li>{{ $fumetto->recensione }}</li>
                    <li>{{ $fumetto->voto }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection