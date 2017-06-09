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
	</style>
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon" style="background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: black;">Equipment</li><li style="color: black;">Equipment List</li>
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
															<button class="btn btn-primary" style="margin: 5px 5px;" onclick="expand();">Expand All</button>
															<button class="btn btn-primary" style="margin: 5px 5px;" onclick="collapse();">Collapse All</button>
														</div>
													</div>
													<table id="dt_basic" class="table table-bordered" width="100%">
													<thead>			                
															<tr>
																<th style="width: 20%;">Descriptions</th>
																<th>Owned</th>
																<th>Rented</th>
																<th>Total</th>
																<th style="width: 40%;">Notes</th>
																<th style="width: 3%;">Edit</th>
															</tr>
													</thead>
													<tbody>

													<?php 
															$count = 1;
															$num = 1;
															while ($count <= 8 ) { ?>
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
																		<span class="description-name">HV</span>
																	</td>

																	<td style="width:50px !important;"></td>
																	<td style="width:60px !important;"></td>
																	<td style="width:50px !important;"></td>
																	<td style="width:40px !important;"></td>
																	<td style="width:15px !important;"></td>
																</tr>
													<?php 
																$count1 = 1;
																$num1 = 1;
																while ($count1 <= 3 ) { ?>
																	<tr class="hide f-children first-child-<?php echo $num; ?> fchild">
																		<td style="width:10px !important; padding-left: 20px;">
																			<button class="button btn btn-warning btn-xs" style="height: 20px;" data_id="<?php echo $num1;?>" parent_data_id="<?php echo $num;?>" data_level="2">
																				<span style="font-size:12px !important;" class="level_2_<?php echo$num;?>">
																					<b>+</b>
																				</span>
																				<span style="font-size:12px !important;" class="hide level_2_<?php echo$num;?>">
																					<b>-</b>
																				</span>
																			</button> 
																		<span class="description-name">Main Beams</span>
																		</td>
																		<td style="width:50px !important;" ></td>
																		<td style="width:60px !important;" ></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:15px !important;" ></td>
																		<td style="width:15px !important;"></td>
																	</tr>
													<?php 
																$count2 = 1;
																$num2 = 1;
																while ($count2 <= 6 ) { ?>
																	<tr class="hide s-children second-child-<?php echo $num; ?>-<?php echo $num1; ?> second-child-<?php echo $num; ?>" data_main_parent="<?php echo $num; ?>">
																		<td style="width:10px !important; padding-left: 40px;">
																			Main Beams 3' 9''
																		</td>
																		<td style="width:60px !important;" ></td>
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

											<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
												<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">	
													<header>
														<h2 class="font-md">Actions</h2>
													</header>	
			
													<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
														<div class="col-lg-12">
															<input type="text" class="form-control" placeholder="Quick search">	
														</div>
														<br>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-primary form-control" data-target="#categoryModal" data-toggle="modal">New Category</button>
														</div>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-primary form-control" data-target="#subCategoryModal" data-toggle="modal">New Sub Category</button>
														</div>
														<div class="row col-lg-12" style="margin: 0px 0px 5px 0px;">
															<button class="btn btn-primary form-control" data-target="#addEquipmentModal" data-toggle="modal">Add Equipment Type</button>
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
			<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Quantity Edit</h4>
						</div>
						<div class="modal-body">
							<div>
								<strong>
									HV-MAIN BEAM 5' 7''
								</strong>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Owner</label>
										<input type="text" class="form-control" required style="padding-left: 5px;" />
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Status</label>
										<select type="text" class="form-control" required style="padding-left: 5px;">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Onsite</label><br>
										1253
									</div>
									
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-4 ">
									<h6 class="pull-right">Change to:</h6>												
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">New Status</label>
										<select type="text" class="form-control" required style="padding-left: 5px;">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Qty to Change</label><br>
										1253
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
			
			<div class="modal fade" id="categoryModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Add Category</h4>
						</div>
						<form id="newCategory">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Category Name</label>
											<input type="text" class="form-control">
										</div>
										
									</div>
									<div class="col-lg-2"></div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Allocation UOM</label>
											<input type="text" class="form-control">
										</div>
										
									</div>
								</div>
							</div>
						</form>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								Save
							</button>
							<button type="button" class="btn btn-primary" id="saveandadd">
								Save and add new category
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<div class="modal fade" id="subCategoryModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Add Category</h4>
						</div>
						<form id="newCategory">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Category</label>
											<select class="form-control">
												<!-- foreach categories -->
											</select>
										</div>
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Sub-Category</label>
											<input type="text" class="form-control">
										</div>
										
									</div>
								</div>
							</div>
						</form>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<div class="modal fade" id="addEquipmentModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form class="form-horizontal">
							<div class="modal-header" style="background-color: #404040;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Add Equipment Type</h4>
							</div>

							<div class="modal-body">
								<div>
									<strong>
										<legend>Select storage location & name</legend>
									</strong>
								</div>
								<div class="row">
									<div class="row col-lg-7">
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-md-12">
													<label class="input" style="font-weight: bold;">Classification</label>
													<select class="form-control">
													</select>
												</div>
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-md-12">
													<label class="input" style="font-weight: bold;">Category</label>
													<select class="form-control">
													</select>
												</div>
											</div>
											
										</div>
									</div>
									
									<div class="col-md-5">
										<div class="form-group">
											<div class="col-md-12">
												<label class="input" style="font-weight: bold;">Equipment Name</label><br>
													<select class="form-control">
													</select>
												</div>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<fieldset>
											<legend>Equipment Data</legend>
											<div class="form-group">
												<label class="col-md-4 control-label">Manufacturer</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Model Number</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">UPC Number</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Weight</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Items per Unit</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Notes</label>
												<div class="col-md-8">
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Item Type</label>
												<div class="col-md-8">
													<label class="radio radio-inline">
															
															<input type="radio" class="radiobox" name="itemType">
															<span>Unique</span> 
															
														</label>
													<label class="radio radio-inline">
															
															<input type="radio" class="radiobox" name="itemType">
															<span>General</span> 
															
														</label>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset>
											<legend>Options</legend>
											<div class="form-group">
												<div class="col-md-10" style="margin: -10px 0px 0px 10px;">
													<div class="checkbox">
														<label>
														  <input type="checkbox" class="checkbox style-0">
														  <span>Track as Forecasted Item</span>
														</label>
													</div>
			
													<div class="checkbox">
														<label>
														  <input type="checkbox" class="checkbox style-0" >
														  <span>Track as Allocated Item</span>
														</label>
													</div>
												</div>
											</div>
											<div class="form-group">
											<br>
												<label class="col-md-4 control-label" style="margin-top: 15px;">Allocated Qty Calc</label>
												<div class="col-md-3">
													<small>Item multiplier</small>
													<input class="form-control" type="text">
												</div>
												<label class="col-md-1" style="margin-top: 20px;">SF</label>
											</div>
											<input type="submit" class="btn btn-primary hidden" id="pdfUpload" />

											</form>
											<section>
												<div class="form-group">
													<label class="input" style="font-weight: bold;">Upload Picture</label><small class="font-xs"> (Click below to open File Explorer)</small><br>
													<div class="col-lg-12">
														<form action="upload.php" class="dropzone" id="mydropzone"></form>
													</div>
												</div>
											</section>
										</fieldset>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<label for="pdfUpload" class="btn btn-primary" data-dismiss="modal">Save</label>
							</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<?php include '../includes/_footer.php'; ?>

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

</html>_