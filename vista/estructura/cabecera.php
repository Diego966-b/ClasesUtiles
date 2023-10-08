<?php
    $colPaginas = [];
    $colPaginas [1] = "Informe";
    $colPaginas [2] = "Demo";
?>
<div class="bg-dark sticky-top">
    <p class="text-white text-center fs-4 m-0">TP Clases Utiles</p>
    <div class="d-flex justify-content-center">
<?php
    for ($i = 1; $i <= 2; $i++) {
        $seleccionado = ($pagSeleccionada == $colPaginas[$i]) ? "link-underline-light link-underline-opacity-100" : "";
        echo 
        '<p class="mt-1 mx-4 fs-5"><a class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover '.$seleccionado.'" href="'.$VISTA.'/'.$colPaginas[$i].'.php">'.$colPaginas[$i].'</a></p>';
    }
?>
    </div>   
</div>