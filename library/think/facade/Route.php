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
 * @see \think\Route
 * @mixin \think\Route
 * @method static \think\route\Domain domain(mixed $name, mixed $rule = '', array $option = [], array $pattern = []) 注册域名路由
 * @method static \think\Route pattern(mixed $name, string $rule = '') 注册变量规则
 * @method static \think\Route option(mixed $name, mixed $value = '') 注册路由参数
 * @method static \think\Route bind(string $bind) 设置路由绑定
 * @method static mixed getBind(string $bind) 读取路由绑定
 * @method static \think\Route name(string $name) 设置当前路由标识
 * @method static mixed getName(string $name) 读取路由标识
 * @method static void setName(string $name) 批量导入路由标识
 * @method static void import(array $rules, string $type = '*') 导入配置文件的路由规则
 * @method static \think\route\RuleItem rule(string $rule, mixed $route, string $method = '*', array $option = [], array $pattern = []) 注册路由规则
 * @method static void rules(array $rules, string $method = '*', array $option = [], array $pattern = []) 批量注册路由规则
 * @method static \think\route\RuleGroup group(string|array $name, array|\Closure $route, array $method = '*', array $option = [], array $pattern = []) 注册路由分组
 * @method static \think\route\RuleItem any(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\RuleItem get(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\RuleItem post(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\RuleItem put(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\RuleItem delete(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\RuleItem patch(string $rule, mixed $route, array $option = [], array $pattern = []) 注册路由
 * @method static \think\route\Resource resource(string $rule, mixed $route, array $option = [], array $pattern = []) 注册资源路由
 * @method static \think\Route controller(string $rule, mixed $route, array $option = [], array $pattern = []) 注册控制器路由
 * @method static \think\Route alias(string $rule, mixed $route, array $option = [], array $pattern = []) 注册别名路由
 * @method static \think\Route setMethodPrefix(mixed $method, string $prefix = '') 设置不同请求类型下面的方法前缀
 * @method static \think\Route rest(string $name, array $resource = []) rest方法定义和修改
 * @method static \think\Route\RuleItem miss(string $route, string $method = '*', array $option = []) 注册未匹配路由规则后的处理
 * @method static \think\Route\RuleItem auto(string $route) 注册一个自动解析的URL路由
 * @method \think\Route\Dispatch check(string $url, string $depr = '/', bool $must = false, bool $completeMatch = false) static 检测URL路由
 */
class Route extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'route';
    }
}
