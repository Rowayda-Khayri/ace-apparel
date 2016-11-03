
@extends('layout')


@section('pageContent')



			<div role="main" class="main">
				<div class="slider-container light rev_slider_wrapper" style="height: 700px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 700, "disableProgressBar": "on"}'>
						<ul>
							<li data-transition="fade">
								<img src="img/demos/construction/slides/slide-construction-1.jpg"  
									alt=""
									data-bgposition="center 100%" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
								
								<div class="tp-caption top-label tp-caption-custom-stripe"
									data-x="right" data-hoffset="100"
									data-y="bottom" data-voffset="100"
									data-start="1000"
									data-transform_in="x:[100%];opacity:0;s:1000;">#1 FASTEST-GROWING COMPANY</div>
							</li>
							<li data-transition="fade">
								<img src="img/demos/construction/slides/slide-construction-2.jpg"  
									alt=""
									data-bgposition="center 100%" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
								
								<div class="tp-caption top-label tp-caption-custom-stripe"
									data-x="right" data-hoffset="180"
									data-y="bottom" data-voffset="100"
									data-start="1000"
									data-transform_in="x:[100%];opacity:0;s:1000;">MODERN OFFICES DESIGN</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="container">
					<div class="row mt-xl mb-xl pt-xl mb-xl">
						<div class="col-md-4">
							<h2 class="mt-xl mb-none text-color-dark">Who We Are</h2>
							<p class="lead">Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="col-md-2 center hidden-xs hidden-sm">
							<img src="img/dotted-line-angle.png" class="img-responsive" />
						</div>
						<div class="col-md-6">
							<p class="mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-md" href="demo-construction-company.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<section class="section section-tertiary section-no-border section-custom-construction">
					<div class="container">
						<div class="row pt-xl">
							<div class="col-md-12">
								<h2 class="mb-none text-color-dark">Services</h2>
								<p class="lead">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>

						<div class="row mt-lg">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<img src="img/demos/construction/icons/ground-construction.png" alt="" class="img-responsive" />
									</div>
									<div class="feature-box-info ml-md">
										<h4 class="mb-sm">Pre-Construction</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										<a class="mt-md" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<img src="img/demos/construction/icons/construction.png" alt="" class="img-responsive" />
									</div>
									<div class="feature-box-info ml-md">
										<h4 class="mb-sm">General Construction</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										<a class="mt-md" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-md mb-xl">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<img src="img/demos/construction/icons/painting.png" alt="" class="img-responsive" />
									</div>
									<div class="feature-box-info ml-md">
										<h4 class="mb-sm">Painting</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										<a class="mt-md" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<img src="img/demos/construction/icons/plumbing.png" alt="" class="img-responsive" />
									</div>
									<div class="feature-box-info ml-md">
										<h4 class="mb-sm">Plumbing</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										<a class="mt-md" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="pt-md pb-xl home-concept-construction">
					<div class="container">
						<div class="row pt-xl">
							<div class="col-md-12">
								<h2 class="mb-none text-color-dark">Products</h2>
								<p class="lead">Lorem ipsum dolor sit amet.</p>

								<div class="lightbox" data-plugin-options='{"delegate": ".diamond", "type": "image", "gallery": {"enabled": true}}'>
									<ul class="diamonds">
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-1.jpg" class="diamond">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-1.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-2.jpg" class="diamond">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-2.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-3.jpg" class="diamond">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-3.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-4.jpg" class="diamond diamond-sm">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-4.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-5.jpg" class="diamond">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-5.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-6.jpg" class="diamond diamond-sm">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-6.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
										<li>
											<a href="img/demos/construction/gallery/construction-gallery-7.jpg" class="diamond diamond-sm">
												<div class="content">
													<img src="img/demos/construction/gallery/construction-gallery-7.jpg" class="img-responsive" />
												</div>
											</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<div class="row row-diamons-description">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
								<a class="btn btn-borders btn-primary" href="demo-construction-projects.html">View All Products</a>
							</div>
						</div>
					</div>
				</section>

				
                            
                            
                            @yield('blog')

				
			</div>


   
@stop

