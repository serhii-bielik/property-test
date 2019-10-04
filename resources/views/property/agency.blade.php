@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Best property by {{ $agency->name }}!</h1>
        <p class="lead">
            <img src="{{ $agency->logo }}"> {{ $agency->city->name }}, {{ $agency->phone }}<br>
            {{ $agency->description }}<br>
            <a href="{{ $agency->website }}" target="_blank">Visit website</a>
        </p>
        <hr class="my-4">
        <p>
            @forelse($items as $item)
                <a href="/property/{{ $item->id }}">{{ $item->title }}</a><br>
            @empty
                No property to show yet
            @endforelse
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Oh Yeah!</a>
        </p>
    </div>
@endsection
