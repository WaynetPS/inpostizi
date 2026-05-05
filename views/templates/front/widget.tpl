<inpost-izi-button
  {foreach $attributes as $name => $value}
    {$name|escape:'html':'UTF-8'}="{$value|escape:'html':'UTF-8'}"
  {/foreach}
></inpost-izi-button>
