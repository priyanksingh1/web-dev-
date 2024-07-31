<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
</head>
<body>
<?php
   $arr=array(11,4,23,45,6,24,75,34);
   echo nl2br("\nbefore sorting array\n");
        for($i=0;$i<count($arr);$i++)
    {
    	echo "arr[$i]=".$arr[$i]."<br>";
    }   	
    for($i=0;$i<count($arr);$i++)
    {
    	for($j=$i+1;$j<count($arr);$j++)
    	{
    		if($arr[$i]>$arr[$j])
    		{
    			$tmp=$arr[$i];
    			$arr[$i]=$arr[$j];
    			$arr[$j]=$tmp;

    		}	
    	}	
    }	
    echo nl2br("\nafter sorting array in ascending\n");

    for($i=0;$i<count($arr);$i++)
    {
    	echo $arr[$i]."<br>";
    }	
    for($i=0;$i<count($arr);$i++)
    {
    	for($j=$i+1;$j<count($arr);$j++)
    	{
    		if($arr[$i]<$arr[$j])
    		{
    			$tmp=$arr[$i];
    			$arr[$i]=$arr[$j];
    			$arr[$j]=$tmp;
    		}	
    	}	
    }	
    echo "<br>after sorting array in decending<br>";

    for($i=0;$i<count($arr);$i++)
    {
    	echo $arr[$i]."<br>";
    }	
?>    
</body>
</html>