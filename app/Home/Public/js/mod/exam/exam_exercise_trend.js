﻿function page_init() {
    exam_exercise_trend.init();
}

var exam_exercise_trend = {
    control: null,
    defaultid: "",
    newreach_token: "",
    init: function () {
        var that = this;
        //加载背景图片
        loadingHelper.loadbg();
        that.newreach_token = tp.util.getQueryString("newreach_token");
        that.loaddata(function () {
            that.listen();
        });
    },
    loaddata: function (callback) {
        var that = exam_exercise_trend;

        var url = config.cbs_newreach_healthtrend + "?usercode=" + m_usercode + "&user_session=" + m_user_session;

        url = tp.util.appendParam(url, "token", that.newreach_token);
        url = tp.util.appendParam(url, "measure_type", "pdr");
        url = tp.util.appendParam(url, "timetype", "3");

        tp_ui.popup.loading.show({
            closeCallBack: function () {
                callback();
            }
        });

        tp.ajax({
            url: url,
            success: function (data) {
                //数据格式化
                var jsondata = that.initData(data);
                tp_ui.popup.loading.close();
                if (jsondata && jsondata.retcode == 0 && jsondata.data) {

                    var ctrImg = document.all("dimg");
                    var imgdata = jsondata.data.imgdata;

                    ctrImg.style.background = "";
                    ctrImg.innerHTML = "<img id=\"itrend\" src=\"data:image/png;base64," + imgdata + "\" />";
                }
                else {
                    tp.util.showMsg("data-error");
                }
            },
            error: function (status) {
                tp_ui.popup.loading.close();
                tp.util.showMsg("data-error");
                console.log(status);
            },
            loading: function () {
                console.log('loading');
            }
        });
    },
    listen: function () {
        var that = exam_exercise_trend;
        that.control = new controlevent({
            extMove: that.move,
            defaultid: that.defaultid
        });
        that.control.begin();
    },
    initData: function (json) {
        var that = this;
        if (!json) return;
        var data = JSON.parse(json);
        return data;
    },
    move: function (key) {
        var that = exam_exercise_trend;
        if (key != tp_move_key.right && key != tp_move_key.left && key != tp_move_key.up && key != tp_move_key.down)
            return;

        if (key == tp_move_key.right || key == tp_move_key.left) {
            var url = "", backUrl = "";

            backUrl = tp.util.getQueryString("backUrl");

            if (key == tp_move_key.right)
                url = config.portal_exam_exercise_data_url;
            else
                url = config.portal_exam_exercise_url;

            url = common.setBaseParam(url);
            //url = tp.util.appendParam(url, "newreach_token", that.newreach_token);
            url = tp.util.appendParam(url, "backUrl", encodeURIComponent(backUrl));

            tp.util.redirectUrl(url);
            return;
        }
    }
}