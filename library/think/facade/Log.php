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
 * @see \think\Log
 * @mixin \think\Log
 * @method static \think\Log init(array $config = []) 日志初始化
 * @method static mixed getLog(string $type = '') 获取日志信息
 * @method static \think\Log record(mixed $msg, string $type = 'info', array $context = []) 记录日志信息
 * @method static \think\Log clear() 清空日志信息
 * @method static \think\Log key(string $key) 当前日志记录的授权key
 * @method static \think\Log close() 关闭本次请求日志写入
 * @method static bool check(array $config) 检查日志写入权限
 * @method static bool save() 保存调试信息
 * @method static void write(mixed $msg, string $type = 'info', bool $force = false) 实时写入日志信息
 * @method static void log(string $level,mixed $message, array $context = []) 记录日志信息
 * @method static void emergency(mixed $message, array $context = []) 记录emergency信息
 * @method static void alert(mixed $message, array $context = []) 记录alert信息
 * @method static void critical(mixed $message, array $context = []) 记录critical信息
 * @method static void error(mixed $message, array $context = []) 记录error信息
 * @method static void warning(mixed $message, array $context = []) 记录warning信息
 * @method static void notice(mixed $message, array $context = []) 记录notice信息
 * @method static void info(mixed $message, array $context = []) 记录info信息
 * @method static void debug(mixed $message, array $context = []) 记录debug信息
 * @method static void sql(mixed $message, array $context = []) 记录sql信息
 */
class Log extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'log';
    }
}
