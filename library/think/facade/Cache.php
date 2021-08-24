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
 * @see \think\Cache
 * @mixin \think\Cache
 * @method static \think\cache\Driver connect(array $options = [], mixed $name = false) 连接缓存
 * @method static \think\cache\Driver init(array $options = []) 初始化缓存
 * @method static \think\cache\Driver store(string $name = '') 切换缓存类型
 * @method static bool has(string $name) 判断缓存是否存在
 * @method static mixed get(string $name, mixed $default = false) 读取缓存
 * @method static mixed pull(string $name) 读取缓存并删除
 * @method static mixed set(string $name, mixed $value, int $expire = null) 设置缓存
 * @method static mixed remember(string $name, mixed $value, int $expire = null) 如果不存在则写入缓存
 * @method static mixed inc(string $name, int $step = 1) 自增缓存（针对数值缓存）
 * @method static mixed dec(string $name, int $step = 1) 自减缓存（针对数值缓存）
 * @method static bool rm(string $name) 删除缓存
 * @method static bool clear(string $tag = null) 清除缓存
 * @method static mixed tag(string $name, mixed $keys = null, bool $overlay = false) 缓存标签
 * @method static object handler() 返回句柄对象，可执行其它高级方法
 */
class Cache extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'cache';
    }
}
