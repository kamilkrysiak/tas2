<?php
/* Smarty version 4.3.1, created on 2023-06-19 15:44:44
  from 'C:\Users\kkrysiak\Desktop\task2\templates\auth-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64905bcc11d832_28886991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc89851cfb2cad9cfd29a7046b9d36e3024303e' => 
    array (
      0 => 'C:\\Users\\kkrysiak\\Desktop\\task2\\templates\\auth-form.tpl',
      1 => 1687182283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64905bcc11d832_28886991 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="form">
        <div class="form-logo">
            <img src="../logo.png" />
        </div>
        <form>
            <h1>Panel logowania</h1>
            <div>
                <label for="email">E-mail</label><br />
                <input type="text" name="email" placeholder="jan.kowalski@gmail.com" id="email" />
            </div>
            <div>
                <label for="password">Password</label><br />
                <input type="text" name="password" placeholder="**************" />
            </div>
            <input type="submit" value="ZALOGUJ" />
        </form>
    </div>
</main><?php }
}
