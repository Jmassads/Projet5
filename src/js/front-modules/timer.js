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

    this.selector.innerHTML = (`<p>Je &lt;/&gt; depuis ${years} ans, ${months} mois, ${days} jours, ${minutes} minutes et ${seconds} secondes</p>`);
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