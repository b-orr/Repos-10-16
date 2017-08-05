<?php include 'includes/_header_eq.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

<?php include 'includes/_menu_eq.php'; ?>
		<!-- MAIN PANEL -->
	<style type="text/css">
		/* .main-parent{
			background-color: background-image: linear-gradient(to bottom, #f3f3f3, #e2e2e2);;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		} */

		.main-parent{
			background-color: #c0c0c0;
			font-weight: bolder;
		}
		.fchild{
			background-color: #e6e6e6;
			font-weight: bold;
		}
		.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
			padding: 2px 10px;
		}

		tr {
			height:25px !important;
		}
		.up_5 {
			position: relative;
			top: -5px;
		}
		.fa-plus, .fa-minus {
			font-size: 10px;
		}
	</style>
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon" style="background-color: white;">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li style="color: black;">Equipment</li><li style="color: black;">Equipment List</li>
				</ol>

			</div>
			<!-- END RIBBON -->



			<!-- MAIN CONTENT -->
			<div id="content" style="padding: 0px 0px 0px 2px;">
				<!-- end row -->
				<section id="widget-grid">
					
					<div class="row no-margin">
							
						<div id="contentMain" class="col-md-9" style="width: 80%; padding: 0px 2px 0px 0px; margin-right: 2px;">
							<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
							
								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-5" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" data-widget-togglebutton="false">
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


									<!-- added buttons -->

									<header>
										<h2>Trucking Request</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
											<!-- main page content here -->
											<!-- end main page content -->
										</div>
									</div>

								</div>
										<!-- end widget content -->
							</article>
						</div>
						<div class="bordered" id="rightMenu1" style="position: absolute; right: 0px; width: 20%; margin-top: -2px; padding-top: 2px; border-top: transparent;">
							<div class="header" style="background-color: #404040; min-height: 34px; border-color: #383838;">
								<h2 class="no-padding font-md" style="color: white; line-height: 34px; font-weight: 400; letter-spacing: 0; margin: 0px 0px 0px 10px; display: inline;">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName" style="margin-top: 6px; margin-right: 3px;"></label>
							</div>
							<div class="menu-body padding-5">
								<div class="row col-lg-12 no-padding no-margin">
									<div class="col-lg-6" style="padding: 0px 2px 5px 0px;">
										<button class="btn btn-primary btn-block" onclick="expand();">Expand All</button>
									</div>
									<div class="col-lg-6 no-padding">
										<button class="btn btn-primary btn-block" onclick="collapse();">Collapse All</button>
									</div>
								</div>
								<legend style="margin: 10px 0px; padding: 5px 0px 0px 0px; " ></legend>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#addEquipmentModal">
									<span style="font-size: 12px; font-weight: bold;">Add Equipment</span>
								</button>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#categoryModal">
									<span style="font-size: 12px; font-weight: bold;">Add Category</span>
								</button>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#subCategoryModal">
									<span style="font-size: 12px; font-weight: bold;">Add Sub-Category</span>
								</button>
								<legend></legend>
								<label style="font-size: 12px; text-decoration: underline; font-weight: bold;">Search</label><br>
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Quick seach</label>
								<input type="text" name="search" class="form-control">
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Status</label>
								<legend></legend>
								<!-- <label style="font-size: 12px; text-decoration: underline; font-weight: bold;">Filters</label><br>
								<select type="text" name="search" class="form-control">
									<option>Active</option>
									<option>Damaged</option>
								</select> -->
								<label style="font-size: 12px; font-weight: bold; margin-bottom: 0px;">Owner</label>
								<select type="text" name="search" class="form-control">
									<option>McClone</option>
									<option>Other</option>
								</select>
							</div>
						</div>
					</div>
				</section>

				<!--
					The ID "widget-grid" will start to initialize all widgets below
					You do not need to use widgets if you dont want to. Simply remove
					the <section></section> and you can use wells or panels instead
					-->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- MODALS -->
		
		<!-- END MODALS -->
		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<!-- PAGE FOOTER -->
		<?php include 'includes/_footer.php'; ?>
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";
			})

		</script>
	</body>

</html>_
