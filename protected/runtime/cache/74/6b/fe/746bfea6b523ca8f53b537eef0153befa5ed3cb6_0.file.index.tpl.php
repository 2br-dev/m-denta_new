<?php
/* Smarty version 3.1.32, created on 2019-05-22 10:29:41
  from 'C:\OpenServer\domains\test.local\protected\app\core\admin-template\view\blocks\items\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce4fa65c50dc2_41974078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746bfea6b523ca8f53b537eef0153befa5ed3cb6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\app\\core\\admin-template\\view\\blocks\\items\\index.tpl',
      1 => 1512138868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce4fa65c50dc2_41974078 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table"><col><col width="200"><col width="180"><col width="150"><col width="140"><col width="100"><col width="90"><col width="65"><thead><tr><th colspan="8">Список блоков</th></tr></thead><tbody><tr><td class="h">Название блока</td><td class="h">Код вывода</td><td class="h">Зона блока</td><td class="h">Локализация</td><td class="h">Модуль</td><td class="h">Сортировка</td><td class="h">Активен</td><td class="h"></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks_list']->value, 'item', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/items/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" title="Редактировать" class="module-item-link"><i class="zmdi zmdi-edit"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td><td><span class="inner-copy j-clipboard" data-clipboard="unit(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">php</span><span class="inner-copy j-clipboard" data-clipboard="{unit item='<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'}">smarty</span><span class="inner-copy j-clipboard" data-clipboard="{{ unit(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
) }}">twig</span></td><td><?php if (isset($_smarty_tpl->tpl_vars['list_form']->value[$_smarty_tpl->tpl_vars['item']->value['pid']]['name'])) {
echo $_smarty_tpl->tpl_vars['list_form']->value[$_smarty_tpl->tpl_vars['item']->value['pid']]['name'];
}?></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['locale'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['module'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['ord'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['visible']) {?>Да<?php } else { ?>Нет<?php }?></td><td class="tac"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/items/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="zmdi zmdi-edit" title="Редактировать"></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/items/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="zmdi zmdi-delete remove-trigger" title="Удалить" onclick="return cp.dialog('Вы действительно хотите удалить блок?');"></a></td></tr><?php
}
} else {
?><tr><td colspan="6" class="center-middle">Элементов нет</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/items/add/" class="button"><i class="zmdi zmdi-plus-circle"></i>Добавить блок</a><?php }
}
