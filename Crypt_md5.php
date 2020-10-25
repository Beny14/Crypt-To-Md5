<?php
echo "Text-ul ce trbuie sa-l criptam: 'Utilizarea funcţiei HASH în limbajul PHP.'";
echo "<br/>";
echo "Functia crypt: ";

$text="Utilizarea funcţiei HASH în limbajul PHP."; 
echo crypt("Utilizarea funcţiei HASH în limbajul PHP.", $text);

echo "<br/>";
echo "Functia md5: ";
$fct = hash_init('md5');
       $text="Utilizarea funcţiei HASH în limbajul PHP."; 
       hash_update($fct, $text);
       echo hash_final($fct);
?>