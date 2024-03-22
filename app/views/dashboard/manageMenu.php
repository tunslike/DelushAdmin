

<?php
   require APPROOT . '/views/includes/dashboard/header.php';
?>

	<!--begin::Body-->
	<body id="kt_body" class="aside-enabled">
        <!--begin::Page loading(append to body)-->
<div class="page-loader flex-column bg-dark bg-opacity-25">
    <span class="spinner-border text-primary" role="status"></span>
    <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
</div>
<!--end::Page loading-->
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Aside Toolbarl-->
					<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
						<!--begin::Aside user-->
						<!--begin::User-->
						<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px">
								<img src="<?php echo URLROOT ?>/public/img/usericon.png" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Wrapper-->
							<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
								<!--begin::Section-->
								<div class="d-flex">
									<!--begin::Info-->
									<div class="flex-grow-1 me-2">
										<!--begin::Username-->
										
										<a href="#" class="text-white text-hover-primary fs-6 fw-bold"><?php echo ucfirst($_SESSION['firstname']); ?></a>
										<!--end::Username-->
										<!--begin::Description-->
										<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">Python Dev</span>
										<!--end::Description-->
										<!--begin::Label-->
										<div class="d-flex align-items-center text-success fs-9">
										<span class="bullet bullet-dot bg-success me-1"></span>online</div>
										<!--end::Label-->
									</div>
									<!--end::Info-->
									<!--begin::User menu-->
									<div class="me-n2">
										<!--begin::Action-->
										<a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
											<i class="ki-duotone ki-setting-2 text-muted fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">Max Smith 
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="apps/projects/list.html" class="menu-link px-5">
													<span class="menu-text">My Projects</span>
													<span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title">My Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/billing.html" class="menu-link px-5">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/statements.html" class="menu-link px-5">Payments</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
														<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
															<i class="ki-duotone ki-information-5 fs-5">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<span class="form-check-label text-muted fs-7">Notifications</span>
															</label>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="account/statements.html" class="menu-link px-5">My Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Language 
													<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
													<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
														</span>English</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
														</span>Spanish</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
														</span>German</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
														</span>Japanese</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
														</span>French</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Action-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::User-->
						<!--begin::Aside search-->
						<div class="aside-search py-5">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
								<!--begin::Tablet and mobile search toggle-->
								<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
									<div class="d-flex">
										<i class="ki-duotone ki-magnifier fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Tablet and mobile search toggle-->
								<!--begin::Form-->
								<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									<input type="hidden" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<i class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
										<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->
								<!--begin::Menu-->
								<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-350px">
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-6.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Karina Clark</span>
														<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-2.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Olivia Bold</span>
														<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-9.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Ana Clark</span>
														<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-14.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Nick Pitola</span>
														<span class="fs-7 fw-semibold text-muted">Art Director</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-11.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Edward Kulnic</span>
														<span class="fs-7 fw-semibold text-muted">System Administrator</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Rbranding</span>
														<span class="fs-7 fw-semibold text-muted">UI Design</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Re-branding</span>
														<span class="fs-7 fw-semibold text-muted">Web Development</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Business Analytics App</span>
														<span class="fs-7 fw-semibold text-muted">Administration</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
														<span class="fs-7 fw-semibold text-muted">Marketing</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Tower Group Website</span>
														<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-notepad fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
														<span class="fs-7 fw-semibold text-muted">#45670</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-frame fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
														<span class="fs-7 fw-semibold text-muted">#45690</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
														<span class="fs-7 fw-semibold text-muted">#21090</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
														<span class="fs-7 fw-semibold text-muted">#34560</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
									
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											<!--begin::Icon-->
											<div class="pt-10 pb-10">
												<i class="ki-duotone ki-search-list fs-4x opacity-50">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</div>
											<!--end::Icon-->
											<!--begin::Message-->
											<div class="pb-15 fw-semibold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Preferences-->
									<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="projects" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="any" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
												<option value="next">Within the next</option>
												<option value="last">Within the last</option>
												<option value="between">Between</option>
												<option value="on">On</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-8">
											<!--begin::Col-->
											<div class="col-6">
												<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
													<option value="days">Days</option>
													<option value="weeks">Weeks</option>
													<option value="months">Months</option>
													<option value="years">Years</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
											<a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
									<!--begin::Preferences-->
									<form data-kt-search-element="preferences" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end pt-7">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
											<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Search-->
						</div>
						<!--end::Aside search-->
						<!--end::Aside user-->
					</div>
					<!--end::Aside Toolbarl-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
						

							<!-- **************************************** RIGHT NAVIGATION STARTS HERE ********************************************* -->	
							<?php
   require APPROOT . '/views/includes/dashboard/navigation.php';
?>
							
								
					<!-- **************************************** RIGHT NAVIGATION STOPS HERE ********************************************* -->							
							
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
						<a href="https://preview.keenthemes.com/html/metronic/docs" style="background-color:#f8285b; color: #fff;" class="btn btn-flex btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Click here to logout">
							<span class="btn-label">Logout</span>
							<i class="ki-duotone ki-document ms-2 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Brand-->
						<div class="header-brand">
							<!--begin::Logo-->
							<a href="index.html">
								<img alt="Logo" style="width:150px; height:80px; " src="<?php echo URLROOT ?>/public/img/finserve-logo.jpeg" class="h-25px h-lg-25px" />
							</a>
							<!--end::Logo-->
							<!--begin::Aside minimize-->
							<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
								<i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<i class="ki-duotone ki-entrance-left fs-1 minimize-active">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Aside minimize-->
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Aside toggle-->
						</div>
						<!--end::Brand-->
						<!--begin::Toolbar-->
						<div class="toolbar d-flex align-items-stretch">
							<!--begin::Toolbar container-->
							<div class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
								<!--begin::Page title-->
								<div class="page-title d-flex justify-content-center flex-column me-5">
									<!--begin::Title-->
									<h1 class="d-flex flex-column text-gray-900 fw-bold fs-3 mb-0">Dashboard</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Dashboards</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-900">Default</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Action group-->
								<div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">	
									<!--begin::Action wrapper-->
									<div class="d-flex align-items-center">
										<!--begin::Label-->
										<span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-xxl-block">Quick Tools:</span>
										<!--end::Label-->
										<!--begin::Actions-->
										<div class="d-flex">
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<i class="ki-duotone ki-setting-2 fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</a>
											<!--end::Action-->
							
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Action wrapper-->
									<!--begin::Theme mode-->
									<div class="d-flex align-items-center">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-night-day theme-light-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
											<i class="ki-duotone ki-moon theme-dark-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Theme mode-->
								</div>
								<!--end::Action group-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
				
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
	
<!-- ****************************** Customer Table starts here ********************************* -->
						
								<h3 class="fw-bold my-2">Manage Food Menu</h3>
							<br>
								<div class="card">
   <!--begin::Card header-->
   <div class="card-header border-0 pt-6">
      <!--begin::Card title-->
      <div class="card-title">
         <!--begin::Search-->
         <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
			<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Food Menu">
         </div>
         <!--end::Search-->
      </div>
      <!--begin::Card title-->
      <!--begin::Card toolbar-->
      <div class="card-toolbar">
         <!--begin::Group actions-->
         <div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
            <div class="fw-bold me-5">
               <span class="me-2" data-kt-subscription-table-select="selected_count"></span> Selected
            </div>
            <button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">
            Delete Selected
            </button>
         </div>
         <!--end::Group actions-->        
      </div>
      <!--end::Card toolbar-->
   </div>
   <!--end::Card header-->
   <!--begin::Card body-->
   <div class="card-body pt-0">
      <!--begin::Table-->
      <div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_subscriptions_table">
            <thead>
			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th>#</th>
                    <th style="width: 100px;">Status</th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 188.375px;">Category</th>
                     <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 188.375px;">Menu</th>
                     <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 188.375px;">Amount</th>
                     <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 188.375px;">Max Quantity</th>
                     <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Billing: activate to sort column ascending" style="width: 201.297px;">Date Created</th>
                     <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 144.922px;">Manage</th>
                  </tr>

               </thead>
               <tbody class="text-gray-600 fw-semibold">

               <?php $x=1; ?>

               <?php foreach($data['menus'] as $menu): ?>

                <tr class="odd">
				  	 <td><?php echo $x; ?></td>
                     <td>

                        <?php 
                            switch($menu->STATUS) {
                                case 0:
                                    echo '<div class="badge badge-light-success">Active</div>';
                                break;
                                case 1:
                                    echo '<div class="badge badge-light-success">Active</div>';
                                break;
                                case 2:
                                    echo '<div class="badge badge-light-danger">Disabled</div>';
                                break;
                            }
                        ?>
                     
                     </td>
					 <td>
                        <div class="badge badge-light"><?php echo $menu->CATEGORY_ID; ?></div>
                     </td>
                     <td>
                        <div class="badge badge-primary"><?php echo $menu->FOOD_NAME ?></div>
                     </td>
		
                     <td>
                            <span class="badge badge-danger">₦ <?php echo number_format($menu->AMOUNT,2); ?></span>              
                     </td>
					 <td>
					 <span class="badge badge-light"><?php echo $menu->QUANTITY; ?></span>                
                     </td>
					 <td>
                        <span class="badge badge-light"><?php echo formatEventDate($menu->DATE_CREATED); ?></span>  
                     </td>
                     <td class="text-end">
                        <a href="#" onclick="showManageMenuModal('<?php echo $menu->FOOD_MENU_ID; ?>');" class="btn btn-primary btn-active-light-primary btn-sm">
                        Manage</a>
                     </td>
                  </tr>

                  <?php $x++; ?>
                  
                <?php endforeach; ?>
				
               </tbody>
            </table>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
         </div>
      </div>
      <!--end::Table-->    
   </div>
   <!--end::Card body-->
</div>										
<!-- ****************************** Customer Table ends here *********************************** -->
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-gray-900 order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Delush Restaurant</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
							
								<li class="menu-item">
									<a href="#" target="_blank" class="menu-link px-2">Support</a>
								</li>
							
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

        <!--begin::Modals-->
		<div class="modal fade" id="create_new_user" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_create_api_key_header">
                <!--begin::Modal title-->
                <h2>Create New User</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_create_api_key_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px" style="max-height: 293px;">

                    <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">First Name</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control" id="user_firstname"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Last Name</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="text" id="user_lastname" onblur="createUsername();" class="form-control"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">System Username</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control" readonly id="username">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                    <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">User Role</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select id="userRole" class="form-select" aria-label="Select example">
                                <option value="" selected="selected">Select here</option>
                                <option value="001">Manager</option>
                                <option value="002">Operator</option>
                                <option value="003">Guest</option>
                            </select>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Email Address</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control" id="user_email"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Phone</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="text" id="user_phone" class="form-control"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                   
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" id="kt_modal_create_api_key_cancel" data-bs-dismiss="modal" class="btn btn-danger me-3">
                        Discard
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="button" id="btnCreateNewUser" class="btn btn-primary">
                        <span class="indicator-label">
                            Create User
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
		<!--end::Modals-->

		<!--begin::Modals-->
		<div class="modal fade" id="kt_modal_create_food_menu" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_create_api_key_header">
                <!--begin::Modal title-->
                <h2>Create Food Menu</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_create_api_key_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px" style="max-height: 293px;">

                    <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Category</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select name="foodCategory" id="foodCategory" class="form-select" aria-label="Select example">
                                <option value="" selected="selected">Select here</option>
                                <option value="Food">Food</option>
                                <option value="Snack">Snack</option>
                                <option value="Drink">Drink</option>
                                <option value="Fruit">Fruit</option>
                            </select>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control" placeholder="Enter food name here" id="foodName" name="foodName">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Description</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <textarea class="form-control" rows="3" name="foodDesc" id="foodDesc" placeholder="Food Description"></textarea>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Amount</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control" placeholder="Enter food amount" id="foodAmount" name="foodAmount"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Max Quantity</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="number" id="foodQuant" class="form-control" placeholder="Enter max quantity" name="foodQuant"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

						   
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Upload Food Picture</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="file" class="form-control" id="foodPicture" name="foodPicture">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                       
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" id="kt_modal_create_api_key_cancel" data-bs-dismiss="modal" class="btn btn-danger me-3">
                        Discard
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="button" id="btnCreateFoodItem" class="btn btn-primary">
                        <span class="indicator-label">
                            Create Food Item
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
		<!--end::Modals-->

        <!--begin::Modals-->
		<div class="modal fade" id="manage_food_menu" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_create_api_key_header">
                <!--begin::Modal title-->
                <h2>Manage/Update Food Menu</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_create_api_key_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px" style="max-height: 293px;">

                
                    <div> <input type="hidden" id="menuID"></div>
					<div class="form-check form-check-custom form-check-danger form-check-solid form-check-sm">
    <input class="form-check-input" type="checkbox" id="disableMenu"/>
    <label class="form-check-label" for="flexRadioLg">
        Disable Food Menu
    </label>
</div>
<br>
					<!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Category</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select name="mn_foodCategory" id="mn_foodCategory" class="form-select" aria-label="Select example">
                                <option value="" selected="selected">Select here</option>
                                <option value="Food">Food</option>
                                <option value="Snack">Snack</option>
                                <option value="Drink">Drink</option>
                                <option value="Fruit">Fruit</option>
                            </select>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control" id="mn_foodName" name="mn_foodName">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Food Description</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <textarea class="form-control" rows="3" name="mn_foodDesc" id="mn_foodDesc"></textarea>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Amount</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control" id="mn_foodAmount" name="mn_foodAmount"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Max Quantity</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="number" id="mn_foodQuant" class="form-control" name="mn_foodQuant"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

						<!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Current Food Picture</label>
                            <!--end::Label-->

							<div id="nofoodPicture" style="color:red;">No food menu picture</div>
							<div id="currentImgBox"><img style="width:150px; border-radius:10px; height:150px;" id="currentImg" alt="Food picture"/><br></div>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
<br>
						   
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Upload Food Menu Picture</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="file" class="form-control" id="mn_foodPicture" name="mn_foodPicture">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                  
                    
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" id="kt_modal_create_api_key_cancel" data-bs-dismiss="modal" class="btn btn-danger me-3">
                        Discard
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="button" id="btnUpdateFoodMenu" class="btn btn-primary">
                        <span class="indicator-label">
                            Udpdate Food Menu
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
	
		<!--end::Modals-->

        <!--begin::Modals-->
		<div class="modal fade" id="view_completed_order" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_create_api_key_header">
                <!--begin::Modal title-->
                <h2>Customer Order Completed #<span style="color: green;" id="custNo"></span></h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_create_api_key_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px" style="max-height: 293px;">

                
                    <div> <input type="hidden" id="orderID"></div>

                    <!--begin::Input group-->
                        <div class="mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Customer Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control" readonly id="c_customerName">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Phone Number</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" readonly class="form-control" id="c_phoneNumber"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Total Amount</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="number" id="c_totalAmount" class="form-control" readonly/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Additional Comment</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <textarea class="form-control" readonly rows="3" id="c_orderComment"></textarea>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Date Processed</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" readonly class="form-control" id="dateProcessed"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Processed By</label>
                                <!--end::Label-->

                                <!--end::Input-->
                                <input type="text" id="processedBy" class="form-control" readonly/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <br>
                    
                     <!--******************************************** LIST START HERE ------------------>
                    
                     <span id="rowDataValueCompleted"></span>

                     <!--******************************************** LIST ENDS HERE------- -->
                       <br>
                       <br>
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" id="kt_modal_create_api_key_cancel" data-bs-dismiss="modal" class="btn btn-danger me-3">
                        Discard
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
	
		<!--end::Modals-->     
	
		<?php
   require APPROOT . '/views/includes/dashboard/footer.php';
?>