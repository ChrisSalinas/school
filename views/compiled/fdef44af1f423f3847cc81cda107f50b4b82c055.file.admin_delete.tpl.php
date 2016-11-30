<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 10:09:40
         compiled from "views/admin_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7259246355813265d11fbb8-82687318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdef44af1f423f3847cc81cda107f50b4b82c055' => 
    array (
      0 => 'views/admin_delete.tpl',
      1 => 1479892179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7259246355813265d11fbb8-82687318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5813265d185870_09269287',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813265d185870_09269287')) {function content_5813265d185870_09269287($_smarty_tpl) {?> <fieldset>
        <legend>delete video</legend>
        <table>
            <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <tr>
                <td  style="display: none" name="id"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
                <td name="title"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td>
                <td><input type="submit" value="remove" name="delete"></td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
<?php }} ?>
