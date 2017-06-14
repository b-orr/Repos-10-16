<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>

<style>
	ul li {
		margin-top: 8px;
	}
	
	ul {
		cursor: pointer;
	}

	ul li {
		cursor: pointer;
	}

	.disable-select {
		  -webkit-user-select: none;  
		  -moz-user-select: none;    
		  -ms-user-select: none;      
		  user-select: none;
		}

	th, tr {
		text-align:center;
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
					<li>Home</li><li>Photos</li>
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
								<article class="col-lg-10">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>
										<span class="widget-icon"> <i class="fa fa-picture-o"></i> </span>
											<h2>Photos</h2>
										</header>
										<div class="row">
											<div class="widget-body">
												<!--ovde odi-->

												<div class="col-lg-3">
													<ul style="list-style:url('../photos/includes/triangle.gif');">
														<li><a class="list_link disable-select" id="item_1" data_id = '10'><span style="font-size:18px;font-weight:500;color:black">Progress</span></a></li>
															<ul style="list-style:url('../photos/includes/triangle_small.gif');" class="inside hide" id="item_10">
																<li><a class="item_link" id="item_11" data_id ="11" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 01</a></span></li>
																<li><a class="item_link" id="item_12" data_id ="12" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 02</a></span></li>
																<li><a class="item_link" id="item_13" data_id ="13" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 03</a></span></li>
																<li><a class="item_link" id="item_14" data_id ="14" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 04</a></span></li>
																<li><a class="item_link" id="item_15" data_id ="15" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 05</a></span></li>
																<li><a class="item_link" id="item_16" data_id ="16" pic_id = "1" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 06</a></span></li>
															</ul>
														<li><a class="list_link disable-select" id="item_2" data_id = "20"><span style="font-size:18px;font-weight:500;color:black">Safety</span></a></li>
															<ul style="list-style:url('../photos/includes/triangle_small.gif');" class="inside hide" id="item_20">
																<li><a class="item_link" id="item_21" data_id ="21" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 01</a></span></li>
																<li><a class="item_link" id="item_22" data_id ="22" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 02</a></span></li>
																<li><a class="item_link" id="item_23" data_id ="23" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 03</a></span></li>
																<li><a class="item_link" id="item_24" data_id ="24" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 04</a></span></li>
																<li><a class="item_link" id="item_25" data_id ="25" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 05</a></span></li>
																<li><a class="item_link" id="item_26" data_id ="26" pic_id = "2" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 06</a></span></li>
															</ul>
														<li><a class="list_link" id="item_3" data_id = "30"><span style="font-size:18px;font-weight:500;color:black">Quality Control</span></a></li>
															<ul style="list-style:url('../photos/includes/triangle_small.gif');" class="inside hide" id="item_30">
																<li><a class="item_link" id="item_31" data_id ="31" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 01</a></span></li>
																<li><a class="item_link" id="item_32" data_id ="32" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 02</a></span></li>
																<li><a class="item_link" id="item_33" data_id ="33" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 03</a></span></li>
																<li><a class="item_link" id="item_34" data_id ="34" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 04</a></span></li>
																<li><a class="item_link" id="item_35" data_id ="35" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 05</a></span></li>
																<li><a class="item_link" id="item_36" data_id ="36" pic_id = "3" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 06</a></span></li>
															</ul>
														<li><a class="list_link" id="item_4" data_id = "40"><span style="font-size:18px;font-weight:500;color:black">Falsework Inspection</span></a></li>
															<ul style="list-style:url('../photos/includes/triangle_small.gif');" class="inside hide" id="item_40">
																<li><a class="item_link" id="item_41" data_id ="41" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 01</a></span></li>
																<li><a class="item_link" id="item_42" data_id ="42" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 02</a></span></li>
																<li><a class="item_link" id="item_43" data_id ="43" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 03</a></span></li>
																<li><a class="item_link" id="item_44" data_id ="44" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 04</a></span></li>
																<li><a class="item_link" id="item_45" data_id ="45" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 05</a></span></li>
																<li><a class="item_link" id="item_46" data_id ="46" pic_id = "4" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 06</a></span></li>
															</ul>
														<li><a class="list_link" id="item_5" data_id = "50"><span style="font-size:18px;font-weight:500;color:black">Delay - impact</span></a></li>
															<ul style="list-style:url('../photos/includes/triangle_small.gif');" class="inside hide" id="item_50">
																<li><a class="item_link" id="item_51" data_id ="51" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 01</a></span></li>
																<li><a class="item_link" id="item_52" data_id ="52" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 02</a></span></li>
																<li><a class="item_link" id="item_53" data_id ="53" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 03</a></span></li>
																<li><a class="item_link" id="item_54" data_id ="54" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 04</a></span></li>
																<li><a class="item_link" id="item_55" data_id ="55" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 05</a></span></li>
																<li><a class="item_link" id="item_56" data_id ="56" pic_id = "5" class="disable-select"><span style="font-size:14px;font-weight:300;color:black">2017 - 2 - 06</a></span></li>
															</ul>
													</ul>
												</div>

												<div class="col-lg-9">
													<div class="row">
														<button id="view_1" class="btn btn-success">View 1</button> &nbsp;&nbsp;<button id="view_2" class="btn btn-success">View 2</button></h4>
													</div>
													<br>
													<div class="row">
													
													<div class="pic_1 hide" id="pic_11">
														<div class="view_1">
															<?php for($i = 1; $i<=10; $i++){ ?>
																<div class="col-lg-4">
																	<img src="../photos/includes/img-1.jpg" alt="">
																</div>
															<?php } ?>
														</div>
													
														<div class="view_2 hide">
															<table>
																<thead>
																	<tr>
																		<th style="width:150px;"></th>
																		<th style="width:220px;font-size:20px;">Description</th>
																		<th style="width:180px;font-size:20px;">Date Taken</th>
																		<th style="width:180px;font-size:20px;">Taken By</th>
																	</tr>
																</thead>
																<tbody>
																<?php for($i = 1; $i<=10; $i++){ ?>
																	<tr>
																		<td><img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"></td>
																		<td>Laydown</td>
																		<td>2017/2/02</td>
																		<td>Rick Owens</td>
																	</tr>
																<?php } ?>
																</tbody>
															</table>
														</div>
													</div>

													<div class="pic_1 hide" id="pic_12">
														<div class="view_1">
															<?php for($i = 1; $i<=10; $i++){ ?>
																<div class="col-lg-4">
																	<img src="../photos/includes/img-2.jpg" alt="">
																</div>
															<?php } ?>
														</div>
													
														<div class="view_2 hide">
															<table>
																<thead>
																	<tr>
																		<th style="width:150px;"></th>
																		<th style="width:220px;font-size:20px;">Description</th>
																		<th style="width:180px;font-size:20px;">Date Taken</th>
																		<th style="width:180px;font-size:20px;">Taken By</th>
																	</tr>
																</thead>
																<tbody>
																<?php for($i = 1; $i<=10; $i++){ ?>
																	<tr>
																		<td><img src="../photos/includes/img-2.jpg" alt="" height="90" width="90"></td>
																		<td>Laydown</td>
																		<td>2017/2/02</td>
																		<td>Rick Owens</td>
																	</tr>
																<?php } ?>
																</tbody>
															</table>
														</div>
													</div>

													<div class="pic_1 hide" id="pic_13">
													
													</div>

													<div class="pic_1 hide" id="pic_14">
																	
													</div>

													<div class="pic_1 hide" id="pic_15">
													
													</div>

													<div class="pic_1 hide" id="pic_16">
													
													</div>

													</div>

													<!-- second row pictures-->

													<div class="pic_2 hide" id="pic_21">
														
													</div>

													<div class="pic_2 hide" id="pic_22">
														
													</div>

													<div class="pic_2 hide" id="pic_23">
													
													</div>

													<div class="pic_2 hide" id="pic_24">
																	
													</div>

													<div class="pic_2 hide" id="pic_25">
													
													</div>

													<div class="pic_2 hide" id="pic_26">
													
													</div>
													<!-- end pic-->

													<!-- third row pictures-->

													<div class="pic_3 hide" id="pic_31">
														
													</div>

													<div class="pic_3 hide" id="pic_32">
														
													</div>

													<div class="pic_3 hide" id="pic_33">
													
													</div>

													<div class="pic_3 hide" id="pic_34">
																	
													</div>

													<div class="pic_3 hide" id="pic_35">
													
													</div>

													<div class="pic_3 hide" id="pic_36">
													
													</div>
													<!-- end pic-->

													<!-- fourth row pictures-->

													<div class="pic_4 hide" id="pic_41">
														
													</div>

													<div class="pic_4 hide" id="pic_42">
														
													</div>

													<div class="pic_4 hide" id="pic_43">
													
													</div>

													<div class="pic_4 hide" id="pic_44">
																	
													</div>

													<div class="pic_4 hide" id="pic_45">
													
													</div>

													<div class="pic_4 hide" id="pic_46">
													
													</div>
													<!-- end pic-->

													<!-- fifth row pictures-->

													<div class="pic_5 hide" id="pic_51">
														
													</div>

													<div class="pic_5 hide" id="pic_52">
														
													</div>

													<div class="pic_5 hide" id="pic_53">
													
													</div>

													<div class="pic_5 hide" id="pic_54">
																	
													</div>

													<div class="pic_5 hide" id="pic_55">
													
													</div>

													<div class="pic_5 hide" id="pic_56">
													
													</div>
													<!-- end pic-->
													<br><br>
												</div>
					
											</div>
											<br>
										</div>
									</div>
								</article>
								<article class="col-lg-2">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>
										<span class="widget-icon"> <i class="fa fa-picture-o"></i> </span>
											
										</header>
										<div class="row">
											<div class="widget-body">
												<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-block">
													+ New Folder
												</button>
												<!-- body in action section start-->
										<div class="row" style="text-align:center">
															<div class="col-lg-12">
																<p>Date</p>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-5">
																From
															</div>
															<div class="col-lg-2" style="text-align:center;font-size:20px;">
																
															</div>
															<div class="col-lg-5">
																To
															</div>
														</div>
														<div class="row">
														
															<div class="col-lg-5">
																<input type="text" class="form-control">
															</div>
															<div class="col-lg-2" style="text-align:center;font-size:20px;">
																
															</div>
															<div class="col-lg-5">
																<input type="text" class="form-control">
															</div>
															
														</div>
														<div class="row">
															<br>
														</div>
														<div class="row">
															<div class="col-lg-12" style="text-align:center">
																<span style="font-size:18px;"><b>Taken By</b></span>
															</div>
														</div>
														<div class="row">
														
															<div class="col-lg-12">
																<select class="form-control" name="category" id="">
																	<option value="">John Doe</option>
																	<option value="">Jane Doe</option>
																</select>
															</div>
														
														</div>
														<br>
														<div class="row">
															<div class="col-lg-12" style="text-align:center">
																<span style="font-size:18px;"><b>Keyword</b></span>
															</div>
														</div>
														<div class="row">
														
															<div class="col-lg-12">
																<input type="text" name="keyword" class="form-control">
															</div>
														
														</div>
													
														</div>
									<!-- body in action section start-->
											</div>
											<br>
										</div>
									</div>
								</article>
							</div>
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
										<label class="input" style="font-weight: bold;">Folder Name</label>
										<input type="text" name="compName" class="form-control">
									</div>
								</div>
							</div>
							
							
							
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal" id="pdfUpload">
								Create
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

			// open-close list

				$('.list_link').on('click', function() {
				var id = $(this).attr('data_id');
				id_name = $(this).attr('id');

				$('*[class^="pic_"]').addClass('hide');
				$('.item_link').children().css("color","black");			
				
				//$(".thisclass:not(#thisid)").doAction();
				$(".inside:not(#" + id_name + "0)").addClass('hide');
				
				$('#item_' + id).toggleClass('hide');
			});

			// open-close list

			// change view

				$('#view_1').on('click', function() {
					$('.view_2').addClass('hide');
					$('.view_1').removeClass('hide');
				});

				$('#view_2').on('click', function() {
					$('.view_1').addClass('hide');
					$('.view_2').removeClass('hide');
				});
			// change view

			//show images

			$('.item_link').on('click', function() {
				var id = $(this).attr('data_id');
				var pic = $(this).attr('pic_id');

				$('.item_link').children().css("color","black");
				$(this).children().css("color","red");

				
				$('.pic_' + pic).addClass('hide');
				$('#pic_' + id).removeClass('hide');

			});

			//show images
			


		
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