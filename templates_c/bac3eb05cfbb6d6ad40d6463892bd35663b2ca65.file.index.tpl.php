<?php /* Smarty version Smarty-3.1.11, created on 2012-09-21 06:54:00
         compiled from "modules\news\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227655058340db01dd1-54796299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac3eb05cfbb6d6ad40d6463892bd35663b2ca65' => 
    array (
      0 => 'modules\\news\\views\\index.tpl',
      1 => 1348210437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227655058340db01dd1-54796299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5058340db68703_50493414',
  'variables' => 
  array (
    'article' => 0,
    'news' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5058340db68703_50493414')) {function content_5058340db68703_50493414($_smarty_tpl) {?><html>
<a href="http://localhost/Framework/news/create.">Создать новость</a>
<h1>Новости</h1>
<?php if (isset($_smarty_tpl->tpl_vars['article']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>

        <?php echo $_smarty_tpl->tpl_vars['admin']->value['text'];?>

<<?php } ?>
<?php }?><?php }} ?>