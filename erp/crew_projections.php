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
	    table-layout: fixed;
	    font-size: 10px;
	}

	

</style>

<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
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
				
								<h2 style="position:relative;left:30px;">Area Crew Projections</h2>

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

										<div class="col-lg-4" style="position:relative;left:-80px;">
											<button class="btn btn-warning" id="team" >Project Team</button>&nbsp;&nbsp;&nbsp;
											<button class="btn btn-warning" id="financials" >Financials</button>&nbsp;&nbsp;&nbsp;
											<button class="btn btn-warning" id="notes" >Notes</button>&nbsp;&nbsp;&nbsp;

											
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
																<th style="text-align:center;width:30px;"><br>Job #</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;width:55px;"><br>PM</th>
																<th style="text-align:center;width:55px;"><br>PE</th>
																<th style="text-align:center;width:55px;"><br>FDPE</th>
																<th style="text-align:center;width:55px;"><br>Supt</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;

															while ($count <= 25 ) { ?>
																<tr>
																	<td style="width:30px;">984</td>
																	<td>2400 S University</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																	<td>
																		<select name="" id="">
																			<option value="">R.Clark</option>
																			<option value="">J.Thao</option>
																			<option value="">K.Barric</option>
																		</select>
																	</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																</tr>
																
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>

												<div class="widget-body col-lg-5 hide table-2" id="table-2">
												
													<table id="dt_basic" class="table table-striped table-hover" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center;"><br>Job #</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>Contract Amt</th>
																<th style="text-align:center;"><br>Gross Profit</th>
																<th style="text-align:center;"><br>M/U %</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;

															while ($count <= 25 ) { ?>
																<tr>
																	<td>984</td>
																	<td>2400 S University</td>
																	<td>$8,900,000</td>
																	<td>$1,450,000</td>
																	<td>19.5%</td>
																</tr>
																
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>

												<div class="widget-body col-lg-5 hide table-3" id="table-3">
												
													<table id="dt_basic" class="table table-striped table-hover" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center; width:30px;"><br>Job #</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>Notes</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;

															while ($count <= 25 ) { ?>
																<tr>
																	<td style="width:30px;">984</td>
																	<td>2400 S University</td>
																	<td><input type="text" name="note"></td>
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
																	
																	
																</tr>
														</thead>
														<tbody>
																<?php 
																$count = 1;

																while ($count <=25 ) { ?>
																	<tr>
																		<td>5</td>
																		<td>10</td>
																		<td>15</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td>10</td>
																		<td></td>
																		<td>5</td>
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
										<br><hr><br><br>
										<!-- removed
										<div class="row"> second type of tables 
											
												<div class="widget-body col-lg-5 table-1" id="table-1">
												
													<table id="dt_basic" class="table" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center;"><br>Start Date</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>PM</th>
																<th style="text-align:center;"><br>PE</th>
																<th style="text-align:center;"><br>Supt</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															$count = 1;

															while ($count <= 25 ) { ?>
																<tr>
																	<td>21/5/2017</td>
																	<td>2400 S University</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																	<td>
																		<select name="" id="">
																			<option value="">B.Charvat</option>
																			<option value="">C.Foster</option>
																			<option value="">C.Moes</option>
																		</select>
																	</td>
																</tr>
																
															<?php
															$count = $count + 1;
															 } ?>	
													</tbody>
												
													</table>
												</div>

												<div class="widget-body col-lg-5 hide table-2" id="table-2">
												
													<table id="dt_basic" class="table table-striped table-hover" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center;"><br>Start Date</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>Contract Amt</th>
																<th style="text-align:center;"><br>Gross Profit</th>
																<th style="text-align:center;"><br>M/U %</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															//$count = 1;

															//while ($count <= 100 ) { ?>
																<tr>
																	<td>21/5/2017</td>
																	<td>2400 S University</td>
																	<td>$8,900,000</td>
																	<td>$1,450,000</td>
																	<td>19.5%</td>
																</tr>
																
															<?php
															//$count = $count + 1;
															// } ?>	
													</tbody>
												
													</table>
												</div>

												<div class="widget-body col-lg-5 hide table-3" id="table-3">
												
													<table id="dt_basic" class="table table-striped table-hover" width="100%">
													<thead>			                
															<tr>
																<th style="text-align:center;"><br>Start Date</th>
																<th style="text-align:center;"><br>Job Name</th>
																<th style="text-align:center;"><br>Notes</th>
															</tr>
													</thead>
													<tbody>

															<?php 
															//$count = 1;

														//	while ($count <= 100 ) { ?>
																<tr>
																	<td>21/5/2017</td>
																	<td>2400 S University</td>
																	<td><input type="text" name="note"></td>
																</tr>
																
															<?php
														//	$count = $count + 1;
														//	 } ?>	
													</tbody>
												
													</table>
												</div>
												
												
												<div class="widget-body col-lg-7">
												
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
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
															//	$count = 1;

															//	while ($count <=25 ) { ?>
																	<tr>
																		<td>5</td>
																		<td>10</td>
																		<td>15</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td>10</td>
																		<td></td>
																		<td>5</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		
																	</tr>
																	
																<?php
															//	$count = $count + 1;
															//	 } ?>	
														</tbody>
														
												</table>
												</div>
												
											
										</div>	 end row-->	
										<!-- graphicon removed
										<div class="row"> 
											 Widget ID (each widget will need unique ID) comment
							<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false">
								comment start
								widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								comment end
								<header>
									<span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
									<h2>Sin Chart</h2>

								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body no-padding">
									<!-- removed graphicon
 										<div id="sin-chart" class="chart has-legend"></div>
									-->
									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->
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




			

			$('#team').on('click', function() {
				$('.table-2').addClass('hide');
				$('.table-3').addClass('hide');
				$('.table-1').removeClass('hide');
			});

			$('#financials').on('click', function() {
				$('.table-1').addClass('hide');
				$('.table-3').addClass('hide');
				$('.table-2').removeClass('hide');
			})

			$('#notes').on('click', function() {
				$('.table-1').addClass('hide');
				$('.table-2').addClass('hide');
				$('.table-3').removeClass('hide');
			})


			
				

			
			
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