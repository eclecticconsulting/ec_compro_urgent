@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/home.webp')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">About Us</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / About Us</div>
        </div>
    </header>
    <section class="page-section about-us-section" id="about-us-intro" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/aboutus/header_about_us.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="text-align: left;">
                    <h3>Powering Transformation Through Strategic Partnerships</h3>
                    <br>
                    <br>
                    <label>
                        To meet our customers’ evolving business needs, we have established strategic partnerships with leading global technology providers. These collaborations enable us to deliver comprehensive, end-to-end solutions that support business transformation, scalability, and long-term growth.
                        <br>
                        <br>
                        We work closely with AWS, Google Cloud, and Huawei Cloud to support SAP modernization and cloud adoption initiatives. From system migration to optimization, we help organizations transition to the cloud seamlessly enhancing flexibility, improving performance, and reducing operational complexity. Our cloud capabilities are designed to ensure that businesses can scale efficiently while maintaining security and reliability. In addition, we provide Salesforce implementation services to help organizations strengthen their customer engagement and sales operations. We enable better visibility, improved pipeline management, and more effective decision-making across sales teams.
                        <br>
                        <br>
                        Complementing our digital solutions, we collaborate with IBM and Samsung to deliver reliable, high-performance hardware tailored to our customers’ operational requirements. From infrastructure setup to hardware provisioning, we ensure that the underlying technology foundation is robust, secure, and aligned with business needs.
                    </label>
                </div>
            </div>
        </div>
    </section>
    @include('product')
    <section class="page-section about-us-section" id="about-us">
        <div class="container">
            <div class="about-tabs-wrap">
                <ul class="nav about-tabs justify-content-center" id="aboutTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="milestone-tab" data-bs-toggle="tab" data-bs-target="#milestone" type="button" role="tab" aria-controls="milestone" aria-selected="true">Our Milestone</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab" aria-controls="value" aria-selected="false">Our Value</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="aboutTabContent">
                <div class="tab-pane fade show active" id="milestone" role="tabpanel" aria-labelledby="milestone-tab" tabindex="0">
                    <div class="milestone-timeline">
                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2006</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/ec.png" alt="Eclectic Consulting" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">With 10 experienced users becoming consultants and a mission to help clients work smarter. Eclectic Consulting begins its journey.</div>
                            </div>
                        </div>

                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2012</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/eclectic_milestone_2012.png" alt="2012" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">Eclectic Consulting has become SAP's Gold Partner</div>
                            </div>
                        </div>

                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2016</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/eclectic_milestone_2016.png" alt="2016" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">Eclectic Consulting was awarded SAP Innovation Partner of the Year for being the first partner in Asia-Pacific to implement SAP S/4 HANA on HANA Enterprise Cloud (HEC) in just 3 months for PT Acset Indonesia</div>
                            </div>
                        </div>

                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2024</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/eclectic_milestone_2024.png" alt="2024" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">Eclectic Consulting achieved the Best Partner Managed Cloud (PMC) in Southeast Asia at SAP South East Asia Partner Success Summit 2024 held in Bangkok, Thailand.</div>
                            </div>
                        </div>

                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2025</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/eclectic_milestone_2025.png" alt="2025" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">Eclectic Consulting achieved the Mid-Market Partner of the Year in Indonesia, Best RISE Partner in Indonesia, and the ultimate honor, Best Partner of the Year 2025 at SAP South East Asia Partner Success Summit 2025 held in Phuket, Thailand.</div>
                            </div>
                        </div>

                        <div class="milestone-item">
                            <div class="milestone-dot" aria-hidden="true"></div>
                            <div class="milestone-year">2026</div>
                            <div class="milestone-media">
                                <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/eclectic_milestone_2026.png" alt="2026" />
                            </div>
                            <div class="milestone-content">
                                <div class="milestone-desc">Eclectic Consulting achieved the Customer Experience Sales Excellence at Enterprise & Corporate at GTMKOM APAC Partner Excellence Awards held in Singapore</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="value" role="tabpanel" aria-labelledby="value-tab" tabindex="0">
                    <div class="our-value-section">
                        <div class="our-value-grid">
                            <div class="our-value-block">
                                <div class="our-value-title">Vision</div>
                                <div class="our-value-text">
                                    To be a leading technology partner that drives growth and long-term success for businesses worldwide
                                </div>
                            </div>

                            <div class="our-value-logo">
                                <img src="https://dev3.eclecticoffice.com/assets/img/ec.png" alt="Eclectic Consulting" />
                            </div>

                            <div class="our-value-block">
                                <div class="our-value-title">Mission</div>
                                <div class="our-value-text">
                                    Helping organizations work smarter and grow faster by delivering practical, high-impact technology solutions, building long-term partnerships based on trust and integrity, and maintaining the highest standards of quality, security, and innovation.
                                </div>
                            </div>
                        </div>

                        <div class="our-campaign">
                            <h2 class="our-campaign-title">Our Campaign</h2>
                            <div class="our-campaign-text">
                                One of Eclectic Consulting's campaign is to raise awareness, educate, and mobilize individuals and organizations to actively combat bribery and corruption. We are committed to building a culture of integrity where everyone has the courage to say "NO" to corruption.
                                <br />
                                To report any suspected wrongdoing please email to : compliance@eclectic.co.id
                            </div>
                            <br>
                            <img src="https://dev3.eclecticoffice.com/assets/img/aboutus/ec_anti_bribery.png" alt="Eclectic Consulting" width="100%" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
