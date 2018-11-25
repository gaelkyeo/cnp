<?php /* Smarty version Smarty-3.1.19, created on 2018-11-25 18:15:10
         compiled from "/homepages/36/d725412653/htdocs/store/admin886vxb2t5/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1276840685bfad89e770e31-34877048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5334bd5d96c33658fcd065d908a22564d702489' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/admin886vxb2t5/themes/default/template/content.tpl',
      1 => 1541064713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1276840685bfad89e770e31-34877048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bfad89e775b90_26335161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfad89e775b90_26335161')) {function content_5bfad89e775b90_26335161($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
