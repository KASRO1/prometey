<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pages', function (Blueprint $table) {
            $table->id();
            $table->text("title")->nullable();
            $table->text("header_nav_1")->nullable();
            $table->text("header_nav_2")->nullable();
            $table->text("header_nav_3")->nullable();
            $table->text("block_1_title")->nullable();
            $table->text("block_1_title_marked")->nullable();
            $table->text("block_1_title_2")->nullable();
            $table->text("block_1_description")->nullable();
            $table->text("block_1_button_text")->nullable();
            $table->text("block_1_button_link")->nullable();
            $table->text("block_2_nav_1")->nullable();
            $table->text("block_2_nav_2")->nullable();
            $table->text("block_2_nav_3")->nullable();
            $table->text("block_2_nav_4")->nullable();
            $table->text("block_2_nav_icon_1")->nullable();
            $table->text("block_2_nav_icon_2")->nullable();
            $table->text("block_2_nav_icon_3")->nullable();
            $table->text("block_2_nav_icon_4")->nullable();
            $table->text("block_3_title")->nullable();
            $table->text("block_3_title_marked")->nullable();
            $table->text("block_3_decription")->nullable();
            $table->text("block_3_static_procent_1")->nullable();
            $table->text("block_3_static_procent_text_1")->nullable();
            $table->text("block_3_static_procent_2")->nullable();
            $table->text("block_3_static_procent_text_2")->nullable();
            $table->text("block_3_static_procent_3")->nullable();
            $table->text("block_3_static_procent_text_3")->nullable();
            $table->text("block_3_static_procent_4")->nullable();
            $table->text("block_3_static_procent_text_4")->nullable();
            $table->text("block_3_text_under_video")->nullable();
            $table->text("block_4_title")->nullable();
            $table->text("block_4_description")->nullable();
            $table->text("block_5_title_marked")->nullable();
            $table->text("block_5_title")->nullable();
            $table->text("block_5_description")->nullable();
            $table->text("block_5_button_text")->nullable();
            $table->text("block_5_button_link")->nullable();
            $table->text("block_5_step1_title")->nullable();
            $table->text("block_5_step1_description")->nullable();
            $table->text("block_5_step2_title")->nullable();
            $table->text("block_5_step2_description")->nullable();
            $table->text("block_5_step3_title")->nullable();
            $table->text("block_5_step3_description")->nullable();
            $table->text("block_6_title")->nullable();
            $table->text("block_6_title_marked")->nullable();
            $table->text("block_6_description")->nullable();
            $table->text("block_7_title_marked")->nullable();
            $table->text("block_7_title")->nullable();
            $table->text("block_7_description")->nullable();
            $table->text("block_8_element_title_1")->nullable();
            $table->text("block_8_element_description_1")->nullable();
            $table->text("block_8_element_title_2")->nullable();
            $table->text("block_8_element_description_2")->nullable();
            $table->text("block_8_element_title_3")->nullable();
            $table->text("block_8_element_description_3")->nullable();
            $table->text("block_8_element_title_4")->nullable();
            $table->text("block_8_element_description_4")->nullable();
            $table->text("block_8_element_title_5")->nullable();
            $table->text("block_8_element_description_5")->nullable();
            $table->text("block_8_element_title_6")->nullable();
            $table->text("block_8_element_description_6")->nullable();
            $table->text("block_9_title")->nullable();
            $table->text("block_9_description")->nullable();
            $table->text("block_9_button_text")->nullable();
            $table->text("block_9_button_link")->nullable();
            $table->text("block_10_title")->nullable();
            $table->text("block_10_static_1")->nullable();
            $table->text("block_10_static_1_description")->nullable();
            $table->text("block_10_static_2")->nullable();
            $table->text("block_10_static_2_description")->nullable();
            $table->text("block_10_static_3")->nullable();
            $table->text("block_10_static_3_description")->nullable();
            $table->json("block_11_reviews")->nullable();
            $table->text("block_12_title")->nullable();
            $table->text("block_12_button_text")->nullable();
            $table->text("block_12_button_link")->nullable();
            $table->text("footer_tg_link")->nullable();
            $table->text("footer_email")->nullable();
            $table->text("footer_other_text")->nullable();


            $table->timestamps();
        });

        DB::table("data_pages")->insert([
            "title" => "Prometey",
            "header_nav_1" => "О нас",
            "header_nav_2" => "Преимущества",
            "header_nav_3" => "Отзывы",
            "block_1_title" => "Зарабатывайте",
            "block_1_title_marked" => "от $100 в день",
            "block_1_title_2" => "на арбитраже<br>котировок",
            "block_1_description" => "Получите доступ к автоматизированному инструменту для арбитража и сопровождению от экспертов для быстрого старта",
            "block_1_button_text" => "Получить доступ",
            "block_1_button_link" => "#",
            "block_2_nav_1" => "Обучение с нуля",
            "block_2_nav_2" => "Международное сообщество трейдеров",
            "block_2_nav_3" => "Бонусы от 15% по партнерской программе",
            "block_2_nav_4" => "Поддержка 24/7",
            "block_2_nav_icon_1" => "fas fa-home",
            "block_2_nav_icon_2" => "fas fa-info",
            "block_2_nav_icon_3" => "fas fa-envelope",
            "block_2_nav_icon_4" => "fas fa-hand-holding-usd",
            "block_3_title" => "Как работает<br>автоматизация",
            "block_3_title_marked" => "арбитража <br>котировок",
            "block_3_decription" => "Чтобы зарабатывать на трейдинге, необязательно угадывать движение цен финансовых активов или разбираться в сложных графиках. <br> Поручите торговлю бинарными опционами проверенному на практике ПО: робот автоматически проставит сделку по вашим настройкам еще до того, как информация о цене появится у брокера.",
            "block_3_static_procent_1" => "82",
            "block_3_static_procent_text_1" => "Выигрышных сделок",
            "block_3_static_procent_2" => "97",
            "block_3_static_procent_text_2" => "Положительных отзывов",
            "block_3_static_procent_3" => "100",
            "block_3_static_procent_text_3" => "В среднем получают ученики ежедневно",
            "block_3_static_procent_4" => "2000",
            "block_3_static_procent_text_4" => "Учеников по всему миру",
            "block_3_text_under_video" => "+740$ за 5 дней",
            "block_4_title" => " Вам не нужно
            <br>разбираться во всем
            <br>самостоятельно",
            "block_4_description" => "Сразу после регистрации вы пройдете обучение от экспертов с опытом
            <br>в трейдинге более 8 лет",
            "block_5_title_marked" => "3 ШАГА",
            "block_5_title" => "до первой прибыли",
            "block_5_description" => "Вы получите инструмент для автоматической торговли бинарными опционами, научитесь строить прибыльный бизнес и станете частью комьюнити трейдеров.",
            "block_5_button_text" => "Получить доступ",
            "block_5_button_link" => "#",
            "block_5_step1_title" => "Получите доступ <br>к инструментам",
            "block_5_step1_description" => "Пройдите простую регистрацию, после чего тренер расскажет подробнее об инструменте и обучении.",
            "block_5_step2_title" => "Обучайтесь <br>и общайтесь",
            "block_5_step2_description" => "Пока робот под вашим контролем проставляет сделки, подробнее изучайте арбитраж котировок и общайтесь с единомышленниками.",
            "block_5_step3_title" => "Получайте доход",
            "block_5_step3_description" => "Увеличивайте баланс вашего счёта, не отходя от экрана компьютера или смартфона.",
            "block_6_title" => "Брокеры",
            "block_6_title_marked" => "с которыми мы работаем",
            "block_6_description" => "Робот функционирует на всех популярных трейдинговых площадках бинарных опционов",
            "block_7_title_marked" => "Это не просто",
            "block_7_title" => "теория",
            "block_7_description" => " Вы получите практические рекомендации о том,
                    <br>как и с помощью чего торговать на опережении котировок
                    <br>и успешно закрывать сделки",
            "block_8_element_title_1" => "Обучение <br>и сопровождение",
            "block_8_element_description_1" => "Погрузитесь в технологию арбитража котировок под руководством практикующего трейдера",
            "block_8_element_title_2" => "Партнерская программа",
            "block_8_element_description_2" => "Рекомендуйте prometey.trade друзьям и зарабатывайте <br>от 15% стоимости продукта",
            "block_8_element_title_3" => "Международное <br>комьюнити",
            "block_8_element_description_3" => "Станьте участником сообщества <br>и обменивайтесь опытом <br>с трейдерами со всего мира",
            "block_8_element_title_4" => "Финансовая <br>свобода",
            "block_8_element_description_4" => "Зарабатывайте с помощью компьютера и интернета. Перестаньте зависеть от графика работы и фиксированной зарплаты",
            "block_8_element_title_5" => "Удобные <br>инструменты",
            "block_8_element_description_5" => "Профессиональные трейдеры уже протестировали наше ПО и оценили его удобство и эффективность <br>на 9 баллов из 10",
            "block_8_element_title_6" => "Простой <br>алгоритм",
            "block_8_element_description_6" => "Операции выполняет робот, <br>поэтому для новичков такой способ эффективнее, чем вручную обрабатывать сделки",
            "block_9_title" => "Получите доступ к инструменту, <br>пройдите обучение",
            "block_9_description" => "и уже завтра <br>получайте прибыль",
            "block_9_button_text" => "Получить доступ",
            "block_9_button_link" => "#",
            "block_10_title" => "результаты<br>наших<br>Учеников",
            "block_10_static_1" => "1600",
            "block_10_static_1_description" => "учеников уже прошли обучение<br>и зарабатывают на автомате",
            "block_10_static_2" => "2100",
            "block_10_static_2_description" => "средний доход ученика в месяц<br>после обучения",
            "block_10_static_3" => "480",
            "block_10_static_3_description" => "человек успешно построили бизнес
                        <br>вместе с нас",
            "block_11_reviews" => json_encode([
                [
                    "avatar_path" => "images/avatar1.jpg",
                    "name" => "John Doe",
                    "text" => "I have been investing in cryptocurrency for a long time, but I have never seen such a profitable platform as House Crypto. I recommend it to everyone who wants to make money from investing in cryptocurrency."
                ],

            ]),
            "block_12_title" => "Сделайте первый шаг на пути к финансовой свободе",
            "block_12_button_text" => "Регистрация",
            "block_12_button_link" => "#",
            "footer_tg_link" => "#",
            "footer_email" => "asd",
            "footer_other_text" => "©2022 «Prometey»",
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pages');
    }
};
