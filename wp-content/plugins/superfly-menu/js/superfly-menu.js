var SF_DEBUG = true;

;(function (window) {
    var transitions = {
            'transition': 'transitionend',
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'otransitionend'
        },
        elem = document.createElement('div');

    for (var t in transitions) {
        if (typeof elem.style[t] !== 'undefined') {
            window.transitionEnd = transitions[t];
            break;
        }
    }
    if (!window.transitionEnd) window.transitionEnd = false;
})(window);

/*! jquery.finger - v0.1.4 - 2015-12-02
 * https://github.com/ngryman/jquery.finger
 * Copyright (c) 2015 Nicolas Gryman; Licensed MIT */
!function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery)
}(function (a) {
    function b(c) {
        c.preventDefault(), a.event.remove(v, "click", b)
    }

    function c(a, b) {
        return (q ? b.originalEvent.touches[0] : b)["page" + a.toUpperCase()]
    }

    function d(c, d, e) {
        var h = a.Event(d, x);
        a.event.trigger(h, {originalEvent: c}, c.target), h.isDefaultPrevented() && (~d.indexOf("tap") && !q ? a.event.add(v, "click", b) : c.preventDefault()), e && (a.event.remove(v, t + "." + u, f), a.event.remove(v, s + "." + u, g))
    }

    function e(e) {
        var l = e.timeStamp || +new Date;
        j != l && (j = l, w.x = x.x = c("x", e), w.y = x.y = c("y", e), w.time = l, w.target = e.target, x.orientation = null, x.end = !1, h = !1, i = !1, k = setTimeout(function () {
            i = !0, d(e, "press")
        }, y.pressDuration), a.event.add(v, t + "." + u, f), a.event.add(v, s + "." + u, g), y.preventDefault && (e.preventDefault(), a.event.add(v, "click", b)))
    }

    function f(b) {
        if (x.x = c("x", b), x.y = c("y", b), x.dx = x.x - w.x, x.dy = x.y - w.y, x.adx = Math.abs(x.dx), x.ady = Math.abs(x.dy), h = x.adx > y.motionThreshold || x.ady > y.motionThreshold) {
            for (clearTimeout(k), x.orientation || (x.adx > x.ady ? (x.orientation = "horizontal", x.direction = x.dx > 0 ? 1 : -1) : (x.orientation = "vertical", x.direction = x.dy > 0 ? 1 : -1)); b.target && b.target !== w.target;)b.target = b.target.parentNode;
            return b.target !== w.target ? (b.target = w.target, void g.call(this, a.Event(s + "." + u, b))) : void d(b, "drag")
        }
    }

    function g(a) {
        var b, c = a.timeStamp || +new Date, e = c - w.time;
        if (clearTimeout(k), h || i || a.target !== w.target)a.target = w.target, e < y.flickDuration && d(a, "flick"), x.end = !0, b = "drag"; else {
            var f = l === a.target && c - m < y.doubleTapInterval;
            b = f ? "doubletap" : "tap", l = f ? null : w.target, m = c
        }
        d(a, b, !0)
    }

    var h, i, j, k, l, m, n = navigator.userAgent, o = /chrome/i.exec(n), p = /android/i.exec(n), q = "ontouchstart" in window && !(o && !p), r = q ? "touchstart" : "mousedown", s = q ? "touchend touchcancel" : "mouseup mouseleave", t = q ? "touchmove" : "mousemove", u = "finger", v = a("html")[0], w = {}, x = {}, y = a.Finger = {
        pressDuration: 300,
        doubleTapInterval: 300,
        flickDuration: 150,
        motionThreshold: 5
    };
    return a.event.add(v, r + "." + u, e), a.each("tap doubletap press drag flick".split(" "), function (b, c) {
        a.fn[c] = function (a) {
            return a ? this.on(c, a) : this.trigger(c)
        }
    }), y
});

/*jquery.mb.YTPlayer 29-01-2019
 _ jquery.mb.components
 _ email: matbicoc@gmail.com
 _ Copyright (c) 2001-2019. Matteo Bicocchi (Pupunzi);
 _ blog: http://pupunzi.open-lab.com
 _ Open Lab s.r.l., Florence - Italy
 */

var ytp=ytp||{};function onYouTubeIframeAPIReady(){ytp.YTAPIReady||(ytp.YTAPIReady=!0,jQuery(document).trigger("YTAPIReady"))}var getYTPVideoID=function(e){var r,t;return 0<e.indexOf("youtu.be")||0<e.indexOf("youtube.com/embed")?r=(t=0<(r=e.substr(e.lastIndexOf("/")+1,e.length)).indexOf("?list=")?r.substr(r.lastIndexOf("="),r.length):null)?r.substr(0,r.lastIndexOf("?")):r:t=-1<e.indexOf("http")?(r=e.match(/[\\?&]v=([^&#]*)/)[1],0<e.indexOf("list=")?e.match(/[\\?&]list=([^&#]*)/)[1]:null):(r=15<e.length?null:e)?null:e,{videoID:r,playlistID:t}};function iOSversion(){if(/iP(hone|od|ad)/.test(navigator.platform)){var e=navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/);return[parseInt(e[1],10),parseInt(e[2],10),parseInt(e[3]||0,10)]}}!function(jQuery,ytp){jQuery.mbYTPlayer={name:"jquery.mb.YTPlayer",version:"3.2.9",build:"7414",author:"Matteo Bicocchi (pupunzi)",apiKey:"",defaults:{videoURL:null,containment:"body",ratio:"auto",fadeOnStartTime:1500,startAt:0,stopAt:0,autoPlay:!0,coverImage:!1,loop:!0,addRaster:!1,mask:!1,opacity:1,quality:"default",vol:50,mute:!1,showControls:!0,anchor:"center,center",showAnnotations:!1,cc_load_policy:!1,showYTLogo:!0,useOnMobile:!0,mobileFallbackImage:null,playOnlyIfVisible:!1,onScreenPercentage:30,stopMovieOnBlur:!0,realfullscreen:!0,optimizeDisplay:!0,abundance:.3,gaTrack:!0,remember_last_time:!1,addFilters:!1,onReady:function(e){},onError:function(e,r){}},controls:{play:"P",pause:"p",mute:"M",unmute:"A",onlyYT:"O",showSite:"R",ytLogo:"Y"},controlBar:null,locationProtocol:"https:",defaultFilters:{grayscale:{value:0,unit:"%"},hue_rotate:{value:0,unit:"deg"},invert:{value:0,unit:"%"},opacity:{value:0,unit:"%"},saturate:{value:0,unit:"%"},sepia:{value:0,unit:"%"},brightness:{value:0,unit:"%"},contrast:{value:0,unit:"%"},blur:{value:0,unit:"px"}},buildPlayer:function(options){if(ytp.YTAPIReady||void 0!==window.YT)setTimeout(function(){jQuery(document).trigger("YTAPIReady"),ytp.YTAPIReady=!0},100);else{jQuery("#YTAPI").remove();var tag=jQuery("<script><\/script>").attr({src:jQuery.mbYTPlayer.locationProtocol+"//www.youtube.com/iframe_api?v="+jQuery.mbYTPlayer.version,id:"YTAPI"});jQuery("head").prepend(tag)}function isIframe(){var r=!1;try{self.location.href!=top.location.href&&(r=!0)}catch(e){r=!0}return r}return this.each(function(){var YTPlayer=this,$YTPlayer=jQuery(YTPlayer);$YTPlayer.hide(),YTPlayer.loop=0,YTPlayer.state=0,YTPlayer.filters=jQuery.extend(!0,{},jQuery.mbYTPlayer.defaultFilters),YTPlayer.filtersEnabled=!0,YTPlayer.id=YTPlayer.id||"YTP_"+(new Date).getTime(),$YTPlayer.addClass("mb_YTPlayer");var property=$YTPlayer.data("property")&&"string"==typeof $YTPlayer.data("property")?eval("("+$YTPlayer.data("property")+")"):$YTPlayer.data("property");"object"!=typeof property&&(property={}),YTPlayer.opt=jQuery.extend(!0,{},jQuery.mbYTPlayer.defaults,YTPlayer.opt,options,property),YTPlayer.opt.elementId=YTPlayer.id,0===YTPlayer.opt.vol&&(YTPlayer.opt.vol=1,YTPlayer.opt.mute=!0),YTPlayer.opt.autoPlay&&0==YTPlayer.opt.mute&&jQuery.mbBrowser.chrome&&(jQuery(document).one("mousedown.YTPstart",function(){$YTPlayer.YTPPlay()}),console.info("YTPlayer info: On Webkit browsers you can not autoplay the video if the audio is on.")),YTPlayer.opt.loop&&"boolean"==typeof YTPlayer.opt.loop&&(YTPlayer.opt.loop=9999);var fullScreenAvailable=document.fullscreenEnabled||document.webkitFullscreenEnabled||document.mozFullScreenEnabled||document.msFullscreenEnabled;YTPlayer.opt.realfullscreen=!(isIframe()||!fullScreenAvailable)&&YTPlayer.opt.realfullscreen,YTPlayer.opt.showAnnotations=YTPlayer.opt.showAnnotations?"1":"3",YTPlayer.opt.cc_load_policy=YTPlayer.opt.cc_load_policy?"1":"0",YTPlayer.opt.coverImage=YTPlayer.opt.coverImage||YTPlayer.opt.backgroundImage,jQuery.mbBrowser.msie&&jQuery.mbBrowser.version<9&&(YTPlayer.opt.opacity=1),YTPlayer.opt.containment="self"===YTPlayer.opt.containment?$YTPlayer:jQuery(YTPlayer.opt.containment),YTPlayer.isRetina=window.retina||1<window.devicePixelRatio,YTPlayer.opt.ratio="auto"===YTPlayer.opt.ratio?16/9:YTPlayer.opt.ratio,YTPlayer.opt.ratio=eval(YTPlayer.opt.ratio),YTPlayer.orig_containment_background=YTPlayer.opt.containment.css("background-image"),$YTPlayer.attr("id")||$YTPlayer.attr("id","ytp_"+(new Date).getTime()),YTPlayer.playerID="iframe_"+YTPlayer.id,YTPlayer.isAlone=!1,YTPlayer.hasFocus=!0,YTPlayer.videoID=YTPlayer.opt.videoURL?getYTPVideoID(YTPlayer.opt.videoURL).videoID:!!$YTPlayer.attr("href")&&getYTPVideoID($YTPlayer.attr("href")).videoID,YTPlayer.playlistID=YTPlayer.opt.videoURL?getYTPVideoID(YTPlayer.opt.videoURL).playlistID:!!$YTPlayer.attr("href")&&getYTPVideoID($YTPlayer.attr("href")).playlistID;var start_from_last=0;if(jQuery.mbCookie.get("YTPlayer_start_from"+YTPlayer.videoID)&&(start_from_last=parseFloat(jQuery.mbCookie.get("YTPlayer_start_from"+YTPlayer.videoID))),YTPlayer.opt.remember_last_time&&start_from_last&&(YTPlayer.start_from_last=start_from_last,jQuery.mbCookie.remove("YTPlayer_start_from"+YTPlayer.videoID)),YTPlayer.isPlayer=$YTPlayer.is(YTPlayer.opt.containment),YTPlayer.isBackground=YTPlayer.opt.containment.is("body"),!YTPlayer.isBackground||!ytp.backgroundIsInited){if(YTPlayer.isPlayer&&$YTPlayer.show(),YTPlayer.overlay=jQuery("<div/>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%"}).addClass("YTPOverlay"),YTPlayer.opt.coverImage||"none"!=YTPlayer.orig_containment_background){var bgndURL=YTPlayer.opt.coverImage?"url("+YTPlayer.opt.coverImage+") center center":YTPlayer.orig_containment_background;YTPlayer.opt.containment.css({background:bgndURL,backgroundColor:"#000",backgroundSize:"cover",backgroundRepeat:"no-repeat"})}YTPlayer.wrapper=jQuery("<div/>").attr("id","wrapper_"+YTPlayer.id).css({position:"absolute",zIndex:0,minWidth:"100%",minHeight:"100%",left:0,top:0,overflow:"hidden",opacity:0}).addClass("mbYTP_wrapper"),YTPlayer.isPlayer&&(YTPlayer.inlinePlayButton=jQuery("<div/>").addClass("inlinePlayButton").html(jQuery.mbYTPlayer.controls.play),$YTPlayer.append(YTPlayer.inlinePlayButton),YTPlayer.inlinePlayButton.on("click",function(e){$YTPlayer.YTPPlay(),e.stopPropagation()}),YTPlayer.opt.autoPlay&&YTPlayer.inlinePlayButton.hide(),YTPlayer.overlay.on("click",function(){$YTPlayer.YTPTogglePlay()}).css({cursor:"pointer"}));var playerBox=jQuery("<div/>").attr("id",YTPlayer.playerID).addClass("playerBox");if(playerBox.css({position:"absolute",zIndex:0,width:"100%",height:"100%",top:0,left:0,overflow:"hidden",opacity:1}),YTPlayer.wrapper.append(playerBox),playerBox.after(YTPlayer.overlay),YTPlayer.isPlayer&&(YTPlayer.inlineWrapper=jQuery("<div/>").addClass("inline-YTPlayer"),YTPlayer.inlineWrapper.css({position:"relative",maxWidth:YTPlayer.opt.containment.css("width")}),YTPlayer.opt.containment.css({position:"relative",paddingBottom:"56.25%",overflow:"hidden",height:0}),YTPlayer.opt.containment.wrap(YTPlayer.inlineWrapper)),YTPlayer.opt.containment.children().not("script, style").each(function(){"static"==jQuery(this).css("position")&&jQuery(this).css("position","relative")}),YTPlayer.isBackground?(jQuery("body").css({boxSizing:"border-box"}),YTPlayer.wrapper.css({position:"fixed",top:0,left:0,zIndex:0})):"static"==YTPlayer.opt.containment.css("position")&&(YTPlayer.opt.containment.css({position:"relative"}),$YTPlayer.show()),YTPlayer.opt.containment.prepend(YTPlayer.wrapper),YTPlayer.isBackground||YTPlayer.overlay.on("mouseenter",function(){YTPlayer.controlBar&&YTPlayer.controlBar.length&&YTPlayer.controlBar.addClass("visible")}).on("mouseleave",function(){YTPlayer.controlBar&&YTPlayer.controlBar.length&&YTPlayer.controlBar.removeClass("visible")}),jQuery.mbBrowser.mobile&&!YTPlayer.opt.useOnMobile)return YTPlayer.opt.mobileFallbackImage&&(YTPlayer.wrapper.css({backgroundImage:"url("+YTPlayer.opt.mobileFallbackImage+")",backgroundPosition:"center center",backgroundSize:"cover",backgroundRepeat:"no-repeat",opacity:1}),YTPlayer.wrapper.css({opacity:1})),$YTPlayer;jQuery.mbBrowser.mobile&&YTPlayer.opt.autoPlay&&YTPlayer.opt.useOnMobile&&jQuery("body").one("touchstart",function(){YTPlayer.player.playVideo()}),jQuery(document).one("YTAPIReady",function(){$YTPlayer.trigger("YTAPIReady_"+YTPlayer.id),ytp.YTAPIReady=!0}),YTPlayer.isOnScreen=jQuery.mbYTPlayer.isOnScreen(YTPlayer,YTPlayer.opt.onScreenPercentage),$YTPlayer.one("YTAPIReady_"+YTPlayer.id,function(){var o=this,t=jQuery(o);o.isBackground&&ytp.backgroundIsInited||o.isInit||(o.isBackground&&(ytp.backgroundIsInited=!0),o.opt.autoPlay=void 0===o.opt.autoPlay?!!o.isBackground:o.opt.autoPlay,o.opt.vol=o.opt.vol?o.opt.vol:100,jQuery.mbYTPlayer.getDataFromAPI(o),jQuery(o).on("YTPChanged",function(e){if(!o.isInit){o.isInit=!0;var r={host:'https://www.youtube-nocookie.com',modestbranding:1,autoplay:0,controls:0,showinfo:0,rel:0,enablejsapi:1,version:3,playerapiid:o.playerID,origin:"*",allowfullscreen:!0,wmode:"transparent",iv_load_policy:o.opt.showAnnotations,cc_load_policy:o.opt.cc_load_policy,playsinline:jQuery.mbBrowser.mobile?1:0,html5:document.createElement("video").canPlayType?1:0};new YT.Player(o.playerID,{playerVars:r,host:'https://www.youtube-nocookie.com',events:{onReady:function(e){o.player=e.target,o.player.loadVideoById({videoId:o.videoID.toString(),suggestedQuality:o.opt.quality}),t.trigger("YTPlayerIsReady_"+o.id)},onStateChange:function(e){if("function"==typeof e.target.getPlayerState){var r=e.target.getPlayerState();if(o.preventTrigger||o.isStarting)o.preventTrigger=!1;else{var t;switch(o.state=r,e.data==YT.PlayerState.PLAYING&&e.target.setPlaybackQuality(o.opt.quality),r){case-1:t="YTPUnstarted";break;case 0:t="YTPRealEnd";break;case 1:t="YTPPlay",o.controlBar.length&&o.controlBar.find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.pause),o.isPlayer&&o.inlinePlayButton.hide(),jQuery(document).off("mousedown.YTPstart");break;case 2:t="YTPPause",o.controlBar.length&&o.controlBar.find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.play),o.isPlayer&&o.inlinePlayButton.show();break;case 3:o.player.setPlaybackQuality(o.opt.quality),t="YTPBuffering",o.controlBar.length&&o.controlBar.find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.play);break;case 5:t="YTPCued"}var a=jQuery.Event(t);a.time=o.currentTime,jQuery(o).trigger(a)}}},onPlaybackQualityChange:function(e){var r=e.target.getPlaybackQuality(),t=jQuery.Event("YTPQualityChange");t.quality=r,jQuery(o).trigger(t)},onError:function(e){switch("function"==typeof o.opt.onError&&o.opt.onError(t,e),e.data){case 2:console.error("video ID:: "+o.videoID+": The request contains an invalid parameter value. For example, this error occurs if you specify a video ID that does not have 11 characters, or if the video ID contains invalid characters, such as exclamation points or asterisks.");break;case 5:console.error("video ID:: "+o.videoID+": The requested content cannot be played in an HTML5 player or another error related to the HTML5 player has occurred.");break;case 100:console.error("video ID:: "+o.videoID+": The video requested was not found. This error occurs when a video has been removed (for any reason) or has been marked as private.");break;case 101:case 150:console.error("video ID:: "+o.videoID+": The owner of the requested video does not allow it to be played in embedded players.")}o.isList&&jQuery(o).YTPPlayNext()}}}),t.on("YTPlayerIsReady_"+o.id,function(){if(o.isReady)return this;o.playerEl=o.player.getIframe(),jQuery(o.playerEl).unselectable(),t.optimizeDisplay(),jQuery(window).off("resize.YTP_"+o.id).on("resize.YTP_"+o.id,function(){t.optimizeDisplay()}),o.opt.remember_last_time&&jQuery(window).on("unload.YTP_"+o.id,function(){var e=o.player.getCurrentTime();jQuery.mbCookie.set("YTPlayer_start_from"+o.videoID,e,0)}),t.YTPCheckForState()})}}))}),$YTPlayer.off("YTPTime.mask"),jQuery.mbYTPlayer.applyMask(YTPlayer)}})},isOnScreen:function(e,r){r=r||10;var t=e.wrapper,a=jQuery(window).scrollTop(),o=a+jQuery(window).height(),n=t.height()*r/100,i=t.offset().top+n;return t.offset().top+(t.height()-n)<=o&&a<=i},getDataFromAPI:function(n){n.videoData=jQuery.mbStorage.get("YTPlayer_data_"+n.videoID),n.videoData?(setTimeout(function(){n.dataReceived=!0;var e=jQuery.Event("YTPChanged");e.time=n.currentTime,e.videoId=n.videoID,e.opt=n.opt,jQuery(n).trigger(e);var r=jQuery.Event("YTPData");for(var t in r.prop={},n.videoData)r.prop[t]=n.videoData[t];jQuery(n).trigger(r)},n.opt.fadeOnStartTime),n.hasData=!0):jQuery.mbYTPlayer.apiKey?jQuery.getJSON(jQuery.mbYTPlayer.locationProtocol+"//www.googleapis.com/youtube/v3/videos?id="+n.videoID+"&key="+jQuery.mbYTPlayer.apiKey+"&part=snippet",function(e){n.dataReceived=!0;var r,t=jQuery.Event("YTPChanged");t.time=n.currentTime,t.videoId=n.videoID,jQuery(n).trigger(t),e.items[0]?(r=e.items[0].snippet,n.videoData={},n.videoData.id=n.videoID,n.videoData.channelTitle=r.channelTitle,n.videoData.title=r.title,n.videoData.description=r.description.length<400?r.description:r.description.substring(0,400)+" ...",n.videoData.thumb_max=r.thumbnails.maxres?r.thumbnails.maxres.url:null,n.videoData.thumb_high=r.thumbnails.high?r.thumbnails.high.url:null,n.videoData.thumb_medium=r.thumbnails.medium?r.thumbnails.medium.url:null,jQuery.mbStorage.set("YTPlayer_data_"+n.videoID,n.videoData),n.hasData=!0):(n.videoData={},n.hasData=!1);var a=jQuery.Event("YTPData");for(var o in a.prop={},n.videoData)a.prop[o]=n.videoData[o];jQuery(n).trigger(a)}):(setTimeout(function(){var e=jQuery.Event("YTPChanged");e.time=n.currentTime,e.videoId=n.videoID,jQuery(n).trigger(e)},10),n.videoData=null),n.opt.ratio="auto"==n.opt.ratio?16/9:n.opt.ratio,n.isPlayer&&!n.opt.autoPlay&&(n.loading=jQuery("<div/>").addClass("loading").html("Loading").hide(),jQuery(n).append(n.loading),n.loading.fadeIn())},removeStoredData:function(){jQuery.mbStorage.remove()},getVideoData:function(){return this.get(0).videoData},getVideoID:function(){return this.get(0).videoID||!1},getPlaylistID:function(){return this.get(0).playlistID||!1},setVideoQuality:function(e){var r=this.get(0);return jQuery(r).YTPPause(),r.opt.quality=e,r.player.setPlaybackQuality(e),jQuery(r).YTPPlay(),this},getVideoQuality:function(){return this.get(0).player.getPlaybackQuality()},playlist:function(e,r,t){var a=this.get(0);return a.isList=!0,r&&(e=jQuery.shuffle(e)),a.videoID||(a.videos=e,a.videoCounter=1,a.videoLength=e.length,jQuery(a).data("property",e[0]),jQuery(a).YTPlayer()),"function"==typeof t&&jQuery(a).one("YTPChanged",function(){t(a)}),jQuery(a).on("YTPEnd",function(){jQuery(a).YTPPlayNext()}),this},playNext:function(){var e=this.get(0);return e.videoCounter++,e.videoCounter>e.videoLength&&(e.videoCounter=1),jQuery(e).YTPPlayIndex(e.videoCounter),this},playPrev:function(){var e=this.get(0);return e.videoCounter--,e.videoCounter<=0&&(e.videoCounter=e.videoLength),jQuery(e).YTPPlayIndex(e.videoCounter),this},playIndex:function(e){var r=this.get(0);r.checkForStartAt&&(clearInterval(r.checkForStartAt),clearInterval(r.getState)),r.videoCounter=e,r.videoCounter>=r.videoLength&&(r.videoCounter=r.videoLength);var t=r.videos[r.videoCounter-1];return jQuery(r).YTPChangeVideo(t),this},changeVideo:function(e){var r=this,t=r.get(0);t.opt.startAt=0,t.opt.stopAt=0,t.opt.mask=!1,t.opt.mute=!0,t.opt.autoPlay=!0,t.opt.addFilters=!1,t.opt.coverImage=!1,t.hasData=!1,t.hasChanged=!0,t.player.loopTime=void 0,e&&jQuery.extend(t.opt,e),t.videoID=getYTPVideoID(t.opt.videoURL).videoID,t.opt.loop&&"boolean"==typeof t.opt.loop&&(t.opt.loop=9999),t.wrapper.css({background:"none"}),jQuery(t.playerEl).CSSAnimate({opacity:0},t.opt.fadeOnStartTime,function(){jQuery.mbYTPlayer.getDataFromAPI(t),r.YTPGetPlayer().loadVideoById({videoId:t.videoID,suggestedQuality:t.opt.quality}),r.YTPPause(),r.optimizeDisplay(),r.YTPCheckForState()});var a=jQuery.Event("YTPChangeVideo");return a.time=t.currentTime,jQuery(t).trigger(a),jQuery.mbYTPlayer.applyMask(t),this},getPlayer:function(){var e=this.get(0);return e.isReady&&e.player||null},playerDestroy:function(){var e=this.get(0);return e.isReady&&(ytp.YTAPIReady=!0,ytp.backgroundIsInited=!1,e.isInit=!1,e.videoID=null,e.isReady=!1,e.wrapper.remove(),jQuery("#controlBar_"+e.id).remove(),clearInterval(e.checkForStartAt),clearInterval(e.getState)),this},fullscreen:function(real){var YTPlayer=this.get(0);void 0===real&&(real=eval(YTPlayer.opt.realfullscreen));var controls=jQuery("#controlBar_"+YTPlayer.id),fullScreenBtn=controls.find(".mb_OnlyYT"),videoWrapper=YTPlayer.isPlayer?YTPlayer.opt.containment:YTPlayer.wrapper;if(real){var fullscreenchange=jQuery.mbBrowser.mozilla?"mozfullscreenchange":jQuery.mbBrowser.webkit?"webkitfullscreenchange":"fullscreenchange";jQuery(document).off(fullscreenchange).on(fullscreenchange,function(){RunPrefixMethod(document,"IsFullScreen")||RunPrefixMethod(document,"FullScreen")?(jQuery(YTPlayer).YTPSetVideoQuality("default"),jQuery(YTPlayer).trigger("YTPFullScreenStart")):(YTPlayer.isAlone=!1,fullScreenBtn.html(jQuery.mbYTPlayer.controls.onlyYT),jQuery(YTPlayer).YTPSetVideoQuality(YTPlayer.opt.quality),videoWrapper.removeClass("YTPFullscreen"),videoWrapper.CSSAnimate({opacity:YTPlayer.opt.opacity},YTPlayer.opt.fadeOnStartTime),videoWrapper.css({zIndex:0}),YTPlayer.isBackground?jQuery("body").after(controls):YTPlayer.wrapper.before(controls),jQuery(window).resize(),jQuery(YTPlayer).trigger("YTPFullScreenEnd"))})}if(YTPlayer.isAlone)jQuery(document).off("mousemove.YTPlayer"),clearTimeout(YTPlayer.hideCursor),YTPlayer.overlay.css({cursor:"auto"}),real?cancelFullscreen():(videoWrapper.CSSAnimate({opacity:YTPlayer.opt.opacity},YTPlayer.opt.fadeOnStartTime),videoWrapper.css({zIndex:0})),fullScreenBtn.html(jQuery.mbYTPlayer.controls.onlyYT),YTPlayer.isAlone=!1;else{function hideMouse(){YTPlayer.overlay.css({cursor:"none"})}jQuery(document).on("mousemove.YTPlayer",function(e){YTPlayer.overlay.css({cursor:"auto"}),clearTimeout(YTPlayer.hideCursor),jQuery(e.target).parents().is(".mb_YTPBar")||(YTPlayer.hideCursor=setTimeout(hideMouse,3e3))}),hideMouse(),real?(videoWrapper.css({opacity:0}),videoWrapper.addClass("YTPFullscreen"),launchFullscreen(videoWrapper.get(0)),setTimeout(function(){videoWrapper.CSSAnimate({opacity:1},2*YTPlayer.opt.fadeOnStartTime),videoWrapper.append(controls),jQuery(YTPlayer).optimizeDisplay(),YTPlayer.player.seekTo(YTPlayer.player.getCurrentTime()+.1,!0)},YTPlayer.opt.fadeOnStartTime)):videoWrapper.css({zIndex:1e4}).CSSAnimate({opacity:1},2*YTPlayer.opt.fadeOnStartTime),fullScreenBtn.html(jQuery.mbYTPlayer.controls.showSite),YTPlayer.isAlone=!0}function RunPrefixMethod(e,r){for(var t,a,o=["webkit","moz","ms","o",""],n=0;n<o.length&&!e[t];){if(t=r,""==o[n]&&(t=t.substr(0,1).toLowerCase()+t.substr(1)),"undefined"!=(a=typeof e[t=o[n]+t]))return o=[o[n]],"function"==a?e[t]():e[t];n++}}function launchFullscreen(e){RunPrefixMethod(e,"RequestFullScreen")}function cancelFullscreen(){(RunPrefixMethod(document,"FullScreen")||RunPrefixMethod(document,"IsFullScreen"))&&RunPrefixMethod(document,"CancelFullScreen")}return this},toggleLoops:function(){var e=this.get(0),r=e.opt;return 1==r.loop?r.loop=0:(r.startAt?e.player.seekTo(r.startAt):e.player.playVideo(),r.loop=1),this},play:function(){var e=this.get(0),r=jQuery(e);return e.isReady&&(setTimeout(function(){r.YTPSetAbundance(e.opt.abundance)},300),e.player.playVideo(),jQuery(e.playerEl).css({opacity:1}),e.wrapper.css({backgroundImage:"none"}),e.wrapper.CSSAnimate({opacity:e.isAlone?1:e.opt.opacity},e.opt.fadeOnStartTime),jQuery("#controlBar_"+e.id).find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.pause),e.state=1),this},togglePlay:function(e){var r=this.get(0);return r.isReady&&(1==r.state?this.YTPPause():this.YTPPlay(),"function"==typeof e&&e(r.state)),this},stop:function(){var e=this.get(0);return e.isReady&&(jQuery("#controlBar_"+e.id).find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.play),e.player.stopVideo()),this},pause:function(){var e=this.get(0);return e.isReady&&(e.opt.abundance<.2&&this.YTPSetAbundance(.2),e.player.pauseVideo(),e.state=2),this},seekTo:function(e){var r=this.get(0);return r.isReady&&r.player.seekTo(e,!0),this},setVolume:function(e){var r=this.get(0);return r.isReady&&(r.opt.vol=e,this.YTPUnmute(),r.player.setVolume(r.opt.vol),r.volumeBar&&r.volumeBar.length&&r.volumeBar.updateSliderVal(e)),this},getVolume:function(){var e=this.get(0);return e.isReady?e.player.getVolume():this},toggleVolume:function(){var e=this.get(0);return e.isReady&&(e.isMute?(jQuery.mbBrowser.mobile||this.YTPSetVolume(e.opt.vol),this.YTPUnmute()):this.YTPMute()),this},mute:function(){var e=this.get(0);if(!e.isReady)return this;if(e.isMute)return this;e.player.mute(),e.isMute=!0,e.player.setVolume(0),e.volumeBar&&e.volumeBar.length&&10<e.volumeBar.width()&&e.volumeBar.updateSliderVal(0),jQuery("#controlBar_"+e.id).find(".mb_YTPMuteUnmute").html(jQuery.mbYTPlayer.controls.unmute),jQuery(e).addClass("isMuted"),e.volumeBar&&e.volumeBar.length&&e.volumeBar.addClass("muted");var r=jQuery.Event("YTPMuted");return r.time=e.currentTime,e.preventTrigger||jQuery(e).trigger(r),this},unmute:function(){var e=this.get(0);if(!e.isReady)return this;if(!e.isMute)return this;e.player.unMute(),e.isMute=!1,jQuery(e).YTPSetVolume(e.opt.vol),e.volumeBar&&e.volumeBar.length&&e.volumeBar.updateSliderVal(10<e.opt.vol?e.opt.vol:10),jQuery("#controlBar_"+e.id).find(".mb_YTPMuteUnmute").html(jQuery.mbYTPlayer.controls.mute),jQuery(e).removeClass("isMuted"),e.volumeBar&&e.volumeBar.length&&e.volumeBar.removeClass("muted");var r=jQuery.Event("YTPUnmuted");return r.time=e.currentTime,e.preventTrigger||jQuery(e).trigger(r),this},applyFilter:function(e,r){var t=this.get(0);if(!t.isReady)return this;t.filters[e].value=r,t.filtersEnabled&&this.YTPEnableFilters()},applyFilters:function(e){var r=this,t=r.get(0);if(!t.isReady)return this;if(!t.isReady)return jQuery(t).on("YTPReady",function(){r.YTPApplyFilters(e)}),this;for(var a in e)r.YTPApplyFilter(a,e[a]);r.trigger("YTPFiltersApplied")},toggleFilter:function(e,r){var t=this.get(0);return t.isReady&&(t.filters[e].value?t.filters[e].value=0:t.filters[e].value=r,t.filtersEnabled&&jQuery(t).YTPEnableFilters()),this},toggleFilters:function(e){var r=this.get(0);return r.isReady&&(r.filtersEnabled?(jQuery(r).trigger("YTPDisableFilters"),jQuery(r).YTPDisableFilters()):(jQuery(r).YTPEnableFilters(),jQuery(r).trigger("YTPEnableFilters")),"function"==typeof e&&e(r.filtersEnabled)),this},disableFilters:function(){var e=this.get(0);if(!e.isReady)return this;var r=jQuery(e.playerEl);return r.css("-webkit-filter",""),r.css("filter",""),e.filtersEnabled=!1,this},enableFilters:function(){var e=this.get(0);if(!e.isReady)return this;var r=jQuery(e.playerEl),t="";for(var a in e.filters)e.filters[a].value&&(t+=a.replace("_","-")+"("+e.filters[a].value+e.filters[a].unit+") ");return r.css("-webkit-filter",t),r.css("filter",t),e.filtersEnabled=!0,this},removeFilter:function(e,r){var t=this.get(0);if(!t.isReady)return this;if("function"==typeof e&&(r=e,e=null),e)this.YTPApplyFilter(e,0),"function"==typeof r&&r(e);else{for(var a in t.filters)this.YTPApplyFilter(a,0);"function"==typeof r&&r(a),t.filters=jQuery.extend(!0,{},jQuery.mbYTPlayer.defaultFilters)}var o=jQuery.Event("YTPFiltersApplied");return this.trigger(o),this},getFilters:function(){var e=this.get(0);return e.isReady?e.filters:this},addMask:function(e){var r=this.get(0);if(!r.isReady)return this;e||(e=r.actualMask);var t=jQuery("<img/>").attr("src",e).on("load",function(){r.overlay.CSSAnimate({opacity:0},r.opt.fadeOnStartTime,function(){r.hasMask=!0,t.remove(),r.overlay.css({backgroundImage:"url("+e+")",backgroundRepeat:"no-repeat",backgroundPosition:"center center",backgroundSize:"cover"}),r.overlay.CSSAnimate({opacity:1},r.opt.fadeOnStartTime)})});return this},removeMask:function(){var e=this.get(0);return e.isReady&&e.overlay.CSSAnimate({opacity:0},e.opt.fadeOnStartTime,function(){e.hasMask=!1,e.overlay.css({backgroundImage:"",backgroundRepeat:"",backgroundPosition:"",backgroundSize:""}),e.overlay.CSSAnimate({opacity:1},e.opt.fadeOnStartTime)}),this},applyMask:function(t){var a=jQuery(t);if(!t.isReady)return this;if(a.off("YTPTime.mask"),t.opt.mask)if("string"==typeof t.opt.mask)a.YTPAddMask(t.opt.mask),t.actualMask=t.opt.mask;else if("object"==typeof t.opt.mask){for(var e in t.opt.mask)if(t.opt.mask[e])jQuery("<img/>").attr("src",t.opt.mask[e]);t.opt.mask[0]&&a.YTPAddMask(t.opt.mask[0]),a.on("YTPTime.mask",function(e){for(var r in t.opt.mask)e.time==r&&(t.opt.mask[r]?(a.YTPAddMask(t.opt.mask[r]),t.actualMask=t.opt.mask[r]):a.YTPRemoveMask())})}},toggleMask:function(){var e=this.get(0);if(!e.isReady)return this;var r=jQuery(e);return e.hasMask?r.YTPRemoveMask():r.YTPAddMask(),this},manageProgress:function(){var e=this.get(0),r=jQuery("#controlBar_"+e.id),t=r.find(".mb_YTPProgress"),a=r.find(".mb_YTPLoaded"),o=r.find(".mb_YTPseekbar"),n=t.outerWidth(),i=Math.floor(e.player.getCurrentTime()),l=Math.floor(e.player.getDuration()),s=i*n/l,u=100*e.player.getVideoLoadedFraction();return a.css({left:0,width:u+"%"}),o.css({left:0,width:s}),{totalTime:l,currentTime:i}},buildControls:function(YTPlayer){if(jQuery("#controlBar_"+YTPlayer.id).remove(),YTPlayer.opt.showControls){if(YTPlayer.opt.showYTLogo=YTPlayer.opt.showYTLogo||YTPlayer.opt.printUrl,!jQuery("#controlBar_"+YTPlayer.id).length){YTPlayer.controlBar=jQuery("<div/>").attr("id","controlBar_"+YTPlayer.id).addClass("mb_YTPBar").css({whiteSpace:"noWrap",position:YTPlayer.isBackground?"fixed":"absolute",zIndex:YTPlayer.isBackground?1e4:1e3}).hide().on("click",function(e){e.stopPropagation()});var buttonBar=jQuery("<div/>").addClass("buttonBar"),playpause=jQuery("<span>"+jQuery.mbYTPlayer.controls.play+"</span>").addClass("mb_YTPPlayPause ytpicon").on("click",function(e){e.stopPropagation(),jQuery(YTPlayer).YTPTogglePlay()}),MuteUnmute=jQuery("<span>"+jQuery.mbYTPlayer.controls.mute+"</span>").addClass("mb_YTPMuteUnmute ytpicon").on("click",function(e){e.stopPropagation(),jQuery(YTPlayer).YTPToggleVolume()}),volumeBar=jQuery("<div/>").addClass("mb_YTPVolumeBar").css({display:"inline-block"});YTPlayer.volumeBar=volumeBar;var idx=jQuery("<span/>").addClass("mb_YTPTime"),vURL=YTPlayer.opt.videoURL?YTPlayer.opt.videoURL:"";vURL.indexOf("http")<0&&(vURL=jQuery.mbYTPlayer.locationProtocol+"//www.youtube.com/watch?v="+YTPlayer.opt.videoURL);var movieUrl=jQuery("<span/>").html(jQuery.mbYTPlayer.controls.ytLogo).addClass("mb_YTPUrl ytpicon").attr("title","view on YouTube").on("click",function(){window.open(vURL,"viewOnYT")}),onlyVideo=jQuery("<span/>").html(jQuery.mbYTPlayer.controls.onlyYT).addClass("mb_OnlyYT ytpicon").on("click",function(e){e.stopPropagation(),jQuery(YTPlayer).YTPFullscreen(YTPlayer.opt.realfullscreen)}),progressBar=jQuery("<div/>").addClass("mb_YTPProgress").css("position","absolute").on("click",function(e){e.stopPropagation(),timeBar.css({width:e.clientX-timeBar.offset().left}),YTPlayer.timeW=e.clientX-timeBar.offset().left,YTPlayer.controlBar.find(".mb_YTPLoaded").css({width:0});var r=Math.floor(YTPlayer.player.getDuration());YTPlayer.goto=timeBar.outerWidth()*r/progressBar.outerWidth(),YTPlayer.player.seekTo(parseFloat(YTPlayer.goto),!0),YTPlayer.controlBar.find(".mb_YTPLoaded").css({width:0})}),loadedBar=jQuery("<div/>").addClass("mb_YTPLoaded").css("position","absolute"),timeBar=jQuery("<div/>").addClass("mb_YTPseekbar").css("position","absolute");progressBar.append(loadedBar).append(timeBar),buttonBar.append(playpause).append(MuteUnmute).append(volumeBar).append(idx),YTPlayer.opt.showYTLogo&&buttonBar.append(movieUrl),(YTPlayer.isBackground||eval(YTPlayer.opt.realfullscreen)&&!YTPlayer.isBackground)&&buttonBar.append(onlyVideo),YTPlayer.controlBar.append(buttonBar).append(progressBar),YTPlayer.isBackground?jQuery("body").after(YTPlayer.controlBar):(YTPlayer.controlBar.addClass("inlinePlayer"),YTPlayer.wrapper.before(YTPlayer.controlBar)),volumeBar.simpleSlider({initialval:YTPlayer.opt.vol,scale:100,orientation:"h",callback:function(e){0==e.value?jQuery(YTPlayer).YTPMute():jQuery(YTPlayer).YTPUnmute(),YTPlayer.player.setVolume(e.value),YTPlayer.isMute||(YTPlayer.opt.vol=e.value)}})}}else YTPlayer.controlBar=!1},checkForState:function(){var YTPlayer=this.get(0),$YTPlayer=jQuery(YTPlayer);clearInterval(YTPlayer.getState);var interval=100;if(!jQuery.contains(document,YTPlayer))return $YTPlayer.YTPPlayerDestroy(),clearInterval(YTPlayer.getState),void clearInterval(YTPlayer.checkForStartAt);jQuery.mbYTPlayer.checkForStart(YTPlayer),YTPlayer.getState=setInterval(function(){var $YTPlayer=jQuery(YTPlayer);if(YTPlayer.isReady){var prog=jQuery(YTPlayer).YTPManageProgress(),stopAt=YTPlayer.opt.stopAt>YTPlayer.opt.startAt?YTPlayer.opt.stopAt:0;if(stopAt=stopAt<YTPlayer.player.getDuration()?stopAt:0,YTPlayer.currentTime!=prog.currentTime){var YTPEvent=jQuery.Event("YTPTime");YTPEvent.time=YTPlayer.currentTime,jQuery(YTPlayer).trigger(YTPEvent)}if(YTPlayer.currentTime=prog.currentTime,YTPlayer.totalTime=YTPlayer.player.getDuration(),0==YTPlayer.player.getVolume()?$YTPlayer.addClass("isMuted"):$YTPlayer.removeClass("isMuted"),YTPlayer.opt.showControls&&(prog.totalTime?YTPlayer.controlBar.find(".mb_YTPTime").html(jQuery.mbYTPlayer.formatTime(prog.currentTime)+" / "+jQuery.mbYTPlayer.formatTime(prog.totalTime)):YTPlayer.controlBar.find(".mb_YTPTime").html("-- : -- / -- : --")),eval(YTPlayer.opt.stopMovieOnBlur)&&(document.hasFocus()?document.hasFocus()&&!YTPlayer.hasFocus&&-1!=YTPlayer.state&&0!=YTPlayer.state&&(YTPlayer.hasFocus=!0,YTPlayer.preventTrigger=!0,$YTPlayer.YTPPlay()):1==YTPlayer.state&&(YTPlayer.hasFocus=!1,YTPlayer.preventTrigger=!0,$YTPlayer.YTPPause())),YTPlayer.opt.playOnlyIfVisible){var isOnScreen=jQuery.mbYTPlayer.isOnScreen(YTPlayer,YTPlayer.opt.onScreenPercentage);isOnScreen||1!=YTPlayer.state?isOnScreen&&!YTPlayer.isOnScreen&&(YTPlayer.isOnScreen=!0,YTPlayer.player.playVideo()):(YTPlayer.isOnScreen=!1,$YTPlayer.YTPPause())}if(YTPlayer.controlBar.length&&YTPlayer.controlBar.outerWidth()<=400&&!YTPlayer.isCompact?(YTPlayer.controlBar.addClass("compact"),YTPlayer.isCompact=!0,!YTPlayer.isMute&&YTPlayer.volumeBar&&YTPlayer.volumeBar.updateSliderVal(YTPlayer.opt.vol)):YTPlayer.controlBar.length&&400<YTPlayer.controlBar.outerWidth()&&YTPlayer.isCompact&&(YTPlayer.controlBar.removeClass("compact"),YTPlayer.isCompact=!1,!YTPlayer.isMute&&YTPlayer.volumeBar&&YTPlayer.volumeBar.updateSliderVal(YTPlayer.opt.vol)),0<YTPlayer.player.getPlayerState()&&(parseFloat(YTPlayer.player.getDuration()-.5)<YTPlayer.player.getCurrentTime()||0<stopAt&&parseFloat(YTPlayer.player.getCurrentTime())>stopAt)){if(YTPlayer.isEnded)return;if(YTPlayer.isEnded=!0,setTimeout(function(){YTPlayer.isEnded=!1},1e3),YTPlayer.isList){if(!YTPlayer.opt.loop||0<YTPlayer.opt.loop&&YTPlayer.player.loopTime===YTPlayer.opt.loop-1){YTPlayer.player.loopTime=void 0,clearInterval(YTPlayer.getState);var YTPEnd=jQuery.Event("YTPEnd");return YTPEnd.time=YTPlayer.currentTime,void jQuery(YTPlayer).trigger(YTPEnd)}}else if(!YTPlayer.opt.loop||0<YTPlayer.opt.loop&&YTPlayer.player.loopTime===YTPlayer.opt.loop-1){YTPlayer.player.loopTime=void 0,YTPlayer.state=2;var bgndURL=YTPlayer.opt.coverImage?"url("+YTPlayer.opt.coverImage+") center center":YTPlayer.orig_containment_background;return YTPlayer.opt.containment.css({background:bgndURL,backgroundSize:"cover"}),jQuery(YTPlayer).YTPPause(),void YTPlayer.wrapper.CSSAnimate({opacity:0},YTPlayer.opt.fadeOnStartTime,function(){YTPlayer.controlBar.length&&YTPlayer.controlBar.find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.play);var e=jQuery.Event("YTPEnd");e.time=YTPlayer.currentTime,jQuery(YTPlayer).trigger(e),YTPlayer.player.seekTo(YTPlayer.opt.startAt,!0);var r=YTPlayer.opt.coverImage?"url("+YTPlayer.opt.coverImage+") center center":YTPlayer.orig_containment_background;YTPlayer.opt.containment.css({background:r,backgroundSize:"cover"})})}YTPlayer.player.loopTime=YTPlayer.player.loopTime?++YTPlayer.player.loopTime:1,YTPlayer.opt.startAt=YTPlayer.opt.startAt||1,YTPlayer.preventTrigger=!0,YTPlayer.state=2,YTPlayer.player.seekTo(YTPlayer.opt.startAt,!0)}}},interval)},checkForStart:function(YTPlayer){var $YTPlayer=jQuery(YTPlayer);if(jQuery.contains(document,YTPlayer)){if(jQuery.mbYTPlayer.buildControls(YTPlayer),YTPlayer.overlay)if(YTPlayer.opt.addRaster){var classN="dot"==YTPlayer.opt.addRaster?"raster-dot":"raster";YTPlayer.overlay.addClass(YTPlayer.isRetina?classN+" retina":classN)}else YTPlayer.overlay.removeClass(function(e,r){var t=r.split(" "),a=[];return jQuery.each(t,function(e,r){/raster.*/.test(r)&&a.push(r)}),a.push("retina"),a.join(" ")});YTPlayer.preventTrigger=!0,YTPlayer.state=2,YTPlayer.preventTrigger=!0,YTPlayer.player.mute(),YTPlayer.player.playVideo(),YTPlayer.isStarting=!0;var startAt=YTPlayer.start_from_last?YTPlayer.start_from_last:YTPlayer.opt.startAt?YTPlayer.opt.startAt:1;return YTPlayer.preventTrigger=!0,YTPlayer.checkForStartAt=setInterval(function(){YTPlayer.player.mute(),YTPlayer.player.seekTo(startAt,!0);var canPlayVideo=YTPlayer.player.getVideoLoadedFraction()>=startAt/YTPlayer.player.getDuration();if(0<YTPlayer.player.getDuration()&&YTPlayer.player.getCurrentTime()>=startAt&&canPlayVideo){YTPlayer.start_from_last=null,YTPlayer.preventTrigger=!0,$YTPlayer.YTPPause(),clearInterval(YTPlayer.checkForStartAt),"function"==typeof YTPlayer.opt.onReady&&YTPlayer.opt.onReady(YTPlayer),YTPlayer.isReady=!0,$YTPlayer.YTPRemoveFilter(),YTPlayer.opt.addFilters?$YTPlayer.YTPApplyFilters(YTPlayer.opt.addFilters):$YTPlayer.YTPApplyFilters(),$YTPlayer.YTPEnableFilters();var YTPready=jQuery.Event("YTPReady");if(YTPready.time=YTPlayer.currentTime,$YTPlayer.trigger(YTPready),YTPlayer.state=2,YTPlayer.opt.mute?$YTPlayer.YTPMute():(YTPlayer.player.unMute(),YTPlayer.opt.autoPlay&&console.debug("To make the video 'auto-play' you must mute the audio according with the new vendor policy")),"undefined"!=typeof _gaq&&eval(YTPlayer.opt.gaTrack)?_gaq.push(["_trackEvent","YTPlayer","Play",YTPlayer.hasData?YTPlayer.videoData.title:YTPlayer.videoID.toString()]):"undefined"!=typeof ga&&eval(YTPlayer.opt.gaTrack)&&ga("send","event","YTPlayer","play",YTPlayer.hasData?YTPlayer.videoData.title:YTPlayer.videoID.toString()),YTPlayer.opt.autoPlay){var YTPStart=jQuery.Event("YTPStart");YTPStart.time=YTPlayer.currentTime,jQuery(YTPlayer).trigger(YTPStart),YTPlayer.isStarting=!1,"mac"==jQuery.mbBrowser.os.name&&jQuery.mbBrowser.safari&&jQuery("body").one("mousedown.YTPstart",function(){$YTPlayer.YTPPlay()}),$YTPlayer.YTPPlay()}else YTPlayer.preventTrigger=!0,$YTPlayer.YTPPause(),YTPlayer.start_from_last&&YTPlayer.player.seekTo(startAt,!0),setTimeout(function(){YTPlayer.preventTrigger=!0,$YTPlayer.YTPPause(),YTPlayer.isPlayer||(YTPlayer.opt.coverImage?(YTPlayer.wrapper.css({opacity:0}),setTimeout(function(){var e=YTPlayer.opt.coverImage?"url("+YTPlayer.opt.coverImage+") center center":YTPlayer.orig_containment_background;YTPlayer.wrapper.css({background:e,backgroundSize:"cover",backgroundRepeat:"no-repeat"})},YTPlayer.opt.fadeOnStartTime)):(jQuery(YTPlayer.playerEl).CSSAnimate({opacity:1},YTPlayer.opt.fadeOnStartTime),YTPlayer.wrapper.CSSAnimate({opacity:YTPlayer.isAlone?1:YTPlayer.opt.opacity},YTPlayer.opt.fadeOnStartTime))),YTPlayer.isStarting=!1},500),YTPlayer.controlBar.length&&YTPlayer.controlBar.find(".mb_YTPPlayPause").html(jQuery.mbYTPlayer.controls.play);YTPlayer.isPlayer&&!YTPlayer.opt.autoPlay&&YTPlayer.loading&&YTPlayer.loading.length&&(YTPlayer.loading.html("Ready"),setTimeout(function(){YTPlayer.loading.fadeOut()},100)),YTPlayer.controlBar&&YTPlayer.controlBar.length&&YTPlayer.controlBar.slideDown(1e3)}"mac"==jQuery.mbBrowser.os.name&&jQuery.mbBrowser.safari&&(YTPlayer.player.playVideo(),0<=startAt&&YTPlayer.player.seekTo(startAt,!0))},100),$YTPlayer}$YTPlayer.YTPPlayerDestroy()},getTime:function(){var e=this.get(0);return jQuery.mbYTPlayer.formatTime(e.currentTime)},getTotalTime:function(e){var r=this.get(0);return jQuery.mbYTPlayer.formatTime(r.totalTime)},formatTime:function(e){var r=Math.floor(e/60),t=Math.floor(e-60*r);return(r<=9?"0"+r:r)+" : "+(t<=9?"0"+t:t)},setAnchor:function(e){this.optimizeDisplay(e)},getAnchor:function(){return this.get(0).opt.anchor},setAbundance:function(e,r){var t=this.get(0);return r&&(t.opt.abundance=e),this.optimizeDisplay(t.opt.anchor,e),this},getAbundance:function(){return this.get(0).opt.abundance},setOption:function(e,r){var t=this.get(0);return t.opt[e]=r,this}},jQuery.fn.optimizeDisplay=function(anchor,abundanceX){var YTPlayer=this.get(0),vid={},el=YTPlayer.wrapper,iframe=jQuery(YTPlayer.playerEl);YTPlayer.opt.anchor=anchor||YTPlayer.opt.anchor,YTPlayer.opt.anchor="undefined "!=typeof YTPlayer.opt.anchor?YTPlayer.opt.anchor:"center,center";var YTPAlign=YTPlayer.opt.anchor.split(","),ab=abundanceX||YTPlayer.opt.abundance;if(YTPlayer.opt.optimizeDisplay){var abundance=el.height()*ab,win={};win.width=el.outerWidth(),win.height=el.outerHeight()+abundance,YTPlayer.opt.ratio="auto"===YTPlayer.opt.ratio?16/9:YTPlayer.opt.ratio,YTPlayer.opt.ratio=eval(YTPlayer.opt.ratio),vid.width=win.width+abundance,vid.height=Math.ceil(vid.width/YTPlayer.opt.ratio),vid.marginTop=Math.ceil(-(vid.height-win.height+abundance)/2),vid.marginLeft=-abundance/2;var lowest=vid.height<win.height;for(var a in lowest&&(vid.height=win.height+abundance,vid.width=Math.ceil(vid.height*YTPlayer.opt.ratio),vid.marginTop=-abundance/2,vid.marginLeft=Math.ceil(-(vid.width-win.width)/2)),YTPAlign)if(YTPAlign.hasOwnProperty(a)){var al=YTPAlign[a].replace(/ /g,"");switch(al){case"top":vid.marginTop=-abundance;break;case"bottom":vid.marginTop=Math.ceil(-(vid.height-win.height)-abundance/2);break;case"left":vid.marginLeft=-abundance;break;case"right":vid.marginLeft=Math.ceil(-(vid.width-win.width)+abundance/2)}}}else vid.width="100%",vid.height="100%",vid.marginTop=0,vid.marginLeft=0;iframe.css({width:vid.width,height:vid.height,marginTop:vid.marginTop,marginLeft:vid.marginLeft,maxWidth:"initial"})},jQuery.shuffle=function(e){for(var r=e.slice(),t=r.length,a=t;a--;){var o=parseInt(Math.random()*t),n=r[a];r[a]=r[o],r[o]=n}return r},jQuery.fn.unselectable=function(){return this.each(function(){jQuery(this).css({"-moz-user-select":"none","-webkit-user-select":"none","user-select":"none"}).attr("unselectable","on")})},jQuery.fn.YTPlayer=jQuery.mbYTPlayer.buildPlayer,jQuery.fn.mb_YTPlayer=jQuery.mbYTPlayer.buildPlayer,jQuery.fn.YTPCheckForState=jQuery.mbYTPlayer.checkForState,jQuery.fn.YTPGetPlayer=jQuery.mbYTPlayer.getPlayer,jQuery.fn.YTPGetVideoID=jQuery.mbYTPlayer.getVideoID,jQuery.fn.YTPGetPlaylistID=jQuery.mbYTPlayer.getPlaylistID,jQuery.fn.YTPChangeVideo=jQuery.fn.YTPChangeMovie=jQuery.mbYTPlayer.changeVideo,jQuery.fn.YTPPlayerDestroy=jQuery.mbYTPlayer.playerDestroy,jQuery.fn.YTPPlay=jQuery.mbYTPlayer.play,jQuery.fn.YTPTogglePlay=jQuery.mbYTPlayer.togglePlay,jQuery.fn.YTPStop=jQuery.mbYTPlayer.stop,jQuery.fn.YTPPause=jQuery.mbYTPlayer.pause,jQuery.fn.YTPSeekTo=jQuery.mbYTPlayer.seekTo,jQuery.fn.YTPlaylist=jQuery.mbYTPlayer.playlist,jQuery.fn.YTPPlayNext=jQuery.mbYTPlayer.playNext,jQuery.fn.YTPPlayPrev=jQuery.mbYTPlayer.playPrev,jQuery.fn.YTPPlayIndex=jQuery.mbYTPlayer.playIndex,jQuery.fn.YTPMute=jQuery.mbYTPlayer.mute,jQuery.fn.YTPUnmute=jQuery.mbYTPlayer.unmute,jQuery.fn.YTPToggleVolume=jQuery.mbYTPlayer.toggleVolume,jQuery.fn.YTPSetVolume=jQuery.mbYTPlayer.setVolume,jQuery.fn.YTPGetVolume=jQuery.mbYTPlayer.getVolume,jQuery.fn.YTPGetVideoData=jQuery.mbYTPlayer.getVideoData,jQuery.fn.YTPFullscreen=jQuery.mbYTPlayer.fullscreen,jQuery.fn.YTPToggleLoops=jQuery.mbYTPlayer.toggleLoops,jQuery.fn.YTPManageProgress=jQuery.mbYTPlayer.manageProgress,jQuery.fn.YTPSetVideoQuality=jQuery.mbYTPlayer.setVideoQuality,jQuery.fn.YTPGetVideoQuality=jQuery.mbYTPlayer.getVideoQuality,jQuery.fn.YTPApplyFilter=jQuery.mbYTPlayer.applyFilter,jQuery.fn.YTPApplyFilters=jQuery.mbYTPlayer.applyFilters,jQuery.fn.YTPToggleFilter=jQuery.mbYTPlayer.toggleFilter,jQuery.fn.YTPToggleFilters=jQuery.mbYTPlayer.toggleFilters,jQuery.fn.YTPRemoveFilter=jQuery.mbYTPlayer.removeFilter,jQuery.fn.YTPDisableFilters=jQuery.mbYTPlayer.disableFilters,jQuery.fn.YTPEnableFilters=jQuery.mbYTPlayer.enableFilters,jQuery.fn.YTPGetFilters=jQuery.mbYTPlayer.getFilters,jQuery.fn.YTPGetTime=jQuery.mbYTPlayer.getTime,jQuery.fn.YTPGetTotalTime=jQuery.mbYTPlayer.getTotalTime,jQuery.fn.YTPAddMask=jQuery.mbYTPlayer.addMask,jQuery.fn.YTPRemoveMask=jQuery.mbYTPlayer.removeMask,jQuery.fn.YTPToggleMask=jQuery.mbYTPlayer.toggleMask,jQuery.fn.YTPGetAbundance=jQuery.mbYTPlayer.getAbundance,jQuery.fn.YTPSetAbundance=jQuery.mbYTPlayer.setAbundance,jQuery.fn.YTPSetAnchor=jQuery.mbYTPlayer.setAnchor,jQuery.fn.YTPGetAnchor=jQuery.mbYTPlayer.getAnchor,jQuery.fn.YTPSetOption=jQuery.mbYTPlayer.setOption}(jQuery,ytp);var nAgt=navigator.userAgent;function isTouchSupported(){var e=nAgt.msMaxTouchPoints,r="ontouchstart"in document.createElement("div");return!(!e&&!r)}jQuery.browser=jQuery.browser||{},jQuery.browser.mozilla=!1,jQuery.browser.webkit=!1,jQuery.browser.opera=!1,jQuery.browser.safari=!1,jQuery.browser.chrome=!1,jQuery.browser.androidStock=!1,jQuery.browser.msie=!1,jQuery.browser.edge=!1,jQuery.browser.ua=nAgt;var getOS=function(){var e={version:"Unknown version",name:"Unknown OS"};return-1!=navigator.appVersion.indexOf("Win")&&(e.name="Windows"),-1!=navigator.appVersion.indexOf("Mac")&&navigator.appVersion.indexOf("Mobile")<0&&(e.name="Mac"),-1!=navigator.appVersion.indexOf("Linux")&&(e.name="Linux"),/Mac OS X/.test(nAgt)&&!/Mobile/.test(nAgt)&&(e.version=/Mac OS X (10[\.\_\d]+)/.exec(nAgt)[1],e.version=e.version.replace(/_/g,".").substring(0,5)),/Windows/.test(nAgt)&&(e.version="Unknown.Unknown"),/Windows NT 5.1/.test(nAgt)&&(e.version="5.1"),/Windows NT 6.0/.test(nAgt)&&(e.version="6.0"),/Windows NT 6.1/.test(nAgt)&&(e.version="6.1"),/Windows NT 6.2/.test(nAgt)&&(e.version="6.2"),/Windows NT 10.0/.test(nAgt)&&(e.version="10.0"),/Linux/.test(nAgt)&&/Linux/.test(nAgt)&&(e.version="Unknown.Unknown"),e.name=e.name.toLowerCase(),e.major_version="Unknown",e.minor_version="Unknown","Unknown.Unknown"!=e.version&&(e.major_version=parseFloat(e.version.split(".")[0]),e.minor_version=parseFloat(e.version.split(".")[1])),e},nameOffset,verOffset,ix;if(jQuery.browser.os=getOS(),jQuery.browser.hasTouch=isTouchSupported(),jQuery.browser.name=navigator.appName,jQuery.browser.fullVersion=""+parseFloat(navigator.appVersion),jQuery.browser.majorVersion=parseInt(navigator.appVersion,10),-1!=(verOffset=nAgt.indexOf("Opera")))jQuery.browser.opera=!0,jQuery.browser.name="Opera",jQuery.browser.fullVersion=nAgt.substring(verOffset+6),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8));else if(-1!=(verOffset=nAgt.indexOf("OPR")))jQuery.browser.opera=!0,jQuery.browser.name="Opera",jQuery.browser.fullVersion=nAgt.substring(verOffset+4);else if(-1!=(verOffset=nAgt.indexOf("MSIE")))jQuery.browser.msie=!0,jQuery.browser.name="Microsoft Internet Explorer",jQuery.browser.fullVersion=nAgt.substring(verOffset+5);else if(-1!=nAgt.indexOf("Trident")){jQuery.browser.msie=!0,jQuery.browser.name="Microsoft Internet Explorer";var start=nAgt.indexOf("rv:")+3,end=start+4;jQuery.browser.fullVersion=nAgt.substring(start,end)}else-1!=(verOffset=nAgt.indexOf("Edge"))?(jQuery.browser.edge=!0,jQuery.browser.name="Microsoft Edge",jQuery.browser.fullVersion=nAgt.substring(verOffset+5)):-1!=(verOffset=nAgt.indexOf("Chrome"))?(jQuery.browser.webkit=!0,jQuery.browser.chrome=!0,jQuery.browser.name="Chrome",jQuery.browser.fullVersion=nAgt.substring(verOffset+7)):-1<nAgt.indexOf("mozilla/5.0")&&-1<nAgt.indexOf("android ")&&-1<nAgt.indexOf("applewebkit")&&!(-1<nAgt.indexOf("chrome"))?(verOffset=nAgt.indexOf("Chrome"),jQuery.browser.webkit=!0,jQuery.browser.androidStock=!0,jQuery.browser.name="androidStock",jQuery.browser.fullVersion=nAgt.substring(verOffset+7)):-1!=(verOffset=nAgt.indexOf("Safari"))?(jQuery.browser.webkit=!0,jQuery.browser.safari=!0,jQuery.browser.name="Safari",jQuery.browser.fullVersion=nAgt.substring(verOffset+7),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8))):-1!=(verOffset=nAgt.indexOf("AppleWebkit"))?(jQuery.browser.webkit=!0,jQuery.browser.safari=!0,jQuery.browser.name="Safari",jQuery.browser.fullVersion=nAgt.substring(verOffset+7),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8))):-1!=(verOffset=nAgt.indexOf("Firefox"))?(jQuery.browser.mozilla=!0,jQuery.browser.name="Firefox",jQuery.browser.fullVersion=nAgt.substring(verOffset+8)):(nameOffset=nAgt.lastIndexOf(" ")+1)<(verOffset=nAgt.lastIndexOf("/"))&&(jQuery.browser.name=nAgt.substring(nameOffset,verOffset),jQuery.browser.fullVersion=nAgt.substring(verOffset+1),jQuery.browser.name.toLowerCase()==jQuery.browser.name.toUpperCase()&&(jQuery.browser.name=navigator.appName));function uncamel(e){return e.replace(/([A-Z])/g,function(e){return"-"+e.toLowerCase()})}function setUnit(e,r){return"string"!=typeof e||e.match(/^[\-0-9\.]+jQuery/)?""+e+r:e}function setFilter(e,r,t){var a=uncamel(r),o=jQuery.browser.mozilla?"":jQuery.CSS.sfx;e[o+"filter"]=e[o+"filter"]||"",t=setUnit(t>jQuery.CSS.filters[r].max?jQuery.CSS.filters[r].max:t,jQuery.CSS.filters[r].unit),e[o+"filter"]+=a+"("+t+") ",delete e[r]}-1!=(ix=jQuery.browser.fullVersion.indexOf(";"))&&(jQuery.browser.fullVersion=jQuery.browser.fullVersion.substring(0,ix)),-1!=(ix=jQuery.browser.fullVersion.indexOf(" "))&&(jQuery.browser.fullVersion=jQuery.browser.fullVersion.substring(0,ix)),jQuery.browser.majorVersion=parseInt(""+jQuery.browser.fullVersion,10),isNaN(jQuery.browser.majorVersion)&&(jQuery.browser.fullVersion=""+parseFloat(navigator.appVersion),jQuery.browser.majorVersion=parseInt(navigator.appVersion,10)),jQuery.browser.version=jQuery.browser.majorVersion,jQuery.browser.android=/Android/i.test(nAgt),jQuery.browser.blackberry=/BlackBerry|BB|PlayBook/i.test(nAgt),jQuery.browser.ios=/iPhone|iPad|iPod|webOS/i.test(nAgt),jQuery.browser.operaMobile=/Opera Mini/i.test(nAgt),jQuery.browser.windowsMobile=/IEMobile|Windows Phone/i.test(nAgt),jQuery.browser.kindle=/Kindle|Silk/i.test(nAgt),jQuery.browser.mobile=jQuery.browser.android||jQuery.browser.blackberry||jQuery.browser.ios||jQuery.browser.windowsMobile||jQuery.browser.operaMobile||jQuery.browser.kindle,jQuery.isMobile=jQuery.browser.mobile,jQuery.isTablet=jQuery.browser.mobile&&765<jQuery(window).width(),jQuery.isAndroidDefault=jQuery.browser.android&&!/chrome/i.test(nAgt),jQuery.mbBrowser=jQuery.browser,jQuery.browser.versionCompare=function(e,r){if("stringstring"!=typeof e+typeof r)return!1;for(var t=e.split("."),a=r.split("."),o=0,n=Math.max(t.length,a.length);o<n;o++){if(t[o]&&!a[o]&&0<parseInt(t[o])||parseInt(t[o])>parseInt(a[o]))return 1;if(a[o]&&!t[o]&&0<parseInt(a[o])||parseInt(t[o])<parseInt(a[o]))return-1}return 0},jQuery.support.CSStransition=function(){var e=(document.body||document.documentElement).style;return void 0!==e.transition||void 0!==e.WebkitTransition||void 0!==e.MozTransition||void 0!==e.MsTransition||void 0!==e.OTransition}(),jQuery.CSS={name:"mb.CSSAnimate",author:"Matteo Bicocchi",version:"2.0.0",transitionEnd:"transitionEnd",sfx:"",filters:{blur:{min:0,max:100,unit:"px"},brightness:{min:0,max:400,unit:"%"},contrast:{min:0,max:400,unit:"%"},grayscale:{min:0,max:100,unit:"%"},hueRotate:{min:0,max:360,unit:"deg"},invert:{min:0,max:100,unit:"%"},saturate:{min:0,max:400,unit:"%"},sepia:{min:0,max:100,unit:"%"}},normalizeCss:function(e){var r=jQuery.extend(!0,{},e);for(var t in jQuery.browser.webkit||jQuery.browser.opera?jQuery.CSS.sfx="-webkit-":jQuery.browser.mozilla?jQuery.CSS.sfx="-moz-":jQuery.browser.msie&&(jQuery.CSS.sfx="-ms-"),jQuery.CSS.sfx="",r){if("transform"===t&&(r[jQuery.CSS.sfx+"transform"]=r[t],delete r[t]),"transform-origin"===t&&(r[jQuery.CSS.sfx+"transform-origin"]=e[t],delete r[t]),"filter"!==t||jQuery.browser.mozilla||(r[jQuery.CSS.sfx+"filter"]=e[t],delete r[t]),"blur"===t&&setFilter(r,"blur",e[t]),"brightness"===t&&setFilter(r,"brightness",e[t]),"contrast"===t&&setFilter(r,"contrast",e[t]),"grayscale"===t&&setFilter(r,"grayscale",e[t]),"hueRotate"===t&&setFilter(r,"hueRotate",e[t]),"invert"===t&&setFilter(r,"invert",e[t]),"saturate"===t&&setFilter(r,"saturate",e[t]),"sepia"===t&&setFilter(r,"sepia",e[t]),"x"===t){var a=jQuery.CSS.sfx+"transform";r[a]=r[a]||"",r[a]+=" translateX("+setUnit(e[t],"px")+")",delete r[t]}"y"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" translateY("+setUnit(e[t],"px")+")",delete r[t]),"z"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" translateZ("+setUnit(e[t],"px")+")",delete r[t]),"rotate"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" rotate("+setUnit(e[t],"deg")+")",delete r[t]),"rotateX"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" rotateX("+setUnit(e[t],"deg")+")",delete r[t]),"rotateY"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" rotateY("+setUnit(e[t],"deg")+")",delete r[t]),"rotateZ"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" rotateZ("+setUnit(e[t],"deg")+")",delete r[t]),"scale"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" scale("+setUnit(e[t],"")+")",delete r[t]),"scaleX"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" scaleX("+setUnit(e[t],"")+")",delete r[t]),"scaleY"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" scaleY("+setUnit(e[t],"")+")",delete r[t]),"scaleZ"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" scaleZ("+setUnit(e[t],"")+")",delete r[t]),"skew"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" skew("+setUnit(e[t],"deg")+")",delete r[t]),"skewX"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" skewX("+setUnit(e[t],"deg")+")",delete r[t]),"skewY"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" skewY("+setUnit(e[t],"deg")+")",delete r[t]),"perspective"===t&&(r[a=jQuery.CSS.sfx+"transform"]=r[a]||"",r[a]+=" perspective("+setUnit(e[t],"px")+")",delete r[t])}return r},getProp:function(e){var r,t=[];for(r in e)t.indexOf(r)<0&&t.push(uncamel(r));return t.join(",")},animate:function(l,s,u,y,d){return this.each(function(){function e(){r.called=!0,r.CSSAIsRunning=!1,t.off(jQuery.CSS.transitionEnd+"."+r.id),clearTimeout(r.timeout),t.css(jQuery.CSS.sfx+"transition",""),"function"==typeof d&&d.apply(r),"function"==typeof r.CSSqueue&&(r.CSSqueue(),r.CSSqueue=null)}var r=this,t=jQuery(this);r.id=r.id||"CSSA_"+(new Date).getTime();var a=a||{type:"noEvent"};if(r.CSSAIsRunning&&r.eventType==a.type&&!jQuery.browser.msie&&jQuery.browser.version<=9)r.CSSqueue=function(){t.CSSAnimate(l,s,u,y,d)};else if(r.CSSqueue=null,r.eventType=a.type,0!==t.length&&l){if(l=jQuery.normalizeCss(l),r.CSSAIsRunning=!0,"function"==typeof s&&(d=s,s=jQuery.fx.speeds._default),"function"==typeof u&&(y=u,u=0),"string"==typeof u&&(d=u,u=0),"function"==typeof y&&(d=y,y="cubic-bezier(0.65,0.03,0.36,0.72)"),"string"==typeof s)for(var o in jQuery.fx.speeds){if(s==o){s=jQuery.fx.speeds[o];break}s=jQuery.fx.speeds._default}if(s||(s=jQuery.fx.speeds._default),"string"==typeof d&&(y=d,d=null),jQuery.support.CSStransition){var n={default:"ease",in:"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};n[y]&&(y=n[y]),t.off(jQuery.CSS.transitionEnd+"."+r.id),n=jQuery.CSS.getProp(l);var i={};jQuery.extend(i,l),i[jQuery.CSS.sfx+"transition-property"]=n,i[jQuery.CSS.sfx+"transition-duration"]=s+"ms",i[jQuery.CSS.sfx+"transition-delay"]=u+"ms",i[jQuery.CSS.sfx+"transition-timing-function"]=y,setTimeout(function(){t.one(jQuery.CSS.transitionEnd+"."+r.id,e),t.css(i)},1),r.timeout=setTimeout(function(){r.called||!d?(r.called=!1,r.CSSAIsRunning=!1):(t.css(jQuery.CSS.sfx+"transition",""),d.apply(r),r.CSSAIsRunning=!1,"function"==typeof r.CSSqueue&&(r.CSSqueue(),r.CSSqueue=null))},s+u+10)}else{for(n in l)"transform"===n&&delete l[n],"filter"===n&&delete l[n],"transform-origin"===n&&delete l[n],"auto"===l[n]&&delete l[n],"x"===n&&(a=l[n],l[o="left"]=a,delete l[n]),"y"===n&&(a=l[n],l[o="top"]=a,delete l[n]),"-ms-transform"!==n&&"-ms-filter"!==n||delete l[n];t.delay(u).animate(l,s,d)}}})}},jQuery.fn.CSSAnimate=jQuery.CSS.animate,jQuery.normalizeCss=jQuery.CSS.normalizeCss,jQuery.fn.css3=function(t){return this.each(function(){var e=jQuery(this),r=jQuery.normalizeCss(t);e.css(r)})};var nAgt=navigator.userAgent;function isTouchSupported(){var e=nAgt.msMaxTouchPoints,r="ontouchstart"in document.createElement("div");return!(!e&&!r)}jQuery.browser=jQuery.browser||{},jQuery.browser.mozilla=!1,jQuery.browser.webkit=!1,jQuery.browser.opera=!1,jQuery.browser.safari=!1,jQuery.browser.chrome=!1,jQuery.browser.androidStock=!1,jQuery.browser.msie=!1,jQuery.browser.edge=!1,jQuery.browser.ua=nAgt;var getOS=function(){var e={version:"Unknown version",name:"Unknown OS"};return-1!=navigator.appVersion.indexOf("Win")&&(e.name="Windows"),-1!=navigator.appVersion.indexOf("Mac")&&navigator.appVersion.indexOf("Mobile")<0&&(e.name="Mac"),-1!=navigator.appVersion.indexOf("Linux")&&(e.name="Linux"),/Mac OS X/.test(nAgt)&&!/Mobile/.test(nAgt)&&(e.version=/Mac OS X (10[\.\_\d]+)/.exec(nAgt)[1],e.version=e.version.replace(/_/g,".").substring(0,5)),/Windows/.test(nAgt)&&(e.version="Unknown.Unknown"),/Windows NT 5.1/.test(nAgt)&&(e.version="5.1"),/Windows NT 6.0/.test(nAgt)&&(e.version="6.0"),/Windows NT 6.1/.test(nAgt)&&(e.version="6.1"),/Windows NT 6.2/.test(nAgt)&&(e.version="6.2"),/Windows NT 10.0/.test(nAgt)&&(e.version="10.0"),/Linux/.test(nAgt)&&/Linux/.test(nAgt)&&(e.version="Unknown.Unknown"),e.name=e.name.toLowerCase(),e.major_version="Unknown",e.minor_version="Unknown","Unknown.Unknown"!=e.version&&(e.major_version=parseFloat(e.version.split(".")[0]),e.minor_version=parseFloat(e.version.split(".")[1])),e},nameOffset,verOffset,ix;if(jQuery.browser.os=getOS(),jQuery.browser.hasTouch=isTouchSupported(),jQuery.browser.name=navigator.appName,jQuery.browser.fullVersion=""+parseFloat(navigator.appVersion),jQuery.browser.majorVersion=parseInt(navigator.appVersion,10),-1!=(verOffset=nAgt.indexOf("Opera")))jQuery.browser.opera=!0,jQuery.browser.name="Opera",jQuery.browser.fullVersion=nAgt.substring(verOffset+6),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8));else if(-1!=(verOffset=nAgt.indexOf("OPR")))jQuery.browser.opera=!0,jQuery.browser.name="Opera",jQuery.browser.fullVersion=nAgt.substring(verOffset+4);else if(-1!=(verOffset=nAgt.indexOf("MSIE")))jQuery.browser.msie=!0,jQuery.browser.name="Microsoft Internet Explorer",jQuery.browser.fullVersion=nAgt.substring(verOffset+5);else if(-1!=nAgt.indexOf("Trident")){jQuery.browser.msie=!0,jQuery.browser.name="Microsoft Internet Explorer";var start=nAgt.indexOf("rv:")+3,end=start+4;jQuery.browser.fullVersion=nAgt.substring(start,end)}else-1!=(verOffset=nAgt.indexOf("Edge"))?(jQuery.browser.edge=!0,jQuery.browser.name="Microsoft Edge",jQuery.browser.fullVersion=nAgt.substring(verOffset+5)):-1!=(verOffset=nAgt.indexOf("Chrome"))?(jQuery.browser.webkit=!0,jQuery.browser.chrome=!0,jQuery.browser.name="Chrome",jQuery.browser.fullVersion=nAgt.substring(verOffset+7)):-1<nAgt.indexOf("mozilla/5.0")&&-1<nAgt.indexOf("android ")&&-1<nAgt.indexOf("applewebkit")&&!(-1<nAgt.indexOf("chrome"))?(verOffset=nAgt.indexOf("Chrome"),jQuery.browser.webkit=!0,jQuery.browser.androidStock=!0,jQuery.browser.name="androidStock",jQuery.browser.fullVersion=nAgt.substring(verOffset+7)):-1!=(verOffset=nAgt.indexOf("Safari"))?(jQuery.browser.webkit=!0,jQuery.browser.safari=!0,jQuery.browser.name="Safari",jQuery.browser.fullVersion=nAgt.substring(verOffset+7),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8))):-1!=(verOffset=nAgt.indexOf("AppleWebkit"))?(jQuery.browser.webkit=!0,jQuery.browser.safari=!0,jQuery.browser.name="Safari",jQuery.browser.fullVersion=nAgt.substring(verOffset+7),-1!=(verOffset=nAgt.indexOf("Version"))&&(jQuery.browser.fullVersion=nAgt.substring(verOffset+8))):-1!=(verOffset=nAgt.indexOf("Firefox"))?(jQuery.browser.mozilla=!0,jQuery.browser.name="Firefox",jQuery.browser.fullVersion=nAgt.substring(verOffset+8)):(nameOffset=nAgt.lastIndexOf(" ")+1)<(verOffset=nAgt.lastIndexOf("/"))&&(jQuery.browser.name=nAgt.substring(nameOffset,verOffset),jQuery.browser.fullVersion=nAgt.substring(verOffset+1),jQuery.browser.name.toLowerCase()==jQuery.browser.name.toUpperCase()&&(jQuery.browser.name=navigator.appName));-1!=(ix=jQuery.browser.fullVersion.indexOf(";"))&&(jQuery.browser.fullVersion=jQuery.browser.fullVersion.substring(0,ix)),-1!=(ix=jQuery.browser.fullVersion.indexOf(" "))&&(jQuery.browser.fullVersion=jQuery.browser.fullVersion.substring(0,ix)),jQuery.browser.majorVersion=parseInt(""+jQuery.browser.fullVersion,10),isNaN(jQuery.browser.majorVersion)&&(jQuery.browser.fullVersion=""+parseFloat(navigator.appVersion),jQuery.browser.majorVersion=parseInt(navigator.appVersion,10)),jQuery.browser.version=jQuery.browser.majorVersion,jQuery.browser.android=/Android/i.test(nAgt),jQuery.browser.blackberry=/BlackBerry|BB|PlayBook/i.test(nAgt),jQuery.browser.ios=/iPhone|iPad|iPod|webOS/i.test(nAgt),jQuery.browser.operaMobile=/Opera Mini/i.test(nAgt),jQuery.browser.windowsMobile=/IEMobile|Windows Phone/i.test(nAgt),jQuery.browser.kindle=/Kindle|Silk/i.test(nAgt),jQuery.browser.mobile=jQuery.browser.android||jQuery.browser.blackberry||jQuery.browser.ios||jQuery.browser.windowsMobile||jQuery.browser.operaMobile||jQuery.browser.kindle,jQuery.isMobile=jQuery.browser.mobile,jQuery.isTablet=jQuery.browser.mobile&&765<jQuery(window).width(),jQuery.isAndroidDefault=jQuery.browser.android&&!/chrome/i.test(nAgt),jQuery.mbBrowser=jQuery.browser,jQuery.browser.versionCompare=function(e,r){if("stringstring"!=typeof e+typeof r)return!1;for(var t=e.split("."),a=r.split("."),o=0,n=Math.max(t.length,a.length);o<n;o++){if(t[o]&&!a[o]&&0<parseInt(t[o])||parseInt(t[o])>parseInt(a[o]))return 1;if(a[o]&&!t[o]&&0<parseInt(a[o])||parseInt(t[o])<parseInt(a[o]))return-1}return 0},function(o){o.simpleSlider={defaults:{initialval:0,scale:100,orientation:"h",readonly:!1,callback:!1},events:{start:o.browser.mobile?"touchstart":"mousedown",end:o.browser.mobile?"touchend":"mouseup",move:o.browser.mobile?"touchmove":"mousemove"},init:function(a){return this.each(function(){var r=this,t=o(r);t.addClass("simpleSlider"),r.opt={},o.extend(r.opt,o.simpleSlider.defaults,a),o.extend(r.opt,t.data());var e="h"==r.opt.orientation?"horizontal":"vertical";e=o("<div/>").addClass("level").addClass(e),t.prepend(e),r.level=e,t.css({cursor:"default"}),"auto"==r.opt.scale&&(r.opt.scale=o(r).outerWidth()),t.updateSliderVal(),r.opt.readonly||(t.on(o.simpleSlider.events.start,function(e){o.browser.mobile&&(e=e.changedTouches[0]),r.canSlide=!0,t.updateSliderVal(e),"h"==r.opt.orientation?t.css({cursor:"col-resize"}):t.css({cursor:"row-resize"}),o.browser.mobile||(e.preventDefault(),e.stopPropagation())}),o(document).on(o.simpleSlider.events.move,function(e){o.browser.mobile&&(e=e.changedTouches[0]),r.canSlide&&(o(document).css({cursor:"default"}),t.updateSliderVal(e),o.browser.mobile||(e.preventDefault(),e.stopPropagation()))}).on(o.simpleSlider.events.end,function(){o(document).css({cursor:"auto"}),r.canSlide=!1,t.css({cursor:"auto"})}))})},updateSliderVal:function(e){var r=this.get(0);if(r.opt){r.opt.initialval="number"==typeof r.opt.initialval?r.opt.initialval:r.opt.initialval(r);var t=o(r).outerWidth(),a=o(r).outerHeight();r.x="object"==typeof e?e.clientX+document.body.scrollLeft-this.offset().left:"number"==typeof e?e*t/r.opt.scale:r.opt.initialval*t/r.opt.scale,r.y="object"==typeof e?e.clientY+document.body.scrollTop-this.offset().top:"number"==typeof e?(r.opt.scale-r.opt.initialval-e)*a/r.opt.scale:r.opt.initialval*a/r.opt.scale,r.y=this.outerHeight()-r.y,r.scaleX=r.x*r.opt.scale/t,r.scaleY=r.y*r.opt.scale/a,r.outOfRangeX=r.scaleX>r.opt.scale?r.scaleX-r.opt.scale:r.scaleX<0?r.scaleX:0,r.outOfRangeY=r.scaleY>r.opt.scale?r.scaleY-r.opt.scale:r.scaleY<0?r.scaleY:0,r.outOfRange="h"==r.opt.orientation?r.outOfRangeX:r.outOfRangeY,r.value=void 0!==e?"h"==r.opt.orientation?r.x>=this.outerWidth()?r.opt.scale:r.x<=0?0:r.scaleX:r.y>=this.outerHeight()?r.opt.scale:r.y<=0?0:r.scaleY:"h"==r.opt.orientation?r.scaleX:r.scaleY,"h"==r.opt.orientation?r.level.width(Math.floor(100*r.x/t)+"%"):r.level.height(Math.floor(100*r.y/a)),"function"==typeof r.opt.callback&&r.opt.callback(r)}}},o.fn.simpleSlider=o.simpleSlider.init,o.fn.updateSliderVal=o.simpleSlider.updateSliderVal}(jQuery),function(r){r.mbCookie={set:function(e,r,t,a){"object"==typeof r&&(r=JSON.stringify(r)),a=a?"; domain="+a:"";var o=new Date,n="";0<t&&(o.setTime(o.getTime()+864e5*t),n="; expires="+o.toGMTString()),document.cookie=e+"="+r+n+"; path=/"+a},get:function(r){r+="=";for(var e=document.cookie.split(";"),t=0;t<e.length;t++){for(var a=e[t];" "==a.charAt(0);)a=a.substring(1,a.length);if(0==a.indexOf(r))try{return JSON.parse(a.substring(r.length,a.length))}catch(e){return a.substring(r.length,a.length)}}return null},remove:function(e){r.mbCookie.set(e,"",-1)}},r.mbStorage={set:function(e,r){"object"==typeof r&&(r=JSON.stringify(r)),localStorage.setItem(e,r)},get:function(r){if(!localStorage[r])return null;try{return JSON.parse(localStorage[r])}catch(e){return localStorage[r]}},remove:function(e){e?localStorage.removeItem(e):localStorage.clear()}}}(jQuery);

;(function ($) {

    var console = window.console && window.SF_DEBUG ? window.console : {
        log: function () {
        }
    }
    var lh = location.href.replace(/\#.+/, '');

    var triggered = false;

    var set = function (obj, prop, val) {
        Object.defineProperty(obj, prop, {
            value: val
        })
        return val;
    };

    $.fn.hasClasses = function (e) {
        var classes = e.replace(/\s/g, "").split(","),
            t = this;
        for (var i in classes) {
            if ($(t).hasClass(classes[i])) return true;
        }
        return false
    }

    $.fn.addClasses = function (e) {
        var classes = e.replace(/\s/g, "").split(","),
            t = this;
        for (var i in classes) $(t).addClass(classes[i]);
        return this;
    };


    $( document ).one('sfm_doc_body_arrived ready', function () {

        if ( triggered ) return;
        else triggered = true;

        renderMenu();

    });

    // WP customizer preview
    $( document ).on('sfm_preview_full_refresh', function ( event, menuSavedState, savedScrollTop, $defmenu ) {

        var opts = window.SF_Opts;

        renderMenu( $defmenu );

        if ( menuSavedState && menuSavedState === 'open' ) {

            window.LM.showSidebar();

            // scroll to saved state
            if ( savedScrollTop ) $('.sfm-scroll-main .sfm-scroll').scrollTop( savedScrollTop );

            if ( opts.sidebar_behaviour !== 'always' && opts.sidebar_style !== 'full' ) {
                $('#sfm-sidebar').trigger( window.transitionEnd ); // to re-attach itemEventHandler for side panels
            }
        }

    });

    function renderMenu ( $defmenu ) {

        var $win = $( window );
        var $html = $( 'html' );
        var $body = $( 'body' );
        var originalWrite = document.write;
        var opts = window.SF_Opts;
        if ( !$defmenu ) {
            $defmenu = opts.alt_menu ? $( opts.alt_menu) : $('#sfm-nav');
        }

        document.write = function () {
            console.log('Superfly plugin debug: using document.write is bad practice and not supported')
        };

        $body.prepend( window.SFM_template );
        // customizer
        // $('#sfm-nav').removeAttr('data-customize-partial-id data-customize-partial-type data-customize-partial-placement-context')

        document.write = originalWrite;

        var execFunc = opts.alt_menu ? $ : setTimeout;

        execFunc( function () {

            var LM = ( function () {

                var isMobile = window.SFM_is_mobile;
                var clickTapEvent = ( isMobile ? ( $.mobile  ? 'vclick' : 'tap') : 'click' );

                var eventCancelTimeout, TIMEOUT_CONST = opts.eventsInterval || 51;

                var $rollback = $('.sfm-rollback');
                var $sidebar = $('#sfm-sidebar');
                var $overlay = $('#sfm-overlay-wrapper');
                var $socialbar = $('.sfm-social', $sidebar);
                var $custom = $('.sfm-view-level-custom'), customOpened = false;
                var $cont;
                var $head = $('.sfm-logo');
                var sums = [];
                sums.push(parseInt(opts.width_panel_1));
                sums.push(sums[0] + parseInt(opts.width_panel_2));
                sums.push(sums[1] + parseInt(opts.width_panel_3));
                sums.push(sums[2] + parseInt(opts.width_panel_4));

                if (opts.alt_menu && $defmenu.length) {
                    $('#sfm-nav').detach();
                } else {
                    $defmenu = $('#sfm-nav');
                }

                opts.$defmenu = $defmenu;

                //
                if (SF_DEBUG) {
                    //$defmenu.find('a').attr('target', '_blank')
                }

                var direction = opts.sidebar_pos;
                var opposite = direction === 'left' ? 'right' : 'left';
                var pre = 'sfm';

                var isIE = /msie|trident.*rv\:11\./.test(navigator.userAgent.toLowerCase());
                var isFF = /firefox/.test(navigator.userAgent.toLowerCase());
                var transProp = getVendorPropertyName('transform');
                // var translation = _T.translate((direction === 'left' ? opts.width_panel_1 : -opts.width_panel_1), 0);
                // var defTranslationStr = _T.toString(_T.translate(0, 0));
                var htmlMargins = {
                    top: parseInt($html.css('marginTop')),
                    bottom: parseInt($html.css('marginBottom'))
                }

                var subOpeningEvent = 'mouseenter';

                var bbg = $body.css('backgroundImage');
                var bodyCss;
                var $bodybg;
                var $children;

                if ( opts.sidebar_behaviour === 'push') {

                    // todo check if this part is still needed
                    if ( bbg !== 'none' ) {

                        $body.prepend('<div id="sfm-body-bg"></div>');
                        $bodybg = $('#sfm-body-bg');

                        bodyCss = {
                            'backgroundColor': $body.css('backgroundColor'),
                            'backgroundImage': $body.css('backgroundImage'),
                            'backgroundAttachment': $body.css('backgroundAttachment'),
                            'backgroundSize': $body.css('backgroundSize'),
                            'backgroundPosition': $body.css('backgroundPosition'),
                            'backgroundRepeat': $body.css('backgroundRepeat'),
                            'backgroundOrigin': $body.css('backgroundOrigin'),
                            'backgroundClip': $body.css('backgroundClip')
                        };

                        if (bodyCss.backgroundColor.indexOf('(0, 0, 0, 0') + 1 || bodyCss.backgroundColor.indexOf('transparent') + 1) {
                            bodyCss.backgroundColor = '#fff';
                        }

                        $children = $body.children().not('#sfm-body-bg, #sfm-fixed-container, script, style');

                        if ( parseInt($children.first().css('marginTop')) || parseInt($children.last().css('marginBottom') )) {
                            $body.addClass('sfm-body-float');
                        }

                        if (bodyCss.backgroundAttachment === 'fixed') {
                            bodyCss.position = 'fixed';
                            bodyCss.backgroundAttachment = 'scroll';
                        }

                        $bodybg.css( bodyCss );
                        attachStyles('body > * {position: relative} body {overflow-x:hidden!important}');
                    }
                }

                var menuOpts = {
                    search: opts.search,
                    addHomeLink: opts.addHomeLink === 'yes',
                    addHomeText: opts.addHomeText || 'Home',
                    subMenuSupport: opts.subMenuSupport === 'yes' /*&& opts.sidebar_style !== 'full'*/,
                    subMenuSelector: opts.subMenuSelector,
                    activeClassSelector: opts.activeClassSelector || '',
                    allowedTags: 'DIV, NAV, UL, OL, LI, A, P, H1, H2, H3, H4, SPAN, STRONG',
                    transitionDuration: 300,
                    extra: opts.menuData
                }
                //console.log(menuOpts)

                var Menu = {
                    unique: 1,
                    build: function ( $defmenu ) {

                        var $newMenu;

                        $newMenu = $defmenu.clone().removeAttr( "id class" );
                        $newMenu = this.processDefMenu( $newMenu );
                        $defmenu.detach();

                        if ( menuOpts.addHomeLink ) {
                            $newMenu.prepend( '<li><a href="http://' + window.location.hostname + '">' + menuOpts.addHomeText + "</a></li>");
                        }

                        if ( $newMenu.prop("tagName") === 'UL' ) {
                            $newMenu.addClass( pre + "-menu-level-0" );
                        } else {
                            $newMenu.find( "ul" ).first().addClass( pre + "-menu-level-0" ).siblings( "ul" ).addClass( pre + "-menu-level-0" );
                        }

                        menuOpts.subMenuSelector && menuOpts.subMenuSupport ? this.buildSubMenus($newMenu) : this.removeSubMenus($newMenu);

                        $newMenu.find( 'a' ).each( function () {
                            var $t = $( this );
                            var $li = $t.parent();
                            if ( !$t.children( 'span' ).length ) $t.wrapInner( $('<span data-index="' + ( $li.index() + 1 ) + '"></span>') );
                            if ( !menuOpts.subMenuSupport ) return;

                            if ( $li.is('.sfm-has-child-menu') ) {
                                $t.append( '<ins class="sfm-sm-indicator"><i></i></ins>' )
                            }
                        });

                        if ( menuOpts.extra ) this.attachExtraTo( $newMenu.find("[class*=menu-item]") );

                        $newMenu.prependTo('.sfm-nav .sfm-va-middle').show();

                        if (menuOpts.search === 'yes') {
                            $('.sfm-va-middle').prepend('<form role="search" method="get" class="sfm-search-form" action="' + opts.siteBase + '"><input type="text" class="search-field" placeholder="" value="" name="s"><span></span><input type="submit" class="search-submit" value="Search"></form>');
                        }
                        $cont = $("." + pre + "-nav");

                        $newMenu.removeClass(pre + "-has-child-menu").addClass('sfm-menu');
                    },

                    processDefMenu: function ($menu) {

                        var activeClassSelector = menuOpts.activeClassSelector ? menuOpts.activeClassSelector : "";
                        var classes = menuOpts.subMenuSelector ? menuOpts.subMenuSelector : "";
                        var tags = menuOpts.allowedTags.replace(/\s/g, "").split(",");
                        var $items = $menu.find("[class*=menu-item]");

                        $menu.find('.skip-link, .menu-toggle, a[title*="Skip to content"]').remove();

                        $items.each(function () {
                            var id = this.id ? this.id.replace('menu-item-', '') : (this.className.match(/menu-item-(\d+):?\b/) ? this.className.match(/menu-item-(\d+):?\b/)[1] : '');
                            $(this).data('sfm-id', id);
                        })

                        $menu.find("*").each(function () {
                            var $t = $(this);
                            var tag = $t.prop('tagName');
                            var cls = $t.prop('className');

                            if (tags.indexOf(tag) === -1 || $.trim($t.text()) === "" || $t.is('.uber-close')) {
                                return $t.remove();
                            }

                            if ($t.hasClasses(classes)) {
                                $t.removeAttr("class id").addClass(classes.split(",").join(' '));

                            } else {
                                if ($t.hasClasses(activeClassSelector)) {
                                    $t.removeAttr("class id").addClass(pre + "-active-class");
                                } else {
                                    $t.removeAttr("class id");
                                }
                            }

                            $t.removeAttr("style");

                            if (tag === 'LI') {
                                $t.addClass('sfm-menu-item-' + $t.data('sfm-id')).attr('tabindex', '-1');
                            }

                        });
                        return $menu;
                    },

                    buildSubMenus: function ($menu) {
                        var children = menuOpts.subMenuSelector.replace(/\s/g, "").split(",");

                        for (var i = 0, len = children.length; i < len; i++) {
                            $menu.find("." + children[i]).each(function () {
                                var $t = $(this);
                                $t.removeAttr("id class")
                                    .addClass(pre + "-child-menu ")
                                    .parent()
                                    .addClass(pre + "-has-child-menu")
                            });
                        }

                        this.detectLevel($menu)
                    },

                    attachExtraTo: function ($items) {
                        var data;
                        var https = location.protocol === 'https:';

                        $items.each(function () {
                            var $t = $(this);
                            var id = $t.data('sfm-id');
                            var data;

                            if ( menuOpts.extra[id] ) {

                                data = deparam(menuOpts.extra[id]);

                                if ( data.hidemob && isMobile ) {
                                    $t.remove();
                                    return;
                                }

                                if ( data.img ) {
                                    if ( direction == 'right' && opts.sidebar_style == 'skew' ) {
                                        $t.find('> a').append('<img src="' + ( https ? data.img.replace('http:', 'https:') : data.img ) + '"/>')
                                    } else {
                                        $t.find('> a').prepend('<img src="' + ( https ? data.img.replace('http:', 'https:') : data.img ) + '"/>')
                                    }
                                } else if ( data.icon ) {
                                    var style = data.icon_color ? 'color: ' + data.icon_color + ';' : '';
                                    var icon = data.icon
                                    var set = LAIconManagerUtil.getSet(icon) ? LAIconManagerUtil.getSet(icon) : 'Font Awesome';
                                    if (set === '####') {
                                        icon = LAIconManagerUtil.getIcon(icon)
                                        if (direction == 'right' && opts.sidebar_style == 'skew') {
                                            $t.find('> a').append('<i style="background-image:url(' + icon + ')" class="la_icon la_icon_manager_custom">');
                                        } else {
                                            $t.find('> a').prepend('<i style="background-image:url(' + icon + ')" class="la_icon la_icon_manager_custom">');
                                        }
                                    } else {
                                        icon = icon.indexOf('fa-') !== -1 ? 'la' + md5('Font Awesome') + '-' + icon.substr(3) : LAIconManagerUtil.getIconClass(icon);
                                        if (direction == 'right' && opts.sidebar_style == 'skew') {
                                            $t.find('> a').append('<i style="' + style + '" class="la_icon ' + icon + '">');
                                        } else {
                                            $t.find('> a').prepend('<i style="' + style + '" class="la_icon ' + icon + '">');
                                        }
                                    }
                                };

                                if ( data.sline ) {
                                    $t.find('> a span').append('<br><i class="sfm-sl">' + data.sline.replace(/\+/g, ' ') + '</i>');
                                };

                                if ( data.chapter ) {
                                    $t.before('<li class="sfm-chapter"><div>' + data.chapter.replace(/\+/g, ' ') + '</div></li>')
                                };

                                if ( data.tabindex ) {
                                    $t.attr( 'tabindex', data.tabindex );
                                };

                                if ( data.content ) {
                                    if ( !$t.find(".sfm-sm-indicator").length && menuOpts.subMenuSupport ) {
                                        $t.addClass( pre + '-has-child-menu' );
                                        $t.find(' > a').append('<ins class="sfm-sm-indicator"><i></i></ins>');
                                    }
                                };

                                $t.data('sfm-extra', data);

                                if ( data.width ) {
                                    $t.attr('data-extra-width', data.width);
                                }

                                if ( data.bg ) {
                                    $t.attr('data-bg', data.bg);
                                }

                                $t.attr('data-sfm-id', id);

                            } else {
                                return
                            }

                        })

                    },

                    detectLevel: function ($menu) {
                        $menu.find("." + pre + "-child-menu").each(function () {
                            var $t = $(this);
                            var t = $t.parents("." + pre + "-child-menu").length + 1;
                            $t.addClass(pre + "-menu-level-" + t);

                            if (!$sidebar.find('.' + pre + '-view-level-' + t).length) $sidebar.append($('<div class="sfm-view ' + pre + '-view-level-' + t + '"></div>'))
                        })
                    },

                    removeSubMenus: function ($menu) {
                        if (!menuOpts.subMenuSupport) {

                            return $menu.children().each(function () {
                                $(this).find("ul").remove();
                            });
                        } else {
                            var o = menuOpts.subMenuSelector.replace(/\s/g, "").split(",");
                            for (var l in o) $menu.find("." + o[l]).each(function () {
                                $(this).remove()
                            })
                        }
                    },

                    toggleActiveClasses: function ($menu) {
                        $menu.find("." + pre + "-has-child-menu").each(function () {
                            var $t = $(this);
                            if ($t.find("*").children("." + pre + "-active-class").length > 0) {
                                $t.toggleClass(pre + "-child-menu-open");
                                setTimeout(function () {
                                    $t.addClass(pre + "-child-menu-open");
                                    $t.find("." + pre + "-child-menu").first().show()
                                }, menuOpts.transitionDuration);
                            }
                        })
                    }
                };

                var currLevel = 0;
                var cursor;
                var animTimer;
                var state = 'hidden';
                var collapsing = false;
                var events = 'off';
                var ww;
                var wh;
                var MAX_WIDTH = 0;
                var dragging = false;
                var sfmPlayer;

                function init( $defmenu ) {

                    Menu.build( $defmenu );

                    if ( !$sidebar.parent().is('body') ) {
                        $body.prepend($('#sfm-body-bg, .sfm-rollback, #sfm-sidebar, #sfm-mob-navbar, #sfm-overlay-wrapper'))
                    }

                    var viewsL = Math.min(1 + $sidebar.find('.sfm-view').length, 4);

                    if ( opts.sub_type === 'flyout' ) {
                        for (var i = 1; i <= viewsL; i++) {
                            MAX_WIDTH += parseInt(opts['width_panel_' + i]);
                        }
                    } else {
                        MAX_WIDTH += parseInt(opts['width_panel_1']);
                    }

                    if ( opts.sidebar_behaviour === 'always' ) {
                        $sidebar.on('mouseenter ' + clickTapEvent, '.sfm-menu li:not(.sfm-chapter)', itemEventHandler);
                    }
                    else if ( opts.sidebar_style === 'full' ) {
                        $sidebar.on(clickTapEvent, '.sfm-menu li:not(.sfm-chapter)', itemEventHandler);
                    }
                    else {
                        $sidebar.addClass( 'sfm-fully-hidden');
                        $sidebar.bind( window.transitionEnd, function (e) {

                            if (!$(e.target).is($sidebar)) return;

                            if ( $sidebar.is('.sfm-sidebar-exposed') && events === 'off') {

                                $sidebar.on('mouseenter ' + clickTapEvent, '.sfm-menu li:not(.sfm-chapter)', itemEventHandler);

                                events = 'on';

                            } else if ( !$sidebar.is('.sfm-sidebar-exposed') ) {

                                $sidebar.off( 'mouseenter ' + clickTapEvent, '.sfm-menu-level-0 > li, .sfm-view ul > li' ).addClass( 'sfm-fully-hidden' );
                                events = 'off';
                                $overlay.css( 'visibility', 'hidden' );

                                if ( opts.sidebar_behaviour === 'push' ) {

                                    //setTimeout(function(){
                                    var $fixed = $('.sfm-inner-fixed')
                                    if (!isIE) $fixed.each(unshiftFixed);
                                    $fixed.removeClass('sfm-inner-fixed');
                                    //}, 0)
                                }
                            }
                        });
                    }

                    // accessibility events
                    $sidebar.on( 'keyup', 'a', function ( e ) {
                        if ( e.keyCode == 13 ) {
                            // Do something
                            itemEventHandler( e );
                        }
                    } );

                    $body.on( 'keyup', function ( e ) {
                        if ( state === 'open' && e.keyCode == 27 ) {
                            // Do something
                            hideSidebar();
                        }
                    } );


                    // back to previous level
                    // if ( opts.sub_type === 'swipe' ) {
                    $sidebar.on( clickTapEvent, '.sfm-back-parent', backToParentView );
                    // }

                    $('.sfm-view').mouseenter(function () {
                        clearTimeout( animTimer );
                    });

                    // state management
                    $custom.on( (opts.sub_opening_type === 'hover' /*&& !isMobile*/ && opts.sub_type !== 'dropdown') ? 'mouseenter' : clickTapEvent, function () {
                        cursor = this;
                    });

                    if ( opts.opening_type === 'hover' /*&& !isMobile*/ /*&& opts.sidebar_behaviour !== 'always'*/ ) {

                        if (opts.sidebar_behaviour !== 'always') {
                            $rollback.mouseenter(function (e) {
                                if (!$(e.relatedTarget).is('.sfm-sidebar-close')) {
                                    showSidebar()
                                }
                            });
                        }

                        $sidebar.mouseleave(function (e) {
                            setTimeout(function () {
                                hideSidebar()
                            }, 14)
                        });

                    } else if ( opts.opening_type === 'click' /*|| isMobile */|| opts.sub_type === 'dropdown' ) {

                        if ( opts.sub_opening_type === 'hover' ) {
                            $sidebar.mouseleave( function (e) {
                                setTimeout(function () {
                                    $body.removeClass('sfm-view-pushed-custom sfm-view-pushed-1 sfm-view-pushed-2 sfm-view-pushed-3');
                                    hideCustom(true);
                                    $sidebar.find('.sfm-active-item').removeClass('sfm-active-item');
                                    if (opts.sidebar_behaviour === 'always') {
                                        setTimeout(function () {
                                            $overlay.css('visibility', 'hidden')
                                        }, 400);
                                    }
                                }, 250)
                            });
                        }
                    }

                    $('#sfm-overlay').on( clickTapEvent, hideSidebar );


                    // these events should be attached only once
                    if ( opts.togglers && !LM.run ) {
                        /*
                         var $togglers = $body.find(opts.togglers);
                         if ($togglers) {

                         }
                         */
                        $body.on( clickTapEvent , opts.togglers, function (e) {

                            // preventing immediate double tap events occurring in some themes
                            if ( eventCancelTimeout ) {
                                return;
                            } else {
                                eventCancelTimeout = setTimeout(function () {
                                    eventCancelTimeout = null
                                }, TIMEOUT_CONST)
                            }

                            e.preventDefault();
                            e.stopImmediatePropagation();
                            state === 'hidden' ? showSidebar() : hideSidebar();
                            return false;
                        });
                    }

                    $sidebar.on('click', '.sfm-menu a', function (e) {
                        console.log('preventing');
                        e.preventDefault();
                    });

                    // these events should be attached only once
                    if ( !LM.run ) $win.on('resize orientationchange', setSize);

                    $sidebar.on("touchmove", function () {
                        dragging = true;
                    });

                    $sidebar.on("touchend", function () {
                        dragging = false;
                    });

                    $rollback.find('.sfm-navicon-button').add('#sfm-mob-navbar .sfm-navicon-button, .sfm-sidebar-close').on( clickTapEvent + ' keypress', function (e) {
                        //e.stopImmediatePropagation();

                        // preventing immediate double tap events occurring in some themes
                        if (eventCancelTimeout) {
                            return;
                        } else {
                            eventCancelTimeout = setTimeout(function () {
                                eventCancelTimeout = null;
                            }, TIMEOUT_CONST)
                        }

                        if ( e.type !== clickTapEvent ) {
                            if ( e.which != 13 ) { // enter
                                return
                            }
                        }

                        if ( state === 'hidden' ) {
                            showSidebar();
                            $( this ).addClass("sfm-open");
                        } else {
                            hideSidebar();
                            $( this ).removeClass("sfm-open");
                        }

                        return false;
                    });

                    // propagate
                    $('#sfm-sidebar .sfm-search-form span').on( clickTapEvent, function () {
                        $( this ).closest('form').submit()
                    })

                    if ( isMobile ) {
                        // todo check if still needed
                        if (/iPad|iPhone/.test(navigator.userAgent)) {
                            $sidebar.on('focus', 'input', function (e) {
                                $body.css('overflowX', 'visible');
                                $sidebar.css({'position': 'absolute', top: '-62px'})
                                $(document).scrollTop(0);

                            }).on('blur', 'input', function () {
                                $sidebar.css('position', '');
                                $body.css('overflowX', 'hidden');
                            });
                        }
                        attachSwipesHandler();
                    }

                    populateSocialBarWith( opts.social );

                    // 5.0, wrap for boxes
                    if ( opts.sidebar_style === 'full' ) {
                        $sidebar.find('.sfm-social, .sfm-copy').wrapAll( "<div class='sfm-fs-bottom-box'></div>" );
                    }

                    var behaviour = opts.sidebar_style == 'full' ? 'full' : opts.sidebar_behaviour;

                    var bodyClasses = 'superfly-on sfm-style-' + opts.sidebar_style + ' sfm-sidebar-' + behaviour + ' sfm-toggle-' + opts.opening_type + (opts.blur === 'yes' ? ' sfm-blur' : '');
                    if ( opts.sidebar_style == 'side' ) bodyClasses += ' sfm-sub-' + opts.sub_type  + ' sfm-sub-mob-' + opts.sub_mob_type
                    $body.addClass( bodyClasses );

                    if ( !LM.run ) {
                        $( document ).ajaxComplete(function() {
                            setTimeout(function(){
                                if(!$body.is('.superfly-on')) {
                                    $body.addClass( bodyClasses) ;
                                }
                            }, 0);
                        });
                    }

                    setTimeout(function () {

                        if ( opts.sidebar_behaviour === 'always' ) {
                            setTimeout( function () {
                                setSize();
                                $sidebar.css('opacity', '1');
                            }, 300);
                        } else {
                            $sidebar.css('opacity', '1');

                            setTimeout( function () {
                                $sidebar.addClass('sfm-transitions-enabled');
                            }, 300);
                        }
                    }, 0);

                    if ( opts.test_mode === 'yes' ) {
                        $sidebar.addClass( 'sfm-test-mode' );
                    }

                    $('.sfm-close').bind( clickTapEvent, function () {
                        $custom.removeClass('sfm-modal');
                        var css = {'opacity': '', 'visibility': ''};
                        $custom.css(css);
                        $custom.find('.sfm-active').removeClass('sfm-active');
                    })

                    // fix for CF7
                    $( function(){

                        setTimeout(function(){

                            var $cf7form = $('#sfm-sidebar .wpcf7 form');
                            if ( !$cf7form.length ) return;
                            $cf7form.each( function() {
                                var $form = $( this );
                                if ( window.wpcf7 ) window.wpcf7.initForm( $form );

                                if ( window.wpcf7 && window.wpcf7.cached ) {
                                    window.wpcf7.refill( $form );
                                }
                            } );

                        },0)
                    });

                    // fix for comments in customizer


                    // video init

                    if ( !LM.run ) {

                        $( document ).on( 'sfm-video-player-ready', function () {
                            // stop loading animation
                            console.log(' SF video ready ')

                        })

                        $( document ).on( 'sfm-video-player-error', function () {

                        })
                    }

                    if ( opts.video_bg && ( opts.video_preload === 'yes'  || opts.sidebar_behaviour === 'always') ) {

                        if ( isMobile && opts.video_mob === 'yes' ) {

                            // disabled on mobiles

                        } else {

                            sfmPlayer = $(".sfm-video").YTPlayer();

                            if ( opts.sidebar_behaviour === 'always' ) {

                                sfmPlayer.YTPPlay();

                            }
                        }

                    }

                    // LM.init = function () {};
                    LM.run = true;

                    return this;
                }

                function hideCustom ( reset ) {
                    if ( customOpened ) {
                        var css = { 'opacity': '', 'visibility': '', transProp: '' };
                        if ( reset ) {
                            // css[ transProp ] = defTranslationStr;
                            css[ 'width' ] = '';
                        }
                        else {
                            // css[ transProp ] = $custom.data( 'startPos' ) || defTranslationStr;
                        }
                        $custom.css( css )//.data('startPos', '')
                            .removeClass( function( index, cls ) {
                                var match = cls.match( /sfm-custom-active-\d+/ );
                                return match ? match[0] : false;
                            });
                        $custom.find('.sfm-active').removeClass('sfm-active');
                    }
                }

                function setupFont() {
                    var wh = window.innerHeight || document.documentElement.offsetHeight || document.documentElement.clientHeight;
                    var th = wh - $('.sfm-logo').outerHeight() - $('.sfm-social').outerHeight() - 60;
                    var th = wh - ($('.sfm-logo img').length ? 80 : 0 ) - ($('.sfm-social').children().length ? 85 : 0 ) - 30;
                    var $links = $sidebar.find('.sfm-nav .sfm-menu li > a');
                    var num = $links.length;
                    var space = th / num;
                    var line = Math.min(space - opts.item_padding * 2, isMobile ? 45 : 65);
                    $links.css({'fontSize': line, 'lineHeight': space - opts.item_padding + 'px'})
                    //$links.css('lineHeight', space + 'px')
                    //console.log('line', th, space, space - opts.item_padding * 2, line)
                }

                function showSidebar() {
                    var $children;
                    var scrollTop, scrollLeft;
                    if (state !== 'hidden') return;

                    clearTimeout(animTimer);
                    setSize();

                    $sidebar.addClass('sfm-sidebar-exposed');
                    $rollback.find('.sfm-navicon-button').add('#sfm-mob-navbar .sfm-navicon-button').addClass('sfm-open');
                    $overlay.css('visibility', 'visible');

                    $body.addClass('sfm-body-pushed');

                    if ( opts.sidebar_style !== 'full' && opts.sidebar_behaviour !== 'always' ){
                        $sidebar.removeClass('sfm-fully-hidden');
                    }

                    if ( opts.sidebar_behaviour === 'push' && opts.sidebar_style != 'full' ) {

                        $children = $body.children().not('[id*=sfm-], script, style');

                        scrollTop = $win.scrollTop();
                        scrollLeft = $win.scrollLeft();

                        $children.find('*').each(function (i, el) {
                            findAndShiftFixed(i, el, scrollTop, scrollLeft)
                        });

                    } else if ( opts.sidebar_style === 'full' ) {

                        setTimeout( function () {

                            $body.addClass( 'sfm-ui-shown' );

                        }, 350);

                    }

                    // video

                    if ( isMobile && opts.video_mob === 'yes' ) {

                        // disabled on mobiles

                    } else {

                        if ( opts.video_bg && opts.video_preload !== 'yes' ) {
                            if ( sfmPlayer && sfmPlayer.YTPGetPlayer() ) {
                                sfmPlayer.YTPPlay();
                            } else {
                                sfmPlayer = $(".sfm-video").YTPlayer();
                                window.sfmPlayer = sfmPlayer;
                            }

                        } else {
                            if ( sfmPlayer ) sfmPlayer.YTPPlay();
                        }

                    }

                    $sidebar.removeAttr( 'aria-hidden' );

                    state = 'open';

                    return false;
                }

                function hideSidebar() {

                    var classes = 'sfm-body-pushed sfm-view-pushed-custom';
                    clearTimeout( animTimer );
                    collapsing = true;

                    /*if ( isIE && (opts.sidebar_behaviour === 'push') ) {
                        $('.sfm-inner-fixed').each(unshiftFixed);
                    }*/

                    if ( opts.sidebar_behaviour === 'always' || opts.sidebar_style === 'full' ) {
                        setTimeout(function () {
                            $overlay.css('visibility', 'hidden')
                        }, 800);
                    }

                    $sidebar.find('.sfm-active-item').removeClass('sfm-active-item');

                    hideCustom(true);

                    if ( opts.sub_type !== 'swipe' ) {
                        classes += ' sfm-view-pushed-1 sfm-view-pushed-2 sfm-view-pushed-3 sfm-view-pushed-4 ';
                    }

                    $body.removeClass( classes );
                    $sidebar.removeClass( 'sfm-sidebar-exposed' )
                    $rollback.find('.sfm-navicon-button').add('#sfm-mob-navbar .sfm-navicon-button').removeClass('sfm-open');

                    $sidebar.attr( 'aria-hidden', 'true');

                    state = 'hidden';

                    currLevel = 0;

                    if ( sfmPlayer ) sfmPlayer.YTPPause();

                    setTimeout( function () {
                        collapsing = false;

                        if ( opts.sub_type === 'swipe' ) {
                            $body.removeClass( 'sfm-view-pushed-1 sfm-view-pushed-2 sfm-view-pushed-3 sfm-view-pushed-4' );
                        }

                    }, 250)

                    setTimeout( function () {

                        if ( opts.sidebar_style === 'full' ) {
                            $body.removeClass( 'sfm-ui-shown' );
                        }

                    }, 400)
                }

                function itemEventHandler (e) {

                    // preventing immediate double tap events occurring in some themes
                    if (eventCancelTimeout) {
                        return;
                    } else {
                        eventCancelTimeout = setTimeout(function () {
                            eventCancelTimeout = null
                        }, TIMEOUT_CONST)
                    }
                    e.stopImmediatePropagation();

                    var $t = $(this);
                    var $tar;
                    var _cursor, timer;

                    function goToLink() {

                        var $a = $t.find('a');
                        var hr = $a.prop('href');
                        var blank = $a.attr('target') === '_blank';
                        var hash = $a.prop('hash');
                        var smooth = hash && hash.length > 0 && hr == lh + hash, scrollTop, $el;
                        if (smooth) {
                            hideSidebar();
                            /*if (opts.sidebar_style === 'static') {
                             $sidebar.find('.sfm-active-smooth').removeClass('sfm-active-smooth');
                             $t.addClass('sfm-active-smooth');
                             }*/
                            if (hash !== '#') {
                                $el = $(hash);
                                if (!$el.length) {
                                    $el = $('[name="' + hash.replace('#', '') + '"]');
                                }
                            }
                            scrollTop = $el && $el.length ? $el.offset().top : 0;
                            $('html, body').stop().animate({
                                scrollTop: scrollTop
                            }, 600);
                        }
                        else if (blank) {
                            window.open(hr, '_blank');
                        } else {
                            //hideSidebar();
                            if (opts.fade === 'yes') {
                                if (hr.indexOf('#') !== -1 && hash === '') {
                                    return
                                }
                                $body.fadeOut(200, function () {
                                    hideSidebar();
                                    location.href = hr
                                });
                            } else {
                                hideSidebar();
                                location.href = hr
                            }
                        }
                    }

                    if ( e.type === clickTapEvent ) { // click event

                        $tar = $(e.target);
                        if ( ( opts.parent_ignore === 'yes' && $t.is('.sfm-has-child-menu ') ) || $tar.closest( '.sfm-sm-indicator').length ) {
                            e.preventDefault();
                            eventFor($t, e);
                        } else {
                            goToLink();
                        }

                    }
                    else { // mouseenter
                        _cursor = this;

                        if ( subOpeningEvent === 'mouseenter') {
                            timer = setTimeout(function () {
                                if (_cursor === cursor) {
                                    eventFor($t, e);
                                }
                            }, 52);
                        } else {
                            // ignore hover if submenus set to be opened on click
                        }

                        cursor = this;
                    }


                    //e.stopImmediatePropagation();
                    //return false
                }

                function eventFor ( $t, e ) {

                    if ( dragging || collapsing ) {
                        return;
                    }
                    console.log('event for')

                    clearTimeout(animTimer);

                    var openingLevel = parseInt(( $t.closest('ul').attr('class') || '0' ).match(/\d/)[0]) + 1;
                    var $sub, $et;
                    var $sibs = $t.siblings('.sfm-active-item'), css;
                    var $a = $t.find('a');
                    var hr, blank, hash, smooth, scrollTop;
                    var _ww = ww;
                    var _wh = wh;
                    var backHTML = '', $link;
                    var startPos, customWidth, calcWidth, customBg, $currCont, classes;

                    var customID, allowedWidth;

                    hideCustom(openingLevel <= currLevel);

                    $sibs.removeClass('sfm-active-item');

                    if ( $t.is('.sfm-has-child-menu') ) {
                        //console.log('child menu item');
                        $sub = $t.children('.sfm-child-menu').first();

                        // if ( opts.sub_type === 'swipe' ) {
                        $link = $a.eq(0).find('span').clone();
                        $link.find('i').remove();
                        backHTML += '<a href="#" class="sfm-back-parent"><ins class="sfm-sm-indicator"><i></i></ins><span>' + $link.text() + '</span></a>';
                        // }

                        if ( $sub.length ) {

                            if ( MAX_WIDTH < _ww && /*!isMobile &&*/ opts.sub_type !== 'dropdown' && opts.sidebar_style !== 'full' ) {

                                // hiding only next levels relative to clicked
                                $body.removeClass( 'sfm-view-pushed-custom sfm-nav-back sfm-view-pushed-' + openingLevel + ' sfm-view-pushed-' + (openingLevel + 1) + ' sfm-view-pushed-' + (openingLevel + 2) );

                                if ( !$sidebar.is('.sfm-sidebar-exposed' ) && opts.sidebar_behaviour !== 'always' ) return;

                                $( '.sfm-view-level-' + openingLevel ).attr('class',
                                    function (i, c) {
                                        return c.replace(/(^|\s)sfm-current-\S+/g, '');
                                    }).html( '<div class="sfm-scroll-wrapper"><div class="sfm-scroll">' + backHTML + '<ul class="sfm-menu-level-' + openingLevel + ' sfm-menu">' + $sub.html() + '</ul></div></div>' ).addClass('sfm-current-' + $t.data('sfmId'));

                                animTimer = setTimeout(function () {
                                    $body.addClass('sfm-view-pushed-' + openingLevel + ( openingLevel <= currLevel ? ' sfm-nav-back' : '') );
                                    if (opts.sidebar_behaviour === 'always') $overlay.css('visibility', 'visible');
                                    currLevel = openingLevel;
                                }, 25);

                                $t.addClass('sfm-active-item');

                            } else {

                                // fallback to dropdown for flyouts

                                $et = $( e.target );
                                hr = $a.attr('href');
                                var hash = $a.prop( 'hash' );
                                if ( opts.parent_ignore === 'yes' || $et.closest('.sfm-sm-indicator').length || hash === '#' || hr === '#' || hr === '/' ) {

                                    if ( !$t.is( '.sfm-submenu-visible' ) ) {
                                        console.log('sub', $sub)
                                        $t.siblings().filter('.sfm-submenu-visible').removeClass('sfm-submenu-visible').find('> ul').slideUp();
                                        $t.addClass('sfm-submenu-visible');
                                        $sub.slideDown(
                                            { start: function () {
                                                    setSize( e, 'contentChanged');
                                                }
                                            });
                                    } else {
                                        if ( $a.length && e.type === clickTapEvent ) {
                                            $t.removeClass( 'sfm-submenu-visible' );
                                            $sub.slideUp(
                                                { complete: function () {
                                                        setSize(e, 'contentChanged');
                                                        // reset focus
                                                        if ( document.activeElement ) document.activeElement.blur();
                                                    }
                                                });
                                        }
                                    }
                                }
                            }
                        } else {

                            // Custom content

                            customWidth = $t.attr('data-extra-width') ;
                            customBg = $t.attr('data-bg') || '';
                            // apply custom width (if any) only for flyout panels, otherwise assign width of sidebar
                            calcWidth = opts.sub_type === 'flyout' ? parseInt( customWidth || opts[ 'width_panel_' + ( openingLevel + 1 ) ] ) : opts['width_panel_1'];

                            customID = $t.attr('data-sfm-id');
                            allowedWidth = opts.sub_type === 'flyout' ? sums[ openingLevel - 1 ] + calcWidth : opts['width_panel_1'];

                            // if enough space for flyout and not fullscreen, otherwise popup
                            // swipe custom content for dropdown layout
                            if ( allowedWidth < _ww && opts.sidebar_style !== 'full' ) {

                                // flyout panels
                                $currCont = $custom.find('#sfm-cc-' + $t.attr('data-sfm-id'));

                                $sibs.removeClass( 'sfm-active-item' );
                                $body.removeClass( 'sfm-view-pushed-custom sfm-nav-back sfm-view-pushed-' + openingLevel + ' sfm-view-pushed-' + (openingLevel + 1) + ' sfm-view-pushed-' + (openingLevel + 2) )
                                    .addClass('sfm-view-pushed-custom' + ( openingLevel <= currLevel ? ' sfm-nav-back' : ''));

                                if ( !$sidebar.is('.sfm-sidebar-exposed') && opts.sidebar_behaviour !== 'always' ) {
                                    return;
                                }

                                if ( opts.sidebar_behaviour === 'always' ) {
                                    $overlay.css('visibility', 'visible');
                                }

                                $t.addClass( 'sfm-active-item' );

                                css = {
                                    'backgroundColor': customBg,
                                    'width': calcWidth
                                };

                                $custom.css( css ).addClass( 'sfm-custom-active-' + customID );

                                // remove back links
                                $custom.find( '.sfm-back-parent' ).remove();
                                $custom.prepend( $( backHTML ) );

                                $custom.find( '.sfm-active' ).removeClass( 'sfm-active' );

                                $currCont.width( calcWidth );

                                if ( _wh > $currCont.outerHeight() ) {

                                    $currCont.addClass('sfm-vert-align sfm-active');

                                } else {

                                    $currCont.removeClass('sfm-vert-align').addClass('sfm-active');

                                }

                                setTimeout(function(){
                                    // debugger
                                    console.log('custom content')
                                }, 600)
                                customOpened = true;

                            } else {
                                // open modal for custom content
                                $et = $(e.target);

                                if ( opts.parent_ignore === 'yes' || $et.closest('.sfm-sm-indicator').length /*|| isMobile*/ || opts.sub_type === 'dropdown' ) {
                                    if ( !$t.is( '.sfm-submenu-visible' ) ) {
                                        customBg = $t.attr( 'data-bg' );
                                        $t.siblings().filter( '.sfm-submenu-visible' ).removeClass( 'sfm-submenu-visible' ).find( '> ul' ).slideUp()

                                        $custom.addClass( 'sfm-modal' );
                                        css = {
                                            'opacity': 1,
                                            'visibility': 'visible',
                                            'backgroundColor': customBg/*,
                                            'width': _ww*/
                                        };
                                        $custom.find( '.sfm-active' ).removeClass( 'sfm-active' );
                                        $custom.find( '#sfm-cc-' + $t.attr( 'data-sfm-id' ) ).addClass( 'sfm-active' );
                                        $custom.css( css );
                                    }
                                }
                            }
                        }

                    } else {

                        if (MAX_WIDTH < _ww + 200) {
                            //console.log('siblings', $t.siblings('.sfm-active-item').length)
                            $t.siblings('.sfm-active-item').removeClass('sfm-active-item');

                            animTimer = setTimeout(function () {
                                $body.removeClass( 'sfm-view-pushed-custom sfm-view-pushed-' + openingLevel + ' sfm-view-pushed-' + (openingLevel + 1) + ' sfm-view-pushed-' + (openingLevel + 2) );
                            }, 50);
                        }

                    }

                }

                function backToParentView ( e ) {
                    // preventing immediate double tap events occurring in some themes
                    if (eventCancelTimeout) {
                        return;
                    } else {
                        eventCancelTimeout = setTimeout(function () {
                            eventCancelTimeout = null
                        }, TIMEOUT_CONST)
                    }
                    e.stopImmediatePropagation();
                    e.preventDefault();

                    var $t = $(this);
                    var level = parseInt(( $t.siblings('ul').attr('class') || '0' ).match(/\d/)[0]);

                    // back level up
                    $body.removeClass('sfm-view-pushed-' + level + ' sfm-view-pushed-custom');

                    $sidebar.find( '.sfm-active-item' ).removeClass( 'sfm-active-item' );
                    currLevel = level - 1;
                }

                function setSize( e, contentChanged ) {

                    // update globals
                    wh = document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight : ( window.innerHeight ? window.innerHeight : $win.height() );
                    ww = document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth : ( window.innerWidth ? window.innerWidth : $win.width() );

                    var margin = parseInt( opts.item_padding ) * 2;

                    // caching
                    setSize.cache = setSize.cache || {
                        headerHeight: $head.is(':empty') ? 0 : $head.outerHeight() + 70 + margin,
                        footerHeight: ( $socialbar.is(':empty') ? 0 : $socialbar.outerHeight() ) + $sidebar.find('.sfm-copy').outerHeight(),
                        contentHeight: $cont.find('.sfm-menu').outerHeight() + $cont.find('.sfm-search-form').outerHeight() + $cont.find('.sfm-widget-area').outerHeight()
                    };

                    if ( contentChanged ) setSize.cache.contentHeight = $cont.find('.sfm-menu').outerHeight() + $cont.find('.sfm-search-form').outerHeight();

                    var contentHeight = setSize.cache.contentHeight;
                    var headerHeight = setSize.cache.headerHeight;
                    var footerHeight = setSize.cache.footerHeight;
                    var availableSpace = ( wh - contentHeight );
                    var classesToAdd = '';
                    var classesToRemove = '';
                    // console.log('availableSpace', wh, contentHeight , availableSpace)

                    if ( availableSpace < ( headerHeight + footerHeight + margin ) /*|| isMobile*/ || opts.sub_type === 'dropdown' ) {

                        if ( opts.sidebar_style !== 'full' ) {

                            classesToAdd = 'sfm-compact';

                            // available space is two halfs, top half for header and bottom half for footer

                            if ( availableSpace < headerHeight + footerHeight ) {

                                classesToAdd += ' sfm-compact-header sfm-compact-footer';

                            } else {

                                classesToRemove += ' sfm-compact-header sfm-compact-footer';

                            }

                        }
                    } else {

                        classesToRemove = 'sfm-compact sfm-compact-header sfm-compact-footer';

                    }

                    if ( MAX_WIDTH > ww /*|| isMobile*/ || opts.sub_type === 'dropdown' || opts.sidebar_style === 'full' ) {

                        classesToAdd += ' sfm-vertical-nav';
                        subOpeningEvent = clickTapEvent;

                    } else {

                        classesToRemove += ' sfm-vertical-nav';

                        if (opts.sub_opening_type === 'hover') {

                            subOpeningEvent = 'mouseenter';

                        } else {

                            subOpeningEvent = clickTapEvent;

                        }
                    }

                    if ( classesToRemove ) $sidebar.removeClass( classesToRemove );
                    if ( classesToAdd ) $sidebar.addClass( classesToAdd );

                    // deprecated
                    // opts.sidebar_style === 'full' && opts.dynamic == 'yes' && setupFont( wh );
                }

                function findAndShiftFixed( i, el, scrollTop, scrollLeft, bh, wh ) {

                    var $t = $(el);
                    var $offsetP;
                    var t;
                    var nu;
                    var offset;
                    var oLeft;
                    var oTop;
                    var coords;
                    var newCSS;
                    var _b;
                    var transf;

                    if ( $t.css('position') === 'fixed' ) {

                        $t.addClass('sfm-inner-fixed');

                        /*if (isIE) {

                            t = $t.css(transProp);

                            if (t !== 'none') {
                                $t.data('sfm-old-matrix', t);
                                t = _T.fromString(t);
                                nu = t.x(translation); // add translation
                                $t.css(transProp, _T.toString( nu )).data('sfm-transformed', 1);
                            } else {
                                $t.css(transProp, _T.toString( translation )/!*, transition: trans + 'transform 0.5s cubic-bezier(0.645, 0.045, 0.355, 1)', transitionDelay: '90ms'*!/).data('sfm-transformed', 1);
                            }

                        } else { */

                        $offsetP = $t;

                        while ($offsetP = $offsetP.parent()) {
                            transf = $offsetP.css('webkitTransform');
                            if ((transf && transf !== 'none') || $offsetP.is('body')) {
                                break
                            }
                        }

                        //console.log('offset parent' , $offsetP[0])

                        offset = $offsetP.offset();
                        oLeft = offset.left;
                        oTop = offset.top;
                        //if (oTop === htmlMargins.top) oTop = 0;

                        if (isFF && $t.is(':visible')) {
                            $t.hide().data('sfm-ff-hidden', 1);
                        }

                        coords = {
                            left: $t.css('left'),
                            right: $t.css('right'),
                            top: $t.css('top'),
                            bottom: $t.css('bottom')
                        }

                        if (isFF && $t.data('sfm-ff-hidden')) $t.show();

                        newCSS = {};
                        _b = parseInt(coords.bottom);
                        _b = isNaN(_b) ? 0 : _b;

                        if (coords.left !== 'auto') {
                            coords.toChangeHor = 'left';
                            newCSS[coords.toChangeHor] = '-=' + (oLeft - scrollLeft);
                        } else if (coords.right !== 'auto') {
                            coords.toChangeHor = 'right';
                            newCSS[coords.toChangeHor] = '-=' + (oLeft - scrollLeft);
                        } else {
                            coords.toChangeHor = 'left'
                        }

                        if (coords.top !== 'auto') {
                            coords.toChangeVert = 'top';
                            newCSS[coords.toChangeVert] = oTop - scrollTop > 0 ? parseInt(coords.top) - (oTop - scrollTop) : parseInt(coords.top) + (scrollTop - oTop);
                        } else if (coords.bottom !== 'auto') {
                            coords.toChangeVert = 'bottom';
                            newCSS[coords.toChangeVert] = $body.height() + htmlMargins.top + htmlMargins.bottom + _b - $win.height() - scrollTop + 'px';
                        } else {
                            coords.toChangeVert = 'top';
                            newCSS[coords.toChangeVert] = scrollTop;
                        }

                        //							console.log('transf', transProp);
                        //							console.log('el', el);
                        //							console.log('parent', $offsetP[0]);
                        //							console.log('coords', coords);
                        //							console.log('newCSS', newCSS);
                        //							console.log('offsetTop', oTop);
                        //							console.log(scrollTop, scrollLeft);

                        $t.css(newCSS).data('sfm-old-pos', coords)
                        /*}*/
                    }
                }

                function unshiftFixed(i, el) {
                    var $el = $(el);
                    var coords;
                    var newCss;
                    /*if (isIE) {
                        if ($el.data('sfm-old-matrix')) {
                            $el.css(transProp, $el.data('sfm-old-matrix')).data('sfm-old-matrix', '');
                        } else {
                            $el.css(transProp, defTranslationStr).data('sfm-transformed', '');
                        }
                    } else {*/
                    coords = $el.data('sfm-old-pos');
                    //console.log('coords', coords);
                    newCss = {};
                    if (coords) {
                        newCss[coords.toChangeHor] = coords[coords.toChangeHor];
                        newCss[coords.toChangeVert] = coords[coords.toChangeVert];
                        if (coords.toChangeVert === 'bottom') newCss['top'] = '';
                        $el.css(newCss);
                        $el.data('sfm-old-pos', '');
                    } else {
                        $el.css({left: '', top: '', bottom: '', right: ''})
                    }
                    /*}*/
                }

                function populateSocialBarWith( social ) {
                    var name, abbr;
                    for ( name in social ) {
                        if ( social.hasOwnProperty( name )) {
                            if ( name === 'skype' ) {
                                $('<li class="sfm-icon-' + name + '"><a href="skype:' + social[name] + '?call"><span>Sk.</span></a></li>').appendTo( $socialbar );
                            } else if (name === 'email') {
                                $('<li class="sfm-icon-' + name + '"><a href="mailto:' + social[name] + '"><span>Em.</span></a></li>').appendTo( $socialbar );
                            } else {
                                switch ( name ) {
                                    case 'facebook':
                                        abbr = 'Fb';
                                        break;
                                    case 'twitter':
                                        abbr = 'Tw';
                                        break;
                                    case 'dribbble':
                                        abbr = 'Dr';
                                        break;
                                    case 'youtube':
                                        abbr = 'Yt';
                                        break;
                                    case 'linkedin':
                                        abbr = 'Li';
                                        break;
                                    case 'instagram':
                                        abbr = 'Ig';
                                        break;
                                    case 'vimeo':
                                        abbr = 'Vi';
                                        break;
                                    case 'gplus':
                                        abbr = 'Gp';
                                        break;
                                    case 'soundcloud':
                                        abbr = 'Sc';
                                        break;
                                    case 'pinterest':
                                        abbr = 'Pt';
                                        break;
                                    case 'flickr':
                                        abbr = 'Fl';
                                        break;
                                    case 'rss':
                                        abbr = 'Rss';
                                        break;
                                };

                                $('<li class="sfm-icon-' + name + '"><a href="' + social[ name ] + '" target="_blank"><span>' + abbr + '.</span></a></li>').appendTo( $socialbar );
                            }
                        }
                    }
                }

                function attachSwipesHandler() {
                    var startX, startY, startTime, moveX, moveY;
                    $sidebar.add($overlay).bind('touchstart', function (e) {
                        if (state === 'open') {
                            startTime = (new Date).getTime();
                            startX = e.originalEvent.touches[0].pageX;
                            startY = e.originalEvent.touches[0].clientY;
                        }
                    })
                        .bind('touchmove', function (e) {
                            if (state === 'open') {
                                moveX = e.originalEvent.touches[0].pageX;
                                moveY = e.originalEvent.touches[0].clientY
                            }
                        })
                        .bind('touchend', function () {
                            if (state === 'open') {
                                var swipeDirection = moveX > startX ? "right" : "left";
                                var finalY = moveY - startY > 30 || -30 > moveY - startY;
                                var finalX = moveX - startX > 60 || -60 > moveX - startX;
                                var now = (new Date).getTime();
                                if (!(now - startTime > 200 || finalY) && finalX) {
                                    switch (swipeDirection) {
                                        case "left":
                                            "left" === direction ? hideSidebar() : showSidebar();
                                            break;
                                        case "right":
                                            "left" === direction ? showSidebar() : hideSidebar()
                                    }
                                }
                            }
                        });
                }

                function freezeBodyScroll(e) {
                    var scrollTo = null;

                    if (e.type == 'mousewheel') {
                        scrollTo = (e.originalEvent.wheelDelta * -1);
                    }
                    else if (e.type == 'DOMMouseScroll') {
                        scrollTo = 40 * e.originalEvent.detail;
                    }

                    if (scrollTo) {
                        e.preventDefault();
                        $(this).scrollTop(scrollTo + $(this).scrollTop());
                    }
                }

                function freezeBody(e) {
                    if (e.type == 'mousewheel' || e.type == 'DOMMouseScroll') {
                        e.preventDefault()
                    }
                }

                function checkOrientation() {
                    var o = window.orientation;
                    if (o) {
                        if (o != 90 && o != -90) {
                            return 'portrait';
                        } else {
                            return 'landscape';
                        }
                    } else {
                        if ($win.height() > $win.width()) {
                            return 'portrait';
                        } else {
                            return 'landscape';
                        }
                    }
                }

                return {
                    init: init,
                    showSidebar: showSidebar,
                    hideSidebar: hideSidebar,
                    sfmPlayer: sfmPlayer,
                    Menu: Menu,
                    setSize: setSize,
                    getState: function () {
                        return state
                    }
                }
            }());

            // main initialization
            window.LM = LM.init( $defmenu );

        }, 0);

    }

    function attachStyles(t) {
        if (document.body) {
            var s = document.createElement('style');
            s.type = 'text/css';
            if (/WebKit|MSIE/i.test(navigator.userAgent)) {
                if (s.styleSheet) {
                    s.styleSheet.cssText = t;
                } else {
                    s.innerText = t;
                }
            } else {
                s.innerHTML = t;
            }
            document.getElementsByTagName('head')[0].appendChild(s);
        } else {
            document.write('<style type="text/css">' + t + '</style>');
        }
    }

    function getVendorPropertyName(prop) {

        var prefixes = ['Moz', 'Webkit', 'O', 'ms'],
            vendorProp, i,
            div = document.createElement('div'),
            prop_ = prop.charAt(0).toUpperCase() + prop.substr(1);

        if (prop in div.style) {
            return prop;
        }

        for (i = 0; i < prefixes.length; ++i) {

            vendorProp = prefixes[i] + prop_;

            if (vendorProp in div.style) {
                return vendorProp;
            }

        }

        // Avoid memory leak in IE.
        this.div = null;
    };

    function deparam(query) {
        var pairs, i, keyValuePair, key, value, map = {};
        // remove leading question mark if its there
        if (query.slice(0, 1) === '?') {
            query = query.slice(1);
        }
        if (query !== '') {
            pairs = query.split('&');
            for (i = 0; i < pairs.length; i += 1) {
                keyValuePair = pairs[i].split('=');
                key = decodeURIComponent(keyValuePair[0]);
                value = (keyValuePair.length > 1) ? decodeURIComponent(keyValuePair[1]) : undefined;
                map[key] = value;
            }
        }
        return map;
    }


})(window.jQuery);