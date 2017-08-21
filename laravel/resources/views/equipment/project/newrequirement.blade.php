@include('../includes/_header')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

@include('../includes/_menu')
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
					<li style="color: black;">Equipment</li><li style="color: black;">Equipment List</li>
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
										<h2>Trucking Request</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
											<!-- main page content here -->
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
											<!-- end main page content -->
										</div>
									</div>

								</div>
										<!-- end widget content -->
							</article>
						</div>
						<div class="bordered" id="rightMenu1" style="position: absolute; right: 0px; width: 20%; margin-top: -2px; padding-top: 2px; border-top: transparent;">
							<div class="header" style="background-color: #404040; min-height: 34px; border-color: #383838;">
								<h2 class="no-padding font-md" style="color: white; line-height: 34px; font-weight: 400; letter-spacing: 0; margin: 0px 0px 0px 10px; display: inline;">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName" style="margin-top: 6px; margin-right: 3px;"></label>
							</div>
							<div class="menu-body padding-5">
								<a class="btn btn-success btn-block">
									<span style="font-size: 12px; font-weight: bold;">Save</span>
								</a>
								<a class="btn btn-success btn-block">
									<span style="font-size: 12px; font-weight: bold;">Cancel</span>
								</a>
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
		
		<!-- END MODALS -->

		<!-- PAGE FOOTER -->
		@include('../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";
			})

		</script>
	</body>

</html>_
