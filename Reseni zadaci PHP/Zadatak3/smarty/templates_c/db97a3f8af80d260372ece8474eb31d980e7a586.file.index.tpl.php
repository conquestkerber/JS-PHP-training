<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:54:25
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3047352378c21b4a2b7-39587248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1341821028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3047352378c21b4a2b7-39587248',
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
  'unifunc' => 'content_52378c21e65504_29595111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378c21e65504_29595111')) {function content_52378c21e65504_29595111($_smarty_tpl) {?><!--
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
      <form action="pregled.php" method="POST">
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
              <td>
                   <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
" value="dostupno" <?php if ($_smarty_tpl->tpl_vars['komponenta']->value['status']=="dostupno"){?>checked<?php }?>/>Dostupno
                   <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
" value="nedostupno" <?php if ($_smarty_tpl->tpl_vars['komponenta']->value['status']=="nedostupno"){?>checked<?php }?>/>Nedostupno
                   <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
" value="naruceno" <?php if ($_smarty_tpl->tpl_vars['komponenta']->value['status']=="naruceno"){?>checked<?php }?>/>Naruceno

              </td>
          </tr>
          <?php } ?>
          <tr>
              <td><input type="submit" value="Dalje" name="dalje"/></td>
              <td></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>