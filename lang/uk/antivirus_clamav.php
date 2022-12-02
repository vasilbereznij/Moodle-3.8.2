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
 * Strings for component 'antivirus_clamav', language 'uk', version '3.8'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV не запустився. Повідомлення про помилку: {$a}. Clam повернув повідомлення:';
$string['clamfailureonupload'] = 'При помилці ClamAV';
$string['configclamactlikevirus'] = 'Вважати файли зараженими';
$string['configclamdonothing'] = 'Вважати файли чистими';
$string['configclamfailureonupload'] = 'Як вести себе у випадку, коли  ви налаштували Clam сканувати завантажені файли, але він налаштований неправильно або з невідомої причини не запускається? Якщо ви виберете "Вважати файли зараженими", вони будуть переміщені до зони карантину або вилучені. Якщо ви виберете "Вважати файли чистими", то файли будуть переміщені до цільового каталогу як незаражені. У будь-якому випадку адміністратори будуть повідомлені, що виникла помилка Clam. Якщо виберете "Вважати файли зараженими" і з певної причини Clam не запустився (найчастіше це буває через неправильно вказаний шлях до програми), то ВСІ завантажені файли будуть переміщуватися до зони карантину або видалятися. Будьте обережні з цим параметром.';
$string['errorcantopensocket'] = 'Підключення до доменного сокета Unix призвело до помилки {$a}';
$string['errorclamavnoresponse'] = 'ClamAV не відповідає; перевірити стан запущеного демона.';
$string['errornounixsocketssupported'] = 'Транспорт доменних сокетів Unix не підтримується в цій системі. Натомість використовуйте параметр командного рядка.';
$string['invalidpathtoclam'] = 'Moodle сконфігурований на перевірку завантажуваних файлів на віруси, але шлях до ClamAV, {$a}, є неправильним.';
$string['pathtoclam'] = 'Командний рядок';
$string['pathtoclamdesc'] = 'Якщо для методу запуску встановлено значення «командний рядок», введіть тут шлях до ClamAV. У Linux це буде /usr/bin/clamscan або /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Доменний сокет Unix';
$string['pathtounixsocketdesc'] = 'Якщо для методу запуску встановлено значення «Сокет домену Unix», введіть тут шлях до сокету ClamAV Unix. У Debian Linux це буде /var/run/clamav/clamd.ctl. Будь ласка, переконайтеся, що демон clamav має доступ для читання до завантажених файлів, найпростіший спосіб переконатися, що це додати користувача \'clamav\' до вашої групи веб-сервера (\'www-data\' в Debian Linux).';
$string['pluginname'] = 'Антивірус ClamAV';
$string['privacy:metadata'] = 'Антивірусний плагін ClamAV не зберігає жодних персональних даних.';
$string['quarantinedir'] = 'Карантинний каталог';
$string['runningmethod'] = 'Біговий метод';
$string['runningmethodcommandline'] = 'Командний рядок';
$string['runningmethoddesc'] = 'Метод запуску ClamAV. Командний рядок використовується за замовчуванням, однак у системах Unix кращу продуктивність можна отримати за допомогою системних сокетів.';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['unknownerror'] = 'Невідома помилка антивіруса';
