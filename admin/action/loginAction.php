<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2015/11/3
 * Time: 14:06
 */
require_once '../../lib/medoo.php';

// Initialize
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'easycurd',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);



$username = $_POST['username'];
$password = $_POST['password'];

$database->select('ec_user', [
    'name' => 'foo',
    'email' => 'foo@bar.com',
    'age' => 25,
    'lang' => ['en', 'fr', 'jp', 'cn']
]);




if($result = $database){
    //��¼�ɹ�
    session_start();

    $_SESSION['username'] = $username;

    exit;

} else {

    exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}

?>