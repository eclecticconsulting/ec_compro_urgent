@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/header/contact_us_crop.png')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">Contact Us</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / Contact Us</div>
        </div>
    </header>

    <section class="page-section contact-page">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-6">
                    <div class="contact-left">
                        <div class="contact-left-title">Keep in Touch</div>
                        <div class="contact-left-text">
                            Let us help you with our expertise in SAP implementation.<br />
                            Drop us your contact, and we'll respond to you shortly.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="contact-card">
                        <form action="{{ route('contact_store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="contact-label">Name <span class="contact-required">*</span></label>
                                    <input class="contact-input" type="text" name="name" value="{{ old('name') }}" placeholder="John Carter" required />
                                    @error('name')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="contact-label">Email <span class="contact-required">*</span></label>
                                    <input class="contact-input" type="email" name="email" value="{{ old('email') }}" placeholder="example@email.com" required />
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="contact-label">Phone <span class="contact-required">*</span></label>
                                    <input class="contact-input" type="tel" name="phone" value="{{ old('phone') }}" placeholder="(+62)456-789-000" required />
                                    @error('phone')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="contact-label">Company <span class="contact-required">*</span></label>
                                    <input class="contact-input" type="text" name="company" value="{{ old('company') }}" placeholder="Facebook" required />
                                    @error('company')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="contact-label">Message <span class="contact-required">*</span></label>
                                    <textarea class="contact-textarea" name="message" rows="4" placeholder="Message" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="contact-submit" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="contact-offices">
                <div class="contact-offices-title">Eclectic Consulting Offices</div>
                <div class="row g-4 pt-2">
                    <div class="col-12 col-lg-4">
                        <div class="office-city">Surabaya:</div>
                        <div class="office-text">
                            Skyloft Building Unit 1678 Ciputra World<br />
                            Jl. Mayjend Sungkono No. 89<br />
                            Surabaya 60224
                        </div>
                        <div class="office-spacer"></div>
                        <div class="office-label">Telephone</div>
                        <div class="office-text">
                            +6231 99 532777<br />
                            +6231 99 532555
                        </div>
                        <div class="office-spacer"></div>
                        <div class="office-label">Email</div>
                        <div class="office-text">
                            <a class="office-link" href="mailto:info@eclectic.co.id" target="_blank" rel="noopener noreferrer">info@eclectic.co.id</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="office-city">Jakarta:</div>
                        <div class="office-text">
                            Sampoerna Strategic Square Level 30, South Tower<br />
                            Jl. Jend. Sudirman Kav. 45-46<br />
                            Jakarta 12930
                        </div>
                        <div class="office-spacer"></div>
                        <div class="office-label">Telephone</div>
                        <div class="office-text">
                            +6221 2992 7895
                        </div>
                        <div class="office-spacer"></div>
                        <div class="office-label">Fax</div>
                        <div class="office-text">
                            +6221 2993 0888
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="office-city">Yogyakarta:</div>
                        <div class="office-text">
                            Jl. Umbul Permai No.11/2b, Jojajar, Sinduharjo, Kec.<br />
                            Ngaglik, Kabupaten Sleman, Daerah Istimewa<br />
                            Yogyakarta 55581
                        </div>
                        <div class="office-spacer"></div>
                        <div class="office-label">Telephone</div>
                        <div class="office-text">
                            0274 506 2222
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
