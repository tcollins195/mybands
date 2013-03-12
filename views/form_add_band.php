<h2>Add a Band</h2>
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name', 'required')?>
			<!-- <input type="text" name="band_name" placeholder="required" /> -->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Genre</label>
		<div class="controls">
			<?php echo input('band_genre', 'required')?>
			<!-- <input type="text" name="band_genre" placeholder="required" /> -->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums', 'required')?>
			<!-- <input type="text" name="band_numalbums" placeholder="required" /> -->
		</div>
	</div>	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Add Band</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>
