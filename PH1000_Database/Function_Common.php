<?php
function return_word($data){
    if($data == 1){
        return "a";
    }else if($data == 2){
        return "b";
    }else{
        return "c";
   } 
}//ここで関数終了

Function  echo_Local () {
	global $str ;
	$str = "local Value" ;
	echo $str ;
	return $str ;
}
