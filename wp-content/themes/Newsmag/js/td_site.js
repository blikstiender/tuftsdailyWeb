
// jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a+c:-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a+c:
    b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a+c:-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a*a+c:b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,a,c,b,d){return-b*Math.cos(a/
    d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return 0==a?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){return 0==a?c:a==d?c+b:1>(a/=d/2)?b/2*Math.pow(2,10*(a-1))+c:b/2*(-Math.pow(2,-10*--a)+2)+c},easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*
    a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){return 1>(a/=d/2)?-b/2*(Math.sqrt(1-a*a)-1)+c:b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==
    (a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(2==(a/=d/2))return c+b;f||(f=d*0.3*1.5);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return 1>a?-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c:0.5*g*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInBack:function(e,a,c,b,d,f){void 0==
    f&&(f=1.70158);return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return 1>(a/=d/2)?b/2*a*a*(((f*=1.525)+1)*a-f)+c:b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?
    b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){return a<d/2?0.5*jQuery.easing.easeInBounce(e,2*a,0,b,d)+c:0.5*jQuery.easing.easeOutBounce(e,2*a-d,0,b,d)+0.5*b+c}});



/*
 *  v0.2b - jQuery plugin
 * Copyright (c) 2008 Joel Birch
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 */
(function(a){a.fn.supersubs=function(h){var f=a.extend({},a.fn.supersubs.defaults,h);return this.each(function(){var c=a(this),d=a.meta?a.extend({},f,c.data()):f,h=a('<li id="menu-fontsize">&#8212;</li>').css({padding:0,position:"absolute",top:"-999em",width:"auto"}).appendTo(c).width();a("#menu-fontsize").remove();$ULs=c.find("ul");$ULs.each(function(e){e=$ULs.eq(e);var g=e.children(),c=g.children("a"),f=g.css("white-space","nowrap").css("float"),b=e.add(g).add(c).css({"float":"none",width:"auto"}).end().end()[0].clientWidth/
    h,b=b+d.extraWidth;b>d.maxWidth?b=d.maxWidth:b<d.minWidth&&(b=d.minWidth);b+="em";e.css("width",b);g.css({"float":f,width:"100%","white-space":"normal"}).each(function(){var c=a(">ul",this),d=void 0!==c.css("left")?"left":"right";c.css(d,b)})})})};a.fn.supersubs.defaults={minWidth:9,maxWidth:25,extraWidth:0}})(jQuery);



/**
 * hoverIntent is similar to jQuery's built-in "hover" method except that
 * instead of firing the handlerIn function immediately, hoverIntent checks
 * to see if the user's mouse has slowed down (beneath the sensitivity
 * threshold) before firing the event. The handlerOut function is only
 * called after a matching handlerIn.
 *
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 */
(function(e){e.fn.hoverIntent=function(a,f,n){var b={interval:100,sensitivity:7,timeout:0},b="object"===typeof a?e.extend(b,a):e.isFunction(f)?e.extend(b,{over:a,out:f,selector:n}):e.extend(b,{over:a,out:a,selector:f}),g,h,j,k,l=function(b){g=b.pageX;h=b.pageY},m=function(a,d){d.hoverIntent_t=clearTimeout(d.hoverIntent_t);if(Math.abs(j-g)+Math.abs(k-h)<b.sensitivity)return e(d).off("mousemove.hoverIntent",l),d.hoverIntent_s=1,b.over.apply(d,[a]);j=g;k=h;d.hoverIntent_t=setTimeout(function(){m(a,d)},
    b.interval)};a=function(a){var d=jQuery.extend({},a),c=this;c.hoverIntent_t&&(c.hoverIntent_t=clearTimeout(c.hoverIntent_t));"mouseenter"==a.type?(j=d.pageX,k=d.pageY,e(c).on("mousemove.hoverIntent",l),1!=c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){m(d,c)},b.interval))):(e(c).off("mousemove.hoverIntent",l),1==c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){c.hoverIntent_t=clearTimeout(c.hoverIntent_t);c.hoverIntent_s=0;b.out.apply(c,[d])},b.timeout)))};return this.on({"mouseenter.hoverIntent":a,
    "mouseleave.hoverIntent":a},b.selector)}})(jQuery);

/*
 * Superfish v1.5.13 - jQuery menu widget
 * Copyright (c) 2013 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 */
(function(c){c.fn.superfish=function(d){var f=c.fn.superfish,a=f.c,g=c('<i class="'+a.arrowClass+'"></i>'),h=function(){var e=c(this),b=l(e);clearTimeout(b.sfTimer);e.showSuperfishUl().siblings().hideSuperfishUl()},j=function(e){var b=c(this),d=l(b),a=f.op,g=function(){a.retainPath=-1<c.inArray(b[0],a.$path);b.hideSuperfishUl();a.$path.length&&1>b.parents("li."+a.hoverClass).length&&(a.onIdle.call(),c.proxy(h,a.$path,e)())};"click"===e.type?g():(clearTimeout(d.sfTimer),d.sfTimer=setTimeout(g,
    a.delay))},l=function(e){e.hasClass(a.menuClass)&&c.error("Superfish requires you to update to a version of hoverIntent that supports event-delegation, such as this one: https://github.com/joeldbirch/onHoverIntent");e=e.closest("."+a.menuClass)[0];f.op=f.o[e.serial];return e},n=function(e){var b=c(this),a=b.siblings("ul");if(0<a.length&&!a.is(":visible")&&(b.data("follow",!1),"MSPointerDown"===e.type))return b.trigger("focus"),!1},p=function(a){var b=c(this),d=b.siblings("ul"),g=!1===b.data("follow")?
    !1:!0;if(d.length&&(f.op.useClick||!g))a.preventDefault(),d.is(":visible")?f.op.useClick&&g&&c.proxy(j,b.parent("li"),a)():c.proxy(h,b.parent("li"))()};return this.addClass(a.menuClass).each(function(){var e=this.serial=f.o.length,b=c.extend({},f.defaults,d),k=c(this),l=k.find("li:has(ul)");b.$path=k.find("li."+b.pathClass).slice(0,b.pathLevels).each(function(){c(this).addClass(b.hoverClass+" "+a.bcClass).filter("li:has(ul)").removeClass(b.pathClass)});f.o[e]=f.op=b;b.autoArrows&&l.children("a").each(function(){c(this).addClass(a.anchorClass).append(g.clone())});
    k.css("ms-touch-action","none");if(!f.op.useClick)if(c.fn.hoverIntent&&!f.op.disableHI)k.hoverIntent(h,j,"li:has(ul)");else k.on("mouseenter","li:has(ul)",h).on("mouseleave","li:has(ul)",j);e="MSPointerDown";navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/)||(e+=" touchstart");k.on("focusin","li",h).on("focusout","li",j).on("click","a",p).on(e,"a",n);l.not("."+a.bcClass).children("ul").show().hide();b.onInit.call(this)})};var g=c.fn.superfish;g.o=[];g.op={};g.c={bcClass:"sf-breadcrumb",
    menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"td-icon-menu-down"};g.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",autoArrows:!0,disableHI:!1,useClick:!1,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){},onIdle:function(){}};c.fn.extend({hideSuperfishUl:function(){var d=g.op,f=this,a=!0===d.retainPath?d.$path:"";d.retainPath=
    !1;c("li."+d.hoverClass,this).add(this).not(a).children("ul").stop(!0,!0).animate(d.animationOut,d.speedOut,function(){$ul=c(this);$ul.parent().removeClass(d.hoverClass);d.onHide.call($ul);g.op.useClick&&f.children("a").data("follow",!1)});return this},showSuperfishUl:function(){var d=g.op,f=this,a=this.children("ul");f.addClass(d.hoverClass);d.onBeforeShow.call(a);a.stop(!0,!0).animate(d.animation,d.speed,function(){d.onShow.call(a);f.children("a").data("follow",!0)});var m=c(window).width(),h=this.children("ul").first();
    if(0<h.length){var j=this.children("ul").first().offset().left+h.width();j>m&&(h.parent().parent().hasClass("sf-menu")?h.css("left","-"+(j-m)+"px"):h.addClass("reversed").css("left","-"+(h.width()+0)+"px"))}return this}})})(jQuery);



/*
 * iosSlider - http://iosscripts.com/iosslider/
 */
(function(b){var oa=0,X=0,fa=0,T=0,Ca="ontouchstart"in window||0<navigator.msMaxTouchPoints,Da="onorientationchange"in window,ga=!1,aa=!1,Y=!1,pa=!1,ia=!1,ba="pointer",ua="pointer",ja=[],J=[],va=[],$=[],z=[],ca=[],B=[],m=[],s=[],wa=[],da=[],e={showScrollbar:function(a,e){a.scrollbarHide&&b("."+e).css({opacity:a.scrollbarOpacity,filter:"alpha(opacity:"+100*a.scrollbarOpacity+")"})},hideScrollbar:function(b,g,c,f,h,d,m,s,B,z){if(b.scrollbar&&b.scrollbarHide)for(var t=c;t<c+25;t++)g[g.length]=e.hideScrollbarIntervalTimer(10* t,f[c],(c+24-t)/24,h,d,m,s,B,z,b)},hideScrollbarInterval:function(a,g,c,f,h,d,m,B,z){T=-1*a/s[B]*(h-d-m-f);e.setSliderOffset("."+c,T);b("."+c).css({opacity:z.scrollbarOpacity*g,filter:"alpha(opacity:"+z.scrollbarOpacity*g*100+")"})},slowScrollHorizontalInterval:function(a,g,c,f,h,d,N,O,L,K,t,w,x,y,v,q,G,p,n){if(n.infiniteSlider){if(c<=-1*s[q]){var r=b(a).width();if(c<=-1*wa[q]){var u=-1*t[0];b(g).each(function(c){e.setSliderOffset(b(g)[c],u+G);c<w.length&&(w[c]=-1*u);u+=v[c]});c+=-1*w[0];m[q]=-1* w[0]+G;s[q]=m[q]+r-d;B[q]=0}else{var k=0,E=e.getSliderOffset(b(g[0]),"x");b(g).each(function(b){e.getSliderOffset(this,"x")<E&&(E=e.getSliderOffset(this,"x"),k=b)});x=m[q]+r;e.setSliderOffset(b(g)[k],x);m[q]=-1*w[1]+G;s[q]=m[q]+r-d;w.splice(0,1);w.splice(w.length,0,-1*x+G);B[q]++}}if(c>=-1*m[q]||0<=c){r=b(a).width();if(0<c)for(u=-1*t[0],b(g).each(function(c){e.setSliderOffset(b(g)[c],u+G);c<w.length&&(w[c]=-1*u);u+=v[c]}),c-=-1*w[0],m[q]=-1*w[0]+G,s[q]=m[q]+r-d,B[q]=y;0<-1*w[0]-r+G;){var A=0,I=e.getSliderOffset(b(g[0]), "x");b(g).each(function(b){e.getSliderOffset(this,"x")>I&&(I=e.getSliderOffset(this,"x"),A=b)});x=m[q]-v[A];e.setSliderOffset(b(g)[A],x);w.splice(0,0,-1*x+G);w.splice(w.length-1,1);m[q]=-1*w[0]+G;s[q]=m[q]+r-d;B[q]--;z[q]++}0>c&&(A=0,I=e.getSliderOffset(b(g[0]),"x"),b(g).each(function(b){e.getSliderOffset(this,"x")>I&&(I=e.getSliderOffset(this,"x"),A=b)}),x=m[q]-v[A],e.setSliderOffset(b(g)[A],x),w.splice(0,0,-1*x+G),w.splice(w.length-1,1),m[q]=-1*w[0]+G,s[q]=m[q]+r-d,B[q]--)}}t=!1;d=e.calcActiveOffset(n, c,w,d,B[q],y,K,q);x=(d+B[q]+y)%y;n.infiniteSlider?x!=ca[q]&&(t=!0):d!=z[q]&&(t=!0);if(t&&(y=new e.args("change",n,a,b(a).children(":eq("+x+")"),x,p),b(a).parent().data("args",y),""!=n.onSlideChange))n.onSlideChange(y);z[q]=d;ca[q]=x;c=Math.floor(c);e.setSliderOffset(a,c);n.scrollbar&&(T=Math.floor((-1*c-m[q]+G)/(s[q]-m[q]+G)*(N-O-h)),a=h-L,c>=-1*m[q]+G?(a=h-L- -1*T,e.setSliderOffset(b("."+f),0)):(c<=-1*s[q]+1&&(a=N-O-L-T),e.setSliderOffset(b("."+f),T)),b("."+f).css({width:a+"px"}))},slowScrollHorizontal:function(a, g,c,f,h,d,N,O,L,K,t,w,x,y,v,q,G,p,n,r,u){var k=e.getSliderOffset(a,"x");d=[];var E=0,A=25/1024*O;frictionCoefficient=u.frictionCoefficient;elasticFrictionCoefficient=u.elasticFrictionCoefficient;snapFrictionCoefficient=u.snapFrictionCoefficient;h>u.snapVelocityThreshold&&u.snapToChildren&&!n?E=1:h<-1*u.snapVelocityThreshold&&u.snapToChildren&&!n&&(E=-1);h<-1*A?h=-1*A:h>A&&(h=A);b(a)[0]!==b(p)[0]&&(E*=-1,h*=-2);p=B[v];if(u.infiniteSlider)var I=m[v],l=s[v];n=[];for(var A=[],F=0;F<x.length;F++)n[F]= x[F],F<g.length&&(A[F]=e.getSliderOffset(b(g[F]),"x"));for(;1<h||-1>h;){h*=frictionCoefficient;k+=h;(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider&&(h*=elasticFrictionCoefficient,k+=h);if(u.infiniteSlider){if(k<=-1*l){for(var l=b(a).width(),J=0,P=A[0],F=0;F<A.length;F++)A[F]<P&&(P=A[F],J=F);F=I+l;A[J]=F;I=-1*n[1]+r;l=I+l-O;n.splice(0,1);n.splice(n.length,0,-1*F+r);p++}if(k>=-1*I){l=b(a).width();J=0;P=A[0];for(F=0;F<A.length;F++)A[F]>P&&(P=A[F],J=F);F=I-y[J];A[J]=F;n.splice(0,0,-1*F+r);n.splice(n.length- 1,1);I=-1*n[0]+r;l=I+l-O;p--}}d[d.length]=k}A=!1;h=e.calcActiveOffset(u,k,n,O,p,G,z[v],v);I=(h+p+G)%G;u.snapToChildren&&(u.infiniteSlider?I!=ca[v]&&(A=!0):h!=z[v]&&(A=!0),0>E&&!A?(h++,h>=x.length&&!u.infiniteSlider&&(h=x.length-1)):0<E&&!A&&(h--,0>h&&!u.infiniteSlider&&(h=0)));if(u.snapToChildren||(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider){(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider?d.splice(0,d.length):(d.splice(0.1*d.length,d.length),k=0<d.length?d[d.length-1]:k);for(;k<n[h]-0.5||k>n[h]+0.5;)k=(k- n[h])*snapFrictionCoefficient+n[h],d[d.length]=k;d[d.length]=n[h]}E=1;0!=d.length%2&&(E=0);for(k=0;k<c.length;k++)clearTimeout(c[k]);p=(h+p+G)%G;I=0;for(k=E;k<d.length;k+=2)if(k==E||1<Math.abs(d[k]-I)||k>=d.length-2)I=d[k],c[c.length]=e.slowScrollHorizontalIntervalTimer(10*k,a,g,d[k],f,N,O,L,K,t,h,w,x,q,G,y,v,r,p,u);I=(h+B[v]+G)%G;""!=u.onSlideComplete&&1<d.length&&(c[c.length]=e.onSlideCompleteTimer(10*(k+1),u,a,b(a).children(":eq("+I+")"),p,v));$[v]=c;e.hideScrollbar(u,c,k,d,f,N,O,K,t,v)},onSlideComplete:function(a, g,c,f,h){c=new e.args("complete",a,b(g),c,f,f);b(g).parent().data("args",c);if(""!=a.onSlideComplete)a.onSlideComplete(c)},getSliderOffset:function(a,e){var c=0;e="x"==e?4:5;if(!ga||aa||Y)c=parseInt(b(a).css("left"),10);else{for(var c=["-webkit-transform","-moz-transform","transform"],f,h=0;h<c.length;h++)if(void 0!=b(a).css(c[h])&&0<b(a).css(c[h]).length){f=b(a).css(c[h]).split(",");break}c=void 0==f[e]?0:parseInt(f[e],10)}return c},setSliderOffset:function(a,e){e=parseInt(e,10);!ga||aa||Y?b(a).css({left:e+ "px"}):b(a).css({msTransform:"matrix(1,0,0,1,"+e+",0)",webkitTransform:"matrix(1,0,0,1,"+e+",0)",MozTransform:"matrix(1,0,0,1,"+e+",0)",transform:"matrix(1,0,0,1,"+e+",0)"})},setBrowserInfo:function(){null!=navigator.userAgent.match("WebKit")?(ba="-webkit-grab",ua="-webkit-grabbing"):null!=navigator.userAgent.match("Gecko")?(ia=!0,ba="move",ua="-moz-grabbing"):null!=navigator.userAgent.match("MSIE 7")?pa=aa=!0:null!=navigator.userAgent.match("MSIE 8")?pa=Y=!0:null!=navigator.userAgent.match("MSIE 9")&& (pa=!0)},has3DTransform:function(){var a=!1,e=b("<div />").css({msTransform:"matrix(1,1,1,1,1,1)",webkitTransform:"matrix(1,1,1,1,1,1)",MozTransform:"matrix(1,1,1,1,1,1)",transform:"matrix(1,1,1,1,1,1)"});""==e.attr("style")?a=!1:ia&&21<=parseInt(navigator.userAgent.split("/")[3],10)?a=!1:void 0!=e.attr("style")&&(a=!0);return a},getSlideNumber:function(b,e,c){return(b-B[e]+c)%c},calcActiveOffset:function(b,e,c,f,h,d,m,s){h=!1;b=[];var z;e>c[0]&&(z=0);e<c[c.length-1]&&(z=d-1);for(d=0;d<c.length;d++)c[d]<= e&&c[d]>e-f&&(h||c[d]==e||(b[b.length]=c[d-1]),b[b.length]=c[d],h=!0);0==b.length&&(b[0]=c[c.length-1]);for(d=h=0;d<b.length;d++)m=Math.abs(e-b[d]),m<f&&(h=b[d],f=m);for(d=0;d<c.length;d++)h==c[d]&&(z=d);return z},changeSlide:function(a,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G,p){e.autoSlidePause(y);for(var n=0;n<f.length;n++)clearTimeout(f[n]);var r=Math.ceil(p.autoSlideTransTimer/10)+1,u=e.getSliderOffset(g,"x"),k=w[a],E=k-u;if(p.infiniteSlider)for(a=(a-B[y]+2*q)%q,n=!1,0==a&&2==q&&(a=q,w[a]=w[a-1]-b(c).eq(0).outerWidth(!0), n=!0),k=w[a],E=k-u,k=[w[a]-b(g).width(),w[a]+b(g).width()],n&&w.splice(w.length-1,1),n=0;n<k.length;n++)Math.abs(k[n]-u)<Math.abs(E)&&(E=k[n]-u);var k=[],A;e.showScrollbar(p,h);for(n=0;n<=r;n++)A=n,A/=r,A--,A=u+E*(Math.pow(A,5)+1),k[k.length]=A;r=(a+B[y]+q)%q;for(n=u=0;n<k.length;n++){if(0==n||1<Math.abs(k[n]-u)||n>=k.length-2)u=k[n],f[n]=e.slowScrollHorizontalIntervalTimer(10*(n+1),g,c,k[n],h,d,m,s,L,K,a,t,w,v,q,x,y,G,r,p);0==n&&""!=p.onSlideStart&&(E=(z[y]+B[y]+q)%q,p.onSlideStart(new e.args("start", p,g,b(g).children(":eq("+E+")"),E,a)))}u=!1;p.infiniteSlider?r!=ca[y]&&(u=!0):a!=z[y]&&(u=!0);u&&""!=p.onSlideComplete&&(f[f.length]=e.onSlideCompleteTimer(10*(n+1),p,g,b(g).children(":eq("+r+")"),r,y));$[y]=f;e.hideScrollbar(p,f,n,k,h,d,m,L,K,y);e.autoSlide(g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G,p)},autoSlide:function(b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G){if(!J[x].autoSlide)return!1;e.autoSlidePause(x);ja[x]=setTimeout(function(){!G.infiniteSlider&&z[x]>t.length-1&&(z[x]-=v);e.changeSlide((z[x]+B[x]+t.length+ 1)%t.length,b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G);e.autoSlide(b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G)},G.autoSlideTimer+G.autoSlideTransTimer)},autoSlidePause:function(b){clearTimeout(ja[b])},isUnselectable:function(a,e){return""!=e.unselectableSelector&&1==b(a).closest(e.unselectableSelector).length?!0:!1},slowScrollHorizontalIntervalTimer:function(b,g,c,f,h,d,m,s,z,B,t,w,x,y,v,q,G,p,n,r){return setTimeout(function(){e.slowScrollHorizontalInterval(g,c,f,h,d,m,s,z,B,t,w,x,y,v,q,G,p,n,r)},b)},onSlideCompleteTimer:function(b, g,c,f,h,d){return setTimeout(function(){e.onSlideComplete(g,c,f,h,d)},b)},hideScrollbarIntervalTimer:function(b,g,c,f,h,d,m,s,z,B){return setTimeout(function(){e.hideScrollbarInterval(g,c,f,h,d,m,s,z,B)},b)},args:function(a,g,c,f,h,d){this.prevSlideNumber=void 0==b(c).parent().data("args")?void 0:b(c).parent().data("args").prevSlideNumber;this.prevSlideObject=void 0==b(c).parent().data("args")?void 0:b(c).parent().data("args").prevSlideObject;this.targetSlideNumber=d+1;this.targetSlideObject=b(c).children(":eq("+ d+")");this.slideChanged=!1;"load"==a?this.targetSlideObject=this.targetSlideNumber=void 0:"start"==a?this.targetSlideObject=this.targetSlideNumber=void 0:"change"==a?(this.slideChanged=!0,this.prevSlideNumber=void 0==b(c).parent().data("args")?g.startAtSlide:b(c).parent().data("args").currentSlideNumber,this.prevSlideObject=b(c).children(":eq("+this.prevSlideNumber+")")):"complete"==a&&(this.slideChanged=b(c).parent().data("args").slideChanged);this.settings=g;this.data=b(c).parent().data("iosslider"); this.sliderObject=c;this.sliderContainerObject=b(c).parent();this.currentSlideObject=f;this.currentSlideNumber=h+1;this.currentSliderOffset=-1*e.getSliderOffset(c,"x")},preventDrag:function(b){b.preventDefault()},preventClick:function(b){b.stopImmediatePropagation();return!1},enableClick:function(){return!0}};e.setBrowserInfo();var V={init:function(a,g){ga=e.has3DTransform();var c=b.extend(!0,{elasticPullResistance:0.6,frictionCoefficient:0.92,elasticFrictionCoefficient:0.6,snapFrictionCoefficient:0.92, snapToChildren:!1,snapSlideCenter:!1,startAtSlide:1,scrollbar:!1,scrollbarDrag:!1,scrollbarHide:!0,scrollbarLocation:"top",scrollbarContainer:"",scrollbarOpacity:0.4,scrollbarHeight:"4px",scrollbarBorder:"0",scrollbarMargin:"5px",scrollbarBackground:"#000",scrollbarBorderRadius:"100px",scrollbarShadow:"0 0 0 #000",scrollbarElasticPullResistance:0.9,desktopClickDrag:!1,keyboardControls:!1,tabToAdvance:!1,responsiveSlideContainer:!0,responsiveSlides:!0,navSlideSelector:"",navPrevSelector:"",navNextSelector:"", autoSlideToggleSelector:"",autoSlide:!1,autoSlideTimer:5E3,autoSlideTransTimer:750,autoSlideHoverPause:!0,infiniteSlider:!1,snapVelocityThreshold:5,slideStartVelocityThreshold:0,horizontalSlideLockThreshold:5,verticalSlideLockThreshold:3,stageCSS:{position:"relative",top:"0",left:"0",overflow:"hidden",zIndex:1},unselectableSelector:"",onSliderLoaded:"",onSliderUpdate:"",onSliderResize:"",onSlideStart:"",onSlideChange:"",onSlideComplete:""},a);void 0==g&&(g=this);return b(g).each(function(a){function g(){e.autoSlidePause(d); xa=b(C).find("a");ja=b(C).find("[onclick]");qa=b(C).find("*");b(n).css("width","");b(n).css("height","");b(C).css("width","");D=b(C).children().not("script").get();ha=[];M=[];c.responsiveSlides&&b(D).css("width","");s[d]=0;l=[];q=b(n).parent().width();r=b(n).outerWidth(!0);c.responsiveSlideContainer&&(r=b(n).outerWidth(!0)>q?q:b(n).width());b(n).css({position:c.stageCSS.position,top:c.stageCSS.top,left:c.stageCSS.left,overflow:c.stageCSS.overflow,zIndex:c.stageCSS.zIndex,webkitPerspective:1E3,webkitBackfaceVisibility:"hidden", msTouchAction:"pan-y",width:r});b(c.unselectableSelector).css({cursor:"default"});for(var a=0;a<D.length;a++){ha[a]=b(D[a]).width();M[a]=b(D[a]).outerWidth(!0);var h=M[a];c.responsiveSlides&&(M[a]>r?(h=r+-1*(M[a]-ha[a]),ha[a]=h,M[a]=r):h=ha[a],b(D[a]).css({width:h}));b(D[a]).css({webkitBackfaceVisibility:"hidden",overflow:"hidden",position:"absolute"});l[a]=-1*s[d];s[d]=s[d]+h+(M[a]-ha[a])}c.snapSlideCenter&&(p=0.5*(r-M[0]),c.responsiveSlides&&M[0]>r&&(p=0));wa[d]=2*s[d];for(a=0;a<D.length;a++)e.setSliderOffset(b(D[a]), -1*l[a]+s[d]+p),l[a]-=s[d];if(!c.infiniteSlider&&!c.snapSlideCenter){for(a=0;a<l.length&&!(l[a]<=-1*(2*s[d]-r));a++)ia=a;l.splice(ia+1,l.length);l[l.length]=-1*(2*s[d]-r)}for(a=0;a<l.length;a++)F[a]=l[a];I&&(J[d].startAtSlide=J[d].startAtSlide>l.length?l.length:J[d].startAtSlide,c.infiniteSlider?(J[d].startAtSlide=(J[d].startAtSlide-1+H)%H,z[d]=J[d].startAtSlide):(J[d].startAtSlide=0>J[d].startAtSlide-1?l.length-1:J[d].startAtSlide,z[d]=J[d].startAtSlide-1),ca[d]=z[d]);m[d]=s[d]+p;b(C).css({position:"relative", cursor:ba,webkitPerspective:"0",webkitBackfaceVisibility:"hidden",width:s[d]+"px"});R=s[d];s[d]=2*s[d]-r+2*p;(W=R+p<r||0==r?!0:!1)&&b(C).css({cursor:"default"});G=b(n).parent().outerHeight(!0);u=b(n).height();c.responsiveSlideContainer&&(u=u>G?G:u);b(n).css({height:u});e.setSliderOffset(C,l[z[d]]);if(c.infiniteSlider&&!W){a=e.getSliderOffset(b(C),"x");for(h=(B[d]+H)%H*-1;0>h;){var f=0,A=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")<A&&(A=e.getSliderOffset(this,"x"), f=b)});var L=m[d]+R;e.setSliderOffset(b(D)[f],L);m[d]=-1*l[1]+p;s[d]=m[d]+R-r;l.splice(0,1);l.splice(l.length,0,-1*L+p);h++}for(;0<-1*l[0]-R+p&&c.snapSlideCenter&&I;){var O=0,P=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")>P&&(P=e.getSliderOffset(this,"x"),O=b)});L=m[d]-M[O];e.setSliderOffset(b(D)[O],L);l.splice(0,0,-1*L+p);l.splice(l.length-1,1);m[d]=-1*l[0]+p;s[d]=m[d]+R-r;B[d]--;z[d]++}for(;a<=-1*s[d];)f=0,A=e.getSliderOffset(b(D[0]),"x"),b(D).each(function(b){e.getSliderOffset(this, "x")<A&&(A=e.getSliderOffset(this,"x"),f=b)}),L=m[d]+R,e.setSliderOffset(b(D)[f],L),m[d]=-1*l[1]+p,s[d]=m[d]+R-r,l.splice(0,1),l.splice(l.length,0,-1*L+p),B[d]++,z[d]--}e.setSliderOffset(C,l[z[d]]);c.desktopClickDrag||b(C).css({cursor:"default"});c.scrollbar&&(b("."+K).css({margin:c.scrollbarMargin,overflow:"hidden",display:"none"}),b("."+K+" ."+t).css({border:c.scrollbarBorder}),k=parseInt(b("."+K).css("marginLeft"))+parseInt(b("."+K).css("marginRight")),E=parseInt(b("."+K+" ."+t).css("borderLeftWidth"), 10)+parseInt(b("."+K+" ."+t).css("borderRightWidth"),10),y=""!=c.scrollbarContainer?b(c.scrollbarContainer).width():r,v=r/R*(y-k),c.scrollbarHide||(V=c.scrollbarOpacity),b("."+K).css({position:"absolute",left:0,width:y-k+"px",margin:c.scrollbarMargin}),"top"==c.scrollbarLocation?b("."+K).css("top","0"):b("."+K).css("bottom","0"),b("."+K+" ."+t).css({borderRadius:c.scrollbarBorderRadius,background:c.scrollbarBackground,height:c.scrollbarHeight,width:v-E+"px",minWidth:c.scrollbarHeight,border:c.scrollbarBorder, webkitPerspective:1E3,webkitBackfaceVisibility:"hidden",position:"relative",opacity:V,filter:"alpha(opacity:"+100*V+")",boxShadow:c.scrollbarShadow}),e.setSliderOffset(b("."+K+" ."+t),Math.floor((-1*l[z[d]]-m[d]+p)/(s[d]-m[d]+p)*(y-k-v))),b("."+K).css({display:"block"}),w=b("."+K+" ."+t),x=b("."+K));c.scrollbarDrag&&!W&&b("."+K+" ."+t).css({cursor:ba});c.infiniteSlider&&(S=(s[d]+r)/3);""!=c.navSlideSelector&&b(c.navSlideSelector).each(function(a){b(this).css({cursor:"pointer"});b(this).unbind(Q).bind(Q, function(g){"touchstart"==g.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=g.type+".iosSliderEvent";e.changeSlide(a,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)})});""!=c.navPrevSelector&&(b(c.navPrevSelector).css({cursor:"pointer"}),b(c.navPrevSelector).unbind(Q).bind(Q,function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";a=(z[d]+B[d]+H)%H;(0<a||c.infiniteSlider)&&e.changeSlide(a- 1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)}));""!=c.navNextSelector&&(b(c.navNextSelector).css({cursor:"pointer"}),b(c.navNextSelector).unbind(Q).bind(Q,function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";a=(z[d]+B[d]+H)%H;(a<l.length-1||c.infiniteSlider)&&e.changeSlide(a+1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)}));c.autoSlide&&!W&&""!=c.autoSlideToggleSelector&&(b(c.autoSlideToggleSelector).css({cursor:"pointer"}),b(c.autoSlideToggleSelector).unbind(Q).bind(Q, function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";ka?(e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c),ka=!1,b(c.autoSlideToggleSelector).removeClass("on")):(e.autoSlidePause(d),ka=!0,b(c.autoSlideToggleSelector).addClass("on"))}));e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c);b(n).bind("mouseleave.iosSliderEvent",function(){if(ka)return!0;e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});b(n).bind("touchend.iosSliderEvent", function(){if(ka)return!0;e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});c.autoSlideHoverPause&&b(n).bind("mouseenter.iosSliderEvent",function(){e.autoSlidePause(d)});b(n).data("iosslider",{obj:Ba,settings:c,scrollerNode:C,slideNodes:D,numberOfSlides:H,centeredSlideOffset:p,sliderNumber:d,originalOffsets:F,childrenOffsets:l,sliderMax:s[d],scrollbarClass:t,scrollbarWidth:v,scrollbarStageWidth:y,stageWidth:r,scrollMargin:k,scrollBorder:E,infiniteSliderOffset:B[d],infiniteSliderWidth:S,slideNodeOuterWidths:M, shortContent:W});I=!1;return!0}oa++;var d=oa,N=[];J[d]=b.extend({},c);m[d]=0;s[d]=0;var O=[0,0],L=[0,0],K="scrollbarBlock"+oa,t="scrollbar"+oa,w,x,y,v,q,G,p=0,n=b(this),r,u,k,E,A,I=!0;a=-1;var l,F=[],V=0,P=0,ga=0,C=b(this).children(":first-child"),D,ha,M,H=b(C).children().not("script").length,U=!1,ia=0,ya=!1,ra=void 0,S;B[d]=0;var W=!1,ka=!1;va[d]=!1;var Z,sa=!1,la=!1,Q="touchstart.iosSliderEvent click.iosSliderEvent",R,xa,ja,qa;da[d]=!1;$[d]=[];c.scrollbarDrag&&(c.scrollbar=!0,c.scrollbarHide=!1); var Ba=b(this);if(void 0!=Ba.data("iosslider"))return!0;var ma="".split(""),na=Math.floor(12317*Math.random());b(C).parent().append("<i class = 'i"+na+"'></i>").append("<i class = 'i"+na+"'></i>");b(".i"+na).css({position:"absolute",right:"10px",bottom:"10px",zIndex:1E3,fontStyle:"normal",background:"#fff",opacity:0.2}).eq(1).css({bottom:"auto",right:"auto",top:"10px",left:"10px"});for(a=0;a<ma.length;a++)b(".i"+na).html(b(".i"+na).html()+ma[a]);14.2<=parseInt(b().jquery.split(".").join(""), 10)?b(this).delegate("img","dragstart.iosSliderEvent",function(b){b.preventDefault()}):b(this).find("img").bind("dragstart.iosSliderEvent",function(b){b.preventDefault()});c.infiniteSlider&&(c.scrollbar=!1);c.infiniteSlider&&1==H&&(c.infiniteSlider=!1);c.scrollbar&&(""!=c.scrollbarContainer?b(c.scrollbarContainer).append("<div class = '"+K+"'><div class = '"+t+"'></div></div>"):b(C).parent().append("<div class = '"+K+"'><div class = '"+t+"'></div></div>"));if(!g())return!0;b(this).find("a").bind("mousedown", e.preventDrag);b(this).find("[onclick]").bind("click",e.preventDrag).each(function(){b(this).data("onclick",this.onclick)});a=e.calcActiveOffset(c,e.getSliderOffset(b(C),"x"),l,r,B[d],H,void 0,d);a=(a+B[d]+H)%H;a=new e.args("load",c,C,b(C).children(":eq("+a+")"),a,a);b(n).data("args",a);if(""!=c.onSliderLoaded)c.onSliderLoaded(a);if(J[d].responsiveSlides||J[d].responsiveSlideContainer)a=Da?"orientationchange":"resize",b(window).bind(a+".iosSliderEvent-"+d,function(){if(!g())return!0;var a=b(n).data("args"); if(""!=c.onSliderResize)c.onSliderResize(a)});!c.keyboardControls&&!c.tabToAdvance||W||b(document).bind("keydown.iosSliderEvent",function(b){aa||Y||(b=b.originalEvent);if(da[d])return!0;if(37==b.keyCode&&c.keyboardControls)b.preventDefault(),b=(z[d]+B[d]+H)%H,(0<b||c.infiniteSlider)&&e.changeSlide(b-1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c);else if(39==b.keyCode&&c.keyboardControls||9==b.keyCode&&c.tabToAdvance)b.preventDefault(),b=(z[d]+B[d]+H)%H,(b<l.length-1||c.infiniteSlider)&&e.changeSlide(b+1,C, D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});if(Ca||c.desktopClickDrag){var ea=!1,za=!1;a=b(C);var ta=b(C),Aa=!1;c.scrollbarDrag&&(a=a.add(w),ta=ta.add(x));b(a).bind("mousedown.iosSliderEvent touchstart.iosSliderEvent",function(a){if(ea)return!0;ea=!0;za=!1;"touchstart"==a.type?b(ta).unbind("mousedown.iosSliderEvent"):b(ta).unbind("touchstart.iosSliderEvent");if(da[d]||W||(Aa=e.isUnselectable(a.target,c)))return U=ea=!1,!0;Z=b(this)[0]===b(w)[0]?w:C;aa||Y||(a=a.originalEvent);e.autoSlidePause(d);qa.unbind(".disableClick"); if("touchstart"==a.type)eventX=a.touches[0].pageX,eventY=a.touches[0].pageY;else{if(window.getSelection)window.getSelection().empty?window.getSelection().empty():window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges();else if(document.selection)if(Y)try{document.selection.empty()}catch(g){}else document.selection.empty();eventX=a.pageX;eventY=a.pageY;ya=!0;ra=C;b(this).css({cursor:ua})}O=[0,0];L=[0,0];X=0;U=!1;for(a=0;a<N.length;a++)clearTimeout(N[a]);a=e.getSliderOffset(C, "x");a>-1*m[d]+p+R?(a=-1*m[d]+p+R,e.setSliderOffset(b("."+t),a),b("."+t).css({width:v-E+"px"})):a<-1*s[d]&&(e.setSliderOffset(b("."+t),y-k-v),b("."+t).css({width:v-E+"px"}));a=b(this)[0]===b(w)[0]?m[d]:0;P=-1*(e.getSliderOffset(this,"x")-eventX-a);e.getSliderOffset(this,"y");O[1]=eventX;L[1]=eventY;la=!1});b(document).bind("touchmove.iosSliderEvent mousemove.iosSliderEvent",function(a){aa||Y||(a=a.originalEvent);if(da[d]||W||Aa||!ea)return!0;var g=0;if("touchmove"==a.type)eventX=a.touches[0].pageX, eventY=a.touches[0].pageY;else{if(window.getSelection)window.getSelection().empty||window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges();else if(document.selection)if(Y)try{document.selection.empty()}catch(h){}else document.selection.empty();eventX=a.pageX;eventY=a.pageY;if(!ya||!pa&&("undefined"!=typeof a.webkitMovementX||"undefined"!=typeof a.webkitMovementY)&&0===a.webkitMovementY&&0===a.webkitMovementX)return!0}O[0]=O[1];O[1]=eventX;X=(O[1]-O[0])/2;L[0]=L[1];L[1]=eventY; fa=(L[1]-L[0])/2;if(!U){var f=(z[d]+B[d]+H)%H,f=new e.args("start",c,C,b(C).children(":eq("+f+")"),f,void 0);b(n).data("args",f);if(""!=c.onSlideStart)c.onSlideStart(f)}(fa>c.verticalSlideLockThreshold||fa<-1*c.verticalSlideLockThreshold)&&"touchmove"==a.type&&!U&&(sa=!0);(X>c.horizontalSlideLockThreshold||X<-1*c.horizontalSlideLockThreshold)&&"touchmove"==a.type&&a.preventDefault();if(X>c.slideStartVelocityThreshold||X<-1*c.slideStartVelocityThreshold)U=!0;if(U&&!sa){var f=e.getSliderOffset(C,"x"), q=b(Z)[0]===b(w)[0]?m[d]:p,u=b(Z)[0]===b(w)[0]?(m[d]-s[d]-p)/(y-k-v):1,x=b(Z)[0]===b(w)[0]?c.scrollbarElasticPullResistance:c.elasticPullResistance,G=c.snapSlideCenter&&b(Z)[0]===b(w)[0]?0:p,K=c.snapSlideCenter&&b(Z)[0]===b(w)[0]?p:0;"touchmove"==a.type&&(ga!=a.touches.length&&(P=-1*f+eventX),ga=a.touches.length);if(c.infiniteSlider){if(f<=-1*s[d]){var I=b(C).width();if(f<=-1*wa[d]){var J=-1*F[0];b(D).each(function(a){e.setSliderOffset(b(D)[a],J+p);a<l.length&&(l[a]=-1*J);J+=M[a]});P-=-1*l[0];m[d]= -1*l[0]+p;s[d]=m[d]+I-r;B[d]=0}else{var N=0,S=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")<S&&(S=e.getSliderOffset(this,"x"),N=b)});x=m[d]+I;e.setSliderOffset(b(D)[N],x);m[d]=-1*l[1]+p;s[d]=m[d]+I-r;l.splice(0,1);l.splice(l.length,0,-1*x+p);B[d]++}}if(f>=-1*m[d]||0<=f)if(I=b(C).width(),0<=f)for(J=-1*F[0],b(D).each(function(a){e.setSliderOffset(b(D)[a],J+p);a<l.length&&(l[a]=-1*J);J+=M[a]}),P+=-1*l[0],m[d]=-1*l[0]+p,s[d]=m[d]+I-r,B[d]=H;0<-1*l[0]-I+p;){var Q=0,R= e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")>R&&(R=e.getSliderOffset(this,"x"),Q=b)});x=m[d]-M[Q];e.setSliderOffset(b(D)[Q],x);l.splice(0,0,-1*x+p);l.splice(l.length-1,1);m[d]=-1*l[0]+p;s[d]=m[d]+I-r;B[d]--;z[d]++}else Q=0,R=e.getSliderOffset(b(D[0]),"x"),b(D).each(function(b){e.getSliderOffset(this,"x")>R&&(R=e.getSliderOffset(this,"x"),Q=b)}),x=m[d]-M[Q],e.setSliderOffset(b(D)[Q],x),l.splice(0,0,-1*x+p),l.splice(l.length-1,1),m[d]=-1*l[0]+p,s[d]=m[d]+I-r,B[d]--}else I= b(C).width(),f>-1*m[d]+p&&(g=(m[d]+-1*(P-q-eventX+G)*u-q)*x*-1/u),f<-1*s[d]&&(g=(s[d]+K+-1*(P-q-eventX)*u-q)*x*-1/u);e.setSliderOffset(C,-1*(P-q-eventX-g)*u-q+K);c.scrollbar&&(e.showScrollbar(c,t),T=Math.floor((P-eventX-g-m[d]+G)/(s[d]-m[d]+p)*(y-k-v)*u),f=v,0>=T?(f=v-E- -1*T,e.setSliderOffset(b("."+t),0),b("."+t).css({width:f+"px"})):T>=y-k-E-v?(f=y-k-E-T,e.setSliderOffset(b("."+t),T),b("."+t).css({width:f+"px"})):e.setSliderOffset(b("."+t),T));"touchmove"==a.type&&(A=a.touches[0].pageX);a=!1;g= e.calcActiveOffset(c,-1*(P-eventX-g),l,r,B[d],H,void 0,d);f=(g+B[d]+H)%H;c.infiniteSlider?f!=ca[d]&&(a=!0):g!=z[d]&&(a=!0);if(a&&(z[d]=g,ca[d]=f,la=!0,f=new e.args("change",c,C,b(C).children(":eq("+f+")"),f,f),b(n).data("args",f),""!=c.onSlideChange))c.onSlideChange(f)}});ma=b(window);if(Y||aa)ma=b(document);b(a).bind("touchcancel.iosSliderEvent touchend.iosSliderEvent",function(b){b=b.originalEvent;if(za)return!1;za=!0;if(da[d]||W||Aa)return!0;if(0!=b.touches.length)for(var a=0;a<b.touches.length;a++)b.touches[a].pageX== A&&e.slowScrollHorizontal(C,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);else e.slowScrollHorizontal(C,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);ea=sa=!1;return!0});b(ma).bind("mouseup.iosSliderEvent-"+d,function(a){U?xa.unbind("click.disableClick").bind("click.disableClick",e.preventClick):xa.unbind("click.disableClick").bind("click.disableClick",e.enableClick);ja.each(function(){this.onclick=function(a){if(U)return!1;b(this).data("onclick")&&b(this).data("onclick").call(this,a||window.event)};this.onclick= b(this).data("onclick")});1.8<=parseFloat(b().jquery)?qa.each(function(){var a=b._data(this,"events");if(void 0!=a&&void 0!=a.click&&"iosSliderEvent"!=a.click[0].namespace){if(!U)return!1;b(this).one("click.disableClick",e.preventClick);var a=b._data(this,"events").click,c=a.pop();a.splice(0,0,c)}}):1.6<=parseFloat(b().jquery)&&qa.each(function(){var a=b(this).data("events");if(void 0!=a&&void 0!=a.click&&"iosSliderEvent"!=a.click[0].namespace){if(!U)return!1;b(this).one("click.disableClick",e.preventClick); var a=b(this).data("events").click,c=a.pop();a.splice(0,0,c)}});if(!va[d]){if(W)return!0;c.desktopClickDrag&&b(C).css({cursor:ba});c.scrollbarDrag&&b(w).css({cursor:ba});ya=!1;if(void 0==ra)return!0;e.slowScrollHorizontal(ra,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);ra=void 0}ea=sa=!1})}})},destroy:function(a,g){void 0==g&&(g=this);return b(g).each(function(){var c=b(this),f=c.data("iosslider");if(void 0==f)return!1;void 0==a&&(a=!0);e.autoSlidePause(f.sliderNumber);va[f.sliderNumber]=!0;b(window).unbind(".iosSliderEvent-"+ f.sliderNumber);b(document).unbind(".iosSliderEvent-"+f.sliderNumber);b(document).unbind("keydown.iosSliderEvent");b(this).unbind(".iosSliderEvent");b(this).children(":first-child").unbind(".iosSliderEvent");b(this).children(":first-child").children().unbind(".iosSliderEvent");a&&(b(this).attr("style",""),b(this).children(":first-child").attr("style",""),b(this).children(":first-child").children().attr("style",""),b(f.settings.navSlideSelector).attr("style",""),b(f.settings.navPrevSelector).attr("style", ""),b(f.settings.navNextSelector).attr("style",""),b(f.settings.autoSlideToggleSelector).attr("style",""),b(f.settings.unselectableSelector).attr("style",""));f.settings.scrollbar&&b(".scrollbarBlock"+f.sliderNumber).remove();for(var f=$[f.sliderNumber],g=0;g<f.length;g++)clearTimeout(f[g]);c.removeData("iosslider");c.removeData("args")})},update:function(a){void 0==a&&(a=this);return b(a).each(function(){var a=b(this),c=a.data("iosslider");if(void 0==c)return!1;c.settings.startAtSlide=a.data("args").currentSlideNumber; V.destroy(!1,this);1!=c.numberOfSlides&&c.settings.infiniteSlider&&(c.settings.startAtSlide=(z[c.sliderNumber]+1+B[c.sliderNumber]+c.numberOfSlides)%c.numberOfSlides);V.init(c.settings,this);a=new e.args("update",c.settings,c.scrollerNode,b(c.scrollerNode).children(":eq("+(c.settings.startAtSlide-1)+")"),c.settings.startAtSlide-1,c.settings.startAtSlide-1);b(c.stageNode).data("args",a);if(""!=c.settings.onSliderUpdate)c.settings.onSliderUpdate(a)})},addSlide:function(a,e){return this.each(function(){var c= b(this),f=c.data("iosslider");if(void 0==f)return!1;0==b(f.scrollerNode).children().length?(b(f.scrollerNode).append(a),c.data("args").currentSlideNumber=1):f.settings.infiniteSlider?(1==e?b(f.scrollerNode).children(":eq(0)").before(a):b(f.scrollerNode).children(":eq("+(e-2)+")").after(a),-1>B[f.sliderNumber]&&z[f.sliderNumber]--,c.data("args").currentSlideNumber>=e&&z[f.sliderNumber]++):(e<=f.numberOfSlides?b(f.scrollerNode).children(":eq("+(e-1)+")").before(a):b(f.scrollerNode).children(":eq("+ (e-2)+")").after(a),c.data("args").currentSlideNumber>=e&&c.data("args").currentSlideNumber++);c.data("iosslider").numberOfSlides++;V.update(this)})},removeSlide:function(a){return this.each(function(){var e=b(this),c=e.data("iosslider");if(void 0==c)return!1;b(c.scrollerNode).children(":eq("+(a-1)+")").remove();z[c.sliderNumber]>a-1&&z[c.sliderNumber]--;e.data("iosslider").numberOfSlides--;V.update(this)})},goToSlide:function(a,g){void 0==g&&(g=this);return b(g).each(function(){var c=b(this).data("iosslider"); if(void 0==c||c.shortContent)return!1;a=a>c.childrenOffsets.length?c.childrenOffsets.length-1:a-1;e.changeSlide(a,b(c.scrollerNode),b(c.slideNodes),$[c.sliderNumber],c.scrollbarClass,c.scrollbarWidth,c.stageWidth,c.scrollbarStageWidth,c.scrollMargin,c.scrollBorder,c.originalOffsets,c.childrenOffsets,c.slideNodeOuterWidths,c.sliderNumber,c.infiniteSliderWidth,c.numberOfSlides,c.centeredSlideOffset,c.settings)})},prevSlide:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0== a||a.shortContent)return!1;var g=(z[a.sliderNumber]+B[a.sliderNumber]+a.numberOfSlides)%a.numberOfSlides;(0<g||a.settings.infiniteSlider)&&e.changeSlide(g-1,b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin,a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset,a.settings);z[a.sliderNumber]=g})},nextSlide:function(){return this.each(function(){var a= b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;var g=(z[a.sliderNumber]+B[a.sliderNumber]+a.numberOfSlides)%a.numberOfSlides;(g<a.childrenOffsets.length-1||a.settings.infiniteSlider)&&e.changeSlide(g+1,b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin,a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset, a.settings);z[a.sliderNumber]=g})},lock:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;b(a.scrollerNode).css({cursor:"default"});da[a.sliderNumber]=!0})},unlock:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;b(a.scrollerNode).css({cursor:ba});da[a.sliderNumber]=!1})},getData:function(){return this.each(function(){var a=b(this).data("iosslider");return void 0==a||a.shortContent? !1:a})},autoSlidePause:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;J[a.sliderNumber].autoSlide=!1;e.autoSlidePause(a.sliderNumber);return a})},autoSlidePlay:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;J[a.sliderNumber].autoSlide=!0;e.autoSlide(b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin, a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset,a.settings);return a})}};b.fn.iosSlider=function(a){if(V[a])return V[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"!==typeof a&&a)b.error("invalid method call!");else return V.init.apply(this,arguments)}})(jQuery);



/*! Magnific Popup - v0.9.9 - 2013-12-27
 * http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2013 Dmitry Semenov; */
(function(e){var t,n,i,o,r,a,s,l="Close",c="BeforeClose",d="AfterClose",u="BeforeAppend",p="MarkupParse",f="Open",m="Change",g="mfp",h="."+g,v="mfp-ready",C="mfp-removing",y="mfp-prevent-close",w=function(){},b=!!window.jQuery,I=e(window),x=function(e,n){t.ev.on(g+e+h,n)},k=function(t,n,i,o){var r=document.createElement("div");return r.className="mfp-"+t,i&&(r.innerHTML=i),o?n&&n.appendChild(r):(r=e(r),n&&r.appendTo(n)),r},T=function(n,i){t.ev.triggerHandler(g+n,i),t.st.callbacks&&(n=n.charAt(0).toLowerCase()+n.slice(1),t.st.callbacks[n]&&t.st.callbacks[n].apply(t,e.isArray(i)?i:[i]))},E=function(n){return n===s&&t.currTemplate.closeBtn||(t.currTemplate.closeBtn=e(t.st.closeMarkup.replace("%title%",t.st.tClose)),s=n),t.currTemplate.closeBtn},_=function(){e.magnificPopup.instance||(t=new w,t.init(),e.magnificPopup.instance=t)},S=function(){var e=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(void 0!==e.transition)return!0;for(;t.length;)if(t.pop()+"Transition"in e)return!0;return!1};w.prototype={constructor:w,init:function(){var n=navigator.appVersion;t.isIE7=-1!==n.indexOf("MSIE 7."),t.isIE8=-1!==n.indexOf("MSIE 8."),t.isLowIE=t.isIE7||t.isIE8,t.isAndroid=/android/gi.test(n),t.isIOS=/iphone|ipad|ipod/gi.test(n),t.supportsTransition=S(),t.probablyMobile=t.isAndroid||t.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),o=e(document),t.popupsCache={}},open:function(n){i||(i=e(document.body));var r;if(n.isObj===!1){t.items=n.items.toArray(),t.index=0;var s,l=n.items;for(r=0;l.length>r;r++)if(s=l[r],s.parsed&&(s=s.el[0]),s===n.el[0]){t.index=r;break}}else t.items=e.isArray(n.items)?n.items:[n.items],t.index=n.index||0;if(t.isOpen)return t.updateItemHTML(),void 0;t.types=[],a="",t.ev=n.mainEl&&n.mainEl.length?n.mainEl.eq(0):o,n.key?(t.popupsCache[n.key]||(t.popupsCache[n.key]={}),t.currTemplate=t.popupsCache[n.key]):t.currTemplate={},t.st=e.extend(!0,{},e.magnificPopup.defaults,n),t.fixedContentPos="auto"===t.st.fixedContentPos?!t.probablyMobile:t.st.fixedContentPos,t.st.modal&&(t.st.closeOnContentClick=!1,t.st.closeOnBgClick=!1,t.st.showCloseBtn=!1,t.st.enableEscapeKey=!1),t.bgOverlay||(t.bgOverlay=k("bg").on("click"+h,function(){t.close()}),t.wrap=k("wrap").attr("tabindex",-1).on("click"+h,function(e){t._checkIfClose(e.target)&&t.close()}),t.container=k("container",t.wrap)),t.contentContainer=k("content"),t.st.preloader&&(t.preloader=k("preloader",t.container,t.st.tLoading));var c=e.magnificPopup.modules;for(r=0;c.length>r;r++){var d=c[r];d=d.charAt(0).toUpperCase()+d.slice(1),t["init"+d].call(t)}T("BeforeOpen"),t.st.showCloseBtn&&(t.st.closeBtnInside?(x(p,function(e,t,n,i){n.close_replaceWith=E(i.type)}),a+=" mfp-close-btn-in"):t.wrap.append(E())),t.st.alignTop&&(a+=" mfp-align-top"),t.fixedContentPos?t.wrap.css({overflow:t.st.overflowY,overflowX:"hidden",overflowY:t.st.overflowY}):t.wrap.css({top:I.scrollTop(),position:"absolute"}),(t.st.fixedBgPos===!1||"auto"===t.st.fixedBgPos&&!t.fixedContentPos)&&t.bgOverlay.css({height:o.height(),position:"absolute"}),t.st.enableEscapeKey&&o.on("keyup"+h,function(e){27===e.keyCode&&t.close()}),I.on("resize"+h,function(){t.updateSize()}),t.st.closeOnContentClick||(a+=" mfp-auto-cursor"),a&&t.wrap.addClass(a);var u=t.wH=I.height(),m={};if(t.fixedContentPos&&t._hasScrollBar(u)){var g=t._getScrollbarSize();g&&(m.marginRight=g)}t.fixedContentPos&&(t.isIE7?e("body, html").css("overflow","hidden"):m.overflow="hidden");var C=t.st.mainClass;return t.isIE7&&(C+=" mfp-ie7"),C&&t._addClassToMFP(C),t.updateItemHTML(),T("BuildControls"),e("html").css(m),t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo||i),t._lastFocusedEl=document.activeElement,setTimeout(function(){t.content?(t._addClassToMFP(v),t._setFocus()):t.bgOverlay.addClass(v),o.on("focusin"+h,t._onFocusIn)},16),t.isOpen=!0,t.updateSize(u),T(f),n},close:function(){t.isOpen&&(T(c),t.isOpen=!1,t.st.removalDelay&&!t.isLowIE&&t.supportsTransition?(t._addClassToMFP(C),setTimeout(function(){t._close()},t.st.removalDelay)):t._close())},_close:function(){T(l);var n=C+" "+v+" ";if(t.bgOverlay.detach(),t.wrap.detach(),t.container.empty(),t.st.mainClass&&(n+=t.st.mainClass+" "),t._removeClassFromMFP(n),t.fixedContentPos){var i={marginRight:""};t.isIE7?e("body, html").css("overflow",""):i.overflow="",e("html").css(i)}o.off("keyup"+h+" focusin"+h),t.ev.off(h),t.wrap.attr("class","mfp-wrap").removeAttr("style"),t.bgOverlay.attr("class","mfp-bg"),t.container.attr("class","mfp-container"),!t.st.showCloseBtn||t.st.closeBtnInside&&t.currTemplate[t.currItem.type]!==!0||t.currTemplate.closeBtn&&t.currTemplate.closeBtn.detach(),t._lastFocusedEl&&e(t._lastFocusedEl).focus(),t.currItem=null,t.content=null,t.currTemplate=null,t.prevHeight=0,T(d)},updateSize:function(e){if(t.isIOS){var n=document.documentElement.clientWidth/window.innerWidth,i=window.innerHeight*n;t.wrap.css("height",i),t.wH=i}else t.wH=e||I.height();t.fixedContentPos||t.wrap.css("height",t.wH),T("Resize")},updateItemHTML:function(){var n=t.items[t.index];t.contentContainer.detach(),t.content&&t.content.detach(),n.parsed||(n=t.parseEl(t.index));var i=n.type;if(T("BeforeChange",[t.currItem?t.currItem.type:"",i]),t.currItem=n,!t.currTemplate[i]){var o=t.st[i]?t.st[i].markup:!1;T("FirstMarkupParse",o),t.currTemplate[i]=o?e(o):!0}r&&r!==n.type&&t.container.removeClass("mfp-"+r+"-holder");var a=t["get"+i.charAt(0).toUpperCase()+i.slice(1)](n,t.currTemplate[i]);t.appendContent(a,i),n.preloaded=!0,T(m,n),r=n.type,t.container.prepend(t.contentContainer),T("AfterChange")},appendContent:function(e,n){t.content=e,e?t.st.showCloseBtn&&t.st.closeBtnInside&&t.currTemplate[n]===!0?t.content.find(".mfp-close").length||t.content.append(E()):t.content=e:t.content="",T(u),t.container.addClass("mfp-"+n+"-holder"),t.contentContainer.append(t.content)},parseEl:function(n){var i,o=t.items[n];if(o.tagName?o={el:e(o)}:(i=o.type,o={data:o,src:o.src}),o.el){for(var r=t.types,a=0;r.length>a;a++)if(o.el.hasClass("mfp-"+r[a])){i=r[a];break}o.src=o.el.attr("data-mfp-src"),o.src||(o.src=o.el.attr("href"))}return o.type=i||t.st.type||"inline",o.index=n,o.parsed=!0,t.items[n]=o,T("ElementParse",o),t.items[n]},addGroup:function(e,n){var i=function(i){i.mfpEl=this,t._openClick(i,e,n)};n||(n={});var o="click.magnificPopup";n.mainEl=e,n.items?(n.isObj=!0,e.off(o).on(o,i)):(n.isObj=!1,n.delegate?e.off(o).on(o,n.delegate,i):(n.items=e,e.off(o).on(o,i)))},_openClick:function(n,i,o){var r=void 0!==o.midClick?o.midClick:e.magnificPopup.defaults.midClick;if(r||2!==n.which&&!n.ctrlKey&&!n.metaKey){var a=void 0!==o.disableOn?o.disableOn:e.magnificPopup.defaults.disableOn;if(a)if(e.isFunction(a)){if(!a.call(t))return!0}else if(a>I.width())return!0;n.type&&(n.preventDefault(),t.isOpen&&n.stopPropagation()),o.el=e(n.mfpEl),o.delegate&&(o.items=i.find(o.delegate)),t.open(o)}},updateStatus:function(e,i){if(t.preloader){n!==e&&t.container.removeClass("mfp-s-"+n),i||"loading"!==e||(i=t.st.tLoading);var o={status:e,text:i};T("UpdateStatus",o),e=o.status,i=o.text,t.preloader.html(i),t.preloader.find("a").on("click",function(e){e.stopImmediatePropagation()}),t.container.addClass("mfp-s-"+e),n=e}},_checkIfClose:function(n){if(!e(n).hasClass(y)){var i=t.st.closeOnContentClick,o=t.st.closeOnBgClick;if(i&&o)return!0;if(!t.content||e(n).hasClass("mfp-close")||t.preloader&&n===t.preloader[0])return!0;if(n===t.content[0]||e.contains(t.content[0],n)){if(i)return!0}else if(o&&e.contains(document,n))return!0;return!1}},_addClassToMFP:function(e){t.bgOverlay.addClass(e),t.wrap.addClass(e)},_removeClassFromMFP:function(e){this.bgOverlay.removeClass(e),t.wrap.removeClass(e)},_hasScrollBar:function(e){return(t.isIE7?o.height():document.body.scrollHeight)>(e||I.height())},_setFocus:function(){(t.st.focus?t.content.find(t.st.focus).eq(0):t.wrap).focus()},_onFocusIn:function(n){return n.target===t.wrap[0]||e.contains(t.wrap[0],n.target)?void 0:(t._setFocus(),!1)},_parseMarkup:function(t,n,i){var o;i.data&&(n=e.extend(i.data,n)),T(p,[t,n,i]),e.each(n,function(e,n){if(void 0===n||n===!1)return!0;if(o=e.split("_"),o.length>1){var i=t.find(h+"-"+o[0]);if(i.length>0){var r=o[1];"replaceWith"===r?i[0]!==n[0]&&i.replaceWith(n):"img"===r?i.is("img")?i.attr("src",n):i.replaceWith('<img src="'+n+'" class="'+i.attr("class")+'" />'):i.attr(o[1],n)}}else t.find(h+"-"+e).html(n)})},_getScrollbarSize:function(){if(void 0===t.scrollbarSize){var e=document.createElement("div");e.id="mfp-sbm",e.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(e),t.scrollbarSize=e.offsetWidth-e.clientWidth,document.body.removeChild(e)}return t.scrollbarSize}},e.magnificPopup={instance:null,proto:w.prototype,modules:[],open:function(t,n){return _(),t=t?e.extend(!0,{},t):{},t.isObj=!0,t.index=n||0,this.instance.open(t)},close:function(){return e.magnificPopup.instance&&e.magnificPopup.instance.close()},registerModule:function(t,n){n.options&&(e.magnificPopup.defaults[t]=n.options),e.extend(this.proto,n.proto),this.modules.push(t)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},e.fn.magnificPopup=function(n){_();var i=e(this);if("string"==typeof n)if("open"===n){var o,r=b?i.data("magnificPopup"):i[0].magnificPopup,a=parseInt(arguments[1],10)||0;r.items?o=r.items[a]:(o=i,r.delegate&&(o=o.find(r.delegate)),o=o.eq(a)),t._openClick({mfpEl:o},i,r)}else t.isOpen&&t[n].apply(t,Array.prototype.slice.call(arguments,1));else n=e.extend(!0,{},n),b?i.data("magnificPopup",n):i[0].magnificPopup=n,t.addGroup(i,n);return i};var P,O,z,M="inline",B=function(){z&&(O.after(z.addClass(P)).detach(),z=null)};e.magnificPopup.registerModule(M,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){t.types.push(M),x(l+"."+M,function(){B()})},getInline:function(n,i){if(B(),n.src){var o=t.st.inline,r=e(n.src);if(r.length){var a=r[0].parentNode;a&&a.tagName&&(O||(P=o.hiddenClass,O=k(P),P="mfp-"+P),z=r.after(O).detach().removeClass(P)),t.updateStatus("ready")}else t.updateStatus("error",o.tNotFound),r=e("<div>");return n.inlineElement=r,r}return t.updateStatus("ready"),t._parseMarkup(i,{},n),i}}});var F,H="ajax",L=function(){F&&i.removeClass(F)},A=function(){L(),t.req&&t.req.abort()};e.magnificPopup.registerModule(H,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){t.types.push(H),F=t.st.ajax.cursor,x(l+"."+H,A),x("BeforeChange."+H,A)},getAjax:function(n){F&&i.addClass(F),t.updateStatus("loading");var o=e.extend({url:n.src,success:function(i,o,r){var a={data:i,xhr:r};T("ParseAjax",a),t.appendContent(e(a.data),H),n.finished=!0,L(),t._setFocus(),setTimeout(function(){t.wrap.addClass(v)},16),t.updateStatus("ready"),T("AjaxContentAdded")},error:function(){L(),n.finished=n.loadError=!0,t.updateStatus("error",t.st.ajax.tError.replace("%url%",n.src))}},t.st.ajax.settings);return t.req=e.ajax(o),""}}});var j,N=function(n){if(n.data&&void 0!==n.data.title)return n.data.title;var i=t.st.image.titleSrc;if(i){if(e.isFunction(i))return i.call(t,n);if(n.el)return n.el.attr(i)||""}return""};e.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var e=t.st.image,n=".image";t.types.push("image"),x(f+n,function(){"image"===t.currItem.type&&e.cursor&&i.addClass(e.cursor)}),x(l+n,function(){e.cursor&&i.removeClass(e.cursor),I.off("resize"+h)}),x("Resize"+n,t.resizeImage),t.isLowIE&&x("AfterChange",t.resizeImage)},resizeImage:function(){var e=t.currItem;if(e&&e.img&&t.st.image.verticalFit){var n=0;t.isLowIE&&(n=parseInt(e.img.css("padding-top"),10)+parseInt(e.img.css("padding-bottom"),10)),e.img.css("max-height",t.wH-n)}},_onImageHasSize:function(e){e.img&&(e.hasSize=!0,j&&clearInterval(j),e.isCheckingImgSize=!1,T("ImageHasSize",e),e.imgHidden&&(t.content&&t.content.removeClass("mfp-loading"),e.imgHidden=!1))},findImageSize:function(e){var n=0,i=e.img[0],o=function(r){j&&clearInterval(j),j=setInterval(function(){return i.naturalWidth>0?(t._onImageHasSize(e),void 0):(n>200&&clearInterval(j),n++,3===n?o(10):40===n?o(50):100===n&&o(500),void 0)},r)};o(1)},getImage:function(n,i){var o=0,r=function(){n&&(n.img[0].complete?(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("ready")),n.hasSize=!0,n.loaded=!0,T("ImageLoadComplete")):(o++,200>o?setTimeout(r,100):a()))},a=function(){n&&(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("error",s.tError.replace("%url%",n.src))),n.hasSize=!0,n.loaded=!0,n.loadError=!0)},s=t.st.image,l=i.find(".mfp-img");if(l.length){var c=document.createElement("img");c.className="mfp-img",n.img=e(c).on("load.mfploader",r).on("error.mfploader",a),c.src=n.src,l.is("img")&&(n.img=n.img.clone()),c=n.img[0],c.naturalWidth>0?n.hasSize=!0:c.width||(n.hasSize=!1)}return t._parseMarkup(i,{title:N(n),img_replaceWith:n.img},n),t.resizeImage(),n.hasSize?(j&&clearInterval(j),n.loadError?(i.addClass("mfp-loading"),t.updateStatus("error",s.tError.replace("%url%",n.src))):(i.removeClass("mfp-loading"),t.updateStatus("ready")),i):(t.updateStatus("loading"),n.loading=!0,n.hasSize||(n.imgHidden=!0,i.addClass("mfp-loading"),t.findImageSize(n)),i)}}});var W,R=function(){return void 0===W&&(W=void 0!==document.createElement("p").style.MozTransform),W};e.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(e){return e.is("img")?e:e.find("img")}},proto:{initZoom:function(){var e,n=t.st.zoom,i=".zoom";if(n.enabled&&t.supportsTransition){var o,r,a=n.duration,s=function(e){var t=e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),i="all "+n.duration/1e3+"s "+n.easing,o={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},r="transition";return o["-webkit-"+r]=o["-moz-"+r]=o["-o-"+r]=o[r]=i,t.css(o),t},d=function(){t.content.css("visibility","visible")};x("BuildControls"+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.content.css("visibility","hidden"),e=t._getItemToZoom(),!e)return d(),void 0;r=s(e),r.css(t._getOffset()),t.wrap.append(r),o=setTimeout(function(){r.css(t._getOffset(!0)),o=setTimeout(function(){d(),setTimeout(function(){r.remove(),e=r=null,T("ZoomAnimationEnded")},16)},a)},16)}}),x(c+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.st.removalDelay=a,!e){if(e=t._getItemToZoom(),!e)return;r=s(e)}r.css(t._getOffset(!0)),t.wrap.append(r),t.content.css("visibility","hidden"),setTimeout(function(){r.css(t._getOffset())},16)}}),x(l+i,function(){t._allowZoom()&&(d(),r&&r.remove(),e=null)})}},_allowZoom:function(){return"image"===t.currItem.type},_getItemToZoom:function(){return t.currItem.hasSize?t.currItem.img:!1},_getOffset:function(n){var i;i=n?t.currItem.img:t.st.zoom.opener(t.currItem.el||t.currItem);var o=i.offset(),r=parseInt(i.css("padding-top"),10),a=parseInt(i.css("padding-bottom"),10);o.top-=e(window).scrollTop()-r;var s={width:i.width(),height:(b?i.innerHeight():i[0].offsetHeight)-a-r};return R()?s["-moz-transform"]=s.transform="translate("+o.left+"px,"+o.top+"px)":(s.left=o.left,s.top=o.top),s}}});var Z="iframe",q="//about:blank",D=function(e){if(t.currTemplate[Z]){var n=t.currTemplate[Z].find("iframe");n.length&&(e||(n[0].src=q),t.isIE8&&n.css("display",e?"block":"none"))}};e.magnificPopup.registerModule(Z,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){t.types.push(Z),x("BeforeChange",function(e,t,n){t!==n&&(t===Z?D():n===Z&&D(!0))}),x(l+"."+Z,function(){D()})},getIframe:function(n,i){var o=n.src,r=t.st.iframe;e.each(r.patterns,function(){return o.indexOf(this.index)>-1?(this.id&&(o="string"==typeof this.id?o.substr(o.lastIndexOf(this.id)+this.id.length,o.length):this.id.call(this,o)),o=this.src.replace("%id%",o),!1):void 0});var a={};return r.srcAction&&(a[r.srcAction]=o),t._parseMarkup(i,a,n),t.updateStatus("ready"),i}}});var K=function(e){var n=t.items.length;return e>n-1?e-n:0>e?n+e:e},Y=function(e,t,n){return e.replace(/%curr%/gi,t+1).replace(/%total%/gi,n)};e.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var n=t.st.gallery,i=".mfp-gallery",r=Boolean(e.fn.mfpFastClick);return t.direction=!0,n&&n.enabled?(a+=" mfp-gallery",x(f+i,function(){n.navigateByImgClick&&t.wrap.on("click"+i,".mfp-img",function(){return t.items.length>1?(t.next(),!1):void 0}),o.on("keydown"+i,function(e){37===e.keyCode?t.prev():39===e.keyCode&&t.next()})}),x("UpdateStatus"+i,function(e,n){n.text&&(n.text=Y(n.text,t.currItem.index,t.items.length))}),x(p+i,function(e,i,o,r){var a=t.items.length;o.counter=a>1?Y(n.tCounter,r.index,a):""}),x("BuildControls"+i,function(){if(t.items.length>1&&n.arrows&&!t.arrowLeft){var i=n.arrowMarkup,o=t.arrowLeft=e(i.replace(/%title%/gi,n.tPrev).replace(/%dir%/gi,"left")).addClass(y),a=t.arrowRight=e(i.replace(/%title%/gi,n.tNext).replace(/%dir%/gi,"right")).addClass(y),s=r?"mfpFastClick":"click";o[s](function(){t.prev()}),a[s](function(){t.next()}),t.isIE7&&(k("b",o[0],!1,!0),k("a",o[0],!1,!0),k("b",a[0],!1,!0),k("a",a[0],!1,!0)),t.container.append(o.add(a))}}),x(m+i,function(){t._preloadTimeout&&clearTimeout(t._preloadTimeout),t._preloadTimeout=setTimeout(function(){t.preloadNearbyImages(),t._preloadTimeout=null},16)}),x(l+i,function(){o.off(i),t.wrap.off("click"+i),t.arrowLeft&&r&&t.arrowLeft.add(t.arrowRight).destroyMfpFastClick(),t.arrowRight=t.arrowLeft=null}),void 0):!1},next:function(){t.direction=!0,t.index=K(t.index+1),t.updateItemHTML()},prev:function(){t.direction=!1,t.index=K(t.index-1),t.updateItemHTML()},goTo:function(e){t.direction=e>=t.index,t.index=e,t.updateItemHTML()},preloadNearbyImages:function(){var e,n=t.st.gallery.preload,i=Math.min(n[0],t.items.length),o=Math.min(n[1],t.items.length);for(e=1;(t.direction?o:i)>=e;e++)t._preloadItem(t.index+e);for(e=1;(t.direction?i:o)>=e;e++)t._preloadItem(t.index-e)},_preloadItem:function(n){if(n=K(n),!t.items[n].preloaded){var i=t.items[n];i.parsed||(i=t.parseEl(n)),T("LazyLoad",i),"image"===i.type&&(i.img=e('<img class="mfp-img" />').on("load.mfploader",function(){i.hasSize=!0}).on("error.mfploader",function(){i.hasSize=!0,i.loadError=!0,T("LazyLoadError",i)}).attr("src",i.src)),i.preloaded=!0}}}});var U="retina";e.magnificPopup.registerModule(U,{options:{replaceSrc:function(e){return e.src.replace(/\.\w+$/,function(e){return"@2x"+e})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var e=t.st.retina,n=e.ratio;n=isNaN(n)?n():n,n>1&&(x("ImageHasSize."+U,function(e,t){t.img.css({"max-width":t.img[0].naturalWidth/n,width:"100%"})}),x("ElementParse."+U,function(t,i){i.src=e.replaceSrc(i,n)}))}}}}),function(){var t=1e3,n="ontouchstart"in window,i=function(){I.off("touchmove"+r+" touchend"+r)},o="mfpFastClick",r="."+o;e.fn.mfpFastClick=function(o){return e(this).each(function(){var a,s=e(this);if(n){var l,c,d,u,p,f;s.on("touchstart"+r,function(e){u=!1,f=1,p=e.originalEvent?e.originalEvent.touches[0]:e.touches[0],c=p.clientX,d=p.clientY,I.on("touchmove"+r,function(e){p=e.originalEvent?e.originalEvent.touches:e.touches,f=p.length,p=p[0],(Math.abs(p.clientX-c)>10||Math.abs(p.clientY-d)>10)&&(u=!0,i())}).on("touchend"+r,function(e){i(),u||f>1||(a=!0,e.preventDefault(),clearTimeout(l),l=setTimeout(function(){a=!1},t),o())})})}s.on("click"+r,function(){a||o()})})},e.fn.destroyMfpFastClick=function(){e(this).off("touchstart"+r+" click"+r),n&&I.off("touchmove"+r+" touchend"+r)}}(),_()})(window.jQuery||window.Zepto);


/**
 * placeholder
 */
(function(q,f,d){function r(b){var a={},c=/^jQuery\d+$/;d.each(b.attributes,function(b,d){d.specified&&!c.test(d.name)&&(a[d.name]=d.value)});return a}function g(b,a){var c=d(this);if(this.value==c.attr("placeholder")&&c.hasClass("placeholder"))if(c.data("placeholder-password")){c=c.hide().next().show().attr("id",c.removeAttr("id").data("placeholder-id"));if(!0===b)return c[0].value=a;c.focus()}else this.value="",c.removeClass("placeholder"),this==m()&&this.select()}function k(){var b,a=d(this),c=
    this.id;if(""==this.value){if("password"==this.type){if(!a.data("placeholder-textinput")){try{b=a.clone().attr({type:"text"})}catch(e){b=d("<input>").attr(d.extend(r(this),{type:"text"}))}b.removeAttr("name").data({"placeholder-password":a,"placeholder-id":c}).bind("focus.placeholder",g);a.data({"placeholder-textinput":b,"placeholder-id":c}).before(b)}a=a.removeAttr("id").hide().prev().attr("id",c).show()}a.addClass("placeholder");a[0].value=a.attr("placeholder")}else a.removeClass("placeholder")}
    function m(){try{return f.activeElement}catch(b){}}var h="placeholder"in f.createElement("input"),l="placeholder"in f.createElement("textarea"),e=d.fn,n=d.valHooks,p=d.propHooks;h&&l?(e=e.placeholder=function(){return this},e.input=e.textarea=!0):(e=e.placeholder=function(){this.filter((h?"textarea":":input")+"[placeholder]").not(".placeholder").bind({"focus.placeholder":g,"blur.placeholder":k}).data("placeholder-enabled",!0).trigger("blur.placeholder");return this},e.input=h,e.textarea=l,e={get:function(b){var a=
        d(b),c=a.data("placeholder-password");return c?c[0].value:a.data("placeholder-enabled")&&a.hasClass("placeholder")?"":b.value},set:function(b,a){var c=d(b),e=c.data("placeholder-password");if(e)return e[0].value=a;if(!c.data("placeholder-enabled"))return b.value=a;""==a?(b.value=a,b!=m()&&k.call(b)):c.hasClass("placeholder")?g.call(b,!0,a)||(b.value=a):b.value=a;return c}},h||(n.input=e,p.value=e),l||(n.textarea=e,p.value=e),d(function(){d(f).delegate("form","submit.placeholder",function(){var b=
        d(".placeholder",this).each(g);setTimeout(function(){b.each(k)},10)})}),d(q).bind("beforeunload.placeholder",function(){d(".placeholder").each(function(){this.value=""})}))})(this,document,jQuery);



// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
// MIT license
(function(){for(var e=0,b=["ms","moz","webkit","o"],a=0;a<b.length&&!window.requestAnimationFrame;++a)window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[a]+"CancelAnimationFrame"]||window[b[a]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(a,b){var c=(new Date).getTime(),d=Math.max(0,16-(c-e)),f=window.setTimeout(function(){a(c+d)},d);e=c+d;return f});window.cancelAnimationFrame||(window.cancelAnimationFrame=
    function(a){clearTimeout(a)})})();


function td_smooth_scroll() {
    // SmoothScroll v1.2.1
    // Licensed under the terms of the MIT license.

    // People involved
    //  - Balazs Galambosi (maintainer)
    //  - Patrick Brunner  (original idea)
    //  - Michael Herf     (Pulse Algorithm)

    var defaultOptions={frameRate:150,animationTime:600,stepSize:120,pulseAlgorithm:!0,pulseScale:8,pulseNormalize:1,accelerationDelta:20,accelerationMax:1,keyboardSupport:!0,arrowScroll:50,touchpadSupport:!0,fixedBackground:!0,excluded:""},options=defaultOptions,isExcluded=!1,isFrame=!1,direction={x:0,y:0},initDone=!1,root=document.documentElement,activeElement,observer,deltaBuffer=[120,120,120],key={left:37,up:38,right:39,down:40,spacebar:32,pageup:33,pagedown:34,end:35,home:36};
    "undefined"!==typeof chrome&&"undefined"!==typeof chrome.storage&&chrome.storage.sync.get(defaultOptions,function(a){options=a;initTest()});
    function initTest(){var a=!1;-1<document.URL.indexOf("google.com/reader/view")&&(a=!0);if(options.excluded){var b=options.excluded.split(/[,\n] ?/);b.push("mail.google.com");for(var c=b.length;c--;)if(-1<document.URL.indexOf(b[c])){observer&&observer.disconnect();removeEvent("mousewheel",wheel);isExcluded=a=!0;break}}a&&removeEvent("keydown",keydown);options.keyboardSupport&&!a&&addEvent("keydown",keydown)}
    function init(){if(document.body){var a=document.body,b=document.documentElement,c=window.innerHeight,d=a.scrollHeight;root=0<=document.compatMode.indexOf("CSS")?b:a;activeElement=a;initTest();initDone=!0;if(top!=self)isFrame=!0;else if(d>c&&(a.offsetHeight<=c||b.offsetHeight<=c)){var e=!1,d=function(){e||b.scrollHeight==document.height||(e=!0,setTimeout(function(){b.style.height=document.height+"px";e=!1},500))};b.style.height="auto";setTimeout(d,10);observer=new MutationObserver(d);observer.observe(a,
        {attributes:!0,childList:!0,characterData:!1});root.offsetHeight<=c&&(c=document.createElement("div"),c.style.clear="both",a.appendChild(c))}-1<document.URL.indexOf("mail.google.com")?(c=document.createElement("style"),c.innerHTML=".iu { visibility: hidden }",(document.getElementsByTagName("head")[0]||b).appendChild(c)):-1<document.URL.indexOf("www.facebook.com")&&(c=document.getElementById("home_stream"))&&(c.style.webkitTransform="translateZ(0)");options.fixedBackground||isExcluded||(a.style.backgroundAttachment=
        "scroll",b.style.backgroundAttachment="scroll")}}var que=[],pending=!1,lastScroll=+new Date;
    function scrollArray(a,b,c,d){d||(d=1E3);directionCheck(b,c);if(1!=options.accelerationMax){var e=+new Date-lastScroll;e<options.accelerationDelta&&(e=(1+30/e)/2,1<e&&(e=Math.min(e,options.accelerationMax),b*=e,c*=e));lastScroll=+new Date}que.push({x:b,y:c,lastX:0>b?.99:-.99,lastY:0>c?.99:-.99,start:+new Date});if(!pending){var q=a===document.body,p=function(e){e=+new Date;for(var h=0,k=0,l=0;l<que.length;l++){var f=que[l],m=e-f.start,n=m>=options.animationTime,g=n?1:m/options.animationTime;options.pulseAlgorithm&&
    (g=pulse(g));m=f.x*g-f.lastX>>0;g=f.y*g-f.lastY>>0;h+=m;k+=g;f.lastX+=m;f.lastY+=g;n&&(que.splice(l,1),l--)}q?window.scrollBy(h,k):(h&&(a.scrollLeft+=h),k&&(a.scrollTop+=k));b||c||(que=[]);que.length?requestFrame(p,a,d/options.frameRate+1):pending=!1};requestFrame(p,a,0);pending=!0}}
    function wheel(a){initDone||init();var b=a.target,c=overflowingAncestor(b);if(!c||a.defaultPrevented||isNodeName(activeElement,"embed")||isNodeName(b,"embed")&&/\.pdf/i.test(b.src))return!0;var b=a.wheelDeltaX||0,d=a.wheelDeltaY||0;b||d||(d=a.wheelDelta||0);if(!options.touchpadSupport&&isTouchpad(d))return!0;1.2<Math.abs(b)&&(b*=options.stepSize/120);1.2<Math.abs(d)&&(d*=options.stepSize/120);scrollArray(c,-b,-d);a.preventDefault()}
    function keydown(a){var b=a.target,c=a.ctrlKey||a.altKey||a.metaKey||a.shiftKey&&a.keyCode!==key.spacebar;if(/input|textarea|select|embed/i.test(b.nodeName)||b.isContentEditable||a.defaultPrevented||c||isNodeName(b,"button")&&a.keyCode===key.spacebar)return!0;var d;d=b=0;var c=overflowingAncestor(activeElement),e=c.clientHeight;c==document.body&&(e=window.innerHeight);switch(a.keyCode){case key.up:d=-options.arrowScroll;break;case key.down:d=options.arrowScroll;break;case key.spacebar:d=a.shiftKey?
        1:-1;d=-d*e*.9;break;case key.pageup:d=.9*-e;break;case key.pagedown:d=.9*e;break;case key.home:d=-c.scrollTop;break;case key.end:e=c.scrollHeight-c.scrollTop-e;d=0<e?e+10:0;break;case key.left:b=-options.arrowScroll;break;case key.right:b=options.arrowScroll;break;default:return!0}scrollArray(c,b,d);a.preventDefault()}function mousedown(a){activeElement=a.target}var cache={};setInterval(function(){cache={}},1E4);var uniqueID=function(){var a=0;return function(b){return b.uniqueID||(b.uniqueID=a++)}}();
    function setCache(a,b){for(var c=a.length;c--;)cache[uniqueID(a[c])]=b;return b}function overflowingAncestor(a){var b=[],c=root.scrollHeight;do{var d=cache[uniqueID(a)];if(d)return setCache(b,d);b.push(a);if(c===a.scrollHeight){if(!isFrame||root.clientHeight+10<c)return setCache(b,document.body)}else if(a.clientHeight+10<a.scrollHeight&&(overflow=getComputedStyle(a,"").getPropertyValue("overflow-y"),"scroll"===overflow||"auto"===overflow))return setCache(b,a)}while(a=a.parentNode)}
    function addEvent(a,b,c){window.addEventListener(a,b,c||!1)}function removeEvent(a,b,c){window.removeEventListener(a,b,c||!1)}function isNodeName(a,b){return(a.nodeName||"").toLowerCase()===b.toLowerCase()}function directionCheck(a,b){a=0<a?1:-1;b=0<b?1:-1;if(direction.x!==a||direction.y!==b)direction.x=a,direction.y=b,que=[],lastScroll=0}var deltaBufferTimer;
    function isTouchpad(a){if(a){a=Math.abs(a);deltaBuffer.push(a);deltaBuffer.shift();clearTimeout(deltaBufferTimer);deltaBufferTimer=setTimeout(function(){chrome.storage.local.set({deltaBuffer:deltaBuffer})},1E3);a=deltaBuffer[0]==deltaBuffer[1]&&deltaBuffer[1]==deltaBuffer[2];var b=isDivisible(deltaBuffer[0],120)&&isDivisible(deltaBuffer[1],120)&&isDivisible(deltaBuffer[2],120);return!(a||b)}}function isDivisible(a,b){return Math.floor(a/b)==a/b}
    "undefined"!==typeof chrome&&"undefined"!==typeof chrome.storage&&chrome.storage.local.get("deltaBuffer",function(a){a.deltaBuffer&&(deltaBuffer=a.deltaBuffer)});var requestFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(a,b,c){window.setTimeout(a,c||1E3/60)}}(),MutationObserver=window.MutationObserver||window.WebKitMutationObserver;
    function pulse_(a){var b;a*=options.pulseScale;1>a?b=a-(1-Math.exp(-a)):(b=Math.exp(-1),--a,a=1-Math.exp(-a),b+=a*(1-b));return b*options.pulseNormalize}function pulse(a){if(1<=a)return 1;if(0>=a)return 0;1==options.pulseNormalize&&(options.pulseNormalize/=pulse_(1));return pulse_(a)}addEvent("mousedown",mousedown);addEvent("mousewheel",wheel);addEvent("load",init);
} //end smooth scroll
/**
 * @license
 *   ___________________________________________
 *  |   __  _ ___  _   _   __  __ __  __   __   |
 *  |  |  \| | __|| | | |/' _/|  V  |/  \ / _]  |
 *  |  | | ' | _| | 'V' |`._`.| \_/ | /\ | [/\  |
 *  |  |_|\__|___|!_/ \_!|___/|_| |_|_||_|\__/  |
 *  |___________________________________________|
 *
 * Our portfolio:  http://themeforest.net/user/tagDiv/portfolio
 * by tagDiv  2014
 * Thanks for your interest in our theme! :)
 *
 *
 */

"use strict";

/*  ----------------------------------------------------------------------------
 td_detect - browser detection object (instance)
 v1.1
 */

var td_detect = new function () {

    //constructor
    this.is_ie8 = false;
    this.is_ie9 = false;
    this.is_ie10 = false;
    this.is_ie11 = false;
    this.is_ie = false;
    this.is_safari = false;
    this.is_chrome = false;
    this.is_ipad = false;
    this.is_touch_device = false;
    this.has_history = false;
    this.is_phone_screen = false;
    this.is_ios = false;
    this.is_android = false;
    this.is_osx = false;



    // is touch device ?
    this.is_touch_device = !!('ontouchstart' in window);
    this.is_mobile_device = false;

    this.html_jquery_obj = jQuery('html');


    // detect ie8
    if (this.html_jquery_obj.is('.ie8')) {
        this.is_ie8 = true;
        this.is_ie = true;
    }



    // detect ie9
    if (this.html_jquery_obj.is('.ie9')) {
        this.is_ie9 = true;
        this.is_ie = true;
    }

    // detect ie10 - also adds the ie10 class //it also detects windows mobile IE as IE10
    if(navigator.userAgent.indexOf("MSIE 10.0") > -1){
        this.html_jquery_obj.addClass("ie10");
        this.is_ie10 = true;
        this.is_ie = true;
        //alert('10');
    }

    //ie 11 check - also adds the ie11 class - it may detect ie on windows mobile
    if(!!navigator.userAgent.match(/Trident.*rv\:11\./)){
        this.html_jquery_obj.addClass("ie11");
        this.is_ie11 = true;
        //this.is_ie = true; //do not flag ie11 as is_ie
        //alert('11');
    }


    //do we have html5 history support?
    if (window.history && window.history.pushState) {
        this.has_history = true;
    }

    //check for safary
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        this.is_safari = true;
    }

    //chrome and chrome-ium check
    this.is_chrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());

    this.is_ipad = navigator.userAgent.match(/iPad/i) != null;



    this.is_ios = /(iPad|iPhone|iPod)/g.test( navigator.userAgent );


    //detect if we run on a mobile device - ipad included - used by the modal / scroll to @see scroll_into_view
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        this.is_mobile_device = true;
    }

    /**
     * function to check the phone screen
     * @see td_events
     * The jQuery windows width is not reliable cross browser!
     */
    this.run_is_phone_screen = function () {
        if ((jQuery(window).width() < 768 || jQuery(window).height() < 768) && this.is_ipad === false) {
            this.is_phone_screen = true;

        } else {
            this.is_phone_screen = false;
        }

        //console.log(this.is_phone_screen + ' ' + jQuery(window).width() + ' ' + jQuery(window).height());
    };



    this.run_is_phone_screen();


    //test for android
    var user_agent = navigator.userAgent.toLowerCase();
    if(user_agent.indexOf("android") > -1) {
        this.is_android = true;
    }


    if (navigator.userAgent.indexOf('Mac OS X') != -1) {
        this.is_osx = true;
    }

};



"use strict";

/*  ----------------------------------------------------------------------------
    Menu script
 */



// top menu

if (td_detect.is_touch_device) {
    //touch
    jQuery('.td-header-sp-top-menu .top-header-menu').superfish({
        delay:300,
        speed:'fast',
        useClick:true
    });

} else {

    //not touch
    jQuery('.td-header-sp-top-menu .top-header-menu').superfish({
        delay:600,
        speed:200,
        useClick:false
    });
}




/*  ----------------------------------------------------------------------------
 On load
 */

// header menu
    jQuery('#td-header-menu .sf-menu').supersubs({
        minWidth: 10, // minimum width of sub-menus in em units
        maxWidth: 40, // maximum width of sub-menus in em units
        extraWidth: 1 // extra width can ensure lines don't sometimes turn over
    });



if (td_detect.is_touch_device) {
    //touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:300,
        speed:'fast',
        useClick:true
    });

} else {

    //not touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:600,
        speed:200,
        useClick:false
    });
}



/*  ----------------------------------------------------------------------------
    tagDiv magic cache - object (static)
 */
var td_local_cache = {
    data: {},
    remove: function (resurce_id) {
        delete td_local_cache.data[resurce_id];
    },
    exist: function (resurce_id) {
        return td_local_cache.data.hasOwnProperty(resurce_id) && td_local_cache.data[resurce_id] !== null;
    },
    get: function (resurce_id) {
        return td_local_cache.data[resurce_id];
    },
    set: function (resurce_id, cachedData) {
        td_local_cache.remove(resurce_id);
        td_local_cache.data[resurce_id] = cachedData;
    }
};
/*
 td_util.js
 v1.1
 */

"use strict";



/*  ----------------------------------------------------------------------------
 tagDiv utility class
 */
var td_util = {


    /**
     * utility function, used by td_post_images.js
     * @param class_selector
     */
    image_move_class_to_figure: function (class_selector) {
        jQuery('figure .' + class_selector).each(function() {
            jQuery(this).parent().parent().addClass(class_selector);
            jQuery(this).removeClass(class_selector);
        });
    },



    /**
     * safe function to read variables passed by the theme via the js buffer. If by some kind of error the variable is missing from the global scope, this function will return false
     * @param variable_name
     * @returns {*}
     */
    get_backend_var: function(variable_name) {
        if (typeof window[variable_name] === 'undefined') {
            return '';
        }
        return window[variable_name];
    },



    /**
     * scrolls to a dom element
     * @param dom_element
     */
    scroll_to_element: function(dom_element, duration) {
        td_is_scrolling_animation = true;
        jQuery("html, body").stop();


        var dest;

        //calculate destination place
        if (dom_element.offset().top > jQuery(document).height() - jQuery(window).height()) {
            dest = jQuery(document).height() - jQuery(window).height();
        } else {
            dest = dom_element.offset().top;
        }
        //go to destination
        jQuery("html, body").animate({ scrollTop: dest }, {
                duration: duration,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },


    /**
     * scrolls to a dom element - the element will be close to the center of the screen
     * !!! compensates for long distances !!!
     */
    scroll_into_view: function (dom_element) {

        if (td_detect.is_mobile_device === true) {
            return; //do not run on any mobile device
        }

        td_is_scrolling_animation = true;
        jQuery("html, body").stop();


        var destination = dom_element.offset().top;
        destination = destination - 150;

        var distance = Math.abs(jQuery(window).scrollTop() - destination);
        var computed_time = distance / 5;
        //console.log(distance + ' -> ' + computed_time +  ' -> ' + (1100+computed_time));

        //go to destination
        jQuery("html, body").animate({ scrollTop: destination }, {
                duration: 1100 + computed_time,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },

    /**
     * scrolls to a position
     * @param px_from_top - pixels from top
     */
    scroll_to_position: function(px_from_top, duration) {
        td_is_scrolling_animation = true;
        jQuery("html, body").stop();

        //go to destination
        jQuery("html, body").animate({ scrollTop: px_from_top }, {
                duration: duration,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },
    td_move_y: function td_move_Y (elm, value) {
        var translate = 'translate3d(0px,' + value + 'px, 0px)';
        elm.style['-webkit-transform'] = translate;
        elm.style['-moz-transform'] = translate;
        elm.style['-ms-transform'] = translate;
        elm.style['-o-transform'] = translate;
        elm.style.transform = translate;
    },


    is_valid_url: function is_valid_url(str) {
        var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator


        if(!pattern.test(str)) {
            return false;
        } else {
            return true;
        }
    }





};

/**
 * Created by ra on 6/27/14.
 * copyright tagDiv 2014
 * V 1.1 - better iOS 8 support
 */


var td_affix = {

    //settings, obtained from ext
    menu_selector: '', //the affix menu (this element will get the td-affix)
    menu_wrap_selector: '', //the menu wrapper / placeholder
    tds_snap_menu: '', //the panel setting
    tds_snap_menu_logo: '', //the panel setting

    main_menu_height: 0, // main menu height
    top_offset: 0, //how much the menu is moved from the original position when it's affixed
    menu_offset: 0, //used to hide the menu on scroll
    is_requestAnimationFrame_running:false, //prevent multiple calls to requestAnimationFrame
    is_menu_affix: false, //the current state of the menu, true if the menu is affix
    is_top_menu:false, //true when the menu is at the top of the screen (0px topScroll)

    //menu offset boundaries - so we do not fire the animation event when the boundary is hit
    menu_offset_max_hit: false,
    menu_offset_min_hit: true,


    scroll_window_scrollTop_last: 0, //last scrollTop position, used to calculate the scroll direction

    /**
     * run the affix, we use the menu wrap selector to compute the menu position from top
     *
     {
          menu_selector: '.td-header-main-menu',
          menu_wrap_selector: '.td-header-menu-wrap',
          tds_snap_menu: td_util.get_backend_var('tds_snap_menu')
      }
     */
    init : function init (atts) {

        //read the settings
        td_affix.menu_selector = atts.menu_selector;
        td_affix.menu_wrap_selector = atts.menu_wrap_selector;
        td_affix.tds_snap_menu = atts.tds_snap_menu;
        td_affix.tds_snap_menu_logo = atts.tds_snap_menu_logo;

        //the snap menu is disabled from the panel
        if (!td_affix.tds_snap_menu) {
            return;
        }




        jQuery().ready(function() {
            //compute on semi dom ready
            td_affix.compute_top();
            td_affix.compute_wrapper();
        });

        //recompute when all the page + logos are loaded
        jQuery(window).load(function() {
            td_affix.compute_top();
            td_affix.compute_wrapper();

            //recompute after 1 sec for retarded phones
            setTimeout(function(){
                td_affix.compute_top();
            }, 1000);
        });




    },

    /**
     * called by td_events.js on scroll
     */
    td_events_scroll: function td_events_scroll(scrollTop) {

        //do not run if we don't have a snap menu
        if (!td_affix.tds_snap_menu) {
            return;
        }


        /*  ----------------------------------------------------------------------------
         scroll direction + delta (used by affix for now)
         to run thios code:
         - td_affix.tds_snap_menu != '' (from above)
         - td_affix.tds_snap_menu != 'snap'
         */
        if (td_affix.tds_snap_menu != 'snap') { //do not run on snap
            if ((td_affix.tds_snap_menu != 'smart_snap_mobile' || td_detect.is_phone_screen === true)) {  // different from smart_snap_mobile or td_detect.is_phone_screen === true
                //console.log('rrr');
                var scroll_direction = '';
                var scrollDelta = 0;

                //check the direction
                if (scrollTop != td_affix.scroll_window_scrollTop_last) { //compute direction only if we have different last scroll top
                    // compute the direction of the scroll
                    if (scrollTop > td_affix.scroll_window_scrollTop_last) {
                        scroll_direction = 'down';
                    } else {
                        scroll_direction = 'up';
                    }
                    //calculate the scroll delta
                    scrollDelta = Math.abs(scrollTop - td_affix.scroll_window_scrollTop_last);
                }

                td_affix.scroll_window_scrollTop_last = scrollTop;
            }
        }

        /*  ---------------------------------------------------------------------------- */

        // show the logo on sticky menu if is always snap setting
        if (td_affix.tds_snap_menu == 'snap' && td_affix.tds_snap_menu_logo == 'show') {
            jQuery('.td-main-menu-logo').addClass('td-logo-sticky');
        }


        //if the menu is in the affix state
        if (scrollTop > td_affix.top_offset || td_affix.is_top_menu === true) {

            //get the menu element
            var td_affix_menu_element = jQuery(td_affix.menu_selector);

            //turn affix on for it
            td_affix._affix_on(td_affix_menu_element);


            //if the menu is only with snap or we are on smart_snap_mobile + mobile, our job here in this function is done, return
            if (td_affix.tds_snap_menu == 'snap' || (td_affix.tds_snap_menu =='smart_snap_mobile' && td_detect.is_phone_screen === false)) {
                return;
            }

            /*    ---  end simple snap  ---  */


            /*  ----------------------------------------------------------------------------
             check scroll directions (we may also have scroll_direction = '', that's why we have to check for the specific state (up or down))
             */



            // boundary check - to not run the position on each scroll event
            if ((td_affix.menu_offset_max_hit === false && scroll_direction=='down') || (td_affix.menu_offset_min_hit === false && scroll_direction=='up')) {
                //request animation frame
                //if (td_affix.is_requestAnimationFrame_running === false) {
                    window.requestAnimationFrame(function(){

                        //console.log(td_affix.menu_offset);
                        //console.log(scrollDelta);
                        var offset = 0;


                        if (scrollTop > 0) { // ios returns negative scrollTop values
                            if (scroll_direction == 'down') {

                                //compute the offset
                                offset = td_affix.menu_offset - scrollDelta;
                                if (offset < -(td_affix.main_menu_height)) {
                                    offset = -(td_affix.main_menu_height);
                                }

                            } else if (scroll_direction == 'up') {
                                //compute the offset
                                offset = td_affix.menu_offset + scrollDelta;
                                if (offset > 0) {
                                    offset = 0;
                                }
                            }

                        }

                        //td_debug.log_live(scroll_direction + ' | scrollTop: ' + scrollTop + '  | offset: ' + offset);

                        //td_affix.is_requestAnimationFrame_running = true;

                        //console.log(offset);

                        //move the menu
                        td_util.td_move_y(td_affix_menu_element[0], offset);

                        //td_affix_menu_element.css({top: (offset) + 'px'});  //legacy menu move code

                        //check boundaries
                        if (offset == 0) {
                            td_affix.menu_offset_min_hit = true;
                        } else {
                            td_affix.menu_offset_min_hit = false;
                        }


                        if (offset == -(td_affix.main_menu_height)) {
                            td_affix.menu_offset_max_hit = true;
                            //also hide the menu when it's 100% out of view on ios - the safari header is transparent and we can see the menu
                            if(td_detect.is_ios === true || td_detect.is_safari) { // safari also
                                td_affix_menu_element.hide();
                            }

                            //show the logo on smart sticky menu
                            if(td_affix.tds_snap_menu_logo == 'show') {
                                jQuery('.td-main-menu-logo').addClass('td-logo-sticky');
                            }
                        } else {
                            td_affix.menu_offset_max_hit = false;

                            if(td_detect.is_ios === true || td_detect.is_safari) { //ios safari fix
                                td_affix_menu_element.show();
                            }
                        }


                        //td_affix.is_requestAnimationFrame_running = false;




                        td_affix.menu_offset = offset; //update the current offset of the menu


                    },td_affix_menu_element[0]);

                //}
                //console.log(offset + ' ' + scroll_direction);

            } //end boundary check



        } else {
            td_affix._affix_off(jQuery(td_affix.menu_selector));
        }

    },


    /**
     * calculates the affix point (the distance from the top when affix should be enabled)
     * @see td_affix.init()
     * @see td_events
     */
    compute_top: function compute_top() {
        td_affix.top_offset = jQuery(td_affix.menu_wrap_selector).offset().top;

        //check to see if the menu is at the top of the screen
        if (td_affix.top_offset == 1) {
            //switch to affix - because the menu is at the top of the page
            //td_affix._affix_on(jQuery(td_affix.menu_selector));
            td_affix.is_top_menu = true;
        } else {
            //check to see the current top offset
            td_affix.is_top_menu = false;

        }
        td_affix.td_events_scroll(jQuery(window).scrollTop());

        //alert(td_affix.top_offset);
        //console.log('computed: ' + td_affix.top_offset);
    },


    /**
     * recalculate the wrapper height. To support different menu heights
     */
    compute_wrapper: function compute_wrapper() {

        //read the height of the menu
        td_affix.main_menu_height = jQuery(td_affix.menu_selector).height();

        // put the menu height to the wrapper. The wrapper remains in the place when the menu is affixed
        jQuery(td_affix.menu_wrap_selector).css('height', td_affix.main_menu_height);
    },

    /**
     * turns affix on for the menu element
     * @param td_affix_menu_element
     * @private
     */
    _affix_on: function _affix_on(td_affix_menu_element) {
        if (td_affix.is_menu_affix === false) {

            td_affix.menu_offset = 0;

            //make the menu fixed
            td_affix_menu_element.addClass('td-affix');

            //add body-td-affix class on body for header style 8 -> when scrolling down the window jumps 76px up when the menu is changing from header style 8 default to header style 8 affix
            jQuery('body').addClass('body-td-affix');

            td_affix.is_menu_affix = true;
        }
    },



    /**
     * Turns affix off for the menu element
     * @param td_affix_menu_element
     * @private
     */
    _affix_off: function _affix_off(td_affix_menu_element) {
        if (td_affix.is_menu_affix === true) {
            //make the menu normal
            jQuery(td_affix.menu_selector).removeClass('td-affix');

            //hide the logo from sticky menu when the menu is not affix
            if(td_affix.tds_snap_menu_logo == 'show') {
                jQuery('.td-main-menu-logo').removeClass('td-logo-sticky');
            }

            //remove body-td-affix class on body for header style 8 -> when scrolling down the window jumps 76px up when the menu is changing from header style 8 default to header style 8 affix
            jQuery('body').removeClass('body-td-affix');

            td_affix.is_menu_affix = false;

            //move the menu to 0 (ios seems to skip animation frames)
            td_util.td_move_y(td_affix_menu_element[0], 0);

            if(td_detect.is_ios === true || td_detect.is_safari) {
                td_affix_menu_element.show();
            }

        }
    }



};





/*
    tagDiv - 2014
    Our portfolio:  http://themeforest.net/user/tagDiv/portfolio
    Thanks for using our theme! :)
*/

/*jslint node: true */
/*global window */
/*global alert */
/*global jQuery */

"use strict";



/*  ----------------------------------------------------------------------------
    On load
 */
jQuery().ready(function jQuery_ready() {

    //retina images
    td_retina();



    // the mobile pull left menu (off canvas)
    td_mobile_menu();

    //handles the toogle efect on mobile menu
    td_mobile_menu_toogle();


    //resize all the videos if we have them
    td_resize_videos();

    //fake placeholder for ie
    jQuery('input, textarea').placeholder();

    //more stories box
    td_more_articles_box.init();

    //used for smart lists
    td_smart_lists_magnific_popup();





}); //end on load



/**
 * More stories box
 */
var td_more_articles_box = {
    is_box_visible:false,
    cookie:'',
    distance_from_top:400,

    init: function init() {


        //read the cookie
        td_more_articles_box.cookie = td_read_site_cookie('td-cookie-more-articles');


        //setting distance from the top
        if(!isNaN(parseInt(tds_more_articles_on_post_pages_distance_from_top)) && isFinite(tds_more_articles_on_post_pages_distance_from_top) && parseInt(tds_more_articles_on_post_pages_distance_from_top) > 0){
            td_more_articles_box.distance_from_top = parseInt(tds_more_articles_on_post_pages_distance_from_top);
        } else {
            td_more_articles_box.distance_from_top = 400;
        }

        //adding event to hide the box
        jQuery('.td-close-more-articles-box').click(function(){

            //hiding the box
            jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');
            jQuery('.td-more-articles-box').hide();

            //cookie life
            if(!isNaN(parseInt(tds_more_articles_on_post_time_to_wait)) && isFinite(tds_more_articles_on_post_time_to_wait)){
                //setting cookie
                td_set_cookies_life(['td-cookie-more-articles', 'hide-more-articles-box', parseInt(tds_more_articles_on_post_time_to_wait)*86400000]);//86400000 is the number of milliseconds in a day
            }
        });
    },

    /**
     * called by td_events.js on scroll
     */
    td_events_scroll: function td_events_scroll(scrollTop) {

        if(td_is_scrolling_animation) { //do not fire the event on animations
            return;
        }

        //check to see if it's enable form panel and also from cookie
        if(td_util.get_backend_var('tds_more_articles_on_post_enable') == "show" && td_more_articles_box.cookie != 'hide-more-articles-box') {

            if (scrollTop > td_more_articles_box.distance_from_top ) {
                if (td_more_articles_box.is_box_visible === false) {
                    jQuery('.td-more-articles-box').addClass('td-front-end-display-block');
                    td_more_articles_box.is_box_visible = true;
                }
            } else {
                if (td_more_articles_box.is_box_visible === true) {
                    jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');
                    td_more_articles_box.is_box_visible = false;
                }
            }
        }
    }
};






var td_resize_timer_id;
jQuery(window).resize(function() {
    clearTimeout(td_resize_timer_id);
    td_resize_timer_id = setTimeout(function() {
        td_done_resizing();
    }, 200);

});

function td_done_resizing(){
    td_resize_videos();
}



/*  ----------------------------------------------------------------------------
    Resize the videos
 */
function td_resize_videos() {
    //youtube in content
    jQuery(document).find('iframe[src*="youtube.com"]').each(function() {

        if(jQuery(this).parent().hasClass("td_wrapper_playlist_player_youtube")) {
            //do nothing for playlist player youtube
        } else {
            var td_video = jQuery(this);
            td_video.attr('width', '100%');
            var td_video_width = td_video.width();
            td_video.css('height', td_video_width * 0.6, 'important');
        }
    });


    //vimeo in content
    jQuery(document).find('iframe[src*="vimeo.com"]').each(function() {
        if(jQuery(this).parent().hasClass("td_wrapper_playlist_player_vimeo")) {
            //do nothing for playlist player vimeo
        } else {
            var td_video = jQuery(this);
            td_video.attr('width', '100%');
            var td_video_width = td_video.width();
            td_video.css('height', td_video_width * 0.6, 'important');
        }
    });


    //daily motion in content
    jQuery(document).find('iframe[src*="dailymotion.com"]').each(function() {
        var td_video = jQuery(this);
        td_video.attr('width', '100%');
        var td_video_width = td_video.width();
        td_video.css('height', td_video_width * 0.6, 'important');
    });


    //wordpress embedded
    jQuery(document).find(".wp-video-shortcode").each(function() {
        var td_video = jQuery(this);

        var td_video_width = td_video.width() + 3;
        jQuery(this).parent().css('height', td_video_width * 0.56, 'important');
        //td_video.css('height', td_video_width * 0.6, 'important')
        td_video.css('width', '100%', 'important');
        td_video.css('height', '100%', 'important');
    })
}






//handles mobile menu
function td_mobile_menu() {
    jQuery('#td-top-mobile-toggle a, .td-mobile-close a').click(function(){
        if(jQuery('body').hasClass('td-menu-mob-open-menu')) {
            jQuery('body').removeClass('td-menu-mob-open-menu');
        } else {
            if (td_detect.is_mobile_device) {
                // on mobile devices scroll to top instantly and wait a bit and open the menu
                window.scrollTo(0, 0);
                setTimeout(function(){
                    jQuery('body').addClass('td-menu-mob-open-menu');
                }, 100);
            } else {
                // on desktop open it with full animations
                jQuery('body').addClass('td-menu-mob-open-menu');
                setTimeout(function(){
                    td_util.scroll_to_position(0, 1200);
                }, 200);
            }
        }
    });
}


//handles open/close mobile menu
function td_mobile_menu_toogle() {

    jQuery('#td-mobile-nav .menu-item-has-children ul').hide();

    //move thru all the menu and find the item with sub-menues to atach a custom class to them
    jQuery(document).find('#td-mobile-nav .menu-item-has-children').each(function(i) {

        var class_name = 'td_mobile_elem_with_submenu_' + i;
        jQuery(this).addClass(class_name);

        //add an element to click on
        //jQuery(this).children("a").append('<div class="td-element-after" data-parent-class="' + class_name + '"></div>');
        jQuery(this).children("a").append('<i class="td-icon-menu-down td-element-after" data-parent-class="' + class_name + '"></i>');


        //click on link elements with #
        jQuery(this).children("a").addClass("td-link-element-after").attr("data-parent-class", class_name);
    });

    jQuery(".td-element-after, .td-link-element-after").click(function(event) {

        if(jQuery(this).hasClass("td-element-after") || jQuery(this).attr("href") == "#" ){
            event.preventDefault();
            event.stopPropagation();
        }


        //take the li parent class
        var parent_class = jQuery(this).data('parent-class');

        //target the sub-menu to open
        var target_to_open = '#td-mobile-nav .' + parent_class + ' > a + ul';
        if(jQuery(target_to_open).css('display') == 'none') {
            jQuery(target_to_open).show();
        } else {
            jQuery(target_to_open).hide();
        }


    });
}



/*  ----------------------------------------------------------------------------
    Add retina support
 */

function td_retina() {
    if (window.devicePixelRatio > 1) {
        jQuery('.td-retina').each(function(i) {
            var lowres = jQuery(this).attr('src');
            var highres = lowres.replace(".png", "@2x.png");
            highres = highres.replace(".jpg", "@2x.jpg");
            jQuery(this).attr('src', highres);

        });


        //custom logo support
        jQuery('.td-retina-data').each(function(i) {
            jQuery(this).attr('src', jQuery(this).data('retina'));
            //fix logo aligment on retina devices
            jQuery(this).addClass('td-retina-version');
        });

    }
}

/*
jQuery('body').click(function(e){
    if(! jQuery(e.target).hasClass('custom-background')){
        alert('clicked on something that has not the class theDIV');
    }

});*/

//click only on BACKGROUND, for devices that don't have touch (ex: phone, tablets)
if(!td_detect.is_touch_device && td_ad_background_click_link != '') {


    //var ev = ev || window.event;
    //var target = ev.target || ev.srcElement;
    jQuery('body').click(function(event) {

        //getting the target element that the user clicks - for W3C and MSIE
        var target = (event.target) ? event.target : event.srcElement;

        //only click on background
        if(jQuery(target).hasClass('td-content-wrap')) {

                //open the link ad page
                if(td_ad_background_click_target == '_blank') {
                    //open in a new window
                    window.open(td_ad_background_click_link)
                } else {
                    //open in the same window
                    location.href = td_ad_background_click_link;
                }
            }

        //e.stopPropagation();
        //stopBubble(event);
    });
}





/**
 * reading cookies
 * @param name
 * @returns {*}
 */
function td_read_site_cookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}


/**
 *
 * @param td_time_cookie_array
 *
 * @param[0]: name of the cookie
 * @param[1]: value of the cookie
 * @param[2]: expiration time
 */
function td_set_cookies_life(td_time_cookie_array) {
    var expiry = new Date();
    expiry.setTime(expiry.getTime() + td_time_cookie_array[2]);

    // Date()'s toGMTSting() method will format the date correctly for a cookie
    document.cookie = td_time_cookie_array[0] + "=" + td_time_cookie_array[1] + "; expires=" + expiry.toGMTString();
}




















/*  ----------------------------------------------------------------------------
    Scroll to top + animation stop
 */

var td_is_scrolling_animation = false;
var td_mouse_wheel_or_touch_moved = false; //we want to know if the user stopped the animation via touch or mouse move

//stop the animation on mouse wheel
jQuery(document).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(e){
    if (td_is_scrolling_animation === false) {
        return;
    } else {
        td_is_scrolling_animation = false;
        td_mouse_wheel_or_touch_moved = true;

        jQuery("html, body").stop();
    }
});

//stop the animation on touch
if (document.addEventListener){
    document.addEventListener('touchmove', function(e) {
        if (td_is_scrolling_animation === false) {
            return;
        } else {
            td_is_scrolling_animation = false;
            td_mouse_wheel_or_touch_moved = true;
            jQuery("html, body").stop();
        }
    }, false);
}

/**
 * called by td_events.js on scroll - back to top
 */
var td_scroll_to_top_is_visible = false;
function td_events_scroll_scroll_to_top(scrollTop) {
    if(td_is_scrolling_animation) {  //do not fire the event on animations
        return;
    }
    if (scrollTop > 400) {
        if (td_scroll_to_top_is_visible === false) { //only add class if needed
            td_scroll_to_top_is_visible = true;
            jQuery('.td-scroll-up').addClass('td-scroll-up-visible');
        }
    } else {
        if (td_scroll_to_top_is_visible === true) { //only add class if needed
            td_scroll_to_top_is_visible = false;
            jQuery('.td-scroll-up').removeClass('td-scroll-up-visible');
        }
    }
}


jQuery('.td-scroll-up').click(function(){
    if(td_is_scrolling_animation) { //double check - because when we remove the class, the button is still visible for a while
        return;
    }

    //hide the button
    td_scroll_to_top_is_visible = false;
    jQuery('.td-scroll-up').removeClass('td-scroll-up-visible');

    //hide more articles box
    td_more_articles_box.is_box_visible = false;
    jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');

    //scroll to top
    td_util.scroll_to_position(0, 1200);

    return false;
});









// small down arrow on template 6 and full width index
jQuery('.td-read-down a').click(function(event){
    event.preventDefault();
    td_util.scroll_to_position(jQuery('.td-full-screen-header-image-wrap').height(), 1200);

});

/**
 * make td-post-template-6 title move down and blurry
 * called from single_tempalte_6.php via the js buffer
 */
function td_post_template_6_title() {



    //define all the variables - for better performance ?
    var td_parallax_el = document.getElementById('td_parallax_header_6');

    var td_parallax_bg_el = document.getElementById('td-full-screen-header-image');

    var scroll_from_top = '';
    var distance_from_bottom;

    //attach the animation tick on scroll
    jQuery(window).scroll(function(){
        // with each scroll event request an animation frame (we have a polyfill for animation frame)
        // the requestAnimationFrame is called only once and after that we wait
        td_request_tick();
    });


    var td_animation_running = false; //if the tick is running, we set this to true

    function td_request_tick() {
        if (td_animation_running === false) {
            window.requestAnimationFrame(td_do_animation);
        }
        td_animation_running = true;
    }

    /**
     * the animation loop
     */
    function td_do_animation() {
        scroll_from_top = jQuery(document).scrollTop();
        if (scroll_from_top <= 950) { //stop the animation after scroll from top

            var blur_value = 1 - (scroll_from_top / 800); // @todo trebuie verificata formula??
            if (td_detect.is_ie8 === true) {
                blur_value = 1;
            }


            blur_value = Math.round(blur_value * 100) / 100;

            //opacity
            td_parallax_el.style.opacity = blur_value;

            //move the bg
            var parallax_move = -Math.round(scroll_from_top / 4);
            td_util.td_move_y(td_parallax_bg_el,-parallax_move);


            //move the title + cat
            distance_from_bottom = -Math.round(scroll_from_top / 8);
            td_util.td_move_y(td_parallax_el,-distance_from_bottom);
            //td_parallax_el.style.bottom = distance_from_bottom + "px";  //un accelerated version


        }

        td_animation_running = false;
    }



}

//used for smart lists
function td_smart_lists_magnific_popup() {
    //magnific popup
    jQuery(".td-slide-smart-list-figure").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        image: {
            tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
            titleSrc: function(item) {//console.log(item.el);
                //alert(jQuery(item.el).data("caption"));
                return item.el.attr("data-caption");
            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function(item) {
                /**
                 * if we have pictures only on 3 from 4 slides then remove, from magnific popup, the one with no image
                 */
                //console.log(item);
                //console.log(item.el[0].id);
                //console.log(parseInt(nr_slide[1]) + 1);
                if(item.el[0].id != '') {
                    var nr_slide = item.el[0].id.split("_");

                    // Will fire when popup is closed
                    //jQuery(".td-iosSlider").iosSlider("goToSlide", this.currItem.index + 1 );
                    jQuery(".td-iosSlider").iosSlider("goToSlide", parseInt(nr_slide[1]) + 1);
                } else {
                    td_modal_image_last_el = item.el;
                    setTimeout(function(){
                        td_util.scroll_into_view(item.el);
                    }, 100);
                }
            },
            beforeClose: function() {
                //td_util.scroll_into_view(td_modal_image_last_el);
            }
        }
    });
}


function td_get_document_width() {
    var x = 0;
    if (self.innerHeight)
    {
        x = self.innerWidth;
    }
    else if (document.documentElement && document.documentElement.clientHeight)
    {
        x = document.documentElement.clientWidth;
    }
    else if (document.body)
    {
        x = document.body.clientWidth;
    }
    return x;
}

function td_get_document_height() {
    var y = 0;
    if (self.innerHeight)
    {
        y = self.innerHeight;
    }
    else if (document.documentElement && document.documentElement.clientHeight)
    {
        y = document.documentElement.clientHeight;
    }
    else if (document.body)
    {
        y = document.body.clientHeight;
    }
    return y;
}


//stop propagation
function stopBubble(e){
    if(e && e.stopPropagation) {
        e.stopPropagation();
    } else {
        window.event.cancelBubble=true;
    }
}
/**
 * Created by ra on 10/10/2014.
 */



/*  ----------------------------------------------------------------------------
 smooth hash scrolling - fix for hash links
 */
var td_hash_scroll_to_dom_element = '';


/**
 *  if we have link.php#hash we search the document for elements with that name or id so we can rename them to avoid the default screen scrolling
 */
if ( document.location.hash) {
    if( jQuery(document.location.hash).length != 0 ) { //we have elements that match the id

        //prepare a new name for the hash
        var new_target_hash = window.location.hash.substring(1) + '_td';

        //get the target element
        td_hash_scroll_to_dom_element = jQuery(document.location.hash);


        //change the element id
        td_hash_scroll_to_dom_element.attr("id", new_target_hash);

        //scroll to element
        td_util.scroll_into_view(td_hash_scroll_to_dom_element);

        /*
         // do not rename the hash back! bug in firefox after comment submition + an enter in the nav bar
         setTimeout(function(){
         //put the hash back after the rename
         td_hash_scroll_to_dom_element.attr("id", window.location.hash.substring(1));
         }, 2000);
         */

    }


    if (jQuery('[name="' + window.location.hash.substring(1) + '"]').length != 0) { //we have elements that have the name
        //prepare a new name for the hash
        var new_target_hash = window.location.hash.substring(1) + '_td';

        //get the target element
        td_hash_scroll_to_dom_element = jQuery('[name="' + window.location.hash.substring(1) + '"]');


        //change the element id
        td_hash_scroll_to_dom_element.attr("name", new_target_hash);

        //scroll to element
        td_util.scroll_into_view(td_hash_scroll_to_dom_element);


        /*
         // do not rename the hash back! bug in firefox after comment submition + an enter in the nav bar
         setTimeout(function(){
         //put the hash back after the rename
         td_hash_scroll_to_dom_element.attr("id", window.location.hash.substring(1));
         }, 2000);
         */
    }

}








jQuery(window).load(function() {

    //we have a hash that dosn't have an element
    if (td_hash_scroll_to_dom_element == '') {
        return;
    }

    if (td_mouse_wheel_or_touch_moved === true) { //the user has moved the wheel or touched the screen
        return;
    }
    //make sure that we scroll to element
    td_util.scroll_into_view(td_hash_scroll_to_dom_element);
});



/**
 * replace the default behaviour of links with #links
 */
jQuery("a[href*=#]").click(function(e) {
    e.preventDefault();



    if (this.hash.indexOf('tab') > -1) {
        return;
    }

    if( jQuery(this.hash).length != 0 ) {
        // go to the id = #hash
        td_util.scroll_into_view(jQuery(this.hash));
    } else if (jQuery('[name="' + this.hash.substring(1) + '"]').length != 0 ) {
        td_util.scroll_into_view(jQuery('[name="' + this.hash.substring(1) + '"]'));
    } else {

        // check to see if the url is valid
        if (td_util.is_valid_url(jQuery(this).attr("href"))) {
            window.location.href = jQuery(this).attr("href");
        } else {

        }


    }
});




var td_loading_box = {

    //array_colors: ['#ffffff', '#fafafa', '#ececec', '#dddddd', '#bfbfbf', '#9a9a9a', '#7e7e7e', '#636363'],//whiter -> darker

    array_colors_temp: ['rgba(99, 99, 99, 0)', 'rgba(99, 99, 99, 0.05)', 'rgba(99, 99, 99, 0.08)', 'rgba(99, 99, 99, 0.2)', 'rgba(99, 99, 99, 0.3)', 'rgba(99, 99, 99, 0.5)', 'rgba(99, 99, 99, 0.6)', 'rgba(99, 99, 99, 1)'],//whiter -> darker

    array_colors: [],

    status_animation: 'stop',

    //stop loading box
    stop : function stop () {
        td_loading_box.status_animation = 'stop';
        //jQuery('.td-loader-gif').html("");
    },


    //init loading box
    init : function init (color) {

        var td_color_reg_exp = /^#[a-zA-Z0-9]{3,6}$/;
        if(color && td_color_reg_exp.test(color)) {

            var col_rgba = td_loading_box.hexToRgb(color);

            var rgba_string = "rgba(" + col_rgba.r + ", " + col_rgba.g + ", " + col_rgba.b + ", ";

            td_loading_box.array_colors[7] = rgba_string + " 1)";
            td_loading_box.array_colors[6] = rgba_string + " 0.6)";
            td_loading_box.array_colors[5] = rgba_string + " 0.5)";
            td_loading_box.array_colors[4] = rgba_string + " 0.3)";
            td_loading_box.array_colors[3] = rgba_string + " 0.2)";
            td_loading_box.array_colors[2] = rgba_string + " 0.08)";
            td_loading_box.array_colors[1] = rgba_string + " 0.05)";
            td_loading_box.array_colors[0] = rgba_string + " 0)";

        } else {
            //default array
            td_loading_box.array_colors = td_loading_box.array_colors_temp.slice(0);

        }

        if(td_loading_box.status_animation == 'stop') {
            td_loading_box.status_animation = 'display';
            this.render();
        }
    },


    //create the animation
    render: function render (color) {

        //call the animation_display function
        td_loading_box.animation_display('<div class="td-lb-box td-lb-box-1" style="background-color:' + td_loading_box.array_colors[0] + '"></div><div class="td-lb-box td-lb-box-2" style="background-color:' + td_loading_box.array_colors[1] + '"></div><div class="td-lb-box td-lb-box-3" style="background-color:' + td_loading_box.array_colors[2] + '"></div><div class="td-lb-box td-lb-box-4" style="background-color:' + td_loading_box.array_colors[3] + '"></div><div class="td-lb-box td-lb-box-5" style="background-color:' + td_loading_box.array_colors[4] + '"></div><div class="td-lb-box td-lb-box-6" style="background-color:' + td_loading_box.array_colors[5] + '"></div><div class="td-lb-box td-lb-box-7" style="background-color:' + td_loading_box.array_colors[6] + '"></div><div class="td-lb-box td-lb-box-8" style="background-color:' + td_loading_box.array_colors[7] + '"></div>');

        //direction right
        var temp_color_array = [td_loading_box.array_colors[0], td_loading_box.array_colors[1], td_loading_box.array_colors[2], td_loading_box.array_colors[3], td_loading_box.array_colors[4], td_loading_box.array_colors[5], td_loading_box.array_colors[6], td_loading_box.array_colors[7]];

        td_loading_box.array_colors[0] = temp_color_array[7];
        td_loading_box.array_colors[1] = temp_color_array[0];
        td_loading_box.array_colors[2] = temp_color_array[1];
        td_loading_box.array_colors[3] = temp_color_array[2];
        td_loading_box.array_colors[4] = temp_color_array[3];
        td_loading_box.array_colors[5] = temp_color_array[4];
        td_loading_box.array_colors[6] = temp_color_array[5];
        td_loading_box.array_colors[7] = temp_color_array[6];

        if(td_loading_box.status_animation == 'display') {


            setTimeout(td_loading_box.render, 40);
        } else {
            td_loading_box.animation_display('');
        }
    },


    //display the animation
    animation_display: function animation_display (animation_str) {
        jQuery('.td-loader-gif').html(animation_str);
    },


    //converts hex to rgba
    hexToRgb: function hexToRgb(hex) {
        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);

        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }
}; //td_loading_box.init();//td_loading_box.stop();
/*  ----------------------------------------------------------------------------
 Ajax search
 */
var td_aj_search_cur_sel = 0;
var td_aj_search_results = 0;
var td_aj_first_down_up = true;

/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    // live search via ajax
    td_ajax_search();

}); //end on load


function td_ajax_search() {

    /*
     *
     * click on document to hide certain stuff
     * when user click outside the used item
     * here is used to hide the search box
     *
     * */

    jQuery(document).click(function(e) {//alert(e.target.className);
        if(e.target.className!=="td-icon-search" && e.target.id!=="td-header-search" && e.target.id!=="td-header-search-top") {
            jQuery(".dropdown-menu").hide();
        }

        /*/pulldown filter
         if(e.target.className!=="td-pulldown-filter-display-option") {
         //jQuery("#td-pulldown-filter-display-option").removeClass("td-puldown-filter-remove-bottom-border");
         jQuery(".td-pulldown-filter-list").hide();
         }*/
    });


    //show the search field and put focus on search box in header
    jQuery('#search-button').click(function(){

        //show the search box
        jQuery('.dropdown-menu').toggle();



    });


    jQuery('#td-header-search').keydown(function(event) {

        //console.log(event.keyCode);


        if ((event.which && event.which == 39) || (event.keyCode && event.keyCode == 39) || (event.which && event.which == 37) || (event.keyCode && event.keyCode == 37)) {
            //do nothing on left and right arrows
            td_aj_search_input_focus();
            return;
        }

        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {

            //redirectSearch('q');
            var td_aj_cur_element = jQuery('.td-aj-cur-element');
            if (td_aj_cur_element.length > 0) {
                //alert('ra');
                var td_go_to_url = td_aj_cur_element.find('.entry-title a').attr('href');
                window.location = td_go_to_url;
            } else {
                jQuery(this).parent().parent().submit();
            }

            return false; //redirect for search on enter
        } else {

            if ((event.which && event.which == 40) || (event.keyCode && event.keyCode == 40)) {
                // down
                td_aj_search_move_prompt_down();
                return false; //disable the envent

            } else if((event.which && event.which == 38) || (event.keyCode && event.keyCode == 38)) {
                //up
                td_aj_search_move_prompt_up();
                return false; //disable the envent
            } else {

                //for backspace we have to check if the search query is empty and if so, clear the list
                if ((event.which && event.which == 8) || (event.keyCode && event.keyCode == 8)) {
                    //if we have just one character left, that means it will be deleted now and we also have to clear the search results list
                    var search_query = jQuery(this).val();
                    if (search_query.length == 1) {
                        jQuery('#td-aj-search').empty();
                    }

                }

                //various keys
                td_aj_search_input_focus();
                //jQuery('#td-aj-search').empty();
                setTimeout(function(){
                    td_ajax_search_do_request();
                }, 100);
            }
            return true;
        }

    });



}

//moves the select up
function td_aj_search_move_prompt_up() {


    if (td_aj_first_down_up === true) {
        td_aj_first_down_up = false;
        if (td_aj_search_cur_sel === 0) {
            td_aj_search_cur_sel = td_aj_search_results - 1;
        } else {
            td_aj_search_cur_sel--;
        }
    } else {
        if (td_aj_search_cur_sel === 0) {
            td_aj_search_cur_sel = td_aj_search_results;
        } else {
            td_aj_search_cur_sel--;
        }
    }


    jQuery('.td_module_wrap').removeClass('td-aj-cur-element');



    if (td_aj_search_cur_sel  > td_aj_search_results -1) {
        //the input is selected
        jQuery('.td-search-form').fadeTo(100, 1);
    } else {
        td_aj_search_input_remove_focus();
        jQuery('.td_module_wrap').eq(td_aj_search_cur_sel).addClass('td-aj-cur-element');
    }



}

//moves the select prompt down
function td_aj_search_move_prompt_down() {

    if (td_aj_first_down_up === true) {
        td_aj_first_down_up = false;
    } else {
        if (td_aj_search_cur_sel === td_aj_search_results) {
            td_aj_search_cur_sel = 0;
        } else {
            td_aj_search_cur_sel++;
        }
    }


    jQuery('.td_module_wrap').removeClass('td-aj-cur-element');

    if (td_aj_search_cur_sel > td_aj_search_results - 1 ) {
        //the input is selected
        jQuery('.td-search-form').fadeTo(100, 1);
    } else {
        td_aj_search_input_remove_focus();
        jQuery('.td_module_wrap').eq(td_aj_search_cur_sel).addClass('td-aj-cur-element');
    }


}


// puts the focus on the input box
function td_aj_search_input_focus() {
    td_aj_search_cur_sel = 0;
    td_aj_first_down_up = true;
    jQuery('.td-search-form').fadeTo(100, 1);
    jQuery('.td_module_wrap').removeClass('td-aj-cur-element');
}

//removes the focus from the input box
function td_aj_search_input_remove_focus() {
    if (td_aj_search_results !== 0) {
        jQuery('.td-search-form').css('opacity', 0.5);
    }
}

//makes an ajax request
function td_ajax_search_do_request() {

    //console.log("log:" + jQuery('#td-header-search').val());


    if (jQuery('#td-header-search').val() == '') {
        td_aj_search_input_focus();
        return;
    }



    var search_query = jQuery('#td-header-search').val();


    //do we have a cache hit
    if (td_local_cache.exist(search_query)) {
        td_ajax_search_process_request(td_local_cache.get(search_query));
        return; //cache HIT
    }


    //fk no cache hit - do the real request



    jQuery.ajax({
        type: 'POST',
        url: td_ajax_url,
        data: {
            action: 'td_ajax_search',
            td_string: search_query
        },
        success: function(data, textStatus, XMLHttpRequest){
            td_local_cache.set(search_query, data);
            td_ajax_search_process_request(data);
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            //console.log(errorThrown);
        }
    });
}

function td_ajax_search_process_request(data) {
    var current_query = jQuery('#td-header-search').val();

    //the search is empty - drop results
    if (current_query == '') {
        jQuery('#td-aj-search').empty();
        return;
    }

    var td_data_object = jQuery.parseJSON(data); //get the data object
    //drop the result - it's from a old query
    if (td_data_object.td_search_query !== current_query) {
        return;
    }

    //reset the current selection and total posts
    td_aj_search_cur_sel = 0;
    td_aj_search_results = td_data_object.td_total_in_list;
    td_aj_first_down_up = true;


    //update the query
    jQuery('#td-aj-search').html(td_data_object.td_data);

    /*
     td_data_object.td_data
     td_data_object.td_total_results
     td_data_object.td_total_in_list
     */
}




"use strict";

/* ----------------------------------------------------------------------------
 td_post_images.js
 --------------------------------------------------------------------------- */



/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {
    //handles the modal images
    td_modal_image();

    //move classes from post images to figure - td-post-image-full etc
    td_util.image_move_class_to_figure('td-post-image-full');
    td_util.image_move_class_to_figure('td-post-image-right');
    td_util.image_move_class_to_figure('td-post-image-left');

});











var td_modal_image_last_el = '';

// handles modal images for: Featured images, inline image, inline image with caption, galleries
function td_modal_image() {

    //fix wordpress figure + figcaption (we move the figcaption in the data-caption attribute of the link)
    jQuery('figure.wp-caption').each(function() {
        var caption_text = jQuery(this).children('figcaption').html();
        jQuery(this).children('a').data('caption', caption_text);
    });

    //move td-modal-image class to the parent a from the image. We can only add this class to the image via word press media editor
    jQuery('.td-modal-image').each(function() {
        jQuery(this).parent().addClass('td-modal-image');
        jQuery(this).removeClass('td-modal-image');
    });



    //popup on modal images in articles
    jQuery('article').magnificPopup({
        type:'image',
        delegate: ".td-modal-image",
        gallery:{
            enabled:true
        },
        image: {
            tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
            titleSrc: function(item) {//console.log(item.el);
                //alert(jQuery(item.el).data("caption"));
                var td_current_caption = jQuery(item.el).data('caption');
                if (typeof td_current_caption != "undefined") {
                    return td_current_caption;
                } else {
                    return '';
                }


            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function(item) {
                td_modal_image_last_el = item.el;
                //setTimeout(function(){
                td_util.scroll_into_view(item.el);
                //}, 100);

            },
            beforeClose: function() {
                td_util.scroll_into_view(td_modal_image_last_el);
            }

        }
    });





    //gallery popup
    //detect jetpack carousel and disable the theme popup
    if (typeof jetpackCarouselStrings === 'undefined') {

        // copy gallery caption from figcaption to data-caption attribute of the link to the full image, in this way the modal can read the caption
        jQuery('figure.gallery-item').each(function() {
            var caption_text = jQuery(this).children('figcaption').html();
            jQuery(this).find('a').data('caption', caption_text);
        });



        //jquery tiled gallery
        jQuery('.tiled-gallery').magnificPopup({
            type:'image',
            delegate: "a",
            gallery:{
                enabled:true
            },
            image: {
                tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
                titleSrc: function(item) {//console.log(item.el);
                    var td_current_caption = jQuery(item.el).parent().find('.tiled-gallery-caption').text();
                    if (typeof td_current_caption != "undefined") {
                        return td_current_caption;
                    } else {
                        return '';
                    }
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find("img");
                }
            },
            callbacks: {
                change: function(item) {
                    td_modal_image_last_el = item.el;
                    td_util.scroll_into_view(item.el);
                },
                beforeClose: function() {
                    td_util.scroll_into_view(td_modal_image_last_el);
                }

            }
        });



        jQuery('.gallery').magnificPopup({
            type:'image',
            delegate: ".gallery-icon > a",
            gallery:{
                enabled:true
            },
            image: {
                tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
                titleSrc: function(item) {//console.log(item.el);
                    var td_current_caption = jQuery(item.el).data('caption');
                    if (typeof td_current_caption != "undefined") {
                        return td_current_caption;
                    } else {
                        return '';
                    }
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find("img");
                }
            },
            callbacks: {
                change: function(item) {
                    td_modal_image_last_el = item.el;
                    td_util.scroll_into_view(item.el);
                },
                beforeClose: function() {
                    td_util.scroll_into_view(td_modal_image_last_el);
                }

            }
        });


    }

} //end modal

// minimized js - made by tagDiv -
jQuery().ready(function(){td_on_ready_ajax_blocks()});
function td_on_ready_ajax_blocks(){function b(){var a=jQuery(this).data("td_block_id");jQuery(".mega-menu-sub-cat-"+a).removeClass("cur-sub-cat");jQuery(this).addClass("cur-sub-cat");a=td_getBlockObjById(a);a.td_filter_value=jQuery(this).data("td_filter_value");a.td_current_page=1;td_ajax_do_block_request(a,"mega_menu")}jQuery(".td-ajax-next-page").click(function(a){a.preventDefault();a=td_getBlockObjById(jQuery(this).data("td_block_id"));jQuery(this).hasClass("ajax-page-disabled")||!0===a.is_ajax_running||
(a.is_ajax_running=!0,a.td_current_page++,td_ajax_do_block_request(a,"next"))});jQuery(".td_ajax-prev-page").click(function(a){a.preventDefault();a=td_getBlockObjById(jQuery(this).data("td_block_id"));jQuery(this).hasClass("ajax-page-disabled")||!0===a.is_ajax_running||(a.is_ajax_running=!0,a.td_current_page--,td_ajax_do_block_request(a,"back"))});jQuery(".td_ajax_load_more").click(function(a){a.preventDefault();jQuery(this).hasClass("ajax-page-disabled")||(a=td_getBlockObjById(jQuery(this).data("td_block_id")),
a.td_current_page++,td_ajax_do_block_request(a,"load_more"))});td_detect.is_mobile_device?jQuery(".td-pulldown-filter-display-option").click(function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).addClass("td-pulldown-filter-list-open");a=jQuery("#td_pulldown_"+a+"_list");a.removeClass("fadeOut");a.addClass("animated fadeIn")}):jQuery(".td-pulldown-filter-display-option").hover(function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).addClass("td-pulldown-filter-list-open");
a=jQuery("#td_pulldown_"+a+"_list");a.removeClass("fadeOut");a.addClass("animated fadeIn");a.css("visibility","visible")},function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).removeClass("td-pulldown-filter-list-open")});jQuery(".td-pulldown-filter-link").click(function(a){a.preventDefault();var c=jQuery(this).data("td_block_id");jQuery("#"+c).find(".iosSlider").iosSlider("destroy");var b=td_getBlockObjById(c);b.td_filter_value=jQuery(this).data("td_filter_value");b.td_filter_ui_uid=
jQuery(this).attr("id");b.td_current_page=1;td_pull_down_filter_change_value(b.id,'<span>Loading... </span><i class="td-icon-menu-down"></i>');jQuery("#td_pulldown_"+c).removeClass("td-pulldown-filter-list-open");td_ajax_do_block_request(b,"pull_down");td_detect.is_mobile_device&&stopBubble(a)});jQuery(".td-related-title a").click(function(a){a.preventDefault();jQuery(".td-related-title").children("a").removeClass("td-cur-simple-item");jQuery(this).addClass("td-cur-simple-item");a=jQuery(this).data("td_block_id");
a=td_getBlockObjById(a);a.td_filter_value=jQuery(this).data("td_filter_value");a.td_current_page=1;td_ajax_do_block_request(a,"pull_down")});td_detect.is_touch_device?jQuery(".block-mega-child-cats a").click(b):jQuery(".block-mega-child-cats a").hover(b,function(a){})}function td_pull_down_filter_change_value(b,a){jQuery("#td-pulldown-"+b+"-val").html(a)}
function td_ajax_do_block_request(b,a){var c=JSON.stringify(b);if(td_local_cache.exist(c))return td_block_ajax_loading_start(b,!0,a),td_ajax_block_process_response(td_local_cache.get(c),a),"cache_hit";td_block_ajax_loading_start(b,!1,a);jQuery.ajax({type:"POST",url:td_ajax_url,cache:!0,data:{action:"td_ajax_block",td_atts:b.atts,td_block_id:b.id,td_column_number:b.td_column_number,td_current_page:b.td_current_page,block_type:b.block_type,td_filter_value:b.td_filter_value,td_filter_ui_uid:b.td_filter_ui_uid,
td_user_action:b.td_user_action},success:function(b,e,f){td_local_cache.set(c,b);td_ajax_block_process_response(b,a)},error:function(a,b,c){}})}
function td_ajax_block_process_response(b,a){var c=jQuery.parseJSON(b);c.td_filter_ui_uid&&td_pull_down_filter_change_value(c.td_block_id,"<span>"+jQuery("#"+c.td_filter_ui_uid).html()+' </span><i class="td-icon-menu-down"></i>');"load_more"==a||"infinite_load"==a?jQuery(c.td_data).addClass("animated_xxlong").appendTo("#"+c.td_block_id).addClass("fadeIn"):jQuery("#"+c.td_block_id).html(c.td_data);!0===c.td_hide_prev?jQuery("#prev-page-"+c.td_block_id).addClass("ajax-page-disabled"):jQuery("#prev-page-"+
c.td_block_id).removeClass("ajax-page-disabled");!0===c.td_hide_next?jQuery("#next-page-"+c.td_block_id).addClass("ajax-page-disabled"):jQuery("#next-page-"+c.td_block_id).removeClass("ajax-page-disabled");var d=td_getBlockObjById(c.td_block_id);"slide"===d.block_type&&jQuery("#"+c.td_block_id+" .slide-wrap-active-first").addClass("slide-wrap-active");d.is_ajax_running=!1;td_block_ajax_loading_end(c,d,a)}
function td_block_ajax_loading_start(b,a,c){var d=jQuery("#"+b.id);jQuery(".td-loader-gif").remove();jQuery("#"+b.id).removeClass("fadeInRight fadeInLeft fadeInDown fadeInUp animated_xlong");d.addClass("td_block_inner_overflow");var e=d.height();d.css("height",e);!0!==a&&("load_more"==c?(d.parent().append('<div class="td-loader-gif td-loader-gif-bottom td-loader-animation-start"></div>'),td_loading_box.init(b.header_color?b.header_color:tds_theme_color_site_wide),setTimeout(function(){jQuery(".td-loader-gif").removeClass("td-loader-animation-start");
jQuery(".td-loader-gif").addClass("td-loader-animation-mid")},50)):"infinite_load"!=c&&(d.parent().append('<div class="td-loader-gif td-loader-animation-start"></div>'),td_loading_box.init(b.header_color?b.header_color:tds_theme_color_site_wide),setTimeout(function(){jQuery(".td-loader-gif").removeClass("td-loader-animation-start");jQuery(".td-loader-gif").addClass("td-loader-animation-mid")},50),d.addClass("animated_long fadeOut_to_1")))}
function td_block_ajax_loading_end(b,a,c){jQuery(".td-loader-gif").removeClass("td-loader-animation-mid");jQuery(".td-loader-gif").addClass("td-loader-animation-end");setTimeout(function(){jQuery(".td-loader-gif").remove();td_loading_box.stop()},400);var d=jQuery("#"+a.id);d.removeClass("animated_long fadeOut_to_1");switch(c){case "next":d.addClass("animated_xlong fadeInRight");break;case "back":d.addClass("animated_xlong fadeInLeft");break;case "pull_down":d.addClass("animated_xlong fadeInDown");
break;case "mega_menu":d.addClass("animated_xlong fadeInUp");break;case "infinite_load":setTimeout(function(){td_infinite_loader.compute_top_distances();""!=b.td_data&&td_infinite_loader.enable_is_visible_callback(a.id)},500),setTimeout(function(){td_infinite_loader.compute_top_distances()},1E3),setTimeout(function(){td_infinite_loader.compute_top_distances()},1500)}setTimeout(function(){jQuery(".td_block_inner_overflow").removeClass("td_block_inner_overflow");d.css("height","auto");td_smart_sidebar.compute()},
200);setTimeout(function(){td_smart_sidebar.compute()},500)}function td_getBlockIndex(b){var a=0,c=0;jQuery.each(td_blocks,function(d,e){if(e.id===b)return c=a,!1;a++});return c}function td_getBlockObjById(b){return td_blocks[td_getBlockIndex(b)]};

// end minimized

/*
 td_util.js
 v1.1
 */

"use strict";


/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    /**
     * Modal window js code
     */
    jQuery('.td-login-modal-js').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',
        removalDelay: 500,

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {


                this.st.mainClass = this.st.el.attr('data-effect');


                //empty all fields
                td_modala_empty_all_fields();

                //empty error display div
                td_modala_empty_err_div();

                if(jQuery(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    if (td_detect.is_ie === false) {
                        //do not focus on ie 10
                        this.st.focus = '#login_email';
                    }

                }
            },

            beforeClose: function() {
            }
        }
    });


    //login
    jQuery('#login-link').on( "click", function() {
        //hides or shows the divs with inputs
        show_hide_content_modala([['#td-login-div', 1], ['#td-register-div', 0], ['#td-forgot-pass-div', 0]]);

        //moves focus on the tab
        modala_swich_tabs([['#login-link', 1], ['#register-link', 0]]);

        if(jQuery(window).width() > 700 && td_detect.is_ie === false) {
            jQuery('#login_email').focus();
        }

        //empty all fields
        //td_modala_empty_all_fields();

        //empty error display div
        td_modala_empty_err_div();
    });
    //login button
    jQuery('#login_button').on( "click", function() {
        handle_login_for_modal_window();
    });
    //enter key on #login_pass
    jQuery('#login_pass').keydown(function(event) {
        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
            handle_login_for_modal_window();
        }
    });

    //register
    jQuery('#register-link').on( "click", function() {
        //hides or shows the divs with inputs
        show_hide_content_modala([['#td-login-div', 0], ['#td-register-div', 1], ['#td-forgot-pass-div', 0]]);

        //moves focus on the tab
        modala_swich_tabs([['#login-link', 0], ['#register-link', 1]]);

        if(jQuery(window).width() > 700  && td_detect.is_ie === false) {
            jQuery('#register_email').focus();
        }

        //empty all fields
        //td_modala_empty_all_fields();

        //empty error display div
        td_modala_empty_err_div();
    });
    //register button
    jQuery('#register_button').on( "click", function() {
        handle_register_for_modal_window();
    });
    //enter key on #register_user
    jQuery('#register_user').keydown(function(event) {
        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
            handle_register_for_modal_window();
        }
    });

    //forgot pass
    jQuery('#forgot-pass-link').on( "click", function() {
        //hides or shows the divs with inputs
        show_hide_content_modala([['#td-login-div', 0], ['#td-register-div', 0], ['#td-forgot-pass-div', 1]]);

        //moves focus on the tab
        modala_swich_tabs([['#login-link', 0], ['#register-link', 0]]);

        if(jQuery(window).width() > 700 && td_detect.is_ie === false) {
            jQuery('#forgot_email').focus();
        }

        //empty all fields
        //td_modala_empty_all_fields();

        //empty error display div
        td_modala_empty_err_div();
    });
    //forgot button
    jQuery('#forgot_button').on( "click", function() {
        handle_forgot_password_for_modal_window();
    });
    //enter key on #forgot_email
    jQuery('#forgot_email').keydown(function(event) {
        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
            handle_forgot_password_for_modal_window();
        }
    });


});//end jquery ready



//patern to check emails
var td_mod_pattern_email = /^[a-zA-Z0-9][a-zA-Z0-9_\.-]{0,}[a-zA-Z0-9]@[a-zA-Z0-9][a-zA-Z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;

/**
 * handle all request made from login tab
 */
function handle_login_for_modal_window() {
    var login_email = jQuery('#login_email').val();
    var login_pass = jQuery('#login_pass').val();

    if(login_email && login_pass){
        //empty error display div
        //td_modala_empty_err_div();

        modala_add_remove_class(['.td_display_err', 1, "td_display_msg_ok"]);
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_please_wait);

        //call ajax for log in
        td_modala_call_ajax('td_mod_login', login_email, '', login_pass);
    } else {
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_email_user_pass_incorrect);
    }
}

/**
 * handle all request made from register tab
 */
function handle_register_for_modal_window() {
    var register_email = jQuery('#register_email').val();
    var register_user = jQuery('#register_user').val();

    if(td_mod_pattern_email.test(register_email) && register_user){
        //empty error display div
        //td_modala_empty_err_div();

        modala_add_remove_class(['.td_display_err', 1, "td_display_msg_ok"]);
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_please_wait);

        //call ajax
        td_modala_call_ajax('td_mod_register', register_email, register_user, '');
    } else {
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_email_user_incorrect);
    }
}

/**
 * handle all request made from forgot password tab
 */
function handle_forgot_password_for_modal_window() {
    var forgot_email = jQuery('#forgot_email').val();

    if(td_mod_pattern_email.test(forgot_email)){
        //empty error display div
        //td_modala_empty_err_div();

        modala_add_remove_class(['.td_display_err', 1, "td_display_msg_ok"]);
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_please_wait);

        //call ajax
        td_modala_call_ajax('td_mod_remember_pass', forgot_email, '', '');
    } else {
        jQuery('.td_display_err').show();
        td_modala_write_err_div(td_email_incorrect);
    }
}

/**
 * swhich the div's acordingly to the user action (Log In, Register, Remember Password)
 *
 * ids_array : array of ids that have to be showed or hidden
 */
function show_hide_content_modala(ids_array) {
    var length = ids_array.length;

    for (var i = 0; i < length; i++) {
        var element_id = ids_array[i][0];
        var element_visibility = ids_array[i][1];

        if (element_visibility == 1) {
            jQuery(element_id).removeClass('td-dispaly-none').addClass('td-dispaly-block');
        } else {
            jQuery(element_id).removeClass('td-dispaly-block').addClass('td-dispaly-none');
        }
    }
}


/**
 * swhich the tab's acordingly to the user action (Log In, Register, Remember Password)
 *
 * ids_array : array of ids that have to be focus on or unfocus
 */
function modala_swich_tabs(ids_array) {
    var length = ids_array.length;

    for (var i = 0; i < length; i++) {
        var element_id = ids_array[i][0];
        var element_visibility = ids_array[i][1];

        if (element_visibility == 1) {
            jQuery(element_id).addClass('td_login_tab_focus');
        } else {
            jQuery(element_id).removeClass('td_login_tab_focus');
        }
    }
}


/**
 * adds or remove a class from an html object
 *
 * param : array with object identifier (id - # or class - .)
 * ex: ['.class_indetifier', 1, 'class_to_add'] or ['.class_indetifier', 0, 'class_to_remove']
 */
function modala_add_remove_class(param) {

    //add class
    if (param[1] == 1) {
        jQuery(param[0]).addClass(param[2]);

        //remove class
    } else {
        jQuery(param[0]).removeClass(param[2]);
    }
}


/**
 * empty the error div
 */
function td_modala_empty_err_div() {
    jQuery('.td_display_err').html('');
    jQuery('.td_display_err').hide();
}


/**
 * write text to error div
 */
function td_modala_write_err_div(message) {
    jQuery('.td_display_err').html(message);
}

/**
 * empty all fields in modal window
 */
function td_modala_empty_all_fields() {
    //login fields
    jQuery('#login_email').val('');
    jQuery('#login_pass').val('');

    //register fields
    jQuery('#register_email').val('');
    jQuery('#register_user').val('');

    //forgot pass
    jQuery('#forgot_email').val('');
}


/**
 * call to server from modal window
 *
 * @param $action : what action (log in, register, forgot email)
 * @param $email  : the email beening sent
 * @param $user   : the user name beening sent
 */
function td_modala_call_ajax(sent_action, sent_email, sent_user, sent_pass) {
    jQuery.ajax({
        type: 'POST',
        url: td_ajax_url,
        data: {
            action: sent_action,
            email: sent_email,
            user: sent_user,
            pass: sent_pass
        },
        success: function(data, textStatus, XMLHttpRequest){
            var td_data_object = jQuery.parseJSON(data); //get the data object

            //check the response from server
            switch(td_data_object[0]) {
                case 'login':
                    if(td_data_object[1] == 1) {
                        location.reload(true);
                    } else {
                        modala_add_remove_class(['.td_display_err', 0, 'td_display_msg_ok']);
                        jQuery('.td_display_err').show();
                        td_modala_write_err_div(td_data_object[2]);
                    }
                    break;

                case 'register':
                    if(td_data_object[1] == 1) {
                        modala_add_remove_class(['.td_display_err', 1, "td_display_msg_ok"]);
                        jQuery('.td_display_err').show();
                    } else {
                        modala_add_remove_class(['.td_display_err', 0, "td_display_msg_ok"]);
                        jQuery('.td_display_err').show();
                    }
                    td_modala_write_err_div(td_data_object[2]);
                    break;

                case 'remember_pass':
                    if(td_data_object[1] == 1) {
                        modala_add_remove_class(['.td_display_err', 1, "td_display_msg_ok"]);
                        jQuery('.td_display_err').show();
                    } else {
                        modala_add_remove_class(['.td_display_err', 0, "td_display_msg_ok"]);
                        jQuery('.td_display_err').show();
                    }
                    td_modala_write_err_div(td_data_object[2]);
                    break;

            }


        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            //console.log(errorThrown);
        }
    });
}
/*  ----------------------------------------------------------------------------
 tagDiv live css compiler ( 2013 )
 - this script is used on our demo site to customize the theme live
 - not used on production sites
 */
var td_current_panel_stat = td_read_site_cookie('td_show_panel');
if (td_current_panel_stat == 'show' || td_current_panel_stat == null) {
    jQuery('.td-theme-settings-small').addClass('td-theme-settings-no-transition');
    jQuery('.td-theme-settings-small').removeClass('td-theme-settings-small');
}

/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    //hide panel
    jQuery("#td-theme-set-hide").click(function(event){
        event.preventDefault();
        event.stopPropagation();
        //hide
        td_set_cookies_life(['td_show_panel', 'hide', 86400000]);//86400000 is the number of milliseconds in a day
        jQuery('#td-theme-settings').removeClass('td-theme-settings-no-transition');
        jQuery('#td-theme-settings').addClass('td-theme-settings-small');


        jQuery('.td-set-theme-style-link').removeClass('fadeInLeft');

    });

    //show panel
    jQuery("#td-theme-settings").click(function(){
        if (jQuery(this).hasClass('td-theme-settings-small')) {

            jQuery('.td-set-theme-style-link').addClass('animated_xlong fadeInLeft');

            //show full
            td_set_cookies_life(['td_show_panel', 'show', 86400000]);//86400000 is the number of milliseconds in a day
            jQuery('.td-theme-settings-small').removeClass('td-theme-settings-small');
        }
    });

}); //end on load
/**
 * Created by RADU on 6/24/14.
 */

"use strict";

/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {
    //trending now
    td_trending_now();

    //call to trending now function to start auto scroll
    td_trending_now_auto_start();
});


/*  ----------------------------------------------------------------------------
 trending now
 */

//global object that holds each `trending-now-wrapper` list of posts
var td_trending_now_object = {
    trending_now_autostart_blocks:[]
};

//trending now function : creates the array of posts in each trend and add events to the nav buttons
function td_trending_now() {

    //move thru all `trending-now-wrapper's` on the page
    jQuery(".td-trending-now-wrapper").each(function() {
        var wrapper_id = jQuery(this).attr("id");
        var wrapper_id_navigation = jQuery(this).data("start");

        if(wrapper_id_navigation != 'manual') {
            td_trending_now_object.trending_now_autostart_blocks.push(wrapper_id);
        }

        var trending_list_posts = [];
        var i_cont = 0;

        //take the text from each post from current trending-now-wrapper
        jQuery("#" + wrapper_id + " .td-trending-now-post").each(function() {
            trending_list_posts[i_cont] = jQuery(this).html();

            //increment the counter
            i_cont++;
        });

        //add this array to `td_trending_now_object`
        td_trending_now_object[wrapper_id] = trending_list_posts;
        td_trending_now_object[wrapper_id + '_position'] = 0;
    });

    jQuery(".td-trending-now-nav-left, .td-trending-now-nav-right").click(function(event){
        event.preventDefault();
        var wrapper_id_for_nav = jQuery(this).data("wrapper-id");
        var data_moving = jQuery(this).data("moving");
        var control_start = jQuery(this).data("control-start");

        /**
         * used when the trending now block is used on auto mod and we click on show prev or show next article title
         * this will make the auto mode wait another xx seconds before displaying the next article title
         */
        if(control_start != 'manual'){
            clearInterval(td_trending_now_object[wrapper_id_for_nav + "_timer"]);
            td_trending_now_object[wrapper_id_for_nav + "_timer"] = setInterval(function() {td_trending_now_change_text([wrapper_id_for_nav, 'left']);}, 3000);
        }


        //call to change the text
        td_trending_now_change_text([wrapper_id_for_nav, data_moving]);
    });

    //console.log(td_trending_now_object);
}


/*
 function for changing the posts in `trending now` display area
 *
 *array_param[0] : the id of current `trending now wrapper`
 *array_param[1] : moving direction (left or right)
 */
function td_trending_now_change_text(array_param) {

    //for consistency use the same variables names as thh parent function
    var wrapper_id_for_nav = array_param[0];
    var data_moving = array_param[1];

    //get the list of post and position for this trending now block
    var posts_array_list_for_this_trend = td_trending_now_object[wrapper_id_for_nav];
    var posts_array_list_position = td_trending_now_object[wrapper_id_for_nav + '_position'];

    //count how many post are in the list
    var post_count = posts_array_list_for_this_trend.length - 1;

    if(data_moving == "left") {
        posts_array_list_position += 1;

        if(posts_array_list_position > post_count) {
            posts_array_list_position = 0;
        }

    } else {
        posts_array_list_position -= 1;

        if(posts_array_list_position < 0) {
            posts_array_list_position = post_count;
        }
    }

    //update the new position in the global `td_trending_now_object`
    td_trending_now_object[wrapper_id_for_nav + '_position'] = posts_array_list_position;

    //write the data to `trending now` display area
    jQuery("#" + wrapper_id_for_nav + " .td-trending-now-display-area").html("").html(posts_array_list_for_this_trend[posts_array_list_position]);
}


//trending now function to auto start
function td_trending_now_auto_start() {

    var list = td_trending_now_object.trending_now_autostart_blocks;

    for (var i = 0, len = list.length; i < len; i += 1) {
        (function(i) {
            td_trending_now_object[list[i] + "_timer"] = setInterval(function() {
                //console.log(i + "=>" + list[i] + "\n");
                td_trending_now_change_text([list[i], 'left']);
            }, 3000)
        })(i);
    }
}
"use strict";


/*  ----------------------------------------------------------------------------
    history js
 */

var td_history = {
    td_history_change_event: false,

    // static class init
    init: function() {
        //hook the popstate event
        window.addEventListener('popstate', function(event) {
            td_history.td_history_change_event = true;
            if (typeof(event.state) != "undefined" && event.state != null) {
                jQuery("#" + event.state.slide_id).iosSlider("goToSlide", event.state.current_slide);
            }
        });
    },


    /**
     * generally used on load
     * @param data
     */
    replace_history_entry: function (data) {
        if (td_detect.has_history === false) {
            return; //no history support
        }
        history.replaceState(data, null);
    },


    /**
     * ads an history entry - it also knows if we are using mod rewrite or not
     * @param data - the history data (state)
     * @param query_parm_id - 'slide' or other
     * @param query_parm_value - the value for slide
     */
    add_history_entry: function (data, query_parm_id, query_parm_value) {

        if (td_detect.has_history === false) {
            return; //no history support
        }


        if (query_parm_value == '') {
            history.pushState(data, null,  null); //add the hash via history api
            return;
        }

        // @todo - detect other types of pages ex: ?page_id
        var td_query_page_id = td_history.get_query_parameter('p');
        if (td_query_page_id != '') {
            //no mod rewrite, we go with ?p= etc
            if (query_parm_value == 1) {
                history.pushState(data, null,  '?p=' + td_query_page_id); //remove the parm for the first item
            } else {
                history.pushState(data, null,  '?p=' + td_query_page_id + '&' + query_parm_id + '=' + query_parm_value); //add the hash via history api
            }

        } else {
            //mod rewrite
            if (query_parm_value == 1) {
                history.pushState(data, null, td_history.get_mod_rewrite_base_url()); //add the hash via history api
            } else {
                history.pushState(data, null, td_history.get_mod_rewrite_base_url() + query_parm_value + '/'); //add the hash via history api
            }
        }

    },



    /**
     * returns the base url of urls with mod rewrite + pagination
     * @returns {string}
     */
    get_mod_rewrite_base_url: function () {
        var full_url = document.URL;

        //trim the last "/" in the url
        if (full_url.charAt(full_url.length - 1) == '/') {
            full_url = full_url.slice(0, - 1);
        }

        if (td_history.get_mod_rewrite_pagination(document.URL) === false) {
            // no pagination present
            return document.URL;
        }

        // we have pagination so we have to parse the url to remove it
        return full_url.substring(0, full_url.lastIndexOf("/"))+ '/';

    },



    /**
     * get the pagination from the urls with mod rewrite on
     * @returns {*}
     */
    get_mod_rewrite_pagination: function () {
        var full_url = document.URL;

        //trim the last "/" in the url
        if (full_url.charAt(full_url.length - 1) == '/') {
            full_url = full_url.slice(0, - 1);
        }

        var last_url_parameter = full_url.substring(full_url.lastIndexOf("/")+1, full_url.length);

        // return the page if it's indeed an integer
        if (td_history.isInt(last_url_parameter)) {
            return last_url_parameter;
        }

        //return false if we don't have a page
        return false;
    },


    /**
     * used by the iosslider @startAtSlide, it return 1 if there is no pagination or returns the pagination
     * @param query_parm_id
     * @returns {*}
     */
    get_current_page: function (query_parm_id) {
        var td_query_page_id = td_history.get_query_parameter('p');
        if (td_query_page_id != '') {
            //no mod rewrite, we go with ?p= etc
            var cur_page = td_history.get_query_parameter(query_parm_id);
            if (cur_page != '') {
                return cur_page;
            } else {
                return 1;
            }
        } else {
            //mod rewrite
            var cur_page = td_history.get_mod_rewrite_pagination();
            if (cur_page !== false) {
                return cur_page;
            } else {
                return 1;
            }
        }
    },


    /**
     * used to check if a number is an integer
     * @param n
     * @returns {boolean}
     */
    isInt: function (n) {
        return n % 1 === 0;
    },


    /**
     * returns a query parameter from the current url - we use it for ?p=
     * @param name
     * @returns {string}
     */
    get_query_parameter: function (name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    },

    /**
     * callback for slides with history
     * @param args
     */
    slide_changed_callback: function(args) {
        //do not add another history entry if the slide moved due to the history change event
        if (td_history.td_history_change_event === true) {
            td_history.td_history_change_event = false;
            return;
        }
        var current_slide = args.currentSlideNumber;
        var slide_id = args.sliderContainerObject.attr('id');

        td_history.add_history_entry({current_slide:current_slide, slide_id:slide_id}, 'slide', current_slide);
    }

};

/**
 * ie8 does not have pushState and history
 */
if (window.history && window.history.pushState) {
    td_history.init();
}


// minimized js - made by tagDiv -
var td_safari_view_port_width={div_added:!1,div_jquery_object:"",get_real_width:function(){!1===this.div_added&&(this.div_jquery_object=jQuery("<div>").css({height:"1px",position:"absolute",top:"-1",left:"0",right:"0",visibility:"hidden","z-index":"-1"}),this.div_jquery_object.appendTo("body"),this.div_added=!0);return this.div_jquery_object.width()}},td_smart_sidebar={has_items:!1,items:[],scroll_window_scrollTop_last:0,tds_snap_menu:td_util.get_backend_var("tds_snap_menu"),is_enabled:!0,is_enabled_state_run_once:!1,
is_disabled_state_run_once:!1,is_tablet_grid:!1,item:function(){this.sidebar_jquery_obj=this.content_jquery_obj="";this.content_bottom=this.content_top=this.sidebar_height=this.sidebar_bottom=this.sidebar_top=0;this.sidebar_state="";this.case_3_run_once=this.case_2_run_once=this.case_1_run_once=!1;this.case_3_last_content_height=this.case_3_last_sidebar_height=0;this.case_4_run_once=!1;this.case_4_last_menu_offset=0;this.case_6_run_once=this.case_5_run_once=!1},add_item:function(b){td_smart_sidebar.has_items=
!0;b.sidebar_jquery_obj.prepend('<div class="clearfix"></div>').append('<div class="clearfix"></div>');b.content_jquery_obj.prepend('<div class="clearfix"></div>').append('<div class="clearfix"></div>');td_smart_sidebar.items.push(b)},td_events_scroll:function(b){if(!1!==td_smart_sidebar.has_items)if(0==td_smart_sidebar.is_enabled){if(!1===td_smart_sidebar.is_disabled_state_run_once){td_smart_sidebar.is_disabled_state_run_once=!0;for(var c=0;c<td_smart_sidebar.items.length;c++)td_smart_sidebar.items[c].sidebar_jquery_obj.css({width:"auto",
position:"static",top:"auto",bottom:"auto"});td_smart_sidebar.log("smart_sidebar_disabled")}}else window.requestAnimationFrame(function(){var c=0;""!=td_smart_sidebar.tds_snap_menu&&(c=td_affix.main_menu_height+td_affix.menu_offset);var e="";b!=td_smart_sidebar.scroll_window_scrollTop_last&&(e=b>td_smart_sidebar.scroll_window_scrollTop_last?"down":"up");td_smart_sidebar.scroll_window_scrollTop_last=b;b+=c;for(var h=jQuery(window).height(),g=b+h,d=0;d<td_smart_sidebar.items.length;d++){var a=td_smart_sidebar.items[d];
a.content_top=a.content_jquery_obj.offset().top;a.content_height=a.content_jquery_obj.height();a.content_bottom=a.content_top+a.content_height;a.sidebar_top=a.sidebar_jquery_obj.offset().top;a.sidebar_height=a.sidebar_jquery_obj.height();a.sidebar_bottom=a.sidebar_top+a.sidebar_height;if(a.content_height<=a.sidebar_height)a.sidebar_state="case_6_content_too_small";else if(a.sidebar_height<h)td_smart_sidebar._is_smaller_or_equal(b,a.content_top)?a.sidebar_state="case_2_top_of_content":!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,
b)?td_smart_sidebar._is_smaller(b,a.content_bottom-a.sidebar_height)?a.sidebar_state="case_4_fixed_up":a.sidebar_state="case_3_bottom_of_content":td_smart_sidebar._is_smaller_or_equal(a.content_bottom,a.sidebar_bottom)?"up"==e&&td_smart_sidebar._is_smaller_or_equal(b,a.sidebar_top)?a.sidebar_state="case_4_fixed_up":a.sidebar_state="case_3_bottom_of_content":a.sidebar_state=a.content_bottom-b>=a.sidebar_height?"case_4_fixed_up":"case_3_bottom_of_content";else if(!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,
b)?a.sidebar_state="case_3_bottom_of_content":!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,g)&&!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,a.content_bottom)&&"down"==e&&a.content_bottom>=g?a.sidebar_state="case_1_fixed_down":!0===td_smart_sidebar._is_smaller_or_equal(a.sidebar_top,a.content_top)&&"up"==e&&a.content_bottom>=g?a.sidebar_state="case_2_top_of_content":!0===td_smart_sidebar._is_smaller_or_equal(a.content_bottom,a.sidebar_bottom)&&"down"==e||a.content_bottom<g?a.sidebar_state=
"case_3_bottom_of_content":!0===td_smart_sidebar._is_smaller_or_equal(b,a.sidebar_top)&&"up"==e&&!0===td_smart_sidebar._is_smaller_or_equal(a.content_top,b)&&(a.sidebar_state="case_4_fixed_up"),"case_1_fixed_down"==a.sidebar_state&&"up"==e||"case_4_fixed_up"==a.sidebar_state&&"down"==e)a.sidebar_state="case_5_absolute";var f=339;td_smart_sidebar.is_tablet_grid&&(f=251);switch(a.sidebar_state){case "case_1_fixed_down":if(!0===a.case_1_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);
a.case_1_run_once=!0;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:f,position:"fixed",top:"auto",bottom:"0","z-index":"1"});break;case "case_2_top_of_content":if(!0===a.case_2_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!0;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:"auto",
position:"static",top:"auto",bottom:"auto"});break;case "case_3_bottom_of_content":if(!0===a.case_3_run_once&&a.case_3_last_sidebar_height==a.sidebar_height&&a.case_3_last_content_height==a.content_height)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!0;a.case_3_last_sidebar_height=a.sidebar_height;a.case_3_last_content_height=a.content_height;a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:f,
position:"absolute",top:a.content_bottom-a.sidebar_height-a.content_top,bottom:"auto"});break;case "case_4_fixed_up":if(!0===a.case_4_run_once&&a.case_4_last_menu_offset==c)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!0;a.case_4_last_menu_offset=c;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:f,position:"fixed",top:c,bottom:"auto"});break;case "case_5_absolute":if(!0===
a.case_5_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!0;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:f,position:"absolute",top:a.sidebar_top-a.content_top,bottom:"auto"});break;case "case_6_content_too_small":if(!0===a.case_6_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;
a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!0;a.sidebar_jquery_obj.css({width:"auto",position:"static",top:"auto",bottom:"auto"})}}})},compute:function(){td_smart_sidebar.td_events_scroll(jQuery(window).scrollTop())},reset_run_once_flags:function(){for(var b=0;b<td_smart_sidebar.items.length;b++)td_smart_sidebar.items[b].case_1_run_once=!1,td_smart_sidebar.items[b].case_2_run_once=!1,td_smart_sidebar.items[b].case_3_run_once=!1,td_smart_sidebar.items[b].case_3_last_sidebar_height=
0,td_smart_sidebar.items[b].case_3_last_content_height=0,td_smart_sidebar.items[b].case_4_run_once=!1,td_smart_sidebar.items[b].case_4_last_menu_offset=0,td_smart_sidebar.items[b].case_5_run_once=!1,td_smart_sidebar.items[b].case_6_run_once=!1},td_events_resize:function(){var b=0,b=!0===td_detect.is_safari?td_safari_view_port_width.get_real_width():Math.max(document.documentElement.clientWidth,window.innerWidth||0);767<b&&1023>=b?!1===td_smart_sidebar.is_tablet_grid&&(td_smart_sidebar.reset_run_once_flags(),
td_smart_sidebar.is_tablet_grid=!0,td_smart_sidebar.log("view port tablet")):1023<b&&!0===td_smart_sidebar.is_tablet_grid&&(td_smart_sidebar.reset_run_once_flags(),td_smart_sidebar.is_tablet_grid=!1,td_smart_sidebar.log("view port desktop"));767>=b?(td_smart_sidebar.is_enabled_state_run_once=!1,td_smart_sidebar.is_enabled=!1):(td_smart_sidebar.is_disabled_state_run_once=!1,!1===td_smart_sidebar.is_enabled_state_run_once&&(td_smart_sidebar.is_enabled_state_run_once=!0,td_smart_sidebar.log("smart_sidebar_enabled"),
td_smart_sidebar.is_enabled=!0));td_smart_sidebar.compute()},log:function(b){},_is_smaller_or_equal:function(b,c){return 1<=Math.abs(b-c)?b<c?!0:!1:!0},_is_smaller:function(b,c){return 1<=Math.abs(b-c)?b<c?!0:!1:!1}};

// end minimized

/**
 * Infinite loader v1.0 by Radu O. / tagDiv
 * USES:
 *  - td_events.js
 *  - for blocks:
 *      - td_block::get_block_pagination - custom load more
 *      - in td_js_generator.php - main block object has ajax_pagination_infinite_stop - to stop the infinit scroll after x number of pages and show the load more button after that
 *
 */
"use strict";

/**
 * - register and keep track of dom elements
 * - calculate position from the top of each element
 * - monitor on scroll event
 *  - if one or more of the dom elements is visible
 *  - fire the callback for that dom element! only ONCE
 */


var td_infinite_loader = {

    has_items: false, // this class will only work when this flag is true. If we don't have any items, all the calculations on scroll will be disabled by this flag

    items: [], //the array that has all the items

    // one item object (instantiable)
    item: function() {
        this.uid=''; // - an unique id of the item, usually is the block id!
        this.jquery_obj = ''; //find the item easily for animation ??
        this.bottom_top = 0;  //distance from the bottom of the dom element to top - computed in - @see td_infinite_loader.compute_top_distances();
        this.is_visible_callback_enabled = true; //the callback will fire only when this flag is true. We set it to true after the blocks ajax run @see td_block_ajax_loading_end
        this.is_visible_callback = function () { //callback when the item's bottom is visible :)

        };
    },

    add_item: function(item) {
        td_infinite_loader.has_items = true; //put the flag that we have items
        td_infinite_loader.items.push(item);
    },


    /**
     * foreach element from items, compute the distances from the top
     *  - this is done only on load or when the page is resized
     */
    compute_top_distances: function compute_top_distances() {

        //check the flag to see if we have any items
        if (td_infinite_loader.has_items === false) {
            return;
        }

        jQuery.each(td_infinite_loader.items, function(index, v_event) {
            var top_top = td_infinite_loader.items[index].jquery_obj.offset().top;
            //top of document to bottom of element
            td_infinite_loader.items[index].bottom_top = top_top + td_infinite_loader.items[index].jquery_obj.height();
        });

        //also calculate the events
        td_infinite_loader.compute_events();

    },


    /**
     * calculate if we have to fire an event like is_visible_callback()
     *  - this is done on scroll and on resize!
     */
    compute_events: function compute_events() {
        //check the flag to see if we have any items
        if (td_infinite_loader.has_items === false) {
            return;
        }

        var top_to_viewport_bottom = jQuery(window).height() + jQuery(window).scrollTop();


        jQuery.each(td_infinite_loader.items, function(index, item) {
            if (td_infinite_loader.items[index].bottom_top < top_to_viewport_bottom + 400) {

                //check to see if we can call the callback again
                if (td_infinite_loader.items[index].is_visible_callback_enabled === true) {
                    td_infinite_loader.items[index].is_visible_callback_enabled = false;
                    //the call
                    td_infinite_loader.items[index].is_visible_callback();
                }
            }


        });
    },


    /**
     * enables the is_visible_callback - it is called by td_blocks.js only when a block receives an infinite loading ajax reply
     * @param $item_uid - an unique id of the item, usually is the block id!
     * @see td_block_ajax_loading_end
     */
    enable_is_visible_callback: function enable_is_visible_callback($item_uid) {
        jQuery.each(td_infinite_loader.items, function(index, item) {
            if (item.uid === $item_uid) {
                td_infinite_loader.items[index].is_visible_callback_enabled = true;
                return false; //brake jquery each
            }
        });
    }

};






/**
 * we are using td_ajax_infinite to know when to trigger a block loading
 */
jQuery('.td_ajax_infinite').each(function() {

    // create a new infinite loader item
    var td_infinite_loader_item = new td_infinite_loader.item();

    td_infinite_loader_item.jquery_obj = jQuery(this);
    td_infinite_loader_item.uid = jQuery(this).data('td_block_id');


    /**
     * the callback when the bottom of the element is visible on screen and we need to do something - like load another page
     * - the callback does not fire again until td_infinite_loader.enable_is_visible_callback is called @see td_infinite_loader.js:95
     */
    td_infinite_loader_item.is_visible_callback = function () {      // the is_visible callback is called when we have to pull new content up because the element is visible

        // get the current block object
        var current_block_obj = td_getBlockObjById(td_infinite_loader_item.jquery_obj.data('td_block_id'));

        // if we don't have a infinite stop limit or if we have one we dint' hit it yet
        if (current_block_obj.ajax_pagination_infinite_stop == '' || current_block_obj.td_current_page < (parseInt(current_block_obj.ajax_pagination_infinite_stop) + 1)) {

            // get the block data and increment the pagination
            current_block_obj.td_current_page++;
            td_ajax_do_block_request(current_block_obj, 'infinite_load');

        } else {
            /**
             * show the load more button. The button is already there, hidden - do not know if it's the best solution :)
             * @see td_block::get_block_pagination  in td_block.php
             */
            setTimeout(function(){
                jQuery('#infinite-lm-' + current_block_obj.id).show();
            }, 400);

        }




    };


    td_infinite_loader.add_item(td_infinite_loader_item);
});


//compute to
jQuery(window).load(function() {
    td_infinite_loader.compute_top_distances();
});

jQuery().ready(function() {
    td_infinite_loader.compute_top_distances();
});

/* td_events.js - handles the events that require throttling
 * v 2.0 - wp_010
 */

var td_events = {

    //the events - we have timers that look at the variables and fire the event if the flag is true
    scroll_event_slow_run: false,
    scroll_event_medium_run: false,

    resize_event_slow_run: false, //when true, fire up the resize event
    resize_event_medium_run: false,


    scroll_window_scrollTop: 0, //used to store the scrollTop

    init: function init() {

        jQuery(window).scroll(function() {
            td_events.scroll_event_slow_run = true;
            td_events.scroll_event_medium_run = true;

            //read the scroll top
            td_events.scroll_window_scrollTop = jQuery(window).scrollTop();

            /*  ----------------------------------------------------------------------------
             Run affix menu event
             */

            td_affix.td_events_scroll(td_events.scroll_window_scrollTop); //main menu


            td_smart_sidebar.td_events_scroll(td_events.scroll_window_scrollTop); //smart sidebar scroll
        });


        jQuery(window).resize(function() {
            td_events.resize_event_slow_run = true;
            td_events.resize_event_medium_run = true;
            //var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

            //w = jQuery(document).width();
            //console.log(w);
        });



        //medium resolution timer for rest?
        setInterval(function() {
            //scroll event
            if (td_events.scroll_event_medium_run) {
                td_events.scroll_event_medium_run = false;
                //compute events for the infinite scroll
                td_infinite_loader.compute_events();
            }

            if (td_events.resize_event_medium_run) {
                td_events.resize_event_medium_run = false;
                td_smart_sidebar.td_events_resize();
            }
        }, 100);



        //low resolution timer for rest?
        setInterval(function() {
            //scroll event
            if (td_events.scroll_event_slow_run) {
                td_events.scroll_event_slow_run = false;

                //back to top
                td_events_scroll_scroll_to_top(td_events.scroll_window_scrollTop);

                //more articles box
                td_more_articles_box.td_events_scroll(td_events.scroll_window_scrollTop);


            }

            //resize event
            if (td_events.resize_event_slow_run) {
                td_events.resize_event_slow_run = false;
                td_affix.compute_top();
                td_affix.compute_wrapper();
                td_detect.run_is_phone_screen();
            }
        }, 500);

    }



};

td_events.init();
'use strict';
/**
 * updates the view counter thru ajax
 */
var td_ajax_count = {

    td_get_views_counts_ajax : function td_get_views_counts_ajax (page_type, array_ids) {

        //what function to call based on page type
        var page_type_action = 'td_ajax_get_views';//page_type = page
        if(page_type == "post") {
            page_type_action = 'td_ajax_update_views';
        }

        jQuery.ajax({
            type: 'POST',
            url: td_ajax_url,
            cache:true,

            data: {
                action: page_type_action,
                td_post_ids: array_ids
            },
            success: function(data, textStatus, XMLHttpRequest){
                var td_ajax_post_counts = jQuery.parseJSON(data);//get the return dara

                //check the return var to be object
                if (td_ajax_post_counts instanceof Object) {
                    //alert('value is Object!');

                    //itinerate thru the object
                    jQuery.each(td_ajax_post_counts, function(id_post, value) {
                        //alert(id_post + ": " + value);

                        //this is the count placeholder in witch we write the post count
                        var current_post_count = ".td-nr-views-" + id_post;

                        jQuery(current_post_count).html(value);
                        //console.log(current_post_count + ': ' + value);
                    });
                }
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                //console.log(errorThrown);
            }
        });

    }
};
/*
 td_video_playlist.js
 v1.1
 */

"use strict";
// jQuery(window).load(function() {//
jQuery().ready(function() {

    //click on a youtube movie
    jQuery('.td_click_video_youtube').click(function(){

        //this flag is check to see if to start the movie
        td_youtube_player.td_playlist_video_autoplay_youtube = 1;

        //add pause to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');

        //create  and play the clicked video
        var td_youtube_video = jQuery(this).attr("id").substring(3);
        if(td_youtube_video != '') {
            td_youtube_player.playVideo(td_youtube_video);
        }
    });



    //click on youtube play control
    jQuery('.td_youtube_control').click(function(){

        //click to play
        if(jQuery(this).hasClass('td-sp-video-play')){
            //this is to enable video playing
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;

            //play the video
            td_youtube_player.td_playlist_youtube_play_video();

        } else {

            //put pause to the player
            td_youtube_player.td_playlist_youtube_pause_video();
        }
    });



    //check for youtube wrapper and add api code to create the player
    if(jQuery('.td_wrapper_playlist_player_youtube').length > 0) {

        if(jQuery('.td_wrapper_playlist_player_youtube').data("autoplay") == "1") {
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;
        }

        var first_video = jQuery('.td_wrapper_playlist_player_youtube').data('first-video');

        if(first_video != '') {
            td_youtube_player.td_playlist_id_youtube_video_running = first_video;

            td_youtube_player.playVideo(first_video);
        }
    }



    //check autoplay vimeo
    if(jQuery('.td_wrapper_playlist_player_vimeo').data("autoplay") == "1") {
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;
    }

    //click on a vimeo
    jQuery('.td_click_video_vimeo').click(function(){

        //this flag is check to see if to start the movie
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

        //add pause to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //create  and play the clicked video
        td_vimeo_playlist_obj.create_player(jQuery(this).attr("id").substring(3));
    });





    //check for vimeo wrapper and add api code to create the player
    if(jQuery('.td_wrapper_playlist_player_vimeo').length > 0) {

        //add play to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //create the iframe with the video
        td_vimeo_playlist_obj.create_player(jQuery('.td_wrapper_playlist_player_vimeo').data("first-video"));
    }




    //click on youtube play control
    jQuery('.td_vimeo_control').click(function(){

        //click to play
        if(jQuery(this).hasClass('td-sp-video-play')){
            //this is to enable video playing
            td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

            //play the video
            td_vimeo_playlist_obj.td_playlisty_player_vimeo.api("play");

        } else {

            //put pause to the player
            td_vimeo_playlist_obj.td_playlisty_player_vimeo.api("pause");
        }
    });

});


var td_youtube_player = {
    td_yt_player: '',

    td_player_container: 'player_youtube',

    td_playlist_video_autoplay_youtube: 0,

    td_playlist_id_youtube_video_running: '',


    playVideo: function(videoId) {
        if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
            window.onYouTubePlayerAPIReady = function() {
                td_youtube_player.loadPlayer(td_youtube_player.td_player_container, videoId);
            };
            jQuery.getScript('//www.youtube.com/player_api');
        } else {
            td_youtube_player.loadPlayer(td_youtube_player.td_player_container, videoId);
        }
    },


    loadPlayer: function(container, videoId) {
        //container is here in case we need to add multiple players on page
        td_youtube_player.td_playlist_id_youtube_video_running = videoId;

        var current_video_name = td_youtube_list_ids['td_' + td_youtube_player.td_playlist_id_youtube_video_running]['title'];
        var current_video_time = td_youtube_list_ids['td_' + td_youtube_player.td_playlist_id_youtube_video_running]['time'];

        //remove focus from all videos from playlist
        td_playlist_general_functions.td_video_playlist_remove_focused('.td_click_video_youtube');

        //add focus class on current playing video
        jQuery('#td_' + videoId).addClass('td_video_currently_playing');

        //ading the current video playing title and time to the control area
        jQuery('#td_current_video_play_title_youtube').html(current_video_name);
        jQuery('#td_current_video_play_time_youtube').html(current_video_time);

        td_youtube_player.td_yt_player = '';
        jQuery(".td_wrapper_playlist_player_youtube").html("<div id="+ td_youtube_player.td_player_container +"></div>");

        td_youtube_player.td_yt_player = new YT.Player(container, {//window.myPlayer = new YT.Player(container, {
            playerVars: {
                //modestbranding: 1,
                //rel: 0,
                //showinfo: 0,
                autoplay: td_youtube_player.td_playlist_video_autoplay_youtube
            },
            height: '100%',
            width: '100%',
            videoId: videoId,
            events: {
                'onReady': td_youtube_player.onPlayerReady,
                'onStateChange': td_youtube_player.onPlayerStateChange
            }
        });
    },


    onPlayerStateChange: function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {

            //add pause to playlist control
            td_playlist_general_functions.td_playlist_add_pause_control('.td_youtube_control');

        } else if (event.data == YT.PlayerState.ENDED) {
            //video_events_js.on_stop('youtube');

            //add play to playlist control
            td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');

            //if a video has ended then make auto play = 1; This is the case when the user set autoplay = 0 but start watching videos
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;

            //get the next video
            var next_video_id = td_playlist_general_functions.td_playlist_choose_next_video([td_youtube_list_ids, td_youtube_player.td_playlist_id_youtube_video_running]);
            if(next_video_id != '') {
                td_youtube_player.playVideo(next_video_id);
            }

        } else if (YT.PlayerState.PAUSED) {
            //add play to playlist control
            td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');
        }
    },

    td_playlist_youtube_stopVideo: function td_playlist_youtube_stopVideo() {
        td_youtube_player.td_yt_player.stopVideo();
    },

    td_playlist_youtube_play_video: function td_playlist_youtube_play_video() {
        if(td_detect.is_mobile_device) {
            //alert('mobile');
        } else {
            td_youtube_player.td_yt_player.playVideo();
        }
    },

    td_playlist_youtube_pause_video: function td_playlist_youtube_pause_video() {
        td_youtube_player.td_yt_player.pauseVideo();
    }
};





//VIMEO
var td_vimeo_playlist_obj = {

    current_video_playing : '',

    td_playlisty_player_vimeo: '',//a copy of the vimeo player : needed when playing or pausing the vimeo pleyer from the playlist control

    td_playlist_video_autoplay_vimeo: '',//autoplay

    create_player: function (video_id){
        if(video_id != '') {

            var vimeo_iframe_autoplay = '';

            this.current_video_playing = video_id;

            //remove focus class
            td_playlist_general_functions.td_video_playlist_remove_focused('.td_click_video_vimeo');

            //add focus clas on play movie
            jQuery('#td_' + video_id).addClass('td_video_currently_playing');

            //put movie data to control box
            this.put_movie_data_to_control_box(video_id);

            //check autoplay
            if(this.td_playlist_video_autoplay_vimeo != 0) {
                vimeo_iframe_autoplay = '&autoplay=1';
            }


            jQuery('.td_wrapper_playlist_player_vimeo').html('');
            jQuery('.td_wrapper_playlist_player_vimeo').html('<iframe id="player_vimeo_1" src="//player.vimeo.com/video/' + video_id + '?api=1&player_id=player_vimeo_1' + vimeo_iframe_autoplay + '"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');//width="100%" height="100%"

            this.create_vimeo_object_player(jQuery);
        }

    },

    put_movie_data_to_control_box: function (video_id){
        jQuery('#td_current_video_play_title_vimeo').html(td_vimeo_list_ids['td_' + video_id]['title']);
        jQuery('#td_current_video_play_time_vimeo').html(td_vimeo_list_ids['td_' + video_id]['time']);
    },

    create_vimeo_object_player : function ($) {
        var iframe = '';
        var player = '';

        iframe = $('#player_vimeo_1')[0];
        player = $f(iframe);

        //a copy of the vimeo player : needed when playing or pausing the vimeo pleyer from the playlist control
        this.td_playlisty_player_vimeo = player;

        // When the player is ready, add listeners for pause, finish, and playProgress
        player.addEvent('ready', function() {
            //status.text('ready');

            player.addEvent('play', td_vimeo_playlist_obj.onPlay);
            player.addEvent('pause', td_vimeo_playlist_obj.onPause);
            player.addEvent('finish', td_vimeo_playlist_obj.onFinish);
            player.addEvent('playProgress', td_vimeo_playlist_obj.onPlayProgress);
        });
    },

    onPlay : function onPlay(id) {
        td_playlist_general_functions.td_playlist_add_pause_control('.td_vimeo_control');

        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;
    },

    onPause : function onPause(id) {
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');
    },

    onFinish : function onFinish(id) {
        //status.text('finished');

        //add play to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //if a video has ended then make auto play = 1; This is the case when the user set autoplay = 0 but start watching videos
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

        if(td_detect.is_mobile_device && td_detect.is_android) {
            //alert('is android');
        } else {

            //get the next video
            var next_video_id = td_playlist_general_functions.td_playlist_choose_next_video([td_vimeo_list_ids, td_vimeo_playlist_obj.current_video_playing]);
            if(next_video_id != '') {
                td_vimeo_playlist_obj.create_player(next_video_id);
            }
        }
    },

    onPlayProgress : function onPlayProgress(data, id) {
        //status.text(data.seconds + 's played');
    }
};


//this object holds some functions used by both the youtube and vimeo
var td_playlist_general_functions = {
    td_video_playlist_remove_focused: function td_video_playlist_remove_focused(obj_class) {
        //remove focus class
        jQuery( obj_class).each(function(){
            jQuery(this).removeClass('td_video_currently_playing');
        });
    },


    /*
     parram_array = array [
     video_list,
     current_video_id_playing
     ]
     */
    td_playlist_choose_next_video: function td_playlist_choose_next_video(parram_array){
        //alert('get next');

        var video_list = parram_array[0];
        var current_video_id_playing = 'td_' + parram_array[1];

        //get next video id
        var next_video_id = '';
        var found_current = '';
        for(var video in video_list){
            if(found_current == 'found') {
                next_video_id = video;
                found_current = '';
                break;//found , now exit
            }
            if(video == current_video_id_playing) {
                found_current = 'found';
            }
        }

        //play the next video
        if(next_video_id != '') {

            //remove 'td_' from the beginning of the string if necessary
            if(next_video_id.substring(0, 3) == 'td_') {
                next_video_id = next_video_id.substring(3);
            }

            return next_video_id;
        }

        return '';
    },



    //add pause button playlist control
    td_playlist_add_pause_control: function td_playlist_add_pause_control(wrapper_class){
        jQuery(wrapper_class).removeClass('td-sp-video-play').addClass('td-sp-video-pause');
    },

    //add play button playlist control
    td_playlist_add_play_control: function td_playlist_add_play_control(wrapper_class){
        jQuery(wrapper_class).removeClass('td-sp-video-pause').addClass('td-sp-video-play');
    }
};
/**
 * Created by ra on 7/9/14.
 */


/*
 * tagDiv mods:
 * - added the td-backstrach class
 * - changed the backstretch.after event so that it dosn't wait for fade
 */

/*
 * Backstretch
 * http://srobbin.com/jquery-plugins/backstretch/
 *
 * Copyright (c) 2013 Scott Robbin
 * Licensed under the MIT license.
 */

;(function ($, window, undefined) {
    'use strict';

    /* PLUGIN DEFINITION
     * ========================= */

    $.fn.backstretch = function (images, options) {
        // We need at least one image or method name
        if (images === undefined || images.length === 0) {
            $.error("No images were supplied for Backstretch");
        }

        /*
         * Scroll the page one pixel to get the right window height on iOS
         * Pretty harmless for everyone else
         */
        if ($(window).scrollTop() === 0 ) {
            window.scrollTo(0, 0);
        }

        return this.each(function () {
            var $this = $(this)
                , obj = $this.data('backstretch');

            // Do we already have an instance attached to this element?
            if (obj) {

                // Is this a method they're trying to execute?
                if (typeof images == 'string' && typeof obj[images] == 'function') {
                    // Call the method
                    obj[images](options);

                    // No need to do anything further
                    return;
                }

                // Merge the old options with the new
                options = $.extend(obj.options, options);

                // Remove the old instance
                obj.destroy(true);
            }

            obj = new Backstretch(this, images, options);
            $this.data('backstretch', obj);
        });
    };

    // If no element is supplied, we'll attach to body
    $.backstretch = function (images, options) {
        // Return the instance
        return $('body')
            .backstretch(images, options)
            .data('backstretch');
    };

    // Custom selector
    $.expr[':'].backstretch = function(elem) {
        return $(elem).data('backstretch') !== undefined;
    };

    /* DEFAULTS
     * ========================= */

    $.fn.backstretch.defaults = {
        centeredX: true   // Should we center the image on the X axis?
        , centeredY: true   // Should we center the image on the Y axis?
        , duration: 5000    // Amount of time in between slides (if slideshow)
        , fade: 0           // Speed of fade transition between slides
    };

    /* STYLES
     *
     * Baked-in styles that we'll apply to our elements.
     * In an effort to keep the plugin simple, these are not exposed as options.
     * That said, anyone can override these in their own stylesheet.
     * ========================= */
    var styles = {
        wrap: {
            left: 0
            , top: 0
            , overflow: 'hidden'
            , margin: 0
            , padding: 0
            , height: '100%'
            , width: '100%'
            , zIndex: -999999
        }
        , img: {
            position: 'absolute'
            , display: 'none'
            , margin: 0
            , padding: 0
            , border: 'none'
            , width: 'auto'
            , height: 'auto'
            , maxHeight: 'none'
            , maxWidth: 'none'
            , zIndex: -999999
        }
    };

    /* CLASS DEFINITION
     * ========================= */
    var Backstretch = function (container, images, options) {
        this.options = $.extend({}, $.fn.backstretch.defaults, options || {});

        /* In its simplest form, we allow Backstretch to be called on an image path.
         * e.g. $.backstretch('/path/to/image.jpg')
         * So, we need to turn this back into an array.
         */
        this.images = $.isArray(images) ? images : [images];

        // Preload images
        $.each(this.images, function () {
            $('<img />')[0].src = this;
        });

        // Convenience reference to know if the container is body.
        this.isBody = container === document.body;

        /* We're keeping track of a few different elements
         *
         * Container: the element that Backstretch was called on.
         * Wrap: a DIV that we place the image into, so we can hide the overflow.
         * Root: Convenience reference to help calculate the correct height.
         */
        this.$container = $(container);
        this.$root = this.isBody ? supportsFixedPosition ? $(window) : $(document) : this.$container;

        // Don't create a new wrap if one already exists (from a previous instance of Backstretch)
        var $existing = this.$container.children(".backstretch").first();
        this.$wrap = $existing.length ? $existing : $('<div class="backstretch"></div>').css(styles.wrap).appendTo(this.$container);

        // Non-body elements need some style adjustments
        if (!this.isBody) {
            // If the container is statically positioned, we need to make it relative,
            // and if no zIndex is defined, we should set it to zero.
            var position = this.$container.css('position')
                , zIndex = this.$container.css('zIndex');

            this.$container.css({
                position: position === 'static' ? 'relative' : position
                , zIndex: zIndex === 'auto' ? 0 : zIndex
                , background: 'none'
            });

            // Needs a higher z-index
            this.$wrap.css({zIndex: -999998});
        }

        // Fixed or absolute positioning?
        this.$wrap.css({
            position: this.isBody && supportsFixedPosition ? 'fixed' : 'absolute'
        });

        // Set the first image
        this.index = 0;
        this.show(this.index);

        // Listen for resize
        $(window).on('resize.backstretch', $.proxy(this.resize, this))
            .on('orientationchange.backstretch', $.proxy(function () {
                // Need to do this in order to get the right window height
                if (this.isBody && window.pageYOffset === 0) {
                    window.scrollTo(0, 1);
                    this.resize();
                }
            }, this));
    };

    /* PUBLIC METHODS
     * ========================= */
    Backstretch.prototype = {
        resize: function () {
            try {
                var bgCSS = {left: 0, top: 0}
                    , rootWidth = this.isBody ? this.$root.width() : this.$root.innerWidth()
                    , bgWidth = rootWidth
                    , rootHeight = this.isBody ? ( window.innerHeight ? window.innerHeight : this.$root.height() ) : this.$root.innerHeight()
                    , bgHeight = bgWidth / this.$img.data('ratio')
                    , bgOffset;

                // Make adjustments based on image ratio
                if (bgHeight >= rootHeight) {
                    bgOffset = (bgHeight - rootHeight) / 2;
                    if(this.options.centeredY) {
                        bgCSS.top = '-' + bgOffset + 'px';
                    }
                } else {
                    bgHeight = rootHeight;
                    bgWidth = bgHeight * this.$img.data('ratio');
                    bgOffset = (bgWidth - rootWidth) / 2;
                    if(this.options.centeredX) {
                        bgCSS.left = '-' + bgOffset + 'px';
                    }
                }

                this.$wrap.css({width: rootWidth, height: rootHeight})
                    .find('img:not(.deleteable)').css({width: bgWidth, height: bgHeight}).css(bgCSS);
            } catch(err) {
                // IE7 seems to trigger resize before the image is loaded.
                // This try/catch block is a hack to let it fail gracefully.
            }

            return this;
        }

        // Show the slide at a certain position
        , show: function (newIndex) {

            // Validate index
            if (Math.abs(newIndex) > this.images.length - 1) {
                return;
            }

            // Vars
            var self = this
                , oldImage = self.$wrap.find('img').addClass('deleteable')
                , evtOptions = { relatedTarget: self.$container[0] };

            // Trigger the "before" event
            self.$container.trigger($.Event('backstretch.before', evtOptions), [self, newIndex]);

            // Set the new index
            this.index = newIndex;

            // Pause the slideshow
            clearInterval(self.interval);

            // New image
            self.$img = $('<img />')
                .css(styles.img)
                .addClass('td-backstretch')
                .bind('load', function (e) {
                    var imgWidth = this.width || $(e.target).width()
                        , imgHeight = this.height || $(e.target).height();

                    // Save the ratio
                    $(this).data('ratio', imgWidth / imgHeight);

                    // Show the image, then delete the old one
                    // "speed" option has been deprecated, but we want backwards compatibilty
                    $(this).fadeIn(self.options.speed || self.options.fade, function () {
                        oldImage.remove();

                        // Resume the slideshow
                        if (!self.paused) {
                            self.cycle();
                        }


                    });

                    // Trigger the "after" and "show" events
                    // "show" is being deprecated
                    $(['after', 'show']).each(function () {
                        self.$container.trigger($.Event('backstretch.' + this, evtOptions), [self, newIndex]);
                    });

                    // Resize
                    self.resize();
                })
                .appendTo(self.$wrap);

            // Hack for IE img onload event
            self.$img.attr('src', self.images[newIndex]);
            return self;
        }

        , next: function () {
            // Next slide
            return this.show(this.index < this.images.length - 1 ? this.index + 1 : 0);
        }

        , prev: function () {
            // Previous slide
            return this.show(this.index === 0 ? this.images.length - 1 : this.index - 1);
        }

        , pause: function () {
            // Pause the slideshow
            this.paused = true;
            return this;
        }

        , resume: function () {
            // Resume the slideshow
            this.paused = false;
            this.next();
            return this;
        }

        , cycle: function () {
            // Start/resume the slideshow
            if(this.images.length > 1) {
                // Clear the interval, just in case
                clearInterval(this.interval);

                this.interval = setInterval($.proxy(function () {
                    // Check for paused slideshow
                    if (!this.paused) {
                        this.next();
                    }
                }, this), this.options.duration);
            }
            return this;
        }

        , destroy: function (preserveBackground) {
            // Stop the resize events
            $(window).off('resize.backstretch orientationchange.backstretch');

            // Clear the interval
            clearInterval(this.interval);

            // Remove Backstretch
            if(!preserveBackground) {
                this.$wrap.remove();
            }
            this.$container.removeData('backstretch');
        }
    };

    /* SUPPORTS FIXED POSITION?
     *
     * Based on code from jQuery Mobile 1.1.0
     * http://jquerymobile.com/
     *
     * In a nutshell, we need to figure out if fixed positioning is supported.
     * Unfortunately, this is very difficult to do on iOS, and usually involves
     * injecting content, scrolling the page, etc.. It's ugly.
     * jQuery Mobile uses this workaround. It's not ideal, but works.
     *
     * Modified to detect IE6
     * ========================= */

    var supportsFixedPosition = (function () {
        var ua = navigator.userAgent
            , platform = navigator.platform
        // Rendering engine is Webkit, and capture major version
            , wkmatch = ua.match( /AppleWebKit\/([0-9]+)/ )
            , wkversion = !!wkmatch && wkmatch[ 1 ]
            , ffmatch = ua.match( /Fennec\/([0-9]+)/ )
            , ffversion = !!ffmatch && ffmatch[ 1 ]
            , operammobilematch = ua.match( /Opera Mobi\/([0-9]+)/ )
            , omversion = !!operammobilematch && operammobilematch[ 1 ]
            , iematch = ua.match( /MSIE ([0-9]+)/ )
            , ieversion = !!iematch && iematch[ 1 ];

        return !(
            // iOS 4.3 and older : Platform is iPhone/Pad/Touch and Webkit version is less than 534 (ios5)
            ((platform.indexOf( "iPhone" ) > -1 || platform.indexOf( "iPad" ) > -1  || platform.indexOf( "iPod" ) > -1 ) && wkversion && wkversion < 534) ||

                // Opera Mini
                (window.operamini && ({}).toString.call( window.operamini ) === "[object OperaMini]") ||
                (operammobilematch && omversion < 7458) ||

                //Android lte 2.1: Platform is Android and Webkit version is less than 533 (Android 2.2)
                (ua.indexOf( "Android" ) > -1 && wkversion && wkversion < 533) ||

                // Firefox Mobile before 6.0 -
                (ffversion && ffversion < 6) ||

                // WebOS less than 3
                ("palmGetResource" in window && wkversion && wkversion < 534) ||

                // MeeGo
                (ua.indexOf( "MeeGo" ) > -1 && ua.indexOf( "NokiaBrowser/8.5.0" ) > -1) ||

                // IE6
                (ieversion && ieversion <= 6)
            );
    }());

}(jQuery, window));
/*
 td_slide.js
 */

"use strict";

//call function to resize the smartlist on ready (for safary)
jQuery(window).load(function() {
    td_resize_smartlist_sliders_and_update();
});

//call function to resize the smartlist on ready
jQuery().ready(function() {
    td_resize_smartlist_sliders_and_update();
});



//function to resize the height of the smartlist slide
function td_resize_smartlist_slides(args) {
    var slide_displayd = args.currentSlideNumber;


    //console.log(args.sliderObject[0]);
    //console.log(args.data.obj[0]);

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    if(!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    setHeight = jQuery("#" + current_slider + "_item_" + slide_displayd).outerHeight(true);


    jQuery("#" + current_slider + ", #" + current_slider + " .td-slider").css({
        height: setHeight
    });
}





//function to resize and update the height of the smartlist slide
function td_resize_smartlist_sliders_and_update() {
    jQuery(document).find('.td-smart-list-slider').each(function() {
        var current_slider = jQuery(this).attr("id");

        if(!td_detect.is_ie8) {
            jQuery("#" + current_slider).css("overflow", "none");
            jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
        }

        var setHeight = 0;
        setHeight = jQuery("#" + current_slider + "_item_" + td_history.get_current_page("slide")).outerHeight(true);

        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider").css({
            height: setHeight
        });

        if(td_detect.is_android) {
            setTimeout(function () {
                jQuery("#" + current_slider).iosSlider("update");
            }, 2000);
        }
    });
}


//function to resize the height of the normal slide
function td_resize_normal_slide(args) {
    var slide_displayd = 0;//args.currentSlideNumber;

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    //get window width
    var window_wight = td_get_document_width();

    if (!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    var slide_outer_width = jQuery("#" + current_slider + "_item_" + slide_displayd).outerWidth(true);

    //only for android, width of the screen to start changing the height of the slide
    var max_wight_resize = 780;
    if(td_detect.is_android) {
        max_wight_resize = 1000;
    }

    if (window_wight < max_wight_resize && !td_detect.is_ipad) {//problem because we cannot get an accurate page width
        if(slide_outer_width > 300) {
            setHeight = slide_outer_width * 0.5;
        } else {
            setHeight = slide_outer_width;
        }

        //console.log(window_wight);
        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider, #" + current_slider + " .td-slider .td-module-thumb").css({
            height: setHeight
        });
    }

}



//function to resize and update the height of the slide for normal sliders
function td_resize_normal_slide_and_update(args) {


    //console.log('resize 2');
    var slide_displayd = 0;//args.currentSlideNumber;

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    //get window width
    var window_wight = td_get_document_width();

    if(!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    var slide_outer_width = jQuery("#" + current_slider + "_item_" + slide_displayd).outerWidth(true);

    //only for android, width of the screen to start changing the height of the slide
    var max_wight_resize = 780;
    if(td_detect.is_android) {
        max_wight_resize = 1000;
    }

    if (window_wight < max_wight_resize && !td_detect.is_ipad) {//problem because we cannot get an accurate page width
        if(slide_outer_width > 300) {
            setHeight = slide_outer_width * 0.5;
        } else {
            setHeight = slide_outer_width;
        }

        //console.log(window_wight);
        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider, #" + current_slider + " .td-slider .td-module-thumb").css({
            height: setHeight
        });

        setTimeout(function () {
            jQuery("#" + current_slider).iosSlider("update");



        }, 2000);

    }
}
"use strict";



/**
 * affix menu
 */
td_affix.init({
    menu_selector: '.td-header-main-menu',
    menu_wrap_selector: '.td-header-menu-wrap',
    tds_snap_menu: td_util.get_backend_var('tds_snap_menu'),
    tds_snap_menu_logo: td_util.get_backend_var('tds_logo_on_sticky')
});


/**
 * smooth scroll init
 */
/*
jQuery().ready(function () {
    if (td_detect.is_chrome === true && td_detect.is_osx === false) {
        td_smooth_scroll();
    }
});
*/


/**
 * sidebar init
 */
if (td_util.get_backend_var('tds_smart_sidebar') == 'enabled' && td_detect.is_ios === false) {
    jQuery(window).load(function() {
        // find the rows and the sidebars objects and add them to the magic sidebar object array
        jQuery('.td-ss-row').each(function () {
            //@todo check to see if the sidebar + content is pressent
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery(this).children('.td-pb-span4').children('.wpb_wrapper');
            td_smart_sidebar_item.content_jquery_obj = jQuery(this).children('.td-pb-span8').children('.wpb_wrapper');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        });



        // check the page to see if we have smart sidebar classes (.td-ss-main-content and .td-ss-main-sidebar)
        if (jQuery('.td-ss-main-content').length > 0 && jQuery('.td-ss-main-sidebar').length > 0) {
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery('.td-ss-main-sidebar');
            td_smart_sidebar_item.content_jquery_obj = jQuery('.td-ss-main-content');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        }

        td_smart_sidebar.td_events_resize();
    });
}


