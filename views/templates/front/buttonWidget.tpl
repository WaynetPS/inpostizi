<div
  class="inpost-izi-btn-wrapper"
  {if [] !== $styles}
    style="{foreach $styles as $name => $value}{$name|escape:'html':'UTF-8'}:{$value|escape:'html':'UTF-8'};{/foreach}"
  {/if}
>
  {$widget|cleanHtml nofilter}
  <div class="clearfix"></div>
</div>
