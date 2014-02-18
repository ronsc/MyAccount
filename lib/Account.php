<?php 

class Account{

	// TO MONTH THAI
	function convertMonth($Month){

		$Month = (int)(date("m",strtotime($Month)));

		if($Month==1){
			return "มกราคม";
		}else if($Month==2){
			return "กุมภาพันธ์";
		}else if($Month==3){
			return "มีนาคม";
		}else if($Month==4){
			return "เมษายน";
		}else if($Month==5){
			return "พฤษภาคม";
		}else if($Month==6){
			return "มิถุนายน";
		}else if($Month==7){
			return "กรกฎาคม";
		}else if($Month==8){
			return "สิงหาคม";
		}else if($Month==9){
			return "กันยายน";
		}else if($Month==10){
			return "ตุลาคม";
		}else if($Month==11){
			return "พฤศจิกายน";
		}else if($Month==12){
			return "ธันวาคม";
		}
	} 

	function convertShortMonth($Month){
		$Month = (int)(date("m",strtotime($Month)));

		$ShortMonth = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

		return $ShortMonth[$Month];
	}

	// TO DAY THAI
	function convertDay($day){

		$day = date("D",strtotime($day));

		if($day=="Sun"){
			return "อาทิตย์";
		}else if($day=="Mon"){
			return "จันทร์";
		}else if($day=="Tue"){
			return "อังคาร";
		}else if($day=="Wed"){
			return "พุธ";
		}else if($day=="Thu"){
			return "พฤหัสบดี";
		}else if($day=="Fri"){
			return "ศุกร์";
		}else if($day=="Sat"){
			return "เสาร์";
		}else{
			return "error";
		}
	}

	// PUT , IN NUMBER
	function putComma($s){
		if($s<0){
			$s = substr($s, 1);
			$minus = true;
		}

		$length = strlen($s);
		if($length%3==0){
			$mod = (int)($length/3);
		}else{
			$mod = (int)($length/3)+1;
		}
		
		$s = strrev($s);
		$start=0;
		for($i=0; $i<$mod; $i++){
			$str .= substr($s, $start, 3);
			if($i<$mod-1){
				$str .= ",";
			}
			$start+=3;
		}
		if($minus){
			$str .= "-";
		}
		
		return strrev($str);
	}
}

?>