<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/api/koneksi.php';

$nama     = $_POST['nama'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$role     = 'USR';
$hash     = password_hash($password, PASSWORD_DEFAULT);

try{
    $statement = $connection->prepare("SELECT id_users FROM users WHERE email = ?");
    $statement->execute([$email]);

    if($statement->rowCount() > 0){
        echo json_encode(['status'=> false, 'message'=> 'Email sudah digunakan']);
        exit;
    }


    //Generate ID User Otomatis
    $statement = $connection->prepare("SELECT id_users FROM users WHERE id_users LIKE 'USR%' ORDER BY id_users DESC LIMIT 1");
    $statement->execute();
    $last = $statement->fetchColumn();

    if($last){
        $number = (int) substr($last, 2) + 1;
    }else{
        $number = 1;
    }

    $id_users = 'USR' . str_pad($number, 3, '0', STR_PAD_LEFT);

    #INSERT USER BARU
    $statement = $connection->prepare("INSERT INTO users (id_users, nama, email, password, role) VALUES(?,?,?,?,?)");
    if ($statement->execute([$id_users, $nama, $email, $hash, $role])){
        echo json_encode(['status' => true, 'message' => 'sukses']);
    }else{
        echo json_encode(['status' => false, 'message' => 'gagal']);
    }
}catch(PDOException$error){
    http_response_code(500);
    echo 'DB Error : ' . $error->getMessage();
}

?>