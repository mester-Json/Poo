<?php



require_once "model/Update.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fullname = $_POST["fullname"];
    $mail = $_POST["mail"];
    $age = $_POST["age"];

    Update::Update($fullname, $mail, $age, $id);

    header("Location: Select.php");

}

?>


<form action="" method="post">
    <input type="text" name="fullname" placeholder="Fullname">
    <input type="text" name="mail" placeholder="Mail">
    <input type="text" name="age" placeholder="Age">
    <input type="hidden" name="id" value="<?php echo $_GET['update'] ?>">
    <input type="submit" value="Modifier">
</form>