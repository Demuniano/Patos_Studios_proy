$(document).ready(function() {
    $('.update-quantity').on('click', function() {
        var itemId = $(this).data('item-id');
        var newQuantity = $(this).closest('tr').find('input[name="quantity"]').val();

        $.ajax({
            type: 'PUT',
            url: '/cart/update/' + itemId,
            data: {
                _token: '{{ csrf_token() }}',
                quantity: newQuantity
            },
            success: function(response) {
                // Manejar el éxito, actualizar la interfaz de usuario, si es necesario
                console.log(response);
            },
            error: function(error) {
                // Manejar errores, si es necesario
                console.log(error);
            }
        });
    });
});