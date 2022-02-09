<section id="section-countdown">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="d-flex countdown justify-content-center">
                   <ul class="text-center text-white list-inline">
                       <li class="list-inline-item p-4 bg-dark">
                           <span class="d-block display-3" id="days"></span>
                           days
                       </li>
                       <li class="list-inline-item p-4 bg-dark">
                           <span class="d-block display-3" id="hours"></span>
                           hours
                       </li>
                       <li class="list-inline-item p-4 bg-dark">
                           <span class="d-block display-3" id="minutes"></span>
                           minutes
                       </li>
                       <li class="list-inline-item p-4 bg-dark">
                           <span class="d-block display-3" id="seconds"></span>
                           seconds
                       </li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    (function () {
        const second = 1000,
              minute = 60 * second,
              hour = 60 * minute,
              day = 24 * hour;
        
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "01/04/",
            theDay = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;

        if (today > theDay) {
            theDay = dayMonth + nextYear;
        }

        const countDown = new Date(theDay).getTime(),
              x = setInterval(function () {
                  const now = new Date().getTime(),
                        distance = countDown - now,
                        days = distance / day,
                        hours = (distance % day) / hour,
                        minutes = (distance % hour) / minute,
                        seconds = (distance % minute) / second;
                  let dayString = Math.floor(days).toString(),
                      hourString = Math.floor(hours).toString(),
                      minuteString = Math.floor(minutes).toString()

                  document.getElementById("days").innerText = dayString.length == 1 ? '0'+dayString : dayString,
                  document.getElementById("hours").innerText = hourString.length == 1 ? '0'+hourString : hourString,
                  document.getElementById("minutes").innerText = minuteString.length == 1 ? '0'+minuteString : minuteString,
                  document.getElementById("seconds").innerText = Math.floor(seconds);

                  if (distance < 0 ) {
                    document.getElementById("section-countdown").style.display = "none";
                    clearInterval(x);
                  }
                
              }, 0)

    }());
</script>