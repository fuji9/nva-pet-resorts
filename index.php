

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title></title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validate.js" ></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("form[name='form-main']").validate({
            rules: {
                txtOwner: {
                    required: true
                },
                txtResortName: {
                    required: true
                },
                txtPetResortAdd: {
                    required: true
                },
                txtCity: {
                    required: true
                },
                txtState: {
                    required: true
                },
                txtZip: {
                    required: true,
                    digits: true
                },
                txtPhone: {
                    required: true,
                    digits: true,
                    minlength: 10
                },
                txtEmail: {
                    required: true,
                    email: true
                },
                txtAbtUs: {
                    required: true
                },
                txtContct: {
                    required: true
                }
            },
            messages: {

                txtOwner: {
                    required: "Please enter owner name",
                },
                txtResortName: {
                    required: "Please enter pet resort name",
                },
                txtPetResortAdd: {
                    required: "Please enter pet resort address",
                },
                txtCity: {
                    required: "Please enter city",
                },
                txtState: {
                    required: "Please enter state",
                },
                txtZip: {
                    required: "Please enter zip number",
                    digits: "Please enter digits only",
                },
                txtPhone: {
                    required: "Please enter your contact number",
                    digits: "Please enter digits only",
                    minlength: "Please enter minimum 10 digits"
                },
                txtEmail: {
                    required: "Please enter email address",
                    email: "Please enter valid email id"
                },
                txtAbtUs: {
                    required: "Please enter how did you hear about us",
                },
                txtContct: {
                    required: "Please enter preferred form of contact",
                }

            },
            submitHandler: function(form) {
                sendData();
            }

        });
    });
    function sendData(){
        var data = $("#form-main").serialize();
        $('#result').text("Processing...");
        $.ajax({
                type: "POST",
                url: "check.php",
                data : data,
                cache: false,
                success: function(success) {
                        if(success =="success"){
                            $('#result').text("Thank you! We appreciate your interest and a representative will contact you within two business days.");
                            $('#form-main').trigger("reset");
                        }else{
                            $('#result').text("Some error occured Please try again after some time");
                        }
                }
        });
    }
        </script>
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">

<div class="wrapper">
<div class="top-banner">
<div class="header">
<div class="container">
<div class="col-md-3"><div class="logo"></div></div>
<div class="col-md-5 pull-right text-right">
 <nav class="navbar navbar-default  top-menu" role="navigation">
    
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav  float-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    <li>
                        <a class="page-scroll" href="#about">About US</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testi">Testmonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
	 </div>
    </nav>
    </div>
    
     
    </div>
    <div class="container">
   	<div class="banner-content">
   <h2>Join Us<span class="bl-dot">&#8226;</span><br>Stay You<span class="yl-dot">&#8226;</span></h2>
   	</div>
   </div>
</div>


<div class="bg-middle"  id="about" >
	
<div class="container">
<div class="about-section">
	
	<h2><span class="dot-space">&#8226;</span>About Us<span class="dot-space">&#8226;</span> </h2>	
<div class="col-md-12 about-main">
<div class="about-sec col-md-6">
	<div class="clear"><h3 class="col-md-8">EXPERIENCED <span class="bl-text">PET INDUSTRY</span> LEADER<div class="bdr-grn clear"></div></h3></div>
	
	<div class="col-md-10">
	<p>For over 20 years, NVA has grown a network of pet resorts
and veterinary hospitals by acquiring high-quality, successful pet care businesses like yours. While we provide the infrastructure to keep growing your business, we maintain your brand, your culture, and your relationship with the community. Our goal is to preserve the aspects of your business that have made it successful.</p>
	</div>
	</div>		
	<div class="abt-img">
	<div class="abt-rht">
	<p>Our goal is to preserve
the aspects of your business that
		   have made it successful</p>	
		</div>
	</div>	
	</div>
</div>

<div class="abt-middle clear">
	<div class="col-md-4  pr0 abt-prof text-center">
	<img src="images/abt-prof.jpg">
	<h4>JOHN GLORIEUX</h4>
	<p>Lauderdale Pet Lodge</p>
	</div>
	<div class="col-md-8 pl0">
<div class="abt-grn-bg">
<div class="col-md-10">
<div class="abt-prof-sec">
<h3>SELLER<br>SPOTLIGHT<div class="bdr-grn"></div></h3>

<p>NVA did not try to change anything about how I run my business. They
are excellent support for my managers and have removed the day-to-day bookkeeping, accounting, and banking from my plate so I can grow and expand the Pet Lodge brand. The only thing that has changed is that my
wife and former bookkeeper / banker / accountant is unemployed. Her dream
came true. I also no longer deal with loans or financing when we build a new facility, which makes for a more streamlined platform for growth.</p>
	</div>
	</div>
</div>	
</div>							
	</div>	
		
<div class="abt-last">
<div class="col-md-6 abt-last-lft pr0">
	<h3><span class="bl-text">TAILOR AN EXIT</span> STRATEGY
		<span class="bl-text">FOR YOUR</span> INDIVIDUAL NEEDS<div class="bdr-grn clear"></div></h3>	
		
		<p>With more than 450 pet care businesses in our portfolio, we have the experience, fl exibility, and resources to tailor an exit strategy to meet your goals. We have the assets to make cash offers on every business with which we partner, and we close
			transactions quickly.</p>

<p>An NVA Pet Resorts partnership grants you fi nancial
fl exibility and options to structure your future role
	in your business.</p>

<p>We’re proud of the long list of sellers who agree that we’ve maintained our commitments to their businesses. If you’re interested in hearing about the experience of transitioning to NVA from previous sellers, we would be happy to make an introduction.</p>
</div>
<div class="col-md-6">
<div class="abt-last-rht">
	
<div class="abt-last-content">
<ul class="list-group">
<li>SELL 100% OR STAY ONBOARD IN A JOINT VENTURE</li>
<li>BECOME A PARTNER OPERATOR, A MANAGER OR EXIT COMPLETELY</li>
<li>SELL OR LEASE US THE REAL ESTATE</li>	
</ul>	
</div>			
</div>	
	
	
</div>	
	
</div>				
	
</div>	
	
	
	
	
</div>	
	
	<div id="testi" class="testi-section text-center">
<div class="container">
   <h2><span class="dot-space">&#8226;</span>Testimonials<span class="dot-space">&#8226;</span> </h2>
   <p>We would be happy to put you in touch with managers who have<br>
worked with NVA, including those who joined us recently</p>
 

<!-- Item slider-->

  <div class="carousel carousel-showmanymoveone slide col-md-10 col-xs-offset-1" id="carouselABC">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3">
            	<a href="#"><img src="images/testi1.jpg" class="img-responsive center-block"></a>
              <h4 class="text-center">ROBERT MEDER <div class="bdr-grn1"></div></h4>
              <h5 class="text-center">Advantage Pet Center<br>
Largo, FL</h5>
            	
            </div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
             <a href="#"><img src="images/testi1.jpg" class="img-responsive center-block"></a>
              <h4 class="text-center">MIKE SIMEONE<div class="bdr-grn1"></div></h4>
              <h5 class="text-center">PetSuites Sharonville<br>Cincinnati, OH</h5>
            </div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
            	 <a href="#"><img src="images/testi2.jpg" class="img-responsive center-block"></a>
            
              <h4 class="text-center">JEFF VOELPEL<div class="bdr-grn1"></div></h4>
              <h5 class="text-center">The Pet Spot<br>Cincinnati, OH</h5>
            </div>
          </div>          
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="#"><img src="images/testi3.jpg" class="img-responsive center-block"></a>
            
              <h4 class="text-center">MARIA ARTHUR<div class="bdr-grn1"></div></h4>
              <h5 class="text-center">Breed Above<br>
Ann Arbor, MI</h5>	
            </div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
           <a href="#"><img src="images/testi1.jpg" class="img-responsive center-block"></a>
              <h4 class="text-center">ROBERT MEDER<div class="bdr-grn1"></div></h4>
              <h5 class="text-center">Advantage Pet Center<br>
Largo, FL</h5> 	
            </div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"> <a href="#"><img src="images/testi1.jpg" class="img-responsive center-block"></a>
              <h4 class="text-center">MIKE SIMEONE<div class="bdr-grn1"></div></h4>
              <h5 class="text-center">PetSuites Sharonville<br>Cincinnati, OH</h5></div>
          </div>
          
          
        </div>
    
        
        <a class="left carousel-control" href="#carouselABC" data-slide="prev"><img src="images/prev.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#carouselABC" data-slide="next"><img src="images/next.png" alt="Right" class="img-responsive"></a>
     
      </div>

<!-- Item slider end-->
</div>
    </div>   
<div class="footer-bg" id="contact">

<div class="container">
<div class="footer-main">
<div class="text-center"><h2><span class="dot-space">&#8226;</span>Contact us<span class="dot-space">&#8226;</span></h2></div>
<div class="col-md-4 col-xs-offset-1">
	
	<p>Give us a call at </p>
<p class="tel-no">888.767.7755</p>	
<p>Or fill out the form.</p>
<p>Your confidentiality is important to us. Please provide the private phone number and email address where you would like to be reached.</p>	
</div>


<div class="col-md-6 form-section">
                            <form method="post" name="form-main" id="form-main">
                                <label class="col-md-6 col-xs-12"><input placeholder="Owner Name" name="txtOwner" class="input-box form-control" type="text"></label>
                                <label class="col-md-6 col-xs-12"> 
                                    <input placeholder="Pet Resort name" name="txtResortName" class="input-box form-control">
                                </label>
                                <label class="col-md-12 col-xs-12"><input placeholder="Pet Resort Address" name="txtPetResortAdd" class="input-box form-control" ></label>

                                <label class="col-md-4 col-xs-12"><input placeholder="City" name="txtCity" class="input-box form-control" type="text"></label>
                                <label class="col-md-4 col-xs-12"> 
                                    <input placeholder="State" name="txtState" class="input-box form-control" >
                                </label>
                                <label class="col-md-4 col-xs-12"> 
                                    <input placeholder="Zip" name="txtZip" class="input-box form-control" >
                                </label>

                                <label class="col-md-6 col-xs-12">
                                    <input placeholder="Private Phone" name="txtPhone" class="input-box form-control" type="text"></label>
                                <label class="col-md-6 col-xs-12"> 
                                    <input placeholder="Private Email" name="txtEmail" class="input-box form-control">
                                </label>

                                <label class="col-md-12 col-xs-12"><input placeholder="How did you hear about us? " name="txtAbtUs" class="input-box form-control" type="text"></label>

                                <label class="col-md-12 col-xs-12"><input placeholder="Preferred farm of contact" name="txtContct" class="input-box form-control" type="text"></l 
                                    ></label>

                                <div class="form-group">
                                    <div class="col-sm-12 col-xs-12" align="center">
                                        <label>  <input class="smt-btn" value="Submit" id="submit_btn" type="submit"></label>
                                    </div>
                                    <div class="col-md-12 col-xs-12" id="result" name="result"></div>

                                </div>
                            </form>
                    </div>
 </div>
<!--bottom-section-->
</div>
<div class="copyright">
<div class="container">
<div class="col-md-2">
<a id="back-to-top" href="#" class="back-to-top" role="button" >
</a>


</div>
<div class="col-md-4">
<p>NVA</p>
<p>29229 Canwood Street Suit 100</p>
	</div>
	<div class="col-md-4 pull-right">
	<ul class="social">
                <li><a href="#" class="rss" title="Facebook"><img src="images/facebook.png"></a></li>
                <li><a href="#" class="face" title="Instagram"><img src="images/insta.png"></a></li>
                <li><a href="#" class="twit" title="Linkdin"><img src="images/linkedin.png"></a></li>

            </ul>	
	</div>
</div>
</div>
</div>

</div>
	</div>



<script type="text/javascript">
	(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
	</script>


<script type="text/javascript">
	
	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 1600) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
	</script>

<script type="text/javascript">
	//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".top-menu").addClass("top-nav-collapse");
    } else {
        $(".top-menu").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
	
	</script>


</body>
</html>
