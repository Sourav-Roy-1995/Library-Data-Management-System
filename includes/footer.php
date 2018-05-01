    
	
<div class="footer">
	<div class="footer-con container">
		<div class="footer-row row">
			<div class="footer-col col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4>Find Us !</h4>
				<ul class="contact-list col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-5 col-sm-offset-3">
					<li><a href="https://www.facebook.com"><button type="button" class="fb btn btn-fb"><i id="fb-icon" class="fa fa-facebook"></i></button></a></li>
					<li><a href="https://www.twitter.com"><button type="button" class="tw btn btn-tw"><i id="tw-icon" class="fa fa-twitter"></i></button></a></li>
					<li><a href="https://www.google.com"><button type="button" class="google btn btn-gplus"><i id="google-icon" class="fa fa-google-plus"></i></button></a></li>
					<li><a href="https://www.linkedin.com/"><button type="button" class="like btn btn-li"><i id="like-icon" class="fa fa-linkedin"></i></button></a></li>				
				</ul>
			</div>		
		</div>		
	</div>		
</div>	
	
<div class="footer-end">
	<div class="container-fluid">
		<div class="footer-col-two col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h5>developed by sourav_roy</h5>
		</div>
	</div>
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
	
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	
	
	
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:4,
			loop:true,
			margin:40,
			autoplay:true,
			autoplayTimeout:1000,
			autoplayHoverPause:true,
			
			responsive: {
				0:{
					items:1,
					margin:70
				},
				
				200:{
					items:1,
					margin:70
				},
				600:{
					items:2,
					margin:30
				},
				640:{
					items:2,
					margin:20
				},
				767:{
					items:2,
					margin:5
				},
				992:{
					items:3,
					margin:10
				}
				
			}
		});
		
		$('.play').on('click',function(){
			owl.trigger('play.owl.autoplay',[1000])
		})
		$('.stop').on('click',function(){
			owl.trigger('stop.owl.autoplay')
		})
			
		
		
		
	</script>
	

	
	<script>
		$("textarea").jqte();
	</script>
	

</body>

</html>