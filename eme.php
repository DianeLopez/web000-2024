<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.jpg">
	<link rel="icon" type="image/jpg" sizes="32x32" href="vendors/images/favicon-32x32.jpg">
	<link rel="icon" type="image/jpg" sizes="16x16" href="vendors/images/favicon-16x16.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.jpg" alt="" style="max-width: 150px; max height: 150px;"></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img0.jpg" alt="">
										<h3>Alert</h3>
										<p>"Alert: May bagong appliance na nakakabit sa iyong smart socket switch. Paki-update ang iyong sistema para ma-access ang bagong kinalalagyan ng saksak."</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img00.jpg" alt="">
										<h3>Cristina</h3>
										<p><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group House Invitation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invitation {
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
        }
        .invitation h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .invitation p {
            color: #666;
            margin-bottom: 20px;
        }
        .invitation .join-button {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .invitation .join-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="invitation">
        <h1>Group House Invitation</h1>
        <p>You are invited to a group house on Smart Socket Switch. Click to join.</p>
        <!-- Replace "index.html" with the actual URL of the dashboard -->
        <a href="index.html" class="join-button">JOIN GROUP</a>
    </div>
</body>
</html>

</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Jerico Jonson</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class=" ">
				<a href=" " target=" "><img src=" " alt=" "></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src=" " alt="" class=" ">
				<img src=" " alt="" class=" ">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="index.html">Dashboard</a></li>
					
						</ul>
					
				
					
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
					<li><a href="analytics.php">Analytics</a></li>
						
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Access Control Hub</span>
						</a>
						<ul class="submenu">
							
							<li><a href="login.html">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
							<li><a href="reset-password.html">Reset Password</a></li>
					
						</ul>
				
					
					</li>
					<li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
						<li>
						<a href="rooms.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-rooms"></span><span class="mtext">Rooms</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md- col-sm-">
							<div class="title">
								<h4> </h4>
							</div>
							<nav aria-label="" role=" ">
								<ol class=" ">
							
								
								</ol>
							</nav>
						</div>
					</div>
				</div>
         
			 
		<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appliance Statistics</title>
<!-- Link ng Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  body {
    text-align: center; /* I-center ang lahat ng teksto */
    font-family: Arial, sans-serif; /* Baguhin ang font */
  }
  .chart-container {
    width: 800px; /* Baguhin ang laki ng chart container */
    height: 600px; /* Baguhin ang taas ng chart container */
    margin: 0 auto;
  }
  .card-box {
    margin-bottom: 30px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
  }
  .title-box {
    margin-bottom: 20px;
    font-size: 24px;
  }
</style>
</head>
<body>
<div class="title-box">
  <h1>Appliance Statistics</h1>
</div>
<div class="chart-container">
  <div class="card-box">
    <canvas id="wattageChart"></canvas>
  </div>
  <div class="card-box">
    <canvas id="timeofuseChart"></canvas>
  </div>
  <div class="card-box">
    <canvas id="energycostChart"></canvas>
  </div>
</div>
<div class="mobile-menu-overlay"></div>

<script>
// Simulang data para sa bawat kategorya ng appliances
var appliances = {
  "Rice Cooker": { 
    "Wattage": 500,
    "Time of Use": 1,
    "Energy Cost": 5, // Sample energy cost for illustration
    // "Standby Power": 2, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1, 0] // Sample usage pattern for illustration
  },
  "Electric Fan": { 
    "Wattage": 1000,
    "Time of Use": 2,
    "Energy Cost": 8, // Sample energy cost for illustration
    // "Standby Power": 5, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1] // Sample usage pattern for illustration
  },
  "Blender": { 
    "Wattage": 700,
    "Time of Use": 1,
    "Energy Cost": 6, // Sample energy cost for illustration
    // "Standby Power": 3, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1] // Sample usage pattern for illustration
  },
  "Kettle": { 
    "Wattage": 1500,
    "Time of Use": 1,
    "Energy Cost": 10, // Sample energy cost for illustration
    // "Standby Power": 1, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1, 0] // Sample usage pattern for illustration
  },
  "Dishwasher": { 
    "Wattage": 1200,
    "Time of Use": 3,
    "Energy Cost": 12, // Sample energy cost for illustration
    // "Standby Power": 2, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 4, 3] // Sample usage pattern for illustration
  },
  "Air Conditioner": { 
    "Wattage": 2000,
    "Time of Use": 6,
    "Energy Cost": 20, // Sample energy cost for illustration
    // "Standby Power": 10, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 0, 0, 1, 2, 3, 4, 5, 6, 6] // Sample usage pattern for illustration
  },
  "Vacuum Cleaner": { 
    "Wattage": 800,
    "Time of Use": 2,
    "Energy Cost": 9, // Sample energy cost for illustration
    // "Standby Power": 3, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1, 0] // Sample usage pattern for illustration
  },
  "Washing Machine": { 
    "Wattage": 1500,
    "Time of Use": 3,
    "Energy Cost": 15, // Sample energy cost for illustration
    // "Standby Power": 2, // Sample standby power for illustration
    // "Usage Patterns": [0, 0, 0, 0, 1, 2, 3, 4, 4, 3, 2, 1] // Sample usage pattern for illustration
  }
};

// Function para ipakita ang bar chart para sa bawat kategorya
document.addEventListener("DOMContentLoaded", function() {
  showChart('Wattage');
  showChart('Time of Use');
  showChart('Energy Cost');
  // showChart('Standby Power');
  // showChart('Usage Patterns');
});

function showChart(category) {
  var ctx = document.getElementById(category.replace(/\s+/g, '').toLowerCase() + 'Chart').getContext('2d');
  var labels = Object.keys(appliances);
  var data = labels.map(label => appliances[label][category]);
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: category,
        data: data,
        backgroundColor: 'rgba(54, 162, 235, 0.5)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Kunin ang unang card box sa loob ng .chart-container
  var firstCardBox = document.querySelector('.chart-container .card-box');
  
  // Kunin ang sukat ng unang card box
  var cardBoxWidth = firstCardBox.offsetWidth;
  var cardBoxHeight = firstCardBox.offsetHeight;
  
  // Kunin ang mobile-menu-overlay
  var mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
  
  // Itakda ang sukat ng mobile-menu-overlay batay sa sukat ng unang card box
  mobileMenuOverlay.style.width = cardBoxWidth + 'px';
  mobileMenuOverlay.style.height = cardBoxHeight + 'px';
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable();
    });
</script>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>