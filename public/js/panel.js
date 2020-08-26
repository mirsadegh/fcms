$(document).ready(function () {

    $('a.delete-photo').click(function () {
        let id = $(this).attr('data-photo-id');
        let input = '<input type="hidden" name="photo_ids[]" value="'+id+'">';
         $('#photos-to-be-deleted').append(input);
        $(this).parents('.col-md-3').remove();
    });

    $('.danger-alert').click(function () {
        let target = $(this).attr('data-target');
        $('#are-you-sure #yes').attr('data-target',target);
        $('#are-you-sure').slideDown();
    });
    $('#are-you-sure #no').click(function () {
        $('#are-you-sure').slideUp();
    });
    $('#are-you-sure #yes').click(function () {
        let id = $(this).attr('data-target');
        let form = $('#'+id);
        form.submit();

    });

});