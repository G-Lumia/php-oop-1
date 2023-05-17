<?php
    include __DIR__ . '/db.php';
    include __DIR__ . '/Partials/Template/header.php';
?>

<div class="container row">
    <?php
        foreach($movies as $movie)
        {
            ?>
            <div class="col-12 col-sd-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-title text-center">
                        <h4>
                            <?php  echo $movie->getTitle();?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="<?php echo $movie->getPosterImg()?>" class="card-img-top" alt="<?php  echo $movie->getTitle()?>">
                        <p>
                            <p>
                                Lingua originale: <?php echo $movie->getLanguage();?>
                            </p>
                        </p>
                        <p>
                            <p>
                                Genere: 
                                <?php 
                                    echo "{$movie->getGenres()}";
                                ?>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
</div>

<?php
    include __DIR__ . '/Partials/Template/footer.php';
?>