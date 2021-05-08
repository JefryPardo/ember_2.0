$(document).ready(function(){ 

    session();
    

    
    function session(){        

        $.ajax({
            url: '../home/home.php',
            type: 'GET',
            success: function (resp){
                console.log(resp);
                let template = resp;
                
                $('#user').html(template);
                publications();
            }
        });

        
    }

    function publications(){
        $.ajax({
            url: 'publications.php',
            type: 'GET',
            success: function (resp){
                let data = JSON.parse(resp);
                let template = '';
                data.forEach(d => {
                    template += `
                    <div class="col">
                        <div class="card sombra">
                            <img src="../../../img/post/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">${d.titulo} / ${d.mascotaTipo}</h5>
                                <p class="card-text">${d.descripcion}</p>
                                <a href="" class="btn btn-primary">Ver más.</a>
                            </div>
                        </div>
                    </div>
                    `
                });
                $('#publications').html(template);
            }
        });
    }

});