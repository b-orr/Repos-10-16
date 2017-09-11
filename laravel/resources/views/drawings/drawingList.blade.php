@include('../includes/_header')


		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

@include('../includes/_menu')
		<style type="text/css">
			.font-lg {
				font-size: 100% !important;
			}
			#dropzone {
				min-height: 15px !important;
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
					<li>Home</li><li>Projects</li><li>1001 Broadway</li><li>Drawings</li><li>Contract Documents</li>
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
			<!-- hidden input-->
				<input type="hidden" name="releaseDescTake" id="releaseDescTake" value="">
				<input type="hidden" name="releaseDateTake" id="releaseDateTake" value="">
				<input type="hidden" name="user" id="user" value="{{$user->id}}">
			<!-- hidden input-->
			<div id="content">
				<div class="row col-lg-12">
				<!-- widget grid -->
				<section id="widget-grid" class="">
							
					<!-- row -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">

								<!-- Widget ID (each widget will need unique ID)-->
								<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
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
										<h2 class="font-md">Architectural</h2>
									</header>

									<!-- widget div-->
									<div>
										
										<!-- widget edit box -->
										<div class="jarviswidget-editbox">
											<!-- This area used as dropdown edit box -->

										</div>
										<!-- end widget edit box -->
										
										<!-- widget content -->
										<div class="widget-body no-padding">
											<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
												<thead>			                
													<tr>
														<th data-hide="phone">Drawing Name</th>
														<th data-class="expand">Release Description</th>
														<th data-hide="phone">Revision Number</th>
														<th>Drawing Date</th>
														<th data-hide="phone,tablet">Edit</th>
													</tr>
												</thead>
												<tbody>
												
												@foreach($drawings AS $val)
												<tr>
														<td><!--{{ $val->drawing_name }} - -->{{ $val->description }}</td>
														<td>{{ $val->uploads->release_desc }}</td>
														<td>{{ $val->revisited_num }}</td>
														<td>{{ date('m/d/Y', strtotime($val->updated_at ))}}</td>
														<td><a href="{{ url('project/' . $project_id .'/folders/' .$folder_id . '/drawingView/' .$val->id)}}"><i class="fa fa-pencil"></i></a></td>
													</tr>
											 @endforeach
												</tbody>
											</table>
											<br><br>
										</div>
										<!-- end widget content -->
										
									</div>
									<!-- end widget div -->
									
								</div>
								<!-- end widget -->
							
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
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-right: 2px;" >
													<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" style="padding-right: 0px; padding-left: 2px;">
														Import <br> Drawings
													</button>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-7 col-lg-6 text-right" style="padding-left: 2px;">
													
													<button class="btn btn-success btn-block " style="padding-right: 0px; padding-left: 2px; height: auto;">
														Download <br>Current Set
													</button>
													
												</div>
												
											</div><br>
																																	
											<?php foreach ($UploadedFiles as $key => $value): ?>
												
											<div class="padding-10 bordered" id="uploadedFile-{{$value->id}}">
												<p>
													{{ $value->filename}}<span class="txt-color-green"></span>
												
													
													@if($value->processed==0)
													
													<span id="silent_call{{$value->id}}">
														<span class="txt-color-green"><i class="fa fa-check"></i></span>
													<a class="btn btn-danger btn-xs pull-right" href="#" onclick="silent_call('{{ url('project/' . $project_id .'/folders/' .$folder_id . '/processFile/' .$value->id)}}', {{$value->id}})" style="margin: 0;">Process Now</a></span>
													@else
													
													@if($value->processed==2)
													<br/><br/>Your request is processing, refresh your page shortly to view the results. Aprox. time 5-10 minutes
													@endif
													
													@if($value->processed==1)
													<br/><br/>File successfully processed
													<a class="btn btn-success btn-xs pull-right" href="{{ url('project/' . $project_id .'/folders/' .$folder_id . '/thumbnailView/' .$value->id)}}" style="margin: 0;">Thumbnail View</a>
													@endif
													
													@endif
												</p>
											</div>
											<br>
											<?php endforeach ?>
										</div>
										</div>
										<!-- end widget content -->
										
								</div>
								<!-- end widget -->
							
							</article>
							
							<form method="post" action="{{ url('project/' . $project_id . '/folders/' . $folder_id .'/saveFile') }}" class="process_form">
							{{ csrf_field() }}
							<input type="hidden" name="project_id" value={{ $project_id }} >
							<input type="hidden" name="user_id" value={{$folder_id}} >
							<input type="submit" value="submit" id="process_form_submit" style="display:none">
							</form>
					<!-- row -->
					<article class="col-xs-12 col-sm-6 col-md-6 col-lg-9">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-3" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
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
									<h2 class="font-md">Structural</h2>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										<table id="dt_basic1" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">Drawing Name</th>
													<th data-class="expand">Release Description</th>
													<th data-hide="phone">Revision Number</th>
													<th>Drawing Date</th>
													<th data-hide="phone,tablet">Edit</th>
												</tr>
											</thead>
											<tbody>
									 
											</tbody>
										</table>
										<br><br>
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
						</article>
						
				</section>

				</div>
				<!-- end widget grid -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #404040;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel" style="color: white; font-weight: bold;">Drawing Upload Info</h4>
							</div>
							
									<div class="modal-body">
										<div class="row"  style="display: flex; justify-content: center;">
											<div class="col-md-6">
												<div class="form-group">
													<label class="input" style="font-weight: bold;" id="releaseDescription_label">Release Description</label>
													<input type="text" class="form-control" required style="padding-left: 5px;" value=""/ id="releaseDescription">
												</div>
												<div class="form-group">
													<label class="input" style="font-weight: bold;" id="releaseDate_label">Release Date</label>
													<input id="releaseDate" type="text" class="form-control datepicker" data-dateformat="dd/mm/yy" value="" style="padding-left: 5px;">
												</div>
												<section>
												<div class="form-group">
													<label class="input" style="font-weight: bold;">File input</label><small class="font-xs"> (Click below to open File Explorer)</small>
													<form action="<?php echo $upload->getFormUrl(); ?>"
													      method="POST"
													      enctype="multipart/form-data" 
														 class="dropzone"
														id="mydropzone">
														
														 <?php echo $upload->getFormInputsAsHtml(); ?>
						 
														
														
												 
													</form> <!-- {{ asset('public/assets/plugins/upload.php') }} -->
												</div>
												</section>

												<div class="progress">
												    <div class="progress-bar progress-bar-primary" id="progress_bar"role="progressbar" data-dz-uploadprogress>
												        <span class="progress-text"></span>
												    </div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">
											Cancel
										</button>
									<!--	<button type="button" class="btn btn-primary" data-dismiss="modal" id="pdfUpload" >
											Upload
										</button>-->
									</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		@include('../includes/_footer')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.14.1/js/jquery.fileupload.min.js"></script>
		<script src="{{ asset('assets/js/plugin/dropzone/dropzone.min.js') }}"></script>
		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
		 
					
					
					function randomIntFromInterval(min,max)
					{
					    return Math.floor(Math.random()*(max-min+1)+min);
					}	
					
					
						  s3counter=0;			
						     			
						  
							$("#mydropzone").dropzone({
							 	

							
								addedfile: function (file, response) {
							 	
									var myDropzone = this;
									var fileName = myDropzone.files[s3counter].name
	                   				 	
	                $('input[name="key"]').val('drawings/' + randomIntFromInterval(10000000000, 100000000000) + '.pdf')
									$('#releaseDescTake').val($('#releaseDescription').val());
									$('#releaseDateTake').val($('#releaseDate').val());
								},

								uploadprogress: function(file, progress, bytesSent) {
								    	var percent = (progress).toFixed(2);
								        var progressElement = $("#progress_bar");
								        progressElement.css('width', percent + '%').html(percent+'%');
								        progressElement.querySelector(".progress-text").textContent = percent + "%";
								   
								},

								success: function(file, response){

								 var releaseDesc = $('#releaseDescTake').val();
								 var releaseDate = $('#releaseDateTake').val();
								 var user = $('#user').val();
								 
								 xmlDoc = $.parseXML( response );
								 $xml = $( xmlDoc );
								            
				          	$Location = $xml.find( "Location" );
				        	$Key = $xml.find( "Key" );
				        	$ETag = $xml.find( "ETag" );
				        	
				  
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][location]" value="'+$Location.text()+'" />');
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][key]" value="'+$Key.text()+'" />');
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][etag]" value="'+$ETag.text()+'" />');
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][releaseDesc]" value="'+releaseDesc+'" />');
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][releaseDate]" value="'+releaseDate+'" />');
				        	$('.process_form').append('<input type="hidden" name="s3file['+s3counter+'][user]" value="'+user+'" />');
				        	$('#process_form_submit').click();

				        	var name = ($Key.text().slice(9)).slice(0,-4);
				        	
   				        s3counter++;
//				        	alert($Location.text())
//				        	alert($Key.text())
//				        	alert($ETag.text())
							
							$('#pdfUpload').click();
							}
			
							});
			
			

			
			$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					}
				});
			$('#dt_basic1').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					}
				});
			/*
			 * Autostart Carousel
			 */
			$('.carousel.slide').carousel({
				interval : 3000,
				cycle : true
			});
			$('.carousel.fade').carousel({
				interval : 3000,
				cycle : true
			});
		
			// Fill all progress bars with animation
			
			$('.progress-bar').progressbar({
				display_text : 'fill'
			});
			
			$('input[name="checkbox-style"]').change(function() {
				//alert($(this).val())
				$this = $(this);
		
				if ($this.attr('value') === "switch-1") {
					$("#switch-1").show();
					$("#switch-2").hide();
				} else if ($this.attr('value') === "switch-2") {
					$("#switch-1").hide();
					$("#switch-2").show();
				}
		
			}); 
			
			// tab - pills toggle
			$('#show-tabs').click(function() {
				$this = $(this);
				if($this.prop('checked')){
					$("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
				} else {
					$("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
				}
				
			});			
		
		});

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();



			// upload append here
			var uploadedFilesCount = 1;
			$('#pdfUpload1').on('click', function() {
				uploadedFilesCount++;

				var htmlstr = '<div class="padding-10 bordered" id="uploadedFile-'+uploadedFilesCount+'">';
				htmlstr += 	'<p>';
				htmlstr += 		'Addendum #'+uploadedFilesCount+' is uploading ';
				htmlstr += 		'<span class="txt-color-green pull-right"><i class="fa fa-upload"></i></span>';
				htmlstr += 	'</p>';
				htmlstr += 	'<div class="progress progress-xs progress-striped active">';
				htmlstr += 		'<div id="bar-'+uploadedFilesCount+'" class="progress-bar bg-color-greenLight" role="progressbar"></div>';
				htmlstr += 	'</div>';
				htmlstr += '</div>';

				var htmlstrDone = 'Addendum #'+uploadedFilesCount+'<span class="txt-color-green"></span>';

				htmlstrDone += '<span class="txt-color-green"><i class="fa fa-check"></i></span>';
				htmlstrDone += '<a class="btn btn-danger btn-xs pull-right" href="#" onclick="$(".process_form").submit()" style="margin: 0;">Process Now</a>';
								
				$('.widget-body-toolbar').append(htmlstr);

				var timeleft = 99;
				var downloadTimer = setInterval(function(){
				var pbpercent = 100 - timeleft-- + '%';


				  $("#bar-"+uploadedFilesCount).width(pbpercent);
				  if(timeleft <= 0){
				  	clearInterval(downloadTimer);
				  	$('#uploadedFile-'+uploadedFilesCount).empty();
				  	$('#uploadedFile-'+uploadedFilesCount).append(htmlstrDone);
				  }
				},60);
			});
			// upload append ends here

			
			/*
			 * Smart Notifications
			 */
			$('#eg1').click(function(e) {
		
				$.bigBox({
					title : "Big Information box",
					content : "This message will dissapear in 6 seconds!",
					color : "#C46A69",
					//timeout: 6000,
					icon : "fa fa-warning shake animated",
					number : "1",
					timeout : 6000
				});
		
				e.preventDefault();
		
			})
		
			$('#eg2').click(function(e) {
		
				$.bigBox({
					title : "Big Information box",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#3276B1",
					//timeout: 8000,
					icon : "fa fa-bell swing animated",
					number : "2"
				});
		
				e.preventDefault();
			})
		
			$('#eg3').click(function(e) {
		
				$.bigBox({
					title : "Shield is up and running!",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#C79121",
					//timeout: 8000,
					icon : "fa fa-shield fadeInLeft animated",
					number : "3"
				});
		
				e.preventDefault();
		
			})
		
			$('#eg4').click(function(e) {
		
				$.bigBox({
					title : "Success Message Example",
					content : "Lorem ipsum dolor sit amet, test consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#739E73",
					//timeout: 8000,
					icon : "fa fa-check",
					number : "4"
				}, function() {
					closedthis();
				});
		
				e.preventDefault();
		
			})
	
			
		
			$('#eg5').click(function() {
		
				$.smallBox({
					title : "Ding Dong!",
					content : "Someone's at the door...shall one get it sir? <p class='text-align-right'><a href='javascript:void(0);' class='btn btn-primary btn-sm'>Yes</a> <a href='javascript:void(0);' class='btn btn-danger btn-sm'>No</a></p>",
					color : "#296191",
					//timeout: 8000,
					icon : "fa fa-bell swing animated"
				});
		
			});
		

		
			$('#eg6').click(function() {
		
				$.smallBox({
					title : "Big Information box",
					content : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
					color : "#5384AF",
					//timeout: 8000,
					icon : "fa fa-bell"
				});
		
			})
		
			$('#eg7').click(function() {
		
				$.smallBox({
					title : "James Simmons liked your comment",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})
			
			function closedthis() {
				$.smallBox({
					title : "Great! You just closed that last alert!",
					content : "This message will be gone in 5 seconds!",
					color : "#739E73",
					iconSmall : "fa fa-cloud",
					timeout : 5000
				});
			}
		
			/*
			* SmartAlerts
			*/
			// With Callback
			$("#smart-mod-eg1").click(function(e) {
				$.SmartMessageBox({
					title : "Smart Alert!",
					content : "This is a confirmation box. Can be programmed for button callback",
					buttons : '[No][Yes]'
				}, function(ButtonPressed) {
					if (ButtonPressed === "Yes") {
		
						$.smallBox({
							title : "Callback function",
							content : "<i class='fa fa-clock-o'></i> <i>You pressed Yes...</i>",
							color : "#659265",
							iconSmall : "fa fa-check fa-2x fadeInRight animated",
							timeout : 4000
						});
					}
					if (ButtonPressed === "No") {
						$.smallBox({
							title : "Callback function",
							content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
							color : "#C46A69",
							iconSmall : "fa fa-times fa-2x fadeInRight animated",
							timeout : 4000
						});
					}
		
				});
				e.preventDefault();
			})
			// With Input
			$("#smart-mod-eg2").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Alert: Input",
					content : "Please enter your user name",
					buttons : "[Accept]",
					input : "text",
					placeholder : "Enter your user name"
				}, function(ButtonPress, Value) {
					alert(ButtonPress + " " + Value);
				});
		
				e.preventDefault();
			})
			// With Buttons
			$("#smart-mod-eg3").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Notification: Buttons",
					content : "Lots of buttons to go...",
					buttons : '[Need?][You][Do][Buttons][Many][How]'
				});
		
				e.preventDefault();
			})
			// With Select
			$("#smart-mod-eg4").click(function(e) {
		
				$.SmartMessageBox({
					title : "Smart Alert: Select",
					content : "You can even create a group of options.",
					buttons : "[Done]",
					input : "select",
					options : "[Costa Rica][United States][Autralia][Spain]"
				}, function(ButtonPress, Value) {
					alert(ButtonPress + " " + Value);
				});
		
				e.preventDefault();
			});
		
			// With Login
			$("#smart-mod-eg5").click(function(e) {
		
				$.SmartMessageBox({
					title : "Login form",
					content : "Please enter your user name",
					buttons : "[Cancel][Accept]",
					input : "text",
					placeholder : "Enter your user name"
				}, function(ButtonPress, Value) {
					if (ButtonPress == "Cancel") {
						alert("Why did you cancel that? :(");
						return 0;
					}
		
					Value1 = Value.toUpperCase();
					ValueOriginal = Value;
					$.SmartMessageBox({
						title : "Hey! <strong>" + Value1 + ",</strong>",
						content : "And now please provide your password:",
						buttons : "[Login]",
						input : "password",
						placeholder : "Password"
					}, function(ButtonPress, Value) {
						alert("Username: " + ValueOriginal + " and your password is: " + Value);
					});
				});
		
				e.preventDefault();
			});			

		

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
		
		
		 <script>
		 
		 function silent_call(url, id) {
		 
		 	$.get(url);
		 	
		 	
		 	$('#silent_call'+id).html('<br/><br/><img src="https://c.s-microsoft.com/en-us/CMSImages/minifindstore_spin.gif?version=45117834-d17e-3a16-5765-62399907b530" height="20px">  Please wait, document is processing...'  )
		 	
		 	
		 	
		 	window.setInterval(function(){
		 	
				 	$.get( "{{ url('lambda_status/' .  $project_id .'/' . $folder_id ) }}/" + id, function( data ) {
				 	  	$('#silent_call'+id).html('<br/><br/>' + data)
				 	});
				 	
		 	}, 3000);
		 	
		 ;
		 	
		 }
//        $(document).ready(function () {
//
//            // Assigned to variable for later use.
//            var form = $('.direct-upload');
//            var filesUploaded = [];
//
//            // Place any uploads within the descending folders
//            // so ['test1', 'test2'] would become /test1/test2/filename
//            var folders = [];
//
//            form.fileupload({
//                url: form.attr('action'),
//                type: form.attr('method'),
//                datatype: 'xml',
//                add: function (event, data) {
//
//                    // Show warning message if your leaving the page during an upload.
//                    window.onbeforeunload = function () {
//                        return 'You have unsaved changes.';
//                    };
//
//                    // Give the file which is being uploaded it's current content-type (It doesn't retain it otherwise)
//                    // and give it a unique name (so it won't overwrite anything already on s3).
//                    var file = data.files[0];
//                    var filename = Date.now() + '.' + file.name.split('.').pop();
//                    form.find('input[name="Content-Type"]').val(file.type);
//                    form.find('input[name="key"]').val((folders.length ? folders.join('/') + '/' : '') + filename);
//
//                    // Actually submit to form to S3.
//                    data.submit();
//
//                    // Show the progress bar
//                    // Uses the file size as a unique identifier
//                    var bar = $('<div class="progress" data-mod="'+file.size+'"><div class="bar"></div></div>');
//                    $('.progress-bar-area').append(bar);
//                    bar.slideDown('fast');
//                },
//                progress: function (e, data) {
//                    // This is what makes everything really cool, thanks to that callback
//                    // you can now update the progress bar based on the upload progress.
//                    var percent = Math.round((data.loaded / data.total) * 100);
//                    $('.progress[data-mod="'+data.files[0].size+'"] .bar').css('width', percent + '%').html(percent+'%');
//                },
//                fail: function (e, data) {
//                    // Remove the 'unsaved changes' message.
//                    window.onbeforeunload = null;
//                    $('.progress[data-mod="'+data.files[0].size+'"] .bar').css('width', '100%').addClass('red').html('');
//                },
//                done: function (event, data) {
//                    window.onbeforeunload = null;
//
//                    // Upload Complete, show information about the upload in a textarea
//                    // from here you can do what you want as the file is on S3
//                    // e.g. save reference to your server using another ajax call or log it, etc.
//                    var original = data.files[0];
//                    var s3Result = data.result.documentElement.children;
//                    filesUploaded.push({
//                        "original_name": original.name,
//                        "s3_name": s3Result[2].innerHTML,
//                        "size": original.size,
//                        "url": s3Result[0].innerHTML.replace("%2F", "/")
//                    });
//                    $('#uploaded').html(JSON.stringify(filesUploaded, null, 2));
//                }
//            });
//        });
    </script>

	</body>

</html>