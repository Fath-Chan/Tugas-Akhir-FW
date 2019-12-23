@extends('templates.master')

@section('content')
<div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <h1 class="text-white mb-3">Contact</h1>
        <p class="lead text-white">Hubungi kami sekarang untuk mendapatkan informasi lebih lanjut</p>
      </div>

      
        <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/hero_3.jpg');"></div>
      
    </div>
    
    
    <div class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="#">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-cursive mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-muted small text-uppercase font-weight-bold">Address:</span>
                  <span>Jl. Pangeran no.93, Banjarmasin, Indonesia</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Phone:</span><span>+62 893 4293 0053</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Email:</span><span>1610817210004@mhs.ulm.ac.id</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    


    <div class="site-section">
      <div class="container">
        
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
              <div class=""><h2 class="text-cursive">Helping the Homeless, Hungry, and Hurtings Children</h2></div>
              <div class="ml-auto"><a href="#" class="btn btn-primary">Donate Now</a></div>
            </div>
        
      </div>
    </div>
    @endsection()