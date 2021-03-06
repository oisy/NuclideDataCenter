<?php
/**
 * Created by PhpStorm.
 * User: Healer
 * Date: 14-6-5
 * Time: 下午8:56
 */

class AlertRule extends \Phalcon\Mvc\Model
{
    public static function setAlertValue($redis, $station, $device, $field, $v1, $v2 = null)
    {
        $condition = "station=$station and device='$device' and field='$field'";
        $alert = AlertRule::findFirst(array($condition));
        if ($alert !== false)
        {
            $alert->v1 = $v1;
            $alert->v2 = $v2;
            $alert->save();

        }
        else
        {
            $alert = new AlertRule();
            $alert->station = $station;
            $alert->device = $device;
            $alert->field = $field;
            $alert->v1 = $v1;
            $alert->v2 = $v2;
            $alert->save();

            echo "eee";
        }

        $key = Key::StationDeviceFieldRule . "[$station][$device]";
        $redis->hSet($key, $field, json_encode($alert));
    }

    public static function getAlertValue($redis, $station, $device, $field)
    {
        $key = Key::StationDeviceFieldRule . "[$station][$device]";

        if (isset($field))
        {
            $value = $redis->hGet($key, $field);
            if ($value !== false)
            {
                return json_decode($value);
            }
        }

        $condition = "station=$station and device='$device' and field='$field'";
        $alert = AlertRule::findFirst(array($condition));
        return $alert;
    }

    public static function getAlertValues($redis, $station, $device)
    {
        $key = Key::StationDeviceFieldRule . "[$station][$device]";
        $values = $redis->hGetAll($key);
        $ret = array();
        if (count($values) != 0)
        {
            foreach ($values as $value)
            {
                array_push($ret, json_decode($value));
            }
            return $ret;
        }

        $condition = "station=$station and device='$device'";
        $alerts = AlertRule::find(array($condition));
        if ($alerts !== false)
        {
            foreach ($alerts as $alert)
            {
                array_push($ret, $alert);
                $redis->hSet($key, $alert->field, json_encode($alert));
            }
            return $ret;
        }
    }
}