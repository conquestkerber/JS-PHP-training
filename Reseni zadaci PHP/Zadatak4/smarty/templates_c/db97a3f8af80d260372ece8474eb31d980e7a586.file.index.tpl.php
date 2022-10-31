<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 23:09:41
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070552378fb53cc456-16382422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1349172968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070552378fb53cc456-16382422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'radnici' => 0,
    'radnik' => 0,
    'jmbg' => 0,
    'selected_jmbg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52378fb564bb35_56422252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378fb564bb35_56422252')) {function content_52378fb564bb35_56422252($_smarty_tpl) {?><!--
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
      <form action="izmena.php" method="POST">
      <table>
          <tr>
              <td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>JMBG</h4></td><td><h4>Za izmenu</h4></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['radnik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['radnik']->_loop = false;
 $_smarty_tpl->tpl_vars['jmbg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['radnici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['radnik']->key => $_smarty_tpl->tpl_vars['radnik']->value){
$_smarty_tpl->tpl_vars['radnik']->_loop = true;
 $_smarty_tpl->tpl_vars['jmbg']->value = $_smarty_tpl->tpl_vars['radnik']->key;
?>
          <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['radnik']->value['ime'];?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['jmbg']->value;?>
_ime" value="<?php echo $_smarty_tpl->tpl_vars['radnik']->value['ime'];?>
"/></td>
              <td><?php echo $_smarty_tpl->tpl_vars['radnik']->value['prezime'];?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['jmbg']->value;?>
_prezime" value="<?php echo $_smarty_tpl->tpl_vars['radnik']->value['prezime'];?>
"/></td>
              <td><?php echo $_smarty_tpl->tpl_vars['jmbg']->value;?>
</td>
              <td><input type="radio" name="radio" value="<?php echo $_smarty_tpl->tpl_vars['jmbg']->value;?>
"
                  <?php if ($_smarty_tpl->tpl_vars['jmbg']->value==$_smarty_tpl->tpl_vars['selected_jmbg']->value){?>checked<?php }?>/></td>
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