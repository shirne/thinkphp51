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
 * @see \think\Session
 * @mixin \think\Session
 * @method static void init(array $config = []) session初始化
 * @method static bool has(string $name,string $prefix = null) 判断session数据
 * @method static mixed prefix(string $prefix = '') 设置或者获取session作用域（前缀）
 * @method static mixed get(string $name = '',string $prefix = null) session获取
 * @method static mixed pull(string $name,string $prefix = null) session获取并删除
 * @method static void push(string $key, mixed $value) 添加数据到一个session数组
 * @method static void set(string $name, mixed $value , string $prefix = null) 设置session数据
 * @method static void flash(string $name, mixed $value = null) session设置 下一次请求有效
 * @method static void flush() 清空当前请求的session数据
 * @method static void delete(string $name, string $prefix = null) 删除session数据
 * @method static void clear($prefix = null) 清空session数据
 * @method static void start() 启动session
 * @method static void destroy() 销毁session
 * @method static void pause() 暂停session
 * @method static void regenerate(bool $delete = false) 重新生成session_id
 */
class Session extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'session';
    }
}
