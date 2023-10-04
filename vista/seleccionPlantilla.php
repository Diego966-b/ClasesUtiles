<style>
    /* Estilos para la caja vacía */
    .caja-vacia {
        display: flex;
        align-items: center;
        justify-items: center;
        width: 200px;
        /* Ancho deseado de la caja */
        height: 300px;
        /* Alto deseado de la caja */
        border: 2px solid #000;
        /* Borde negro de 2 píxeles */
    }
    .margenInferior {
        margin-bottom: 90px;
    }
</style>
<div class=" margenInferior d-flex  justify-content-center">
    <div class="container  border m-4">
        <div class="row border bg-dark ">
            <div class="d-flex justify-content-center">
                <h1 class="text-center text-white">Generador de CV</h1>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center  ">
                <h3 class="text-center mt-2 ">Seleccione la plantilla Deseada</h3>
            </div>
        </div>
        <form name="plantillaForm" id="plantillaForm" action="">

            <div class="row row-cols-lg-auto ">
                <div class="container text-center ">
                    <div class="row">
                        <div class="col  p-3 m-3   ">
                            <div class="d-flex  justify-content-center">
                                <div class="caja-vacia "></div>
                            </div>
                            Plantilla 1
                            <div class="form-check  d-flex  justify-content-center ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="3">
                            </div>
                        </div>
                        <div class="col  p-3 m-3">
                        <div class="d-flex  justify-content-center">
                                <div class="caja-vacia "></div>
                            </div>
                            Plantilla 2
                            <div class="form-check d-flex  justify-content-center  ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="3" checked>
                            </div>
                        </div>
                        <div class="col  p-3 m-3">
                            <div class="d-flex  justify-content-center">
                                <div class="caja-vacia "></div>
                            </div>
                            Plantilla 3
                            <div class="form-check d-flex  justify-content-center ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="d-flex justify-content-center my-2 ">
               <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>
    </div>
</div>