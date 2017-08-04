
@include('includes._header')
@include('includes._menu_list')


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
 					<li style="color: black;">Home</li><li style="color: black;">Project List</li>
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
 			<div id="content" >
 
 				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
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
 									
 									<h2 class="font-md">Project List</h2>				
 									
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
 										<table class="table" id="table1">
 											<thead>
 												<th>Job #</th>
 												<th>Project Name</th>
 												<th>Address</th>
 												<th>City</th>
 												<th>State</th>
 												<th>ZIP</th>
 											</thead>
 											<tbody>
 												@foreach($projects as $key => $p)
	 												<tr>
	 													<td>{{++$key}}</td>
	 													<td><a href="{{ url('projects/'.$p->id) }}">{{$p->name}}</a></td>
	 													<td>{{$p->address}}</td>
	 													<td>{{$p->city}}</td>
	 													<td>{{$p->state}}</td>
	 													<td>{{$p->zip}}</td>
	 												</tr>
 												@endforeach
 											</tbody>
 										</table>
 									</div>
 									<!-- end widget content -->
 									
 								</div>
 								<!-- end widget div -->
 								
 							</div>
 				
 			</div>
 			<!-- END MAIN CONTENT -->
 
 		</div>


@include('includes._footer')


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
 					"paging": false,
 					 "searching": false
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
 				"paging": false,
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
		 

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		 

	</body>

</html>