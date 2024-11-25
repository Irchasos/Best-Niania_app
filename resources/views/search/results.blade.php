@extends('layout')

@section('content')
    <div class="container">
        <h1>Wyniki wyszukiwania</h1>
        @if ($guardians->isEmpty())
            <p>Brak wyników dla podanej nazwy.</p>
        @else
            <ul class="list-group">
                @foreach ($guardians as $guardian)
                    <li class="list-group-item">
                        <strong>{{ $guardian->name }}</strong>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
