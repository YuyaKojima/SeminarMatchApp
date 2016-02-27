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
このメールは、勉強会を企画された方、参加希望された方に
送信されています。

勉強会NO.：<?php echo $seminarNum; ?>
企画者：<?php echo $name; ?>
勉強会名：<?php echo $seminarName; ?>に

日程調整等のため、コーポレート本部よりご連絡がいきますので、
恐れ入りますが、少々お待ちください。

以上、よろしくお願い致します。
<?php echo $content; ?>
