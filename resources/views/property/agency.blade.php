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
        <div class="row">
            @forelse($properties as $property)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10px;">
                        <div class="card-body">
                            <h4 class="card-title"><a href="/property/{{ $property->id }}">{{ $property->title }}</a></h4>
                            <img style="height: 200px; width: 100%; display: block;" src="{{ $property->photos[0] }}" alt="Card image">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <span style="margin-right: 10px" class="text-danger">{{ $property->price }} $</span>
                                    <span style="margin-right: 10px"><i class="fas fa-expand-arrows-alt"></i> {{ $property->area }} m<sup>2</sup></span>
                                    <span style="margin-right: 10px"><i class="fas fa-bed"></i> {{ $property->rooms }}</span>
                                    <span style="margin-right: 10px"><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
                                </h6>
                                <p class="card-text">{{ Str::limit($property->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No property to show yet</p>
            @endforelse
        </div>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/" role="button">View all property</a>
        </p>
    </div>
@endsection
