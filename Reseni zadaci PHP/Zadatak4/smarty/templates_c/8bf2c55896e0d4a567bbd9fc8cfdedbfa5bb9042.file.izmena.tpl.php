<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 23:09:48
         compiled from "tpl\izmena.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1178252378fbc784831-74698101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf2c55896e0d4a567bbd9fc8cfdedbfa5bb9042' => 
    array (
      0 => 'tpl\\izmena.tpl',
      1 => 1349172214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178252378fbc784831-74698101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'radnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52378fbc8246e8_38201441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378fbc8246e8_38201441')) {function content_52378fbc8246e8_38201441($_smarty_tpl) {?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body bgcolor="yellow">
      <form action="index.php" method="POST">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['radnik']->value['jmbg'];?>
" name="jmbg"/>
      <table>
          <tr>
              <td>Ime:</td>
              <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['radnik']->value['ime'];?>
" name="ime"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['radnik']->value['prezime'];?>
" name="prezime"/></td>
          </tr>

          <tr>
              <td><input type="submit" value="Odustani" name="odustani"/></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>