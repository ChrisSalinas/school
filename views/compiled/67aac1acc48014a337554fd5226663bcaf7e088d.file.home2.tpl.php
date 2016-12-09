<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 12:32:00
         compiled from "views/home2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92298150958355f44af4e80-67967311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67aac1acc48014a337554fd5226663bcaf7e088d' => 
    array (
      0 => 'views/home2.tpl',
      1 => 1481283099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92298150958355f44af4e80-67967311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58355f44b6d852_40413650',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58355f44b6d852_40413650')) {function content_58355f44b6d852_40413650($_smarty_tpl) {?><table>
    <a href="?action=admin&cms=insert">new</a>

    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <tr>
            <td name="id"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ID'];?>
</td>
            <td name="schoolName"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolName'];?>
</td>
            <td name="streetname"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['streetname'];?>
</td>
            <td name="number"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['number'];?>
</td>
            <td name="zip-code"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['number'];?>
</td>
            <td name="region"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Naam'];?>
</td>
            <td><a href="?action=admin&cms=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ID'];?>
">delete</a></td>
            <td><a href="?action=admin&cms=edit&title=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ID'];?>
">edit</a></td>
        </tr>
    <?php } ?>
</table><?php }} ?>
