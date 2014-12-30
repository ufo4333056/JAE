console.log('ÎÒµÄ...');

KISSY.io({
  url: "test.html",
  cache: false,
  success: function(html){
    KISSY.all(".msg").html(html);
  }
});


var S = KISSY, D = S.DOM, E = S.Event;

var anim = new KISSY.LayerAnim([
    {
        node: '.prize-1',form: {left: 0,  top: 0 },
        to: {  left: 123, top: 0  },
        duration: 0.3, align: "sequence",
    },
     {
        node: '.prize-2',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-3',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-4',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-5',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 105  },
        duration: 0.3, 
    },
      {
        node: '.prize-6',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-7',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-8',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-9',form: { left: 0,  top: 0  },
        to: {     left: 123, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-10',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-11',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 105  },
        duration: 0.3, 
    },  {
        node: '.prize-12',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 0  },
        duration: 0.3, 
    },[
     {
        node: '.prize-12',form: {left: 0,  top: 0 },
        to: {  left: 123, top: 0  },
        duration: 0.3, align: "sequence",
    },
     {
        node: '.prize-1',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-2',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-3',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-4',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 105  },
        duration: 0.3, 
    },
      {
        node: '.prize-5',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-6',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-7',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-8',form: { left: 0,  top: 0  },
        to: {     left: 123, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-9',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-10',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 105  },
        duration: 0.3, 
    },  {
        node: '.prize-11',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 0  },
        duration: 0.3, 
    },[

    {
        node: '.prize-11',form: {left: 0,  top: 0 },
        to: {  left: 123, top: 0  },
        duration: 0.3, align: "sequence",
    },
     {
        node: '.prize-12',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-1',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-2',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-3',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 105  },
        duration: 0.3, 
    },
      {
        node: '.prize-4',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-5',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-6',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-7',form: { left: 0,  top: 0  },
        to: {     left: 123, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-8',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-9',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 105  },
        duration: 0.3, 
    },  {
        node: '.prize-10',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 0  },
        duration: 0.3, 
    },[
{
        node: '.prize-10',form: {left: 0,  top: 0 },
        to: {  left: 123, top: 0  },
        duration: 0.3, align: "sequence",
    },
     {
        node: '.prize-11',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-12',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-1',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-2',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 105  },
        duration: 0.3, 
    },
      {
        node: '.prize-3',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-4',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-5',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-6',form: { left: 0,  top: 0  },
        to: {     left: 123, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-7',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-8',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 105  },
        duration: 0.3, 
    },  {
        node: '.prize-9',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 0  },
        duration: 0.3, 
    },[
    {
        node: '.prize-9',form: {left: 0,  top: 0 },
        to: {  left: 123, top: 0  },
        duration: 0.3, align: "sequence",
    },
     {
        node: '.prize-10',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-11',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-12',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 0  },
        duration: 0.3, 
    },
      {
        node: '.prize-1',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 105  },
        duration: 0.3, 
    },
      {
        node: '.prize-2',form: { left: 0,  top: 0  },
        to: {     left: 496, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-3',form: { left: 0,  top: 0  },
        to: {     left: 369, top: 210  },
        duration: 0.3, 
    },
      {
        node: '.prize-4',form: { left: 0,  top: 0  },
        to: {     left: 246, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-5',form: { left: 0,  top: 0  },
        to: {     left: 123, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-6',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 210  },
        duration: 0.3, 
    },  {
        node: '.prize-7',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 105  },
        duration: 0.3, 
    },  {
        node: '.prize-8',form: { left: 0,  top: 0  },
        to: {     left: 0, top: 0  },
        duration: 0.3, 
    },[

     {
        node: '.msg',form: { left: 0,  top: 0 , height:0 , opacity: 0.2 , },
        to: {     left: 0, top: 0, height : 315 , opacity: 0.95 ,  },
        duration: 0.3, 
    },


    ]
    ]
    ]
    ]

    ]
   
    
]);

var msg = D.get('.msg');


// event
anim.on('start', function() {
    //msg.innerHTML = 'anim start ...';
});

anim.on('update', function() {
   // msg.innerHTML = 'anim update ... ';
});

anim.on('end', function() {
  //  msg.innerHTML = 'anim end ...';
});

// method
E.on('.run', 'click', function() {
    anim.run();
});


 anim.run();

