<?php
return array(
    /* 数据库设置 */
    'DB_TYPE'                => 'mysql', // 数据库类型
    'DB_HOST'                => 'localhost', // 服务器地址
    'DB_NAME'                => 'market', // 数据库名
    'DB_USER'                => 'root', // 用户名
    'DB_PWD'                 => 'root', // 密码
    'DB_PORT'                => '3306', // 端口
    'DB_PREFIX'              => 'market_', // 数据库表前缀

    // RBAC相关配置项
    'USER_AUTH_ON'  => false,
    'USER_AUTH_TYPE'    =>  1,  // 登录后，把用户的权限信息写入到session中
    'USER_AUTH_KEY' =>  'authid',   // $_SESSION['authid'] = ***;
    'REQUIRE_AUTH_MODULE'   =>  'Admin,Ttt',
    'NOT_AUTH_MODULE'   =>  'Home',
    'USER_AUTH_GATEWAY' =>  '/Home/user/login',  // 用户后台登录页面
    'USER_AUTH_MODEL'   =>  'market_think_user',   // 用户表的数据表名或模型类名
    'RBAC_ROLE_TABLE'   =>  'market_think_role',
    'RBAC_USER_TABLE'   =>  'market_think_role_user',  // 角色用户关联表的名称
    'RBAC_ACCESS_TABLE' =>  'market_think_access',     // 角色权限关联表
    'RBAC_NODE_TABLE'   =>  'market_think_node',
    'GUEST_AUTH_ON'     =>  false,   // 是否允许游客访问
    'GUEST_AUTH_ID'     =>  0,      // 游客的用户表id值
);