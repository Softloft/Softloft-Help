<?php
	echo $this->Html->css('help');
	echo $this->Html->script('libs/jquery.unveil.js');
?>
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-md-3 hidden-xs hidden-sm">
			<?php echo $this->element('Pages/Help/menu');?>
		</div>
		<div class="col-md-9 col-xs-12 help-content">
			<?php echo $this->element('Pages/Help/HelpFiles/bank'); ?>
			<?php echo $this->element('Pages/Help/HelpFiles/sales'); ?>
			<?php echo $this->element('Pages/Help/HelpFiles/purchases'); ?>
		</div>
	</div>
</div>
<script>
	$(function () {
		$('body').scrollspy({target: '#help-nav'});
		$('.help-step img').unveil(200);
	});
</script>