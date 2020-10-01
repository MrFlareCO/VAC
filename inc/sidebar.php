					<?php if($userData['role'] == 'Customer' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'Customer')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Customer</li>
						<li><a href="/customer/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-check-circle-o"></i> <span>Cheats</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/customer/purchase"><i class="fa fa-shopping-cart"></i> Purchase</a></li>
								<li><a href="/customer/cheat-status"><i class="fa fa-book"></i> Cheat Status</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"><i class="fa fa-bars"></i> <span>Wallets</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/customer/wallets"><i class="fa fa-bank"></i> Wallets</a></li>
								<li><a href="/customer/transactions"><i class="fa fa-money"></i> Tranasactions</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"><i class="fa fa-question-circle"></i> <span>Support</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/customer/support/teamspeak" zeus="ts3server://ts.virtual-advantage.com"><i class="fa fa-comments"></i> TeamSpeak</a></li>
								<li><a href="/customer/support/ticket"><i class="fa fa-envelope-o"></i> Ticket</a></li>
								<li><a href="/customer/support/cheat-status"><i class="fa fa-question-circle"></i> Cheat Status</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"><i class="fa fa-legal"></i> <span>LEGAL</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/customer/support/terms-and-conditions"><i class="fa fa-exclamation"></i> Terms and Conditions</a></li>
							</ul>
						</li>
					</ul>
					<?php } ?>
                    <?php if($userData['role'] == 'Administrator'){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Administrator</li>
						<li><a href="/administrator/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-bars"></i> <span>Logs</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/administrator/log/global"><i class="fa fa-bars"></i> Global Log</a></li>
								<li><a href="/administrator/log/transactions"><i class="fa fa-bars"></i> Transaction Log</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"><i class="fa fa-bars"></i> <span>Lookup</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/administrator/lookup/transaction"><i class="fa fa-bars"></i> Transaction Lookup</a></li>
								<li><a href="/administrator/lookup/user"><i class="fa fa-bars"></i> User Lookup</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"><i class="fa fa fa-gear"></i> <span>Settings</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/administrator/settings/payment_methods/dashboard"><i class="fa fa-bank"></i> Payment methods</a></li>
							</ul>
						</li>
					</ul>
					<?php } ?>
					<?php if($userData['role'] == 'Super-Moderator' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'Super Moderator')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Super Moderator</li>
						<li><a href="/super-moderator/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					</ul>
					<?php } ?>
					<?php if($userData['role'] == 'Moderator' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'Moderator')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Moderator</li>
						<li><a href="/moderator/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					</ul>
					<?php } ?>
                    <?php if($userData['role'] == 'Coder' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'Coder')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Coder</li>
						<li><a href="/coder/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					</ul>
					<?php } ?>
					<?php if($userData['role'] == 'Reseller' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'Reseller')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Reseller</li>
						<li><a href="/reseller/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					</ul>
					<?php } ?>
					<?php if($userData['role'] == 'PDG' || ($userData['role'] == 'Administrator' && $debugMode == 'ALL') || ($userData['role'] == 'Administrator' && $debugMode == 'PDG')){ ?>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">PDG</li>
						<li><a href="/pdg/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-bars"></i> <span>Logs</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="/pdg/log/transactions"><i class="fa fa-bars"></i> Transaction Log</a></li>
							</ul>
						</li>
						<li><a href="/pdg/withdraw"><i class="fa fa-diamond"></i> <span>Withdraw</span></a></li>
					</ul>
					<?php } ?>