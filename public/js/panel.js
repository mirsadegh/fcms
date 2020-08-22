$(document).ready(function () {

    $('a.delete-photo').click(function () {
        let id = $(this).attr('data-photo-id');
        let input = '<input type="hidden" name="photo_ids[]" value="'+id+'">';
         $('#photos-to-be-deleted').append(input);
        $(this).parents('.col-md-3').remove();
    })

});