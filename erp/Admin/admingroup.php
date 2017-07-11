<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
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
					<li style="color: black;">Admin</li><li style="color: black;">User Groups</li>
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
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row no-margin">
					<article class="col-sm-10 col-md-10 col-lg-6">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blueDark"  id="wid-id-1"  data-widget-fullscreenbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>Groups </h2>
				
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
				
										<form class="smart-form">
											<fieldset>
												<section>
													<label class="select select-multiple">
														<select multiple="">
															<option value="1">Engineering Group</option>
															<option value="2">Project Manager</option>
														</select>
													</label>
												</section>
											</fieldset>
										</form>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						</article>
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2 pull-right">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-togglebutton="false">	
								<header>
									<h2 class="font-md">Actions</h2>
								</header>	
			
								<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
														
									<div class="row col-lg-12" style="margin: 0px;">
										<button class="btn btn-success form-control" data-target="#groupModal" data-toggle="modal">NEW GROUP</button>
									</div>
									<br>
									<div class="row col-lg-12" style="margin: 0px;">
										<button class="btn btn-success form-control" disabled="disabled">EDIT GROUP</button>
									</div>
								</div>
							</div>
						</article>
						<!-- NEW WIDGET START -->
						<article class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-colorbutton="false"  data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false">
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
									<h2>Site Permission Preview </h2>
									<h2 class="pull-right" style="width: 7%;">Full</h2>
									<h2 class="pull-right" style="width: 7%;">Edit</h2>
									<h2 class="pull-right" style="width: 7%;">View</h2>
									<h2 class="pull-right" style="width: 7%;">None</h2>
				
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
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											<tbody>
												<tr>
													<td  style="background-color: #f0efef; vertical-align: middle;"><b>Admin</b></td>
													<td id="switch-1" style="width: 8%; background-color: #f0efef;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1">
															<label class="onoffswitch-label" for="myonoffswitch1"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
													</tr>
											</tbody>
										</table>
										<br>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											<tbody>
												<tr>
													<td style="background-color: #f0efef; vertical-align: middle;"><b>Estimating Area</b></td>
													<td id="switch-1" style="width: 8%; background-color: #f0efef;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
															<label class="onoffswitch-label" for="myonoffswitch2"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
													</tr>
											</tbody>
										</table>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											
											<tbody>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Projects Bidding</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pro_bid"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pro_bid"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pro_bid"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pro_bid"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Archived Projects</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="arc_pro"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="arc_pro"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="arc_pro"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="arc_pro"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Pronovos</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pronov"></td>
														<td style="background-color: #f2f2f2;"></td>
														<td style="background-color: #f2f2f2;"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="pronov"></td>
													</tr>
											</tbody>
										</table>
										<br>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											<tbody>
												<tr>
													<td style="background-color: #f0efef; vertical-align: middle;"><b>Resource Area</b></td>
													<td id="switch-1" style="width: 8%; background-color: #f0efef;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3">
															<label class="onoffswitch-label" for="myonoffswitch3"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
													</tr>
											</tbody>
										</table>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											
											<tbody>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Crew Resource Sheet</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="c_res_sheet"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="c_res_sheet"></td>
														<td style="background-color: #f2f2f2; width: 8%"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="c_res_sheet"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Superintendent Resource Sheet</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="sup_res_sheet"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="sup_res_sheet"></td>
														<td style="background-color: #f2f2f2; width: 8%"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="sup_res_sheet"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Office Resource Sheet</td>
														<td class="center_radio" style="width: 8%"><input type="radio" name="o_res_sheet"></td>
														<td class="center_radio" style="width: 8%"><input type="radio" name="o_res_sheet"></td>
														<td style="background-color: #f2f2f2; width: 8%"></td>
														<td class="center_radio" style="width: 8%"><input type="radio" name="o_res_sheet"></td>
													</tr>
											</tbody>
										</table>
										<br>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											<tbody>
												<tr>
													<td style="background-color: #f0efef; vertical-align: middle;"><b>Contacts Area</b></td>
													<td id="switch-1" style="width: 8%;  background-color: #f0efef;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4">
															<label class="onoffswitch-label" for="myonoffswitch4"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
													</tr>
											</tbody>
										</table>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											
											<tbody>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Directory</td>
														<td style="width: 8%;background-color: #f2f2f2; "></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="directory"></td>
														<td style="width: 8%;background-color: #f2f2f2; "></td>
													</tr>
											</tbody>
										</table>
										<br>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											<tbody>
												<tr>
													<td style="background-color: #f0efef; vertical-align: middle;"><b>Equipment Area</b></td>
													<td id="switch-1" style="width: 8%;  background-color: #f0efef;">
														<span class="onoffswitch">
															<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5">
															<label class="onoffswitch-label" for="myonoffswitch5"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span></td>
													</tr>
											</tbody>
										</table>
										<table class="table table-bordered" style="border-style: groove;border-width: 2px;">
											
											<tbody>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Equipment Overview</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_ovw"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Inventory</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="inventory"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="inventory"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="inventory"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="inventory"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Equipment Management</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_mng"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_mng"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_mng"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="equp_mng"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Forecasting</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="forecast"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="forecast"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="forecast"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="forecast"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Rental Overview</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="rent_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="rent_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="rent_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="rent_ovw"></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;Allocation Overview</td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="alloc_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="alloc_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="alloc_ovw"></td>
														<td class="center_radio" style="width: 8%;"><input type="radio" name="alloc_ovw"></td>
													</tr>
											</tbody>
										</table>
									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

						</article>


						<!-- WIDGET END -->
						
					</div>
				
					<!-- end row -->
				
					<!-- end row -->
				
				</section>

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
		<?php include '../includes/_footer.php'; ?>
		<!-- END PAGE FOOTER -->

		<script>
			
		$(document).ready(function() {
			
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
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
	
			/* END BASIC */
			$('#dt_basic_filter label').append('<a class="btn btn-default btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#groupModal"><i class="fa fa-plus"></i> Add Group</a>');
	
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