new KISSY.DataLazyload({diff: 500,});

var $ = jQuery;
var url_forward=$('.showMsg').attr('data-url');
var ms=$('.showMsg').attr('data-url');
console.log(url_forward);
console.log(ms); 
//setTimeout("redirect('url_forward');",ms);


$('.member_btn').hover(function(){$('.member_mini_nav').show()},function(){$('.member_mini_nav').hide()});

var fromuserid=$('.fromuserid').attr('data-fromuser-tips');

if(fromuserid!=0 ){
	$(".banner-pic").html("<a href='/member.php?fromuserid="+fromuserid+"' target='_blank'><span class='btn-close J_LowsClose'></span></a>")
	$(".trigger-wrap .prev").html("<a href='/member.php?fromuserid="+fromuserid+"' target='_blank'></a>")
	$(".trigger-wrap .next").html("<a href='/member.php?fromuserid="+fromuserid+"' target='_blank'></a>")
	$(".lows-banner").slideDown(300);
	
	$(".J_LowsClose").click(function(){$(".lows-banner").slideUp(300);})
	}
//



$ajax({ 
    //指定 callback 的参数,请求 url 会生成 "url?callback={$jsonpCallback}"
    jsonpCallback: "jsonp",
    //指定 callback 的别名,请求url会生成 "url?{$jsonp}=jsonp123456"， 默认就是callback
    jsonp: "callback",
    //url 地址
    url: "/api.php?op=login",
    //string|json发起请求需要附加的数据,默认为 null
    //data: {"p": 1,"encodeCpt":encodeURIComponent("中文1测试成功"),"encode":encodeURI("中文2测试成功")},
    data: {"p": 1,"encodeCpt":encodeURIComponent("中文1测试成功"),"encode":encodeURI("中文2测试成功")},
  //  contentType: "application/x-www-form-urlencoded; charset=utf-8",
    // function请求成功的回调,回调参数为 data(内容),textStatus(请求状态),xhr(ajax对象)
    success: function (data, textStatus, xhr) {
        $(".member_sign a").html(data.login) ; $(".member_point a").html(data.point) ; $(".tips a").html(data.tips) ;$(".pots a").html(data.point) ;
		 $(".prizes_num").html(data.prizes) ; $(".orders_num").html(data.orders) ;$(".login_tip").html(data.tips)

    },
    //function 请求完成的回调，在 success 调用之后触发,参数同 success
    complete: function (data) {
    },
    // 请求错误时的回调
    error: function () {
        console.log("KissyIO Error");
    },
    //发送请求类型是jsonp
    dataType: "jsonp"
});





