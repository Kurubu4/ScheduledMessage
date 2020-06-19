<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="utf-8">
        <title>Scheduled Message</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            $dayofweek = date("w");

            switch ($dayofweek) {
                case 0:
                    echo "It is Monday!";
                    break;
                case 1:
                    echo "It is Tuesday!";
                    break;
                case 2:
                    echo "It is Wednesday!";
                    break;
                case 3:
                    echo "It is Thursday!";
                    break;
                case 4:
                    echo "It is Friday!";
                    break;
                case 5:
                    echo "It is Suturday!";
                    break;
                case 6:
                    echo "It is Sunday!";
                    break;
            }
        ?>
    </body>
</html>
