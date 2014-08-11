<html>
<title>Abbas</title>
  <body>
     <?php
	
        $a=$_GET["a"];
		//$b=$_GET["b"];
		
		print $a;
		
		
	$file = 'file.txt';  
if (($fd = fopen($file, "a")) !== false) { 
  fwrite($fd,$a );   
  fclose($fd); 
} 

		
		
       ?>
   </body>
</html>
