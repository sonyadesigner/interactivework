<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "uiux"
&& $pass == "fontsandcolors")
{ ?>

<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width">
			<title>Tk20 Framework Demo</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

		<!-- ================================================================================= -->	
		<!-- skip link -->
		<a href="#content" class="skip-link" tab-index='1'>Skip Navigation</a>
		<!-- ================================================================================= -->	
		<!-- Utility Bar -->	
		<header class="row" id="utility-bar">
			<div class="branding">
				<a href="http://www.tk20.com" tab-index="2"><div class="logo tk20"></div></a>
				<a href="#client-site" tab-index="3"><div class="logo client"></div></a>
			</div>

			<div class="user-status">
				<div class="user-messages drawer-trigger" data-utility="#messages">
					<span class="icon-message"></span>
					<span class="user-status-caret caret-down"></span>
				</div>
				<div class="user-tasks drawer-trigger" data-utility="#tasks"> 
					<span class="icon-flag new-activity"></span>
					<span class="user-status-caret caret-down"><span>
				</div>

				<div class="user-preferences drawer-trigger" data-utility="#preferences">
					<span class="icon-user"></span>
					<p>Hi, Tk20Username</p>
					<span class="user-status-caret caret-down"></span>
				</div>
			</div>
		</header>
		

		<!-- utility drawer content -->
		<div class="utility-drawer">
			<section id="messages">
				<h6>RECENT MESSAGES</h6>
				<div class="item unread">
					<div class="item-container">
						<div class="sender-picture">
							<img src="http://lorempixel.com/33/33/people" alt="">
						</div>
						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Jindal, Mohit</p></div>
								<div class="date-sent"><p><em>02/19/2014</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Test message</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item unread">
					<div class="item-container">
						<div class="sender-picture">
							<span class="icon-user"></span>
						</div>

						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Mahajan, Sachin</p></div>
								<div class="date-sent"><p><em>02/18/2014</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Test case</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-picture">
							<span class="icon-user"></span>
						</div>

						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Sood, Heena</p></div>
								<div class="date-sent"><p><em>02/18/2014</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>http://in.finance.yahoo.com/news/meet-the-world-s-youngest-ceo-s-064147266.html</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-picture">
							<span class="icon-user"></span>
						</div>

						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Mahajan, Abhinav</p></div>
								<div class="date-sent"><p><em>02/07/2014</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Group test</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-picture">
							<span class="icon-user"></span>
						</div>

						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Tk20, Tk20</p></div>
								<div class="date-sent"><p><em>12/05/2011</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Notice of field placement</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="view-all">
					<p><a href="#goto-messages-screen">View all messages <span>&raquo;</span></a></p>
				</div>
			</section>

			<section id="tasks">
				<h6>RECENT TASKS</h6>
				<div class="item unread">
					<div class="item-container">
						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Ang, Vincent</p></div>
								<div class="date-sent"><p><em>09/13/2013</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Please fill out the instructor survey. This is a longer message so that we can view the overflow status.</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Sylvester, Laura</p></div>
								<div class="date-sent"><p><em>11/13/2012</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>General education outcome 1.2 - Assessment request</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Stott, Abby</p></div>
								<div class="date-sent"><p><em>04/12/2012</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Please fill out the Data collection form for Art History Test</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="item">
					<div class="item-container">
						<div class="sender-details">
							<div class="message-top">
								<div class="sender-name"><p>Packer, Chris</p></div>
								<div class="date-sent"><p><em>04/26/2011</em></p></div>
							</div>	
						
							<div class="message-preview">
								<p>Evaluate Elementary Literacy Comprehensive Portfolio</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="view-all">
					<p><a href="#goto-tasks-screen">View all tasks <span>&raquo;</span></a></p>
				</div>
			</section>

			<section id="preferences">
				<div class="item">
					<div class="item-container">
						<div class="user-picture">
							<span class="icon-user"></span>
						</div>
						<div class="user-info">
							<div class="user-name"><p><a href="#to-profile">Ang, Vincent</a></p></div>
							<div class="user-role-select">
								<form action="" role="form">
									<div class="form-group custom-select">
										<select name="select" id="user-select" class="form-control">
											<option value="student">Student</option>
											<option value="faculty">Faculty</option>
											<option value="unit-administrator">Unit Administrator</option>
										</select>
										<span class="icon-arrow-down"></span>	
									</div>
								</form>
							</div>
						</div>	
					</div>	
				</div>
				<div class="view-all">
					<p><a href="#goto-sign-out">Sign out <span>&raquo;</span></a></p>
				</div>
			</section>
		</div>	
		<!-- /Utility Bar -->
		<!-- ================================================================================= -->	

		<div id="wrap"><!-- Wrapper -->	

		<!-- Navigation -->	
		<nav class="navbar navbar-default" role="navigation" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="mainnav-container">
				<div class="panel-body">
				<div class="panel-group" id="mainnav">
				<div class="panel panel-default">
				<a class="panel-title panel-heading collapsed active active-page" data-toggle="collapse" data-parent="#mainnav" href="#mock-landing">Full Page Mocks</a>
				<!-- ============================================= -->
				<!-- inner home tab -->
				    <div class="panel-body">
				    <div class="panel-group collapse" id="mock-landing">
				    <div class="panel panel-default">
				    <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-search">Search</a>
				    </div>
					 <div class="panel panel-default">
			        <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-composemessage">Compose Message</a>
			        </div>
					<div class="panel panel-default">
			        <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-wizard">Wizard</a>
			        </div>
			        <div class="panel panel-default">
			        <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-table-hover-edit">Table Hover Edit</a>
			        </div>
			        <div class="panel panel-default">
			        <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-splitscreen">Splitscreen</a>
			        </div>
			        <div class="panel panel-default">
			        <a class="panel-title panel-heading" data-parent="#mock-landing" href="#mock-table-actions">Table Actions</a>
			        </div>
				    </div>
				    </div>
				</div>

				<div class="panel panel-default">
				<a class="panel-title panel-heading collapsed" data-toggle="collapse" data-parent="#mainnav" href="#components">Components</a>
				<!-- ============================================= -->
				<!-- inner components tab -->
				    <div class="panel-body">
				    <div class="panel-group collapse" id="components">
				   
				   	<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#breadcrumbs">Breadcrumbs</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#buttons">Buttons</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#datetimepicker">Date &amp; Time Pickers</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#dropdowns">Drop Downs</a>
					</div>
				    <div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#file-tree">File Tree</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#forms">Forms</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#icons">Icons</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#module">Module</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#pagination">Pagination</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#popovers-modals">Popups &amp; Modals</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#tables">Tables</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#tabs">Tabs</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#token-fields">Token Fields</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#typography">Typography</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#components" href="#wizard">Wizard</a>
					</div>

				    </div>
				    </div>
				</div>

				<div class="panel panel-default">
				<a class="panel-title panel-heading collapsed" data-toggle="collapse" data-parent="#mainnav" href="#templates">Templates and Training</a>
				<!-- ============================================= -->
				<!-- inner template pages tab -->
				    <div class="panel-body">
				    <div class="panel-group collapse" id="templates">
				   
				    <div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#empty-shell">Empty Shell</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#stand-alone-page-shell">Practice Page Shell</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#practice-page-1">Practice Page 1</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#practice-page-2">Practice Page 2</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#practice-page-3">Practice Page 3</a>
					</div>
					<div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#templates" href="#practice-page-4">Practice Page 4</a>
					</div>
				</div>
				</div>
				</div>
					
				<div class="panel panel-default">
				<a class="panel-title panel-heading collapsed" data-toggle="collapse" data-parent="#mainnav" href="#documentation">Documentation</a>
					<div class="panel-body">
				    <div class="panel-group collapse" id="documentation">
				   
				    <div class="panel panel-default">
					<a class="panel-title panel-heading" data-parent="#documentation" href="#git-codereview">Git - Code Review</a>
					</div>
					</div>
					</div>
				</div>
			</div>
			</div>
		</nav>	
		<!-- /Navigation -->
		<!-- ================================================================================= -->

		<!-- ================================================================================= -->	
		<!-- Content -->	
		<main class="row" id="content">
			<div class="nav-shadow"></div>
			<div id="content-container"></div>
		</main>
		<!-- /Content -->
		<!-- ================================================================================= -->		

		</div><!-- /Wrapper -->

		<!-- ================================================================================= -->	
		<!-- Footer -->	
		<footer>
			<div class="copyright">
				<p>HigherEd Tools, &copy; Tk20, Inc</p>
			</div>
			<div class="return-to-top">
				<span class="icon-arrow-up"></span>
			</div>
		</footer>  
		<!-- /Footer -->
		<!-- ================================================================================= -->	

		</body>
			<!-- required on all pages -->
			<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			 <!-- <script src="js/bootstrap-accessibility.min.js"></script> -->
			<script src="js/bootstrap.min.js"></script>

			<!-- used only on Doug. Makes code examples pretty -->
			<link rel="stylesheet" href="highlight/styles/zenburn.css">
			<script src="highlight/highlight.pack.js"></script>

			<!-- enable swiping  -->
			<script src="js/touchswipe.js"></script>

			<!-- only required on pages with a date picker -->
			<script src="js/bootstrap-datepicker.js"></script>

			<!-- required on all pages -->
			<script src="js/main.js"></script>
		</html>



<?php		
}
else
{
    if(isset($_POST))
{?>
	
	<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width">
			<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
			<style>
				.container {
					width: 600px;
					margin: 40px auto;
				}
				img {
					width: 600px;
					margin: 0 auto;
				}
				form {
					float: left;
					width: 600px;
					margin-top: 80px;
				}
				label {
					float: left;
					clear: both;
				}
				label, input {
					font-family: 'PT Sans', sans-serif;
					font-size: 30px;
					color: #000;
					padding: 10px;
					margin: 0 0 20px;
				}
				input {
					float: right;
					border: 3px solid #000;
					
				}
				input[type="submit"] {
					clear: both;
					float: right;
					background: #FFF;
					font-size: 30px;
					padding: 10px 20px;
					border: 3px solid #000;
					cursor: pointer;
					line-height: 1;
					-webkit-transition: 300ms;
					-moz-transition: 300ms;
					-o-transition: 300ms;
					transition: 300ms;
				}
				input[type="submit"]:hover {
					border: 3px solid #5abc81;
				}
			</style>
		</head>
		<body>	
			<div class="container">
				<img src="doug/doug.png" alt="Welcome to Doug">
				<form method="POST" action="index.php">
			            <label for="user">CODE NAME:</label><input type="text" name="user" style="width: 360px;"></input>
			            <label for="password">SECRET PASSWORD:</label><input type="password" name="pass" style="width: 270px;"></input>
			            <input type="submit" name="submit" value="COMMENCE MAGIC"></input>
	            </form>
			</div>
		</body>
		</html>	

<?php }
}
?>