/*
Checkator jQuery Plugin
A plugin for radio and checkbox elements
version 1.1, May 16th, 2015
by Ingi P. Jacobsen
The MIT License (MIT)
Copyright (c) 2013 Ingi P. Jacobsen
*/
!function(t){t.checkator=function(e,i){var s={prefix:"checkator_"},a=this,c=t(e).attr("type"),r=t(e)[0].checked,n=null,o=null;a.settings={},a.init=function(){a.settings=t.extend({},s,i),n=document.createElement("div"),t(n).addClass(a.settings.prefix+"holder "+c),t(e).before(n),t(n).append(e),o=document.createElement("div"),void 0!==e.id&&t(o).attr("id",a.settings.prefix+e.id),t(o).addClass(a.settings.prefix+"element "+c+" "+(r?"checked ":"")),t(n).css({width:t(e).outerWidth()+"px",height:t(e).outerHeight()+"px","margin-top":t(e).css("margin-top"),"margin-right":t(e).css("margin-right"),"margin-bottom":t(e).css("margin-bottom"),"margin-left":t(e).css("margin-left"),"float":t(e).css("float"),display:"inline"===t(e).css("display")?"inline-clock":t(e).css("display")}),t(e).css({opacity:0,margin:0}),t(e).addClass(a.settings.prefix+"source"),t(e).after(o)},a.destroy=function(){t(o).remove(),t.removeData(e,"checkator"),t(e).css({opacity:"",margin:""}),t(e).removeClass(a.settings.prefix+"source"),t(e).unwrap()},a.init()},t.fn.checkator=function(e){return e=void 0!==e?e:{},this.each(function(){if("object"==typeof e){if(void 0===t(this).data("checkator")){var i=new t.checkator(this,e);t(this).data("checkator",i)}}else t(this).data("checkator")[e]?t(this).data("checkator")[e].apply(this,Array.prototype.slice.call(arguments,1)):t.error("Method "+e+" does not exist in $.checkator")})}}(jQuery),$(function(){$(".checkator").checkator()});
