@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/home.webp')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">{{ $solution['name'] }}</h1>
            <div class="page-hero-breadcrumb">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('our_solutions') }}">Our Solution</a> /
                {{ $solution['name'] }}
            </div>
        </div>
    </header>

    <section class="page-section page-solution">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="{{ 'https://dev3.eclecticoffice.com/' . $solution['logo'] }}" alt="{{ $solution['name'] }}" />
                        </div>
                        <div class="solution-card-name">{{ $solution['name'] }}</div>
                        <div class="milestone-desc">
                            Detail halaman untuk {{ $solution['name'] }}. Silakan isi konten sesuai kebutuhan (deskripsi layanan, fitur, studi kasus, dll).
                        </div>
                        <div class="pt-3">
                            <a class="solution-card-btn" href="{{ route('our_solutions') }}">Back to Our Solution</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
