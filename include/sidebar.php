<aside id="slide-out" class="<?= $sidebarSetting; ?>">
	<div class='ys-side-nav'>
		<ul class="nav flex-column">
			<li class="nav-item active">
				<a class="nav-link" href="#"><span class='icon-dashboard'></span> Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><span class='icon-take-off-1'></span> Flights</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><span class='icon-recharge-1'></span> Recharge</a>
				<ul class="sub-nav-item">
					<li><a class="nav-sub-link" href="#">Mobile</a></li>
					<li><a class="nav-sub-link" href="#">DTH</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><span class='icon-wallet-2'></span> Money Remittance</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><span class='icon-add-input'></span> Add Service</a>
			</li>
		</ul> 
	</div>
</aside>

<style type="text/css">
#slide-out{
	display: block;
	background: #dddddd;
	height: calc(100vh - 100px);
	border-radius: 4px;
	position: fixed;
	width: 250px;
	left: 20px;
	top: 80px;
	z-index: 10000;
	transition: all .3s ease-out;
}
.ys-side-nav{

}
.nav-item{
	display: block;
	width: 100%;
	border-left:solid 3px transparent; 
	transition: all .3s ease-out;
}

.nav-item a{
	font-size: 16px;
	padding: 20px;
	display: block;
	transition: all .3s ease-out;
	color:#2A2A2A;
	white-space: nowrap;
	overflow: hidden;
}
.nav-item span{
	width: 0;
	overflow: hidden;
	display: inline-block;
	vertical-align: middle;
	text-align: center;
	transition: all .3s ease-out;
}
.nav-item ul{
	padding-left: 30px;
	height: 0;
	overflow: hidden;
}
.nav-item.active ul, .nav-item:hover ul{
	height: 100%;

}

.nav-item.active, .nav-item:hover{
	border-color: #7700FE;
	background: #fff;
}
.nav-item.active span, .nav-item:hover span,#slide-out.mini-nav:hover .nav-item:hover span,#slide-out.mini-nav:hover .nav-item.active span{
	width: 30px;
}
.nav-item.active a, .nav-item:hover a{
	color: #7700FE;
}


#slide-out.mini-nav{width: 70px !important;}
#slide-out.mini-nav:hover{width: 250px !important;}
#slide-out.mini-nav .nav-item span{
	width: 30px;
	margin-right: 30px;
}
#slide-out.mini-nav:hover .nav-item span{
	width: 0px;
	margin-right: 0px;
}

@media all and (max-width: 768px) {
	#slide-out.mini-nav, #slide-out,#slide-out.mini-nav:hover, #slide-out:hover{
		width: 100% !important;
		left: 0;
		top:60px;
		height: auto;
	}
	.ys-side-nav ul{margin:0;text-align: center;}
	.ys-side-nav > ul > li{
		display: inline-block;
		width: auto;
		text-align: center;
		border:none;
		vertical-align: middle;
		height: 60px;
		width: 19%;
		border-bottom:solid 2px transparent;
	}
	.ys-side-nav ul li.active{
		border-bottom:solid 2px #7700FE;
	}
	.ys-side-nav ul li a{padding: 2px;font-size: 10px;white-space: pre-wrap;line-height: 1}
	.ys-side-nav ul li span{display: block;width: 30px !important;margin:8px auto !important;font-size: 14px;}
	.ys-side-nav ul li ul,.ys-side-nav ul li:hover ul{position: absolute;
		bottom:-35px;
		left: 0;
		width: 100%;
		height: auto;
		display: flex;
		border-bottom: solid 1px #2A2A2A;
		background: #f4f4f4;
		padding: 0;
		opacity: 0;
	}
	.ys-side-nav ul li:hover ul,.ys-side-nav ul li.active ul{
		opacity: 1;
	}
	.ys-side-nav ul li ul li{
		-ms-flex-preferred-size: 0;
		flex-basis: 0;
		-ms-flex-positive: 1;
		flex-grow: 1;
		max-width: 100%;
		flex-wrap: wrap;
		padding: 10px;
	}
}
</style>






