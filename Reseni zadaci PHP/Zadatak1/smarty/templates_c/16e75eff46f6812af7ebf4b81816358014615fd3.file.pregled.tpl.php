<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:03:09
         compiled from "tpl\pregled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80285237801d231f04-50402179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e75eff46f6812af7ebf4b81816358014615fd3' => 
    array (
      0 => 'tpl\\pregled.tpl',
      1 => 1339193500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80285237801d231f04-50402179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osiguranici' => 0,
    'osiguranik' => 0,
    'lbo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5237801d313c64_61782888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5237801d313c64_61782888')) {function content_5237801d313c64_61782888($_smarty_tpl) {?><!--
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
      <form action="brisi.php" method="POST">
      <table>
          <tr>
              <td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>LBO</h4></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['osiguranik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['osiguranik']->_loop = false;
 $_smarty_tpl->tpl_vars['lbo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['osiguranici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['osiguranik']->key => $_smarty_tpl->tpl_vars['osiguranik']->value){
$_smarty_tpl->tpl_vars['osiguranik']->_loop = true;
 $_smarty_tpl->tpl_vars['lbo']->value = $_smarty_tpl->tpl_vars['osiguranik']->key;
?>
          <?php if ($_smarty_tpl->tpl_vars['osiguranik']->value['brisi']){?>
          <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['ime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['prezime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
</td>
          </tr>
          <?php }?>
          <?php } ?>
          <tr>
              <td><a href="index.php?nazad=true">Nazad</a></td>
              <td></td>
              <td><input type="submit" value="Brisanje" name="brisanje"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>