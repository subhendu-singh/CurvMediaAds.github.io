

        <!--========== HEADER ==========-->
        <?php include 'header.php';?>
        <!--========== END HEADER ==========-->
		
		<style> 
        
          
        .modal-content iframe { 
            margin: 0 auto; 
            display: block; 
        } 
		</style> 
		<script> 
			$(document).ready(function() { 
				var url = $("#Geeks3").attr('src'); 
				$("#Geeks2").on('hide.bs.modal', function() { 
					$("#Geeks3").attr('src', ''); 
				}); 
				$("#Geeks2").on('show.bs.modal', function() { 
					$("#Geeks3").attr('src', url); 
				}); 
			}); 
		</script>
        <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(img/1920x1080/Hogwarts-Legacy.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">FILMOGRAPHY IN MEDIA</h1>
					<p class="g-font-size-24--md g-font-size-24--md g-margin-b-0--xs g-color--white"><b></b></p>
                </div>
            </div>
        </div>
		<!--<div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/11.jpg) 50% 0 no-repeat fixed; background-size: cover;">
            <div class="g-container--md g-ver-center--xs g-text-center--xs">
                <div class="g-margin-b-70--xs">
                    <h1 class="g-font-size-55--sm g-font-size-70--lg g-font-family--playfair g-color--primary g-margin-b-20--xs g-margin-b-40--sm">High Quality Law</h1>
                    <p class="g-font-size-18--xs g-font-size-20--sm g-font-size-24--lg g-color--white g-margin-b-0--xs">Whether your case involves a complex divorce, child custody, domestic violence or DUI, we are dedicated to vigorously protecting your future.</p>
                </div>
                <a href="#js__scroll-to-section" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-brd g-radius--50 g-padding-x-60--xs">Hire Us</a>
            </div>
            <a href="http://keenthemes.com/" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-font-family--playfair g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>-->
        <!--========== END PROMO BLOCK ==========-->

        
        <!-- End Testimonials -->
        
        <!-- News -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <!--<div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Active News</p>
                </div>-->
                <div class="row">
                    <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/wild.png" alt="Image" style="height:100%;width:100%;">
                            </a>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/noelle.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-3">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/lionking.png" alt="Image" style="height:100%;width:100%;">
                            </a>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/dolittle.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
				<br>
				<div class="row">
					<div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/dora.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
					<div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/godzilla.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
					<div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/ivan.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
					<div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
							<a href="#film" data-toggle="modal">
								<img class="img-responsive" src="img/970x970/lady.png" alt="Image" style="height:100%;width:100%;">
							</a>
                        </article>
                        <!-- End News -->
                    </div>
				</div>
            </div>
        </div>
		<div id="lion_king" class="modal fade"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe style="width:100%;height:100%" src="https://mpcfilmapi.technicolor.com/wp-content/uploads/filmreelclip.mp4?autoplay=1&mute=0"></iframe>
						</div>
					</div> 
				</div> 
			</div> 
        </div> 
		<div id="technicolor" class="modal fade"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe style="width:100%;height:100%" src="https://mpcfilmapi.technicolor.com/wp-content/uploads/previsshot.mp4?autoplay=1&mute=0"></iframe>
						</div>
					</div> 
				</div> 
			</div> 
        </div> 
		<div id="film" class="modal fade"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe style="width:100%;height:100%" src="https://mpcfilmapi.technicolor.com/wp-content/uploads/Launch_new_Reel_new_landscape_new-10-second-clip.mp4?autopay=1&mute=0"></iframe>
						</div>
					</div> 
				</div> 
			</div> 
        </div> 
		<div id="creature" class="modal fade"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe style="width:100%;height:100%" src="https://mpcfilmapi.technicolor.com/wp-content/uploads/MPC_CreatureReel_2013_1080Prores_24fps_large.mp4?autopay=1&mute=0"></iframe>
						</div>
					</div> 
				</div> 
			</div> 
        </div> 
		<div id="environment" class="modal fade"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe style="width:100%;height:100%" src="https://mpcfilmapi.technicolor.com/wp-content/uploads/MPC_Environments_720H264_large.mp4?autopay=1&mute=0"></iframe>
						</div>
					</div> 
				</div> 
			</div> 
        </div> 
        <!-- End News -->

        
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include 'footer.php';?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.equal-height.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/tab.min.js"></script>
        <script type="text/javascript" src="js/components/equal-height.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
