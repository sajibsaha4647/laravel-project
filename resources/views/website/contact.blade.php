@extends('layouts.website')
@section('main-page')
	<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Contact us</h1>
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
					    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

		<div id="mu-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						@if(session('contact_inserted'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						 	{{session('contact_inserted')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
						@endif
						@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					</div>
				</div>
			</div>
		</div>
	<!-- Start main content -->
	<main>
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Say Hello!</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>
								<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-12">
										<div class="mu-contact-form-area">
											<div id="form-messages"></div>
											<form   action="{{url ('contact/submit') }}" method="post" class="mu-contact-form">
												@csrf
												<div class="form-group">
													<span class="fa fa-user mu-contact-icon"></span>
													<input type="text" class="form-control" placeholder="Name"  name="name" value="{{old('name')}}">
												</div>

												<div class="form-group">
													<span class="fa fa-envelope mu-contact-icon"></span>
													<input type="email" class="form-control" placeholder="Enter Email"  name="email" value="{{old('email')}}">
												</div>

												<div class="form-group">
													<span class="fa fa-folder-open-o mu-contact-icon"></span>
													<input type="text" class="form-control" placeholder="Your Subject"  name="subject" value="{{old('subject')}}">
												</div>

												<div class="form-group">
													<span class="fa fa-pencil-square-o mu-contact-icon"></span>
													<textarea class="form-control" placeholder="Message"  name="message">{{old('message')}}</textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>Send Message</span></button>
								        	</form>
										</div>
									</div>

								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Google map -->
		<div id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8176744277202!2d-81.47150788457147!3d28.424757900613237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e378ec5a9a9%3A0x2feec9271ed22c5b!2sOrange+County+Convention+Center!5e0!3m2!1sen!2sbd!4v1503833952781" width="850" height="400" allowfullscreen></iframe>
		</div>
	</main>

@endsection
