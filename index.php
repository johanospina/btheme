<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<script src="<?php bloginfo('template_directory');?>/js/jquery-1.9.1.min.js"></script> 
<script src="<?php bloginfo('template_directory');?>/js/custom.js"></script>

<script>
jQuery(function($) {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script language="JavaScript">
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("message").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script>
<script language="Javascript">
function clicker(){
message.innerHTML="bye bye";
setTimeout("kk()",10000);
}

function kk(){
document.forms[0].submit();
}
</script>
<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<header>
    	<div class="nav"><span></span></div>
    	<nav>
        	<ul>
            	<li><a href="index.html">Home</a></li>
                <li><a href="send-pitch.html">Send Pitch</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
        <div class="logo">
        	<a href="index.html">Bankrolla</a>
        </div>
        <div class="slider">
        	<h1>Let's make it happen</h1>
            <div class="btns">
            <a href="#" class="btn video home-btn"><i class="fa fa-play" aria-hidden="true"></i> Watch Video</a><br/>
            <a href="#fundraise" class="btn send-pitch home-btn ligh-green">Fundraise</a>
            <a href="#what-can" class="btn send-pitch home-btn light-blue">Accelerent</a>
            <a href="#invest" class="btn send-pitch home-btn">Invest</a>
            </div>
        	<img src="<?php bloginfo('template_directory');?>/images/slide.jpg" alt=""/>
			
        </div>
    </header>
</head>
<body>
<div class="main-container">
	<h2>Manifeto</h2>
    <div class="visual">
    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="visual video">
    	
        <p>The Bankrolla process in a<br/> diagram/Video</p>
              
        
    </div>
    </div>
    
    <!---->
    <div class="invester" id="invest">
    	<img src="<?php bloginfo('template_directory');?>/images/invester.jpg" alt=""/>
		
        <div class="invester-text">
        <div class="column">
        	<div class="visual">
            	<h1>Invester</h1>
                <h3>We groth with you</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                
                <a href="#" class="btn send-pitch inv-btn">Invest</a><br/>
                <a href="#" class="how-to">How to invest</a>
            </div>
        </div>
        </div>
    </div>
    <!----> 
    <div class="what-can" id="what-can">
    	<div class="column">
            <h2>What you can (and should) expect</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/> Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            
            <ul class="claim">
            	<li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
                
                <li><i></i><br/>
                	<h4>Claim 1</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem </p>
                </li>
            </ul>
        </div>
    </div>
    <!---->
    <div class="invester" id="fundraise">
    	<img src="<?php bloginfo('template_directory');?>/images/fundrise.jpg" alt=""/>
		
        <div class="invester-text">
        <div class="column">
        	<div class="visual right">
            	<h1>Fundraise</h1>
                <h3>We groth with you</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                
                <a href="#" class="btn send-pitch inv-btn">Fundraise</a><br/>
                <a href="#" class="how-to">How to Fundraise</a>
            </div>
        </div>
        </div>
    </div>
    <!---->
    <div class="logos">
    	<div class="column">
        	<ul>
            	<li><img src="<?php bloginfo('template_directory');?>/images/bloom.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_directory');?>/images/Forbes.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_directory');?>/images/Reuters.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_directory');?>/images/techcrunch.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_directory');?>/images/Wired_logo.png" alt=""/></li>
            </ul>
        </div>
    </div>
    <!---->
    <div class="term-of-use">
    	<div class="column">
    		<h4>Warning Statment</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
        </div>
    </div>
    <!--------->
    <footer>
    <div class="column main-footer">
   		<div class="footer-widget">
        	<h2 class="widget-title">Offer</h2>
            <ul>
            <li>Test1</li>
            <li>Test1</li>
            <li>Test1</li>
            </ul>
        </div>
        
        <!----->
        <div class="footer-widget">
        	<h2 class="widget-title">Offer</h2>
            <ul>
            <li>Test1</li>
            <li>Test1</li>
            <li>Test1</li>
            </ul>
        </div>
        
        <!---->
        
        <div class="footer-widget">
        	<h2 class="widget-title">Offer</h2>
            <ul>
            <li>Test1</li>
            <li>Test1</li>
            <li>Test1</li>
            </ul>
        </div>
        <!----->
        <div class="footer-widget">
        	<h2 class="widget-title">Offer</h2>
            <ul>
            <li>Test1</li>
            <li>Test1</li>
            <li>Test1</li>
            </ul>
        </div>
   </div>
   <div class="copyright">
   	<div class="column">
   	<p>Bankrolla Limited(AFSL123456) is licensed as an equity crowdfunding platfrom by the Australian Securities & Investments Commission (ASIC).</p>
    <span>Copyright &copy; 2016 Bankrolla Limited</span>
   </div>
   </div>
    </footer>

</body>
</html>
