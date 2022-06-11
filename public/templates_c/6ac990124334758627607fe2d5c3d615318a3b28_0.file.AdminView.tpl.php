<?php
/* Smarty version 4.1.0, created on 2022-06-11 14:19:10
  from 'D:\xampp\htdocs\amelia\app\views\AdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a4883e4c9bb7_60534646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac990124334758627607fe2d5c3d615318a3b28' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\AdminView.tpl',
      1 => 1654597877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a4883e4c9bb7_60534646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121691111162a4883e20c433_84911561', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_121691111162a4883e20c433_84911561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121691111162a4883e20c433_84911561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="main-wrapper">
  <div class="container">
    <div class="row gtr-200">
      <!--
      <div class="col-4 col-12-medium">

        <!-- Sidebar
          <div id="sidebar">
            <section class="widget thumbnails">
              <h3>Siemano kolano</h3>
              <div class="grid">
                <div class="row gtr-50">
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
                </div>
              </div>
              <a href="#" class="button icon fa-file-alt">Więcej</a>
            </section>
          </div>

      </div>
      -->
      <div class="col-8 col-12-medium imp-medium">
          <div id="content">
            <section class="last">
              <h2>Lista użytkowników</h2>
              <p>Tutaj możesz nadawać oraz odbierać uprawnienia administratorskie użytkownikom, oraz zarządzać kontami.</p>
              <table>
                <thead>
                  <th>Login</th>
                  <th>Hasło</th>
                  <th>Imię</th>
                  <th>Nazwisko</th>
                  <th>Email</th>
                  <th>Zarządzanie</th>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['row']->value["login"];?>
</td>
                      <td>[REDACTED]</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['row']->value["imie"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['row']->value["nazwisko"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['row']->value["email"];?>
</td>
                      <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminDelete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_uzytkownik'];?>
" class="button small">Skasuj</a>
                      </td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </section>
          </div>

      </div>
      <div class="col-4 col-12-medium imp-medium">
          <div id="content">
            <section class="last">
              <h2>&nbsp;</h2>
              <p>&nbsp;</p>
              <table>
                <thead>
                  <th>Uprawnienia</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upra']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <tr>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value["id_rola"] == '1') {?>
                          Administrator
                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value["id_rola"] == '2') {?>
                          Pracownik
                        <?php } else { ?>
                          Użytkownik
                        <?php }?>
                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value["id_rola"] == '1') {?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminRevoke/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_uzytkownik'];?>
" class="button alt small">Odbierz</a>
                        <?php } else { ?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminPromote/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_uzytkownik'];?>
" class="button alt small">Nadaj</a>
                        <?php }?>
                      </td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </section>
          </div>

      </div>
    </div>
  </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
