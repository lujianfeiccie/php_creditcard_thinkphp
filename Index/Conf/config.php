<?php
    if(defined("SAE_MYSQL_DB")){ //SAE环境
        return array(
                     'DB_HOST'=> SAE_MYSQL_HOST_S,
                     'DB_USER'=> SAE_MYSQL_USER,
                     'DB_PWD'=> SAE_MYSQL_PASS,
                     'DB_NAME'=> SAE_MYSQL_DB,
                     'DB_PREFIX'=>'tb_'
                     );
    }else{
        return array(
                     //'配置项'=>'配置值'
                     //数据库连接参数
                     'DB_HOST'=>'127.0.0.1',
                     'DB_USER'=>'root',
                     'DB_PWD'=>'123456',
                     'DB_NAME'=>'db_creditcard',
                     'DB_PREFIX'=>'tb_'
                     );
    }
?>