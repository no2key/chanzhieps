<?php
/**
 * The browse view file of block module of XiRangEPS.
 *
 * @copyright   Copyright 2012-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<table align='center' class='table-1'>
  <caption>
    <div class='f-left'><?php echo $lang->block->list;?></div>
    <div class='f-right'><?php echo html::a(inlink('create'), $lang->block->add);?></div>
  </caption>
  <tr>
    <th class='w-id'><?php echo $lang->block->id;?></th>
    <th><?php echo $lang->block->title;?></th>
    <th><?php echo $lang->block->type;?></th>
    <th class='w-100px'><?php echo $lang->actions;?></th>
  </tr>
  <?php foreach($blocks as $block):?>
  <tr class='a-center'>
    <td><?php echo $block->id;?></td>
    <td class='a-left'><?php echo $block->title;?></td>
    <td><?php echo $lang->block->typeList[strtolower($block->type)];?></td>
    <td>
      <?php 
      echo html::a(inlink('edit',   "blockID=$block->id"), $lang->edit);
      echo html::a(inlink('delete', "blockID=$block->id"), $lang->delete, 'hiddenwin');
      echo html::a(inlink('view',   "blockID=$block->id"), $lang->preview);
      ?>
    </td>
  </tr>
  <?php endforeach;?>
  <tr>
    <td colspan='4'>
    <?php 
    echo $lang->block->setPage . ' ';
    foreach($lang->block->pages as $pageID => $pageTitle) echo html::a(inlink('setPage', "pageID=$pageID"), $pageTitle);
    ?>
    </td>
  </tr>
</table>
<?php include '../../common/view/footer.admin.html.php';?>
