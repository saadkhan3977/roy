@extends('frontend.layouts.master')

@section('title','Roy || About Us')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">Know Us!</h1>
        <p class="">Enjoy the world of Nexfragrance, where beauty is accessible and elegance meets affordability. With Nexfragrance, you can highlight your beauty, and redefine affordable luxury. We believe that everyone should feel amazing every day. We deal in a symphony of scents and outclass makeup.</p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="/frontend/assets/img/about.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class=""></i>
        <h2>Our Vision:</h2>
<p>Our journey began with a simple yet powerful vision – to make original and high-quality fragrances and makeup accessible to everyone. We envisioned a world where beauty is not bound by price tags, where everyone can revel in the delight of luxurious scents and premium makeup without having to compromise.</p><a href="#">Learn More</a> </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/frontend/assets/img/sec-3.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="frontend/assets/img/sec4.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class=""></i>
        <h2>Our Commitment:</h2>
        <p>At Nexfragrance, we are committed to providing an unparalleled beauty experience. From the moment you explore our fragrances to the transformative power of our makeup, our commitment to quality, originality, and affordability remains unwavering.

Join us on this journey of self-discovery and expression. Let Nexfragrance be your companion in the pursuit of affordable luxury, where every spritz and stroke is a celebration of your beautiful uniqueness. Welcome to a world where beauty knows no bounds because looking your absolute best is not an occasional privilege!
</p><a href="#">Learn More</a>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
</div>
<style>
	.social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
</style>

@endsection
