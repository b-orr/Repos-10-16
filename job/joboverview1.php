<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>

<style>
	img {
		max-width: 100%;
		max-height: 100%;
	}
</style>

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Companies list</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">
				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
				<div class="row">
				
				<div class="col-lg-10">
					<div class="row">
						<div class="widget-body col-lg-8 table-1" id="table-1" style="margin-top: 3px;">
							<div class="row bordered" style="margin-left: 0px; margin-right: 0px; background-color: #404040; color: white;">
								<div class="col-lg-4" style="display: flex; align-items: center;">
										<p>Project Team</p>
								</div>
								<div class="col-lg-5"></div>
								
							</div>
							<table id="dt_basic" class="table table-bordered" width="100%">
								<thead>
									<tr>
										<th>Company</th>
										<th>Title</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Snanska</td>
										<td>Project Manager</td>
										<td>Jeff Thomas</td>
										<td>206-548-8888</td>
										<td>jeff.thomas@mail.com</td>
									</tr>
									<tr>
										<td>Snanska</td>
										<td>Superintendant</td>
										<td>Bob DeVill</td>
										<td>206-475-6454</td>
										<td>bob.devil@mail.com</td>
									</tr>
									<tr>
										<td>McClone</td>
										<td>Project Engineer</td>
										<td>Kevin Bobson</td>
										<td>255-469-9598</td>
										<td>kevin.bobson@mail.com</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="widget-body col-lg-4 table-1" id="table-1" style="margin-top: 3px;">
							<div class="row bordered" style="margin-left: 0px; margin-right: 0px; background-color: #404040; color: white;">
								<div class="col-lg-4" style="display: flex; align-items: center;">
										<p>Project Address</p>
								</div>
								<div class="col-lg-5"></div>
								
							</div>
							<table id="dt_basic" class="table table-bordered" width="100%">
								<thead>
									
								</thead>
								<tbody style="text-align:center;">
									<tr>

										<td><br>924 Howell Street <br><br> Seattle, Washington 98101 <br><br> United States <br><br></td>
									</tr>
									
								</tbody>
							</table>
						</div>
				</div>	

				

					

					

						
				</div>


					<div class="col-sm-5 col-md-5 col-lg-2">
						<!-- new widget -->
						<div class="jarviswidget jarviswidget-color-blueDark">
							<header>
								<h2> Actions </h2>
							</header>
				
							<!-- widget div-->
							<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
								<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
									<a href="../job/printinfo.php"><button class="btn btn-warning form-control" data-target="#categoryModal">Print Info Sheet</button></a>
								</div>
								<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
									<button class="btn btn-warning form-control" data-target="#subCategoryModal">Edit Project Info</button>
								</div>
								
							</div>
				
							<!-- end widget div -->
						</div>
						<!-- end widget -->
				
						
					</div>
				</div>

				<br>
				
					<div class="row">
							<div class="col-sm-12">
								<article class="col-lg-10">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>										
											<p style="position:relative;left:10px;">Notifications</p>
										</header>
										<div class="row">
											<div class="widget-body">
												<table class="table table-bordered table-striped">
									<header>
										<h5>Unresolved Issues</h5>
									</header>
									<thead>
									<tr>
										<th>Days Overdue</th>
										<th>Task</th>
										<th>Form</th>
										<th>Location</th>
										<th>Resolution Date</th>
									</tr>
								</thead>
								<tbody>
									<?php for($i = 1; $i<=3; $i++){; ?>
										<tr>
											<td>0 Days</td>
											<td>Gang Box Unorganized</td>
											<td>Safety Inspection</td>
											<td>All Areas</td>
											<td>04/08/2017</td>
										</tr>
										<tr>
											<td>0 Days</td>
											<td>Lace Shores</td>
											<td>Falsework Inspection</td>
											<td>Level 2 - GL 1/B</td>
											<td>04/08/2017</td>
										</tr>
									<?php }; ?>
								</tbody>
												</table>
					
								<table class="table table-bordered table-striped">
									
									<header>
										<h5>Drawing Uploads</h5>
									</header>

									<thead>
									
								</thead>
								<tbody>
									<tr>
										<td>No Current Pending Uploads</td>
									</tr>
								</tbody>
								</table>

								<table class="table table-bordered table-striped">
									
									<header>
										<h5>Equipment</h5>
									</header>

								<thead>
									<tr>
										<th>Type</th>
										<th>Form</th>
										<th>Date</th>
									</tr>
									
								</thead>
								<tbody>
									
								</tbody>
								</table>

											</div>
											<br>
										</div>
									</div>
								</article>



								
							</div>
						</div>


						<div class="row col-lg-10">
							<div class="row">
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Weather</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/weather.png" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Job Site Camera</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/site_camera.jpg" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Project Photo</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/project-photo.jpg" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Preformance Metrix 1 (content TDB)</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/performance-1.jpg" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Preformance Metrix 2 (content TDB)</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/performance-2.jpg" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
								<div class="col-sm-4">
									<article class="col-lg-12">
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
											<header >										
												<p style="position:relative;left:10px">Preformance Metrix 3 (content TDB)</p>
											</header>
												<div class="row">
													<div class="widget-body">
														<img src="../job/includes/performance-3.jpg" alt="">
													</div>
												</div>
										</div>
									</article>
								</div>
							</div>
						<br><br><br><br>
						</div>

				
				
				</section>
				<!-- end widget grid -->
					<!-- end widget grid -->
				<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog ">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">New Company Info</h4>
						</div>
						<div class="modal-body">
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Company Name</label>
										<input type="text" name="compName" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Phone</label>
										<input type="text" name="address" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Address</label>
										<input type="text" name="companyName" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold; display: block;">City & State</label>
										<div class="col-lg-8 no-padding">
											
											<input type="text" name="companyName" class="form-control">
										</div>
										<div class="col-lg-offset-1 col-lg-3 no-padding">
											<select name="state" class="form-control">
												<option>GA</option>
												<option>GA</option>
												<option>GA</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">ZIP</label>
										<input type="text" name="companyName" class="form-control">
									</div>
								</div>
							</div>
							<div>
								<strong>
									<legend>Company Admin Info</legend>
								</strong>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">First Name</label>
										<input type="text" name="address" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Last Name</label>
										<input type="text" name="companyName" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">E-mail</label>
										<input type="text" name="address" class="form-control">
									</div>
								</div>
							</div>
							<div>
								<strong>
									<legend>Modules</legend>
								</strong>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<table class="table table-bordered table-striped" style="width: 100%;">
										<tr>
											<td>Equipment</td>
											<td id="switch-1" style="width:20%; text-align: center;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1">
															<label class="onoffswitch-label" for="myonoffswitch1"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span>
													</td>
											<td>HR</td>

											<td id="switch-1" style="width:20%; text-align: center;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
															<label class="onoffswitch-label" for="myonoffswitch2"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
										</tr>
										<tr>
											<td>CRM</td>
											<td id="switch-1" style="width:20%; text-align: center;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3">
															<label class="onoffswitch-label" for="myonoffswitch3"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
											<td>Analytics</td>
											<td id="switch-1" style="width:20%; text-align: center;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4">
															<label class="onoffswitch-label" for="myonoffswitch4"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal" id="pdfUpload">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<?php include '../includes/_footer.php'; ?>
		

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			/*
			 * Autostart Carousel
			 */
			$('.carousel.slide').carousel({
				interval : 3000,
				cycle : true
			});
			$('.carousel.fade').carousel({
				interval : 3000,
				cycle : true
			});
		
			// Fill all progress bars with animation
			
			$('.progress-bar').progressbar({
				display_text : 'fill'
			});
			
			$('input[name="checkbox-style"]').change(function() {
				//alert($(this).val())
				$this = $(this);
		
				if ($this.attr('value') === "switch-1") {
					$("#switch-1").show();
					$("#switch-2").hide();
				} else if ($this.attr('value') === "switch-2") {
					$("#switch-1").hide();
					$("#switch-2").show();
				}
		
			}); 
			
			// tab - pills toggle
			$('#show-tabs').click(function() {
				$this = $(this);
				if($this.prop('checked')){
					$("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
				} else {
					$("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
				}
				
			});			
		
		});

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

			
			//create new folder append here
			$('#createFolder').on('click', function() {
				var htmlstr = '<a href="drawingList.php" class="txt-color-darken">';
				htmlstr += 	'<li class="folder-li" style="">';
				htmlstr += 		'<h4 class="glyphicon-class " style="">New Folder</h4>';
				htmlstr += 		'<div class="folder-data" style="">';
				htmlstr += 			'<span class="glyphicon glyphicon-folder-close"></span>';
				htmlstr += 			'<div>';
				htmlstr += 				'<p class="folder-info" style="">Drawings:<span class="drawings-number"> 0</span></p>';
				htmlstr += 				'<p class="folder-last-change" style="">Last change:<br>N/A';
				htmlstr += 			'<br>';
				htmlstr += 			'<small><i></i></small></p>';
				htmlstr += 			'</div>';												
				htmlstr += 		'</div>';
				htmlstr += 	'</li>';
				htmlstr += '</a>';

				$('#folderList').append(htmlstr);	
			});
			
			//create new folder ends here

			/*
			 * Smart Notifications
			 */
			$('#eg1').click(function(e) {
		
				$.bigBox({
					title : "Big Information box",
					content : "This message will dissapear in 6 seconds!",
					color : "#C46A69",
					//timeout: 6000,
					icon : "fa fa-warning shake animated",
					number : "1",
					timeout : 6000
				});
		
				e.preventDefault();
		
			})
		
			$('#eg2').click(function(e) {
		
				$.bigBox({
					title : "Big Information box",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#3276B1",
					//timeout: 8000,
					icon : "fa fa-bell swing animated",
					number : "2"
				});
		
				e.preventDefault();
			})
		
			$('#eg3').click(function(e) {
		
				$.bigBox({
					title : "Shield is up and running!",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#C79121",
					//timeout: 8000,
					icon : "fa fa-shield fadeInLeft animated",
					number : "3"
				});
		
				e.preventDefault();
		
			})
		
			$('#eg4').click(function(e) {
		
				$.bigBox({
					title : "Success Message Example",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#739E73",
					//timeout: 8000,
					icon : "fa fa-check",
					number : "4"
				}, function() {
					closedthis();
				});
		
				e.preventDefault();
		
			})
	
			
		
			$('#eg5').click(function() {
		
				$.smallBox({
					title : "Ding Dong!",
					content : "Someone's at the door...shall one get it sir? <p class='text-align-right'><a href='javascript:void(0);' class='btn btn-primary btn-sm'>Yes</a> <a href='javascript:void(0);' class='btn btn-danger btn-sm'>No</a></p>",
					color : "#296191",
					//timeout: 8000,
					icon : "fa fa-bell swing animated"
				});
		
			});
		

		
			$('#eg6').click(function() {
		
				$.smallBox({
					title : "Big Information box",
					content : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#5384AF",
					//timeout: 8000,
					icon : "fa fa-bell"
				});
		
			})
		
			$('#eg7').click(function() {
		
				$.smallBox({
					title : "James Simmons liked your comment",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})
			
			function closedthis() {
				$.smallBox({
					title : "Great! You just closed that last alert!",
					content : "This message will be gone in 5 seconds!",
					color : "#739E73",
					iconSmall : "fa fa-cloud",
					timeout : 5000
				});
			}
		
			/*
			* SmartAlerts
			*/
			// With Callback
			$("#smart-mod-eg1").click(function(e) {
				$.SmartMessageBox({
					title : "Smart Alert!",
					content : "This is a confirmation box. Can be programmed for button callback",
					buttons : '[No][Yes]'
				}, function(ButtonPressed) {
					if (ButtonPressed === "Yes") {
		
						$.smallBox({
							title : "Callback function",
							content : "<i class='fa fa-clock-o'></i> <i>You pressed Yes...</i>",
							color : "#659265",
							iconSmall : "fa fa-check fa-2x fadeInRight animated",
							timeout : 4000
						});
					}
					if (ButtonPressed === "No") {
						$.smallBox({
							title : "Callback function",
							content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
							color : "#C46A69",
							iconSmall : "fa fa-times fa-2x fadeInRight animated",
							timeout : 4000
						});
					}
		
				});
				e.preventDefault();
			})
			// With Input
			$("#smart-mod-eg2").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Alert: Input",
					content : "Please enter your user name",
					buttons : "[Accept]",
					input : "text",
					placeholder : "Enter your user name"
				}, function(ButtonPress, Value) {
					alert(ButtonPress + " " + Value);
				});
		
				e.preventDefault();
			})
			// With Buttons
			$("#smart-mod-eg3").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Notification: Buttons",
					content : "Lots of buttons to go...",
					buttons : '[Need?][You][Do][Buttons][Many][How]'
				});
		
				e.preventDefault();
			})
			// With Select
			$("#smart-mod-eg4").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Alert: Select",
					content : "You can even create a group of options.",
					buttons : "[Done]",
					input : "select",
					options : "[Costa Rica][United States][Autralia][Spain]"
				}, function(ButtonPress, Value) {
					alert(ButtonPress + " " + Value);
				});
		
				e.preventDefault();
			});
		
			// With Login
			$("#smart-mod-eg5").click(function(e) {
		
				$.SmartMessageBox({
					title : "Login form",
					content : "Please enter your user name",
					buttons : "[Cancel][Accept]",
					input : "text",
					placeholder : "Enter your user name"
				}, function(ButtonPress, Value) {
					if (ButtonPress == "Cancel") {
						alert("Why did you cancel that? :(");
						return 0;
					}
		
					Value1 = Value.toUpperCase();
					ValueOriginal = Value;
					$.SmartMessageBox({
						title : "Hey! <strong>" + Value1 + ",</strong>",
						content : "And now please provide your password:",
						buttons : "[Login]",
						input : "password",
						placeholder : "Password"
					}, function(ButtonPress, Value) {
						alert("Username: " + ValueOriginal + " and your password is: " + Value);
					});
				});
		
				e.preventDefault();
			});		

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>

	</body>

</html>