<?php
/**
 * AMPConf static home page template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<meta charset="utf-8">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>AMP WordPress Theme Static Home Page Template</title>
		<link rel="canonical" href="index.html">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<style amp-custom>
			<?php
			ob_start();
			require '../dist/css/main.css';
			$style = ob_get_clean();
			$style = str_replace( '@charset "UTF-8";', '', $style );
			echo $style;
			?>
		</style>

		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
		<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
	</head>
	<body>
		<?php include 'templates/site-header.php'; ?>

		<div class="wrap">

			<!-- START: Featured post -->
			<div class="wrap__item wrap__item--full-width">
				<?php include 'templates/entry--featured.php'; ?>
			</div>
			<!-- END: Featured post -->

			<!-- START: Homepage two-pack -->
			<div class="wrap__item wrap__item--half wrap__item--half--primary">
				<?php include 'templates/entry--default.php'; ?>
			</div>
			<div class="wrap__item wrap__item--half wrap__item--half--secondary">
				<?php include 'templates/entry--default.php'; ?>
			</div>
			<!-- END: Homepage two-pack -->

			<!-- START: Blog layout -->
			<div class="wrap__item wrap__item--blog wrap__item--blog--primary">
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
			</div>
			<div class="wrap__item wrap__item--blog wrap__item--blog--secondary">
				<aside class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<?php include 'templates/sidebar.php'; ?>
				</aside>
			</div>
			<!-- END: Blog layout -->

		</div>

	</body>
</html>
