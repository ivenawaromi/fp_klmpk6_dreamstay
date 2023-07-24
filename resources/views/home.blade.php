@extends('layouts.app')
@section('content')
<div class="p-5 mb-4 bg-body-secondary rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hello, Traveller!</h1>
        <p class="col-md-8 fs-4">Enjoy your day, let's go around Indonesia</p>
        <p><button class="btn btn-outline-primary" type="button" href={{ route('form.index')}}>Booking</button></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Bali</h2>
            <img src="{{ Vite::asset('resources/images/bali.jpg')}}" class="d-block w-100" alt="image">
            <p>Bali adalah sebuah pulau di indonesia yang dikenal karena memiliki pengunungan berapi yang hijau, teraseing sawah yang unik, pantai dan terumbu karang yang indah dan cantik.
                Terdapat banyak tempat wisata religi seperti Pura Uluwatu yang berdiri di atas tebing</p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Yogyakarta</h2>
            <img src="{{ Vite::asset('resources/images/jogja.jpg')}}" class="d-block w-100" alt="image">
            <p>Kota Yogyakarta adalah ibu kota daerah istimewa sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia.
                Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya</p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Bandung</h2>
            <img src="{{ Vite::asset('resources/images/bandung.jpg')}}" class="d-block w-100" alt="image">
            <p>Bandung adalah kisah dan sejarah yang telah bergulir lebih dari dua abad silam. Kota yang dikelilingi pegunungan ini memang menyimpan berjuta keindahan alam.
                Tidak hanya itu, berbagai macam destinasi wisata menarik mulai dari tempat kuliner sampai tempat rekreasi bisa ditemukan di Kota Bandung. </p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
</div>

{{-- Tampilan wisata menarik --}}
<hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
    </div>

     <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
        </div>
    </div>

<hr class="featurette-divider">

{{-- Footer --}}
@endsection
