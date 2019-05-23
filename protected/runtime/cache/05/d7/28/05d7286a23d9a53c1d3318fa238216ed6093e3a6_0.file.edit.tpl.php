<?php
/* Smarty version 3.1.32, created on 2019-05-22 10:30:44
  from 'C:\OpenServer\domains\test.local\protected\app\core\admin-template\view\blocks\index\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce4faa4cae889_57156864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d7286a23d9a53c1d3318fa238216ed6093e3a6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\app\\core\\admin-template\\view\\blocks\\index\\edit.tpl',
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
function content_5ce4faa4cae889_57156864 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form" method="post"><input type="hidden" name="action" value="zone_edit"><table class="table"><col width="200"><col><thead><tr><th colspan="2">Редактирование зоны</th></tr></thead><tbody><tr><td class="h hl"><?php echo t('titles.name');?>
 <span class="ness_color">*</span></td><td><input name="name" class="ness" value="<?php echo $_smarty_tpl->tpl_vars['zone_item']->value['name'];?>
"></td></tr><tr><td class="h hl">Системное имя <span class="ness_color">*</span></td><td><input name="sys_name" class="ness js-binding<?php if ($_smarty_tpl->tpl_vars['zone_item']->value['sys_name']) {?> js-binding-init<?php }?>" data-binding-name="name" data-binding-element="sys_name" value="<?php echo $_smarty_tpl->tpl_vars['zone_item']->value['sys_name'];?>
"></td></tr><tr><td class="h hl">Шаблон</td><td><select name="template"><option value="">любой шаблон</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tid_list']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['zone_item']->value['tid'] == $_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr><td class="h hl">Активна</td><td><?php $_smarty_tpl->_subTemplateRender("file:system/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"visible",'check'=>$_smarty_tpl->tpl_vars['zone_item']->value['visible'],'list'=>array(array('value'=>'1','text'=>"Да",'default'=>true),array('value'=>'0','text'=>"Нет"))), 0, false);
?></td></tr></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form><?php }
}
