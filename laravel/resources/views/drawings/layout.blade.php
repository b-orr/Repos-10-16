@include('../includes/_header')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

@include('../includes/_menu')
	<style type="text/css">
			.bs-glyphicons {
				padding-left: 0;
				padding-bottom: 1px;
				margin-bottom: 20px;
				list-style: none;
				overflow: hidden;
			}
			.bs-glyphicons li {
				float: left;
				width: 25%;
				height: 150px;
				padding: 10px;
				margin: 0 -1px -1px 0;
				font-size: 17px;
				line-height: 1.4;
				text-align: center;
				border: 1px solid #ddd;
			}

			.bs-glyphicons .glyphicon {
				margin-top: 5px;
				margin-bottom: 10px;
				font-size: 75px;
			}
			.bs-glyphicons .glyphicon-class {
				display: block;
				text-align: center;
			}
			.bs-glyphicons li:hover {
				background-color: rgba(86,61,124,.1);
			}
		
			.bs-glyphicon {
				padding-left: 0;
				padding-bottom: 1px;
				margin-bottom: 20px;
				list-style: none;
				overflow: hidden;
				columns: 2;
				-webkit-columns: 2;
			    -moz-columns: 2;
			}
			.bs-glyphicon li {
				float: left;
				width: 100%;
				height: 50px;
				margin: 0 -1px -1px 0;
				font-size: 17px;
				line-height: 1.4;
				text-align: center;
				border: 1px solid #ddd;
				display: block;
			}
			.bs-glyphicon li :hover{
				background-color: lightblue;
			}
			.bs-glyphicon .glyphicon {
				margin-top: 5px;
				margin-bottom: 10px;
				font-size: 35px;
			}

			.li-inside {
				padding-left: 30%;
				text-align: left;
			}
			.li-inside-text{
				padding-bottom: 30%;
			}
			.folder-li{
				display: flex; 
				flex-direction: column;
			}
			.glyphicon-class{
				font-weight: bold;
			}
			.folder-data{
				display: flex;
			 	justify-content: space-around;
			 	align-items: center; 
			 	padding: 0 50px;
			}
			.folder-info{
				font-size: 15px;
			}
			.folder-last-change{
				font-size: 11px;
			}
		@media (max-width: 1150px){
			.bs-glyphicons li {
				width: 33%;
			}

		}
		@media (max-width: 710px){
			.bs-glyphicons li {
				width: 50%;
			}

		}
		@media (max-width: 489px){
			.bs-glyphicons li {
				width: 100%;
			}
		}
		@media (max-width: 1366px) {
			.folder-data{
			 	padding: 0 25px;
			}
			.folder-info{
				font-size: 12px;
			}
			.folder-last-change{
				font-size: 10px;
			}
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
					<li>Home</li><li>Projects</li><li>1001 Broadway</li><li>Drawings</li>
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
							<div class="col-sm-12">
								<article class="col-lg-12">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>
										<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
											<h2>All Folders</h2>
										</header>
										<div class="row">
											<div class="widget-body">
					
												<ul class="bs-glyphicons" id="folderList">
													@foreach($folders as $key => $value)
													<a href="{{ url('project/' . $value->pj_project_id . '/folders/' . $value->id . '/drawings') }}" class="txt-color-darken" style="z-index:1000">
														<li class="folder-li" style="">
														<div class="row" style="display:inline">
															<h4 class="glyphicon-class " style="display:inline">{{ $value->folder_name }}</h4>
														</div>
															<div class="folder-data" style="">
																<span class="glyphicon glyphicon-folder-close"></span>
																<div>
																	<p class="folder-info" style="">Drawings:<span class="drawings-number"> 5</span></p>
																	<p class="folder-last-change" style="">Last change:<br>Bruce Orr
																<br>
																<small><i>May 5, 2017</i></small></p>
																</div>													
															</div>
														</li>
													</a>
													@endforeach
													
													

												</ul>
					
											</div>
											
											<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-lg btn-block">
												Create new folder
											</button>
											<br>
										</div>
									</div>
								</article>
								
							</div>
						</div>
				
				
				</section>
				<!-- end widget grid -->
					<!-- end widget grid -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Create New Folder</h4>
							</div>

									@if (count($errors) > 0)
									    <div class="alert alert-danger">
									        <ul>
									            @foreach ($errors->all() as $error)
									                <li>{{ $error }}</li>
									            @endforeach
									        </ul>
									    </div>
									@endif
							
									<div class="modal-body">
										<form   role="form" method="POST" action="{{ url('project/' . $project_id->id . '/folders' ) }}">
										{{ csrf_field() }}
										<input type="hidden" name="pj_project_id" value="{{ $project_id->id }}">
										<input type="hidden" name="last_change_user_id" value="{{ $project_id->user_id }}">
										<div class="row"  style="display: flex; justify-content: center;">
											<div class="col-md-10">
												<div class="form-group">
													<label class="input">Name</label>
													<input type="text" class="form-control" name="folder_name" required style="padding-left: 5px;" />
												</div><br>
												<div class="form-group">
													<label class="input">Description</label>
													<input type="text" class="form-control" name="folder_description" required style="padding-left: 5px;" />
												</div>
												</section>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">
											Cancel
										</button>
										<button type="submit" id="createFolder-1" class="btn btn-primary" >
											Create
										</button>
									</div>
								</form>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		@include('../includes/_footer')
		

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