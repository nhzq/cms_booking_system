<script src="{{ asset('vendor-admin/summernote/summernote.min.js') }}"></script>

<script>

	$(document).ready(function() {
		$('.summernote').summernote({
			tabsize: 2,
			height: 200
		});

		// $('#about-mission').summernote({
		// 	tabsize: 2,
		// 	height: 200
		// });

		// $('#about-body').summernote({
		// 	tabsize: 2,
		// 	height: 200
		// });

		// $('#service-intro').summernote({
		// 	tabsize: 2,
		// 	height: 200
		// });

		// $('#service-body').summernote({
		// 	tabsize: 2,
		// 	height: 200
		// });

		// $('#news-content').summernote({
		// 	tabsize: 2,
		// 	height: 200
		// });

		$('.summernote').each(function(){
		      var summernote = $(this);
		      $('form').on('submit',function(){
		          if (summernote.summernote('isEmpty')) {
		               summernote.val('');
		          }else if(summernote.val()=='<p><br></p>'){
		               summernote.val('');
		          }
		     });
		 });
	});

</script>