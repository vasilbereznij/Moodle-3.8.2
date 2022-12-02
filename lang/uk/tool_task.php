<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_task', language 'uk', version '3.8'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'За першої ж нагоди';
$string['backtoscheduledtasks'] = 'Назад до запланованих задач';
$string['blocking'] = 'Блокуюча задачі';
$string['cannotfindthepathtothecli'] = 'Не вдається знайти шлях до виконуваного файлу CLI PHP, тому виконання завдання перервано. Встановіть параметр «Шлях до PHP CLI» у розділі Адміністрування сайту / Сервер / Шляхи системи.';
$string['clearfaildelay_confirm'] = 'Ви впевнені, що хочете видалити затримку збою для завдання "{$a}"? Після усунення затримки завдання виконуватиметься за звичайним розкладом.';
$string['component'] = 'Компонент';
$string['corecomponent'] = 'Ядро';
$string['default'] = 'Типово';
$string['disabled'] = 'Відключено';
$string['disabled_help'] = 'Відключені завдання не будуть запускатися при виклику cron. Тим не менш, ви можете запустити їх виконання вручну за допомогою інструменту командного рядка.';
$string['edittaskschedule'] = 'Зміна розкладу задачі: {$a}';
$string['enablerunnow'] = 'Дозволити команду «Запустити зараз» у запланованих завданнях';
$string['enablerunnow_desc'] = 'Дозволяє адміністраторам запустить будь-яке із завдань в будь-який момент, а не чекати, поки воно буде запущено за розкладом. Завдання виконуються на веб-сервері, тому на деяких сайтах ця функція може бути відключена, щоб уникнути можливого зниження продуктивності.';
$string['faildelay'] = 'Затримка після невдачі';
$string['lastruntime'] = 'Останній запуск';
$string['nextruntime'] = 'Наступний запуск';
$string['plugindisabled'] = 'Модуль відключено';
$string['pluginname'] = 'Налаштування запланованого завдання';
$string['privacy:metadata'] = 'Плагін налаштування запланованих завдань не зберігає жодних особистих даних.';
$string['resettasktodefaults'] = 'Встановити типовий розклад';
$string['resettasktodefaults_help'] = 'При включенні цього параметра розклад задачі буде скинуто до типових налаштувань.';
$string['runnow'] = 'Запустити зараз';
$string['runnow_confirm'] = 'Ви впевнені, що хочете запустити це завдання "{$a}" зараз? Завдання виконуватиметься на веб-сервері і може зайняти деякий час.';
$string['runpattern'] = 'Виконайте шаблон';
$string['scheduledtaskchangesdisabled'] = 'Зміни в списку запланованих задач не дозволено в налаштуваннях Moodle.';
$string['scheduledtasks'] = 'Заплановані завдання';
$string['taskdisabled'] = 'Задача відключена';
$string['tasklogs'] = 'Журнали завдань';
$string['taskscheduleday'] = 'День';
$string['taskscheduleday_help'] = 'Поле дня місяця для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щодня
* <strong>*/2</strong> Кожен 2-й день
* <strong>1</strong> Перше число кожного місяця
* <strong>1,15</strong> Перше та п’ятнадцяте числа кожного місяця';
$string['taskscheduledayofweek'] = 'День тижня';
$string['taskscheduledayofweek_help'] = 'Поле день тижня для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щодня
* <strong>0</strong> Кожної неділі
* <strong>6</strong> Щосуботи
* <strong>1,5</strong> Щопонеділка та п’ятниці';
$string['taskschedulehour'] = 'Година';
$string['taskschedulehour_help'] = 'Поле години для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Кожну годину
* <strong>*/2</strong> кожні 2 години
* <strong>2-10</strong> Кожну годину з 2:00 до 10:00 (включно)
* <strong>2,6,9</strong> 2 ранку, 6 ранку та 9 ранку';
$string['taskscheduleminute'] = 'Хвилина';
$string['taskscheduleminute_help'] = 'Поле хвилини для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Кожну хвилину
* <strong>*/5</strong> кожні 5 хвилин
* <strong>2-10</strong> Кожну хвилину з 2 до 10 після години (включно)
* <strong>2,6,9</strong> 2, 6 і 9 хвилин після години';
$string['taskschedulemonth'] = 'Місяць';
$string['taskschedulemonth_help'] = 'Поле на місяць для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щомісяця
* <strong>*/2</strong> Кожного другого місяця
* <strong>1</strong> Кожного січня
* <strong>1,5</strong> Кожного січня та травня';
$string['viewlogs'] = 'Переглянути журнали для {$a}';
