<?php /* Smarty version Smarty-3.1.13, created on 2018-01-29 17:48:32
         compiled from "tpl\magacinindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241575a6f51ae1fab09-99734238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93b57e029847fa20ef399b38f328fa7c66e5846' => 
    array (
      0 => 'tpl\\magacinindex.tpl',
      1 => 1517247865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241575a6f51ae1fab09-99734238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a6f51ae35d1e1_21116642',
  'variables' => 
  array (
    'magacin' => 0,
    'paket' => 0,
    'kljuc' => 0,
    'izmeni' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6f51ae35d1e1_21116642')) {function content_5a6f51ae35d1e1_21116642($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <title>Magacin</title>
        <meta charset="UTF8">
    </head>
    <body>
        
        <h1>Magacin: <?php echo $_smarty_tpl->tpl_vars['magacin']->value->oznaka;?>
, lokacija: <?php echo $_smarty_tpl->tpl_vars['magacin']->value->lokacija;?>
</h1>>
        
        <table>
            <thead>
                <tr>
                    <th>Oznaka</th> 
                    <th>Br. komada</th>
                    <th>Dan</th>
                    <th>Mesec</th>
                    <th>Godina</th>
                    <th>Lomljivo</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['paket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paket']->_loop = false;
 $_smarty_tpl->tpl_vars['kljuc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['magacin']->value->listaPaketa; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paket']->key => $_smarty_tpl->tpl_vars['paket']->value){
$_smarty_tpl->tpl_vars['paket']->_loop = true;
 $_smarty_tpl->tpl_vars['kljuc']->value = $_smarty_tpl->tpl_vars['paket']->key;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->oznaka;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->broj_proizvoda;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->dan;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->mesec;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->godina;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['paket']->value->lomljivo;?>
</td>
                    <td> <a href="magacinindex.php?paket_za_izmenu=<?php echo $_smarty_tpl->tpl_vars['kljuc']->value;?>
">izmeni</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php if ($_smarty_tpl->tpl_vars['izmeni']->value){?>
        <form method="post" action="magacinindex.php">
            <p>Oznaka
                <input type="text" name="oznaka">
            </p>
            <p>Br. komada
                <input type="text" name="br_komada">
            </p>
            <p>Rok trajanja sadrzaja paketa</p>
            
            <p>Dan: 
                <select name="dan">
                 
                    <option value="1" >1 </option>
                    <option value="2" >2 </option>
                    <option value="3" >3 </option>
                </select>
            </p>
            
            <p>Mesec: 
                <select name="mesec">
                    
                    <option value="1" >1 </option>
                    <option value="2" >2 </option>
                    <option value="3" >3 </option>
                </select>
            </p>
            
            <p>Godina: 
                <select name="godina">
                  
                    <option value="2017" >2017 </option>
                    <option value="2018" >2018 </option>
                    <option value="2019" >2019 </option>
                </select>
            </p>
            
            <p><input type="checkbox" name="lomljivo">Sadrzaj paketa je lomljiv</p>
            <p><input type="submit" name="prosledi" value="OK"></p>
        </form>
        
        <?php }?>
    </body>
    
</html><?php }} ?>