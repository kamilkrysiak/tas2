<?php
/* Smarty version 4.3.1, created on 2023-06-19 14:08:40
  from 'C:\Users\kkrysiak\Desktop\task2\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64904548d9df40_76365254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f07a7e3daa655b70c2edbb4fe79956b0aca7d01' => 
    array (
      0 => 'C:\\Users\\kkrysiak\\Desktop\\task2\\templates\\layout.tpl',
      1 => 1687176511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64904548d9df40_76365254 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css//style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

 
    <?php echo '<script'; ?>
 src="../js/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.js"><?php echo '</script'; ?>
>
</body>
</html> <?php }
}
