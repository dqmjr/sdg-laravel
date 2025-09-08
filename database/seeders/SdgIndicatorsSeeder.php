<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SdgGoal;
use App\Models\SdgIndicator;

class SdgIndicatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chartData = [
            [
                "title" => "Ликвидация нищеты",
                "data" => [
                    [ "title" => "1.1.1. Доля населения с доходом по паритету покупательной способности менее: 2,15; 3,2; 5,5; 6,85 долларов США по ППС в день", "status" => "good", "value" => 100, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-1-1/" ],
                    [ "title" => "1.2.1 Доля населения, имеющего доходы ниже величины прожиточного минимума", "status" => "bad", "value" => 2.1, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-2-1/" ],
                    [ "title" => "1.4.2 Доля взрослого населения, владеющего землей (количество собственников и землепользователей)", "status" => "bad", "value" => -4.3, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-4-2/" ],
                    [ "title" => "1.5.1 Число пострадавших и погибших в результате чрезвычайных ситуаций природного характера", "status" => "good", "value" => -1.0, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-5-1/" ],
                    [ "title" => "1.5.2 Сумма ущерба от чрезвычайных ситуаций природного и техногенного характера", "status" => "bad", "value" => 140188105, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-5-2/" ],
                    [ "title" => "1.a.2 Доля расходов на основные услуги (образование, здравоохранение и социальную защиту) в общей сумме государственных расходов", "status" => "good", "value" => 4.2, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-a-2/" ],
                    [ "title" => "1.b.1 Доля государственных расходов на социальную защиту в процентах к общему бюджету", "status" => "good", "value" => 0.8, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/1-b-1/" ],
                ]
            ],
            [
                "title" => "Ликвидация голода",
                "data" => [
                    [ "title" => "2.1.1 Распространенность недоедания", "status" => "bad", "value" => 0.1, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-1-1/" ],
                    [ "title" => "2.1.2 Уровень умеренного или острого отсутствия продовольственной безопасности населения", "status" => "good", "value" => -6.6, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-1-2/" ],
                    [ "title" => "2.1.2.1 Доля обеспеченности внутреннего рынка продовольственными товарами отечественного производства", "status" => "good", "value" => 1.5, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-1-2-1/" ],
                    [ "title" => "2.2.1 Распространенность задержки роста среди детей в возрасте до пяти лет", "status" => "good", "value" => -5.1, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-2-1/" ],
                    [ "title" => "2.2.2 Распространенность неполноценного питания среди детей до пяти лет", "status" => "bad", "value" => 1.5, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-2-2/" ],
                    [ "title" => "2.2.3 Заболеваемость анемии среди беременных женщин", "status" => "good", "value" => -5.4, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-2-3/" ],
                    [ "title" => "2.3.1 Производительность труда в сельском хозяйстве", "status" => "good", "value" => 3926.6, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-3-1/" ],
                    [ "title" => "2.4.1 Удельный вес внедренных технологий точечного земледелия", "status" => "good", "value" => 10.44, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-4-1/" ],
                    [ "title" => "2.4.1.1 Площадь орошаемых земель с водосберегающими технологиями", "status" => "good", "value" => 360.2, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-4-1-1/" ],
                    [ "title" => "2.5.1 Количество генетических ресурсов для продовольствия и сельского хозяйства", "status" => "neutral", "value" => 0, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-5-1/" ],
                    [ "title" => "2.5.2 Прирост численности редких и исчезающих видов копытных", "status" => "good", "value" => 6.5, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-5-2/" ],
                    [ "title" => "2.a.1 Индекс ориентированности на сельское хозяйство", "status" => "bad", "value" => -0.2, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-a-1/" ],
                    [ "title" => "2.c.1 Показатель ценовых аномалий на рынке продовольствия", "status" => "bad", "value" => 101.3, "unit" => "тыс. тг.", "url" => "https://kazstat.github.io/sdg-site-kazstat/ru/2-c-1/" ],
                ]
            ],
        ];

        foreach ($chartData as $goalData) {
            $goal = SdgGoal::where('title', $goalData['title'])->first();

            if ($goal) {
                foreach ($goalData['data'] as $indicator) {
                    SdgIndicator::create([
                        'goal_id' => $goal->id,
                        'title'   => $indicator['title'],
                        'status'  => $indicator['status'],
                        'value'   => $indicator['value'],
                        'unit'   =>  $indicator['unit'],
                        'url'     => $indicator['url'],
                    ]);
                }
            }
        }
    }
}
