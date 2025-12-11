<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            height: 100px;
            background-color: #333;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        header img {
            height: 80px;
            margin-right: 20px;
        }
        main {
            background-color: #fff;
            min-height: 500px;
            width: 85%;
            float: left;
            padding: 20px;
            box-sizing: border-box;
            border-right: 1px solid #ddd;
        }


        nav {
            background-color: #eee;
            min-height: 500px;
            width: 15%;
            float: right;
            padding: 20px;
            box-sizing: border-box;
        }            
        
        footer {
            clear: both;
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            height: 150px;
        }
        #tworzenie_postow{
            max-width: 400px;
            margin: 0 auto;
        }
        #lab1{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        #tytul{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #wysylanie{
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <header id="profil">
        <img src="ikona.jpg" alt="">
    </header>

    <main id="lista_postow">
        <h2>Lista Postów</h2>

        
        <?php

        $mysqli = new mysqli("localhost", "root", "", "ludzie");

        # ZAPIS DO BAZY
        if (isset($_POST["tytul"]) && $_POST["tytul"] !== "") {
            $p = $_POST["tytul"];
            $mysqli->query("INSERT INTO posts (title) VALUES ('$p')");
        }

        # ODCZYT Z BAZY
        $result = $mysqli->query("SELECT * FROM posts");

        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Post:</strong> " . $row["title"] . "</p>";
        }

        $mysqli->close();
        ?>


    


    
    </main>

    <nav>
    <h3>Menu</h3>
    <ul>
        <li><a href="sieb.php">Chat</a></li>

    </ul>
</nav>


    <footer>
        <form action="" id="tworzenie_postow" method="post">
            <label for="tytul" id="lab1">Stwórz własny post</label>
            <input type="text" name="tytul" placeholder="Wpisz tytuł posta">
            <button id="wysylanie" type="submit">Wyślij</button>
        </form>
    </footer>
    
</body>
</html>
