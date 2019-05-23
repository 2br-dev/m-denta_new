<?php
/* Smarty version 3.1.32, created on 2019-05-21 17:35:44
  from 'C:\OpenServer\domains\test.local\protected\app\core\admin-template\view\modules\index\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce40cc0239863_00124137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b8b9a51454a070550824ac215d866965f19f05' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\app\\core\\admin-template\\view\\modules\\index\\add.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5ce40cc0239863_00124137 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="form_mdd"><input type="hidden" name="module_action" value="add">	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_module.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_module_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form><?php }
}
