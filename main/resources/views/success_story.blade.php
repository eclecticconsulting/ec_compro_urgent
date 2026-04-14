@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/header/succes_story_crop.png')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">Success Story</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / Success Story</div>
        </div>
    </header>

    <section class="page-section success-story-page">
        <div class="container">
            <div class="success-story-intro">
                <h2 class="success-story-title">
                    Learn how Eclectic Consulting benefits our clients with smart and efficient implementation
                </h2>
                <div class="success-story-subtitle">What our client say</div>
            </div>

            <div class="success-story-list">
                <div class="success-story-card">
                    <div class="success-story-logo">
                        <img src="https://dev3.eclecticoffice.com/assets/img/story/sidomuncul.svg" alt="Sido Muncul" />
                    </div>
                    <div class="success-story-quote">
                        <div class="success-story-quote-text">
                            “SAPS / 4 HANA, one of the solutions provided by Eclectic, helps us achieve success to improve our business.”
                        </div>
                        <div class="success-story-person">Ho Siu May</div>
                        <div class="success-story-role">Finance & Accounting Manager of PT Industri Jamu dan Farmasi Sido Muncul Tbk.</div>
                    </div>
                    <div class="success-story-action">
                        <a class="success-story-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>

                <div class="success-story-card">
                    <div class="success-story-logo">
                        <img src="https://dev3.eclecticoffice.com/assets/img/story/pollux.png" alt="Pollux Properties" />
                    </div>
                    <div class="success-story-quote">
                        <div class="success-story-quote-text">
                            “Eclectic has been a trusted partner for 7 years. Working with them has transformed our business”
                        </div>
                        <div class="success-story-person">Handy Chandra</div>
                        <div class="success-story-role">IT Head of PT Pollux Properti Indonesia Tbk.</div>
                    </div>
                    <div class="success-story-action">
                        <a class="success-story-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>

                <div class="success-story-card">
                    <div class="success-story-logo">
                        <img src="https://dev3.eclecticoffice.com/assets/img/story/goc.png" alt="G2 Cosmetics" />
                    </div>
                    <div class="success-story-quote">
                        <div class="success-story-quote-text">
                            “Working with Eclectic has a good impact on the progress of our company. We recommend Eclectic for your company.”
                        </div>
                        <div class="success-story-person">Alvin Jusuf</div>
                        <div class="success-story-role">Director of PT Gloria Origita Cosmetics</div>
                    </div>
                    <div class="success-story-action">
                        <a class="success-story-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
