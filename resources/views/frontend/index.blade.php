@extends('frontend/layouts/master')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-7 order-1 order-lg-1 hero-img">
          <img src="{{asset('/frontend')}}/assets/img/hero-img.sv" class="img-fluid animated" alt="">
        </div>

        <div class="col-lg-5 order-2 order-lg-2 d-flex flex-column justify-content-center">
          <h1>Experience NEXFRAGRANCE, Experience Affordable Luxury!</h1>
          <p>The leading yet affordable player in fragrance and cosmetics. Driven by the pursuit of perfection, originality, creativity, and flawless mastery! </p>
          <div>
            <a href="#" class="btn-get-started scrollto">Contact Now</a>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
	  
	  
	  	   <!-- ======= Section-5 ======= -->

	                      <div data-aos="fade-left" class="container service newss">
                          <div class="content text-center">
                          <div class="prologo-title">
                         
                            <div class="prologo-slider">
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/burberry.jpg" alt="img1"/>
                                </div>
								
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gucci.jpg" alt="img1"/>
                                </div>                                
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/jimmy-choo.jpg" alt="img1"/>
                                </div>                                
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/juicy-couture.jpg" alt="img1"/>
								</div>                               
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/lancome.jpg" alt="img1"/>
                                </div>
								                                
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/marc-jacobs.jpg" alt="img1"/>
                                </div>                               
							  	<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/paco-rabanne.jpg" alt="img1"/>
                                </div>                                
							  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/prada.jpg" alt="img1"/>
                                </div>                                 
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/ralph-lauren.jpg" alt="img1"/>
                                </div>                                 
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/thierry-mugler.jpg" alt="img1"/>
                                </div>                               
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/tom-ford.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/yves-saint-laurent.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/calvin-klein.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/christian-dior.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/creed.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/dolce-and-gabbana.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gianni-versace.jpg" alt="img1"/>
                                </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/giorgio-armani.jpg" alt="img1"/>
                                </div>
                               </div>
							  </div>
							  </div>
                      </div>
	  	  <!-- ======= Section-5 ======= -->
	  
	  
<!--
  // About Section 
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{asset('/frontend')}}/assets/img/about.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up"></h3>
            <br data-aos="fade-up" data-aos-delay="100">
              <p>
            </p>
            <div class="row">
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                <h4></h4>
                <p></p>
              </div>
              <div>
                <a href="#" class="btn-get-started scrollto">Expert Team</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    /* Services Section */
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2></h2>
        </div>

        <div class="row">
          @if($category_lists)
            @foreach($category_lists as $row)
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <div class="card-img"><img src="{{ ($row->photo != '') ? $row->photo : asset('/frontend/assets/img/no-image-icon.png') }}" alt=""></div>
                  <h4 class="title">{{$row->title}}</h4>
                  <a href="{{route('product-cat',$row->slug)}}" class="card-btn">View All<i class='bx bx-right-arrow-alt'></i></a>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
   - End Services Section 

  // Section-3 
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up"></h3>
            <br data-aos="fade-up" data-aos-delay="100">
              <p>
            </p>
            <div class="row">
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                <h4></h4>
                <p></p>
              </div>
              <div>
                <a href="#" class="btn-get-started scrollto">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
            <img src="{{asset('/frontend')}}/assets/img/sec-3.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
        </div>

      </div>
    </section>
  //  End Section-3 
    
   // Section-4 
<section id="sec-4" class="sec-4">
  <div class="container">

    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0">
        <h3 data-aos="fade-up"></h3>
        <br data-aos="fade-up" data-aos-delay="100">
          <p>
        </p>
        <div>
          <a href="#" class="btn-get-started scrollto">Order Now</a>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
        <img src="{{asset('/frontend')}}/assets/img/sec4.png" class="img-fluid" alt="" data-aos="zoom-in">
      </div>
    </div>

  </div>
</section>
   // End Section-4

   // Product-Section 
 <section id="product-sec" class="product-sec product-bg">
  <div class="container" data-aos="fade-up">

    <div class="pro-title">
      <h2>All Product</h2>
    </div>
	@if($product_lists)
    <div class="row">
		 @foreach($product_lists as $row)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="card-img"> <a href="{{route('product-detail',$row->slug)}}"><img src="{{$row->small_image}}" alt=""></a></div>
          <h4 class="title">{{$row->title}}</h4>
          <p class="price-p">${{$row->wholsale_price}}</p>
          <a href="{{route('product-detail',$row->slug)}}" class="card-btn">View<i class='bx bx-right-arrow-alt'></i></a>
        </div>
		 
      </div>
		 @endforeach
	
      <div class="all-prod-btn">
        <a href="{{route('product-lists')}}" class="btn-get-started scrollto">View All</a>
      </div>
		
    </div>
	  @endif

  </div>
</section>
<!-- End Product-Section -->
	  <!-- End comment-Section -->
	  

	   <!-- ======= Section-5 ======= -->

	                      <div data-aos="fade-left" class="container service newss">
                          <div class="content text-center">
                          <div class="pro-title">
				         <img src="{{asset('/frontend')}}/assets/img/BestSeller.jpg" alt="img1"/> 
                          </div>
                            <div class="pro-slider">
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/blackbox.jpg" alt="img1"/>
                                       <h5>Armaf Club De Nuit Intense</h5>
                                </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/greybox.jpg" alt="img1"/>
                                   <h5>Burberry Touch Cologne</h5>                         
                            </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/skyblue.jpg" alt="img1"/>
                                       <h5>D & G Light Blue</h5>
                            </div>
								   <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/calvin.jpg" alt="img1"/>
                                       <h5>CK One Cologne</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/blueper.jpg" alt="img1"/>
                                       <h5>Versace Dylan Blue</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Obsession.jpg" alt="img1"/>
                                       <h5>Obsession</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Viva.jpg" alt="img1"/>
                                       <h5>Viva La Juicye</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Nautica.jpg" alt="img1"/>
                                       <h5>Nautica Voyage</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Eternity.jpg" alt="img1"/>
                                       <h5>Eternity</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/coolwater.jpg" alt="img1"/>
                                       <h5>Cool Water</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Escape.jpg" alt="img1"/>
                                       <h5>Escape</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Euphoria.jpg" alt="img1"/>
                                       <h5>Euphoria</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Montblanck.jpg" alt="img1"/>
                                       <h5>Mont Blanc Explorer</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Versace.jpg" alt="img1"/>
                                       <h5>Versace Eros</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Acqua.jpg" alt="img1"/>
                                       <h5>Acqua Di Gio</h5>
                            </div>
                      </div>
                     </div>
                   </div>
	  	  <!-- ======= Section-5 ======= -->

	  <!-- ======= Section-6 ======= -->

	                      <div data-aos="fade-left" class="container service2 newss">
                          <div class="content text-center">
                          <div class="pro-title">
				         <img src="{{asset('/frontend')}}/assets/img/New.jpg" alt="img1"/> 
                          </div>
                            <div class="pro-slider container">
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Clive.jpg" alt="img1"/>
                                       <h5>Clive Christian 20</h5>
                                </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Variety.jpg" alt="img1"/>
                                   <h5>Orientica Variety</h5>                         
                            </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Casa.jpg" alt="img1"/>
                                       <h5>Xerjoff Casamorati 1888</h5>
                            </div>
								   <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Foreo.jpg" alt="img1"/>
                                       <h5>Foreo</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Wesker.jpg" alt="img1"/>
                                       <h5>Wesker Imperial</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/471040.jpg" alt="img1"/>
                                       <h5>Annemarie Borlind</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/orange.jpg" alt="img1"/>
                                       <h5>Wesker Eau De Mystique</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/redper.jpg" alt="img1"/>
                                       <h5>Wesker Deviant</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/lightblue.jpg" alt="img1"/>
                                       <h5>Wesker Histria</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/brown.jpg" alt="img1"/>
                                       <h5>Wesker The Scent Of Banat</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/carner.jpg" alt="img1"/>
                                       <h5>Carner Barcelona Cuirs</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/carner2.jpg" alt="img1"/>
                                       <h5>Carner Barcelona Palo Santo</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/carner3.jpg" alt="img1"/>
                                       <h5>Carner Barcelona Costarela</h5>
                            </div>
                      </div>
                     </div>
                   </div>
	  	  <!-- ======= Section-6 ======= -->
	  
	  
	   <!-- ======= Section-7 ======= -->

	                      <div data-aos="fade-left" class="container service2 newss">
                          <div class="content text-center">
                          <div class="pro-title">
				         <img src="{{asset('/frontend')}}/assets/img/giftbg.jpg" alt="img1"/> 
                          </div>
                            <div class="pro-slider">
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/cuba.jpg" alt="img1"/>
                                       <h5>Cuba Variety</h5>
                                </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gift1.jpg" alt="img1"/>
                                   <h5>Jadore Gift Set</h5>                         
                            </div>
                                <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gift2.jpg" alt="img1"/>
                                       <h5>Cloud Ariana Grande</h5>
                            </div>
								   <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gift3.jpg" alt="img1"/>
                                       <h5>Miss Dior Blooming Bouquet Set</h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gift4.jpg" alt="img1"/>
                                       <h5>Miss Dior Eau De Parfum </h5>
                            </div>
								  <div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/gift5.jpg" alt="img1"/>
                                       <h5>Design 2pc Set </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Dolce.jpg" alt="img1"/>
                                       <h5>Dolce & Gabbana Variety </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Nioxinpack.jpg" alt="img1"/>
                                       <h5>Nioxin</h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Sunflowers.jpg" alt="img1"/>
                                       <h5>Sunflowers </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Nioxin.jpg" alt="img1"/>
                                       <h5>Nioxin </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Versacee.jpg" alt="img1"/>
                                       <h5>Versace Dylan Blue </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Versace2.jpg" alt="img1"/>
                                       <h5>Versace Variety </h5>
                            </div>
								<div class="">
                                        <img src="{{asset('/frontend')}}/assets/img/Joico.jpg" alt="img1"/>
                                       <h5>Joico </h5>
                            </div>
                      </div>
                      </div>
                     </div>
	  	  <!-- ======= Section-7 ======= -->
	  
	  
	    <!-- ======= Section-7 ======= -->

	                      <div data-aos="fade-left" class="container service2 newss">
                          <div class="content text-center">
                          <div class="pro-title">
                          </div>
		                    <h2>Beauty Tips</h2>
                            <div class="Beauty-slider container">
                                <div class="reviews py-4">
								    <h5>Layer Your Fragrances:</h5>
									<p>Make a long-lasting and unique scent by layering your fragrances. Start with a scented body lotion or mist, followed by a combination of perfume or cologne to enhance the longevity and depth of your fragrance. </p>
                                </div>
								
							   <div class="reviews py-4">
								   <h5>Have Scents For Different Occasions:</h5>
									<p>Have a variety of fragrances for different occasions. Opt for light and fresh scents for daytime activities and save richer, more intense fragrances for evenings or special events.</p>
                                </div>
								
							   <div class="reviews py-4">
								   <h5>Blend, Blend, And Blend!</h5>
									<p>The key to flawless makeup is blending. Whether it’s foundation, eyeshadow, or blush, take time to blend for a smoother and natural look. </p>
                                </div>
								
								<div class="reviews py-4">
								   <h5>Modify Cosmetics With Seasons:</h5>
									<p>Adapt your cosmetics routine to the changing of the seasons. Richer formulas could be more appropriate for the winter months, but lightweight, breathable products are ideal for summer use. Remember to choose a foundation shade that corresponds with your skin color as the seasons change.</p>
                                </div>
								
								<div class="reviews py-4">
								   <h5>Try Something New:</h5>
									<p>Since makeup is an art, there are no hard and fast guidelines. Go ahead and try different colors, styles, and approaches. It's a fantastic approach to express your ideas and figure out what suits you the best.</p>
                                </div>

                      </div>
                      </div>
                     </div>
	  	  <!-- ======= Section-7 ======= -->
	  
	  
	  <!-- ======= Section-8 ======= -->
<section id="sec-6" class="sec-6">
  <div class="container">

    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
        <img src="{{asset('/frontend')}}/assets/img/sec-6.png" class="img-fluid" alt="" data-aos="zoom-in">
      </div>
      <div class="col-lg-6 pt-0 pt-lg-0">
          <div class="row">
             <div class="col-lg-12">
			  <h2>Client Endorsements:</h2>

                <div class="items">
                   <div class="card0">
                      <div class="card-boxi">
                         <p class="lead">I am absolutely in love with the affordability of Nexfragrances. The scents are unique and long-lasting. I always receive compliments whenever I wear them. Absolutely in love!</p>
                         <h3 class="text-left py-4">Janice. H Williams</h3>
                      </div>
                   </div>
                  <div class="card0">
                      <div class="card-boxi">
                         <p class="lead">I've been searching for a signature scent, and I finally found it with Nexfragrance. The fragrance is not that strong but lingers beautifully throughout the day. The packaging is elegant, and the price is unbeatable for such a high-quality product. I can't wait to try more scents!</p>
                         <h3 class="text-left py-4">John C. Myers</h3>
                      </div>
                   </div>
					<div class="card0">
                      <div class="card-boxi">
                         <p class="lead">As a makeup enthusiast on a budget, Nexfragrance has been a game-changer for me. The eyeliners are smooth, the foundation is buildable, and the setting spray keeps everything in place. I feel like I've discovered a hidden gem in the beauty world.</p>
                         <h3 class="text-left py-4">Suzanne A. Rice</h3>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div> 
    </div>
    <div class="tesi-img">
      <img src="../Roy/assets/img/quote-left.png" alt="">
    </div>
  </div>
</section>
<!-- End Section-8 -->
  </main>
  @endsection