<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nazwa: </label>
        <input type="text" name="db_name"/>
        <button type="submit" name="create_db_sql">Create DB</button>
    </form>
    <form method="POST">
        <input type="number" name="columns" min="1"/>
        <button type="submit" name="table_add_btn">Dodaj tabele</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["create_db_sql"])){
    include("db_connect.php");
    $db_name = $_POST["db_name"];

    $q = "CREATE DATABASE IF NOT EXISTS ".$db_name;
    mysqli_query($conn, $q);
}
if(isset($_POST["table_add_btn"])){
    $col = $_POST["columns"];

    echo "<form method='post'>
            <input type='text' name='tab_name'/>    
        ";

    for($i=1; $i<=$col; $i++){
        echo $i.".";
        include("select_section.php");
        echo "<br><br>";
    }
    echo "  <input type='number' name='len' value='$col' hidden/>
            <button name='create_tab_btn'>Create table</button>
        </form>";
}
if(isset($_POST["create_tab_btn"])){
    $col = $_POST["len"];
    $name = $_POST["tab_name"];
    $q = "CREATE TABLE ".$name."( ";
    for($i=1; $i<=$col; $i++){
        $q .= $_POST["col_name_$i"]." ".$_POST["col_type_$i"];
        //if given value of type length
        if(!empty($_POST["col_len_$i"])){
            $q .= "(".$_POST["col_len_$i"].")";
        }
        //if column is primary key
        if(!empty($_POST["primaryKey_$i"])){
            $q .= " ".$_POST["primaryKey_$i"]." ";
        }
        //if column cannot be null
        if(!empty($_POST["notNull_$i"])){
            $q .= " ".$_POST["notNull_$i"];
        }
        //ending sql query
        if($i == $col){
            $q.=");";
        }else{
            $q.=", ";
        }
    }
    echo $q;
  }
  
echo strtotime("10 September 2000"), "\n";
?>