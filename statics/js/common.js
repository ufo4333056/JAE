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
    //ָ�� callback �Ĳ���,���� url ������ "url?callback={$jsonpCallback}"
    jsonpCallback: "jsonp",
    //ָ�� callback �ı���,����url������ "url?{$jsonp}=jsonp123456"�� Ĭ�Ͼ���callback
    jsonp: "callback",
    //url ��ַ
    url: "/api.php?op=login",
    //string|json����������Ҫ���ӵ�����,Ĭ��Ϊ null
    //data: {"p": 1,"encodeCpt":encodeURIComponent("����1���Գɹ�"),"encode":encodeURI("����2���Գɹ�")},
    data: {"p": 1,"encodeCpt":encodeURIComponent("����1���Գɹ�"),"encode":encodeURI("����2���Գɹ�")},
  //  contentType: "application/x-www-form-urlencoded; charset=utf-8",
    // function����ɹ��Ļص�,�ص�����Ϊ data(����),textStatus(����״̬),xhr(ajax����)
    success: function (data, textStatus, xhr) {
        $(".member_sign a").html(data.login) ; $(".member_point a").html(data.point) ; $(".tips a").html(data.tips) ;$(".pots a").html(data.point) ;
		 $(".prizes_num").html(data.prizes) ; $(".orders_num").html(data.orders) ;$(".login_tip").html(data.tips)

    },
    //function ������ɵĻص����� success ����֮�󴥷�,����ͬ success
    complete: function (data) {
    },
    // �������ʱ�Ļص�
    error: function () {
        console.log("KissyIO Error");
    },
    //��������������jsonp
    dataType: "jsonp"
});





