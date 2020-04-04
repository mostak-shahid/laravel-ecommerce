<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}">

	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('assets/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">

	@yield('style')

	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>

	<!--[if lt IE 9]><script src="{{asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<img src="{{asset('assets/images/logo@2x.png')}}" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="has-sub">
					<a href="/">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul>
						<li>
							<a href="/" target="_blank">
								<span class="title">Visit Site</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Home</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Updates</span>
								<span class="badge badge-success">3</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="{{route('post.index')}}">
						<i class="entypo-newspaper"></i>
						<span class="title">Posts</span>
					</a>
					<ul>
						<li>
							<a href="{{route('post.index')}}">
								<span class="title">All Posts</span>
							</a>
						</li>
						<li>
							<a href="{{route('post.create')}}">
								<span class="title">Add New</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Categories</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Tags</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="/">
						<i class="entypo-docs"></i>
						<span class="title">Pages</span>
					</a>
					<ul>
						<li>
							<a href="/">
								<span class="title">All Pages</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Add New</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
				<li class="has-sub">
					<a href="/">
						<i class="entypo-picture"></i>
						<span class="title">Media</span>
					</a>
					<ul>
						<li>
							<a href="/">
								<span class="title">Library</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Add New</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/" target="_blank">
						<i class="entypo-comment"></i>
						<span class="title">Comments</span>
					</a>
				</li>
				<li>
					<a href="/" target="_blank">
						<i class="entypo-palette"></i>
						<span class="title">Appearance</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="/">
						<i class="entypo-users"></i>
						<span class="title">Users</span>
					</a>
					<ul>
						<li>
							<a href="/">
								<span class="title">All Users</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Add New</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Your Profile</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="/">
						<i class="entypo-users"></i>
						<span class="title">Settings</span>
					</a>
					<ul>
						<li>
							<a href="/">
								<span class="title">General</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Writting</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Reading</span>
							</a>
						</li>
						<li>
							<a href="/">
								<span class="title">Discussion</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			
		</div>

	</div>

	<div class="main-content">
		<div class="row">

			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">

				<ul class="user-info pull-left pull-none-xsm">

					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44" />
							John Henderson
						</a>

						<ul class="dropdown-menu">

							<!-- Reverse Caret -->
							<li class="caret"></li>

							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>

							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>

							<li>
								<a href="extra-calendar.html">
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>

							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>

				</ul>

				<ul class="user-info pull-left pull-right-xs pull-none-xsm">

					<!-- Raw Notifications -->
					<li class="notifications dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">6</span>
						</a>

						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>

							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
										<a href="#">
											<i class="entypo-user-add pull-right"></i>

											<span class="line">
												<strong>New user registered</strong>
											</span>

											<span class="line small">
												30 seconds ago
											</span>
										</a>
									</li>

									<li class="unread notification-secondary">
										<a href="#">
											<i class="entypo-heart pull-right"></i>

											<span class="line">
												<strong>Someone special liked this</strong>
											</span>

											<span class="line small">
												2 minutes ago
											</span>
										</a>
									</li>

									<li class="notification-primary">
										<a href="#">
											<i class="entypo-user pull-right"></i>

											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

											<span class="line small">
												3 hours ago
											</span>
										</a>
									</li>

									<li class="notification-danger">
										<a href="#">
											<i class="entypo-cancel-circled pull-right"></i>

											<span class="line">
												John cancelled the event
											</span>

											<span class="line small">
												9 hours ago
											</span>
										</a>
									</li>

									<li class="notification-info">
										<a href="#">
											<i class="entypo-info pull-right"></i>

											<span class="line">
												The server is status is stable
											</span>

											<span class="line small">
												yesterday at 10:30am
											</span>
										</a>
									</li>

									<li class="notification-warning">
										<a href="#">
											<i class="entypo-rss pull-right"></i>

											<span class="line">
												New comments waiting approval
											</span>

											<span class="line small">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="#">View all notifications</a>
							</li>
						</ul>

					</li>

					<!-- Message Notifications -->
					<li class="notifications dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<span class="badge badge-secondary">10</span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<form class="top-dropdown-search">

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search anything..." name="s" />
									</div>

								</form>

								<ul class="dropdown-menu-list scroller">
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="{{asset('assets/images/thumb-1@2x.png')}}" width="44" alt="" class="img-circle" />
											</span>

											<span class="line">
												<strong>Luc Chartier</strong>
												- yesterday
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="{{asset('assets/images/thumb-2@2x.png')}}" width="44" alt="" class="img-circle" />
											</span>

											<span class="line">
												<strong>Salma Nyberg</strong>
												- 2 days ago
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="{{asset('assets/images/thumb-3@2x.png')}}" width="44" alt="" class="img-circle" />
											</span>

											<span class="line">
												Hayden Cartwright
												- a week ago
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="{{asset('assets/images/thumb-4@2x.png')}}" width="44" alt="" class="img-circle" />
											</span>

											<span class="line">
												Sandra Eberhardt
												- 16 days ago
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="mailbox.html">All Messages</a>
							</li>
						</ul>

					</li>

					<!-- Task Notifications -->
					<li class="notifications dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-list"></i>
							<span class="badge badge-warning">1</span>
						</a>

						<ul class="dropdown-menu">
							<li class="top">
								<p>You have 6 pending tasks</p>
							</li>

							<li>
								<ul class="dropdown-menu-list scroller">
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Procurement</span>
												<span class="percent">27%</span>
											</span>

											<span class="progress">
												<span style="width: 27%;" class="progress-bar progress-bar-success">
													<span class="sr-only">27% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">App Development</span>
												<span class="percent">83%</span>
											</span>

											<span class="progress progress-striped">
												<span style="width: 83%;" class="progress-bar progress-bar-danger">
													<span class="sr-only">83% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">HTML Slicing</span>
												<span class="percent">91%</span>
											</span>

											<span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">91% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Database Repair</span>
												<span class="percent">12%</span>
											</span>

											<span class="progress progress-striped">
												<span style="width: 12%;" class="progress-bar progress-bar-warning">
													<span class="sr-only">12% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Backup Create Progress</span>
												<span class="percent">54%</span>
											</span>

											<span class="progress progress-striped">
												<span style="width: 54%;" class="progress-bar progress-bar-info">
													<span class="sr-only">54% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Upgrade Progress</span>
												<span class="percent">17%</span>
											</span>

											<span class="progress progress-striped">
												<span style="width: 17%;" class="progress-bar progress-bar-important">
													<span class="sr-only">17% Complete</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="#">See all tasks</a>
							</li>
						</ul>

					</li>

				</ul>

			</div>


			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">

				<ul class="list-inline links-list pull-right">

					<!-- Language Selector -->
					<li class="dropdown language-selector">

						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="{{asset('assets/images/flags/flag-uk.png')}}" width="16" height="16" />
						</a>

						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="{{asset('assets/images/flags/flag-de.png')}}" width="16" height="16" />
									<span>Deutsch</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="{{asset('assets/images/flags/flag-uk.png')}}" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="{{asset('assets/images/flags/flag-fr.png')}}" width="16" height="16" />
									<span>François</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="{{asset('assets/images/flags/flag-al.png')}}" width="16" height="16" />
									<span>Shqip</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="{{asset('assets/images/flags/flag-es.png')}}" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>
						</ul>

					</li>

					<li class="sep"></li>


					<li>
						<a href="#" data-toggle="chat" data-collapse-sidebar="1">
							<i class="entypo-chat"></i>
							Chat

							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li>

					<li class="sep"></li>

					<li>
						<a href="extra-login.html">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<hr />

		@yield('content')
		<!-- Footer -->
		<footer class="main">
			
			&copy; {{date('Y')}} <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>
</div>
	<script src="{{asset('assets/js/all.js')}}"></script>
	<!-- Demo Settings -->
	<script src="{{asset('assets/js/neon-demo.js')}}"></script>
	@yield('script')

</body>
</html>