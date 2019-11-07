var the_date = new Date(2020, 01).getTime();
var today = new Date().getTime();

var diff = parseInt((the_date - today) / 1000);

var tim = setInterval(again, 1000);

function format(val, pad){
    return '0'.repeat((''+val).length % pad) + val;
}

function again(){
    var secs = format(diff % 60, 2);
    var mins = format(parseInt(diff / 60) % 60, 2);
    var hrs = format(parseInt(diff / 3600) % 24, 2);
    var days = format(parseInt(diff / (3600 * 24)), 3);
    document.getElementById("time-rem").innerHTML = days + " days " + hrs + ' hrs ' + mins + ' mins ' + secs + ' secs ';
    diff -= 1;
}

again();