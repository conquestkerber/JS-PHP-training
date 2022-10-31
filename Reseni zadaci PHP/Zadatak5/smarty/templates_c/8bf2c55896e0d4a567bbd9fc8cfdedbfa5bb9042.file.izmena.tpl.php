<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 23:38:17
         compiled from "tpl\izmena.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1940652140e64342235-10881756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf2c55896e0d4a567bbd9fc8cfdedbfa5bb9042' => 
    array (
      0 => 'tpl\\izmena.tpl',
      1 => 1379374688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940652140e64342235-10881756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52140e6444a7e9_28452911',
  'variables' => 
  array (
    'studenti' => 0,
    'student' => 0,
    'indeks' => 0,
    'godina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52140e6444a7e9_28452911')) {function content_52140e6444a7e9_28452911($_smarty_tpl) {?><!--
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
      <form action="index.php" method="POST">
      <table>
          <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['indeks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['studenti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['indeks']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
          <?php if ($_smarty_tpl->tpl_vars['student']->value['za_izmenu']){?>
          <tr>
              <td>Indeks:</td>
              <td><?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
</td>
          </tr>
          <tr>
              <td>Ime:</td>
              <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['ime'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
_ime"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['prezime'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
_prezime"/></td>
          </tr>
          <tr>
              <td>Godina:</td>
              <td>
                  <select name="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
_godina">
                  <?php $_smarty_tpl->tpl_vars['godina'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['godina']->step = 1;$_smarty_tpl->tpl_vars['godina']->total = (int)ceil(($_smarty_tpl->tpl_vars['godina']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['godina']->step));
if ($_smarty_tpl->tpl_vars['godina']->total > 0){
for ($_smarty_tpl->tpl_vars['godina']->value = 1, $_smarty_tpl->tpl_vars['godina']->iteration = 1;$_smarty_tpl->tpl_vars['godina']->iteration <= $_smarty_tpl->tpl_vars['godina']->total;$_smarty_tpl->tpl_vars['godina']->value += $_smarty_tpl->tpl_vars['godina']->step, $_smarty_tpl->tpl_vars['godina']->iteration++){
$_smarty_tpl->tpl_vars['godina']->first = $_smarty_tpl->tpl_vars['godina']->iteration == 1;$_smarty_tpl->tpl_vars['godina']->last = $_smarty_tpl->tpl_vars['godina']->iteration == $_smarty_tpl->tpl_vars['godina']->total;?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['godina']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['student']->value['godina']==$_smarty_tpl->tpl_vars['godina']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['godina']->value;?>
</option>
                  <?php }} ?>
                  </select>
              </td>
          </tr>
          <tr>
              <td>Status:</td>
              <td>
                  FIB<input type="radio" value="FIB" name="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
_status" <?php if ($_smarty_tpl->tpl_vars['student']->value['status']=='FIB'){?>checked<?php }?>/>
                  SAF<input type="radio" value="SAF" name="<?php echo $_smarty_tpl->tpl_vars['indeks']->value;?>
_status" <?php if ($_smarty_tpl->tpl_vars['student']->value['status']=='SAF'){?>checked<?php }?>/>
              </td>
          </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
          <?php }?>
          <?php } ?>

          <tr>
              <td><input type="submit" value="Odustani" name="odustani"/></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
<?php }} ?>