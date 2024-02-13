<?php

use Latte\Runtime as LR;

/** source: /home/u305329384/domains/mirazcode.com/public_html/test10/app/Presenters/templates/@admin.signIn.latte */
final class Templatea76b387367 extends Latte\Runtime\Template
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
	<title>Sign In | InSync</title>
</head>

<body class="bg-light">
<!-- container -->
<div class="container d-flex flex-column">
	<div class="row align-items-center justify-content-center g-0
        min-vh-100">
		<div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 41 */ {
			if ($flashes) /* line 41 */ {
				echo '			<div class="alert alert-';
				echo LR\Filters::escapeHtmlAttr($flash->type) /* line 41 */;
				echo '" role="alert">
				';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 42 */;
				echo '
			</div>
';
			}
			$iterations++;
		}
		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 45 */;
		echo '		</div>
	</div>
</div>
<!-- Scripts -->
<!-- Libs JS -->
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 51 */;
		echo '/libs/jquery/dist/jquery.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 52 */;
		echo '/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 53 */;
		echo '/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 54 */;
		echo '/libs/feather-icons/dist/feather.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 55 */;
		echo '/libs/prismjs/prism.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 56 */;
		echo '/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 57 */;
		echo '/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 58 */;
		echo '/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 59 */;
		echo '/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




<!-- Theme JS -->
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 65 */;
		echo '/js/theme.min.js"></script>
</body>

</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '41'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
