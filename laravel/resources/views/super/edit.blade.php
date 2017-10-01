
@include('includes._header_super')
@include('includes._menu_super')


 

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
					<li>Super</li><li>Company Edit</li>
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
											<h2>Company Edit</h2>
										</header>
										<div class="row">
											<div class="widget-body">
												<form   role="form" method="POST"   action="{{ url('/super/' . $user->id) }}">
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
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Company Name</label>
																						<input type="text" name="company" value="{{ $user->company }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Phone</label>
																						<input type="text" name="phone1" value="{{ $user->phone1 }}" class="form-control">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Address</label>
																						<input type="text" name="address" value="{{ $user->address }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold; display: block;">City & State</label>
																						<div class="col-lg-8 no-padding">
																							
																							<input type="text" name="city" value="{{ $user->city }}" class="form-control">
																						</div>
																						<div class="col-lg-offset-1 col-lg-3 no-padding">
																							<select name="state" class="form-control">
																								<option>GA</option>
																								<option>GA</option>
																								<option>GA</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input"  style="font-weight: bold;">ZIP</label>
																						<input type="text" name="zip" value="{{ $user->zip }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div>
																				<strong>
																					<legend>Company Admin Info</legend>
																				</strong>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">First Name</label>
																						<input type="text" name="name" value="{{ $user->name }}" class="form-control">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Last Name</label>
																						<input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">E-mail</label>
																						<input type="text" name="email" value="{{ $user->email }}" readonly class="form-control">
																					</div>
																				</div>
																				<!-- <div class="col-md-6">
																					<div class="form-group">
																						<label class="col-md-4 control-label" style="position:relative;font-weight: bold;top:5px;">Multiple Region</label>
																						<div class="col-md-2">
																							<input type="hidden" value="0" name="multiple_region">
																							<input type="checkbox" value="1" class="form-control" name="multiple_region" @if($user->multiple_region == '1') checked @endif/>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-6"></div> -->
																		 
																			<!--	<div class="col-md-6">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">New Password</label>
																						<input type="password" name="password"   class="form-control">
																					</div>
																				</div>-->
																		 
																			<div style="padding: 15px;">
																				<strong>
																					<legend>Modules</legend>
																				</strong>
																			</div>
																			<div class="row">
																				<div class="col-md-12 col-lg-12"><div style="padding: 15px;">
																					<table class="table table-bordered table-striped" style="width: 100%;  ;">
																						<tr>
																							<td>Equipment</td>
																							<td id="switch-1" style="width:20%; text-align: center;">
																										<span class="onoffswitch">
																											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1">
																											<label class="onoffswitch-label" for="myonoffswitch1"> 
																									<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																									<span class="onoffswitch-switch"></span> </label> 
																									</span>
																									</td>
																							<td>HR</td>
												
																							<td id="switch-1" style="width:20%; text-align: center;">
																										<span class="onoffswitch">
																											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
																											<label class="onoffswitch-label" for="myonoffswitch2"> 
																									<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																									<span class="onoffswitch-switch"></span> </label> 
																									</span></td>
																						</tr>
																						<tr>
																							<td>CRM</td>
																							<td id="switch-1" style="width:20%; text-align: center;">
																										<span class="onoffswitch">
																											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3">
																											<label class="onoffswitch-label" for="myonoffswitch3"> 
																									<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																									<span class="onoffswitch-switch"></span> </label> 
																									</span></td>
																							<td>Analytics</td>
																							<td id="switch-1" style="width:20%; text-align: center;">
																										<span class="onoffswitch">
																											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4">
																											<label class="onoffswitch-label" for="myonoffswitch4"> 
																									<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																									<span class="onoffswitch-switch"></span> </label> 
																									</span></td>
																						</tr>
																					</table>
																				</div></div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			 
																			 <button type="button" class="btn btn-default" onclick="window.location='{{url('super')}}'">
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
												<button type="button" onclick="window.location='{{url('super')}}'" class="btn btn-success btn-block">
													Return to super home
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