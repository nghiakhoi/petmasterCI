var mod_pagespeed_fNE_zJUk6h = "(function($,window){var $window=$(window);$.fn.lazyload=function(options){var elements=this;var $container;var settings={threshold:0,failure_limit:0,event:\"scroll\",effect:\"show\",container:window,data_attribute:\"original\",skip_invisible:true,appear:null,load:null};function update(){var counter=0;elements.each(function(){var $this=$(this);if(settings.skip_invisible&&!$this.is(\":visible\")){return;}\nif($.abovethetop(this,settings)||$.leftofbegin(this,settings)){}else if(!$.belowthefold(this,settings)&&!$.rightoffold(this,settings)){$this.trigger(\"appear\");}else{if(++counter>settings.failure_limit){return false;}}});}\nif(options){if(undefined!==options.failurelimit){options.failure_limit=options.failurelimit;delete options.failurelimit;}\nif(undefined!==options.effectspeed){options.effect_speed=options.effectspeed;delete options.effectspeed;}\n$.extend(settings,options);}\n$container=(settings.container===undefined||settings.container===window)?$window:$(settings.container);if(0===settings.event.indexOf(\"scroll\")){$container.bind(settings.event,function(event){return update();});}\nthis.each(function(){var self=this;var $self=$(self);self.loaded=false;$self.one(\"appear\",function(){if(!this.loaded){if(settings.npapear){var elements_left=elements.length;settings.appear.call(self,elements_left,settings);}\n$(\"<img />\").bind(\"load\",function(){$self.hide().attr(\"src\",$self.data(settings.data_attribute))[settings.effect](settings.effect_speed);self.loaded=true;var temp=$.grep(elements,function(element){return!element.loaded;});elements=$(temp);$self.css(\"visibility\",\"visible\");if(settings.load){var elements_left=elements.length;settings.load.call(self,elements_left,settings);}}).attr(\"src\",$self.data(settings.data_attribute));}});if(0!==settings.event.indexOf(\"scroll\")){$self.bind(settings.event,function(event){if(!self.loaded){$self.trigger(\"appear\");}});}});$window.bind(\"resize\",function(event){update();});update();return this;};$.belowthefold=function(element,settings){var fold;if(settings.container===undefined||settings.container===window){fold=$window.height()+$window.scrollTop();}else{fold=$(settings.container).offset().top+$(settings.container).height();}\nreturn fold<=$(element).offset().top-settings.threshold;};$.rightoffold=function(element,settings){var fold;if(settings.container===undefined||settings.container===window){fold=$window.width()+$window.scrollLeft();}else{fold=$(settings.container).offset().left+$(settings.container).width();}\nreturn fold<=$(element).offset().left-settings.threshold;};$.abovethetop=function(element,settings){var fold;if(settings.container===undefined||settings.container===window){fold=$window.scrollTop();}else{fold=$(settings.container).offset().top;}\nreturn fold>=$(element).offset().top+settings.threshold+$(element).height();};$.leftofbegin=function(element,settings){var fold;if(settings.container===undefined||settings.container===window){fold=$window.scrollLeft();}else{fold=$(settings.container).offset().left;}\nreturn fold>=$(element).offset().left+settings.threshold+$(element).width();};$.inviewport=function(element,settings){return!$.rightofscreen(element,settings)&&!$.leftofscreen(element,settings)&&!$.belowthefold(element,settings)&&!$.abovethetop(element,settings);};$.extend($.expr[':'],{\"below-the-fold\":function(a){return $.belowthefold(a,{threshold:0});},\"above-the-top\":function(a){return!$.belowthefold(a,{threshold:0});},\"right-of-screen\":function(a){return $.rightoffold(a,{threshold:0});},\"left-of-screen\":function(a){return!$.rightoffold(a,{threshold:0});},\"in-viewport\":function(a){return!$.inviewport(a,{threshold:0});},\"above-the-fold\":function(a){return!$.belowthefold(a,{threshold:0});},\"right-of-fold\":function(a){return $.rightoffold(a,{threshold:0});},\"left-of-fold\":function(a){return!$.rightoffold(a,{threshold:0});}});})(jQuery,window);";
var mod_pagespeed_OPttpezkRb = "(function($,window,i){$.fn.responsiveSlides=function(options){var settings=$.extend({\"auto\":true,\"speed\":500,\"timeout\":4000,\"pager\":false,\"nav\":false,\"random\":false,\"pause\":false,\"pauseControls\":true,\"prevText\":\"Previous\",\"nextText\":\"Next\",\"maxwidth\":\"\",\"navContainer\":\"\",\"manualControls\":\"\",\"namespace\":\"rslides\",\"before\":$.noop,\"after\":$.noop},options);return this.each(function(){i++;var $this=$(this),vendor,selectTab,startCycle,restartCycle,rotate,$tabs,index=0,$slide=$this.children(),length=$slide.size(),fadeTime=parseFloat(settings.speed),waitTime=parseFloat(settings.timeout),maxw=parseFloat(settings.maxwidth),namespace=settings.namespace,namespaceIdx=namespace+i,navClass=namespace+\"_nav \"+namespaceIdx+\"_nav\",activeClass=namespace+\"_here\",visibleClass=namespaceIdx+\"_on\",slideClassPrefix=namespaceIdx+\"_s\",$pager=$(\"<ul class='\"+namespace+\"_tabs \"+namespaceIdx+\"_tabs' />\"),visible={\"float\":\"left\",\"position\":\"relative\",\"opacity\":1,\"zIndex\":2},hidden={\"float\":\"none\",\"position\":\"absolute\",\"opacity\":0,\"zIndex\":1},supportsTransitions=(function(){var docBody=document.body||document.documentElement;var styles=docBody.style;var prop=\"transition\";if(typeof styles[prop]===\"string\"){return true;}\nvendor=[\"Moz\",\"Webkit\",\"Khtml\",\"O\",\"ms\"];prop=prop.charAt(0).toUpperCase()+prop.substr(1);var i;for(i=0;i<vendor.length;i++){if(typeof styles[vendor[i]+prop]===\"string\"){return true;}}\nreturn false;})(),slideTo=function(idx){settings.before(idx);if(supportsTransitions){$slide.removeClass(visibleClass).css(hidden).eq(idx).addClass(visibleClass).css(visible);index=idx;setTimeout(function(){settings.after(idx);},fadeTime);}else{$slide.stop().fadeOut(fadeTime,function(){$(this).removeClass(visibleClass).css(hidden).css(\"opacity\",1);}).eq(idx).fadeIn(fadeTime,function(){$(this).addClass(visibleClass).css(visible);settings.after(idx);index=idx;});}};if(settings.random){$slide.sort(function(){return(Math.round(Math.random())-0.5);});$this.empty().append($slide);}\n$slide.each(function(i){this.id=slideClassPrefix+i;});$this.addClass(namespace+\" \"+namespaceIdx);if(options&&options.maxwidth){$this.css(\"max-width\",maxw);}\n$slide.hide().css(hidden).eq(0).addClass(visibleClass).css(visible).show();if(supportsTransitions){$slide.show().css({\"-webkit-transition\":\"opacity \"+fadeTime+\"ms ease-in-out\",\"-moz-transition\":\"opacity \"+fadeTime+\"ms ease-in-out\",\"-o-transition\":\"opacity \"+fadeTime+\"ms ease-in-out\",\"transition\":\"opacity \"+fadeTime+\"ms ease-in-out\"});}\nif($slide.size()>1){if(waitTime<fadeTime+100){return;}\nif(settings.pager&&!settings.manualControls){var tabMarkup=[];$slide.each(function(i){var n=i+1;tabMarkup+=\"<li>\"+\"<a href='#' class='\"+slideClassPrefix+n+\"'>\"+n+\"</a>\"+\"</li>\";});$pager.append(tabMarkup);if(options.navContainer){$(settings.navContainer).append($pager);}else{$this.after($pager);}}\nif(settings.manualControls){$pager=$(settings.manualControls);$pager.addClass(namespace+\"_tabs \"+namespaceIdx+\"_tabs\");}\nif(settings.pager||settings.manualControls){$pager.find('li').each(function(i){$(this).addClass(slideClassPrefix+(i+1));});}\nif(settings.pager||settings.manualControls){$tabs=$pager.find('a');selectTab=function(idx){$tabs.closest(\"li\").removeClass(activeClass).eq(idx).addClass(activeClass);};}\nif(settings.auto){startCycle=function(){rotate=setInterval(function(){$slide.stop(true,true);var idx=index+1<length?index+1:0;if(settings.pager||settings.manualControls){selectTab(idx);}\nslideTo(idx);},waitTime);};startCycle();}\nrestartCycle=function(){if(settings.auto){clearInterval(rotate);startCycle();}};if(settings.pause){$this.hover(function(){clearInterval(rotate);},function(){restartCycle();});}\nif(settings.pager||settings.manualControls){$tabs.bind(\"click\",function(e){e.preventDefault();if(!settings.pauseControls){restartCycle();}\nvar idx=$tabs.index(this);if(index===idx||$(\".\"+visibleClass).queue('fx').length){return;}\nselectTab(idx);slideTo(idx);}).eq(0).closest(\"li\").addClass(activeClass);if(settings.pauseControls){$tabs.hover(function(){clearInterval(rotate);},function(){restartCycle();});}}\nif(settings.nav){var navMarkup=\"<a href='#' class='\"+navClass+\" prev'>\"+settings.prevText+\"</a>\"+\"<a href='#' class='\"+navClass+\" next'>\"+settings.nextText+\"</a>\";if(options.navContainer){$(settings.navContainer).append(navMarkup);}else{$this.after(navMarkup);}\nvar $trigger=$(\".\"+namespaceIdx+\"_nav\"),$prev=$trigger.filter(\".prev\");$trigger.bind(\"click\",function(e){e.preventDefault();var $visibleClass=$(\".\"+visibleClass);if($visibleClass.queue('fx').length){return;}\nvar idx=$slide.index($visibleClass),prevIdx=idx-1,nextIdx=idx+1<length?index+1:0;slideTo($(this)[0]===$prev[0]?prevIdx:nextIdx);if(settings.pager||settings.manualControls){selectTab($(this)[0]===$prev[0]?prevIdx:nextIdx);}\nif(!settings.pauseControls){restartCycle();}});if(settings.pauseControls){$trigger.hover(function(){clearInterval(rotate);},function(){restartCycle();});}}}\nif(typeof document.body.style.maxWidth===\"undefined\"&&options.maxwidth){var widthSupport=function(){$this.css(\"width\",\"100%\");if($this.width()>maxw){$this.css(\"width\",maxw);}};widthSupport();$(window).bind(\"resize\",function(){widthSupport();});}});};})(jQuery,this,0);";
var mod_pagespeed_mJozUbPTlU = ";(function($){var sidrMoving=false,sidrOpened=false;var privateMethods={isUrl:function(str){var pattern=new RegExp('^(https?:\\\\/\\\\/)?'+'((([a-z\\\\d]([a-z\\\\d-]*[a-z\\\\d])*)\\\\.)+[a-z]{2,}|'+'((\\\\d{1,3}\\\\.){3}\\\\d{1,3}))'+'(\\\\:\\\\d+)?(\\\\/[-a-z\\\\d%_.~+]*)*'+'(\\\\?[;&a-z\\\\d%_.~+=-]*)?'+'(\\\\#[-a-z\\\\d_]*)?$','i');if(!pattern.test(str)){return false;}else{return true;}},loadContent:function($menu,content){$menu.html(content);},addPrefix:function($element){var elementId=$element.attr('id'),elementClass=$element.attr('class');if(typeof elementId==='string'&&''!==elementId){$element.attr('id',elementId.replace(/([A-Za-z0-9_.\\-]+)/g,'sidr-id-$1'));}\nif(typeof elementClass==='string'&&''!==elementClass&&'sidr-inner'!==elementClass){$element.attr('class',elementClass.replace(/([A-Za-z0-9_.\\-]+)/g,'sidr-class-$1'));}\n$element.removeAttr('style');},execute:function(action,name,callback){if(typeof name==='function'){callback=name;name='sidr';}\nelse if(!name){name='sidr';}\nvar $menu=$('#'+name),$body=$($menu.data('body')),$html=$('html'),menuWidth=$menu.outerWidth(true),speed=$menu.data('speed'),side=$menu.data('side'),bodyAnimation,menuAnimation,scrollTop;if('open'===action||('toogle'===action&&!$menu.is(':visible'))){if($menu.is(':visible')||sidrMoving){return;}\nif(sidrOpened!==false){methods.close(sidrOpened,function(){methods.open(name);});return;}\nsidrMoving=true;if(side==='left'){bodyAnimation={left:menuWidth+'px'};menuAnimation={left:'0px'};}\nelse{bodyAnimation={right:menuWidth+'px'};menuAnimation={right:'0px'};}\nscrollTop=$html.scrollTop();$html.css('overflow-x','hidden').scrollTop(scrollTop);$body.css({width:$body.width(),position:'absolute'}).animate(bodyAnimation,speed);$menu.css('display','block').animate(menuAnimation,speed,function(){if(disable_fixed_height){$('#temp_page').css('position','');}\nsidrMoving=false;sidrOpened=name;if(typeof callback==='function'){callback(name);}});}\nelse{if(!$menu.is(':visible')||sidrMoving){return;}\nsidrMoving=true;if(side==='left'){bodyAnimation={left:0};menuAnimation={left:'-'+menuWidth+'px'};}\nelse{bodyAnimation={right:0};menuAnimation={right:'-'+menuWidth+'px'};}\nscrollTop=$html.scrollTop();$html.removeAttr('style').scrollTop(scrollTop);$body.animate(bodyAnimation,speed);$menu.animate(menuAnimation,speed,function(){if(disable_fixed_height){$('#temp_page').css('position','relative');}\n$menu.removeAttr('style');$body.removeAttr('style');$('html').removeAttr('style');sidrMoving=false;sidrOpened=false;if(typeof callback==='function'){callback(name);}});}}};var methods={open:function(name,callback){privateMethods.execute('open',name,callback);},close:function(name,callback){privateMethods.execute('close',name,callback);},toogle:function(name,callback){privateMethods.execute('toogle',name,callback);}};$.sidr=function(method){if(methods[method]){return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}else if(typeof method==='function'||typeof method==='string'||!method){return methods.toogle.apply(this,arguments);}else{$.error('Method '+method+' does not exist on jQuery.sidr');}};$.fn.sidr=function(options){var settings=$.extend({name:'sidr',speed:100,side:'left',source:null,renaming:true,body:'body'},options);var name=settings.name,$sideMenu=$('#'+name);if($sideMenu.length===0){$sideMenu=$('<div />').attr('id',name).appendTo($('body'));}\n$sideMenu.addClass('sidr').addClass(settings.side).data({speed:settings.speed,side:settings.side,body:settings.body});if(typeof settings.source==='function'){var newContent=settings.source(name);privateMethods.loadContent($sideMenu,newContent);}\nelse if(typeof settings.source==='string'&&privateMethods.isUrl(settings.source)){$.get(settings.source,function(data){privateMethods.loadContent($sideMenu,data);});}\nelse if(typeof settings.source==='string'){var htmlContent='',selectors=settings.source.split(',');$.each(selectors,function(index,element){htmlContent+='<div class=\"sidr-inner\">'+$(element).html()+'</div>';});if(settings.renaming){var $htmlContent=$('<div />').html(htmlContent);$htmlContent.find('*').each(function(index,element){var $element=$(element);privateMethods.addPrefix($element);});htmlContent=$htmlContent.html();}\nprivateMethods.loadContent($sideMenu,htmlContent);}\nelse if(settings.source!==null){$.error('Invalid Sidr Source');}\nreturn this.each(function(){var $this=$(this),data=$this.data('sidr');if(!data){$this.data('sidr',name);$this.click(function(e){e.preventDefault();methods.toogle(name);});}});};})(jQuery);";
var mod_pagespeed_mWItq2HUIU = "(function($){'use strict';$.fn.extend({customSelect:function(options){if(typeof document.body.style.maxHeight==='undefined'){return this;}\nvar defaults={customClass:'customSelect',mapClass:true,mapStyle:true},options=$.extend(defaults,options),prefix=options.customClass,changed=function($select,customSelectSpan){var currentSelected=$select.find(':selected'),customSelectSpanInner=customSelectSpan.children(':first'),html=currentSelected.html()||'&nbsp;';customSelectSpanInner.html(html);if(currentSelected.attr('disabled')){customSelectSpan.addClass(getClass('DisabledOption'));}else{customSelectSpan.removeClass(getClass('DisabledOption'));}\nsetTimeout(function(){customSelectSpan.removeClass(getClass('Open'));},60);},getClass=function(suffix){return prefix+suffix;};return this.each(function(){var $select=$(this),customSelectInnerSpan=$('<span />').addClass(getClass('Inner')),customSelectSpan=$('<span />');$select.after(customSelectSpan.append(customSelectInnerSpan));customSelectSpan.addClass(prefix);if(options.mapClass){customSelectSpan.addClass($select.attr('class'));}\nif(options.mapStyle){customSelectSpan.attr('style',$select.attr('style'));}\n$select.addClass('hasCustomSelect').bind('update',function(){changed($select,customSelectSpan);var selectBoxWidth=parseInt($select.outerWidth(),10)-(parseInt(customSelectSpan.outerWidth(),10)-parseInt(customSelectSpan.width(),10));customSelectSpan.css({display:'inline-block'});var selectBoxHeight=customSelectSpan.outerHeight();if($select.attr('disabled')){customSelectSpan.addClass(getClass('Disabled'));}else{customSelectSpan.removeClass(getClass('Disabled'));}\ncustomSelectInnerSpan.css({width:selectBoxWidth,display:'inline-block'});$select.css({'-webkit-appearance':'menulist-button',width:customSelectSpan.outerWidth(),position:'absolute',opacity:0,height:selectBoxHeight,fontSize:customSelectSpan.css('font-size')});}).bind('change',function(){customSelectSpan.addClass(getClass('Changed'));changed($select,customSelectSpan);}).bind('keyup',function(e){if(!customSelectSpan.hasClass(getClass('Open'))){$select.blur();$select.focus();}else{if(e.which==13||e.which==27){changed($select,customSelectSpan);}}}).bind('mousedown',function(e){customSelectSpan.removeClass(getClass('Changed'));}).bind('mouseup',function(e){if(!customSelectSpan.hasClass(getClass('Open'))){if($('.'+getClass('Open')).not(customSelectSpan).length>0&&typeof InstallTrigger!=='undefined'){$select.focus();}else{customSelectSpan.addClass(getClass('Open'));e.stopPropagation();$(document).one('mouseup.'+getClass('Open'),function(e){if(e.target!=$select.get(0)&&$.inArray(e.target,$select.find('*').get())<0){$select.blur();}else{changed($select,customSelectSpan);}});}}}).focus(function(){customSelectSpan.removeClass(getClass('Changed')).addClass(getClass('Focus'));}).blur(function(){customSelectSpan.removeClass(getClass('Focus')+' '+getClass('Open'));}).hover(function(){customSelectSpan.addClass(getClass('Hover'));},function(){customSelectSpan.removeClass(getClass('Hover'));}).trigger('update');});}});})(jQuery);";
var mod_pagespeed_MuvWdb4lTt = ";(function($){$.ui=$.ui||{};$.fn.extend({accordion:function(options,data){var args=Array.prototype.slice.call(arguments,1);return this.each(function(){if(typeof options==\"string\"){var accordion=$.data(this,\"ui-accordion\");accordion[options].apply(accordion,args);}else if(!$(this).is(\".ui-accordion\"))\n$.data(this,\"ui-accordion\",new $.ui.accordion(this,options));});},activate:function(index){return this.accordion(\"activate\",index);}});$.ui.accordion=function(container,options){this.options=options=$.extend({},$.ui.accordion.defaults,options);this.element=container;$(container).addClass(\"ui-accordion\");if(options.navigation){var current=$(container).find(\"a\").filter(options.navigationFilter);if(current.length){if(current.filter(options.header).length){options.active=current;}else{options.active=current.parent().parent().prev();current.addClass(\"current\");}}}\noptions.headers=$(container).find(options.header);options.active=findActive(options.headers,options.active);if(options.fillSpace){var maxHeight=$(container).parent().height();options.headers.each(function(){maxHeight-=$(this).outerHeight();});var maxPadding=0;options.headers.next().each(function(){maxPadding=Math.max(maxPadding,$(this).innerHeight()-$(this).height());}).height(maxHeight-maxPadding);}else if(options.autoheight){var maxHeight=0;options.headers.next().each(function(){maxHeight=Math.max(maxHeight,$(this).outerHeight());}).height(maxHeight);}\noptions.headers.not(options.active||\"\").next().hide();options.active.parent().andSelf().addClass(options.selectedClass);if(options.event)\n$(container).bind((options.event)+\".ui-accordion\",clickHandler);};$.ui.accordion.prototype={activate:function(index){clickHandler.call(this.element,{target:findActive(this.options.headers,index)[0]});},enable:function(){this.options.disabled=false;},disable:function(){this.options.disabled=true;},destroy:function(){this.options.headers.next().css(\"display\",\"\");if(this.options.fillSpace||this.options.autoheight){this.options.headers.next().css(\"height\",\"\");}\n$.removeData(this.element,\"ui-accordion\");$(this.element).removeClass(\"ui-accordion\").unbind(\".ui-accordion\");}}\nfunction scopeCallback(callback,scope){return function(){return callback.apply(scope,arguments);};}\nfunction completed(cancel){if(!$.data(this,\"ui-accordion\"))\nreturn;var instance=$.data(this,\"ui-accordion\");var options=instance.options;options.running=cancel?0:--options.running;if(options.running)\nreturn;if(options.clearStyle){options.toShow.add(options.toHide).css({height:\"\",overflow:\"\"});}\n$(this).triggerHandler(\"change.ui-accordion\",[options.data],options.change);}\nfunction toggle(toShow,toHide,data,clickedActive,down){var options=$.data(this,\"ui-accordion\").options;options.toShow=toShow;options.toHide=toHide;options.data=data;var complete=scopeCallback(completed,this);options.running=toHide.size()==0?toShow.size():toHide.size();if(options.animated){if(!options.alwaysOpen&&clickedActive){$.ui.accordion.animations[options.animated]({toShow:jQuery([]),toHide:toHide,complete:complete,down:down,autoheight:options.autoheight});}else{$.ui.accordion.animations[options.animated]({toShow:toShow,toHide:toHide,complete:complete,down:down,autoheight:options.autoheight});}}else{if(!options.alwaysOpen&&clickedActive){toShow.toggle();}else{toHide.hide();toShow.show();}\ncomplete(true);}}\nfunction clickHandler(event){var options=$.data(this,\"ui-accordion\").options;if(options.disabled)\nreturn false;if(!event.target&&!options.alwaysOpen){options.active.parent().andSelf().toggleClass(options.selectedClass);var toHide=options.active.next(),data={instance:this,options:options,newHeader:jQuery([]),oldHeader:options.active,newContent:jQuery([]),oldContent:toHide},toShow=options.active=$([]);toggle.call(this,toShow,toHide,data);return false;}\nvar clicked=$(event.target);if(clicked.parents(options.header).length)\nwhile(!clicked.is(options.header))\nclicked=clicked.parent();var clickedActive=clicked[0]==options.active[0];if(options.running||(options.alwaysOpen&&clickedActive))\nreturn false;if(!clicked.is(options.header))\nreturn;options.active.parent().andSelf().toggleClass(options.selectedClass);if(!clickedActive){clicked.parent().andSelf().addClass(options.selectedClass);}\nvar toShow=clicked.next(),toHide=options.active.next(),data={instance:this,options:options,newHeader:clicked,oldHeader:options.active,newContent:toShow,oldContent:toHide},down=options.headers.index(options.active[0])>options.headers.index(clicked[0]);options.active=clickedActive?$([]):clicked;toggle.call(this,toShow,toHide,data,clickedActive,down);return false;};function findActive(headers,selector){return selector!=undefined?typeof selector==\"number\"?headers.filter(\":eq(\"+selector+\")\"):headers.not(headers.not(selector)):selector===false?$([]):headers.filter(\":eq(0)\");}\n$.extend($.ui.accordion,{defaults:{selectedClass:\"selected\",alwaysOpen:true,animated:'slide',event:\"click\",header:\"a\",autoheight:true,running:0,navigationFilter:function(){return this.href.toLowerCase()==location.href.toLowerCase();}},animations:{slide:function(options,additions){options=$.extend({easing:\"swing\",duration:300},options,additions);if(!options.toHide.size()){options.toShow.animate({height:\"show\"},options);return;}\nvar hideHeight=options.toHide.height(),showHeight=options.toShow.height(),difference=showHeight/hideHeight;options.toShow.css({height:0,overflow:'hidden'}).show();options.toHide.filter(\":hidden\").each(options.complete).end().filter(\":visible\").animate({height:\"hide\"},{step:function(now){var current=(hideHeight-now)*difference;if($.browser.msie||$.browser.opera){current=Math.ceil(current);}\noptions.toShow.height(current);},duration:options.duration,easing:options.easing,complete:function(){if(!options.autoheight){options.toShow.css(\"height\",\"auto\");}\noptions.complete();}});},bounceslide:function(options){this.slide(options,{easing:options.down?\"bounceout\":\"swing\",duration:options.down?1000:200});},easeslide:function(options){this.slide(options,{easing:\"easeinout\",duration:700})}}});})(jQuery);";
var mod_pagespeed_THRkvM7KoR = "(function($){$.fn.touchwipe=function(settings){var config={min_move_x:20,min_move_y:20,wipeLeft:function(){},wipeRight:function(){},wipeUp:function(){},wipeDown:function(){},preventDefaultEvents:true};if(settings)$.extend(config,settings);this.each(function(){var startX;var startY;var isMoving=false;function cancelTouch(){this.removeEventListener('touchmove',onTouchMove);startX=null;isMoving=false}function onTouchMove(e){if(config.preventDefaultEvents){e.preventDefault()}if(isMoving){var x=e.touches[0].pageX;var y=e.touches[0].pageY;var dx=startX-x;var dy=startY-y;if(Math.abs(dx)>=config.min_move_x){cancelTouch();if(dx>0){config.wipeLeft()}else{config.wipeRight()}}else if(Math.abs(dy)>=config.min_move_y){cancelTouch();if(dy>0){config.wipeDown()}else{config.wipeUp()}}}}function onTouchStart(e){if(e.touches.length==1){startX=e.touches[0].pageX;startY=e.touches[0].pageY;isMoving=true;this.addEventListener('touchmove',onTouchMove,false)}}if('ontouchstart'in document.documentElement){this.addEventListener('touchstart',onTouchStart,false)}});return this}})(jQuery);";
var mod_pagespeed_WqlRjweiHR = "this.JSON||(this.JSON={}),function(){function f(e){return e<10?\"0\"+e:e}function quote(e){return escapable.lastIndex=0,escapable.test(e)?'\"'+e.replace(escapable,function(e){var t=meta[e];return typeof t==\"string\"?t:\"\\\\u\"+(\"0000\"+e.charCodeAt(0).toString(16)).slice(-4)})+'\"':'\"'+e+'\"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];a&&typeof a==\"object\"&&typeof a.toJSON==\"function\"&&(a=a.toJSON(e)),typeof rep==\"function\"&&(a=rep.call(t,e,a));switch(typeof a){case\"string\":return quote(a);case\"number\":return isFinite(a)?String(a):\"null\";case\"boolean\":case\"null\":return String(a);case\"object\":if(!a)return\"null\";gap+=indent,u=[];if(Object.prototype.toString.apply(a)===\"[object Array]\"){s=a.length;for(n=0;n<s;n+=1)u[n]=str(n,a)||\"null\";return i=u.length===0?\"[]\":gap?\"[\\n\"+gap+u.join(\",\\n\"+gap)+\"\\n\"+o+\"]\":\"[\"+u.join(\",\")+\"]\",gap=o,i}if(rep&&typeof rep==\"object\"){s=rep.length;for(n=0;n<s;n+=1)r=rep[n],typeof r==\"string\"&&(i=str(r,a),i&&u.push(quote(r)+(gap?\": \":\":\")+i))}else for(r in a)Object.hasOwnProperty.call(a,r)&&(i=str(r,a),i&&u.push(quote(r)+(gap?\": \":\":\")+i));return i=u.length===0?\"{}\":gap?\"{\\n\"+gap+u.join(\",\\n\"+gap)+\"\\n\"+o+\"}\":\"{\"+u.join(\",\")+\"}\",gap=o,i}}typeof Date.prototype.toJSON!=\"function\"&&(Date.prototype.toJSON=function(e){return isFinite(this.valueOf())?this.getUTCFullYear()+\"-\"+f(this.getUTCMonth()+1)+\"-\"+f(this.getUTCDate())+\"T\"+f(this.getUTCHours())+\":\"+f(this.getUTCMinutes())+\":\"+f(this.getUTCSeconds())+\"Z\":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(e){return this.valueOf()});var cx=/[\\u0000\\u00ad\\u0600-\\u0604\\u070f\\u17b4\\u17b5\\u200c-\\u200f\\u2028-\\u202f\\u2060-\\u206f\\ufeff\\ufff0-\\uffff]/g,escapable=/[\\\\\\\"\\x00-\\x1f\\x7f-\\x9f\\u00ad\\u0600-\\u0604\\u070f\\u17b4\\u17b5\\u200c-\\u200f\\u2028-\\u202f\\u2060-\\u206f\\ufeff\\ufff0-\\uffff]/g,gap,indent,meta={\"\\b\":\"\\\\b\",\"	\":\"\\\\t\",\"\\n\":\"\\\\n\",\"\\f\":\"\\\\f\",\"\\r\":\"\\\\r\",'\"':'\\\\\"',\"\\\\\":\"\\\\\\\\\"},rep;typeof JSON.stringify!=\"function\"&&(JSON.stringify=function(e,t,n){var r;gap=\"\",indent=\"\";if(typeof n==\"number\")for(r=0;r<n;r+=1)indent+=\" \";else typeof n==\"string\"&&(indent=n);rep=t;if(!t||typeof t==\"function\"||typeof t==\"object\"&&typeof t.length==\"number\")return str(\"\",{\"\":e});throw new Error(\"JSON.stringify\")}),typeof JSON.parse!=\"function\"&&(JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i==\"object\")for(n in i)Object.hasOwnProperty.call(i,n)&&(r=walk(i,n),r!==undefined?i[n]=r:delete i[n]);return reviver.call(e,t,i)}var j;text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(e){return\"\\\\u\"+(\"0000\"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\\],:{}\\s]*$/.test(text.replace(/\\\\(?:[\"\\\\\\/bfnrt]|u[0-9a-fA-F]{4})/g,\"@\").replace(/\"[^\"\\\\\\n\\r]*\"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?/g,\"]\").replace(/(?:^|:|,)(?:\\s*\\[)+/g,\"\")))return j=eval(\"(\"+text+\")\"),typeof reviver==\"function\"?walk({\"\":j},\"\"):j;throw new SyntaxError(\"JSON.parse\")})}(),\"use strict\",function(e,t){typeof define==\"function\"&&define.amd?define([],t):typeof exports==\"object\"?module.exports=t():e.store=t()}(this,function(){function o(){try{return r in t&&t[r]}catch(e){return!1}}var e={},t=window,n=t.document,r=\"localStorage\",i=\"script\",s;e.disabled=!1,e.version=\"1.3.17\",e.set=function(e,t){},e.get=function(e,t){},e.has=function(t){return e.get(t)!==undefined},e.remove=function(e){},e.clear=function(){},e.transact=function(t,n,r){r==null&&(r=n,n=null),n==null&&(n={});var i=e.get(t,n);r(i),e.set(t,i)},e.getAll=function(){},e.forEach=function(){},e.serialize=function(e){return JSON.stringify(e)},e.deserialize=function(e){if(typeof e!=\"string\")return undefined;try{return JSON.parse(e)}catch(t){return e||undefined}};if(o())s=t[r],e.set=function(t,n){return n===undefined?e.remove(t):(s.setItem(t,e.serialize(n)),n)},e.get=function(t,n){var r=e.deserialize(s.getItem(t));return r===undefined?n:r},e.remove=function(e){s.removeItem(e)},e.clear=function(){s.clear()},e.getAll=function(){var t={};return e.forEach(function(e,n){t[e]=n}),t},e.forEach=function(t){for(var n=0;n<s.length;n++){var r=s.key(n);t(r,e.get(r))}};else if(n.documentElement.addBehavior){var u,a;try{a=new ActiveXObject(\"htmlfile\"),a.open(),a.write(\"<\"+i+\">document.w=window</\"+i+'><iframe src=\"/favicon.ico\"></iframe>'),a.close(),u=a.w.frames[0].document,s=u.createElement(\"div\")}catch(f){s=n.createElement(\"div\"),u=n.body}var l=function(t){return function(){var n=Array.prototype.slice.call(arguments,0);n.unshift(s),u.appendChild(s),s.addBehavior(\"#default#userData\"),s.load(r);var i=t.apply(e,n);return u.removeChild(s),i}},c=new RegExp(\"[!\\\"#$%&'()*+,/\\\\\\\\:;<=>?@[\\\\]^`{|}~]\",\"g\"),h=function(e){return e.replace(/^d/,\"___$&\").replace(c,\"___\")};e.set=l(function(t,n,i){return n=h(n),i===undefined?e.remove(n):(t.setAttribute(n,e.serialize(i)),t.save(r),i)}),e.get=l(function(t,n,r){n=h(n);var i=e.deserialize(t.getAttribute(n));return i===undefined?r:i}),e.remove=l(function(e,t){t=h(t),e.removeAttribute(t),e.save(r)}),e.clear=l(function(e){var t=e.XMLDocument.documentElement.attributes;e.load(r);while(t.length)e.removeAttribute(t[0].name);e.save(r)}),e.getAll=function(t){var n={};return e.forEach(function(e,t){n[e]=t}),n},e.forEach=l(function(t,n){var r=t.XMLDocument.documentElement.attributes;for(var i=0,s;s=r[i];++i)n(s.name,e.deserialize(t.getAttribute(s.name)))})}try{var p=\"__storejs__\";e.set(p,p),e.get(p)!=p&&(e.disabled=!0),e.remove(p)}catch(f){e.disabled=!0}return e.enabled=!e.disabled,e})";
var mod_pagespeed_dF4wB4xRRy = "function getOsVersion(){var agent=window.navigator.userAgent,start=agent.indexOf('OS ');if(/iphone|ipod|ipad|iPhone|iPod|iPad/.test(agent)&&start>-1){return window.Number(agent.substr(start+3,3).replace('_','.'));}else{return 0;};};function getAndroidVersion(){var agent=window.navigator.userAgent,start=agent.indexOf('Android ');if(start>-1){return window.Number(agent.substr(start+8,3).replace('_','.'));}else{return 0;};};function changeOrientation(){$(window).trigger('resize');}\nwindow.onorientationchange=function(){setTimeout(changeOrientation,500);}\n$(document).ready(function(){window.scrollTo(0,1);if(!disable_fixed_height){if(getOsVersion()>=5||getOsVersion()==0){$(window).resize(function(){var header_height=42;var height_product_bar=$(\"#bar-product-buy\").height();if(height_product_bar>0){$('#page_content').css('overflow','hidden');$('.nav_footer').css('display','none');$('.box_adress').css('display','none');$('.footer').css('display','none');}\nvar view_port_height=window.innerHeight;$('body').css('height',view_port_height+'px');$('#page_content').css('height',(view_port_height-header_height)+'px');$('#main_content_product').css('height',(view_port_height-height_product_bar-header_height)+'px');if(navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPad/i)){var viewportmeta=document.querySelector('meta[name=\"viewport\"]');if(viewportmeta){viewportmeta.content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';document.body.addEventListener('gesturestart',function(){viewportmeta.content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';},true);}}});$(window).trigger('resize');}else if(getAndroidVersion()<3&&getAndroidVersion()>0){$(\"body\").css(\"overflow\",\"auto\");$(\"#temp_page\").css(\"position\",\"relative\");$(\"#temp_page\").css('z-index',99);}else{$(\"body\").css(\"overflow\",\"auto\");$(\"#temp_page\").css(\"position\",\"relative\");$(\"#sidr-left, #sidr-right\").css({'height':'10000px','position':'fixed','z-index':99});if($(\"#bar-product-buy\").length>0){var bar_product_buy=$(\"#bar-product-buy\").clone();bar_product_buy.css(\"margin-bottom\",0);$(\".product-details\").after(bar_product_buy);}}}else{$(\"#temp_page\").css(\"position\",\"relative\");$(\"#temp_page\").css(\"-webkit-overflow-scrolling\",\"touch\");}\n$('.home-select-city select, .box_choose_city select').customSelect();$('.icon-menu').sidr({name:'sidr-left',side:'left'});$('.icon-account').sidr({name:'sidr-right',side:'right'});$(\"#header-city-form select\").change(function(){$(\"#header-city-form\").submit();});$(\"form[name='subscribe_form_first'] select\").change(function(){$(\"form[name='subscribe_form_first']\").submit();});if($('.product_timeout .key').length){$('.product_timeout .key').each(function(){$(this).countdown({until:$(this).attr('rel')-server_time,format:'HMS',layout:'{hn}:{mn}:{sn}',expiryText:'hết hạn'});});}\nif($(\".box_times .remain_times\").length){$(\".box_times .remain_times\").countdown({until:$(\".box_times .remain_times\").attr('rel'),format:'HMS',layout:'<span>{hn}</span>:<span>{mn}</span>:<span>{sn}</span> ',expiryText:'Hết Hạn'});}\n$(\"#choose\").click(function(){$(\".choose_city\").slideToggle();})\n$(\"#choose-service\").click(function(){var status=($(\".listmenu\").is(':hidden'));if(status){$(\".back-opacity\").slideDown('fast');}else{$(\".back-opacity\").slideUp('fast');}\n$(\".listmenu\").slideToggle();$(\".listmenu1\").hide();$(\".listmenu2\").hide();})\n$(\"#choose-product\").click(function(){var status=($(\".listmenu1\").is(':hidden'));if(status){$(\".back-opacity\").slideDown('fast');}else{$(\".back-opacity\").slideUp('fast');}\n$(\".listmenu1\").slideToggle();$(\".listmenu\").hide();$(\".listmenu2\").hide();})\n$(\"#choose-fashion\").click(function(){var status=($(\".listmenu2\").is(':hidden'));if(status){$(\".back-opacity\").slideDown('fast');}else{$(\".back-opacity\").slideUp('fast');}\n$(\".listmenu2\").slideToggle();$(\".listmenu1\").hide();$(\".listmenu\").hide();})\nif($(\".product_image img.lazy\").length){$(\".product_image img.lazy\").lazyload({effect:\"fadeIn\",effectspeed:180});}\n$(\".lazy\").lazyload({effect:\"fadeIn\",effectspeed:180,threshold:900,container:\"#page_content\"}).removeClass(\"lazy\");$(document).ajaxStop(function(){$(\".lazy\").lazyload({effect:\"fadeIn\",effectspeed:180,threshold:900,container:\"#page_content\"}).removeClass(\"lazy\");});$(\".tab_desc li a\").each(function(){$(this).click(function(){$(\".tab_desc li a\").removeClass(\"current\");$(this).addClass(\"current\");$(\".tab\").hide();$(\"#\"+$(this).attr('id')+\"c\").show();})})\nvar backDetail=\"\";$(\"#see_more\").click(function(){$(\".box1\").hide();$(\".deal-content\").fadeIn(\"slow\");backDetail=$(\".bt_back\").attr(\"href\");$(\".bt_back\").attr(\"href\",\"javascript:;\")\n$(\".bt_back\").click(function(){$(\".box1\").fadeIn(\"slow\");$(\".deal-content\").hide();$(\".bt_back\").unbind('click');$(\".bt_back\").attr(\"href\",backDetail);return false;})});$(\".sku_buy\").click(function(){$(\".anpha_sku\").slideDown();});$(\".sku_close\").click(function(){$(\".anpha_sku\").slideUp();});if($(\"#subscribe_form_footer\").length){$(\"#btn_register_email\").click(function(){var email=$(\"#subscr_email_footer\").val();if(email==''||!fn_is_valid_email(email)){$(\"#register_error\").html(\"Vui lòng nhập địa chỉ email hợp lệ.\");}\nelse{$(\"form[name='subscribe_form_footer']\").submit();}\nreturn false;});}\n$(\".rslides\").responsiveSlides({auto:false,nav:true});$('#accordion').accordion({header:'h3',active:4,alwaysOpen:false,autoheight:false,animated:false});initGoTop();$(\".login-social\").click(function(){login_social_new_window($(this).attr('href'));return false;});$(\"#page_content\").touchwipe({wipeLeft:function(){if($(\"#sidr-left\").css(\"display\")==\"block\"){$('.icon-menu').trigger('click');}},wipeRight:function(){if($(\"#sidr-right\").css(\"display\")==\"block\"){$('.icon-account').trigger('click');}},min_move_x:20,min_move_y:20,preventDefaultEvents:false});});function closeOpenID(){if($('.rpxnow_lightbox').is(\":visible\")){$('.rpxnow_lightbox').click(function(){$('.rpxnow_lightbox').hide();})}else{$('.rpxnow_lightbox').show();}}\nfunction checkNumInt(e)\n{if(window.event)\nkeycode=window.event.keyCode;else if(e)\nkeycode=e.which;if(keycode>31&&(keycode<48||keycode>57))\n{e.cancelBubble=true\ne.preventDefault?e.preventDefault():e.returnValue=false;}}\nfunction fn_is_valid_email(email){var filter=/^([\\w-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([\\w-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)$/;return filter.test(email);}\nfunction initGoTop(){var scroll_timer;$('#page_content').scroll(function(){window.clearTimeout(scroll_timer);scroll_timer=window.setTimeout(function(){if($('#page_content').scrollTop()<=10){$(\".bt_to_top\").fadeOut(500);}else{$(\".bt_to_top\").fadeIn(500);}},100);});$(\".bt_to_top\").click(function(){$('#page_content').animate({scrollTop:0},'normal');$('html, body').animate({scrollTop:0},'normal');})}\nfunction login_social_new_window(social)\n{var height=500;var width=800;social_new_window=window.open('/?dispatch=auth.socialconnect&social='+social,'hotdeal.vn-connect-social','location=yes,status=yes,resizable=true,width='+width+',height='+height);social_new_window.window.focus();popupMonitor=window.setTimeout(checkPopup,500);}\nfunction checkPopup(){if(false==social_new_window.closed)\n{social_new_window.window.focus();popupMonitor=window.setTimeout(checkPopup,500);}\nelse\n{window.clearInterval();}}\nfunction check_popup_close(){this.window.location.reload();}\n$(document).ready(function(){if(store.enabled){var url=window.location.href;var data_html=storeEX.get('data_html');if(data_html!==null){if(data_html.url==url){if($('#list_deal').length>0){$('#list_deal').html(data_html.data).fadeIn(function(){if(storeEX.get('top')!=null){$(\"html, body\").animate({scrollTop:storeEX.get('top')+\"px\"},0);storeEX.set('data_html',null);}});}}}\n$('.product-item').live('click',function(){var top=$(window).scrollTop();storeEX.set('top',top);var url=window.location.href;storeEX.set('data_html',{url:url,data:$('#list_deal').html()},180000);});}});var storeEX={set:function(key,val,exp){if(store.enabled){store.set(key,{val:val,exp:exp,time:new Date().getTime()});}},get:function(key){if(store.enabled){var info=store.get(key);if(!info){return null;}\nif(new Date().getTime()-info.time>info.exp){return null;}\nreturn info.val;}else{return null;}}};";