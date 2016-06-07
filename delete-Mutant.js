function deleteMutant(id) {
    $.ajax({
        url: mutantsUrl,
        method: 'delete',
        success: function() {

        }
    });
};
