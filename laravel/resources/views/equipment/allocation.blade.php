@include('../includes/_header_eq')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

@include('../includes/_menu_eq')
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
		h3 {
			padding-top: 5px;
			margin: 0px;
			padding-bottom: 0px;
			margin-bottom: 0px;
		}
		.barStyle {
			padding-top: 5px;
			margin-bottom: -15px;
		}
		.rotate {
		/* Safari */
		-webkit-transform: rotate(-90deg);

		/* Firefox */
		-moz-transform: rotate(-90deg);

		/* IE */
		-ms-transform: rotate(-90deg);

		/* Opera */
		-o-transform: rotate(-90deg);

		/* Internet Explorer */
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

		}
	</style>
		<!-- MAIN PANEL -->
		<div id="main" role="main">
		<div id="ribbon" style="background-color: white;">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: black;">Equipment</li><li style="color: black;">Allocation</li>
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
			<section id="widget-grid" class="">
				<article class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
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
							<h2>View Totals</h2>
							<div class="col-lg-3">
								<select style="color: black;" class="form-control">
									<option>HV</option>
									<option>HV</option>
									<option>HV</option>
									<option>HV</option>
								</select>
							</div>
						</header>

						<!-- widget div-->
						<div>


							<!-- widget content -->
							<div class="widget-body">
								<div class="row bordered">
									<div class="col-lg-3">
										<h3 style="">
										UW Life Sciences Building
										</h3>
									</div>
									<div class="col-lg-9 barStyle">
										<div class="progress progress-lg">
											<div class="progress-bar bg-color-greenLight" role="progressbar" style="width: 80%"></div>
										</div>
									</div>
								</div>
								<div class="row bordered">
									<div class="col-lg-3">
										<h3>
										1001 Broadway
										</h3>
									</div>
									<div class="col-lg-9 barStyle">
										<div class="progress progress-lg">
											<div class="progress-bar bg-color-greenLight" role="progressbar" style="width: 70%"></div>
										</div>
									</div>
								</div>
								<div class="row bordered">
									<div class="col-lg-3">
										<h3>
										Second and University
										</h3>
									</div>
									<div class="col-lg-9 barStyle">
										<div class="progress progress-lg">
											<div class="progress-bar bg-color-greenLight" role="progressbar" style="width: 20%"></div>
										</div>
									</div>
								</div>
								<div class="row bordered">
									<div class="col-lg-3">
										<h3>
										Block 25 East
										</h3>
									</div>
									<div class="col-lg-9 barStyle">
										<div class="progress progress-lg">
											<div class="progress-bar bg-color-greenLight" role="progressbar" style="width: 90%"></div>
										</div>
									</div>
								</div>
								<div class="row col-lg-12 no-padding no-margin" style="height: 35px;">
									<div class="col-lg-3 no-padding">
									</div>
									<div class="col-lg-9 no-padding">
										<div class="col-lg-6 no-padding">
											<span class="pull-right rotate" style="padding-top: 20px; font-size: 9px;">25,000</span>
										</div>
										<div class="col-lg-6 no-padding">
											<span class="pull-right rotate" style="padding-top: 20px; font-size: 9px;">
											50,000
											</span>
										</div>
									</div>
								</div>
							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
				</article>
				<article class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
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
							<h2>Actions</h2>

						</header>

						<!-- widget div-->
						<div>
							<!-- widget content -->
							<div class="widget-body">
								<label>Month</label>
								<select class="form-control" name="monthPick">
									<option>January</option>
									<option>February</option>
									<option>March</option>
								</select>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
				</article>
				<article class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
				<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
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
							<h2>Projects Allocation Descriptions</h2>

						</header>

						<!-- widget div-->
						<div>

							<!-- end widget edit box -->

							<!-- widget content -->
							<div class="widget-body">
								<table id="dt_basic" class="table table-bordered" width="100%">
									<thead>
											<tr>
												<th style="width: 10%;">No.</th>
												<th style="width: 25%;"><span>Project</span></th>
												<th>Descriptions</th>
												<th style="width: 5%;">Qty</th>
											</tr>
									</thead>
									<tbody>

									<?php
											$count = 1;
											$num = 1;
											while ($count <= 3 ) { ?>
												<tr class="main-parent" data_id="<?php echo $num; ?>">
													<td style="width:10px !important;">
														<button class="button btn btn-success btn-xs" style="height: 20px;" data_id="<?php echo $num;?>" data_level="1">
															<span style="font-size:12px !important;" class="level_1_<?php echo$num;?>">
																<b>+</b>
															</span>
															<span style="font-size:12px !important;" class="hide level_1_<?php echo$num;?>">
																<b>-</b>
															</span>
														</button>
														<span>1007</span>
													</td>
													<td><span class="description-name">1001 Broadway</span></td>
													<td style="width:50px !important;"></td>
													<td style="width:60px !important;"></td>																</tr>
												<?php
												$count1 = 1;
												$num1 = 1;
												while ($count1 <= 3 ) { ?>
													<tr class="hide first-child-<?php echo $num; ?> fchild">
														<td></td>
														<td style="width:10px !important; padding-left: 20px;">
														</td>
														<td style="width:15px !important;">HV / Aluma</td>
														<td style="width:15px !important;">SF</td>
													</tr>
										<?php $count1++;
											$num1++; }
											$num++;
											$count = $count + 1; }?>
									</tbody>
								</table>
							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
				</article>
			</section>
		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->

		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<!-- MODALS -->
			<div class="modal fade" id="myModal2" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">New Rental PO</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">PO Number</label>
										<input type="text" name="poNumber" class="form-control">
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Project</label>
										<select class="form-control" name="projectPO">
											<option></option>
										</select>
									</div>

								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Description</label>
										<input type="text" name="description" class="form-control">
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Start Date</label>
										<div class="input-group">
											<input type="text" name="mydate" placeholder="Select a date" class="form-control datepicker" data-dateformat="dd/mm/yy">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										</div>
									</div>

								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Billing Cycle (Days)</label>
										<input type="text" name="billingCycle" class="form-control">
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Vendor</label><br>
										<select type="text" class="form-control" required style="padding-left: 5px;">
										</select>
									</div>

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
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="../assets/js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->


		<!-- IMPORTANT: APP CONFIG -->
		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->




@include('../includes/_footer')


		<script src="../assets/js/plugin/noUiSlider/jquery.nouislider.min.js"></script>
		<script type="text/javascript">

			$(document).ready(function() {


			$('.datepicker').datepicker({
			    //comment the beforeShow handler if you want to see the ugly overlay
			    beforeShow: function() {
			        setTimeout(function(){
			            $('.ui-datepicker').css('z-index', 99999999999999);
			        }, 0);
			    }
			});


			pageSetUp();



			$('.button').on('click', function() {
				var id = $(this).attr('data_id');

				var level = $(this).attr('data_level');

				if(level == 1){
					$('.first-child-'+id).toggleClass('hide');
					$('.second-child-'+id).addClass('hide');
				}
				else if(level == 2){
					var id2 = $(this).attr('parent_data_id');
					$('.second-child-'+id2+'-'+id).toggleClass('hide');
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

</html>
