<?php

require_once ('const.php');
require_once ('connection.php');


if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    if (!empty($_POST['name']))
    {
        $name        = $_POST['name'];
        $second_name = $_POST['second_name'];
        if (class_exists('Connection'))
        {
            $conn       = new Connection();
            $connection = $conn->getConnect();
            $query      = "INSERT INTO users (name ,second_name) VALUES ('$name','$second_name')";
            mysqli_query($connection, $query);
            mysqli_close($connection);
            echo '<div>
        Успешно!
        </div>';
        }
    } else
    {
        echo '<div>Данные пустые</div>';
    }

}