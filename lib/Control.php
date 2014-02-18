<?php
	class Control{
		
		public function content($v=''){
			if(empty($v) || $v == "Index"){
				return require_once ('views/summary.php');
			}else if($v == "CreateBuy"){
				return require_once ('views/buy.php');
			}else if($v == "CreateRecieve"){
				return require_once ('views/recieve.php');
			}else if($v == "ReportRecieve"){
				return require_once ('views/report_recieve.php');
			}else if($v == "ReportBuy"){
				return require_once ('views/report_buy.php');
			}else if($v == "ManageRecieve"){
				return require_once ('views/manage_recieve.php');
			}else if($v == "ManageBuy"){
				return require_once ('views/manage_buy.php');
			}else if($v == "DayDetail"){
				return require_once ('views/daydetail.php');
			}else if($v == "EditRecieve"){
				return require_once ('views/edit_recieve.php');
			}else if($v == "EditBuy"){
				return require_once ('views/edit_buy.php');
			}else if($v == "DelRecieve"){
				return require_once ('views/del_recieve.php');
			}else if($v == "DelBuy"){
				return require_once ('views/del_buy.php');
			}
		}
		
		public function checkLevel($level){
			if($level == "ADMIN"){
				return true;
			}else{
				return false;
			}
		}
		
		public function viewMenu(){
			return require_once ('views/menu.php');
		}
		
		public function viewLogin(){
			return require_once ('views/login.php');
		}
	}
?>