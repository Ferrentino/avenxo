<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo PAGE_TITLE; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">

	<link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

	<link type="text/css" href="<?php echo CDN;?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo CDN;?>assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">
	<link type="text/css" href="<?php echo CDN;?>assets/fonts/glyphicons/css/glyphicons.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo CDN;?>assets/css/styles.css" rel="stylesheet">
	
	<link type='text/css' href='<?php echo CDN; ?>assets/plugins/pines-notify/pnotify.css' rel='stylesheet'/>
	
	<link href="<?php echo base_url(); ?>assets/as_custom/css/basic.css" rel="stylesheet" type="text/css"/>
	
	<script type="text/javascript" src="<?php echo CDN;?>assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/js/jqueryui-1.10.3.min.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/js/bootstrap.min.js"></script>


	<!-- BEGIN PLUGIN STYLES -->
	[section="plugin-css"]
	<!-- END PLUGIN STYLES -->

	<!-- BEGIN CUSTOM STYLES -->
	[section="css"]
	<!-- END CUSTOM STYLES -->
</head>
<body class="animateda-content">
	<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
		<div class="logo-area">
			<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
				<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
					<span class="icon-bg">
						<i class="ti ti-menu"></i>
					</span>
				</a>
			</span>
			
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Avenxo</a>
	
			<div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
				<div class="input-group">
					<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
				</div>
			</div>
	
		</div><!-- logo-area -->

		<ul class="nav navbar-nav toolbar pull-right">
	
			<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
				<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
			</li>
			
			<li class="toolbar-icon-bg hidden-xs">
				<a href="#"><span class="icon-bg"><i class="ti ti-world"></i></span></a>
			</li>
	
			<li class="toolbar-icon-bg hidden-xs">
				<a href="#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></a>
			</li>
	
			<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
				<a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></a>
			</li>
	
			<li class="dropdown toolbar-icon-bg hidden-xs">
				<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-email"></i></span><span
				class="badge badge-deeporange">2</span></a>
				<div class="dropdown-menu notifications arrow">
					<div class="topnav-dropdown-header">
						<span>Messages</span>
					</div>
					<div class="scroll-pane">
						<ul class="media-list scroll-content">
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Vincent Keller</strong> <span class="text-gray">? Design should be ...</span></h4>
										<span class="notification-time">2 mins ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Frend Pratt</strong> <span class="text-gray">? I will start with the ...</span></h4>
										<span class="notification-time">40 mins ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Cynthia Hines</strong> <span class="text-gray">? Interior bits are ...</span></h4>
										<span class="notification-time">6 hours ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Robin Horton</strong> <span class="text-gray">? Are you even ...</span></h4>
										<span class="notification-time">8 days ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Amanda Torrez</strong> <span class="text-gray">? The message is ...</span></h4>
										<span class="notification-time">16 hours ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Khan Farhan</strong> <span class="text-gray">? Expected the stuff ...</span></h4>
										<span class="notification-time">2 days ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-message">
								<a href="#">
									<div class="media-left">
										<img class="img-circle avatar" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
									</div>
									<div class="media-body">
										<h4 class="notification-heading"><strong>Will Whedon</strong> <span class="text-gray">? The movie of this ...</span></h4>
										<span class="notification-time">4 days ago</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="#">See all messages</a>
					</div>
				</div>
			</li>
			
			<li class="dropdown toolbar-icon-bg">
				<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange">2</span></a>
				<div class="dropdown-menu notifications arrow">
					<div class="topnav-dropdown-header">
						<span>Notifications</span>
					</div>
					<div class="scroll-pane">
						<ul class="media-list scroll-content">
							<li class="media notification-success">
								<a href="#">
									<div class="media-left">
										<span class="notification-icon"><i class="ti ti-check"></i></span>
									</div>
									<div class="media-body">
										<h4 class="notification-heading">Update 1.0.4 successfully pushed</h4>
										<span class="notification-time">8 mins ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-info">
								<a href="#">
									<div class="media-left">
										<span class="notification-icon"><i class="ti ti-check"></i></span>
									</div>
									<div class="media-body">
										<h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
										<span class="notification-time">24 mins ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-teal">
								<a href="#">
									<div class="media-left">
										<span class="notification-icon"><i class="ti ti-check"></i></span>
									</div>
									<div class="media-body">
										<h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
										<span class="notification-time">16 hours ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-indigo">
								<a href="#">
									<div class="media-left">
										<span class="notification-icon"><i class="ti ti-check"></i></span>
									</div>
									<div class="media-body">
										<h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
										<span class="notification-time">2 days ago</span>
									</div>
								</a>
							</li>
							<li class="media notification-danger">
								<a href="#">
									<div class="media-left">
										<span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
									</div>
									<div class="media-body">
										<h4 class="notification-heading">Initial Release 1.0</h4>
										<span class="notification-time">4 days ago</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="#">See all notifications</a>
					</div>
				</div>
			</li>
	
			<li class="dropdown toolbar-icon-bg">
				<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
					<img class="img-circle" src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" alt="" />
				</a>
				<ul class="dropdown-menu userinfo arrow">
					<li><a href="#"><i class="ti ti-user"></i><span>Profile</span><span class="badge badge-info pull-right">80%</span></a></li>
					<li><a href="#"><i class="ti ti-panel"></i><span>Account</span></a></li>
					<li><a href="#"><i class="ti ti-settings"></i><span>Settings</span></a></li>
					<li class="divider"></li>
					<li><a href="<?php echo site_url()?>/login/logout"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
				</ul>
			</li>
		</ul>
	</header>

	<div id="wrapper">
		<div id="layout-static">
			<div class="static-sidebar-wrapper sidebar-default">
				<div class="static-sidebar">
					<div class="sidebar">
						<div class="widget">
							<div class="widget-body">
								<div class="userinfo">
									<div class="avatar">
										<img src="<?php echo CDN; ?>assets/contents/default/images/no_image.jpg" class="img-responsive img-circle"> 
									</div>
									<div class="info">
										<span class="username">John Smith</span>
										<span class="useremail">Administrator</span>
									</div>
								</div>
							</div>
						</div>
						<div class="widget stay-on-collapse" id="widget-sidebar">
							<nav role="navigation" class="widget-body">
								<ul class="acc-menu">
									<?php echo $menu; ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="static-content-wrapper">
				<div class="static-content">
					<div class="page-content">
						<ol class="breadcrumb">
							<li class=""><a href="<?php echo site_url(); ?>">Home</a></li>
							<li class="active"><a href="<?php echo site_url(); ?>"><?php echo PAGE_TITLE; ?></a></li>
						</ol>
						<div class="container-fluid">

							<?php if(isset($content)) echo $content?>
						</div> <!-- .container-fluid -->
					</div> <!-- #page-content -->
				</div>
				<footer role="contentinfo">
					<div class="clearfix">
						<ul class="list-unstyled list-inline pull-left">
							<li><h6 style="margin: 0;">&copy; 2018 SISFO KTI</h6></li>
						</ul>
						<button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
					</div>
				</footer>

				</div>
			</div>
		</div>

	
	<!-- Switcher -->
	<div class="demo-options">
		<div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
		<div class="demo-heading">Demo Settings</div>

		<div class="demo-body">
			<div class="tabular">
				<div class="tabular-row">
					<div class="tabular-cell">Fixed Header</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
				<div class="tabular-row">
					<div class="tabular-cell">Boxed Layout</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
				<div class="tabular-row">
					<div class="tabular-cell">Collapse Leftbar</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
			</div>
		</div>

		<div class="demo-body">
			<div class="option-title">Topnav</div>
			<ul id="demo-header-color" class="demo-color-list">
				<li><span class="demo-cyan"></span></li>
				<li><span class="demo-light-blue"></span></li>
				<li><span class="demo-blue"></span></li>
				<li><span class="demo-indigo"></span></li>
				<li><span class="demo-deep-purple"></span></li> 
				<li><span class="demo-purple"></span></li> 
				<li><span class="demo-pink"></span></li> 
				<li><span class="demo-red"></span></li>
				<li><span class="demo-teal"></span></li>
				<li><span class="demo-green"></span></li>
				<li><span class="demo-light-green"></span></li>
				<li><span class="demo-lime"></span></li>
				<li><span class="demo-yellow"></span></li>
				<li><span class="demo-amber"></span></li>
				<li><span class="demo-orange"></span></li>			   
				<li><span class="demo-deep-orange"></span></li>
				<li><span class="demo-midnightblue"></span></li>
				<li><span class="demo-bluegray"></span></li>
				<li><span class="demo-bluegraylight"></span></li>
				<li><span class="demo-black"></span></li> 
				<li><span class="demo-gray"></span></li> 
				<li><span class="demo-graylight"></span></li> 
				<li><span class="demo-default"></span></li>
				<li><span class="demo-brown"></span></li>
			</ul>
		</div>

		<div class="demo-body">
			<div class="option-title">Sidebar</div>
			<ul id="demo-sidebar-color" class="demo-color-list">
				<li><span class="demo-cyan"></span></li>
				<li><span class="demo-light-blue"></span></li>
				<li><span class="demo-blue"></span></li>
				<li><span class="demo-indigo"></span></li>
				<li><span class="demo-deep-purple"></span></li> 
				<li><span class="demo-purple"></span></li> 
				<li><span class="demo-pink"></span></li> 
				<li><span class="demo-red"></span></li>
				<li><span class="demo-teal"></span></li>
				<li><span class="demo-green"></span></li>
				<li><span class="demo-light-green"></span></li>
				<li><span class="demo-lime"></span></li>
				<li><span class="demo-yellow"></span></li>
				<li><span class="demo-amber"></span></li>
				<li><span class="demo-orange"></span></li>			   
				<li><span class="demo-deep-orange"></span></li>
				<li><span class="demo-midnightblue"></span></li>
				<li><span class="demo-bluegray"></span></li>
				<li><span class="demo-bluegraylight"></span></li>
				<li><span class="demo-black"></span></li> 
				<li><span class="demo-gray"></span></li> 
				<li><span class="demo-graylight"></span></li> 
				<li><span class="demo-default"></span></li>
				<li><span class="demo-brown"></span></li>
			</ul>
		</div>



	</div>
	<!-- /Switcher -->
	
	<!-- BEGIN MODAl -->
	<div id="peg-main-modal" class="modal fade">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">	
				<div class="modal-loading"><i class="fa fa-refresh fa-spin"></i>&nbsp; Loading Data</div>
			</div>
		</div>
	</div>

	<div id="main-modal-lg" class="modal fade">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">	
				<div class="modal-loading"><i class="fa fa-refresh fa-spin"></i>&nbsp; Loading Data</div>
			</div>
		</div>
	</div>
	<div id="main-modal-md" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">	
				<div class="modal-loading"><i class="fa fa-refresh fa-spin"></i>&nbsp; Loading Data</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->

	
	
		
		
	<!-- Load site level scripts -->

	
	<script type="text/javascript" src="<?php echo CDN;?>assets/js/enquire.min.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/velocityjs/velocity.min.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/wijets/wijets.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/codeprettifier/prettify.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/iCheck/icheck.min.js"></script>

	<script type="text/javascript" src="<?php echo CDN;?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
	<script type="text/javascript" src='<?php echo CDN;?>assets/plugins/pines-notify/jquery.pnotify.min.js'></script>
	
	<script type="text/javascript" src="<?php echo CDN;?>assets/js/application.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/demo/demo.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/demo/demo-switcher.js"></script>
	<script type="text/javascript" src="<?php echo CDN;?>assets/as_custom/js/asas.js"></script>

	<!-- End loading site level scripts -->
	
	
	<!-- BEGIN PLUGIN JS -->
	[section="plugin-js"]
	<!-- END PLUGIN JS -->
	
	<script>
		$('body').on('hidden.bs.modal', '#main-modal-lg, #main-modal-md', function () {
			$(this).removeData('bs.modal');
			$(this).find('.modal-content').html('<div class="modal-loading"><i class="fa fa-refresh fa-spin"></i>&nbsp; Loading Data</div>')
		});
		
		$("body").on("shown.bs.modal", '#main-modal-lg, #main-modal-md', function(e) 
		{
			$(this).find('.form-control').first().focus();
		});
		
		$("body").on("show.bs.modal", '#peg-main-modal', function(e) 
		{
			$('#peg-main-modal').find(".modal-content").load('<?php echo site_url('rf_pegawai/detail/'); ?>/'+$('#master_no_induk').val());
		});
		
		var BASE_URL = '<?php echo base_url(); ?>';
		var SITE_URL = '<?php echo site_url(); ?>';
		var PAGE_URL = '<?php echo site_url(PAGE_ID); ?>';
		var PAGE_TITLE = '<?php echo $this->title; ?>';

	</script>
	<!-- END JAVASCRIPTS -->
	
	<!-- BEGIN PAGE LEVEL SCRIPT -->
	[section="js"]
	<!-- END PAGE LEVEL SCRIPT -->
	</body>
</html>