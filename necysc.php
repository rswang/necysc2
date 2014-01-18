<!DOCTYPE html>
<html>
	<?php include 'header.php'; ?>
	<body>
		<!--Navigation-->
				
		<?php include 'nav.php'; ?>


		<!--Main-->
		<div id='surprise'><img src='https://scontent-a.xx.fbcdn.net/hphotos-ash3/1098365_10153151796150624_2112943968_n.jpg'>
		</div>

		
		<div class='main'>

			<section id="home" data-type="background" data-speed="10" class="parallax pages">     
		         <article>
		         	<div id = 'announcements' class = 'overlay'>
	         			<h1>Announcements</h1>
		         			<p>Camper registration opens <strong>February 1, 2014</strong>. The priority deadline is <strong>February 14</strong> for returning campers. After the priority deadline, campers will be accepted on a first-come, first-serve basis.</p>
		         			<p>Counselor and CIT applications have been released and are due <strong>February 1</strong> and <strong>February 14</strong>, respectively.</p>
		         			<div class="form_field">
					            <a href='forms/counselor.pdf'><input type = "submit" value="Counselors" id = "submit"></a>
					        </div>
					        <div class="form_field">
					        <a href='forms/cit.pdf'><input type = "submit" value="CITs" id = "submit"></a>
					    </div>
		         	</div>
		         </article>
		    </section>   
		     
			<section id = "about" data-type="background" data-speed="10" class="parallax pages">
			         <article>

			
				<div class="ia-container accordian">
				
					<figure>
						<img src="images/bg1.jpg" alt="image01" />
						<input type="radio" name="radio-set" checked="checked"/>

						
						<figure>
							<img src="images/bg2.jpg" alt="image02" />
							<input type="radio" name="radio-set" />

							
							<figure>
								<img src="images/bg3.jpg" alt="image03" />
								<input type="radio" name="radio-set" />

								<figure>
									<img src="images/bg4.jpg" alt="image04" />
									<input type="radio" name="radio-set" />
									
									<figure>
										<img src="images/bg1.jpg" alt="image05" />
										<input type="radio" name="radio-set" />
										
										<figure>
											<img src="images/bg2.jpg" alt="image06" />
											<input type="radio" name="radio-set" />
								
											<figure>
												<img src="images/bg3.jpg" alt="image07" />
												<input type="radio" name="radio-set" />										

												<figure>
													<img src="images/bg4.jpg" alt="image08" />
													<input id="ia-selector-last" type="radio" name="radio-set" />
													
												</figure>
											</figure>
										</figure>		
									</figure>		
								</figure>	
							</figure>
						</figure>
					</figure>
			
        		</div>
				<div id="aboutus" class="overlay">
				
					<h1>About Us</h1>
					 <p>The New England Chinese Youth Summer Camp (NECYSC) started in 1987 and has been held at Regis College in Weston, MA for over twenty-five years. NECYSC is a non-profit group, affiliated with the Greater Boston Chinese Cultural Association (GBCCA), whose goal is to bring youth together who are interested in Chinese culture and foster a sense of community.</p>

				</div>
			    </article>
			</section>

			<section id="hi" data-type="background" data-speed="10" class="parallax pages">
		         <article>

		         </article>
			</section>  

			<section id="sponsors" data-type="background" data-speed="10" class="parallax pages">
			         <article><h1>Sponsors</h1>
						<table class='sponsortable' border="0">
						<tr>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://www.taiwanembassy.org/xslgip/Boston/images/webtitle.jpg" /></a></td>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://www.gbcca.org/files/gbcca_header.png" /></a></td>
						<td><a href="http://www.bostonhurricanes.org/"><img class = 'sponsorimg' src="http://static.wixstatic.com/media/36fa74_9eb7647eccb3e2e2369c1cc1952cf468.png_srz_p_185_124_75_22_0.50_1.20_0.00_png_srz" /></a></td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png"><img class = 'sponsorimg' src="
						http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png"/></a></td>
						</tr>
						<tr>
						<td><a href="http://www.microsoft.com/"><img class = 'sponsorimg' src="http://shabuzen.com/images/topmid_home.gif" /></a></td>
						<td><a href="http://www.campusbound.com/default.aspx"><img class = 'sponsorimg' src="http://www.campusbound.com/images/sce/headerlink.gif" /></a></td>
						<td><a href="http://www.wellesleytoyota.com/index.htm"><img class = 'sponsorimg' src="
						http://www.koautogroup.com/toyotascion/images/wellesley-toyota-logo.gif"/></a></td>
						<td><a href="http://www.bamboogourmet.com/"><img class = 'sponsorimg' src="http://www.bamboogourmet.com/images/logo.png" /></a></td>
						</tr>
						<tr>
						<td>Dr. Grace Wang</td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png">128 Realty</a></td>
						<td><a href="http://waneducation.com/">Wan Educational Consulting</a></td>
						<td><a href="http://www.nicolechanphotography.com/images/nicole-chan-photography-logo.png">Chinese Cultural Center</a></td>
						</tr>
						</table>
						<br>
						<a onmouseover="nhpup.popup('If you wish to become a sponsor or advertise in our weekbook, please contact pr@necysc.org.');" href='mailto:pr@necysc.org?Subject=NECYSC%20Sponsor%20Interest'><input type = "submit" value="Sponsor NECYSC!" id = "submit"></a>
			         </article>
			</section>  

			<section id="end" data-type="background" data-speed="10" class="parallax pages">
			        <article>
		         	<div class = 'overlay' id='contactbox'>
		         		<h1>Contact Us</h1>
		         		<?php
						if (isset($_REQUEST['email']))
						//if "email" is filled out, send email
						  {
						  //send email
						  $email = $_REQUEST['email'] ;
						  $subject = $_REQUEST['subject'] ;
						  $message = $_REQUEST['message'] ;
						  mail("rswang@mit.edu", $subject,
						  $message, "From:" . $email);
						  alert "Thank you for using our mail form";
						  }
						else
						//if "email" is not filled out, display the form
						  {
						  echo "<form action="necysc.php" method="post" enctype="text/plain">
					        <div class="form_field">
					            <label for="name">Name:</label>
					            <input type="text" name="name" value="" class="text-field"/>
					        </div>
					        <div class="form_field">
					            <label for="email">Email:</label>
					            <input type="text" name="email" value="" class="text-field"/>
					        </div>
					        <div class="form_field">
					            <label for="message">Message:</label>
					            <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
					        </div>
					        <div class="form_field">
					            <input type = "submit" value="Send" id = "submit">
					        </div>
					    </form>";
						  }
						?>
					    
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