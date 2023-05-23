<?php

function pageIsActive($uris) 
{
	$pageIsActive = false;
	$page = isset($_GET['page']) ? $_GET['page'] : null;

	foreach ($uris as $uri) {
		if ($page == $uri) $pageIsActive = true;
	}

	return $pageIsActive;
}

function activePage($uris) 
{
	return pageIsActive($uris) ? 'active' : null;
}

function openSubmenu($uris) 
{
	return pageIsActive($uris) ? 'open' : null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beets Layout</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="./dist/css/bootstrap.css">
    <script src="./dist/js/bootstrap.bundle.js"></script>
	<!-- Beets layout -->
    <link rel="stylesheet" href="./dist/css/beets-layout.css">
    <script src="./dist/js/beets-layout.js"></script>
</head>
<body>

    <!-- Beets CSS layout wrapper -->
	<div id="beets-layout">
		
		<!-- Sidebar -->
		<!-- <aside class="bl__sidebar sidebar-collapse sidebar-dark" style="background-color: #045163;"> -->
		<aside class="bl__sidebar sidebar-collapse">

			<div class="sidebar__header justify-content-between">
				<div class="header__logo">
					<img src="" alt="Logotype">
				</div>
				<button class="btn btn-primary d-lg-none" onclick="toggleSidebar()">X</button>
			</div>

			<div class="sidebar__body">
				<!-- Navigation -->
				<nav class="sidebar__nav nav-style__rounded-- nav-style__simple simple__colored-submenu-- nav-style__compact-- nav-accent-danger">
					<ul class="nav-list mb-0">
						<li class="list-item">
							<a href="?page=dashboard" class="nav-link <?= activePage(['dashboard']) ?>">
								<div class="nav-link-icon">&lt;i&gt;</div>
								Dashboard
							</a>
						</li>
						<?php $submenuItems = ['addUser', 'listUsers', 'removeUser']; ?>
						<li class="list-item <?= openSubmenu($submenuItems) ?>">
							<a href="?page=addUser" class="nav-link nav-link__submenu <?= activePage($submenuItems) ?>" id="sub_users" onclick="toggleSubmenu('sub_users')">
								<div class="nav-link-icon">&lt;i&gt;</div>
								Users
							</a>
							<ul class="nav-list__submenu">
								<li class="list-item"><a href="?page=addUser" class="nav-link <?= activePage(['addUser']) ?>">Add user</a></li>
								<li class="list-item"><a href="?page=listUsers" class="nav-link <?= activePage(['listUsers']) ?>">List users</a></li>
								<li class="list-item"><a href="?page=removeUser" class="nav-link <?= activePage(['removeUser']) ?>">Remove user</a></li>
							</ul>
						</li>
						<li class="list-item">
							<a href="?page=settings" class="nav-link <?= activePage(['settings']) ?>">
								<div class="nav-link-icon">&lt;i&gt;</div>
								Settings
							</a>
						</li>
					</ul>
				</nav>

				<hr class="sidebar__divider">

				<nav class="sidebar__nav nav-compact nav-accent">
					<ul class="nav-list">
						<li class="list-item">
							<a href="?page=link-1" class="nav-link <?= activePage(['link-1']) ?>">Link 1</a>
						</li>
						<li class="list-item">
							<a href="?page=link-2" class="nav-link <?= activePage(['link-2']) ?>">Link 2</a>
						</li>
						<li class="list-item">
							<a href="?page=link-3" class="nav-link <?= activePage(['link-3']) ?>">Link 3</a>
						</li>
					</ul>
				</nav>

			</div>

			<div class="sidebar__footer">
				SIDEBAR FOOTER
			</div>

		</aside>
			
		<!-- Main -->
		<main class="bl__main">

			<!-- Header -->
			<header class="bl__header justify-content-between header-sticky px-3 px-lg-4">
				
				<button class="btn btn-primary d-lg-none" onclick="toggleSidebar()">=</button>
				<div class="header__logo d-lg-none--">
					<img src="" alt="Logotype">
				</div>
				<button class="btn btn-primary d-lg-none" onclick="toggleHeader('header-nav')">...</button>

				<div class="header-collapse" id="header-nav">
					<nav class="header__nav">
						<ul class="nav-list">
							<li class="nav-item"><a href="?page=home" class="nav-link <?= activePage(['home']) ?>">Home</a></li>
							<li class="nav-item"><a href="?page=about" class="nav-link <?= activePage(['about']) ?>">About Us</a></li>
							<li class="nav-item"><a href="?page=contact" class="nav-link <?= activePage(['contact']) ?>">Contact</a></li>
						</ul>
					</nav>
				</div>

			</header>

			<!-- Body -->
			<div class="bl__body">
				<div class="container-fluid px-3 px-lg-4 pt-2">
					BODY
				</div>
			</div>		
			
			<!-- Footer -->
			<div class="bl__footer">
				FOOTER
			</div>

		</main>

	</div>

</body>
</html>