@include('../../includes/_header')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

@include('../../includes/_menu')

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
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		    -webkit-appearance: none;
		    -moz-appearance: none;
		    appearance: none;
		    margin: 0; 
		}
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
		.fa-plus, .fa-minus {
			font-size: 10px;
		}
	</style>
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon" style="background-color: white;">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">{{$project->name}}</li><li style="color: black;">Equipment</li><li style="color: black;">Overview</li><li style="color: black;">New Transfer</li>
				</ol>

			</div>
			<!-- END RIBBON -->



			<!-- MAIN CONTENT -->
			<div id="content" style="padding: 0px 0px 0px 2px;">
				<!-- end row -->
				<section id="widget-grid">
					
					<div class="row no-margin">
							
						<div id="contentMain" class="col-md-9" style="width: 80%; padding: 0px 2px 0px 0px; margin-right: 2px;">
							<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
							
								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-5" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" data-widget-togglebutton="false">
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

									<header>
										<h2>Transfer# 1001-006</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
											<!-- main page content here -->
											<form class="form-horizontal" method="post" action="{{url('project/'.Request::segment(2).'/equipment/'.$transfer->id)}}">
											{{ csrf_field() }}
											{{ method_field('PUT') }}
											<br>
												<div class="row">
													<div class="col-lg-1"> </div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Truck Status</b></label>
															<div class="col-md-9">
																<select class="form-control" name="status">
																	<option @if($transfer->status == 'Draft') selected="true" @endif>Draft</option>
																	<option @if($transfer->status == 'Reserved') selected="true" @endif>Reserved</option>
																	<option @if($transfer->status == 'To Send') selected="true" @endif>To Send</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
													</div>
													<div class="col-lg-1"> </div>
												</div>

												<button type="submit" id="submitTransfer" class="hide"></button>
											</form>
											<form class="form-horizontal">
												<div class="row">
													<div class="col-lg-1"></div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Pickup Date</b></label>
															<div class="col-md-9">
																<div class="input-group">
																	<input type="text" name="pickup_date" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy" value="{{$transfer->pickup_date}}" disabled="true">
																	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Delivery Date</b></label>
															<div class="col-md-9">
																<div class="input-group">
																	<input type="text" name="delivery_date" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy" disabled="true">
																	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-1"> </div>
												</div>
												<div class="row" style="">
													<div class="col-lg-1"> </div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Shipped From</b></label>
															<div class="col-md-9">
																<select class="form-control" name="shipped_from" disabled="true">
																	<option>WA Yard</option>
																	<option>NY Yard</option>
																	<option>TX Yard</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Shipped To</b></label>
															<div class="col-md-9">
																<select class="form-control" name="shipped_to" disabled="true">
																	<option>UW Life Sciences Building</option>
																</select>
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
															<div class="col-lg-3"></div>
															<div class="col-md-9">
																3745 W. Stevens Way NE<br>
																Seattle, WA 98195
															</div>
														</div>
													</div>
													<div class="col-lg-1"> </div>
												</div>
												<div class="row">
													<div class="col-lg-1"> </div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Loaded By</b></label>
															<div class="col-md-9">
															<input type="text" name="loaded_by" style="width: 100%" class="form-control" value="{{$transfer->loaded_by}}" disabled="true">
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Delivery Contact:</b></label>
															<div class="col-md-5 control-label">
															<input type="text" placeholder="Andres Gomez" name="delivery_contact" style="width: 100%" class="form-control" value="{{$transfer->delivery_contact}}" disabled="true">
															</div>
															<div class="col-md-4 control-label">
																<input type="text" placeholder="206-930-1775" name="delivery_number" style="width: 100%" class="form-control" value="{{$transfer->delivery_number}}" disabled="true">
															</div>
														</div>
													</div>
													<div class="col-lg-1"> </div>
												</div>
												<div class="row">
													<div class="col-lg-1"> </div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Freight Line</b></label>
															<div class="col-md-9">
																<select class="form-control" name="freight_line" disabled="true">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Total Weight:</b></label>
															<input type="hidden" name="total_weight" value="3,650 lbs" disabled="true">
															<div class="col-md-9 control-label" style="text-align: left;">
																3,650 lbs
															</div>
														</div>
													</div>
													<div class="col-lg-1"> </div>
												</div>
												<div class="row">
													<div class="col-lg-1"> </div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label"><b>Load Times</b></label>
															<div class="col-md-9 no-padding">
																<div class="col-lg-12 no-padding">
																	<div class="col-lg-4">
																		<input type="text" class="form-control" placeholder="Scheduled" name="load_scheduled" value="{{$transfer->load_scheduled}}" disabled="true">
																	</div>
																	<div class="col-lg-4">
																		<input type="text" class="form-control" placeholder="Actual" name="load_actual" value="{{$transfer->load_actual}}" disabled="true">
																	</div>
																	<div class="col-lg-4">
																		<input type="text" class="form-control" placeholder="Departure" name="load_departure" value="{{$transfer->load_departure}}" disabled="true">
																	</div>
																</div>

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
															<label class="col-md-3 control-label"><b>Created:</b></label>
															<input type="hidden" name="created_by" value="1">
															<div class="col-md-9 control-label" style="text-align: left;">
																Ryan Jones 04/06/2017
															</div>
														</div>
													</div>
													<div class="col-lg-5">
													</div>
													<div class="col-lg-1"> </div>
												</div>
												<div class="row">
													<div class="col-lg-9">
														<div class="form-group">
															<label class="col-lg-3 control-label"><b>Comments</b></label>
															<div class="col-lg-9">
																<textarea class="form-control" name="comments" disabled="true">{{$transfer->comments}} </textarea>
															</div>
														</div>

													</div>
												</div>
											</form>
										<legend></legend>
										<div class="col-lg-12">
											<table class="table table-bordered table-striped equipmentTable">
												<thead>
													<th style="width: 3%;">Rental</th>
													<th>Status</th>
													<th style="width: 5%;"></th>
													<th style="width: 25%;">Description</th>
													<th style="width: 7%; text-align: center;">Qty (EA)</th>
													<th>Units</th>
													<th style="width: 8%; text-align: center;">Weight (lbs)</th>
													<th style="width: 10%;">Tracking #</th>
													<th>Total Weight</th>
												</thead>
												<tbody id="eqBody" style="text-align: center; align-content: center;">
													<tr>
														<td style="text-align: center;"><input type="checkbox" id="rental" style="height: 20px; width: 20px;"></td>
														<td><select id="eqStatus" style="width: 100%;" class="form-control">
																<option value=""></option>
																<option value="Active">Active</option>
																<option value="Damaged">Damaged</option>
															</select>
														</td>
														<td><a class="btn btn-xs btn-success btn-block" data-toggle="modal" data-target="#myModal">Search</a></td>
														<td><input type="text" id="searchDesc" placeholder="Search" style="width: 100%" class="form-control"></td>
														<td><input type="text" id="quantity" style="width: 100%" class="form-control"></td>
														<td></td>
														<td><input type="text" id="weightEQ" style="width: 100%" class="form-control"></td>
														<td>
															<select style="width: 100%;" class="form-control">
																<option></option>
																<option></option>
															</select>
														</td>
														<td></td>
													</tr>
													@foreach($transfer->equipment as $key => $e)
														<tr>
															<td style="text-align: center;">@if($e->rental_id != 0)<input type="checkbox" id="rental" style="height: 20px; width: 20px;">@endif</td>
															<td></td>
															<td></td>
															<td>{{$e->regionEquipment->name}}</td>
															<td>{{$e->quantity}}</td>
															<td></td>
															<td><input type="text" value="{{$e->regionEquipment->weight}}" id="weightEQ" style="width: 100%" class="form-control input-xs" disabled="true"></td>
															<td>{{$e->tracking_number}}
															</td>
															<td>{{$e->total_weight}}</td>
														</tr>
													@endforeach
												</tbody>
											</table>
										</div>											<!-- end main page content -->
										</div>
									</div>

								</div>
										<!-- end widget content -->
							</article>
						</div>
						<div class="bordered" id="rightMenu1">
							<div class="header">
								<h2 class="no-padding font-md">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName"></label>
							</div>
							<div class="menu-body padding-5">
								<label for="submitTransfer" class="btn btn-success btn-block actionBtns">
									<span class="buttonText">Save</span>
								</label>
								<a class="btn btn-success btn-block actionBtns" href="{{url('project/'.Request::segment(2).'/equipment')}}">
									<span class="buttonText">Cancel</span>
								</a>
								<legend></legend>
								<button class="btn btn-success btn-block actionBtns" data-toggle="modal" data-target="#myModal2">
									<span class="buttonText">Input Rental Info</span>
								</button>
								<legend></legend>
								<button class="btn btn-success btn-block actionBtns">
									<span class="buttonText">Print View</span>
								</button>
							</div>
						</div>
					</div>
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

		<!-- MODALS -->
		<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Select Equipment</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Category</label>
										<select class="form-control pick" name="category" id="pickCategory">
												<option value="0">Not selected</option>
											@foreach($categories as $key => $c)
												<option value="{{$c->id}}">{{$c->name}}</option>
											@endforeach
										</select>
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Sub-Category</label>
										<select type="text" class="form-control pick" name="subcategory" id="pickSubcategory" required style="padding-left: 5px;">
											<option value="0">Not selected</option>
										</select>
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Equipment Name</label><br>
										<select type="text" class="form-control" name="equipment" id="pickEquipment" required style="padding-left: 5px;">
											<option value="0">Not selected</option>
										</select>
									</div>

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-success" data-dismiss="modal" id="addEquipmentToTransfer">
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
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Billing Cycle (Days)</label>
										<input type="text" name="billingCycle" class="form-control">
									</div>

								</div>
								<div class="row col-md-4">
									<div class="col-md-12 no-padding">
										<div class="col-md-9">
											<div class="form-group">
												<label class="input" style="font-weight: bold;">Vendor</label><br>
												<select type="text" class="form-control" required style="padding-left: 5px;">
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											<br>
												<button class="btn btn-success" style="font-weight: bold; margin-top: 5px;">Add Vendor</button><br>
											</div>
										</div>
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
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->

		<!-- PAGE FOOTER -->
		@include('../../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
		
			$(document).ready(function() {

				pageSetUp();
			    "use strict";
			})

		</script>
	</body>

</html>_
