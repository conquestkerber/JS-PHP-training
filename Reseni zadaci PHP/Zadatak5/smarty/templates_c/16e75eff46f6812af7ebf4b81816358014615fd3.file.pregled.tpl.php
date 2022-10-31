<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 00:03:18
         compiled from "tpl\pregled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096151b59c01e09d51-94639715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e75eff46f6812af7ebf4b81816358014615fd3' => 
    array (
      0 => 'tpl\\pregled.tpl',
      1 => 1372809765,
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
    'sifra' => 0,
    'mesto_polaska' => 0,
    'sat_polaska' => 0,
    'minut_polaska' => 0,
    'mesto_dolaska' => 0,
    'sat_dolaska' => 0,
    'minut_dolaska' => 0,
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
                    <td><b>Sifra:</b></td><td><?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
</td><td><input type="hidden" name="sifra" value ="<?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Mesto polaska:</b></td><td><?php echo $_smarty_tpl->tpl_vars['mesto_polaska']->value;?>
</td><td><input type="hidden" name="mesto_polaska" value ="<?php echo $_smarty_tpl->tpl_vars['mesto_polaska']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Vreme polaska:</b></td><td><?php echo $_smarty_tpl->tpl_vars['sat_polaska']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['minut_polaska']->value;?>
</td><td><input type="hidden" name="sat_polaska" value ="<?php echo $_smarty_tpl->tpl_vars['sat_polaska']->value;?>
"/></td><td><input type="hidden" name="minut_polaska" value ="<?php echo $_smarty_tpl->tpl_vars['minut_polaska']->value;?>
"/></td>
                </tr>
                <tr>
                    <td><b>Mesto dolaska:</b></td><td><?php echo $_smarty_tpl->tpl_vars['mesto_dolaska']->value;?>
</td><td><input type="hidden" name="mesto_dolaska" value ="<?php echo $_smarty_tpl->tpl_vars['mesto_dolaska']->value;?>
"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Vreme dolaska:</b></td><td><?php echo $_smarty_tpl->tpl_vars['sat_dolaska']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['minut_dolaska']->value;?>
</td><td><input type="hidden" name="sat_dolaska" value ="<?php echo $_smarty_tpl->tpl_vars['sat_dolaska']->value;?>
"/></td><td><input type="hidden" name="minut_dolaska" value ="<?php echo $_smarty_tpl->tpl_vars['minut_dolaska']->value;?>
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