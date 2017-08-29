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
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">Equipment</li><li style="color: black;">Overview</li>
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
										<h2>Trucking Notifications</h2>
									</header>


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
											<!-- main page content here -->
											<table class="table table-bordered table-striped">
												<tr>
													<th style="width: 33%;">Scheduled In-Bound Trucks</th>
													<th style="width: 34%;">Trucking Requests</th>
													<th style="width: 33%;">Trucks to be Approved</th>
												</tr>
												<tr>
													<td><a href="newtransfer.php">From Yard 330 - 05/18/2017 12pm</a></td>
													<td>
														@foreach($truckings as $key => $t)
															<a href="{{url('project/'.Request::segment(2).'/trucking/'.$t->id)}}">@if($t->shipped_to == 0) WA Yard @else NY Yard @endif - {{$t->pickup_date}}</a>
															<br>
														@endforeach
													</td>
													<td><a href="approvetruck.php">From Yard 330 - 06/16/2017</a></td>
												</tr>
												<tr>
													<th>Scheduled Out-Bound Trucks</th>
													<th>Draft Transfers</th>
													<tH>Unreviewed Forecasts</th>
												</tr>
												<tr>
													<td></td>
													<td>
														@foreach($transfers as $key => $t)
															<a href="{{url('project/'.Request::segment(2).'/equipment/'.$t->id)}}">@if($t->shipped_to == 0) WA Yard @else NY Yard @endif - {{$t->pickup_date}}</a>
															<br>
														@endforeach
													</td>
													<td><a href="newrequirement.php">Phase 4 - West Pour 5 07/15/2017</a></td>
												</tr>
											</table>
											<!-- end main page content -->
										</div>
									</div>

								</div>
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
									</header>


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
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
															<tr class="main-parent" data_id="<?php echo $num; ?>">
																<td style="width:10px !important;">
																	<button class="button btn btn-success btn-xs btn-circle" style="height: 18px; width: 18px; padding-top: 0px;" data_id="<?php echo $num;?>" data_level="1">
																		<i class="fa fa-plus level_1_<?php echo$num; ?>"></i>
																		<i class="fa fa-minus hide level_1_<?php echo$num; ?>"></i>
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
																		<button class="button btn btn-success btn-xs btn-circle" style="height: 18px; width: 18px; padding-top: 0px;" data_id="<?php echo $num1;?>" parent_data_id="<?php echo $num;?>" data_level="2">
																			<i class="fa fa-plus level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
																			<i class="fa fa-minus hide level_2_<?php echo$num; ?>_<?php echo$num1 ?>"></i>
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
															@foreach($s->inventory as $key2 => $i)
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
														$count = $count + 1;?>	
														 @endforeach
												</tbody>
											
											</table>
											<!-- end main page content -->
										</div>
									</div>

								</div>
										<!-- end widget div -->
							</article>
						</div>
						<div class="bordered" id="rightMenu1">
							<div class="header">
								<h2 class="no-padding font-md">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName"></label>
							</div>
							<div class="menu-body padding-5">
								
								<a class="btn btn-success btn-block" href="{{url('project/'.Request::segment(2).'/equipment/create')}}">
									<span class="buttonText">New Transfer</span>
								</a>
								<a class="btn btn-success btn-block" href="{{url('project/'.Request::segment(2).'/trucking/create')}}">
									<span class="buttonText">New Trucking Request</span>
								</a>
								<legend>Inventory Search</legend>
								<label class="formElementsLabel">Status</label>
								<select class="form-control">
									<option>Active</option>
									<option>Damaged</option>
								</select>
								<label class="formElementsLabel">Owner</label>
								<select class="form-control">
									<option>McClone</option>	
							</select>
								<label class="formElementsLabel">Status</label>
								<input type="text" name="search" class="form-control">
								<!-- <label style="font-size: 12px; text-decoration: underline; font-weight: bold;">Filters</label><br>
								<select type="text" name="search" class="form-control">
									<option>Active</option>
									<option>Damaged</option>
								</select> -->
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
					<form class="form-horizontal">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Edit Equipment Type</h4>
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
												<input type="text" name="eqName" class="form-control">
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
							<label for="pdfUpload" class="btn btn-success" data-dismiss="modal">Save</label>
						</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>	
		<!-- END MODALS -->

		<!-- PAGE FOOTER -->
		@include('../../includes/_footer')
		<!-- END PAGE FOOTER -->

		<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

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
				
			})

		</script>
	</body>

</html>_
