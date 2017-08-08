@include('includes._header') @include('includes._menu_list')
<div id="main" role="main">
<style>
 .Hide-Column{
 	display: none;
 }

.vertical-line{
	border-right: 2px solid #f1f1f1;
 
}



.table-bordered-1 td, .table-bordered-1 th {
    border-bottom: 1px solid #F7F9F8;
}


.grid-table-1 tr th {
    


    font-size: 12px;
    font-weight: normal;
    color: #8a8a8d;
    padding: 10px 15px 10px 3px;
}



.grid-table{
	

     margin-bottom: 20px;
 }
 
     /*.grid-table tr td {
         padding: 5px;
     }*/
     .grid-table tr td {
         padding: 5px;
         padding-top: 10px;
         border-bottom: 1px solid #f1f1f1;
         margin-bottom: 23px;
         padding-bottom: 11px;
     }
 
     .grid-table tr th {
         font-size: 12px;
         font-weight: normal;
         color: #8a8a8d;
         padding-left: 5px;
         border-bottom: 1px solid #f1f1f1;
     }
 
 /*.grid-table tr th {
         font-size: 12px;
         font-weight: normal;
         color: #8a8a8d;
         padding-left: 5px;
     }*/
 
 .grid-table-1 {
     margin-bottom: 20px;
     width: 2500px;
 }
 
     .grid-table-1 tr td {
         width: 2%;
     }
 
 
 
</style>
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
            <li style="color: black;">Bid Results</li>
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
        
       <button type="button" onclick="window.location='{{ url('estimate/' . $project->id) }}'" class="btn  ">Back to Bid</button>   <h1>Bid Results: {{ $project->name }}</h1>
                
                              
        </article>
         
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                <header>
                    <h2 class="font-md">Bid Information</h2>
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
                                                         
                            <div class="col-md-2">
                                <div class="form-group">
                                 
                                    <strong>Bid date </strong>
                               <div class="input-group">
                                   																<input type="text" name="mydate" placeholder="" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                   																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                   															</div>
                               </div>
                                    
                                </div>
                                                        
                             
                            
                            
                                 
                             
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                        <div class="bid_table  mCustomScrollbar _mCS_1" style="overflow: scroll;">
                        
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 2116px;" dir="ltr">
                        
                        
                                                                    <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenField1" id="ContentPlaceHolder1_HiddenField1" style="">
                        
                                                                    <div>
                        	<table class="grid-table" cellspacing="0" id="ContentPlaceHolder1_grdBidResult" style="border-collapse:collapse;">
                        		<tbody><tr>
                        			<th scope="col">Client</th><th scope="col">Scope</th><th scope="col">Bid Type</th><th scope="col">Drwg Stage</th><th scope="col">Start Date</th><th class="vertical-line" scope="col">MD Cost</th><th class="line-space" scope="col">Total Bid</th><th scope="col">Profit</th><th scope="col">Profit % on Cost</th><th scope="col">Total CSF</th><th scope="col">Total SF</th><th scope="col">Total CY</th><th scope="col">$/CSF</th><th scope="col">$/SF</th><th scope="col">$/CY</th><th scope="col">Lower Bidder</th><th scope="col">Price</th><th scope="col">Needed % on Cost</th>
                        		</tr><tr>
                        			<td>
                                                                                    <select name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$ddlClient" id="ContentPlaceHolder1_grdBidResult_ddlClient_0" class="form-control" style="color: grey; width: 110px;">
                        				<option value="0" style="color:grey;">[Select One]</option>
                        				<option value="412" style="color: black;">Beck</option>
                        
                        			</select>
                                                                                </td><td>
                                                                                    <select name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$ddlScope" id="ContentPlaceHolder1_grdBidResult_ddlScope_0" class="form-control" style="color: grey; width: 110px;">
                        				<option value="0" style="color:grey">[Select One]</option>
                        				<option value="147" style="color: black;">Formwork Modified</option>
                        				<option value="138" style="color: black;">Horizontal &amp; Vertical Form</option>
                        				<option value="143" style="color: black;">Horizontal Form Only</option>
                        				<option value="118" style="color: black;">Package</option>
                        				<option value="148" style="color: black;">Package Modified</option>
                        				<option value="149" style="color: black;">Vertical Form Only</option>
                        
                        			</select>
                                                                                </td><td>
                                                                                    <select name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$ddlBidType" id="ContentPlaceHolder1_grdBidResult_ddlBidType_0" class="form-control" style="color: grey; width: 110px;">
                        				<option value="0" style="color:grey">[Select One]</option>
                        				<option value="119" style="color: black;">Budget</option>
                        				<option value="120" style="color: black;">Final</option>
                        				<option value="101" style="color: black;">ROM</option>
                        				<option value="232" style="color: black;">Test Bid Type</option>
                        
                        			</select>
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtDrwgStage" type="text" id="ContentPlaceHolder1_grdBidResult_txtDrwgStage_0" class="form-control remove">
                                                                                </td><td>
                                                                                    <div class="input-group date" data-date="25-11-2015" data-date-format="mm/dd/yyyy">
                                                                                        <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtStartDate" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtStartDate_0" class="form-control date" style="background-color:White;">
                                                                                        <span class="input-group-btn add-on">
                                                                                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-calendar"></span></button>
                                                                                        </span>
                                                                                    </div>
                                                                                </td><td class="vertical-line">
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtMDCost" type="text" id="ContentPlaceHolder1_grdBidResult_txtMDCost_0" class="form-control dolNum">
                                                                                </td><td class="line-space">
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtTotalBid" type="text" id="ContentPlaceHolder1_grdBidResult_txtTotalBid_0" class="form-control">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtProfit" type="text" id="ContentPlaceHolder1_grdBidResult_txtProfit_0" class="form-control">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtProfitOnCost" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtProfitOnCost_0" class="form-control form-control-1">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtTotalCSF" type="text" id="ContentPlaceHolder1_grdBidResult_txtTotalCSF_0" class="form-control ">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtTotalSF" type="text" id="ContentPlaceHolder1_grdBidResult_txtTotalSF_0" class="form-control">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtTotalCY" type="text" id="ContentPlaceHolder1_grdBidResult_txtTotalCY_0" class="form-control">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtCSF" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtCSF_0" class="form-control form-control-1">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtSF" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtSF_0" class="form-control form-control-1">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtCY" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtCY_0" class="form-control form-control-1">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtLowerBidder" type="text" id="ContentPlaceHolder1_grdBidResult_txtLowerBidder_0" class="form-control remove">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtPrice" type="text" id="ContentPlaceHolder1_grdBidResult_txtPrice_0" class="form-control remove">
                                                                                </td><td>
                                                                                    <input name="ctl00$ContentPlaceHolder1$grdBidResult$ctl02$txtNeeded" type="text" readonly="readonly" id="ContentPlaceHolder1_grdBidResult_txtNeeded_0" class="form-control form-control-1">
                                                                                </td>
                        		</tr>
                        	</tbody></table>
                        </div>
                        
                        
                        
                                                                </div><div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 847px; max-width: 1329px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div> 
                                                                
                                                                <div class="add_link">
                                                                                                            <span id="ContentPlaceHolder1_btnSpanHide"><a href="#"><i class="fa fa-plus"></i>
                                                                                                                </a><a onclick="return Validate();" id="ContentPlaceHolder1_lnkbtnAddRow" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lnkbtnAddRow','')">ADD LINE</a></span>
                                                                                                        </div><div class="add_link">
                                                                                                                                                    <span><a href="#"><i class="fa fa-save"></i>
                                                                                                                                                        </a><a onclick="return ValidateBidDateOnSave();" id="ContentPlaceHolder1_lnkbtnSaveBid" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lnkbtnSaveBid','')">SAVE BID</a>
                                                                                                                                                    </span>
                                                                                                        
                                                                                                                                                </div>
                                                                 </div>
                                                                
                                                             
                        </div>
                    </div></div>
                    
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
        <h2>Previous Results</h2>
        </article>
         <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="jarviswidget  "   id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                 <header>
                     <h2 class="font-md">BID DATE : 8/19/2017</h2>
                 </header>
                 <!-- widget div-->
                 <div>
                     <!-- widget edit box -->
                                         <!-- end widget edit box -->
                     <!-- widget content -->
                     <div class="widget-body">
                         <div class="row"> <div class="col-md-12">
         <div class="bid_table mCustomScrollbar _mCS_2" style="overflow: scroll;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 2500px;" dir="ltr"><table class="grid-table-1"><tbody><tr class="table-bordered-1"><th> </th><th class="Hide-Column">BidInformationId</th><th>Client</th><th>Scope</th><th>Bid Type</th><th>Drwg Stage</th><th>MD Cost</th><th>Total Bid</th><th>Profit</th><th>Profit % on Cost</th><th>Total CSF</th><th>Total SF</th><th>Total CY</th><th>SCSF</th><th>SSF</th><th>SCY</th><th>Lower Bidder</th><th>Price</th><th>Needed % on Cost</th><th>Start Date</th></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr></tbody></table></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 717px; max-width: 1329px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div></div></div></div></div></article>
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="jarviswidget  " id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                 <header>
                     <h2 class="font-md">BID DATE : 8/19/2017</h2>
                 </header>
                 <!-- widget div-->
                 <div>
                     <!-- widget edit box -->
                                         <!-- end widget edit box -->
                     <!-- widget content -->
                     <div class="widget-body">
                         <div class="row"> <div class="col-md-12">
         <div class="bid_table mCustomScrollbar _mCS_2" style="overflow: scroll;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 2500px;" dir="ltr"><table class="grid-table-1"><tbody><tr class="table-bordered-1"><th> </th><th class="Hide-Column">BidInformationId</th><th>Client</th><th>Scope</th><th>Bid Type</th><th>Drwg Stage</th><th>MD Cost</th><th>Total Bid</th><th>Profit</th><th>Profit % on Cost</th><th>Total CSF</th><th>Total SF</th><th>Total CY</th><th>SCSF</th><th>SSF</th><th>SCY</th><th>Lower Bidder</th><th>Price</th><th>Needed % on Cost</th><th>Start Date</th></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr></tbody></table></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 717px; max-width: 1329px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div></div></div></div></div></article>
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="jarviswidget  " id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                 <header>
                     <h2 class="font-md">BID DATE : 8/19/2017</h2>
                 </header>
                 <!-- widget div-->
                 <div>
                     <!-- widget edit box -->
                                         <!-- end widget edit box -->
                     <!-- widget content -->
                     <div class="widget-body">
                         <div class="row"> <div class="col-md-12">
         <div class="bid_table mCustomScrollbar _mCS_2" style="overflow: scroll;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 2500px;" dir="ltr"><table class="grid-table-1"><tbody><tr class="table-bordered-1"><th> </th><th class="Hide-Column">BidInformationId</th><th>Client</th><th>Scope</th><th>Bid Type</th><th>Drwg Stage</th><th>MD Cost</th><th>Total Bid</th><th>Profit</th><th>Profit % on Cost</th><th>Total CSF</th><th>Total SF</th><th>Total CY</th><th>SCSF</th><th>SSF</th><th>SCY</th><th>Lower Bidder</th><th>Price</th><th>Needed % on Cost</th><th>Start Date</th></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr></tbody></table></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 717px; max-width: 1329px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div></div></div></div></div></article>
        
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="jarviswidget  " id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                 <header>
                     <h2 class="font-md">BID DATE : 8/19/2017</h2>
                 </header>
                 <!-- widget div-->
                 <div>
                     <!-- widget edit box -->
                                         <!-- end widget edit box -->
                     <!-- widget content -->
                     <div class="widget-body">
                         <div class="row"> <div class="col-md-12">
         <div class="bid_table mCustomScrollbar _mCS_2" style="overflow: scroll;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 2500px;" dir="ltr"><table class="grid-table-1"><tbody><tr class="table-bordered-1"><th> </th><th class="Hide-Column">BidInformationId</th><th>Client</th><th>Scope</th><th>Bid Type</th><th>Drwg Stage</th><th>MD Cost</th><th>Total Bid</th><th>Profit</th><th>Profit % on Cost</th><th>Total CSF</th><th>Total SF</th><th>Total CY</th><th>SCSF</th><th>SSF</th><th>SCY</th><th>Lower Bidder</th><th>Price</th><th>Needed % on Cost</th><th>Start Date</th></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr><tr class="table-bordered-1"><td><span><i class="fa fa-pencil btn-Bid-Edit EditRow" title="Edit Row" aria-hidden="true" onclick="EditValue();"></i></span>
         </td><td class="Hide-Column">588</td><td></td><td>Horizontal Form Only</td><td>ROM</td><td>test</td><td>$ 4,455.00/MD</td><td>$ 555</td><td>$ 889</td><td>-266.17%</td><td>445 CSF</td><td>555 SF</td><td>55 CY</td><td>$1.25/CSF</td><td>$1.00/SF</td><td>$10.09/CY</td><td>555</td><td>555</td><td></td><td>4/27/2017</td></tr></tbody></table></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 717px; max-width: 1329px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div></div></div></div></div></article>
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