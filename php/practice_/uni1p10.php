<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
 $cnt=0;
 $match=1;
 $arr=array(1,3,22,1,4,35,21,1,5,33);
 for($i=0;$i<count($arr);$i++)
 {
 	if($arr[$i]==$match)
    {
    	$cnt++;
    }
 }
 echo $match." is found <b>".$cnt."</b>time <br>";
 $cnt=0;
 $word="hello";
 $string="hello student hello have a nice day";
 $v=explode(" ",$string);
 for($i=0;$i<count($v);$i++)
 {
 	if($v[$i]==$word)
 	{
 		$cnt++;
 	}
 }	
 echo $word." is found <b>".$cnt."</b>time";
?>
</body>
</html>