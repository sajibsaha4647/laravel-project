@extends('layouts.website')
@section('main-page')
	<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Portfolio</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->


	<!-- Start main content -->
	<main>

		<!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Our Recent Project</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									<div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
							                <li class="active" data-filter="all">All<span>/</span></li>
							                <li data-filter="1">Web design<span>/</span> </li>
							                <li data-filter="2">Mobile Development<span>/</span></li>
							                <li data-filter="3">E-commerces<span>/</span></li>
							                <li data-filter="4"> Arts<span>/</span> </li>
							                <li data-filter="5">Branding</li>
							            </ul>
									</div>

									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
							                   <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-1.jpg" title="PAINTING">
								                   	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-1.jpg" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">PAINTING</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-2.jpg" title="BRANDING">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-2.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">BRANDING</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-3.jpg" title="E-COMMERCE">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-3.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">E-COMMERCE</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-4.jpg" title="WEB DESIGN">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-4.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">WEB DESIGN</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-5.jpg" title="MOBILE DEVELOPMENT">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-5.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	 <h4 class="mu-filter-item-title">MOBILE DEVELOPMENT</h4>
								                    	 <span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
							                   <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-6.jpg" title="BRANDING">
								                   	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-6.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">BRANDING</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
								                </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
							                   <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-7.jpg" title="E-COMMERCE">
								                   	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-7.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">E-COMMERCE</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-8.jpg" title="PAINTING">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-8.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">PAINTING</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                  <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                    <a class="mu-imglink" href="{{asset('contents/website')}}/images/portfolio/img-4.jpg" title="WEB DESIGN">
							                    	<img class="img-responsive" src="{{asset('contents/website')}}/images/portfolio/img-4.jpg" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">WEB DESIGN</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							            </div>
									</div>
									<!-- End Portfolio Content -->
								</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
