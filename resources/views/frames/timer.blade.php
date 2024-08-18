

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // конечная дата
        // const deadline = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 01);
        const deadline = new Date(2024, 9, 13, 9);
        console.log(deadline);
        // id таймера
        let timerId = null;
        // склонение числительных
        function declensionNum(num, words) {
            return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
        }
        // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
        function countdownTimer() {
            const diff = deadline - new Date();
            if (diff <= 0) {
                clearInterval(timerId);
            }
            const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
            const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
            const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
            const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
            $days.textContent = days < 10 ? '0' + days : days;
            $hours.textContent = hours < 10 ? '0' + hours : hours;
            $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
            $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
            $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
            $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
            $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
            $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
        }
        // получаем элементы, содержащие компоненты даты
        const $days = document.querySelector('.timer__days');
        const $hours = document.querySelector('.timer__hours');
        const $minutes = document.querySelector('.timer__minutes');
        const $seconds = document.querySelector('.timer__seconds');
        // вызываем функцию countdownTimer
        countdownTimer();
        // вызываем функцию countdownTimer каждую секунду
        timerId = setInterval(countdownTimer, 1000);
    });
</script>


<x-section class="timer" row="timer_wrapper">
    <div class="timer_body">

        <p>
            До старта самого <b>большого конгресса по теме травмы</b> с участием специалистов из <b>стран - участниц делового объединения БРИКС</b> осталось
        </p>
    </div>
    <div class="timer_digits">
        <div class="timer_digit">
            <span class="timer__days">00</span>
        </div>
        <div class="timer_digit">
            <span class="timer__hours">00</span>
        </div>
        <div class="timer_digit">
            <span class="timer__minutes">00</span>
        </div>
        <div class="timer_digit">
            <span class="timer__seconds">00</span>
        </div>
    </div>
</x-section>