var App=function(){var v=false;var w=false;var u=false;var y=[];var b="";var d="img/";var e="global/plugins/";var c="css/";var l=function(){v=!!navigator.userAgent.match(/MSIE 8.0/);w=!!navigator.userAgent.match(/MSIE 9.0/);u=!!navigator.userAgent.match(/MSIE 10.0/);if(u){$("html").addClass("ie10")}if(u||w||v){$("html").addClass("ie")}};var g=function(){jQuery(".control-sidebar-btn").click(function(){jQuery(".quick-setting").toggle("slide")})};var t=function(){var C=$(".chatpane");if($("body").hasClass("page-boxed")===false){$(".layout-option",C).val("fluid")}$(".sidebar-option",C).val("default");$(".page-header-option",C).val("fixed");$(".page-footer-option",C).val("default");if($(".sidebar-pos-option").attr("disabled")===false){$(".sidebar-pos-option",C).val("left")}var B="";var D=function(){var M=$(".layout-option",C).val();var O=$(".sidebar-option",C).val();var K=$(".page-header-option",C).val();var J=$(".page-footer-option",C).val();var P=$(".sidebar-pos-option",C).val();var Q=$(".sidebar-style-option",C).val();var N=$(".sidebar-menu-option",C).val();var L=$(".page-header-top-dropdown-style-option",C).val();if(O=="fixed"&&K=="default"){alert("Default Header with Fixed Sidebar option is not supported. Proceed with Fixed Header with Fixed Sidebar.");$(".page-header-option",C).val("fixed");$(".sidebar-option",C).val("fixed");O="fixed";K="fixed"}x();if(M==="boxed"){$("body").addClass("page-boxed");$(".page-header > .page-header-inner").addClass("container");var I=$("body > .clearfix").after('<div class="container"></div>');$(".page-container").appendTo("body > .container");if(J==="fixed"){$(".page-footer").html('<div class="container">'+$(".page-footer").html()+"</div>")}else{$(".page-footer").appendTo("body > .container")}}if(B!=M){App.runResizeHandlers()}B=M;if(K==="fixed"){$("body").addClass("page-header-fixed");$(".page-header").removeClass("navbar-static-top").addClass("navbar-fixed-top")}else{$("body").removeClass("page-header-fixed");$(".page-header").removeClass("navbar-fixed-top").addClass("navbar-static-top")}if($("body").hasClass("page-full-width")===false){if(O==="fixed"){$("body").addClass("sidemenu-container-fixed");$("sidemenu").addClass("sidemenu-fixed");$("sidemenu").removeClass("page-sidebar-menu-default");Layout.initFixedSidebarHoverEffect()}else{$("body").removeClass("sidemenu-container-fixed");$("page-sidebar-menu").addClass("page-sidebar-menu-default");$("page-sidebar-menu").removeClass("sidemenu-default");$(".sidemenu").unbind("mouseenter").unbind("mouseleave")}}if(L==="dark"){$(".top-menu > .navbar-nav > li.dropdown").addClass("dropdown-dark")}else{$(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark")}if(J==="fixed"){$("body").addClass("page-footer-fixed")}else{$("body").removeClass("page-footer-fixed")}if(Q==="light"){$(".page-sidebar-menu").addClass("page-sidebar-menu-light")}else{$(".page-sidebar-menu").removeClass("page-sidebar-menu-light")}if(N==="hover"){if(O=="fixed"){$(".sidebar-menu-option",C).val("accordion");alert("Hover Sidebar Menu is not compatible with Fixed Sidebar Mode. Select Default Sidebar Mode Instead.")}else{$(".sidemenu").addClass("sidemenu-hover-submenu")}}else{$(".sidemenu").removeClass("sidemenu-hover-submenu")}if(P==="right"){$("body").addClass("sidemenu-container-reversed");$("#frontend-link").tooltip("destroy").tooltip({placement:"left"})}else{$("body").removeClass("sidemenu-container-reversed");$("#frontend-link").tooltip("destroy").tooltip({placement:"right"})}Layout.fixContentHeight();Layout.initFixedSidebar()};$(document).on("click",".toggler",C,function(){$(".toggler").hide();$(".toggler-close").show();$(".chatpane > .theme-options").show()});$(document).on("click",".toggler-close",C,function(){$(".toggler").show();$(".toggler-close").hide();$(".chatpane > .theme-options").hide()});$(document).on("click",".spinner button",function(){var I=$(this);var J=I.closest(".spinner").find("input");var K=1;if(J.attr("step")!=undefined){K=parseInt(J.attr("step"),10)}if(I.attr("data-dir")=="up"){if(J.attr("max")==undefined||parseInt(J.val(),10)<parseInt(J.attr("max"),10)){J.val(parseInt(J.val(),10)+K)}else{I.next("disabled",true)}}else{if(J.attr("min")==undefined||parseInt(J.val(),10)>parseInt(J.attr("min"),10)){J.val(parseInt(J.val(),10)-K)}else{I.prev("disabled",true)}}});$(document).on("click",".todo-check label",function(){$(this).parents("li").children(".todo-title").toggleClass("line-through")});$(document).on("click",".todo-remove",function(){$(this).closest("li").remove();return false});$(document).on("click",".panel .tools .fa-times",function(){$(this).parents(".panel").parent().remove()});$(".tooltips").tooltip();$(document).on("click",".clickable-row",function(){window.document.location=$(this).data("link")});$(document).on("click",".card .tools .t-collapse",function(){var I=$(this).parents(".card").children(".card-body");if($(this).hasClass("fa-chevron-down")){$(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");I.slideUp(200)}else{$(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");I.slideDown(200)}});$(document).on("click",".card .tools .t-close",function(){$(this).parents(".card").parent().remove()});$(".box-refresh").on("click",function(I){I.preventDefault();$("<div class='refresh-block'><span class='refresh-loader'><i class='fa fa-spinner fa-spin'></i></span></div>").appendTo($(this).parents(".tools").parents(".card-head").parents(".card"));setTimeout(function(){$(".refresh-block").remove()},1000)});if($("body").hasClass("page-boxed")){$(".layout-option",C).val("boxed")}if($("body").hasClass("sidemenu-container-fixed")){$(".sidebar-option",C).val("fixed")}if($("body").hasClass("page-header-fixed")){$(".page-header-option",C).val("fixed")}if($("body").hasClass("page-footer-fixed")){$(".page-footer-option",C).val("fixed")}if($("body").hasClass("sidemenu-container-reversed")){$(".sidebar-pos-option",C).val("right")}if($(".page-sidebar-menu").hasClass("page-sidebar-menu-light")){$(".sidebar-style-option",C).val("light")}if($(".page-sidebar-menu").hasClass("page-sidebar-menu-hover-submenu")){$(".sidebar-menu-option",C).val("hover")}var F=$(".sidebar-option",C).val();var A=$(".page-header-option",C).val();var z=$(".page-footer-option",C).val();var G=$(".sidebar-pos-option",C).val();var H=$(".sidebar-style-option",C).val();var E=$(".sidebar-menu-option",C).val();$(".layout-option, .page-header-option, .page-header-top-dropdown-style-option, .sidebar-option, .page-footer-option, .sidebar-pos-option, .sidebar-style-option, .sidebar-menu-option",C).change(D)};var x=function(){$("body").removeClass("page-boxed").removeClass("page-footer-fixed").removeClass("sidemenu-container-fixed").removeClass("page-header-fixed").removeClass("sidemenu-container-reversed");$(".page-header > .page-header-inner").removeClass("container");if($(".page-container").parent(".container").length===1){$(".page-container").insertAfter("body > .clearfix")}if($(".page-footer > .container").length===1){$(".page-footer").html($(".page-footer > .container").html())}else{if($(".page-footer").parent(".container").length===1){$(".page-footer").insertAfter(".page-container");$(".scroll-to-top").insertAfter(".page-footer")}}$(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");$("body > .container").remove()};var a=function(){for(var A=0;A<y.length;A++){var z=y[A];z.call()}};var m=function(){var A;if(v){var z;$(window).resize(function(){if(z==document.documentElement.clientHeight){return}if(A){clearTimeout(A)}A=setTimeout(function(){a()},50);z=document.documentElement.clientHeight})}else{$(window).resize(function(){if(A){clearTimeout(A)}A=setTimeout(function(){a()},50)})}};var f=function(){if(!$().bootstrapSwitch){return}$(".make-switch").bootstrapSwitch()};var s=function(){if(encodeURI(location.hash)){var z=encodeURI(location.hash.substr(1));$('a[href="#'+z+'"]').parents(".tab-pane:hidden").each(function(){var A=$(this).attr("id");$('a[href="#'+A+'"]').click()});$('a[href="#'+z+'"]').click()}if($().tabdrop){$(".tabbable-tabdrop .nav-pills, .tabbable-tabdrop .nav-tabs").tabdrop({text:'<i class="fa fa-ellipsis-v"></i>&nbsp;<i class="fa fa-angle-down"></i>'})}};var i=function(){$("body").on("click",".dropdown-menu.hold-on-click",function(z){z.stopPropagation()})};var h=function(){if(!$().counterUp){return}$("[data-counter='counterup']").counterUp({delay:10,time:1000})};var j=function(){if(v||w){$("input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)").each(function(){var z=$(this);if(z.val()===""&&z.attr("placeholder")!==""){z.addClass("placeholder").val(z.attr("placeholder"))}z.focus(function(){if(z.val()==z.attr("placeholder")){z.val("")}});z.blur(function(){if(z.val()===""||z.val()==z.attr("placeholder")){z.val(z.attr("placeholder"))}})})}};var q=function(){if($().select2){$.fn.select2.defaults.set("theme","bootstrap");$(".select2me").select2({placeholder:"Select",width:"auto",allowClear:true})}};var k=function(){$("[data-auto-height]").each(function(){var E=$(this);var B=$("[data-height]",E);var A=0;var C=E.attr("data-mode");var z=E.attr("data-offset")?E.attr("data-offset"):0;var D=parseInt(z,10);B.each(function(){if($(this).attr("data-height")=="height"){$(this).css("height","")}else{$(this).css("min-height","")}var F=(C=="base-height"?$(this).outerHeight():$(this).outerHeight(true));if(F>A){A=F}});A=A+D;B.each(function(){if($(this).attr("data-height")=="height"){$(this).css("height",A)}else{$(this).css("min-height",A)}});if(E.attr("data-related")){$(E.attr("data-related")).css("height",E.height())}})};var p=function(){$(document).on("click",".dropdown-quick-sidebar-toggler a",function(z){$("body").toggleClass("chat-sidebar-open")});$(document).on("click",".page-content",function(z){if($("body").hasClass("chat-sidebar-open")){$("body").toggleClass("chat-sidebar-open")}});$(document).on("keydown",function(z){if(z.keyCode===27&&$("body").hasClass("chat-sidebar-open")){$("body").toggleClass("chat-sidebar-open")}})};var n=function(){var B=$(".chat-sidebar-container");var C=B.find(".chat-sidebar-chat");var A=function(){var F=B.find(".chat-sidebar-chat-users");var G;G=B.height()-B.find(".nav-tabs").outerHeight(true);F.css("height",B.height()+"px");F.css("overflow","auto");F.attr("data-height",G);var D=C.find(".chat-sidebar-chat-user-messages");var E=G-C.find(".chat-sidebar-chat-user-form").outerHeight(true);E-=C.find(".page-quick-sidemenu").outerHeight(true);D.attr("data-height",E);D.css("height",E);D.css("overflow-y","auto")};A();App.addResizeHandler(A);B.find(".chat-sidebar-chat-users .media-list > .media").on("click",function(){C.addClass("chat-sidebar-content-item-shown");$(".chat-sidebar-item").animate({scrollTop:$(".chat-sidebar-item").height()},1000)});B.find(".chat-sidebar-chat-user .chat-sidebar-back-to-list").on("click",function(){C.removeClass("chat-sidebar-content-item-shown")});var z=function(E){E.preventDefault();var D=C.find(".chat-sidebar-chat-user-messages");var F=C.find(".chat-sidebar-chat-user-form .form-control");var I=F.val();if(I.length===0){return}var H=function(L,O,N,K,M){var P="";P+='<div class="post '+L+'">';P+='<img class="avatar" alt="" src="'+Layout.getLayoutImgPath()+K+'.jpg"/>';P+='<div class="message">';P+='<span class="arrow"></span>';P+='<a href="#" class="name">'+N+"</a>&nbsp;";P+='<span class="datetime">'+O+"</span>";P+='<span class="body body-'+L+'">';P+=M;P+="</span>";P+="</div>";P+="</div>";$(".chat-sidebar-chat-user-messages").animate({scrollTop:$(document).height()},1000);return P};var J=new Date();var G=H("out",(J.getHours()+":"+J.getMinutes()),"Kiran Patel","../assets/img/dp",I);G=$(G);D.append(G);F.val("");setTimeout(function(){var L=new Date();var K=H("in",(L.getHours()+":"+L.getMinutes()),"Jacob Ryan","../assets/img/user/user5","Lorem ipsum doloriam nibh...");K=$(K);D.append(K)},2000)};C.find(".chat-sidebar-chat-user-form .btn").on("click",z);C.find(".chat-sidebar-chat-user-form .form-control").on("keypress",function(D){if(D.which==13){z(D);return false}})};var r=function(){$(".slimscroll-style").slimscroll({height:$(window).height()-90,position:"right",size:"5px",color:"#9ea5ab",wheelStep:5});$(".small-slimscroll-style").slimscroll({height:"260px",position:"right",size:"5px",color:"#9ea5ab",wheelStep:5})};handleChatScrollbar=function(){var A=$(".chat-sidebar-chat"),z=function(){var D,B=A.find(".chat-sidebar-item"),C=$(".chat-sidebar-chat-users").attr("data-height");D=$(".chat-sidebar-chat-users").attr("data-height")-80-A.find(".nav-justified > .nav-tabs").outerHeight(),B.attr("data-height",D),B.css("height",C+"px"),B.css("overflow-y","auto")};z(),App.addResizeHandler(z)};var o=function(){var A=$(".chat-sidebar-container");var z=function(){var B=A.find(".chat-sidebar-settings-list");var C;C=A.height()-80-A.find(".nav-justified > .nav-tabs").outerHeight();B.attr("data-height",C);B.css("height",A.height()+"px");B.css("overflow-y","auto")};z();App.addResizeHandler(z)};return{init:function(){l();t();m();g();f();q();i();s();h();p();n();o();handleChatScrollbar();r();this.addResizeHandler(k);j()},addResizeHandler:function(z){y.push(z)},runResizeHandlers:function(){a()},scrollTo:function(z,A){var B=(z&&z.length>0)?z.offset().top:0;if(z){if($("body").hasClass("page-header-fixed")){B=B-$(".page-header").height()}else{if($("body").hasClass("page-header-top-fixed")){B=B-$(".page-header-top").height()}else{if($("body").hasClass("page-header-menu-fixed")){B=B-$(".page-header-menu").height()}}}B=B+(A?A:-1*z.height())}$("html,body").animate({scrollTop:B},"slow")},scrollTop:function(){App.scrollTo()},startPageLoading:function(z){if(z&&z.animate){$(".page-spinner-bar").remove();$("body").append('<div class="page-spinner-bar"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>')}else{$(".page-loading").remove();$("body").append('<div class="page-loading"><img src="'+this.getGlobalImgPath()+'loading-spinner-grey.gif"/>&nbsp;&nbsp;<span>'+(z&&z.message?z.message:"Loading...")+"</span></div>")}},stopPageLoading:function(){$(".page-loading, .page-spinner-bar").remove()},getActualVal:function(z){z=$(z);if(z.val()===z.attr("placeholder")){return""}return z.val()},getURLParameter:function(A){var C=window.location.search.substring(1),z,D,B=C.split("&");for(z=0;z<B.length;z++){D=B[z].split("=");if(D[0]==A){return unescape(D[1])}}return null},getViewPort:function(){var A=window,z="inner";if(!("innerWidth" in window)){z="client";A=document.documentElement||document.body}return{width:A[z+"Width"],height:A[z+"Height"]}},getUniqueID:function(z){return"prefix_"+Math.floor(Math.random()*(new Date()).getTime())},isIE8:function(){return v},isIE9:function(){return w},getAssetsPath:function(){return b},setAssetsPath:function(z){b=z},setGlobalImgPath:function(z){d=z},getGlobalImgPath:function(){return b+d},getGlobalCssPath:function(){return b+c},getResponsiveBreakpoint:function(z){var A={xs:480,sm:768,md:992,lg:1200};return A[z]?A[z]:0}}}();jQuery(document).ready(function(){App.init();$(".chat-sidebar-chat-user-messages").animate({scrollTop:$(document).height()},1000)});