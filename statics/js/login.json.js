var $=jQuery;
//     $getJSON('/count.php?callback=?',{},function(data){console.log(data)});



 //$get('/count.php?callback=jsonp',{"data":1},function(data){console.log(data.status)});


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
        $(".member_sign a").html(data.login) ; $(".member_points a").html(data.point) ; $(".tips").html(data.tips) ;

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


