<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/12/16
 * Time: 5:27 PM
 */
echo $_POST['email'];


try {
    $dbh = new PDO('mysql:host=localhost;dbname=Roba', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if($_POST) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "First Name: " . $name;
    echo "email: " . $email;

    print_r($_POST);

    $sql = "INSERT INTO usersss ('email', 'name_first', 'password', 'card_name', 'card_number', 'card_expdate', 'card_security')
VALUES (:email, :first_name, :password, :card_name,:card_number,:card_expdate)";

    $stmt = $dbh->prepare($sql);
    $result = $stmt->execute(array(
        ':email' => $_POST['email'],
        ':first_name' => $_POST['first_name'],
        ':password' => $_POST['password'],
        ':card_name' => $_POST['card_name'],
        ':card_number'=> $_POST['card_name'],
        ':card_expdate'=>$_POST['card_expdate'],

    ));


    if ($result) {
        echo 'Thanks For Signing Up!';
    } else {

    }

}
?>


<form method="POST" name="login" style="text-align: center;" action="mycart.php">
    <input name="email"        type="text" placeholder="email">
    <input name="name_first"   type="text" placeholder="name_first">
    <input name="password"     type="text" placeholder="password">
    <input name="card_name"    type="text" placeholder="card_name">
    <input name="card_number"  type="text" placeholder="card_number">
    <input name="card_expdate" type="text" placeholder="card_expdate">
    <input name="card_security" type="text" placeholder="card_security">
    <button type="submit" class="" >Submit</button>