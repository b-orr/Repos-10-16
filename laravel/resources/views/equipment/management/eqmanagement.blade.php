@include('../../includes/_header_eq')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

@include('../../includes/_menu_eq')
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

										<!-- widget content -->
										<div class="widget-body no-padding">

													<div class="table-1" id="table-1" style="margin-top: 0px;">
														<div class="row bordered" style="margin-left: 0px; margin-right: 0px; background-color: #404040; color: white;">
															<div class="col-lg-4" style="display: flex; align-items: center;">
																	<h5><b>Equipment Manager</b></h5>
															</div>
															<div class="col-lg-5"></div>
															<div class="col-lg-3" style="display: flex; align-items: left;">
																<button class="btn btn-primary" style="margin: 5px 5px;" onclick="expand();">Expand All</button>
																<button class="btn btn-primary" style="margin: 5px 5px;" onclick="collapse();">Collapse All</button>
															</div>
														</div>
														<table id="dt_basic" class="table table-bordered" width="100%">
														<thead>
																<tr>
																	<th style="width: 40%;">Descriptions</th>
																	<!-- <th>Owned</th>
																	<th>Rented</th> -->
																	<th>Weight</th>
																	<th style="width: 40%;">Notes</th>
																	<th style="width: 3%;">Edit</th>
																</tr>
														</thead>
														<tbody>
															<?php
																$count = 1;
																$num = 1;
															?>
															@foreach($categories as $key => $c)
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
																		<span class="description-name">{{$c->name}}</span>
																	</td>

																	<!-- <td style="width:50px !important;"></td>
																	<td style="width:60px !important;"></td> -->
																	<td style="width:50px !important;"></td>
																	<td style="width:40px !important;"></td>
																	<td style="width:15px !important;"></td>
																</tr>
																<?php
																	$count1 = 1;
																	$num1 = 1;
																?>
																@foreach($c->subcategories as $key1 => $s)
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
																	<span class="description-name">{{$s->name}}</span>
																	</td>
																	<!-- <td style="width:50px !important;" ></td>
																	<td style="width:60px !important;" ></td> -->
																	<td style="width:40px !important;" ></td>
																	<td style="width:15px !important;" ></td>
																	<td style="width:15px !important;"></td>
																</tr>
																<?php $count2 = 1;
																 	$num2 = 1;
																	?>
																@foreach($sub as $key2 => $val)
																	@foreach($val->equipment as $key3 => $e)
																		@if($val->id == $s->id)
																		<tr class="hide s-children second-child-<?php echo $num; ?>-<?php echo $num1; ?> second-child-<?php echo $num; ?>" data_main_parent="<?php echo $num; ?>">
																			<td style="width:10px !important; padding-left: 40px;">
																				{{$e->name}}
																			</td>
																			<!-- <td style="width:60px !important;" ></td>
																			<td style="width:15px !important;"></td> -->
																			<td style="width:40px !important;" >{{$e->weight}}</td>
																			<td style="width:15px !important;" >{{$e->notes}}</td>
																			<td style="width:15px !important;"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a></td>
																		</tr>
																		<?php $count2++; ?>
																		@endif
																	@endforeach
																@endforeach
																<?php $num1++;
																$count1++; ?>
																@endforeach
																<?php
																	$num++;
																	$count++;
																?>
															@endforeach

														</tbody>

														</table>
													</div>
											
												
											
											


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
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#addEquipmentModal">
									<span style="font-size: 12px; font-weight: bold;">Add Equipment</span>
								</button>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#categoryModal">
									<span style="font-size: 12px; font-weight: bold;">Add Category</span>
								</button>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#subCategoryModal">
									<span style="font-size: 12px; font-weight: bold;">Add Sub-Category</span>
								</button>
								<legend></legend>
								<label style="font-size: 12px; text-decoration: underline; font-weight: bold;">Search</label><br>
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Quick seach</label>
								<input type="text" name="search" class="form-control">
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Status</label>
								<legend></legend>
								<label style="font-size: 12px; text-decoration: underline; font-weight: bold;">Filters</label><br>
								<select type="text" name="search" class="form-control">
									<option>Active</option>
									<option>Damaged</option>
								</select>
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Owner</label>
								<select type="text" name="search" class="form-control">
									<option>McClone</option>
									<option>Other</option>
								</select>
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

		<!-- PAGE FOOTER -->

		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<!-- MODALS -->
			<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Edit Equipment Type</h4>
						</div>
						<div class="modal-body">
						<!-- od ovde-->

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

						<!--do ovde-->
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
						<form id="newCategory" method="post" action="{{ url('/equipment/eqmanagement') }}">
							{{ csrf_field() }}
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Category Name</label>
											<input type="text" class="form-control" name="name" required>
										</div>

									</div>
									<div class="col-lg-2"></div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Allocation UOM</label>
											<input type="text" class="form-control" name="allocation_uom" required>
										</div>

									</div>
								</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="submit" class="btn btn-primary">
								Save
							</button>
							<button type="button" class="btn btn-primary" id="saveandadd">
								Save and add new category
							</button>
						</div>
					</form>
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
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Add Sub-Category</h4>
						</div>
						<form id="newCategory" method="post" action="{{ url('equipment/subcategories') }}">
							{{csrf_field()}}
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Category</label>
											<select class="form-control" name="category_id">
													<option value="0">Pick a category </option> 
												@foreach($categories as $key => $c)
													<option value="{{$c->id}}">{{$c->name}}</option>
												@endforeach
											</select>
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="input" style="font-weight: bold;">Sub-Category</label>
											<input type="text" class="form-control" name="name">
										</div>

									</div>
								</div>
							</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="submit" class="btn btn-success">
								Save
							</button>
						</div>
					</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<div class="modal fade" id="addEquipmentModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form class="form-horizontal" method="post" action="{{ url('/equipment/regionequipment') }}">
							{{csrf_field()}}
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
													<label class="input" style="font-weight: bold;">Category</label>
													<select class="form-control" name="category_id">
														@foreach($categories as $key => $c)
															<option value="{{$c->id}}">{{$c->name}}</option>
														@endforeach
													</select>
												</div>
											</div>

										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-md-12">
													<label class="input" style="font-weight: bold;">Subcategory</label>
													<select class="form-control" name="sub_category_id">
														@foreach($categories as $key => $c)
															@foreach($c->subcategories as $key1 => $s)
																<option value="{{$s->id}}">{{$s->name}}</option>
															@endforeach
														@endforeach
													</select>
												</div>
											</div>

										</div>
									</div>

									<div class="col-md-5">
										<div class="form-group">
											<div class="col-md-12">
												<label class="input" style="font-weight: bold;">Equipment Name</label><br>
													<input type="text" name="name" class="form-control">
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
													<input class="form-control" type="text" name="manufacturer">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Model Number</label>
												<div class="col-md-8">
													<input class="form-control" type="text" name="model">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">UPC Number</label>
												<div class="col-md-8">
													<input class="form-control" type="text" name="upc">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Weight</label>
												<div class="col-md-8">
													<input class="form-control" type="text" name="weight">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Items per Unit</label>
												<div class="col-md-8">
													<input class="form-control" type="text" name="items_per_units">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Notes</label>
												<div class="col-md-8">
													<input class="form-control" type="text" name="notes">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Item Type</label>
												<div class="col-md-8">
													<label class="radio radio-inline">

															<input type="radio" class="radiobox" name="type">
															<span>Unique</span>

														</label>
													<label class="radio radio-inline">

															<input type="radio" class="radiobox" name="type">
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
															<input type="hidden" name="forecasted" value="0">
														  <input type="checkbox" class="checkbox style-0" name="forecasted" value="1">
														  <span>Track as Forecasted Item</span>
														</label>
													</div>

													<div class="checkbox">
														<label>
															<input type="hidden" name="allocated" value="0">
														  <input type="checkbox" class="checkbox style-0" name="allocated" value="1">
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
													<input class="form-control" type="text" name="allocated_qty">
												</div>
												<label class="col-md-1" style="margin-top: 20px;">SF</label>
											</div>

											<section>
												<div class="form-group">
													<label class="input" style="font-weight: bold;">Upload Picture</label><small class="font-xs"> (Click below to open File Explorer)</small><br>
													<div class="col-lg-12">
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
								<button type="submit" class="btn btn-success">Save</button>
							</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		@include('../../includes/_footer');

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
