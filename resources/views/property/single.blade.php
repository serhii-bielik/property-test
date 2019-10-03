@extends('layout')

@section('content')
    <div class="jumbotron">
        <div style="position: relative;">
            @forelse($property->photos as $photo)
                <img class="propSlides" src="{{ $photo }}" style="width:100%; height: 500px">
            @empty
                <p>No photos yet</p>
            @endforelse

            <button class="btn btn-primary btn-lg" style="position: absolute;top: 50%;left: 0%;transform: translate(0%,-50%);" onclick="plusDivs(-1)">&#10094;</button>
            <button class="btn btn-primary btn-lg" style="position: absolute;top: 50%;right: 0%;transform: translate(0%,-50%);" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <h1 class="display-3">{{ $property->title }} <small class="text-muted">{{ $property->type->name }} for {{ $property->status->name }}</small></h1>
        <h2><span class="text-danger">{{ $property->price }} $</span>, {{ $property->city->name }}, {{ $property->address }}</h2>
        <h3>
            <span style="margin-right: 20px"><i class="fas fa-expand-arrows-alt"></i> {{ $property->area }} m<sup>2</sup></span>
            <span style="margin-right: 20px"><i class="fas fa-bed"></i> {{ $property->rooms }}</span>
            <span style="margin-right: 20px"><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
            <span style="margin-right: 20px"><i class="fas fa-parking"></i> {{ $property->car_slots }}</span>
        </h3>
        <p class="lead">{{ $property->description }}</p>
        <h4>Property Features</h4>
        <ul>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
        </ul>

        <h4>Property Location</h4>
        <div id="propertyMap" style="height: 250px;"></div>

        <hr class="my-4">
        <p>

        </p>
        <p class="lead">
        </p>
    </div>

    <script>
        var center = [{{ $property->latitude }}, {{ $property->longitude }}];

        var map = L.map('propertyMap').setView(center, 14);

        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);

        L.marker(center)
            .addTo(map)
            .bindPopup("{{ $property->title }}")
            .openPopup();
    </script>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("propSlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
@endsection
