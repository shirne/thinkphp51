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
 * @see \think\Config
 * @mixin \think\Config
 * @method static array load(string $file, string $name = '') 加载配置文件
 * @method static bool has(string $name) 检测配置是否存在
 * @method static array pull(string $name) 获取一级配置参数
 * @method static mixed get(string $name,mixed $default = null) 获取配置参数
 * @method static array set(mixed $name, mixed $value = null) 设置配置参数
 * @method static array reset(string $name ='') 重置配置参数
 * @method static void remove(string $name = '') 移除配置
 * @method static void setYaconf(mixed $yaconf) 设置开启Yaconf 或者指定配置文件名
 */
class Config extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'config';
    }
}
