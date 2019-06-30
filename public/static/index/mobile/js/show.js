//楼盘详情页换一批
$('#get_ajax_house').bind('click',function(){
             httpCall = $.ajax({
                type:"GET",
                data:{},
                url :"/index.php/home/ajax_house_list/type/random/noids/0?s="+Math.random(),
                success:function(str){
                    $('#ajax_house').html(str);
                }
            });
        });

//房源详情
(function()
{
	$('#hide a').bind('click',function()
	{
		if(document.getElementById('Ms_none').style.display == 'none')
		{
			$('#hide a').html('收起'+'<span></span>');
			$('#hide a span').addClass('up_jt')
			$('#Ms_none').slideDown('fast');
		}
		else
		{
			$('#hide a').html('展开'+'<span></span>');
			$('#hide a span').addClass('down_jt')
			$('#Ms_none').slideUp('fast');	
		}
	})
    
    $('.get_btn').bind('click',function()
	{
		$("#group_form_youhui").submit();
	})
    
	$('#Share_btn').bind('click',function()
	{
		$('#bg').css('display','block');
		$('#share').css('display','block');
	})
	$('#share .close').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().css('display','none');
	})
})();

//分享
$(function()
{
    $('#Share_btn').bind('click',function()
    {
    	$('#bg').css('display','block');
        $('#share_contain').css('display','block');
    })
   
   $('#share_contain .title .closeBtn').bind('click',function()
   {
   		$('#bg').css('display','none');
        $(this).parent().parent().css('display','none');
   })
})

//楼盘详情
$(function()
{
	$('#Click .Send').bind('click',function()
	{
		$('#bg').css('display','block');
		$('#send_phone').css('display','block');
	});
	$('#send_phone .qx1').bind('click',function()
	{
		$('#bg').css('display','none');
		$('#send_phone').css('display','none');
	});
	$('#send_phone .enter1').bind('click',function()
	{
		$("#group_form13").submit();
		$('#bg').css('display','none');
		$('#send_phone').css('display','none');
	});
	$('#Click .jj').bind('click',function()
	{
		$('#bg').css('display','block');
		$('#jiangjia').css('display','block');
	});
	$('#jiangjia .qx2').bind('click',function()
	{
		$('#bg').css('display','none');
		$('#jiangjia').css('display','none');
	});
	$('#jiangjia .enter2').bind('click',function()
	{
		$("#group_form4").submit();
		$('#bg').css('display','none');
		$('#jiangjia').css('display','none');
	});
	$('#tj').bind('click',function()
	{
		$("#group_form_house").submit();
	});
	
	
	$('#bg').bind('click',function()
	{
		$(this).hide();
		$('#send_phone').hide();
		$('#jiangjia').hide();
        $('#show_url').hide();
        $('#share_contain').hide();
	})
});
//收藏
$(function()
{
	$('#succ').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).css('display','none');
	})
	$('#shoucang').bind('click',function()
	{
		var id=$('#house_id').val();
		var url = document.location.href;
		parent=$(this).parent();
		// ajax调用php收藏函数
		$.ajax({
			type:"POST",
			url:"/cookie/ajax_AddFavor/",
			data:{'id':id,'url':url},
			dataType:"json",
			success:function(data){
				//alert(data);
				if(data=='1'){
					//$('#succ').html('收藏成功<span></span>');
					//$('#succ').css('display','block');
					html="<a class=\"scd\">已收藏</a>";
					//location.reload();
				}else if(data=='0'){
					$('#succ').html('收藏失败<span></span>');
					$('#succ').css('display','block');
					setTimeout("closdiv('succ')",2000);
				}else if(data=='2'){
					//html="<span class=\"sc\"></span>取消收藏";
					//$('#succ').html(html);
					//$('#succ').css('display','block');
					//location.reload();
					html="<a class=\"sc\">收藏</a>";
				}
				$('#shoucang').html(html);
			},
			error: function (data) { 
                 $('#succ').html('收藏失败<span></span>');
                 $('#succ').css('display','block');
            } 
		});
	})
})

//展开,收缩
$(function()
{
	$('#hide').bind('click',function()
	{
		if(document.getElementById('megs').style.display == 'none')
		{
			$('#hide a').html('收起'+'<span></span>');
			$('#hide a span').addClass('up_jt');
			$('#megs').slideDown('fast');
		}
		else
		{
			$('#hide a').html('展开'+'<span></span>');
			$('#hide a span').addClass('down_jt');
			$('#megs').slideUp('fast');
		}
	})
	$('#hide1').bind('click',function()
	{
		if(document.getElementById('a1').getElementsByTagName('div')[0].style.display == 'none')
		{
			$('#hide1 a').html('收起'+'<span></span>');
			$('#hide1 a span').addClass('up_jt');
			$('#a1 div').slideDown('fast');
			//$('#a1 p').slideUp('fast');
			document.getElementById('a1').getElementsByTagName('p')[0].style.display = 'none';
			document.getElementById('a1').getElementsByTagName('p')[1].style.display = 'none';
			//$('#a1 div p').slideDown('fast');
			$('#a1 div p').style.display = 'none';
		}
		else
		{
			$('#hide1 a').html('展开'+'<span></span>');
			$('#hide1 a span').addClass('down_jt');
			$('#a1 div').slideUp('fast');
			//$('#a1 p').slideDown('fast');
			//$('#a1 div p').slideDown('fast');
			document.getElementById('a1').getElementsByTagName('p')[0].style.display = 'block';
			document.getElementById('a1').getElementsByTagName('p')[1].style.display = 'block';
		}
	})
})
//价格，户型
$(function()
{
    $('#Sel .price').bind('click',function()
    {
        if(document.getElementById('sel_price').style.display = 'none')
        {
            $('#bg').css('display','block');
            $('#sel_price').css('display','block');
        }
    });

    $('#Sel .hx').bind('click',function()
    {
        if(document.getElementById('sel_price').style.display = 'none')
        {
            $('#bg').css('display','block');
            $('#sel_hx').css('display','block');
        }
    });

    $('#bg').bind('click',function()
    {
        $(this).css('display','none');
        $('#sel_price').css('display','none');
        $('#sel_hx').css('display','none');
    })

    $('#Sel .quyu').bind('click',function()
    {
    	$('#bg').css('display','block');
    	$('#sel_qu').css('display','block');
    })
    $('#Sel .zujing').bind('click',function()
    {
    	$('#bg').css('display','block');
    	$('#sel_zj').css('display','block');
    })

    $('#Sel .hx').bind('click',function()
    {
    	$('#bg').css('display','block');
    	$('#sel_hx').css('display','block');
    })

    $('#bg').bind('click',function()
    {
    	$(this).css('display','none');
    	$('#sel_qu').css('display','none');
    	$('#sel_zj').css('display','none');
    	$('#lanmu').css('display','none');
    })

    $('#nav_title h1').bind('click',function()
    {
    	$('#bg').css('display',' block')
    	$('#lanmu').css('display','block');
    })
})

//不限
$(function()
{
	$('#lanmu ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});
$(function()
{
	$('#sel_qu ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});
$(function()
{
	$('#sel_zj ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});
$(function()
{
	$('#sel_hx ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});
$(function()
{
	$('#wrap_sel ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});
$(function()
{
	$('#sel_price ul li a:eq(0)').bind('click',function()
	{
		$('#bg').css('display','none');
		$(this).parent().parent().parent().css('display','none');
	})
});

/*
//返回顶部
window.onscroll = function()
{
    var onScroll = document.documentElement.scrollTop||document.body.scrollTop;
    var oBack = document.getElementById('backTop');
    if(onScroll>=1300)
    {
        oBack.style.display = 'block';
    }else
    {
        oBack.style.display = 'none';
    }
}*/


//楼盘查询
$(function() {

    var httpCall;
    $("#search_input_loupan").bind('keyup focus',function(event){
        $("#search_ul_loupan").empty();
        var kw = $("#search_input_loupan").val();
        var city = $("input[name='group[site_id]']").val();

        if(kw =='' || kw ==' ')
        {   
            return false;
        }
        
        if(httpCall) httpCall.abort();
        httpCall = $.ajax({
            type:"post",
            data:{"kw":kw,"city":city},
			url :"/index.php/house/ajax_top_search_data/?s="+Math.random(),
            beforeSend:function(){
                $("#search_ul_loupan").slideDown("500");
                $("#search_ul_loupan").html("<li><a>查询中……</a><li/>");
            },
            success:function(str){
                $("#search_ul_loupan").html(str);
            }
        })
    });

    $(document).on('click',function(){
        if("search_ul_loupan" != $(this).attr('id') &&  0 == $(this).parents('#search_ul_loupan').length)
            $("#search_ul_loupan").empty();
    })
	
	
	
	
})



function showfn(lpname,lpurl){
    // 楼盘名字
    $("#search_input_loupan").val(lpname);
    // 楼盘id
    var arr = lpurl.split("/");
    $("#group_house").val(arr[3]);
    // 隐藏
    $("#search_ul_loupan").hide();
}



$(".apply-pup").click(function(){
 	$("#apply-pup-icon").slideToggle(350);	
	return false;
});				 
				 