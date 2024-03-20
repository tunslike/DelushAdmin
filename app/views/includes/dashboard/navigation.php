	<!--begin:Menu item-->
    <div class="menu-item pt-5">

             <!--begin:Menu item-->
             <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="<?php echo URLROOT ?>/dashboard/home">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-home fs-2"></i>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <!--end:Menu link-->
            </div>
								<!--end:Menu item-->
                                <br>
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
									</div>
									<!--end:Menu content-->
								</div>

								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item <?php if(isset($data['parent']) && $data['parent'] == 'food') {echo 'here show';} ?>  menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-address-book fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
										<span class="menu-title">Food Menu</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link <?php if(isset($data['active']) && $data['active'] == 'createFood') { echo 'active';} ?>" data-bs-toggle="modal" data-bs-target="#kt_modal_create_food_menu" href="#">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Create Food Item</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link <?php if(isset($data['active']) && $data['active'] == 'manageFood') { echo 'active';} ?>" href="<?php echo URLROOT ?>dashboard/manageMenu">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Manage Menu</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item  <?php if(isset($data['parent']) && $data['parent'] == 'order') {echo 'here show';} ?> menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-user fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
											</i>
										</span>
										<span class="menu-title">Orders</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link <?php if(isset($data['active']) && $data['active'] == 'manageOrder') { echo 'active';} ?>" href="<?php echo URLROOT ?>dashboard/manageOrder">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Manage Order</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										
					
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
							  
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">System</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item <?php if(isset($data['parent']) && $data['parent'] == 'system') {echo 'here show';} ?> menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-41 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">User Management</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link <?php if(isset($data['active']) && $data['active'] == 'createUser') { echo 'active';} ?>" data-bs-toggle="modal" data-bs-target="#create_new_user" href="#">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">New User</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link <?php if(isset($data['active']) && $data['active'] == 'manageUser') { echo 'active';} ?>" href="<?php echo URLROOT ?>account/manageUsers">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Manage Users</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
				