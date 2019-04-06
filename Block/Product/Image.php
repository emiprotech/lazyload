<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emipro\Lazyload\Block\Product;

/**
 * @api
 * @method string getImageUrl()
 * @method string getWidth()
 * @method string getHeight()
 * @method string getLabel()
 * @method float getRatio()
 * @method string getCustomAttributes()
 * @since 100.0.2
 */
class Image extends \Magento\Catalog\Block\Product\Image
{
    /**
     * @deprecated 102.0.5 Property isn't used
     * @var \Magento\Catalog\Helper\Image
     */
    protected $imageHelper;

    /**
     * @deprecated 102.0.5 Property isn't used
     * @var \Magento\Catalog\Model\Product
     */
    protected $product;

    /**
     * @deprecated 102.0.5 Property isn't used
     * @var array
     */
    protected $attributes = [];

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        if (isset($data['template'])) {
            $this->setTemplate('Emipro_Lazyload::product/image_with_borders.phtml');
            unset($data['template']);
        }
        parent::__construct($context, $data);
    }
}
