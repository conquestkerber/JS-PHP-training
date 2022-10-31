<?php /* Smarty version Smarty-3.1.13, created on 2018-01-30 20:47:30
         compiled from "tpl\drzavaindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262935a6b7d336b8758-64060998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f0818ab76a4ae8d48bd726047dbaadc8d2ac6b' => 
    array (
      0 => 'tpl\\drzavaindex.tpl',
      1 => 1517345246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262935a6b7d336b8758-64060998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a6b7d33a2d3b3_59690075',
  'variables' => 
  array (
    'drzava' => 0,
    'grad' => 0,
    'kljuc' => 0,
    'rastojanje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6b7d33a2d3b3_59690075')) {function content_5a6b7d33a2d3b3_59690075($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        
        <form action="drzavaindex.php" method="post">
            
            <p>Oznaka: 
                <select name="oznaka_option">
                    <option value="BG" >BG </option>
                    <option value="NI" >NI </option>
                    <option value="LE" >LE </option>
                    <option value="KG" >KG </option>
                </select>
            </p> 
            
            <p>Naziv: <input type="text" name="naziv_text"></p>
            <p>Broj stanovnika: <input type="text" name="broj_stanovnika_text"></p>
            <p>X: <input type="text" name="x_text"></p>
            <p>Y: <input type="text" name="y_text"></p>
            <p> <input type="submit" value="Dodaj grad u listu" name="dodaj_submit"> </p>
            
        </form>
        
        <p><h2>Drzava: <?php echo $_smarty_tpl->tpl_vars['drzava']->value->naziv;?>
, broj gradova u listi: <?php echo count($_smarty_tpl->tpl_vars['drzava']->value->nizGradova);?>
 </h2></p>
        <form action="drzavaindex.php" method="post">
            
            <table>
            
            <thead>
                <tr>
                    <td>oznaka</td>
                    <td>naziv</td>
                    <td>broj stanovnika</td>
                    <td>X</td>
                    <td>Y</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
               
                <?php  $_smarty_tpl->tpl_vars['grad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grad']->_loop = false;
 $_smarty_tpl->tpl_vars['kljuc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['drzava']->value->nizGradova; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grad']->key => $_smarty_tpl->tpl_vars['grad']->value){
$_smarty_tpl->tpl_vars['grad']->_loop = true;
 $_smarty_tpl->tpl_vars['kljuc']->value = $_smarty_tpl->tpl_vars['grad']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['grad']->value->oznaka;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['grad']->value->naziv;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['grad']->value->broj_stanovnika;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['grad']->value->x;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['grad']->value->y;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['kljuc']->value;?>
</td>
                    <td><input type="checkbox" name="check_grad[]" value="<?php echo $_smarty_tpl->tpl_vars['kljuc']->value;?>
"></td>
                </tr>
              
                <?php } ?>
            </tbody>
        </table>
            <p> <input type="submit" value="Prikazi rastojanje" name="prikazi_rastojanje_submit"> </p>
            
        </form>
        
    <?php if ($_smarty_tpl->tpl_vars['rastojanje']->value){?>
    <p><h2> <?php echo $_smarty_tpl->tpl_vars['rastojanje']->value;?>
 </h2></p>
    <?php }?>
    </body>
    
    
</html><?php }} ?>