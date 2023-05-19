<?php
    include('partials/header.php');
  ?>

    <main>
        <div class='row-gallery'>
            <div class="col-20" id="zmizni"></div>
            <?php
                require_once("inc/Gallery.php");
                $Galeria->get_galeria();
            ?>
        </div>
    </main>
<?php
    include('partials/footer.php');
?>