<?php ?>

		<footer class="footer-copyright bg-info text-white" style="position: fixed; left: 0; bottom: 0; width: 100%; text-align: center;">
			<div style="text-align: center" class="container">
				&copy; <?php echo date('Y')?> Hospital Management
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