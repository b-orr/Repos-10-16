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
					<li style="color: black;">Admin</li><li style="color: black;">Category</li>
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
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<a class="btn btn-default btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus"></i> Add Category</a>
					</div>
				</div>
				<br>
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row no-margin">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-togglebutton="false">
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
				
										<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">Page Name</th>
													<th data-hide="phone">Category</th>
													<th data-hide="phone">SubCategory Value</th>
													<th data-hide="phone,tablet" style="width: 60px;">Action</th>	
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Founding form Information</td>
													<td>Area Category</td>
													<td>CIP Stairs</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Founding form Information</td>
													<td>Area Category</td>
													<td>Hybrid Pre-Cast Garage</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Founding form Information</td>
													<td>Area Category</td>
													<td>Mezzanine Floor</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Founding form Information</td>
													<td>Area Category</td>
													<td>Other</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Bid Result</td>
													<td>Bid Type</td>
													<td>Budget</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Bid Result</td>
													<td>Bid Type</td>
													<td>Final</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Award Jobs</td>
													<td>Bond Required</td>
													<td>Yes</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Enter Suspended Slab Info, Typical Slab</td>
													<td>Column Form Type</td>
													<td>Fiberglass</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>Enter Fabrication Information, Steel Beam</td>
													<td>Design Type</td>
													<td>Moment Frame</td>
													<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
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
					<!-- end row -->
				
					<!-- end row -->
				
				</section>
				<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">SubCategory</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<h4>Category: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<select class="form-control" id="category">
												<option>Area Category</option>
												<option>Bid Type</option>
												<option>Bond Required</option>
												<option>Caisson Drilling</option>
												<option>Cert Payroll</option>
												<option>Column Form Type</option>
												<option>Concrete</option>
												<option>Design Type</option>
												<option>Discipline</option>
												<option>E-verify(Fed/State)</option>
												<option>Equipment Type</option>
												<option>Footing Type</option>
												<option>Form System Column Hung Flyers</option>
												<option>Form System Column Set1</option>
												<option>Form System Column Set2</option>
												<option>Form System Column Set3</option>
												<option>Form System Truss Flyers</option>
												<option>Form Type</option>
												<option>Letter of Intent</option>
												<option>OCIP/CCIP</option>
												<option>Performance Bond</option>
												<option>Perimeter Condition</option>
												<option>Prevailing Wage</option>
												<option>Primary Forming System</option>
												<option>Pumping Method</option>
												<option>Scope</option>
												<option>Secondary Forming System</option>
												<option>Special Hiring Reqs</option>
												<option>State</option>
												<option>Structure Type</option>
												<option>Structure Use</option>
												<option>UMO</option>
												<option>Utilization Reports</option>
												<option>Wall System Other Wall Fab</option>
												<option>Wall Type</option>
												<option>Wrap Up</option>
											</select>
										</div>
									</div>
								</div>
								<br>
								<br>
							<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<h4>SubCategory: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button type="button" class="btn btn-primary">
									Save
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
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
			$('#dt_basic_filter label').append('<a class="btn btn-default btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus"></i> Add Category</a>');
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