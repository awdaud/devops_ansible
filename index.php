<html>
   <head>
      <title>Connecting Web to Remote SQL Server</title>
   </head>

   <body>
   <?php
      $ip_server = $_SERVER['SERVER_ADDR'];
      echo "Server IP Address is: $ip_server";
      $dbname = "192.168.56.9";
      $username = "wahab";
      $password = "password";
      echo "<br>";

      try {
         $conn = new PDO("mysql:host=$dbname;dbname=WAHABDB", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connected successfully to mysql database at IP address $dbname";
      } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
      }
?>
   </body>
</html>