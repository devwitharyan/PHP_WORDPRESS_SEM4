<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Finder</title>
</head>
<body>
    <h2>Find the day</h2>
    <form method="post">
        <label for="day">Enter a day of the week (1-7):</label>
        <input type="text" name="day" required>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            $day = $_POST["day"];
            switch($day){
                case 1:
                    echo "Mon";
                    break;
                case 2:
                    echo "Tue";
                    break;
                case 3:
                    echo "Wed";
                    break;
                case 4:
                    echo "Thu";
                    break;
                case 5:
                    echo "Fri";
                    break;
                case 6:
                    echo "Sat";
                    break;
                case 7:
                    echo "Sun";
                    break;
                default:
                    echo "Enter Valid value";
            }

        }
    ?>
</body>
</html>