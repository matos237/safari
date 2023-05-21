<?php
    $galeria = $Galeria->get_galeria();
    $ob = 0;
    for ($i=0;$i<count($galeria);$i++){
        if(($i%(count($galeria)/2))==0){
            echo '<div class="col-gallery">';
            for($j=0;$j<(count($galeria)/2);$j++){
                echo "<img src=".$galeria[$ob]->path.">";
                $ob = $ob + 1 ;
            }
            echo '</div>';

        }
    }

?>