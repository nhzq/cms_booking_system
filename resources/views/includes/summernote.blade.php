<script src="{{ asset('vendor-admin/summernote/summernote.min.js') }}"></script>

<script>

	$(document).ready(function() {
		$('#about-vision').summernote({
			tabsize: 2,
			height: 200
		});

		$('#about-mission').summernote({
			tabsize: 2,
			height: 200
		});

		$('#about-body').summernote({
			tabsize: 2,
			height: 200
		});

		$('#service-intro').summernote({
			tabsize: 2,
			height: 200
		});

		$('#service-body').summernote({
			tabsize: 2,
			height: 200
		});

		$('#news-content').summernote({
			tabsize: 2,
			height: 200
		});
	});

</script>