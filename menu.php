<style type="text/css">
* {
/*    margin: 0 auto;
    padding: 0;*/
@font-face {
  font-family: supermarket;
  src: url(./font/supermarket.ttf) format("truetype");
}
*{ font-family: supermarket, sans-serif}
}
.container {
    margin: 0 auto;
	alignment-adjust:central;
    width: 100%;    
}

/* general styles */
.menu, .menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.menu {
    height: 58px;
}
.menu li {
    /*background: -moz-linear-gradient(#292929, #252525);
    background: -ms-linear-gradient(#292929, #252525);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #292929), color-stop(100%, #252525));
    background: -webkit-linear-gradient(#292929, #252525);
    background: -o-linear-gradient(#292929, #252525);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#292929', endColorstr='#252525');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#292929', endColorstr='#252525')";
    background: linear-gradient(#292929, #252525);

    border-bottom: 2px solid #181818;
    border-top: 2px solid #303030;*/
    min-width: 100px;
}
.menu > li {
    display: block;
    float: left;
    position: relative;
	
}

.menu a {
  
    color: #808080;
    display: block;
    font-size: 25px;
    line-height: 54px;
    padding: 0 20px;
    text-decoration: none;
    text-transform: uppercase;
}

/* onhover styles */
.menu li:hover {
/*    background-color: #090;
    background: -moz-linear-gradient(#090, #6D9578);
    background: -ms-linear-gradient(#090, #6D9578);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #090), color-stop(100%, #6D9578));
    background: -webkit-linear-gradient(#090, #6D9578);
    background: -o-linear-gradient(#090, #6D9578);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#090', endColorstr='#6D9578');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#090', endColorstr='#6D9578')";
    background: linear-gradient(#090, #6D9578);*/

}
.menu li:hover > a {
   /* border-radius: 5px 5px 5px 5px;*/
    border-left: 3px solid #454545;
	/*border-right:3px solid #0C3;*/
   /* color: #C4302B;*/
	color: #0C3;
}

/* submenu styles */
.submenu {
opacity: 1;
    left: 0;
    max-height: 0;
    position: absolute;
    /*top: 100px;*/
    bottom:54px;
    z-index: 0;
	

    -webkit-perspective: 400px;
    -moz-perspective: 400px;
    -ms-perspective: 400px;
    -o-perspective: 400px;
    perspective: 400px;
}
.submenu li {
	min-width: 325px;
    opacity: 0;
    background-color:#FFF;
    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);

    -webkit-transition: opacity .0s, -webkit-transform .5s;
    -moz-transition: opacity .0s, -moz-transform .5s;
    -ms-transition: opacity .0s, -ms-transform .5s;
    -o-transition: opacity .0s, -o-transform .5s;
    transition: opacity .0s, transform .5s;
}
.menu .submenu li:hover a {
    border-left: 3px solid #454545;
	border-right: 0px ;
    border-radius: 0;
    color: #0C3;
	
}
.menu > li:hover .submenu, .menu > li:focus .submenu {
    max-height: 2000px;
    z-index: 10;
}
.menu > li:hover .submenu li, .menu > li:focus .submenu li {
    opacity: 1;

    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
}

/* CSS3 delays for transition effects */
.menu li:hover .submenu li:nth-child(1) {
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -ms-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
}
.menu li:hover .submenu li:nth-child(2) {
    -webkit-transition-delay: 50ms;
    -moz-transition-delay: 50ms;
    -ms-transition-delay: 50ms;
    -o-transition-delay: 50ms;
    transition-delay: 50ms;
}
.menu li:hover .submenu li:nth-child(3) {
    -webkit-transition-delay: 100ms;
    -moz-transition-delay: 100ms;
    -ms-transition-delay: 100ms;
    -o-transition-delay: 100ms;
    transition-delay: 100ms;
}
.menu li:hover .submenu li:nth-child(4) {
    -webkit-transition-delay: 150ms;
    -moz-transition-delay: 150ms;
    -ms-transition-delay: 150ms;
    -o-transition-delay: 150ms;
    transition-delay: 150ms;
}
.menu li:hover .submenu li:nth-child(5) {
    -webkit-transition-delay: 200ms;
    -moz-transition-delay: 200ms;
    -ms-transition-delay: 200ms;
    -o-transition-delay: 200ms;
    transition-delay: 200ms;
}
.menu li:hover .submenu li:nth-child(6) {
    -webkit-transition-delay: 250ms;
    -moz-transition-delay: 250ms;
    -ms-transition-delay: 250ms;
    -o-transition-delay: 250ms;
    transition-delay: 250ms;
}
.menu li:hover .submenu li:nth-child(7) {
    -webkit-transition-delay: 300ms;
    -moz-transition-delay: 300ms;
    -ms-transition-delay: 300ms;
    -o-transition-delay: 300ms;
    transition-delay: 300ms;
}
.menu li:hover .submenu li:nth-child(8) {
    -webkit-transition-delay: 350ms;
    -moz-transition-delay: 350ms;
    -ms-transition-delay: 350ms;
    -o-transition-delay: 350ms;
    transition-delay: 350ms;
}</style>
<div class="container" id="main" role="main">
	<ul class="menu">
		<li>
			<a href="index.php">หน้าแรก</a>
		
		</li>
		<li>
			<a href="show.php">รายการบันทึก</a>
		</li>
		<li>
			<?php 
		if($_SESSION["ss_lavel"]==1){ 
				echo '<a href="summarize_edit.php">สรุปรายงาน</a>';
			}
			else{
				echo '<a href="summarize_edit.php">สรุปรายงาน</a>';
			}?>
		</li>
        <li>
			<?php 
		if($_SESSION["ss_lavel"]==1){ 
				echo '<a href="export_admin.php">ดาวน์โหลดข้อมูล</a>';
			}
			else if($_SESSION["ss_lavel"]==2){
				echo '<a href="export_hospital.php">ดาวน์โหลดข้อมูล</a>';
			}
            else if($_SESSION["ss_lavel"]==3){
				echo '<a href="export_province.php">ดาวน์โหลดข้อมูล</a>';
			}
			else if($_SESSION["ss_lavel"]==4){
				echo '<a href="export_health_center.php">ดาวน์โหลดข้อมูล</a>';
			}
			?>
		</li>
		<li>
			<a href="download.php">เอกสารดาวน์โหลด</a>
		</li>
	</ul>
</div>
