$(function(){$(".js-animations").bind("change",function(){var a=$(this).val();$(".js-animating-object").animateCss(a)})});$.fn.extend({animateCss:function(b){var a="webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";$(this).addClass("animated "+b).one(a,function(){$(this).removeClass("animated "+b)})}});