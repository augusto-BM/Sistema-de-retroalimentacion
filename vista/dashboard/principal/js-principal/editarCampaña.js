$(document).ready(function() {
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
});