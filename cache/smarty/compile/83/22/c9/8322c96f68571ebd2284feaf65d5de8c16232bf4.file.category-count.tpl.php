<?php /* Smarty version Smarty-3.1.19, created on 2018-11-25 18:28:04
         compiled from "/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19707388115bfadba4e66188-54948479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8322c96f68571ebd2284feaf65d5de8c16232bf4' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/category-count.tpl',
      1 => 1541065869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19707388115bfadba4e66188-54948479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bfadba4e97a16_14578051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfadba4e97a16_14578051')) {function content_5bfadba4e97a16_14578051($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
