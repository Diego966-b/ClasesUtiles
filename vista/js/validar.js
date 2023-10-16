$(document).ready(function() {
    $.validator.addMethod("soloLetras", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\sáéíóúÁÉÍÓÚñÑüÜ]+$/i.test(value);
    }, "Solo se permiten letras en este campo");
    $.validator.addMethod("numeroPositivo", function(value, element) {
        var numero = parseFloat(value);
        return numero > 0;
    }, "Por favor, ingresa un número positivo.");
    $("#formDatosParaCv").validate({
        rules: {
            nombre: {
                required: true,
                soloLetras: true,
            },
            apellido: {
                required: true,
                soloLetras: true,
            },
            edad: {
                required: true,
                numeroPositivo: true,
                maxlength: 2,
                minlength: 1,
            }, 
            telefono: {
                required: true,
            },
            estudios: {
                required: true,
            },
            residencia: {
                required: true,
            },
            expLaboral: {
                required: true,
            },
            conocimientos: {
                required: true,
            },
            sobreMi: {
                required: true,
            }
        },
        messages: {
            nombre: {
                required: "Este campo es requerido",
            },
            apellido: {
                required: "Este campo es requerido",
            },
            edad: {
                required: "Este campo es requerido",
                minlength: "La edad debe ser por lo menos 1",
                maxlength: "La edad debe ser menos de 100",
                numeroPositivo: "La edad no puede ser negativa o cero",
            },
            telefono: {
                required: "Este campo es requerido",
            },
            estudios: {
                required: "Este campo es requerido",
            },
            residencia: {
                required: "Este campo es requerido",
            },
            expLaboral: {
                required: "Este campo es requerido",
            },
            conocimientos: {
                required: "Este campo es requerido",
            },
            sobreMi: {
                required: "Este campo es requerido",
            },
        },
        errorElement: "div", // Cambia el elemento utilizado para mostrar mensajes de error a 'div'
        errorClass: "text-danger", // Clase de Bootstrap para el color de texto rojo
        errorPlacement: function(error, element) 
        {   
            error.insertAfter(element);   
        }   
    });
});
$(document).ready(function() {
    $("#mailForm").validate({
        rules: {
            emisor: {
                required: true,
                soloLetras: true,
            },
            destinatario: {
                required: true,
            },
            asunto: {
                required: true,
                maxlength:100,
            }, 
        },
        messages: {
            emisor: {
                required: "Este campo es requerido",
            },
            destinatario: {
                required: "Este campo es requerido",
            },
            asunto: {
                required: "Este campo es requerido",
                maxlength: "El asunto es muy largo",
            },
        },
        errorElement: "div", // Cambia el elemento utilizado para mostrar mensajes de error a 'div'
        errorClass: "text-danger", // Clase de Bootstrap para el color de texto rojo
        errorPlacement: function(error, element) 
        {   
            error.insertAfter(element);   
        }   
    });
});