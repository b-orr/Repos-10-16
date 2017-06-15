<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<!-- MAIN PANEL -->

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
					<li style="color: black;">Home</li><li style="color: black;">Projects</li><li style="color: black;">1001 Broadway</li><li style="color: black;">RFIs</li>
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

						<!-- NEW WIDGET START -->
						<article class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

							<!-- Widget ID (each widget will need unique ID)-->
							
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget well transparent" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Accordions </h2>
				
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
										<div class="panel-group smart-accordion-default" id="accordion3">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne" class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Draft RFIs </a></h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<table class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th>Number</th>
																	<th style="width: 1%;"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Unsupported slab section</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>L2 Transition Beam</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>PCU Upturned Beams</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>Outlines Level 6</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>Safety Submittals</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
															</tbody>
														</table>
												</div>
											</div>
										</div>
										<br>
										<div class="panel-group smart-accordion-default" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Open RFIs </a></h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<table class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th>Number</th>
																	<th>GC Number</th>
																	<th>Sub Number</th>
																	<th>Title</th>
																	<th>Date Initiated</th>
																	<th>Date Due</th>
																	<th>Days Out</th>
																	<th>Assigned</th>
																	<th style="width: 1%;"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
															</tbody>
														</table>
												</div>
											</div>
										</div>
										<br>
										<div class="panel-group smart-accordion-default" id="accordion1">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i> Closed RFIs </a></h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body no-padding">
														<table class="table table-bordered table-striped" style="width: 100%;">
															<thead>
																<tr>
																	<th>Number</th>
																	<th>GC Number</th>
																	<th>Sub Number</th>
																	<th>Title</th>
																	<th>Date Initiated</th>
																	<th>Date Due</th>
																	<th style="width: 5%;">Days To Respond</th>
																	<th>Assigned</th>
																	<th style="width: 1%;"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
																<tr>
																	<td>M1234</td>
																	<td>987</td>
																	<td>654</td>
																	<td>Unsupported slab section above perimeter walls L1-L2</td>
																	<td>12/15/2016</td>
																	<td>12/15/2016</td>
																	<td>31</td>
																	<td>Steve Smith (Contractor Supreme)</td>
																	<td><a href="#"><i class="fa fa-edit"></i></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->
						<article class="col-xs-10 col-sm-10 col-md-10 col-lg-2">

							<!-- Widget ID (each widget will need unique ID)-->
							
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Actions </h2>
				
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget content -->
									<div class="widget-body">
										<div class="col-lg-12">
											<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">New RFI</button>
										</div>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						
							<!-- end widget -->

						</article>
					</div>

					<!-- end row -->

					<!-- row -->

					<!-- end row -->

				</section>

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		

		<!-- modals -->

			<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #404040;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Select RFI Type</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="smart-form">
											<label class="checkbox">
											<b>Blank RFI</b>
											<input type="checkbox" name="checkbox" checked="checked">
											<i></i></label>
										</span>
									</div>
									
								</div>
						</div>
						<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="input" style="font-weight: bold;">RFI Template</label><br>
										<select type="text" class="form-control" required style="padding-left: 5px;">
										</select>
									</div>
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancel
							</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								Continue
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
		<!-- modals end -->
		<!-- END MAIN PANEL -->
		<?php include '../includes/_footer.php'; ?>
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