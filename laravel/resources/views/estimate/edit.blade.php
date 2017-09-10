@include('includes._header') @include('includes._menu_estimate')
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
    
    	<form action="{{ url('/estimate/' . $project->id) }}" method="POST"   >
    	
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
                                    <strong style="text-decoration: underline;">Name and Location </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                 
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong style="text-decoration: underline;">Company Bid Info </strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                
                            </div>
                            
                            </div>
                            
                            <div style="padding-left: 20px;">
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
                                           <strong>Bid Date: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group">
                                       																<input type="text" value="{{ date('d/m/Y', strtotime($project->bid_date)) }}" required name="bid_date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                       																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                       															</div>
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
                                            <input type="text" class="form-control" name="address" value="{{ $project->address }}"  value=""  />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <strong>Bid Time: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                        																		<input class="form-control" required id="timepicker" type="text" name="bid_time" placeholder=""  value="{{ $project->bid_time }}">
                                        																		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        																	</div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <strong>City, State &amp; Zip:  </strong>
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
                                            <strong>Scope:  </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           <select name="scope" id="" class="form-control" style="">
                                           	<option  style="">[Select One]</option>
                                           	<option {{ $project->scope=='Formwork Modified'?'selected':'' }} >Formwork Modified</option>
                                           	<option {{ $project->scope=='Horizontal & Vertical Form'?'selected':'' }} >Horizontal &amp; Vertical Form</option>
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
                                
                                
                                
                                                               
                                </div>
                                <div class="row">
                                
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Bidding Use:  </strong>
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
                                        <strong>Project Status:  </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="status" id="" class="form-control">
                                        	
                                         	 
                                         	
                                         			<option {{ $project->status=='Current'?'selected':'' }} >Current</option>
                                         			<option {{ $project->status=='Submitted'?'selected':'' }} >Submitted</option>
                                         			<option {{ $project->status=='Tracking'?'selected':'' }} >Tracking</option>
                                        <option {{ $project->status=='Award'?'selected':'' }} >Award</option>
                                        <option {{ $project->status=='Archive'?'selected':'' }} >Archive</option>
                                        </select>
                                    </div>
                                </div>
                                
                                                            
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong style="text-decoration: underline;">Project Schedule</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                     
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong style="text-decoration: underline;">Design Team </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                
                                </div>
                                
                                <div style="padding-left: 20px;">
                                <div class="row">
                                
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Start Date:  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                    																<input id="str_date" type="text"  value="{{ date('d/m/Y', strtotime($project->start_date)) }}" name="start_date" required placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                    																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
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
                                        <strong>Finish Date:  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                    																<input id="est_date" type="text"  value="{{ date('d/m/Y', strtotime($project->est_date)) }}" name="est_date" required placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                    																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    															</div>
                                </div>
                                
                                
                                
                                
                                    
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
                                              <strong>Total Duration (wks):</strong>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <span id="wks_count">0.0</span> wks
                                      </div>
                                      
                                      
                                      
                                      
                                          
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
                                      
                                 </div>
                                 
                                 <div class="row">
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <strong style="text-decoration: underline;">Electronic Bid Doc Access Info</strong>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                      
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <strong>Civil:  </strong>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                        <select name="struct_eng" id="" class="form-control" style="">
                                        	<option value="0" style="">[Select One]</option>
                                     		@foreach($struct_eng as $struct_en)
                                     		<option value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
                                     		@endforeach
                                        
                                        </select>
                                     </div>
                                 </div>
                                 
                                 </div>
                                 
                                 
                                 <div style="padding-left: 20px;">
                                 <div class="row">
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Site Addresses:  <b><sup style="color: #FF0000;">*</sup></b></strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <input type="text" class="form-control" name="bid_site_address" value="{{ $project->bid_site_address }}"  required />
                                         </div>
                                     </div>
                                     
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Mechanical:  </strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                            <select name="struct_eng" id="" class="form-control" style="">
                                            	<option value="0" style="">[Select One]</option>
                                         		@foreach($struct_eng as $struct_en)
                                         		<option value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
                                         		@endforeach
                                            
                                            </select>
                                         </div>
                                     </div>                             
                                 </div>
                                 <div class="row">
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Username: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <input type="text" class="form-control" name="bid_username" value="{{ $project->bid_username }}"  required />
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Electrical:  </strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                            <select name="struct_eng" id="" class="form-control" style="">
                                            	<option value="0" style="">[Select One]</option>
                                         		@foreach($struct_eng as $struct_en)
                                         		<option value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
                                         		@endforeach
                                            
                                            </select>
                                         </div>
                                     </div>                             
                                 </div>
                                 <div class="row">
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Password: </strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <input type="text" class="form-control" name="bid_password"  value="{{ $project->bid_password }}"  /><br /> 
                                         </div>
                                     </div>
                                     
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Plumbing:  </strong>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="form-group">
                                            <select name="struct_eng" id="" class="form-control" style="">
                                            	<option value="0" style="">[Select One]</option>
                                         		@foreach($struct_eng as $struct_en)
                                         		<option value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
                                         		@endforeach
                                            
                                            </select>
                                         </div>
                                     </div>
                                                                 
                                 </div>
                                 
                                 
                                 
                                 
                                 
                                 <div class="row">
                                     <div class="col-md-3">
                                         <div class="form-group">
                                             <strong>Project description: </strong>
                                         </div>
                                     </div>
                                     
                                     
                                     
                                     <div class="col-md-9">
                                         <div class="form-group">
                                             <textarea   class="form-control" name="description" style="height: 50px;"  >{{ $project->description }}</textarea>
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
                            <h2 class="font-md">Add Client</h2>
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
                                          <strong> Client</strong>
                                          
                                            <select name="ctl00$ContentPlaceHolder1$ddlWrapUp" id="ContentPlaceHolder1_ddlWrapUp" class="form-control" style="">
                                            	<option value="0" style="">[Select One]</option>
                                             
                                            
                                            </select>
                                            <br />
                                            <a href="#" class="btn btn-success  pull-right"><b > +  Add Client </b></a>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                  
                                    
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
                            <h2 class="font-md">Resource Projection</h2>
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
    
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                        <header>
                            <a name="note"></a>
                            <h2 class="font-md">Project Notes</h2>
                        </header>
                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->
                            </div>

                            <!-- end widget edit box -->
                            <!-- widget content -->
                            
                            <form id="note_form" action="{{ url('/estimate/'.$project->id.'/notes') }}" method="POST"> 
                            <input id="project_id" name="pj_project_id" type="hidden" value="{{ $project->id}}">
                            {{ csrf_field() }}
                            <span id="form_put"><input type="hidden" value="PUT"></span>
                            <div class="widget-body">
                            
                             <div class="row">
                              <div class="col-md-12">
                                <textarea  id="note_input" class="form-control" name="note" style="height: 50px;"  ></textarea>
                              </div>
                              
                              <button type="submit" id="submit_note_form" class="hide"></button>
                                <br /><br />  <br /><br />
                              </form>
                              <div class="col-md-12" style="padding-right: 40px;">
                             
                                  @foreach($project->notes as $key => $note)
                                    <strong>
                                    {{ date('Y/m/d',strtotime($note->created_at)) }} <small>[{{ $note->user->name}}]</small> </strong>     - <span id="note-{{$note->id}}">{{ $note->note}}</span><a style="margin-left:10px;"><i class="fa fa-edit edit_button" data-id="{{ $note->id }}"></i></a>
                                    <form action="{{ url('/estimate/'.$project->id.'/notes/' .$note->id) }}" method="POST"  style="display: inline;">
                                <a href="#" onclick="if(confirm('Are you sure?')){ $(this).parent().submit()}"> &nbsp;<i class="fa fa-trash-o"></i></a>
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                 
                                </form>
                                   
                                 
                                    <br/><br/>
                                  @endforeach
                             
                                </div>
                            </div>  <br /><br />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <strong>Add Recipients</strong>
                                          
                                            <select name="ctl00$ContentPlaceHolder1$ddlWrapUp" id="ContentPlaceHolder1_ddlWrapUp" class="form-control" style="">
                                              <option value="0" style="">[Select One]</option>
                                            
                                               @foreach($tenant->persons as $key => $list)
                                                <option value="{{ $list->id }}">{{$list->last_name}}, {{$list->first_name}}</option>
                                               @endforeach
                                            
                                            
                                            </select>
                                            
                                            <br />
                                            
                                            <a href="#"  class="btn btn-success  pull-right"><b > Add To Current Recipients </b></a>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <strong>Current Recipients</strong> <br />
                                  
                                   @foreach($project->mailing_list as $key => $list)
                                     {{ $list->id }} {{$list->person->last_name}}, {{$list->person->first_name}}  <br />
                                   @endforeach
                                                                             
                                    <br /><br />
                                     <label for="submit_note_form" class="btn btn-success  pull-right"><b > Save note</sup></b></label> 
                                     <a href="#"  class="btn btn-success  pull-right" style="margin-right: 10px;"><b > Save @ Email Note</sup></b></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- end widget content -->
                        </div>
                        <!-- end widget div -->
                    </div>
                </article>
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
                //counting weeks
                function count_weeks() {
                      var one_week = 1000*60*60*24*7;
                        
                        var start_date = $('#str_date').datepicker({ dateFormat: 'mm-dd-yyyy' }).val();
                        var est_date = $('#est_date').datepicker({ dateFormat: 'mm-dd-yyyy' }).val();
                        
                        var dateAr1 = start_date.split('/');
                        var dateAr2 = est_date.split('/');
                        
                        var newStartDate = new Date(dateAr1[2] + '-' + dateAr1[1] + '-' + dateAr1[0]).getTime();
                        var newEstDate = new Date(dateAr2[2] + '-' + dateAr2[1] + '-' + dateAr2[0]).getTime();
                        
                        
                        
                        //var wks = Math.floor((est_date - start_date + 1) / (1000 * 60 * 60 * 24) / 7);
                        var diff = Math.abs(newEstDate - newStartDate);

                        var wks = (diff / one_week).toFixed(1);
                        
                        return wks;

              }

              var wks = count_weeks();
              
              if (wks != 'NaN') {
                $('#wks_count').text(wks);
              }; 
              //counting weeks
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

              //edit button start

              $('.edit_button').on('click', function() {
                  var id = $(this).attr('data-id');
                  var project_id = $('#project_id').val();
                  var note = $('#note-'+id).text();

                  $('#form_put input').attr("name", "_method")
                  $('#note_input').text(note);
                  $("#note_form").attr("action", "{{ url('/estimate/' .  $project->id . '/notes') }}" + '/' + id);
                  //$("#note_form").attr("action", "http://pronovos.dev/estimate/" + project_id + "/notes/" + id);
              
              });

              //edit button end

              //counting_weeks start
                  
                
                $('#est_date').on('change', function() {
                   
                   var wks = count_weeks();
                  
                  $('#wks_count').text(wks);
                }); 
              //counting_weeks end
        
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