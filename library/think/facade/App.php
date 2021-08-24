<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\facade;

use think\Facade;

/**
 * @see \think\App
 * @mixin \think\App
 * @method static \think\App bind(string $bind) 绑定模块或者控制器
 * @method static void initialize() 初始化应用
 * @method static void init(string $module='') 初始化模块
 * @method static \think\Response run() 执行应用
 * @method static \think\App dispatch(\think\route\Dispatch $dispatch) 设置当前请求的调度信息
 * @method static void log(mixed $log, string $type = 'info') 记录调试信息
 * @method static mixed config(string $name='') 获取配置参数
 * @method static \think\route\Dispatch routeCheck() URL路由检测（根据PATH_INFO)
 * @method static \think\App routeMust(bool $must = false) 设置应用的路由检测机制
 * @method static \think\Model model(string $name = '', string $layer = 'model', bool $appendSuffix = false, string $common = 'common') 实例化模型
 * @method static object controller(string $name, string $layer = 'controller', bool $appendSuffix = false, string $empty = '') 实例化控制器
 * @method static \think\Validate validate(string $name = '', string $layer = 'validate', bool $appendSuffix = false, string $common = 'common') 实例化验证器类
 * @method static \think\db\Query db(mixed $config = [], mixed $name = false) 数据库初始化
 * @method static mixed action(string $url, $vars = [], $layer = 'controller', $appendSuffix = false) 调用模块的操作方法
 * @method static string parseClass(string $module, string $layer, string $name, bool $appendSuffix = false) 解析应用类的类名
 * @method static string version() 获取框架版本
 * @method static bool isDebug() 是否为调试模式
 * @method static string getModulePath() 获取当前模块路径
 * @method static void setModulePath(string $path) 设置当前模块路径
 * @method static string getRootPath() 获取应用根目录
 * @method static string getAppPath() 获取应用类库目录
 * @method static string getRuntimePath() 获取应用运行时目录
 * @method static string getThinkPath() 获取核心框架目录
 * @method static string getRoutePath() 获取路由目录
 * @method static string getConfigPath() 获取应用配置目录
 * @method static string getConfigExt() 获取配置后缀
 * @method static string setNamespace(string $namespace) 设置应用类库命名空间
 * @method static string getNamespace() 获取应用类库命名空间
 * @method static string getSuffix() 是否启用类库后缀
 * @method static float getBeginTime() 获取应用开启时间
 * @method static integer getBeginMem() 获取应用初始内存占用
 * @method static \think\Container container() 获取容器实例
 */
class App extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'app';
    }
}
