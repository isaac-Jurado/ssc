<?php
include "header.php";
if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {
?>


<div class="col">
    <div class="caja">
        <select onChange="mostrarResultadoss(this.value);">
            <?php
            for ($i = 1900; $i < 2025; $i++) {
                if ($i == 2023) {
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                } else {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            }
            ?>
        </select>
    </div>
</div>


<?php }else {
        header("location:../index.html");
    }
    ?>