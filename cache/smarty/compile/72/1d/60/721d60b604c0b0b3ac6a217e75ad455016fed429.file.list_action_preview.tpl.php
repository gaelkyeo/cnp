<?php /* Smarty version Smarty-3.1.19, created on 2018-11-25 18:25:32
         compiled from "/homepages/36/d725412653/htdocs/store/admin886vxb2t5/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3835357445bfadb0c0bd4b1-21588789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '721d60b604c0b0b3ac6a217e75ad455016fed429' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/admin886vxb2t5/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1541064895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3835357445bfadb0c0bd4b1-21588789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bfadb0c0d61b3_40210716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfadb0c0d61b3_40210716')) {function content_5bfadb0c0d61b3_40210716($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
