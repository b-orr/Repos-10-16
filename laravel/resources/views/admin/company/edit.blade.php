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
													<label class="col-md-4 control-label">City</label>
													<div class="col-md-8">
														<input class="form-control" name="city" type="text" value="{{$tenant->city}}">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">State</label>
													<div class="col-md-4">
														<select name="state" class="form-control">
						                                    <option value="AL" @if($tenant->state == "AL") selected="true" @endif>AL</option>
						                                    <option value="AK" @if($tenant->state == "AK") selected="true" @endif>AK</option>
						                                    <option value="AS" @if($tenant->state == "AS") selected="true" @endif>AS</option>
						                                    <option value="AZ" @if($tenant->state == "AZ") selected="true" @endif>AZ</option>
						                                    <option value="AR" @if($tenant->state == "AR") selected="true" @endif>AR</option>
						                                    <option value="CA" @if($tenant->state == "CA") selected="true" @endif>CA</option>
						                                    <option value="CO" @if($tenant->state == "CO") selected="true" @endif>CO</option>
						                                    <option value="CT" @if($tenant->state == "CT") selected="true" @endif>CT</option>
						                                    <option value="DE" @if($tenant->state == "DE") selected="true" @endif>DE</option>
						                                    <option value="DC" @if($tenant->state == "DC") selected="true" @endif>DC</option>
						                                    <option value="FL" @if($tenant->state == "FL") selected="true" @endif>FL</option>
						                                    <option value="GA" @if($tenant->state == "GA") selected="true" @endif>GA</option>
						                                    <option value="GU" @if($tenant->state == "GU") selected="true" @endif>GU</option>
						                                    <option value="HI" @if($tenant->state == "HI") selected="true" @endif>HI</option>
						                                    <option value="ID" @if($tenant->state == "ID") selected="true" @endif>ID</option>
						                                    <option value="IL" @if($tenant->state == "IL") selected="true" @endif>IL</option>
						                                    <option value="IN" @if($tenant->state == "IN") selected="true" @endif>IN</option>
						                                    <option value="IA" @if($tenant->state == "IA") selected="true" @endif>IA</option>
						                                    <option value="KS" @if($tenant->state == "KS") selected="true" @endif>KS</option>
						                                    <option value="KY" @if($tenant->state == "KY") selected="true" @endif>KY</option>
						                                    <option value="LA" @if($tenant->state == "LA") selected="true" @endif>LA</option>
						                                    <option value="ME" @if($tenant->state == "ME") selected="true" @endif>ME</option>
						                                    <option value="MD" @if($tenant->state == "MD") selected="true" @endif>MD</option>
						                                    <option value="MH" @if($tenant->state == "MH") selected="true" @endif>MH</option>
						                                    <option value="MA" @if($tenant->state == "MA") selected="true" @endif>MA</option>
						                                    <option value="MI" @if($tenant->state == "MI") selected="true" @endif>MI</option>
						                                    <option value="FM" @if($tenant->state == "FM") selected="true" @endif>FM</option>
						                                    <option value="MN" @if($tenant->state == "MN") selected="true" @endif>MN</option>
						                                    <option value="MS" @if($tenant->state == "MS") selected="true" @endif>MS</option>
						                                    <option value="MO" @if($tenant->state == "MO") selected="true" @endif>MO</option>
						                                    <option value="MT" @if($tenant->state == "MT") selected="true" @endif>MT</option>
						                                    <option value="NE" @if($tenant->state == "NE") selected="true" @endif>NE</option>
						                                    <option value="NV" @if($tenant->state == "NV") selected="true" @endif>NV</option>
						                                    <option value="NH" @if($tenant->state == "NH") selected="true" @endif>NH</option>
						                                    <option value="NJ" @if($tenant->state == "NJ") selected="true" @endif>NJ</option>
						                                    <option value="NM" @if($tenant->state == "NM") selected="true" @endif>NM</option>
						                                    <option value="NY" @if($tenant->state == "NY") selected="true" @endif>NY</option>
						                                    <option value="NC" @if($tenant->state == "NC") selected="true" @endif>NC</option>
						                                    <option value="ND" @if($tenant->state == "ND") selected="true" @endif>ND</option>
						                                    <option value="MP" @if($tenant->state == "MP") selected="true" @endif>MP</option>
						                                    <option value="OH" @if($tenant->state == "OH") selected="true" @endif>OH</option>
						                                    <option value="OK" @if($tenant->state == "OK") selected="true" @endif>OK</option>
						                                    <option value="OR" @if($tenant->state == "OR") selected="true" @endif>OR</option>
						                                    <option value="PW" @if($tenant->state == "PW") selected="true" @endif>PW</option>
						                                    <option value="PA" @if($tenant->state == "PA") selected="true" @endif>PA</option>
						                                    <option value="PR" @if($tenant->state == "PR") selected="true" @endif>PR</option>
						                                    <option value="RI" @if($tenant->state == "RI") selected="true" @endif>RI</option>
						                                    <option value="SC" @if($tenant->state == "SC") selected="true" @endif>SC</option>
						                                    <option value="SD" @if($tenant->state == "SD") selected="true" @endif>SD</option>
						                                    <option value="TN" @if($tenant->state == "TN") selected="true" @endif>TN</option>
						                                    <option value="TX" @if($tenant->state == "TX") selected="true" @endif>TX</option>
						                                    <option value="UT" @if($tenant->state == "UT") selected="true" @endif>UT</option>
						                                    <option value="VT" @if($tenant->state == "VT") selected="true" @endif>VT</option>
						                                    <option value="VA" @if($tenant->state == "VA") selected="true" @endif>VA</option>
						                                    <option value="VI" @if($tenant->state == "VI") selected="true" @endif>VI</option>
						                                    <option value="WA" @if($tenant->state == "WA") selected="true" @endif>WA</option>
						                                    <option value="WV" @if($tenant->state == "WV") selected="true" @endif>WV</option>
						                                    <option value="WI" @if($tenant->state == "WI") selected="true" @endif>WI</option>
						                                    <option value="WY" @if($tenant->state == "WY") selected="true" @endif>WY</option>
						                                </select>
													</div>
													<label class="col-md-1 control-label">ZIP</label>
													<div class="col-md-3">
														<input class="form-control" name="zip" type="text" value="{{$tenant->zip}}">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">EIN</label>
													<div class="col-md-8">
														<input class="form-control" id="ein" name="ein" type="text" value="{{$tenant->ein}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Company Logo</label>
													<div class="col-md-8">
														<input class="form-control" name="picture" type="file" >
													</div>
													<input type="hidden" name="logo">
												</div>

											</div>
											
											<div class="col-lg-6">
												<label class="col-md-2 control-label">Logo</label>
												<div class="col-md-10">
													@if($tenant->logo == "") <img src="{{ url('/assets/img/logo.png') }}" alt="SmartAdmin"> @else <img src="https://s3.amazonaws.com/pronovosrubixcube/logos/{{$tenant->logo}}" alt="SmartAdmin"> @endif												</div>
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
			$("#ein").mask("99-9999999", {placeholder:"  -       "});
				pageSetUp();
			    "use strict";
			})

		</script>
	</body>

</html>_
