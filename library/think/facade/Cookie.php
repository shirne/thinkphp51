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
 * @see \think\Cookie
 * @mixin \think\Cookie
 * @method static void init(array $config = []) 初始化
 * @method static bool has(string $name,string $prefix = null) 判断Cookie数据
 * @method static mixed prefix(string $prefix = '') 设置或者获取cookie作用域（前缀）
 * @method static mixed get(string $name,string $prefix = null) Cookie获取
 * @method static mixed set(string $name, mixed $value = null, mixed $option = null) 设置Cookie
 * @method static void forever(string $name, mixed $value = null, mixed $option = null) 永久保存Cookie数据
 * @method static void delete(string $name, string $prefix = null) Cookie删除
 * @method static void clear($prefix = null) Cookie清空
 */
class Cookie extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'cookie';
    }
}
