<?php
    /**
     * Retorna un array con los datos enviados. Prioriza POST sobre GET.
     * @return array
     */
    function devolverDatos ()
    {
        $colDatos = array ();
        if (!empty($_POST))
        {
            $colDatos = $_POST;
        }
        else
        {
            if (!empty($_GET))  
            {
                $colDatos = $_GET;
            }
        }
        if (count($colDatos))
        {
            foreach ($colDatos as $indice => $valor)
            {
                if ($valor == "")
                {
                    $colDatos [$indice] = 'null';
                }
            }
        }
        return $colDatos;
    }
    
    /**
     * Carga automaticamente una clase
     */
    spl_autoload_register(function ($class_name) {
        //echo "class ".$class_name ;
        $directorys = array(
            $_SESSION['ROOT'].'modelo/',
            $_SESSION['ROOT'].'modelo/conector/',
            $_SESSION['ROOT'].'control/',
          //  $GLOBALS['ROOT'].'util/class/',
        );
        // print_r($directorys);
        foreach($directorys as $directory){
            /*
            echo "<br>";
            echo "DIRECTORIO:".$directory."".$class_name.'.php';
            echo "<br>";
            */
            if (file_exists($directory."".$class_name.'.php')){
                // echo "se incluyo".$directory.$class_name . '.php';
                require_once($directory."".$class_name.'.php');
                return;
            }
        }
    });
?>