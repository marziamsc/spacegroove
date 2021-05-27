<html> 
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/user_style.css">
    </head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=feedback user=postgres password=password")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["loginButton"])){
                echo "error";
            }
            else {
                $result = pg_query("select round(avg(fb), 2) as avg from feedback");
                $row = pg_fetch_assoc($result);
                $average = $row['avg'];
                echo $average . " / 5";
                $su100 = $average*100/5;
                $count = pg_query("select count(fb) as cnt from feedback");
                $row2 = pg_fetch_assoc($count);
                $n = $row2['cnt'];
            }
        ?>

        <div class="row">
            <div class="side">
                <div>Average:</div>
            </div>
            <div class="middle">
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $su100; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $su100; ?>%">
                    </div>
                </div>
            </div>   
            <div class="side right">
                <div> <?php echo $n; ?> votes</div>
            </div>
        </div>

    </body>
</html>