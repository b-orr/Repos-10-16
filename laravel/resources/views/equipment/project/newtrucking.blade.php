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
					<li style="color: black; font-weight: bold;">Home</li><li style="color: black; font-weight: bold;">Projects</li><li style="color: black; font-weight: bold;">1001 Broadway</li><li style="color: black; font-weight: bold;">Equipment</li><li style="color: black; font-weight: bold;">Overview</li><li style="color: black; font-weight: bold;">Trucking Request</li>
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
										<h2>New Trucking Request</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
											<!-- main page content here -->
										<form class="form-horizontal" method="post" action="{{url('project/'.Request::segment(2).'/trucking')}}">
											{{ csrf_field() }}
											<br>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Truck Status</b></label>
														<div class="col-md-9">
															<select class="form-control" name="size_truck">
																<option value="Draft">Draft</option>
																<option value="To Send">To Send</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"></div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Pickup Date</b></label>
														<div class="col-md-4">
															<div class="input-group">
																<input type="text" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy" name="pickup_date">
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															</div>
														</div>
														<label class="col-md-2 control-label"><b>Requested Time</b></label>
														<div class="col-md-3">
															<input type="text" class="form-control" name="requested_time">
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Delivery Date</b></label>
														<div class="col-md-9">
															<div class="input-group">
																<input type="text" name="delivery_date" placeholder="Select a date" class="form-control datepicker" data-dateformat="mm/dd/yy">
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"></div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Shipped From</b></label>
														<div class="col-md-9">
															<select class="form-control" name="shipped_from">
																<option value="1">WA Yard</option>
																<option value="2">NY Yard</option>
																<option value="3">TX Yard</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Shipped To</b></label>
														<div class="col-md-7">
															<select class="form-control" name="shipped_to">
																<option>UW Life Sciences Building</option>
															</select>
														</div>
														<div class="col-md-2 no-padding">
															<button class="btn btn-success btn-sm">Add New</button>
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row" style="">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b></b></label>
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
												
												<div class="col-lg-1">
													
												</div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Site Contact</b></label>
														<div class="col-md-9 control-label" style="text-align: left;">
															Ryan Jones 206-930-9893
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Delivery Contact</b>:</label>
														<div class="col-md-9 control-label" style="text-align: left;">
														Andres Gomez 206-930-1775
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
															<select class="form-control" name="freight_line">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Total Weight</b>:</label>
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
														<label class="col-md-3" style="text-align: right;"><b>Size Truck Needed</b></label>
														<div class="col-md-9">
															<select class="form-control" name="size_truck">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3" style="text-align: right;"><b>Loading Method</b></label>
														<div class="col-md-9">
															<select class="form-control" name="loading_method">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-1"> </div>
											</div>
											<div class="row">
												<div class="col-lg-1"> </div>
												<div class="col-lg-5">
													<div class="form-group">
														<label class="col-md-3 control-label"><b>Created:</b></label>
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
															<textarea class="form-control" name="comments"> </textarea>
														</div>
													</div>
													
												</div>
											</div>
										<legend></legend>
										<div class="col-lg-12">
											<table class="table table-bordered table-striped equipmentTable">
												<thead>
													<th style="width: 5%;"></th>
													<th style="width: 35%;">Description</th>
													<th style="width: 15%; text-align: center;">Qty (EA)</th>
													<th style="width: 15%; text-align: center;">Units</th>
													<th style="width: 15%; text-align: center;">Weight (lbs)</th>
													<th style="width: 4%;">Commit</th>
													<th>Total Weight</th>
												</thead>
												<tbody id="eqBody" style="text-align: center;">
													<tr>
														<td><a class="btn btn-xs btn-success btn-block" data-toggle="modal" data-target="#myModal">Search</a></td>
														<td><input type="text" placeholder="Search" name="searchDesc" style="width: 100%" class="form-control"></td>
														<td><input type="text" name="rental" style="width: 100%" class="form-control"></td>
														<td> 1.1 </td>
														<td><input type="text" name="weightEQ" style="width: 100%" class="form-control"></td>
														<td>
															<a class="button btn btn-xs btn-success btn-circle">
																<i class="fa fa-plus"></i>
															</a>
														</td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
											<button type="submit" class="hide" id="submitForm"></button>
										</form>
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
								<label class="btn btn-success btn-block" for="submitForm">
									<span class="buttonText">Save</span>
								</label>
								<a class="btn btn-success btn-block" href="{{url('project/'.Request::segment(2).'/equipment')}}">
									<span class="buttonText">Cancel</span>
								</a>
							</div>
						</div>
					</div>
				</section>

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
		<!-- END MODALS -->
		<!--================================================== -->


		<!-- PAGE FOOTER -->
		@include('../../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";

			    var addedEquipmentCount = 0;
			    $('#addEquipmentToTransfer').on('click', function() {
			    	addedEquipmentCount++;
			    	var eqValue = $('#pickEquipment').val();
			    	var eqText = $('#pickEquipment :selected').text();
			    	if(eqValue != 0){
			    		var weight = 0;
			    		//ajax get weight of equipment
			    		$.ajax({
				    		type: "GET",
	            			url: "getEqWeight",
	            			data: {
	            				equipment: eqValue
	            			}
				    		, 
					    	success : function(data) {
					    		weight = data.weight.weight;
					    		var htmlstr = '<tr>';
				    			htmlstr += '<input type="hidden" name="equipment['+addedEquipmentCount+'][equipment_id]" value="'+eqValue+'">';
				    			htmlstr += '<input type="hidden" class="total-weight-input" name="equipment['+addedEquipmentCount+'][total_weight]">';
				    			htmlstr += '<input type="hidden" name="equipment['+addedEquipmentCount+'][tracking_number]" value="asdasdasd">';
								htmlstr += '<td></td>';
								htmlstr += '<td>'+eqText+'</td>';
								htmlstr += '<td>';
								htmlstr += '	<input type="number" name="equipment['+addedEquipmentCount+'][quantity]" style="width: 100%" class="form-control input-xs enter-quantity">';
								htmlstr += '</td>';
								htmlstr += '<td></td>';
								htmlstr += '<input type="hidden" id="equipment-weight" value="'+weight+'">';
								htmlstr += '<td class="equipment-weight">'+weight+'</td>';
								htmlstr += '<td>';
								htmlstr += '	<a>';
								htmlstr += '		<i class="fa fa-minus"></i>';
								htmlstr += '	</a>';
								htmlstr += '</td>';
								htmlstr += '<td class="total-weight"></td>';
								htmlstr +='</tr>';

								$('#eqBody').append(htmlstr);
					    	}
					    });

			    		
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

			    $('.equipmentTable').on('keyup', '.enter-quantity', function() {
			    	//get variables to calculate weight
			    	var qty = $(this).val();
			    	var eqW = $(this).parent().parent().find('#equipment-weight').val();
			    	var total = qty*eqW;
			    	//enter total weight in last column
					$(this).parent().parent().find('.total-weight').empty();
			    	$(this).parent().parent().find('.total-weight').append(total);
			    	//update hidden input for total weight
			    	$(this).parent().parent().find('.total-weight-input').val(total);

			    })

			})

		</script>
	</body>

</html>_
