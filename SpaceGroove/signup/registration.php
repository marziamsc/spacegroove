<html> 
    <head></head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=sgusers user=postgres password=password") or 
                        die("Could not connect: " . pg_last_error()); 
            if (!(isset($_POST["registrationButton"]))) {
                header("Location: ../index.php"); 
            }
            else {
                $email = $_POST["email"];
                $q1="select * from sgusers where email=$1";
                $result=pg_query_params($dbconn, $q1, array($email));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Sorry, you are already a registered user</h1> 
                            Click <a href=../login/index.php>here</a> to login";
                } 
                else {
                    $name=$_POST["name"];
                    $surname = $_POST["surname"];
                    $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
                    $password = md5($_POST["password"]);  
                    $specie = isset($_POST["specie"]) ? $_POST["specie"] : "";
                    $planet = isset($_POST["planet"]) ? $_POST["planet"] : "";
                    $q2="insert into sgUsers values ($1,$2,$3,$4,$5,$6,$7)";
                    $data=pg_query_params($dbconn, $q2, array($email, $name, $surname, $tel, $password, $specie, $planet));
                    if ($data) {
                        echo "<h1> Registration is completed. Start using the website <br/></h1>"; 
                        session_start();
                        $_SESSION['name']=$name;
                        if ($planet=="earth" || $planet=="mars" || $planet=="mercury" || $planet=="jupiter" || $planet=="moon" 
                                || $planet=="uranus" || $planet=="neptune" || $planet=="saturn" || $planet=="venus") {
                            echo "<a href=../pianeti/$planet.php> Click here </a> 
                                    to go to your home planet!"; 
                        }
                        else {
                            echo "<a href=../index.php> Click here</a> 
                                    to go to Home!"; 
                        }
                    }
                }
            }
        ?>
    </body>
</html>