<?php
/**
 * The create view file of block module of XiRangEPS.
 *
 * @copyright   Copyright 2012-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
?>
<?php if($this->thread->hasManagePriv($this->app->user->account, $board->owners)) $config->thread->editor->post['tools'] = 'fullTools'; ?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php $common->printPositionBar($board);?>
<div class='row'>
  <div class='u-1'>
    <div class='cont'>
      <form method='post' target='hiddenwin' enctype='multipart/form-data'>
      <table class='table-1'>
        <caption class='caption-bold'><?php echo $board->name;?></caption>
        <tr>
          <th class='w-100px'><?php echo $lang->thread->title;?></th>
          <td><?php echo html::input('title', '', "class='text-1'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->thread->content;?></th>
          <td><?php echo html::textarea('content', '', "rows=20 class='area-1' tabindex=1");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->thread->file;?></th>
          <td><?php echo $this->fetch('file', 'buildForm');?></td>
        </tr>
        <tr><td colspan='2' align='center'><?php echo html::submitButton('', 'tabindex=2');?></td></tr>
      </table>
      </form>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
