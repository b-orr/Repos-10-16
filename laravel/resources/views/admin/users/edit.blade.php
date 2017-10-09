
@include('includes._header')
@include('includes._menu_admin')


 

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
					<li>Admin</li><li>User</li><li>User Edit</li>
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
											<h2>User Edit</h2>
										</header>
										<div class="row">
											<div class="widget-body">
												<form   role="form" method="POST"   action="{{ url('/admin/users/' . $list->id) }}">
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
																					<div class="col-md-6">
																						<div class="form-group">
																							<h4>Title: <b><sup style="color: #FF0000;">*</sup></b></h4>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<input type="text" class="form-control" name="title" value="{{ $list->title }}" required />
																						</div>
																					</div>
																				</div>
																				{!! $fields->appendFieldPlaceholder($user->fields(), 'modal1', $list->extraValue ) !!}
																				<div class="row">
																					<div class="col-md-6">
																						<div class="form-group">
																							<h4>First Name: <b><sup style="color: #FF0000;">*</sup></b></h4>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<input type="text" class="form-control" name="name" value="{{ $list->name }}" required />
																						</div>
																					</div>
																				</div>
																				{!! $fields->appendFieldPlaceholder($user->fields(), 'modal1', $list->extraValue) !!}
																				<div class="row">
																					<div class="col-md-6">
																						<div class="form-group">
																							<h4>Last Name: <b><sup style="color: #FF0000;">*</sup></b></h4>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<input type="text" class="form-control" name="last_name" value="{{ $list->last_name }}" required />
																						</div>
																					</div>
																				</div>
																				{!! $fields->appendFieldPlaceholder($user->fields(), 'modal1', $list->extraValue) !!}
																			<hr>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<h4>Add region: <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group" style="border-style: groove; border-width: 2px;">
																						<ul class="checkbox"> 
																						
																						
																						@foreach ($regions as $region)
																						    <li>
																						    	<input type="radio" name="region_id" id="cb{{ $region->id }}" {{ $list->region_id==$region->id?'checked':'' }} value="{{ $region->id }}" /><label for="cb{{ $region->id }}">{{ $region->name }}</label>
																						    </li> 
																						@endforeach
																						
																						
																						
																					 
																						</ul> 
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<h4>Add Group: <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group" style="border-style: groove; border-width: 2px;">
																						<ul class="checkbox"> 
					<li>
						@foreach($tenant->groups as $val) 
						<input type="radio" id="group_{{ $val->id }}" name="group_id" value="{{ $val->id }}" {{ $list->group_id==$val->id?'checked':'' }} />
						<label for="group_{{ $val->id }}">{{ $val->name }}</label><br />
						@endforeach
					</li> 
																							 
																						</ul> 
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<h4>Add role: <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group" style="border-style: groove; border-width: 2px;">
																						<ul class="checkbox"> 
																							<li>
																								<input type="radio" name="role" id="cb17" {{ $list->role=="Project Manager"?'checked':'' }} value="Project Manager" checked /><label for="cb17">Project Manager</label>
																							</li> 
																							<li>
																								<input type="radio" name="role" id="cb18" {{ $list->role=="OP Manager"?'checked':'' }} value="OP Manager" /><label for="cb18">OP Manager</label>
																							</li> 
																							<li>
																								<input type="radio" name="role" id="cb19" {{ $list->role=="Engineer"?'checked':'' }} value="Engineer" /><label for="cb19">Engineer</label>
																							</li> 
																							<li>
																								 <input type="radio" name="role" id="cb20" {{ $list->role=="Estimator"?'checked':'' }} value="Estimator" /><label for="cb20">Estimator</label>
																							</li>
																							<li>
																								<input type="radio" name="role" id="cb21" {{ $list->role=="Superintendent"?'checked':'' }} value="Superintendent" /><label for="cb21">Superintendent</label>
																							</li>
																							<li>
																								<input type="radio" name="role" id="cb22" {{ $list->role=="Safety"?'checked':'' }} value="Safety" /><label for="cb22">Safety</label>
																							</li>
																						</ul> 
																					</div>
																				</div>
																			</div>
																			<hr>
																			 
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<h4>E-mail: <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<input type="text" name="email" class="form-control" value="{{ $list->email }}" required />
																					</div>
																				</div>
																			</div>
																			
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<h4>Password: <b><sup style="color: #FF0000;">*</sup></b></h4>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<input type="password" name="password" class="form-control"   />
																					</div>
																				</div>
																			</div>
																			 
																			<hr>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<ul class="checkbox"> 
																							<li>
																							<input type="hidden" name="active" value="0" />
																								<input type="checkbox" name="active" {{ $list->active=="1"?'checked':'' }} id="cb22" value="1" /><h5>Active/InActive</h5>
																							</li> 
																						 
																						</ul>
																					</div>
																				</div>
																			</div>
																		 
																		</div>
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
												<button type="button" onclick="window.location='{{url('admin/users')}}'" class="btn btn-success btn-block">
													Return to users list
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
{!! $fields->appendFieldModal($user->fields) !!}
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