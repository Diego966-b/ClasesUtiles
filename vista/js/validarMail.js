$.validator.addMethod("soloLetras", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\sáéíóúÁÉÍÓÚñÑüÜ]+$/i.test(value);
}, "Solo se permiten letras en este campo");
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
        errorElement: "span", // Cambia el elemento utilizado para mostrar mensajes de error a 'span'
        errorClass: "text-danger", // Clase de Bootstrap para el color de texto rojo
        errorPlacement: function(error, element) 
        {   
            error.insertAfter(element);   
        }   
    });
});