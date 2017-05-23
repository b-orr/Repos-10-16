<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>

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
					<li>Home</li><li>Miscellaneous</li><li>Blank Page</li>
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

				<!-- row -->
				<div class="row">
					
					<!-- col -->
					
					<!-- end col -->
					
					<!-- right side of the page with the sparkline graphs -->
					<!-- col -->
					
					<!-- end col -->
					
				</div>
				<!-- end row -->
				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
						
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0">
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
								
				
								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<article class="col-sm-12 col-md-12 col-lg-6">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-editbutton="false">
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
									<span class="widget-icon"> <i class="fa fa-sitemap"></i> </span>
									<h2>Simple View </h2>
				
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
				
										<div class="tree smart-form">

											<ul>
												<li>
													<span><i class="fa fa-lg fa-pencil"></i>Drawings</span>
													<button class='btn btn-xs btn-default' data-original-title='Edit Row' onclick=\"jQuery('#jqgrid').editRow('" + cl + "');\"><i class='fa fa-plus'></i></button>
													<ul>
														<li>
															<span><i class="fa fa-lg fa-folder"></i>Contract Documents</span>
															<ul>
																
																
															
															</ul>
														</li>
														<li>
															<span><i class="fa fa-lg fa-folder"></i>False Work</span>
															<ul>
																
											
																
															</ul>
														</li>
														<li>
															<span><i class="fa fa-lg fa-folder"></i>Inspections</span>
															<ul>
																
																
																
															</ul>
														</li>
														<li>
															<span><i class="fa fa-lg fa-folder"></i>Outlines</span>
															<ul>
																
																
																
															</ul>
														</li>
														<li>
															<span><i class="fa fa-lg fa-folder"></i>Reshore</span>
															<ul>
																
																
																
															</ul>
														</li>
													</ul>
												</li>
												
											</ul>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						</article>


							<div class="col-lg-12">
								<div class="ibox-content">

							<td><a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-folder"></i> Add New</a></td>
								</div>
							</div>	
						
						<br><br>
													
							<table class="table table-striped table-forum">
								<thead>
									<tr>
										<th colspan="2">Drawings</th>
										<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Drawings#</th>
										
										<th class="hidden-xs hidden-sm" style="width: 200px;">Last Change</th>
									</tr>
								</thead>
								<tbody>
									
									<!-- TR -->
									<tr>
										<td class="text-center" style="width: 40px;"><i class="fa fa-folder fa-2x text-muted"></i></td>
										<td>
											<h4><a href="">
												Contract Documents
												</a>
											<h4>
										</td>
										<td class="text-center hidden-xs hidden-sm">
											<a href="javascript:void(0);">15</a>
										</td>
										
										<td class="hidden-xs hidden-sm">by 
											<a href="javascript:void(0);">Bruce Orr</a>
											<br>
											<small><i>May 15, 2017</i></small>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="width: 40px;"><i class="fa fa-folder fa-2x text-muted"></i></td>
										<td>
											<h4><a href="">
												False Work
												</a>
												
											</h4>
										</td>
										<td class="text-center hidden-xs hidden-sm">
											<a href="javascript:void(0);">2</a>
										</td>
										
										<td class="hidden-xs hidden-sm">by 
											<a href="javascript:void(0);">Shelly Mereness</a>
											<br>
											<small><i>May 18, 2017</i></small>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="width: 40px;"><i class="fa fa-folder fa-2x text-muted"></i></td>
										<td>
											<h4><a href="">
												Inspections
												</a>
												
											</h4>
										</td>
										<td class="text-center hidden-xs hidden-sm">
											<a href="javascript:void(0);">7</a>
										</td>
										
										<td class="hidden-xs hidden-sm">by 
											<a href="javascript:void(0);">Amy Bunn</a>
											<br>
											<small><i>April 7, 2017</i></small>
										</td>
									</tr>
									<!-- end TR -->
									
									<!-- TR -->
									<tr>
										<td class="text-center" style="width: 40px;"><i class="fa fa-folder fa-2x text-muted"></i></td>
										<td>
											<h4><a href="">
												Outlines
												</a>
											</h4>
										</td>
										<td class="text-center hidden-xs hidden-sm">
											<a href="javascript:void(0);">1</a>
										</td>
										
										<td class="hidden-xs hidden-sm">by 
											<a href="javascript:void(0);">Mikeal Kanouff</a>
											<br>
											<small><i>May 5, 2017</i></small>
										</td>
									</tr>
									<!-- end TR -->
									
									<!-- TR -->
									<tr>
										<td class="text-center" style="width: 40px;"><i class="fa fa-folder fa-2x text-muted"></i></td>
										<td>
											<h4><a href="">
												Reshore
											</a>
												
											</h4>
										</td>
										<td class="text-center hidden-xs hidden-sm">
											<a href="javascript:void(0);">9</a>
										</td>
										
										<td class="hidden-xs hidden-sm">by 
											<a href="javascript:void(0);">Zlatko Bogoevski</a>
											<br>
											<small><i>May 6, 2017</i></small>
										</td>
									</tr>
									<!-- end TR -->
									
								</tbody>
							</table>
						</div>
							
					</div>
				
					<!-- end row -->
				
				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<?php include '../includes/_footer.php'; ?>
		<!-- PAGE RELATED PLUGIN(S) 
		<script src="..."></script>-->

		<script type="text/javascript">

			$(document).ready(function() {
			 	
				/* DO NOT REMOVE : GLOBAL FUNCTIONS!
				 *
				 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
				 *
				 * // activate tooltips
				 * $("[rel=tooltip]").tooltip();
				 *
				 * // activate popovers
				 * $("[rel=popover]").popover();
				 *
				 * // activate popovers with hover states
				 * $("[rel=popover-hover]").popover({ trigger: "hover" });
				 *
				 * // activate inline charts
				 * runAllCharts();
				 *
				 * // setup widgets
				 * setup_widgets_desktop();
				 *
				 * // run form elements
				 * runAllForms();
				 *
				 ********************************
				 *
				 * pageSetUp() is needed whenever you load a page.
				 * It initializes and checks for all basic elements of the page
				 * and makes rendering easier.
				 *
				 */
				
				 pageSetUp();
				 
				$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
			$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
				var children = $(this).parent('li.parent_li').find(' > ul > li');
				if (children.is(':visible')) {
					children.hide('fast');
					$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
				} else {
					children.show('fast');
					$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
				}
				e.stopPropagation();
			});
				
			})
		
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

	</body>

</html>