// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

// Countdown jQuery

!function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var n;"undefined"!=typeof window?n=window:"undefined"!=typeof global?n=global:"undefined"!=typeof self&&(n=self),n.Countdown=e()}}(function(){var define,module,exports;return function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}({1:[function(require,module,exports){var defaultOptions={date:"June 7, 2087 15:03:25",refresh:1e3,offset:0,onEnd:function(){return},render:function(date){this.el.innerHTML=date.years+" years, "+date.days+" days, "+this.leadingZeros(date.hours)+" hours, "+this.leadingZeros(date.min)+" min and "+this.leadingZeros(date.sec)+" sec"}};var Countdown=function(el,options){this.el=el;this.options={};this.interval=false;for(var i in defaultOptions){if(defaultOptions.hasOwnProperty(i)){this.options[i]=typeof options[i]!=="undefined"?options[i]:defaultOptions[i];if(i==="date"&&typeof this.options.date!=="object"){this.options.date=new Date(this.options.date)}if(typeof this.options[i]==="function"){this.options[i]=this.options[i].bind(this)}}}this.getDiffDate=function(){var diff=(this.options.date.getTime()-Date.now()+this.options.offset)/1e3;var dateData={years:0,days:0,hours:0,min:0,sec:0,millisec:0};if(diff<=0){if(this.interval){this.stop();this.options.onEnd()}return dateData}if(diff>=365.25*86400){dateData.years=Math.floor(diff/(365.25*86400));diff-=dateData.years*365.25*86400}if(diff>=86400){dateData.days=Math.floor(diff/86400);diff-=dateData.days*86400}if(diff>=3600){dateData.hours=Math.floor(diff/3600);diff-=dateData.hours*3600}if(diff>=60){dateData.min=Math.floor(diff/60);diff-=dateData.min*60}dateData.sec=Math.round(diff);dateData.millisec=diff%1*1e3;return dateData}.bind(this);this.leadingZeros=function(num,length){length=length||2;num=String(num);if(num.length>length){return num}return(Array(length+1).join("0")+num).substr(-length)};this.update=function(newDate){if(typeof newDate!=="object"){newDate=new Date(newDate)}this.options.date=newDate;this.render();return this}.bind(this);this.stop=function(){if(this.interval){clearInterval(this.interval);this.interval=false}return this}.bind(this);this.render=function(){this.options.render(this.getDiffDate());return this}.bind(this);this.start=function(){if(this.interval){return}this.render();if(this.options.refresh){this.interval=setInterval(this.render,this.options.refresh)}return this}.bind(this);this.updateOffset=function(offset){this.options.offset=offset;return this}.bind(this);this.start()};module.exports=Countdown},{}],2:[function(require,module,exports){var Countdown=require("./countdown.js");var NAME="countdown";var DATA_ATTR="date";jQuery.fn.countdown=function(options){return $.each(this,function(i,el){var $el=$(el);if(!$el.data(NAME)){if($el.data(DATA_ATTR)){options.date=$el.data(DATA_ATTR)}$el.data(NAME,new Countdown(el,options))}})};module.exports=Countdown},{"./countdown.js":1}]},{},[2])(2)});