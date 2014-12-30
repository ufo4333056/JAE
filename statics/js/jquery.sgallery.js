var $ = jQuery;
//$Event,$each

// 首页焦点图


     function Carousel (slid) {



        var data=$(slid).attr("data-widget-config");
        var config=$parseJSON(data)     
        var sWidth = $(slid).width(); // $(slid).width(); //获取焦点图的宽度（显示面积）
        var sHeight = $(slid).height(); // $(slid).width(); //获取焦点图的宽度（显示面积）
        var len = $(slid + " ."+config.contentCls).children().length(); //获取焦点图个数
        
        $(slid + " ."+config.contentCls).css({"position":"relective","width":sWidth,"height":sHeight});
        $(slid + " ."+config.contentCls).children().css("position", "absolute");

        var index = 0;
        var picTimer;

        //以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
     

        //为小按钮添加鼠标滑入事件，以显示相应的内容
        if(config.triggerType=="click") {
        $(slid + " ."+config.navCls).children().css("opacity", 1).click(function() {
            index = $(slid + " ."+config.navCls).children().index(this);
            showPics(index);
        }).eq(0).trigger("click");}

        if(config.triggerType=="mouseenter") {
        $(slid + " ."+config.navCls).children().css("opacity", 1).mouseenter(function() {
            index = $(slid + " ."+config.navCls).children().index(this);
            showPics(index);
        }).eq(0).trigger("mouseenter");}

        //上一页、下一页按钮透明度处理
        $(slid).hover(
            function(){$(this).find(" ." +config.prevBtnCls).fadeIn(200);$(this).find(" ." +config.nextBtnCls).fadeIn(200)},
            function(){$(this).find(" ." +config.prevBtnCls).fadeOut(200);$(this).find(" ." +config.nextBtnCls).fadeOut(200)})

        $(slid + " ." +config.prevBtnCls).css("opacity", 0.5).hover(function() {
            $(this).stop(true, false).animate({ "opacity": "0.8" }, 300);
        }, function() {
            $(this).stop(true, false).animate({ "opacity": "0.5" }, 300);
        });

        $(slid + " ." +config.nextBtnCls).css("opacity", 0.5).hover(function() {
            $(this).stop(true, false).animate({ "opacity": "0.8" }, 300);
        }, function() {
            $(this).stop(true, false).animate({ "opacity": "0.5" }, 300);
        });

        //上一页按钮
         $(slid + " ." +config.prevBtnCls).click(function() {
            index -= 1;
            if (index == -1) { index = len - 1; }
            showPics(index); 
        });

        //下一页按钮
         $(slid + " ." +config.nextBtnCls).click(function() {
            index += 1;
            if (index == len) { index = 0; }
            showPics(index);
        });

       
        //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
        if(config.autoplay=="true"){
        $(slid).hover(function() {
            clearInterval(picTimer);
        }, function() {
            picTimer = setInterval(function() {
                showPics(index);
                index++;
                if (index == len) { index = 0; }
            }, config.interval); //此4000代表自动播放的间隔，单位：毫秒
        }).trigger("mouseleave");}

        //显示图片函数，根据接收的index值显示相应的内容
        function showPics(index) { //普通切换
            var nowLeft = -index * sWidth; //根据index值计算ul元素的left值
            
             $(slid + " ."+config.contentCls).children().eq(index).stop(true, false).animate({ "z-index": "2","opacity":1 }, 300).siblings().animate({ "z-index": "1","opacity":0 }, 300); //通过animate()调整ul元素滚动到计算出的position
            $(slid + " ."+config.navCls).children().removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
             $(slid + " ."+config.navCls).children().stop(true, false).animate({ "opacity": "0.9","z-index":"10" }, 300).eq(index).stop(true, false).animate({ "opacity": "1","z-index":"10" }, 300); //为当前的按钮切换到选中的效果
        }

    };





//向上滚动代码
function startmarquee(elementID,h,n,speed,delay){
 var t = null;
 var box = '#' + elementID;
 $(box).hover(function(){
  clearInterval(t);
  }, function(){
  t = setInterval(start,delay);
 }).trigger('mouseout');
 function start(){
  $(box).children('ul:first').animate({marginTop: '-='+h},speed,function(){
   $(this).css({marginTop:'0'}).find('li').slice(0,n).appendTo(this);
  })
 }
}

//TAB切换
function SwapTab(name,title,content,Sub,cur){
  $(name+' '+title).mouseover(function(){
	  $(this).addClass(cur).siblings().removeClass(cur);
	  $(content+" > "+Sub).eq($(name+' '+title).index(this)).show().siblings().hide();
  });
}


/** 
* @author xing 
*/ 

new SwapTab('.tab','div','.cnt','div','on');
new Carousel('.fc');


