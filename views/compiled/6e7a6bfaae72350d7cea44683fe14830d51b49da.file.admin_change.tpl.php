<?php /* Smarty version Smarty-3.1.18, created on 2016-11-25 10:28:06
         compiled from "views/admin_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272916965812fd3a5d5ac0-08512001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7a6bfaae72350d7cea44683fe14830d51b49da' => 
    array (
      0 => 'views/admin_change.tpl',
      1 => 1480065885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272916965812fd3a5d5ac0-08512001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812fd3a6377f1_96816152',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812fd3a6377f1_96816152')) {function content_5812fd3a6377f1_96816152($_smarty_tpl) {?><fieldset>
    <legend>change about</legend>
    <table >
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                <tr>
                    <td  style="display: none" name="id"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
                    <td><textarea name="title" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</textarea></td>
                </tr>
        <?php } ?>

    </table>
</fieldset>
<?php }} ?>
