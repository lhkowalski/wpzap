<?php if($isCustomStyle): ?>
<span class="wpzap-button-wrap">
	<a class="button-fallback wpzap-btn-inline wpzap-btn-inline-green" href="<?php echo $hrefLink; ?>" target="_blank"><?php echo $attributes['texto']; ?></a>
</span>
<?php else: ?>
<div class="wpzap-button-wrap">
	<form action="<?php echo $hrefLink; ?>" method="get" target="_blank">
		<p><button class='wpzap-btn-inline wpzap-btn-inline-green'><?php echo $attributes['texto']; ?></button></p>
	</form>
</div>
<?php endif; ?>