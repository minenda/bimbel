<?php
if($_GET){
switch ($_GET['page']){
		case 'Home' :				
			if(!file_exists ("depan.php")) die ("Empty Main Page!"); 
			include "depan.php";
		break;
		case 'dataSiswa' :				
			if(!file_exists ("dataSiswa.php")) die ("Empty Main Page!"); 
			include "dataSiswa.php";
		break;
		case 'viewDetail' :				
			if(!file_exists ("detailSiswa.php")) die ("Empty Main Page!"); 
			include "detailSiswa.php";
		break;
		case 'editData' :				
			if(!file_exists ("editDetail.php")) die ("Empty Main Page!"); 
			include "editDetail.php";
		break;
		case 'pembayaran' :				
			if(!file_exists ("pembayaran.php")) die ("Empty Main Page!"); 
			include "pembayaran.php";
		break;
		case 'tagihan' :				
			if(!file_exists ("tagihan.php")) die ("Empty Main Page!"); 
			include "tagihan.php";
		break;
		case 'Master' :				
			if(!file_exists ("z.php")) die ("Empty Main Page!"); 
			include "z.php";
		break;		
}
}
