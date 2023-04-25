<?php
   
   function getModelos(){
      include 'conn.php';
      $sql = "SELECT * FROM modelos";
      $query = $conn->query($sql);
      $datosx = $query->fetch_assoc();   
      //$conn->close();
      return $datosx;
   }




?>