<?php
/* Smarty version 3.1.33, created on 2020-05-11 12:41:08
  from '/var/www/html/2642bc4jkg/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb92bc4c4eb58_12888041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c987143ab58188e76815a5b9be007d95836701b3' => 
    array (
      0 => '/var/www/html/2642bc4jkg/themes/default/template/content.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb92bc4c4eb58_12888041 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
