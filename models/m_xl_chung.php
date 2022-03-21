<?php
class M_xl_chung{
	public function check_number($number){
		if(is_numeric($number) && $number == '')
			return true;
		else
			return false;
	}
	public function del_cookie($cook){
		setcookie($cook,NULL,time() -1);
	}
	
	function rand_string($length=6) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$size = strlen($chars);
		$str = '';
		for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
		 }
		return $str;
	}
}
/*$a = new M_san_pham();
$b = $a->san_pham_theo_loai(19);
echo '<pre>',print_r($b),'</pre>';*/

?>