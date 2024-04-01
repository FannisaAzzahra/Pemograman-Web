<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman</title>
</head>
<body>
<h2>Form Input Aman</h2>
<?php
$input = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "<p>Input yang diamankan: $input</p>";

    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        echo "<p>Email yang diamankan: $email</p>";
    } else {
        echo "Email yang anda masukkan tidak valid";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"
      style="display: flex;flex-direction: column;width: 10%;height: 5%;overflow: hidden;">
    <label for="input">Input:</label>
    <input type="text" name="input" id="input" value="<?php echo $input ?>">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email ?>">

    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>