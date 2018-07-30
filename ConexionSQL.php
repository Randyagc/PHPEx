<?php
try {
      ## Consexión a SQL SERVER .... (Local)
      $serverName="SONRYA-DESK";
      $connectionInfo=array("Database"=>"Asesor","UID"=>"list_clientes","PWD"=>"list_clientes");
      ##$link=mssql_connect("SONRYA-DESK","sa","SARagc1964");
      $conn=sqlsrv_connect($serverName, $connectionInfo);

      ## Seleccionamos la Base de Datos
      ##mssql_select_db("Asesor",$link);
      if ($conn)
      {
         echo "Conexión establecida.<br />";
      }
      else
      {
         echo "Conexión no exitosa.<br />";
         die(print_r(sqlsvr_errors(), true));
      }
      ## Generamos la consulta asumiendo que la conexión a la base es exitosa
      $result=("select top 5 cli_nombres, cli_apellidos from accapl.tbl_clientes");
      $stmt=sqlsrv_query($conn, $result);
      ## Recorremos los registros
      while($row=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
      {
         ##$counter++;
         echo "Nombres : ".$row['cli_nombres'].", Apellidos : ".$row["cli_apellidos"]."<br />"; ## <br /> significa salto de línea
         echo "<hr>";
      }
      ##sqlsrv_free_stmt( $stmt);
   }
   catch(Exception $e)
   {
      echo "Caught Exception ('{$e->getMessage()}')\n{$e}\n";
   }
## Cerramos la conexión
sqlsrv_close($conn);
?>