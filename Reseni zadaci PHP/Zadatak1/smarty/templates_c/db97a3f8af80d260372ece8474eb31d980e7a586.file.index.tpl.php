<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:03:04
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31183523780181a18c3-32528013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1339190722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31183523780181a18c3-32528013',
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
  'unifunc' => 'content_523780182daa96_69889143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523780182daa96_69889143')) {function content_523780182daa96_69889143($_smarty_tpl) {?><!--
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
              <td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>LBO</h4></td><td><h4>Za brisanje</h4></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['osiguranik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['osiguranik']->_loop = false;
 $_smarty_tpl->tpl_vars['lbo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['osiguranici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['osiguranik']->key => $_smarty_tpl->tpl_vars['osiguranik']->value){
$_smarty_tpl->tpl_vars['osiguranik']->_loop = true;
 $_smarty_tpl->tpl_vars['lbo']->value = $_smarty_tpl->tpl_vars['osiguranik']->key;
?>
          <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['ime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['prezime'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
</td>
              <td><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['osiguranik']->value['brisi']){?>checked<?php }?>/></td>
          </tr>
          <?php } ?>
          <tr>
              <td><input type="submit" value="Dalje" name="dalje"/></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>