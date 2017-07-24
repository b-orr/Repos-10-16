

@include('includes._header')
@include('includes._menu_admin')



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
					<li>Admin</li><li>Fields</li>
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
			<div id="content">				<!-- widget grid -->
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
									<h2>Fields</h2>
				
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
													<th data-hide="phone" width="10%">Type</th>
													<th data-hide="phone" width="10%">Name</th>
													<th data-hide="phone" width="20%">Preview</th>
													<th >Values</th>
													<th data-hide="phone" width="10%" data-hide="phone,tablet" style="width: 60px;">Action</th>	
												</tr>
											</thead>
											<tbody>
											
											@foreach($lists AS $list)
												<tr>
													<td>{{ $fields->fieldTypes[$list->type] }}</td>
													<td>{{ $list->name }}</td>
													<td>{!! $fields->generateField($list->name, $list->type, $list->fieldValues) !!}</td>
													
													<td>
													<select class="form-control" multiple style="width: 200px;" >
													
													@foreach($list->fieldValues AS $fv)
													<option value="{{ $fv->id }}" onclick="$('#form_{{ $list->id }}').attr('action', '{{ url('/admin/fieldsValue/' . $list->id . '|' . $fv->id) }}')">{{ $fv->value }}</option>
													@endforeach
													</select>
													
													<button class="btn btn-primary" data-toggle="modal" id="myModalBtn" data-target="#areaModal2" onclick="$('#fields_id').val('{{ $list->id }}')">Add Value</button>
													
													
													<form action="" id="form_{{ $list->id }}" method="POST"  style="display: inline;">
													<button class="btn btn-primary btn-danger"  type="submit" >Remove Selected</button>
													
													    {{ method_field('DELETE') }}
													    {{ csrf_field() }}
													 
													</form>
													
													</td>
													
													<td><a href="{{ url('/admin/fields/'.$list->id.'/edit') }}"><i class="fa fa-edit"></i></a>&nbsp; |   
													
													
											
													
													
													
													
													<form action="{{ url('/admin/fields/' . $list->id) }}" method="POST"  style="display: inline;">
													<a href="#" onclick="if(confirm('Are you sure?')){ $(this).parent().submit()}"> &nbsp;<i class="fa fa-trash-o"></i></a>
													    {{ method_field('DELETE') }}
													    {{ csrf_field() }}
													 
													</form>
													
													
													 
													
													</td>
												</tr>
									 @endforeach
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
				
				<div class="modal fade" id="areaModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
						<div class="modal-dialog">
						
						
						
						<form   role="form" method="POST"   action="{{ url('/admin/fieldsValue') }}">
						{{ csrf_field() }}
						
						<input type="hidden" name="fields_id" id="fields_id" value="" />
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">Add New Value</h4>
								</div>
								<br>
								<div class="modal-body">
								
								@if (count($errors) > 0)
								    <div class="alert alert-danger">
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								        </ul>
								    </div>
								@endif
								
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<h4>Value Name: <sup>*</sup></h4>
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<input type="text" name="value" class="form-control" required />
											</div>
										</div>
									</div>
									
									
									
									
									
									
									<br>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Cancel
									</button>
									<button type="submit" class="btn btn-primary">
										Add Value
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</form>
						
						
						
					</div>
				</div>
				
				
				
				<div class="modal fade" id="areaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					
					
					
					<form   role="form" method="POST"   action="{{ url('/admin/fields') }}">
					{{ csrf_field() }}
					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Add New Field</h4>
							</div>
							<br>
							<div class="modal-body">
							
							@if (count($errors) > 0)
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif
							
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<h4>Field Name: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" name="name" class="form-control" required />
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<h4>Field type:  </h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
										<select  name="type" class="form-control">
										
										@foreach($fields->fieldTypes as $key=>$val)
										<option value="{{ $key }}">{{ $val }}</option>
									 @endforeach
										</select>
										 
										</div>
									</div>
								</div>
								
								
								 
								
								<br>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									Add Field
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
					</form>
					
					
					
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
			$('#dt_basic_filter label').append('<button class="btn btn-primary" data-toggle="modal" id="myModalBtn" data-target="#areaModal">Add Field</button>');
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
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-xs-3 asdasdasd'r><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
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

@if (count($errors) > 0)
 $('#myModalBtn').click();
@endif

		</script>
		 

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		 

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		 

	</body>

</html>