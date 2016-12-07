<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
    <meta name="page-view-size" content="<?php echo ($reso); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>养老门户</title>
    <?php echo loadfile('/app/Home/Public/css/deep_blue/layout','css');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/util','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/keyevent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/controlEvent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/formevent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/popupEvent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/enumCollection','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/guid','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/loadimg','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/useraction','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/CyberHelper','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/MsgHelper','js');?>
    <?php echo loadfile('/app/Home/Public/js/globalconfig','js');?>
    <?php echo loadfile('/app/Home/Public/js/common','js');?>
    <script type="text/javascript">
        var m_reso = '<?php echo ($reso); ?>';
        var m_publicUrl = '/app/Home/Public';
        var m_baseUrl = '/goods/order?usercode=&amp;user_session=&amp;websitecode=&amp;backUrl=&amp;_v=36355';
        var m_rootUrl = '';
        var m_usercode = '';
        var m_user_session = '';
        var m_areacode = '';
        var m_websitecode = '';
        var m_tp_tps_url = "<?php echo ($tp_tps_url); ?>";
        var m_tp_pms_url = "<?php echo ($tp_pms_url); ?>";
        var m_tp_cbs_url = "<?php echo ($tp_cbs_url); ?>";
        var m_tp_ls_url = "<?php echo ($tp_ls_url); ?>";
        var m_tp_tvportal_url = "<?php echo ($tp_tvportal_url); ?>";
        var m_tp_gsm_url = "<?php echo ($tp_gsm_url); ?>";
        var m_tp_pics_url = "<?php echo ($tp_pics_url); ?>";
        var m_cyber_tvportal_id = "<?php echo ($cyber_tvportal_id); ?>";
        var m_cyber_tenantid = "<?php echo ($cyber_tenantid); ?>";
        var m_cyber_epg_id = "<?php echo ($cyber_epg_id); ?>";
    </script>
</head>
<body onload="init()">
    <div class="wp" id="divwp" >
        <div class="page">
            
    <?php echo loadfile('/app/Home/Public/js/mod/goods/goods_order','js');?>
<script type="text/javascript">
    function init() {
        if (typeof (page_init) == "function")
            page_init();
    }
</script>
<style>
	ul{
		margin:0;
		padding:0;
		position:absolute;
		top:-277px;
		left:-558px;
		display:none;
		} 
	li{
		width:830px;
		height:80px;
		font-size:26px;
		color:#fff;
		text-align:center;
		list-style:none;
		line-height:80px;
		letter-spacing: 4;
		padding-left:45px;
		background:#000;
		opacity: 0.8;
	}
	/*#goodstime span{
		font-size:50px;
		color:#fff;
		position:absolute;
		left:-207px;
		top:-23px;
		display:block;
		width:500px;
		height:80px;
		z-index:10;
		display:none;
	}*/
</style>
<div class="goods-top">
    <div class="goods-info-title" id="page-title">
        <label id="lbltitle">订单详情</label>
    </div>
</div>
<div class="goods-center" id="page_content">
    <div class="goods-order-form">
        <div class="goods-order-form-left">
            <img src="/app/Home/Public/img/goods/goods_info.png" />
        </div>
        <div class="goods-order-form-right" style="height:500px;">
            <div>
                <label >欧姆龙血压计</label>
                <label style="margin-left:20px;">分类汇总</label>
            </div>
            <div style="margin-top:25px;">
                <div class="goods-order-form-right-item" style="padding-top: 5px;">
                    <label>送货地址：</label>
                </div>
                <div class="goods-order-form-right-item " style="width:274px;height:89px;padding:10px;background-image:url(/app/Home/Public/img/goods/goods_order_input1.png)" id="address"data-down="telephone">
                    <label style="font-size:21px;color:#eeeeee;">北京市朝阳区三里屯优衣库2单元305室</label>
                </div>
            </div>
            <br><br>

            <div style="margin-top:85px;">
                <div class="goods-order-form-right-item" style="padding-top: 5px;">
                    <label style="font-size:21px;color:#eeeeee;">联系电话：</label>
                </div>
                <div class="goods-order-form-right-item" style="width:294px;height:45px;background-image:url(/app/Home/Public/img/goods/goods_order_input2.png);"data-down="goodstime" data-up="address" id="telephone">
                    <input type="text" id="txtphone2" style="width:282px;border:none;height:42px;color:#fff;font-size:18px;padding-left:20px;">
                </div>
            </div>
            <br>
            <div style="margin-top:40px;">
                <div class="goods-order-form-right-item" style="padding-top: 5px;">
                    <label >送货时间：</label>
                </div>
                <div class="goods-order-form-right-item" style="width:294px;height:45px;background-image:url(/app/Home/Public/img/goods/goods_order_input2.png);position:relative;" id="goodstime" data-down="d_number" data-up="telephone">
                   <!--<span id="sp">按向下键选择时间</span>-->
                   <ul id="time_ul">
                    	<li id="li_one"data-down="li_two">08:00~10:00</li>
                    	<li id="li_two"data-up="li_one"data-down="li_three">10:00~12:00</li>
                    	<li id="li_three"data-up="li_two"data-down="li_four">12:00~14:00</li>
                    	<li id="li_four"data-up="li_three"data-down="li_five">14:00~16:00</li>
                    	<li id="li_five"data-up="li_four"data-down="li_six">16:00~18:00</li>
                    	<li id="li_six"data-up="li_five">18:00~20:00</li>
                    </ul>
                    <input type="text" id="txtphone" style="width:284px;padding-left:20px;margin-top:10px;border:none; font-size: 21px;color: #eeeeee;letter-spacing:3;background:url(/app/Home/Public/img/goods/time.png) no-repeat 234px 0px;"placeholder="请选择送货时间段">
                </div>
            </div>
            <div style="margin-top:100px;">
                <div class="goods-order-form-right-item" style="padding-top:5px;">
                    <label >数量：</label>
                </div>
                <div class="goods-order-form-right-item" style="padding-top:5px;" id="d_number" data-down="btnAdd"data-up="goodstime";>
                    <img src="/app/Home/Public/img/goods/goods_order_min.png">
                    <label id="num_sub"style="font-size:24px;color:#eeeeee;margin-left:10px;margin-right:10px;display:inline-block;width:30px;padding-bottom:5px;height:25px;text-align: center;">1</label>
                    <img src="/app/Home/Public/img/goods/goods_order_add.png">
                </div>
            </div>
            <div style="margin-top:180px;">

                <div style="float:left;text-align:left;margin-left:108px;">
                    <div>
                        <label style="font-size:21px;padding:10px;background:url(/app/Home/Public/img/goods/shop.png) no-repeat;background-size:100% 100%;height:47px;" id="btnAdd" data-up="d_number" data-right="btnBack">加入购物车</label>
                        <label style="font-size:21px;margin-left:30px;padding:7px;background:url(/app/Home/Public/img/goods/back.png) no-repeat;background-size: 100% 100%;display:inline-block;width:122px;text-align:center;" id="btnBack" data-up="d_number" data-left="btnAdd">返&nbsp;回</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-footer">
                <div id="footer" class="tip">
                    <label>按&lt;返回&gt;键返回上一页</label>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        common.initUrl();
        TpMsgHelper.Init();
    </script>
</body>
</html>