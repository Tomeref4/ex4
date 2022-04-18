<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <title>Php login</title>

    </head>

    <body>

        <section>

            Welcome

            <?php

                $username = $_GET["reg_un"];

                $password = $_GET["reg_pass"];

                $Human = $_GET["Human_check"];

                if ($username == "Tomer" && $password == "King" && $Human == "Yes") {

                    echo "<h2> Good morning user " . $username . "</h2>";

                } else {

                    echo "<h2>Who are you ? You can't get in</h2>";

                }

            ?>

        </section>

    </body>

</html>