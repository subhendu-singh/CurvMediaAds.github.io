
		<script>
			function show_type()
			{
				document.getElementById("adver").style.display = "none";
				document.getElementById("media").style.display = "none";
			}
			function change_type()
			{
				var cat = document.getElementById("category").value;
				var adv = document.getElementById("adver").value;
				var med = document.getElementById("media").value;
				if(cat == "adv")
				{
					document.getElementById("adver").style.display = "block";
					document.getElementById("media").style.display = "none";
				}
				else if(cat == "med")
				{
					document.getElementById("media").style.display = "block";
					document.getElementById("adver").style.display = "none";
				}
				else{
					document.getElementById("adver").style.display = "none";
					document.getElementById("media").style.display = "none";
				}
			}
		</script>
   <?php include 'header.php';?>
        <!--========== END HEADER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">Get in Touch</h2>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">support@keenthemes.com</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                            <p class="g-color--white-opacity">277 Bedford Avenue, Brooklyn</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity">+ (1) 001 389 3720</p>
                        </div>
                    </div>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <select type="category" class="form-control s-form-v3__input" id="category" onchange="change_type()">
								<option class="option1" value="">* ----Choose Category----</option>
								<option class="option1" value="adv">Advertising</option>
								<option class="option1" value="med">Color Media</option>
							</select>
                        </div>
						
                        <div class="col-sm-6">
                            <select type="category" class="form-control s-form-v3__input" id="adver">
								<option class="option1">* ----Choose Type----</option>
								<option class="option1" value="digi_net">Digital Network</option>
								<option class="option1" value="digi_mark">Digital Marketing</option>
								<option class="option1" value="television">Television</option>
								<option class="option1" value="paid_mark">Paid Marketing</option>
								<option class="option1" value="ad_net">Add Network</option>
							</select>
                            <select type="category" class="form-control s-form-v3__input" id="media">
								<option class="option1">* ----Choose Type----</option>
								<option class="option1" value="film_sh">Film Shooting</option>
								<option class="option1" value="pre_pro">Pre Production</option>
								<option class="option1" value="vid">Video</option>
								<option class="option1" value="aud">Audio</option>
								<option class="option1" value="vis_effect">Visual Effects</option>
							</select>
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
            </div>
            <img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">
        </div>
        <!-- End Feedback Form -->
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

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
