//广告数据分拣
var advertisingData=[];
for (var i=0,len=adData.length;i<len;i++){
    if(!advertisingData['A'+adData[i].ps]){
        advertisingData['A'+adData[i].ps]=[];
    }
    advertisingData['A'+adData[i].ps].push(adData[i]);
}
var site={};
site.advertising={server: "http://static.loupan.com"};//图片服务器地址
//背投弹窗广告
site.advertising.showWindow=function(data,container){
    this.data=data.slice(0,1);//获取第一条数据显示
    this.container = container;
    var that = this;
    //弹出窗口
    window.open(site.advertising.server + decodeURIComponent(that.data[0].img), decodeURIComponent(that.data[0].tt), that.data[0].wt, that.data[0].ht);
};
//固定广告
site.advertising.showFix = function(data, container) {
    this.data = data.slice(0, 1);//获取第一条数据
    this.len = data.length;
    this.index = 0;
    this.container = container;

    //固定位置
    $('body').append('<style type="text/css">  .fix-box{\
        position: fixed;\
        bottom: 0px;\
        z-index: 1000;\
        -position:absolute;\
        -left:expression(eval(document.documentElement.scrollLeft+document.documentElement.clientWidth-this.offsetWidth));\
        -top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight));\
    }</style>');
    $(this.container).addClass("fix-box");
    $(this.container).css($(this.container).attr('ad-position'), '5px');//获取左右位置
    //$(this.container).css('top', this.data[0].top+'px');//设置高度
    //写入数据
    var content = '';
    switch(this.data[0].tp)
    {
        case 'code':content=decodeURIComponent(this.data[0].cd.replace(/\+/g, " "));break;
        default:content=site.advertising.fillContent(this.data);break;
    }
    $(this.container).html('<a style="background:#e5e5e5;color:#333;line-height:20px;padding:0 4px;position:absolute;left:0;top:-20px;z-index:8;height:auto;width:auto;" onclick="$(this).parent().remove()">关闭</a>' + content);
    //显示项设置为相对位置
    $('ul>li', this.container).css({
        "position": "relative"
    });
};


//对联广告
site.advertising.showFloat = function(data, container) {

    this.data = data.slice(0, 2);
    this.len = data.length;
    this.index = 0;
    this.container = container;

    //固定位置
    $('body').append('<style type="text/css">  .float-box{\
        position: fixed;top:5px;\
        z-index: 1000;\
        -position:absolute;\
        -left:expression(eval(document.documentElement.scrollLeft+document.documentElement.clientWidth-this.offsetWidth));\
        -top:expression(eval(document.documentElement.scrollTop+5));\
    }</style>');
    $(this.container).addClass("float-box");
    $(this.container).css($(this.container).attr('ad-position'), '5px');
    $(this.container).css('top', this.data[0].top+'px');//设置高度

    //写入数据
    $(this.container).html(site.advertising.fillContent(this.data) + '<a style="margin-top:-25px;background:#000;background:rgba(0,0,0,0.5);filter:alpha(opacity=50);color:#fff;cursor:pointer;height:auto;width:auto;line-height:20px;padding:0 2px;right:0;z-index:9;" onclick="$(this).parent().remove()">关闭</a>');

    //广告项设置相对位置
    $('ul>li', this.container).css({
        "position": "relative"
    });

};
//文字广告
site.advertising.showText = function(data, container) {
    this.data = data;
    this.len = data.length;
    this.index = 0;
    this.container = container;
    //写入数据
    var content = "";
    for (var i = 0; i < this.len; i++) {
        // 判断链接
        if(data[i].lk != '#' || data[i].lk != ''){
            content += '<a target="_blank" href="' + decodeURIComponent(data[i].lk); + '">' + decodeURIComponent(data[i].tt.replace(/\+/g, " ")) + '</a>';
        }
    }
    $(this.container).html(content);
};
//翻牌广告
site.advertising.showRoll = function(data, container) {
    this.data = data;
    this.len = data.length;
    this.index = 0;
    this.container = container;
    //获取广告位置尺寸
    var width = this.data[0].pwt;
    var height = this.data[0].pht;
    //数据生成
    var fp_pics = '';
    var fp_links = '';
    for (var i=0;i<this.len;i++){
        fp_pics+=site.advertising.server + decodeURIComponent(data[i].img) + '§';
        fp_links+=escape(decodeURIComponent(data[i].lk)) + '§';
    }
    //显示广告
    var FP = new sinaFlash("/public/assets/images/fanpai.swf", false, width, height, "7", "#FFFFFF", false, "High");
    FP.addParam("allowScriptAccess", "always");
    FP.addParam("menu", "false");
    FP.addParam("wmode", "transparent");
    FP.addVariable("ad_num", this.len); //翻牌数量
    FP.addVariable("pic_width", width - 10); //图片宽
    FP.addVariable("pic_height", height - 10); //图片高
    FP.addVariable("flip_time", 500); //翻牌速度
    FP.addVariable("pause_time", 800); //间隔时间
    FP.addVariable("wait_time", 3000); //等待时间
    FP.addVariable("pics", fp_pics); //广告图片地址
    FP.addVariable("urls", fp_links); //广告链接地址
    FP.addVariable("def_pic", ""); //默认图片地址
    FP.addVariable("def_link", ""); //默认链接地址
    FP.write(this.container.replace('#',''));
};
//背景广告模块
site.advertising.showBackground = function(data, container) {
    this.data = data;
    this.len = this.data.length;
    this.index = 0;
    this.n = 0;
    this.container = container;
}
//背景广告原型对象
site.advertising.showBackground.prototype = {
    // 获取广告内容
    getBigList : function(){
        var box = $(this.container);
        var li = '';
        var flash = '';

        box.html('<ul></ul>');
        for(var i=0;i<this.len;i++)
        {
            //如果类型是falsh
            flash = '';
            if (this.data[i].tp=='flash')
            {
                flash = site.advertising.extDistinct(this.data[i]);
                if (this.data[i].lk) {
                    // 判断链接地址
                    if(this.data[i].lk != '#' || this.data[i].lk != '')
                    {
                        flash = flash + "<a style='z-index:2;position:absolute;top:0px;left:0px; width:100%;height:" + this.data[i].ht + "px;' href='" + decodeURIComponent(this.data[i].lk) + "' target='_blank' > </a>";
                    }
                }
            }

            //如果具体广告高度>0
            if(this.data[i].ht>0)
            {
                var link = "<a id='advertising-background' class='item' style='background-image:url(/public/assets/images/g.gif);' href='" + decodeURIComponent(this.data[i].lk) + "' target='_blank' >" + flash + " </a>";
                // 添加内容
                // if(!this.data[i].lk)
                if(this.data[i].lk == '' || this.data[i].lk == '#')
                {
                    li = '<li style="background:url(' + site.advertising.server + decodeURIComponent(this.data[i].img) + ')  no-repeat center top"><div id="advertising-background" class="item">' + flash + '</div></li>';
                }else{
                    if(!flash)
                    {
                        li = '<li style="background:url(' + site.advertising.server + decodeURIComponent(this.data[i].img) + ')  no-repeat center top">'+link+'</li>';
                    }else{
                        li = '<li style="background:url(' + site.advertising.server + decodeURIComponent(this.data[i].img) + ')  no-repeat center top"><div id="advertising-background">' + flash + '</div></li>';
                    }
                }
                $('ul',box).append(li);

                // 设置当前广告项的样式
                if(!flash)
                {
                    $('.item',box).css({
                        "display":"block",
                        "width":"100%",
                        "height":this.data[i].ht
                    });
                }else{
                    $('.item',box).css({
                        "display":'block',
                        "width":this.data[i].wt,
                        "height":this.data[i].ht,
                        "margin":"0 auto",
                        "position":"relative"
                    });
                }
            }
        }

        // 设置盒子样式
        $('li',box).css({
            'display' : 'none'
        }).eq(0).css({
            'display' : 'block'
        });

        // 添加广告字样
        box.append('<p style="position:absolute;margin:auto;left:0;right:0;bottom:5px;z-index:3;max-width:1180px;"><span style="display:block;line-height:14px;padding:0 1px;background:rgba(0,0,0,0.2);color:#fff;float:left;font-size:10px;">广告</span></p>');
    },
    // 设置广告播放
    setBigList : function(){

        this.getBigList();

        var box = $(this.container);
        var li = $('li',box);
        var that = this;
        var time = [];
        var loop = [];
        var tt = [];

        // 获取是否循环和播放时间
        for(var i = 0; i < this.len; i++) {
            var timeStr = this.data[i].dl.toString();
            
            (timeStr.slice(0, 1) === '1') ? loop.push(false) : loop.push(true);

            time.push(parseInt(timeStr.slice(1, timeStr.length)) * 1000);
            
        }
        // 只有一个广告时
        if(this.len == 1) {
            // 是否循环
            if(!loop[0]) {
                var timer = setTimeout(function() {
                    li.remove();
                    clearTimeout(timer);
                    timer = null;
                }, time[0]);
            }
        }

        // 超过两个广告时
        if(this.len >= 2) {
            clearNoLoop();
        }
        
        function clearNoLoop() {
            var t = time[that.n] == 0 ? 5000 : time[that.n];
            var len = li.length;
            
            var t1 = setTimeout(function() {

                if(!loop[that.n]) {
                    li.eq(that.n).remove();
                    li.eq(that.n + 1).show();
                }else{
                    li.eq(that.n).hide();
                    li.eq(that.n + 1).show();
                    tt.push(time[that.n]);
                }

                if(that.n < len - 1) {
                    that.n++;
                    clearNoLoop();
                }else{
                    // 这里循环
                    li = $('li',box);
                    that.n = 0;

                    li.eq(that.n).show();
                    loopSwith(li, tt);
                    clearTimeout(t1);
                }
            }, t);
        }

        function loopSwith(dom, arr) {
            if(arr.length < 2) 
                return false;

            var sum = 0;
            for(var i=0;i<arr.length;i++){
                sum += arr[i];
                (function(t){
                    var ttt = setTimeout(function(){
                        if(that.n < dom.length - 1)
                        {
                            that.n ++;
                        }else{
                            that.n = 0;
                            clearTimeout(ttt);
                            ttt = null;
                            loopSwith(dom, arr);
                        }

                        dom.hide();
                        dom.eq(that.n).show();
                        console.log(t, (new Date()).valueOf());
                    }, t);
                })(sum);
            }
        }
    },
    //执行替换
    execute: function() {
        this.setBigList();
    }
};
//分辨广告文件类型
site.advertising.extDistinct = function(data) {
    //如果flash
    if (data.tp == 'flash') {
        if (data.wt > 0) {
            return '<embed width="' + data.wt + '" height="' + data.ht + '" src="' + site.advertising.server + decodeURIComponent(data.img) + '" quality="autohigh" wmode="opaque" type="application/x-shockwave-flash" plugspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" style="display:block;"></embed><p style="position:absolute;margin:auto;left:0;right:0;bottom:5px;z-index:3;max-width:1180px;"><span style="display:block;line-height:14px;padding:0 1px;background:rgba(0,0,0,0.2);color:#fff;float:left;font-size:10px;">广告</span></p>';
        } else {
            return '<embed width="' + data.pwt + '" height="' + data.pht + '" src="' + site.advertising.server + decodeURIComponent(data.img) + '"  quality="autohigh" wmode="opaque" type="application/x-shockwave-flash" plugspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" style="display:block;"></embed><p style="position:absolute;margin:auto;left:0;right:0;bottom:5px;z-index:3;max-width:1180px;"><span style="display:block;line-height:14px;padding:0 1px;background:rgba(0,0,0,0.2);color:#fff;float:left;font-size:10px;">广告</span></p>';
        }
    } else if (data.tp == 'picture') {
        if (data.wt > 0) {
            return '<img src="' + site.advertising.server + decodeURIComponent(data.img) + '" width="' + data.wt + '" height="' + data.ht + '" /><p style="position:absolute;margin:auto;left:0;right:0;bottom:5px;z-index:3;max-width:1180px;"><span style="display:block;line-height:14px;padding:0 1px;background:rgba(0,0,0,0.2);color:#fff;float:left;font-size:10px;">广告</span></p>';
        } else {
            return '<img src="' + site.advertising.server + decodeURIComponent(data.img) + '"  width="' + data.pwt + '" height="' + data.pht + '" /><p style="position:absolute;margin:auto;left:0;right:0;bottom:5px;z-index:3;max-width:1180px;"><span style="display:block;line-height:14px;padding:0 1px;background:rgba(0,0,0,0.2);color:#fff;float:left;font-size:10px;">广告</span></p>';
        }
    }
    return '';
};
//广告内容填充
site.advertising.fillContent = function(data) {
    var content = "<ul>";
    var aaa1;
    var aaa2;
    for (var i = 0,len = data.length; i < len; i++) {
        if (data[i].lk != "") {
            // 判断链接地址
            if(data[i].lk == '' || data[i].lk == '#'){
                aaa1 = '';
                aaa2 = '';
            }else{
                aaa1 = '<a style="width:' + data[i].wt + 'px;height:' + data[i].ht + 'px;position:absolute;top:0px;left:0px;display:block;z-index:2;background-image:url(/public/assets/images/g.gif);" href="' + data[i].lk.replace(/\+/g, " ") + '" target="_blank"> </a>';
                aaa2 = '<a style="width:' + data[i].pwt + 'px;height:' + data[i].pht + 'px;position:absolute;top:0px;left:0px;display:block;z-index:2;background-image:url(/public/assets/images/g.gif);" href="' + data[i].lk.replace(/\+/g, " ") + '" target="_blank"> </a>';
            }
            content=(data[i].wt > 0)?content + '<li style="text-align:center;" ad-data="' + encodeURIComponent(site.advertising.extDistinct(data[i])) + '">'+aaa1+'</li>':content + '<li style="text-align:center;" ad-data="' + encodeURIComponent(site.advertising.extDistinct(data[i])) + '">'+ aaa2 +'</li>';
        }
        else {
            content = content + '<li style="text-align:center;" ad-data="' + encodeURIComponent(site.advertising.extDistinct(data[i])) + '"></li>';
        }
    }
    content = content + "</ul>";
    return content;
};
//顶部全屏广告模块
site.advertising.showTop = function(data, container) {
    this.data = data;
    this.len = data.length;
    this.index = 0;
    this.container = container;
    this.delay=data[this.index].dl;
    $(this.container).show();
    $(this.container).html(site.advertising.fillContent(data));
    $('ul>li', this.container).css({
        "position": "relative",
        "display": "none"
    });
    $($('li', this.container).get(0)).show();
    this.index++;
};
//顶部全屏广告原型
site.advertising.showTop.prototype = {
    execute: function() {
        var that = this;
        var last = this.data[this.len - 1];//获取最后广告数据
        var time = that.delay == 0 ? 10000 : that.delay * 1000;
        var close = last.dl == 0 ? false : true;
        var show = setInterval(function() {
            time = that.data[that.index-1].delay == 0 ? 10000 : that.delay * 1000;
            if (that.index == that.len) {
                clearInterval(show);
                if (close) {
                    $($('ul>li', that.container).get(that.index - 1)).slideUp('slow');
                }
                return;
            }
            $($('ul>li', that.container).get(that.index - 1)).hide();
            $($('ul>li', that.container).get(that.index)).show();
            if (that.index < that.len) {
                that.index++;
            }
        }, time);
    }
};
//通栏广告模块
site.advertising.showFull = function(data, container) {
    this.data = data;
    this.len = data.length;
    this.index = 0;
    this.container = container;
    //写入数据并显示
    $(this.container).html(site.advertising.fillContent(data));
    $(this.container).show();
    $('ul>li', this.container).css({
        "position": "relative",
        "display": "none"
    });
    $($('ul>li', this.container).get(0)).show();
    this.index++;
};
//通栏广告原型
site.advertising.showFull.prototype = {
    execute: function() {
        var that = this;
        var show = setInterval(function() {
            $($('ul>li', that.container).get(that.index - 1)).hide();
            if (that.index == that.len) {
                that.index = 0;
            }
            $($('ul>li', that.container).get(that.index)).show();
            if (that.index < that.len) {
                that.index++;
            }
        }, 10000);
    }
};
//通栏滑动广告模块
site.advertising.showFullSlide = function(data, container) {
    //容器样式
    $(container).css({
        "width":data[0].pwt,
        "height":data[0].pht,
        "position": "relative",
        "overflow": "hidden"
    });
    this.data = data;
    this.len = data.length;
    this.index = 0;
    this.container = container;
    this.width = $(this.container).width();
    this.height = $(this.container).height();
    //数字指针
    var pointerContent = '';
    if (this.len > 1) {
        for (var i = 1, len = this.len + 1; i < len; i++) {
            pointerContent += '<a href="' + decodeURIComponent(this.data[i - 1].lk) + '" target="_blank" title="' + i + '">' + i + '</a>';
        }
    }
    //写入数据并显示
    $(this.container).html(site.advertising.fillContent(data) + '<div class="ad-pointer">' + pointerContent + '</div>');
    $(this.container).show();
    //容器ul样式
    $('ul', this.container).css({
        "width": "10000px",
        "height": this.height,
        "position": "relative",
        "overflow": "hidden"
    });
    //数字指针样式
    $('.ad-pointer', this.container).css({
        "position": "absolute",
        "right": 5,
        "bottom": 5,
        "z-index": 5
    });
    //数据指针a标签样式
    $('.ad-pointer>a', this.container).css({
        "display": 'block',
        "height": '14px',
        "width": '14px',
        "line-height": '14px',
        "text-align": 'center',
        "background": '#eee',
        "color": '#333',
        "float": 'left',
        "margin-left": '3px'
    });
    //广告项定位
    $('ul>li', this.container).css({
        "position": "absolute",
        "left": $(this.container).width()
    });
};

//通栏滑动广告原型
site.advertising.showFullSlide.prototype = {
    execute: function(time) {
        var _time = time || 10000;//替换时间
        $($('ul>li', this.container).get(this.index)).css('left', 0);
        $($('div>a', this.container).get(this.index)).css("background", '#999');
        this.index++;
        var that = this;
        that.currentPointer = this.index;
        function _slider() {
            $($('div>a', that.container).get(that.index - 1)).css("background", '#eee');
            $($('ul>li', that.container).get(that.index - 1)).animate({
                left: -that.width
            }, 500, function() {
                $(this).css('left', that.width);
            });
            if (that.index == that.len) {
                that.index = 0;
            }
            $($('ul>li', that.container).get(that.index)).animate({
                "left": 0
            }, 500);
            $($('div>a', that.container).get(that.index)).css("background", '#999');
            if (that.index < that.len) {
                that.index++;
            }
        }
        if(this.len==1){
           return false;
        }
        var show = setInterval(_slider, _time);
        $('div>a', this.container).hover(function() {
            $('div>a', that.container).css("background", '#eee');
            $(this).css("background", '#999');
            clearInterval(show);
            $($('ul>li', that.container).get(that.index - 1)).css('left', that.width);
            that.index = $(this).attr("title") - 1;
            $($('ul>li', that.container).get(that.index)).css('left', 0);
        }, function() {
            that.index++;
            show = setInterval(_slider, _time);
        });

    }
};
/**
 * 
 * @version v1.1.3
 * Date:2006-9-8 2006-12-15
 * 
 * 翻牌广告
 */
var sina = {};
sina.$ = function(objId) {
    if (!objId) {
        throw new Error("sina.$(String objId)参数必须")
    }
    if (document.getElementById) {
        //alert("objId="+objId);
        return eval('document.getElementById("' + objId + '")')
    }
    else if (document.layers) {
        return eval("document.layers['" + objId + "']")
    }
    else {
        return eval('document.all.' + objId)
    }
}
sinaFlash = function(C, v, x, V, c, X, i, O, I, l, o) {
    var z = this;
    if (!document.createElement || !document.getElementById) {
        return
    }
    z.id = v ? v : "";
    z.classid = "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";
    z.codebase = "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=" + (c ? c : "7") + ",0,0,0";
    z.width = x;
    z.height = V;
    z.movie = C;
    z.bgcolor = X ? X : null;
    z.quality = O ? O : "high";
    z.src = z.movie;
    z.pluginspage = "http://www.macromedia.com/go/getflashplayer";
    z.type = "application/x-shockwave-flash";
    z.useExpressInstall = i ? i : null;
    z.xir = (I) ? I : window.location;
    z.redirectUrl = l ? l : null;
    z.detectKey = o ? o : null;
    z.escapeIs = false;
    z.objAttrs = {};
    z.params = {};
    z.flashVars = [];
    z.flashVarsStr = "";
    z.embedAttrs = {};
    z.forSetAttribute("id", z.id);
    z.objAttrs["classid"] = z.classid;
    z.forSetAttribute("codebase", z.codebase);
    z.forSetAttribute("width", z.width);
    z.forSetAttribute("height", z.height);
    z.forSetAttribute("movie", z.movie);
    z.forSetAttribute("quality", z.quality);
    z.forSetAttribute("pluginspage", z.pluginspage);
    z.forSetAttribute("type", z.type);
    z.forSetAttribute("bgcolor", z.bgcolor)
}
sinaFlash.prototype = {
    getFlashHtml: function() {
        var I = this, i = '<object ';
        for (var l in I.objAttrs) {
            i += l + '="' + I.objAttrs[l] + '" '
        }
        i += '>';
        for (var l in I.params) {
            i += '<param name="' + l + '" value="' + I.params[l] + '" /> '
        }
        if (I.flashVarsStr != "") {
            i += '<param name="FlashVars" value="' + I.flashVarsStr + '" /> '
        }
        i += '<embed ';
        for (var l in I.embedAttrs) {
            i += l + '="' + I.embedAttrs[l] + '" '
        }
        i += ' ></embed></object>';
        return i
    }
    ,
    forSetAttribute: function(I, i) {
        var l = this;
        I = I.toLowerCase();
        switch (I) {
            case "classid":
                break;
            case "pluginspage":
                l.embedAttrs["pluginspage"] = i;
                break;
            case "src":
                l.embedAttrs["src"] = i;
                l.params["movie"] = i;
                break;
            case "movie":
                l.params["movie"] = i;
                l.embedAttrs["src"] = i;
                break;
            case "onafterupdate":
            case "onbeforeupdate":
            case "onblur":
            case "oncellchange":
            case "onclick":
            case "ondblClick":
            case "ondrag":
            case "ondragend":
            case "ondragenter":
            case "ondragleave":
            case "ondragover":
            case "ondrop":
            case "onfinish":
            case "onfocus":
            case "onhelp":
            case "onmousedown":
            case "onmouseup":
            case "onmouseover":
            case "onmousemove":
            case "onmouseout":
            case "onkeypress":
            case "onkeydown":
            case "onkeyup":
            case "onload":
            case "onlosecapture":
            case "onpropertychange":
            case "onreadystatechange":
            case "onrowsdelete":
            case "onrowenter":
            case "onrowexit":
            case "onrowsinserted":
            case "onstart":
            case "onscroll":
            case "onbeforeeditfocus":
            case "onactivate":
            case "onbeforedeactivate":
            case "ondeactivate":
            case "type":
                l.embedAttrs["type"] = i;
                break;
            case "codebase":
                l.objAttrs["codebase"] = i;
                break;
            case "width":
                l.objAttrs["width"] = i;
                l.embedAttrs["width"] = i;
                break;
            case "height":
                l.objAttrs["height"] = i;
                l.embedAttrs["height"] = i;
                break;
            case "align":
                l.objAttrs["align"] = i;
                l.embedAttrs["align"] = i;
                break;
            case "vspace":
                l.objAttrs["vspace"] = i;
                l.embedAttrs["vspace"] = i;
                break;
            case "hspace":
                l.objAttrs["hspace"] = i;
                l.embedAttrs["hspace"] = i;
                break;
            case "class":
                l.objAttrs["class"] = i;
                l.embedAttrs["class"] = i;
                break;
            case "title":
                l.objAttrs["title"] = i;
                break;
            case "accesskey":
                l.objAttrs["accesskey"] = i;
                break;
            case "name":
                l.objAttrs["name"] = i;
                l.embedAttrs["name"] = i;
                break;
            case "id":
                l.objAttrs["id"] = i;
                l.embedAttrs["name"] = i;
                break;
            case "tabindex":
                l.objAttrs["tabindex"] = i;
                break;
            default:
                l.params[I] = l.embedAttrs[I] = i;
        }
    }
    ,
    forGetAttribute: function(i) {
        var I = this;
        i = i.toLowerCase();
        if (I.objAttrs[i] != undefined) {
            return I.objAttrs[i]
        }
        else if (I.embedAttrs[i] != undefined) {
            return I.embedAttrs[i]
        }
        else if (I.embedAttrs != undefined) {
            return I.embedAttrs[i]
        }
        else {
            return null
        }
    }
    ,
    setAttribute: function(I, i) {
        this.forSetAttribute(I, i)
    }
    ,
    getAttribute: function(i) {
        return this.forGetAttribute(i)
    }
    ,
    addVariable: function(I, i) {
        var l = this;
        if (l.escapeIs) {
            I = escape(I);
            i = escape(i)
        }
        (l.flashVarsStr == "")?(l.flashVarsStr = I + "=" + i):(l.flashVarsStr += "&" + I + "=" + i);
        // if (l.flashVarsStr == "") {
        //     l.flashVarsStr = I + "=" + i
        // }
        // else {
        //     l.flashVarsStr += "&" + I + "=" + i
        // }
        l.embedAttrs["FlashVars"] = l.flashVarsStr
    }
    ,
    getVariable: function(I) {
        var o = this, i = o.flashVarsStr;
        if (o.escapeIs) {
            I = escape(I)
        }
        var l = new RegExp(I + "=([^\\&]*)(\\&?)", "i").exec(i);
        if (o.escapeIs) {
            return unescape(RegExp.$1)
        }
        return RegExp.$1
    }
    ,
    addParam: function(I, i) {
        this.forSetAttribute(I, i)
    }
    ,
    getParam: function() {
        return this.forGetAttribute(name)
    }
    ,
    write: function(i) {
        var I = this;
        (typeof i=="string")?sina.$(i).innerHTML = I.getFlashHtml():i.innerHTML = I.getFlashHtml();
        // var I = this;
        // if (typeof i == "string") {
        //     sina.$(i).innerHTML = I.getFlashHtml()
        // }
        // else if (typeof i == "object") {
        //     i.innerHTML = I.getFlashHtml()
        // }
    }
}
//广告位置初始数据调用
function AD(options) {
    var container = options.c;//广告容器
    var adID = options.id;//广告位置id
    var type = options.t || 'full';//广告类型
    var relation = options.r || '';//上级元素依赖
    var data = advertisingData['A' + adID] || [];//广告数据
    if (data.length > 0) {
        //如果存在上级依赖显示上级元素
        if (relation) {
            $(relation).show();
        }
        switch(type)
        {
            case 'background':new site.advertising.showBackground(data, container).execute();break;
            case 'top':new site.advertising.showTop(data, container).execute();break;
            case 'full':new site.advertising.showFull(data, container).execute();break;
            case 'full-slide':new site.advertising.showFullSlide(data, container).execute(10000);break;
            case 'roll':new site.advertising.showRoll(data, container);break;
            case 'text':new site.advertising.showText(data, container);break;
            case 'float':new site.advertising.showFloat(data, container);break;
            case 'fix':new site.advertising.showFix(data, container);break;
            case 'window':new site.advertising.showWindow(data, container);break;
            default:break;
        }
    }
};
//广告相对位置触发显示图像
site.advertising.scrollShow = function() {
    $('.AD,.ad').each(function() {
        var top = $(this).position().top;
        var win = ($(document).scrollTop() + $(document).height());
        if (top < win) {
            $('ul>li', this).each(function() {
                $(this).append(decodeURIComponent($(this).attr('ad-data')));
            });
            $(this).removeClass('AD').removeClass('ad');
        }
    });
};

$(function() {
    site.advertising.scrollShow();
    $(document).scroll(function() {
        site.advertising.scrollShow();
    });
});