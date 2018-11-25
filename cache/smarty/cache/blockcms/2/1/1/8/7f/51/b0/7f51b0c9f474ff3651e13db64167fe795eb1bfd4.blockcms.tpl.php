<?php /*%%SmartyHeaderCode:21248589485bf4921be72bf7-22296585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f51b0c9f474ff3651e13db64167fe795eb1bfd4' => 
    array (
      0 => '/homepages/36/d725412653/htdocs/store/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1541065937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21248589485bf4921be72bf7-22296585',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bf49672e0d0c5_79025326',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf49672e0d0c5_79025326')) {function content_5bf49672e0d0c5_79025326($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informations</h4>
		<ul class="toggle-footer">
																											<li class="item">
						<a href="http://cecinestpas.com/store/index.php?id_cms=3&amp;controller=cms" title="Conditions d&#039;utilisation">
							Conditions d&#039;utilisation
						</a>
					</li>
													<li>
				<a href="http://cecinestpas.com/store/index.php?controller=sitemap" title="sitemap">
					sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
