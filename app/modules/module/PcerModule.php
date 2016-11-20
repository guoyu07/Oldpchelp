<?php
namespace  App\modules\module;

use App\modules\factory\PcerFactory;
use App\modules\factory\WcuserFactory;
use ErrorMessage;

/**
* PC仔模块
*/
class PcerModule
{
    /**
     * 获取年级信息
     * @author JokerLinly
     * @date   2016-09-13
     * @return [type]     [description]
     */
    public static function getLevel()
    {
        return PcerFactory::getPcerlevel();
    }

    public static function verifyPcer($wcuser_id)
    {
        return PcerFactory::verifyPcer($wcuser_id);
    }

    /**
     * 增加PC仔
     * @author JokerLinly
     * @date   2016-09-13
     * @param  [type]     $input [description]
     */
    public static function addPcer($input)
    {
        return PcerFactory::addPcer($input);
    }

    public static function getPcerByWcuserId($wcuser_id, array $need)
    {
        return PcerFactory::getPcerByWcuserId($wcuser_id, $need);
    }

    /**
     * 自定义条件查询PC仔
     * @author JokerLinly
     * @date   2016-09-14
     * @param  [type]     $condition [description]
     * @param  [type]     $data      [description]
     * @param  [type]     $need      [description]
     * @return [type]                [description]
     */
    public static function getPcer($condition, $data, array $need)
    {
        return PcerFactory::getPcer($condition, $data, $need);
    }

    /**
     * 更新PC仔信息
     * @author JokerLinly
     * @date   2016-09-15
     * @param  [type]     $input [description]
     * @return [type]            [description]
     */
    public static function updatePcer($input)
    {
        unset($input['_token']);
        return PcerFactory::updatePcer($input);
    }

    /**
     * 获取值班时间
     * @author JokerLinly
     * @date   2016-09-26
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public static function getIdleToPcer($id)
    {
        return PcerFactory::getIdleToPcer($id);
    }

    /**
     * 查询空闲时间是否存在
     * @author JokerLinly
     * @date   2016-09-26
     * @param  [type]     $wcuser_id [description]
     * @param  [type]     $date      [description]
     * @return [type]                [description]
     */
    public static function searchIdle($wcuser_id, $date)
    {
        return PcerFactory::searchIdle($wcuser_id, $date);
    }

    /**
     * 增加值班时间
     * @author JokerLinly
     * @date   2016-09-26
     * @param  [type]     $wcuser_id [description]
     * @param  [type]     $date      [description]
     */
    public static function addIdle($wcuser_id, $date)
    {
        $pcer = WcuserFactory::getPcerIdByWcuserId($wcuser_id);
        $res = PcerFactory::addIdle($pcer['pcer']['id'], $date);
        return $res;
    }

    /**
     * 删除值班时间
     * @author JokerLinly
     * @date   2016-09-26
     * @param  [type]     $wcuser_id [description]
     * @param  [type]     $idle_id   [description]
     * @return [type]                [description]
     */
    public static function delIdle($wcuser_id, $idle_id)
    {
        $pcer = WcuserFactory::getPcerIdByWcuserId($wcuser_id);
        $res = PcerFactory::delIdle($pcer['pcer']['id'], $idle_id);
        return $res;
    }

    /**
     * 获取特定时间值班的PC仔
     * @author JokerLinly
     * @date   2016-09-28
     * @param  [type]     $date [description]
     * @return [type]     [description]
     */
    public static function getDatePcer($date)
    {
        return PcerFactory::getDatePcer($date);
    }
    /**
     * 获取地区PC仔
     * @author JokerLinly
     * @date   2016-09-29
     * @param  [type]     $area [description]
     * @return [type]           [description]
     */
    public static function getPcerOT()
    {
        return PcerFactory::getPcerOT();
    }

    /**
     * PC仔更改加班状态
     * @author JokerLinly
     * @date   2016-09-29
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public static function changeStateOT($id)
    {
        return PcerFactory::changeStateOT($id);
    }

    /**
     * 超级管理员获取PC仔
     * @author JokerLinly
     * @date   2016-11-19
     * @param  string     $value [description]
     */
    public static function getPcerToSuper()
    {
        return PcerFactory::getPcerToSuper();
    }

    /**
     * 超级管理员设置PC仔
     * @author JokerLinly
     * @date   2016-11-20
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public static function getPcerSet($id)
    {
        return PcerFactory::getPcerSet($id);
    }

    /**
     * PC仔值班设置
     * @author JokerLinly
     * @date   2016-11-20
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public static function getIsWorkSet($id)
    {
        return PcerFactory::getIsWorkSet($id);
    }

    /**
     * PC仔年级获取
     * @author JokerLinly
     * @date   2016-11-20
     * @return [type]     [description]
     */
    public static function getLevelSet()
    {
        return PcerFactory::getLevelSet();
    }

    /**
     * 年级显示
     * @author JokerLinly
     * @date   2016-11-20
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public static function getLevelshow($id)
    {
        return PcerFactory::getLevelshow($id);
    }

    /**
     * 增加年级
     * @author JokerLinly
     * @date   2016-11-20
     * @param  [type]     $name [description]
     */
    public static function addLevel($name)
    {
        return PcerFactory::addLevel($name);
    }
}
