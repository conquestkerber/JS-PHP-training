<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 04:03:45
         compiled from "tpl\pregled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096151b59c01e09d51-94639715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e75eff46f6812af7ebf4b81816358014615fd3' => 
    array (
      0 => 'tpl\\pregled.tpl',
      1 => 1377056798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096151b59c01e09d51-94639715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b59c01f146a7_05388070',
  'variables' => 
  array (
    'lbo' => 0,
    'ime' => 0,
    'prezime' => 0,
    'pol' => 0,
    'dan' => 0,
    'mesec' => 0,
    'godina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b59c01f146a7_05388070')) {function content_51b59c01f146a7_05388070($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  bgcolor="#FFFF99">
        <form action="index.php" method ="post">
            <table>
                <tr>
                    <td><b>LBO:</b></td><td><?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
</td><td><input type="hidden" name="lbo" value ="<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Ime:</b></td><td><?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
</td><td><input type="hidden" name="ime" value ="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Prezime:</b></td><td><?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
</td><td><input type="hidden" name="prezime" value ="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Pol:</b></td><td><?php echo $_smarty_tpl->tpl_vars['pol']->value;?>
</td><td><input type="hidden" name="pol" value ="<?php echo $_smarty_tpl->tpl_vars['pol']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Datum rodjenja:</b></td><td><?php echo $_smarty_tpl->tpl_vars['dan']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['mesec']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['godina']->value;?>
</td><td><input type="hidden" name="dan" value ="<?php echo $_smarty_tpl->tpl_vars['dan']->value;?>
"/><input type="hidden" name="mesec" value ="<?php echo $_smarty_tpl->tpl_vars['mesec']->value;?>
"/><input type="hidden" name="godina" value ="<?php echo $_smarty_tpl->tpl_vars['godina']->value;?>
"/></td>
                </tr>
                <tr>
                    <td><input type ="submit" name ="nazad" value ="Nazad"</td>
                    <td><input type ="submit" name ="prosledi" value ="Prosledi"</td>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php }} ?>