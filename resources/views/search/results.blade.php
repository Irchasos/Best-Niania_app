@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/achievements.css') }}">
    <div class="container   ">
        <h1 class="mb-9">Wyniki wyszukiwania</h1>
        @if ($guardians->isEmpty())
            <p>Brak wyników dla podanej nazwy.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr class=" table table-dark">
                        <th scope="col-sm">Photo</th>
                        <th scope="col-lg-2">Imię i nazwisko</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Lata pracy</th>
                        <th scope="col">Numer telefonu</th>
                        <th scope="col-md-3">Ranga</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($guardians as $guardian)
                        <tr>
                            <td>{{ $guardian->photo }}</td>
                            <td>{{ $guardian->degree }} {{ $guardian->name }}
                            </td>
                            <td>{{ $guardian->email }}</td>

                            <td>{{ $guardian->description }}</td>
                            <td>{{ $guardian->years_of_work }}</td>
                            <td>{{ $guardian->phone_number }}</td>
                            <td class="achievements">
                                <div class="star-rating">
                                    @php
                                        $fullStars = floor($guardian->rank);
                                        $emptyStars = 5 - $fullStars;
                                    @endphp

                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span class="star">&#9733;</span> <!-- pełna gwiazdka -->
                                    @endfor

                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <span class="star empty">&#9734;</span> <!-- pusta gwiazdka -->
                                    @endfor
                                </div>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
