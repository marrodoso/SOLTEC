<?php
/* Smarty version 3.1.33, created on 2019-11-26 19:50:00
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd73d8b85430_88202370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8870223d64618cb56a89056aa3f87cebe2185264' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\errors\\404.tpl',
      1 => 1574363737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5ddd73d8b85430_88202370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18733765715ddd73d8b7d0e2_91366676', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5929035965ddd73d8b81e42_45428221', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_18733765715ddd73d8b7d0e2_91366676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_18733765715ddd73d8b7d0e2_91366676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_5929035965ddd73d8b81e42_45428221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5929035965ddd73d8b81e42_45428221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
