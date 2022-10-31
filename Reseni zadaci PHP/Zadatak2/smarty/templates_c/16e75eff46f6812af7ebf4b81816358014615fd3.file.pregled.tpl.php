<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 22:49:03
         compiled from "tpl\pregled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2459252378adfa216a5-39963801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e75eff46f6812af7ebf4b81816358014615fd3' => 
    array (
      0 => 'tpl\\pregled.tpl',
      1 => 1363895592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2459252378adfa216a5-39963801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ime' => 0,
    'prezime' => 0,
    'lbo' => 0,
    'starost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52378adfb261e2_28156067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52378adfb261e2_28156067')) {function content_52378adfb261e2_28156067($_smarty_tpl) {?><!--
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
          <input type="hidden" name="ime" value="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
"/>
          <input type="hidden" name="prezime" value="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
"/>
          <input type="hidden" name="lbo" value="<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
"/>
          <table>
              </tr>
                  <?php if ($_smarty_tpl->tpl_vars['starost']->value>18){?>
                  <td>Posao:</td>
                  <td><input type="text" name="posao"/></td>
                  <?php }else{ ?>
                  <td>Skola:</td>
                  <td><input type="text" name="skola"/></td>
                  <?php }?>
              </tr>
              <tr>
                  <td><a href="index.php?ime=<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
&prezime=<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
&lbo=<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
&starost=<?php echo $_smarty_tpl->tpl_vars['starost']->value;?>
">Nazad</a></td>
                  <td><input type="submit" value="Snimi" name="snimi"/></td>
              </tr>
          </table>
      </form>
  </body>
</html>
<?php }} ?>