<?php
/* Smarty version 3.1.32, created on 2019-05-21 17:39:30
  from 'C:\OpenServer\domains\test.local\protected\app\core\admin-template\fields\system.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce40da20a4284_52712018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092b7bfd91825c6513b025e981992ef832d4f789' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\app\\core\\admin-template\\fields\\system.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce40da20a4284_52712018 (Smarty_Internal_Template $_smarty_tpl) {
?><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
 js-binding" data-binding-name="<?php echo $_smarty_tpl->tpl_vars['settings']->value['f_binding'];?>
" data-binding-element="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}
