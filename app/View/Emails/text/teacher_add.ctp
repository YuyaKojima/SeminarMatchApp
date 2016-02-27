<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
お疲れ様です。
シアトルセミナーです。
このメールは、講師希望者、この勉強会のリクエストをした方、
Goodを押された方に送信されています。

<?php echo $name; ?> さんより、
<?php echo $seminarName; ?>に
講師希望がされましたので、ご連絡いたします。

現時点ではこちらのセミナーの開催が確定したわけではありませんので
ご注意ください。

講師希望者の方は、アプリの、参加者募集勉強会から、このリクエストをふまえた
勉強会を企画、申請していただきますようにお願い致します。

管理上、このメールが届いてから3日以内に申請の方をよろしくお願いいたします。
以上、よろしくお願い致します。
<?php echo $content; ?>
