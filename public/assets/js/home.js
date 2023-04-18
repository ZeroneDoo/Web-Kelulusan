var countDownDate = new Date('May 05, 2023 00:00:00').getTime();
var x = setInterval(
    function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        let day = document.getElementById('days').innerHTML = days;
        let hour = document.getElementById('hours').innerHTML = hours;
        let minute = document.getElementById('minutes').innerHTML = minutes;
        let seccond = document.getElementById('seconds').innerHTML = seconds;

        // if(day == "00"){
        //     console.log('dibuka')
        // }
    }, 1000


)