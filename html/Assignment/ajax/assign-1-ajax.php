<?php
var nIntervId;

function updateTime() {
    nIntervId = setInterval(flashTime, 1000);
}

function pad(n) { return ("0" + n).slice(-2); }

Number.prototype.pad = function (len) {
    return (new Array(len+1).join("0") + this).slice(-len);
}

function flashTime() {
    var now = new Date();
    var h = now.getHours().pad(2);
    var m = now.getMinutes().pad(2);
    var s = now.getSeconds().pad(2);
    var time = h + ' : ' + m + ' : ' + s;
    $('#my_box1').html(time);
}

$(function() {
    updateTime();
});     
?>