@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Best property in the Town!</h1>
        <p class="lead">Huge variety of objects. Take a look.</p>
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
