<?php

include __DIR__ . '/models/books.php';

$libro1 = new Book('Topolino', 450, 'comico', 'infanzia');
$libro2 = new Book('Diabolik' , 200, 'criminale' , 'noir');
$libro3 = new Book('Peppa Pig' , 123, 'infanzia');


echo $libro1->printBook();
echo $libro2->printBook();
echo $libro3->printBook();
?>