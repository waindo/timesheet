<div class="navbar navbar-fixed-top menu">
	<div class="navbar-inner">
		<ul class="nav">
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-hdd"></i> Admin <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a onclick="codeslist()"><a href="codeslist">Codes</a></li>
				
				
					<li><a onclick="krywslist()"><a href="krywslist">Input Karyawan</a></li>
				
				
				
					<li><a onclick="prjcslist()"><a href="prjcslist">Input Project</a></li>
					</ul>
				
			</li>
			
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-hdd"></i> Transaksi <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a onclick="prjcssheds()"><a href="prjcssheds">Timesheet</a></li>
				</ul>
				
			
				<li class="divider-vertical"></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-hdd"></i> Report <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a onclick="cetak()"><i class="icon-arrow-down"></i> Cetak</a></li>
				</ul>
			</li>
			
			<li class="divider-vertical"></li>
		</ul>

		<ul class="nav pull-right">
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> <span class="user">{{{ Auth::user()->nama }}}</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a onclick="modalRubahUsername()"><i class="icon-tint"></i> Rubah Username</a></li>
					<li><a onclick="modalRubahPassword()"><i class="icon-lock"></i> Rubah Password</a></li>
					<li class="divider"></li>
					<li><a onclick="logout()"><a href="logout"><i class="icon-off"></i> Logout</a></li>
				</ul>
			</li>
			<li class="divider-vertical"></li>
		</ul>
	</div>
</div>