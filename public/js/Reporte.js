function Generarpdf(){
    var formData ={
        ruta:"Reportes.prueba"
    } 
    $.ajax({
        type: "get",
        url: "/reporteGenerate",
        data: formData,
        dataType: "json",
        success: function (val) {
            alert("Pdf Generado")
        },
        error: function (val) {
            console.log('Error:', val)
        }
    });
