@extends('layouts.website')
@section('main-page')

	<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">404 page</h1>
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
					    <li class="breadcrumb-item active" aria-current="page">404 page</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->


	<!-- Start main content -->
	<main>
		<!-- Start 404 Error -->
		<section id="mu-error">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-error-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Oops! This page could not be found!</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
									</div>
								</div>
							</div>
								<!-- Start Contact Content -->
							<div class="mu-error-content">
								<div class="mu-error-text">
									<div class="mu-backdrop">
									    <p class="mu-text">404</p>
									    <div class="mu-overlay"></div>
									</div>
								</div>

								<!-- search form -->
								<div class="mu-error-search">
									<form class="mu-subscribe-form">
										<input placeholder="Write your e-mail here" type="email">
										<button class="mu-subscribe-btn">Search</button>
									</form>
								</div>

								<a href="#" class="mu-back-to-home">Back to home <span class="fa fa-long-arrow-right"></span></a>

							</div>
							<!-- End 404 Error  Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
