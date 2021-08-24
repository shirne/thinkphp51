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
 * @see \think\Middleware
 * @mixin \think\Middleware
 * @method static void import(array $middlewares = []) 批量设置中间件
 * @method static void add(mixed $middleware) 添加中间件到队列
 * @method static void unshift(mixed $middleware) 添加中间件到队列开头
 * @method static array all() 获取中间件队列
 * @method static \think\Response dispatch(\think\Request $request) 执行中间件调度
 */
class Middleware extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'middleware';
    }
}
