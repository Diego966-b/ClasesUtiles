<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* *{
           margin: 0; 
        } */
        .contendor {
            margin: 0;
            width: 100%;
            height: 100%;
        }

        .cabecera {
            margin: 0;
            background-color: #704343;
            height: 15%;
            width: 100%;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .cabecera * {
            margin: 0;
        }

        .cabecera .nombre {
            text-align: center;
            padding: 8.1%;
        }

        .lateral {
            float: left;
            margin: 0;
            width: 50%;
            height: 85%;
            background-color: #EC7373;
        }

        .lateral dt {
            font-size: 23px;
        }

        dt {
            text-align: center;
        }

        .lateral dd {
            margin: 0;
            font-size: 17px;
            width: 100%
        }

        .margenLateral {
            margin: 20px;
        }

        .lateralDerecho {
            float: left;
            width: 50%;
            height: 85%;
            background-color: white;
        }

        .lateralDerecho dd {
            margin: 0;
            font-size: 17px;
            width: 100%
        }

        .lateralDerecho dt {
            font-size: 23px;
        }
        
    </style>
</head>
<body>
    <div class="contendor">
        <div class="cabecera">
            <div class="nombre">
                <h1> <?php echo $nombre; ?>, <?php echo $apellido; ?></h1>
            </div>
        </div>
        <div class="lateral">
            <div class="margenLateral">
                <dl>
                    <dt>Datos Personales</dt>
                    <dd>
                        <ul>
                            <li>Edad:<?php echo $edad; ?> </li>
                            <li>Telefono: <?php echo $telefono; ?></li>
                            <li>Mail: <?php echo $mail; ?></li>
                            <li>Residencia: <?php echo $residencia; ?> </li>
                        </ul>
                    </dd>
                    <br>
                    <dt>Sobre Mi</dt>
                    <dd>
                        <ul>
                            <li style="list-style: none; ">
                                <?php echo $sobreMi; ?>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="lateralDerecho ">
            <div class="margenLateral">
                <dl>
                    <dt>Conocimientos</dt>
                    <dd>
                        <ul>
                            <li style="list-style: none; ">
                                <?php echo $conocimientos; ?>
                            </li>
                        </ul>
                    </dd>
                    <br>
                    <dt>Estudios</dt>
                    <dd>
                        <ul>
                            <li style="list-style: none; ">
                                <?php echo $estudios; ?>
                            </li>
                        </ul>
                    </dd>
                    <br>
                    <dt>Experiencia Laboral</dt>
                    <dd>
                        <ul>
                            <li style="list-style: none; ">
                                <?php echo $expLaboral; ?>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</body>

</html>