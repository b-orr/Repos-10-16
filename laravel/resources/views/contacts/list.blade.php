
@include('includes._header')

@include('includes._menu_list')
	<!-- MAIN PANEL -->
		<style type="text/css">
		#demo-pill-nav {
			width: 18% !important;
		}

		#demo-pill-nav > li > a > input {
			width: 100% !important;
		}
	</style>
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
											 
													@foreach($persons AS $person)
													
														<tr>
															<td>{{ $person->first_name }} {{ $person->last_name }} - {{ @$person->company->name }}</td>
															<td>{{ $person->direct_line }}</td>
															<td> </td>
															<td>{{ $person->email }}</td>
															<td><a href="{{ url('/contacts/persons/'.$person->id.'/edit') }}"><i class="fa fa-edit"></i></a>&nbsp; |   
																	
																	
															
																	
																	
																	
																	
																	<form action="{{ url('/contacts/persons/'.$person->id) }}" method="POST"  style="display: inline;">
																	<a href="#" onclick="if(confirm('Are you sure?')){ $(this).parent().submit()}"> &nbsp;<i class="fa fa-trash-o"></i></a>
																	    {{ method_field('DELETE') }}
																	    {{ csrf_field() }}
																	 
																	</form>
																	
																	
																	 
																	
																	</td>
														</tr>
									 @endforeach
									 
									 @foreach($companies AS $company)
									 				
									 					<tr>
									 						<td>{{ $company->name }}</td>
									 						<td>{{ $company->phone }}</td>
									 						<td> {{ $company->zip }}</td>
									 						<td></td>
									 						</td>
									 								
									 								<td><a href="{{ url('/contacts/companies/'.$company->id.'/edit') }}"><i class="fa fa-edit"></i></a>&nbsp; |   
									 								
									 								
									 						
									 								
									 								
									 								
									 								
									 								<form action="{{ url('/contacts/companies/'.$company->id) }}" method="POST"  style="display: inline;">
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
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-2 pull-right">
						<div class="jarviswidget jarviswidget-color-darken" id="wd-id-2" data-widget-editbutton="false"
						data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false"
						data-widget-fullscreenbutton="false">
						<header>
							<h2 class="font-md">Actions</h2>
						</header>
							<div class="widget-body" style="display: flex;justify-content: center; flex-direction: column;">
								<div class="row col-lg-12" style="margin:0px;">
									<button class="btn btn-success form-control" data-target="#personModal" data-toggle="modal" id="myModalBtn">NEW PERSON</button>
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
					<form id="companyForm" action="{{ url('/contacts/companies/') }}" method="POST"  >
					
				    {{ csrf_field() }}
				    <span style="visibility: hidden;" id="methodFieldSpan">
				    </span>
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header txt-color-white" style="background-color: #313131; ">
								<button type="button" class="close txt-color-white" data-dismiss="modal" aria-hidden="true" id="closeCompanyModal">
									&times;
								</button>
								<h3 class="modal-title" id="myModalLabel"><b>Add Company</b></h3>
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
									<div class="col-md-5 col-md-offset-1">
										<div class="form-group">
											<h4><b>Company Name:</b></h4>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<input type="text" class="form-control" id="companyName" name="name" list="list" required />
											<datalist id="list">
												@foreach($companies as $key => $c)
													<option value="{{$c->name}}">{{$c->id}}</option>
												@endforeach
											</datalist>
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
											<select class="form-control" name="type" id="compCategory">
												<option value="Owner">Owner</option>
												<option value="Architect">Architect</option>
												<option value="Structural Engineer">Structural Engineer</option>
												<option value="Civil Engineer">Civil Engineer</option>
												<option value="Mechanical">Mechanical</option>
												<option value="Electricians">Electricians</option>
												<option value="General Contractor">General Contractor</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-md-offset-1">
										<div class="form-group">
											<h4><b>General Contractor/Client:</b></h4>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<input type="hidden" name="client_bool" value="0">
											<input style="position:relative;left: -45%" type="checkbox" class="form-control" name="client_bool" value="1" id="client_bool" />
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
										<a id="addNewLocation" class="btn btn-default btn-success btn-xs pull-right" style="margin: 5px 5px 2px 2px;"> Add New Location </a>
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
												
											</ul>
											<div class="tab-content locationsList">
											</div>
										</div>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" id="cancelComp" >
									Cancel
								</button>
								<button type="submit" class="btn btn-success">
									<b id="submitText">Add Company</b>
								</button>
							</div>

						</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
				</div>
				<div class="modal fade" id="personModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					
					
										<form action="{{ url('/contacts/persons/') }}" method="POST"  >
					
										    {{ csrf_field() }}
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header txt-color-white" style="background-color: #313131; ">
								<button type="button" class="close txt-color-white" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 class="modal-title" id="myModalLabel"><b>ADD PERSON</b></h3>
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
							
							
							<br>
								<div class="row no-margin">
									<div class="col-md-5">
										<div class="form-group">
											<h4><b>First Name:</b> <b><sup style="color: #FF0000;">*</sup></b></h4>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<input type="text" class="form-control" required name="first_name" />
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
											<input type="text" class="form-control" required name="last_name" />
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
											<input type="text" class="form-control" required name="email" />
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
											<input type="text" class="form-control" name="title" />
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
											<input type="text" class="form-control" name="direct_line" />
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
											<input type="text" class="form-control" name="cell_phone" />
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
											<select multiple name="company_association_1" id="pick_company" class="select2">
												@foreach($companies as $key => $val)
													<option value="{{$val->id}}|{{$val->name}}">{{$val->name}}</option>
												@endforeach
												
											</select>
											<input type="hidden" name="company_association" id="real_company_association">
											<!-- <input type="text" class="form-control" placeholder="Company Name" required name="company_association" /> -->
										</div>
									</div>
								</div>

								<div class="row no-margin hide" id="office_location_div">
								<div class="col-md-5">
									<div class="form-group">
										<h4><b>Office Location:</b></h4>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<select class="form-control" name="office_location" id="locations_dropdown">
												
										</select>
									</div>
								</div>
								</div>
								<!-- <div class="row no-margin">
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
								</div>-->
							</div>
							
							<div class="modal-footer">
								<a href="{{ url('/contacts/')}}" type="button" class="btn btn-default">
									CANCEL
								</a>
								<button type="submit" class="btn btn-success">
									<b> ADD PERSON </b>
								</button>
								</f>
							</div>
							</div>
						</div><!-- /.modal-content -->
					</div></form><!-- /.modal-dialog -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
		@include('includes._footer')
		<!-- END PAGE FOOTER -->
	
		<script>
			
		$(document).ready(function() {
			
			pageSetUp();
			var locationsCount = 1;
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

		    //ajax

		    $('#closeCompanyModal, #cancelComp').on('click', function() {
		    	$('#companyName').val('');
		    	$('#compCategory').val('Owner');
		    	$('#client_bool').attr('checked', false);
		    	$('#demo-pill-nav').empty();
		    	$('.locationsList').empty();
		    	$('#methodFieldSpan').empty();
		    })

		    $('.widget-body').on('change', '.cityInput', function() {
		    	var id = $(this).attr('dataid');
		    	$('#locationsInput-'+id).val($(this).val());
		    })

		    $("#companyName").on('change', function () {
			    var val = this.value;
			    
			   		$('#list option').filter(function() {
			   			if(this.value === val){
			   				var id = this.text;
							$.ajax({
								type: "GET",
								url: "contacts/person/getCompanyInfoAjax",
								data: {
									companyID: id
								},
								success: function(data) {
									var htmlstr = '<input type="hidden" name="company_id" value="'+data.companyInfo.id+'">';
									htmlstr += '<input type="hidden" name="_method" value="PUT">';
									$('#methodFieldSpan').empty().append(htmlstr);

									$('#compCategory').val(data.companyInfo.type);
									if(data.companyInfo.client_bool){
										$('#client_bool').attr('checked', true);
									}
									else{
										$('#client_bool').attr('checked', false);
									}
									var locationsCount = 0;
									$('.locationsList').empty();
									$('#demo-pill-nav').empty();

									$('#submitText').text('Save');
									for(var i=0;i<data.locationsInfo.length; i++){
										var m = data.locationsInfo[i];
										var buttonHtml = '<li class="active">';
											buttonHtml +=	'<a href="#tab-o'+locationsCount+'" data-toggle="tab"><input type="text" name="locations['+locationsCount+'][location_name]" id="locationsInput-'+locationsCount+'" value="'+m.location_name+'" dataID="'+locationsCount+'"></a>';
											buttonHtml +='</li>';

										$('#demo-pill-nav li').removeClass('active');
										$('.tab-pane').removeClass('active');
										$('#demo-pill-nav').append(buttonHtml);

										var htmlstr =	'<div class="tab-pane active col-lg-11" id="tab-o'+locationsCount+'">';
										htmlstr += '<input type="hidden" value="'+m.id+'" name="locations['+locationsCount+'][id]">';
										htmlstr +=	'	<div class="row">';
										htmlstr +=	'		<div class="col-md-4">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<h6>Phone:</h6>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-8">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<input type="text" class="form-control" name="locations['+locationsCount+'][phone]" value="'+m.phone+'" />';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'	</div>';
										htmlstr +=	'	<div class="row">';
										htmlstr +=	'		<div class="col-md-4">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<h6>Address:</h6>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-8">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<input type="text" class="form-control" name="locations['+locationsCount+'][address]" value="'+m.address+'" />';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'	</div>';
										htmlstr +=	'	<div class="row">';
										htmlstr +=	'		<div class="col-md-4">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<h6>City, State & Zip:</h6>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-4">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<input type="text" class="form-control cityInput" name="locations['+locationsCount+'][city]" value="'+m.city+'" dataID="'+locationsCount+'" />';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-2">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<select class="form-control" id="category" name="locations['+locationsCount+'][state]">';
										for(var s=0; s<data.states.length; s++){
											htmlstr += '<option value="'+data.states[s].abbrv+'">'+data.states[s].abbrv+'</option>';
										}
										htmlstr +=	'				</select>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-2">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<input type="text" class="form-control" name="locations['+locationsCount+'][zip]" value="'+m.zip+'" />';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'	</div>';
										htmlstr +=	'	<div class="row">';
										htmlstr +=	'		<div class="col-md-4">';
										htmlstr +=	'			<div class="form-group">';
										htmlstr +=	'				<h6>Area Association:</h6>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=	'		<div class="col-md-8">';
										htmlstr +=	'			<div class="form-group" style="border-style: groove; border-width: 2px;">';
										htmlstr +=	'				<select multiple style="width:100%" class="select2" name="locations['+locationsCount+'][areas][]" id="areas-'+locationsCount+'">';
										var res = m.areas.split(', ');
										for(var x = 0; x<data.regions.length; x++){
											var r = data.regions[x];
											var found = 0;
											for(var y = 0; y<res.length; y++){
												if(res[y] == r.id){
													found = 1;
												}
											}
											if(found == 1){
												htmlstr +=	'			<option selected="selected" value="'+r.id+'">'+r.name+'</option>';
											}
											else {
												htmlstr +=	'			<option value="'+r.id+'">'+r.name+'</option>';
											}
										}
										htmlstr +=	'						</select>';
										htmlstr +=	'			</div>';
										htmlstr +=	'		</div>';
										htmlstr +=		'</div>';
										htmlstr +=	'</div>';
										$('.locationsList').append(htmlstr);
										$('#areas-'+locationsCount).select2();
										locationsCount++;
										locationsCount++;
									}

								}
							})
			   			}
			   			else {
			   				$('#methodFieldSpan').empty();
			   				$('#demo-pill-nav').empty();
			   				$('.locationsList').empty();
			   			}
			   		})
			    
			});

		    $('#pick_company').on('change', function(){
		    	
				
		    	var id = $('#pick_company').val();
		    	$('#real_company_association').val(id);
		    	$('#pick_company').val([]);
		    	if(id === null) {
		    		id = '';
		    	}
		    	$.ajaxSetup({
			            headers: {
			                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			            }
			        });

		    	$.ajax({
			    		type: "GET",
            			url: "contacts/persons/getLocationAjax",
            			data: {
            				companyID: id
            				//subcategory: sub
            			}
			    		, 
				    	success : function(data) {
				    		//console.log(data);
		    				$('#office_location_div').removeClass('hide');
		    				$('#locations_dropdown').empty();
				    		var htmlstr = "<option value='#'>Not selected</option>";
			    				
			    				for (var m = 0; m < data.locations.length; m++) {
			    					htmlstr += "<option value='"+data.locations[m].id +"'>"+ data.locations[m].location_name +"</option>";

			    				}

				    		$('#locations_dropdown').append(htmlstr);

		   				}
				});
			});

			$('#addNewLocation').on('click', function() {
				
				$.ajax({
					type: "GET",
					url: "contacts/company/getRegions",
					success : function(data) {
						var buttonHtml = '<li class="active">';
							buttonHtml +=	'<a href="#tab-o'+locationsCount+'" data-toggle="tab"><input type="text" name="newlocations['+locationsCount+'][location_name]" id="locationsInput-'+locationsCount+'" value="New Location" dataID="'+locationsCount+'"></a>';
							buttonHtml +='</li>';

						$('#demo-pill-nav li').removeClass('active');
						$('.tab-pane').removeClass('active');
						$('#demo-pill-nav').append(buttonHtml);
						var htmlstr =	'<div class="tab-pane active col-lg-11" id="tab-o'+locationsCount+'">';
							
							htmlstr +=	'	<div class="row">';
							htmlstr +=	'		<div class="col-md-4">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<h6>Phone:</h6>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-8">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<input type="text" class="form-control" name="newlocations['+locationsCount+'][phone]" />';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'	</div>';
							htmlstr +=	'	<div class="row">';
							htmlstr +=	'		<div class="col-md-4">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<h6>Address:</h6>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-8">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<input type="text" class="form-control" name="newlocations['+locationsCount+'][address]" />';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'	</div>';
							htmlstr +=	'	<div class="row">';
							htmlstr +=	'		<div class="col-md-4">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<h6>City, State & Zip:</h6>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-4">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<input type="text" class="form-control cityInput" name="newlocations['+locationsCount+'][city]" dataID="'+locationsCount+'" />';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-2">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<select class="form-control" id="category" name="newlocations['+locationsCount+'][state]">';
							htmlstr +=	'	                <option value="AL">AL</option>';
			                htmlstr +=	'                    <option value="AK">AK</option>';
			                htmlstr +=	'                    <option value="AS">AS</option>';
			                htmlstr +=	'                    <option value="AZ">AZ</option>';
			                htmlstr +=	'                    <option value="AR">AR</option>';
			                htmlstr +=	'                    <option value="CA">CA</option>';
			                htmlstr +=	'                    <option value="CO">CO</option>';
			                htmlstr +=	'                    <option value="CT">CT</option>';
			                htmlstr +=	'                    <option value="DE">DE</option>';
			                htmlstr +=	'                    <option value="DC">DC</option>';
			                htmlstr +=	'                    <option value="FL">FL</option>';
			                htmlstr +=	'                    <option value="GA">GA</option>';
			                htmlstr +=	'                    <option value="GU">GU</option>';
			                htmlstr +=	'                    <option value="HI">HI</option>';
			                htmlstr +=	'                    <option value="ID">ID</option>';
			                htmlstr +=	'                    <option value="IL">IL</option>';
			                htmlstr +=	'                    <option value="IN">IN</option>';
			                htmlstr +=	'                    <option value="IA">IA</option>';
			                htmlstr +=	'                    <option value="KS">KS</option>';
			                htmlstr +=	'                    <option value="KY">KY</option>';
			                htmlstr +=	'                    <option value="LA">LA</option>';
			                htmlstr +=	'                    <option value="ME">ME</option>';
			                htmlstr +=	'                    <option value="MD">MD</option>';
			                htmlstr +=	'                    <option value="MH">MH</option>';
			                htmlstr +=	'                    <option value="MA">MA</option>';
			                htmlstr +=	'                    <option value="MI">MI</option>';
			                htmlstr +=	'                    <option value="FM">FM</option>';
			                htmlstr +=	'                    <option value="MN">MN</option>';
			                htmlstr +=	'                    <option value="MS">MS</option>';
			                htmlstr +=	'                    <option value="MO">MO</option>';
			                htmlstr +=	'                    <option value="MT">MT</option>';
			                htmlstr +=	'                    <option value="NE">NE</option>';
			                htmlstr +=	'                    <option value="NV">NV</option>';
			                htmlstr +=	'                    <option value="NH">NH</option>';
			                htmlstr +=	'                    <option value="NJ">NJ</option>';
			                htmlstr +=	'                    <option value="NM">NM</option>';
			                htmlstr +=	'                    <option value="NY">NY</option>';
			                htmlstr +=	'                    <option value="NC">NC</option>';
			                htmlstr +=	'                    <option value="ND">ND</option>';
			                htmlstr +=	'                    <option value="MP">MP</option>';
			                htmlstr +=	'                    <option value="OH">OH</option>';
			                htmlstr +=	'                    <option value="OK">OK</option>';
			                htmlstr +=	'                    <option value="OR">OR</option>';
			                htmlstr +=	'                    <option value="PW">PW</option>';
			                htmlstr +=	'                    <option value="PA">PA</option>';
			                htmlstr +=	'                    <option value="PR">PR</option>';
			                htmlstr +=	'                    <option value="RI">RI</option>';
			                htmlstr +=	'                    <option value="SC">SC</option>';
			                htmlstr +=	'                    <option value="SD">SD</option>';
			                htmlstr +=	'                    <option value="TN">TN</option>';
			                htmlstr +=	'                    <option value="TX">TX</option>';
			                htmlstr +=	'                    <option value="UT">UT</option>';
			                htmlstr +=	'                    <option value="VT">VT</option>';
			                htmlstr +=	'                    <option value="VA">VA</option>';
			                htmlstr +=	'                    <option value="VI">VI</option>';
			                htmlstr +=	'                    <option value="WA">WA</option>';
			                htmlstr +=	'                    <option value="WV">WV</option>';
			                htmlstr +=	'                    <option value="WI">WI</option>';
			                htmlstr +=	'                    <option value="WY">WY</option>';
							htmlstr +=	'				</select>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-2">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<input type="text" class="form-control" name="newlocations['+locationsCount+'][zip]" />';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'	</div>';
							htmlstr +=	'	<div class="row">';
							htmlstr +=	'		<div class="col-md-4">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<h6>Area Association:</h6>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=	'		<div class="col-md-8">';
							htmlstr +=	'			<div class="form-group">';
							htmlstr +=	'				<select multiple style="width:100%" class="select2" name="newlocations['+locationsCount+'][areas][]" id="areas-'+locationsCount+'">';
							for(var x = 0; x<data.regions.length; x++){
								var r = data.regions[x];
								htmlstr +=	'								<option value="'+r.id+'">'+r.name+'</option>';
							}
							htmlstr +=	'						</select>';
							htmlstr +=	'			</div>';
							htmlstr +=	'		</div>';
							htmlstr +=		'</div>';
							htmlstr +=	'</div>';
							$('.locationsList').append(htmlstr);
							$('#areas-'+locationsCount).select2();
							locationsCount++;
					}
				})
				
			})
		})
		</script>


		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
	 


@if (count($errors) > 0)
 $('#myModalBtn').click();
@endif
		</script>

	</body>

</html>