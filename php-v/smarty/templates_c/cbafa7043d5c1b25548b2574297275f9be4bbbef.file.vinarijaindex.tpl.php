<?php /* Smarty version Smarty-3.1.13, created on 2018-01-29 21:10:30
         compiled from "tpl\vinarijaindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325175a6f84020dbe09-77615116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbafa7043d5c1b25548b2574297275f9be4bbbef' => 
    array (
      0 => 'tpl\\vinarijaindex.tpl',
      1 => 1517260229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325175a6f84020dbe09-77615116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a6f84026ea2c1_20774217',
  'variables' => 
  array (
    'vinarija' => 0,
    'vino' => 0,
    'kljuc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6f84026ea2c1_20774217')) {function content_5a6f84026ea2c1_20774217($_smarty_tpl) {?><!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf8">
        <title>Vinarija</title>
    </head>
    
    <body>
        
        <h1>Vinarija: <?php echo $_smarty_tpl->tpl_vars['vinarija']->value->naziv;?>
, <?php echo $_smarty_tpl->tpl_vars['vinarija']->value->lokacija;?>
</h1>
        
        <form action="vinarijaindex.php" method="post">
        <table>
            
            <thead>
                <tr>
                    <th>Naziv </th>
                    <th>Vrsta </th>
                    <th>Penusavo </th>
                    <th>Procenat alkohola </th>
                    <th>Godina </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['vino'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vino']->_loop = false;
 $_smarty_tpl->tpl_vars['kljuc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vinarija']->value->listaVina; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vino']->key => $_smarty_tpl->tpl_vars['vino']->value){
$_smarty_tpl->tpl_vars['vino']->_loop = true;
 $_smarty_tpl->tpl_vars['kljuc']->value = $_smarty_tpl->tpl_vars['vino']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['vino']->value->naziv;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vino']->value->vrsta;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vino']->value->penusavo;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vino']->value->procenat_alkohola;?>
  </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vino']->value->godina_berbe;?>
 </td>
                    
                    <td> <input type="submit" name="submit_izmeni" value="<?php echo $_smarty_tpl->tpl_vars['kljuc']->value;?>
" > </td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>
        </form >
        
        
        
        <form method="post" action="vinarijaindex.php">
            
            <p>
                Naziv: <input type="text" name="naziv">
            </p>
            <p>
                Vrsta: <input type="radio" name="vrsta" value="belo"> belo
                        <input type="radio" name="vrsta" value="rose"> rose
                        <input type="radio" name="vrsta" value="crveno"> crveno
                        <input type="radio" name="vrsta" value="crno"> crno
            </p>
            <p>
                <input type="checkbox" name="penusavo"> Penusavo
            </p>
            
            <p>
                Procenat alkohola <select name="procenat_alkohola">
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                </select>
            </p>
            
            <p>
                Berba <select name="godina">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </p>
            
            
            <p>
                <input type="submit" name="prosledi" value="Prosledi">
            </p>
            
        </form>
        
    </body>
    
</html><?php }} ?>