@include('includes._header') @include('includes._menu_list')
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
            <li style="color: black;">Home</li>
            <li style="color: black;">Edit Project</li>
            <li style="color: black;">{{ $project->name }}</li>
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
    
    	<form action="{{ url('/project/' . $project->id) }}" method="POST"   >
    	
    	{{ csrf_field() }}
    	{{ method_field('PUT') }}
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Project Information</h2>
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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Project Rating:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="rating" value="">
                                    <option {{ $project->rating=='1'?'selected':'' }}>1</option>
                                    <option {{ $project->rating=='2'?'selected':'' }}>2</option>
                                    <option {{ $project->rating=='3'?'selected':'' }}>3</option>
                                    <option {{ $project->rating=='4'?'selected':'' }}>4</option>
                                    <option {{ $project->rating=='5'?'selected':'' }}>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Project Status:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="status" id="" class="form-control">
                                    	<option {{ $project->status=='Current'?'selected':'' }} value="Award">Current</option>
                                     	<option {{ $project->status=='Archive'?'selected':'' }}>Archive</option>
                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Project Name: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{ $project->name }}" required  />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Area:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="area" id="" class="form-control" style="">
                                      	<option value="0">ASdc</option>
                                    
                                      
                                      </select>                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Project Address:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" value="{{ $project->address }}"  />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Bid Date: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                																<input type="text" required name="bid_date" placeholder="" value="{{ date('d/m/Y', strtotime($project->bid_date)) }}" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                															</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Project City, State, Zip:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <div class="row">
                                                                                           <div class="col-sm-4 col-xs-4">
                                                                                               <input name="city" type="text" value="{{ $project->city }}" id="" class="form-control">
                                                                                           </div>
                                                                                           <div class="col-sm-4  col-xs-5">
                                                                                               <select name="state" id="" class="form-control location" style="">
                                   	<option  style="">[Select One]</option>
                                   	<option {{ $project->state=='CA'?'selected':'' }}  style="color: rgb(0, 0, 0);">CA</option>
                                   	<option {{ $project->state=='CO'?'selected':'' }}   style="color: rgb(0, 0, 0);">CO</option>
                                   	<option {{ $project->state=='HI'?'selected':'' }}   style="color: rgb(0, 0, 0);">HI</option>
                                   	<option {{ $project->state=='NCA'?'selected':'' }}   style="color: rgb(0, 0, 0);">NCA</option>
                                   	<option {{ $project->state=='NV'?'selected':'' }}   style="color: rgb(0, 0, 0);">NV</option>
                                   	<option {{ $project->state=='OR'?'selected':'' }}  style="color: rgb(0, 0, 0);">OR</option>
                                   	<option {{ $project->state=='SCA'?'selected':'' }}   style="color: rgb(0, 0, 0);">SCA</option>
                                   	<option {{ $project->state=='TX'?'selected':'' }}   style="color: rgb(0, 0, 0);">TX</option>
                                   	<option {{ $project->state=='WA'?'selected':'' }}   style="color: rgb(0, 0, 0);">WA</option>
                                   
                                   </select>
                                                                                           </div>
                                                                                           <div class="col-sm-4  col-xs-3">
                                                                                               <input name="zip" type="text"  value="{{ $project->zip }}" id="" class="form-control">
                                                                                           </div>
                                                                                       </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Bid Time: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                																		<input class="form-control" required id="timepicker" type="text" value="{{ $project->bid_time }}" name="bid_time" placeholder="">
                                																		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                																	</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Structure Use:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="structure_use" id="" class="form-control" style="">
                                    	<option value="0" style="">[Select One]</option>
                                    	<option {{ $project->structure_use=='ATCT'?'selected':'' }}  >ATCT</option>
                                    	<option {{ $project->structure_use=='Correctional Facility'?'selected':'' }} >Correctional Facility</option>
                                    	<option {{ $project->structure_use=='Courthouse'?'selected':'' }} >Courthouse</option>
                                    	<option {{ $project->structure_use=='Education'?'selected':'' }} >Education</option>
                                    	<option {{ $project->structure_use=='Government Building'?'selected':'' }} >Government Building</option>
                                    	<option {{ $project->structure_use=='Hotel'?'selected':'' }} >Hotel</option>
                                    	<option {{ $project->structure_use=='Hotel / Residential'?'selected':'' }} >Hotel / Residential</option>
                                    	<option {{ $project->structure_use=='Library'?'selected':'' }} >Library</option>
                                    	<option {{ $project->structure_use=='Medical Building'?'selected':'' }} >Medical Building</option>
                                    	<option {{ $project->structure_use=='Mixed Use / Office'?'selected':'' }} >Mixed Use / Office</option>
                                    	<option {{ $project->structure_use=='Museum'?'selected':'' }} >Museum</option>
                                    	<option {{ $project->structure_use=='Other'?'selected':'' }} >Other</option>
                                    	<option {{ $project->structure_use=='Parking'?'selected':'' }} >Parking</option>
                                    	<option {{ $project->structure_use=='Performance Center'?'selected':'' }} >Performance Center</option>
                                    	<option {{ $project->structure_use=='Residential'?'selected':'' }} >Residential</option>
                                    	<option {{ $project->structure_use=='WWTP'?'selected':'' }} >WWTP</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Owner:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <select name="owner" id="" class="form-control" style="">
                                     	<option value="0" style="">[Select One]</option>
                                   		
                                   		@foreach($owners as $owner)
                                   		<option {{ $project->owner==$owner->id?'selected':'' }} value="{{ $owner->id }}" style="">{{ $owner->first_name }} {{ $owner->last_name }} - {{ $owner->company_association }}</option>
                                   		@endforeach
                                     
                                     </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Structure Type: </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="structure_type" id="" class="form-control" style="">
                                    	<option   style="">[Select One]</option>
                                    	<option {{ $project->structure_type=='2'?'selected':'' }} >2</option>
                                    	<option {{ $project->structure_type=='High Rise'?'selected':'' }} >High Rise</option>
                                    	<option {{ $project->structure_type=='Hybrid Garage'?'selected':'' }} >Hybrid Garage</option>
                                    	<option {{ $project->structure_type=='Longspan Garage'?'selected':'' }} >Longspan Garage</option>
                                    	<option {{ $project->structure_type=='Low Rise'?'selected':'' }} >Low Rise</option>
                                    	<option {{ $project->structure_type=='Medium Rise'?'selected':'' }} >Medium Rise</option>
                                    	<option {{ $project->structure_type=='Mid Rise'?'selected':'' }} >Mid Rise</option>
                                    	<option {{ $project->structure_type=='Pan Slab'?'selected':'' }} >Pan Slab</option>
                                    	<option {{ $project->structure_type=='Podium'?'selected':'' }} >Podium</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Scope:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <select name="scope" id="" class="form-control" style="">
                                   	<option  style="">[Select One]</option>
                                   	<option {{ $project->scope=='Formwork Modified'?'selected':'' }} >Formwork Modified</option>
                                   	<option {{ $project->scope=='Horizontal &amp; Vertical Form'?'selected':'' }} >Horizontal &amp; Vertical Form</option>
                                   	<option {{ $project->scope=='Horizontal Form Only'?'selected':'' }} >Horizontal Form Only</option>
                                   	<option {{ $project->scope=='Package'?'selected':'' }} >Package</option>
                                   	<option {{ $project->scope=='Package Modified'?'selected':'' }} >Package Modified</option>
                                   	<option {{ $project->scope=='Vertical Form Only'?'selected':'' }} >Vertical Form Only</option>
                                   
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Architect:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="architect" id="" class="form-control" style="">
                                    	<option value="0" style="">[Select One]</option>
                                  @foreach($architects as $architect)
                                  <option {{ $project->architect==$architect->id?'selected':'' }} value="{{ $architect->id }}" style="">{{ $architect->name }}</option>
                                  @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Struct Eng:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <select name="struct_eng" id="" class="form-control" style="">
                                   	<option value="0" style="">[Select One]</option>
                                		@foreach($struct_eng as $struct_en)
                                		<option {{ $project->struct_eng==$struct_en->id?'selected':'' }}  value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
                                		@endforeach
                                   
                                   </select>
                                </div>
                            </div>
                        </div>
                        <!-- end widget content -->
                    </div>
                    <!-- end widget div -->
                </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Project Schedule</h2>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Start Date:  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                																<input type="text"  value="{{ date('d/m/Y', strtotime($project->start_date)) }}" name="start_date" required placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                															</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Duration (weeks):  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-3 col-xs-4">
                                        <span class="duration-lebal custom_min_height">Start Up </span>
                                        <input name="duration_start" type="text" id="" value="{{ $project->duration_start }}"  required class=" form-control Duration quantity1 width-1 text-center"  >

                                    </div>
                                    <div class="col-sm-6  col-xs-4">
                                        <span class="duration-lebal custom_min_height">Project Duration</span><input  value="{{ $project->duration_duration }}"  name="duration_duration" type="text" id="" class=" form-control  Duration quantity1 text-center"  >
                                    </div>
                                    <div class="col-sm-3  col-xs-4 finish_label">
                                        <span class="duration-lebal custom_min_height">Finish</span><input name="duration_finish" value="{{ $project->duration_finish }}"  type="text" id="ContentPlaceHolder1_txtFinish" class="  form-control Duration quantity1 width-1 text-center"  >
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Estimated Finish:  </strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget content -->
                <!-- end widget div -->
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Electronic Bid Docs</h2>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Site Addresses:  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="bid_site_address"  value="{{ $project->bid_site_address }}"   required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Username: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="bid_username"  value="{{ $project->bid_username }}"  required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Password: </strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="bid_password" value="{{ $project->bid_password }}"  /><br /> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </article>
        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Project Description</h2>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea   class="form-control" name="description" style="height: 126px;"  >{{ $project->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Other Information</h2>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Prevailing Wage:  </strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="prevailing_wage" id="" class="form-control" style="">
                                    	<option style="">[Select One]</option>
                                    	<option {{ $project->prevailing_wage=='No'?'selected':'' }} >No</option>
                                    	<option {{ $project->prevailing_wage=='Yes'?'selected':'' }} >Yes</option>
                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Wrap-Up: </strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <select name="wrap_up" id="" class="form-control" style="">
                                 	<option   style="">[Select One]</option>
                                 	<option {{ $project->wrap_up=='GL / WC'?'selected':'' }} >GL / WC</option>
                                 	<option {{ $project->wrap_up=='GL Only'?'selected':'' }} >GL Only</option>
                                 	<option {{ $project->wrap_up=='None'?'selected':'' }} >None</option>
                                 
                                 </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Performance Bond:</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <select name="performance_bond" id="" class="form-control" style="">
                                  	<option  >[Select One]</option>
                                  	<option {{ $project->performance_bond=='No'?'selected':'' }} >No</option>
                                  	<option {{ $project->performance_bond=='Yes'?'selected':'' }} >Yes</option>
                                  
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
            </div>
        </article>
        
        
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Recipients</h2>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <strong>Add Recipients</strong>
                                  
                                    <select name="ctl00$ContentPlaceHolder1$ddlWrapUp" id="ContentPlaceHolder1_ddlWrapUp" class="form-control" style="">
                                    	<option value="0" style="">[Select One]</option>
                                     
                                    
                                    </select>
                                    
                                    <a href="#"><b style="color: #FF0000;"> +  Add To Current Recipients</sup></b></a>
                                   
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                            <strong>Current Recipients</strong>
                            
                            </div>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Bid List</h2>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <strong>Add Client</strong>
                                  
                                    <select name="ctl00$ContentPlaceHolder1$ddlWrapUp" id="ContentPlaceHolder1_ddlWrapUp" class="form-control" style="">
                                    	<option value="0" style="">[Select One]</option>
                                     
                                    
                                    </select>
                                    
                                    <a href="#"><b style="color: #FF0000;"> +  Add To Current Bidders</sup></b></a>
                                   
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                            <strong>Current Bidders</strong>
                            
                            </div>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Project Team</h2>
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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Op Manager:  </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="op_manager" id="" class="form-control" style="">
                                     	<option  style="">[Select One]</option>
                                      @foreach($op_manager as $op_mng)
                                      <option {{ $project->op_manager==$op_mng->id?'selected':'' }}  value="{{ $op_mng->id }}" style="">{{ $op_mng->name }} {{ $op_mng->last_name }}</option>
                                      @endforeach
                                     
                                     </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Estimator: </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                  <select name="estimator" id="" class="form-control" style="">
                                   	<option  style="">[Select One]</option>
                                    @foreach($estimators as $estimator)
                                    <option {{ $project->estimator==$estimator->id?'selected':'' }}  value="{{ $estimator->id }}" style="">{{ $estimator->name }} {{ $estimator->last_name }}</option>
                                    @endforeach
                                   
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Equipment Projections</h2>
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
                        <div class="row">
                            <div class="col-md-2 ">
                                <div class="form-group">
                                 
                                    <strong>Equipment Type </strong>
                                    <input name="ctl00$ContentPlaceHolder1$txtStart" type="text" id="ContentPlaceHolder1_txtStart" class="aspNetDisabled form-control Duration quantity1 width-1 text-center" onpaste="return false" onkeypress="return checkVal(event)" onkeyup="calculateDate()">
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                 
                                    <strong>Quantity </strong>
                                    <input name="ctl00$ContentPlaceHolder1$txtStart" type="text" id="ContentPlaceHolder1_txtStart" class="aspNetDisabled form-control Duration quantity1 width-1 text-center" onpaste="return false" onkeypress="return checkVal(event)" onkeyup="calculateDate()">
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                 
                                    <strong>Unit of Measurement </strong>
                                    <input name="ctl00$ContentPlaceHolder1$txtStart" type="text" id="ContentPlaceHolder1_txtStart" class="aspNetDisabled form-control Duration quantity1 width-1 text-center" onpaste="return false" onkeypress="return checkVal(event)" onkeyup="calculateDate()">
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                 
                                    <strong>Date Needed </strong>
                               <div class="input-group">
                                   																<input type="text" name="mydate" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                   																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                   															</div>
                               </div>
                                    
                                </div>
                                                        
                            <div class="col-md-2">
                                <div class="form-group">
                                 
                                    <strong>Date Returned </strong>
                                 <div class="input-group">
                                     																<input type="text" name="mydate" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                     																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                     															</div>
                                    
                                </div>
                            </div>
                            
                            
                                <div class="col-md-2">
                            
                              <a href="#"><b style="color: #FF0000;"> +  NEW EQUIPMENT LINE</sup></b></a>
                            </div>
                             
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <button type="submit" class="btn btn-primary  pull-right">Save info</button>
        <br style="clear: both;">
        <br style="clear: both;">
        <br style="clear: both;">
        </article>
        
        </form>
    </div>
    <!-- END MAIN CONTENT -->
    <br style="clear: both;">
    <br style="clear: both;">
    <br style="clear: both;">
</div>
@include('includes._footer')
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
            tablet: 1024,
            phone: 480
        };

        $('.table').dataTable({
            "paging": false,
            "searching": false
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
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>" +
                "t" +
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth": true,
            "paging": false,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback": function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_fixed_column) {
                    responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                }
            },
            "rowCallback": function(nRow) {
                responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
            },
            "drawCallback": function(oSettings) {
                responsiveHelper_datatable_fixed_column.respond();
            }

        });

        // custom toolbar
        $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

        // Apply the filter
        $("#datatable_fixed_column thead th input[type=text]").on('keyup change', function() {

            otable
                .column($(this).parent().index() + ':visible')
                .search(this.value)
                .draw();

        });
        /* END COLUMN FILTER */

        /* COLUMN SHOW - HIDE */
        $('#datatable_col_reorder').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>" +
                "t" +
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "autoWidth": true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback": function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_col_reorder) {
                    responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
                }
            },
            "rowCallback": function(nRow) {
                responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
            },
            "drawCallback": function(oSettings) {
                responsiveHelper_datatable_col_reorder.respond();
            }
        });

        /* END COLUMN SHOW - HIDE */

        /* TABLETOOLS */
        $('#datatable_tabletools').dataTable({

            // Tabletools options: 
            //   https://datatables.net/extensions/tabletools/button_options
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>" +
                "t" +
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "csv",
                    "xls", {
                        "sExtends": "pdf",
                        "sTitle": "SmartAdmin_PDF",
                        "sPdfMessage": "SmartAdmin PDF Export",
                        "sPdfSize": "letter"
                    }, {
                        "sExtends": "print",
                        "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                    }
                ],
                "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
            },
            "autoWidth": true,
            "preDrawCallback": function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_tabletools) {
                    responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
                }
            },
            "rowCallback": function(nRow) {
                responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
            },
            "drawCallback": function(oSettings) {
                responsiveHelper_datatable_tabletools.respond();
            }
        });

$('#timepicker').timepicker();
        /* END TABLETOOLS */

    })
</script>
<!-- Your GOOGLE ANALYTICS CODE Below -->
<!-- Your GOOGLE ANALYTICS CODE Below -->
</body>

</html>