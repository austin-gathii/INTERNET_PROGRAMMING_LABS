<?php
include_once 'DBConnector.php';
include_once 'user.php';

$DB = new DBConnector;
$conn = $DB->conn;

if(isset($_POST['btn-save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city_name'];

    $user = new User($first_name,$last_name,$city,$conn);
    $res = $user->save();

    if ($res) {
        echo 'Save operation was successful';
    }
    else{
        echo "An error occured!";
    }
}
else{
    echo 'nope';
}

?>

<html>
<head>
<title>Title goes here</title>
</head>
<body>
    <form method="post">
    <table align='center'>
        <tr>
            <td><input type="text" name="first_name" required placeholder="First Name"></td>
        </tr>
        <tr>
            <td><input type="text" name="last_name" required placeholder="Last Name"></td>
        </tr>
        <tr>
            <td><input type="text" name="city_name" required placeholder="City"></td>
        </tr>
        <tr>
            <td><button name='btn-save' type='submit'><strong>SAVE</strong></button></td>
        </tr>
    </table>
    </form>
</body>
</html>

