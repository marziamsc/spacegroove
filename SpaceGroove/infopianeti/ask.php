<?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=planets user=postgres password=password")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["loginButton"])){
                echo "An error occurred.\n";
                exit;
            }
            else {
                if (empty($_POST["planet"])){
                    echo "Choose a planet!\n";
                    exit;
                }
                $planet = $_POST["planet"];

                if (empty($_POST["info"])){
                    echo "Choose an info!\n";
                    exit;
                }
                $info = $_POST["info"];

                $q="select ".$info." from planets where name=$1";
                $result=pg_query_params($dbconn, $q, array($planet));

                if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                }
                else {
                    $row = pg_fetch_row($result);
                    echo $row[0];
                }
            }
?>