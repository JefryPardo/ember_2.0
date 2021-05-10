$(document).ready(function(){ 

    session();

    
    function session(){        

        $.ajax({
            url: 'home.php',
            type: 'GET',
            success: function (resp){
                console.log(resp);
                let template = resp;
                
                $('#user').html(template);
            }
        });
    }

    function salir(){        
        $.ajax({
            url: 'exit.php',
            type: 'GET',
            success: function (resp){
                
                if(resp){
                    location.href ="../login/login.html";
                }
            }
        });
    }


});