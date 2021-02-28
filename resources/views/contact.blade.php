@extends('layout.main')

@section('content')
<section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="img/light.png" alt="Light" class="light light-1">
        <img src="img/light.png" alt="Light" class="light light-2">
        <img src="img/light.png" alt="Light" class="light light-3">  
      </div>        
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Contact Us&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
        <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
        <p class="gray-text tm-welcome-description">Cafe House is free <span class="gold-text">responsive Bootstrap</span> v3.3.5 layout by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        <a href="#main" class="tm-more-button tm-more-button-welcome">Message Us</a>      
      </div>
      <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
    </div>      
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <h2 class="col-lg-12 margin-bottom-30">Send us a message</h2>
        <form action="#" method="post" class="tm-contact-form">
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
            </div>
            <div class="form-group">
              <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
            </div>
            <div class="form-group">
              <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
            </div>
            <div class="form-group">
              <button class="tm-more-button" type="submit" name="submit">Send message</button> 
            </div>               
          </div>
          <div class="col-lg-6 col-md-6">
            <div id="google-map"></div>
          </div> 
        </form>
      </section>
    </div>
  </div> 
  <footer>
    <div class="tm-black-bg">
      <div class="container">
        <div class="row margin-bottom-60">
          <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
            <h3 class="tm-footer-div-title">Main Menu</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Directory</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Our Services</a></li>
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <h3 class="tm-footer-div-title">About Us</h3>
            <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
            <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Get Social</h3>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
            <div class="tm-social-icons-container">
              <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>          
      </div>  
    </div>      
    <div class="container">
        <div class="row tm-copyright">
         <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
       </div>  
    </div>
    @stop