		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Temas para paginas web</h1>
				<div class="separator"></div>
				<p class="lead text-center">Presionando cualquiera de las imagenes para verlo en VIVO.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">Todas</a></li>
								@foreach($categories as $category)
									<li><a href="#" data-filter=".{{ $category->name }}">{{ $category->name }}</a></li>
								@endforeach
								{{-- <li><a href="#" data-filter=".web-design">Web design</a></li>
								<li><a href="#" data-filter=".app-development">App development</a></li>
								<li><a href="#" data-filter=".site-building">Site building</a></li> --}}
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							@foreach( $themes as $theme )
								<div class="{{ 'col-sm-6 col-md-3 isotope-item '.$theme->category->name }}">								
									<div class="image-box">
										<div class="overlay-container">
											<img src="{{ asset('portfolio/'.$theme->image) }}" alt="LIVE DEMO">
											<a class="overlay" data-toggle="modal" data-target="{{ '#project-'.$theme->id }}">
												<i class="fa fa-search-plus"></i>
												<span>{{ $theme->category->name }}</span>											
											</a>
										</div>
										<a class="btn btn-default btn-block" data-toggle="modal" data-target="{{ '#project-'.$theme->id }}">{{ $theme->title }}</a>
									</div>														
								</div>
										<!-- Modal -->
								<div class="modal fade" id="{{ 'project-'.$theme->id }}" tabindex="-1" role="dialog" aria-labelledby="{{'project-'.$theme->id.'-label'}}" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="{{ 'project-'.$theme->id.'-label'}}">{{ $theme->title }}</h4>
											</div>
											<div class="modal-body">
												<h3>{{ $theme->desc }}</h3>
												<div class="row">
													<div class="col-md-6">
														<p>{{ $theme->body }}</p>
													</div>
													<div class="col-md-6">
														<img src="{{ asset('portfolio/'.$theme->image) }}" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
											
											<a target="_blank" href="{{ $theme->link }}" class="btn btn-sm btn-default">Live Demo</a>
											<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							@endforeach							
						</div>

						<!-- portfolio items end -->					
					</div>
				</div>
			</div>
		</div>






