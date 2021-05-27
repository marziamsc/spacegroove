<html> 
    <head>
    </head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=feedback user=postgres password=password")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["fbButton"])){
               header("Location: ../index.php"); 
            }
            else {
                $vote = $_POST["rate"];
                $q1 = "insert into feedback values ($1)";
                $data=pg_query_params($dbconn, $q1, array($vote));
            }
        ?>

        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><div aria-hidden="true">&times;</div></button>
            <?php 
                echo "<h6><strong> Feedback sent! </strong></h6>"; 
            ?>
        </div>

    </body>
</html>