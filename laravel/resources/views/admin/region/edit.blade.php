
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
					<li>Admin</li><li>Region</li><li>Region Edit</li>
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
											<h2>Region Edit</h2>
										</header>
										<div class="row">
											<div class="widget-body">
												<form   role="form" method="POST"   action="{{ url('/admin/regions/' . $region->id) }}">
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
																						<label class="input" style="font-weight: bold;">Area Location</label>
																						<input type="text" name="name" value="{{ $region->name }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Area Address</label>
																						<input type="text" name="address" value="{{ $region->address }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">City</label>
																						<input type="text" name="city" value="{{ $region->city }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">State</label>
																						 <select name="state" id="" class="form-control location" style="">
												                                           	<option  style="">[Select One]</option>
												                                           	<option {{ $region->state=='CA'?'selected':'' }}  style="color: rgb(0, 0, 0);">CA</option>
												                                           	<option {{ $region->state=='CO'?'selected':'' }}   style="color: rgb(0, 0, 0);">CO</option>
												                                           	<option {{ $region->state=='HI'?'selected':'' }}   style="color: rgb(0, 0, 0);">HI</option>
												                                           	<option {{ $region->state=='NCA'?'selected':'' }}   style="color: rgb(0, 0, 0);">NCA</option>
												                                           	<option {{ $region->state=='NV'?'selected':'' }}   style="color: rgb(0, 0, 0);">NV</option>
												                                           	<option {{ $region->state=='OR'?'selected':'' }}  style="color: rgb(0, 0, 0);">OR</option>
												                                           	<option {{ $region->state=='SCA'?'selected':'' }}   style="color: rgb(0, 0, 0);">SCA</option>
												                                           	<option {{ $region->state=='TX'?'selected':'' }}   style="color: rgb(0, 0, 0);">TX</option>
												                                           	<option {{ $region->state=='WA'?'selected':'' }}   style="color: rgb(0, 0, 0);">WA</option>
												                                           
												                                        </select>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label class="input" style="font-weight: bold;">Phone</label>
																						<input type="text" name="phone" value="{{ $region->phone }}" class="form-control">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																			<div class="col-md-5">
																				<div class="form-group">
																					<h4>Yard Toggle Switch: <sup>*</sup></h4>
																				</div>
																			</div>
																			<div class="col-md-7">
																				<div class="form-group">
																					<input type="hidden" value="0" name="yard_toggle_switch" class="form-control" />
																					<input type="checkbox" value="1" name="yard_toggle_switch" class="form-control" @if($region->yard_toggle_switch == '1') checked @endif />
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-5">
																				<div class="form-group">
																					<h4>Active: <sup>*</sup></h4>
																				</div>
																			</div>
																			<div class="col-md-7">
																				<div class="form-group">
																					<input type="hidden" value="0" name="active" class="form-control" />
																					<input type="checkbox" value="1" name="active" class="form-control" @if($region->active == '1') checked @endif/>
																				</div>
																			</div>
																		</div>
																		 
																		</div>
																		<div class="modal-footer">
																			 
																			 <button type="button" class="btn btn-default" onclick="window.location='{{url('admin/regions')}}'">
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
												<button type="button" onclick="window.location='{{url('admin/regions')}}'" class="btn btn-success btn-block">
													Return to regions list
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