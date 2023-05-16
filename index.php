<?php

include __DIR__ . '/models/books.php';

$libro1 = new Book('Topolino', 450, 'comico');
$libro2 = new Book('Diabolik' , 200, 'criminale');

echo $libro1->printBook();
echo $libro2->printBook();
?>