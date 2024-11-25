@extends('layout')

@section('content') <div class="container">
        <h1>Reviews for {{ $guardian->name }}</h1>
        @if ($reviews->isEmpty())
            <p>No reviews yet.</p>
        @else
            <ul class="list-group">
                @foreach ($reviews as $review)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div> <strong>{{ $review->user->name }}</strong> - Work Date:
                                {{ \Carbon\Carbon::parse($review->work_date)->format('d.m.Y') }} <p>{{ $review->content }}
                                </p> <span>Review Date:
                                    {{ \Carbon\Carbon::parse($review->review_date)->format('d.m.Y') }}</span> </div>
                            <div> <button class="btn btn-danger btn-sm">Report Review</button> <button
                                    class="btn btn-success btn-sm">Add to Portfolio</button> </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
</div> @endsection
