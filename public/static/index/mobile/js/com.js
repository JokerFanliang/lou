// JavaScript Document
 
//������������
$(".clear-txt").click(function(){
   $(this).siblings("input").val("");
});
//�����л�class
$(".apply-pup").click(function(){
 	$("#apply-pup-icon").slideToggle(350);	
	return false;
});
 
$(".return-top").click(function(){
	  $('body,html').animate({scrollTop:0},220); 	 
	  return false;
});

/*wenda = function(i){
 $("#wenda-"+i).slideToggle(350);
	return false;
  };*/

function wenda(){
    if($(".carditems_info").first().css('display') == 'none'){
        $(".carditems_info").slideDown(350);
    } else {
        $(".carditems_info").slideUp(350);
    }
    return false;

};

//返回顶部
window.onscroll = function()
{
    var onScroll = document.documentElement.scrollTop||document.body.scrollTop;
    var oBack = document.getElementById('backTop');
    var oBack2 = document.getElementById('back');
    if(oBack){
        if(onScroll>=960)
        {
            oBack.style.display = 'block';
        }else
        {
            oBack.style.display = 'none';
        }
    }
    if(oBack2){
        if(onScroll>=960)
        {
            oBack2.style.display = 'block';
        }else
        {
            oBack2.style.display = 'none';
        }
    }
}

/*
 // 百度地图API功能
 //var map = new BMap.Map("allmap");
 //var point = new BMap.Point(116.331398,39.897445);
 //map.centerAndZoom(point,12);
 */
var fn=function(){
    var obj = $('#get_gps');
    obj.html('<span class="fujin-icon"></span>正在定位...');
    var site_py = $('#site_py').val();
    var geolocation = new BMap.Geolocation();
//	console.log(geolocation.getCurrentPosition);
    geolocation.getCurrentPosition(function(r){
        //console.log("r="+r);
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            obj.html('<span class="fujin-icon"></span>正在定位...');
            /*
             //var mk = new BMap.Marker(r.point);
             //map.addOverlay(mk);
             //map.panTo(r.point);
             */
            //alert('您的位置：'+r.point.lng+','+r.point.lat);
            var url="/index.php/home/get_baidu_map_city/?lat="+r.point.lat+"&lng="+r.point.lng+"&type=address";
            $.get(url, function(data){
                //alert("Data Loaded: " + data);
                //city=re.addressComponent.city;
                //console.log('data='+data);
                /* 				var html="<span class='fujin-icon'></span>猜你在:"+data;
                 $('#get_gps').html(html); */
                window.location='/'+site_py+'/loupan/fujin/?lng='+r.point.lng+'&lat='+r.point.lat;
            });
        }
        else {
            /*alert('failed'+this.getStatus());*/
            obj.html('<span class="fujin-icon"></span>定位失败！');
            get_city_baidu();////通过百度定位得到城市信息 位第二种
        }
    },{enableHighAccuracy: true});
};
var fn2=function(){
    var obj = $('#get_gps2');
    obj.html('正在定位...');
    var site_py = $('#site_py').val();
    var geolocation = new BMap.Geolocation();
//	console.log(geolocation.getCurrentPosition);
    geolocation.getCurrentPosition(function(r){
        //console.log("r="+r);
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            obj.html('正在定位...');
            /*
             //var mk = new BMap.Marker(r.point);
             //map.addOverlay(mk);
             //map.panTo(r.point);
             */
            //alert('您的位置：'+r.point.lng+','+r.point.lat);
            var url="/index.php/home/get_baidu_map_city/?lat="+r.point.lat+"&lng="+r.point.lng+"&type=address";
            $.get(url, function(data){
                //alert("Data Loaded: " + data);
                //city=re.addressComponent.city;
                //console.log('data='+data);
                /* 				var html="<span class='fujin-icon'></span>猜你在:"+data;
                 $('#get_gps').html(html); */
                window.location='/'+site_py+'/loupan/fujin/?lng='+r.point.lng+'&lat='+r.point.lat;
            });
        }
        else {
            /*alert('failed'+this.getStatus());*/
            obj.html('定位失败！');
            get_city_baidu();////通过百度定位得到城市信息 位第二种
        }
    },{enableHighAccuracy: true});
};

var fn3=function(){
    var obj = $('#get_gps3');
    obj.html('正在定位...');
    var site_py = $('#site_py').val();
    var geolocation = new BMap.Geolocation();
//	console.log(geolocation.getCurrentPosition);
    geolocation.getCurrentPosition(function(r){
        //console.log("r="+r);
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            obj.html('正在定位...');
            /*
             //var mk = new BMap.Marker(r.point);
             //map.addOverlay(mk);
             //map.panTo(r.point);
             */
            //alert('您的位置：'+r.point.lng+','+r.point.lat);
            var url="/index.php/home/get_baidu_map_city/?lat="+r.point.lat+"&lng="+r.point.lng+"&type=address";
            $.get(url, function(data){
                //alert("Data Loaded: " + data);
                //city=re.addressComponent.city;
                //console.log('data='+data);
                /* 				var html="<span class='fujin-icon'></span>猜你在:"+data;
                 $('#get_gps').html(html); */
                window.location='/'+site_py+'/business/fujin/?lng='+r.point.lng+'&lat='+r.point.lat;
            });
        }
        else {
            /*alert('failed'+this.getStatus());*/
            obj.html('定位失败！');
            get_city_baidu();////通过百度定位得到城市信息 位第二种
        }
    },{enableHighAccuracy: true});
};
$('#get_gps').bind('click',fn);
$('#get_gps2').bind('click',fn2);
$('#get_gps3').bind('click',fn3);
  
  
  
  
  
  
  
  
  
  
  
  
  