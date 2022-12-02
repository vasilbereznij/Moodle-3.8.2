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
 * Strings for component 'tool_mobile', language 'uk', version '3.8'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Налагодження ADOdb увімкнено. Вона повинна бути відключена в параметрах зовнішньої бази даних для автентифікації або зовнішніх додатків для входу до бази даних.';
$string['androidappid'] = 'Унікальний ідентифікатор додатка для Android';
$string['androidappid_desc'] = 'Цей параметр може бути залишений за умовчанням, якщо у вас немає спеціального додатка для Android.';
$string['apppolicy'] = 'URL-адреса політики додатків';
$string['apppolicy_help'] = 'URL-адреса політики щодо користувачів додатків, яка вказана на сторінці «Про програму» в додатку. Якщо поле залишити порожнім, замість цього буде використана URL-адреса політики веб-сайту.';
$string['apprequired'] = 'Ця функція доступна лише за умови доступу до мобільного або настільного додатка Moodle.';
$string['autologinkeygenerationlockout'] = 'Заблоковано генерацію ключа автоматичного входу. Потрібно зачекати 6 хвилин між запитами.';
$string['autologinnotallowedtoadmins'] = 'Автоматичний вхід не дозволяється для адміністраторів сайту.';
$string['cachedef_plugininfo'] = 'Це зберігає список плагінів із мобільними доповненнями';
$string['clickheretolaunchtheapp'] = 'Натисніть тут, якщо додаток не відкривається автоматично.';
$string['configmobilecssurl'] = 'Файл каскадної таблиці стилів (CSS) для для налаштування вашого мобільного інтерфейсу.';
$string['customlangstrings'] = 'Користувацькі мовні ряди';
$string['customlangstrings_desc'] = 'Тут можна налаштувати слова та фрази, які відображаються в додатку. Введіть кожен рядок спеціальної мови в новому рядку з форматом: ідентифікатор рядка, рядок спеціальної мови та код мови, розділені символами вертикальної лінії. Наприклад:
<pre>
mm.user.student|Ученик|en
mm.user.student|Aprendiz|es
</pre>
Повний список ідентифікаторів рядків див. у документації.';
$string['custommenuitems'] = 'Спеціальні пункти меню';
$string['custommenuitems_desc'] = 'Додаткові елементи можна додати до головного меню програми, вказавши їх тут. Введіть кожен пункт спеціального меню в новому рядку з форматом: текст елемента, URL-адреса посилання, метод відкриття посилання та код мови (необов’язково, для відображення елемента лише для користувачів зазначеної мови), розділених символами вертикальної лінії.

Методи відкриття посилання: додаток (для посилання на дію, яку підтримує програма), inappbrowser (для відкриття посилання у браузері, не виходячи з програми), браузер (для відкриття посилання в браузері пристрою за замовчуванням поза програмою) і вбудований (для відображення посилання в iframe на новій сторінці програми).

Якщо в елементах відсутній переклад для певної мови, вони використовуватимуть інші мови як запасні, якщо до коду мови не буде додано «_only».

Наприклад:
<pre>
Довідка програми|https://someurl.xyz/help|inappbrowser
Мої оцінки|https://someurl.xyz/local/mygrades/index.php|embedded|uk
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Ви побачите це лише англійською мовою|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Темний режим';
$string['disabledfeatures'] = 'Функції відключено';
$string['disabledfeatures_desc'] = 'Виберіть тут функції, які потрібно вимкнути в мобільному додатку для свого сайту. Зауважте, що деякі перераховані тут функції вже можуть бути вимкнені за допомогою інших налаштувань сайту. Щоб побачити зміни, вам доведеться вийти та знову ввійти в програму.';
$string['displayerrorswarning'] = 'Відображення налагоджувальних повідомлень (debugdisplay) увімкнено. Його слід вимкнути.';
$string['downloadcourse'] = 'Завантажити курс';
$string['downloadcourses'] = 'Завантажити курси';
$string['enablesmartappbanners'] = 'Увімкнути банери додатків';
$string['enablesmartappbanners_desc'] = 'Якщо ввімкнено, банер, що рекламує мобільний додаток, відображатиметься під час доступу до сайту за допомогою мобільного браузера.';
$string['forcedurlscheme'] = 'Якщо ви хочете дозволити відкривати у вікні веб-переглядача лише власну фірмову програму, вкажіть тут схему її URL-адрес. Якщо ви хочете дозволити лише офіційну програму, встановіть значення за замовчуванням. Залиште поле пустим, якщо ви хочете дозволити будь-яку програму.';
$string['forcedurlscheme_key'] = 'Схема URL';
$string['forcelogout'] = 'Примусово вийти';
$string['getmoodleonyourmobile'] = 'Завантажте мобільний додаток';
$string['h5poffline'] = 'Переглядайте вміст H5P в автономному режимі';
$string['httpsrequired'] = 'Потрібен HTTPS';
$string['insecurealgorithmwarning'] = 'Здається, що сертифікат HTTPS використовує небезпечний алгоритм підписання (SHA-1). Спробуйте оновити сертифікат.';
$string['invalidcertificateexpiredatewarning'] = 'Схоже, термін дії сертифіката HTTPS для сайту закінчився.';
$string['invalidcertificatestartdatewarning'] = 'Схоже, що сертифікат HTTPS для сайту ще не дійсний (з датою початку в майбутньому).';
$string['invalidprivatetoken'] = 'Недійсний приватний токен. Токен не повинен бути порожнім або переданий через параметр GET.';
$string['invaliduserquotawarning'] = 'The user quota (userquota) is set to an invalid number. It should be set to a valid number (an integer value) in Site security settings.';
$string['iosappid'] = 'унікальний ідентифікатор програми iOS';
$string['iosappid_desc'] = 'Цей параметр може залишатися за замовчуванням, якщо у вас немає спеціального додатка iOS.';
$string['loginintheapp'] = 'Через додаток';
$string['logininthebrowser'] = 'Через вікно браузера (для плагінів SSO)';
$string['loginintheembeddedbrowser'] = 'Через вбудований браузер (для плагінів SSO)';
$string['mainmenu'] = 'Головне меню';
$string['minimumversion'] = 'Якщо вказана версія програми (3.8.0 або вище), користувачам, які використовують старішу версію програми, буде запропоновано оновити програму, перш ніж отримати доступ до сайту.';
$string['minimumversion_key'] = 'Необхідна мінімальна версія програми';
$string['mobileapp'] = 'Мобільний додаток';
$string['mobileappconnected'] = 'Мобільний додаток підключено';
$string['mobileappearance'] = 'Мобільний зовнішній вигляд';
$string['mobileappenabled'] = 'Цей сайт має доступ до мобільних додатків. <br /> <a href="{$a}"> Завантажте мобільний додаток </a>.';
$string['mobileauthentication'] = 'Мобільна автентифікація';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Мобільні функції';
$string['mobilenotificationsdisabledwarning'] = 'Мобільні сповіщення не ввімкнено. Їх потрібно ввімкнути в налаштуваннях сповіщень.';
$string['mobilesettings'] = 'Налаштування мобільних пристроїв';
$string['moodleappsportalfeatureswarning'] = 'Please note that some features may be restricted depending on your Moodle app subscription. For details, visit the <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['oauth2identityproviders'] = 'Постачальники ідентифікації OAuth 2';
$string['offlineuse'] = 'Використання в автономному режимі';
$string['pluginname'] = 'Інструменти додатку Moodle';
$string['pluginnotenabledorconfigured'] = 'Плагін не ввімкнено або не налаштовано.';
$string['privacy:metadata:core_userkey'] = 'Ключі користувача, які використовуються для створення ключа автоматичного входу для поточного користувача.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Дата останнього запиту ключа автоматичного входу. Між кожним запитом потрібно 6 хвилин.';
$string['readingthisemailgettheapp'] = 'Читаєте це в електронному листі? <a href="{$a}">Завантажте мобільний додаток і отримуйте сповіщення на свій мобільний пристрій</a>.';
$string['remoteaddons'] = 'Віддалені доповнення';
$string['responsivemainmenuitems'] = 'Чуйні пункти меню';
$string['setuplink'] = 'Сторінка завантаження програми';
$string['setuplink_desc'] = 'URL-адреса сторінки з варіантами завантаження мобільної програми з App Store та Google Play. Посилання на сторінку завантаження програми відображається в нижньому колонтитулі сторінки та в профілі користувача. Залиште порожнім, щоб не відображати посилання.';
$string['smartappbanners'] = 'Банери додатків';
$string['typeoflogin'] = 'Тип логіну';
$string['typeoflogin_desc'] = 'Якщо сайт використовує метод автентифікації SSO, виберіть у вікні браузера або через вбудований браузер. Вбудований браузер забезпечує кращу роботу користувача, хоча він не працює з усіма плагінами SSO.';
