@extends('layout')

@section('content')
    <div class="s011">
        <form action="{{ route('guardians.search') }}" method="GET">
            <div class="inner-form">
                <div class="main-form" id="main-form">
                    <div class="row">
                        <div class="input-wrap">
                            <div class="input-field">
                                <label>{{ __('guardian_search.search_by_name') }}</label>
                                <input type="text" name="name" placeholder="{{ __('guardian_search.placeholder_name') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-wrap">
                            <div class="input-field">
                                <label>{{ __('guardian_search.district') }}</label>
                                <div class="input-select">
                                    <select name="district" data-trigger="">
                                        <option value="Wszystkie" selected>{{ __('guardian_search.all') }}</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->name }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row third">
                        <label>{{ __('guardian_search.options') }}</label>
                        <div class="row">
                            @foreach ($options as $option)
                                <div class="col-md-4">
                                    <div class="input-checkbox">
                                        <input type="checkbox" name="options[]" value="{{ $option->id }}" id="option{{ $option->id }}">
                                        <label for="option{{ $option->id }}">{{ __('guardian_search.'.$option->name) }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row fourth">
                        <button class="btn btn-primary" type="submit">{{ __('guardian_search.search') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
