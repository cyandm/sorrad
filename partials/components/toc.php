<?php
$class = $args['class'] ?? '';

?>

<!-- TOC  -->
<div class="<?php echo $class ?>">
	<div class="text-2xl pb-2 font-medium">
		<?php _e( 'جدول محتوایی', 'cyn-dm' ) ?>
	</div>

	<div id="toc-container">

		<ul class=" toc grid gap-3 border border-gray-200 rounded-md p-2 divide-y [&_>_*]:pt-4"></ul>

	</div>
</div>