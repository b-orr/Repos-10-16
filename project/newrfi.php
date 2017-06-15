<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<!-- MAIN PANEL -->
		<style type="text/css">
			.control-label {
				padding-top: 4px;
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
						<article class="col-sm-10 col-md-10 col-lg-10">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
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
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															MCC RFI #
														</label>
													</section>
													<section class="col col-3">
														<label class="input">
															<input type="text">
														</label>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Revision #
														</label>
													</section>
													<section class="col col-3">
														<label class="input">
															2
														</label>
												</div>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Status
														</label>
													</section>
													<section class="col col-3">
														<label class="input">
															<input type="text">
														</label>
													</section>
												</div>
											</fieldset>
											<fieldset>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Draft
														</label>
													</section>
													<section class="col col-3">
															<input type="checkbox" id="draft" value="drft">
													</section>
													<section class="col col-3">
														<label class="control-label">
															Private
														</label>
													</section>
													<section class="col col-3">
															<input type="checkbox" id="private" value="prvt">
													</section>
												</div>
				
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															RFI Title
														</label>
													</section>
													<section class="col col-9">
														<label class="input">
															<input type="text">
														</label>
													</section>
												</div>
				
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Reference Drawing Number
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<input type="text" name="refDrawing" class="form-control">
														</div>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Reference Spec Section
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<input type="text" name="specSection" class="form-control">
														</div>
													</section>
												</div>
											</fieldset>
				
											<fieldset>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Date Written
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<input type="text" name="dateWritten" class="form-control">
														</div>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Response Requested (days)
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<input type="text" name="dateWritten" class="form-control">
														</div>
													</section>
												</div>
				
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Date Due
														</label>
													</section>
													<section class="col col-3">
														<label class="input">
															<input type="text">
														</label>
													</section>
												</div>

												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Schedule Impact Days
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Cost Impact
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
													</section>
												</div>
											</fieldset>

											<fieldset>
				
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Internal Author / Creator
														</label>
													</section>
													<section class="col col-3">
														<label class="input">
															<input type="text">
														</label>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Overdue Notifications
														</label>
													</section>
													<section class="col col-3">
														<input type="checkbox">
													</section>
												</div>

												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															CC
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Assigned To
														</label>
													</section>
													<section class="col col-3">
														<div class="form-group">
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
													</section>
												</div>
											</fieldset>

											<fieldset>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Subcontractor RFI
														</label>
													</section>
													<section class="col col-3">
															<input type="checkbox" name="submitAuthor">
													</section>
												</div>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Received From
														</label>
													</section>
													<section class="col col-3">
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
															</select>
													</section>
													<section class="col col-3">
														<label class="control-label">
															Received Date
														</label>
													</section>
													<section class="col col-3">
															<input type="text" name="receiveDate" class="form-control">
													</section>
												</div>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Subcontractor RFI #
														</label>
													</section>
													<section class="col col-3">
															<input type="text" name="receiveDate" class="form-control">
													</section>
												</div>
											</fieldset>

											<fieldset>
												<div class="row">
													<section class="col col-6">
														<label class="control-label">
															Transmittal Summary
														</label>
													</section>
												</div>
												<div class="row">
													<section class="col col-sm-12 col-md-12 col-lg-12">
														<label class="textarea"> 										
															<textarea rows="5" class="custom-scroll"></textarea> 
														</label>
													</section>
												</div>
												<div class="row">
													<section class="col col-5">
														<label class="control-label">
															Attachments
														</label>
													</section>
													<section class="col col-5">
														<label class="control-label">
															Response
														</label>
													</section>
												</div>
												<div class="row">
													<div class="col col-5">
														<button type="button btn-primary" class="btn btn-primary btn-lg">
															<i class="fa fa-cloud-upload"></i>
															Attach a file
														</button>
													</div>
													<div class="col col-5">
														<button type="button btn-primary" class="btn btn-primary btn-lg">
															<i class="fa fa-cloud-upload"></i>
															Attach a file
														</button>
													</div>
												</div>
												<br>
												<div class="row">
													<section class="col col-3">
														<label class="control-label">
															Client RFI #
														</label>
													</section>
													<section class="col col-3">
														<input type="text" name="receiveDate" class="form-control">
													</section>
													<section class="col col-3">
														<label class="control-label">
															Answered Date
														</label>
													</section>
													<section class="col col-3">
														<input type="text" name="receiveDate" class="form-control">
													</section>
												</div>

											</fieldset>
											<br>
											<footer>
												<button type="submit" class="btn btn-success">
													Save and Send
												</button>
												<button type="button" class="btn btn-default">
													Back
												</button>
												<button type="button" class="btn btn-default">
													Cancel
												</button>
											</footer>
										</form>
				
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

					<!-- row -->

					<!-- end row -->

				</section>

			</div>
			<!-- END MAIN CONTENT -->

		</div>

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