<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<!-- MAIN PANEL -->
	<style type="text/css">
		.main-parent{
			background-color: background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		}
		.rotate {
		  /* FF3.5+ */
		  -moz-transform: rotate(-90.0deg);
		  /* Opera 10.5 */
		  -o-transform: rotate(-90.0deg);
		  /* Saf3.1+, Chrome */
		  -webkit-transform: rotate(-90.0deg);
		  /* IE6,IE7 */
		  filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
		  /* IE8 */
		  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
		  /* Standard */
		  transform: rotate(-90.0deg);
		}
	</style>
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon" style="background-color: white;">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">1001 Broadway</li><li style="color: black;">Equipment</li><li style="color: black;">Trucking Log</li>
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
			<div id="content" style="padding-left: 0px;">
				<!-- end row -->
				<section id="widget-grid" style="padding-left: 0px;">
				
					<!-- row -->
					<div class="row" style="padding-left: 0px;">
					<div class="col-lg-10" style="padding-left: 4px;">
						<article class="col-lg-12" style="margin-left: 0px;">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-16" data-widget-sortable="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
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
									<span class="widget-icon"> <i class="fa fa-lock"></i> </span>
												
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th colspan="4" rowspan="3" style="text-align: right; height: 165px; background-color:white;border-top:none;border-left;none;">
														<div class="row" style="text-align:center">
															<div class="col-lg-12">
																<p>Choose Date Range</p>
															</div>
														</div>
														<div class="row">
														<div class="col-lg-1"></div>
															<div class="col-lg-4">
																<input type="text" class="form-control">
															</div>
															<div class="col-lg-2" style="text-align:center;font-size:20px;">
																To
															</div>
															<div class="col-lg-4">
																<input type="text" class="form-control">
															</div>
															<div class="col-lg-1"></div>
														</div>
														<div class="row">
															<h1> </h1><br><br>
														</div>
														<div class="row">
														<div class="col-lg-1"></div>
															<div class="col-lg-4">
																<span style="font-size:18px;"><b>Category</b></span>
															</div>
															<div class="col-lg-6">
																<select class="form-control" name="category" id="" style="width:160px;">
																	<option value="">HV</option>
																	<option value="">HV1</option>
																	<option value="">HV2</option>
																</select>
															</div>
															<div class="col-lg-1"></div>
														</div>
														
													</th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Nov 14, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 1, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 1, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 2, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 13, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 20, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Dec 15, 16   </th>
													<th style="width:50px;font-size: 8px;color:blue">From 330-WA Yard Jan 4, 17   </th>
													<th style="width:50px;font-size: 8px;color:darkgray">To 330-WA Yard Feb 3, 17   </th>
													<th style="width:50px;font-size: 8px;color:darkgray">To 330-WA Yard Feb 7, 17   </th>
													<th style="width:50px;font-size: 8px;color:darkgray">To 330-WA Yard Feb 8, 17   </th>
													<th style="width:50px;font-size: 8px;color:darkgray">To 330-WA Yard Feb 8, 17   </th>
													<th style="width:50px;font-size: 8px;color:darkgray">To N/A-Titan Feb 22, 17   </th>
												</tr>
												<tr>
													
													
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
													<th style="width:50px;font-size: 8px;">Approx SF per Load</th>
												</tr>
												<tr>
													
													
													<th style="width:50px;font-size: 8px;">~1,564sf</th>
													<th style="width:50px;font-size: 8px;">~7,2554sf</th>
													<th style="width:50px;font-size: 8px;">~8,089sf</th>
													<th style="width:50px;font-size: 8px;">~4,318sf</th>
													<th style="width:50px;font-size: 8px;">~4,265sf</th>
													<th style="width:50px;font-size: 8px;">~443sf</th>
													<th style="width:50px;font-size: 8px;">~3,637sf</th>
													<th style="width:50px;font-size: 8px;">~3,920sf</th>
													<th style="width:50px;font-size: 8px;">~1,792sf</th>
													<th style="width:50px;font-size: 8px;">~4,480sf</th>
													<th style="width:50px;font-size: 8px;">~5,468sf</th>
													<th style="width:50px;font-size: 8px;">~896sf</th>
													<th style="width:50px;font-size: 8px;">~1,440sf</th>
												</tr>
											</thead>
											<thead>
												<th colspan="4" style="text-align: left; height: 25px;">HV Beams</th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
											</thead>
											<tbody>
											<?php for($i = 1; $i<=5; $i++){ ?>
											<tr>
												<td>Main Beam 3'-9"</td>
												<td>117ea</td>
												<td>20.7 Lbs</td>
												<td>2,422 Lbs</td>
												<td>-</td>
												<td>117</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											<?php } ?>
											</tbody>
											<thead>
												<th colspan="4" style="text-align: left; height: 25px;">HV Shores</th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
											</thead>
											<tbody>
											<?php for($i = 1; $i<=5; $i++){ ?>
											<tr>
												<td>#1 Shore - w/Drop Head</td>
												<td>10ea</td>
												<td>50.5 Lbs</td>
												<td>505 Lbs</td>
												<td>60</td>
												<td>120</td>
												<td>240</td>
												<td>480</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											<?php } ?>
											</tbody>
											<thead>
												<th colspan="4" style="text-align: left; height: 25px;">HV Misc Equipment</th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
												<th style="width:50px;font-size: 8px;"></th>
											</thead>
											<tbody>
											<?php for($i = 1; $i<=8; $i++){ ?>
											<tr>
												<td>Barella</td>
												<td>202.0ea</td>
												<td>20.5 Lbs</td>
												<td>4,141 Lbs</td>
												<td>6</td>
												<td>29</td>
												<td>34</td>
												<td>18</td>
												<td>18</td>
												<td>2</td>
												<td>20</td>
												<td>14</td>
												<td>4</td>
												<td>16</td>
												<td>27</td>
												<td>1</td>
												<td>6</td>
											</tr>
											<?php } ?>
											</tbody>


											
											
											
											
										</table>
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>

						</article>
					</div>

											<!-- NEW WIDGET START -->
					<div class="col-lg-2">
						
						<article style="margin-left: 0px; ">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-16" data-widget-sortable="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
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
									<span class="widget-icon"> <i class="fa fa-lock"></i> </span>
									<h2>Actions </h2>			
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
									<!-- body in action section start-->
										<div class="row" style="text-align:center">
															<div class="col-lg-12">
																<p>Choose Date Range</p>
															</div>
														</div>
														<div class="row">
														
															<div class="col-lg-5">
																<input type="text" class="form-control">
															</div>
															<div class="col-lg-2" style="text-align:center;font-size:20px;">
																To
															</div>
															<div class="col-lg-5">
																<input type="text" class="form-control">
															</div>
															
														</div>
														<div class="row">
															<h1> </h1><br><br>
														</div>
														<div class="row">
															<div class="col-lg-12" style="text-align:center">
																<span style="font-size:18px;"><b>Category</b></span>
															</div>
														</div>
														<div class="row">
														
															<div class="col-lg-12">
																<select class="form-control" name="category" id="">
																	<option value="">HV</option>
																	<option value="">HV1</option>
																	<option value="">HV2</option>
																</select>
															</div>
														
														</div>
													
														</div>
									<!-- body in action section start-->
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
						</article>
					</div>
					</div>

					<!-- end row -->
				
				</section>

				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
		
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
						
						
	
		
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<?php include '../includes/_footer.php'; ?>

		<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

		<script type="text/javascript">
			
			$(document).ready(function() {
			

			pageSetUp();
		

			    "use strict";
			
			    var date = new Date();
			    var d = date.getDate();
			    var m = date.getMonth();
			    var y = date.getFullYear();
			
			    var hdr = {
			        left: 'title',
			        center: 'month,agendaWeek,agendaDay',
			        right: 'prev,today,next'
			    };
			
			    var initDrag = function (e) {
			        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			        // it doesn't need to have a start or end
			
			        var eventObject = {
			            title: $.trim(e.children().text()), // use the element's text as the event title
			            description: $.trim(e.children('span').attr('data-description')),
			            icon: $.trim(e.children('span').attr('data-icon')),
			            className: $.trim(e.children('span').attr('class')) // use the element's children as the event class
			        };
			        // store the Event Object in the DOM element so we can get to it later
			        e.data('eventObject', eventObject);
			
			        // make the event draggable using jQuery UI
			        e.draggable({
			            zIndex: 999,
			            revert: true, // will cause the event to go back to its
			            revertDuration: 0 //  original position after the drag
			        });
			    };
			
			    var addEvent = function (title, priority, description, icon) {
			        title = title.length === 0 ? "Untitled Event" : title;
			        description = description.length === 0 ? "No Description" : description;
			        icon = icon.length === 0 ? " " : icon;
			        priority = priority.length === 0 ? "label label-default" : priority;
			
			        var html = $('<li><span class="' + priority + '" data-description="' + description + '" data-icon="' +
			            icon + '">' + title + '</span></li>').prependTo('ul#external-events').hide().fadeIn();
			
			        $("#event-container").effect("highlight", 800);
			
			        initDrag(html);
			    };
			
			    /* initialize the external events
				 -----------------------------------------------------------------*/
			
			    $('#external-events > li').each(function () {
			        initDrag($(this));
			    });
			
			    $('#add-event').click(function () {
			        var title = $('#title').val(),
			            priority = $('input:radio[name=priority]:checked').val(),
			            description = $('#description').val(),
			            icon = $('input:radio[name=iconselect]:checked').val();
			
			        addEvent(title, priority, description, icon);
			    });
			
			    /* initialize the calendar
				 -----------------------------------------------------------------*/
						
		
		})

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

</html>_