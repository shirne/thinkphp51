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

namespace think;

use think\db\Connection;

/**
 * Class Db
 * @package think
 * @method static \think\db\Query master() 从主服务器读取数据
 * @method static \think\db\Query readMaster(bool $all = false) 后续从主服务器读取数据
 * @method static \think\db\Query table(string $table) 指定数据表（含前缀）
 * @method static \think\db\Query name(string $name) 指定数据表（不含前缀）
 * @method static \think\db\Expression raw(string $value) 使用表达式设置数据
 * @method static \think\db\Query where(mixed $field, string $op = null, mixed $condition = null) 查询条件
 * @method static \think\db\Query whereRaw(string $where, array $bind = []) 表达式查询
 * @method static \think\db\Query whereExp(string $field, string $condition, array $bind = []) 字段表达式查询
 * @method static \think\db\Query when(mixed $condition, mixed $query, mixed $otherwise = null) 条件查询
 * @method static \think\db\Query join(mixed $join, mixed $condition = null, string $type = 'INNER') JOIN查询
 * @method static \think\db\Query view(mixed $join, mixed $field = null, mixed $on = null, string $type = 'INNER') 视图查询
 * @method static \think\db\Query field(mixed $field, boolean $except = false) 指定查询字段
 * @method static \think\db\Query fieldRaw(string $field, array $bind = []) 指定查询字段
 * @method static \think\db\Query union(mixed $union, boolean $all = false) UNION查询
 * @method static \think\db\Query limit(mixed $offset, integer $length = null) 查询LIMIT
 * @method static \think\db\Query order(mixed $field, string $order = null) 查询ORDER
 * @method static \think\db\Query orderRaw(string $field, array $bind = []) 查询ORDER
 * @method static \think\db\Query cache(mixed $key = null , integer $expire = null) 设置查询缓存
 * @method static \think\db\Query withAttr(string $name,callable $callback = null) 使用获取器获取数据
 * @method static mixed value(string $field) 获取某个字段的值
 * @method static array column(string $field, string $key = '') 获取某个列的值
 * @method static mixed find(mixed $data = null) 查询单个记录
 * @method static mixed select(mixed $data = null) 查询多个记录
 * @method static integer insert(array $data, boolean $replace = false, boolean $getLastInsID = false, string $sequence = null) 插入一条记录
 * @method static integer insertGetId(array $data, boolean $replace = false, string $sequence = null) 插入一条记录并返回自增ID
 * @method static integer insertAll(array $dataSet) 插入多条记录
 * @method static integer update(array $data) 更新记录
 * @method static integer delete(mixed $data = null) 删除记录
 * @method static boolean chunk(integer $count, callable $callback, string $column = null) 分块获取数据
 * @method static \Generator cursor(mixed $data = null) 使用游标查找记录
 * @method static mixed query(string $sql, array $bind = [], boolean $master = false, bool $pdo = false) SQL查询
 * @method static integer execute(string $sql, array $bind = [], boolean $fetch = false, boolean $getLastInsID = false, string $sequence = null) SQL执行
 * @method static \think\Paginator paginate(integer $listRows = 15, mixed $simple = null, array $config = []) 分页查询
 * @method static mixed transaction(callable $callback) 执行数据库事务
 * @method static void startTrans() 启动事务
 * @method static void commit() 用于非自动提交状态下面的查询提交
 * @method static void rollback() 事务回滚
 * @method static boolean batchQuery(array $sqlArray) 批处理执行SQL语句
 * @method static string getLastInsID(string $sequence = null) 获取最近插入的ID
 */
class Db
{
    /**
     * 当前数据库连接对象
     * @var Connection
     */
    protected static $connection;

    /**
     * 数据库配置
     * @var array
     */
    protected static $config = [];

    /**
     * 查询次数
     * @var integer
     */
    public static $queryTimes = 0;

    /**
     * 执行次数
     * @var integer
     */
    public static $executeTimes = 0;

    /**
     * 配置
     * @access public
     * @param  mixed $config
     * @return void
     */
    public static function init($config = [])
    {
        self::$config = $config;

        if (empty($config['query'])) {
            self::$config['query'] = '\\think\\db\\Query';
        }
    }

    /**
     * 获取数据库配置
     * @access public
     * @param  string $config 配置名称
     * @return mixed
     */
    public static function getConfig($name = '')
    {
        if ('' === $name) {
            return self::$config;
        }

        return isset(self::$config[$name]) ? self::$config[$name] : null;
    }

    /**
     * 切换数据库连接
     * @access public
     * @param  mixed         $config 连接配置
     * @param  bool|string   $name 连接标识 true 强制重新连接
     * @param  string        $query 查询对象类名
     * @return mixed 返回查询对象实例
     * @throws Exception
     */
    public static function connect($config = [], $name = false, $query = '')
    {
        // 解析配置参数
        $options = self::parseConfig($config ?: self::$config);

        $query = $query ?: $options['query'];

        // 创建数据库连接对象实例
        self::$connection = Connection::instance($options, $name);

        return new $query(self::$connection);
    }

    /**
     * 数据库连接参数解析
     * @access private
     * @param  mixed $config
     * @return array
     */
    private static function parseConfig($config)
    {
        if (is_string($config) && false === strpos($config, '/')) {
            // 支持读取配置参数
            $config = isset(self::$config[$config]) ? self::$config[$config] : self::$config;
        }

        $result = is_string($config) ? self::parseDsnConfig($config) : $config;

        if (empty($result['query'])) {
            $result['query'] = self::$config['query'];
        }

        return $result;
    }

    /**
     * DSN解析
     * 格式： mysql://username:passwd@localhost:3306/DbName?param1=val1&param2=val2#utf8
     * @access private
     * @param  string $dsnStr
     * @return array
     */
    private static function parseDsnConfig($dsnStr)
    {
        $info = parse_url($dsnStr);

        if (!$info) {
            return [];
        }

        $dsn = [
            'type'     => $info['scheme'],
            'username' => isset($info['user']) ? $info['user'] : '',
            'password' => isset($info['pass']) ? $info['pass'] : '',
            'hostname' => isset($info['host']) ? $info['host'] : '',
            'hostport' => isset($info['port']) ? $info['port'] : '',
            'database' => !empty($info['path']) ? ltrim($info['path'], '/') : '',
            'charset'  => isset($info['fragment']) ? $info['fragment'] : 'utf8',
        ];

        if (isset($info['query'])) {
            parse_str($info['query'], $dsn['params']);
        } else {
            $dsn['params'] = [];
        }

        return $dsn;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array([static::connect(), $method], $args);
    }
}
