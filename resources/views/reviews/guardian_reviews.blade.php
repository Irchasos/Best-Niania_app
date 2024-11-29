@extends('layout')

@section('content') <div class="container">
    <h1>{{ __('guardian_reviews.reviews_for', ['name' => $guardian->name]) }}</h1>
    @if ($reviews->isEmpty())
        <p>{{ __('guardian_reviews.no_reviews') }}</p>
    @else
        <ul class="list-group">
            @foreach ($reviews as $review)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $review->user->name }}</strong> - {{ __('guardian_reviews.work_date') }}:
                            {{ \Carbon\Carbon::parse($review->work_date)->format('d.m.Y') }}
                            <p>{{ $review->content }}</p>
                            <span>{{ __('guardian_reviews.review_date') }}:
                            {{ \Carbon\Carbon::parse($review->review_date)->format('d.m.Y') }}</span>
                        </div>
                        <div>
                            <button class="btn btn-danger btn-sm">{{ __('guardian_reviews.report_review') }}</button>
                            <button class="btn btn-success btn-sm">{{ __('guardian_reviews.add_to_portfolio') }}</button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div> @endsection
