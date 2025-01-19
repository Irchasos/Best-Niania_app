@extends('layout')

@section('content')
<div style="background:grey">
    <link rel="stylesheet" href="{{ asset('css/achievements.css') }}">
    <div class="container mt-10" style="background-color:grey; border-radius: 10px; padding: 20px;">
        <h1 class="mb-12 text-center text-primary">Wyniki wyszukiwania</h1>
        @if ($guardians->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                Brak wyników dla podanej nazwy.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr class="table-primary">
                        <th scope="col" class="col-sm-2">Photo</th>
                        <th scope="col" class="col-lg-3">Imię i nazwisko</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Lata pracy</th>
                        <th scope="col">Numer telefonu</th>
                        <th scope="col" class="col-md-3">Ranga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guardians as $guardian)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $guardian->photo) }}" alt="Photo of {{ $guardian->name }}" class="img-thumbnail rounded-circle" style="width: 60px; height: 60px;">
                            </td>
                            <td class="text-info font-weight-bold">{{ $guardian->degree }} {{ $guardian->name }}</td>
                            <td class="text-success">{{ $guardian->email }}</td>
                            <td>{{ $guardian->description }}</td>
                            <td class="text-warning">{{ $guardian->years_of_work }}</td>
                            <td>{{ $guardian->phone_number }}</td>
                            <td class="achievements">
                                <div class="star-rating">
                                    @php
                                        $fullStars = floor($guardian->rank);
                                        $emptyStars = 5 - $fullStars;
                                    @endphp

                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span class="star text-warning">&#9733;</span> <!-- pełna gwiazdka -->
                                    @endfor

                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <span class="star">&#9734;</span> <!-- pusta gwiazdka -->
                                    @endfor
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
