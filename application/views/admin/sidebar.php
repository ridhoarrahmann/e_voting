	
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('assets/admin_templates') ?>/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $user['username'] ?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a  href="<?= base_url('admin')?>" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								
							</a>
							
						</li>
                       
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master Data</h4>
						</li>
						<!-- <li class="nav-item">
							<a href="<?= base_url('admin/kandidat')?>">
								<i class="fas fa-user"></i>
								<p>Kandidat</p>
								
							</a>
						</li> -->
                        <li class="nav-item">
							<a href="<?= base_url('admin/sesi')?>">
								<i class="fas fa-desktop"></i>
								<p>Sesi</p>
								
							</a>
						</li>
                        
						<li class="nav-item">
							<a  href="<?= base_url('admin/pemilih')?>">
								<i class="fas fa-layer-group"></i>
								<p>Data Pemilih</p>
								
							</a>
							
						</li>
						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							
						</li>
						 -->
				
						
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->