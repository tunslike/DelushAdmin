
<?php
   require APPROOT . '/views/includes/login/header.php';
?>
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.html" method="POST" action="<?php echo URLROOT; ?>/account/authenticateUser">
								<!--begin::Heading-->
								<div class="text-center mb-11">
                                    <img src="" />
                                    <div>
                                    <img alt="Delush_Logo" src="<?php echo URLROOT ?>/public/img/delushLogo.png" />
                                    </div>
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Delush Admin Portal</h1>
									<!--end::Title-->
								</div>
								<!--begin::Heading-->


								<?php if(isset($data['passwordError'])) : ?>

									<!--begin::Alert-->
<div class="alert alert-danger d-flex align-items-center p-5">
    <!--begin::Icon-->
    <i class="ki-duotone ki-cross-circle fs-2hx text-danger me-4">
		<span class="path1"></span><span class="path2"></span></i>
    <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-column">
    
        <!--begin::Content-->
        <span><?php echo $data['passwordError']; ?></span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Alert-->

								<?php endif; ?>

								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Username" name="username" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Password" name="entry" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a style="color:#258a53;" href="#" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button style="background-color: #258a53;" type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
						<!--begin::Languages-->
						<div class="me-10">
							<!--begin::Toggle-->
							<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<span data-kt-element="current-lang-name" class="me-1">2024 Copyright Delush</span>
							</button>
							<!--end::Toggle-->
						</div>
						<!--end::Languages-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(<?php echo URLROOT ?>/public/img/restBG.jpg)">

				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
        <?php
   require APPROOT . '/views/includes/login/footer.php';
?>