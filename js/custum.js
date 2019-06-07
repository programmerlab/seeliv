$(document).ready(function(){
	//$("body").fadeIn(400);
	if($(window).innerWidth() < 800){
		$("a.nn-MenuNav_Link.no-mob").css("display","none");
		}
	setTop();
	setChatCntht();
	setMobileFilters();
	$(".chat-bot-cnt-inner").scrollTop($(".cht-bot-in-scrl").innerHeight());
	$("#langSelBtn").click(function(){
		$(".sup-sectn").hide();
		$(".lang-selection").toggle();
		});
	$("#suptSelBtn").click(function(){
		$(".lang-selection").hide();
		$(".sup-sectn").toggle();
		});
	$(".lang-selection > ul > li > label").click(function(){
		$("#langSelBtn").text($(this).attr("data-lang"));
		$(".lang-selection").hide();
		});
	$(".for-lbl > label").click(function(){
		if($("#srch-tog-0").is(":checked")){
			$("#srch-tog-2").show();
			$("#srch-tog-1").hide();
			}
		else if($("#srch-tog-0").is(":not(:checked)")){
			$("#srch-tog-1").show();
			$("#srch-tog-2").hide();
			}
		});
	$(".for-usr-wt-img .chk-bx").click(function(){
		$(".for-usr-wt-img .chk-bx").each(function(){
			if($(this).children("input[type=checkbox]").is(":checked")){
				$(".pagging-opt").show();
				}
			else{
				$(".pagging-opt").hide();
				}
			});
		});
	$(".chat-list .chk-bx").click(function(){
		$num = 0;
		$(".chat-list .chk-bx").each(function(){
			if($num<1){
			if($(this).children("input[type=checkbox]").is(":checked")){
				$("#sht-ussr-oop").show();
				$num++;
				}
			else{
				$("#sht-ussr-oop").hide();
				}
			}
			});
		});
	$("#tog-more-all").click(function(){
		if($(this).text()=="Show more"){
			$(this).text("Show less")
			}
		else{
			$(this).text("Show more")
			}
		//$(".for-usr-wt-img").children(".tog-expand").children(".row-list").toggleClass("open");
		$(".for-usr-wt-img").toggleClass("open");
		});
	$("button#mob-menu-tog").on("click",function(){
		$(".sidebar_one").toggleClass("open");
		});
	$("a#usr-menu-tog").on("click",function(){
		$("header.header").slideToggle();
		});
	$(".oth-log-pnl").click(function(e){
		$(this).toggleClass("active");
		$(".social-links,.scan-qr").toggleClass("active");
		return 0;
		});
	$(".chng-log-mod").click(function(e){
		$(".for-mobile-mod,.for-email-mod").toggleClass("active");
		return 0;
		});
	$(".send-log-mod").click(function(e){
		$(".for-mobile-mod,.for-email-mod").toggleClass("active");
		if(!($(this).html() == "Reset Via Phone")){
			$(this).html("Reset Via Phone");
			}
		else{
			if($(this).attr("data-snd") == "onl-mail")
			$(this).html("Reset Via Email");
			else
			$(this).html("Reset Via Email / IDs");
			}
		return 0;
		});
	$("div#acc-panel ul li button").on("click",function(){
		$("#acc-panel-cnt > .pnl-tool-ed,div#acc-panel ul li button").removeClass("active");
		$("#acc-panel-cnt > .pnl-tool-ed").eq($(this).parents("li").index()).addClass("active");
		$(this).addClass("active");
		});
	var mob_class = ["menu-block","header-bottom","side-bar","user-block"];
	$(".mob-menu > a").click(function(){
		if($(this).parents(".mob-menu").hasClass("mob-menu-sx")){
			
			var mob_class_sx = ["","","","header-bottom","side-bar","menu-block"];
	
		if($(this).hasClass("active")){
			$(".menu-block,.header-bottom,.side-bar").hide();
			$(this).removeClass("active");
			return;
			}
		$(".menu-block,.header-bottom,.side-bar").hide();
		$(".mob-menu.mob-menu-sx > a").removeClass("active");
		$(this).addClass("active");
		$("."+mob_class_sx[$(this).parent(".mob-menu.mob-menu-sx").index()]).show();
		setTop();
			
		  return;
			
			}
		if($(this).hasClass("active")){
			$(".menu-block,.header-bottom,.side-bar,.user-block").hide();
			$(this).removeClass("active");
			return;
			}
		$(".menu-block,.header-bottom,.side-bar,.user-block").hide();
		$(".mob-menu > a").removeClass("active");
		$(this).addClass("active");
		$("."+mob_class[$(this).parent(".mob-menu").index()]).show();
		setTop();
		});
		
	
	
	
	
		
	
	var mob_filter =[".filter-form .form-fl",".filter-bt-bl",".table-options .sort-option",".form-usr-option"];	
	$(".filt-click").click(function(){
		if($(this).hasClass("active")){
			$(".filter-form .form-fl,.filter-bt-bl,.table-options .sort-option,.form-usr-option").hide();
			$(this).removeClass("active");
			return;
			}
		$(".filter-form .form-fl,.filter-bt-bl,.table-options .sort-option,.form-usr-option").hide();
		$(".filt-click").removeClass("active");
		$(this).addClass("active");
		$(mob_filter[$(this).parent(".mob-page-tool > ul > li").index()]).show();
		});
	
		
	$("button#filter-open").click(function(){
		//$(".filter-form .form-fl").addClass("open");
		});
	$("button#filter-close").click(function(){
		//$(".filter-form .form-fl").removeClass("open");
		});
		
	$(".fr-expnd").click(function(){
		if($(this).children("span").text()=="Show more"){
			$(this).children("span").text("Show less")
			}
		else{
			$(this).children("span").text("Show more")
			}
		$(this).parents(".cnt-top").siblings(".tog-expand").children(".row-list").toggleClass("open");
		$(".for-usr-wt-img").toggleClass("open");
		});
		
	$("#edit-mod").click(function(){
         if($(this).text()=="Edit"){
			 $(this).text("Cancel")
			 }
		 else{
			 $(this).text("Edit")
			 }
		  $(".table-list .table-row").toggleClass("edit-show");
		  $(this).parents(".all-sel").toggleClass("edit-show")
		})
		$("#ex-optn-open").click(function(){
			if($(this).children(".fa").hasClass("fa-plus-circle"))
			    $(this).children(".fa").removeClass("fa-plus-circle").addClass("fa-remove");
		    else
			    $(this).children(".fa").removeClass("fa-remove").addClass("fa-plus-circle");
			$(".chat-opt-list").toggle();
	setChatCntht();
			});
		$("#txt-chat-msg").on("keyup paste blur",function(){
			if($(this).val().length > 0){
				//$("#chat-roll-send").children(".fa").removeClass("fa-microphone").addClass("fa-send");
				$("#chat-aud-open").css("display","none");
				$("#chat-roll-send").css("display","block");
				}
		    else{
				//$("#chat-roll-send").children(".fa").removeClass("fa-send").addClass("fa-microphone");
				$("#chat-roll-send").css("display","none");
				$("#chat-aud-open").css("display","block");
				}
			});
		$("#chat-aud-open").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link,#chat-aud-open,.chat-audio-msg").hide();
			$("#chat-keypad-open,#chat-roll-rec,#click-to-record").show();
			});
		$("#chat-keypad-open").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link,#chat-aud-open").show();
			$("#chat-keypad-open,#chat-roll-send,#click-to-record,.chat-audio-msg,#chat-roll-rec").hide();
			});	
		$("#click-to-record,#chat-roll-rec").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link,#chat-aud-open,#click-to-record,#chat-roll-rec").hide();
			$("#chat-keypad-open,#chat-roll-send,.chat-audio-msg").show();
			});
		$("#cancel-record").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link,#chat-aud-open,.chat-audio-msg,#chat-roll-send").hide();
			$("#chat-keypad-open,#click-to-record,#chat-roll-rec").show();
			});
			
			/*
			
		$("#chat-roll-send").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link").hide();
			$(".chat-text-field .chat-audio-msg,.chat-right-field a.cht-lnk-optn.send-aud-del").show();
			$(this).children(".fa").removeClass("fa-microphone").addClass("fa-send");
			});
	    $("#chat-aud-del").click(function(){
			$("div.chat-text-field input[type='text'],.chat-right-field .emoji-link").show();
			$(".chat-text-field .chat-audio-msg,.chat-right-field a.cht-lnk-optn.send-aud-del").hide();
			$(this).children(".fa").removeClass("fa-send").addClass("fa-microphone");
			});*/
			
		$(document).on("click",function(e){
			if($(e.target).closest(".chat-optn-lst-usr button").length > 0){
				if($(e.target).closest(".chat-optn-lst-usr button").siblings("ul").is(":visible")){
				   $(e.target).closest(".chat-optn-lst-usr button").siblings("ul").hide();
				   return;
				}
				else{
				   $(".chat-optn-lst-usr button").siblings("ul").hide();
				   $(e.target).closest(".chat-optn-lst-usr button").siblings("ul").show();
				}
				}
			else{
				$(".chat-optn-lst-usr button").siblings("ul").hide();
				}
			});
	    $(".qr-show").click(function(){
			$(".scan-qr-wrap").show();
			});
		$(document).on("click",function(e){
			setMobileFilters();
			if(!($(e.target).closest(".chat-option-open").length > 0)){
				$(".chat-option-list").hide();
				}
			if(!($(e.target).closest(".qr-show,.scan-qr").length > 0)){
				$(".scan-qr-wrap").hide();
				}
			if($(e.target).closest("#closeQr").length > 0){
				$(".scan-qr-wrap").hide();
				}
			});
		$("a#mail-edit").click(function(){
			if($(this).text()=="Edit"){
				$(this).text("Cancel");
				
				}
			else{
				$(this).text("Edit");
				}
			$("ul.mail-list,#fr-ch-mlls").toggleClass("active");
			return false;
			});
		$("#edi-cht-lgd").click(function(){
			if($(this).children("span").text()=="Edit"){
				$(this).children("span").text("Cancel");
				}
			else{
				$(this).children("span").text("Edit");
				}
			$("ul.chat-list,#wrp-chk-cht").toggleClass("active");
			return false;
			});
		$(".chat-option-open").click(function(){
			$(".chat-option-list").hide();
			$(this).siblings(".chat-option-list").toggle();
			});
		$("#show-ext-cht").click(function(){
			if($(this).children("b").text()=="Show more"){
				$(this).children("b").text("Show Less");
				}
			else{
				$(this).children("b").text("Show more");
				}
			$(".chat-bot-ext-cnts").toggle();
	        setChatCntht();
			return false;
			});
			
			
		$(".sub-menu-in a.sb-fr-tab").click(function(){
			$subEq = $(this).index();
			$target = $(this).parents(".sub-main-tab").children(".sub-tab-content").children(".sub-tb-fr-cnt");
			$(this).siblings("a.sb-fr-tab").removeClass("active");
			$target.removeClass("active");
			$target.eq($subEq).addClass("active");
			$(this).addClass("active");
			//alert($subEq);
			});
		$(".web-main-tab .w-m-t-l").click(function(){
			$subEq = $(this).index();
			$target = $(this).parents(".sub-main-tab").children(".sub-tab-content").children(".sub-tb-fr-cnt");
			$(this).siblings("a.w-m-t-l").removeClass("active");
			$(".sub-main-tab").removeClass("active");
			$(".sub-main-tab").eq($subEq).addClass("active");
			$(this).addClass("active");
			//alert($subEq);
			});
		$("#cont-scl").click(function(){
			$("#cont-scl-bl").siblings(".sub-tb-fr-cnt").removeClass("active");
			$("#cont-scl-bl").addClass("active");
			});
		$("#rule-bl").click(function(){
			$("#rule-bl-cnt").siblings(".sub-tb-fr-cnt").removeClass("active");
			$("#rule-bl-cnt").addClass("active");
			});
		$(".job-row-bottom .sh-btn").click(function(){
			if($(this).children("span").text() == "Show more"){
				$(this).children("span").text("Show less");
				$(this).siblings(".show-job-detail").addClass("open");
				}
			else{
				$(this).children("span").text("Show more");
				$(this).siblings(".show-job-detail").removeClass("open");
				}
			});	
		$("#expand-main").click(function(){
			$("div.content").toggleClass("expand");
			swipe1();
			});
		$("#sh-src-bl").click(function(){
			$(".fr-src-nn").toggle();
			});
			
		$(".notc-top-rgt .labl-tog-singl input[type=checkbox]").on
		
		$(".notc-top-rgt .labl-tog-singl").click(function(){
		$(".notc-top-rgt .labl-tog-singl .switch").each(function(){
			if($(this).children("input[type=checkbox]").is(":checked")){
				$(this).parents(".notc-top").siblings(".notc-bottom").hide();
				}
			else{
				$(this).parents(".notc-top").siblings(".notc-bottom").show();
				}
			});
		});
			
	});
$(window).resize(function(){
	setTop();
	setChatCntht();
	setMobileFilters();
	});
function swipe1(){
	var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
	}
function setTop(){
	$(".sidebar-list").css("top",$('.search-list-item').innerHeight());
	$(".main-content").css("top",$('.content-fix-head').innerHeight());
	}
function setChatCntht(){
	$hts = $(".main-content > .chat-boat").innerHeight() - (0 + $(".main-content > .chat-boat > .chat-bot-send").innerHeight());
	$(".main-content > .chat-boat > .chat-bot-cnt").css({"height":$hts + "px" });
	}
function setMobileFilters(){
	$wdth = $(".table-options > .all-sel").innerWidth() + $(".table-pagging").innerWidth();
	$wdth = $(".table-options").innerWidth() - $wdth - 10;
	if($(window).innerWidth() < 800){
		$(".mob-page-tool").css("width",$wdth+"px");
		}
	}
	
/*-------Script for Menu---------*/
var SETTINGS = {
    navBarTravelling: false,
    navBarTravelDirection: "",
     navBarTravelDistance: 150
}

var colours = {
}

document.documentElement.classList.remove("no-js");
document.documentElement.classList.add("js");

// Out advancer buttons
var pnAdvancerLeft = document.getElementById("pnAdvancerLeft");
var pnAdvancerRight = document.getElementById("pnAdvancerRight");
// the indicator
var pnIndicator = document.getElementById("pnIndicator");

var pnProductNav = document.getElementById("pnProductNav");
var pnProductNavContents = document.getElementById("pnProductNavContents");


pnProductNav.setAttribute("data-overflowing", determineOverflow(pnProductNavContents, pnProductNav));

// Set the indicator
moveIndicator(pnProductNav.querySelector("[aria-selected=\"true\"]"), colours[0]);

// Handle the scroll of the horizontal container
var last_known_scroll_position = 0;
var ticking = false;

function doSomething(scroll_pos) {
    pnProductNav.setAttribute("data-overflowing", determineOverflow(pnProductNavContents, pnProductNav));
}

pnProductNav.addEventListener("scroll", function() {
    last_known_scroll_position = window.scrollY;
    if (!ticking) {
        window.requestAnimationFrame(function() {
            doSomething(last_known_scroll_position);
            ticking = false;
        });
    }
    ticking = true;
});


pnAdvancerLeft.addEventListener("click", function() {
    // If in the middle of a move return
    if (SETTINGS.navBarTravelling === true) {
        return;
    }
    // If we have content overflowing both sides or on the left
    if (determineOverflow(pnProductNavContents, pnProductNav) === "left" || determineOverflow(pnProductNavContents, pnProductNav) === "both") {
        // Find how far this panel has been scrolled
        var availableScrollLeft = pnProductNav.scrollLeft;
        // If the space available is less than two lots of our desired distance, just move the whole amount
        // otherwise, move by the amount in the settings
        if (availableScrollLeft < SETTINGS.navBarTravelDistance * 2) {
            pnProductNavContents.style.transform = "translateX(" + availableScrollLeft + "px)";
        } else {
            pnProductNavContents.style.transform = "translateX(" + SETTINGS.navBarTravelDistance + "px)";
        }
        // We do want a transition (this is set in CSS) when moving so remove the class that would prevent that
        pnProductNavContents.classList.remove("nn-MenuNav_Contents-no-transition");
        // Update our settings
        SETTINGS.navBarTravelDirection = "left";
        SETTINGS.navBarTravelling = true;
    }
    // Now update the attribute in the DOM
    pnProductNav.setAttribute("data-overflowing", determineOverflow(pnProductNavContents, pnProductNav));
});

pnAdvancerRight.addEventListener("click", function() {
    // If in the middle of a move return
    if (SETTINGS.navBarTravelling === true) {
        return;
    }
    // If we have content overflowing both sides or on the right
    if (determineOverflow(pnProductNavContents, pnProductNav) === "right" || determineOverflow(pnProductNavContents, pnProductNav) === "both") {
        // Get the right edge of the container and content
        var navBarRightEdge = pnProductNavContents.getBoundingClientRect().right;
        var navBarScrollerRightEdge = pnProductNav.getBoundingClientRect().right;
        // Now we know how much space we have available to scroll
        var availableScrollRight = Math.floor(navBarRightEdge - navBarScrollerRightEdge);
        // If the space available is less than two lots of our desired distance, just move the whole amount
        // otherwise, move by the amount in the settings
        if (availableScrollRight < SETTINGS.navBarTravelDistance * 2) {
            pnProductNavContents.style.transform = "translateX(-" + availableScrollRight + "px)";
        } else {
            pnProductNavContents.style.transform = "translateX(-" + SETTINGS.navBarTravelDistance + "px)";
        }
        // We do want a transition (this is set in CSS) when moving so remove the class that would prevent that
        pnProductNavContents.classList.remove("nn-MenuNav_Contents-no-transition");
        // Update our settings
        SETTINGS.navBarTravelDirection = "right";
        SETTINGS.navBarTravelling = true;
    }
    // Now update the attribute in the DOM
    pnProductNav.setAttribute("data-overflowing", determineOverflow(pnProductNavContents, pnProductNav));
});

pnProductNavContents.addEventListener(
    "transitionend",
    function() {
        // get the value of the transform, apply that to the current scroll position (so get the scroll pos first) and then remove the transform
        var styleOfTransform = window.getComputedStyle(pnProductNavContents, null);
        var tr = styleOfTransform.getPropertyValue("-webkit-transform") || styleOfTransform.getPropertyValue("transform");
        // If there is no transition we want to default to 0 and not null
        var amount = Math.abs(parseInt(tr.split(",")[4]) || 0);
        pnProductNavContents.style.transform = "none";
        pnProductNavContents.classList.add("nn-MenuNav_Contents-no-transition");
        // Now lets set the scroll position
        if (SETTINGS.navBarTravelDirection === "left") {
            pnProductNav.scrollLeft = pnProductNav.scrollLeft - amount;
        } else {
            pnProductNav.scrollLeft = pnProductNav.scrollLeft + amount;
        }
        SETTINGS.navBarTravelling = false;
    },
    false
);

// Handle setting the currently active link
pnProductNavContents.addEventListener("click", function(e) {
    var links = [].slice.call(document.querySelectorAll(".nn-MenuNav_Link"));
    links.forEach(function(item) {
        item.setAttribute("aria-selected", "false");
    })
    e.target.setAttribute("aria-selected", "true");
    // Pass the clicked item and it's colour to the move indicator function
    moveIndicator(e.target, colours[links.indexOf(e.target)]);
});

// var count = 0;
function moveIndicator(item, color) {
    var textPosition = item.getBoundingClientRect();
    var container = pnProductNavContents.getBoundingClientRect().left;
    var distance = textPosition.left - container;
     var scroll = pnProductNavContents.scrollLeft;
    pnIndicator.style.transform = "translateX(" + (distance + scroll) + "px) scaleX(" + textPosition.width * 0.01 + ")";
    // count = count += 100;
    // pnIndicator.style.transform = "translateX(" + count + "px)";
    
    if (color) {
        pnIndicator.style.backgroundColor = color;
    }
}

function determineOverflow(content, container) {
    var containerMetrics = container.getBoundingClientRect();
    var containerMetricsRight = Math.floor(containerMetrics.right);
    var containerMetricsLeft = Math.floor(containerMetrics.left);
    var contentMetrics = content.getBoundingClientRect();
    var contentMetricsRight = Math.floor(contentMetrics.right);
    var contentMetricsLeft = Math.floor(contentMetrics.left);
     if (containerMetricsLeft > contentMetricsLeft && containerMetricsRight < contentMetricsRight) {
        return "both";
    } else if (contentMetricsLeft < containerMetricsLeft) {
        return "left";
    } else if (contentMetricsRight > containerMetricsRight) {
        return "right";
    } else {
        return "none";
    }
}

/**
 * @fileoverview dragscroll - scroll area by dragging
 * @version 0.0.8
 * 
 * @license MIT, see https://github.com/asvd/dragscroll
 * @copyright 2015 asvd <heliosframework@gmail.com> 
 */


(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(['exports'], factory);
    } else if (typeof exports !== 'undefined') {
        factory(exports);
    } else {
        factory((root.dragscroll = {}));
    }
}(this, function (exports) {
    var _window = window;
    var _document = document;
    var mousemove = 'mousemove';
    var mouseup = 'mouseup';
    var mousedown = 'mousedown';
    var EventListener = 'EventListener';
    var addEventListener = 'add'+EventListener;
    var removeEventListener = 'remove'+EventListener;
    var newScrollX, newScrollY;

    var dragged = [];
    var reset = function(i, el) {
        for (i = 0; i < dragged.length;) {
            el = dragged[i++];
            el = el.container || el;
            el[removeEventListener](mousedown, el.md, 0);
            _window[removeEventListener](mouseup, el.mu, 0);
            _window[removeEventListener](mousemove, el.mm, 0);
        }

        // cloning into array since HTMLCollection is updated dynamically
        dragged = [].slice.call(_document.getElementsByClassName('dragscroll'));
        for (i = 0; i < dragged.length;) {
            (function(el, lastClientX, lastClientY, pushed, scroller, cont){
                (cont = el.container || el)[addEventListener](
                    mousedown,
                    cont.md = function(e) {
                        if (!el.hasAttribute('nochilddrag') ||
                            _document.elementFromPoint(
                                e.pageX, e.pageY
                            ) == cont
                        ) {
                            pushed = 1;
                            lastClientX = e.clientX;
                            lastClientY = e.clientY;

                            e.preventDefault();
                        }
                    }, 0
                );

                _window[addEventListener](
                    mouseup, cont.mu = function() {pushed = 0;}, 0
                );

                _window[addEventListener](
                    mousemove,
                    cont.mm = function(e) {
                        if (pushed) {
                            (scroller = el.scroller||el).scrollLeft -=
                                newScrollX = (- lastClientX + (lastClientX=e.clientX));
                            scroller.scrollTop -=
                                newScrollY = (- lastClientY + (lastClientY=e.clientY));
                            if (el == _document.body) {
                                (scroller = _document.documentElement).scrollLeft -= newScrollX;
                                scroller.scrollTop -= newScrollY;
                            }
                        }
                    }, 0
                );
             })(dragged[i++]);
        }
    }

      
    if (_document.readyState == 'complete') {
        reset();
    } else {
        _window[addEventListener]('load', reset, 0);
    }

    exports.reset = reset;
}));