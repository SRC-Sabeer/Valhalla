$(".tags-input").each(function(){var a=$(this).data("type");if(a==="tags"){$(this).tagsInput({width:"auto"})}if(a==="fruits-tags"){$(this).tagsInput({width:"auto",onChange:function(b,c){var e=["apple","banana","guava"];var d=$(this).data("highlight-color");$(".tag",c).each(function(){if($(this).text().search(new RegExp("\\b("+e.join("|")+")\\b"))>=0){$(this).css("background-color",d)}})}})}if(a==="fixedWidth-tags"){$(this).tagsInput({width:"350",})}});