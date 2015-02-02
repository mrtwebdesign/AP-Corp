(function(){var $;$=jQuery,$.fn.flexNav=function(t){var e,n,i,s,a,o,l,h,r,u,d,c;return r=$.extend({animationSpeed:250,transitionOpacity:!0,buttonSelector:".menu-button",hoverIntent:!1,hoverIntentTimeout:150,calcItemWidths:!1,hover:!0},t),e=$(this),e.addClass("with-js"),r.transitionOpacity===!0&&e.addClass("opacity"),e.find("li").each(function(){return $(this).has("ul").length?$(this).addClass("item-with-ul").find("ul").hide():void 0}),r.calcItemWidths===!0&&(n=e.find(">li"),s=n.length,o=100/s,a=o+"%"),e.data("breakpoint")&&(i=e.data("breakpoint")),u=function(){return e.hasClass("lg-screen")===!0&&r.hover===!0?r.transitionOpacity===!0?$(this).find(">ul").addClass("flexnav-show").stop(!0,!0).animate({height:["toggle","swing"],opacity:"toggle"},r.animationSpeed):$(this).find(">ul").addClass("flexnav-show").stop(!0,!0).animate({height:["toggle","swing"]},r.animationSpeed):void 0},l=function(){return e.hasClass("lg-screen")===!0&&$(this).find(">ul").hasClass("flexnav-show")===!0&&r.hover===!0?r.transitionOpacity===!0?$(this).find(">ul").removeClass("flexnav-show").stop(!0,!0).animate({height:["toggle","swing"],opacity:"toggle"},r.animationSpeed):$(this).find(">ul").removeClass("flexnav-show").stop(!0,!0).animate({height:["toggle","swing"]},r.animationSpeed):void 0},h=function(){var t;if($(window).width()<=i)return e.removeClass("lg-screen").addClass("sm-screen"),r.calcItemWidths===!0&&n.css("width","100%"),t=r.buttonSelector+", "+r.buttonSelector+" .touch-button",$(t).removeClass("active"),$(".one-page li a").on("click",function(){return e.removeClass("flexnav-show")});if($(window).width()>i){if(e.removeClass("sm-screen").addClass("lg-screen"),r.calcItemWidths===!0&&n.css("width",a),e.removeClass("flexnav-show").find(".item-with-ul").on(),$(".item-with-ul").find("ul").removeClass("flexnav-show"),l(),r.hoverIntent===!0)return $(".item-with-ul").hoverIntent({over:u,out:l,timeout:r.hoverIntentTimeout});if(r.hoverIntent===!1)return $(".item-with-ul").on("mouseenter",u).on("mouseleave",l)}},$(r.buttonSelector).data("navEl",e),c=".item-with-ul, "+r.buttonSelector,$(c).append('<span class="touch-button"><i class="navicon">&#9660;</i></span>'),d=r.buttonSelector+", "+r.buttonSelector+" .touch-button",$(d).on("click",function(t){var e,n,i;return $(d).toggleClass("active"),t.preventDefault(),t.stopPropagation(),i=r.buttonSelector,e=$(this).is(i)?$(this):$(this).parent(i),n=e.data("navEl"),n.toggleClass("flexnav-show")}),$(".touch-button").on("click",function(t){var n,i;return n=$(this).parent(".item-with-ul").find(">ul"),i=$(this).parent(".item-with-ul").find(">span.touch-button"),e.hasClass("lg-screen")===!0&&$(this).parent(".item-with-ul").siblings().find("ul.flexnav-show").removeClass("flexnav-show").hide(),n.hasClass("flexnav-show")===!0?(n.removeClass("flexnav-show").slideUp(r.animationSpeed),i.removeClass("active")):n.hasClass("flexnav-show")===!1?(n.addClass("flexnav-show").slideDown(r.animationSpeed),i.addClass("active")):void 0}),e.find(".item-with-ul *").focus(function(){return $(this).parent(".item-with-ul").parent().find(".open").not(this).removeClass("open").hide(),$(this).parent(".item-with-ul").find(">ul").addClass("open").show()}),h(),$(window).on("resize",h)}}).call(this);