@extends('layout')

@section('content')
    <div class="s011">
        <form action="{{ route('guardians.search') }}" method="GET">

            <div class="inner-form">
                <div class="main-form" id="main-form">
                    <div class="row">
                        <div class="input-wrap">
                            <div class="input-field">
                                <label>Wyszukaj po nazwie</label>
                                <input type="text" name="name" placeholder="imię, nazwisko, tutuł" />
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-wrap ">
                            <div class="input-field">
                                <label>Dzielnica</label>
                                <div class="input-select">
                                    <select name="district" data-trigger="">

                                        <option value="Wszystkie" selected>Wszystkie</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->name }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row third">
                        <label>Opcje:</label>
                        <div class="row">
                            @foreach ($options as $option)
                                <div class="col-md-4">
                                    <div class="input-checkbox">
                                        <input type="checkbox" name="options[]" value="{{ $option->id }}"
                                            id="option{{ $option->id }}">
                                        <label for="option{{ $option->id }}">{{ $option->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row fourth">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
