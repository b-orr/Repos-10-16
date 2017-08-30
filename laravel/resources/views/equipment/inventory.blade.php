@include('../includes/_header')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

@include('../includes/_menu_eq')
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
										<h2>Inventory List</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding table-1" id="table-1">
											<!-- main page content here -->
													
													<table id="dt_basic" class="table table-bordered" width="100%">
													<thead>
															<tr>
																<th style="width: 40%;">Descriptions</th>
																<th>Owned</th>
																<th>Rented</th>
																<th>Total</th>
																<th>Units</th>
																<th style="width: 30%;">Notes</th>
																<th style="width: 3%;">Edit</th>
															</tr>
													</thead>
													<tbody>

													<?php
															$count = 1;
															$num = 1;?>
															@foreach($inventory as $key => $c)
																<tr class="main-parent" data_id="<?php echo $num; ?>" >
																	<td style="width:10px !important;">
																		<button class="button btn btn-success btn-xs btn-circle" style="height: 12px; width: 12px; padding-top: 0px;" data_id="<?php echo $num;?>" data_level="1">
																			<i class="up_5 fa fa-plus level_1_<?php echo$num; ?>"></i>
																			<i class="up_5 fa fa-minus hide level_1_<?php echo$num; ?>"></i>
																		</button>
																		<span class="description-name">{{$c->name}}</span>
																	</td>

																	<td style="width:50px !important;"></td>
																	<td style="width:60px !important;"></td>
																	<td style="width:60px !important;"></td>
																	<td style="width:50px !important;"></td>
																	<td style="width:40px !important;"></td>
																	<td style="width:15px !important;"></td>
																</tr>
													<?php
																$count1 = 1;
																$num1 = 1;?>
																@foreach($c->subcategories as $key1 => $s)
																	<tr class="hide first-child-<?php echo $num; ?> fchild">
																		<td style="width:10px !important; padding-left: 20px;">
																			<button class="button btn btn-success btn-xs btn-circle" style="height: 12px; width: 12px; padding-top: 0px;" data_id="<?php echo $num1;?>" parent_data_id="<?php echo $num;?>" data_level="2">
																				<i class="up_5 fa fa-plus level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
																				<i class="up_5 fa fa-minus hide level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
																			</button>
																		<span class="description-name">{{$s->name}}</span>
																		</td>
																		<td style="width:50px !important;" ></td>
																		<td style="width:60px !important;" ></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:15px !important;" ></td>
																		<td style="width:15px !important;"></td>
																	</tr>
													<?php
																$count2 = 1;
																$num2 = 1;?>
																@foreach($s->inventory as $key => $i)
																	<tr class="hide second-child-<?php echo $num; ?>-<?php echo $num1; ?> second-child-<?php echo $num; ?>" data_main_parent="<?php echo $num; ?>">
																		<td style="width:10px !important; padding-left: 40px;">
																			{{$i->equipment->name}}
																		</td>
																		<td style="width:60px !important;" ></td>
																		<td style="width:15px !important;"></td>
																		<td style="width:15px !important;"></td>
																		<td style="width:40px !important;" ></td>
																		<td style="width:15px !important;" ></td>
																		<td style="width:15px !important;"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a></td>
																	</tr>

																<?php $count2++;?>
																@endforeach


																<?php $count1++;
																	$num1++;?>
																	@endforeach

															<?php
															$num++;
															$count = $count + 1;
															?>
															 @endforeach
													</tbody>

													</table>
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
								<div class="row col-lg-12 no-padding no-margin">
									<input type="text" name="search" placeholder="Quick search" class="form-control">
								</div>
								<br><br>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal2">
									<span class="buttonText">Add Inventory</span>
								</button>
								<legend></legend>
								<label class="legendLabel">Equipment Filters</label><br>
								<label class="formElementsLabel">Location</label>
								<select type="text" name="search" class="form-control">
									<option>WA Yard</option>
									<option>NY Yard</option>
								</select>
								<label class="formElementsLabel">Status</label>
								<select type="text" name="search" class="form-control">
									<option>Active</option>
									<option>Damaged</option>
								</select>
								<label class="formElementsLabel">Owner</label>
								<select type="text" name="search" class="form-control">
									<option>McClone</option>
									<option>Other</option>
								</select>
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
										<label class="input" style="font-weight: bold;">Qty to Change</label>
										<input type="text" name="qtyToChange" class="form-control">
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
			</div><!-- /.modal -->
			<div class="modal fade" id="myModal2" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Add Inventory</h4>
						</div>
						<form action="{{url('/equipment/inventory')}}" method="post">
						{{ csrf_field() }}
						<div class="modal-body">
							<div>
								<strong>
									<h6>Select Tool</h6>
								</strong>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Category</label>
										<select class="form-control pick" id="pickCategory">
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
										<select type="text" class="form-control pick" name="sub_category_id" id="pickSubcategory" style="padding-left: 5px;">
											<option value="0">Not selected</option>
										</select>
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Equipment Name</label><br>
										<select type="text" name="equipment_id" class="form-control" id="pickEquipment" style="padding-left: 5px;">
											<option value="0">Not selected</option>
										</select>
									</div>

								</div>
							</div>
							<div>
								<strong>
									<h6>Equipment Management Data</h6>
								</strong>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Reason</label>
										<select class="form-control" name="reason" style="padding-left: 5px;">
											<option value="Need">Need</option>
											<option value="Urgent">Urgent</option>
										</select>
									</div>

								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Owner</label>
										<select type="text" class="form-control" name="owner" style="padding-left: 5px;">
											<option value="1">McClone</option>
										</select>
									</div>

								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Manager</label><br>
										<select type="text" class="form-control" name="manager" style="padding-left: 5px;">
											<option value="1">Manager</option>
										</select>
									</div>

								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Assigned to</label><br>
										<select type="text" class="form-control" name="project_id" style="padding-left: 5px;">
										@foreach($projects as $key => $p)
											<option value="{{$p->id}}">{{$p->name}}</option>
										@endforeach
										</select>
									</div>

								</div>
							</div>
							<div>
								<strong>
									<h6>Purchase Info</h6>
								</strong>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Quantity</label>
										<input type="text" class="form-control" name="quantity" required style="padding-left: 5px;" />
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Purchased from</label>
										<select type="text" class="form-control" style="padding-left: 5px;">
											<option value="1">McClone</option>
										</select>
									</div>

								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">Purchase Price</label><br>
										<input type="text" class="form-control" name="price" required style="padding-left: 5px;" />
									</div>

								</div>
								<div class="col-lg-2">

								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">McClone ID #</label><br>
										<input type="text" class="form-control" name="company_id_number" required style="padding-left: 5px;" />
									</div>
								</div>
							</div><br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="submint" class="btn btn-success">
								Save
							</button>
						</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<!-- END MODALS -->

		<!-- PAGE FOOTER -->
		@include('../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";
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


				$('.pick').on('change', function() {
			    	var id = $('#pickCategory').val();
			    	var sub = $('#pickSubcategory').val();
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
