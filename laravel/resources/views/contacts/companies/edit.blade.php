
@include('includes._header')
@include('includes._menu_list')


 

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
					<li>Contacts</li><li>Persons</li><li>Person Edit</li>
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
				
				
					<div class="row">
							<div class="col-sm-12">
								<article class="col-lg-10">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>
										<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
											<h2>Persons Edit</h2>
										</header>
										<div class="row">
											<div class="widget-body">
												<form   role="form" method="POST"   action="{{ url('/contacts/companies/' . $company->id) }}">
																{{ csrf_field() }}
																
																{{ method_field('PUT') }}
																
																	 
																			
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
																								<div class="col-md-5 col-md-offset-1">
																									<div class="form-group">
																										<h4><b>Company Name:</b></h4>
																									</div>
																								</div>
																								<div class="col-md-5">
																									<div class="form-group">
																										<input type="text" class="form-control" name="name" required value="{{ $company->name }}"/>
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
																										<select class="form-control" name="type" id="category" >
																											<option {{ $company->type=='Owner'?'selected':'' }} >Owner</option>
																											<option {{ $company->type=='Architect'?'selected':'' }} >Architect</option>
																											<option {{ $company->type=='Structural/Engineer'?'selected':'' }} >Structural/Engineer</option>
																											<option {{ $company->type=='SubContractor'?'selected':'' }} >SubContractor</option>
																										</select>
																									</div>
																								</div>
																							</div>
																							<div class="row">
																								<div class="col-md-5 col-md-offset-1">
																									<div class="form-group">
																										<h4><b>General Contractor\Client:</b></h4>
																									</div>
																								</div>
																								<div class="col-md-5">
																									<div class="form-group">
																										<input type="hidden" value="0" name="client_bool">
																										<input style="position:relative;left: -47%" type="checkbox" value="1" class="form-control" name="client_bool" @if($company->client_bool == '1') checked @endif/>
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
																									<!--	<ul class="nav nav-tabs tabs-left" id="demo-pill-nav" >
																											<li class="active">
																												<a href="#tab-o1" data-toggle="tab">Honolulu Office</a>
																											</li>
																											<li>
																												<a href="#tab-o2" data-toggle="tab">Seattle Office</a>
																											</li>
																											<li>
																												<a href="#tab-o3" data-toggle="tab">Denver Office</a>
																											</li>
																										</ul>-->
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
																																<input type="text" class="form-control" name="location_name"   value="{{ $company->location_name }}"/>
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
																															<input type="text" class="form-control" name="phone"  value="{{ $company->phone }}"/>
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
																															<input type="text" class="form-control" name="address"  value="{{ $company->address }}"/>
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
																															<input type="text" class="form-control" name="city"  value="{{ $company->city }}"/>
																														</div>
																													</div>
																													<div class="col-md-2">
																														<div class="form-group">
																															<select class="form-control" id="category" name="state">
																																<option {{ $company->state=='CO'?'selected':'' }} >CO</option>
																																<option {{ $company->state=='WA'?'selected':'' }} >WA</option>
																																<option {{ $company->state=='HW'?'selected':'' }} >HW</option>
																																<option {{ $company->state=='N.CA'?'selected':'' }} >N.CA</option>
																																<option {{ $company->state=='NV'?'selected':'' }} >NV</option>
																																<option {{ $company->state=='S.C'?'selected':'' }} >S.CA</option>
																																<option {{ $company->state=='OR'?'selected':'' }} >OR</option>
																																<option {{ $company->state=='TX'?'selected':'' }} >TX</option>
																																<option {{ $company->state=='CA'?'selected':'' }} >CA</option>
																															</select>
																														</div>
																													</div>
																													<div class="col-md-2">
																														<div class="form-group">
																															<input type="text" class="form-control" name="zip"  value="{{ $company->zip }}"/>
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
																											 
																											 
																										</div>
																									</div>
																								</div></div>
																		<div class="modal-footer">
																			 
																			 <button type="button" class="btn btn-default" onclick="window.location='{{url('admin/users')}}'">
																			 	Cancel
																			 </button>
																			<button type="submit" class="btn btn-primary"   >
																				Save
																			</button>
															  
																	
																	</form>
					
											</div>
											<br>
										</div>
									</div>
								</article>
								<article class="col-lg-2">
									<div class="jarviswidget jarviswidget-color-darken" id="wid-id-22" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
										<header>
										<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
											
										</header>
										<div class="row">
											<div class="widget-body">
												<button type="button" onclick="window.location='{{url('contacts')}}'" class="btn btn-success btn-block">
													Return to contacts list
												</button>
											</div>
											<br>
										</div>
									</div>
								</article>
							</div>
						</div>
				
				
				</section>
				<!-- end widget grid -->
					<!-- end widget grid -->
				<!-- /.modal -->

			</div>
			<!-- END MAIN CONTENT -->
 
		</div>
		<!-- END MAIN PANEL -->


@include('includes._footer')


 

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
		 		});

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		 

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
 


@if (count($errors) > 0)
 $('#myModalBtn').click();
@endif
		</script>

	</body>

</html>