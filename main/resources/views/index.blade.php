@extends('main')
@section('body')
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="https://dev3.eclecticoffice.com/assets/img/landingpage/leading_digital_future.png" width="100%" /></a>
                    </div>
                    <div class="col-lg-5" style="text-align: left;">
                        <label>
                            With over 20 years of experience, we empower enterprises with end-to-end digital solutions across ERP, Cloud, Data, CRM, and Intelligent Technologies. Our team of certified consultants helps you run your business as intelligently and efficiently as possible. Whether you are facing unique or complex business process challenges, we deliver smarter solutions at a reasonable cost. 
                        </label>
                        <br><br>
                        <a class="btn btn-danger btn-sm text-uppercase rounded-pill" href="{{ route('about_us') }}">
                            Learn more about us 
                            <i class="fa-solid fa-angles-right" style="color: #fff;"></i>
                        </a>
                    </div>
                </div>   
            </div>
        </header>
        @include('product')
        
        <section class="home-highlight">
            <div class="container">
                <div class="home-stats">
                    <div class="home-stat">
                        <div class="home-stat-number" data-count-target="100" data-count-suffix="+">0+</div>
                        <div class="home-stat-label">Project Success</div>
                    </div>
                    <div class="home-stat">
                        <div class="home-stat-number" data-count-target="20">0</div>
                        <div class="home-stat-label">Years of Experience</div>
                    </div>
                    <div class="home-stat">
                        <div class="home-stat-number" data-count-target="5000" data-count-format="comma" data-count-suffix="+">0+</div>
                        <div class="home-stat-label">Supported User</div>
                    </div>
                </div>

                <div class="home-slogan">
                    <img class="home-slogan-img" src="https://dev3.eclecticoffice.com/assets/img/landingpage/smart_work_smart_result.png" alt="Smart work smart result"  width="50%"/>
                </div>
            </div>
        </section>
        <section class="home-highlight">
            <img class="home-team-photo-img" src="https://dev3.eclecticoffice.com/assets/img/landingpage/team.png" alt="Team" width="100%" />
        </section>
        <!-- Our Recent Update -->
        <section class="page-section hide" id="services" style="display: none;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Recent Update</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection
