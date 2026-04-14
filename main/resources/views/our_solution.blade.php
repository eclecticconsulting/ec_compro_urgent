@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('https://dev3.eclecticoffice.com/assets/img/header/our_solution_crop.png')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title" style="color: white">Our Solution</h1>
            <div class="page-hero-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <label style="color: white"> / Our Solution</label>
            </div>
        </div>
    </header>

    <section class="page-section page-solution">
        <div class="container">
            <div class="text-center">
                <div class="page-solution-kicker">Redefining what's possible through smarter technology solution</div>
                <br>
                <h2 class="page-solution-title">
                    Transforming business through integrated technology solutions<br />
                    Build around your needs, Powered by leading platforms
                </h2>
            </div>
        </div>
        <br>
        <div>
            
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/sap.png" alt="SAP" />
                        </div>
                        <div class="solution-card-name">SAP</div>
                        <a class="solution-card-btn" href="{{ route('solution_sap') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/salesforce.png" alt="Salesforce" />
                        </div>
                        <div class="solution-card-name">Salesforce</div>
                        <a class="solution-card-btn" href="{{ route('solution_salesforce') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/yonyou.png" alt="Yonyou" />
                        </div>
                        <div class="solution-card-name">Yonyou</div>
                        <a class="solution-card-btn" href="{{ route('solution_yonyou') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/aws.png" alt="AWS" />
                        </div>
                        <div class="solution-card-name">AWS</div>
                        <a class="solution-card-btn" href="{{ route('solution_aws') }}">Learn more</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/huawei2.png" alt="Huawei" />
                        </div>
                        <div class="solution-card-name">Huawei</div>
                        <a class="solution-card-btn" href="{{ route('solution_huawei') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/gcp2.png" alt="Google Cloud" />
                        </div>
                        <div class="solution-card-name">Google Cloud</div>
                        <a class="solution-card-btn" href="{{ route('solution_gcp') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/samsung.png" alt="Samsung" />
                        </div>
                        <div class="solution-card-name">Samsung</div>
                        <a class="solution-card-btn" href="{{ route('solution_samsung') }}">Learn more</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="solution-card">
                        <div class="solution-card-logo">
                            <img src="https://dev3.eclecticoffice.com/assets/img/logo/ibm.png" alt="IBM" />
                        </div>
                        <div class="solution-card-name">IBM</div>
                        <a class="solution-card-btn" href="{{ route('solution_ibm') }}">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
