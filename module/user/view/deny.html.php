<?php
/**
 * The html template file of deny method of user module of XiRangEPS.
 *
 * @copyright   Copyright 2012-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     XiRangEPS
 * @version     $Id: deny.html.php 824 2010-05-02 15:32:06Z wwccss $
 */
include '../../common/view/header.lite.html.php';
?>
<div class='row' style='margin-top:100px'>
  <div class='u-1'>
  <table align='center' class='table-3 bg-white'> 
    <caption><?php echo $app->user->account, ' ', $lang->user->deny;?></caption>
    <tr>
      <td>
        <?php
        $moduleName = isset($lang->$module->common)  ? $lang->$module->common:  $module;
        $methodName = isset($lang->$module->$method) ? $lang->$module->$method: $method;

        printf($lang->user->errorDeny, $moduleName, $methodName);
        echo "<br />";
        echo html::a($this->createLink($config->default->module), $lang->index->common);
        if($refererBeforeDeny) echo html::a(helper::safe64Decode($refererBeforeDeny), $lang->user->goback);
        echo html::a($this->createLink('user', 'logout', "referer=" . helper::safe64Encode($denyPage)), $lang->user->relogin);
        ?>
      </td>
    </tr>  
  </table>
  </div>
</div>  
</body>
</html>
