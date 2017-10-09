@include('includes._header')
@include('includes._menu_admin')

<!-- MAIN PANEL -->
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
					<li style="color: #4d4d4d;">Admin</li><li style="color: #4d4d4d;">User Groups</li>
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

			<form action="{{ url('/admin/user_groups/' . $group->id) }}" method="POST"  >
				
									    {{ csrf_field() }}	
									    {{ method_field('PUT') }}
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
								 
				
										<div class="widget-body" style="min-height: 20px">


											<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label><h4>New Group Name: <sup>*</sup></h4></label>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required value="{{ $group->name }}" />
											</div>
										</div>
									</div>
									
									</div>
									<!-- end widget content -->
				
							 
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
										<button class="btn btn-success form-control"  type="submit">Update</button>
									</div>
								 
								</div>
							</div>
						</article>
						<!-- NEW WIDGET START -->
						<article class="col-xs-10 col-sm-10 col-md-10 col-lg-10">



									<!-- widget content -->
									

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
									 
				
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->



						 
						 <?php $level=''; $toggle=''; ?>
						 @foreach($lists AS $list=>$key)

						 <?php $list_clean = explode(' - ', $list); ?>
						 @if($level!=$list_clean[0])
						  <?php $level=$list_clean[0]; ?>
						 	<table   style="border: none">
											<tbody>
												<tr>
											 
													<td><br style="clear: both;"> <h4 style="font-weight: bold">
													<span class="onoffswitch">
													<input type="checkbox" name="h4{{ $list_clean[0] }}" class="onoffswitch-checkbox" value="1" id="h4{{ $list_clean[0] }}" onchange="$('.{{ $list_clean[0] }}').prop('checked', $(this).is(':checked')).change();" checked> 
													<label class="onoffswitch-label" for="h4{{ $list_clean[0] }}"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> 
													</span>
													{{ $list_clean[0] }}</h4></td>
													
												 
													
													</tr>
											</tbody>
										</table>
						 @endif
										<table class="table table-bordered" style=" ">
											<tbody>
												<tr>
												<td style="width: 8%;"></td>
													<td>{{ isset($list_clean[1])?$list_clean[1]:$list }}</td>
													
													
													@if(!empty($key))
													<?php $full_checked=''; ?>
													@foreach($key AS $k=>$v)
													<td class="center_radio {{ str_replace(' ', '_', $list) }}" style="width: 8%;">{{ ucfirst( $prm->translate($k)) }} 


														<?php
														$checked='';
														
														 foreach ($group->groupValues as $key => $value) {
															if($value->name==str_replace(' ', '_', $list).'_' . $k && $value->value==1){
																$checked='checked';
																$full_checked='checked';
															}
														} ?>

														<input type="hidden"  name="values[name][{{ str_replace(' ', '_', $list).'_' . $k }}]" value="0">
														<input type="checkbox" name="values[name][{{ str_replace(' ', '_', $list).'_' . $k }}]" value="1" {{$checked}}></td>
												
												 @endforeach	
													@endif	
														<td id="switch-1" style="width: 8%;">
													<span class="onoffswitch">

														@if(!empty($key))
														<input type="checkbox" name="onoffswitch" class="{{ $list_clean[0] }} onoffswitch-checkbox" id="{{ $list }}" {{$full_checked}}  onchange="$('.{{ str_replace(' ', '_', $list) }}').find(':checkbox').toggleCheckbox(); $('.{{ str_replace(' ', '_', $list) }}').toggle()">
														@else

														<?php
														$checked='';
														
														 foreach ($group->groupValues as $key => $value) {
															if($value->name==str_replace(' ', '_', $list) && $value->value==1){
																$checked='checked';
																 
															}
														} ?>

														<input type="hidden"  name="values[name][{{ str_replace(' ', '_', $list) }}]" value="0">
														<input type="checkbox" name="values[name][{{ str_replace(' ', '_', $list) }}]" class="onoffswitch-checkbox" value="1" id="{{ $list }}" {{$checked}} >
														@endif	

														@if($full_checked=='')
														<?php $toggle.='<script type="text/javascript">$(\'.'.  str_replace(' ', '_', $list) .'\').toggle()</script>';  ?>
															
														@endif
														<label class="onoffswitch-label" for="{{ $list }}"> 
												<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
												<span class="onoffswitch-switch"></span> </label> 
												</span></td>
													</tr>
											</tbody>
										</table>
										 
								@endforeach		
										
										 
										 
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

		</form>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->


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

			$.fn.toggleCheckbox = function() {
			    this.attr('checked', !this.attr('checked'));
			    this.trigger('change');
			}
		</script>
{!!$toggle!!}
	</body>
 

</html>