/* $(document).ready(function() {
    $('.btn-editar').click(function(e) {
        e.preventDefault();
        //console.log('Ver');
        var user_id = $(this).closest('tr').find('.user_id').text();
        //console.log(user_id);
        $.ajax({
            method: "POST",
            url: '../../../controlador/controlador-principal/controlador-editarcampaña.php',
            data: {
                'click_btn_editar': true,
                'user_id': user_id,
            },
            success: function(response) {
                //console.log(response);
                $('#campaña_id').val(response[0]['id_campaña']);
                $('#nombre_campaña').val(response[0]['nombre_campaña']);
                $('#nombre_empresa').val(response[0]['nombre_empresa']);
            
                $('#editar_info_empresa').modal('show');
            }
        });
    });
}); */
$(document).ready(function() {
    $('.btn-editar').click(function(e) {
        e.preventDefault();
        //console.log('Ver');
        var user_id = $(this).closest('tr').find('.user_id').text();
        //console.log(user_id);
        $.ajax({
            method: "POST",
            url: '../../../controlador/controlador-principal/controlador-editarempresa.php',
            data: {
                'click_btn_editar': true,
                'user_id': user_id,
            },
            success: function(response) {
                //console.log(response);
                $('#idempresa').val(response[0]['idempresa']);
                $('#razonsocial').val(response[0]['razonsocial']);
                $('#rucempresa').val(response[0]['rucempresa']);
                $('#direccion').val(response[0]['direccion']);
                $('#ubicacion').val(response[0]['ubicacion']);
                $('#celular').val(response[0]['celular']);
                $('#estadoempresa').val(response[0]['estadoempresa']);
                $('#log_registroempresa').val(response[0]['log_registroempresa']);
                
                $('#editar_info_empresa').modal('show');

            }
        });
    });
});