@extends('layouts.app')
@section('content')
<div id="body-wrap" class="enable-lazy-load">
  <div id="wrap">
    <header class="config-header-list-page">
      @include('partials.navigation')
      <div class="header-style-forall s-style-2">
        <div class="hs-ct-content">
          <div class="bg-header-top" style="background-image:url({{ asset('assets/images/picjumbo.jpg') }})">
            <div class="header-style-basic container container-1340  dark-div ">
              <div class="title-block">
                <div class="text-icon">
                  <div class="fa fa-star"></div>
                </div>
                <div class="text-group">
                  <h1 class="h3">CONTACTANOS</h1>
                  <h2 class="main-font-1 h6">Revisa nuestra informacion</h2>
                </div>
              </div>
              <div class="cactus-breadcrumb">
                <a href="/">Home</a>
                <span class="ct-s-v-u">\</span>
                <span class="current">CONTACT</span>
              </div>
              <!-- .breadcrumbs -->
            </div>
          </div>                              
        </div>
      </div>
    </header>
    <div id="cactus-body-container">    
        <div class="cactus-sidebar-control ">
          <div class="container container-1340-main">
            <div class="row">
              <div class="col-md-9 main-content-col">      
                <div class="main-content-col-body">
                  	<div class="single-page-content single-content"> 
						<article id="post-4192" class="cactus-single-content post-4192 page type-page status-publish hentry">
							<div class="body-content">
								<div class="vc_row wpb_row vc_row-fluid contact-bus vc_custom_1446085715445">
									<div class="wpb_column vc_column_container vc_col-sm-3">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element  vc_custom_1446086355294">
													<div class="wpb_wrapper">
														<h5>DIRECCION</h5>
														<p>AV. ISLA TERRANOVA NO. 4285 – 17<br>
														COL: RESIDENCIAL JARDINES DEL SUR<br>
														CP: 44950  GUADALAJARA, JAL.</p>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h5>TELEFONO</h5>
														<p>01 33 1942 7873<br>
														jacqueline.garcia@mrodistribuidora.com</p>
													</div>
												</div>
												<div class="wpb_raw_code wpb_content_element wpb_raw_html">
													<div class="wpb_wrapper">
														<ul class="social-listing list-inline">
															<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
														
															<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
															</li><li class="email"><a href="#"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-9">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<div>
													@if ($errors->any())
														<div class="alert alert-danger alert-dismissible fade show" role="alert" style="opacity: 1">
															<ul>
																@foreach ($errors->all() as $error)
																	<li class="d-block">{{$error}}</li>
																@endforeach
															</ul>
														</div>  
													@endif
													@if (Session::has('mensaje'))
														<div class="alert alert-{{Session::get('class')}} alert-dismissible fade show" role="alert" style="opacity: 1">
															<strong>{{ Session::get('mensaje') }}</strong>
														</div>                    
													@endif
													<form action="/sendmail" method="POST">
													@csrf
													<p>
														<span class="wpcf7-form-control-wrap text-25">
															<input type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Su Nombre *">
														</span>
														<br>
														<span class="wpcf7-form-control-wrap email-839">
															<input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Su Email *">
														</span>
														<br>
														<span class="wpcf7-form-control-wrap text-874">
															<input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Asunto *">
														</span>
														<br>
														<span class="wpcf7-form-control-wrap textarea-461">
															<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Mensaje *"></textarea>
														</span>
														<div class="col-sm-12">
															<div class="form-group pt-4">{!! app('captcha')->display() !!}</div>
														</div>
														<br>
														<button type="submit" class="wpcf7-form-control">Enviar</button>
														<div class="wpcf7-response-output wpcf7-display-none"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="entry-footer"></div><!-- .entry-footer -->
							</div>
						</article>
					</div>
                </div>        
            </div>                        
        </div>
	</div>
</div>
</div>
@endsection

 

