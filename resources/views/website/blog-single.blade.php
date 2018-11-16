@extends('layouts.website')
@section('main-page')

	<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Blog Details</h1>
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
					    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->


	<!-- Start main content -->
	<main>
		<!-- Start Blog -->
		<section id="mu-blog" class="mu-blog-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-blog-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-8">
									<div class="mu-blog-left">
										<!-- start single item -->
										<article class="mu-blog-item">
											<img src="{{asset('contents/website')}}/images/blog-img-1.jpg" alt="blgo image">
											<div class="mu-blog-item-content">

												<h1 class="mu-blog-item-title">Seeing the big picture of information and information management</h1>
												<ul class="mu-blog-meta">
													<li>BY: ADMIN </li>
													<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
													<li><i class="fa fa-heart-o"></i>250</li>
												</ul>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

												<blockquote>
												Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
												</blockquote>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

												<h1>h1. Heading</h1>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. </p>
												<h2>h2. Heading</h2>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros</p>
												<h3>h3. Heading</h3>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit</p>
												<h4>h4. Heading</h4>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget</p>
												<h5>h5. Heading</h5>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.</p>
												<h6>h6. Heading</h6>
												<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet</p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

												<h3>Unorder list style</h3>
												<ul>
													<li>Lorem ipsum dolor sit amet, consectetur </li>
													<li>Curabitur blandit felis in tincidunt semper.</li>
													<li>Etiam interdum felis egestas eros elementum
														<ul>
															<li>Aliquam et massa feugiat, </li>
															<li>Nunc ullamcorper tellus eget eros euismod, </li>
															<li>Maecenas sagittis lectus ac nisi euismod fringilla.</li>
														</ul>
													</li>
													<li>Lorem ipsum dolor sit amet, consectetur </li>
													<li>Curabitur blandit felis in tincidunt semper.</li>
												</ul>

												<h3>order list style</h3>
												<ol>
													<li>Lorem ipsum dolor sit amet, consectetur </li>
													<li>Curabitur blandit felis in tincidunt semper.</li>
													<li>Etiam interdum felis egestas eros elementum
														<ol>
															<li>Aliquam et massa feugiat, </li>
															<li>Nunc ullamcorper tellus eget eros euismod, </li>
															<li>Maecenas sagittis lectus ac nisi euismod fringilla.</li>
														</ol>
													</li>
													<li>Lorem ipsum dolor sit amet, consectetur </li>
													<li>Curabitur blandit felis in tincidunt semper.</li>
												</ol>

											</div>
											<!-- Start Blog Post Tag -->
											<div class="mu-blog-tag">
												<ul class="mu-blog-tag-nav">
													<li><h3><span class="fa fa-tag"></span>Article Tags:</h3></li>
													<li><a href="#">Web Design,</a></li>
													<li><a href="#">Graphic Design,</a></li>
													<li><a href="#">E-commerces</a></li>
												</ul>
											</div>
											<!-- End Blog Post Tag -->

											<!-- Start Blog Post Share -->
											<div class="mu-blog-share">
												<ul class="mu-social-media mu-blog-share-nav">
													<li><h3>Share on :</h3></li>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
												</ul>
											</div>
											<!-- End Blog Post Share -->

											<!-- Blog Navigation -->
											<div class="mu-blog-navigation">
												<a class="mu-blog-nav-btn mu-blog-nav-prev" href="#"><span class="fa fa-long-arrow-left"></span>Previous Post</a>
												<a class="mu-blog-nav-btn mu-blog-nav-next" href="#">Next Post<span class="fa fa-long-arrow-right"></span></a>
											</div>
											<!-- End Blog navigation -->

											<!-- Start related post -->
											<div class="mu-related-post">
												<h2 class="mu-related-post-title">You may also like</h2>
												<div class="row">
													<div class="col-md-4">
														<article class="mu-blog-item">
															<a href="#"><img src="{{asset('contents/website')}}/images/blog-img-1.jpg" alt="blgo image"></a>
															<div class="mu-blog-item-content">
																<ul class="mu-blog-meta">
																	<li>BY: ADMIN </li>
																	<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
																	<li><i class="fa fa-heart-o"></i>250</li>
																</ul>
																<h1 class="mu-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
																<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
															</div>
														</article>
													</div>
													<div class="col-md-4">
														<article class="mu-blog-item">
															<a href="#"><img src="{{asset('contents/website')}}/images/blog-img-2.jpg" alt="blgo image"></a>
															<div class="mu-blog-item-content">
																<ul class="mu-blog-meta">
																	<li>BY: ADMIN </li>
																	<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
																	<li><i class="fa fa-heart-o"></i>250</li>
																</ul>
																<h1 class="mu-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
																<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
															</div>
														</article>
													</div>
													<div class="col-md-4">
														<article class="mu-blog-item">
															<a href="#"><img src="{{asset('contents/website')}}/images/blog-img-1.jpg" alt="blgo image"></a>
															<div class="mu-blog-item-content">
																<ul class="mu-blog-meta">
																	<li>BY: ADMIN </li>
																	<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
																	<li><i class="fa fa-heart-o"></i>250</li>
																</ul>
																<h1 class="mu-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
																<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a></i></a>
															</div>
														</article>
													</div>
												</div>
											</div>
											<!-- End related post -->

											<!-- start blog comment -->
							                <div class="mu-comments-area">
						                      <h2>5 Comments</h2>
						                      <div class="comments">
						                        <ul class="commentlist">
						                          <li>
						                            <div class="media">
						                              <div class="media-left">
						                                <img alt="img" src="{{asset('contents/website')}}/images/client.png" class="media-object news-img">
						                              </div>
						                              <div class="media-body">
						                               <h4 class="author-name">David Muller</h4>
						                               <span class="comments-date"> Posted on 12th Dec, 2017</span>
						                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						                               <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						                              </div>
						                            </div>
						                          </li>
						                          <li>
						                            <div class="media">
						                              <div class="media-left">
						                                <img alt="img" src="{{asset('contents/website')}}/images/client.png" class="media-object news-img">
						                              </div>
						                              <div class="media-body">
						                               <h4 class="author-name">John Doe</h4>
						                               <span class="comments-date"> Posted on 12th Dec, 2017</span>
						                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						                               <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						                              </div>
						                            </div>
						                          </li>
						                          <ul class="children">
						                            <li class="author-comments">
						                              <div class="media">
						                                <div class="media-left">
						                                  <img alt="img" src="{{asset('contents/website')}}/images/client.png" class="media-object news-img">
						                                </div>
						                                <div class="media-body">
						                                 <h4 class="author-name">Admin</h4>
						                                 <span class="comments-date"> Posted on 12th Dec, 2017</span>
						                                 <span class="author-tag">Author</span>
						                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						                              	<a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						                                </div>
						                              </div>
						                            </li>
						                            <ul class="children">
						                              <li>
						                                <div class="media">
						                                  <div class="media-left">
						                                  	 <img alt="img" src="{{asset('contents/website')}}/images/client.png" class="media-object news-img">
						                                  </div>
						                                  <div class="media-body">
						                                   <h4 class="author-name">David Muller</h4>
						                                   <span class="comments-date"> Posted on 12th Dec, 2017</span>
						                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						                               		<a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						                                  </div>
						                                </div>
						                              </li>
						                            </ul>
						                          </ul>
						                          <li>
						                            <div class="media">
						                              <div class="media-left">
						                                	<img alt="img" src="{{asset('contents/website')}}/images/client.png" class="media-object news-img">
						                              </div>
						                              <div class="media-body">
						                               <h4 class="author-name">Jhon Doe</h4>
						                               <span class="comments-date"> Posted on 12th Dec, 2017</span>
						                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						                               <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						                              </div>
						                            </div>
						                          </li>
						                        </ul>
						                        <!-- comments pagination -->
						                        <nav>
						                          <ul class="pagination comments-pagination">
						                            <li>
						                              <a aria-label="Previous" href="#">
						                                <span class="fa fa-long-arrow-left"></span>
						                              </a>
						                            </li>
						                            <li><a href="#">1</a></li>
						                            <li><a href="#">2</a></li>
						                            <li><a href="#">3</a></li>
						                            <li><a href="#">4</a></li>
						                            <li><a href="#">5</a></li>
						                            <li>
						                              <a aria-label="Next" href="#">
						                                <span class="fa fa-long-arrow-right"></span>
						                              </a>
						                            </li>
						                          </ul>
						                        </nav>
						                      </div>
						                    </div>
							                <!-- end blog comment -->

							                <!-- start respond form -->
						                    <div id="respond">
						                      <h2 class="reply-title">Leave a reply</h2>
						                      <form id="commentform">
						                        <p class="comment-notes">
						                          Your email address will not be published. Required fields are marked <span class="required">*</span>
						                        </p>
						                        <p class="comment-form-author">
						                          <label for="author">Name <span class="required">*</span></label>
						                          <input type="text" required="required" name="author">
						                        </p>
						                        <p class="comment-form-email">
						                          <label for="email">Email <span class="required">*</span></label>
						                          <input type="email" required="required" aria-required="true" name="email">
						                        </p>
						                        <p class="comment-form-url">
						                          <label for="url">Website</label>
						                          <input type="url" value="" name="url">
						                        </p>
						                        <p class="comment-form-comment">
						                          <label for="comment">Comment</label>
						                          <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
						                        </p>
						                        <p class="form-allowed-tags">
						                          You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
						                        </p>
						                        <p class="form-submit">
						                          <input type="submit" value="Post Comment" class="mu-send-msg-btn" name="submit">
						                        </p>
						                      </form>
						                    </div>
						                	<!-- end respond form -->

										</article>
										<!-- End single item -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="mu-blog-sidebar">
										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<form class="mu-search-form">
												<input type="search" placeholder="Search">
												<button class="mu-search-submit-btn" type="submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget mu-sidebar-social-widget">
											<h2 class="mu-sidebar-widget-title">Follow us</h2>
											<div class="mu-social-media">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>
												<a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
												<a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
												<a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>
											</div>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Popular post</h2>
											<div class="mu-popular-content-widget">
												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="{{asset('contents/website')}}/images/blog-img-1.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>

												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="{{asset('contents/website')}}/images/blog-img-2.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>

												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="{{asset('contents/website')}}/images/blog-img-3.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>
											</div>

										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Blog archives</h2>
											<ul class="mu-sidebar-widget-nav">
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2017 (10)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2016 (25)</a>
													<ul>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>December</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>November</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>October</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>September</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2015 (86)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2014 (105)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2013 (17)</a></li>
											</ul>

										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Catagories</h2>
											<ul class="mu-sidebar-widget-nav">
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Web Design (38)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>User Interface (22)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Digital Marketing (152)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Mobile Deveplopment (542)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Events (48)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>E-commerce (23)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>News (24)</a></li>
											</ul>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Tags</h2>
											<div class="mu-tags">
												<a href="#">Web Design</a>
												<a href="#">Ecommerce</a>
												<a href="#">Events</a>
												<a href="#">Marketing</a>
												<a href="#">UI</a>
												<a href="#">UX</a>
												<a href="#">Mobile app</a>
												<a href="#">Web Development</a>
												<a href="#">Graphics Design</a>
												<a href="#">SEO</a>
											</div>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget mu-sidebar-subscribe-widget">
											<h2 class="mu-sidebar-widget-title">News subscribe</h2>

										<form class="mu-subscribe-form">
											<input placeholder="Write your e-mail here" type="email">
											<button class="mu-subscribe-btn">Subscribe</button>
										</form>

										</div>
										<!-- End single widget -->

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
