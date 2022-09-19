@extends('app')
@section('content')


<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh1.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Contact</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of contact page section
	============================================= -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Get a Quote</span>
								<h2>Get in Touch

								</h2>
							</div>
							<div class="ft-contact-page-contact-info">
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Office address</h3>
										<p>Stand 4974
                                            Lezard Avenue
                                            Milton Park <i>(Cnr Prince Edward & Lezard Ave)</i> HRE</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Phone numbers</h3>
                                        <p>+263 77 550 7889</p>
                                        <p>+263 77 698 8651</p>
                                        <p>+263 71 836 6110</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<p>limitlexlogistics@gmail.com</p>
										{{-- <p>help@support.com</p> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Get a Quote</h3>
							<form action="https://html.themexriver.com/fastrans/contact.php">
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="name" placeholder="Your Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Your Email">
									</div>
									<div class="col-lg-6">
										<input type="text" name="affi" placeholder="Affiliation">
									</div>
									<div class="col-lg-6">
										<input type="text" name="number" placeholder="Number">
									</div>
									<div class="col-lg-6">
										<input type="text" name="department" placeholder="Inquiry Department">
									</div>
									<div class="col-lg-6">
										<input type="text" name="date" placeholder="Date">
									</div>
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button> Book An Appointmet</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of contact page section
	============================================= -->

@endsection
