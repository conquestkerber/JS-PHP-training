<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:58:46
         compiled from "tpl\pregled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:743852378d26b7d006-74075684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e75eff46f6812af7ebf4b81816358014615fd3' => 
    array (
      0 => 'tpl\\pregled.tpl',
      1 => 1358808402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743852378d26b7d006-74075684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'komponente' => 0,
    'sifra' => 0,
    'komponenta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52378d26c5d741_10328123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378d26c5d741_10328123')) {function content_52378d26c5d741_10328123($_smarty_tpl) {?><!--
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
      <form action="snimi.php" method="POST">
      <table>
          <tr>
              <td><h4>Sifra</h4></td><td><h4>Naziv</h4></td><td><h4>Status</h4></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['komponenta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['komponenta']->_loop = false;
 $_smarty_tpl->tpl_vars['sifra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['komponente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['komponenta']->key => $_smarty_tpl->tpl_vars['komponenta']->value){
$_smarty_tpl->tpl_vars['komponenta']->_loop = true;
 $_smarty_tpl->tpl_vars['sifra']->value = $_smarty_tpl->tpl_vars['komponenta']->key;
?>
          <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['komponenta']->value['naziv'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['komponenta']->value['status'];?>
</td>
          </tr>
          <?php } ?>
          <tr>
              <td><a href="index.php?nazad=true">Nazad</a></td>
              <td></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>