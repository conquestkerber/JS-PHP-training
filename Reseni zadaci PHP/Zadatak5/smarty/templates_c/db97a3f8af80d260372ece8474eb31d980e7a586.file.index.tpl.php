<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 00:44:04
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2215551a34a1f933835-39358832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1377045841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2215551a34a1f933835-39358832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a34a1fa3b465_58481554',
  'variables' => 
  array (
    'studenti' => 0,
    'indeks' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a34a1fa3b465_58481554')) {function content_51a34a1fa3b465_58481554($_smarty_tpl) {?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body bgcolor="#FFFF99">
      <form action="izmena.php" method="POST">
      <table>
          <tr>
              <td><h4>Indeks</h4></td><td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>Godina</h4></td><td><h4>Status</h4></td><td><h4>Za izmenu</h4></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['indeks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['studenti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['indeks']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
          <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['student']->value['ime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['student']->value['prezime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['student']->value['godina'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['student']->value['status'];?>
</td>
              <td><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
"
                  <?php if ($_smarty_tpl->tpl_vars['student']->value['za_izmenu']){?>checked<?php }?>/></td>
          </tr>
          <?php } ?>
          <tr>
              <td><input type="submit" value="Izmeni" name="izmeni"/></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>