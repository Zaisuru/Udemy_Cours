$(function(){
    $('#contact-form').submit(function (e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contant-form').serializeToString();

        $.ajax({
            type : 'POST',
            url : 'php/contact.php',
            data : postdata,
            dataType : 'json',
            success : function (result) {
                if (result.isSuccess){
                    $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $("#contact-form")[0].reset();
                }
                else{
                    $("#firstname + .comments").html(result.firstnameError);
                    $("#name + .comments").html(result.nameError);
                    $("#mail + .comments").html(result.mailError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#msg + .comments").html(result.msgError);
                }
            }
        })
    })
})