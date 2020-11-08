
    //panggil library date
    let eventDate = new Date("oct 3, 2021 10:00:00").getTime();
    
    let interval = setInterval(function(){

    let date = new Date().getTime();

    //get waktu sekarang
    const remainingTime = eventDate - date;

    //get seconds, minutes, hours
    let seconds = Math.floor((remainingTime % (1000*60)) / 1000);
    let minutes = Math.floor((remainingTime % (1000*60*60)) / (1000*60));
    let hours = Math.floor((remainingTime % (1000*60*60*24)) / (1000*60*60));
    

    //ternary
    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    //DOM
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    
},1000);
