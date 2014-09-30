<?php
if(isset($_POST['submit'])){
		require_once 'phpmailer/class.phpmailer.php';
		$message = '
		<html><head></head><body><p>Website Contact Request</p>
		  <table>
		  	<tr><td>Date</td><td>'.date("l, F j, Y, g:i a").'</td> 		</tr>
			<tr><td>Name</td><td>'.$_POST['name'].'</td>			</tr>
			<tr><td>Email</td><td>'.$_POST['email'].'</td>			</tr>
			<tr><td>Attach</td><td>'.$_FILES['attach'].'</td>			</tr>
			<tr><td>Question</td><td>'.$_POST['note'].'</td>			</tr>
			<tr><td>Browser</td><td>'.$_SERVER['HTTP_USER_AGENT'].'</td>			</tr>
		  </table>
		</body>	</html>';

		
		catch (phpmailerException $e) {
				header('Location:http://reverbarchitecture.co.uk/?action=failed');
		}
		catch (Exception $e) {
				header('Location:http://reverbarchitecture.co.uk/?action=failed');
		}
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta charset="utf-8"/>
		<title>We create attractive homes through our modern residential architecture</title>
        <meta name="description" content=" We are a foremost firm of residential architect expert in designing contemporary new dwellings and period renewal in London. We create your home as you desire."  >
     	  <meta name="keywords" content="modern residential architecture, green building design, sustainable home design, architectural house plans, architects north London, architect north London, architect London, architects London, residential architect London, loft conversion London" />

        
		<link rel="stylesheet" type="text/css" href="css/main-16px.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />        
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/a991f1b8-0a5e-41c6-8924-2ac4b6324b05.css"/>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1"/>-->
		<link rel="bookmark icon" type="image/png" href="favicon.ico" /> 
		<!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">
	
<!--
body {
	background-image: url(images/reverb_bg.jpg);
	background-repeat: repeat-y;
}
-->
</style></head>
	
	<body>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37477634-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<img src="images/nav-home.png" style="display:none;" />
		<img src="images/home-text.png" style="display:none;" />
		<img src="images/nav-projects.png" style="display:none;" />
		<img src="images/nav-getintouch.png" style="display:none;" />
		<img src="images/nav-active-end.png" style="display:none;" />
		<img src="images/title-bathroom.png" style="display:none;" />
		<img src="images/title-kirkhillroad.png" style="display:none;" />
		<img src="images/title-outer.png" style="display:none;" />
		<img src="images/title-uppergrayst.png" style="display:none;" />
		<img src="images/getintouch-text.png" style="display:none;" />
		
		<header id="masthead">
        	<div class="head wrap">
                <div class="logo"><a href="#"> <img src="images/logo.png"></a></div>
                <div class="share"> 
                    <a target="_blank" href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Ftwitter.com%2Fabout%2Fresources%2Fbuttons&source=tweetbutton&text=%22Exploring%20the%20built%20form%22&url=http%3A%2F%2Fwww.reverbarchitecture.co.uk&via=" class="twitter"><img src="images/twitter-logo.png"></a>
                    <a target="_blank" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.reverbarchitecture.co.uk&media=http%3A%2F%2Fdev.miura.gi%2Fpin.png&description=www.reverbarchitecture.co.uk%20-%20exploring%20how%20the%20built%20form%20can%20facilitate%20a%20sense%20of%20well-being%2C%20social-interaction%20and%20a%20sense%20of%20community." class="pin"><img src="images/pin-logo.png"></a>
                   
                </div>
                <nav>
                    <ul class="main">
                   		<li class="none"></li>
                        <li class="home active"><a href="#home" class="home link"><span>home</span></a></li>
                        <li class="projects"><a href="#bathroom-refurbishment" class="projects link"><span>projects</span></a></li>
                        <li class="getintouch"><a href="#getintouch" class="getintouch link"><span>get in touch</span></a></li>
                        
                    </ul>
                    <div class="strap"> </div>
                </nav>
            </div>
		</header>
        
        <div role="main" class="wrap"> 
        	<article id="home">
            	<div class="graphic"> </div>
                <div class="content">
                	<h4 style="color:#A3988A;">Tim Francey <br> BSc (Hons) / MArch ARB  <br> Tel: 07976295991</h4>
                    <br>
                    <div id="expandtext">
                    	<div class="normal">
                            <p>
                                To reverberate is to echo or reflect in sound.  I am interested in how buildings connect to context and surroundings. This includes the surrounding landscape, the trees and other wildlife, and the surrounding buildings of different historical periods. This relationship extends outwards as well. The practice is committed to pursuing sustainable solutions, by employing materials, technologies and construction methods that have a low-impact on the planet. <br><br>
       A connection with sound also implies an appreciation for the non-solid, and the transitory: the spaces that are formed, the light that brings life to a room, and our movement and interaction within it.  I am interested in how people interact with the building and exploring how the built form can facilitate a sense of well-being, social-interaction and a sense of community.<br><br>
       						Reverb Architecture was set up by Tim Francey in 2011. 
                            </p>
                            <!--<a href="#" class="more">More</a>-->
                        </div>
                        




                        <div class="expanded">
                        	<p class="left">
                               To reverberate is to echo or reflect in sound.  I am interested in how buildings connect to context and surroundings. This includes the surrounding landscape, the trees and other wildlife, and the surrounding buildings of different historical periods. This relationship extends outwards as well. The practice is committed to pursuing sustainable solutions, by employing materials, technologies and construction methods that have a low-impact on the planet. <br><br>
       A connection with sound also implies an appreciation for the non-solid, and the transitory: the spaces that are formed, the light that brings life to a room, and our movement and interaction within it.  I am interested in how people interact with the building and exploring how the built form can facilitate a sense of well-being, social-interaction and a sense of community.<br><br>
       						Reverb Architecture was set up by Tim Francey in 2011. 
                            </p>
                            <p class="right">
                                The name also implies the connection between built forms and the natural environment.  The practice is committed to pursuing sustainable solutions, by employing materials, technologies and construction methods that have a low-impact on the planet. <br><br>
								As well as how the building reverberates or connects, the practice is interested in how people interact with the buildings. We are exploring how the built form can facilitate a sense of well-being, social-interaction and a sense of community.
                            </p>
                            <div class="clear"> </div>
                            <a href="#" class="less">Less</a>
                        </div>
        			</div>
                </div>
            
            </article>
            <article id="bathroom-refurbishment">
            	<aside>
                	<h1>  </h1>
                    <h2>  </h2>
                	<p> 
                    	This project involved maximising space within a small bathroom.  A boxed in corner that used to house a water-tank was removed and a false ceiling was removed, extending the space up to its full height.  The key idea was to create a new wall, housing both the toilet cystern, shower system, storage and  a recessed sink.  This kept the space tidy, organised, and helped retain a sense of space in a compact room.
                    </p>
					<nav>
						<ul class="related">
                        	<li class="current"><a href="#bathroom-refurbishment">Bathroom refurbishment</a></li>
							<li><a href="#kirkhill-road-attic">Kirkhill Road - attic conversion</a></li>
							<li><a href="#outdoor-performance">Outdoor performance space</a></li>
							<li><a href="#upper-gray-st-attic">Upper Gray St. attic conversion</a></li>
						</ul>
					</nav>
                </aside>
                <section>
                	<div class="slider" id="slider1">
                        <div class="navigation">
                            <div class="controls"> 
                                <a href="#" class="prev"> Prev </a>
                                <a href="#" class="next"> Next </a>
                                
                            </div>
                            <div class="stat"></div>
                        </div>
                        <ul class="imagepanel">
                            <li rel="1">
                                <img src="images/compact_bathroom/small/1.png" width="528" height="530" />
                                <h4> Interior elevation <a href="images/compact_bathroom/large/1.png" class="zoom" title=" Interior elevation">Enlarge</a></h4>
                            </li>
                            <li rel="2">
                                <img src="images/compact_bathroom/small/2.png" width="528" height="530" />
                                <h4> Sink and storage detail <a href="images/compact_bathroom/large/2.png" class="zoom" title="Sink and storage detail">Enlarge</a></h4>                            
                            </li>
                            <li rel="3">
                                <img src="images/compact_bathroom/small/3.png" width="528" height="530" />
                                <h4> Shower space <a href="images/compact_bathroom/large/3.png" class="zoom" title="Shower space">Enlarge</a></h4>
                            </li>
                            <li rel="4">
                                <img src="images/compact_bathroom/small/4.png" width="528" height="530" />
                                <h4> Sink and storage detail <a href="images/compact_bathroom/large/4.png" class="zoom" title="Sink and storage detail">Enlarge</a></h4>
                            </li>
                        </ul>
                    </div>
                </section>
            </article>
            <article id="kirkhill-road-attic">
            	<aside>
                	<h1>  </h1>
                    <h2> </h2>
                	<p> 
                    	For this private project in Edinburgh’s Southside, the internal layout was reconfigured in an intriguing way, both in plan and section.  Due to space constraints, a different approach to the attic conversion was sought.  The roof space was opened out above the existing lounge, and the remaining attic area became a mezzanine lstudy space, with fantastic views accross Edinburgh.  The existing kitchen, living room and bathroom were all knocked through to create a large dual-aspect living space.
                    </p>
					<nav>
                    <ul class="related">
                        <li><a href="#bathroom-refurbishment">Bathroom refurbishment</a></li>
                        <li  class="current"><a href="#kirkhill-road-attic">Kirkhill Road - attic conversion</a></li>
                        <li><a href="#outdoor-performance">Outdoor performance space</a></li>
                        <li><a href="#upper-gray-st-attic">Upper Gray St. attic conversion</a></li>
                    </ul>
					</nav>
                    
                   
                </aside>
                <section>
                	<div class="slider" id="slider2">
                        <div class="navigation">
                            <div class="controls"> 
                                <a href="#" class="prev"> Prev </a>
                                <a href="#" class="next"> Next </a>
                            </div>
                            <div class="stat"></div>
                        </div>
                        <ul class="imagepanel">
                            <li rel="1">
                                <img src="images/kirkhill_rd/small/1.png" width="528" height="530" />
                                <h4> Section </span><a href="images/kirkhill_rd/large/1.png" class="zoom" title="Section">Enlarge</a></h4>
                            </li>
                            <li rel="2">
                                <img src="images/kirkhill_rd/small/2.png" width="528" height="530" />
                                <h4> Kitchen space <a href="images/kirkhill_rd/large/2.png" class="zoom" title="Kitchen space">Enlarge</a></h4>                            
                            </li>
                            <li rel="3">
                                <img src="images/kirkhill_rd/small/3.png" width="528" height="530" />
                                <h4> Stair detail<a href="images/kirkhill_rd/large/3.png" class="zoom" title="Stair detail">Enlarge</a></h4>
                            </li>
                            <li rel="4">
                                <img src="images/kirkhill_rd/small/4.png" width="528" height="530" />
                                <h4> Living room<a href="images/kirkhill_rd/large/4.png" class="zoom" title="Living room">Enlarge</a></h4>
                            </li>
                        </ul>
                    </div>
                </section>
            </article>
            <article id="outdoor-performance">
            	<aside>
                	<h1> </h1>
                    <h2> </h2>
                	<p> 
                    	This is a self-initiated project for an outdoor music and performance space that can be easily dismantled and tour various sites around London.  Taking inspiration from a traditional bandstand plan, the design is then developed to suit a number of programmatic requirements.  As well as being modular, the design features a number of doors that fold up and down and open out: these create additional sheltered areas for seating and form a small kiosk area to serve refreshments.  With the doors all closed, this creates a secure space to store equipment overnight.  The space will provide an open platform for a diverse range of music and other types of performance.
                    </p>
					<nav>
                    <ul class="related">
                        <li><a href="#bathroom-refurbishment">Bathroom refurbishment</a></li>
                        <li><a href="#kirkhill-road-attic">Kirkhill Road - attic conversion</a></li>
                        <li  class="current"><a href="#outdoor-performance">Outdoor performance space</a></li>
                        <li><a href="#upper-gray-st-attic">Upper Gray St. attic conversion</a></li>
                    </ul>
                    </nav>
                   
                </aside>
                <section>
                	<div class="slider" id="slider3">
                        <div class="navigation">
                            <div class="controls"> 
                                <a href="#" class="prev"> Prev </a>
                                <a href="#" class="next"> Next </a>       
                            </div>
                            <div class="stat"></div>
                        </div>
                        <ul class="imagepanel">
                            <li rel="1">
                                <img src="images/outdoor_performance/small/1.png" width="528" height="530" />
                                <h4> Perspective showing bandstand open </span><a href="images/outdoor_performance/large/1.png" class="zoom" title="Perspective showing bandstand open">Enlarge</a></h4>
                            </li>
                            <li rel="2">
                                <img src="images/outdoor_performance/small/2.png" width="528" height="530" />
                                <h4>Perspective showing bandstand closed <a href="images/outdoor_performance/large/2.png" class="zoom" title="Perspective showing bandstand closed">Enlarge</a></h4>                            
                            </li>
                            <li rel="3">
                                <img src="images/outdoor_performance/small/3.png" width="528" height="530" />
                                <h4>  Photomontage with bandstand open<a href="images/outdoor_performance/large/3.png" class="zoom" title=" Photomontage with bandstand open">Enlarge</a></h4>
                            </li>
                            <li rel="4">
                                <img src="images/outdoor_performance/small/4.png" width="528" height="530" />
                                <h4>Photomontage with bandstand closed<a href="images/outdoor_performance/large/4.png" class="zoom" title="Photomontage with bandstand closed">Enlarge</a></h4>
                            </li>
                        </ul>
                    </div>
                </section>
            </article>
            <article id="upper-gray-st-attic">
            	<aside>
                	<h1> </h1>
                    <h2> </h2>
                	<p> 
                    	This is an attic conversion for a Georgian semi-detached family home, situated within a conservation area in Edinburgh. The project involves adding a new dormer window that is in-keeping with the character of the original building.  A new stair in a modern style connects the first floor to the new attic space. The new room offers fantastic views across the city towards the hill Arthur's Seat.  It compromises a master bedroom, en-suite, and storage space. 
                    </p>
					<nav>
                    <ul class="related">
                        <li><a href="#bathroom-refurbishment">Bathroom refurbishment</a></li>
                        <li><a href="#kirkhill-road-attic">Kirkhill Road - attic conversion</a></li>
                        <li><a href="#outdoor-performance">Outdoor performance space</a></li>
                        <li  class="current"><a href="#upper-gray-st-attic">Upper Gray St. attic conversion</a></li>
                    </ul>
					</nav>
                    
                   
                </aside>
                <section>
                	<div class="slider" id="slider4">
                        <div class="navigation">
                            <div class="controls"> 
                                <a href="#" class="prev"> Prev </a>
                                <a href="#" class="next"> Next </a>  
                            </div>
                            <div class="stat"></div>
                        </div>
                        <ul class="imagepanel">
                            <li rel="1">
                                <img src="images/upper_greyst/small/1.png" width="528" height="530" />
                                <h4> Front elevation </span><a href="images/upper_greyst/large/1.png" class="zoom" title="Front elevation">Enlarge</a></h4>
                            </li>
                            <li rel="2">
                                <img src="images/upper_greyst/small/2.png" width="528" height="530" />
                                <h4> Rear Elevation <a href="images/upper_greyst/large/2.png" class="zoom" title="Rear Elevation">Enlarge</a></h4>                            
                            </li>
                            <li rel="3">
                                <img src="images/upper_greyst/small/3.png" width="528" height="530" />
                                <h4> Attic plan <a href="images/upper_greyst/large/3.png" class="zoom" title="Attic plan">Enlarge</a></h4>
                            </li>
                            <li rel="4">
                                <img src="images/upper_greyst/small/4.png" width="528" height="530" />
                                <h4>First floor plan<a href="images/upper_greyst/large/4.png" class="zoom" title="First floor plan">Enlarge</a></h4>
                            </li>
                        </ul>
                    </div>
                </section>
            </article>
            <article id="getintouch">
            	<div class="graphic"> </div>
                <div class="content">
                	<p>
						Reverb Architecture <br>
						59A Forburg Road <br>
						London <br>
						N16 6HR <br>
						(T) 07976295991 <br>
					</p>        
                </div>
				<div class="form"> 
                	<form  method="post" enctype="multipart/form-data">
                        <p>Please get in touch if you require any <br>information, or to arrange a free consultation.</p>
                        <div class="row textfield"> <label>Name*</label><input  name="name" required type="text" value=""> </div>
                        <div class="row textfield"><label>Email*</label><input name="email" required type="email" value=""></div>
                        <div class="row textfield"><label>Attach</label><input name="attach" type="file" value=""></div>
                        <div class="row textarea"><label>Note*</label><textarea name="note" required cols="5" rows="5"></textarea></div>
                        
                        <div class="row textfield button"><input class="button" name="submit" type="submit" value="Send my enquiry"></div>
                        <label class="error">*mandatory</label> 
                    </form>
					<div class="clear"> </div>
				</div>
			</article>
        
        
        </div>
        
        <footer id="footer">
        	<div class="wrap">
             <div class="links"> 
             <nav>
             	<ul class="related">
                	<li><a href="#bathroom-refurbishment">Bathroom refurbishment</a></li>
                    <li><a href="#kirkhill-road-attic">Kirkhill Road - attic conversion</a></li>
                    <li><a href="#upper-gray-st-attic">Upper Gray St. attic conversion</a></li>
                    <li><a href="#outdoor-performance">Outdoor performance space</a></li>
                </ul>
             </nav>
             </div>
             <div class="social">              
                <a target="_blank" href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Ftwitter.com%2Fabout%2Fresources%2Fbuttons&source=tweetbutton&text=%22Exploring%20the%20built%20form%22&url=http%3A%2F%2Fwww.reverbarchitecture.co.uk&via=" class="twitter"><img src="images/twitter-solo.png"></a>
                <a target="_blank" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.reverbarchitecture.co.uk&media=http%3A%2F%2Fdev.miura.gi%2Fpin.png&description=www.reverbarchitecture.co.uk%20-%20exploring%20how%20the%20built%20form%20can%20facilitate%20a%20sense%20of%20well-being%2C%20social-interaction%20and%20a%20sense%20of%20community." class="pin"><img src="images/pin-solo.png"></a>
             </div>
            </div>
        </footer>
        <img src="images/nav-getintouch.png" style="display:none">
        <img src="images/nav-home.png" style="display:none">
        <img src="images/nav-projects.png" style="display:none">
        <img src="images/home-text.png" style="display:none">
        <img src="images/header-background.png" style="display:none">
	</body>
<!-- The JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>	
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	BuildSlideShow('#slider1');
	BuildSlideShow('#slider2');
	BuildSlideShow('#slider3');
	BuildSlideShow('#slider4');
	
	$('#slider1 a.zoom').lightBox();
	$('#slider2 a.zoom').lightBox();
	$('#slider3 a.zoom').lightBox();
	$('#slider4 a.zoom').lightBox();
});
</script>
</html>
