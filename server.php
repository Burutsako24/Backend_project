<? php 
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname = "register_db";

    //Create Connection
    $conn = mysql_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn){
        die("Connection failed" . mysql_connect_error());
    }
?>