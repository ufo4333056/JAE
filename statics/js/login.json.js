var $=jQuery;
//     $getJSON('/count.php?callback=?',{},function(data){console.log(data)});



 //$get('/count.php?callback=jsonp',{"data":1},function(data){console.log(data.status)});


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
        $(".member_sign a").html(data.login) ; $(".member_points a").html(data.point) ; $(".tips").html(data.tips) ;

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


