<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<div class="button-group mrg0A float-right minus-5px-marginleft">
			<?php echo $presenter->render(); ?>
	</div>
<?php endif; ?>
