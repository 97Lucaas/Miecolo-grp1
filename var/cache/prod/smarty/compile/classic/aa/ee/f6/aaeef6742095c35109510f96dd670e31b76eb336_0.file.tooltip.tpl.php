<?php
/* Smarty version 3.1.47, created on 2023-03-01 16:44:02
  from 'C:\Users\azord\Desktop\IUT\2A\Miecolo-grp1\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff72c2f185a2_72381076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaeef6742095c35109510f96dd670e31b76eb336' => 
    array (
      0 => 'C:\\Users\\azord\\Desktop\\IUT\\2A\\Miecolo-grp1\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1665578069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff72c2f185a2_72381076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
