// Get future date (4 years, 10 months, and 29 days from today)
const futureDate = new Date();
futureDate.setFullYear(futureDate.getFullYear() + 4);
futureDate.setMonth(futureDate.getMonth() + 10);
futureDate.setDate(futureDate.getDate() + 29);

function countdown() {
    const now = new Date().getTime();
    const timeDifference = futureDate.getTime() - now;

    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

    if (timeDifference < 0) {
        clearInterval(interval);
        document.getElementById("countdown").innerHTML = "<h2>Countdown Ended</h2>";
    }
}

const interval = setInterval(countdown, 1000);
