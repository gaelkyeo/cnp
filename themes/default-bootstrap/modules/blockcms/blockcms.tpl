{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $block == 1}
	<!-- Block CMS module -->
	{foreach from=$cms_titles key=cms_key item=cms_title}
		<section id="informations_block_left_{$cms_key}" class="block informations_block_left">
			<p class="title_block">
				<a href="{$cms_title.category_link|escape:'html':'UTF-8'}">
					{if !empty($cms_title.name)}{$cms_title.name}{else}{$cms_title.category_name}{/if}
				</a>
			</p>
			<div class="block_content list-block">
				<ul>
					{foreach from=$cms_title.categories item=cms_page}
						{if isset($cms_page.link)}
							<li class="bullet">
								<a href="{$cms_page.link|escape:'html':'UTF-8'}" title="{$cms_page.name|escape:'html':'UTF-8'}">
									{$cms_page.name|escape:'html':'UTF-8'}
								</a>
							</li>
						{/if}
					{/foreach}
					{foreach from=$cms_title.cms item=cms_page}
						{if isset($cms_page.link)}
							<li>
								<a href="{$cms_page.link|escape:'html':'UTF-8'}" title="{$cms_page.meta_title|escape:'html':'UTF-8'}">
									{$cms_page.meta_title|escape:'html':'UTF-8'}
								</a>
							</li>
						{/if}
					{/foreach}
					{if $cms_title.display_store}
						<li>
							<a href="{$link->getPageLink('stores')|escape:'html':'UTF-8'}" title="{l s='Our stores' mod='blockcms'}">
								{l s='Our stores' mod='blockcms'}
							</a>
						</li>
					{/if}
				</ul>
			</div>
		</section>
	{/foreach}
	<!-- /Block CMS module -->
{else}
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-12" id="block_various_links_footer">
		<h4>{l s='Information' mod='blockcms'}</h4>
		<ul class="toggle-footer">
			{if isset($show_price_drop) && $show_price_drop && !$PS_CATALOG_MODE}
				<li class="item">
					<a href="{$link->getPageLink('prices-drop')|escape:'html':'UTF-8'}" title="{l s='Specials' mod='blockcms'}">
						{l s='Specials' mod='blockcms'}
					</a>
				</li>
			{/if}
			{if isset($show_new_products) && $show_new_products}
			<li class="item">
				<a href="{$link->getPageLink('new-products')|escape:'html':'UTF-8'}" title="{l s='New products' mod='blockcms'}">
					{l s='New products' mod='blockcms'}
				</a>
			</li>
			{/if}
			{if isset($show_best_sales) && $show_best_sales && !$PS_CATALOG_MODE}
				<li class="item">
					<a href="{$link->getPageLink('best-sales')|escape:'html':'UTF-8'}" title="{l s='Top sellers' mod='blockcms'}">
						{l s='Top sellers' mod='blockcms'}
					</a>
				</li>
			{/if}
			{if isset($display_stores_footer) && $display_stores_footer}
				<li class="item">
					<a href="{$link->getPageLink('stores')|escape:'html':'UTF-8'}" title="{l s='Our stores' mod='blockcms'}">
						{l s='Our stores' mod='blockcms'}
					</a>
				</li>
			{/if}
			{if isset($show_contact) && $show_contact}
			<li class="item">
				<a href="{$link->getPageLink($contact_url, true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcms'}">
					{l s='Contact us' mod='blockcms'}
				</a>
			</li>
			{/if}
			{foreach from=$cmslinks item=cmslink}
				{if $cmslink.meta_title != ''}
					<li class="item">
						<a href="{$cmslink.link|escape:'html':'UTF-8'}" title="{$cmslink.meta_title|escape:'html':'UTF-8'}">
							{$cmslink.meta_title|escape:'html':'UTF-8'}
						</a>
					</li>
				{/if}
			{/foreach}
			{if isset($show_sitemap) && $show_sitemap}
			<li>
				<a href="{$link->getPageLink('sitemap')|escape:'html':'UTF-8'}" title="{l s='Sitemap' mod='blockcms'}">
					{l s='Sitemap' mod='blockcms'}
				</a>
			</li>
			{/if}
		</ul>
		{$footer_text}
	</section>
	
	<section class="bottom-footer col-xs-12">
	{if $display_poweredby}
		<div class="col-xs-12 col-md-8 rigths">
			<img src='data:image/svg+xml;utf8,<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<g>
	<path d="M29.12,6.86C26.23,2.75,21.4,0.02,16,0.02c-5.42,0-10.21,2.71-13.1,6.84h26.17H29.12z"/>
	<path class="st0" d="M29.12,6.86C26.23,2.75,21.4,0.02,16,0.02c-5.42,0-10.21,2.71-13.1,6.84h26.17H29.12z"/>
	<path d="M0.62,11.69h30.75c0.39,1.39,0.59,2.79,0.59,4.31c0,8.83-7.15,15.98-15.97,15.98S0.03,24.83,0.03,16
		C0.03,14.51,0.24,13.06,0.62,11.69 M27.43,21.7l-5.35,0.01c-0.07,0.24-0.1,0.49-0.1,0.76c0,1.55,1.26,2.81,2.8,2.81
		c1.55,0,2.8-1.26,2.8-2.81c0-0.27-0.04-0.52-0.11-0.77H27.43z M27.09,20.86c-0.51-0.72-1.36-1.2-2.3-1.2c-0.95,0-1.79,0.48-2.3,1.2
		H27.09L27.09,20.86z"/>
</g>
</svg>
'>
			{l s='[1] %1$s / 2011 - %2$s / All rights reserved [/1]' mod='blockcms' sprintf=['Ceci n\'est pas', 'Y'|date, '©'] tags=['<a class="_blank" href="http://www.cecinestpas.com">'] nocache}
	{/if}
		</div>
		<div id="social_block" class="col-xs-12 col-md-4">
<!--
		</div>
	</section>
-->
	<!-- /Block CMS module footer -->
{/if}
