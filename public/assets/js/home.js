var countDownDate = new Date('April 30, 2023 20:31:00').getTime();
        var x = setInterval(
            function () {
                var now = new Date().getTime();
                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                var day = document.getElementById('days').innerHTML = days;
                let hour = document.getElementById('hours').innerHTML = hours;
                let minute = document.getElementById('minutes').innerHTML = minutes;
                let seccond = document.getElementById('seconds').innerHTML = seconds;

                if (seconds <= "00") {
                      clearInterval(x);
                    document.getElementById("left-count").style.display = "none";
                    document.getElementById("left").style.display = "block";
                }
            }, 1000
        )