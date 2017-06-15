<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<!-- MAIN PANEL -->
	<style type="text/css">

 		@media screen and (max-width: 1366px){
 			.actionBtns{
 				font-size: 10px;
 				padding: 5px 7px;
 			}
 		}
		.main-parent{
			background-color: background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		}
		.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			padding: 2px ;
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
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">1001 Broadway</li><li style="color: black;">Equipment</li><li style="color: black;">Overview</li>
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
					<article style="margin-left: 0px; ">
						<div class="col-lg-10" style="padding-left: 13px;">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false"	 data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<h2>Trucking Notifications</h2>				
									
								</header>

								<!-- widget div-->
								<div>

									<!-- widget content -->
									<div class="widget-body no-padding" style="min-height: 50px;">
										
										<table class="table table-bordered table-striped">
											<tr>
												<th style="width: 33%;">Scheduled In-Bound Trucks</th>
												<th style="width: 34%;">Trucking Requests</th>
												<th style="width: 33%;">Trucks to be Approved</th>
											</tr>
											<tr>
												<td><a href="newtransfer.php">From Yard 330 - 05/18/2017 12pm</a></td>
												<td></td>
												<td><a href="approvetruck.php">From Yard 330 - 06/16/2017</a></td>
											</tr>
											<tr>
												<th>Scheduled Out-Bound Trucks</th>
												<th>Draft Transfers</th>
												<tH>Unreviewed Forecasts</th>
											</tr>
											<tr>
												<td></td>
												<td><a href="newtransfer.php">To Yard 330 - 06/15/2017</a></td>
												<td>Phase 4 - West Pour 5 07/15/2017</td>
											</tr>
										</table>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false"	 data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<h2>Inventory List</h2>				
									
								</header>

								<!-- widget div-->
								<div class="no-padding" style="min-height: 50px;">

									<!-- widget content -->
									<div class="widget-body" style="min-height: 50px;">
													
													<table id="dt_basic" class="table table-bordered" width="100%">
													<thead>			                
															<tr>
																<th style="width: 40%;">Descriptions</th>
																<th>Owned</th>
																<th>Rented</th>
																<th>Total</th>
																<th>Units</th>
																<th style="width: 30%;">Notes</th>
																<th style="width: 3%;">Edit</th>
															</tr>
													</thead>
													<tbody>

													<?php 
															$count = 1;
															$num = 1;
															while ($count <= 3 ) { ?>
																<tr class="main-parent" data_id="<?php echo $num; ?>">
																	<td style="width:10px !important;">
																		<button class="button btn btn-success btn-xs btn-circle" style="height: 18px; width: 18px; padding-top: 0px;" data_id="<?php echo $num;?>" data_level="1">
																			<i class="fa fa-plus level_1_<?php echo$num; ?>"></i>
																			<i class="fa fa-minus hide level_1_<?php echo$num; ?>"></i>
																		</button> 
																		<span class="description-name">HV</span>
																	</td>

																	<td style="width:50px !important;"></td>
																	<td style="width:60px !important;"></td>
																	<td style="width:60px !important;"></td>
																	<td style="width:50px !important;"></td>
																	<td style="width:40px !important;"></td>
																	<td style="width:15px !important;"></td>
																</tr>
													<?php 
																$count1 = 1;
																$num1 = 1;
																while ($count1 <= 3 ) { ?>
																	<tr class="hide first-child-<?php echo $num; ?> fchild">
																		<td style="width:10px !important; padding-left: 20px;">
																			<button class="button btn btn-success btn-xs btn-circle" style="height: 18px; width: 18px; padding-top: 0px;" data_id="<?php echo $num1;?>" parent_data_id="<?php echo $num;?>" data_level="2">
																				<i class="fa fa-plus level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
																				<i class="fa fa-minus hide level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
																			</button> 
																		<span class="description-name">Main Beams</span>
																		</td>
																		<td style="width:50px !important;" ></td>
																		<td style="width:60px !important;" ></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:15px !important;" ></td>
																		<td style="width:15px !important;"></td>
																	</tr>
													<?php 
																$count2 = 1;
																$num2 = 1;
																while ($count2 <= 6 ) { ?>
																	<tr class="hide second-child-<?php echo $num; ?>-<?php echo $num1; ?> second-child-<?php echo $num; ?>" data_main_parent="<?php echo $num; ?>">
																		<td style="width:10px !important; padding-left: 40px;">
																			Main Beams 3' 9''
																		</td>
																		<td style="width:60px !important;" ></td>
																		<td style="width:15px !important;"></td>
																		<td style="width:15px !important;"></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:15px !important;" ></td>
																		<td style="width:15px !important;"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a></td>
																	</tr>

																<?php $count2++; } ?>
															

																<?php $count1++;
																	$num1++; } ?>

															<?php
															$num++;
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
							</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
						</div>

												<!-- NEW WIDGET START -->
						<div class="col-lg-2">
							
							
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
											<div>
												<a class="btn btn-success btn-block actionBtns" href="newtransfer.php">New Transfer</a>
												<a class="btn btn-success btn-block actionBtns" href="newtrucking.php">New Trucking Request</a>
											</div>
											<legend class="no-margin">Inventory Search</legend>
											<br>
											<label><b>Status</b></label>
											<select class="form-control" name="inventoryStatus">
												<option>Active</option>
												<option>Damaged</option>
												<option>Inactive</option>
											</select>
											<label><b>Owner</b></label>
											<select class="form-control">
												<option>McClone</option>
											</select>
											<label><b>Quick Search</b></label>
											<input type="text" name="inventorySearch" class="form-control">
										</div>
										<!-- end widget content -->
										
									</div>
									<!-- end widget div -->
										
								</div>


							</div>
						<div class="col-lg-10">
							
						</div>
						</article>
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
		

			$('.button').on('click', function() {
				var id = $(this).attr('data_id');

				var level = $(this).attr('data_level');

				if(level == 1){
					$('.first-child-'+id).toggleClass('hide');
					$('.level_1_'+id).toggleClass('hide');
					if($('.level_1_'+id).first().hasClass('hide')){
						$('.level_1_'+id).parent().removeClass('btn-success').addClass('btn-warning');
					}
					else{
						$('.level_1_'+id).parent().removeClass('btn-warning').addClass('btn-success');
					}
					$('.second-child-'+id).addClass('hide');
				}
				else if(level == 2){
					var id2 = $(this).attr('parent_data_id');
					$('.second-child-'+id2+'-'+id).toggleClass('hide');
					$('.level_2_'+id2+'_'+id).toggleClass('hide');
					if($('.level_2_'+id2+'_'+id).first().hasClass('hide')){
						$('.level_2_'+id2+'_'+id).parent().removeClass('btn-success').addClass('btn-warning');
					}
					else{
						$('.level_2_'+id2+'_'+id).parent().removeClass('btn-warning').addClass('btn-success');
					}
				}
				else{
				}
				$('.inner_' + id).toggleClass('hide');
			});
			
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