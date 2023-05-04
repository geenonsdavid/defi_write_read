<?php

// afficher les games
foreach ($games as $game) {
    ?>
    <div class="card border-dark m-2">
        <div class="card-body">
            <h5 class="card-title"><?php echo $game['id'] ." - ". $game['name'] ?></h5>
            <p class="card-text"><?php echo $game['description'] ?></p>
        </div>
    </div>
    <?php
}