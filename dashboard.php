<!DOCTYPE html>
<html>
   <head>
   	  <link rel="stylesheet" type="text/css" href="style.css">
      <title>DETAILS</title>
   </head>  
   <body>
   	  <table id="Responsive">
   	  	<h1>STUDENT'S DETAILS</h1>
   	  	<tr>
   	  		<th>FIRST NAME</th>
   	  		<th>LAST NAME</th>
   	  		<th>REGISTERATION NUMBER</th>
   	  		<th>EMAIL ADDRESS</th>
   	  		<th>BLOCK NUMBER</th>
   	  		<th>ROOM NUMBER</th>
   	  		<th>DATE OF LEAVE</th>
   	  		<th>DATE OF RETURN</th>
   	  		<th>PHONE NUMBER</th>
   	  		<th>PARENT'S PHONE NUMBER</th>
   	  		<th>REASON</th>
   	  		<th>LEAVE ADDRESS</th>
   	  		<th>HOD CHECK</th>
   	  	</tr>
   	  	<?php
   	  	$conn = mysqli_connect("localhost","root","","student");
   	  	if($conn-> connect_error){
   	  	  die("connection failed:".$conn-> connect_error);
   	     }	 

   	     $sql = "SELECT firstname, lastname, regno, email, blockno, roomno, dol, dor, phnno, parentno, reason, leaveaddr, hodcheck from info";
   	     $result = $conn-> query($sql);

   	     if($result-> num_rows > 0){
   	       while($row = $result-> fetch_assoc()) {
   	       echo"<tr><td tHD>".$row["firstname"]."</td><td tHD>".$row["lastname"]."</td><td tHD>".$row["regno"]."</td><td tHD>".$row["email"]."</td><td tHD>".$row["blockno"]."</td><td tHD>".$row["roomno"]."</td><td tHD>".$row["dol"]."</td><td tHD>".$row["dor"]."</td><td tHD>".$row["phnno"]."</td><td tHD>".$row["parentno"]."</td><td tHD>".$row["reason"]."</td><td tHD>".$row["leaveaddr"]."</td><td tHD>".$row["hodcheck"]."</td></tr>";

   	   }
   	echo "</table>";
   	 }
   	 else{
   	  echo "0 result";
   	}


   	  $conn-> close();
        ?>
   	  	</tr>
   	  </table>
   	</body>
</html>   	
   	  		 