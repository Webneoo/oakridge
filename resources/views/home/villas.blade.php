@extends('layouts.layout')

@section('content')

<section class="page-header page-header-xs dark">
				<div class="container">

					<h1>VILLAS</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">The project</a></li>
						<li class="active">Villas</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->


			<!-- -->
			<section>
				<div class="container">
				
					<div class="row">

						<div class="col-md-6 col-sm-6 col-md-push-6">
							<header class="margin-bottom-60">
								<h2 class="nomargin">Villas</h2>
								<p class="font-lato size-20 nomargin">Grandeur and privacy</p>
							</header>

							<p>The villas have special transparencies in architectural design to benifit from lighting and view from the entrance of the villa<br><br>

								Private swimming pool and garden.<br>
								Private gardens <br>
								Private parking spaces<br>
								Private gated villas in main entrance to the villa‘s zones<br><br>

								Villas are composed of:<br>
								Garden floor: reception area + swimming pool + garden<br>
								Ground floor: big reception area with nice openings</p>
				
						</div>

						<div class="col-md-6 col-sm-6 col-md-pull-6">
							<img class="img-responsive" src="/assets/images/villa.jpg"  width="547"  alt="service" />
						</div>

					</div>

				</div>
			</section>

						<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter">

		

						<div class="row mix-grid">

							<div class="col-md-4 col-sm-4 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="/assets/images/villas/villas1.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>


											</span>
										</span>
										<img class="img-responsive" src="/assets/images/villas/villas1.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-4 col-sm-4 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="/assets/images/villas/villas2.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>


											</span>
										</span>
										<img class="img-responsive" src="/assets/images/villas/villas2.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->

@endsection