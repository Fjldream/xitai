
<?php
//ajax接受返回值
//apache ->localhost:80/laomeng/11.18/php ->server php模块->解析完的内容->apache
//输出函数
//php js 都是弱类型语言 php更加严谨一些
//形参实参数量要一致
// 当形参数量大于实参,miss 1 argunment
// 当实参数量大于形参 不会报错,
//php 函数作用域
//$abc = "abvx";
function aa($msg="我是你"){//默认的值 如果不传实参
    //如何接收传入的值
    //func_get_args()获取所有的实参
    //func_num_args()获取实参的数量
    //func_get_arg()获取某一个实参
//    var_dump(func_get_args());
//    echo func_num_args();
//    echo func_get_arg(1);
    echo $msg;
//    echo $abc;//不可以像js那样
}
aa();
?>
<script>
   let abc = "abc";
    function aa(msg="我是你"){
        console.log(msg);
        console.log(abc);
    }
    aa();
</script>
