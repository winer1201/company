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
        var m_baseUrl = '/index/showpage?usercode=1010000201161125052731318&amp;user_session=10100002-c754c59c-9781-48de-ab74-32c07c970bd1&amp;websitecode=WS20161110002&amp;backUrl=http%3A%2F%2F120.92.3.5%3A15010%2Findex%2Fshowpage%3Fusercode%3D1010000201161125052731318%26user_session%3D10100002-c754c59c-9781-48de-ab74-32c07c970bd1%26websitecode%3D%26navcode%3DCM20160817002%26focusid%3Dtd1%26backUrl%3Dhttp%253A%252F%252F120.92.3.5%253A15008%252F%253Fexit%253D1';
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
            
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/tableEvent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/new2.0/navevent','js');?>
    <?php echo loadfile('/app/Home/Public/js/mod/index/index','js');?>
    <!--<?php echo loadfile('/app/Home/Public/js/index','js');?>-->
<script type="text/javascript">
    function init() {
        if (typeof (page_init) == "function")
            page_init();
    }
</script>

<div id="page_navbar" style="padding-left:128px;padding-top:15px;" class="page-navbar">
</div>
<div id="page_content" style="padding-left:118px;margin-top:120px;" class="page-content">
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