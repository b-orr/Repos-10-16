@include('../includes/_header')

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->

		<!-- END NAVIGATION -->

@include('../includes/_menu_admin')
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
					<li style="color: black;">Admin</li><li style="color: black;">Company</li>
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
										<h2>Company Info</h2>
									</header><!-- widget div-->


									<div>

										<!-- widget content -->
										<div class="widget-body no-padding">
										<Br>
											<!-- main page content here -->
											<form class="form-horizontal" method="post" action="{{url('admin/company/'.$tenant->id)}}" enctype="multipart/form-data">
											{{ method_field('PUT') }}
											{{ csrf_field() }}
											<div class="col-lg-6" style="text-align: left;" >
												<div class="form-group">
													<label class="col-md-4 control-label">Company Name</label>
													<div class="col-md-8">
														<input class="form-control" name="company" type="text" value="{{$tenant->company}}">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Address</label>
													<div class="col-md-8">
														<input class="form-control" name="address" type="text" value="{{$tenant->address}}">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">EIN</label>
													<div class="col-md-8">
														<input class="form-control" name="ein" type="text" value="{{$tenant->ein}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Company Logo</label>
													<div class="col-md-8">
														<input class="form-control" name="logo" type="file" >
													</div>
												</div>

											</div>
												
												<button type="submit" class="hide" id="submitForm"></button>
											</form>
											<!-- end main page content -->
										</div>
									</div>

								</div>
										<!-- end widget content -->
							</article>
						</div>
						<div class="bordered" id="rightMenu1">
							<div class="header">
								<h2 class="no-padding font-md">Actions</h2>
								 <label class="btn btn-success pull-right btn-xs" for="collapseMenu" id="collapseName"></label>
							</div>
							<div class="menu-body padding-5">
								<label class="btn btn-success btn-block" for="submitForm">
									<span class="buttonText">Save</span>
								</label>
								<!-- <legend></legend>
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="#addEquipmentModal">
									<span class="buttonText">Add new region</span>
								</button> -->
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

		<!-- PAGE FOOTER -->
		@include('../includes/_footer')
		<!-- END PAGE FOOTER -->


		<script type="text/javascript">
			$(document).ready(function() {
				pageSetUp();
			    "use strict";
			})

		</script>
	</body>

</html>_
