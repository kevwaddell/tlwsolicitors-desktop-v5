!function($){function t(){for(var t,n=window.location.href.slice(window.location.href.indexOf("?")+1).split("&"),e=0;e<n.length;e++)t=n[e].split("="),"gclid"===t[0]&&1===$("input#input_23_12").length&&$("input#input_23_12").val(t[1]),"gclid"===t[0]&&1===$("input#input_22_27").length&&(console.log(t),$("input#input_22_27").val(t[1])),"gclid"===t[0]&&$.cookie(t[0],t[1],{expires:1,path:"/"})}function n(){return window.print(),window.stop&&(location.reload(),window.stop()),!1}function e(t){var n=$(t),e=$(window),o=e.scrollTop(),a=o+e.height()/2,s=n.offset().top,i=s+n.height();return 0!==o&&(i<=a&&s>=o)}var o,a="#top",s,i,l=0,r=parseInt($("#our-team-wrapper-inner").css("left")),d=$(".our-team-wrapper").outerWidth(),c=$("#our-team-wrapper-inner").outerWidth(),p="click";t(),$(window).on("resize",function(){d=$(".our-team-wrapper").outerWidth()}),$(document).ready(function(){function t(){o=setInterval(u,7e3)}function u(){var t=$(".tag-scroller").find(".active"),n=$(t).next();0===$(n).length&&(n=$(".tag-scroller-txt").eq(0)),$(t).fadeToggle(500).removeClass("active"),$(n).fadeToggle(1e3).addClass("active")}function f(){o=setInterval(b,7e3)}function b(){var t=$(".feedback-section-inner").find(".item.active"),n=$(t).next();0===$(n).length&&(n=$(".feedback-section-inner").find(".item").eq(0)),$(t).animate({left:"-100%"},500,function(){$(this).removeClass("active").css("left","100%")}),$(n).animate({left:"0%"},500,function(){$(this).addClass("active")})}function m(t){var n=t,e=Math.abs(d/4);"end"===n&&(l=d-c,$("#scroll-left-btn").removeClass("disabled"),$("#scroll-start-btn").removeClass("disabled"),$("#scroll-right-btn").addClass("disabled"),$("#scroll-end-btn").addClass("disabled"),$("#our-team-wrapper-inner").animate({left:l+"px"},500,function(){r=parseInt($("#our-team-wrapper-inner").css("left"))})),"left"===n&&(l=r-e,$("#scroll-start-btn").hasClass("disabled")&&$("#scroll-left-btn").hasClass("disabled")&&($("#scroll-left-btn").removeClass("disabled"),$("#scroll-start-btn").removeClass("disabled")),Math.abs(l)>c-d&&(l=Math.round(d-c),$("#scroll-right-btn").addClass("disabled"),$("#scroll-end-btn").addClass("disabled")),$("#our-team-wrapper-inner").animate({left:l+"px"},500,function(){r=parseInt($("#our-team-wrapper-inner").css("left"))})),"right"===n&&(l=r+e,$("#scroll-end-btn").hasClass("disabled")&&$("#scroll-right-btn").hasClass("disabled")&&($("#scroll-right-btn").removeClass("disabled"),$("#scroll-end-btn").removeClass("disabled")),l>=0&&(l=0,$("#scroll-left-btn").addClass("disabled"),$("#scroll-start-btn").addClass("disabled")),$("#our-team-wrapper-inner").animate({left:l+"px"},500,function(){r=parseInt($("#our-team-wrapper-inner").css("left"))})),"start"===n&&(l=0,$("#scroll-left-btn").addClass("disabled"),$("#scroll-start-btn").addClass("disabled"),$("#scroll-right-btn").removeClass("disabled"),$("#scroll-end-btn").removeClass("disabled"),$("#our-team-wrapper-inner").animate({left:l+"px"},500,function(){r=parseInt($("#our-team-wrapper-inner").css("left"))}))}i=$("a.section-target"),i.length>0&&i.each(function(t,n){e($(n))&&(s=$(n).attr("id"),a="#"+s)}),$(".selectpicker").selectpicker({style:"btn-lg hp-select",size:5}),$(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",width:"100%"}),$("body").on(p,"a.scroll-to",function(){var t=$(this).attr("href");return $("html, body").animate({scrollTop:$("a"+t).offset().top},500),!1}),$("body").on(p,"button#nav-btn",function(){var t=$("#top-nav").find(".nav-wrapper").outerHeight();return $("#top-nav").hasClass("nav-closed")&&($("#quick-links-sml").toggleClass("nav-closed nav-open"),$("#top-nav").animate({height:t+"px"},500,function(){$(this).toggleClass("nav-closed nav-open").removeAttr("style")})),$("#top-nav").hasClass("nav-open")&&$("#top-nav").animate({height:"0px"},500,function(){$(this).toggleClass("nav-closed nav-open").removeAttr("style"),$("#quick-links-sml").toggleClass("nav-open nav-closed")}),!1}),$("#top-nav").on(p,"button#close-nav",function(){return $("#top-nav").animate({height:"0px"},500,function(){$(this).toggleClass("nav-open nav-closed").removeAttr("style"),$("li.with-sub-nav").removeClass("sub-open").addClass("sub-closed"),$("#quick-links-sml").animate({left:"20px"},400)}),!1}),$("#top-nav").on("click","li.with-sub-nav > a",function(){var t=$(this).parent(),n=$(t).siblings();return $(t).siblings().removeClass("sub-open").addClass("sub-closed"),$(n).find(".sub-open").length>0&&$(n).find(".sub-open").removeClass("sub-open").addClass("sub-closed"),$(t).toggleClass("sub-open sub-closed"),!1}),$("body").on(p,"button#search-btn",function(){return $("#search-pop-up").hasClass("off")&&$("#search-pop-up").removeClass("off").addClass("on"),!1}),$("body").on(p,"button#close-search",function(){return $("#search-pop-up").hasClass("on")&&($("#search-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off")})),!1}),$("body").on("click","button#continue-read-btn",function(){var t=$("#content-extra-inner").outerHeight();return $("button#continue-read-btn").addClass("hidden"),$("html, body").animate({scrollTop:$("#content-extra-inner").offset().top-20},500),$("#content-extra").animate({height:t+"px"},500,function(){$("#content-extra").removeClass("closed").addClass("open").removeAttr("style")}),!1}),$("body").on("click","button#close-content-extra-btn",function(){return $("button#continue-read-btn").removeClass("hidden"),$("html, body").animate({scrollTop:$(".main-txt").offset().top-200},500),$("#content-extra").animate({height:"0px"},500,function(){$("#content-extra").removeClass("open").addClass("closed").removeAttr("style")}),!1}),$(".scrollable-txt").slimScroll({height:"470px",size:"15px",position:"left",alwaysVisible:!0,railVisible:!0,railColor:"#D7D7D7",color:"#4b4b4b"}),$("body").on(p,"#txt-only-content button.access-btn",function(){var t=$(this).attr("data-role");return $(this).siblings().removeClass("active"),$(this).addClass("active"),$(".main-txt").removeClass("txt-md txt-lg txt-sm").addClass(t),!1}),$("body").on(p,".tk-slider-nav a",function(){$(this).parent().siblings().removeClass("active"),$(this).parent().addClass("active");var t=$(window).scrollTop(),n=$("#toolkit-slides").offset().top-110,e=$(this).attr("href"),o=$(".tk-slide-active").attr("id"),a=e.split("#");return $("#"+o).find(".scrollable-txt").slimScroll({scrollTo:"0px",start:"top"}),$(".slimScrollBar").animate({top:"0px"},500),$(".tk-slides-inner").removeClass(o+"-active").addClass(a[1]+"-active"),$("#"+o).removeClass("tk-slide-active"),$(e).addClass("tk-slide-active"),(t>n||t<n)&&$("html, body").animate({scrollTop:n},500),!1}),$("body").on(p,"button#print-pg-btn",function(){n()}),$("body").on(p,"button#txt-only-btn",function(){var t=$(".content-section").find(".main-txt"),n=$(".banner-title .container").text(),e=$(t).clone(),o=$("#txt-only-content").innerHeight()-170;if(n){var a='<div class="title-header">'+n+"</div>";$(a).appendTo("#txt-only-wrapper")}return $(e).appendTo("#txt-only-wrapper").slimScroll({height:o+"px"}),$("#txt-only-wrapper").fadeIn("fast"),$("body").addClass("txt-only-open"),$("#txt-only-content").removeClass("closed").addClass("open"),!1}),$("body").on(p,"button#close-txt-only-btn",function(){return $("#txt-only-wrapper").fadeOut("fast").empty(),$("#txt-only-content").removeClass("open").addClass("closed"),$("body").removeClass("txt-only-open"),!1}),t(),1===$(".feedback-section-wrapper").length&&f(),$("body").on(p,"button#scroll-down-btn",function(){var t=$(this).parent().next().find("a.section-target"),n=$(t).attr("id"),e=$("#"+n).offset().top-40;return"service-info-txt"!==n&&"article-txt"!==n||(e=$("#"+n).offset().top-4),a="#"+n,$("html, body").animate({scrollTop:e},500),!1}),$("body").on(p,"button#intro-scroll-down-btn",function(){var t=$(this).parents("article.content-section").next().find("a.section-target"),n=$(t).attr("id"),e=$("#"+n).offset().top-40;return a="#"+n,$("html, body").animate({scrollTop:e},500),!1}),$("body").on(p,"button#quick-links-btn-show",function(){var t=$(this).parent();return $(t).toggleClass("open closed"),!1}),$("body").on(p,".ql-section-links a",function(){var t=$(this).attr("href"),n=$(t).offset().top-40;return a=t,"#toolkit-slides"===a&&(n-=60),"#service-info-txt"!==a&&"#article-txt"!==a||(n=$(t).offset().top-4),$(this).siblings().removeClass("active"),$(this).addClass("active"),$("html, body").animate({scrollTop:n},300),!1}),$("body").on(p,"button#quick-links-2-top",function(){return $("html, body").animate({scrollTop:0},500),!1}),$("body").on(p,"button#quick-links-btn-up",function(){if("#top"!==a){var t=$(a).parent().prev();if($(t).find("a.section-target")){var n=$(t).offset().top-40;$(t).hasClass("toolkit-slider")&&(n-=60),$(t).hasClass("content-section")&&(n=$(t).offset().top),$("html, body").animate({scrollTop:n},300)}else $("html, body").animate({scrollTop:0},300),a="#top"}return!1}),$("body").on(p,"button#quick-links-btn-dwn",function(){var t,n;return"#top"!==a?(t=$(a).parent().next(),$(t).find("a.section-target")&&(n=$(t).offset().top-40,$("html, body").animate({scrollTop:n},300))):(t=$(i[0]).parent(),$(t).find("a.section-target")&&(n=$(t).offset().top-40,$(t).hasClass("content-section")&&(n=$(t).offset().top),$("html, body").animate({scrollTop:n},300))),a=t,!1}),$("body").on(p,"a.jump-2-link",function(){var t=$(this).attr("href"),n=$(t).offset().top-40;return a=t,$("html, body").animate({scrollTop:n},500),!1}),$(".team-profile").on(p,"button.profile-info-btn",function(){return $(this).parents(".team-profile").siblings().find(".profile-txt").removeClass("txt-view").addClass("txt-hide"),$(this).parent().toggleClass("txt-hide txt-view"),!1}),$(".scroll-btns").on(p,"button.btn",function(){var t=$(this).attr("id");return $(this).hasClass("disabled")||($(".team-profile").find(".profile-txt").hasClass("txt-view")&&$(".team-profile").find(".profile-txt").removeClass("txt-view").addClass("txt-hide"),"scroll-start-btn"===t&&m("start"),"scroll-left-btn"===t&&m("right"),"scroll-right-btn"===t&&m("left"),"scroll-end-btn"===t&&m("end")),!1}),$("body").on(p,"button#close-awards-btn",function(){return $(this).parent().removeClass("open").addClass("closed"),!1});var h=function(){1===$("#xmas-popup-wrap").length&&$("#xmas-popup-wrap").hasClass("pop-up-inactive")&&($("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),$("#xmas-popup-wrap").fadeIn("slow",function(){$(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};$(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hasClass("bounceOutDown")&&($("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),$("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),$(this).removeClass("animated bounceOutDown").addClass("hidden"))}),$("body").on(p,"button#xmas-popup-btn-open",function(){return h(),!1}),$("body").on(p,"button#close-xmas-popup",function(){return $(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),$("body").on(p,"button.view-faq-btn",function(){return $(this).parent().toggleClass("open closed"),!1})}),$(window).load(function(){1===$("a#call-2-action-radio").length&&($("#call-2-action-radio").removeAttr("disabled"),$("i.fa-spinner").hide()),$("body").hasClass("loading")&&1===$("#site-loader").length&&($("body").removeClass("loading").addClass("loaded"),$("#site-loader").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hide()}))}),$(window).scroll(function(){var t=$(window).scrollTop(),n=$(window).height();i=$("a.section-target"),t<=n/2&&(a="#top"),i.length>0&&i.each(function(t,n){return e($(n))?(s=$(n).attr("id"),a="#"+s,$("a[href="+a+"]").siblings().removeClass("active"),$("a[href="+a+"]").addClass("active"),!1):(a="#top",void $(".ql-section-links a").removeClass("active"))})})}(window.jQuery);