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
 * Strings for component 'course', language 'uk', version '3.8'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = 'Категорія курсу';
$string['aria:courseimage'] = 'Зображення курсу';
$string['aria:coursename'] = 'Назва курсу';
$string['aria:courseshortname'] = 'Коротка назва курсу';
$string['aria:favourite'] = 'Курс позначений зірочкою';
$string['coursealreadyfinished'] = 'Курс уже закінчено';
$string['coursenotyetfinished'] = 'Курс ще не закінчився';
$string['coursenotyetstarted'] = 'Курс ще не розпочався';
$string['coursetoolong'] = 'Курс занадто довгий';
$string['customfield_islocked'] = 'Заблоковано';
$string['customfield_islocked_help'] = 'Якщо поле заблоковано, лише користувачі, які мають можливість змінювати заблоковані спеціальні поля (за замовчуванням користувачі лише з роллю менеджера за замовчуванням), зможуть змінити його в налаштуваннях курсу.';
$string['customfield_notvisible'] = 'Ніхто';
$string['customfield_visibility'] = 'Видно для';
$string['customfield_visibility_help'] = 'Цей параметр визначає, хто може переглядати назву та значення спеціального поля в списку курсів або у доступному фільтрі користувацького поля на інформаційній панелі.';
$string['customfield_visibletoall'] = 'Усі';
$string['customfield_visibletoteachers'] = 'Вчителі';
$string['customfieldsettings'] = 'Загальні налаштування спеціальних полів курсу';
$string['errorendbeforestart'] = 'Дата закінчення ({$a}) передує даті початку курсу.';
$string['favourite'] = 'Курс із зірочкою';
$string['gradetopassnotset'] = 'Цей курс не має оцінки за здачу. Його можна встановити в елементі оцінки курсу (налаштування журналу оцінок).';
$string['nocourseactivity'] = 'Недостатня активність курсу між початком і кінцем курсу';
$string['nocourseendtime'] = 'Курс не має часу закінчення';
$string['nocoursesections'] = 'Без розділів курсу';
$string['nocoursestudents'] = 'Немає студентів';
$string['privacy:completionpath'] = 'Закінчення курсу';
$string['privacy:favouritespath'] = 'Інформація про курс';
$string['privacy:metadata:completionsummary'] = 'Курс містить інформацію про завершення про користувача.';
$string['privacy:metadata:favouritessummary'] = 'Курс містить інформацію, що стосується курсу, позначеного користувачем.';
$string['privacy:perpage'] = 'Кількість курсів для показу на сторінці.';
$string['studentsatriskincourse'] = 'Студенти в групі ризику на курсі {$a}';
$string['target:coursecompetencies'] = 'Студенти ризикують не досягти компетенцій, призначених для курсу';
$string['target:coursecompetencies_help'] = 'Ця ціль описує, чи ризикує студент не досягти компетенцій, призначених для курсу. Ця ціль передбачає, що всі компетенції, призначені для курсу, повинні бути досягнуті до кінця курсу.';
$string['target:coursecompletion'] = 'Студенти ризикують не відповідати умовам закінчення курсу';
$string['target:coursecompletion_help'] = 'Ця ціль описує, чи вважається, що студент ризикує не відповідати умовам закінчення курсу.';
$string['target:coursedropout'] = 'Студенти які ризикують бути відсіяні';
$string['target:coursedropout_help'] = 'Ця ціль описує, чи вважається учень загрозливим відмовитися від навчання.';
$string['target:coursegradetopass'] = 'Студенти ризикують не досягти мінімальної оцінки для проходження курсу';
$string['target:coursegradetopass_help'] = 'Ця ціль описує, чи ризикує студент не досягти мінімальної оцінки для проходження курсу.';
$string['target:noaccesssincecoursestart'] = 'Студенти, які ще не відвідували курс';
$string['target:noaccesssincecoursestart_help'] = 'Ця ціль описує студентів, які ніколи не відвідували курс, на який вони зараховані.';
$string['target:noaccesssincecoursestartinfo'] = 'Наступні студенти зараховані на курс, який почався, але вони ніколи не проходили курс.';
$string['target:norecentaccesses'] = 'Студенти, які нещодавно не відвідували курс';
$string['target:norecentaccesses_help'] = 'Ця ціль визначає студентів, які не отримали доступ до курсу, на який вони зараховані, протягом встановленого інтервалу аналізу (за замовчуванням останній місяць).';
$string['target:norecentaccessesinfo'] = 'Наведені нижче студенти не отримали доступ до курсу, на який вони зараховані протягом встановленого інтервалу аналізу (за замовчуванням останній місяць).';
$string['target:noteachingactivity'] = 'Курси ризикують не почати';
$string['target:noteachingactivity_help'] = 'Ця ціль описує, чи навчатимуть курси, які мають початися наступного тижня.';
$string['target:noteachingactivityinfo'] = 'Наступні курси, які мають розпочатися найближчими днями, ризикують не розпочати, оскільки на них немає вчителів чи студентів.';
$string['targetlabelstudentcompetenciesno'] = 'Студент, який, ймовірно, досягне компетенцій, призначених для курсу';
$string['targetlabelstudentcompetenciesyes'] = 'Студент ризикує не досягти компетенцій, призначених для курсу';
$string['targetlabelstudentcompletionno'] = 'Студент, який, ймовірно, відповідає умовам закінчення курсу';
$string['targetlabelstudentcompletionyes'] = 'Студент ризикує не відповідати умовам закінчення курсу';
$string['targetlabelstudentdropoutno'] = 'Не в зоні ризику';
$string['targetlabelstudentdropoutyes'] = 'Студент ризикує залишити навчання';
$string['targetlabelstudentgradetopassno'] = 'Студент, який, ймовірно, отримає мінімальну оцінку для проходження курсу.';
$string['targetlabelstudentgradetopassyes'] = 'Студент ризикує не досягти мінімальної оцінки для складання курсу.';
$string['targetlabelteachingno'] = 'Курси ризикують не почати';
$string['targetlabelteachingyes'] = 'Користувачі зі здібностями викладання, які мають доступ до курсу';
