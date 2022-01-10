<section id="section-countdown">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="d-flex countdown justify-content-center">
                   <ul class="text-center display-6 list-inline">
                       <li class="list-inline-item p-2">
                           <span class="d-block display-5" id="days"></span>
                           days
                       </li>
                       <li class="list-inline-item p-2">
                           <span class="d-block display-5" id="hours"></span>
                           hours
                       </li>
                       <li class="list-inline-item p-2">
                           <span class="d-block display-5" id="minutes"></span>
                           minutes
                       </li>
                       <li class="list-inline-item p-2">
                           <span class="d-block display-5" id="seconds"></span>
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

                  console.log(countDown, now);
                  document.getElementById("days").innerText = Math.floor(days),
                  document.getElementById("hours").innerText = Math.floor(hours),
                  document.getElementById("minutes").innerText = Math.floor(minutes),
                  document.getElementById("seconds").innerText = Math.floor(seconds);

                  if (distance < 0 ) {
                    document.getElementById("section-countdown").style.display = "none";
                    clearInterval(x);
                  }
                
              }, 0)

    }());
</script>