<?php
/* Smarty version 4.3.1, created on 2023-06-30 00:41:03
  from 'C:\Users\krysi\Desktop\task2-main\task2-main\templates\auth-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649e087fc29949_32210552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f726495ae09215f6b046775cdc99c0287481e42' => 
    array (
      0 => 'C:\\Users\\krysi\\Desktop\\task2-main\\task2-main\\templates\\auth-form.tpl',
      1 => 1688078462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e087fc29949_32210552 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="form">
        <div class="form-logo">
            <a href="/"><img src="../assets/images/logo.png" /></a>
        </div>
        <form>
            <h1>Panel logowania</h1>
            <div>
                <label for="email">E-mail</label><br />
                <input type="text" name="email" placeholder="jan.kowalski@gmail.com" id="email" />
                <img src="../assets/images/closeIcon.svg" class="close" />
                 <p>Pole email jest wymagane</p>
            </div>
            <div>
                <label for="password">Password</label><br />
                <input type="password" name="password" placeholder="**************" />
                <img src="../assets/images/closeIcon.svg" class="close" />
                  <p>Pole password jest wymagane</p>
            </div>
            <input type="submit" value="ZALOGUJ" />
        </form>
    </div>
</main><?php }
}
