
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
												<form   role="form" method="POST"   action="{{ url('/contacts/persons/' . $person->id) }}">
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
																			
																			<div class="row no-margin">
																				<div class="col-md-5">
																					<div class="form-group">
																						<h4><b>First Name:</b> <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-7">
																					<div class="form-group">
																						<input type="text" class="form-control" required name="first_name" value="{{ $person->first_name }}" />
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
																						<input type="text" class="form-control" required name="last_name"  value="{{ $person->last_name }}" />
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
																						<input type="text" class="form-control" required name="email" value="{{ $person->email }}"  />
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
																						<input type="text" class="form-control" name="title"  value="{{ $person->title }}" />
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
																						<input type="text" class="form-control" name="direct_line" value="{{ $person->direct_line }}"  />
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
																						<input type="text" class="form-control" name="cell_phone"  value="{{ $person->cell_phone }}" />
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
																						<select multiple name="company_association_1" id="pick_company" class="select2" >
																							@foreach($companies as $key => $val)
																								<option value="{{$val->id}}" @if($val->id == $person->company_association) selected @endif>{{$val->name}}</option>
																							@endforeach
																							<input type="hidden" name="company_association" id="real_company_association" value="{{$person->company_association}}">																							
																						</select>
																						<!-- <input type="text" class="form-control" placeholder="Company Name" required name="company_association" value="{{ $person->company_association }}"  /> -->
																					</div>
																				</div>
																			</div>
																			<div class="row no-margin" id="office_location_div">
																			<div class="col-md-5">
																				<div class="form-group">
																					<h4><b>Office Location:</b></h4>
																				</div>
																			</div>
																			<div class="col-md-7">
																				<div class="form-group">

																					<select class="form-control" name="office_location" id="locations_dropdown">
																						
																						@foreach($locations as $key => $val)

																							<option value="{{$val->id}}" @if($val->id == $location->id) selected @endif>{{$val->location_name}}</option>
																						
																						@endforeach
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
																			</div>
																			</div> -->
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

		 $('#pick_company').on('change', function(){
		    	
				
		    	var id = $('#pick_company').val();
		    	$('#real_company_association').val(id);
		    	//$('#pick_company').val([]);
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
            			url: "getLocationAjaxEdit",
            			data: {
            				companyID: id
            				//subcategory: sub
            			}
			    		, 
				    	success : function(data) {
				    		
		    				//$('#office_location_div').removeClass('hide');
		    				$('#pick_company').empty();
		    				$('#locations_dropdown').empty();
		    				console.log(data);
		    				var htmlstr_company;
		    				for (var k = 0; k < data.companies.length; k++) {
			    					htmlstr_company += "<option value='"+data.companies[k].id+"'>"+ data.companies[k].name +"</option>";

			    				}

				    		var htmlstr = "<option value='#'>Not selected</option>";
			    				
			    				for (var m = 0; m < data.locations.length; m++) {
			    					htmlstr += "<option value='"+data.locations[m].id+"'>"+ data.locations[m].location_name +"</option>";

			    				}

			    			$('#pick_company').append(htmlstr_company)
				    		$('#locations_dropdown').append(htmlstr);

		   				}
				});
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