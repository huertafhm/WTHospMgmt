<?php ?>

		<footer class="footer-copyright jumbotron bg-info text-white">
			<div style="text-align: center" class="container">
				&copy; <?php echo date('Y')?> 7 Star Hospital
			</div>
		</footer>
		<script src="PUBLIC_PATH . '/js/bootstrap.min.js'"></script>
		<script src="PUBLIC_PATH . '/js/jquery.slim.min.js'"></script>
		<script src="PUBLIC_PATH . '/js/popper.min.js'"></script>
	</body>
</html>

<?php 
    //Closing Database Connection
    db_disconnect($db);
?>