<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</script>
<style>

</style>
	
	
	
<?php 



?>
	
	<script>
		checkSubs();
		
		function checkSubs() {
		
		$.get( "subcounter.php", { 
			id: "<?php echo $_GET['id']; ?>", 
			goal: "<?php echo $_GET['goal']; ?>"
		})
			.done(function(data) {
					$('.subs').html(data);	
			})
		
		};
		
	
		

	setInterval(function() {
		checkSubs();
	}, 30 * 1000);
</script>

<div class='subs'></div>