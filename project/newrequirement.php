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
			padding: 2px 5px;
		}
		.table>tbody>tr, .table>thead>tr {
		}
		.rotate {
		  

		  font-size: 9px;
		  text-align: center;
		  width: 5%;
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
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">1001 Broadway</li><li style="color: black;">Equipment</li><li style="color: black;">Overview</li><li style="color: black;">New Requirement</li>
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
									<h2>Forecast Requirement #1007-001</h2>				
									
								</header>

								<!-- widget div-->
								<div>

									<!-- widget content -->
									<div class="widget-body no-padding" style="min-height: 50px;">
										<form class="form-horizontal">
										<br>
											<div class="row">
												<div class="col-lg-1"></div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Requirement Date</label>
														<div class="col-md-9">
															<div class="input-group">
																<input type="text" name="mydate" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy">
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Use/Phase</label>
														<div class="col-md-9">
																<input type="text" name="mydate" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row" style="">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Project</label>
														<div class="col-md-9 control-label" style="text-align: left;">
															1007 - UW Life Sciences Building
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Created</label>
														<div class="col-md-9 control-label" style="text-align: left;">
															Lesley Hicks 05/06/2017
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<div class="col-lg-3"></div>
														<div class="col-md-9">
															28620 Maple Valley Hwy<br>
															Maple Valley, WA 98038
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<div class="col-lg-3 control-label">Comments</div>
														<div class="col-md-9">
															<textarea class="form-control"></textarea>
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Request Type</label>
														<div class="col-md-9">
															<section>
																<div class="inline-group smart-form">
																	<div class="col-lg-3">
																		<label class="radio">
																		<input type="radio" name="radio-inline1" checked="checked">
																		<i></i>Need</label>
																	</div>
																	<div class="col-lg-4">
																		<label class="radio">
																		<input type="radio" name="radio-inline1" checked="checked">
																		<i></i>Return</label>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label">Quantity Type</label>
														<div class="col-md-9">
															<section>
																<div class="inline-group smart-form">
																	<div class="col-lg-3">
																		<label class="radio">
																		<input type="radio" name="radio-inline" checked="checked">
																		<i></i>Estimate</label>
																	</div>
																	<div class="col-lg-4">
																		<label class="radio">
																		<input type="radio" name="radio-inline" checked="checked">
																		<i></i>Actual</label>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
												</div>
												<div class="col-lg-1"> </div>
											</div>
										</form>
										<legend>&nbsp; Project Qty at Requirement Date</legend>
										<div class="col-lg-12">
											<table class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>
															<div class="col-lg-12">
																<div class="col-lg-2">
																	Category
																</div>
																<div class="col-lg-7">
																	<select class="form-control input-xs"> 
																		<option>HV</option>
																		<option></option>
																		<option></option>
																	</select>
																</div>
															</div>
														</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th class="text-right">
														</th>
														<th class="text-center">556</th>
														<th class="text-center">1263</th>
														<th class="text-center">73</th>
														<th class="text-center">15</th>
														<th class="text-center">36</th>
														<th class="text-center">3273</th>
														<th class="text-center">456</th>
														<th class="text-center">289</th>
														<th class="text-center">4261</th>
														<th class="text-center">344</th>
														<th class="text-center"></th>
														<th class="text-center"></th>
													</tr>
												</tbody>
											</table>
										</div>
										<legend></legend>
										<div class="col-lg-12">
											<table class="table table-bordered table-striped">
												<thead>
													<th style="width: 7%;"></th>
													<th style="width: 30%;">Description</th>
													<th>Total Current Onsite Qty (EA)</th>
													<th>Increase Amount</th>
													<th>Final Total Onsite Qty (EA)</th>
													<th>Commit</th>
												</thead>
												<tbody>
													<tr>
														<td><button class="btn btn-xs btn-success btn-block" data-toggle="modal" data-target="#myModal">Search</button></td>
														<td><input type="text" placeholder="Search" name="searchDesc" style="width: 100%" class="form-control input-xs"></td>
														<td></td>
														<td><input type="text" name="rental" style="width: 100%" class="form-control input-xs"></td>
														<td></td>
														<td style="text-align: center;">
															<button class="button btn btn-xs btn-success btn-circle" style="height: 18px; width: 18px; padding-top: 0px;">
																<i class="fa fa-plus"></i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<br><br><Br><br><br>
										<legend>&nbsp; Project Qty after Requirement</legend>
										<div class="col-lg-12">
											<table class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-right">
															Equipment
														</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
														<th class="rotate">Main Beam<br> 3'-9''</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th class="text-right">
														</th>
														<th class="text-center">556</th>
														<th class="text-center">1263</th>
														<th class="text-center">73</th>
														<th class="text-center">15</th>
														<th class="text-center">36</th>
														<th class="text-center">3273</th>
														<th class="text-center">456</th>
														<th class="text-center">289</th>
														<th class="text-center">4261</th>
														<th class="text-center">344</th>
														<th class="text-center"></th>
														<th class="text-center"></th>
													</tr>
												</tbody>
											</table>
										</div>
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
												<button class="btn btn-success btn-block actionBtns">Save</button>
												<button class="btn btn-success btn-block actionBtns">Cancel</button>
											</div>
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
		<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Select Storage Location & Name</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Category</label>
										<select class="form-control">
											<option></option>
											<option></option>
											<option></option>
										</select>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Sub-Category</label>
										<select type="text" class="form-control" required style="padding-left: 5px;">
											<option></option>
											<option></option>
											<option></option>
											<option></option>
										</select>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Equipment Name</label><br>
										<input type="text" name="eqName" class="form-control">
									</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-success" data-dismiss="modal" id="pdfUpload">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="myModal2" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Rental Information</h4>
						</div>
						<div class="modal-body">
						<form class="form-horizontal">
							<div class="row col-lg-12">
								<div class="col-lg-6">
									<div class="col-lg-6">
									</div>
									<div class="col-lg-6 text-center">
										PO Number
									</div>
								</div>
								<div class="col-lg-6" style="padding-right: 0px;">
									<div class="col-lg-6">
										PO Vendor
									</div>
									<div class="col-lg-6 text-center">
										Rental Rate
									</div>
								</div>
							</div>
							<!-- foreach od tuka -->
							<div class="row" style="margin-bottom: 5px;">
								<div class="col-lg-6">
									<div class="col-lg-6">
										#3 Poles
									</div>
									<div class="col-lg-6 text-center">
										<select class="form-control input-xs">
											<option>MMC-1028</option>
											<option>MMC-1029</option>
											<option>MMC-1035</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="col-lg-6 no-padding">
										Titan
									</div>
									<div class="col-lg-6" style="text-align: left; padding-left: 0px;">
										<input type="text" name="rentalRate" class="form-control input-xs">
									</div>
								</div>
							</div>
							<!-- endforeach tuka -->
							<!-- brisi od tuka -->
							<div class="row" style="margin-bottom: 5px;">
								<div class="col-lg-6">
									<div class="col-lg-6">
										#4 Poles
									</div>
									<div class="col-lg-6 text-center">
										<select class="form-control input-xs">
											<option>MMC-1028</option>
											<option>MMC-1029</option>
											<option>MMC-1035</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="col-lg-6 no-padding">
										Titan
									</div>
									<div class="col-lg-6" style="text-align: left; padding-left: 0px;">
										<input type="text" name="rentalRate" class="form-control input-xs">
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom: 5px;">
								<div class="col-lg-6">
									<div class="col-lg-6">
										Aluma Beam - 6.5'' - 12'
									</div>
									<div class="col-lg-6 text-center">
										<select class="form-control input-xs">
											<option>MMC-1028</option>
											<option>MMC-1029</option>
											<option>MMC-1035</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="col-lg-6 no-padding">
										Titan
									</div>
									<div class="col-lg-6" style="text-align: left; padding-left: 0px;">
										<input type="text" name="rentalRate" class="form-control input-xs">
									</div>
								</div>
							</div>
							<!-- do tuka -->
						</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success pull-left" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">
								New PO
							</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-success" data-dismiss="modal" id="pdfUpload">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="myModal3" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<input type="text" name="mydate" placeholder="Select a date" class="form-control datepicker" id="datepickmodal" data-dateformat="dd/mm/yy">
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
							<button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
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
			
			$('#datepickmodal').datepicker({
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
