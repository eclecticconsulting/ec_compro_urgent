@extends('main')
@section('body')
    <div class="container page-hero-content"></div>

    <section class="page-section yonyou-hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-7">
                    <div class="yonyou-title">SAP</div>
                    <div class="yonyou-text">
                        SAP is a world-leading Enterprise Resource Planning (ERP) platform that integrates and manages all core business processes within a single, unified system. It connects key functions such as finance, procurement, supply chain, manufacturing, sales, and human resources, allowing organizations to operate with full visibility, consistency, and control across all departments and business units.
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="yonyou-logo">
                        <img src="https://dev3.eclecticoffice.com/assets/img/logo/sap.png" alt="SAP" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section sap-solution">
        <div class="container">
            <div class="text-center">
                <h2 class="sap-solution-title">
                    Strategic business solutions and SAP product implementation that is hyper-focused on
                    building what your business needed.
                </h2>
            </div>

            <div class="row g-4 justify-content-center pt-4">
                <div class="col-lg-4">
                    <div class="sap-product-card">
                        <div class="sap-product-logo sap-logo-rise">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/rise.png" alt="SAP RISE" width="70%"/>
                        </div>
                        <div class="sap-product-name">SAP S/4HANA Cloud Private Edition</div>
                        <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sap-product-card">
                        <div class="sap-product-logo sap-logo-grow">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/grow.png" alt="SAP GROW" width="70%"/>
                        </div>
                        <div class="sap-product-name">SAP S/4HANA Cloud Public Edition</div>
                        <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sap-product-card">
                        <div class="sap-product-logo sap-logo-sf">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/sf.png" alt="SAP SuccessFactors" width="70%"/>
                        </div>
                        <div class="sap-product-name">Suite of cloud-based HCM software</div>
                        <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center pt-4">
                <div class="col-lg-6">
                    <div class="sap-product-card">
                        <div class="sap-product-logo sap-logo-sac">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/sac.png" alt="SAP Analytics Cloud" width="70%"/>
                        </div>
                        <div class="sap-product-name">A complete solution for analytics and planning</div>
                        <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sap-product-card">
                        <div class="sap-product-logo sap-logo-btp">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/btp.png" alt="SAP Business Technology Platform" width="70%"/>
                        </div>
                        <div class="sap-product-name">Innovation platform optimized for SAP applications</div>
                        <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section sap-why">
        <div class="container">
            <div class="text-center">
                <h2 class="sap-why-title">Why SAP is Essential for Streamlining Business Processes?</h2>
            </div>

            <div class="nav sap-why-icons" id="sapWhyTabs" role="tablist">
                <button class="sap-why-toggle nav-link active" id="sap-why-business-process-tab" data-bs-toggle="tab" data-bs-target="#sap-why-business-process" type="button" role="tab" aria-controls="sap-why-business-process" aria-selected="true">
                    <span class="sap-why-icon" aria-hidden="true"><img src="https://dev3.eclecticoffice.com/assets/img/sap/business_process.png" alt="Business process illustration" width="100%" style="padding: 20%;" /></span>
                </button>
                <button class="sap-why-toggle nav-link" id="sap-why-integration-tab" data-bs-toggle="tab" data-bs-target="#sap-why-integration" type="button" role="tab" aria-controls="sap-why-integration" aria-selected="false">
                    <span class="sap-why-icon" aria-hidden="true"><img src="https://dev3.eclecticoffice.com/assets/img/sap/integration.png" alt="Integration illustration" width="100%" style="padding: 20%;" /></span>
                </button>
                <button class="sap-why-toggle nav-link" id="sap-why-real-time-tab" data-bs-toggle="tab" data-bs-target="#sap-why-real-time" type="button" role="tab" aria-controls="sap-why-real-time" aria-selected="false">
                    <span class="sap-why-icon" aria-hidden="true"><img src="https://dev3.eclecticoffice.com/assets/img/sap/realtime.png" alt="Real time illustration" width="100%" style="padding: 20%;" /></span>
                </button>
                <button class="sap-why-toggle nav-link" id="sap-why-data-driven-tab" data-bs-toggle="tab" data-bs-target="#sap-why-data-driven" type="button" role="tab" aria-controls="sap-why-data-driven" aria-selected="false">
                    <span class="sap-why-icon" aria-hidden="true"><img src="https://dev3.eclecticoffice.com/assets/img/sap/data_driven.png" alt="Data driven illustration" width="100%" style="padding: 20%;" /></span>
                </button>
            </div>

            <div class="tab-content" id="sapWhyTabContent">
                <div class="tab-pane fade show active" id="sap-why-business-process" role="tabpanel" aria-labelledby="sap-why-business-process-tab" tabindex="0">
                    <div class="sap-why-body">
                        <div class="sap-why-text">
                            <div class="sap-why-subtitle">Business Process</div>
                            <div class="sap-why-paragraph">
                                Without a centralized system to manage operations, businesses often face inefficiencies due to manual processes, inconsistent practices, and scalability issues. Many companies rely on spreadsheets and disconnected tools to handle various tasks, leading to errors, redundancies, and slowdowns.
                            </div>
                        </div>
                        <div class="sap-why-illustration">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/business_process2.png" alt="Business process illustration" width="100%" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="sap-why-integration" role="tabpanel" aria-labelledby="sap-why-integration-tab" tabindex="0">
                    <div class="sap-why-body">
                        <div class="sap-why-text">
                            <div class="sap-why-subtitle">Integration</div>
                            <div class="sap-why-paragraph">
                                When different departments or systems operate in isolation, information is often duplicated, leading to inefficiencies and increased error rates. The process of manually transferring data between platforms also consumes valuable time and resources, contributing to operational delays.
                            </div>
                        </div>
                        <div class="sap-why-illustration">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/integration2.png" alt="Integration illustration" width="100%" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="sap-why-real-time" role="tabpanel" aria-labelledby="sap-why-real-time-tab" tabindex="0">
                    <div class="sap-why-body">
                        <div class="sap-why-text">
                            <div class="sap-why-subtitle">Real Time</div>
                            <div class="sap-why-paragraph">
                                Real-time data access is essential for staying competitive, but without an integrated enterprise system, businesses struggle to access up-to-date information. Relying on outdated reports means that decision-makers are constantly reacting to situations rather than proactively addressing them.
                            </div>
                        </div>
                        <div class="sap-why-illustration">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/realtime2.png" alt="Real time illustration" width="100%" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="sap-why-data-driven" role="tabpanel" aria-labelledby="sap-why-data-driven-tab" tabindex="0">
                    <div class="sap-why-body">
                        <div class="sap-why-text">
                            <div class="sap-why-subtitle">Data Driven</div>
                            <div class="sap-why-paragraph">
                                The lack of a centralized system for data management leads to fragmented information, preventing businesses from deriving meaningful insights. Furthermore, without the right tools or capabilities to analyze data, companies are unable to make informed, data-driven decisions. As a result, opportunities for innovation, cost savings, and growth may be missed.
                            </div>
                        </div>
                        <div class="sap-why-illustration">
                            <img src="https://dev3.eclecticoffice.com/assets/img/sap/data_driven2.png" alt="Data driven illustration" width="100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section sap-value">
        <div class="container">
            <div class="sap-value-grid">
                <div class="sap-value-image" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/value_bg.jpg')">
                    
                    <div class="sap-value-image-overlay">
                        <div class="sap-value-image-text" style="align-self: center;">
                            Eclectic Consulting<br />
                            Unparalleled Value As<br />
                            SAP Implementor
                        </div>
                    </div>
                </div>
                <div class="sap-value-points">
                    <div class="sap-value-point">
                        <div class="sap-value-point-icon"><img src="https://dev3.eclecticoffice.com/assets/img/sap/value_1.png" alt="Data driven illustration" width="100%" /></div>
                        <div class="sap-value-point-text">Came from the backgrounds as an actual SAP user.</div>
                    </div>
                    <div class="sap-value-point">
                        <div class="sap-value-point-icon"><img src="https://dev3.eclecticoffice.com/assets/img/sap/value_2.png" alt="Data driven illustration" width="100%" /></div>
                        <div class="sap-value-point-text">Proven methods to implement evolutionary solution, instead of business revolution.</div>
                    </div>
                    <div class="sap-value-point">
                        <div class="sap-value-point-icon"><img src="https://dev3.eclecticoffice.com/assets/img/sap/value_3.png" alt="Data driven illustration" width="100%" /></div>
                        <div class="sap-value-point-text">Our achievement as a Gold Partner in such a short time as an implementor and our rich clientele says all.</div>
                    </div>
                    <div class="sap-value-point">
                        <div class="sap-value-point-icon"><img src="https://dev3.eclecticoffice.com/assets/img/sap/value_4.png" alt="Data driven illustration" width="100%" /></div>
                        <div class="sap-value-point-text">Our people are the best SAP implementor in Indonesia, acknowledged by our principal.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section sap-client">
        <div class="container">
            <div id="sapClientCarousel" class="carousel slide sap-client-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="sap-client-card">
                            <div class="sap-client-logo">
                                <img src="https://dev3.eclecticoffice.com/assets/img/story/sidomuncul.svg" alt="Sido Muncul" width="100%" />
                            </div>
                            <div class="sap-client-content">
                                <div class="sap-client-title">PT Industri Jamu dan Farmasi Sido Muncul Tbk</div>
                                <div class="sap-client-text">
                                    As a traditional herbal manufacturing company, we need a global ERP system to scale up our fast-growing business. We have benefited from SAP S/4 HANA to give real-time information...
                                </div>
                                <a class="sap-client-btn" href="{{ route('maintenance') }}">learn more about us</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="sap-client-card">
                            <div class="sap-client-logo">
                                <img src="https://dev3.eclecticoffice.com/assets/img/story/pollux.png" alt="Pollux Properties" width="100%" />
                            </div>
                            <div class="sap-client-content">
                                <div class="sap-client-title">PT Pollux Properti Indonesia Tbk</div>
                                <div class="sap-client-text">
                                    Eclectic has been a trusted partner for years. Working with them has transformed our business and improved our operational efficiency through SAP implementation.
                                </div>
                                <a class="sap-client-btn" href="{{ route('maintenance') }}">learn more about us</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="sap-client-card">
                            <div class="sap-client-logo">
                                <img src="https://dev3.eclecticoffice.com/assets/img/story/goc.png" alt="Pollux Properties" width="100%" />
                            </div>
                            <div class="sap-client-content">
                                <div class="sap-client-title">PT Gloria Origita Cosmetics</div>
                                <div class="sap-client-text">
                                    GOC is determined to move faster and simple with SAP S/4 HANA in terms of doing our business expertise. By the time we decided to trust Eclectic Consulting, we made it clear that project must be on time...
                                </div>
                                <a class="sap-client-btn" href="{{ route('maintenance') }}">learn more about us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sap-client-controls">
                    <button class="sap-client-control sap-client-control-prev" type="button" data-bs-target="#sapClientCarousel" data-bs-slide="prev" aria-label="Previous"></button>
                    <button class="sap-client-control sap-client-control-next" type="button" data-bs-target="#sapClientCarousel" data-bs-slide="next" aria-label="Next"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section sap-industry">
        <div class="container">
            <div class="text-center">
                <h2 class="sap-industry-title">Eclectic Consulting SAP Solutions Approach<br />by Industry</h2>
            </div>

            <div class="row g-4 justify-content-center pt-4">
                <div class="col-12 col-md-4">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/pharmacy.png')">
                        <span class="industry-card-label">Pharmacy and Chemicals</span>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/consumer_goods.png')">
                        <span class="industry-card-label">Consumer Goods</span>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/logistics.png')">
                        <span class="industry-card-label">Logistics</span>
                    </a>
                </div>
            </div>

            <div class="row g-4 justify-content-center pt-3">
                <div class="col-12 col-md-3">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/retail.png')">
                        <span class="industry-card-label">Retail and Distribution</span>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/mills.png')">
                        <span class="industry-card-label">Mills</span>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/real_estate.png')">
                        <span class="industry-card-label">Real Estate</span>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/sap/oil_gas.png')">
                        <span class="industry-card-label">Oil and Gas</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
