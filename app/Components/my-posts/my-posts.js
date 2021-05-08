$(document).ready(function(){ 

    let editar = false;
    $('#filtro-r').hide();
    session();
        
    function session(){        

        $.ajax({
            url: '../home/home.php',
            type: 'GET',
            success: function (resp){
                let template = resp;
                
                $('#user').html(template);
                publications();
            }
        });

        
    }

    function publications(){
        $.ajax({
            url: 'my-posts.php',
            type: 'GET',
            success: function (resp){
                let data = JSON.parse(resp);
                let template = '';
                data.forEach(d => {
                    template += `
                    <tr posts-id="${d.id}">
                        <td>${d.id}</td>
                        <td><a href="#" title="Editar" class="edit" >${d.titulo}</a></td>
                        <td>${d.mascotaTipo}</td>
                        <td>${d.motivo}</td>
                        <td>${d.descripcion}</td>
                        <td>
                            <a class="posts-delete btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    `
                });
                $('#posts').html(template);
            }
        });
    }

    $('#id-form').submit(function(event){
        const postData = {
            titulo: $('#titulo').val(),
            tipo: $('#tipo').val(),
            motivo: $('#motivo').val(),
            descripcion: $('#descripcion').val(),
            id: $('#f-id').val()
        };  
        
        let url = editar === false ? 'my-posts-add.php': 'my-posts-edit.php';
        
        $.post(url,postData,function(response){
            publications();
            $('#id-form').trigger('reset');
        });
        event.preventDefault();
    });


    //Borrar
    $(document).on('click','.posts-delete',function(){
        $('#filtro-r').hide();
        if(confirm('¿Seguro quiere eliminar este dato?')){
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('posts-id');
            $.post('my-posts-delete.php',{id},function (resp){
                publications();
            });
        }
    });

    //Editar
    $(document).on('click','.edit',function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('posts-id');
        $.post('item.php',{id}, function(resp){
            const data = JSON.parse(resp);
            $('#titulo').val(data.titulo);
            $('#motivo').val(data.motivo);
            $('#tipo').val(data.tipo);
            $('#descripcion').val(data.descripcion);
            $('#f-id').val(data.id);
            editar = true;
        });
    });

    //Filtro
    $('#search').keyup(function(){
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
                url:'item-search.php',
                type: 'POST',
                data: {search},
                success: function(resp){
                    let data = JSON.parse(resp);   
                    let template = '';              
                    data.forEach(d => {
                        template += `
                        <tr posts-id="${d.id}">
                            <td><a href="#" title="Editar" class="edit" >${d.titulo}</a></td>
                            <td class="p-3">
                                <a class="posts-delete btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        `
                    });
                    $('#container').html(template);
                    $('#filtro-r').show();
                }
            });
        }
    });

});