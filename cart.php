<?php
require_once 'inc/functions.php';
require_once 'inc/data/products.php';
if(!isSessionSet())
{
    header('Location: /login.php');
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($catalog as $id => $cookie) { ?>
        <?php if (isset($_SESSION[addslashes($cookie["name"])])) : ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p><?= $_SESSION[addslashes($cookie["name"])] ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php endif ?>
    <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
