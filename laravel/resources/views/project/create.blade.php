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
            <li style="color: black;">Create Project</li>
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
    
    	<form action="{{ url('/project') }}" method="POST"   >
    	
    	{{ csrf_field() }}
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
                                   <input type="text" class="form-control" name="name" value="" required  />
                               </div>
                           </div>
                           
                           
                           
                           <div class="col-md-3">
                               <div class="form-group">
                                   <strong>Bid Date: <b><sup style="color: #FF0000;">*</sup></b></strong>
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="input-group">
                               																<input type="text" required name="bid_date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
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
                                    <input type="text" class="form-control" name="address" value=""  />
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong>Bid Time: <b><sup style="color: #FF0000;">*</sup></b></strong>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                																		<input class="form-control" required id="timepicker" type="text" name="bid_time" placeholder="">
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
                                                                                               <input name="city" type="text" id="" class="form-control">
                                                                                           </div>
                                                                                           <div class="col-sm-4  col-xs-5">
                                                                                               <select name="state" id="" class="form-control location" style="">
                                   	<option style="">[Select One]</option>
                                   	@foreach($states as $key => $s)
                                              <option value="{{$s->abbrv}}" >{{$s->abbrv}}</option>
                                            @endforeach
                                   
                                   </select>
                                                                                           </div>
                                                                                           <div class="col-sm-4  col-xs-3">
                                                                                               <input name="zip" type="text" id="" class="form-control">
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
                                   	<option>Formwork Modified</option>
                                   	<option>Horizontal &amp; Vertical Form</option>
                                   	<option>Horizontal Form Only</option>
                                   	<option>Package</option>
                                   	<option>Package Modified</option>
                                   	<option>Vertical Form Only</option>
                                   
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
                                	<option  >2</option>
                                	<option >High Rise</option>
                                	<option >Hybrid Garage</option>
                                	<option >Longspan Garage</option>
                                	<option >Low Rise</option>
                                	<option >Medium Rise</option>
                                	<option >Mid Rise</option>
                                	<option >Pan Slab</option>
                                	<option >Podium</option>
                                
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
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option selected>4</option>
                                <option>5</option>
                                </select>
                            </div>
                        </div>
                        
                        
                        
                                                       
                        </div>
                        <div class="row">
                        
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <strong>Building Use:  </strong>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="structure_use" id="" class="form-control" style="">
                                	<option value="0" style="">[Select One]</option>
                                	<option  >ATCT</option>
                                	<option >Correctional Facility</option>
                                	<option >Courthouse</option>
                                	<option >Education</option>
                                	<option >Government Building</option>
                                	<option >Hotel</option>
                                	<option >Hotel / Residential</option>
                                	<option >Library</option>
                                	<option >Medical Building</option>
                                	<option >Mixed Use / Office</option>
                                	<option >Museum</option>
                                	<option >Other</option>
                                	<option >Parking</option>
                                	<option>Performance Center</option>
                                	<option >Residential</option>
                                	<option >WWTP</option>
                                
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
                                	<option  >Award</option>
                                 
                                
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
                            																<input type="text" name="start_date" required placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
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
                               		<option value="{{ $owner->id }}" style="">{{ $owner->first_name }} {{ $owner->last_name }} - {{ $owner->company_association }}</option>
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
                            																<input type="text" name="est_date" required placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
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
                                  <option value="{{ $architect->id }}" style="">{{ $architect->name }}</option>
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
                                  0.0 wks
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
                                      		<option value="{{ $struct_en->id }}" style="">{{ $struct_en->name }}</option>
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
                                     <input type="text" class="form-control" name="bid_site_address" value=""  required />
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
                                     <input type="text" class="form-control" name="bid_username" value=""  required />
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
                                     <input type="text" class="form-control" name="bid_password" value=""  /><br /> 
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
                                     <textarea   class="form-control" name="description" style="height: 50px;"  ></textarea>
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
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
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
                    <div class="widget-body">
                    
                     <div class="row">
                      <div class="col-md-12">
                        <textarea   class="form-control" name="notes" style="height: 50px;"  ></textarea>
                      </div>
                      
                        <br /><br />  <br /><br />
                      <div class="col-md-12" style="padding-right: 40px;">
                        <strong>
                        2017/07/06 - Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff
                        </strong>    <br /><br />
                        
                        <strong>
                        2017/07/06 - Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff Text and a stuff
                        </strong>                  </div>
                    </div>  <br /><br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <strong>Add Recipients</strong>
                                  
                                    <select name="ctl00$ContentPlaceHolder1$ddlWrapUp" id="ContentPlaceHolder1_ddlWrapUp" class="form-control" style="">
                                    	<option value="0" style="">[Select One]</option>
                                     
                                    
                                    </select>
                                    
                                    <br />
                                    
                                    <a href="#"  class="btn btn-success  pull-right"><b > Add To Current Recipients </b></a>
                                   
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                            <strong>Current Recipients</strong>
                            
                            <br /><br />
                             <a href="#"  class="btn btn-success  pull-right"><b > Save note</sup></b></a> 
                             <a href="#"  class="btn btn-success  pull-right" style="margin-right: 10px;"><b > Save @ Email Note</sup></b></a>
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