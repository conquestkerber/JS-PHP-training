<?php /* Smarty version Smarty-3.1.13, created on 2018-01-30 21:38:05
         compiled from "tpl\agencijaindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16655a70aeac1882d3-58660284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930fd4d47617ac350af871420e802f234a38650b' => 
    array (
      0 => 'tpl\\agencijaindex.tpl',
      1 => 1517348249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16655a70aeac1882d3-58660284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a70aead2b34c6_46010957',
  'variables' => 
  array (
    'agencija' => 0,
    'letovanje' => 0,
    'index' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a70aead2b34c6_46010957')) {function content_5a70aead2b34c6_46010957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp64\\www\\L4\\smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>

<html>
    
    <head>
        <title>Agencija</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <p><h2>Agencija: <?php echo $_smarty_tpl->tpl_vars['agencija']->value->naziv;?>
, <?php echo $_smarty_tpl->tpl_vars['agencija']->value->adresa;?>
</h2></p>
    
    
        <table>
            <thead>
                <tr>
                    <th>Destinacija</th>
                    <th>Zemlja</th>
                    <th>Vrsta usluge</th>
                    <th>Cena</th>
                    <th>Prevoz ukljucen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['letovanje'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letovanje']->_loop = false;
 $_smarty_tpl->tpl_vars['kljuc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['agencija']->value->listaLetovanja; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letovanje']->key => $_smarty_tpl->tpl_vars['letovanje']->value){
$_smarty_tpl->tpl_vars['letovanje']->_loop = true;
 $_smarty_tpl->tpl_vars['kljuc']->value = $_smarty_tpl->tpl_vars['letovanje']->key;
?>
                <form method="post" action="agencijaindex.php">
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['letovanje']->value->destinacija;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['letovanje']->value->zemlja;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['letovanje']->value->vrsta_usluge;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['letovanje']->value->cena;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['letovanje']->value->prevoz_ukljucen;?>
</td>
                <input type="hidden" name="id_letovanja" value="<?php echo $_smarty_tpl->tpl_vars['letovanje']->value->id;?>
">
                    <td><input type="submit" name="submit_izmeni" value="Izmeni"></td>
                </tr>
                </form>
                <?php } ?>
            </tbody>
        </table>
    
    <?php if ($_smarty_tpl->tpl_vars['index']->value){?>
    <form method="post" action="agencijaindex.php">
    <p>Destinacinja<input type="text" name="destinacija_text"></p>
    <p>Zemlja<input type="text" name="zemlja_text"></p>
    <p>Vrsta usluge <input type="radio" name="vrsta_usluge_radio" value="nocenje">nocenje 
        <input type="radio" name="vrsta_usluge_radio" value="polupansion">polupansion 
        <input type="radio" name="vrsta_usluge_radio" value="pansion">pansion 
    </p>
    <p>Cena<select name="cena_select">
            
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>

           </select>
    </p>
    <p><input type="checkbox" name="prevoz_ukljucen_ckeck"> prevoz ukljucen</p>
    <p><input type="submit" name="prosledi_submit" value="Prosledi"></p>
    
    
    </form>
    <?php }?>
        
    
    </body>
    
    
</html><?php }} ?>