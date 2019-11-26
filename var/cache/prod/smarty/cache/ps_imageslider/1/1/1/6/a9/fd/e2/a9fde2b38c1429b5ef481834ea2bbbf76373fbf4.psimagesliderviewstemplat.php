<?php
/* Smarty version 3.1.33, created on 2019-11-26 19:46:26
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd7302809648_83616022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1574363738,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ddd7302809648_83616022 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-ES&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/7a119a2dad700e92a692b824b3cad054eb166c57_1200px-Llibreria_Macondo_2018_03.jpg" alt="Libros">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">LIBROS</h2>
                  <div class="caption-description"><h3>Disfruta leyendo</h3></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-ES&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/397df800f450cb9286d82ce9bffc27ed3f8995ce_mdlg-cartel-h-850.jpg" alt="sample-2">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">CINE</h2>
                  <div class="caption-description"><h3>Disfruta emocionándote</h3></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
<?php }
}
