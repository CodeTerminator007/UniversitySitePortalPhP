
<form action="news\save.php" method="post"  enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="firstname" class="control-label">Aurthur</label>
				<input type="text" class="form-control form-control-sm" name="aurthur" id="aurthur" value="<?php echo isset($aurthur) ? $firstname : '' ?>" required>
			</div>
			<div class="form-group">
				<label for="News" class="control-label">News</label>
				<input type="text" class="form-control form-control-sm" name="News" id="News" required>
			</div>
			<input type="submit" value="Upload Image" name="submit">


			
		</div>
		<div class="col-md-6">
			<br>
			<div class="form-group">
				<label for="topic" class="control-label">Topic</label>
				<input type="text" class="form-control form-control-sm" name="topic" id="topic"  required>
			</div>


			<div class="form-group">
				<label for="" class="control-label">Image</label>
				<div class="custom-file">
		          <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
		          <label class="custom-file-label" for="customFile">Choose file</label>
		        </div>
			</div>
			<div class="form-group d-flex justify-content-center">
				<img src="<?php echo validate_image(isset($image_path) ? $image_path : '') ?>" alt="" id="cimg" class="img-fluid img-thumbnail">

			</div>

		</div>
	</div>
</form>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

</script>