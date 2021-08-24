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
 * @see \think\Request
 * @mixin \think\Request
 * @method static void hook(mixed $method, mixed $callback = null) Hook 方法注入
 * @method static \think\Request create(string $uri, string $method = 'GET', array $params = [], array $cookie = [], array $files = [], array $server = [], string $content = null) 创建一个URL请求
 * @method static mixed domain(bool $port = false) 获取当前包含协议、端口的域名
 * @method static mixed url(bool $domain = false) 获取当前完整URL
 * @method static mixed baseUrl(bool $domain = false) 获取当前URL
 * @method static mixed baseFile(bool $domain = false) 获取当前执行的文件
 * @method static mixed root(bool $domain = false) 获取URL访问根地址
 * @method static string rootUrl() 获取URL访问根目录
 * @method static string pathinfo() 获取当前请求URL的pathinfo信息（含URL后缀）
 * @method static string path() 获取当前请求URL的pathinfo信息(不含URL后缀)
 * @method static string ext() 当前URL的访问后缀
 * @method static float time(bool $float = false) 获取当前请求的时间
 * @method static mixed type() 当前请求的资源类型
 * @method static void mimeType(mixed $type, string $val = '') 设置资源类型
 * @method static string method(bool $method = false) 当前的请求类型
 * @method static bool isGet() 是否为GET请求
 * @method static bool isPost() 是否为POST请求
 * @method static bool isPut() 是否为PUT请求
 * @method static bool isDelete() 是否为DELTE请求
 * @method static bool isHead() 是否为HEAD请求
 * @method static bool isPatch() 是否为PATCH请求
 * @method static bool isOptions() 是否为OPTIONS请求
 * @method static bool isCli() 是否为cli
 * @method static bool isCgi() 是否为cgi
 * @method static mixed param(string $name = '', mixed $default = null, mixed $filter = '') 获取当前请求的参数
 * @method static mixed route(string $name = '', mixed $default = null, mixed $filter = '') 设置获取路由参数
 * @method static mixed get(string $name = '', mixed $default = null, mixed $filter = '') 设置获取GET参数
 * @method static mixed post(string $name = '', mixed $default = null, mixed $filter = '') 设置获取POST参数
 * @method static mixed put(string $name = '', mixed $default = null, mixed $filter = '') 设置获取PUT参数
 * @method static mixed delete(string $name = '', mixed $default = null, mixed $filter = '') 设置获取DELETE参数
 * @method static mixed patch(string $name = '', mixed $default = null, mixed $filter = '') 设置获取PATCH参数
 * @method static mixed request(string $name = '', mixed $default = null, mixed $filter = '') 获取request变量
 * @method static mixed session(string $name = '', mixed $default = null, mixed $filter = '') 获取session数据
 * @method static mixed cookie(string $name = '', mixed $default = null, mixed $filter = '') 获取cookie参数
 * @method static mixed server(string $name = '', mixed $default = null, mixed $filter = '') 获取server参数
 * @method static mixed env(string $name = '', mixed $default = null, mixed $filter = '') 获取环境变量
 * @method static mixed file(string $name = '') 获取上传的文件信息
 * @method static mixed header(string $name = '', mixed $default = null) 设置或者获取当前的Header
 * @method static mixed input(array $data,mixed $name = '', mixed $default = null, mixed $filter = '') 获取变量 支持过滤和默认值
 * @method static mixed filter(mixed $filter = null) 设置或获取当前的过滤规则
 * @method static mixed has(string $name, string $type = 'param', bool $checkEmpty = false) 是否存在某个请求参数
 * @method static mixed only(mixed $name, string $type = 'param') 获取指定的参数
 * @method static mixed except(mixed $name, string $type = 'param') 排除指定参数获取
 * @method static bool isSsl() 当前是否ssl
 * @method static bool isAjax(bool $ajax = false) 当前是否Ajax请求
 * @method static bool isPjax(bool $pjax = false) 当前是否Pjax请求
 * @method static mixed ip(int $type = 0, bool $adv = true) 获取客户端IP地址
 * @method static bool isMobile() 检测是否使用手机访问
 * @method static string scheme() 当前URL地址中的scheme参数
 * @method static string query() 当前请求URL地址中的query参数
 * @method static string host(bool $stric = false) 当前请求的host
 * @method static string port() 当前请求URL地址中的port参数
 * @method static string protocol() 当前请求 SERVER_PROTOCOL
 * @method static string remotePort() 当前请求 REMOTE_PORT
 * @method static string contentType() 当前请求 HTTP_CONTENT_TYPE
 * @method static array routeInfo() 获取当前请求的路由信息
 * @method static array dispatch() 获取当前请求的调度信息
 * @method static string module() 获取当前的模块名
 * @method static string controller(bool $convert = false) 获取当前的控制器名
 * @method static string action(bool $convert = false) 获取当前的操作名
 * @method static string langset() 获取当前的语言
 * @method static string getContent() 设置或者获取当前请求的content
 * @method static string getInput() 获取当前请求的php://input
 * @method static string token(string $name = '__token__', mixed $type = 'md5') 生成请求令牌
 * @method static string cache(string $key, mixed $expire = null, array $except = [], string $tag = null) 设置当前地址的请求缓存
 * @method static string getCache() 读取请求缓存设置
 */
class Request extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'request';
    }
}
