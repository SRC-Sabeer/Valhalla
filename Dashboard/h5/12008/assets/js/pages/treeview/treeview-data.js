$(function(){var i=[{text:"Parent 1",href:"#parent1",tags:["4"],nodes:[{text:"Child 1",href:"#child1",tags:["2"],nodes:[{text:"Grandchild 1",href:"#grandchild1",tags:["0"]},{text:"Grandchild 2",href:"#grandchild2",tags:["0"]}]},{text:"Child 2",href:"#child2",tags:["0"]}]},{text:"Parent 2",href:"#parent2",tags:["0"]},{text:"Parent 3",href:"#parent3",tags:["0"]},{text:"Parent 4",href:"#parent4",tags:["0"]},{text:"Parent 5",href:"#parent5",tags:["0"]}];var g=[{text:"Parent 1",tags:["2"],nodes:[{text:"Child 1",tags:["3"],nodes:[{text:"Grandchild 1",tags:["6"]},{text:"Grandchild 2",tags:["3"]}]},{text:"Child 2",tags:["3"]}]},{text:"Parent 2",tags:["7"]},{text:"Parent 3",icon:"glyphicon glyphicon-earphone",href:"#demo",tags:["11"]},{text:"Parent 4",icon:"glyphicon glyphicon-cloud-download",href:"/demo.html",tags:["19"],selected:true},{text:"Parent 5",icon:"glyphicon glyphicon-certificate",color:"pink",backColor:"red",href:"http://www.tesco.com",tags:["available","0"]}];var q='[{"text": "Parent 1","nodes": [{"text": "Child 1","nodes": [{"text": "Grandchild 1"},{"text": "Grandchild 2"}]},{"text": "Child 2"}]},{"text": "Parent 2"},{"text": "Parent 3"},{"text": "Parent 4"},{"text": "Parent 5"}]';$("#treeview1").treeview({data:i});$("#treeview2").treeview({levels:1,data:i});$("#treeview3").treeview({levels:99,data:i});$("#treeview4").treeview({color:"#428bca",data:i});$("#treeview5").treeview({color:"#428bca",expandIcon:"fa fa-chevron-right",collapseIcon:"fa fa-chevron-down",nodeIcon:"fa fa-bookmark",data:i});$("#treeview6").treeview({color:"#428bca",expandIcon:"fa fa-stop",collapseIcon:"fa fa-square-o",nodeIcon:"fa fa-user",showTags:true,data:i});$("#treeview7").treeview({color:"#428bca",showBorder:false,data:i});$("#treeview8").treeview({expandIcon:"fa fa-stop",collapseIcon:"fa fa-square-o",nodeIcon:"fa fa-user",color:"yellow",backColor:"#f36a5a",onhoverColor:"orange",borderColor:"red",showBorder:false,showTags:true,highlightSelected:true,selectedColor:"yellow",selectedBackColor:"darkorange",data:i});$("#treeview9").treeview({expandIcon:"fa fa-stop",collapseIcon:"fa fa-square-o",nodeIcon:"fa fa-user",color:"white",backColor:"#1bbc9b",onhoverColor:"orange",borderColor:"red",showBorder:false,showTags:true,highlightSelected:true,selectedColor:"yellow",selectedBackColor:"darkorange",data:g});$("#treeview10").treeview({color:"#428bca",enableLinks:true,data:i});var d=$("#treeview-searchable").treeview({data:i,});var r=function(t){var w=$("#input-search").val();var u={ignoreCase:$("#chk-ignore-case").is(":checked"),exactMatch:$("#chk-exact-match").is(":checked"),revealResults:$("#chk-reveal-results").is(":checked")};var x=d.treeview("search",[w,u]);var v="<p>"+x.length+" matches found</p>";$.each(x,function(y,z){v+="<p>- "+z.text+"</p>"});$("#search-output").html(v)};$("#btn-search").on("click",r);$("#input-search").on("keyup",r);$("#btn-clear-search").on("click",function(t){d.treeview("clearSearch");$("#input-search").val("");$("#search-output").html("")});var p=function(){return $("#treeview-selectable").treeview({data:i,multiSelect:$("#chk-select-multi").is(":checked"),onNodeSelected:function(t,u){$("#selectable-output").prepend("<p>"+u.text+" was selected</p>")},onNodeUnselected:function(t,u){$("#selectable-output").prepend("<p>"+u.text+" was unselected</p>")}})};var e=p();var o=function(){return e.treeview("search",[$("#input-select-node").val(),{ignoreCase:false,exactMatch:false}])};var s=o();$("#chk-select-multi:checkbox").on("change",function(){console.log("multi-select change");e=p();s=o()});$("#input-select-node").on("keyup",function(t){s=o();$(".select-node").prop("disabled",!(s.length>=1))});$("#btn-select-node.select-node").on("click",function(t){e.treeview("selectNode",[s,{silent:$("#chk-select-silent").is(":checked")}])});$("#btn-unselect-node.select-node").on("click",function(t){e.treeview("unselectNode",[s,{silent:$("#chk-select-silent").is(":checked")}])});$("#btn-toggle-selected.select-node").on("click",function(t){e.treeview("toggleNodeSelected",[s,{silent:$("#chk-select-silent").is(":checked")}])});var c=$("#treeview-expandible").treeview({data:i,onNodeCollapsed:function(t,u){$("#expandible-output").prepend("<p>"+u.text+" was collapsed</p>")},onNodeExpanded:function(t,u){$("#expandible-output").prepend("<p>"+u.text+" was expanded</p>")}});var n=function(){return c.treeview("search",[$("#input-expand-node").val(),{ignoreCase:false,exactMatch:false}])};var k=n();$("#input-expand-node").on("keyup",function(t){k=n();$(".expand-node").prop("disabled",!(k.length>=1))});$("#btn-expand-node.expand-node").on("click",function(t){var u=$("#select-expand-node-levels").val();c.treeview("expandNode",[k,{levels:u,silent:$("#chk-expand-silent").is(":checked")}])});$("#btn-collapse-node.expand-node").on("click",function(t){c.treeview("collapseNode",[k,{silent:$("#chk-expand-silent").is(":checked")}])});$("#btn-toggle-expanded.expand-node").on("click",function(t){c.treeview("toggleNodeExpanded",[k,{silent:$("#chk-expand-silent").is(":checked")}])});$("#btn-expand-all").on("click",function(t){var u=$("#select-expand-all-levels").val();c.treeview("expandAll",{levels:u,silent:$("#chk-expand-silent").is(":checked")})});$("#btn-collapse-all").on("click",function(t){c.treeview("collapseAll",{silent:$("#chk-expand-silent").is(":checked")})});var a=$("#treeview-checkable").treeview({data:i,showIcon:false,showCheckbox:true,onNodeChecked:function(t,u){$("#checkable-output").prepend("<p>"+u.text+" was checked</p>")},onNodeUnchecked:function(t,u){$("#checkable-output").prepend("<p>"+u.text+" was unchecked</p>")}});var l=function(){return a.treeview("search",[$("#input-check-node").val(),{ignoreCase:false,exactMatch:false}])};var h=l();$("#input-check-node").on("keyup",function(t){h=l();$(".check-node").prop("disabled",!(h.length>=1))});$("#btn-check-node.check-node").on("click",function(t){a.treeview("checkNode",[h,{silent:$("#chk-check-silent").is(":checked")}])});$("#btn-uncheck-node.check-node").on("click",function(t){a.treeview("uncheckNode",[h,{silent:$("#chk-check-silent").is(":checked")}])});$("#btn-toggle-checked.check-node").on("click",function(t){a.treeview("toggleNodeChecked",[h,{silent:$("#chk-check-silent").is(":checked")}])});$("#btn-check-all").on("click",function(t){a.treeview("checkAll",{silent:$("#chk-check-silent").is(":checked")})});$("#btn-uncheck-all").on("click",function(t){a.treeview("uncheckAll",{silent:$("#chk-check-silent").is(":checked")})});var b=$("#treeview-disabled").treeview({data:i,onNodeDisabled:function(t,u){$("#disabled-output").prepend("<p>"+u.text+" was disabled</p>")},onNodeEnabled:function(t,u){$("#disabled-output").prepend("<p>"+u.text+" was enabled</p>")},onNodeCollapsed:function(t,u){$("#disabled-output").prepend("<p>"+u.text+" was collapsed</p>")},onNodeUnchecked:function(t,u){$("#disabled-output").prepend("<p>"+u.text+" was unchecked</p>")},onNodeUnselected:function(t,u){$("#disabled-output").prepend("<p>"+u.text+" was unselected</p>")}});var m=function(){return b.treeview("search",[$("#input-disable-node").val(),{ignoreCase:false,exactMatch:false}])};var j=m();$("#input-disable-node").on("keyup",function(t){j=m();$(".disable-node").prop("disabled",!(j.length>=1))});$("#btn-disable-node.disable-node").on("click",function(t){b.treeview("disableNode",[j,{silent:$("#chk-disable-silent").is(":checked")}])});$("#btn-enable-node.disable-node").on("click",function(t){b.treeview("enableNode",[j,{silent:$("#chk-disable-silent").is(":checked")}])});$("#btn-toggle-disabled.disable-node").on("click",function(t){b.treeview("toggleNodeDisabled",[j,{silent:$("#chk-disable-silent").is(":checked")}])});$("#btn-disable-all").on("click",function(t){b.treeview("disableAll",{silent:$("#chk-disable-silent").is(":checked")})});$("#btn-enable-all").on("click",function(t){b.treeview("enableAll",{silent:$("#chk-disable-silent").is(":checked")})});var f=$("#treeview12").treeview({data:q})});