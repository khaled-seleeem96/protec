<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTEC-EGY</title>
    <link rel="icon" href="img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    
</head>
<body  >
    <p id="home"></p>
    <!--PRELOADER-->
     <div class="preloader-holder">
     <div class="preloarder center">
        <img src="{{ asset('img/pre.gif')}}" width="100%" alt="logo">
        <br><br>
        <img src="{{ asset('img/text.png')}}" width="100%">
     </div>
     </div>
    <!--/PRELOADER-->

    <!--NAVBAR-->
     <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <div style="width: 65px;">
        </div>
        <a href="#" class="navbar-brand">
            <img src="{{ asset('img/logo.png')}}" class="logo"  alt="Protec">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--LINKS-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="#" data-page="home" class="nav-item nav-a nav-link ">Home</a>
                <a href="#" data-page="about" class="nav-item nav-a nav-link">About Us</a>
                <a href="#" data-page="ser" class="nav-item nav-a nav-link">Services</a> 
                <a href="#" data-page="contact" class="nav-item nav-a nav-link">Contact Us</a> 
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="nav-item nav-a nav-link" style="border: none; background-color: white;">Tickets</button> 
            </div>
            <div style="width: 65px;">
            </div>
        </div>
        <!--/LINKS-->
       


     </nav>
    <!--/NAVBAR-->
    <!--SLIDER-->
     <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="container">
                <div class="slider-div col-lg-5 col-md-8 col-10 ">
                <h5 class="slider-p">// We Create Leading Digital Products</h5>
                <h1 class="slider-h">END-TO-END</h1>
                <h1 class="slider-h">DEVELOPMENT</h1>
                <p class="slider-p">We are 100+ professional software engineers with more than 10 years of experience in delivering superior products.</p>
                </div>
              </div>
            <img src="{{ asset('img/a.jpg')}}"  class="d-block w-100 slider-img" alt="first img">
            
              </div>
              
       <div class="carousel-item">
        <div class="container">
            <div class="slider-div col-lg-5 col-md-8 col-10 ">
            <h5 class="slider-p">// Only High-Quality Services</h5>
            <h1 class="slider-h">FROM IDEA</h1>
            <h1 class="slider-h">TO PRODUCT</h1>
            <p class="slider-p">We Are A Company Specialized In The Field Of Information Technology Consisting Of A Professional Team In The Field Of Information Systems</p>
            </div>
          </div>  
            <img src="{{ asset('img/aa.jpg')}}" class="d-block w-100 slider-img" alt="sec img">
            
          </div>
          
        </div>
     </div>
    <!--/SLIDER-->
    <!--Partners-->
     <div class="container-fluid part" id="about">
          <div class="row">
            <div class="col-lg-3 col-6">
                <img src="{{ asset('img/hp.png')}}"  style="margin-left: 30px;" class="part-img">
            </div>
            <div class="col-lg-3 col-6">
                <img src="{{ asset('img/link.png')}}" style="padding-top: 15%;" class="part-img">
            </div>
            <div class="col-lg-3 col-6">
                <img src="{{ asset('img/hik.png')}}" style="padding-top: 20%;" class="part-img">
            </div>
            <div class="col-lg-3 col-6">
                <img src="{{ asset('img/cisco.png')}}" style="padding-top: 15%;" class="part-img">
            </div>
            
          </div>
     </div>
    <!--/Partners-->
    <!-- ABOUT -->
     <div class="container about"  >
         <div class="row">
             <div class="col-lg-6 col-md-6 col-12">       
                <div class="header">
                    <h2 class="text-header" >ABOUT US</h2>
                    </div>
                 <h3 class="about-h4">Our vision is to advance human development .</h3>
                 <p class="about-p">PROTECH  was established in 2020 in IT Consulting practice however due to the changing built environment and the growing needs of our clients;
                      it became necessary to broaden the services that could be provided by PROTECH,
                      so as to offer multi-disciplinary IT management consulting services and IT outsourcing under one banner.  PROTECH have extended their portfolio through strategic partnerships to cover IT Infrastructure and Network Implementation, Business Management Tools and Applications and Security Solutions. We also act in a virtual CIO role as your trusted advisor,
                      with a focus on improving processes and future growth .</p>
                
             </div>
             
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="{{ asset('img/about.jpg')}}" class="about-img" width="100%" cl alt="about us" >
                 <p id="ser"></p>  
             </div>
         </div>
          
     </div>
    <!-- /ABOUT -->
    <!--Services-->
     <div class="container-fluid about">
         <div class="container">
             
            <div class="header">
                <h2 class="text-header">SERVICES</h2>
                </div>
             <div class="row">
             <div class="col-lg-4 col-md-4 col-12 ser-div">
                 <img src="{{ asset('img/IT Support Services.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                 <div class="ser-sdiv">
                     <h5 class="ser-h5">IT Support Services</h5>
                     <div class="p-holder">
                        <p class="ser-p">We provides Remote IT support in Egypt, with Onsite visits available upon demand, effectively becoming your IT Help Desk Partner.</p>
                     </div>
                 </div>
             </div>
             <div class=" col-md-4 col-12 ser-div">
                <img src="{{ asset('img/security.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                <div class="ser-sdiv">
                    <h5 class="ser-h5">IT Outsourcing Solutions </h5>
                    <div class="p-holder">
                    <p class="ser-p">We help organisational and business stakeholders to improve performance, increase effectiveness, reduce costs and achieve desired goals and objective</p>
               </div>
             </div>
            </div>
            <div class=" col-md-4 col-12 ser-div">
                <img src="{{ asset('img/IT Support Services.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                <div class="ser-sdiv">
                    <h5 class="ser-h5">IT Infrastructure Services</h5>
                    <div class="p-holder">
                    <p class="ser-p">We offer IT Infrastructure services that are catered to support a smooth Network Systems Administration routine, based on your needs and objectives.</p>
                </div>
            </div>
                </div>
                
                <div class=" col-md-4 col-12 ser-div">
                    <img src="{{ asset('img/security.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                    <div class="ser-sdiv">
                        <h5 class="ser-h5">IT Consulting Services </h5>
                        <div class="p-holder">
                        <p class="ser-p">There is a growing need for IT Consulting in Egypt many business executives across industries are questioning the potential benefits of the current breakthrough in the Tech world</p>
                    </div>
                </div>
                    </div>
                    <div class=" col-md-4 col-12 ser-div" >
                        <img src="{{ asset('img/IT Support Services.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                        <div class="ser-sdiv">
                            <h5 class="ser-h5">IT Help Desk management</h5>
                            <div class="p-holder">
                            <p class="ser-p">Protech provides Remote IT Support in Egypt, with Onsite visits available upon demand, effectively becoming your IT Help Desk Partner.</p>
                        </div>
                    </div>
                        </div>  
                        <div class=" col-md-4 col-12 ser-div" >
                            <img src="{{ asset('img/security.png')}}" alt="ser1" class="ser-img" width="100%" height="300px">
                            <div class="ser-sdiv">
                                <h5 class="ser-h5">IT Security Solutions </h5>
                                <div class="p-holder">
                                <p class="ser-p">The company provides the best and the latest protection solutions in the field of surveillance cameras and everything related to information technology security.</p>
                            </div>
                        </div>
                            </div>  
        </div><p id="contact"></p>
        </div>
        </div>
    <!--/Services-->
    <!--contact-->
     <div class="container-fluid about">
        <div class="container">
                <div class="header">
                <h2 class="text-header">CONTACTS</h2>
                </div>
                <h5 class="con-h" >Give us a call or drop by anytime, 
                    we endeavour to answer all enquiries within 24 hours on business days. 
                    We will be happy to answer your questions.
                </h5>
            <div class="row" >
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="contact">
                        <!-- address -->
                    <img src="{{ asset('img/address.png')}}" class="con-img">
                    <p class="con-head">Our Address:</p>
                    <p class="con-headp">93 Sudan St ,ELMohandsen Giza ,Egypt</p>
                    <p class="con-headp">A4, 3 RD Industrial Zone,10 of Ramadan City,</p>
                    </div>
                    <!-- email -->
                    <div class="contact">
                    <img src="{{ asset('img/email.png')}}" class="con-img">
                    <p class="con-head">Our Mailbox:</p>
                    <p class="con-headp">Support@protec-egy.com</p>
                    <p class="con-headp">Info@protec-egy.com</p>
                    </div>
                    <!-- phone -->
                    <div class="contact">
                    <img src="{{ asset('img/phone.png')}}" class="con-img">
                    <p class="con-head">Our Phone:</p>
                    <p class="con-headp">+20-103-3774-404</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 con-div" >
                    <h2 style="color: white;margin: 20px;font-family: sans-serif;" >We Are Here To Help You!</h2>
                    <form method="post" action="{{ action('guestController@store') }}">
                    {{csrf_field()}}
                        <input type="text" class="con-input" name="name" placeholder="Your Name *" required >
                        <input type="email" class="con-input" name="email" placeholder="Your Email *" required >
                        <textarea style="height: 150px;resize: none;" name="msg" class="con-input"  placeholder="Message..."></textarea>
                        <input type="submit" value="Send Message" class="con-btn">
                    </form>
                </div>

            </div> 
        </div>
     </div>
     <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d13780.795457252056!2d31.813908298064277!3d30.288399817411197!3m2!1i1024!2i768!4f13.1!2m1!1sA4%2C%203%20RD%20Industrial%20Zone%2C10%20of%20Ramadan%20City%2C!5e0!3m2!1sen!2seg!4v1597385797098!5m2!1sen!2seg" width="100%" height="400" frameborder="0" style="border:0;margin-top: 80px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!--/contact-->
    <!-- footer -->  
     <footer class="container-fluid">
       <div class="container">
           
               <div style="text-align: center;align-items: center;">
            <img  src="{{ asset('img/logo3.png')}}" width="250px"class="footer-logo"   alt="Protec"   >
             </div>
            <div style="text-align: center;align-items: center;"> 
                <a href="#" data-page="home"  class="footer-link ">Home</a>
                <a href="#" data-page="about" class="  footer-link">About Us</a>
                <a href="#" data-page="ser" class="  footer-link ">Services</a> 
                <a href="#" data-page="contact" class=" footer-link">Contact Us</a> 
            </div>
            
        </div>
        <p style="text-align: center !important;color: white;padding-top: 40px;">Copyright © 2020 PROTEC-EGY . All Rights Reserved.</p>
        <div  style="text-align: center;align-items: center;">
           <a href="#"> <img src="{{ asset('img/fb.png')}}"  class="footer-f"></a>
           <a href="#"> <img src="{{ asset('img/insta.png')}}"  class="footer-f"></a>
           <a href="#"> <img src="{{ asset('img/yt.png')}}"  class="footer-f"></a>
        </div>
     </div>
     </footer>
    <!-- /footer -->
</body>


 <!-- model login -->
  <div style="z-index: 1900;"  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div   class="modal-dialog modal-dialog-centered" role="document">
      <div style="background-image: url({{ asset('img/56413.jpg')}});" class="modal-content">
        <div class="modal-header">
            <div style="text-align: center;align-items: center;">
                <img  src="{{ asset('img/logo3.png')}}" width="150px"   alt="Protec"   >
                 </div>
            
          </button>
        </div>
        <div class="modal-body">
            <form style="height: 200px;" id="login_form" action="loginClient" method="POST" >
            {{ csrf_field() }}
                <input type="email" class="con-input" id="email" name="email" placeholder="Your Email *" required >
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                <input type="password" id="password" name="password" class="con-input" placeholder="Your Password *" required >
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong  class="text">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <input class="con-btn" id="client_login" type="submit" value="Login" >
                <button style="background-color: red;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        </div>
      </div>
    </div>
  </div>
 <!-- /model -->
<!-- model2 -->
 <div style="z-index: 1900;"  class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div   class="modal-dialog modal-dialog-centered" role="document">
      <div style="background-image: url({{ asset('img/56413.jpg')}});" class="modal-content">
        <div class="modal-header">
            <div style="text-align: center;align-items: center;">
                <img  src="{{ asset('img/logo3.png')}}" width="150px"   alt="Protec"   >
                 </div>
            
          </button>
        </div>
        <div class="modal-body">
            <form style="height: 400px;" action="message_client" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <input type="hidden" value="{{Auth::check()?Auth::user()->id:''}}" name="client_id">
                <select class="con-input" style="color: black;"name="categories_id">
                    <option value="1">it</option>
                    <option value="2" >cam</option>
                    <option value="3">server</option>
                </select>
                <textarea style="height: 150px;resize: none;" name="msg" class="con-input"  placeholder="Message..."></textarea>
                <input type="submit" value="Send Message" class="con-btn"> 
                <a style="background-color: red;"  type="button" class="btn btn-secondary" data-dismiss="modal"
                href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Close</a>
            </form>
        </div>
      </div>
    </div>
  </div>
<!-- /model2 -->
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="{{ asset('js/app.js')}}"></script>
<script>



 $('#login_form').submit(function(event){
    event.preventDefault();
      $.ajax({
        type: "POST",
        url: '/loginClient', // This is what I have updated
        data: { 
            "_token": "{{ csrf_token() }}",
            email:  $('#email').val(),
            password:  $('#password').val()
         }
    }).done(function( msg ) {

      if(msg['status'] ==1){
        $('#exampleModalCenter1').modal('show');
      }
       else{
         alert(msg['msg']);
       }
    });
})
</script>
<script src="{{ asset('js/js.js')}}"></script>

</html>