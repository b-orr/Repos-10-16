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
            <li style="color: black;">Estimating</li>
             <li style="color: black;">{{ $project->name }}</li>
              <li style="color: black;">Bid Results</li>
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
    
      
    	<form action="{{ url('/estimate/'.$project->id.'/bids') }}"  method="POST"   >
    	
    	{{ csrf_field() }}
        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">New Bid Information</h2>
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
                        
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                               
                              </div>
                          </div>
                           <div class="col-md-1">Retain Values <br /><br /></div>
                          <div class="col-md-6">
                            
                          </div>
                          </div>
                          
                          
                        
                          <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Bid Date: <span style="color: rgb(255,0,0);">*</span> </strong>
                                </div>
                            </div>
                             <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6">
                             <div class="form-group">
                                <div class="input-group">
                                																<input type="text" required name="bid_date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy" value="{{ date('d/m/Y') }}">
                                																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                															</div></div>
                            </div>
                            </div>
                              <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Client:  </strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="client" id="" class="form-control">
                                    	<option value="1" >Some Client</option>
                                      @foreach($project->client_list as $key => $client)
                                        <option value="{{$client->company->id}}">{{ $client->company->name }}</option>
                                      @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                       </div>
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Scope: </strong>
                                </div>
                            </div>
                               <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <select name="scope"  class="form-control">
                               				<option>[Select One]</option>
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
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Bid Type:  </strong>
                                </div>
                            </div>
                               <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <select name="bid_type" class="form-control" >
                       				<option>[Select One]</option>
                       				<option>Budget</option>
                       				<option>Final</option>
                       				<option>ROM</option>
                       				<option>Test Bid Type</option>
                       
                       			</select>                               </div>
                            </div>
                      </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Drawing Stage:  </strong>
                                </div>
                            </div>
                               <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="drawing_stage" value=""  />
                                </div>
                            </div>
                            </div>  <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Start Date: <span style="color: rgb(255,0,0);">*</span> </strong>
                                </div>
                            </div>
                               <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6"> <div class="form-group">
                                <div class="input-group">
                                																<input type="text" required name="start_date" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                															</div></div>
                            </div>
                            </div> 
                            
                            
                             <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Man Day Cost:  </strong>
                                </div>
                            </div>
                               <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="man_day_cost" value=""  />
                                </div>
                            </div>
                        </div></div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                 
                                </div>
                            </div>
                             <div class="col-md-1">Retain Values <br /><br /></div>
                            <div class="col-md-6">
                              
                            </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Total Bid:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"></div>
                              <div class="col-md-6">
                               <div class="form-group">
                                  <input type="text" id="bid" class="form-control" name="bid" value=""  /></div>
                              </div>
                              </div>
                                <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Profit:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" id="profit" class="form-control" name="profit" value=""  /></div>
                                  </div>
                              </div>
                          
                           <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Profit % on Cost: </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <span id="profit_cost">0</span>%<input type="hidden" id="h_profit_cost" name="profit_cost" value="" />
                                  </div>
                              </div>
                              </div>
                                <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Total CSF:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" id="csf" class="form-control" name="csf" value=""  style="width: 50%; display: inline; margin-right: 10px;" /> $<span id="total_csf">0</span>/CSF<input type="hidden" id="h_total_csf" name="total_csf" value="" /> </div>                              </div>
                              </div>
                        
                          <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Total SF:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" id="sf" class="form-control" name="sf" value=""  style="width: 50%; display: inline; margin-right: 10px;" /> $<span id="total_sf">0</span>/SF <input type="hidden" id="h_total_sf" name="total_sf" value="" />
                                  </div>
                              </div>
                              </div>  <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Total CY: </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"><input type="checkbox" name="" value="" /></div>
                              <div class="col-md-6"> <div class="form-group">
                                    <input type="text" id="cy" class="form-control" name="cy" value=""   style="width: 50%; display: inline; margin-right: 10px;" /> $<span id="total_cy">0</span>/CY<input type="hidden" id="h_total_cy" name="total_cy" value="" /> </div>
                              </div>
                              </div>  <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Lower Bidder:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" id="lower_bidder" class="form-control" name="lower_bidder" value=""  />
                                  </div>
                              </div>
                               </div>  <div class="row">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <strong>Price:  </strong>
                                  </div>
                              </div>
                                 <div class="col-md-1"></div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" id="price" class="form-control" name="price" value=""   style="width: 40%; display: inline; margin-right: 10px;" /> Need $<span id="total_need">0</span><input type="hidden" id="h_total_need" name="total_need" value="" /> on Cost 
                                  </div>
                              </div>
                          </div></div>
                        
                        </div>
                         
                         <br /><br />
                         *Use <input type="checkbox" disabled name="" value="" /> to retain values for multiple entries upon committing 
                        <!-- end widget content -->
                    </div>
                    <!-- end widget div -->
                </div></div>
        </article>
         <article class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
         
         								<!-- Widget ID (each widget will need unique ID)-->
         								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
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
         										<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
         										<h2 class="font-md">Actions</h2>
         									</header>
         
         									
         										<!-- widget content -->
         										<div class="widget-body">
         											<div class="widget-body-toolbar">
         											
         											<div class="row">
         												 
         												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right"  >
         													
         													<button class="btn btn-success btn-block "  type="submit" style="padding-right: 0px; padding-left: 2px; height: auto;">
         														Commit results
         													</button>
         													
         												</div>
         												
         											</div> 
         											<br />
         											<div class="row">
         												 
         												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right"  >
         													
         													<button class="btn btn-success btn-block " onclick="window.history.back();" style="padding-right: 0px; padding-left: 2px; height: auto;">
         														Back
         													</button>
         													
         												</div>
         												
         											</div>
         											 
         										</div>
         										</div>
         										<!-- end widget content -->
         										
         								</div>
         								<!-- end widget -->
         							
         							</article>
         							
         							
         							<article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">
         							    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
         							        <header>
         							            <h2 class="font-md">Past Bid Result</h2>
         							        </header>
         							        <!-- widget div-->
         							        <div>
         							<?php $date=0; ?>
         							
         							
         							<article style="display: none;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         							    <div class="jarviswidget  " id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
         							        <header>
         							           
         							        </header>
         							        <!-- widget div-->
         							        <div>
         							
         							@foreach($bids as $bid)
         							
         					
         							@if($bid->bid_date != $date)
         							
         							<?php $date=$bid->bid_date; ?>
         							</div></div>
         							</article>
         							 
         							<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         							    <div class="jarviswidget  " id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
         							        <header>
         							            <h2 class="font-md">{{ $bid->bid_date }} Results</h2>
         							        </header>
         							        <!-- widget div-->
         							        <div>
         							        
         							        
         							        @endif
         							            <!-- widget edit box -->
         							            <div class="jarviswidget-editbox">
         							                <!-- This area used as dropdown edit box -->
         							            </div>
         							            <!-- end widget edit box -->
         							            <!-- widget content -->
         							            <div class="widget-body">
         							                <div class="row">
         							                <div class="col-md-6">
         							                
         							                 
         							                  
         							                  
         							                
         							                  <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Bid Date:  </strong>
         							                        </div>
         							                    </div>
         							                     
         							                    <div class="col-md-6">
         							                     <div class="form-group">
         							                        <div class="input-group">
         							                        
         							                        {{ $bid->bid_date }}
         							                        																 </div>
         							                    </div>
         							                    </div></div>
         							                      <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Client:  </strong>
         							                        </div>
         							                    </div>
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            @foreach($project->client_list as $key => $client)
                                                    @if($bid->client == $client->company->id) {{ $client->company->name }} @endif</option>
                                                  @endforeach
         							                        </div>
         							                    </div>
         							               </div>
         							                 <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Scope: </strong>
         							                        </div>
         							                    </div>
         							                       
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                          {{ $bid->scope }}
         							                        </div>
         							                    </div>
         							                    </div>
         							                      <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Bid Type:  </strong>
         							                        </div>
         							                    </div>
         							                       
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                           {{ $bid->bid_type }}                              </div>
         							                    </div>
         							              </div>
         							                <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Drawing Stage:  </strong>
         							                        </div>
         							                    </div>
         							                       
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                           {{ $bid->drawing_stage }}
         							                        </div>
         							                    </div>
         							                    </div>  <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Start Date: </strong>
         							                        </div>
         							                    </div>
         							                       
         							                    <div class="col-md-6"> <div class="form-group">
         							                        {{ $bid->start_date }}</div>
         							                    </div>
         							                    </div> 
         							                    
         							                    
         							                     <div class="row">
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                            <strong>Man Day Cost:  </strong>
         							                        </div>
         							                    </div>
         							                       
         							                    <div class="col-md-6">
         							                        <div class="form-group">
         							                          {{ $bid->man_day_cost }}
         							                        </div>
         							                    </div>
         							                </div></div>
         							                <div class="col-md-6">
         							                   
         							                    <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Total Bid:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                       <div class="form-group">
         							                         {{ $bid->bid }}
         							                      </div>
         							                      </div></div>
         							                        <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Profit:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                             {{ $bid->profit }}</div>
         							                          </div>
         							                      </div>
         							                  
         							                   <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Profit % on Cost: </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <span id="profit_cost">{{ $bid->profit_cost }}</span>%
         							                          </div>
         							                      </div>
         							                      </div>
         							                        <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Total CSF:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              {{ $bid->csf }} $<span id="total_csf">{{ $bid->total_csf }}</span>/CSF </div>                              </div>
         							                      </div>
         							                
         							                  <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Total SF:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                           {{ $bid->sf }} $<span id="total_sf">{{ $bid->total_sf }}</span>/SF          							                          </div>
         							                      </div>
         							                      </div>  <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Total CY: </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6"> <div class="form-group">
         							                           {{ $bid->cy }} $<span id="total_cy">{{ $bid->total_cy }}</span>/CY  </div>
         							                      </div>
         							                      </div>  <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Lower Bidder:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              {{ $bid->lower_bidder }}
         							                          </div>
         							                      </div>
         							                       </div>  <div class="row">
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                              <strong>Price:  </strong>
         							                          </div>
         							                      </div>
         							                         
         							                      <div class="col-md-6">
         							                          <div class="form-group">
         							                            {{ $bid->price }} Need $<span id="total_need">{{ $bid->total_need }}</span>  on Cost 
         							                          </div>
         							                      </div>
         							                  </div></div>
         							                
         							                </div>
         							                 
         							                 
         							                <!-- end widget content -->
         							            </div>
         							            <!-- end widget div -->
         							            <hr />
         							           
         							     
         					 
         @endforeach 
         </div></div>
         </article>
         </div></div></article>
        
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
    
    
    
    $( "#profit, #bid" ).keyup(function() {
       
      bid =  parseFloat($( "#bid" ).val());
      profit =  parseFloat($( "#profit" ).val());
      
      profit_cost = profit/(bid-profit);
      
      $( "#profit_cost" ).html(profit_cost.toFixed(2))
      $( "#h_profit_cost" ).val(profit_cost.toFixed(2))
      
    });
    
    
    $( "#csf" ).keyup(function() {
       
      bid =  parseFloat($( "#bid" ).val());
      csf =  parseFloat($( "#csf" ).val());
      
      total_csf = bid/csf;
      
      $( "#total_csf" ).html(total_csf.toFixed(2))
      $( "#h_total_csf" ).val(total_csf.toFixed(2))
      
    });
    
    $( "#sf" ).keyup(function() {
       
      bid =  parseFloat($( "#bid" ).val());
      sf =  parseFloat($( "#sf" ).val());
      
      total_sf = bid/sf;
      
      $( "#total_sf" ).html(total_sf.toFixed(2))
      $( "#h_total_sf" ).val(total_sf.toFixed(2))
      
    });
    
    
    $( "#cy" ).keyup(function() {
       
      bid =  parseFloat($( "#bid" ).val());
      cy =  parseFloat($( "#cy" ).val());
      
      total_cy = bid/cy;
      
      $( "#total_cy" ).html(total_cy.toFixed(2))
      $( "#h_total_cy" ).val(total_cy.toFixed(2))
      
    });
    
    $( "#price" ).keyup(function() {
       
      price =  parseFloat($( "#price" ).val());
      bid =  parseFloat($( "#bid" ).val());
      profit =  parseFloat($( "#profit" ).val());
      
      total_need = (price-(bid-profit))/(bid-profit);
      
      $( "#total_need" ).html(total_need.toFixed(2))
      $( "#h_total_need" ).val(total_need.toFixed(2))
      
    });
    
    
</script>
<!-- Your GOOGLE ANALYTICS CODE Below -->
<!-- Your GOOGLE ANALYTICS CODE Below -->
</body>

</html>