<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:48:45
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557152378acdc9a221-78460323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1363870582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557152378acdc9a221-78460323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lbo' => 0,
    'ime' => 0,
    'prezime' => 0,
    'izbor_godina' => 0,
    'god' => 0,
    'starost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52378acde0a319_27278473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378acde0a319_27278473')) {function content_52378acde0a319_27278473($_smarty_tpl) {?><!--
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
              <td>LBO:</td>
              <td><input type="text" name="lbo" value="<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
"/></td>
          </tr>
          <tr>
              <td>Ime:</td>
              <td><input type="text" name="ime" value="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" name="prezime" value="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
"/></td>
          </tr>
          <tr>
              <td>Starost:</td>
              <td>
                <select name="starost"/>
                    <?php  $_smarty_tpl->tpl_vars['god'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['god']->_loop = false;
 $_smarty_tpl->tpl_vars['sifra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['izbor_godina']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['god']->key => $_smarty_tpl->tpl_vars['god']->value){
$_smarty_tpl->tpl_vars['god']->_loop = true;
 $_smarty_tpl->tpl_vars['sifra']->value = $_smarty_tpl->tpl_vars['god']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['god']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['god']->value==$_smarty_tpl->tpl_vars['starost']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['god']->value;?>
</option>
                    <?php } ?>
                </select>
              </td>
          </tr>
          <tr>
              <td><input type="submit" value="Dalje" name="dalje"/></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>