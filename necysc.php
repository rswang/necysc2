<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href='images/necysc favicon-01.png'>
		<link rel="stylesheet" href="styles/test.css" type="test/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="styles/necysc.js"></script>

		<title>NECYSC</title>
	</head>
	<body>
		<!--Navigation-->
				
		<?php include 'nav.php'; ?>
		<nav>
			<a id='logo' href='necysc.html'><img id='logo' src='images/logo2.png'></a>
			<ul>
				<li><a href='#about'>About Us</a>
					<ul>
						<li><a href='/history/'>History</a></li>
						<li><a href='/team/'>Team</a></li>
					</ul>
				</li>
				<li><a href='#programs'>Programs</a>
					<ul>
						<li><a href='/day/'>Day Camp</a></li>
						<li><a href='/overnight/'>Overnight Camp</a></li>
						<li><a href='/explorasian/'>ExplorAsian</a></li>
						<li><a href='/staff'>Staff</a>
							<ul>
								<li><a href='/CIT/'>CIT</a></li>
								<li><a href='/counselor/'>Counselor</a></li>
								<li><a href='/RA/'>Residential Advisor</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href='#faq/'>FAQ</a></li>
				<li><a href='#contact/'>Contact</a></li>
				<li><a href='#sponsor/'>Sponsors</a></li>
				<li><a href='login.html'>Login</a></li>
			</ul>
		</nav>
		

		<!--Main-->

		<div class='main'>

			<section id="home" data-type="background" data-speed="10" class="parallax pages">     
		         <article>
		         	<div id = 'announcements' class = 'overlay'>
		         		<p>
		         			<h1>Announcements</h1>
		         			Registration opens February 1, 2014.
		         		</p>
		         	</div>
		         </article>
		    </section>   
		     
			<section id = "programs" data-type="background" data-speed="10" class="parallax pages">
			         <article>
			         	<h2 id='pnavhead'>Camp Programs</h2>
			         	<div class='pnav'>
							<ul>
								<li>
									<a href="#">
										<span>Day</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Overnight</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>ExplorAsian</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Staff</span>
									</a>
								</li>
								
							</ul>
						</div>

			         </article>
			</section>

			<section id="hi" data-type="background" data-speed="10" class="parallax pages">
		         <article>

		         </article>
			</section>  

			<section id="sponsors" data-type="background" data-speed="10" class="parallax pages">
			         <article><h1>Sponsors</h1>
						<table border="0">
						<tr>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://www.taiwanembassy.org/xslgip/Boston/images/webtitle.jpg" /></a></td>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://www.gbcca.org/files/gbcca_header.png" /></a></td>
						<td><a href="http://waneducation.com/">Wan Educational Consulting</a></td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png">Chinese Cultural Center</a></td>
						</tr>
						<tr>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://shabuzen.com/images/topmid_home.gif" /></a></td>
						<td><a href="http://www.campusbound.com/default.aspx"><img class = 'sponsorimg' src="http://www.campusbound.com/images/sce/headerlink.gif" /></a></td>
						<td><a href="http://www.wellesleytoyota.com/index.htm"><img class = 'sponsorimg' src="
						http://www.koautogroup.com/toyotascion/images/wellesley-toyota-logo.gif"/></a></td>
						<td>Dr. Grace Wang</td>
						</tr>
						<tr>
						<td><a href="http://www.bamboogourmet.com/"><img class = 'sponsorimg' src="http://www.bamboogourmet.com/images/logo.png" /></a></td>
						<td><a href="http://www.bostonhurricanes.org/"><img class = 'sponsorimg' src="http://static.wixstatic.com/media/36fa74_9eb7647eccb3e2e2369c1cc1952cf468.png_srz_p_185_124_75_22_0.50_1.20_0.00_png_srz" /></a></td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png"><img class = 'sponsorimg' src="
						http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png"/></a></td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png">128 Realty</a></td>
						</tr>
						</table>
						<div id='sponsorbox'><div id='sponsorbutton'>Become a sponsor!</div><span>If you wish to become a sponsor and advertise in our camp weekbook, please contact pr@nceysc.org.</span></div>
			         </article>
			</section>  

			<section id="end" data-type="background" data-speed="10" class="parallax pages">
			        <article>
		         	<div class = 'overlay' id='contactbox'>
		         		<h1>Contact Us</h1>
					    <form action="" method="post" enctype="text/plain">
					        <div class="form_field">
					            <label for="name">Name:</label>
					            <input type="text" id="name" name="name" value="" class="text-field"/>
					        </div>
					        <div class="form_field">
					            <label for="email">Email:</label>
					            <input type="text" id="email" name="email" value="" class="text-field"/>
					        </div>
					        <div class="form_field">
					            <label for="message">Message:</label>
					            <input type="textarea" id="message" name="message" value="" class="text-field"/>
					        </div>
					        <div class="form_field">
					            <input type = "submit" value="Send" id = "submit">
					        </div>
					    </form>
		         	</div>
			         </article>
			</section> 
			<section id="contact" data-type="background" data-speed="10" class="parallax pages">
			         <article>team</article>
			</section> 
			</div>
			<div id='texture'></div>

	 </div>
	</body>
</html>