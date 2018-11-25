<?php /* Smarty version Smarty-3.1.19, created on 2018-11-25 18:45:35
         compiled from "/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992325065bfadfbfaf35c9-73827119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e121457470201025798f4f574e7abc58fc6dc3' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1541065965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992325065bfadfbfaf35c9-73827119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bfadfbfb14af5_86699189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfadfbfb14af5_86699189')) {function content_5bfadfbfb14af5_86699189($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
