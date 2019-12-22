</div>
<footer class="footer footer-black  footer-white ">
	<div class="container-fluid">
		<div class="row">
			<nav class="footer-nav">
			<div class="credits ml-auto">
				<span class="copyright">
					©
					<script>
						document.write(new Date().getFullYear())
					</script>, made with <i class="fa fa-heart heart"></i> by CCCYF
				</span>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/plugins/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js" charset="utf-8"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script src="assets/js/custom.js"></script>


<script type="text/javascript">
	<?php if ($this->session->flashdata('success')) { ?>
		Swal.fire({
				title: 'Success!',
				icon: 'success',
				text: '<?= $this->session->flashdata('success') ?>',
		})
	<?php  } ?>
</script>
</body>

</html>
