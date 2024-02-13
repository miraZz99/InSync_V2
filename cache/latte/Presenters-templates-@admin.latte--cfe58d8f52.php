<?php

use Latte\Runtime as LR;

/** source: /home/u305329384/domains/mirazcode.com/public_html/test10/app/Presenters/templates/@admin.latte */
final class Templatecfe58d8f52 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */;
		echo '/images/favicon/favicon.ico">

	<!-- Libs CSS -->


	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */;
		echo '/libs/dropzone/dist/dropzone.css"  rel="stylesheet">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
		echo '/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">








	<!-- Theme CSS -->
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */;
		echo '/css/theme.min.css">
	<title>Homepage | InSync</title>
</head>

<body class="bg-light">
<div id="db-wrapper">
	<!-- navbar vertical -->
	<!-- Sidebar -->
	<nav class="navbar-vertical navbar">
		<div class="nav-scroller">
			<!-- Brand logo -->
			<a class="navbar-brand" href="/">
				InSync
			</a>
			<!-- Navbar nav -->
			<ul class="navbar-nav flex-column" id="sideNavbar">
				<li class="nav-item">
					<a class="nav-link has-arrow  active " href="/admin/dashboard">
						<i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
					</a>

				</li>
			</ul>

		</div>
	</nav>
	<!-- Page content -->
	<div id="page-content">
		<div class="header @@classList">
			<!-- navbar -->
			<nav class="navbar-classic navbar navbar-expand-lg">
				<a id="nav-toggle" href="#"><i
							data-feather="menu"

							class="nav-icon me-2 icon-xs"></i></a>
				<div class="ms-lg-3 d-none d-md-none d-lg-block">
					<!-- Form -->
					<form class="d-flex align-items-center">
						<input type="search" class="form-control" placeholder="Search">
					</form>
				</div>
				<!--Navbar nav -->
				<ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
					<li class="dropdown stopevent">
						<a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted" href="#" role="button"
						   id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<i class="icon-xs" data-feather="bell"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
							 aria-labelledby="dropdownNotification">
							<div>
								<div class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
									<p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
									<a href="#" class="text-muted">
                <span>
                  <i class="me-1 icon-xxs" data-feather="settings"></i>
                </span>
									</a>
								</div>
								<!-- List group -->
								<ul class="list-group list-group-flush notification-list-scroll">
									<!-- List group item -->
									<li class="list-group-item bg-light">


										<a href="#" class="text-muted">
											<h5 class=" mb-1">Rishi Chopra</h5>
											<p class="mb-0">
												Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
											</p>
										</a>



									</li>
									<!-- List group item -->
									<li class="list-group-item">


										<a href="#" class="text-muted">
											<h5 class=" mb-1">Neha Kannned</h5>
											<p class="mb-0">
												Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
											</p>
										</a>



									</li>
									<!-- List group item -->
									<li class="list-group-item">


										<a href="#" class="text-muted">
											<h5 class=" mb-1">Nirmala Chauhan</h5>
											<p class="mb-0">
												Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
											</p>
										</a>



									</li>
									<!-- List group item -->
									<li class="list-group-item">


										<a href="#" class="text-muted">
											<h5 class=" mb-1">Sina Ray</h5>
											<p class="mb-0">
												Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
											</p>
										</a>



									</li>
								</ul>
								<div class="border-top px-3 py-2 text-center">
									<a href="#" class="text-inherit fw-semi-bold">
										View all Notifications
									</a>
								</div>
							</div>
						</div>
					</li>
					<!-- List -->
					<li class="dropdown ms-2">
						<a class="rounded-circle" href="#" role="button" id="dropdownUser"
						   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 165 */;
		echo '/images/avatar/avatar-1.jpg"
									 class="rounded-circle">
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end"
							 aria-labelledby="dropdownUser">
							<div class="px-4 pb-0 pt-2">


								<div class="lh-1 ">
									<h5 class="mb-1"> Test</h5>
									<a href="#" class="text-inherit fs-6">View my profile</a>
								</div>
								<div class=" dropdown-divider mt-3 mb-2"></div>
							</div>

							<ul class="list-unstyled">
								<li>
									<a class="dropdown-item" href="#">
										<i class="me-2 icon-xxs dropdown-item-icon"
										   data-feather="settings"></i>Account Settings
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("signOut")) /* line 189 */;
		echo '">
										<i class="me-2 icon-xxs dropdown-item-icon"
										   data-feather="power"></i>Sign Out
									</a>
								</li>
							</ul>

						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Container fluid -->
		<div class="bg-primary pt-10 pb-21"></div>
		<div class="container-fluid mt-n22 px-6">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<!-- Page header -->
					<div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="mb-2 mb-lg-0">
								<h3 class="mb-0  text-white">Synchronizations</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
					<!-- card -->
					<div class="card ">
						<!-- card body -->
						<div class="card-body">
							<!-- heading -->
							<div class="d-flex justify-content-between align-items-center
                    mb-3">
								<div>
									<h4 class="mb-0">Synchronizations</h4>
								</div>
								<div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
									<i class="bi bi-briefcase fs-4"></i>
								</div>
							</div>
							<!-- project number -->
							<div>
								<h1 class="fw-bold">18</h1>
								<p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
					<!-- card -->
					<div class="card ">
						<!-- card body -->
						<div class="card-body">
							<!-- heading -->
							<div class="d-flex justify-content-between align-items-center
                    mb-3">
								<div>
									<h4 class="mb-0">Invoices</h4>
								</div>
								<div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
									<i class="bi bi-list-task fs-4"></i>
								</div>
							</div>
							<!-- project number -->
							<div>
								<h1 class="fw-bold">132</h1>
								<p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
					<!-- card -->
					<div class="card ">
						<!-- card body -->
						<div class="card-body">
							<!-- heading -->
							<div class="d-flex justify-content-between align-items-center
                    mb-3">
								<div>
									<h4 class="mb-0">Invoices exported</h4>
								</div>
								<div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
									<i class="bi bi-people fs-4"></i>
								</div>
							</div>
							<!-- project number -->
							<div>
								<h1 class="fw-bold">12</h1>
								<p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
					<!-- card -->
					<div class="card ">
						<!-- card body -->
						<div class="card-body">
							<!-- heading -->
							<div class="d-flex justify-content-between align-items-center
                    mb-3">
								<div>
									<h4 class="mb-0">Completion</h4>
								</div>
								<div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
									<i class="bi bi-bullseye fs-4"></i>
								</div>
							</div>
							<!-- project number -->
							<div>
								<h1 class="fw-bold">76%</h1>
								<p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 pt-5">
						<div class="d-flex justify-content-center align-items-center">
							<div class="mb-2 mb-lg-2">
								<h3 class="mb-0 text center">Import invoices from</h3>
							</div>
						</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">API Name</th>
								<th scope="col">API URL</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
';
		$iterations = 0;
		foreach ($apis as $api) /* line 331 */ {
			echo '								<tr>
									<td>';
			echo LR\Filters::escapeHtmlText($api->name) /* line 333 */;
			echo '</td>
									<td>';
			echo LR\Filters::escapeHtmlText($api->url) /* line 334 */;
			echo '</td>
									<td>
										<form method="post" action="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:import", [$api->id])) /* line 336 */;
			echo '">
											<button type="submit" class="btn btn-primary">Import</button>
										</form>
									</td>
									<td>
										<a class="btn btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("exportInvoices", ['apiId' => $api->id])) /* line 341 */;
			echo '">Export Invoices</a>
									</td>
								</tr>
						
';
			$iterations++;
		}
		echo '						</tbody>
					</table>

					<div class="col-lg-6">
						<form class="me-5" method="post" action="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:storeApiInfo")) /* line 350 */;
		echo '">
							<div class="mb-3">
								<label for="apiName" class="form-label">API Name</label>
								<input type="text" class="form-control" id="apiName" name="apiName" required>
							</div>
							<div class="mb-3">
								<label for="apiUrl" class="form-label">API URL</label>
								<input type="text" class="form-control" id="apiUrl" name="apiUrl" required>
							</div>
							<div class="mb-3">
								<label for="apiUsername" class="form-label">API USERNAME</label>
								<input type="text" class="form-control" id="apiUsername" name="apiUsername">
							</div>
							<div class="mb-3">
								<label for="apiPassword" class="form-label">API PASSWORD</label>
								<input type="text" class="form-control" id="apiPassword" name="apiPassword">
							</div>
							<button type="submit" class="btn btn-primary">Store API Info</button>
						</form>
					</div>
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 370 */ {
			echo '    					<div class="alert alert-';
			echo LR\Filters::escapeHtmlAttr($flash->type) /* line 371 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 371 */;
			echo '</div>
';
			$iterations++;
		}
		echo "\n";
		$iterations = 0;
		foreach ($flashes as $flash) /* line 374 */ {
			if ($flashes) /* line 374 */ {
				echo '				<div class="alert alert-';
				echo LR\Filters::escapeHtmlAttr($flash->type) /* line 374 */;
				echo '" role="alert">
				';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 375 */;
				echo '

				<div id="loadingScreen" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); z-index:1000;">
					<div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">
					Exporting Invoices... Please wait.
					</div>
				</div>

			</div>
';
			}
			$iterations++;
		}
		echo '			</div>
		</div>
	</div>
</div>



<!-- Scripts -->
<!-- Libs JS -->
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 393 */;
		echo '/libs/jquery/dist/jquery.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 394 */;
		echo '/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 395 */;
		echo '/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 396 */;
		echo '/libs/feather-icons/dist/feather.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 397 */;
		echo '/libs/prismjs/prism.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 398 */;
		echo '/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 399 */;
		echo '/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 400 */;
		echo '/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 401 */;
		echo '/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>

<script> ffunction exportInvoices(apiId) {
    // Show loading indicator
    $(\'#loadingIndicator\').show();

    $.ajax({
        url: \'/admin/export-invoices\',
        type: \'POST\',
        data: { apiId: apiId },
        success: function(response) {
            // Hide loading indicator
            $(\'#loadingIndicator\').hide();
            // Process response
            alert(\'Export completed successfully.\');
        },
        error: function() {
            $(\'#loadingIndicator\').hide();
            alert(\'An error occurred during the export.\');
        }
    });
}


</script>


<!-- Theme JS -->
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 429 */;
		echo '/js/theme.min.js"></script>



</body>

</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['api' => '331', 'flash' => '370, 374'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
