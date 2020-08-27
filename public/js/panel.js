$(document).ready(function () {

     //deleting photos
    $('a.delete-photo').click(function () {
        let id = $(this).attr('data-photo-id');
        let input = '<input type="hidden" name="photo_ids[]" value="'+id+'">';
         $('#photos-to-be-deleted').append(input);
        $(this).parents('.col-md-3').remove();
    });

    //are you sure
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

//clone action
$(document).on('click','#cloner',function () {
    let row = $('.clone-row').first();
    let count = $('.clone-row').length;
    let cloned = row.clone();
    cloned.find('input[type!=file],textarea').val('');
    cloned.find('input#position').val(count+1);
    cloned.appendTo('#clone-box');
    $('.delete-clone-row').show();
});

$(document).on('click','.delete-clone-row',function () {
    let row =  $(this).parents('.clone-row');
    row.remove();
    let count = $('.clone-row').length;
    if (count == 1){
        $('.delete-clone-row').hide();
    }

});