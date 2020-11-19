<?php
$data = $_POST['data'];
$username = $data[0]['value'];
$password1 = $data[1]['value'];
$password2 = $data[2]['value'];
$user = include_once 'user.php';
//判断用户名是否存在
$nameExist = false;
for ($i = 0;$i<count($user);$i++){
    if($user[$i]['username']==$username){
        $nameExist = true;
        $arr = [
            'code'=>404,
            'msg'=>'账号已经存在'
        ];
        echo json_encode($arr);
        break;
    }
}

if($nameExist==false){
    if ($password1!=$password2){
        $arr = [
            'code'=>404,
            'msg'=>'两次输入密码不一样'
        ];
        echo json_encode($arr);
    }else{
        $a = array(
            'username'=>$username,
            'password'=>$password1
        );
        array_push($user,$a);
        $str="<?php \r\n return ".var_export($user,true).';';
        file_put_contents('user.php',$str);
        $arr = [
            'code'=>200,
            'msg'=>'注册成功,请登录!'
        ];
        echo json_encode($arr);
    }
}