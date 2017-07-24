<aside id="left-panel">

			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul class="main-Menu">
					
					<li>
						<a href="../job/joboverview.php"><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">Job Overview</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">Field Docs</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">Safety Docs</span></a>
					</li>
					<li>
						<a href="{{ url('drawings') }}"><i class="fa fa-lg fa-fw fa-pencil" style="color: #404040;"></i> <span class="menu-item-parent">Drawings</span></a>
					</li>
					<li>
						<a href="{{ url('project/photos')}}"><i class="fa fa-lg fa-fw fa-picture-o" style="color: #404040;"></i> <span class="menu-item-parent">Photos</span></a>
					</li>
					<li>
						<a href="../project/rfis.php"><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">RFI's</span></a>
					</li>
					<li>
						<a href="../project/submittals.php"><i class="fa fa-lg fa-fw fa-suitcase" style="color: #404040;"></i> <span class="menu-item-parent">Submittals</span></a>
					</li>
					<li>
						<a href="../project/transmittals.php"><i class="fa fa-lg fa-fw fa-upload" style="color: #404040;"></i> <span class="menu-item-parent">Transmittals</span></a>
					</li>
					<li class="main-parent">
						<a href="#" title="Dashboard" class="highlight"><i class="fa fa-lg fa-fw fa-home" style="color: #404040;"></i> <span class="menu-item-parent needHiddenParent">Equipment</span></a>
						<ul>
							<li>
								<a href="{{ url('project/equipment/overview') }}" title="Admin"><span class="menu-item-parent needHidden">Overview</span></a>
							</li>
							<li class="">
								<a href="{{ url('project/equipment/forecasting') }}" title="Projects"><span class="menu-item-parent needHidden">Forecasting</span></a>
							</li>
							<li class="">
								<a href="{{ url('project/equipment/truckinglog') }}" title="Equipment"><span class="menu-item-parent needHidden">Trucking Log</span></a>
							</li>
							<li class="">
								<a href="{{ url('project/equipment/rental') }}" title="Contacts"><span class="menu-item-parent needHidden">Rental / Allocation</span></a>
							</li>
						</ul>	
					</li>
					<li>
						<a href=""><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">Admin</span></a>
					</li>
				</ul>
			</nav>

			<div style="width: 100% !important; height: 50%;">
				<span class="minifyme" data-action="minifyMenu" style="bottom: 50px;"> 
							<i class="fa fa-arrow-circle-left hit"></i> 
			</span>
			</div>
		</aside>