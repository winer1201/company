<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
    <meta name="page-view-size" content="<?php echo ($reso); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>养老门户</title>
    <?php echo loadfile('/app/Home/Public/js/base/util','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/keyevent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/controlEvent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/enumCollection','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/guid','js');?>
    <?php echo loadfile('/app/Home/Public/js/tools/loadimg','js');?>
    <?php echo loadfile('/app/Home/Public/js/globalconfig','js');?>
    <?php echo loadfile('/app/Home/Public/js/common','js');?>
    <script type="text/javascript">
        var m_reso = '<?php echo ($reso); ?>';
        var m_publicUrl = '/app/Home/Public';
        var m_baseUrl = '/oldcard/oldcard_info.html';
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
    ﻿
    <?php echo loadfile('/app/Home/Public/demo/css/layout','css');?>
    <?php echo loadfile('/app/Home/Public/demo/css/oldcard','css');?>
    <?php echo loadfile('/app/Home/Public/demo/css/css','css');?>

    <?php echo loadfile('/app/Home/Public/demo/js/oldcard','js');?>
    <?php echo loadfile('/app/Home/Public/demo/js/moveoldcard','js');?>
<script type="text/javascript">
    function init() {
        if (typeof (page_init) == "function")
            page_init();
    }
    var tableid = "04ee72e1-08be-47ea-8fc3-d8dd6afaa975";
    var pageUrl = "oldcardinfo.html";
    function init() {
        moveHelper.initialize();
    }
</script>
<style type="text/css">
    .td {
        float: right;
        width: 120px;
        height: 50px;
        line-height: 50px;
        font-size: 20px;
        text-align: center;
        color: #930;
        font-weight: bold;
    }

    .tdes {
        font-size: 18px;
        width: 300px;
        height: 50px;
        line-height: 50px;
    }
</style>
<body onLoad="init()">
    <div class="wp" id="divwp">
        <div style="margin-top:47px; margin-left:70px; color:#000;">
            <!--<span style="font-size:36px;color:#000000;">
                老年卡->老年卡列表页->
                </span>-->
            <span style="color:#1775a7;font-size:30px;">老年卡信息页</span>
        </div>
        <div style="color:#1775a7; margin-left:70px;margin-top:20px; font-size:24px;">
            张三叔叔您好
        </div>
        <div style="margin-top:30px; margin-left:70px;">
            <table style="width:490px; height:427px; color:#000;">
                <tr>
                    <td class="td">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
                    <td class="tdes">张三</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tdes">
                        <table>
                            <tr>
                                <td id="td0" data-right="td1" data-down="td2" jump-url="1">
                                    <div class="tile" style="width:100px; height:40px; text-align:center; line-height:40px;">
                                        <input type="radio" id="radio-1-1" name="radio-1-set" class="regular-radio" checked data-right="radio-1-2" /><label for="radio-1-1"></label>养老卡
                                    </div>
                                </td>
                                <td id="td1" data-right="td3" data-down="td2" data-left="td0" jump-url="2">
                                    <div class="tile" style="width:100px; height:40px; text-align:center; line-height:40px;">
                                        <input type="radio" id="radio-1-2" name="radio-1-set" class="regular-radio" data-left="radio-1-1" /><label for="radio-1-2"></label>助残卡
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="td">卡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</td>
                    <td class="tdes">119397293728617</td>
                </tr>
                <tr>
                    <td class="td">卡内余额：</td>
                    <td class="tdes">103.30元</td>
                </tr>
                <tr>
                    <td class="td">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</td>
                    <td class="tdes">13774836423</td>
                </tr>
                <tr>
                    <td class="td">住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
                    <td class="tdes">北京市朝阳区三里屯优衣库2单元305</td>
                </tr>
                <tr>
                    <td></td>
                    <td id="td2" data-up="td0">
                        <div class="tile" style="width:168px; height:48px;">
                            <img style="width:168px; height:48px;" src="/app/Home/Public/img/oldcard/relieve.png" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table style="width:645px; float:right; margin-top:-435px; margin-right:70px; text-align:center; color:#000; font-size:18px;">
                <tr>
                    <th id="td3" data-right="td4" data-down="td6" data-left="td1" style="width:260px; height:70px;">
                        <div class="tile" style="width:170px; height:40px; margin-left:40px; text-align:center; line-height:40px;">消费记录</div>
                    </th>
                    <th id="td4" data-right="td5" data-down="td6" data-left="td3" style="width:177px;">
                        <div class="tile" style="width:170px; height:40px; text-align:center; line-height:40px;">发放记录</div>
                    </th>
                    <th id="td5" data-left="td4" data-down="td6">
                        <div class="tile" style="width:170px; height:40px; text-align:center; line-height:40px;">打折信息</div>
                    </th>
                </tr>
                <tr id="xiao1">
                    <td style="width:260px; height:35px;">消费时间</td>
                    <td>消费内容</td>
                    <td>消费金额</td>
                </tr>
                <tr id="xiao2">
                    <td style="width:260px; height:38px;">2016.02.16&nbsp;&nbsp;11:08:22</td>
                    <td>庆丰包子</td>
                    <td>22</td>
                </tr>
            </table>
            <table style="width:100px; height:35px;  float:right; margin-right:355px;">
                <tr id="text">
                    <td id="td6" data-up="td3">
                        <div class="tile" style="width:110px; height:33px;">
                            <img style="width:110px; height:33px;" src="/app/Home/Public/img/oldcard/向下按钮默认.png" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

    <script type="text/javascript">
        common.initUrl();
    </script>
</html>