<?php


class conexion{



			function conectar(){



			$servername="localhost";
			$username="root";
			$password="";
			$dbname="moodle";

  $mysqli = new mysqli($servername,$username,$password,$dbname);

				if($mysqli->connect_error){
					die($mysqli->connect_error);

				}

				return $mysqli;
				$mysqli->close();



			

			}


}



/////////////////////consulta principal
/*$query=mysqli_query($con,"SELECT * FROM control_score c JOIN recursos r 
	                                   ON c.idmodulo = r.idmodulo ");


while($row=mysqli_fetch_array($query))
{

echo "<br>";
echo $row['recursos'];

for ($i=1; $i <=$row['recursos'] ; $i++) { 
    
	$state=$row['r'.$i];
	
	echo "<br> r$i ---$state <br>";
}


}
*/



/*$sql="INSERT INTO control_score(id,idusuario,idmodulo, r1) VALUES(NULL, 2, 2, 'ok')";

if($con->query($sql)===TRUE){
  echo "insert data";
}else{
	echo "failed";
}*/




?>