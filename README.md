####导航后台系统

####关于本系统

 - Sign By Simon

####使用说明

 - 导入数据库文件dh.sql到MySQL数据库中
 - 修改 /App/Common/Conf/config.php 文件中的数据库配置

####注意事项

<!--  - 本系统需开启rewrite服务，Apache服务器下为.htaccess文件，Nginx服务器下需引入rewrite.conf文件
- 本系统启用了文件缓存技术，请确保 /App/Runtime 目录有可写权限 -->

####目录结构

	根目录
	|
	|--ThinkPHP                             ：ThinkPHP 核心框架包
	|
	|----App                                ：应用目录
	|     |--Admin                          ：后台应用目录
    |     |
	|     |--Common                         ：公用函数及类库文件存放目录
    |     |     |--Common                   ：公用函数目录 
	|     |     |--Conf                     ：配置文件目录
	|     |     |     |--config.php         ：公用配置文件
	|     |
	|     |--Home                           ：前台应用目录
	|     |--Runtime                        ：缓存文件存放目录
	|
	|--Public                               ：公用前台文件目录
	|     |--admin                          ：后台样式文件目录
	|     |--home                           ：前台样式文件目录
	|     |--upload                         ：文件上传目录
	|--index.php                            ：前台入口文件
	|--.htaccess                            ：Windows服务器下URL重写规则