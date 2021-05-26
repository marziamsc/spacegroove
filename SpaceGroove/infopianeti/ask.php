<html> 
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=planets user=postgres password=password")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["loginButton"])){
                echo "An error occurred.\n";
                exit;
            }
            else {
                if (empty($_POST["info"])){
                    echo "Choose a info!\n";
                    exit;
                }
                $info = $_POST["info"];
                
                if (empty($_POST["planet"])){
                    echo "Choose a planet!\n";
                    exit;
                }
                $planet = $_POST["planet"];
                $q="select ".$info." from planets where name=$1";
                $result=pg_query_params($dbconn, $q, array($planet));
                if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                }
                else {
                    $row = pg_fetch_row($result);
                }
            }
        ?>

        <div class="row">
            <?php echo $row[0]; ?>
        </div>
        
    </body>
</html>