<?php
/**
 * Created by PhpStorm.
 * User: Healer
 * Date: 14-6-7
 * Time: 上午8:06
 */

class Config
{
    public static $mysqlHost;

    public static $m = array(

        'hpic' => array(
            '0102060301' => 'doserate',
            '0102069901' => 'battery',
            '0102069902' => 'highvoltage',
            '0102069903' =>	'temperature',
            'time' => 'time'
            ),

            /* TODO: Need parse .N42 file.*/
        'labr' => array(
            'time' => 'time'
            ),

        'weather' => array(
            '0901040101' => 'Temperature',
            '0901040102' => 'Humidity',
            '0901040103' => 'Pressure',
            '0901040106' => 'Windspeed',
            '0901040105' => 'Direction',
            '0901040104' => 'Rainspeed',
            '0901040107' => 'IfRain',
            'time' => 'time'
            ),

        'environment' => array(
            '0102069909' => 'IfMainPowerOff',
            '0102069910' => 'BatteryHours',
            '0102069906' => 'IfDoorOpen',
            '0102069907' => 'Temperature',
            '0102069911' => 'Humidity',
            '0102069912' => 'IfSmoke',
            '0102069913' => 'IfWater',
            'time' => 'time'
            ),

        'cinderelladata' => array(
            '01' => 'DeviceTime',
            '02' => 'Sid',
            '03' => 'barcode',
            '04' => 'BeginTime',
            '05' => 'WorkTime',
            '06' => 'Flow',
            '07' => 'FlowPerHour',
            '08' => 'Pressure',
            '09' => 'PressureDiff',
            '0A' => 'Temperature',
            'time' => 'time'
            ),

        'cinderellastatus' => array(
            '01' => 'StateBits',
            'time' => 'time'
            ),

        'bai9125' => array(
            'time' => 'time',
            '01000201' => 'gammalong',
            '01000202' => 'gammacps',
            '01000203' => 'emissionlong',
            '01000204' => 'emissioncps',
            '01000205' => 'betacps',
            '01000206' => 'status',
            '01000207' => 'valve1',
            '01000208' => 'valve2',
            '01000209' => 'valve3'
            ),

        'bai9850' => array(
            'time' => 'time',
            '99900001'=>"alphaactivity",
            '99900002'=>"alpha",
            '99900003'=>"betaactivity",
            '99900004'=>"beta",
            '99900005'=>"i131activity",
            '99900006'=>"i131",
            '99900007'=>"doserate"
            ),
        
        'mds' => array(
            'time' => 'time',
            '01000301'=>"doserate",
            '01000302'=>"lat",
            '01000303'=>"lon",
            '01000304'=>"speed",
            '01000305'=>"height",
            '01000306'=>"map",
            '01000307'=>"doserateex",
            '01000308'=>"ifatificial",
            '01000309'=>"sid"
        ),

        'radeye' => array(
            'time' => 'time', '01000401' => "doserate"
        ),

        'inspector1000' => array(
            'time' => 'time',
            '01000501' => "doserate",
            '01000502' => "nuclide",
            '01000503' => "type",
            '01000504' => "active",
            '01000505' => "err"
        ),

        'labrfilter' => array(
            'time' => 'time',
            '00200201' => "starttime",
            '00200202' => "endtime",
            '00200203' => "channeldata",
            '00200204' => "doserate",
            '00200205' => "temperature",
            '00200206' => "highvoltage",
            '00200207' => "bgsimilarity",
            '00200208' => "cps",
            '00200209' => "k1",
            '00200210' => "k0"
        ),

        'labrnuclidefilter' => array(
            'time' => 'time',
            '00200302' => "name",
            '00200303' => "activity",
            '00200304' => "channel",
            '00200305' => "energy"
        )

    );

    public static $d = array(

        'hpic' => array(
            'doserate' => array('rule' => 0, 'level' => 2, 'name' => '剂量率'),
            'battery' => array('rule' => 0, 'level' => 2, 'name' => '电池'),
            'highvoltage' => array('rule' => 0, 'level' => 2, 'name' => '高压'),
            'temperature' => array('rule' => 0, 'level' => 2, 'name' => '温度')
        ),

        /* TODO: Need parse .N42 file.*/
        'labr' => array(

        ),

        'weather' => array(
           'Temperature' => array('rule' => 0, 'level' => 2),
           'Humidity' => array('rule' => 0, 'level' => 2),
           'Pressure' => array('rule' => 0, 'level' => 2),
           'Windspeed' => array('rule' => 0, 'level' => 2),
           'Direction' => array('rule' => 0, 'level' => 2),
           'Rainspeed' => array('rule' => 0, 'level' => 2),
           'IfRain' => array('rule' => 1, 'level' => 1)
        ),

        'environment' => array(
            'IfMainPowerOff' => array('rule' => 1, 'level' => 1),
            'BatteryHours' => array('rule' => 0, 'level' => 1),
            'IfDoorOpen' => array('rule' => 1, 'level' => 1),
            'Temperature' => array('rule' => 0, 'level' => 2),
            'Humidity' => array('rule' => 0, 'level' => 2),
            'IfSmoke' => array('rule' => 1, 'level' => 1),
            'IfWater' => array('rule' => 1, 'level' => 1)
        ),

        'cinderelladata' => array(
             'Flow' => array('rule' => 0, 'level' => 1),
             'FlowPerHour' => array('rule' => 0, 'level' => 1),
             'Pressure' => array('rule' => 0, 'level' => 1),
             'PressureDiff' => array('rule' => 0, 'level' => 1),
             'Temperature' => array('rule' => 0, 'level' => 1)
        ),

        'cinderellastatus' => array(

        ),

        'labrfilter' => array(

        )
    );

} 