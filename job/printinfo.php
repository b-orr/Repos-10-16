<?php include '../includes/_header_eq.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>


<style>
.down_10px {
	position: relative;
	top:10px;
}
.left_10px {
	position: relative;
	left:10px;
}
.left_300px {
	position: absolute;
	left:300px;
}
	.my_table {
		width: 100%;
		
	}	
	.my_table th {
		text-align: left;
		padding-left: 15px;
		background-color: gray;
		width: 25%;
		height: 40px;
	}
	.my_table td {
		padding-left: 5px;
		text-align: left;
		height: 25px;
		border-top: 
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
					<li style="color: black;">Equipment</li><li style="color: black;">Equipment Overview</li>
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
				

				<section id="widget-grid2" class="">
				
					<!-- row -->
					<div class="row no-margin">
						
						<!-- NEW WIDGET START -->
						<div id="content no-padding">

				
				<!-- row -->
				
				<div class="row">
				
					
									

					<div class="col-sm-10 col-md-10 col-lg-10">

					<div id="upper_text">
						<p>Job Number</p>
						<p>Job Name</p>
						<p>Job Site Address</p>
					</div>

					<div id="table_1">
						<table id="table_1" class="my_table">
							<thead>
							
								<tr>
									<th style="font-size:16px;">MCC Project Team</th>
									<th><span class="down_10px">Name</span></th>
									<th><span class="down_10px">Phone Number</span></th>
									<th><span class="down_10px">Email Address</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="left_10px">Field Ops Manager</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Project Manager</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Project Engineer</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Superintendenet</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Assist. Superintendenet</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="4">Fed Ex / UPS Address (if different from Jobsite Address)</td>
								</tr>
								<tr>
									<td colspan="4">GC Name</td>
								</tr>
								<tr>
									<td colspan="4">GC Office Address</td>
								</tr>
								<tr>
									<td colspan="4">GC Phone</td>
								</tr>
								
							</tbody>
						</table>
					</div>

					
					<div id="table_1">
						<table id="table_2" class="my_table">
							<thead>
							
								<tr>
									<th style="font-size:16px;">GC Project Team</th>
									<th><span class="down_10px">Name</span></th>
									<th><span class="down_10px">Phone Number</span></th>
									<th><span class="down_10px">Email Address</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="left_10px">Project Manager</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Project Engineer</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Superintendenet</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">RFI Contact</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Safety Contact</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Billing Contact</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><span class="left_10px">Insurance Contact</span></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="2">MCC TM Parking Locatin</td>
									<td colspan="2">GC Required Orientation(yes/no</td>
								</tr>
								<tr>
									<td colspan="2">MCC Project Start Time</td>
									<td colspan="2">GC Required Post Accident Drug Test(yes/no)</td>
								</tr>
								<tr>
									<td colspan="2">Special Site Requirements</td>
									<td colspan="2">Special Hiring Requirements(yes/no) - if yes, extra column for list requirements</td>
								</tr>
								
							</tbody>
						</table>
						
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
															<button class="btn btn-warning form-control" data-target="#categoryModal" data-toggle="modal">Print Info Sheet</button>
														</div>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-warning form-control" data-target="#subCategoryModal" data-toggle="modal">Edit Project Info</button>
														</div>
														
													</div>
				
							<!-- end widget div -->
						</div>
						<!-- end widget -->
				
						
					</div>
				</div>
				
				<!-- end row -->

			</div>
						<!-- WIDGET END -->
						
					</div>
				
					<!-- end row -->
				
					<!-- row -->
				
					<!--text-->
					
					<br><br>
					
					
				
					<!-- end row -->
				
				</section>
				<!-- end widget grid -->

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



		<?php include '../includes/_footer.php'; ?>
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