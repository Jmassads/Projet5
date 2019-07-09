function Timer(selector) {
    this.selector = document.querySelector(selector);
    this.timeinterval;
    this.run_timer();

}


Timer.prototype.calculateTimeDifference = function () {
    var diff = Date.now() - Date.parse("September 12, 2016");

    var seconds = Math.floor(diff / 1000),
        minutes = Math.floor(seconds / 60),
        hours = Math.floor(minutes / 60),
        days = Math.floor(hours / 24),
        months = Math.floor(days / 30),
        years = Math.floor(days / 365);

    seconds %= 60;
    minutes %= 60;
    hours %= 24;
    days %= 30;
    months %= 12;

    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    this.selector.innerHTML = (`<p><strong>Je code depuis:</strong></p><div class="timer-items"><span class="time-item"><span class="time-amount">${years}</span><span class="time-text"> Ans</span></span> 
    <span class="time-item"><span class="time-amount">${months}</span><span class="time-text"> Mois</span></span>
    <span class="time-item"><span class="time-amount">${days}</span><span class="time-text"> Jours</span></span>
    <span class="time-item"><span class="time-amount">${minutes}</span><span class="time-text"> Minutes</span></span>
    <span class="time-item"><span class="time-amount">${seconds}</span><span class="time-text"> Secondes</span></span></div>`);
}

Timer.prototype.run_timer = function () {
    // Lancement du compte à rebours
    this.calculateTimeDifference(); // Premier tick tout de suite
    // on déclenche la méthode update_timer à un intervalle régulier (tous les 1000ms ou 1s);
    this.timeinterval = setInterval(this.calculateTimeDifference.bind(this), 1000);
}


export {
    Timer
};