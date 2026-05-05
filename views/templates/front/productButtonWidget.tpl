<div
  class="inpost-izi-btn-wrapper js-inpost-izi-product-btn-wrapper"
  data-hook="{$hookName|escape:'html':'UTF-8'}"
  data-id-product="{$idProduct|intval}"
  {if [] !== $styles}
    style="{foreach $styles as $name => $value}{$name|escape:'html':'UTF-8'}:{$value|escape:'html':'UTF-8'};{/foreach}"
  {/if}
>
  {$widget|cleanHtml nofilter}
  <div class="clearfix"></div>
</div>
