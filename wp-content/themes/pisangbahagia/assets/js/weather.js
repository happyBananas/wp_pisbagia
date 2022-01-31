const cWeather = document.querySelector('.weather');
window.addEventListener('load', function(){
    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
      };

    function getTimeNow(){
        const t = new Date;
        const m = t.getMinutes() < 10?"0"+t.getMinutes():t.getMinutes();
        let arrDay = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        let arrMonths = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];

        return arrDay[t.getDay()]+", "+ t.getDay() +" "+ arrMonths[t.getMonth()] +" "+ t.getFullYear() +" "+t.getHours()+":"+m;
    }

    function getLocationErr(err){
        console.warn("ERROR"+ err.code + err.message);
    }

    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(yourLocation, getLocationErr, options);
        }else{
            alert("Geolocation is not supported by this browser.");
        }
    }    

    function yourLocation(position){    
        const http = new XMLHttpRequest();
        const url = "http://api.openweathermap.org/data/2.5/weather?lat="+position.coords.latitude+"&lon="+position.coords.longitude+"&lang=id&units=metric&APPID=f130a0181a507d474eda2f2e5a6eaa61";
        http.responseType = "json";
        http.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var r = http.response;
                var obj = {
                    "city" : r.name,
                    "country" : "Indonesia",
                    "time" : getTimeNow(),              
                    "weather" : r.weather[0].description,
                    "icon" : "http://openweathermap.org/img/wn/"+r.weather[0].icon+".png",
                    "main_temp" : r.main.temp+"&deg;C",
                    "humidity" : "<i class='fa fa-tint'></i> "+r.main.humidity+"%",
                    "wind_speed" : "<i class='fa fa-location-arrow'></i> "+r.wind.speed+" m/d"
                }
                cWeather.style.marginBottom = "1em";
                cWeather.innerHTML ="<div class='header-section'>"+
                                        "<div class='hs-p'>"+
                                            "<p class='ft ft-header-section'>Cuaca</p>"+
                                        "</div>"+
                                        "<div class='hs-bar'>"+
                                            "<div class='bar'></div>"+
                                        "</div>"+
                                    "</div>"+   
                                    "<div class='weather-section'>"+
                                        "<div class='wrap-wea-info'>"+
                                            "<p class='ft ft-wea-location'>"+ obj.city +", "+ obj.country +"</p>"+
                                            "<p class='ft ft-wea-time'>"+ obj.time + "</p>"+
                                            "<p class='ft ft-wea-weather'>"+ obj.weather + "</p>"+
                                        "</div>"+
                                        "<div class='wrap-wea'>"+
                                            "<div class='wrap-wea-img-temp'>"+
                                                "<img src=\""+ obj.icon +"\">"+
                                                "<p class='ft ft-wea-temp'>"+ obj.main_temp +"</p>"+
                                            "</div>"+
                                            "<div class='wrap-wea-hum-wd'>"+
                                                "<p class='ft-po ft-wea-hw'>"+ obj.humidity +"</p>"+
                                                "<p class='ft-po ft-wea-hw'>"+ obj.wind_speed +"</p>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>";
            }
        };
        http.open("GET", url, true);
        http.send();          
    }

    getLocation();
});
