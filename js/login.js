$(document).ready(function(){
    $("#btnLogin").click(function(){
        var email    = $("#idEmail").val();
        var password = $("#idPassword").val();
        
        var data = {
            email    : email,
            password : password
        }

        var url = "/proses/prosesLogin.php";

        ajax.ajaxPost(url, data, function(result){
            if(result.status === false){
                alert(error.message());
            }else{
                window.location.href="/home";
            }
        });
    });
});