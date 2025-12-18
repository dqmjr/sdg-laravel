@extends('layouts.app')

@section('title', 'Оқиғалар мен іс-шаралар')

@section('content')

    <div id="main-content" class="container" role="main" style="padding-top: 150px; padding-bottom: 80px; ">
        <div class="content-page">
            <div class="top-block">
                <div class="block-title">События и мероприятия</div>
            </div>
            <table>
                <tbody>
                <tr></tr>
                <tr>
                    <td>
                        <p><b>№</b></p>
                    </td>
                    <td>
                        <p style="text-align: center;"><b>Наименование мероприятия</b></p>
                    </td>
                    <td>
                        <p style="text-align: center;"><b>Дата проведения</b></p>
                    </td>
                    <td>
                        <p style="text-align: center;"><b>Организация</b></p>
                    </td>
                    <td>
                        <p style="text-align: center;"><b>Файлы</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>1</p>
                    </td>
                    <td>
                        <p>Национальные обсуждения ЦУР с ГО</p>
                    </td>
                    <td>
                        <p style="text-align: center;">19 февраля -16 марта 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403200"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>2</p>
                    </td>
                    <td>
                        <p>Совместное совещание ООН-ГГИМ: Европа-ЕСС - ЕЭКООН по интеграции статистической и
                            геопространственной информации</p>
                    </td>
                    <td>
                        <p style="text-align: center;">27 марта 2020г.</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UN-GGIM</p>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403201"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>3</p>
                    </td>
                    <td>
                        <p>Совещание экспертов по статистике ЦУР</p>
                    </td>
                    <td>
                        <p style="text-align: center;">22-27 апреля 2020г.</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p><a href="https://unece.org/statistics/events/expert-meeting-statistics-sdgs">https://unece.org/statistics/events/expert-meeting-statistics-sdgs</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>4</p>
                    </td>
                    <td>
                        <p>Семинар по индикатору 17.13.1</p>
                    </td>
                    <td>
                        <p style="text-align: center;">30 апреля 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNDP and MFA Kazakhstan</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403202"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>5</p>
                    </td>
                    <td>
                        <p>Семинар локализация показателей ЦУР 17 в Казахстане</p>
                    </td>
                    <td>
                        <p style="text-align: center;">5-6 мая 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">МИД РК</p>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403203"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>6</p>
                    </td>
                    <td>
                        <p style="text-align: left;">
                            Серии виртуальных региональных встреч с заинтересованными сторонами в области статистики
                            образования (ЦУР 4) для обсуждения и изучения основных проблем данных об образовании,
                            связанных с пандемией COVID-19
                        </p>
                    </td>
                    <td>
                        <p style="text-align: center;">12 мая-</p>
                        <p style="text-align: center;">1 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNESCO</p>
                    </td>
                    <td>
                        <p><a href="http://tcg.uis.unesco.org/regional-meetings/">http://tcg.uis.unesco.org/regional-meetings/</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>7</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Вебинар по показателю ЦУР 6.5.2: «Оказание странам поддержки в
                            подготовке национальных отчетов в рамках второго цикла отчетности»<strong>&nbsp;</strong>
                        </p>
                    </td>
                    <td>
                        <p style="text-align: center;">28 мая 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p><a href="https://www.sdg6monitoring.org/indicator-652/">https://www.sdg6monitoring.org/indicator-652/</a>
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            <a href="https://unece.org/environmental-policy/events/webinars-sdg-indicator-652-supporting-countries-preparing-national">
                                https://unece.org/environmental-policy/events/webinars-sdg-indicator-652-supporting-countries-preparing-national
                            </a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>8</p>
                    </td>
                    <td>
                        <p>7 Форум по Устойчивому Развитию</p>
                    </td>
                    <td>
                        <p style="text-align: center;">20 мая 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">ЭСКАТО ООН</p>
                    </td>
                    <td>
                        <p><a href="https://www.unescap.org/apfsd/7">https://www.unescap.org/apfsd/7</a></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>9</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Мероприятия Виртуального Форума высокого уровня по глобальному
                            управлению геопространственной информацией ООН</p>
                    </td>
                    <td>
                        <p style="text-align: center;">26 мая,</p>
                        <p style="text-align: center;">2 и 9 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UN-GGIM</p>
                    </td>
                    <td>
                        <p><a href="http://ggim.un.org/meetings/2020/Virtual_HLF/">http://ggim.un.org/meetings/2020/Virtual_HLF/</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>10</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Основы дистанционного зондирования и геопространственного
                            анализа</p>
                    </td>
                    <td>
                        <p style="text-align: center;">8-12 июня 2020</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">Всемирный Банк</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403204"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>11</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Виртуальная дискуссия о том, как статистические управления вносят
                            свой вклад в управление катастрофой Covid-19 и оценку ее последствий</p>
                    </td>
                    <td>
                        <p style="text-align: center;">10 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p>
                            <a href="https://unece.org/statistics/events/how-are-national-statistical-offices-contributing-managing-covid-19-disaster">
                                https://unece.org/statistics/events/how-are-national-statistical-offices-contributing-managing-covid-19-disaster
                            </a>
                        </p>
                        <p>&nbsp;</p>
                        <p><a href="https://www.youtube.com/watch?v=9Q3wPDCTb58">https://www.youtube.com/watch?v=9Q3wPDCTb58</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>12</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Азиатско-Тихоокеанская статистическая неделя</p>
                    </td>
                    <td>
                        <p style="text-align: center;">15-18 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNESCAP</p>
                    </td>
                    <td>
                        <p><a href="https://www.unescap.org/events/asia-pacific-statistics-week-2020">https://www.unescap.org/events/asia-pacific-statistics-week-2020</a>
                        </p>
                        <p>&nbsp;</p>
                        <p><a href="https://www.youtube.com/watch?v=RGKK-JHFg2c&amp;feature=youtu.be">https://www.youtube.com/watch?v=RGKK-JHFg2c&amp;feature=youtu.be</a>
                        </p>
                        <p>&nbsp;</p>
                        <p><a href="https://www.youtube.com/watch?v=Qh5Sj1KbFjc&amp;feature=youtu.be">https://www.youtube.com/watch?v=Qh5Sj1KbFjc&amp;feature=youtu.be</a>
                        </p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>13</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Open SDG Webinar</p>
                    </td>
                    <td>
                        <p style="text-align: center;">17 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UK Office for National Statistics (ONS), UN Statistics Division
                            (UNSD) and Center for Open Data Enterprise (CODE)</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403205"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>14</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Вебинар по взаимосвязям ЦУР</p>
                    </td>
                    <td>
                        <p style="text-align: center;">18-19 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403206"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>15</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Седьмое Пленарное заседание Европейского региона Комитета экспертов
                            ООН по глобальному управлению геопространственной информацией (UN-GGIM: Europe)</p>
                    </td>
                    <td>
                        <p style="text-align: center;">22-23 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UN-GGIM</p>
                    </td>
                    <td>
                        <p>
                            <a href="https://un-ggim-europe.org/register/seventh-plenary-meeting-of-un-ggim-europe-webinar/">https://un-ggim-europe.org/register/seventh-plenary-meeting-of-un-ggim-europe-webinar/</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>16</p>
                    </td>
                    <td>
                        <p style="text-align: left;">68-е пленарное заседание Конференции европейских статистиков</p>
                    </td>
                    <td>
                        <p style="text-align: center;">22-24 июня 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p><a href="https://unece.org/statistics/events/CES2020">https://unece.org/statistics/events/CES2020</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>17</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Вебинар с Мексикой по финансированию ЦУР, который огранизован
                            совместно Региональным бюро ПРООН в г. Стамбул, ПРООН в Мексике и ПРООН в Казахстане</p>
                    </td>
                    <td>
                        <p style="text-align: center;">16 июля 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403207"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>18</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Семинар по вопросам гендерной статистики и ЦУР до 2030 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">6-7 августа 2020</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403295"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>19</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Вебинар «Измерение использования времени и количественная оценка
                            ухода: Проблемы и стратегии в разработке и согласовании обследований использования
                            времени»</p>
                    </td>
                    <td>
                        <p style="text-align: center;">20 августа 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UN-Women</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403289"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>20</p>
                    </td>
                    <td>
                        <p style="text-align: left;">7-ая Сессия Комитета по Статистике СИАТО</p>
                    </td>
                    <td>
                        <p style="text-align: center;">26-28 августа 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">ЭСКАТО</p>
                    </td>
                    <td>
                        <p><a href="https://www.unescap.org/events/committee-statistics-seventh-session">https://www.unescap.org/events/committee-statistics-seventh-session</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>21</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Семинар по ЦУР 6.5.1 «Степень внедрения комплексного управления
                            водными ресурсами»</p>
                    </td>
                    <td>
                        <p style="text-align: center;">15 сентября 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403290"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>22</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Обсуждение методологии расчета индикатора 17.4.1</p>
                    </td>
                    <td>
                        <p style="text-align: center;">9 октября 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">БНС АСПР РК</p>
                        <p style="text-align: center;">МИД РК</p>
                    </td>
                    <td>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403291"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>23</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Онлайн совещания ЕЭК ООН по гендерной статистике</p>
                    </td>
                    <td>
                        <p style="text-align: center;">12-14 октября 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UNECE</p>
                    </td>
                    <td>
                        <p><a href="https://statswiki.unece.org/pages/viewpage.action?pageId=285216377">https://statswiki.unece.org/pages/viewpage.action?pageId=285216377</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>24</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Гендерные аспекты и изменение климата</p>
                    </td>
                    <td>
                        <p style="text-align: center;">27 октября 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">МЭГПР РК</p>
                        <p style="text-align: center;">ПРООН</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403292"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>25</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Сбор и распространение индикаторов ЦУР: Опыт Узбекистана</p>
                    </td>
                    <td>
                        <p style="text-align: center;">12 ноября 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">SESRIC</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403293"><em>Скачать</em></a>
                        </p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>26</p>
                    </td>
                    <td>
                        <p style="text-align: left;">Региональный семинар по укреплению систем данных о насилии в
                            отношении женщин для стран Европы и Центральной Азии</p>
                    </td>
                    <td>
                        <p style="text-align: center;">8 декабря 2020 года</p>
                    </td>
                    <td>
                        <p style="text-align: center;">UN-Women</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                        <p>
                            <a href="api/getFile/?docId=ESTAT403294"><em>Скачать</em></a>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>


        </div>
    </div>

@endsection
