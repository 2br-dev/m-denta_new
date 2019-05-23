<?php
/* Smarty version 3.1.32, created on 2019-03-12 10:11:22
  from 'C:\OpenServer\domains\test.local\protected\modules\rekursive\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c875b9acaa862_10373152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6fe0157fc9b9804166518d47e666a223e7a090d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test.local\\protected\\modules\\rekursive\\tpl\\list.tpl',
      1 => 1552374680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c875b9acaa862_10373152 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='rekursive'>
  <form action="ajax/folder-structure" class="dropzone" id="uploadFile" name="uploadFile" method="POST">
    <span id="tmp-path"></span>
    <input class="button" type="submit" value="Обработать" />
  </form>
</div>

<?php echo '<script'; ?>
>
  $(document).ready(function () {
    Dropzone.autoDiscover = false;
            
    Dropzone.options.uploadFile = {
      init: function() {
        this.on("success", function(file, responseText) {
          file.previewTemplate.appendChild(document.createTextNode(responseText));
        });             
        this.on("sending", function(file) {
          $("#tmp-path").html('<input type="hidden" name="path" value="'+file.fullPath+'" />')
            });            
          }
        };          
      var myDropzone = new Dropzone("#uploadFile", { 
        url: "ajax/folder-structure"
      });                      
  });

<?php echo '</script'; ?>
>

<?php }
}
