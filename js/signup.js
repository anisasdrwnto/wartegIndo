$(document).ready(function(){
    $("#btnSignUp").click(function(){
        var nama     = $("#idNama").val();
        var email    = $("#idEmail").val();
        var password = $("#idPassword").val();

        var data = {
            nama:nama,
            email: email,
            password: password
        };

        var url = "/proses/prosesSignUp.php";

        ajax.ajaxPost(url, data, function(result){
            if(result.status === false){
                alert(result.message);
            }else{
                window.location.href="/login";
            }
        });
    });
});