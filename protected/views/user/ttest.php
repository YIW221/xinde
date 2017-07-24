<script src="jquery-3.2.1.js"></script>
<!DOCTYPE HTML>
<?php
//    $data1=array(
//            "lisi"=>array(
//                    "name"=>"lisi",
//                    "yuwen"=>100,
//                    "yinyu"=>30
//            ),
//            "wangwu"=>array(
//                    "name"=>"wangwu",
//                    "yuwen"=>100,
//                    "yinyu"=>30
//            ),
//            "zhangmazi"=>array(
//                    "name"=>"zhangmazi",
//                    "yuwen"=>100,
//                    "yinyu"=>30
//            )
//    );
    $data1;
    $data2=array();
//$data2=$data;
    foreach($data as $key=>$value1){
//        foreach ($data2 as $key221){
//           // $key221=$value1['xingming'];
//            $key221='xingming';
//        //echo $value1['xingming'];
//        //echo $key;
//          //  echo $key221;
//            }
//        echo $value1['xingming'];
        array_push($data2,$value1['xingming']);
        array_push($data2,$value1['yuwen']);
        array_push($data2,$value1['shuxue']);
        array_push($data2,$value1['yinyu']);
        array_push($data2,$value1['dili']);
        //$data2[]=$value1['xingming'];
        $data1=array_keys($value1);

    }
    //$data2=$data;
    array_shift($data1);
    print_r($data2);

$lessonCount = 4;
$array = array();
for ($i = 0; $i < count($data2); $i = $i + 5) {
    $index = $i / ($lessonCount + 1) + 1;
    $len = strlen($data2[$i + 1]);                  //数字位数
    if (empty($array[$len])) {
        $array[$len] = array();
        array_push($array[$len], $index);
    } else {
        array_push($array[$len], $index);
    }
}
print_r($array);
$mySeriesArray = array();
foreach ($array as $key => $value) {
    if (is_array($value)) {
//        print_r($value);
        $temp = array();
        for ($i = 0; $i < count($value); $i++) {
            $name = $data2[($value[$i] - 1) * 5];
            $yuwen = $data2[($value[$i] - 1) * 5 + 1];
            $shuxue = $data2[($value[$i] - 1) * 5 + 2];
            $yinyu = $data2[($value[$i] - 1) * 5 + 3];
            $dili = $data2[($value[$i] - 1) * 5 + 4];

            array_push($temp, "{name:'" . addslashes($name) . "',data:[" . $yuwen .",". $shuxue.",". $yinyu.",". $dili. "] }");
//            print_r($mySeriesArray);
        }
        $myTemp = '[' . implode(',', $temp) . ']';
        array_push($mySeriesArray, $myTemp);
    }
}


    //echo $data2;
//===================================================================================================================
//=========================================之前版本处理数据的方式在这儿=================================================
//===================================================================================================================
$seriesArr1 = array();
foreach ($data as $iD=>$value) {
	//这个是将数据逐个添加到数组中AdwaysLi2017
    array_push($seriesArr1, "{name:'" . addslashes($value['xingming']) . "',data:[" . $value['yuwen'] .",". $value['shuxue'].",". $value['yinyu'].",". $value['dili']. "] }");
}
print_r($seriesArr1);
$xAxis1 = json_encode($data1);
//print_r($xAxis1);
$series1 = '[' . implode(',', $seriesArr1) . ']';
//$series2 = '[' . implode(',', $data1) . ']';
echo $series1;
//===================================================================================================================
//=========================================之前版本处理数据的方式在上边=================================================
//===================================================================================================================
//===================================================================================================================
//===================================================================================================================
//=============================================打算处理版本的方式=======================================================
//===================================================================================================================

$data4=array();
$zancunqi;
//foreach ($data2 as $key=>$item){
//    if( !is_numeric($item)){
//        $zancunqi=$item;
//        $zancunqizhishu=0;
//    }else {
//        if($zancunqizhishu==0) {
//            array_push($data4[strlen(floor($item))], $zancunqi);
//            array_push($data4[strlen(floor($item))], $item);
//            $zancunqizhishu=1;
//        }else{
//            array_push($data4[strlen(floor($item))], $item);
//        }
//    }
//}
//$data3=array();
//foreach ($data2 as $key=>$item){
//    if( is_numeric($item)){
//        array_push($data3,$item);
//    }else{
//        if(empty($data3)){
//            array_push($data3,"{name:'" . addslashes($item) . "',data:[");
//        }else{
//            array_push($data3, "] }");
//            array_push($data3,"{name:'" . addslashes($item) . "',data:[");
//        }
//
//    }
//}
//$series221 = '[' . implode(',', $data3) . ']';
//print_r($data4);
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
for ($index = 0; $index < count($mySeriesArray); $index++) {
?>
<div id="container<?=$index?>" style="min-width:400px;height:400px;"></div>
<?php  }?>
<!--<table>-->
<!--<th>zhejiushige hth</th>-->
<!--<th>zhejiushige hth</th>-->
<!--<th>zhejiushige hth</th>-->
<!--<tr>-->
<!--<td>suiian</td><td>suiian</td><td>suiian</td><td>suiian</td>-->
<!--</tr>-->
<!--</table>-->
<script src="highcharts.js"></script>
<script>
    <?php for ($index = 0; $index < count($mySeriesArray); $index++) { ?>
    var chart= new Highcharts.Chart('container<?=$index?>', {
        chart: {
            type: 'line'                         //指定图表的类型，默认是折线图（line）
        },
        title: {
            text: '我的第一个成绩单'                //指定图表标题
        },
        xAxis: {
            //categories: ['语文', '数学', '英语','地理'] //指定x轴分组
            categories:<?=$xAxis1?>
        },
        yAxis: {
            title: {
                text: '分数'                //指定y轴的标题
            }
        },
//        series: [{                              //指定数据列
//            name: '小明',                       //数据列名
//            data:<?php //echo $data2; ?>//                     //数据
//        }, {
//            name: '小红',
//            data: [5, 7, 3]
//        }]
        series:<?=$mySeriesArray[$index]?>
    });
    <?php } ?>
</script>
</body>
</html>