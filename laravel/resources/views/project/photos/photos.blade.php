@include('includes._header_eq')
@include('includes._menu')


		<!-- MAIN PANEL -->
	<style type="text/css">
		/* .main-parent{
			background-color: background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		} */

		.main-parent{
			background-color: #c0c0c0;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		}
		.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			padding: 2px 10px;
		}

		tr {
			height:25px !important;
		}
		.up_5 {
			position: relative;
			top: -5px;
		}
		.glyphicon, .glyphicon-plus {
			font-size: 6px;
		}
		img {
			padding-left: 10px;
		}

		button {
			font-size: 10px;
		}
	</style>
	<?php 
		$menu_1 = "Progress";
		$menu_2 = "Safety";
		$menu_3 = "Quality Control";
		$menu_4 = "Falsework Inspection";
		$menu_5 = "Delay - Impact";
	?>
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
					<li style="color: black;">Projects</li><li style="color: black;">1001 Broadway</li><li style="color: black;">Overview</li><li style="color: black;">Photos</li>
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
				<section id="widget-grid">

					<!-- row -->
					<div class="row">

						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<!-- Widget ID (each widget will need unique ID)-->

							<!-- end widget -->
								<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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


								<!-- added buttons -->

								<!-- widget div-->


								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">



										<div class="row">
												<div class="widget-body col-lg-10 table-1" id="table-1" style="margin-top: 3px;">
													<div class="row bordered" style="margin-left: 0px; margin-right: 0px; background-color: #404040; color: white;">
														<div class="col-lg-4" style="display: flex; align-items: center;">
																<h5></h5>
														</div>
														<div class="col-lg-5"></div>
														
													</div>
														<table id="dt_basic" class="table table-bordered" width="100%">
													<thead>
															
													</thead>
													<tbody>

													<?php
															$count = 1;
															$num = 1;
															?>
															@foreach($folders as $key => $f)
																<tr class="main-parent" data_id="<?php echo $num; ?>">
																	<td style="width:10px !important;">
																		<!-- <button class="button btn btn-success btn-xs btn-circle" style="height: 12px; width: 12px; padding-top: 0px;" data_id="<?php echo $num;?>" data_level="1">
																			<i class="up_5 glyphicon glyphicon-plus level_1_<?php echo$num; ?>"></i>
																			<i class="up_5 glyphicon glyphicon-minus hide level_1_<?php echo$num; ?>"></i>
																		</button>  -->
																		<button class="button btn btn-success btn-xs btn-circle" style="height: 12px; width:12px; padding-top:0px;" data_id="<?php echo $num;?>" data_level="1">
																			<span style="font-size:12px !important;" class="level_1_<?php echo$num;?>">
																				<i class="up_5 glyphicon glyphicon-plus"></i>
																			</span>
																			<span style="font-size:12px !important;" class="hide level_1_<?php echo$num;?>">
																				<i class="up_5 glyphicon glyphicon-minus"></i>
																			</span>
																		</button>
																		<span class="description-name">{{$f->name}}</span>
																	</td>

																	
																</tr>
															<?php
																$count1 = 1;
																$num1 = 1;
																while ($count1 <= 3 ) { ?>
																	<tr class="hide f-children first-child-<?php echo $num; ?> fchild">
																		<td style="width:10px !important; padding-left: 20px;">
																			<button class="button btn btn-warning btn-xs btn-circle" style="height: 12px; width:12px; padding-top:0px;" data_id="<?php echo $num1;?>" parent_data_id="<?php echo $num;?>" data_level="2">
																				<span style="font-size:12px !important;" class="level_2_<?php echo$num;?>_<?php echo$num1?>">
																					<i class="up_5 glyphicon glyphicon-plus"></i>
																				</span>
																				<span style="font-size:12px !important;" class="hide level_2_<?php echo$num;?>_<?php echo$num1?>">
																					<i class="up_5 glyphicon glyphicon-minus"></i>
																				</span>
																			</button>
																		<span class="description-name">2017-02-01</span>
																		</td>
																		
																	</tr>
															<?php
																$count2 = 1;
																$num2 = 1;
																while ($count2 <= 1 ) { ?>
																	<tr class="hide s-children second-child-<?php echo $num; ?>-<?php echo $num1; ?> second-child-<?php echo $num; ?>" data_main_parent="<?php echo $num; ?>">
																		<td style="width:10px !important; padding-left: 40px;">
																			<div class="row">
																				<div class="col-lg-2">
																					<img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"><br>
																					<p>This is some text</p>																				
																				</div>
																				<div class="col-lg-2">
																					<img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"><br>
																					<p>This is some text</p>																				
																				</div>
																				<div class="col-lg-2">
																					<img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"><br>
																					<p>This is some text</p>																				
																				</div>
																				<div class="col-lg-2">
																					<img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"><br>
																					<p>This is some text</p>																				
																				</div>
																				<div class="col-lg-2">
																					<img src="../photos/includes/img-1.jpg" alt="" height="90" width="90"><br>
																					<p>This is some text</p>																				
																				</div>
																				
																			</div>
																			
																		</td>
																		
																	</tr>

																<?php $count2++; } ?>


																<?php $count1++;
																	$num1++; } ?>

															<?php
															$num++;
															$count = $count + 1;
															  ?>
														@endforeach
													</tbody>

													</table>
												</div>

											<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
												<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-togglebutton="false">
													<header>
														<h2 class="font-md">Actions</h2>
													</header>

													<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
													
															
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-success form-control" data-toggle="modal" onclick="expand();">Expand All</button>
														</div>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-success form-control" data-toggle="modal" onclick="collapse();">Collapse All</button>
														</div>
														<br>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button type="button" data-toggle="modal" data-target="#newFolderModal" class="btn btn-success btn-block">
																 New Folder
															</button>
														</div>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button type="button" data-toggle="modal" data-target="#subFolderModal" class="btn btn-success btn-block">
																 New SubFolder
															</button>
														</div>
														<br>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button type="button" data-toggle="modal" data-target="#subFolderModal" class="btn btn-success btn-block">
																 Export to PDF
															</button>
														</div>
														<br>
														<div class="row" style="text-align:center">
															<div class="col-lg-12">
																<p>Date</p>
															</div>
														</div>
														<div class="row col-lg-12" style="margin: 0px;">
															<h7>From</h7>
														</div>
														<div class="row col-lg-12" style="margin: 0px;">
															<input type="text" name="fromSearch" class="form-control">
														</div>
														<br>
														<div class="row col-lg-12" style="margin: 0px;">
															<h7>To</h7>
														</div>
														<div class="row col-lg-12" style="margin: 0px;">
															<input type="text" name="toSearch" class="form-control">
														</div>
														<br>
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
													</div>
												</div>
											</article>
										</div>


									</div>
								</div>

							</div>
									<!-- end widget content -->

								</div>
						</article>
						<!-- WIDGET END -->

					<!-- end row -->

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
		<!-- MODALS -->
			
			<div class="modal fade" id="newFolderModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog ">
					<div class="modal-content">
						<form method="post" action="{{ url('project/photos') }}">
							{{ csrf_field() }}
							<div class="modal-header" style="background-color: #404040;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">New Folder</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Folder Name</label>
											<input type="text" name="name" class="form-control">
										</div>
									</div>
								</div>	
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button type="submit" class="btn btn-success">
									Create
								</button>
							</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="subFolderModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog ">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">New SubFolder</h4>
						</div>
						<div class="modal-body">
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">SubFolder Name</label>
										<input type="text" name="compName" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="select" style="font-weight: bold;">Select Folder</label>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-success" data-dismiss="modal" id="pdfUpload">
								Create
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		@include('includes._footer')

		<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

		<script type="text/javascript">
			function expand() {
				$('.s-children').removeClass('hide');
				$('.f-children').removeClass('hide');
			}
			function collapse() {
				$('.s-children').addClass('hide');
				$('.f-children').addClass('hide');
			}
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

			$('#saveandadd').on('click', function() {
				$('#newCategory')[0].reset();
			});

			$('.button').on('click', function() {
				var id = $(this).attr('data_id');

				var level = $(this).attr('data_level');

				if(level == 1){
					$('.first-child-'+id).toggleClass('hide');
					$('.level_1_'+id).toggleClass('hide');
					$('.second-child-'+id).addClass('hide');
				}
				else if(level == 2){
					var id2 = $(this).attr('parent_data_id');
					$('.level_2_'+id2+'_'+id).toggleClass('hide');
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

</html>_
