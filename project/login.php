<?php
$user = include_once 'user.php';
//var_dump($_GET);
$data = $_POST['data'];
$username = $data[0]['value'];
$password = $data[1]['value'];
//echo $username.$password;
//echo $num;
$str = '';
$flag = false;
for($i=0;$i<count($user);$i++){
    if($user[$i]['username']==$username&&$user[$i]['password']==$password){
        $str = '登录成功！';
        $flag = true;
        break;
    }
    if ($user[$i]['username']==$username&&$user[$i]['password']!=$password){
        $str = '密码错误！';
        break;
    }
    if($i == count($user)-1){
        $str = '账号不存在';
    }
}
if($flag==true){
    $arr = [
        'code'=>200,
        'msg'=>$str
    ];
    echo json_encode($arr);
}else{
    $arr = [
        'code'=>404,
        'msg'=>$str
    ];
    echo json_encode($arr);
}