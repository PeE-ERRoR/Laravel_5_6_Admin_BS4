<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="{{ asset('./assets/fonts/batch-icons/css/batch-icons.css') }}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="{{ asset('./assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="{{ asset('./assets/css/hamburgers/hamburgers.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/demo/ui-icons-batch-icons.css') }}">
    <!-- QuillPro Styles -->
    <link rel="stylesheet" href="{{ asset('./assets/css/quillpro/quillpro.css') }}">
</head>
<body>
    {{-- <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <div class="container-fluid">
    		<div class="row">
    			<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
    				<ul class="nav nav-pills flex-column">
    					<li class="logo-nav-item">
    						<a class="navbar-brand" href="#">
    							<img src="assets/img/logo-white.png" width="145" height="32.3" alt="QuillPro">
    						</a>
    					</li>
    					<li>
    						<h6 class="nav-header">General</h6>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link active" href="index.html">
    							<i class="batch-icon batch-icon-browser-alt"></i>
    							Dashboard <span class="sr-only">(current)</span>
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-layout-content-left"></i>
    							Layout
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="layout-left-menu-hidden.html">Left Menu - Hidden</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="layout-left-menu-normal.html">Left Menu - Normal</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="layout-top-menu-fixed.html">Top Menu - Fixed</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="layout-top-menu-normal.html">Top Menu - Normal</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="starter-kit.html">
    							<i class="batch-icon batch-icon-star"></i>
    							Starter Kit
    						</a>
    					</li>
    				</ul>

    				<ul class="nav nav-pills flex-column">
    					<li>
    						<h6 class="nav-header">Apps</h6>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-store"></i>
    							eCommerce
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="ecommerce-dashboard.html">Dashboard</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ecommerce-product-page.html">Product Page</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ecommerce-category-page.html">Category Page</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ecommerce-cart.html">Cart</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ecommerce-checkout-page.html">Checkout Page</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-search"></i>
    							Search Results
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="search-results-normal.html">Normal Search</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="search-results-media.html">Media Search</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-mail"></i>
    							Mail
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="mail-inbox.html">Inbox</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="mail-message.html">Message</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="mail-compose.html">Compose</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="calendar.html">
    							<i class="batch-icon batch-icon-calendar"></i>
    							Calendar
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-list"></i>
    							Tasks
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="task-list.html">Task List</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="task-manager.html">Task Manager</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="timeline.html">
    							<i class="batch-icon batch-icon-timeline"></i>
    							Timeline
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="price-list.html">
    							<i class="batch-icon batch-icon-tag-alt-2"></i>
    							Price List
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="invoice.html">
    							<i class="batch-icon batch-icon-list-alt"></i>
    							Invoice
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-browser-alt-close"></i>
    							Error Pages
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="error-pages-404.html">404 Page</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="error-pages-500.html">500 Page</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-locked"></i>
    							Sign In &amp; Sign Up
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-signin.html">Sign In</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-signin-2.html">Sign In 2</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-signup.html">Sign Up</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-signup-2.html">Sign Up 2</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-forgot-password.html">Forgot Password</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-forgot-password-2.html">Forgot Password 2</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-lock-screen.html">Lock Screen</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="sisu-lock-screen-2.html">Lock Screen 2</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="profiles-member-profile.html">
    							<i class="batch-icon batch-icon-users"></i>
    							Profile
    						</a>
    					</li>
    				</ul>

    				<ul class="nav nav-pills flex-column">
    					<li>
    						<h6 class="nav-header">Components</h6>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-unite"></i>
    							UI Kit
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="ui-cards.html">Cards</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-cards-special.html">Special Cards</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-charts.html">Charts</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-buttons.html">Buttons</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-typography.html">Typography</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-tooltips-popovers.html">Tooltips &amp; Popovers</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-modal-boxes.html">Modal Boxes</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-notifications.html">Notifications (Toastr)</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link nav-parent" href="#">Icons</a>
    								<ul class="nav nav-pills flex-column">
    									<li class="nav-item">
    										<a class="nav-link" href="ui-icons-batch-icons.html">Batch Icons</a>
    									</li>
    								</ul>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="ui-other-bootstrap-elements.html">Other Bootstrap 4 Elements</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent">
    							<i class="batch-icon batch-icon-compose-alt-2"></i>
    							Forms
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="forms.html">Form Elements</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="forms-extras.html">Form Extras</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="forms-validation.html">Form Validation</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="forms-wizard.html">Form Wizard</a>
    							</li>
    						</ul>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link" href="tables.html">
    							<i class="batch-icon batch-icon-layout-center-column"></i>
    							Tables
    						</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link nav-parent" href="#">
    							<i class="batch-icon batch-icon-menu"></i>
    							Menu Levels
    						</a>
    						<ul class="nav nav-pills flex-column">
    							<li class="nav-item">
    								<a class="nav-link" href="#">Level 1 - Item 1</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link nav-parent" href="#">Level 1 - Item 2</a>
    								<ul class="nav nav-pills flex-column">
    									<li class="nav-item">
    										<a class="nav-link" href="#">Level 2 - Item 1</a>
    									</li>
    									<li class="nav-item">
    										<a class="nav-link" href="#">Level 2 - Item 2</a>
    									</li>
    									<li class="nav-item">
    										<a class="nav-link nav-parent" href="#">Level 2 - Item 3</a>
    										<ul class="nav nav-pills flex-column">
    											<li class="nav-item">
    												<a class="nav-link" href="#">Level 3 - Item 1</a>
    											</li>
    											<li class="nav-item">
    												<a class="nav-link" href="#">Level 3 - Item 2</a>
    											</li>
    											<li class="nav-item">
    												<a class="nav-link" href="#">Level 3 - Item 3</a>
    											</li>
    											<li class="nav-item">
    												<a class="nav-link" href="#">Level 3 - Item 4</a>
    											</li>
    										</ul>
    									</li>
    									<li class="nav-item">
    										<a class="nav-link" href="#">Level 2 - Item 4</a>
    									</li>
    								</ul>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="#">Level 1 - Item 3</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link" href="#">Level 1 - Item 4</a>
    							</li>
    						</ul>
    					</li>
    				</ul>
    			</nav>
    			<div class="right-column">
    				<nav class="navbar navbar-expand-lg navbar-light bg-white">
    					<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
    						<span class="hamburger-box">
    							<span class="hamburger-inner"></span>
    						</span>
    					</button>

    					<div class="navbar-collapse" id="navbar-header-content">
    						<ul class="navbar-nav navbar-language-translation mr-auto">
    							<li class="nav-item dropdown">
    								<a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
    									<i class="batch-icon batch-icon-book-alt-"></i>
    									English
    								</a>
    								<ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
    									<li><a class="dropdown-item" href="#">Français</a></li>
    									<li><a class="dropdown-item" href="#">Deutsche</a></li>
    									<li><a class="dropdown-item" href="#">Español</a></li>
    								</ul>
    							</li>
    						</ul>
    						<ul class="navbar-nav navbar-notifications float-right">
    							<li class="nav-item dropdown">
    								<a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
    									<i class="batch-icon batch-icon-search"></i>
    								</a>
    								<ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search">
    									<li>
    										<form class="form-inline my-2 my-lg-0 no-waves-effect">
    											<div class="input-group">
    												<input type="text" class="form-control" placeholder="Search for...">
    												<span class="input-group-btn">
    													<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">Search</button>
    												</span>
    											</div>
    										</form>
    									</li>
    								</ul>
    							</li>
    							<li class="nav-item dropdown">
    								<a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-calendar" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
    									<i class="batch-icon batch-icon-calendar"></i>
    									<span class="notification-number">6</span>
    								</a>
    								<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-calendar">
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Meeting with Project Manager</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">Right now</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Sales Call</h6>
    												<div class="notification-text">
    													Nibh amet cras sit libero
    												</div>
    												<span class="notification-time">One hour from now</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Email CEO new expansion proposal</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">In 3 days</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Team building exercise</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">In one week</span>
    											</div>
    										</a>
    									</li>
    								</ul>
    							</li>
    							<li class="nav-item dropdown">
    								<a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-misc" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
    									<i class="batch-icon batch-icon-bell"></i>
    									<span class="notification-number">4</span>
    								</a>
    								<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-misc">
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-bell batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">General Notification</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">Just now</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-cloud-download batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Your Download Is Ready</h6>
    												<div class="notification-text">
    													Nibh amet cras sit libero
    												</div>
    												<span class="notification-time">5 minutes ago</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-tag-alt-2 batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">New Order</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">Yesterday</span>
    											</div>
    										</a>
    									</li>
    									<li class="media">
    										<a href="task-list.html">
    											<i class="batch-icon batch-icon-pull batch-icon-xl d-flex mr-3"></i>
    											<div class="media-body">
    												<h6 class="mt-0 mb-1 notification-heading">Pull Request</h6>
    												<div class="notification-text">
    													Cras sit amet nibh libero
    												</div>
    												<span class="notification-time">3 day ago</span>
    											</div>
    										</a>
    									</li>
    								</ul>
    							</li>
    						</ul>
    						<ul class="navbar-nav ml-5 navbar-profile">
    							<li class="nav-item dropdown">
    								<a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
    									<div class="profile-name">
    										{{-- {{ Auth::user()->name }} --}}
    									</div>
    									<div class="profile-picture bg-gradient bg-primary has-message float-right">
    										<img src="assets/img/profile-pic.jpg" width="44" height="44">
    									</div>
    								</a>
    								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
    									<li><a class="dropdown-item" href="profiles-member-profile.html">Profile</a></li>
    									<li>
    										<a class="dropdown-item" href="mail-inbox.html">
    											Messages
    											<span class="badge badge-danger badge-pill float-right">3</span>
    										</a>
    									</li>
    									<li><a class="dropdown-item" href="profiles-member-profile.html">Settings</a></li>
    									<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
    								</ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                    </form>
    							</li>
    						</ul>
    					</div>
    				</nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
            <main class="main-content pt-3 mb-3" role="main">
              @yield('content')
    				</main>
    			</div>
    		</div>
    	</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  	<script type="text/javascript" src="assets/plugins/velocity/velocity.ui.min.js"></script>
  	<!-- Custom Scrollbar -->
  	<script type="text/javascript" src="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  	<!-- QuillPro Scripts -->
  	<script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>
