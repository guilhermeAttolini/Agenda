<?php

    include_once("templates/header.php");

?>

<div class="container" id="view-contact">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">
        <?= $contact["name"] ?>
    </h1>
    <p>
        Telefone: <?= $contact["phone"] ?>
    </p>
    <p>
        Obs: <?= $contact["obs"] ?>
    </p>
</div>

<?php

    include_once("templates/footer.php");

?>
