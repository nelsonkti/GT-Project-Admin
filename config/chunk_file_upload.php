<?php
/**
 * Created by PhpStorm.
 * User: 猫巷
 * Email:catlane@foxmail.com
 * Date: 2019/5/29
 * Time: 9:26 AM
 */
return [
    'disks' => [

        'local' => [
            'driver' => 'local' ,
            'root' => storage_path ( 'app' ) ,
        ] ,

        'public' => [
            'driver' => 'local' ,
            'root' => storage_path ( 'app/public' ) ,
        ] ,
        'qiniu_live' => [//七牛云
            'driver' => 'qiniu' ,//如果是七牛云空间，必填qiniu
            'domains' => [
                'default' => 'xy-v.jingzhuan.cn' , //你的七牛域名
                'https' => 'xy-v.jingzhuan.cn' , //你的HTTPS域名
                'custom'    => 'http://xy-v.jingzhuan.cn',                //你的自定义域名
            ] ,
            'access_key' => 'gDAcwF4KcWJfvH8WszFbzGz7spJPmz1yQnliJizE' ,  //AccessKey
            'secret_key' => '-hib7Jthw77FSYv9zBSqDtkKSyjxuD3dpibGOnlj' ,  //SecretKey
            'bucket' => 'xueyuan-video' ,  //Bucket名字
            'url' => 'http://xy-v.jingzhuan.cn' ,  // 填写文件访问根url
        ]
    ] ,
    'default' => [
        'disk' => 'qiniu_live' ,//默认磁盘
        'extensions' => 'jpg,png,mp4,mp3' ,//后缀
        'mimeTypes' => 'image/*,video/*' ,//类型
        'fileSizeLimit' => 10737418240 ,//上传文件限制总大小，默认10G,默认单位为b
        'fileNumLimit' => '1' ,//文件上传总数量
        'saveType' => 'json', //单文件默认为字符串，多文件上传存储格式，json:['a.jpg','b.jpg']
    ]


];
