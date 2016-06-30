<!-- Stephanie Imperial,
  in web browser http://localhost/assign12/grocery.php
  index.php  grocery.php  searchGrocery.php
   -->
<?php
print <<<HERE
<script>
   var req =new XMLHttpRequest();
   function searchGrocery (grocery){
		//alert("searchGrocery: "+ grocery);
		if (req !== null){
		  //alert("object created");
		}
		var url = "searchGrocery.php?grocery=" + grocery;
	    var myRand = parseInt (Math.random ()*9999999999999);
		url = url + "&rand=myRand";
		req.open ("GET",url,true); 
		req.onreadystatechange = searchCallback;
		req.send (null);
   }
   function searchCallback(){
		//alert ("searchCallback");
		//alert (""+req.responseText);
		var span = document.getElementById("idSpan")
		span.innerHTML = req.responseText;	
   }
   function setGrocery (grocery){
		var tfGrocery=document.getElementById ("idGrocery");
		tfGrocery.value = grocery;
   }
</script>
<form>
	Enter grocery
	<br>
	<input type="text" name="grocery"
		id="idGrocery"
		onkeyup="searchGrocery(this.value)"/>
	<br>
    <span id="idSpan" onClick="setGrocery(this.innerHTML);">
    </span>
    <br>
				
</form>
HERE;
?>
