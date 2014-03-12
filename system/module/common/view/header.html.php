<?php if($extView = $this->getExtViewFile(__FILE__)){include $extView; return helper::cd();}?>
<?php include 'header.lite.html.php';?>
<div class='page-container'>
  <?php if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0') !== false ) exit($lang->IE6Alert); ?>
  <header id='header' class='clearfix'>
    <div id='headNav'>
      <div class='wrapper'>
        <nav><?php echo commonModel::printTopBar();?></nav>
      </div>
    </div>
    <div id='headTitle'>
      <div class="wrapper">
        <?php if(isset($config->site->logo)):?>
        <?php $logo = json_decode($config->site->logo);?>
        <div id='siteLogo'>
          <?php echo html::a($this->config->webRoot, html::image($logo->webPath, "class='logo' title='{$this->config->company->name}'"));?>
        </div>
        <?php else: ?>
        <div id='siteName'><h2><?php echo $config->site->name;?></h2></div>
        <?php endif;?>
        <div id='siteSlogan'><span><?php echo $this->config->site->slogan;?></span></div>
      </div>
    </div>
  </header>

  <?php $topNavs = $this->loadModel('nav')->getNavs('top');?>
  <nav id='navbar' class='navbar navbar-default' role='navigation'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbarCollapse'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='/'><i class='icon-home'></i></a>
    </div>
    <div class='collapse navbar-collapse' id='navbarCollapse'>
      <ul class='nav navbar-nav'>
        <?php foreach($topNavs as $nav1):?>
          <?php if(empty($nav1->children)):?>
            <li class='<?php echo $nav1->class?>'><?php echo html::a($nav1->url, $nav1->title, !empty($nav1->target) ? "target='$nav1->target'" : '');?></li>
            <?php else: ?>
              <li class="dropdown <?php echo $nav1->class?>">
                <?php echo html::a($nav1->url, $nav1->title . " <b class='caret'></b>", 'class="dropdown-toggle" data-toggle="dropdown" ' . (!empty($nav1->target) ? "target='$nav1->target'" : ''));?>
                <ul class='dropdown-menu' role='menu'>
                  <?php foreach($nav1->children as $nav2):?>
                    <?php if(empty($nav2->children)):?>
                      <li class='<?php echo $nav2->class?>'><?php echo html::a($nav2->url, $nav2->title, !empty($nav2->target) ? "target='$nav2->target'" : '');?></li>
                    <?php else: ?>
                      <li class='dropdown-submenu <?php echo $nav2->class?>'>
                        <?php echo html::a($nav2->url, $nav2->title, !empty($nav2->target) ? "target='$nav2->target'" : '');?>
                        <ul class='dropdown-menu' role='menu'>
                          <?php foreach($nav2->children as $nav3):?>
                          <li><?php echo html::a($nav3->url, $nav3->title, !empty($nav3->target) ? "target='$nav3->target'" : '');?></li>
                          <?php endforeach;?>
                        </ul>
                      </li>
                    <?php endif;?>
                  <?php endforeach;?><!-- end nav2 -->
                </ul>
            </li>
          <?php endif;?>
        <?php endforeach;?><!-- end nav1 -->
      </ul>
    </div>
  </nav>

  <div class='page-wrapper'>
    <div class='page-content'>
