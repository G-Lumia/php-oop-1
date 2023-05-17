<?php 

    include __DIR__ . '/Models/movies.php';

    $movies = array(
        new Movie('Topolino', ['comico', 'infanzia'], "https://www.ibs.it/images/8007038002060_0_464_0_75.jpg", "inglese"),
        new Movie('Diabolik' , ['criminale' , 'noir'],"https://pad.mymovies.it/filmclub/2022/07/016/locandinapg1.jpg", "italiano"),
        new Movie('Everything Everywhere All At Once' ,['drammatico' , 'comico', 'combattimenti', 'fantascienza'] , "https://pad.mymovies.it/filmclub/2022/03/243/locandinapg1.jpg", "inglese")
    );
?>
