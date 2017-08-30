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
											<form class="form-horizontal" action="{{url('project/'.Request::segment(2).'/forecasting')}}" method="post">
											{{csrf_field()}}
											<input type="hidden" name="project_id" value="{{Request::segment(2)}}">
												<br>
												<div class="row">
													<div class="col-lg-1"></div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label">Requirement Date</label>
															<div class="col-md-9">
																<div class="input-group">
																	<input type="text" name="requirement_date" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy">
																	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label class="col-md-3 control-label">Use/Phase</label>
															<div class="col-md-9">
																	<input type="text" name="phase" class="form-control">
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
																<textarea class="form-control" name="comments"></textarea>
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
																			<input type="radio" name="request_type" checked="true" value="need">
																			<i></i>Need</label>
																		</div>
																		<div class="col-lg-4">
																			<label class="radio">
																			<input type="radio" name="request_type" value="return">
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
																			<input type="radio" name="quantity_type" value="estimate" checked="checked">
																			<i></i>Estimate</label>
																		</div>
																		<div class="col-lg-4">
																			<label class="radio">
																			<input type="radio" name="quantity_type" value="actual">
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
												
											<legend>&nbsp; Project Qty at Requirement Date</legend>
											<div class="col-lg-12">
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th style="width: 20%;">
																<div class="col-lg-12">
																	<div class="col-lg-2">
																		Category
																	</div><br>
																		<select class="form-control" style="padding-left: 0px;"> 
																			<option>Not selected</option>
																			@foreach($categories as $key => $c)
																				<option value="{{$c->id}}">{{$c->name}}</option>
																			@endforeach
																		</select>
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
													<tbody id="reqTableBody">
														<tr>
															<td><a class="btn btn-xs btn-success btn-block" data-toggle="modal" data-target="#myModal">Search</a></td>
															<td><input type="text" placeholder="Search" style="width: 100%" class="form-control input-xs"></td>
															<td></td>
															<td><input style="width: 100%" class="form-control input-xs"></td>
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
											<button type="submit" class="hidden" id="formSubmit"></button>
											</form>
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
						<div class="bordered" id="rightMenu1">
							<div class="header">
								<h2 class="no-padding font-md">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName"></label>
							</div>
							<div class="menu-body padding-5">
								<label for="formSubmit" class="btn btn-success btn-block">
									<span class="buttonText">Save</span>
								</label>
								<a class="btn btn-success btn-block">
									<span class="buttonText">Cancel</span>
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
							<button type="button" class="btn btn-success" data-dismiss="modal" id="addEquipmentToRequirement">
								Save
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
		</div>
		<!-- END MODALS -->

		<!-- PAGE FOOTER -->
		@include('../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";

			    var addedEquipmentCount = 0;
			    $('#addEquipmentToRequirement').on('click', function() {
			    	addedEquipmentCount++;
			    	var eqValue = $('#pickEquipment').val();
			    	var eqText = $('#pickEquipment :selected').text();
			    	if(eqValue != 0){
			    		var weight = 0;
			    		
			    		var htmlstr = '<tr>';
			    		htmlstr += '<input type="hidden" value="'+eqValue+'" name="equipment['+addedEquipmentCount+'][equipment_id]">';
						htmlstr += '<td></td>';
						htmlstr += '<td>'+eqText+'</td>';
						htmlstr += '<td>0</td>';
						htmlstr += '<td><input class="form-control input-xs" type="number" name="equipment['+addedEquipmentCount+'][quantity]"></td>';
						htmlstr += '<td>1234</td>';
						htmlstr += '<td>-</td>';
						htmlstr += '</tr>';
			    		$('#reqTableBody').append(htmlstr);

			    		
			    	}
			    });

			    $('.pick').on('change', function() {
			    	
			    	
			    	var id = $('#pickCategory').val();
			    	var sub = $('#pickSubcategory').val();
			    	$.ajaxSetup({
			            headers: {
			                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			            }
			        });

			    	$.ajax({
			    		type: "GET",
            			url: "getSubAjax",
            			data: {
            				category: id,
            				subcategory: sub
            			}
			    		, 
				    	success : function(data) {
				    		for (var m = 0; m < data.categories.length; m++) {

			    				var htmlstr = "<option value='0'>Not selected</option>";

		    					for(var i = 0; i < data.categories[m].subcategories.length; i++){

		    						var j = data.categories[m].subcategories[i];
		    						if(j.id == sub){
			    						htmlstr += "<option value='"+j.id+"' selected='true'>"+j.name+"";
		    						}
		    						else{
		    							htmlstr += "<option value='"+j.id+"'>"+j.name+"";	
		    						}

			    					if(sub != 0){
		    							var htmlstr2 = "<option value='0'>Not selected</option>";
			    						for (var x = 0; x < j.equipment.length; x++){
			    							htmlstr2 += "<option value='"+j.equipment[x].id+"'>"+j.equipment[x].name+"</option>";
			    						}
			    					}
			    				}
				    		}

				    		$('#pickSubcategory').empty();
				    		$('#pickSubcategory').append(htmlstr);

				    		if(sub != 0){
				    			$('#pickEquipment').empty();
				    			$('#pickEquipment').append(htmlstr2);
				    		}
				    	}
				    });
				});


			})

		</script>
	</body>

</html>_
