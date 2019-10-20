<?php
$arr=array('logo','favicon');
echo '<div class="row">';
foreach($arr as $k)
{
	$img=app_logo(200);
	if($k=="favicon")
	{
		$img=app_favicon(200);
	}
	echo '<div class="col-md-6">';
?>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('core.config.logo.update') }}">
@csrf
	<input type="hidden" name="type" value="<?=$k;?>"/>
	<div class="form-group required">
		<label class="control-label col-sm-2"><?=ucwords($k);?></label>
		<div class="col-md-4">
			<img src="<?=$img;?>" style="width: 120px;height: 130px;"/>
			<br/><br/>
			<input type="file" name="<?=$k;?>"/>
			<span class="helpBlock">Choose File to change <?=$k;?></span>
		</div>
	</div>

<?php
?>
	<div class="form-group ">
		<label class="control-label col-sm-2">&nbsp;</label>
		<div class="col-md-10">
			<button type="submit" class="btn btn-primary btn-flat">Upload</button>
		</div>
	</div>
</form>
<?php
echo '</div>';
}
echo '</div>';
?>