<form>

    <input type="text"   name="nome" placeholder="Insira o nome" alt="">
    <input type="date"   name="nascimento" placeholder="Insira seu nascimento" alt="">
    <input type="submit" value="OK" placeholder="" alt="">

</form>
<?php

if(isset($_GET)):

foreach ($_GET as $key => $value) {

echo "Nome do Campo: " . $key;

echo "Valor do Campo: " . $value;

echo "hr";

    }
endif;








?>








?>