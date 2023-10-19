<?php
    $colPaginas = [];
    $colPaginas [1] = "Informe";
    $colPaginas [2] = "Demo";
?>
<div class="bg-dark sticky-top">
    <h1 class="text-white text-center m-0">TP Clases Utiles</h1>
    <div class="d-flex justify-content-center">
<?php
    for ($i = 1; $i <= 2; $i++) {
        $seleccionado = ($pagSeleccionada == $colPaginas[$i]) ? "link-underline-light link-underline-opacity-100" : "";
        echo 
        '<h2 class="m-3"><a class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover '.$seleccionado.'" href="'.$VISTA.'/'.$colPaginas[$i].'.php">'.$colPaginas[$i].'</a></h2>';
    }
?>
    </div>   
</div>