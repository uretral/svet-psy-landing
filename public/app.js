/*import './bootstrap';
// import {d} from "vite/dist/node/types.d-aGj9QkWt.js";

import.meta.glob([
    '../images/!**',
    '../fonts/!**',
]);*/

document.addEventListener('DOMContentLoaded', function () {

    ///////////////////////////////////////////////////////////////////////////////////////////////// ANCHOR

    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault()

            const blockID = anchor.getAttribute('href').substr(1)
            console.log(blockID);

            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        })
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////  TIMER
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


    ///////////////////////////////////////////////////////////////////////////////////////////////// INIT MODAL
    const modal = document.getElementById("modal");
    // const close = document.getElementById("close");
    var content = document.getElementById("content");
    const title = document.getElementById("title");
    function open() {
        document.getElementById("modal").classList.add('open');
    }

    function close() {
        document.getElementById("title").innerHTML = ''
        document.getElementById("content").innerHTML = ""
        document.getElementById("modal").classList.remove('open');
    }

    modal.addEventListener("click", function (event) {
        close()
    });



    ///////////////////////////////////////////////////////////////////////////////////////////////// FEEDBACKS


    const playFeedback = document.getElementById("play-feedback");

    let feedbackLink = document.querySelectorAll('.feedback_link');

    feedbackLink.forEach(function (el,i) {
        el.addEventListener("click", function (event) {
            feedbackLink.forEach(function (a) {
                a.classList.remove('active')
            } )

            document.getElementById("feedback-person").innerText =    el.getAttribute('data-person')
            document.getElementById("feedback-text").innerText =    el.getAttribute('data-text')
            document.getElementById("feedback-portrait").setAttribute('src', el.getAttribute('data-portrait'))

            playFeedback.setAttribute('data-tube', el.getAttribute('data-tube'))
            el.classList.add('active')
        })

    })

    playFeedback.addEventListener("click", function (event) {
        content.innerHTML = '<iframe src="https://rutube.ru/play/embed/' + playFeedback.getAttribute('data-tube') + '/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
        modal.classList.add('open')
    });


    ///////////////////////////////////////////////////////////////////////////////////////////////// FORUM

    let firstDayPersons = document.querySelectorAll('.forum_person.firstDay')
    let firstDayArrow = document.getElementById('firstDayArrow');

    let secondDayPersons = document.querySelectorAll('.forum_person.secondDay')
    let secondDayArrow = document.getElementById('secondDayArrow');

    function toggleFirstDay() {
        if(firstDayArrow.classList.contains('reverted')) {
            firstDayPersons.forEach(function (el, i){
                el.classList.remove('hidden')
            })
            firstDayArrow.classList.remove('reverted')
        } else {
            firstDayPersons.forEach(function (el, i){
                if(i > 7) {
                    el.classList.add('hidden')
                }
            })
            firstDayArrow.classList.add('reverted')
        }
    }

    function toggleSecondDay() {
        if(secondDayArrow.classList.contains('reverted')) {
            secondDayPersons.forEach(function (el, i){
                el.classList.remove('hidden')
            })
            secondDayArrow.classList.remove('reverted')
        } else {
            secondDayPersons.forEach(function (el, i){
                if(i > 7) {
                    el.classList.add('hidden')
                }
            })
            secondDayArrow.classList.add('reverted')
        }
    }

    toggleFirstDay()
    toggleSecondDay()

    firstDayArrow.addEventListener('click', function (el) {
        toggleFirstDay()
    })

    secondDayArrow.addEventListener('click', function (el) {
        toggleSecondDay()
    })


    ///////////////////////////////////////////////////////////////////////////////////////////////// OPTIONS

   document.querySelectorAll('.options_item .btn.plus').forEach(function (el) {
       el.addEventListener("click", function (event) {
           let id = el.getAttribute('data-show');
           document.querySelectorAll('#'+id+' h3').forEach(function (el) {
               title.innerHTML = el.innerHTML
           })
           document.querySelectorAll('#'+id+' li').forEach(function (el) {

               content.innerHTML += '<p>'+el.innerHTML+'</p>'
           });
           open();

           // console.log(el.textContent);

       })
   })


    ///////////////////////////////////////////////////////////////////////////////////////////////// ADDRESS

    document.querySelectorAll('.address_slider img').forEach(function (el) {
        el.addEventListener("click", function (event) {
            content.innerHTML = '<img src="'+el.getAttribute('src')+'" alt="AZIMUT Сити Отель"/>'
            open();
        })
    })


});