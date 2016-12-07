<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
    <meta name="page-view-size" content="<?php echo ($reso); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>养老门户</title>
    <?php echo loadfile('/app/Home/Public/css/deep_blue/layout','css');?>
    <?php echo loadfile('/app/Home/Public/js/base/util','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/keyevent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/controlEvent','js');?>
    <?php echo loadfile('/app/Home/Public/js/base/popupEvent','js');?>
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
        var m_baseUrl = '/video/player?usercode=&amp;user_session=&amp;websitecode=&amp;backUrl=&amp;file=http://vjs.zencdn.net/v/oceans.mp4&amp;_v=94121';
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
    <!--style="background-image: url(/app/Home/Public/img/BG.png);"-->
    <div class="wp" id="divwp">
        <div class="page">﻿
	 <?php echo loadfile('/app/Home/Public/js/mod/goods/myvideo','js');?>
<link href="//vjs.zencdn.net/5.4.6/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/5.4.6/video.min.js"></script>
<script type="text/javascript">
    function init() {
        if (typeof (page_init) == "function")
            page_init();
    }
</script>
<style>
	#footer{display:none;}
</style>
    <!-- controls -->
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="1280" height="720"
           poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}"style="left:0;top:-20px;">
        <source src="" type='video/mp4' />
        <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
        <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    </video>
    <script type="text/javascript">
    var myPlayer = videojs('example_video_1');
     myPlayer.play()
        //console.log(file)
    videojs("example_video_1").ready(function(){
        var myPlayer = this;
        myvideoHelper.init(myPlayer);
        var file = "";
        file = tp.util.getQueryString("file");
        //console.log(file)
       // file = "video/" + file;
        myvideoHelper.play(file);
        //myPlayer.enterFullScreen();
        //设置播放文件路径
        //var source = document.getElementsByTagName("source");
        
        //myPlayer.src(file);
        //source.setAttribute("src", "video/按摩三阴交穴可以减缓衰老.mp4")
        //myPlayer.play();
        config.init();
        TpMsgHelper.Init();
    });
    </script>


<div class="page-footer">
                <div id="footer" class="tip">
                    <label>按&lt;返回&gt;键返回上一页</label>
                </div>
            </div>
        </div>
    </div>
    <!--<div tabindex="0" style="width: 1280px; height: 720px;" class="tp-popup-backdrop">
        <div tabindex="-1" id="box-title" class="tp-popup-box">
            <div id="sub" class="tp-popup-sub ">
                <div id="box-content" class="tp-popup-content">
                    this is test.
                </div>
            </div>
        </div>
    </div>-->
    <script type="text/javascript">
        common.initUrl();
        TpMsgHelper.Init();
    </script>
</body>
</html>