<?php
echo "<label>Nazwa kolumny</label>
        <input type='text' name='col_name_$i'/>
        <br>
    <select name='col_type_$i'>
        <option>INT</option>
        <option>FLOAT</option>
        <option>DATE</option>
        <option>VARCHAR</option>
        <option>TEXT</option>
    </select>
    <input type='checkbox' name='primaryKey_$i' value='PRIMARY KEY'/> Primary Key
    <input type='checkbox' name='notNull_$i' value='NOT NULL'/> NOT NULL    
    <label>Długość/Wartość: </label>
    <input type='number' name='col_len_$i'/>
    ";

?>