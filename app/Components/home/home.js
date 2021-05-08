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

});