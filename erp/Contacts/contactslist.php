<?php include 'includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include 'includes/_menu.php'; ?>
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
					<li style="color: #4d4d4d;">Home</li><li style="color: #4d4d4d;">Contacts</li>
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
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false">
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
									<h2>ALL CONTACTS</h2>
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
										<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th>Company</th>
													<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
													<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
													<th data-hide="phone,tablet">E-mail</th>
													<th data-hide="phone,tablet" style="width: 10%;">Actions</th>
												</tr>
											</thead>
													<tbody>
														<tr>
															<td>Albert C Kobayshi</td>
															<td>357-285-5555</td>
															<td>Hawaii</td>
															<td>AlbertCK@gmail.com</td>
															<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
														</tr>
														<tr>
															<td>Cahill Contractors, Inc.</td>
															<td>355-555-5555</td>
															<td>Cali</td>
															<td>architects@tryba.com</td>
															<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
														</tr>
														<tr>
															<td>Lease Crutcher Lewis Construction</td>
															<td>357-828-8888</td>
															<td>N.Cali</td>
															<td>email@lclconstr.com</td>
															<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
														</tr>
														<tr>
															<td>Brad Waters - Jordan Foster Construction</td>
															<td>210-375-1260</td>
															<td>Dalas</td>
															<td>bwaters@jordanfosterconstruction.com</td>
															<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
														</tr>
														<tr>
															<td>Jesmin - BTC Construction</td>
															<td>645-654-5665</td>
															<td>Place</td>
															<td>Jesmin@yopmail.com</td>
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
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2 pull-right">
						<div class="jarviswidget jarviswidget-color-darken" id="wd-id-2" data-widget-editbutton="false"
						data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false"
						data-widget-fullscreenbutton="false">
						<header>
							<h2 class="font-md">Actions</h2>
						</header>
							<div class="widget-body" style="display: flex;justify-content: center; flex-direction: column;">
								<div class="row col-lg-12" style="margin:0px;">
									<button class="btn btn-success form-control" data-target="#personModal" data-toggle="modal">NEW PERSON</button>
								</div>
								<br>
								<div class="row col-lg-12" style="margin: 0px;">
									<button class="btn btn-success form-control" data-target="#companyModal" data-toggle="modal">NEW COMPANY</button>
								</div>
								<br>
								<div class="row col-lg-12" style="margin: 0px;">
									<h7>Contact Type:</h7>
								</div>
								<div class="row col-lg-12" style="margin: 0px;">
									<div class="form-group">
										<select class="form-control no-padding" id="category">
											<option>Owner</option>
											<option>Architect</option>
											<option>Engineer</option>
											<option>Client</option>
											<option>SubContractor</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						</article>
						<!-- WIDGET END -->
						
					</div>
				
					<!-- end row -->
				
					<!-- end row -->
				
				</section>
				<div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header txt-color-white" style="background-color: #313131; ">
								<button type="button" class="close txt-color-white" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 class="modal-title" id="myModalLabel"><b>ADD COMPANY</b></h3>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5 col-md-offset-1">
										<div class="form-group">
											<h4><b>Company Name:</b></h4>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-md-offset-1">
										<div class="form-group">
											<h4><b>Company Type:</b></h4>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<select class="form-control" id="category">
												<option> </option>
												<option> </option>
												<option> </option>
												<option> </option>
											</select>
										</div>
									</div>
								</div>
								<br>
								<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<h2><b>Locations</b></h2>
										<a class="btn btn-default btn-success btn-xs pull-right" href="javascript:void(0);" style="margin: 5px 5px 2px 2px;"> NEW LOCATION </a>
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
										<div class="tabs-left">
											<ul class="nav nav-tabs tabs-left" id="demo-pill-nav" >
												<li class="active">
													<a href="#tab-o1" data-toggle="tab">Honolulu Office</a>
												</li>
												<li>
													<a href="#tab-o2" data-toggle="tab">Seattle Office</a>
												</li>
												<li>
													<a href="#tab-o3" data-toggle="tab">Denver Office</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active col-lg-11" id="tab-o1">
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Location Name:</h6>
															</div>
														</div>
															<div class="col-md-8">
																<div class="form-group">
																	<input type="text" class="form-control" required />
																</div>
															</div>
														</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Phone:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Address:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>City, State & Zip:</h6>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<select class="form-control" id="category">
																	<option>CO</option>
																	<option>WA</option>
																	<option>HW</option>
																	<option>N.CA</option>
																	<option>NV</option>
																	<option>S.CA</option>
																	<option>OR</option>
																	<option>TX</option>
																	<option>CA</option>
																</select>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Area Association:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group" style="border-style: groove; border-width: 2px;">
																<ul class="checkbox">
												 					 <li>
												  						<input type="checkbox" id="cb10" value="Colorado" /><label for="cb10"><b>Colorado</b></label>
												  					</li> 
												 					 <li>
												  						<input type="checkbox" id="cb11" value="Washington" /><label for="cb11"><b>Washington</b></label>
												  					</li> 
												  					<li>
												 						<input type="checkbox" id="cb12" value="Hawaii" /><label for="cb12"><b>Hawaii</b></label>
												 					</li> 
												  					<li>
												  						<input type="checkbox" id="cb13" value="South Texas" /><label for="cb13"><b>South Texas</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Northern CA" /><label for="cb14"><b>Northern CA</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Southern CA" /><label for="cb14"><b>Southern CA</b></label>
												  					</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane col-lg-11" id="tab-o2">
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Location Name:</h6>
															</div>
														</div>
															<div class="col-md-8">
																<div class="form-group">
																	<input type="text" class="form-control" required />
																</div>
															</div>
														</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Phone:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Address:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>City, State & Zip:</h6>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<select class="form-control" id="category">
																	<option>CO</option>
																	<option>WA</option>
																	<option>HW</option>
																	<option>N.CA</option>
																	<option>NV</option>
																	<option>S.CA</option>
																	<option>OR</option>
																	<option>TX</option>
																	<option>CA</option>
																</select>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Area Association</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group" style="border-style: groove; border-width: 2px;">
																<ul class="checkbox">
												 					 <li>
												  						<input type="checkbox" id="cb10" value="Colorado" /><label for="cb10"><b>Colorado</b></label>
												  					</li> 
												 					 <li>
												  						<input type="checkbox" id="cb11" value="Washington" /><label for="cb11"><b>Washington</b></label>
												  					</li> 
												  					<li>
												 						<input type="checkbox" id="cb12" value="Hawaii" /><label for="cb12"><b>Hawaii</b></label>
												 					</li> 
												  					<li>
												  						<input type="checkbox" id="cb13" value="South Texas" /><label for="cb13"><b>South Texas</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Northern CA" /><label for="cb14"><b>Northern CA</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Southern CA" /><label for="cb14"><b>Southern CA</b></label>
												  					</li>
																</ul> 
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane col-lg-11" id="tab-o3">
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Location Name:</h6>
															</div>
														</div>
															<div class="col-md-8">
																<div class="form-group">
																	<input type="text" class="form-control" required />
																</div>
															</div>
														</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Phone:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Address:</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>City, State & Zip:</h6>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<select class="form-control" id="category">
																	<option>CO</option>
																	<option>WA</option>
																	<option>HW</option>
																	<option>N.CA</option>
																	<option>NV</option>
																	<option>S.CA</option>
																	<option>OR</option>
																	<option>TX</option>
																	<option>CA</option>
																</select>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<input type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<h6>Area Association</h6>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group" style="border-style: groove; border-width: 2px;">
																<ul class="checkbox">
												 					 <li>
												  						<input type="checkbox" id="cb10" value="Colorado" /><label for="cb10"><b>Colorado</b></label>
												  					</li> 
												 					 <li>
												  						<input type="checkbox" id="cb11" value="Washington" /><label for="cb11"><b>Washington</b></label>
												  					</li> 
												  					<li>
												 						<input type="checkbox" id="cb12" value="Hawaii" /><label for="cb12"><b>Hawaii</b></label>
												 					</li> 
												  					<li>
												  						<input type="checkbox" id="cb13" value="South Texas" /><label for="cb13"><b>South Texas</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Northern CA" /><label for="cb14"><b>Northern CA</b></label>
												  					</li>
												  					<li>
												  						<input type="checkbox" id="cb14" value="Southern CA" /><label for="cb14"><b>Southern CA</b></label>
												  					</li>
																</ul> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									CANCEL
								</button>
								<button type="button" class="btn btn-success">
									ADD COMPANY
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
				</div>
				<div class="modal fade" id="personModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header txt-color-white" style="background-color: #313131; ">
								<button type="button" class="close txt-color-white" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 class="modal-title" id="myModalLabel"><b>ADD PERSON</b></h3>
							</div>
							<div class="modal-body">
							<br>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>First Name:</b> <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Last Name:</b> <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Email:</b> <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Title:</b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<hr>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Direct Line:</b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Cell Phone:</b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<hr>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>Company Association:</b><b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search Company Name" required />
										</div>
									</div>
								</div>
								<div class="row no-margin">
								<div class="col-md-5">
									<div class="form-group">
										<h4><b>Area Association:</b></h4>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group" style="border-style: groove; border-width: 2px;" >
										<ul class="checkbox"> 
											<li>
												<input type="checkbox" id="cb1" value="Colorado" /><label for="cb1"><b>Colorado Office</b></label>
											</li> 
											<li>
												<input type="checkbox" id="cb2" value="Washington" /><label for="cb2"><b>Washington Office</b></label>
											</li> 
											<li>
												<input type="checkbox" id="cb3" value="Hawaii" /><label for="cb3"><b>Hawaii Office</b></label>
											</li>
											<li>
												<input type="checkbox" id="cb4" value="Southern CA" /><label for="cb4"><b>Southern CA</b></label>
											</li>
											<li>
												<input type="checkbox" id="cb5" value="South Texas" /><label for="cb5"><b>South Texas</b></label>
											</li>
											<li>
												<input type="checkbox" id="cb6" value="Northern CA" /><label for="cb6"><b>Northern CA</b></label>
											</li>
										</ul> 
									</div>
								</div>
							</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									CANCEL
								</button>
								<button type="button" class="btn btn-success">
									<b> ADD PERSON </b>
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
		<?php include 'includes/_footer.php'; ?>
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