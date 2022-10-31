<?php /* Smarty version Smarty-3.1.13, created on 2017-12-25 14:47:55
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257585a4108f1140951-41568055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1514213271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257585a4108f1140951-41568055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a4108f11cf969_66665932',
  'variables' => 
  array (
    'trka' => 0,
    'vozac' => 0,
    'indeks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4108f11cf969_66665932')) {function content_5a4108f11cf969_66665932($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <p>Naziv trke: <?php echo $_smarty_tpl->tpl_vars['trka']->value->naziv;?>
 </p>
        <table>
            <thead></thead>
            <tbody>
                <?php $_smarty_tpl->tpl_vars['indeks'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['vozac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vozac']->_loop = false;
 $_smarty_tpl->tpl_vars['kljuc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trka']->value->niz; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vozac']->key => $_smarty_tpl->tpl_vars['vozac']->value){
$_smarty_tpl->tpl_vars['vozac']->_loop = true;
 $_smarty_tpl->tpl_vars['kljuc']->value = $_smarty_tpl->tpl_vars['vozac']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['vozac']->value->ime;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vozac']->value->prezime;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vozac']->value->tim;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vozac']->value->brojkrugova;?>
</td>
                    <td><a href='index.php?vozaczaizmenu=<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
'>Dodaj</a></td>
                </tr>
                <?php $_smarty_tpl->tpl_vars['indeks'] = new Smarty_variable($_smarty_tpl->tpl_vars['indeks']->value+1, null, 0);?>
                <?php } ?>
            </tbody>
        </table>
        <p>  </p>
    </body>
</html><?php }} ?>