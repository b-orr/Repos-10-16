<?php include 'includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include 'includes/_menu.php'; ?>
		<!-- MAIN PANEL -->
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
					<li>Home</li><li>Contacts</li>
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
					<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
							<!-- Widget ID (each widget will need unique ID)-->
							
							<!-- end widget -->
								<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
								<div class="btn-group" style="margin-bottom: 13px;">
											<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
												Colorado Office <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:void(0);">Colorado Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Hawaii Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Northern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">South Texas Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Southern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Washington Office</a>
												</li>
											</ul>
										</div>
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
											<ul class="nav nav-tabs tabs-left" id="demo-pill-nav">
												<li class="active">
													<a href="#tab-r1" data-toggle="tab"><span class="badge bg-color-blue txt-color-white">12</span> Architect </a>
												</li>
												<li>
													<a href="#tab-r2" data-toggle="tab"><span class="badge bg-color-blueDark txt-color-white">5</span> Client </a>
												</li>
												<li>
													<a href="#tab-r3" data-toggle="tab"><span class="badge bg-color-greenLight txt-color-white">3</span> Owner </a>
												</li>
												<li>
													<a href="#tab-r4" data-toggle="tab"><span class="badge bg-color-greenLight txt-color-white">2</span> Engineer </a>
												</li>
												<li>
													<a href="#tab-r5" data-toggle="tab"><span class="badge bg-color-greenLight txt-color-white">2</span> SubContractor</a>
												</li>
												<li>
													<a class="newPer btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#myModal" style="background-color: #3276b1;"><strong>New Company</strong></a>
													<a class="newPer btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#myModal2" style="background-color: #3276b1;"><strong>New Person</strong></a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active col-lg-11" id="tab-r1">
												<div class="widget-body no-padding">
												<br>
													<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">

													<thead>			                
															<tr>
																<th>Company</th>
																<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
																<th data-hide="phone,tablet">E-mail</th>
																<th data-hide="phone,tablet">Actions</th>
															</tr>
														</thead>
														<tbody>
																<tr>
																	<td>Tryba Architects</td>
																	<td>35728</td>
																	<td>Fogo</td>
																	<td>architects@tryba.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>																
																<tr>
																	<td>RMA Architects Inc.</td>
																	<td>357-285-6122</td>
																	<td>Goodsprings</td>
																	<td>email@rma.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Architects LTD.</td>
																	<td>555-283-6222</td>
																	<td>Denver Co.</td>
																	<td>email@arcltd.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Barnes Construction</td>
																	<td>227-115-7722</td>
																	<td>Bittersprings</td>
																	<td>email@barnesco.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>LE Architecture</td>
																	<td>352-333-1252</td>
																	<td>Denver</td>
																	<td>email@learch.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Owen Co.</td>
																	<td>311-201-6822</td>
																	<td>Anfield Rd.</td>
																	<td>owenm@owenco.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																
																
																<tr>
																	<td>Tryba Architects</td>
																	<td>35728</td>
																	<td>Westchester</td>
																	<td>architects@tryba.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Baros</td>
																	<td>615-525-7125</td>
																	<td>Denver</td>
																	<td>email@baros.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Sterling Co.</td>
																	<td>350-850-1950</td>
																	<td>Westbromwich</td>
																	<td>rsterling@manc.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>John Bishop Co.</td>
																	<td>210-375-1260</td>
																	<td>Goodsprings</td>
																	<td>jbishop@lwarch.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Benitez Castle</td>
																	<td>505-265-7088</td>
																	<td>Newcastle</td>
																	<td>rafa@newcastle.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>BCT Arch</td>
																	<td>645-654-5665</td>
																	<td>Denver</td>
																	<td>james@opmail.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
														</tbody>
													</table>
													</div>
												</div>
												<div class="tab-pane col-lg-11" id="tab-r2">
												<div class="widget-body no-padding">
												<br>
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">

														<thead>			                
															<tr>
																<th>Company</th>
																<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
																<th data-hide="phone,tablet">E-mail</th>
																<th data-hide="phone,tablet">Actions</th>
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
												</div>
												<div class="tab-pane col-lg-11" id="tab-r3">
													<div class="widget-body no-padding">
												<br>
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">

														<thead>			                
															<tr>
																<th>Company</th>
																<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
																<th data-hide="phone,tablet">E-mail</th>
																<th data-hide="phone,tablet">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																	<td>John Walters</td>
																	<td>512-306-9021</td>
																	<td>Toffee</td>
																	<td>johnw@email.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Robert Elliott - Greystar</td>
																	<td>713-243-8217</td>
																	<td>Aurora</td>
																	<td>relliott@greystar.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Leeroy Ianski.</td>
																	<td>351-785-6552</td>
																	<td>Denver</td>
																	<td>lianski@freemail.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																
														</tbody>
													</table>
													</div>
												</div><div class="tab-pane col-lg-11" id="tab-r4">
												<div class="widget-body no-padding">
												<br>
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">

														<thead>			                
															<tr>
																<th>Company</th>
																<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
																<th data-hide="phone,tablet">E-mail</th>
																<th data-hide="phone,tablet">Actions</th>
															</tr>
														</thead>
														<tbody>
																<tr>
																	<td>Libbey Heywood, Inc.</td>
																	<td>561-528-5555</td>
																	<td>Hawaii</td>
																	<td>Engineering@libbeyh.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>Sandeep Patel - Sterling Engineering</td>
																	<td>281-583-7088</td>
																	<td>Texas</td>
																	<td>spatel@segoc.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
														</tbody>
													</table>
													</div>
												</div><div class="tab-pane col-lg-11" id="tab-r5">
												<div class="widget-body no-padding">
												<br>
												<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">

														<thead>			                
															<tr>
																<th>Company</th>
																<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
																<th data-hide="phone,tablet">E-mail</th>
																<th data-hide="phone,tablet">Actions</th>
															</tr>
														</thead>
														<tbody>
																<tr>
																	<td>Brad Waters - Jordan Foster Construction</td>
																	<td>210-375-1260</td>
																	<td>Dalas</td>
																	<td>bwaters@jordanfosterconstruction.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
																<tr>
																	<td>OTC Inc.</td>
																	<td>235-512-7055</td>
																	<td>Denver</td>
																	<td>email@otc.com</td>
																	<td><a href="#"><i class="fa fa-edit"></i></a>&nbsp; | <a href="#">&nbsp;<i class="fa fa-trash-o"></i></a></td>
																</tr>
														</tbody>
													</table>
													</div>
												</div>
											</div>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
						</article>
						<!-- WIDGET END -->

					<!-- end row -->
				
					<!-- end row -->
				
				</section>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Add Company</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Company name: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Company type: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<ul class="checkbox"> 
												  <li>
												  	<input type="checkbox" id="cb1" value="Owner" /><label for="cb1">Owner</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb2" value="Architect" /><label for="cb2">Architect</label>
												  </li> 
												  <li>
												 	<input type="checkbox" id="cb3" value="Structural/Engineer" /><label for="cb3">Structural/Engineer</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb4" value="General Contractor/Client" /><label for="cb4">General Contractor/Client</label>
												  </li>
												  <li>
												  	<input type="checkbox" id="cb5" value="SubContractor" /><label for="cb5">SubContractor</label>
												  </li>
											</ul> 
										</div>
									</div>
								</div>
								<br>
								<br>
								<br>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Locations:</h4>
										</div>
									</div>
									<div class="col-md-6">
										<a class="btn btn-default btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Add new location</a>
									</div>
								
							</div>
							<hr>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Location Name: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Phone:</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Address:</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>City, State:</h4>
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
							</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Add area: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<ul class="checkbox"> 
												  <li>
												  	<input type="checkbox" id="cb10" value="Colorado" /><label for="cb10">Colorado</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb11" value="Washington" /><label for="cb11">Washington</label>
												  </li> 
												  <li>
												 	<input type="checkbox" id="cb12" value="Hawaii" /><label for="cb12">Hawaii</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb13" value="South Texas" /><label for="cb13">South Texas</label>
												  </li>
												  <li>
												  	<input type="checkbox" id="cb14" value="Northern CA" /><label for="cb14"></label>Northern CA
												  </li>
												  <li>
												  	<input type="checkbox" id="cb14" value="Southern CA" /><label for="cb14"></label>Southern CA
												  </li>
											</ul> 
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button type="button" class="btn btn-primary">
									Add Company
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Add a new person</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>First name: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Last name: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Phone:</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>E-mail:</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4>Contact type: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<ul class="checkbox"> 
												  <li>
												  	<input type="checkbox" id="cb6" value="Preconstruction Contact" /><label for="cb6">Preconstruction Contact</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb7" value="Project contact" /><label for="cb7">Project contact</label>
												  </li> 
												  <li>
												 	<input type="checkbox" id="cb8" value="Engineering Contact" /><label for="cb8">Engineering Contact</label>
												  </li> 
												  <li>
												  	<input type="checkbox" id="cb9" value="Other" /><label for="cb9">Other</label>
												  </li> 
											</ul> 
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<h4> Company association: <sup>*</sup></h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required />
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>
								<button type="button" class="btn btn-primary">
									Add Person
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