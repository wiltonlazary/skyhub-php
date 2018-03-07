<?php
/**
 * BSeller Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  ${MAGENTO_MODULE_NAMESPACE}
 * @package   ${MAGENTO_MODULE_NAMESPACE}_${MAGENTO_MODULE}
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br)
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

include __DIR__ . '/../api.php';

/** @var \SkyHub\Api\EntityInterface\Catalog\Product $entityInterface */
$entityInterface = $api->productAttribute()
                       ->entityInterface();

$entityInterface->setSku('sku123')
        ->setName('Sample Product')
        ->setDescription('Sample Product Description')
        ->setStatus('enabled')
        ->setQty(123)
        ->setPrice(2.3458)
        ->setPromotionalPrice(1.9876)
        ->setCost(1.2090)
        ->setWeight(1.45)
        ->setHeight(1.45)
        ->setWidth(1.45)
        ->setLength(1.45)
        ->setBrand('Nike')
        ->setEan('01234567890')
        ->setNbm('11234567890')
        ->addCategory('foo', 'Foo > Foo')
        ->addCategory('bar', 'Bar > Bar')
        ->addImage('http://sourceimage001.jpg')
        ->addImage('http://sourceimage002.jpg')
        ->addImage('http://sourceimage003.jpg')
        ->addSpecification('color', 'Black')
        ->addSpecification('size', 'XL')
        ->addSpecification('voltage', '220v')
        ->addVariationAttribute('color')
        ->addVariationAttribute('size');

/** @var \SkyHub\Api\EntityInterface\Catalog\Product\Variation $variation */
$variation = $entityInterface->addVariation('variation001', 100, '9876565');
$variation->addImage('http://variation-sourceimage001.jpg')
          ->addImage('http://variation-sourceimage002.jpg')
          ->addImage('http://variation-sourceimage003.jpg')
          ->addSpecification('color', 'White')
          ->addSpecification('size', 'S');


/**
 * CREATE A PRODUCT
 *
 * @var SkyHub\Api\Handler\Response\HandlerInterface $responseCreate
 */
$responseCreate = $entityInterface->create();

/**
 * UPDATE A PRODUCT
 */
$responseUpdate = $entityInterface->update();

/**
 * DELETE A PRODUCT
 */
$responseUpdate = $entityInterface->delete();

/**
 * GET A SINGLE PRODUCT
 */
$responseUpdate = $entityInterface->product();

/**
 * GET A SINGLE PRODUCT
 */
$responseUpdate = $entityInterface->products();

/**
 * GET A PRODUCT MARKETPLACE URLS
 */
$responseUpdate = $entityInterface->urls();
