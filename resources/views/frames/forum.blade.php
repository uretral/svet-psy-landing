<x-section class="forum" row="forum_wrapper">
    <div class="forum_header">
        <div class="forum_title">
            <b>13 ОКТЯБРЯ</b>
            <h4>ФОРУМ СПЕЦИАЛИСТОВ</h4>
        </div>
        <div class="forum_duration">
            <span>ВОСКРЕСЕНЬЕ</span>
            <span>1 ДЕНЬ</span>
        </div>
    </div>
    <div class="forum_body">
        <p class="thin">
            Ведущие представители профессиональных и бизнес-сообществ, высококлассные, опытные и узкопрофильные
            специалисты примут участие в пленарном заседании, круглых столах и дискуссиях на заявленные темы конгресса
        </p>
    </div>

    @php
        $first = [
                         ['name' => 'Богданов Ринат Равилевич', 'photo' => 'img/forum/Богданов.png', 'class' => 'accented'],
                         ['name' => 'Защиринская Оксана Владимировна', 'photo' => 'img/forum/Защиринская.png', 'class' => 'accented'],
                         ['name' => 'Григорьева Марина Анатольевна', 'photo' => 'img/forum/Григорьева.png', 'class' => 'accented'],
                         ['name' => 'Доморацкий Владимир Анатольевич', 'photo' => 'img/forum/Домогарский.png', 'class' => 'darker'],

                         ['name' => 'Кадыров Руслан Васитович', 'photo' => 'img/forum/Кадыров.png', 'class' => 'grayscale'],
                         ['name' => 'Малкина-Пых Ирина Германовна', 'photo' => 'img/forum/Малкина-Пых.png', 'class' => 'darker'],
                         ['name' => 'Моисеев Вячеслав Иванович', 'photo' => 'img/forum/Моисеев.png', 'class' => 'darker'],
                         ['name' => 'Чудаков Сергей Юрьевич', 'photo' => 'img/forum/Чудаков.png', 'class' => 'darker'],

                         ['name' => 'Адылов Зафар Кадырович', 'photo' => 'img/forum/Адылов.png', 'class' => 'accented'],
                         ['name' => 'Антипова Надежда Евгеньевна', 'photo' => 'img/forum/man.png', 'class' => 'accented'],
                         ['name' => 'Брель Елена Юрьевна', 'photo' => 'img/forum/Брель.png', 'class' => 'accented'],
                         ['name' => 'Воробей Светлана Викторовна', 'photo' => 'img/forum/Воробей.png', 'class' => 'grayscale'],
                         ['name' => 'Гольман Иосиф Абрамович', 'photo' => 'img/forum/Гольман.png', 'class' => 'lighted'],

                         ['name' => 'Григорьева Александра Андреевна', 'photo' => 'img/forum/Григорьева-Александра.png', 'class' => 'grayscale'],
                         ['name' => 'Дранишников Сергей Анатольевич', 'photo' => 'img/forum/Дранишников.png', 'class' => 'accented'],
                         ['name' => 'Иванова Галина Евгеньевна', 'photo' => 'img/forum/Иванова.png', 'class' => 'lighted'],
                         ['name' => 'Касьяник Павел Моисеевич', 'photo' => 'img/forum/Касьяник.png', 'class' => 'darker'],

                         ['name' => 'Кириевская Татьяна Александровна', 'photo' => 'img/forum/Кириевская.png', 'class' => 'accented'],
                         ['name' => 'Кузнецова Елена Ивановна', 'photo' => 'img/forum/Кузнецова.png', 'class' => 'accented'],
                         ['name' => 'Кучерявенко Игорь Анатольевич', 'photo' => 'img/forum/Кучерявенко.png', 'class' => 'lighted'],
                         ['name' => 'Лазарева Светлана Владимировна', 'photo' => 'img/forum/Лазарева.png', 'class' => 'grayscale'],

                         ['name' => 'Немкова Светлана Александровна', 'photo' => 'img/forum/Немкова.png', 'class' => 'lighted'],
                         ['name' => 'Николаева Людмила Юрьевна', 'photo' => 'img/forum/Николаева.png', 'class' => 'grayscale'],
                         ['name' => 'отец Евгений (Лизенюк)', 'photo' => 'img/forum/Лизенюк.png', 'class' => 'darker'],
                         ['name' => 'Отец Сергий', 'photo' => 'img/forum/Отец-Сергий.png', 'class' => 'accented'],

                         ['name' => 'Разумов Алекандр Николаевич', 'photo' => 'img/forum/Разумов.png', 'class' => 'lighted'],
                         ['name' => 'Трофимова Наталья Борисовна', 'photo' => 'img/forum/Трофимова.png', 'class' => 'accented'],
                         ['name' => 'Панов Александр Леонтьевич', 'photo' => 'img/forum/Панов.png', 'class' => 'lighted'],
                         ['name' => 'Узянова Ирина Михайловна', 'photo' => 'img/forum/Узянова.png', 'class' => 'grayscale'],

                         ['name' => 'Удо Хагедорн', 'photo' => 'img/forum/Удо.png', 'class' => 'darker'],
                         ['name' => 'Ульянина Ольга Александровна', 'photo' => 'img/forum/Ульянина.png', 'class' => 'accented'],
                         ['name' => 'Холмогорова Алла Борисовна', 'photo' => 'img/forum/Холмогорова.png', 'class' => 'lighted'],
                         ['name' => 'Хох Ирина Рудольфовна', 'photo' => 'img/forum/Хох.png', 'class' => 'lighted'],


         ];


         $second = [
                         ['name' => 'Жуков Георгий Александрович', 'photo' => 'img/forum/Жуков.png', 'class' => 'darker'],
                         ['name' => 'Исаева Елена Рудольфовна', 'photo' => 'img/forum/Исаева.png', 'class' => 'grayscale'],
                         ['name' => 'Толоконин Артем Олегович', 'photo' => 'img/forum/Толоконин.png', 'class' => 'darker'],
                         ['name' => 'Спиранде Марина Валерьевна', 'photo' => 'img/forum/Спиранде.png', 'class' => 'lighted'],

                         ['name' => 'Синицына Татьяна Юрьевна', 'photo' => 'img/forum/Синицына.png', 'class' => 'grayscale'],
                         ['name' => 'Франц Рупперт', 'photo' => 'img/forum/Рупперт.png', 'class' => 'accented'],
                         ['name' => 'Белоусов Александр Михайлович', 'photo' => 'img/forum/Белоусов.png', 'class' => 'darker'],
                         ['name' => 'Воротников Владимир Владимирович', 'photo' => 'img/forum/Воротников.png', 'class' => 'grayscale'],

                         ['name' => 'Гронская Юлия Александровна', 'photo' => 'img/forum/Гронская.png', 'class' => 'darker'],
                         ['name' => 'Ермолаева Анна Валерьевна', 'photo' => 'img/forum/Ермрлаева.png', 'class' => 'darker'],
                         ['name' => 'Зинченко Ирина Михайловна', 'photo' => 'img/forum/Зинченко.png', 'class' => 'accented'],
                         ['name' => 'Зыкина Галина Юрьевна', 'photo' => 'img/forum/Зыкина.png', 'class' => 'lighted'],


                         ['name' => 'Кубин Никита Дмитриевна', 'photo' => 'img/forum/Кубин.png', 'class' => 'darker'],
                         ['name' => 'Кузнецова Елена Ивановна', 'photo' => 'img/forum/Кузнецова.png', 'class' => 'lighted'],
                         ['name' => 'Лазарева Наталья Алексеевна', 'photo' => 'img/forum/Лазарева.png', 'class' => 'grayscale'],
                         ['name' => 'Логунова Елена Геннадьевна', 'photo' => 'img/forum/Логунова.png', 'class' => 'darker'],

                         ['name' => 'Лупак Олеся Васильевна', 'photo' => 'img/forum/Лупак.png', 'class' => 'accented'],
                         ['name' => 'Скрипник Людмила Юрьевна', 'photo' => 'img/forum/Скрипник.png', 'class' => 'darker'],
                         ['name' => 'Чудаков Сергей Юрьевич', 'photo' => 'img/forum/Чудаков.png', 'class' => 'accented'],
                         ['name' => 'Шацкова Екатерина Владимировна', 'photo' => 'img/forum/Шацкова.png', 'class' => 'lighted'],

                         ['name' => 'Фомичева Наталья Сергеевна', 'photo' => 'img/forum/Фомичева.png', 'class' => 'grayscale'],
                         ['name' => 'Яковлева Елена Михайловна', 'photo' => 'img/forum/man.png', 'class' => 'grayscale'],

         ]
    @endphp

    <div class="forum_persons">

        @foreach($first as $item)
            <div class="forum_person {{$item['class']}} firstDay">
                <div class="forum_person_photo">
                    <img src="{{asset($item['photo'])}}" alt="person photo"/>
                </div>
                <span>{{$item['name']}}</span>
            </div>
        @endforeach

    </div>
    <div class="forum_arrow" id="firstDayArrow">
        <a href="javascript:"></a>
    </div>


    <div class="forum_header second">
        <div class="forum_title">
            <b>14 ОКТЯБРЯ</b>
            <h4>КОНФЕРЕНЦИЯ</h4>
        </div>
        <div class="forum_duration">
            <span>ПОНЕДЕЛЬНИК</span>
            <span>2 ДЕНЬ</span>
        </div>
    </div>
    <div class="forum_body">
        <h2>
            Методики, авторские разработки
            и практико-ориентированные технологии работы с травмой
        </h2>
        <p>
            специалисты-практики профессиональных сфер работы с травмой, руководители бизнес-сообществ и коммерческих
            организаций, высококлассные, опытные и узкопрофильные специалисты проведут тренинги, мастер-классы и
            мастер-лаборатории для передачи опыта работы с травмой на примере реальных кейсов и ситуаций
        </p>
    </div>


    <div class="forum_persons">

        @foreach($second as $item)
            <div class="forum_person {{$item['class']}} secondDay">
                <div class="forum_person_photo">
                    <img src="{{asset($item['photo'])}}" alt="person photo"/>
                </div>
                <span>{{$item['name']}}</span>
            </div>
        @endforeach


    </div>
    <div class="forum_arrow" id="secondDayArrow">
        <a href="javascript:"></a>
    </div>


    <div class="forum_footer">
        <a class="btn accent"
           href="https://docs.google.com/spreadsheets/d/14J3gPPbkm6EKFcUrd8F3q6DjGFhHTCwjBpr27ac-Kok/edit?gid=1169220143#gid=1169220143">
            ПОДРОБНАЯ ПРОГРАММА
        </a>
    </div>
</x-section>