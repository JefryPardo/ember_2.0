$(document).ready(function(){ 
    $('#login-f').submit(function(event){
        const postData = {
            usuario: $('#_usuario').val(),
            contrasenia: $('#_contrasenia').val()
        };

        $.post('login.php',postData,function(response){
            
            if(response){
                location.href ="../home/home.html";
            }else{
                alert('Datos incorrectos.');
            }
            
        });
        event.preventDefault();
    });
});