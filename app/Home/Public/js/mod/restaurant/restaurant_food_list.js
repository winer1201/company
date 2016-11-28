function page_init() {
    mapinfo.init();
}

var mapinfo = {
    title:"",
    selid: "",
    attr:"",
    datalist:null,
    control: null,
    curindex: 0,
    startindex:0,
    endindex:0,
    account: 0,
    direct:0,//0:初始化、-1：向上、1向下
    init: function () {
        var that = mapinfo;
        //加载背景图片
        loadingHelper.loadbg();
        //that.map_category_code = tp.util.getQueryString("code");
        //if (!that.map_category_code)
        //    that.map_category_code = "";
        tp_ui.popup.loading.show({
            closeCallBack: function () {
                that.addlisten();
            }
        });
        that.loaddata();
        tp_ui.popup.loading.close();
    },
    loaddata: function () {
        var that = mapinfo;
        var map_category = null;
        if (!food_list || !food_list || food_list.length <= 0) return;
/*
        for (var i = 0; i < food_list.length; i++) {
             map_category = tp_foodlist[i];
            if (!map_category) continue;
            if (map_category.map_category_code == that.map_category_code) {
                that.datalist = map_category.datalist;
                that.title = map_category.map_category_name;
                break;
            }
        }
        */
        var html='',d_up="",d_down="";
        
		var info=food_list[0].datalist;
		for(var i=0;i<food_list[0].datalist.length;i++){
			d_up="",d_down="";
			if(i==0)
				d_down=" data-down='food"+(i+1)+"' ";
			else if (i==info.length-1)
				d_up=" data-up='food"+(i-1)+"' ";
			else{
				d_down=" data-down='food"+(i+1)+"' ";
				d_up=" data-up='food"+(i-1)+"' ";
			}
		         html =html+'<dl class="clear" id="food'+i+'" '+d_up + d_down +'><dt><img src="'+info[i].src+'" /></dt>'
			+  '<dd class="food_name clear"><span>'+info[i].name+'</span><i>￥'+info[i].price+'</i></dd><dd class="shicai">'+info[i].shicai+'</dd></dl>';
		}
		document.all("foodlist").innerHTML=html;  
        if (!that.datalist) return;
        //that.datalist = tp_maplist.rccf.datalist;
        that.account = that.datalist.length;
        //that.formatdata();

        //tp_ui.popup.loading.close();
    },
    formatdata:function(){
       /* var that = mapinfo;
        if (!that.datalist || this.datalist.length <= 0)
            return;
        var startindex = 0;
        var endindex = 0;
        var index=0;        
        var dtop = null;
        var dcenter = null;
        var dbottom = null;
        var d_title = null;
        var hastop = false, hasbottom = false;

        if (that.direct == 0) {
            that.curindex = 0;
            that.startindex = 0;
            if (that.account > 1)
                that.endindex = 1;
            else
                that.endindex = 0;
        }
        else if (that.direct == -1) {
            if (that.curindex == 0)
                return;
            if (that.curindex == that.startindex) {
                that.startindex = that.startindex - 1;
                that.endindex = that.endindex - 1;
            }
            that.curindex = that.curindex - 1;
        }
        else {
            if (that.curindex >= that.account - 1)
                return;
            if (that.curindex == that.endindex) {
                that.startindex = that.startindex + 1;
                that.endindex = that.endindex + 1;
            }
            that.curindex = that.curindex + 1;
        }

        dtop = document.all("content-top");
        dcenter = document.all("content-center");
        dbottom = document.all("content-bottom");
        d_title = document.all("map_name");

        d_title.innerHTML = that.title;

        //top
        if (dtop && that.direct != 0) {
            dtop.innerHTML = "";
            that.formattop();
        }        
        //center
        if (dcenter) {
            dcenter.innerHTML = "";
            that.formatcenter();
        }
            
        //bottom
        if (dbottom) {
            dbottom.innerHTML = "";
            that.formatbottom();
        }            
        
        if (dtop.innerHTML.length > 10)
            hastop = true;
        if (dbottom.innerHTML.length > 10)
            hasbottom = true;

        if (hastop && hasbottom) {
            dtop.style.height = "172px";
            dtop.style.marginTop = "-120px";
            dbottom.style.height = "65px";
        }
        else if (!hastop && !hasbottom)
        {
            dtop.style.height = "0px";
            dtop.style.marginTop = "0px";
            dbottom.style.height = "0px";
        }
        else {
            if(hastop)
            {
                //dtop.style.height = "140px";
                dtop.style.height = "172px";
                dtop.style.marginTop = "-70px";
                dbottom.style.height = "0px";
            }
            else {
                dtop.style.height = "0px";
                dtop.style.marginTop = "0px";
                dbottom.style.height = "140px";
            }
        }
        if (that.direct != 0) {
            that.control.selid("map" + that.curindex);
        }*/
    },
    formattop:function(){
        var that = mapinfo;
        var dtop = null;
        var index = 0;
        var info = null;
        var html = "";

        dtop = document.all("content-top");
        if(!dtop)return;
        if(that.direct==0)return;

        if (that.startindex == 0)
            return;
        index = that.startindex - 1;

        //if (index <= 0) 
        //    return;
        
        info = that.datalist[index];
        if (!info) return;
        //html = " <div class='mapinfo-right-item'><label>"
        //        + info.name + "</label><br /><label>"
        //        + info.price + "</label><br /><label>"
        //        + info.address + "</label><br /><label>"
        //        + info.phone + "</label></div>";
        html = that.gethtmlinfo(info);
        dtop.innerHTML = html;
    },
    formatcenter:function(){
        var that = mapinfo;
        var dcenter = null;
        var html = "";
        var h = "", n = 0;
        var d_down="",d_up="";
        var info = null;

        dcenter = document.all("content-center");
        if (!dcenter) return;

        var i = that.startindex;
        for (i = that.startindex; i <= that.endindex; i++) {
            info = that.datalist[i];
            if (info) {
                d_up = "";
                d_down = "";
                if (i < that.endindex) {
                    n = i + 1;
                    d_down = "map" + n;
                }                    

                if (i > that.startindex) {
                    n = i - 1;
                    d_up = "map" + n;
                }                    

                h = that.gethtmlinfo(info, "map" + i, d_down, d_up);
                html += h;
            }
        }
        dcenter.innerHTML = html;
    },
    formatbottom:function(){
        var that = mapinfo;
        var dbottom = null;
        var html = "";
        var info = null;
        var index = 0;

        dbottom = document.all("content-bottom");
        if (!dbottom) return;

        if (that.endindex >= that.account - 1)
            return;

        index = that.endindex + 1;
        info = that.datalist[index];

        if (!info) return;

        html = that.gethtmlinfo(info);
        dbottom.innerHTML = html;

    },
    gethtmlinfo: function (info,id,down,up) {
        var that = mapinfo;
        var lbl_price = "", lbl_addr = "", lbl_phone = "";
        if(id && id!="")
            html ='<dl class="clear"><dt><img src="'+info.src+'" /></dt>'
				+  '<dd class="food_name clear"><span>'+info.name+'</span><i>￥'+info.price+'</i></dd><dd class="shicai">'+info.shicai+'</dd></dl>'
        //html += info.name + "</label><br /><label>"
        //        + info.price + "</label><br /><label>"
        //        + info.address + "</label><br /><label>"
        //        + info.phone + "</label></div>";
        return html;
    },
    addlisten: function () {
        var that = mapinfo;
        that.control = new controlevent({
            selid: that.selid,//控件选中后事件
            noMove: that.nomove,//控件移动失败后事件
            extMoveData:that.extMoveData,//控件移动前扩展事件
            defaultid: "food0"//默认光标控件id
        });
        that.control.begin();
    },
    selid: function (id) {
        var that = mapinfo;
        var control = this;
        var ctr = document.all(id);
        var url = "";
        var ctr_mask=null;

        if (!ctr) return;
        ctr_mask=document.all("d_mask");
		
        that.unselid(control.curid);
        
         if (that.control != null)
            control = that.control;
            
        if(that.attr == tp_enum_moveData.up)
        	that.doup();
        else if(that.attr == tp_enum_moveData.down)
        	that.dodown();

        control.curCtr = ctr;
        control.curid = id;
    },
    doup:function(){
    	var that = mapinfo;
    	var length=$('#foodlist dl').length;
		var index = that.curindex;
		//console.log(length);
		if(length>2){
			//console.log(index);
			if(index<=1){
			 	$('.mask').css('top',index*174);
			}
			if(index<length-1&&index>1){
			 	$('.mask').css('top',248);
			}		
			//console.log(index);
			/*foodlist移动*/
			if(index==1){
				$('#foodlist').css('top',0);
			}
			if(index>1&&index<length-2){
				var top=$('#foodlist').css('top');
				top1=parseInt(top);
				//console.log(top1);
				$('#foodlist').css('top',top1+174);
			}
			
			if(index==length-2&&index!=1){
				var top=$('#foodlist').css('top');
					top1=parseInt(top);
				//console.log(3);
				$('#foodlist').css('top',top1+109);
			}
			if(index==length-2&&index==1){
				$('#foodlist').css('top',0);
			}
		}
		if(length==2){
			if(index==1){
				index--;
				$('.mask').css('top',index*174);
			}
		}
    },
    dodown:function(){
    	var that = mapinfo;
    	var length=$('#foodlist dl').length;
		var index = that.curindex;
		//console.log(length);
		//console.log(index);
		if(length>2){
			//console.log(index);
			if(index==1){
			  	$('.mask').css('top',index*174);
			}
			if(index>1&&index<=length-1){
			 	$('.mask').css('top',2*124);
			}
			if(index==length-1){
				$('.mask').css('top',312);
			}
	
			if(index==2){
				//console.log('top');
				$('#foodlist').css('top',-index*50);
			}
			if(index>2&&index<length-1){
				$('#foodlist').css('top',-2*50-(index-2)*174);
			}
			if(index==length-1){
				$('#foodlist').css('top',487-length*174);
			}
		}
		if(length==2){
			if(index==0){
				index++;
				$('.mask').css('top',index*174);
			}
		}
			//console.log(index);
		//console.log(index);
    },
    unselid: function (id) {
        var that = mapinfo;
        var ctr = document.all(id);
        var control = this;
        if (!ctr) return;
        //ctr.className = "mapinfo-right-item";
        if (that.control != null)
            control = that.control;

        if (id == that.control.curid) {
            control.curid = null;
            control.curCtr = null;
        }
    },
    nomove: function (attrname) {
        var that = mapinfo;
	
        if (attrname == tp_enum_moveData.up)
            that.direct = -1;
        else if (attrname == tp_enum_moveData.down)
            that.direct = 1;
        else
            return;

        //that.formatdata();
    },
    extMoveData: function (attr) {
        var that = mapinfo;

        var ctr = this;
        var tdID = ctr.curCtr.getAttribute(attr);
        that.attr="";
        if (tdID && tdID != ""){
            if (attr == tp_enum_moveData.up)
                that.curindex = that.curindex - 1;
            else if(attr == tp_enum_moveData.down)
                that.curindex = that.curindex + 1;
            that.attr = attr;
        }
        ctr.baseMoveData(attr);
        if (ctr.afterMove)
            ctr.afterMove(attr);
    }
}