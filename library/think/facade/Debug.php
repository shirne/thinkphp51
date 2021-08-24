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
 * @see \think\Debug
 * @mixin \think\Debug
 * @method static void remark(string $name, mixed $value = '') 记录时间（微秒）和内存使用情况
 * @method static int getRangeTime(string $start, string $end, mixed $dec = 6) 统计某个区间的时间（微秒）使用情况
 * @method static int getUseTime(int $dec = 6) 统计从开始到统计时的时间（微秒）使用情况
 * @method static string getThroughputRate(string $start, string $end, mixed $dec = 6) 获取当前访问的吞吐率情况
 * @method static string getRangeMem(string $start, string $end, mixed $dec = 2) 记录区间的内存使用情况
 * @method static int getUseMem(int $dec = 2) 统计从开始到统计时的内存使用情况
 * @method static string getMemPeak(string $start, string $end, mixed $dec = 2) 统计区间的内存峰值情况
 * @method static mixed getFile(bool $detail = false) 获取文件加载信息
 * @method static mixed dump(mixed $var, bool $echo = true, string $label = null, int $flags = ENT_SUBSTITUTE) 浏览器友好的变量输出
 */
class Debug extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'debug';
    }
}
