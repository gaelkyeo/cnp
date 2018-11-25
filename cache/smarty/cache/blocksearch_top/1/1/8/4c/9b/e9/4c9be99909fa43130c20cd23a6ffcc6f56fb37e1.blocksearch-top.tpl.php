<?php /*%%SmartyHeaderCode:21003086725bf4921b4feab5-91103108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9be99909fa43130c20cd23a6ffcc6f56fb37e1' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1541065946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21003086725bf4921b4feab5-91103108',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bf492692c5520_14529840',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf492692c5520_14529840')) {function content_5bf492692c5520_14529840($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//cecinestpas.com/store/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
