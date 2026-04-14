@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/home.webp')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">News and Article</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / News and Article</div>
        </div>
    </header>

    <section class="page-section news-page">
        <div class="container">
            <div class="news-title">News</div>

            <div class="row g-4 pt-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/1.jpg') }}" alt="News 1" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">SAP Implementor Indonesia: Solusi Implementasi Efektif bagi Bisnis Anda</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/2.jpg') }}" alt="News 2" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Panduan Lengkap SAP Fiori untuk Efisiensi Bisnis Anda</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/3.jpg') }}" alt="News 3" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">AWS GenAI Analytics: Unlock Business Insights to Accelerate Your SAP Journey</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/4.jpg') }}" alt="News 4" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">SAP Cloud Migration: Solusi Inovatif untuk Perusahaan Modern</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/5.jpg') }}" alt="News 5" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Digital Transformation: ERP vs Manual, Proses Bisnis Manakah yang Lebih Unggul?</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/6.jpg') }}" alt="News 6" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Apakah Biaya Investasi SAP S/4HANA Mahal?</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/1.jpg') }}" alt="News 7" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Langkah-Langkah Menuju Digital Transformation SAP ERP</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/2.jpg') }}" alt="News 8" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Mampukah SAP Mengakomodir Kebutuhan Bisnis Anda?</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-card-image">
                            <img src="{{ asset('assets/img_template/portfolio/3.jpg') }}" alt="News 9" />
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-heading">Kick Off Implementasi SAP S/4HANA RISE Private Cloud pada Jhonlin Group</div>
                            <a class="news-card-link" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
