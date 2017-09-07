
@include('includes._header')
@include('includes._menu')



<style>

	.table {
		border: 1px solid black;
	}
	.table th {
		background-color: gray;
		width: 20%;
		border-bottom: 2px solid black;
	}
	#white {
		background-color: white;
	}
	.table td {
		border-right: 1px solid black;
		border-bottom: 1px solid black;
		padding-left: 5px;
		text-align: left;
	}
	#table_1 {
		border: 1px solid black;
	}
	.name th{
		background-color: gray;
		width: 20%;
		border-bottom: 2px solid black;
	}
	.header th{
		background-color: white;
		width: 20%;
		border-bottom: 1px solid black;
	}
	#table_1 td {
		border-right: 1px solid black;
		border-bottom: 1px solid black;
		padding-left: 5px;
		text-align: left;
	}
	#table_2 {
		border: 1px solid black;
	}
	#table_2 td {
		text-align: right;
		border-right: 1px solid black;
		border-bottom: 1px solid black;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 5px;
		text-align: left;
	}
	.lower_table {
		width: 100%;
		border:1px solid black;
	}
	.lower_table th {
		text-align: left;
		padding-left: 15px;
		border-bottom: 2px solid black;
		background-color: gray;
		width: 200px;
		height: 30px;
	}
	.lower_table td {
		padding-left: 5px;
		text-align: left;
		border-right: 1px solid black;
		border-bottom: 1px solid black;
		height: 25px;
	}
	.pic {
		max-width: 100%;
	}
	
</style>
		<!-- MAIN PANEL -->
	
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
					<li style="color: black;">Projects</li><li style="color: black;">{{ $project->name }}</li><li style="color: black;">Overview</li>
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
				<!-- end row -->
				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				
<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<section id="widget-grid2" class="">
				
					<!-- row -->
					<div class="row no-margin">
						
						<!-- NEW WIDGET START -->
					<div id="content no-padding">

					<!-- new view start -->
					<div class="col-lg-10 col-sm-10 col-md-10">
						<!-- start row 1 -->
						<div class="row">
							<div class="col-lg-8 col-sm-8 col-md-8">
								<table id="table_1">
									<thead>
										<tr class="name">
											<th>Project Team</th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
										</tr>
										<tr class="header">
											<th>Company</th>
											<th>Title</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Email</th>
											
										</tr>
									</thead>
									<tbody>
										
											<tr>
												<td>Skanska</td>
												<td>Project Manager</td>
												<td>Jeff Thomas</td>
												<td>206-548-8468</td>
												<td>Jeff.thomas@email.com</td>
												
											</tr>
											<tr>
												<td>Skanska</td>
												<td>Superintendant</td>
												<td>Bob Devill</td>
												<td>206-612-5425</td>
												<td>bobd@email.com</td>
												
											</tr>

											<tr>
												<td>McClone</td>
												<td>Project Engineer</td>
												<td>Kevin Bobson</td>
												<td>206-548-1582</td>
												<td>kbobson@email.com</td>
												
											</tr>
										
									</tbody>
								</table>						
							</div>

							<div class="col-lg-4 col-sm-4 col-md-4">
								<table id="table_2">
									<thead>
										<tr class="name">
											<th>Project Address</th>
											
										</tr>
										
									</thead>
									<tbody>
										
											<tr>
												<td style="position:relative;text-align:center;">
													924 Howell Street<br>
													Seattle, Washington 98101<br>
													United States
												</td>
											</tr>
											
										
									</tbody>
								</table>						
							</div>

						</div>

						<!--end row 1 -->
						<br><br>
						<!--start row 2 -->
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										<span class="widget-icon"> <i class="fa fa-comments" style="color: white;"></i> </span>
										<h2 style="color: white;">Notifications</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<!-- widget body start -->
											<table class="lower_table">
												<thead>
													<tr>
														<th colspan="5" style="background-color:red; border-bottom:1px solid black;">Unresolved Issues - you have 6 unresolved issues</th>
														
													</tr>
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

											<br>
												<table class="lower_table">
												<thead>
													
													<tr>
														<th colspan="5">Drawing Uploads</th>
														
														
													</tr>
												</thead>
												<tbody>
													
														<tr>
															<td colspan="5">No Current Pending Uploads</td>
															
															
														</tr>
														
													
												</tbody>
											</table>
											
											<br>

											<table class="lower_table">
												<thead>
													<tr>
														<th colspan="5">Equipment</th>
														
													</tr>
													<tr>
														<th style="background-color:white; border-bottom:1px solid black;">Type</th>
														<th colspan="2" style="background-color:white; border-bottom:1px solid black;">From</th>
														<th colspan="2" style="background-color:white; border-bottom:1px solid black;">Date</th>
														
													</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>

											

										<!-- widget body end -->
									</div>
								</div>
					</div>
							</div>		
						</div>
						<!--end row 2 -->

						<!-- start row 3 -->
					<div class="row">
							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Weather</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/weather.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Jobsite Camera</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/jobsitecamera.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Project Photo</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/projectphoto.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>
					</div>

					<!-- end row 3-->

					<!-- start row 4 -->
					<div class="row">
							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Preformance Metrix 1 (content TBD)</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/pm1.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Preformance Metrix 2 (content TBD)</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/pm2.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="jarviswidget" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" id="wid-id-0">

								<header style=" background-color: #404040;">
										
										<h2 style="color: white;">Preformance Metrix 3 (content TBD)</h2>

								</header>

								<div>

									
									<div class="widget-body">
										<img class="pic" src="{{ url('assets/img/overview_pic/pm3.jpg') }}" alt="">
									</div>
								</div>
								</div>
							</div>
					</div>

					<!-- end row 4-->

					</div>

					<div class="col-lg-2 col-sm-2 col-md-2">
						<div>
						<!-- new widget -->
						<div class="jarviswidget jarviswidget-color-blueDark">
							<header>
								<h2> Actions </h2>
							</header>
									
							<!-- widget div -->
							<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
								<!-- <div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
									<a href="../job/printinfo.php"><button class="btn btn-warning form-control" data-target="#categoryModal">Print Info Sheet</button></a>
								</div>
								<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
									<button class="btn btn-warning form-control" onclick="window.location='{{ url('/project/' . $project->id . '/edit') }}'">Edit Project Info</button>
								</div> -->

								<h5>Search Project Team</h5>
								<div class="form-group">
									
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name">
								<br>
								<label for="company">Company</label>
								<select class="form-control" name="company" id="">
									<option value="1">Company 1</option>
									<option value="2">Company 2</option>
									<option value="3">Company 3</option>
								</select>
								<br>
								<label for="title">Title</label>
								<select class="form-control" name="title" id="">
									<option value="1">Title 1</option>
									<option value="2">Title 2</option>
									<option value="3">Title 3</option>
								</select>
								
								</div>
							</div>
									
							<!-- end widget div -->
						</div>
						<!-- end widget -->
									
						
					</div> 
					</div>

					

					<!-- new view end -->
				
				
				

		
						<!-- WIDGET END -->
						
					
				
					<!-- end row -->
				

					
					
					<br><br><br> 
				</div>	</div>
					<!-- end row -->
				
				</section> </article>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->
<br style="clear: both;" /> 
		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
		
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<div id="shortcut">
			
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	

		<!-- IMPORTANT: APP CONFIG -->
		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->


		@include('includes._footer')
		
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
			
			    $('#calendar').fullCalendar({
			
			        header: hdr,
			        editable: true,
			        droppable: true, // this allows things to be dropped onto the calendar !!!
			
			        drop: function (date, allDay) { // this function is called when something is dropped
			
			            // retrieve the dropped element's stored Event Object
			            var originalEventObject = $(this).data('eventObject');
			
			            // we need to copy it, so that multiple events don't have a reference to the same object
			            var copiedEventObject = $.extend({}, originalEventObject);
			
			            // assign it the date that was reported
			            copiedEventObject.start = date;
			            copiedEventObject.allDay = allDay;
			
			            // render the event on the calendar
			            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			            // is the "remove after drop" checkbox checked?
			            if ($('#drop-remove').is(':checked')) {
			                // if so, remove the element from the "Draggable Events" list
			                $(this).remove();
			            }
			
			        },
			
			        select: function (start, end, allDay) {
			            var title = prompt('Event Title:');
			            if (title) {
			                calendar.fullCalendar('renderEvent', {
			                        title: title,
			                        start: start,
			                        end: end,
			                        allDay: allDay
			                    }, true // make the event "stick"
			                );
			            }
			            calendar.fullCalendar('unselect');
			        },
			
			        events: [{
			            title: 'All Day Event',
			            start: new Date(y, m, 1),
			            description: 'long description',
			            className: ["event", "bg-color-greenLight"],
			            icon: 'fa-check'
			        }, {
			            title: 'Long Event',
			            start: new Date(y, m, d - 5),
			            end: new Date(y, m, d - 2),
			            className: ["event", "bg-color-red"],
			            icon: 'fa-lock'
			        }, {
			            id: 999,
			            title: 'Repeating Event',
			            start: new Date(y, m, d - 3, 16, 0),
			            allDay: false,
			            className: ["event", "bg-color-blue"],
			            icon: 'fa-clock-o'
			        }, {
			            id: 999,
			            title: 'Repeating Event',
			            start: new Date(y, m, d + 4, 16, 0),
			            allDay: false,
			            className: ["event", "bg-color-blue"],
			            icon: 'fa-clock-o'
			        }, {
			            title: 'Meeting',
			            start: new Date(y, m, d, 10, 30),
			            allDay: false,
			            className: ["event", "bg-color-darken"]
			        }, {
			            title: 'Lunch',
			            start: new Date(y, m, d, 12, 0),
			            end: new Date(y, m, d, 14, 0),
			            allDay: false,
			            className: ["event", "bg-color-darken"]
			        }, {
			            title: 'Birthday Party',
			            start: new Date(y, m, d + 1, 19, 0),
			            end: new Date(y, m, d + 1, 22, 30),
			            allDay: false,
			            className: ["event", "bg-color-darken"]
			        }, {
			            title: 'Smartadmin Open Day',
			            start: new Date(y, m, 28),
			            end: new Date(y, m, 29),
			            className: ["event", "bg-color-darken"]
			        }],
			
			        eventRender: function (event, element, icon) {
			            if (!event.description == "") {
			                element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description +
			                    "</span>");
			            }
			            if (!event.icon == "") {
			                element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon +
			                    " '></i>");
			            }
			        },
			
			        windowResize: function (event, ui) {
			            $('#calendar').fullCalendar('render');
			        }
			    });
			
			    /* hide default buttons */
			    $('.fc-right, .fc-center').hide();

			
				$('#calendar-buttons #btn-prev').click(function () {
				    $('.fc-prev-button').click();
				    return false;
				});
				
				$('#calendar-buttons #btn-next').click(function () {
				    $('.fc-next-button').click();
				    return false;
				});
				
				$('#calendar-buttons #btn-today').click(function () {
				    $('.fc-today-button').click();
				    return false;
				});
				
				$('#mt').click(function () {
				    $('#calendar').fullCalendar('changeView', 'month');
				});
				
				$('#ag').click(function () {
				    $('#calendar').fullCalendar('changeView', 'agendaWeek');
				});
				
				$('#td').click(function () {
				    $('#calendar').fullCalendar('changeView', 'agendaDay');
				});			
		
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

</html>