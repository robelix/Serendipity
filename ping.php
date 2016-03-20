<?php
	header('Content-type: text/plain');
	if(isset($_GET['apikey']) && ($_GET['apikey']=='kajWot7Drun' || $_GET['apikey']=='manual')){
     		file_put_contents ( 'pinged.txt' , 'true' );
		echo true;
        }else{
		$str=file_get_contents('pinged.txt');
		echo "API Key Missing!\n";
        	echo $str;
	}
?>

