<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        

        <title>A S M Nasim's Profile</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/bootstrap-theme.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontAwesome.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/owl-carousel.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/light-box.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/templatemo-style.css')}}" rel="stylesheet">

      

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Marck+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Great+Vibes|Marck+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Permanent+Marker&display=swap" rel="stylesheet">

        <script src="frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <style>

        .grid-container {
            display:grid;
            grid-template-columns:50% 50%;
            background:white;
            padding:10px;
            grid-gap: 20px 50px;
        }
        .grid-item{
       
           color: black;
           text-align: center;
           

        }
      
        .item1{
            grid-row-start:1;
            grid-row-end:3;

        }

        .item3{
            grid-row-start: 2;
            grid-row-end:5;

        }
        .item5{
            grid-column-start: 2;
            grid-column-end:3;

        }
        
        table {
        border-collapse: collapse;
        }

        table, td, th {
        border: 1px solid blue;
        text-align:center;
        padding:10px;
        }
        
        
       
        </style>

       
    </head>
    <body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#video">Download</a></li>
                        <li><a href="#blog">Services</a></li>
                        <li><a href="#contact">Contact Me</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
        @foreach($personinfo as $p )
            <div class="logo">
                <a href="#">{{$p->person_first_name}}<em>{{$p->person_last_name}}</em></a>
            </div>
           @endforeach 
            <nav>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#profile">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Download
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Me
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                
                <div class="item item-1">
                <?php foreach($personinfo as $p ) { ?>
                    <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                          <h1 style="color:#8B4513 ;font-family: 'Permanent Marker', cursive;">{{$p->person_first_name}}<br>{{$p->person_last_name}}</h1>
                          <p><b style="color:#E59866 ;font-size:25px;font-family: 'Permanent Marker', cursive;font-family: 'Noto Sans', sans-serif;">{{$p->person_designation}}</b>
                          			 <br>
                          			"Believe you can and you're halfway there"</p>
                          <div class="white-button button">
                              <a href="#featured">Read More</a>
                          </div>
                        </div>
                        </div>
                    </div><?php } ?>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-2">
                <?php foreach($personinfo as $p ) { ?>
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                          <h1 style="color:white ;font-family: 'Permanent Marker', cursive;">{{$p->person_first_name}}<br>{{$p->person_last_name}}</h1>
                          <p ><b style="color:white ;font-size:25px;font-family: 'Permanent Marker', cursive;font-family: 'Noto Sans', sans-serif;">{{$p->person_designation}}</b>
							<br>"Nothing is impossible, the word itself says 'I'm possible'!"</p>
                          
                          <div class="white-button button">
                              <a href="#featured">Read More</a>
                          </div>
                        </div>
                        </div>
                    </div><?php } ?>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-3">
                <?php foreach($personinfo as $p ) { ?>
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                          <h1 style="color:white ;font-family: 'Permanent Marker', cursive;">{{$p->person_first_name}}<br>{{$p->person_last_name}}</h1>
                          <p><b style="color:white ; font-size:25px;font-family: 'Permanent Marker', cursive;font-family: 'Noto Sans', sans-serif;"><span style="color:#8B4513;"> {{$p->person_designation}}</b><br>"Happiness is not something you postpone for the future; it is something you design for the present"</p>
                          
                          <div class="white-button button">
                              <a href="#featured">Read More</a>
                          </div>
                        </div>
                        </div>
                    </div><?php } ?>
                </div>
                <!-- // Item -->
            </div>
        </div>

        <div class="page-content">
        
        <section id="profile" class="content-section">
                <div class="section-heading">
                    <h1>Profile</h1>
                    
                </div>
                 
                
                @foreach($personinfo as $per)
                <div class="grid-container">
                    <div class="grid-item item1"><img style="height:20%; width:70%;border-radius:50%;" src="{{URL::to($per->person_image)}}" alt=""></div>
                    <div class="grid-item item2"><H1 style="color:blue;font-family: 'Lobster', cursive;font-style:italic;">{{ $per->person_first_name}}{{$per->person_last_name}}</H1></div>
                    <div class="grid-item item3">
                       <h2 style="font-family: 'Lobster', cursive;font-family: 'Dancing Script', cursive;"><b> Career Goal </b></h2>
                       <p>{{$per->person_career_goal}}</p>
                    
                    </div> 
                    @endforeach
                    <div class="grid-item item4">
                      <h2 style="font-family: 'Lobster', cursive;font-family: 'Dancing Script', cursive;"><b>Educational Qualification</b> </h2>
                      <table align="center">
                      <tr>
                            <th>Degree</th>
                            <th>Institute</th>
                            <th>CGPA</th>
                            <th>Passing Year</th>
                     </tr>
                    @foreach($qualification as $q)
                     <tr>
                            <td>{{$q->personQualification_degree}}</td>
                            <td>{{$q->personQualification_institute}}</td>
                            <td>{{$q->personQualification_cgpa}}</td>
                            <td>{{$q->personQualification_passing_year}}</td>
                     </tr>
                    @endforeach
                     
                      
                      </table>
                    
                    </div>   
                    <div class="grid-item item5">
                    <h2 style="font-family: 'Lobster', cursive;font-family: 'Dancing Script', cursive;"><b>Skills Area</b> </h2>
                    <table align="center" >
                      
                      @foreach($skill as $s)
                      <tr>
                            <td style="text-align:left;border:0;font-family: 'Great Vibes', cursive;font-family: 'Marck Script', cursive;font-size:17px;"><b>.{{$s->skill_title}}</b> </td>
                            <td style="text-align:left;border:0;font-family: 'Great Vibes', cursive;font-family: 'Marck Script', cursive;font-family: 'Baloo Bhai', cursive;">{{$s->skill_description}}</td>
                           
                     </tr>
                     @endforeach
                      
                      </table>
                    </div>  
                </div>

              

            </section>
            </div>
         
        <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Recent<br><em>Works</em></h1>
                   
                </div>
               
                <div class="section-content">
                    <div class="masonry">
                        @foreach($work as $w)
                        <div class="row">
                            <div class="item">
                                <div class="col-md-6">
                                 <a href="{{url::to($w->work_image)}}" data-lightbox="image"><img style="height:200px;"src="{{url::to($w->work_image)}}" alt="Ecommerce Site"></a>
                                 <p>{{$w->work_description}}</p>
                               
                                </div>
                            </div>
                        @endforeach
                           
                        </div>
                    </div>
                </div>            
            </section>
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1><em>Download</em> CV</h1>
                            <p></p>
                        </div>
                        <div class="text-content">
                            <p></p>
                        </div>
                        <div class="accent-button button">
                            <a href="/download">Download Cv</a>
                        </div>
                        <div class="accent-button button">
                            <a href="#blog">Continue Reading</a>
                        </div>    
                    </div>
                   
                   
                </div>
            </section>
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Services</h1>
                    <p>Here is some services 
                    <br>That I do.</p>
                </div>
                <div class="section-content">
                    <div class="tabs-content">
                        <div class="wrapper">
                            
                            <section id="first-tab-group" class="tabgroup">


                                    <div class="masonry">
                                    @foreach($service as $s)
                                        <div class="row">
                                            <div class="item">
                                                <div class="col-md-6">
                                                <a href="{{url::to($s->service_image)}}" data-lightbox="image"><img style="height:200px;"src="{{url::to($s->service_image)}}" alt="{{$s->service_name}}"></a>
                                                <div class="text-content">
                                                    <h4>{{$s->service_name}}</h4>
                                                    <span>Description:</span>
                                                    <p>{{$s->service_description}}</p>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                              
                            
                            </section> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="content-section">
               
                <div id="contact-content">
                    <div class="section-heading">
                        <h1>Contact<br><em>Me</em></h1>
                        <p>Send your message with proper subject line. 
                        </p>
                        
                    </div>
                    <div class="section-content">
                        <form id="contact" action="{{url('/message-send')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-4">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="footer">
                <p>Copyright &copy; 2020. Design: <a href="#" target="_blank">asmnasim</a> | Distribution: <a href="#" target="_blank">myProfile</a></p>
            </section>
        </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="frontend/js/vendor/bootstrap.min.js"></script>
    
    <script src="frontend/js/plugins.js"></script>
    <script src="frontend/js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    </body>
</html>
