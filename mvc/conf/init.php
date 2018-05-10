<?php 

include './conf/define.php';

# 引入Smarty模板引擎
include PLUGINS_PATH . 'smarty/Smarty.class.php';

# 引入方法工具类
include CORE_PATH . 'Func.php';

# 引入配置文件
include CONF_PATH . 'config.php';

include CORE_PATH . 'App.class.php';
spl_autoload_register('\core\App::autoL');

# 引入模型类
include CORE_PATH . 'Model.class.php';

# 引入控制器类
include CORE_PATH . 'Controller.class.php';
