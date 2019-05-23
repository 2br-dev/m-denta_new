<?php
/* Smarty version 3.1.32, created on 2019-05-23 19:04:07
  from 'C:\OpenServer\domains\test.local\protected\themes\base\smarty\components\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce6c477f13222_69216868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f287d8e5bda362f30c6b9b0a3d25c943a3fa40' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\themes\\base\\smarty\\components\\scripts.tpl',
      1 => 1558602395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce6c477f13222_69216868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\test.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php','function'=>'smarty_function_compress',),));
echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);?>
  <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/js/my.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>$(document).ready(function() {$('#share').click(function() {console.log('ok');});});<?php echo '</script'; ?>
></body></html>

    


    <?php }
}
