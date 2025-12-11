 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;

        }
        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="">login</label> <input type="text" name="login"> <br><br>
        <label for="">haslo</label> <input type="text" name="haslo"> <br><br>
        <button name="zaloguj">Zaloguj</button><br>
        <button name="rejestruj">Rejestruj</button>
    </form>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "ludzie");

if(isset($_POST['rejestruj'])){
    $login = $_POST['login'];
    $haslo = $_POST["haslo"];
    $q1 = "INSERT INTO ludzie (login, haslo) VALUES ('$login','$haslo')";
    $result1 = mysqli_query($conn, $q1);

    if($result1){
        header("location: sechs.php");
    }
}


if(isset($_POST['login'])){
    $login = $_POST['login'];
    $haslo = $_POST["haslo"];
    $q2 = "SELECT * FROM ludzie WHERE login = '$login' AND haslo = '$haslo'";
    $result2 = mysqli_query($conn, $q2);
    
    if(mysqli_num_rows($result2)){
        header("location: sechs.php");
    }
}
?>