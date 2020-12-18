<?php
/* Smarty version 3.1.30, created on 2020-12-18 13:19:50
  from "D:\PULPIT\STUDIA\V SEMESTR 2020-2021\(AS) APLIKACJE SIECIOWE\XAMP\htdocs\php_06a_nowastruktura\app\widok\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fdcac7644c254_22649210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c862f40b15d1b130a2076b96f62ee55bc8dfa929' => 
    array (
      0 => 'D:\\PULPIT\\STUDIA\\V SEMESTR 2020-2021\\(AS) APLIKACJE SIECIOWE\\XAMP\\htdocs\\php_06a_nowastruktura\\app\\widok\\CalcView.tpl',
      1 => 1608296836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_5fdcac7644c254_22649210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5088534095fdcac763dcbc9_83237148', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8881723835fdcac7644ba95_48387670', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_5088534095fdcac763dcbc9_83237148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_8881723835fdcac7644ba95_48387670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu [PLN]</label>
			<input id="kwota" type="number" placeholder="Kwota kredytu [PLN]" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
					
			<label for="lat">Kredyt na [lat]</label>
			<input id="lat" type="number" placeholder="Kredyt na [lat]" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
">

            <label for="oprocentowanie">Oprocentowanie [%]</label>
			<input id="op" type="number" placeholder="Oprocentowanie [%]" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
                        
			<button type="submit" class="pure-button">Wylicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

        zł miesięcznie
	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
