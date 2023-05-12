<?php

function getModelos(){
   include 'conn.php';
   $sql = "SELECT * FROM modelos";
   $query = $conn->query($sql);
   $datosx = $query->fetch_assoc();   
      //$conn->close();
   return $datosx;
}

function tOrdenCar($ordenId){
   include 'conn.php';
   $sql = "SELECT COUNT(*) as total FROM ordenes_detalles WHERE orden_id = ".$ordenId;
   $query = $conn->query($sql);
   $datosx = $query->fetch_assoc();   
   //$conn->close();
   return $datosx['total'];
}


function orden_actual($userId){
   $consecutivo = 0;
   include 'conn.php';
   $sql = "SELECT COUNT(*) as totalO FROM ordenes";   
   $query = $conn->query($sql);
   $datosx = $query->fetch_assoc();  
   $totalO = $datosx['totalO'];

   if ($totalO>0) {

      $sql = "SELECT COUNT(*) as totalOU FROM ordenes WHERE user_id = ".$userId;
      $query = $conn->query($sql);
      $datosx = $query->fetch_assoc(); 
      $totalOU = $datosx['totalOU'];

      if ($totalOU>0) {
         $sql = "SELECT status as estadoOU, id as idOU FROM ordenes WHERE user_id = ".$userId." ORDER BY id DESC LIMIT 1";
         $query = $conn->query($sql);
         $datosx = $query->fetch_assoc(); 
         $estadoOU = $datosx['estadoOU'];
         $idOU = $datosx['idOU'];

         if ($estadoOU==1) {

            $consecutivo = $idOU;

         }

         if ($estadoOU==2) {

            $consecutivo = $idOU+1;

         }


      }else{

       $sql = "SELECT MAX(id) AS idOU FROM ordenes ";
       $query = $conn->query($sql);
       $datosx = $query->fetch_assoc();         
       $idOU = $datosx['idOU'];        

       $consecutivo = $idOU+1;



      }

 }else{
   $consecutivo = 1;
}

      //$conn->close();

return $consecutivo;

}




?>