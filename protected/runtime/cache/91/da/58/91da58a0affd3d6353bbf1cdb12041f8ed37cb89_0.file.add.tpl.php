<?php
/* Smarty version 3.1.32, created on 2019-05-21 17:39:49
  from 'C:\OpenServer\domains\test.local\protected\app\core\admin-template\view\modules\binds\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce40db54cb1e6_98190113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91da58a0affd3d6353bbf1cdb12041f8ed37cb89' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\app\\core\\admin-template\\view\\modules\\binds\\add.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/group.tpl' => 1,
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5ce40db54cb1e6_98190113 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="form_mdd"><input type="hidden" name="module_action" value="add_bind"><table class="table"><col width="200"><col><thead><tr><th colspan="2">Добавление функции</th></tr></thead><tbody><tr><td class="h">Имя бинда</td><td><input name="name" class="ness"></td></tr><tr><td class="h">Имя функции</td><td><input name="func_name" class="ness"></td></tr><tr><td class="h"><?php echo t('caching');?>
</td><td><?php $_smarty_tpl->_subTemplateRender("file:system/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"cache",'list'=>array(array('value'=>'1','text'=>"Вкл.",'default'=>true),array('value'=>'0','text'=>"Выкл."))), 0, false);
?></td></tr></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form><?php }
}
