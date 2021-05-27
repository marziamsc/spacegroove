
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=sgusers user=postgres password=password")
                        or die("Could not connect: " . pg_last_error()); 
               
                $email = $_POST["email"];
                $q1="select * from sgusers where email= $1";
                $result=pg_query_params($dbconn, $q1, array($email));
                if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
                    echo "<h1>Sorry, you are not a registered user</h1> 
                            <a href=../signup/index.php>
                            Click here to register </a>";
                } 
                else {
                    $password = md5($_POST["password"]);
                    $q2="select * from sgusers where email=$1 and password=$2"; 
                    $result=pg_query_params($dbconn, $q2, array($email, $password)); 
                    if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
                        echo "<h1> The password is wrong </h1> 
                                <a href=index.php> Click here to retry login </a>" ;
                    } 
                    else {
                        $q3="select name from sgusers where email=$1 and password=$2";
                        $res=pg_query_params($dbconn, $q3, array($email,$password));
                        if (!$res) {
                            echo "An error occurred.\n";
                            exit;
                        }
                        $row = pg_fetch_row($res);

                        session_start();
                        $_SESSION['name']=$row[0];

                        $q4="select planet from sgusers where email=$1 and password=$2";
                        $pl=pg_query_params($dbconn, $q4, array($email,$password));
                        if (!$pl) {
                            echo "An error occurred.\n";
                            exit;
                        }
                        $planet = pg_fetch_row($pl);
                        if ($planet[0] != "") {
                            $planet = $planet[0];
                            if ($planet=="earth" || $planet=="mars" || $planet=="mercury" || $planet=="jupiter" || $planet=="moon" 
                                || $planet=="uranus" || $planet=="neptune" || $planet=="saturn" || $planet=="venus") {
                            echo "<h1> You're logged in! </h1>
                                    <a href=../pianeti/$planet.php> Click here </a> 
                                    to go to your home planet!"; 
                            }
                        }
                        else {
                            echo "<h1> You're logged in! </h1>
                                    <a href=../index.php> Click here</a> 
                                    to go to Home!"; 
                        }
                    } 
                }
        ?> 