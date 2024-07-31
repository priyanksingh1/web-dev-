<?php
     $student=array("Name"=>"devil raka","Age"=>18,"Height"=>5.11,"City"=>"ahmedabad");
   echo $student["Name"]."</br>";
   echo $student["Age"]."</br>";
   echo $student["Height"]."</br>";
   echo $student["City"]."</br>";
   foreach ($student as $key => $val)
    {
   	   echo"</br>[".$key."]=".$val;
    }
?>