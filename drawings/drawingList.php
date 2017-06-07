<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<style type="text/css">
			.font-lg {
				font-size: 100% !important;
			}
			#dropzone {
				min-height: 15px !important;
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
					<li>Home</li><li>Projects</li><li>1001 Broadway</li><li>Drawings</li><li>Contract Documents</li>
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
				<div class="row col-lg-12">
				<!-- widget grid -->
				<section id="widget-grid" class="">
							
					<!-- row -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">

								<!-- Widget ID (each widget will need unique ID)-->
								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
									<!-- widget options:
										usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
										
										data-widget-colorbutton="false"	
										data-widget-editbutton="false"
										data-widget-togglebutton="false"
										data-widget-deletebutton="false"
										data-widget-fullscreenbutton="false"
										data-widget-custombutton="false"
										data-widget-collapsed="true" 
										data-widget-sortable="false"
										
									-->
									<header>
										<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
										<h2 class="font-md">Architectural</h2>
									</header>

									<!-- widget div-->
									<div>
										
										<!-- widget edit box -->
										<div class="jarviswidget-editbox">
											<!-- This area used as dropdown edit box -->

										</div>
										<!-- end widget edit box -->
										
										<!-- widget content -->
										<div class="widget-body no-padding">
											<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
												<thead>			                
													<tr>
														<th data-hide="phone">Drawing Name</th>
														<th data-class="expand">Release Description</th>
														<th data-hide="phone">Revision Number</th>
														<th>Drawing Date</th>
														<th data-hide="phone,tablet">Edit</th>
													</tr>
												</thead>
												<tbody>
												<tr>
														<td>A001 - Cover Sheet</td>
														<td>CD Set</td>
														<td>0</td>
														<td>04/10/2017</td>
														<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
													</tr>
													<tr>
														<td>A002 - Sheet Index</td>
														<td>Addendum #1</td>
														<td>1</td>
														<td>05/10/2017</td>
														<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
													</tr>
													<tr>
														<td>A010 - Project Details</td>
														<td>CD Set</td>
														<td>0</td>
														<td>04/10/2017</td>
														<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
													</tr>
													<tr>
														<td>A011 - Code Information</td>
														<td>Addendum #2</td>
														<td>2</td>
														<td>05/15/2017</td>
														<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
													</tr>
												</tbody>
											</table>
											<br><br>
										</div>
										<!-- end widget content -->
										
									</div>
									<!-- end widget div -->
									
								</div>
								<!-- end widget -->
							
							</article>

							<article class="col-xs-12 col-sm-6 col-md-6 col-lg-3">

								<!-- Widget ID (each widget will need unique ID)-->
								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
									<!-- widget options:
										usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
										
										data-widget-colorbutton="false"	
										data-widget-editbutton="false"
										data-widget-togglebutton="false"
										data-widget-deletebutton="false"
										data-widget-fullscreenbutton="false"
										data-widget-custombutton="false"
										data-widget-collapsed="true" 
										data-widget-sortable="false"
										
									-->
									<header>
										<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
										<h2 class="font-md">Actions</h2>
									</header>

									
										<!-- widget content -->
										<div class="widget-body">
											<div class="widget-body-toolbar">
											
											<div class="row">
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-right: 2px;" >
													<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" style="padding-right: 0px; padding-left: 2px;">
														Import <br> Drawings
													</button>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-7 col-lg-6 text-right" style="padding-left: 2px;">
													
													<button class="btn btn-success btn-block " style="padding-right: 0px; padding-left: 2px; height: auto;">
														Download <br>Current Set
													</button>
													
												</div>
												
											</div><br>
											<div class="padding-10 bordered" id="uploadedFile-'+uploadedFilesCount+'">
												<p>
													Addendum #1<span class="txt-color-green"></span>
													<span class="txt-color-green"><i class="fa fa-check"></i></span>
													<a class="btn btn-danger btn-xs pull-right" href="processDrawing.php" style="margin: 0;">Process Now</a>
												</p>
											</div>
										</div>
										</div>
										<!-- end widget content -->
										
								</div>
								<!-- end widget -->
							
							</article>
					<!-- row -->
					<article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-3" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
									<h2 class="font-md">Structural</h2>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										<table id="dt_basic1" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">Drawing Name</th>
													<th data-class="expand">Release Description</th>
													<th data-hide="phone">Revision Number</th>
													<th>Drawing Date</th>
													<th data-hide="phone,tablet">Edit</th>
												</tr>
											</thead>
											<tbody>
											<tr>
													<td>S001 - General Notes</td>
													<td>CD Set</td>
													<td>0</td>
													<td>04/10/2017</td>
													<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
												</tr>
												<tr>
													<td>S002 - General Notes</td>
													<td>Addendum #1</td>
													<td>1</td>
													<td>05/10/2017</td>
													<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
												</tr>
												<tr>
													<td>S003 - Foundation Details</td>
													<td>CD Set</td>
													<td>0</td>
													<td>04/10/2017</td>
													<td><a href="viewDrawing.php"><i class="fa fa-pencil"></i></a></td>
												</tr>
											</tbody>
										</table>
										<br><br>
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
						</article>
						
				</section>

				</div>
				<!-- end widget grid -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Drawing Upload Info</h4>
							</div>
							
									<div class="modal-body">
										<div class="row"  style="display: flex; justify-content: center;">
											<div class="col-md-6">
												<div class="form-group">
													<label class="input">Release Description</label>
													<input type="text" class="form-control" required style="padding-left: 5px;" />
												</div>
												<div class="form-group">
													<label class="input">Release Date</label>
													<input id="dateselect_filter" type="text" class="form-control datepicker" data-dateformat="mm/dd/yy" style="padding-left: 5px;">
												</div>
												<section>
												<div class="form-group">
													<label class="input">File input</label>
													<form action="upload.php" class="dropzone" id="mydropzone"></form>
												</div>
												</section>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">
											Cancel
										</button>
										<button type="button" class="btn btn-primary" data-dismiss="modal" id="pdfUpload">
											Upload
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

		<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>
		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			Dropzone.autoDiscover = false;
			$("#mydropzone").dropzone({
				//url: "/file/post",
				addRemoveLinks : true,
				maxFilesize: 0.5,
				dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop files <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
				dictResponseError: 'Error uploading file!'
			});
			$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					}
				});
			$('#dt_basic1').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					}
				});
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



			// upload append here
			var uploadedFilesCount = 1;
			$('#pdfUpload').on('click', function() {
				uploadedFilesCount++;

				var htmlstr = '<div class="padding-10 bordered" id="uploadedFile-'+uploadedFilesCount+'">';
				htmlstr += 	'<p>';
				htmlstr += 		'Addendum #'+uploadedFilesCount+' is uploading ';
				htmlstr += 		'<span class="txt-color-green pull-right"><i class="fa fa-upload"></i></span>';
				htmlstr += 	'</p>';
				htmlstr += 	'<div class="progress progress-xs progress-striped active">';
				htmlstr += 		'<div id="bar-'+uploadedFilesCount+'" class="progress-bar bg-color-greenLight" role="progressbar"></div>';
				htmlstr += 	'</div>';
				htmlstr += '</div>';

				var htmlstrDone = 'Addendum #'+uploadedFilesCount+'<span class="txt-color-green"></span>';

				htmlstrDone += '<span class="txt-color-green"><i class="fa fa-check"></i></span>';
				htmlstrDone += '<a class="btn btn-danger btn-xs pull-right" href="processDrawing.php" style="margin: 0;">Process Now</a>';

				$('.widget-body-toolbar').append(htmlstr);

				var timeleft = 99;
				var downloadTimer = setInterval(function(){
				var pbpercent = 100 - timeleft-- + '%';


				  $("#bar-"+uploadedFilesCount).width(pbpercent);
				  if(timeleft <= 0){
				  	clearInterval(downloadTimer);
				  	$('#uploadedFile-'+uploadedFilesCount).empty();
				  	$('#uploadedFile-'+uploadedFilesCount).append(htmlstrDone);
				  }
				},60);
			});
			// upload append ends here

			
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