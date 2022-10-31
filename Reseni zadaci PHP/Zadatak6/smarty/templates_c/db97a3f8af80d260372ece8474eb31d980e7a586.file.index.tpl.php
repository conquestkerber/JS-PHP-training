<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 03:45:35
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2215551a34a1f933835-39358832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1377056159,
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
    'osiguranici' => 0,
    'lboLoop' => 0,
    'osiguranik' => 0,
    'lbo' => 0,
    'ime' => 0,
    'prezime' => 0,
    'pol' => 0,
    'dan1' => 0,
    'dan' => 0,
    'mesec1' => 0,
    'mesec' => 0,
    'godina1' => 0,
    'godina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a34a1fa3b465_58481554')) {function content_51a34a1fa3b465_58481554($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  bgcolor="#FFFF99">
        <table>
            <tr><td><h4>LBO</h4></td><td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>Pol</h4></td><td><h4>Datum rodjenja</h4></td></tr>
            <?php  $_smarty_tpl->tpl_vars['osiguranik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['osiguranik']->_loop = false;
 $_smarty_tpl->tpl_vars['lboLoop'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['osiguranici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['osiguranik']->key => $_smarty_tpl->tpl_vars['osiguranik']->value){
$_smarty_tpl->tpl_vars['osiguranik']->_loop = true;
 $_smarty_tpl->tpl_vars['lboLoop']->value = $_smarty_tpl->tpl_vars['osiguranik']->key;
?>
            <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lboLoop']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['ime'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['prezime'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['pol'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['osiguranik']->value['datum_rodjenja'];?>
</td>
            </tr>
            <?php } ?>

        </table>

        <br/>
        <hr>
        <br/>

        <form action="pregled.php" method ="post">
            <table>
                <tr>
                    <td>LBO:</td><td><input type="text" name="lbo" value ="<?php echo $_smarty_tpl->tpl_vars['lbo']->value;?>
"/></td>
                </tr>
                <tr>
                    <td>Ime:</td><td><input type="text" name="ime" value ="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
"/></td>
                </tr>
                <tr>
                    <td>Prezime:</td><td><input type="text" name="prezime" value ="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
"/></td>
                </tr>
                <tr>
                    <td>Pol:</td>
                    <td>
                        M<input type="radio" value="M" name="pol" <?php if ($_smarty_tpl->tpl_vars['pol']->value=='M'){?>checked<?php }?>/>
                        Z<input type="radio" value="Z" name="pol" <?php if ($_smarty_tpl->tpl_vars['pol']->value=='Z'){?>checked<?php }?>/>
                    </td>
                </tr>
                <tr>
                    <td>Dan rodjenja:</td>
                    <td>
                        <select name="dan">
                            <?php $_smarty_tpl->tpl_vars['dan1'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['dan1']->step = 1;$_smarty_tpl->tpl_vars['dan1']->total = (int)ceil(($_smarty_tpl->tpl_vars['dan1']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['dan1']->step));
if ($_smarty_tpl->tpl_vars['dan1']->total > 0){
for ($_smarty_tpl->tpl_vars['dan1']->value = 1, $_smarty_tpl->tpl_vars['dan1']->iteration = 1;$_smarty_tpl->tpl_vars['dan1']->iteration <= $_smarty_tpl->tpl_vars['dan1']->total;$_smarty_tpl->tpl_vars['dan1']->value += $_smarty_tpl->tpl_vars['dan1']->step, $_smarty_tpl->tpl_vars['dan1']->iteration++){
$_smarty_tpl->tpl_vars['dan1']->first = $_smarty_tpl->tpl_vars['dan1']->iteration == 1;$_smarty_tpl->tpl_vars['dan1']->last = $_smarty_tpl->tpl_vars['dan1']->iteration == $_smarty_tpl->tpl_vars['dan1']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['dan1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['dan']->value==$_smarty_tpl->tpl_vars['dan1']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dan1']->value;?>
</option>
                            <?php }} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mesec rodjenja:</td>
                    <td>
                        <select name="mesec">
                            <?php $_smarty_tpl->tpl_vars['mesec1'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['mesec1']->step = 1;$_smarty_tpl->tpl_vars['mesec1']->total = (int)ceil(($_smarty_tpl->tpl_vars['mesec1']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['mesec1']->step));
if ($_smarty_tpl->tpl_vars['mesec1']->total > 0){
for ($_smarty_tpl->tpl_vars['mesec1']->value = 1, $_smarty_tpl->tpl_vars['mesec1']->iteration = 1;$_smarty_tpl->tpl_vars['mesec1']->iteration <= $_smarty_tpl->tpl_vars['mesec1']->total;$_smarty_tpl->tpl_vars['mesec1']->value += $_smarty_tpl->tpl_vars['mesec1']->step, $_smarty_tpl->tpl_vars['mesec1']->iteration++){
$_smarty_tpl->tpl_vars['mesec1']->first = $_smarty_tpl->tpl_vars['mesec1']->iteration == 1;$_smarty_tpl->tpl_vars['mesec1']->last = $_smarty_tpl->tpl_vars['mesec1']->iteration == $_smarty_tpl->tpl_vars['mesec1']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['mesec1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mesec']->value==$_smarty_tpl->tpl_vars['mesec1']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mesec1']->value;?>
</option>
                            <?php }} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Godina rodjenja:</td>
                    <td>
                        <select name="godina">
                            <?php $_smarty_tpl->tpl_vars['godina1'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['godina1']->step = 1;$_smarty_tpl->tpl_vars['godina1']->total = (int)ceil(($_smarty_tpl->tpl_vars['godina1']->step > 0 ? 2100+1 - (1900) : 1900-(2100)+1)/abs($_smarty_tpl->tpl_vars['godina1']->step));
if ($_smarty_tpl->tpl_vars['godina1']->total > 0){
for ($_smarty_tpl->tpl_vars['godina1']->value = 1900, $_smarty_tpl->tpl_vars['godina1']->iteration = 1;$_smarty_tpl->tpl_vars['godina1']->iteration <= $_smarty_tpl->tpl_vars['godina1']->total;$_smarty_tpl->tpl_vars['godina1']->value += $_smarty_tpl->tpl_vars['godina1']->step, $_smarty_tpl->tpl_vars['godina1']->iteration++){
$_smarty_tpl->tpl_vars['godina1']->first = $_smarty_tpl->tpl_vars['godina1']->iteration == 1;$_smarty_tpl->tpl_vars['godina1']->last = $_smarty_tpl->tpl_vars['godina1']->iteration == $_smarty_tpl->tpl_vars['godina1']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['godina1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['godina']->value==$_smarty_tpl->tpl_vars['godina1']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['godina1']->value;?>
</option>
                            <?php }} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type ="submit" name ="dodaj" value ="Dodaj"</td><td></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php }} ?>