<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/api/koneksi.php';
header('Content-Type: application/json')

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

try{
    $statement = $connection->prepare("SELECT * FROM users WHERE email = ?");
    $statement->execute([$email]);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if($row){
        if(password_verify($password, $row['password'])){
            echo json_encode([
                'status' => 'success',
                'role'   => $row['role'],
                'email'  => $row['email'],
                'id_users' => $row['id_users']
            ]);
        }else{
            echo json_encode(['status' => 'error', 'message' => 'Password Salah!']);
        }
    }else{
            echo json_encode(['status' => 'error', 'message' => 'User tidak ditemukan!']);
    }
}catch(PDOException $error){
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message'=> 'DB Error : ' . $error->getMessage()]);
}
?>