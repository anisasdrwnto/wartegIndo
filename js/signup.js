$(document).ready(function(){
    $("#btnSignUp").click(function(e){
        e.preventDefault();

        var nama     = $("#idNama").val();
        var email    = $("#idEmail").val();
        var password = $("#idPassword").val();

        console.log("Nama:", nama);
        console.log("Email:", email);
        console.log("Password:", password);

        if(!nama || !email || !password){
            alert('Semua field harus diisi!');
            return;
        }

        var data = { nama: nama, email: email, password: password };
        var url = "/proses/prosesSignUp.php";

        console.log("Kirim ke:", url);
        console.log("Data:", data);

        ajax.ajaxPost(url, data, function(result){
            console.log("Response:", result);
            if(result.status === false){
                alert(result.message);
            } else {
                window.location.href = "/login";
            }
        });
    });
});