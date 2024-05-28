<nav x-data="{ open: false }" class="pcoded-navbar position-fixed">

		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span>{{ Auth::user()->name }}</span>
							<div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
                            <li class="list-group-item">
                                <x-dropdown-link :href="route('profile.edit')">
                                    <i class="feather icon-user m-r-5"></i>
                                    View Profile
                                </x-dropdown-link>
                            </li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <li class="list-group-item">
                                <div onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="feather icon-log-out"></i> Logout
                                </div> 
                            </li>
                           
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
				
					<li class="nav-item pcoded-menu-caption">
						<label>Products</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Products</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('products') }}">Products List</a></li>
							<li><a href="{{ route('create-product') }}">Create Products</a></li>

						</ul>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-layer-group"></i></span><span class="pcoded-mtext">Category</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('category') }}">Category  List</a></li>
							<li><a href="{{ route('create-category') }}">Create Category</a></li>
						</ul>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-euro-sign"></i></span><span class="pcoded-mtext">Promotions</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('promotions') }}">Promotions List</a></li>
							<li><a href="{{ route('create-promotion') }}">Add Promotions</a></li>
						</ul>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-tasks"></i></span><span class="pcoded-mtext">Order</span></a>
						<ul class="pcoded-submenu">
							<li><a href="#">Order List</a></li>
							<li><a href="#">Add Order</a></li>
							<li><a href="#">Order Details</a></li>
						</ul>
					</li>
                    <li class="nav-item pcoded-menu-caption">
						<label>Users</label>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span class="pcoded-mtext">Customers</span></a>
						<ul class="pcoded-submenu">
							<li><a href="#">All Customers</a></li>
                            <li><a href="#">Customers Details</a></li>
						</ul>
					</li>
                    <li class="nav-item pcoded-menu-caption">
						<label>Settings</label>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-pen"></i></span><span class="pcoded-mtext">Settings</span></a>
						<ul class="pcoded-submenu">
							<li><a href="#">Store Details</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Shipping & Delivery</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Notifications</a></li>
                           
						</ul>
					</li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-file-signature"></i></span><span class="pcoded-mtext">Pages</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                            <li><a href="#">page 4</a></li>
                            <li><a href="#">page 5</a></li>
                            <li><a href="#">page 6</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
						<label>Admin</label>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-users-cog"></i></span><span class="pcoded-mtext">Users</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('users') }}">All Users</a></li>
                            <li><a href="{{ route('create-users') }}">Create Users</a></li>
                            <li><a href="#">Permission</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
</nav>
