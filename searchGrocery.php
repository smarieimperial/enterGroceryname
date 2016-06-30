<!-- Stephanie Imperial,
  in web browser http://localhost/assign12/grocery.php
  index.php  grocery.php  searchGrocery.php
   -->
   
<?php
    $grocery [0]= "apple";
    $grocery [1]= "avacado";
    $grocery [2]= "bananas";
    $grocery [3]= "beans";
    $grocery [4]= "berries";
    $myGrocery = $_GET ["grocery"];
    $response = "";
    for ($i=0; $i<5;$i++){
    	$myLength = strlen($myGrocery);
    	$subGrocery = substr($grocery[$i],0,$myLength);
    	if($myGrocery== $subGrocery){
    		if ($response==""){
    			$response = $response.$grocery[$i];

    		}
    		else {
    			$response = $response . "," . $grocery[$i];	
    		}
    	}
    }
    
    print "$response";
    
    //print "HI";
   
?>
