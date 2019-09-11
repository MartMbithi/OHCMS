(function($) {
	'use strict';
    $(".jp-jplayer").each(function(){
            var getId = $(this).attr("id"),
                getMedia = $(this).data("media"),
                getSound = $(this).data("sound"),
                getTitle = $(this).data("title"),
                getm4v = $(this).data("m4v"),
                getogv = $(this).data("ogv"),
                getwebmv = $(this).data("webmv"),
                getContainer = $(this).data("container");
    
        switch(getMedia){
            case "video" :
                // Video Setting
                $("#" + getId ).jPlayer({
                    ready: function () {
                        $(this).jPlayer("setMedia", {
                            title: getTitle,
                            m4v: getm4v,
                            ogv: getogv,
                            webmv: getwebmv
                        });
                    },
                    swfPath: ".js/jplayer/",
                    supplied: "webmv, ogv, m4v",
                    autoBlur: false,
                    cssSelectorAncestor: getContainer,
                    smoothPlayBar: true,
                    keyEnabled: true,
                    remainingDuration: true,
                    toggleDuration: true,
                    play:function(){
                        $("#" + getId ).closest(".video-wrapper").each(function(){
                            $(this).on("mouseenter", function(){
                                 $(".jp-audio", this).stop().fadeIn();                   
                            });
                            $(this).on("mouseleave", function(){
                                 $(".jp-audio", this).stop().fadeOut();                   
                            });
                            
                            // Resize
                            var getHeight = $("img", this).height(),
                                getWidth = $("img", this).width();
                            $(".jp-jplayer.video video", this).width(getWidth);
                            $(".jp-jplayer.video video", this).height(getHeight);
                        });
                    },
                    ended: function(){
                        $("#" + getId ).closest(".video-wrapper").each(function(){
                            $(".play-icon", this).fadeIn();
                            $(".jp-audio", this).fadeOut();
                            $(".jp-jplayer", this).removeClass("on");
                            $("img", this).fadeIn();
                            $(this).on("mouseenter", function(){
                                 $(".jp-audio", this).stop().fadeOut();                   
                            });
                        });
                    }
                });

                $(".video-wrapper").each(function(){
                    $(".play-icon", this).on("click",function(e) {
                        e.preventDefault();
                        $("#" + getId ).jPlayer("play");
                        $(this).fadeOut();
                        $(this).closest(".video-wrapper").find(".jp-audio").fadeIn();
                        $(this).closest(".video-wrapper").find(".jp-jplayer").addClass("on");
                        $(this).closest(".video-wrapper").find("img").fadeOut();
                    });
                });            

                var responsiveVideo = function(){
                    $(".video-wrapper").each(function(){
                        var getHeight = $("img", this).height(),
                            getWidth = $("img", this).width,
                            videoSize = function(){
                                $("#" + getId ).jPlayer({size:{width: getWidth + "px", height: getHeight + "px"}});
                                $(".jp-jplayer.video video", this).width(getWidth);
                                $(".jp-jplayer.video video", this).height(getHeight);
                            }; 
                        setTimeout(function(){
                            videoSize();
                        }, 100);              
                    });
                }
                $(window).on("load", responsiveVideo);
                $(window).on("resize", responsiveVideo);
            break;
            case "audio" :
                // Audio Setting
                $("#" + getId ).jPlayer({
                    ready: function (event) {
                        $(this).jPlayer("setMedia", {
                            mp3: getSound
                        });
                    },
                    swfPath: "js/jplayer/",
                    supplied: "mp3",
                    cssSelectorAncestor: getContainer,
                    wmode: "window",
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true,
                    remainingDuration: true,
                    toggleDuration: true
                });
            break;
        }
    });    
})(jQuery);