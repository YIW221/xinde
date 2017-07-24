<script src="<?= Yii::app()->baseUrl; ?>/js/highcharts/highcharts.js"></script>
<?php
$rakuten_labels=array(
	'ranking_item_num' => '进榜宝贝数',
	'estimate_sales' => '估算销售额',
	'ranking_category_num' => 'Ranking类目数',
	'inventory_item_count' => '库存点数',
	'track_price_num' => '调价数',
    'cid_tag_items' => '进item_cid_tags条目数',
    'ranking_tag_items' => '进ranking_tag条目数'
);
$yahoo_labels=array(
	'ranking_category_num' => 'Ranking类目数',
	'ranking_item_num' => 'Ranking总条目数',
	'inventory_num' => '库存点数',
	'inventory_total_sales' => '库存总销售额',
	'trade_num' => '交易数',
	'new_page_num'=>'新增页面数',
    'track_title_num'=>'改名数',
    'track_point_num'=>'改Point数',
    'track_price_num'=>'调价数',
    'track_rank_num' => '新入榜数',
    'rank_condition_num'=>'condition rank数',
);
$amazon_labels=array(
	'ja_ranking_top_num' => '日本amazon当日TOP类目数',
	'ja_num' => '日本amazon总数',
	'ja_category_avg' => '日本amazon类目次数',
	'usa_num' => '美国amazon总数',
	'usa_category_avg' => '美国amazon类目次数',
	'usa_ranktop_num'=>'美国toprank(非当天)',
	'ca_num' => '加拿大amazon总数',
	'ca_category_avg' => '加拿大amazon类目次数',
);
$num_labels = array(
    'items_no_img' => '缺图宝贝数',
    'items_no_title' => '无名宝贝数',
    'items_no_review' => '缺评价宝贝数',
    'ranking_item_num' => '进榜宝贝数',
    'ranking_err_num' => '未爬全类目数',
    'estimate_count' => '参与估算宝贝数',
    'estimate_sales' => '估算销售额',
    'rakuten_mail' => '乐天邮件数',
    'shop_mail' => '店铺邮件数',
    //add 09.22
    'ranking_category_num' => 'Ranking类目数',
    'check_category_num' => 'Check.Ranking类目数',
    'cpc_word_num' => 'CPC关键词数',
    'cpc_ad_num' => 'CPC广告数',
    'ads_top_num' => '首页广告数',
    'ads_topevent_num' => 'T特广告数',
    'ads_category_num' => '类目广告数',
    'ads_event_num' => '特集广告数',
    'ads_asuraku_num' => '明日乐广告数',
    'ads_freeshipping_num' => '免邮广告数',
    'ads_regular_num' => '定期购广告数',
    'ads_product_num' => '产品广告数',
    'ads_ranking_num' => '排名广告数',
    'ads_m_event_num' => 'M特集广告数',
    'ads_m_category_num' => 'M类目广告数',
    'ads_m_top_num' => 'M首页广告数',
    'ads_snap_num' => '截图总数',
    'ads_snap_ok_num' => '截图成功数',
    'ads_snap_num_real' => '实际截图总数',
    'ads_snap_ok_num_real' => '实际截图成功数',
    'inventory_item_count' => '库存点数',
    'inventory_effective_count' => '有效库存点数',
    'inventory_sales' => '库存总销售额',
    'inventory_avg_sales' => '库存平均销售额',
    'trade_num' => '出价交易数',
    'trade_item_num' => '出价宝贝数',
    'trade_sales' => '出价总销售额',
    'trade_page_full_num' => '出价全新页面数',
    'track_price_num' => '调价数',
    'track_point_num' => '改Point数',
    'track_title_num' => '改名数',
    'track_new_item_num' => '新宝贝数',
    'track_rank_num' => '新入榜数',
    'rakuten_ranking_realtime' => 'rakuten_ranking_realtime',
    'rakuten_ranking_realtime_category_num' => 'rakuten_ranking_realtime_category_num',
    'rakuten_ranking_realtime_category_avg' => 'rakuten_ranking_realtime_category_avg',
    'rakuten_ranking_realtime_category_rank' => 'rakuten_ranking_realtime_category_rank',
    'rakuten_ranking_realtime_category_max_rank' => 'rakuten_ranking_realtime_category_max_rank',
    'amazon_ranking' => 'amazon_ranking',
    'amazon_usa_bestsellers' => 'amazon_usa_bestsellers',
    'amazon_ca_bestsellers' => 'amazon_ca_bestsellers',
    'rakuten_shop_point' => 'rakuten_shop_point',
	'condition_sales_num_done' => 'condition_sales_num_done',
	'condition_sales_num_noresult' => 'condition_sales_num_noresult',
	'condition_sales_num_date' => 'condition_sales_num_date',
	'seo_keyword_num' => 'seo关键词数',
	'seo_avg_rank_num' => 'seo平均rank数',
    'email_snap_num' => 'email截图总数',
    'email_snap_ok_num' => 'email截图成功数',
    'category_list_num'=>'二级类目可抓到的product数',
    'product_list_num'=>'按价格分段后可抓到的product数',
    'maker_product_num'=>'本月更新的product数',
    'maker_product_item_num'=>'本月更新的product_item数',
);
$taobao_labels=array(
    'taobao_num' => '每周stat_entity_4_day 淘宝数目（周二）',
    'tmall_num' => '每周stat_entity_4_day 天猫数目（周二）',
);
$time_labels = array(
    'all_ranking_start' => '计算所有排名开始',
    'all_ranking_end' => '计算所有排名结束',
    'fit_start' => '计算拟合参数开始',
    'fit_end' => '计算拟合参数结束',
    'estimate_start' => '估算销售额开始',
    'estimate_end' => '估算销售额结束',
    'stat_shop_start' => '店铺统计开始',
    'stat_shop_end' => '店铺统计结束',
    'stat_category_start' => '类目统计开始',
    'stat_category_end' => '类目统计结束',
    'snapshot_start' => '快照开始',
    'snapshot_end' => '快照结束',
    'advertise_shop_start' => '计算飙量指数开始',
    'advertise_shop_end' => '计算飙量指数结束',
    'hot_item_start' => '更新热销宝贝开始',
    'hot_item_end' => '更新热销宝贝结束',
    'hot_shop_start' => '更新热销店铺开始',
    'hot_shop_end' => '更新热销店铺结束',
    'track_word_items_start' => '更新关键词宝贝开始',
    'track_word_items_end' => '更新关键字宝贝结束',
    'track_word_start' => '更新关键词开始',
    'track_word_end' => '更新关键词结束',
);
$yahoo_time_labels = array(
    'stat_shop_start' => '店铺统计开始',
    'stat_shop_end' => '店铺统计结束',
    'stat_category_start' => '类目统计开始',
    'stat_category_end' => '类目统计结束',
    'snapshot_start' => '快照开始',
    'snapshot_end' => '快照结束',
    'hot_item_start' => '更新热销宝贝开始',
    'hot_item_end' => '更新热销宝贝结束',
    'hot_shop_start' => '更新热销店铺开始',
    'hot_shop_end' => '更新热销店铺结束',
    'advertise_shop_start' => '计算飙量指数开始',
    'advertise_shop_end' => '计算飙量指数结束',
);
$rakuten_product_labels = array(
    'sales_rakuten_start' => 'Rakuten sales 开始',
    'sales_rakuten_end' => 'Rakuten sales 结束',
    'item_all_match_num' => 'artificial 新增数目',
    'sales_num' => 'rakuten sales 新增数目',
    'sales_jan_num' => 'rakuten jan sales 新增数目',
    'sales_yahoo_start' => 'Yahoo sales 开始',
    'sales_yahoo_end' => 'Yahoo sales 结束',
    'item_jan_all_num' => 'item_jan_all 新增数目',
    'sales_yahoo_num' => 'yahoo sales 新增数目',
    'yahoo_solr_num' => 'yahoo sales 关键词数目',
    'sales_jan_yahoo_num' => 'yahoo jan sales 新增数目',
    'sales_amazon_start' => 'Amazon sales 开始',
    'sales_amazon_end' => 'Amazon sales 结束',
    'sales_amazon_num' => 'amazon sales 新增数目',
    'sales_jan_amazon_num' => 'amazon jan sales 新增数目',
);
function dyeRedForLimit($key, $value) {
    if ($key == 'rakuten_mail' && $value <= 5) {
        return true;
    }
    if ($key == 'shop_mail' && $value <= 200) {
        return true;
    }
    if ($key == 'ranking_err_num' && $value > 0) {
        return true;
    }
    if ($key == 'trade_page_full_num' && $value >= 30) {
        return true;
    }
    if ($key == 'inventory_item_count' && $value <= 10000) {
        return true;
    }
    if ($key == 'inventory_effective_count' && $value <= 5000) {
        return true;
    }
    if ($key == 'ja_ranking_top_num' && $value <1000000){
    	return true;
    }
    if ($key == 'ja_num' && $value <30000000){
    	return true;
    }
    if ($key == 'ja_category_avg' && $value <20){
    	return true;
    }
    if ($key == 'usa_num' && $value <40000000){
    	return true;
    }
    if ($key == 'usa_category_avg' && $value <18){
    	return true;
    }
    if ($key == 'usa_ranktop_num' && $value <500000){
    	return true;
    }
    if ($key == 'ca_num' && $value <40000000){
    	return true;
    }
	if ($key == 'ca_category_avg' && $value <18){
    	return true;
    }
    return false;
}

function dyeRedForCompare($value1, $value2) {
    return $value1 != $value2;
}

function dyeRedForRelativeDiff($value1, $value2) {
    return ($value1 && (($value1 - $value2) / $value1 > 0.05));
}

?>
<br/>
<span>
    <?php $this->datePicker('blablabla', $data['date'][0], array('class' => 'txt1', 'style' => 'width: 120px'), $format = 'yy-mm-dd') ?>
</span>
<button id="date_choose" type="button" class="btnRec" style="width:60px">检索</button>
<!****************************************************************************!>
<!******************************这里边就是测试的图表版本***************************!>
<div id="contain_rakuten" style="min-width:800px;height:400px">

</div>
<!****************************************************************************!>
<!****************************************************************************!>
<!****************************************************************************!>
<!****************************************************************************!>
<div class="grid-view">
    <table class="items">
    	乐天：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php
            $data_rakuren_category;
            foreach ($data['date'] as $day => $date): ?>
                <?php if($day < 7): ?>
                    <th><?php echo $date;
                        //在此处做修改
                        array_push($data_rakuren_category,$data);
                        ?></th>
                <?php endif; ?>
            <?php endforeach;
            print_r($data_rakuren_category);?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($rakuten_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php foreach ($data[$key] as $day => $value): ?>
                    <?php if($day<7): ?>
                        <?php if ($key<2 && $day>=2 && $value==0): ?>
                            <td style="text-align: right; color: red"><?php echo number_format($value);
                                array_push($seriesArr1, "{name:'" . addslashes($value['xingming']) . "',data:[" . $value['yuwen'] .",". $value['shuxue'].",". $value['yinyu'].",". $value['dili']. "] }");
                            ?></td>
    					<?php elseif ($key==3 && $value==0): ?>
                            <td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
    					<?php elseif ($key==2||$i==4&&$day>=1&&$value==0): ?>
                            <td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
                        <?php
                        else: ?>
                            <td style="text-align: right"><?php echo number_format($value) ?></td>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!****************************************************************************!>
<!****************************************************************************!>
<script>
    var chart1=new Highchart.Chart({
        chart:{
            type:''
        },
        title:{
            text:'乐天'
        },
        xAxis:{
            categories:[]
        },
        yAxis:{
            title:{
                text:'chi shuiguo de geshu'
            }
        },
        series:[
            {
                name:'xiaoming',
                data:[1,0,1]
            },
            {
                name:'xiaohong',
                data:[1,2,5]
            }
        ]

    });
</script>
<!****************************************************************************!>
<!****************************************************************************!>
<!****************************************************************************!>
<div class="grid-view">
    <table class="items">
    	雅虎：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php if($data1['date']) :?>
                <?php foreach ($data1['date'] as $date): ?>
                    <th><?php echo $date ?></th>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($yahoo_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php if ($data1[$key]):?>
                <?php foreach ($data1[$key] as $day => $value): ?>
                    <?php if ($value==0): ?>
                        <td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
                    <?php
                    else: ?>
                        <td style="text-align: right"><?php echo number_format($value) ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif;?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="grid-view">
    <table class="items">
    	亚马逊：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php if($data2['date']) :?>
                <?php foreach ($data2['date'] as $date): ?>
                    <th><?php echo $date ?></th>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($amazon_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php if ($data2[$key]):?>
                <?php foreach ($data2[$key] as $day => $value): ?>
                    <?php if (dyeRedForLimit($key, $value)&&$day<>0): ?>
                        <td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
                    <?php
                    else: ?>
                        <td style="text-align: right"><?php echo number_format($value) ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif;?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="grid-view">
    <table class="items">
        淘宝：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php if($data3['date']) :?>
                <?php foreach ($data3['date'] as $date): ?>
                    <th><?php echo $date ?></th>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($taobao_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php if ($data3[$key]):?>
                <?php foreach ($data3[$key] as $day => $value): ?>
                    <?php if (dyeRedForLimit($key, $value)&&$day<>0): ?>
                        <td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
                    <?php
                    else: ?>
                        <td style="text-align: right"><?php echo number_format($value) ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif;?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="grid-view">
    <table class="items">
        Product：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php if($data4['date']) :?>
                <?php foreach ($data4['date'] as $date): ?>
                    <th><?php echo $date ?></th>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($rakuten_product_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php if ($data4[$key]):?>
                <?php foreach ($data4[$key] as $day => $value): ?>
                    <?php if (dyeRedForLimit($key, $value)&&$day<>0): ?>
                        <td style="text-align: right; color: red"><?php echo  preg_match("/(start|end)/i",$key,$match)?$value:number_format($value)  ?></td>
                    <?php
                    else: ?>
                        <td style="text-align: right"><?php echo  preg_match("/(start|end)/i",$key,$match)?$value:number_format($value)  ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif;?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="grid-view">
    <table class="items">
        <thead>
        <tr>
            <th>项目</th>
            <?php foreach ($data['date'] as $day => $date): ?>
                <?php if($day < 7): ?>
                    <th><?php echo $date ?></th>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($num_labels as $key => $label): ?>
            <?php $className = ($i++ % 2) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>">
                <td style="text-align: center"><?php echo $label ?></td>
                <?php foreach ($data[$key] as $day => $value): ?>
                    <?php if($day<7): ?>
							<?php if (dyeRedForLimit($key, $value)): ?>
								<td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
							<?php elseif (in_array($key, array('ranking_category_num', 'check_category_num')) && dyeRedForCompare($data['ranking_category_num'][$day], $data['check_category_num'][$day])): ?>
								<td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
							<?php elseif (in_array($key, array('ads_snap_num', 'ads_snap_ok_num')) && dyeRedForRelativeDiff($data['ads_snap_num'][$day], $data['ads_snap_ok_num'][$day])): ?>
								<td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
							<?php elseif (in_array($key, array('ads_snap_num_real', 'ads_snap_ok_num_real')) && dyeRedForRelativeDiff($data['ads_snap_num_real'][$day], $data['ads_snap_ok_num_real'][$day])): ?>
								<td style="text-align: right; color: red"><?php echo number_format($value) ?></td>
							<?php elseif (in_array($key, array('amazon_usa_bestsellers', 'amazon_ranking', 'amazon_ca_bestsellers'))): ?>
								<td style="text-align: right"><?php echo number_format($value - $data[$key][$day + 1]) ?></td>
							<?php elseif (in_array($key,array('seo_avg_rank_num'))):?>
								<td style="text-align: right"><?php echo number_format($value,2) ?></td>
							<?php elseif ($key == 'condition_sales_num_date'):?>
								<td style="text-align: right"><?php echo $value ?></td>
                        <?php
                        else: ?>
                            <td style="text-align: right"><?php echo number_format($value) ?></td>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="grid-view">
    <table class="items">
        <thead>
        <tr>
            <th>项目</th>
            <?php foreach ($data['date'] as $date): ?>
                <th><?php echo $date ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($time_labels as $key => $label): ?>
            <?php $className = ($i++ % 2 == 0) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>" style="text-align: center">
                <td><?php echo $label ?></td>
                <?php foreach ($data[$key] as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="grid-view">
    <table class="items">
        Yahoo：<br/>
        <thead>
        <tr>
            <th>项目</th>
            <?php foreach ($data1['date'] as $date): ?>
                <th><?php echo $date ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($yahoo_time_labels as $key => $label): ?>
            <?php $className = ($i++ % 2 == 0) ? 'odd' : 'even'; ?>
            <tr class="<?php echo $className; ?>" style="text-align: center">
                <td><?php echo $label ?></td>
                <?php foreach ($data1[$key] as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/jquery.scroll.js"></script>
<script>
    $("#date_choose").click(function () {
        var date = $("#blablabla").val();
        location.href = '<?= CHtml::normalizeUrl(array("monitor/index")) ?>' + '?date=' + date;
    });

</script>