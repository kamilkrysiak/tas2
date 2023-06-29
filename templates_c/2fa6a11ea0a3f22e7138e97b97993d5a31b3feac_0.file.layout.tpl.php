<?php
/* Smarty version 4.3.1, created on 2023-06-29 14:40:03
  from 'C:\Users\krysi\Desktop\task2-main\task2-main\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649d7ba3375ff4_36917947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fa6a11ea0a3f22e7138e97b97993d5a31b3feac' => 
    array (
      0 => 'C:\\Users\\krysi\\Desktop\\task2-main\\task2-main\\templates\\layout.tpl',
      1 => 1688042400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649d7ba3375ff4_36917947 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css//style.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a6255b6a7b.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

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
