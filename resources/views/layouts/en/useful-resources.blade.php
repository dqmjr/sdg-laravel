@extends('layouts.app')

@section('title', 'Useful resources on SDG')

@section('content')

    <div id="main-content" class="container" role="main" style="padding-top: 150px; padding-bottom: 80px; ">
        <div class="content-page">
            <div class="top-block">
                <div class="block-title">Полезные ресурсы по ЦУР</div>
            </div>
            <div>
                <p><a href="https://www.un.org/sustainabledevelopment/ru/" onclick="return ConfirmMoveLink();"
                      target="_blank">Сайт ООН по ЦУР </a></p>
                <p><a href="https://unstats.un.org/sdgs/indicators/database/" onclick="return ConfirmMoveLink();"
                      target="_blank">Глобальная база данных ООН по ЦУР</a></p>
                <p><a href="https://www.unece.org/sustainable-development/sustainable-development/home.html"
                      onclick="return ConfirmMoveLink();" target="_blank">Статистический отдел ЕЭК ООН</a></p>
                <p><a href="https://www.unescap.org/2030-agenda/sustainable-development-goals"
                      onclick="return ConfirmMoveLink();" target="_blank">Статистический отдел ЭСКАТО</a></p>
                <p><a href="https://unstats.un.org/sdgs/metadata/" onclick="return ConfirmMoveLink();" target="_blank">Методология
                        ООН к глобальным индикаторам ЦУР на английском языке</a></p>
                <p>&nbsp;</p>
                <div class="top-block">
                    <div class="block-title">Видеоролики</div>
                </div>

                <table width="100%">
                    <tbody>
                    <tr>
                        <td style="text-align: center;">
                            <p><strong>№</strong></p>
                        </td>
                        <td style="text-align: center;">
                            <p><strong>Наименование</strong></p>
                        </td>
                        <td style="text-align: center;">
                            <p><strong>Ссылка </strong></p>
                        </td>
                        <td style="text-align: center;">
                            <p><strong>Организатор</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>1</p></td>
                        <td style="text-align: left;"><p>«Преобразование нашего мира: Повестка дня в области Устойчивого
                                развития на период до 2030 года»</p></td>
                        <td style="text-align: center;">
                            <p>
                                <a href="api/getFile/?docId=ESTAT404791"><em>Скачать видеоролик</em></a>
                            </p>
                        </td>
                        <td style="text-align: center;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td><p>2</p></td>
                        <td style="text-align: left;">
                            <p>Первый казахстанский форум по достижению Целей в области устойчивого развития,</p>
                            <p>16-17 мая 2019 года</p>
                        </td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=E8YdQu_GlHM">https://www.youtube.com/watch?v=E8YdQu_GlHM</a>
                            </p>
                            <p><a href="https://www.youtube.com/watch?v=2xC5g8HtKMs">https://www.youtube.com/watch?v=2xC5g8HtKMs</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>AstanaEconomicForum 2019</p></td>
                    </tr>
                    <tr>
                        <td><p>3</p></td>
                        <td style="text-align: left;"><p>Реализация Целей устойчивого развития в Казахстане</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=YLg1zoLEJfI">https://www.youtube.com/watch?v=YLg1zoLEJfI</a>
                            </p>
                        </td>
                        <td style="text-align: center;">
                            <p>16 июля 2019г. в рамках Политического форума высокого уровня по устойчивому развитию</p>
                            <p>в г. Нью-Йорк Казахстан представил первый Добровольный национальный обзор по
                                достижению Целей устойчивого развития</p>
                        </td>
                    </tr>
                    <tr>
                        <td><p>4</p></td>
                        <td style="text-align: left;"><p>ЦУР 1 «Ликвидация нищеты»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=4LOuidjKrXo">https://www.youtube.com/watch?v=4LOuidjKrXo</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>5</p></td>
                        <td style="text-align: left;"><p>ЦУР 2 «Ликвидация голода»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=fiPYbQpdvXI">https://www.youtube.com/watch?v=fiPYbQpdvXI</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>6</p></td>
                        <td style="text-align: left;"><p>ЦУР 3 «Хорошее здоровье и благополучие»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=t8REEaYv-Ec">https://www.youtube.com/watch?v=t8REEaYv-Ec</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>7</p></td>
                        <td style="text-align: left;"><p>ЦУР 4 «Качественное образование»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=lHcydpb4SqQ">https://www.youtube.com/watch?v=lHcydpb4SqQ</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>8</p></td>
                        <td style="text-align: left;"><p>ЦУР 5 «Гендерное равенство»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=WTZeuJhbvRI">https://www.youtube.com/watch?v=WTZeuJhbvRI</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>9</p></td>
                        <td style="text-align: left;"><p>ЦУР 6 «Чистая вода и санитария»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=02beYB_PZEM">https://www.youtube.com/watch?v=02beYB_PZEM</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>10</p></td>
                        <td style="text-align: left;"><p>ЦУР 7 «Недорогостоящая и чистая энергия»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=3lUAACkkOps">https://www.youtube.com/watch?v=3lUAACkkOps</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>11</p></td>
                        <td style="text-align: left;"><p>ЦУР 8 «Достойная работа и экономический рост»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=TKR4DpAIRhs">https://www.youtube.com/watch?v=TKR4DpAIRhs</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>12</p></td>
                        <td style="text-align: left;"><p>ЦУР 9 «Индустриализация, иноовации и инфраструктура»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=wR9KmHqm3ec">https://www.youtube.com/watch?v=wR9KmHqm3ec</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>13</p></td>
                        <td style="text-align: left;"><p>ЦУР 10 «Уменьшение неравенства»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=3abDTNyCyrA">https://www.youtube.com/watch?v=3abDTNyCyrA</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>14</p></td>
                        <td style="text-align: left;"><p>ЦУР 11 «Устойчивые города и населенные пункты»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=uf1QUbjwPe0">https://www.youtube.com/watch?v=uf1QUbjwPe0</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>15</p></td>
                        <td style="text-align: left;"><p>ЦУР 12 «Ответственное потребление и производство»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=7feFUY8pSLg">https://www.youtube.com/watch?v=7feFUY8pSLg</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>16</p></td>
                        <td style="text-align: left;"><p>ЦУР 13 «Борьба с изменением климата»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=ejhX2j0uX2g">https://www.youtube.com/watch?v=ejhX2j0uX2g</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>17</p></td>
                        <td style="text-align: left;"><p>ЦУР 14 «Сохранение морских экосистем»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=H_KTgZTr63k">https://www.youtube.com/watch?v=H_KTgZTr63k</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>18</p></td>
                        <td style="text-align: left;"><p>ЦУР 15 «Сохранение экосистем суши»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=nhNGhPDgLJE">https://www.youtube.com/watch?v=nhNGhPDgLJE</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>19</p></td>
                        <td style="text-align: left;"><p>ЦУР 16 «Мир, правосудие и эффективные институты»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=8UpfSYT2QVA">https://www.youtube.com/watch?v=8UpfSYT2QVA</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    <tr>
                        <td><p>20</p></td>
                        <td style="text-align: left;"><p>ЦУР 17 «Партнерство в интересах устойчивого развития»</p></td>
                        <td style="text-align: center;">
                            <p><a href="https://www.youtube.com/watch?v=qoJx7WrmBts">https://www.youtube.com/watch?v=qoJx7WrmBts</a>
                            </p>
                        </td>
                        <td style="text-align: center;"><p>ПРООН в Казахстане</p></td>
                    </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
            </div>

        </div>
    </div>
@endsection
