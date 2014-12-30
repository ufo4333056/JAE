var $ = jQuery;
//$Event,$each

// ��ҳ����ͼ


     function Carousel (slid) {



        var data=$(slid).attr("data-widget-config");
        var config=$parseJSON(data)     
        var sWidth = $(slid).width(); // $(slid).width(); //��ȡ����ͼ�Ŀ�ȣ���ʾ�����
        var sHeight = $(slid).height(); // $(slid).width(); //��ȡ����ͼ�Ŀ�ȣ���ʾ�����
        var len = $(slid + " ."+config.contentCls).children().length(); //��ȡ����ͼ����
        
        $(slid + " ."+config.contentCls).css({"position":"relective","width":sWidth,"height":sHeight});
        $(slid + " ."+config.contentCls).children().css("position", "absolute");

        var index = 0;
        var picTimer;

        //���´���������ְ�ť�Ͱ�ť��İ�͸������������һҳ����һҳ������ť
     

        //ΪС��ť�����껬���¼�������ʾ��Ӧ������
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

        //��һҳ����һҳ��ť͸���ȴ���
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

        //��һҳ��ť
         $(slid + " ." +config.prevBtnCls).click(function() {
            index -= 1;
            if (index == -1) { index = len - 1; }
            showPics(index); 
        });

        //��һҳ��ť
         $(slid + " ." +config.nextBtnCls).click(function() {
            index += 1;
            if (index == len) { index = 0; }
            showPics(index);
        });

       
        //��껬�Ͻ���ͼʱֹͣ�Զ����ţ�����ʱ��ʼ�Զ�����
        if(config.autoplay=="true"){
        $(slid).hover(function() {
            clearInterval(picTimer);
        }, function() {
            picTimer = setInterval(function() {
                showPics(index);
                index++;
                if (index == len) { index = 0; }
            }, config.interval); //��4000�����Զ����ŵļ������λ������
        }).trigger("mouseleave");}

        //��ʾͼƬ���������ݽ��յ�indexֵ��ʾ��Ӧ������
        function showPics(index) { //��ͨ�л�
            var nowLeft = -index * sWidth; //����indexֵ����ulԪ�ص�leftֵ
            
             $(slid + " ."+config.contentCls).children().eq(index).stop(true, false).animate({ "z-index": "2","opacity":1 }, 300).siblings().animate({ "z-index": "1","opacity":0 }, 300); //ͨ��animate()����ulԪ�ع������������position
            $(slid + " ."+config.navCls).children().removeClass("on").eq(index).addClass("on"); //Ϊ��ǰ�İ�ť�л���ѡ�е�Ч��
             $(slid + " ."+config.navCls).children().stop(true, false).animate({ "opacity": "0.9","z-index":"10" }, 300).eq(index).stop(true, false).animate({ "opacity": "1","z-index":"10" }, 300); //Ϊ��ǰ�İ�ť�л���ѡ�е�Ч��
        }

    };





//���Ϲ�������
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

//TAB�л�
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


