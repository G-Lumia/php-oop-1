<?php
    include __DIR__ . '/db.php';

    foreach($libreria as $libro)
    {
        ?>
        <div>
            <h1>
                <?php  echo $libro->getTitle();?>
            </h1>
            <h3>
                <p>
                    Costo: <?php echo $libro->getCost();?> euro
                </p>
            </h3>
            <h3>
                <p>
                    Genere: 
                    <?php 
                        echo "{$libro->getGenre()} {$libro->getGenre2()}";
                    ?>
                </p>
            </h3>
        </div>
        <?php
    }
?>