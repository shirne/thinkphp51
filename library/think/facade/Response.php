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
 * @see \think\Response
 * @mixin \think\Response
 * @method static \think\response create(mixed $data = '', string $type = '', int $code = 200, array $header = [], array $options = []) 创建Response对象
 * @method static void send() 发送数据到客户端
 * @method static \think\Response options(mixed $options = []) 输出的参数
 * @method static \think\Response data(mixed $data) 输出数据设置
 * @method static \think\Response header(mixed $name, string $value = null) 设置响应头
 * @method static \think\Response content(mixed $content) 设置页面输出内容
 * @method static \think\Response code(int $code) 发送HTTP状态
 * @method static \think\Response lastModified(string $time) LastModified
 * @method static \think\Response expires(string $time) expires
 * @method static \think\Response eTag(string $eTag) eTag
 * @method static \think\Response cacheControl(string $cache) 页面缓存控制
 * @method static \think\Response contentType(string $contentType, string $charset = 'utf-8') 页面输出类型
 * @method static mixed getHeader(string $name) 获取头部信息
 * @method static mixed getData() 获取原始数据
 * @method static mixed getContent() 获取输出数据
 * @method static int getCode() 获取状态码
 */
class Response extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'response';
    }
}
