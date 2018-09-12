// This is a JavaScript file
$(document).on("click","#btnEnviar", function(){
    var parametros = {
        "nome": $("#txtNome").val(),
        "cpf": $("#txtCpf").val()
    };

    $.ajax({
        type:"post",
        url:"https://crudmobile3i2-jussimar.c9users.io/cadastro.php",
        data: parametros,
        success: function(data){
          navigator.notification.alert(data);
          $("#txtNome").val("");
          $("#txtCpf").val("");
        },
        error:function(data){
          navigator.notification.alert("erro: "+data);
        }
    });
});
