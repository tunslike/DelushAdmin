	<!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
		<script src="<?php echo URLROOT ?>/public/scripts/plugins.bundle.js"></script>
		<script src="<?php echo URLROOT ?>/public/scripts/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo URLROOT ?>/public/scripts/datatables.bundle.js"></script>
		<script src="<?php echo URLROOT ?>/public/scripts/moment.js"></script>
		<script src="<?php echo URLROOT ?>/public/scripts/moment-with-locales.js"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript(used for this page only)-->
        <script src="<?php echo URLROOT ?>/public/scripts/list.js?v=<?php echo rand(10000000000,99999999999); ?>"></script>
		<script src="<?php echo URLROOT ?>/public/js/custom/controller.js?v=<?php echo rand(10000000000,99999999999); ?>"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>