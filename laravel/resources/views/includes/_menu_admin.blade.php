<aside id="left-panel">

			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul class="main-Menu">
					<li  
						@if((strpos(Request::url(),'admin/company') !== false))
						class="active" 
						@endif
					>
						<a href="{{ url('admin/company') }}"><i class="glyphicon glyphicon-info-sign fa-lg fa-fw" style="color: #404040;"></i> <span class="menu-item-parent">Company Info</span></a>
					</li>
					<li
						@if((strpos(Request::url(),'admin/regions') !== false))
						class="active" 
						@endif
					>
						<a href="{{ url('admin/regions') }}"><i class="fa fa-lg fa-fw fa-cube" style="color: #404040;"></i> <span class="menu-item-parent">Operational Regions</span></a>
					</li>
					<!--<li
						@if((strpos(Request::url(),'admin/fields') !== false))
						class="active" 
						@endif
					>
						<a href="{{ url('admin/fields') }}"><i class="fa fa-lg fa-fw fa-list-alt" style="color: #404040;"></i> <span class="menu-item-parent">Fields Manager</span></a>
					</li>-->
					<li
						@if((strpos(Request::url(),'admin/user_groups') !== false))
						class="active" 
						@endif
					>
						<a href="{{ url('admin/user_groups') }}"><i class="fa fa-lg fa-fw fa-key" style="color: #404040;"></i> <span class="menu-item-parent">User Roles</span></a>
					</li>
					<li
						@if((strpos(Request::url(),'admin/users') !== false))
						class="active" 
						@endif
					>
						<a href="{{ url('admin/users') }}"><i class="fa fa-lg fa-fw fa-user" style="color: #404040;"></i> <span class="menu-item-parent">User Accounts</span></a>
					</li>
				</ul>
			</nav>
			

			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>