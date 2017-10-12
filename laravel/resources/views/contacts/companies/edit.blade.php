
@include('includes._header')
@include('includes._menu_list')

<style type="text/css">
		#demo-pill-nav {
			width: 18% !important;
		}

		#demo-pill-nav > li > a > input {
			width: 100% !important;
		}
	</style>
 

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
																										<h4><b>Companasdy Type:</b></h4>
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
																									<a id="addNewLocation" class="btn btn-default btn-success btn-xs pull-right" style="margin: 5px 5px 2px 2px;"> NEW LOCATION </a>
																							</header>
																			
																							<!-- widget div-->
																							<div class="widget-body">
																								
																							<div class="tabs-left">
																								
																									
																								<ul class="nav nav-tabs tabs-left" id="demo-pill-nav">
																								@foreach($locations as $key => $val)
																									<?php $key++ ?>
																									<li class="@if($key == 1) active @endif">
																										<a href="#tab-{{$key}}" data-toggle="tab"><input type="text" name="locations[{{$key}}][location_name]" id="" value="{{ $val->location_name}}" dataID=""></a>
																									</li>
																								@endforeach
																								
																									<input id="locationsCount" type="hidden" value="{{ ++$key }}">																									
																								
																								
																								</ul>
																								
																								<!--tabs-->
																										<div class="tab-content locationsList">
																										<div class="col-lg-1 col-ld-1 col-sm-1"></div>

																										@foreach($locations as $key => $val)
																										<?php $key++ ?>
																									<div class="tab-pane  col-lg-8 @if($key == 1) active @endif" id="tab-{{$key}}">
																										<input type="hidden" value="{{$val->id}}" name="locations[{{$key}}][id]">
																											<div class="row">
																												<div class="col-md-4">
																													<div class="form-group">
																														<h6>Phone:</h6>
																													</div>
																												</div>
																												<div class="col-md-8">
																													<div class="form-group">
																														<input type="text" class="form-control" name="locations[{{$key}}][phone]" value="{{ $val->phone }}" />
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
																														<input type="text" class="form-control" name="locations[{{$key}}][address]" value="{{ $val->address }}" />
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
																														<input type="text" class="form-control cityInput" name="locations[{{$key}}][city]" value="{{ $val->city }}" dataID="" />
																													</div>
																												</div>
																												
																												<div class="col-md-2">
																													<div class="form-group">
																														<select class="form-control" id="category" name="locations[{{$key}}][state]">
																															@foreach($states as $key1 => $val1)
																																<option value="{{$val1->abbrv}}" @if($val1->abbrv == $val->state) selected @endif>{{$val1->state}}</option>
																															@endforeach
																														</select>
																													</div>
																												</div>
																												<div class="col-md-2">
																													<div class="form-group">
																														<input type="text" class="form-control" name="locations[{{$key}}][zip]" value="{{ $val->zip }}" />
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
																								@endforeach
																								</div>
			

																								<!--tabs-->
																							</div>
																							</div>
																							
																							
																							
																							
																							<!-- end widget div-->
																		<div class="modal-footer">
																			 
																			 <button type="button" class="btn btn-default" onclick="window.location='{{url('admin/users')}}'">
																			 	Cancel
																			 </button>
																			<button type="submit" class="btn btn-primary">
																				Save
																			</button>
															  				<br><br>
																	
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

		$('.widget-body').on('change', '.cityInput', function() {
		    	var id = $(this).attr('dataid');
		    	console.log(id);
		    	$('#locationsInput-'+id).val($(this).val());
		    })

		$('#addNewLocation').on('click', function() {
				var locationsCount = parseInt($('#locationsCount').val(),10);
				
				var buttonHtml = '<li class="active">';
					buttonHtml +=	'<a href="#tab-o'+locationsCount+'" data-toggle="tab"><input type="text" name="newlocations['+locationsCount+'][location_name]" id="locationsInput-'+locationsCount+'" value="New Location" dataID="'+locationsCount+'"></a>';
					buttonHtml +='</li>';

				$('#demo-pill-nav li').removeClass('active');
				$('.tab-pane').removeClass('active');
				$('#demo-pill-nav').append(buttonHtml);

			
			var htmlstr =	'<div class="tab-pane active col-lg-8" id="tab-o'+locationsCount+'">';
				
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
				htmlstr +=	'			<div class="form-group" style="border-style: groove; border-width: 2px;">';
				htmlstr +=	'				<ul class="checkbox">';
				htmlstr +=	' 					 <li>';
				htmlstr +=	'  						<input type="checkbox" id="cb10" value="Colorado" /><label for="cb10"><b>Colorado</b></label>';
				htmlstr +=	'  					</li> ';
				htmlstr +=	' 					 <li>';
				htmlstr +=	'  						<input type="checkbox" id="cb11" value="Washington" /><label for="cb11"><b>Washington</b></label>';
				htmlstr +=	'  					</li> ';
				htmlstr +=	'  					<li>';
				htmlstr +=	' 						<input type="checkbox" id="cb12" value="Hawaii" /><label for="cb12"><b>Hawaii</b></label>';
				htmlstr +=	' 					</li> ';
				htmlstr +=	'  					<li>';
				htmlstr +=	'  						<input type="checkbox" id="cb13" value="South Texas" /><label for="cb13"><b>South Texas</b></label>';
				htmlstr +=	'  					</li>';
				htmlstr +=	'  					<li>';
				htmlstr +=	'  						<input type="checkbox" id="cb14" value="Northern CA" /><label for="cb14"><b>Northern CA</b></label>';
				htmlstr +=	'  					</li>';
				htmlstr +=	'  					<li>';
				htmlstr +=	'  						<input type="checkbox" id="cb14" value="Southern CA" /><label for="cb14"><b>Southern CA</b></label>';
				htmlstr +=	'  					</li>';
				htmlstr +=	'				</ul>';
				htmlstr +=	'			</div>';
				htmlstr +=	'		</div>';
				htmlstr +=		'</div>';
				htmlstr +=	'</div>';
				$('.locationsList').append(htmlstr);
				locationsCount = locationsCount + 1;
				$('#locationsCount').val(locationsCount);
				locationsCount++;
			})

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