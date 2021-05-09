$(document).ready(function(){ 
    
    $('#regis').submit(function(event){
        const postData = {
            nombre: $('#_nombre').val(),
            usuario: $('#_usuario').val(),
            contrasenia: $('#_contrasenia').val()
        };

        $.post('search.php',postData,function(response){            
            if(response){
                alert('El usuario: '+ $('#_nombre').val() +' no esta disponible.');
            }else{
                console.log('Disponible');
                register();
            }
            
        });
        event.preventDefault();
    });

    function register(){        

        const postData = {
            nombre: $('#_nombre').val(),
            usuario: $('#_usuario').val(),
            contrasenia: $('#_contrasenia').val()
        };

        $.post('registro.php',postData,function(response){
            
            if(response){
                location.href ="../login/index.html";
            }else{
                alert('Error al crear usuario.');
            }
            
        });

        
    }



});