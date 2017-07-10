@include('includes._header')
@include('includes._menu_admin')

<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon" style="background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: #4d4d4d;">Admin</li><li style="color: #4d4d4d;">Users</li>
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
			<style type="text/css">
				.pagination > li.active > a, .pagination > li.active > span{background-color:#739e73}
				.dataTables_wrapper .dataTables_paginate .paginate_button:hover {background-color:#739e73}
			</style>
			<!-- MAIN CONTENT -->
			<div id="content">
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row no-margin">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-10 col-sm-10 col-md-10 col-lg-10 no-padding">
				
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
									<h2><b>Users list</b></h2>
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
													<th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Last Name</th>
													<th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>First Name</th>
												 
													<th data-hide="phone">Title</th>
													<th data-hide="phone"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Access Type</th>
													<th data-hide="phone,tablet">Action</th>	
												</tr>
											</thead>
											<tbody>
											
											@foreach($lists AS $list)
												<tr>
													<td>{{ $list->last_name }}</td>
													<td>{{ $list->name }}</td>
												 
													<td>{{ $list->role }}</td>
													<td>{{ @$list->accessRegion->name }}</td>
													<td><a href="{{ url('/admin/users/'.$list->id.'/edit') }}"><i class="fa fa-edit"></i></a>&nbsp; |   
															
															
													
															
															
															
															
															<form action="{{ url('/admin/users/' . $list->id) }}" method="POST"  style="display: inline;">
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
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-togglebutton="false">	
								<header>
									<h2 class="font-md">Actions</h2>
								</header>	
			
								<div class="widget-body" style=" display: flex; justify-content: center; flex-direction: column;">
														
									<div class="row col-lg-12" style="margin: 0px;">
										<button class="btn btn-success form-control" data-target="#userModal" id="myModalBtn" data-toggle="modal">New User</button>
									</div>
								<hr>
								<div class="row col-lg-12" style="margin: 0px;">
									<h7>User Search</h7>
								</div>
								<div class="row col-lg-12" style="margin: 0px;">
								<input type="text" name="userSearch" class="form-control">
								</div>
								<hr>
								<div class="row col-lg-12" style="margin: 0px;">
									<h7>Access Type</h7>
								</div>
								<div class="row col-lg-12" style="margin: 0px;">
									<div class="form-group">
										<select class="form-control no-padding" id="category">
											<option></option>
											<option></option>
											<option></option>
											<option></option>
											<option></option>
										</select>
									</div>
								</div>
								</div>
							</div>
						</article>
					<!-- end row -->
				
					<!-- end row -->
				
				</section>
				<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					
					<form   role="form" method="POST"   action="{{ url('/admin/users') }}">
					{{ csrf_field() }}
					
						<div class="modal-content">
							<div class="modal-header txt-color-white" style="background-color: #313131;">
								<button type="button" class="close txt-color-white" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 class="modal-title" id="myModalLabel">USER DETAILS</h3>
							</div>
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
									<div class="col-md-6">
										<div class="form-group">
											<h4>Title: <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="title" value="{{ old('title') }}" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>First Name: <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Last Name: <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required />
										</div>
									</div>
								</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Add region: <b><sup style="color: #FF0000;">*</sup></b></h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group" style="border-style: groove; border-width: 2px;">
										<ul class="checkbox"> 
										
										
										@foreach ($regions as $region)
										    <li>
										    	<input type="radio" name="region_id" id="cb{{ $region->id }}" value="{{ $region->id }}" /><label for="cb{{ $region->id }}">{{ $region->name }}</label>
										    </li> 
										@endforeach
										
										
										
									 
										</ul> 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Add Group: <b><sup style="color: #FF0000;">*</sup></b></h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group" style="border-style: groove; border-width: 2px;">
										<ul class="checkbox"> 
											<li>
												<input type="checkbox" id="cb7" value="Admin" /><label for="cb7">Admin</label>
											</li> 
											 
										</ul> 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Add role: <b><sup style="color: #FF0000;">*</sup></b></h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group" style="border-style: groove; border-width: 2px;">
										<ul class="checkbox"> 
											<li>
												<input type="radio" name="role" id="cb17" value="Project Manager" checked /><label for="cb17">Project Manager</label>
											</li> 
											<li>
												<input type="radio" name="role" id="cb18" value="OP Manager" /><label for="cb18">OP Manager</label>
											</li> 
											<li>
												<input type="radio" name="role" id="cb19" value="Engineer" /><label for="cb19">Engineer</label>
											</li> 
											<li>
												 <input type="radio" name="role" id="cb20" value="Estimator" /><label for="cb20">Estimator</label>
											</li>
											<li>
												<input type="radio" name="role" id="cb21" value="Superintendent" /><label for="cb21">Superintendent</label>
											</li>
										</ul> 
									</div>
								</div>
							</div>
							<hr>
							 
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>E-mail: <b><sup style="color: #FF0000;">*</sup></b></h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="email" class="form-control" value="{{ old('email') }}" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Password:</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input   name="password" type="password" class="form-control" required />
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<ul class="checkbox"> 
											<li>
												<input type="checkbox" name="active" id="cb22" value="1" /><h5>Active/InActive</h5>
											</li> 
										 
										</ul>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button  type="submit" class="btn btn-success">
									Add User
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
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'><'col-sm-6 col-xs-12 hidden-xs'>>"+
						""+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
					"pageLength": 25,
					"bLengthChange": false,
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


@if (count($errors) > 0)
 $('#myModalBtn').click();
@endif
		</script>

	</body>


</html>