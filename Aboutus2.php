<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS2/style2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">

  



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">COVID-AID</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Aboutus2.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="covid.php">Covid-19 Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lgin.php">Login</a>
        </li>
      </ul>
        <button class="btn btn-outline-success" type="submit">Donate</button>
      </form>
    </div>
  </div>
</nav>









<!--ABOUT US SECTION-->

<section class="mt-5">
          <div class="container">
              <div class="row justify-content-center mb-5">
                  <div class="col-md-8 text-center heading-section">
                      <span>About Us</span>
                      <h2 class="mb-3">Our Mission | Vision & Plans</h2>
                  </div>
              </div>
              <!------>
              <div class="row tabs mt-4">
                  <div class="col-md-4">
                      <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                          <li class="nav-item text-left">
                              <a class="nav-link active py-4"data-toggle="tab"
                              href="#about-1">About</a>
                          </li>
                          <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-2">Our Mission</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Our Team</a>
                        </li>
                        
                      </ul>
                  </div>
                  <!----->
                  <div class="col-sm-8">
                      <div class="tab-content">
                          <div class="tab-pane container p-0 active"id="about-1">
            <div class="img"style="background-image: url(IMAGES/ca.png);"></div>
            <h3><a href="#">About Us</a></h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                          </div>
                          <!----->
             <div class="tab-pane container p-0"id="about-2">
                <div class="img"style="background-image: url(images/about-2.jpg);"></div>
             <h3><a href="#">Our Mission</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-3">
                <div class="img"style="background-image: url(images/about-3.jpg);"></div>
             <h3><a href="#">Our Team</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            
                      </div>
                  </div>
                 
                          
                      
                  </div>
              </div>
          </div>
          <style>
      .tabs .nav-pills .nav-item{
    margin-bottom: 10px;
}
.tabs .nav-pills .nav-item .nav-link{
    background:#fff;
    border-radius:4px;
    color:#000;
    font-weight:bold;
    border:1px solid rgba(20,54,1,0.6);
    font-size:20px;
    line-height: 30px;
}
.tabs .nav-pills .nav-item .nav-link span{
    color:#deb887;
    font-size:30px;
}
.tabs .nav-pills .nav-item .nav-link.active{
    color:#fff;
    background:#deb887;
    border:1px solid white;
}
.tabs .nav-pills .nav-item .nav-link.active span{
    color:#fff;
}
.tabs .tab-content{
    background:#fff;
    padding:0;
}
.tabs .tab-content .img{/*images-size for this section 1000 x 667 */
    width:100%;
    height:400px;
    margin-bottom:20px;
}
.tabs .tab-content h3{
    font-weight:bold;

}
.tabs .tab-content h3 a{
    color:#000;
}
/*======End of About Us=========*/
      </style>

      </section>
      <!--End OF About us-->






      <section class="mt-5" id="ci">
          <div class="container">
              <div class="row justify-content-center mb-5">
                  <div class="col-md-8 text-center heading-section">
                      <span></span>
                      <h2 class="mb-3">UPDATES</h2>
                  </div>
              </div>
              <!------>
              <div class="row tabs mt-4">
                  <div class="col-md-4">
                      <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                          <li class="nav-item text-left">
                              <a class="nav-link active py-4"data-toggle="tab"
                              href="#about-1">About Covid-19</a>
                          </li>
                          <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-2">Symptoms</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Precautions</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Vaccines</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Important Message</a>
                        </li>

                        
                        
                      </ul>
                  </div>
                  <!----->
                  <div class="col-lg-8">
                      <div class="tab-content">
                          <div class="tab-pane container p-0 active"id="about-4">
            <div class="img"style="background-image: url(IMAGES/ca.png);"></div>
            <h3><a href="#"></a></h3>
            <p>COVID-19 is the disease caused by a new coronavirus called SARS-CoV-2. WHO first learned of this new virus on 31 December 2019, following a report of a cluster of cases of 'viral pneumonia' in Wuhan, People's Republic of China.</p>
                          </div>
                          <!----->
             <div class="tab-pane container p-0"id="about-5">
                <div class="img"style="background-image: url(images/about-2.jpg);"></div>
             <h3><a href="#">Symptoms</a></h3>
               <p>The most common symptoms of COVID-19 are Fever, Dry Cough, Fatigue       Loss of taste or smell, Nasal congestion, Conjunctivitis (also known as red eyes)Sore throat, Headache, Muscle or joint pain, Different types of skin rash, Nausea or vomiting, Diarrhea,cChills or dizziness</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-6">
                <div class="img"style="background-image: url(images/about-3.jpg);"></div>
             <h3><a href="#">Precautions</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-7">
                <div class="img"style="background-image: url(images/about-2.jpg);"></div>
             <h3><a href="#">Vaccines</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>

                    <div class="tab-pane container p-0"id="about-8">
                <div class="img"style="background-image: url(images/about-2.jpg);"></div>
             <h3><a href="#">Important Message</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>

            
                      </div>
                  </div>
                 
                          
                      
                  </div>
              </div>
          </div>
          <style>
      .tabs .nav-pills .nav-item{
    margin-bottom: 10px;
}
.tabs .nav-pills .nav-item .nav-link{
    background:#fff;
    border-radius:4px;
    color:#000;
    font-weight:bold;
    border:1px solid rgba(20,54,1,0.6);
    font-size:20px;
    line-height: 30px;
}
.tabs .nav-pills .nav-item .nav-link span{
    color:#deb887;
    font-size:30px;
}
.tabs .nav-pills .nav-item .nav-link.active{
    color:#fff;
    background:#deb887;
    border:1px solid white;
}
.tabs .nav-pills .nav-item .nav-link.active span{
    color:#fff;
}
.tabs .tab-content{
    background:#fff;
    padding:0;
}
.tabs .tab-content .img{/*images-size for this section 1000 x 667 */
    width:100%;
    height:400px;
    margin-bottom:20px;
}
.tabs .tab-content h3{
    font-weight:bold;

}
.tabs .tab-content h3 a{
    color:#000;
}
/*======End of About Us=========*/
      </style>

      </section>













      







<!--TEAMS-->

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Team</h2>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
        </div>
        <div class="team-content">
          <h3 class="name">Dr Akash Kapoor</h3>
          <h4 class="title">Founder & CEO, COVID-AID</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
        </div>
        <div class="team-content">
          <h3 class="name">Dr Rishab Sharma</h3>
          <h4 class="title">Director of HR, COVID-AID</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
        </div>
        <div class="team-content">
          <h3 class="name">Mr Jay Kapoor</h3>
          <h4 class="title">Events Manager, COVID-AID</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
        </div>
        <div class="team-content">
          <h3 class="name">Mr Amit Agrawal</h3>
          <h4 class="title">Social Media Manager, COVID-AID</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>

<!--END OF TEAMS-->







<!--FOOTER-->

<footer class="footer mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-des">
                        <h3>Green World</h3>
                        <p class="pb-3">
                            <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias.</em>
                        </p>
                        <p>lorem Ipsum Street <br>
                        SP 12345, Brazil <br><br><strong>
                            Phone;
                        </strong>
                        +55 61 1234 5678 9<br>
                        <strong>
                            Email:
                        </strong>
                        test@info.com<br>
                    
                    </p>
                    <div class="social-links mt-3">
                        <a href=""><i class="fab fa-twitter">

                        </i></a>
                        <a href=""><i class="fab fa-facebook">
                            
                        </i></a>
                        <a href=""><i class="fab fa-instagram">
                            
                        </i></a>
                        <a href=""><i class="fab fa-linkedin">
                            
                        </i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful links</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our News Letters</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <form>
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <style>

.footer{
    background:linear-gradient(rgba(162,247,106,0.6),rgba(0,59,37,0.4));
    padding: 0 0 30px 0;
    color: #000;
    font-size: 15px;
}
.footer .footer-top{
    padding: 60px 0 30px 0;
}
.footer .footer-top .footer-des{
    margin-top: -90px;
    margin-bottom: 15px;
    background:#053001;
    color:#fff;
    border-top: 4px solid #b3f19b;
    text-align: center;
    padding:30px 20px;
}
.footer .footer-top .footer-des h3{
    font-size:24px;
    margin: 0 0 2px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: bold;
}
.footer .footer-top .footer-des p{
    font-size:14px;
    line-height: 24px;
    margin-bottom: 0;
}
.footer .footer-top .social-links a{
    font-size: 18px;
    display: inline-block;
    background: #b3f19b;
    color:#053001;
    line-height:1;
    padding:8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align:center;
    width: 36px;
    height:36px;
    transition: 0.3s;
}
.footer .footer-top .social-links a:hover{
    background: #053001;
    color: #fff;
    text-decoration: none;
}
.footer .footer-top h4{
    font-size:16px;
    font-weight:bold;
    color: #000;
    position:relative;
    padding-bottom: 12px;
}
.footer .footer-top .footer-links{
    margin-bottom: 30px;
}
.footer .footer-top .footer-links ul{
    list-style: none;
    padding: 0;
    margin:0;
}
.footer .footer-top .footer-links ul i{
    padding-right: 2px;
    color:#000;
    font-size: 18px;
    line-height: 1;
}
.footer .footer-top .footer-links ul li{
    padding: 10px 0;
    display: flex;
    align-items:center;
}
.footer .footer-top .footer-links ul li:first-child{
    padding-top:0;
}
.footer .footer-top .footer-links ul a{
    color:#000;
    transition:0.3s;
    display: inline-block;
    line-height: 1;
}
.footer .footer-top .footer-links ul a:hover{
    color: #053001;
}
.footer .footer-top .footer-newsletter form{
    margin-top:30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 4;
}
.footer .footer-top .footer-newsletter form input[type="email"]{
    border:0;
    padding: 4px;
    width: calc(100% - 110px);
}
.footer .footer-top .footer-newsletter form input[type="submit"]{
    position: absolute;
    top:0;
    right:0;
    bottom:0;
    border:0;
    background: none;
    font-size:16px;
    padding: 0 20px;
    background: #053001;
    color:#fff;
    transition: 0.3s;
    border-radius:4;
}
.footer .footer-top .footer-newsletter form input[type="submit"]:hover{
    background: #b3f19b;
    color:#053001;
}
    </style>





</footer>

<!--FOOTER-->
















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</body>
</html>
</head>
<body>






