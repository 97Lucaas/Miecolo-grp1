<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.feature_value.update.product_feature_value_updater' shared service.

return $this->services['prestashop.adapter.product.feature_value.update.product_feature_value_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update\ProductFeatureValueUpdater(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'mi_', ${($_ = isset($this->services['prestashop.adapter.product.repository.product_repository']) ? $this->services['prestashop.adapter.product.repository.product_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.feature.repository.feature_repository']) ? $this->services['prestashop.adapter.feature.repository.feature_repository'] : $this->load('getPrestashop_Adapter_Feature_Repository_FeatureRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.feature.repository.feature_value_repository']) ? $this->services['prestashop.adapter.feature.repository.feature_value_repository'] : $this->load('getPrestashop_Adapter_Feature_Repository_FeatureValueRepositoryService.php')) && false ?: '_'});
