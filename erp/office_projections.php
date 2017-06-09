<style>

	#chkbx_group {
		padding: 4px;
		height: 32px;
		border: 1px solid black;
		background-color: lightgray;
		border-radius: 5px;
		text-align: center;
	}

	#center_chks {
		margin: 0 auto;
	}

	.borderless {
		border: none;
	}

	.up2 {
		position: relative;
		top: 0px;
		left: 2px;
		font-size: 18px;
	}

	.overflow-x {
		overflow-x: scroll;
	    white-space: nowrap;
	}

	
	table, th, td {
		text-align: center;
	    height: 40px;
	    width: 50px;
	    table-layout: fixed;
	    font-size: 10px;
	}

	.button_cicrcle {
		
		
		color:black;
		background-color: white;
	}



	

	
	

</style>

<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php $one = '';
	  $two = '';
	  $three = 'active'; 

?>

<?php include '/includes/_menu_projections.php'; ?>
		<!-- MAIN PANEL -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Project List</li>
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

				
				<!-- widget grid -->
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
								
								<header>
								<div class="btn-group" style="margin-bottom: 13px;">
											<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
												Colorado Office <span class="caret"></span>
											</button>
											<button class="btn btn-warning dropdown-toggle" id="expand_all" style="margin-left:30px;">
												Expand / Colapse
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:void(0);">Colorado Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Hawaii Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Northern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">South Texas Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Southern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Washington Office</a>
												</li>
											</ul>
										</div>
								</header>

								
				
								<h2 style="position:relative;left:30px;">Office Projections</h2>

								
									<button class="btn btn-warning" style="margin-left:50px;" id="pm" >PM</button>&nbsp;&nbsp;&nbsp;
									<button class="btn btn-warning" style="margin-left:30px;" id="pe" >PE</button>&nbsp;&nbsp;&nbsp;
								

								<div style="height:20px;"></div>

								<!-- added buttons -->
								<br>
								<div class="">
									<span style="position:relative;left:30px;font-size:18px;">Select Rating</span>
									<div class="row">
										<div id="chkbx_group" style="position:relative;left:30px;" class="col-lg-2">
											<div id="center_chks">
												<input type="checkbox" name="one"><label for="one" class="up2">1</label>&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="two"><label for="one" class="up2">2</label>&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="tree"><label for="one" class="up2">3</label>&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="four"><label for="one" class="up2">4</label>&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="five"><label for="one" class="up2">5</label>&nbsp;&nbsp;&nbsp;
											</div>
										</div>
										
										<div class="col-lg-2">
											<button class="btn btn-warning" style = "position:relative;left:50px;">View</button>
										</div>

										
										
									</div>
									<div style="position:relative;height:20px;width:auto;"></div> <!-- spacer 20px;-->
								</div>
								
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
									
										
											
											<div class="row"> <!-- first type of tables -->
											
												<div class="widget-body col-lg-5 table-1" id="table-1">
												
													<table id="dt_basic" class="table" width="100%">
													<thead>			                
															<tr>
																<th style="width:10px !important;"></th>
																<th style="text-align:center;width:50px;"><br>Date Avaiable</th>
																<th style="text-align:center;width:60px !important;"><br></th>
																<th style="text-align:center;width:150px !important;"><br>Job# / Raiting</th>
																<th style="width:40px !important;"></th>
																<th style="width:15px !important;"></th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;
															$num = 1;
															while ($count <= 20 ) { ?>
																<tr>
																	<td style="width:10px !important;"><button class="button btn btn-warning btn-xs" data_id="<?php echo $num;?>"><span style="font-size:12px !important;" class="inner_<?php echo$num;?>"><b>+</b></span><span style="font-size:12px !important;" class="hide inner_<?php echo$num;?>"><b>-</b></span></button></td>
																	<td style="width:50px !important;">Apr 2018</td>
																	<td style="width:60px !important;">Adan Molina</td>
																	<td style="width:150px !important;"></td>
																	<td style="width:40px !important;"></td>
																	<td style="width:15px !important;"></td>
																</tr>
																
																	<tr id="row_<?php echo $num;?>">
																		<tr class="hide inner_<?php echo $num;?>">
																			<td style="width:10px !important;" ></td>
																			<td style="width:50px !important;" ></td>
																			<td style="width:60px !important;" >PM</td>
																			<td style="width:150px !important;">TESTPROJECT</td>
																			<td style="width:40px !important;" >Formwork</td>
																			<td style="width:15px !important;" >4</td>
																		</tr>

																		<tr class="hide inner_<?php echo $num;?>">
																			<td style="width:10px !important;"></td>
																			<td style="width:50px !important;"></td>
																			<td style="width:60px !important;">PM</td>
																			<td style="width:150px !important;">TESTPROJECT - test</td>
																			<td style="width:40px !important;">Formwork</td>
																			<td style="width:15px !important;">4</td>
																		</tr>

																		
																	</tr>
																<?php $num = $num + 1 ?>
															
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>

												<div class="widget-body col-lg-5 table-2 hide" id="table-2" style="position:relative;top:5px;">
												
													<table id="dt_basic" class="table" width="100%">
													<thead>			                
															<tr>
																<th  style="width:10px !important;"></th>
																<th style="text-align:center;"><br>Date Avaiable</th>
																<th style="text-align:center;"><br></th>
																<th style="text-align:center;"><br>Job# / Raiting</th>
																<th></th>
																<th></th>
																
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;
															$num = 1;
															while ($count <= 20 ) { ?>
																<tr>
																	<td style="width:10px !important; width:10px !important;"><button class="button btn btn-warning btn-xs" data_id="<?php echo $num;?>"><span style="font-size:12px !important;" class="inner_<?php echo$num;?>"><b>+</b></span><span style="font-size:12px !important;" class="hide inner_<?php echo$num;?>"><b>-</b></span></button></td>
																	<td style="width:50px !important;" >Apr 2018</td>
																	<td style="width:60px !important;" >WesC Cloud</td>
																	<td style="width:150px !important;"></td>
																	<td style="width:40px !important;" ></td>
																	<td style="width:15px !important;" ></td>
																</tr>
																
																	<tr id="row_<?php echo $num;?>">
																		<tr class="hide inner_<?php echo $num;?>">
																			<td style="width:10px !important;" ></td>
																			<td style="width:50px !important;" ></td>
																			<td style="width:60px !important;" >PE</td>
																			<td style="width:150px !important;">TESTPROJECT - test 1</td>
																			<td style="width:40px !important;" >Formwork</td>
																			<td style="width:15px !important;" >4</td>
																		</tr>

																		<tr class="hide inner_<?php echo $num;?>">
																			<td style="width:10px !important;" ></td>
																			<td style="width:50px !important;" ></td>
																			<td style="width:60px !important;" >PE</td>
																			<td style="width:150px !important;">Test project 2-s</td>
																			<td style="width:40px !important;" >Formwork</td>
																			<td style="width:15px !important;" >5</td>
																		</tr>

																		
																	</tr>
																<?php $num = $num + 1 ?>
															
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>									
											
												
												
												<div class="widget-body col-lg-7">
												
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%" style="position:relative;top:5px;">
														<thead>			                
																<tr>
																	<th>2017 <br> Jun</th>
																	<th>July</th>
																	<th>Aug</th>
																	<th>Sep</th>
																	<th>Oct</th>
																	<th>Nov</th>
																	<th>Dec</th>
																	<th>2018 <br> Jan</th>
																	<th>Feb</th>
																	<th>Mar</th>
																	<th>Apr</th>
																	<th>May</th>
																	<th>Jun</th>
																	<th>July</th>
																	<th>Aug</th>
																	<th>Sep</th>
																	<th>Oct</th>
																	
																</tr>
														</thead>
														<tbody>
																<?php 
																$count = 1;
																$num = 1;
																while ($count <= 20 ) { ?>
																	<tr>
																		<td style="color:black;background-color:gray;"></td>
																		<td style="color:black;background-color:gray;font-size:16px;"><b>50%</b></td>
																		<td style="background-color:gray;"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>

																			<tr id="row_<?php echo $num;?>">
																				<tr class="hide inner_<?php echo $num;?>">
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																				</tr>

																				<tr class="hide inner_<?php echo $num;?>">
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																					<td class="hide inner_rows inner_<?php echo $num;?>"></td>
																				</tr>

																				
																			</tr>
																		
																	</tr>
																	
																	
																	<?php $num = $num + 1 ?>
																<?php
																$count = $count + 1;
																 } ?>	
														</tbody>
														
												</table>
												</div>
												
											
										</div>	<!-- end row-->
										<br><hr><br><br>

										<h2 style="position:relative;left:30px;"><b>Unassigned Office Resources<b></h2>
										<h2 style="position:relative;left:200px;color:red;">Kris Runung | Ryan Truxal | Whit Lacount | Nirneeta Gupchup |</h2>


										<br><hr><br><br>

										<h3 style="position:relative;left:30px;"><b>Unassigned Projects<b></h3>

										<div class="row"> <!-- second type of tables -->
											
												<div class="widget-body col-lg-5 table-1" id="table-1">
												
													<table id="dt_basic" class="table" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center;"><br>Start Date</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>Raiting</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;

															while ($count <= 5 ) { ?>
																<tr>
																	<td>May 2017</td>
																	<td>test 29+1</td>
																	<td></td>
																</tr>

																<tr>
																	<td>Jun 2017</td>
																	<td>test 29+1-s1</td>
																	<td></td>
																</tr>

																<tr>
																	<td>Oct 2017</td>
																	<td>test 29+1-s2</td>
																	<td></td>
																</tr>

																<tr>
																	<td>May 2017</td>
																	<td>test 29+1-s3</td>
																	<td></td>
																</tr>
																
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>

												

																							
												<div class="widget-body col-lg-7">
												
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
																										<thead>			                
																<tr>
																	<th style="">2017 <br> Jun</th>
																	<th style="">July</th>
																	<th style="">Aug</th>
																	<th style="">Sep</th>
																	<th style="">Oct</th>
																	<th style="">Nov</th>
																	<th style="">Dec</th>
																	<th style="">2018 <br> Jan</th>
																	<th style="">Feb</th>
																	<th style="">Mar</th>
																	<th style="">Apr</th>
																	<th style="">May</th>
																	<th style="">Jun</th>
																	<th style="">July</th>
																	<th style="">Aug</th>
																	<th style="">Sep</th>
																	<th>Oct</th>
																	
																</tr>
														</thead>
														<tbody>
																<?php 
																$count = 1;

																while ($count <= 5 ) { ?>
																	<tr>
																		<td style="background-image: url('../erp/includes/start_line.png');background-repeat:no-repeat;background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/end_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>

																	<tr>
																		<td style="background-image: url('../erp/includes/start_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/end_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>

																	<tr>
																		<td style="background-image: url('../erp/includes/start_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/middle_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td style="background-image: url('../erp/includes/end_line.png');background-repeat:no-repeat; background-size:100% 100%;"></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>

																	<tr>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	
																<?php
																$count = $count + 1;
																 } ?>	
														</tbody>
														
												</table>
												</div>
												
											
										</div>	<!-- end row-->	
	
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

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
		<?php include '../includes/_footer.php'; ?>
		
	
		<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
		<script src="../assets/js/plugin/flot/jquery.flot.cust.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.resize.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.fillbetween.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.orderBar.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.pie.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.time.min.js"></script>
		<script src="../assets/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

		<script>
			
		$(document).ready(function() {

			$('#expand_all').on('click', function() {
				$('.button').click();
			});


			$('.button').on('click', function() {
				var id = $(this).attr('data_id');
				
				$('.inner_' + id).toggleClass('hide');
			});
			

			
			
			$('#pm').on('click', function() {
				$('.table-2').addClass('hide');
				$('.table-1').removeClass('hide');
			});

			$('#pe').on('click', function() {
				$('.table-1').addClass('hide');
				$('.table-2').removeClass('hide');
			});



			
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	
	
			/* BASIC ;*/
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
				$('.table').dataTable({
					"bPaginate": false,
					"bFilter": false
				});
	
			/* END BASIC */
			
			/* COLUMN FILTER  */
		    var otable = $('#datatable_fixed_column').DataTable({
		    	//"bFilter": false,
		    	//"bInfo": false,
		    	//"bLengthChange": false
		    	//"bAutoWidth": false,
		    	//"bPaginate": false,
		    	//"bStateSave": true // saves sort state using localStorage
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_fixed_column) {
						responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_fixed_column.respond();
				}		
			
		    });
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			/* COLUMN SHOW - HIDE */
			$('#datatable_col_reorder').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_col_reorder) {
						responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_col_reorder.respond();
				}			
			});
			
			/* END COLUMN SHOW - HIDE */
	
			/* TABLETOOLS */
			$('#datatable_tabletools').dataTable({
				
				// Tabletools options: 
				//   https://datatables.net/extensions/tabletools/button_options
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},		
		        "oTableTools": {
		        	 "aButtons": [
		             "copy",
		             "csv",
		             "xls",
		                {
		                    "sExtends": "pdf",
		                    "sTitle": "SmartAdmin_PDF",
		                    "sPdfMessage": "SmartAdmin PDF Export",
		                    "sPdfSize": "letter"
		                },
		             	{
	                    	"sExtends": "print",
	                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
	                	}
		             ],
		            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
		        },
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
			});
			
			/* END TABLETOOLS */

			/* chart colors default */
			var $chrt_border_color = "#efefef";
			var $chrt_grid_color = "#DDD"
			var $chrt_main = "#E24913";
			/* red       */
			var $chrt_second = "#6595b4";
			/* blue      */
			var $chrt_third = "#FF9F01";
			/* orange    */
			var $chrt_fourth = "#7e9d3a";
			/* green     */
			var $chrt_fifth = "#BD362F";
			/* dark red  */
			var $chrt_mono = "#000";

			/* Sin chart */

				if ($("#sin-chart").length) {
					var sin = [], cos = [], ssin = []; 
					for (var i = 0; i < 16; i += 0.5) {
						sin.push([i, Math.sin(i)]);
						cos.push([i, Math.cos(i)]);
						ssin.push([i, Math.sin(i+1)]);
					}

					var plot = $.plot($("#sin-chart"), [{
						data : sin,
						label : "sin(x)"
					}, {
						data : cos,
						label : "cos(x)"
					}, {
						data : ssin,
						label : "sin(x+1)"
					}], {
						series : {
							lines : {
								show : true
							},
							points : {
								show : true
							}
						},
						grid : {
							hoverable : true,
							clickable : true,
							tickColor : $chrt_border_color,
							borderWidth : 0,
							borderColor : $chrt_border_color,
						},
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						colors : [$chrt_second, $chrt_fourth, $chrt_third],
						yaxis : {
							min : -1.1,
							max : 1.1
						},
						xaxis : {
							min : 0,
							max : 15
						}
					});

					$("#sin-chart").bind("plotclick", function(event, pos, item) {
						if (item) {
							$("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
							plot.highlight(item.series, item.datapoint);
						}
					});
				}

				/* end sin chart */
		
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

</html>