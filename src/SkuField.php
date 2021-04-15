<?php

namespace Dcat\Admin\Extension\EasySku;

use Dcat\Admin\Admin;
use Dcat\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'easy_sku::sku_field';

    public function render()
    {
        Admin::js('vendor/dcatAdmin-extensions/dazhi/dcat-sku/js/dcat-easy-sku.js');
        Admin::css('vendor/dcatAdmin-extensions/dazhi/dcat-sku/css/dcat-easy-sku.css');

        $this->script = <<< EOF
                window.DemoSku = new JadeKunSKU('{$this->getElementClassSelector()}')
EOF;
        return parent::render();
    }

}