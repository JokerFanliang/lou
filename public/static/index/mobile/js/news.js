

function addClass(element, value) {
    if (!element.className) {
        element.className = value;
    } else {
        newClassName = element.className;
        newClassName += " ";
        newClassName += value;
        element.className = newClassName;
    }
}
function removeClass(element, value) {
    var removedClass = element.className;
    var pattern = new RegExp("(^| )" + value + "( |$)");
    removedClass = removedClass.replace(pattern, "$1");
    removedClass = removedClass.replace(/ $/, "");
    element.className = removedClass;
    return true;
}

function hide(id) { var Div = document.getElementById(id); if (Div) { Div.style.display = "none" } }
function show(id) { var Div = document.getElementById(id); if (Div) { Div.style.display = "block" } }

function tabsRemove(index, head, divs, div2s) {
    if (!document.getElementById(head)) return false;
    var tab_heads = document.getElementById(head);
    if (tab_heads) {
        var alis = tab_heads.getElementsByTagName("li");
        for (var i = 0; i < alis.length; i++) {
            removeClass(alis[i], "current");

            hide(divs + "_" + i);
            if (div2s) { hide(div2s + "_" + i) };

            if (i == index) {
                addClass(alis[i], "current");
            }
        }
        show(divs + "_" + index);
        if (div2s) { show(div2s + "_" + index) };
    }
}
/*function tabs(head, divs, div2s, over) {
    if (!document.getElementById(head)) return false;
    var tab_heads = document.getElementById(head);

    if (tab_heads) {
        var alis = tab_heads.getElementsByTagName("li");
        for (var i = 0; i < alis.length; i++) {
            alis[i].num = i;
            if (over) {
                alis[i].onmouseover = function () {
                    var thisobj = this;
                    thetabstime = setTimeout(function () { changetab(thisobj); }, 150);
                }
                alis[i].onmouseout = function () {
                    clearTimeout(thetabstime);
                }
            }
            else {
                alis[i].onclick = function () {
                    if (this.className == "current" || this.className == "last current") {
                        changetab(this);
                        return true;
                    }
                    else {
                        changetab(this);
                        return false;
                    }
                }
            }

            function changetab(thebox) {
                tabsRemove(thebox.num, head, divs, div2s);
            }
        }
    }
}
tabs("data_tab1", "data_box1", null, false);
tabs("data_tab2", "data_box2", null, false);*/
/*==================================================lazyload===============================================================*/
(function (e, h, l, c) { e.fn.sonar = function (o, n) { if (typeof o === "boolean") { n = o; o = c } return e.sonar(this[0], o, n) }; var f = l.body, a = "scrollin", m = "scrollout", b = function (r, n, t) { if (r) { f || (f = l.body); var s = r, u = 0, v = f.offsetHeight, o = h.innerHeight || l.documentElement.clientHeight || f.clientHeight || 0, q = l.documentElement.scrollTop || h.pageYOffset || f.scrollTop || 0, p = r.offsetHeight || 0; if (!r.sonarElemTop || r.sonarBodyHeight !== v) { if (s.offsetParent) { do { u += s.offsetTop } while (s = s.offsetParent) } r.sonarElemTop = u; r.sonarBodyHeight = v } n = n === c ? 0 : n; return (!(r.sonarElemTop + (t ? 0 : p) < q - n) && !(r.sonarElemTop + (t ? p : 0) > q + o + n)) } }, d = {}, j = 0, i = function () { setTimeout(function () { var s, o, t, q, p, r, n; for (t in d) { o = d[t]; for (r = 0, n = o.length; r < n; r++) { q = o[r]; s = q.elem; p = b(s, q.px, q.full); if (t === m ? !p : p) { if (!q.tr) { if (s[t]) { e(s).trigger(t); q.tr = 1 } else { o.splice(r, 1); r--; n-- } } } else { q.tr = 0 } } } }, 25) }, k = function (n, o) { n[o] = 0 }, g = function (r, p) { var t = p.px, q = p.full, s = p.evt, o = b(r, t, q), n = 0; r[s] = 1; if (s === m ? !o : o) { setTimeout(function () { e(r).trigger(s === m ? m : a) }, 0); n = 1 } d[s].push({ elem: r, px: t, full: q, tr: n }); if (!j) { e(h).bind("scroll", i); j = 1 } }; e.sonar = b; d[a] = []; e.event.special[a] = { add: function (n) { var p = n.data || {}, o = this; if (!o[a]) { g(this, { px: p.distance, full: p.full, evt: a }) } }, remove: function (n) { k(this, a) } }; d[m] = []; e.event.special[m] = { add: function (n) { var p = n.data || {}, o = this; if (!o[m]) { g(o, { px: p.distance, full: p.full, evt: m }) } }, remove: function (n) { k(this, m) } } })(jQuery, window, document);

/**
 * 加载更多
 */
$('#next_page').val(2);
$('#get_more').bind('click', function(){

    $('#loading').show();
    $('#get_more').hide();

    var page = parseInt($('#next_page').val());
    var next_page = page+1;
    var site_py = $('#site_py').val();
    var category_id = $('#category_id').val();
    var is_position = $('#is_position').val();

    var url = '';
    if(category_id){
        if (is_position == '1') {
            url = "/"+site_py+"/news/plist_"+category_id+"_"+page+"/";
        }
        else {
            url = "/"+site_py+"/news/list_"+category_id+"_"+page+"/";
        }
    } else {
        url = "/"+site_py+"/news_"+page;
    }

    $.ajax({
        type: "get",
        url: url,
        dataType: 'html',
        success: function (res) {
            if(res) {
                $('#news_list').append(res);
                $('#get_more').show();
                $('#loading').hide();
                $('#next_page').val(next_page);
            } else {
                $('#showtext').html('已经到底了');
                /*setTimeout(function(){
                 $('#more').fadeOut(300);
                 },3000);*/
            }
        }
    });
});



