@extends('layouts.app')

@section('title', 'Мыңжылдықтың Даму Мақсаттары')

@section('content')

    <div id="main-content" class="container" role="main" style="padding-top: 150px; padding-bottom: 80px; ">
        <div class="content-page">
            <div class="top-block">
                <div class="block-title">Мыңжылдықтың Даму Мақсаттары</div>
            </div>


            <div class="top-block">
                <div class="block-title">1 мақсат. Шегіне жеткен кедейлік пен аштықты жою</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/d80/l68e45wbkc8i0buowfkfueskow2e7o0i/E_SDG_Icons_02.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/346/rw8z3s0danc3lpabaoqlucnwqowrkox2/Кедейлік тереңдігі және өткірлігі көрсеткіштері.png">
                </div>

                <div class="small-block-title mb-2">
                    Көрсеткіштер
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/043/74nqc2m6hci84fchkso48406qq01fgb1/1.1..xlsx">Сатып алу паритеті бойынша табысы төмен халық үлесі: СҚТ бойынша күніне 1 АҚШ долларынан төмен
                            табысы бар; СҚТ бойынша күніне 2,5 АҚШ долларынан төмен табысы бар; СҚТ бойынша күніне 5 АҚШ долларынан
                            төмен табысы бар</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/ea9/sutwpku78bdmn87ljn9cbbwg4efr3039/1.2..xlsx">Кедейлік коэффиценті пайызбен күніне АҚШ-тың (СҚТ) 1 доллар есебінен / Кедейлік тереңдігі,
                            өлшемімен: күнкөрістің ең төменгі деңгейі шамасынан төмен табысы бар; СҚТ бойынша күніне 1 АҚШ
                            долларынан төмен табысы бар; СҚТ бойынша күніне 2,5 АҚШ долларынан төмен табысы бар; СҚТ бойынша күніне
                            5 АҚШ долларынан төмен табысы бар</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/23f/ssgt4n1hx1hf6oo2ar9oscbej730pi4e/1.3..xlsx">Табысы күнкөріс деңгейінен төмен халықтың үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f65/li4uq9wqv7g44vfcw8n1opfob9wjqcmt/1.4..xlsx">Табысы мен тұтынуы құрылымында жиырма пайызға кедей халықтың табыс үлесі, пайызбен</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/ede/qha98lx9sodo29eblh3ngwy6tjmv8xnq/1.5..xlsx">Орташа жан басына шаққанда үй шаруашылығының (тұтынуға пайдаланылған) табысы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/78e/nkmcyhlwj9tsfbnoxvc02i1d1plg0pex/1.6..xlsx">Тұтынуға пайдаланған табыстың күнкөрістің ең төменгі шамасына арақатынасы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/66f/qs21dnukerhog16l1fm94uvwgq0tk5sv/1.7..xlsx">Кедейлік өткірлігі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/849/ih1c15eaot3yhi0j8m9eypycxxy7c2u1/1.8..xlsx">Жан басына шаққанда халықтың ақшалай табысы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/ac2/xz1qknvltq54rim8mzsfsxt23bno3mx1/1.9..xlsx">Нақтылы ақшалай табыстың индексі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/d8d/4uiqlxn3v47kkltf181itooqljxn5nds/1.10..xlsx">Концентрациялық табыс коэффициенті (Джини индексі)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f94/yhsyypjk3t56v96ni5tx047xx1jgquma/1.11..xlsx">Үй шаруашылықтың орташа мөлшері</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/340/hy8krwhcfekjs3jlnwucotjse24wx8i9/1.12..xlsx">Бір жұмысшыға ЖІӨ өсу қарқыны (еңбек өнімділігінің өсуі)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/fc1/1xizkxe17hoqvsyqyszokbvrvao4muh4/1.13..xlsx">Еңбекке жарамды жастағы халықтың жұмыспен қамту деңгейі (еңбекке жарамды жастағы жалпы халық
                            санындағы жұмыспен қамтылған халықтың үлесі): ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/619/13hqu4au58h2b2dvbmvglbzntdsuv2ds/1.14..xlsx">Жұмыспен қамтылған халықтың үлесі: күнкөрістің ең төменгі деңгейі шамасынан төмен табысы бар;
                            СҚТ бойынша күніне 2,5 АҚШ долларынан төмен табысы бар; СҚТ бойынша күніне 5 АҚШ долларынан төмен табысы
                            бар</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/cf3/5vebevhb8jm3ohn59o9124h8lvbxnlyf/1.15..xlsx">Жалпы жұмыспен қамтылғандардың арасында жеке еңбек іс-әрекетімен айналысатындардың және үй
                            шаруашылығында еңбекақы төленбейтін жұмысшылардың үлесі: ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f55/pv7nzvvax0mvyhiyptsctwst0mqvnily/1.16..xlsx">Бес жасқа дейінгі дене салмағы төмен балалар үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/179/b074o3lpq2kh0yzylmlmaep3z7bfkf5o/1.17..xlsx">Табысы азық-түлік қоржынының құнынан төмен халықтың үлесі</a></li>
                </ul>

                <div class="small-block-title mb-2">
                    Басқа графикалық ақпарат:
                </div>
                <ul class="goals-link-list">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/bc3/olmkjpusv3etuu97k30zo0fsdrlitwtq/Жұмыс істейтін кедейлердің үлесі.xls" target="">Жұмыс істейтін "кедейлердің" үлесі (табысы төмен жұмыспен қамтылғандар)</a></li>
                </ul>
            </div>

            <div class="top-block">
                <div class="block-title">2 мақсат. Жалпыға бірдей бастауыш біліммен қамтамасыз ету</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="small-block-title mb-2">
                    Әлемдегі мемлекеттердегі ең кемінде орта білімі бар халық (2006-2010)
                </div>
                <div class="mb-4">
                    <table width="80%" cellspacing="1" cellpadding="1" border="1" align="center" class="mb-2">
                        <tbody>
                        <tr bgcolor="#add8e6">
                            <td style="text-align: center;"><strong>Мемлекеттер</strong></td>
                            <td style="text-align: center;"><strong>Әйелдер</strong></td>
                            <td style="text-align: center;"><strong>ерлер</strong></td>
                        </tr>
                        <tr>
                            <td>Ауғанстан</td>
                            <td>5,8</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>Руанда</td>
                            <td>7,4</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Қытай</td>
                            <td>54,8</td>
                            <td>70,4</td>
                        </tr>
                        <tr>
                            <td>Франция</td>
                            <td>75,9</td>
                            <td>81,3</td>
                        </tr>
                        <tr>
                            <td>Жапония</td>
                            <td>80</td>
                            <td>82,3</td>
                        </tr>
                        <tr>
                            <td>Қырғызстан</td>
                            <td>81</td>
                            <td>81,2</td>
                        </tr>
                        <tr>
                            <td>Моңғолия</td>
                            <td>83</td>
                            <td>81,8</td>
                        </tr>
                        <tr>
                            <td>Нидерланды</td>
                            <td>87,5</td>
                            <td>90,4</td>
                        </tr>
                        <tr>
                            <td>Әзірбайжан</td>
                            <td>90</td>
                            <td>95,7</td>
                        </tr>
                        <tr>
                            <td>Украина</td>
                            <td>91,5</td>
                            <td>96,1</td>
                        </tr>
                        <tr>
                            <td>Молдова (Республика)</td>
                            <td>91,6</td>
                            <td>95,3</td>
                        </tr>
                        <tr>
                            <td>Тәжікстан</td>
                            <td>93,2</td>
                            <td>85,8</td>
                        </tr>
                        <tr>
                            <td>Ресей</td>
                            <td>93,5</td>
                            <td>96,2</td>
                        </tr>
                        <tr>
                            <td>Армения</td>
                            <td>94,1</td>
                            <td>94,8</td>
                        </tr>
                        <tr>
                            <td>АҚШ</td>
                            <td>94,7</td>
                            <td>94,3</td>
                        </tr>
                        <tr>
                            <td>Латвия</td>
                            <td>98,6</td>
                            <td>98,2</td>
                        </tr>
                        <tr bgcolor="#add8e6">
                            <td>Қазақстан</td>
                            <td>99,3</td>
                            <td>99,4</td>
                        </tr>
                        <tr>
                            <td>Ұлыбритания</td>
                            <td>99,6</td>
                            <td>99,8</td>
                        </tr>
                        <tr>
                            <td>Чех Республикасы</td>
                            <td>99,8</td>
                            <td>99,8</td>
                        </tr>
                        <tr>
                            <td><strong>Ең аз дамыған мемлекеттер</strong></td>
                            <td><strong>16,9</strong></td>
                            <td><strong>27,1</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Адам дамуының деңгейі төмен мемлекеттер</strong></td>
                            <td><strong>18</strong></td>
                            <td><strong>32</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Адам дамуының деңгейі орташа мемлекеттер</strong></td>
                            <td><strong>42,1</strong></td>
                            <td><strong>58,8</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Адам дамуының деңгейі өте жоғары мемлекеттер</strong></td>
                            <td><strong>84,7</strong></td>
                            <td><strong>87,1</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Әлем көрсеткіші</strong></td>
                            <td><strong>52,3</strong></td>
                            <td><strong>62,9</strong></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <em>Дереккөзі: Гендерлік теңсіздік индексі - 2012 </em>
                    </p>
                </div>

                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/086/id5fkqpl273q1adjlec47lule8rcbe87/Бастауыш білімдегі гендерлік паритет.png">
                    <em>БҰҰ ЕЭК дереккөзі: <a onclick="return ConfirmMoveLink();" href="http://w3.unece.org/pxweb/?lang=1" target="">http://w3.unece.org/pxweb/?lang=1</a></em>
                </div>

                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/fb0/e1hbpx2m6ju8gxzyai7iuphuch13kbp5/2.18..xlsx">Бастауыш біліммен қамтудың таза коэффициенті</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/026/d5yn0njxaa2ioa6r80h8xbu68umpbnx3/2.19..xlsx">Бастауыш мектепте бірінші сыныптан бастап соңғы сыныпқа дейін
                            оқитындардың үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f5e/f75lahra61rk924iei1f1llsqfw447vy/2.20..xlsx">15-24 жастағы ерлер мен әйелдер арасындағы сауаттылық үлесі:
                            әйелдер; ерлер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/399/1oxzgg7uv46l2nvw2kbqtx9xbt6dv203/2.21..xlsx">Бастауыш, орта және жоғарғы білім жүйесінде ұлдар мен қыздардың
                            арақатынасы: бастауыш білім беру
                            (қыздар/ұлдар); орта білім беру (қыздар/ұлдар); техникалық және кәсіптік білім беру (қыздар/ұлдар);
                            жоғары білім беру (қыздар/ұлдар)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/509/05925j1gw3xxu63ussiq2aljmps9lyve/2.22..xlsx">Орта біліммен қамтудың үлесі (7-17 жас)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/54d/eh5pt78vm679ano0n6pip554q5iyhzyz/2.23..xlsx">Мүмкіндіктері шектеулі балаларды орта біліммен қамтудың үлесі /
                            Орта біліммен қамтылған мүмкіндіктері шектеулі балалардың саны</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/482/x0sn60znrrdt9j86gwx1wlym1b8i6kkt/2.24..xlsx">Техникалық және кәсіптік білім беру мекемелеріне түскен балалардың
                            үлесі (15-17 жастағы халыққа пайызбен)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f08/j9421y8lj2e0w685vzopefa52j27rj4s/2.25..xlsx">Жоғары білім мекемелеріне түскен балалардың үлесі (16-18 жастағы
                            халыққа пайызбен)</a></li>
                </ul>

                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/786/ldvdt6w4z3gn613gsfzo9e17rj8ws0dn/Жоғары білім мекемелеріне түсетін балалар үлесі.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/34c/mxvj2xpo7lsjwhqrkrlu4t77zhh2glta/ҚР білім беру жүйесіндегі әйелдер.jpg">
                </div>

                <div class="small-block-title mb-2">
                    Басқа графикалық ақпарат:
                </div>
                <ul class="goals-link-list">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/db3/jmb239okes66av8yz9h2y3e9ceh4sh5w/Жоғары, техникалық және кәсіптік білім беру мекемелеріне түскен балалардың үлесі.xls" target="">Жоғары, техникалық және кәсіптік білім беру мекемелеріне түскен балалардың үлесі</a>
                    </li>
                </ul>
            </div>

            <div class="top-block">
                <div class="block-title">3 мақсат. Ерлер мен әйелдердің теңдігін қамтамасыз ету, әйелдердің құқықтары мен
                    мүмкіндіктерін кеңейту
                </div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/cd8/a989rhuyotktonxw7w3naz2xoaljsubm/Әлемдегі ерлер мен әйелдердің экономикалық белсенділігі.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/fb9/dj7sfpeaee72dr26akah2d6czk56fy4j/Гендерлік аспектіде халықтың жұмыссыздық деңгейі.png">
                    <p>
                        <em>Дереккөздер: БҰҰ ЕЭК МДМ бойынша база деректері <a href="http://w3.unece.org/pxweb/?lang=1" onclick="return ConfirmMoveLink();" target="">http://w3.unece.org/pxweb/?lang=1</a></em>
                    </p>
                </div>

                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/400/tnfx0652p1dhnttf70cu3hbb7rhtddtb/3.26..xlsx">Ауыл шаруашылылық емес секторындағы жалдамалы еңбекпен айналысатындардың жалпы санындағы ауыл
                            шаруашылылық емес секторындағыақылы еңбекпен айналысатын әйелдер үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/76b/ueas5gc7iij7ij347h2azri5fga4bi2z/3.27..xlsx">Жынысы бойынша жұмыспен дербес қамтылған халықтың үлесі: ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/9b3/94ib3tdghioaekot3tdyg30toti7axwn/3.28..xlsx">Гендерлік аспектіде халықтың жұмыссыздық деңгейі: ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/2e9/vitftqfrwyu921yynqwbqfp1a20m1b9x/3.29..xlsx">Жастар арасындағы жұмыссыздық деңгейі (15-24 жастағы): ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/860/fy87ymzmcyq1icodv71vsj8h887rqqdi/3.30..xlsx">Жастар арасындағы жұмыссыздық деңгейімен ересектер арасындағы жұмыссыздық деңгейінің арақатынасы
                            (коэффициент): ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/e13/5u4rgu6ooazel7kb1bjsvo7wx59pqnho/3.31..xlsx">Жұмыссыздардың жалпы санынан жұмыссыз жастар үлесі: ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f00/lp774nfu0a1eaorjnql7n9tpflt8ynyd/3.32..xlsx">Жас халықтың жалпы санынан жұмыссыз жастар үлесі (15-24 жастағы): ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/389/q8e75kga82d2kf4zq7nw5r3v63e47dn3/3.33..xlsx">Парламент депутаттары арасында әйелдер үлесі (Мәжіліс)</a></li>
                </ul>

                <div class="goal-img text-center">
                    <img src="https://stat.gov.kz/upload/medialibrary/eee/igtfmf6tt3l8a6rvdfbd9jdelujp7u90/Әр түрлі мемлекеттердің  Парламенттерінде әйелдердің алатын үлесі.png">
                    <p>
                        <em>БҰҰ ЕЭК дереккөзі: <a href="http://w3.unece.org/pxweb/?lang=1">http://w3.unece.org/pxweb/?lang=1</a>
                        </em>
                    </p>
                </div>
            </div>

            <div class="top-block">
                <div class="block-title">4 мақсат. Балалар өлімінің деңгейін қысқарту</div>
            </div>
            <div class="white-bg-block mb-4 goals">
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>

                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/c3a/55t0qsx4b2hlyecbqig3n5fcllxbdyx0/детская смертность в мире_kz.png">
                </div>
                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/d3e/73hg0yxe80ui8rkc13nlazryhwt73hi1/4.34..xlsx">Бес жасқа дейін балалар өлімінің коэффициенті</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/04b/p53p8wyujlm1jq013hgiam4nw2eike4g/4.35..xlsx">Нәрестелер өлімінің коэффициенті</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/258/9blxljg6gz7phirlwcnpm07gxkhwpi8b/4.36..xlsx">Қызылшаға қарсы екпе жасалған бір жасар балалар үлесі</a></li>
                </ul>
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center">
                    <img src="https://stat.gov.kz/upload/medialibrary/b81/wxvtvqsqjnloiw7wy3w660f7sh41hniy/Бала өлімінің серпіндігі.png">
                </div>
            </div>

            <div class="top-block">
                <div class="block-title">5 мақсат. Аналарды қорғауды жақсарту</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/47a/igd9i25ysh2u812bdnrh8w18hcqg058n/Елдердегі аналар өлімінің коэффициенті.png">
                    <p>
                        <em>БҰҰ ЕЭК дереккөзі: <a href="http://w3.unece.org/pxweb/?lang=1">http://w3.unece.org/pxweb/?lang=1</a>
                        </em>
                    </p>
                </div>

                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/7f5/th74rp5oemtqojxkf2dmfpppaqb12uns/5.37..xlsx">Аналар өлімінің коэффициенті</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/fa2/px7nuudgr9gzgyqgdu05ybejxac3p9b0/5.38..xlsx">Босанатын әйелге білікті көмек көрсету нәтижесінде туылған нәрестелер үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/5ad/ec458cjblt6cd75gcdehtmlqvw0q5pzu/5.39..xlsx">Контрацепцияны пайдаланатын халық үлесі (15-49 жастағы әйелдер пайызы)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/212/nba39tao0fovc1ocxscq1j3h8da4y38a/5.40..xlsx">Жас өспірімдер арасындағы туу коэффициенті (15-19 жас)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/7c3/6zwoen6stb75ay5o2zcnllucebpph0nd/5.41..xlsx">Босанғанға дейін қызмет көрсетумен қамту (терапевт қараған жүкті әйелдер / ең аз дегенде бір
                            жолығу)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/015/3mqxwm6eebna82z1ejki3sldniapp573/5.42..xlsx">Отбасыны жоспарлау қызметіне жоспарында қанағаттандырылмаған қажеттілік</a></li>
                </ul>
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center">
                    <img src="https://stat.gov.kz/upload/medialibrary/bbc/ubzdloelomxs060g0skdev9kuvyb625m/2005 жылдан бастап 2015 жылға дейін аналар өлімі деңгейінің серпінділігі.png">
                </div>
            </div>

            <div class="top-block">
                <div class="block-title">6 мақсат. АИВ/ЖИТС және туберкулез, безгек және басқа аурулармен күрес</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/daf/mpzv6q5zjtjpmb1sneg2fl6y3x5lqc22/АИВ-инфекциясының 15-49 жастар арасында таралуы.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/c1c/894om52tb0zmyy5wbr5ob7pu11r3k1aw/Туберкулездің таралуы.png">
                    <p>
                        <em>БҰҰ ЕЭК дереккөзі: <a href="http://w3.unece.org/pxweb/?lang=1">http://w3.unece.org/pxweb/?lang=1</a>
                        </em>
                    </p>
                </div>
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/bfd/w6xh1o8gj5swjatjb9b2gs1o61525qqe/Туберкулезбен сырқаттанушылық, оның кеңінен таралуы мен одан өлу деңгейі.png">
                </div>
                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/b5b/vu8vutpd0sbscwfan6qd9oq2nbkhnmj5/6.43..xlsx">15 жастан 29 жасқа дейін ЖИТС-пен инфекцияланған халықтың үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/d01/go4vwi1lohrpojkbeshfabcodb7xqx1q/6.44..xlsx">15 жастан 49 жасқа дейін ЖИТС-пен инфекцияланған халықтың үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/099/q8nywt0ktxd0wwisydxoejh356hvdidj/6.45..xlsx">ЖИТС-мен инфекцияланған, есірткіні инъекциялық түрде қабылдайтындардың</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/97f/nhr49dn9zmwy9dyw3osfjrpcy2dd8tp6/6.46..xlsx">Соңғы инъекция кезінде стерильденген шприцтерді қолданғаны туралы хабарлаған инъекциялы есірткі
                            қабылдайтындардың пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/b40/2c025yhafkwvg84e0vlmvxad202dcswp/6.47..xlsx">Презервативті қолдануды көрсеткен секс-жұмысшыларының пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/4fe/eboec137mchugqhiotkcie3xgb93b3jx/6.48..xlsx">Антиретровирустық профилактиканың толық курсын алған жүкті әйелдердің позитивті-ЖИТС пайызы</a>
                    </li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/8de/vrarppz04mytq1o0ptdort5b557jgd5y/6.49..xlsx">Антиретровирустық профилактиканың толық курсын алған позитивті ЖИТС аналардан туылған
                            нәрестелердің пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/daa/d0gen3pddqekjl39lj6pjaf5h7bbv24t/6.50..xlsx">ЖИТС -ға тестіленген донорлық қан үлгілерінің пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/942/cal30apqq19ao8u7z4udclpj1l6obmp7/6.51..xlsx">Антивирустық препараттарға қолжетімділігі бар ЖИТС инфекцияланудың соңғы кезеңінде жүргендердің
                            пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/be5/s9z17ytekzy1o5lrpidk0wqnw2lk1dvw/6.52..xlsx">АИВ/ЖИТС таралу жолдары туралы дұрыс түсінігі бар 15-24 жастағы халықтың үлесі: ерлер;
                            әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/532/ucgt9zgbxpcvv7brh26x30i3mq5wyngx/6.53..xlsx">10 жастан 14- жасқа дейінгі ата-аналары бар жетім балалар және балалар арасындағы оқитындар
                            үлесінің арақатынасы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/c1b/qkru8slzkr0ud77de7p9hzf6ykuv9o8c/6.54..xlsx">Жоғары тәуекелді соңғы жыныстық қатынас кезінде презервативті пайдаланған тұлғалардың пайызы:
                            ерлер; әйелдер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/40e/qb0rq1pvln9ggo3q588iez9pvgn6py3p/6.55..xlsx">Безгекпен ауыру және одан өлгендердің деңгейі : безгекпен ауыру деңгейі; безгек ауыруынан
                            өлгендердің деңгейі: безгек ауыруының деңгейі; безгек ауырудан өлгендердің деңгейі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f17/7qa6pbyqqv0im2rai6x4hp7c74pgw05o/6.56..xlsx">Инсекцидтермен өңделген тор астында ұйықтайтын 5 жасқа дейінгі балалардың үлесі;</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/9f6/jc3gq4aqzz1msik6nc9gp062tqjmq8yx/6.57..xlsx">Безгекке қарсы құралдармен емдейтін 5 жасқа дейінгі безгекпен ауыратын балалар үлесі;</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/698/3ybd7pbaow40u7qrwxvknita8xpecc44/6.58..xlsx">Туберкулезбен сырқаттанушылық, оның кеңінен таралуы мен одан өлу деңгейі: туберкулездың таралу
                            деңгейі; Туберкулезбен сырқаттанушылық деңгейі (жыл соңына есепте тұратын аурулар саны); туберкулезден
                            өлу деңгейі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/9a2/n88iw1wqiflvld2c1yy5uln73mx7r02j/6.59..xlsx">Диагностика мен емдеу тікелей дәрігердің бақылауымен қысқаша емдеу курсы барысында өткен
                            туберкулезбен ауыру жағдайларының саны</a></li>
                </ul>
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/299/kx7582wr3iy47nmurohedkiclm5acd0n/ЖИТС - инфекциясының таралу деңгейі.png">
                </div>
                <div class="small-block-title mb-2">
                    Басқа графикалық ақпарат:
                </div>
                <ul class="goals-link-list">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/6e7/zwp32fuxlv7pay5dtg37d0g1g0wl4de1/расходы на вич_kz.png" target="">Ішкі мемлекеттік дереккөздер есебінен АИВ-қа байланысты мемлекет шығындары</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/5d7/vyj48tdxgwzf2mijebaqqcny1d3354j1/расходны на вич_международные источники_kz.png" target="">Халықаралық дереккөздер есебінен АИВ-қа байланысты мемлекет шығындары</a></li>
                </ul>
            </div>

            <div class="top-block">
                <div class="block-title">7 мақсат. Экологиялық тұрақтылықты қамтамасыз ету</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/e68/459m5nkgpqll6k92dw4xkg528nbb4qlq/энергоемкость ввп_kz.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/066/05rro7ww4apx31uyunsw953z0jadtw0c/суды пайдалану.jpg">
                    <img src="https://stat.gov.kz/upload/medialibrary/da0/jb9m3i6zhfvk8xeamw2vuj5ofw43z9ck/Тұрғын үймен қамтамасыз ету.png">
                    <img src="https://stat.gov.kz/upload/medialibrary/d30/a3bf0u6en5qgy2s1vy0ii5xono619xn6/Таза ауыз су көзін пайдаланатын халықтың үлесі, 2011ж..png">
                    <p>
                        <em>БҰҰ ЕЭК дереккөзі: <a href="http://w3.unece.org/pxweb/?lang=1">http://w3.unece.org/pxweb/?lang=1</a>
                        </em>
                    </p>
                </div>
                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/f4c/0d825yxuegkkoxlaoapkso5s1os1o4z8/7.60..xlsx">Орман алқаптары басқан жерлер</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/1a3/e8f28qtfbu1bby8ujumx18h8ud6b5phh/7.61..xlsx">Жер көлемі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/cd3/r1bvb2ql2ndg4723mg7twb7phgeo2r0s/7.62..xlsx">Орман өскен жер алаңдарының пайызы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/9e6/fdqrnz4o4my4022jezd03e9j1sp6yvbn/7.63..xlsx">Жан басына шаққанда қос тотықты көміртектің шығарылуы: ЖІӨ (СҚТ) 1 долларына жан басына шаққанда
                            қос тотықты көміртектің шығарлуы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/31b/9p0w3o3imnl8yz67qsdr9109ix63vzx2/7.64..xlsx">Озонды бұзатын заттарды тұтыну</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/96c/mvplw2izyk690bpisklyfz5leen7dbpo/7.65..xlsx">ЖІӨ-нің энергия сыйымдылығы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/04b/66ltvxu5p5h7sit9556xf4e017l72f4b/7.66..xlsx">Суды пайдалану</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/75a/6hn22g2yzvllwqwv09z60lwuo9wn4jhf/7.67..xlsx">Ерекше қорғалатын табиғи аумақтар алаңы (қорықтар, ұлттық табиғи парктер мен резерваттар,
                            табиғат ескерткіштері)</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/28a/be7e9kzd7443mp1kynaumsqqk5zve5e5/7.68..xlsx">Су құбыры суымен қамтылған үй шаруашылықтары санының үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/a8f/zvuboci1sjz6ue5342l3x3ec2jtn1efp/7.69..xlsx">Сумен қамтамасыз етудің орталықтандырылмаған көзінен ауыз сумен қамтамасыз етілген үй
                            шаруашылықтарының үлесі: өз ауласындағы құдық; қоғамдық колонка; қоғамдық құдық; бұлақ, өзен, көл,
                            тоған; су тасушы тасиды</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/c5e/scaxp3or75ybzgj1uw24ns598d4ztayk/7.70..xlsx">Үй шаруашылығы өмірінің санитарлық-гигиеналық жағдайы туралы мәліметтер: кәріздің орталықтанған
                            жүйесімен әжетхананы пайдаланатын үй шаруашылықтарының үлесі; кәріздің жекеленген жүйесімен әжетхананы
                            пайдаланатын үй шаруашылықтарының үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/202/46ve7flx1mszo0t0n10svlxsy1ki137k/7.71..xlsx">Жеке немесе жалға алған жылжымалы мүлігімен үй шаруашылығының үлесі: жеке; жалға алған</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/725/b6882iw4dhzhuv8yapudla73wzqmlolq/7.72..xlsx">Жалпы көлемінен бір адамға халықты тұрғын үймен орташа қамтамасыздандыру</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/d49/jmyu7grmjavgwdszwyih8gx4ndbttbrq/7.73..xlsx">Барлық тұрғын үй қорының жабдықталған жалпы ауданының үлес салмағы ( %-бен): , кәріздермен,
                            орталықған жылытумен, ванналармен, газбен, ыстық сумен жабдықтау, едендік электроплиталармен: су
                            құбырымен; кәріздермен; орталықтан жылытумен; ваннамен немесе себезгімен; ыстық сумен жабдықтау; газбен;
                            едендік электроплиталармен</a></li>
                </ul>
                <div class="small-block-title mb-2">
                    Басқа графикалық ақпарат:
                </div>
                <ul class="goals-link-list">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/074/97cyugsfae18394d3zl7r2i6rzvmwdww/Ерекше қорғалатын табиғи аумақтар және орман-тоғайлылығы.xls" target="">Ерекше қорғалатын табиғи аумақтар және орман-тоғайлылығы</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/553/r34w19w8uoxb5ud98p8eafhdyhsw23kl/Сумен қамтамасыз етудің орталықтандырылмаған  көзінен ауыз сумен қамтамасыз етілген үй шаруашылықтарының үлесі.xls" target="">Сумен қамтамасыз етудің орталықтандырылмаған көзінен ауыз сумен қамтамасыз етілген үй
                            шаруашылықтарының үлесі</a></li>
                </ul>
            </div>

            <div class="top-block">
                <div class="block-title">8 мақсат. Даму мақсатында жаһандық серіктестікті қалыптастыру</div>
            </div>

            <div class="white-bg-block mb-4 goals">
                <div class="goal-img text-center mb-4">
                    <img src="https://stat.gov.kz/upload/medialibrary/268/xaz24cnlzlywbevq2ng2ugoqzgc5m19u/Әлем елдерінде интернетке қол жетімділік.png">
                    <p>
                        <em>БҰҰ ЕЭК дереккөзі: <a href="http://w3.unece.org/pxweb/?lang=1">http://w3.unece.org/pxweb/?lang=1</a>
                        </em>
                    </p>
                </div>

                <div class="small-block-title mb-2">
                    Көрсеткіштері
                </div>
                <ul class="goals-link-list mb-4">
                    <li><a href="https://stat.gov.kz/upload/medialibrary/5f0/2iutscqwpyj7atcvoddoilozxyj0ze2v/8.74..xlsx">ЖҰТ теңізге шыға алмайтын дамушы елдердің ДРК үлесі</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/452/ae8k7rtivnx52j84h4wrlpqnihquc5cn/8.75..xlsx">Телефон желісінің саны</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/edc/fnh0tttrflx3hdeljpl6u8m2dndfuwst/8.76..xlsx">Ұялы телефон байланысымен қолданатын халықтың саны</a></li>
                    <li><a href="https://stat.gov.kz/upload/medialibrary/96c/twhqbvrqirydbgjblf9s8xgf0l6qgg6g/8.77..xlsx">Интернет желісімен пайдаланушылар саны</a></li>
                </ul>
                <div class="small-block-title mb-2">
                    Графикалық ақпарат
                </div>
                <div class="goal-img text-center">
                    <img src="https://stat.gov.kz/upload/medialibrary/5c0/18yt8po0fhtsbf8gkkrk4dqpefkpchqk/Интернет желісін пайдаланушылар.png">
                </div>
            </div>




        </div>
    </div>
@endsection
