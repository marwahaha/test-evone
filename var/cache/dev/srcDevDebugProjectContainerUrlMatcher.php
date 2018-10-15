<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/_partial/channels/' => array(array('_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('repository' => array('method' => 'findAll'), 'template' => '$template', 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/_partial/taxons/tree' => array(array('_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findRootNodes'), 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/root-nodes' => array(array('_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findRootNodes'))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/leafs' => array(array('_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findChildren', 'arguments' => array('parentCode' => '$parentCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/leaf' => array(array('_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findBy', 'arguments' => array(array('code' => '$code'))))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/search' => array(array('_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByNamePart', 'arguments' => array('phrase' => '$phrase')))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/generate-slug/' => array(array('_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug:generateAction', '_format' => 'json'), null, array('GET' => 0), null),
                    '/admin/ajax/products/generate-slug/' => array(array('_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug:generateAction', '_format' => 'json'), null, array('GET' => 0), null),
                    '/admin/ajax/products/search' => array(array('_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByNamePart', 'arguments' => array('phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), null, array('GET' => 0), null),
                    '/admin/ajax/products/code' => array(array('_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findBy', 'arguments' => array(array('code' => '$code'))))), null, array('GET' => 0), null),
                    '/admin/ajax/products/' => array(array('_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('permission' => true, 'grid' => 'sylius_admin_product')), null, array('GET' => 0), null),
                    '/admin/ajax/product-taxons/update' => array(array('_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updatePositionsAction', '_format' => 'json', '_sylius' => array('permission' => true)), null, array('PUT' => 0), null),
                    '/admin/ajax/product-variants/update' => array(array('_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant:updatePositionsAction', '_format' => 'json', '_sylius' => array('permission' => true)), null, array('PUT' => 0), null),
                    '/admin/ajax/product-variants/search' => array(array('_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByPhraseAndProductCode', 'arguments' => array('phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/product-variants/' => array(array('_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByCodesAndProductCode', 'arguments' => array('$code', '$productCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/render-province-form' => array(array('_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => array('template' => '@SyliusAdmin/Common/Form/_province.html.twig')), null, null, null),
                    '/admin/ajax/get-version' => array(array('_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification:getVersionAction', '_format' => 'json'), null, null, null),
                    '/admin/' => array(array('_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard:indexAction'), null, null, null),
                    '/admin/users/' => array(array('_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => array('grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => '@SyliusAdmin/AdminUser/_form.html.twig'), 'icon' => 'lock'))), null, array('GET' => 0), null),
                    '/admin/users/new' => array(array('_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => '@SyliusAdmin/AdminUser/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/users/bulk-delete' => array(array('_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => '@SyliusAdmin/AdminUser/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/channels/' => array(array('_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => '@SyliusAdmin/Channel/_form.html.twig'), 'icon' => 'share alternate'))), null, array('GET' => 0), null),
                    '/admin/channels/new' => array(array('_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => '@SyliusAdmin/Channel/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/channels/bulk-delete' => array(array('_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => '@SyliusAdmin/Channel/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/countries/' => array(array('_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => array('grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => '@SyliusAdmin/Country/_form.html.twig'), 'icon' => 'flag'))), null, array('GET' => 0), null),
                    '/admin/countries/new' => array(array('_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => '@SyliusAdmin/Country/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/countries/bulk-delete' => array(array('_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => '@SyliusAdmin/Country/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/currencies/' => array(array('_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => array('grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Currency/_form.html.twig'), 'icon' => 'dollar'))), null, array('GET' => 0), null),
                    '/admin/currencies/new' => array(array('_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Currency/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/currencies/bulk-delete' => array(array('_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Currency/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/customers/' => array(array('_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => '@SyliusAdmin/Customer/_form.html.twig'), 'icon' => 'users'))), null, array('GET' => 0), null),
                    '/admin/customers/new' => array(array('_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => '@SyliusAdmin/Customer/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/customers/bulk-delete' => array(array('_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => '@SyliusAdmin/Customer/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/orders-statistics' => array(array('_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics:renderAction', '_sylius' => array('section' => 'admin', 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/customer-groups/' => array(array('_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group:indexAction', '_sylius' => array('grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => '@SyliusAdmin/CustomerGroup/_form.html.twig'), 'icon' => 'archive'))), null, array('GET' => 0), null),
                    '/admin/customer-groups/new' => array(array('_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => '@SyliusAdmin/CustomerGroup/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/customer-groups/bulk-delete' => array(array('_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => '@SyliusAdmin/CustomerGroup/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/exchange-rates/' => array(array('_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => array('grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => '@SyliusAdmin/ExchangeRate/_form.html.twig'), 'icon' => 'sliders'))), null, array('GET' => 0), null),
                    '/admin/exchange-rates/new' => array(array('_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => '@SyliusAdmin/ExchangeRate/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/exchange-rates/bulk-delete' => array(array('_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => '@SyliusAdmin/ExchangeRate/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/inventory/' => array(array('_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => array('icon' => 'history', 'templates' => array('breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'), 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory'))), null, array('GET' => 0), null),
                    '/admin/locales/' => array(array('_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => array('grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Locale/_form.html.twig'), 'icon' => 'translate'))), null, array('GET' => 0), null),
                    '/admin/locales/new' => array(array('_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Locale/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/locales/bulk-delete' => array(array('_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Locale/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/orders/' => array(array('_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart'))), null, array('GET' => 0), null),
                    '/admin/payment-methods/' => array(array('_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method:indexAction', '_sylius' => array('grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'), 'icon' => 'payment'))), null, array('GET' => 0), null),
                    '/admin/payment-methods/bulk-delete' => array(array('_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => '@SyliusAdmin/PaymentMethod/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/payment-gateways' => array(array('_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction', 'template' => '@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig'), null, array('GET' => 0), null),
                    '/admin/products/bulk-delete' => array(array('_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => '@SyliusAdmin/Product/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/products/' => array(array('_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube'))), null, array('GET' => 0), null),
                    '/admin/products/new/simple' => array(array('_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'factory' => array('method' => 'createWithVariant'), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => '@SyliusAdmin/Product/_form.html.twig'), 'route' => array('name' => 'sylius_admin_product_create_simple')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-association-types/' => array(array('_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig'), 'icon' => 'tasks'))), null, array('GET' => 0), null),
                    '/admin/product-association-types/new' => array(array('_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-association-types/bulk-delete' => array(array('_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/product-attributes/' => array(array('_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'), 'icon' => 'cubes'))), null, array('GET' => 0), null),
                    '/admin/product-attributes/bulk-delete' => array(array('_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAttribute/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/attribute-types' => array(array('_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction', 'template' => '@SyliusAdmin/ProductAttribute/Types/attributeTypes.html.twig'), null, array('GET' => 0), null),
                    '/admin/attributes' => array(array('_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute:renderAttributesAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeChoice.html.twig'), null, array('GET' => 0), null),
                    '/admin/attribute-forms' => array(array('_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeValues.html.twig'), null, array('GET' => 0), null),
                    '/admin/product-options/' => array(array('_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductOption/_form.html.twig'), 'icon' => 'options'))), null, array('GET' => 0), null),
                    '/admin/product-options/new' => array(array('_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductOption/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-options/bulk-delete' => array(array('_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductOption/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/product-reviews/' => array(array('_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductReview/_form.html.twig'), 'icon' => 'newspaper'))), null, array('GET' => 0), null),
                    '/admin/product-reviews/bulk-delete' => array(array('_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductReview/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/promotions/' => array(array('_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => array('grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig'), 'icon' => 'in cart'))), null, array('GET' => 0), null),
                    '/admin/promotions/new' => array(array('_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/promotions/bulk-delete' => array(array('_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/login' => array(array('_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => array('template' => '@SyliusAdmin/Security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard')), null, array('GET' => 0), null),
                    '/admin/login-check' => array(array('_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security:checkAction'), null, array('POST' => 0), null),
                    '/admin/logout' => array(array('_route' => 'sylius_admin_logout'), null, array('GET' => 0), null),
                    '/admin/shipping-categories/' => array(array('_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => array('grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingCategory/_form.html.twig'), 'icon' => 'list layout'))), null, array('GET' => 0), null),
                    '/admin/shipping-categories/new' => array(array('_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingCategory/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/shipping-categories/bulk-delete' => array(array('_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingCategory/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/shipping-methods/' => array(array('_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method:indexAction', '_sylius' => array('grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingMethod/_form.html.twig'), 'icon' => 'shipping'))), null, array('GET' => 0), null),
                    '/admin/shipping-methods/new' => array(array('_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingMethod/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/shipping-methods/bulk-delete' => array(array('_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingMethod/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/taxons/new' => array(array('_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/taxons/bulk-delete' => array(array('_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/taxons/' => array(array('_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true), null, array('GET' => 0), null),
                    '/admin/tax-categories/' => array(array('_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => array('grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxCategory/_form.html.twig'), 'icon' => 'tags'))), null, array('GET' => 0), null),
                    '/admin/tax-categories/new' => array(array('_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxCategory/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/tax-categories/bulk-delete' => array(array('_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxCategory/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/tax-rates/' => array(array('_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => array('grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxRate/_form.html.twig'), 'icon' => 'money'))), null, array('GET' => 0), null),
                    '/admin/tax-rates/new' => array(array('_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate:createAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxRate/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/tax-rates/bulk-delete' => array(array('_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxRate/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/zones/' => array(array('_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => array('grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => '@SyliusAdmin/Zone/_form.html.twig'), 'icon' => 'world'))), null, array('GET' => 0), null),
                    '/admin/zones/bulk-delete' => array(array('_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => '@SyliusAdmin/Zone/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/api/oauth/v2/token' => array(array('_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/payment/capture/session-token' => array(array('_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'), null, null, null),
                    '/' => array(array('_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'), null, array('GET' => 0), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/admin/blocks/' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:indexAction', '_sylius' => array('grid' => 'bitbag_sylius_cms_plugin_admin_block', 'section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:index.html.twig', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.blocks_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.blocks_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Block:Crud/_form.html.twig'), 'icon' => 'block layout'))), null, array('GET' => 0), null),
                    '/admin/blocks/new' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_create', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:createAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:create.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_block_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.blocks_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.blocks_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Block:Crud/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/blocks/bulk-delete' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_bulk_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.blocks_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.blocks_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Block:Crud/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/block/preview' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_preview', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:previewAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Block/preview.html.twig')), null, array('POST' => 0, 'PUT' => 1), null),
                    '/admin/pages/' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:indexAction', '_sylius' => array('grid' => 'bitbag_sylius_cms_plugin_admin_page', 'section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:index.html.twig', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.pages_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.pages_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Page:Crud/_form.html.twig'), 'icon' => 'sticky note'))), null, array('GET' => 0), null),
                    '/admin/pages/new' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_create', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:createAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:create.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_page_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.pages_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.pages_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Page:Crud/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/pages/bulk-delete' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_bulk_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.pages_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.pages_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Page:Crud/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/frequently-asked-questions/' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:indexAction', '_sylius' => array('grid' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.faq_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.faq_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:FrequentlyAskedQuestion:Crud/_form.html.twig'), 'icon' => 'help'))), null, array('GET' => 0), null),
                    '/admin/frequently-asked-questions/new' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_create', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.faq_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.faq_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:FrequentlyAskedQuestion:Crud/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/frequently-asked-questions/bulk-delete' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_bulk_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.faq_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.faq_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:FrequentlyAskedQuestion:Crud/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/sections/' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_section_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:indexAction', '_sylius' => array('grid' => 'bitbag_sylius_cms_plugin_admin_section', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.sections_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.sections_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Section:Crud/_form.html.twig'), 'icon' => 'grid layout'))), null, array('GET' => 0), null),
                    '/admin/sections/new' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_section_create', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_section_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.sections_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.sections_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Section:Crud/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/sections/bulk-delete' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_section_bulk_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.sections_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.sections_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Section:Crud/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/ajax/sections/search' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_ajax_section_by_name_phrase', '_format' => 'json', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:indexAction', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByNamePart', 'arguments' => array('phrase' => '$phrase', 'locale' => null)))), null, array('GET' => 0), null),
                    '/admin/ajax/sections/code' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_ajax_section_by_code', '_format' => 'json', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:indexAction', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findBy', 'arguments' => array(array('code' => '$code'))))), null, array('GET' => 0), null),
                    '/admin/media/' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:indexAction', '_sylius' => array('grid' => 'bitbag_sylius_cms_plugin_admin_media', 'section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:index.html.twig', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.media_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.media_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Media:Crud/_form.html.twig'), 'icon' => 'file'))), null, array('GET' => 0), null),
                    '/admin/media/new' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_create', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:createAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:create.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_media_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.media_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.media_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Media:Crud/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/media/bulk-delete' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_bulk_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.media_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.media_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Media:Crud/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/ajax/products/search-by-name' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_ajax_product_by_name_phrase', '_format' => 'json', '_controller' => 'bitbag_sylius_cms_plugin.controller.action.admin.product_search'), null, array('GET' => 0), null),
                    '/admin/_partial/locales' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_partial_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => array('repository' => array('method' => 'findAll'), 'template' => '$template', 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/page/generate-slug' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_ajax_generate_page_slug', '_controller' => 'bitbag_sylius_cms_plugin.controller.page_slug:generateAction'), null, array('GET' => 0), null),
                    '/admin/editor/upload-image' => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_upload_editor_image', '_controller' => 'bitbag_sylius_cms_plugin.controller.action.admin.upload_editor_image'), null, null, null),
                    '/newsletter/subscribe' => array(array('_route' => 'bitbag_sylius_mailchimp_plugin_newsletter_subscribe', '_controller' => 'BitBag\\SyliusMailChimpPlugin\\Controller\\NewsletterController::subscribeAction'), null, array('POST' => 0, 'PATCH' => 1), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                        .'|([A-z0-9_-]*)/(.+)(*:86)'
                    .')'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|_partial/(?'
                                .'|address/log\\-entry/([^/]++)(*:146)'
                                .'|customers/(?'
                                    .'|latest/([^/]++)(*:182)'
                                    .'|([^/]++)(*:198)'
                                .')'
                                .'|orders/(?'
                                    .'|latest/([^/]++)(?'
                                        .'|(*:235)'
                                        .'|/([^/]++)(*:252)'
                                    .')'
                                    .'|([^/]++)/shipments/([^/]++)/ship(*:293)'
                                .')'
                                .'|pro(?'
                                    .'|ducts/([^/]++)(*:322)'
                                    .'|motions/([^/]++)(*:346)'
                                .')'
                                .'|taxons/([^/]++)(*:370)'
                            .')'
                            .'|ajax/taxons/([^/]++)/move(*:404)'
                            .'|impersonate(?:/([^/]++))?(*:437)'
                            .'|users/([^/]++)(?'
                                .'|/edit(*:467)'
                                .'|(*:475)'
                            .')'
                            .'|c(?'
                                .'|hannels/([^/]++)(?'
                                    .'|/edit(*:512)'
                                    .'|(*:520)'
                                .')'
                                .'|ountries/([^/]++)/edit(*:551)'
                                .'|u(?'
                                    .'|rrencies/([^/]++)/edit(*:585)'
                                    .'|stomer(?'
                                        .'|s/([^/]++)(?'
                                            .'|/(?'
                                                .'|edit(*:623)'
                                                .'|orders(*:637)'
                                            .')'
                                            .'|(*:646)'
                                        .')'
                                        .'|\\-groups/([^/]++)(?'
                                            .'|/edit(*:680)'
                                            .'|(*:688)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates/([^/]++)(?'
                                .'|/edit(*:732)'
                                .'|(*:740)'
                            .')'
                            .'|locales/([^/]++)/edit(*:770)'
                            .'|orders/([^/]++)(?'
                                .'|(*:796)'
                                .'|/(?'
                                    .'|history(*:815)'
                                    .'|edit(*:827)'
                                    .'|cancel(*:841)'
                                    .'|payments/([^/]++)/(?'
                                        .'|complete(*:878)'
                                        .'|refund(*:892)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/ship(*:916)'
                            .'|p(?'
                                .'|ayment\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:963)'
                                        .'|(*:971)'
                                    .')'
                                    .'|new/([^/]++)(*:992)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s/(?'
                                            .'|([^/]++)(?'
                                                .'|/edit(*:1034)'
                                                .'|(*:1043)'
                                            .')'
                                            .'|taxon/([^/]++)(*:1067)'
                                            .'|new(*:1079)'
                                            .'|([^/]++)/variants/(?'
                                                .'|(*:1109)'
                                                .'|new(*:1121)'
                                                .'|([^/]++)/edit(*:1143)'
                                                .'|bulk\\-delete(*:1164)'
                                                .'|([^/]++)(*:1181)'
                                                .'|generate(*:1198)'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ssociation\\-types/([^/]++)(?'
                                                    .'|/edit(*:1252)'
                                                    .'|(*:1261)'
                                                .')'
                                                .'|ttributes/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|edit(*:1300)'
                                                        .'|new(*:1312)'
                                                    .')'
                                                    .'|(*:1322)'
                                                .')'
                                            .')'
                                            .'|options/([^/]++)(?'
                                                .'|/edit(*:1357)'
                                                .'|(*:1366)'
                                            .')'
                                            .'|review(?'
                                                .'|s/([^/]++)(?'
                                                    .'|/edit(*:1403)'
                                                    .'|(*:1412)'
                                                .')'
                                                .'|/([^/]++)/(?'
                                                    .'|accept(*:1441)'
                                                    .'|reject(*:1456)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1496)'
                                            .'|coupons/(?'
                                                .'|(*:1516)'
                                                .'|new(*:1528)'
                                                .'|([^/]++)/edit(*:1550)'
                                                .'|generate(*:1567)'
                                                .'|bulk\\-delete(*:1588)'
                                                .'|([^/]++)(*:1605)'
                                            .')'
                                        .')'
                                        .'|(*:1616)'
                                    .')'
                                .')'
                            .')'
                            .'|sh(?'
                                .'|ipping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1671)'
                                        .'|(*:1680)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1717)'
                                            .'|archive(*:1733)'
                                        .')'
                                        .'|(*:1743)'
                                    .')'
                                .')'
                                .'|op\\-user/([^/]++)(*:1771)'
                            .')'
                            .'|tax(?'
                                .'|ons/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1810)'
                                        .'|(*:1819)'
                                    .')'
                                    .'|new/([^/]++)(*:1841)'
                                .')'
                                .'|\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1883)'
                                        .'|(*:1892)'
                                    .')'
                                    .'|rates/([^/]++)(?'
                                        .'|/edit(*:1924)'
                                        .'|(*:1933)'
                                    .')'
                                .')'
                            .')'
                            .'|zones/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:1970)'
                                    .'|(*:1979)'
                                .')'
                                .'|(country|province|zone)/new(*:2016)'
                            .')'
                        .')'
                        .'|pi/v([^/]++)/(?'
                            .'|orders/([^/]++)(?'
                                .'|/(?'
                                    .'|adjustments/(?'
                                        .'|(*:2080)'
                                        .'|([^/]++)(?'
                                            .'|(*:2100)'
                                        .')'
                                    .')'
                                    .'|cancel(*:2117)'
                                    .'|shipments/([^/]++)/ship(*:2149)'
                                    .'|payments/([^/]++)/complete(*:2184)'
                                .')'
                                .'|(*:2194)'
                            .')'
                            .'|users/(?'
                                .'|(*:2213)'
                                .'|([^/]++)(?'
                                    .'|(*:2233)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|arts/(?'
                                    .'|(*:2256)'
                                    .'|([^/]++)(?'
                                        .'|(*:2276)'
                                        .'|/items/(?'
                                            .'|(*:2295)'
                                            .'|([^/]++)(?'
                                                .'|(*:2315)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|annels/(?'
                                        .'|(*:2342)'
                                        .'|([^/]++)(?'
                                            .'|(*:2362)'
                                        .')'
                                    .')'
                                    .'|eckouts/(?'
                                        .'|([^/]++)(*:2392)'
                                        .'|addressing/([^/]++)(*:2420)'
                                        .'|select\\-(?'
                                            .'|shipping/([^/]++)(?'
                                                .'|(*:2460)'
                                            .')'
                                            .'|payment/([^/]++)(?'
                                                .'|(*:2489)'
                                            .')'
                                        .')'
                                        .'|complete/([^/]++)(*:2517)'
                                    .')'
                                .')'
                                .'|ountries/(?'
                                    .'|(*:2540)'
                                    .'|([^/]++)(?'
                                        .'|(*:2560)'
                                        .'|/provinces/([^/]++)(?'
                                            .'|(*:2591)'
                                        .')'
                                    .')'
                                .')'
                                .'|u(?'
                                    .'|rrencies/(?'
                                        .'|(*:2619)'
                                        .'|([^/]++)(?'
                                            .'|(*:2639)'
                                        .')'
                                    .')'
                                    .'|stomers/(?'
                                        .'|(*:2661)'
                                        .'|([^/]++)(*:2678)'
                                        .'|(*:2687)'
                                        .'|([^/]++)(?'
                                            .'|(*:2707)'
                                            .'|/orders/(*:2724)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates/(?'
                                .'|(*:2756)'
                                .'|([^/\\-]++)\\-([^/]++)(?'
                                    .'|(*:2788)'
                                .')'
                            .')'
                            .'|locales/(?'
                                .'|(*:2810)'
                                .'|([^/]++)(?'
                                    .'|(*:2830)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment(?'
                                    .'|\\-methods/([^/]++)(*:2872)'
                                    .'|s/(?'
                                        .'|(*:2886)'
                                        .'|([^/]++)(*:2903)'
                                    .')'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s/(?'
                                            .'|(*:2931)'
                                            .'|([^/]++)(?'
                                                .'|(*:2951)'
                                                .'|/(?'
                                                    .'|reviews/(?'
                                                        .'|(*:2975)'
                                                        .'|([^/]++)(?'
                                                            .'|(*:2995)'
                                                            .'|/(?'
                                                                .'|accept(*:3014)'
                                                                .'|reject(*:3029)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|variants/(?'
                                                        .'|(*:3053)'
                                                        .'|([^/]++)(?'
                                                            .'|(*:3073)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ttributes/(?'
                                                    .'|(*:3109)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:3129)'
                                                        .'|(*:3138)'
                                                    .')'
                                                .')'
                                                .'|ssociation\\-types/(?'
                                                    .'|(*:3170)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:3190)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|options/(?'
                                                .'|(*:3213)'
                                                .'|([^/]++)(?'
                                                    .'|(*:3233)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions/(?'
                                        .'|(*:3257)'
                                        .'|([^/]++)(?'
                                            .'|(*:3277)'
                                            .'|/coupons/(?'
                                                .'|(*:3298)'
                                                .'|([^/]++)(?'
                                                    .'|(*:3318)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|tax(?'
                                .'|ons/(?'
                                    .'|([^/]++)/products(*:3363)'
                                    .'|(*:3372)'
                                    .'|([^/]++)(?'
                                        .'|(*:3392)'
                                    .')'
                                .')'
                                .'|\\-(?'
                                    .'|categories/(?'
                                        .'|(*:3422)'
                                        .'|([^/]++)(?'
                                            .'|(*:3442)'
                                        .')'
                                    .')'
                                    .'|rates/(?'
                                        .'|(*:3462)'
                                        .'|([^/]++)(*:3479)'
                                    .')'
                                .')'
                            .')'
                            .'|ship(?'
                                .'|ments/(?'
                                    .'|(*:3507)'
                                    .'|([^/]++)(*:3524)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/(?'
                                        .'|(*:3557)'
                                        .'|([^/]++)(?'
                                            .'|(*:3577)'
                                        .')'
                                    .')'
                                    .'|methods/([^/]++)(*:3604)'
                                .')'
                            .')'
                            .'|zones/(?'
                                .'|(*:3624)'
                                .'|([^/]++)(?'
                                    .'|(*:3644)'
                                    .'|(*:3653)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/users/check(*:3708)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/add(*:3756)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/([^/]++)/remove(*:3816)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/render\\-province\\-form(*:3878)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-slug/(.+)(*:3942)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-code/([^/]++)(*:4010)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/summary(*:4066)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/add\\-item(*:4124)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/latest/([^/]++)(*:4192)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)(*:4253)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/reviews/latest(?:/([^/]++))?(*:4343)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/associations/([^/]++)(*:4426)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/(*:4461)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login(*:4501)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login\\-check(*:4548)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/logout(*:4589)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/register(*:4632)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/register\\-after\\-checkout/([^/]++)(*:4701)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password(*:4755)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password/([^/]++)(*:4818)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify(*:4859)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify/([^/]++)(*:4909)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)(*:4961)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/taxons/(.+)(*:5007)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews/(*:5068)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews/new(*:5132)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/cart/(?'
                        .'|(*:5175)'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/(*:5220)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/address(*:5271)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-shipping(*:5331)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-payment(*:5390)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/complete(*:5442)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/contact/(*:5485)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/thank\\-you(*:5536)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)/pay(*:5589)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/after\\-pay(*:5640)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)(*:5689)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders/(*:5739)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders/([^/]++)(*:5797)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/(*:5854)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/add(*:5914)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/edit(*:5984)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)(*:6049)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/set\\-as\\-default(*:6131)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/(*:6174)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/dashboard(*:6226)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/profile/edit(*:6281)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/change\\-password(*:6340)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-currency/([^/]++)(*:6400)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-locale/([^/]++)(*:6458)'
                    .'|/payment/(?'
                        .'|capture/([^/]++)(*:6495)'
                        .'|notify/(?'
                            .'|unsafe/([^/]++)(*:6529)'
                            .'|([^/]++)(*:6546)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:6588)'
                        .'|wdt/([^/]++)(*:6609)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:6656)'
                                .'|router(*:6671)'
                                .'|exception(?'
                                    .'|(*:6692)'
                                    .'|\\.css(*:6706)'
                                .')'
                            .')'
                            .'|(*:6717)'
                        .')'
                    .')'
                    .'|/admin/(?'
                        .'|blocks/([^/]++)(?'
                            .'|/edit(*:6761)'
                            .'|(*:6770)'
                        .')'
                        .'|page(?'
                            .'|s/([^/]++)(?'
                                .'|/edit(*:6805)'
                                .'|(*:6814)'
                            .')'
                            .'|/preview(?:/([^/]++))?(*:6846)'
                        .')'
                        .'|frequently\\-asked\\-questions/([^/]++)(?'
                            .'|/edit(*:6901)'
                            .'|(*:6910)'
                        .')'
                        .'|sections/([^/]++)(?'
                            .'|/edit(*:6945)'
                            .'|(*:6954)'
                        .')'
                        .'|media/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:6989)'
                                .'|(*:6998)'
                            .')'
                            .'|preview(?:/([^/]++))?(*:7029)'
                        .')'
                        .'|import/([^/]++)(*:7054)'
                    .')'
                    .'|/([^/]++)/(?'
                        .'|block(?'
                            .'|/([^/]++)(*:7094)'
                            .'|s/(?'
                                .'|section/([^/]++)(*:7124)'
                                .'|product/([^/]++)(*:7149)'
                            .')'
                        .')'
                        .'|page(?'
                            .'|/(?'
                                .'|([^/]++)(*:7179)'
                                .'|link/([^/]++)(*:7201)'
                            .')'
                            .'|s/([^/]++)(*:7221)'
                        .')'
                        .'|faq(*:7234)'
                        .'|section/([^/]++)(*:7259)'
                        .'|media/(?'
                            .'|([^/]++)(*:7285)'
                            .'|download/([^/]++)(*:7311)'
                            .'|section/([^/]++)(*:7336)'
                            .'|product/([^/]++)(*:7361)'
                        .')'
                    .')'
                    .'|/sitemap(?'
                        .'|_index\\.(xml)(*:7396)'
                        .'|\\.([^/]++)(*:7415)'
                        .'|/(?'
                            .'|all\\.(xml)(*:7438)'
                            .'|cms_(?'
                                .'|pages\\.(xml)(*:7466)'
                                .'|sections\\.(xml)(*:7490)'
                            .')'
                            .'|products\\.(xml)(*:7515)'
                            .'|taxons\\.(xml)(*:7537)'
                            .'|static\\.(xml)(*:7559)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 2080:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_adjustment_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_index') + $matches, array('_controller' => 'sylius.controller.adjustment:indexAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findByOrder', 'arguments' => array('$orderId')), 'paginate' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_index;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_index:

                        // sylius_admin_api_adjustment_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_create') + $matches, array('_controller' => 'sylius.controller.adjustment:createAction', '_sylius' => array('serialization_version' => '$version')));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_create;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_create:

                        break;
                    case 2100:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_adjustment_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_update') + $matches, array('_controller' => 'sylius.controller.adjustment:updateAction', '_sylius' => array('serialization_version' => '$version')));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_update;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_update:

                        // sylius_admin_api_adjustment_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_delete') + $matches, array('_controller' => 'sylius.controller.adjustment:deleteAction', '_sylius' => array('serialization_version' => '$version', 'filterable' => true, 'criteria' => array('order' => '$orderId'), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_delete:

                        break;
                    case 2213:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_api_admin_user_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_index') + $matches, array('_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_index;
                        }

                        return $ret;
                        not_sylius_api_admin_user_index:

                        // sylius_api_admin_user_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_create') + $matches, array('_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_create;
                        }

                        return $ret;
                        not_sylius_api_admin_user_create:

                        break;
                    case 2233:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_api_admin_user_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_update') + $matches, array('_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_update;
                        }

                        return $ret;
                        not_sylius_api_admin_user_update:

                        // sylius_api_admin_user_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_show') + $matches, array('_controller' => 'sylius.controller.admin_user:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_show;
                        }

                        return $ret;
                        not_sylius_api_admin_user_show:

                        // sylius_api_admin_user_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_delete') + $matches, array('_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_delete;
                        }

                        return $ret;
                        not_sylius_api_admin_user_delete:

                        break;
                    case 2256:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_order_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_index') + $matches, array('_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_cart', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_index;
                        }

                        return $ret;
                        not_sylius_admin_api_order_index:

                        // sylius_admin_api_cart_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_create') + $matches, array('_controller' => 'sylius.controller.order:createAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType', 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_create;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_create:

                        break;
                    case 2276:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_admin_api_cart_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_update') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType', 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_update;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_update:

                        // sylius_admin_api_cart_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_delete') + $matches, array('_controller' => 'sylius.controller.order:deleteAction', '_format' => 'json', '_sylius' => array('serialization_version' => '$version', 'csrf_protection' => false, 'repository' => array('method' => 'findCartById', 'arguments' => array('$id')))));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_delete:

                        // sylius_admin_api_cart_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_show') + $matches, array('_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findCartById', 'arguments' => array('$id')), 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_show;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_show:

                        break;
                    case 2315:
                        $matches = array('version' => $matches[1] ?? null, 'cartId' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_order_item_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_item_update') + $matches, array('_controller' => 'sylius.controller.order_item:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('cart' => '$cartId'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_item_update;
                        }

                        return $ret;
                        not_sylius_admin_api_order_item_update:

                        // sylius_admin_api_order_item_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_item_delete') + $matches, array('_controller' => 'sylius.controller.order_item:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('cart' => '$cartId'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_item_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_order_item_delete:

                        break;
                    case 2342:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_channel_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_index') + $matches, array('_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_index;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_index:

                        // sylius_admin_api_channel_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_create') + $matches, array('_controller' => 'sylius.controller.channel:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_create;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_create:

                        break;
                    case 2362:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_channel_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_update') + $matches, array('_controller' => 'sylius.controller.channel:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_update;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_update:

                        // sylius_admin_api_channel_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_show') + $matches, array('_controller' => 'sylius.controller.channel:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_show;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_show:

                        // sylius_admin_api_channel_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_delete') + $matches, array('_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_delete:

                        break;
                    case 2460:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_checkout_available_shipping_methods
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_available_shipping_methods') + $matches, array('_controller' => 'sylius.controller.show_available_shipping_methods:showAction'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_available_shipping_methods;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_available_shipping_methods:

                        // sylius_admin_api_checkout_select_shipping
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_select_shipping') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_shipping'))));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_select_shipping;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_select_shipping:

                        break;
                    case 2489:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_checkout_available_payment_methods
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_available_payment_methods') + $matches, array('_controller' => 'sylius.controller.show_available_payment_methods:showAction'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_available_payment_methods;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_available_payment_methods:

                        // sylius_admin_api_checkout_select_payment
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_select_payment') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_payment'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_select_payment;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_select_payment:

                        break;
                    case 2540:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_country_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_index') + $matches, array('_controller' => 'sylius.controller.country:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_index;
                        }

                        return $ret;
                        not_sylius_admin_api_country_index:

                        // sylius_admin_api_country_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_create') + $matches, array('_controller' => 'sylius.controller.country:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_create;
                        }

                        return $ret;
                        not_sylius_admin_api_country_create:

                        break;
                    case 2560:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_country_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_show') + $matches, array('_controller' => 'sylius.controller.country:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_show;
                        }

                        return $ret;
                        not_sylius_admin_api_country_show:

                        // sylius_admin_api_country_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_delete') + $matches, array('_controller' => 'sylius.controller.country:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_country_delete:

                        break;
                    case 2591:
                        $matches = array('version' => $matches[1] ?? null, 'countryCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_province_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_province_delete') + $matches, array('_controller' => 'sylius.controller.province:deleteAction', '_sylius' => array('serialization_version' => '$version', 'criteria' => array('code' => '$code'), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_province_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_province_delete:

                        // sylius_admin_api_province_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_province_show') + $matches, array('_controller' => 'sylius.controller.province:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'), 'criteria' => array('code' => '$code'))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_province_show;
                        }

                        return $ret;
                        not_sylius_admin_api_province_show:

                        break;
                    case 2619:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_currency_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_index') + $matches, array('_controller' => 'sylius.controller.currency:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_index;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_index:

                        // sylius_admin_api_currency_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_create') + $matches, array('_controller' => 'sylius.controller.currency:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_create;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_create:

                        break;
                    case 2639:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_currency_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_show') + $matches, array('_controller' => 'sylius.controller.currency:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_show;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_show:

                        // sylius_admin_api_currency_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_delete') + $matches, array('_controller' => 'sylius.controller.currency:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_delete:

                        break;
                    case 2707:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_admin_api_customer_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_customer_update') + $matches, array('_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => array('type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_customer_update;
                        }

                        return $ret;
                        not_sylius_admin_api_customer_update:

                        // sylius_admin_api_customer_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_customer_delete') + $matches, array('_controller' => 'sylius.controller.customer:deleteAction', '_sylius' => array('serialization_version' => '$version', 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_customer_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_customer_delete:

                        break;
                    case 2756:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_exchange_rate_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_index') + $matches, array('_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_index;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_index:

                        // sylius_admin_api_exchange_rate_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_create') + $matches, array('_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_create;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_create:

                        break;
                    case 2788:
                        $matches = array('version' => $matches[1] ?? null, 'sourceCurrencyCode' => $matches[2] ?? null, 'targetCurrencyCode' => $matches[3] ?? null);

                        // sylius_admin_api_exchange_rate_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_update') + $matches, array('_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_update;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_update:

                        // sylius_admin_api_exchange_rate_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_delete') + $matches, array('_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_delete:

                        // sylius_admin_api_exchange_rate_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_show') + $matches, array('_controller' => 'sylius.controller.exchange_rate:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_show;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_show:

                        break;
                    case 2810:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_locale_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_index') + $matches, array('_controller' => 'sylius.controller.locale:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_index;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_index:

                        // sylius_admin_api_locale_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_create') + $matches, array('_controller' => 'sylius.controller.locale:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_create;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_create:

                        break;
                    case 2830:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_locale_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_show') + $matches, array('_controller' => 'sylius.controller.locale:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_show;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_show:

                        // sylius_admin_api_locale_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_delete') + $matches, array('_controller' => 'sylius.controller.locale:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_delete:

                        break;
                    case 2931:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_index') + $matches, array('_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_index:

                        // sylius_admin_api_product_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_create') + $matches, array('_controller' => 'sylius.controller.product:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_create:

                        break;
                    case 2951:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_update') + $matches, array('_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_update:

                        // sylius_admin_api_product_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_show') + $matches, array('_controller' => 'sylius.controller.product:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_show:

                        // sylius_admin_api_product_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_delete') + $matches, array('_controller' => 'sylius.controller.product:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_delete:

                        break;
                    case 2975:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null);

                        // sylius_admin_api_product_review_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_index') + $matches, array('_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product_review', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_index:

                        // sylius_admin_api_product_review_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_create') + $matches, array('_controller' => 'sylius.controller.product_review:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'factory' => array('method' => 'createForSubject', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))')))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_create:

                        break;
                    case 2995:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_product_review_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_update') + $matches, array('_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_update:

                        // sylius_admin_api_product_review_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_delete') + $matches, array('_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_delete:

                        // sylius_admin_api_product_review_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_show') + $matches, array('_controller' => 'sylius.controller.product_review:showAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_show:

                        break;
                    case 3053:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null);

                        // sylius_admin_api_product_variant_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_index') + $matches, array('_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product_variant', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_index:

                        // sylius_admin_api_product_variant_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_create') + $matches, array('_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))')))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_create:

                        break;
                    case 3073:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_product_variant_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_update') + $matches, array('_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_update:

                        // sylius_admin_api_product_variant_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_delete') + $matches, array('_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_delete:

                        // sylius_admin_api_product_variant_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_show') + $matches, array('_controller' => 'sylius.controller.product_variant:showAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_show:

                        break;
                    case 3129:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_attribute_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_update') + $matches, array('_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_update:

                        // sylius_admin_api_product_attribute_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_show') + $matches, array('_controller' => 'sylius.controller.product_attribute:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_show:

                        // sylius_admin_api_product_attribute_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_delete') + $matches, array('_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_delete:

                        break;
                    case 3170:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_association_type_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_index') + $matches, array('_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_index:

                        // sylius_admin_api_product_association_type_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_create') + $matches, array('_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_create:

                        break;
                    case 3190:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_association_type_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_update') + $matches, array('_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_update:

                        // sylius_admin_api_product_association_type_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_show') + $matches, array('_controller' => 'sylius.controller.product_association_type:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_show:

                        // sylius_admin_api_product_association_type_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_delete') + $matches, array('_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_delete:

                        break;
                    case 3213:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_option_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_index') + $matches, array('_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_index:

                        // sylius_admin_api_product_option_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_create') + $matches, array('_controller' => 'sylius.controller.product_option:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_create:

                        break;
                    case 3233:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_option_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_update') + $matches, array('_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_update:

                        // sylius_admin_api_product_option_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_show') + $matches, array('_controller' => 'sylius.controller.product_option:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_show:

                        // sylius_admin_api_product_option_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_delete') + $matches, array('_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_delete:

                        break;
                    case 3257:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_promotion_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_index') + $matches, array('_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_promotion', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_index;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_index:

                        // sylius_admin_api_promotion_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_create') + $matches, array('_controller' => 'sylius.controller.promotion:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_create;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_create:

                        break;
                    case 3277:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_promotion_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_update') + $matches, array('_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_update;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_update:

                        // sylius_admin_api_promotion_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_show') + $matches, array('_controller' => 'sylius.controller.promotion:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_show;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_show:

                        // sylius_admin_api_promotion_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_delete') + $matches, array('_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_delete:

                        break;
                    case 3298:
                        $matches = array('version' => $matches[1] ?? null, 'promotionCode' => $matches[2] ?? null);

                        // sylius_admin_api_promotion_coupon_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_index') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default'), 'section' => 'admin_api', 'repository' => array('method' => 'createPaginatorForPromotion', 'arguments' => array('$promotionCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_index;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_index:

                        // sylius_admin_api_promotion_coupon_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_create') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'factory' => array('method' => 'createForPromotion', 'arguments' => array('expr:service(\'sylius.repository.promotion\').findOneByCode($promotionCode)')), 'criteria' => array('promotion' => '$promotionCode'))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_create;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_create:

                        break;
                    case 3318:
                        $matches = array('version' => $matches[1] ?? null, 'promotionCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_promotion_coupon_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_update') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_update;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_update:

                        // sylius_admin_api_promotion_coupon_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_show') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_show;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_show:

                        // sylius_admin_api_promotion_coupon_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_delete') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'csrf_protection' => false, 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_delete:

                        break;
                    case 3372:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_taxon_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_index') + $matches, array('_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_taxon', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_index;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_index:

                        // sylius_admin_api_taxon_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_create') + $matches, array('_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_create;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_create:

                        break;
                    case 3392:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_taxon_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_update') + $matches, array('_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_update;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_update:

                        // sylius_admin_api_taxon_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_show') + $matches, array('_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_show;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_show:

                        // sylius_admin_api_taxon_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_delete') + $matches, array('_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_delete:

                        break;
                    case 3422:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_tax_category_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_index') + $matches, array('_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_index;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_index:

                        // sylius_admin_api_tax_category_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_create') + $matches, array('_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_create;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_create:

                        break;
                    case 3442:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_tax_category_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_update') + $matches, array('_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_update;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_update:

                        // sylius_admin_api_tax_category_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_show') + $matches, array('_controller' => 'sylius.controller.tax_category:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_show;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_show:

                        // sylius_admin_api_tax_category_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_delete') + $matches, array('_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_delete:

                        break;
                    case 3557:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_shipping_category_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_index') + $matches, array('_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_index;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_index:

                        // sylius_admin_api_shipping_category_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_create') + $matches, array('_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_create;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_create:

                        break;
                    case 3577:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_shipping_category_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_update') + $matches, array('_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_update;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_update:

                        // sylius_admin_api_shipping_category_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_show') + $matches, array('_controller' => 'sylius.controller.shipping_category:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_show;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_show:

                        // sylius_admin_api_shipping_category_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_delete') + $matches, array('_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_delete:

                        break;
                    case 3644:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_zone_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_update') + $matches, array('_controller' => 'sylius.controller.zone:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_update;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_update:

                        // sylius_admin_api_zone_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_show') + $matches, array('_controller' => 'sylius.controller.zone:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_show;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_show:

                        // sylius_admin_api_zone_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_delete') + $matches, array('_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_delete:

                        break;
                    case 5175:
                        $matches = array('_locale' => $matches[1] ?? null);

                        // sylius_shop_cart_summary
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_summary') + $matches, array('_controller' => 'sylius.controller.order:summaryAction', '_sylius' => array('template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType')));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_summary;
                        }

                        return $ret;
                        not_sylius_shop_cart_summary:

                        // sylius_shop_cart_save
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_save') + $matches, array('_controller' => 'sylius.controller.order:saveAction', '_sylius' => array('template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_cart_summary', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save')));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_save;
                        }

                        return $ret;
                        not_sylius_shop_cart_save:

                        // sylius_shop_cart_clear
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_clear') + $matches, array('_controller' => 'sylius.controller.order:clearAction', '_sylius' => array('redirect' => 'sylius_shop_cart_summary')));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_clear;
                        }

                        return $ret;
                        not_sylius_shop_cart_clear:

                        break;
                    default:
                        $routes = array(
                            61 => array(array('_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter', 'hash', 'path'), array('GET' => 0), null),
                            86 => array(array('_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter', 'path'), array('GET' => 0), null),
                            146 => array(array('_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry:indexAction', '_sylius' => array('template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true)), array('id'), array('GET' => 0), null),
                            182 => array(array('_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('repository' => array('method' => 'findLatest', 'arguments' => array('!!int $count')), 'template' => '$template', 'permission' => true)), array('count'), array('GET' => 0), null),
                            198 => array(array('_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            235 => array(array('_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('repository' => array('method' => 'findLatest', 'arguments' => array('!!int $count')), 'template' => '$template', 'permission' => true)), array('count'), array('GET' => 0), null),
                            252 => array(array('_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('repository' => array('method' => 'findLatestInChannel', 'arguments' => array('count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))')), 'template' => '$template', 'permission' => true)), array('channelCode', 'count'), array('GET' => 0), null),
                            293 => array(array('_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => array('route' => array('parameters' => array('orderId' => '$orderId', 'id' => '$id'))))), array('orderId', 'id'), array('GET' => 0), null),
                            322 => array(array('_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            346 => array(array('_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            370 => array(array('_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            404 => array(array('_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon:updateAction', '_format' => 'json', '_sylius' => array('permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType')), array('id'), array('PUT' => 0), null),
                            437 => array(array('_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user:impersonateAction', 'username' => '$username'), array('username'), null, null),
                            467 => array(array('_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => '@SyliusAdmin/AdminUser/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            475 => array(array('_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => '@SyliusAdmin/AdminUser/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            512 => array(array('_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => '@SyliusAdmin/Channel/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            520 => array(array('_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => '@SyliusAdmin/Channel/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            551 => array(array('_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => '@SyliusAdmin/Country/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            585 => array(array('_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Currency/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            623 => array(array('_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => '@SyliusAdmin/Customer/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            637 => array(array('_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => array('route' => array('parameters' => array('$customerId' => '$id')), 'templates' => array('breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'), 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart'))), array('id'), array('GET' => 0), null),
                            646 => array(array('_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin/Customer/show.html.twig', 'permission' => true)), array('id'), null, null),
                            680 => array(array('_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => '@SyliusAdmin/CustomerGroup/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            688 => array(array('_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => '@SyliusAdmin/CustomerGroup/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            732 => array(array('_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => '@SyliusAdmin/ExchangeRate/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            740 => array(array('_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => '@SyliusAdmin/ExchangeRate/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            770 => array(array('_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => '@SyliusAdmin/Locale/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            796 => array(array('_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig')), array('id'), array('GET' => 0), null),
                            815 => array(array('_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig')), array('id'), array('GET' => 0), null),
                            827 => array(array('_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => array('options' => array('validation_groups' => array('sylius_shipping_address_update'))))), array('id'), array('GET' => 0, 'PUT' => 1), null),
                            841 => array(array('_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_order', 'transition' => 'cancel'), 'redirect' => 'referer')), array('id'), array('PUT' => 0), null),
                            878 => array(array('_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('event' => 'complete', 'permission' => true, 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'complete'), 'redirect' => 'referer')), array('orderId', 'id'), array('PUT' => 0), null),
                            892 => array(array('_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'refund'), 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded')), array('orderId', 'id'), array('PUT' => 0), null),
                            916 => array(array('_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => array('route' => array('parameters' => array('orderId' => '$orderId', 'id' => '$id'))))), array('id'), array('PUT' => 0), null),
                            963 => array(array('_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => '@SyliusAdmin/PaymentMethod/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            971 => array(array('_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => '@SyliusAdmin/PaymentMethod/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            992 => array(array('_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createWithGateway', 'arguments' => array('gatewayFactory' => '$factory')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'), 'route' => array('parameters' => array('factory' => '$factory'))))), array('factory'), array('GET' => 0, 'POST' => 1), null),
                            1034 => array(array('_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => '@SyliusAdmin/Product/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1043 => array(array('_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => '@SyliusAdmin/Product/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1067 => array(array('_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube'))), array('taxonId'), array('GET' => 0), null),
                            1079 => array(array('_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => '@SyliusAdmin/Product/_form.html.twig'), 'route' => array('name' => 'sylius_admin_product_create')))), array(), array('GET' => 0, 'POST' => 1), null),
                            1109 => array(array('_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => array('route' => array('parameters' => array('productId' => '$productId')), 'templates' => array('breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'), 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants'))), array('productId'), array('GET' => 0), null),
                            1121 => array(array('_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => array('factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('productId' => '$productId')), 'templates' => array('form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig')))), array('productId'), array('GET' => 0, 'POST' => 1), null),
                            1143 => array(array('_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'permission' => true, 'repository' => array('method' => 'findOneByIdAndProductId', 'arguments' => array('id' => '$id', 'productId' => '$productId')), 'vars' => array('route' => array('parameters' => array('id' => '$id', 'productId' => '$productId')), 'templates' => array('form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig')))), array('productId', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            1164 => array(array('_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), array('productId'), array('DELETE' => 0), null),
                            1181 => array(array('_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => array('method' => 'findOneByIdAndProductId', 'arguments' => array('id' => '$id', 'productId' => '$productId')))), array('productId', 'id'), array('DELETE' => 0), null),
                            1198 => array(array('_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'form' => array('type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'), 'repository' => array('method' => 'find', 'arguments' => array('$productId')), 'flash' => 'sylius.product_variant.generate')), array('productId'), array('GET' => 0, 'POST' => 1), null),
                            1252 => array(array('_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1261 => array(array('_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1300 => array(array('_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAttribute/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1312 => array(array('_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'), 'route' => array('parameters' => array('type' => '$type'))))), array('type'), array('GET' => 0, 'POST' => 1), null),
                            1322 => array(array('_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductAttribute/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1357 => array(array('_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductOption/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1366 => array(array('_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductOption/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1403 => array(array('_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductReview/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1412 => array(array('_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => '@SyliusAdmin/ProductReview/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1441 => array(array('_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'accept'), 'redirect' => 'referer', 'flash' => 'sylius.review.accept')), array('id'), array('PUT' => 0), null),
                            1456 => array(array('_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'reject'), 'redirect' => 'referer', 'flash' => 'sylius.review.reject')), array('id'), array('PUT' => 0), null),
                            1496 => array(array('_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1516 => array(array('_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => array('template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => array('route' => array('parameters' => array('promotionId' => '$promotionId')), 'templates' => array('breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'), 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons'))), array('promotionId'), array('GET' => 0), null),
                            1528 => array(array('_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => array('factory' => array('method' => 'createForPromotion', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('promotionId' => '$promotionId')), 'templates' => array('form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig')))), array('promotionId'), array('GET' => 0, 'POST' => 1), null),
                            1550 => array(array('_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('id' => '$id', 'promotionId' => '$promotionId')), 'templates' => array('form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'), 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns'))), array('promotionId', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            1567 => array(array('_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon:generateAction', '_sylius' => array('template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true)), array('promotionId'), array('GET' => 0, 'POST' => 1), null),
                            1588 => array(array('_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), array('promotionId'), array('DELETE' => 0), null),
                            1605 => array(array('_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true)), array('promotionId', 'id'), array('DELETE' => 0), null),
                            1616 => array(array('_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1671 => array(array('_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingCategory/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1680 => array(array('_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingCategory/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1717 => array(array('_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingMethod/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1733 => array(array('_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'), 'redirect' => array('route' => 'sylius_admin_shipping_method_index', 'parameters' => array()))), array('id'), array('PATCH' => 0), null),
                            1743 => array(array('_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => '@SyliusAdmin/ShippingMethod/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1771 => array(array('_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true)), array('id'), array('DELETE' => 0), null),
                            1810 => array(array('_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1819 => array(array('_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1841 => array(array('_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => array('method' => 'createForParent', 'arguments' => array('expr:notFoundOnNull(service("sylius.repository.taxon").find($id))')), 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('GET' => 0, 'POST' => 1), null),
                            1883 => array(array('_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxCategory/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1892 => array(array('_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxCategory/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1924 => array(array('_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxRate/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1933 => array(array('_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => '@SyliusAdmin/TaxRate/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1970 => array(array('_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => array('section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => '@SyliusAdmin/Zone/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1979 => array(array('_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => '@SyliusAdmin/Zone/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            2016 => array(array('_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => '@SyliusAdmin/Zone/_form.html.twig'), 'route' => array('parameters' => array('type' => '$type'))))), array('type'), array('GET' => 0, 'POST' => 1), null),
                            2117 => array(array('_route' => 'sylius_admin_api_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => array('section' => 'admin_api', 'state_machine' => array('graph' => 'sylius_order', 'transition' => 'cancel'), 'csrf_protection' => false, 'return_content' => false)), array('version', 'id'), array('PUT' => 0), null),
                            2149 => array(array('_route' => 'sylius_admin_api_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType')), array('version', 'orderId', 'id'), array('PUT' => 0), null),
                            2184 => array(array('_route' => 'sylius_admin_api_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('event' => 'complete', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'complete'), 'section' => 'admin_api', 'csrf_protection' => false, 'return_content' => false)), array('version', 'orderId', 'id'), array('PUT' => 0), null),
                            2194 => array(array('_route' => 'sylius_admin_api_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            2295 => array(array('_route' => 'sylius_admin_api_cart_item_create', '_controller' => 'sylius.controller.order_item:createAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'factory' => array('method' => 'createForCart', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.order\').findCartById($cartId))')), 'serialization_groups' => array('Default', 'DetailedCart'))), array('version', 'cartId'), array('POST' => 0), null),
                            2392 => array(array('_route' => 'sylius_admin_api_checkout_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'))), array('version', 'id'), array('GET' => 0), null),
                            2420 => array(array('_route' => 'sylius_admin_api_checkout_addressing', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'address'))), array('version', 'orderId'), array('PUT' => 0), null),
                            2517 => array(array('_route' => 'sylius_admin_api_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => array('validation_groups' => 'sylius_checkout_complete')), 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'complete'))), array('version', 'orderId'), array('PUT' => 0), null),
                            2661 => array(array('_route' => 'sylius_admin_api_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default'), 'paginate' => '$limit', 'sortable' => true, 'sorting' => array('id' => 'desc'))), array('version'), array('GET' => 0), null),
                            2678 => array(array('_route' => 'sylius_admin_api_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'))), array('version', 'id'), array('GET' => 0), null),
                            2687 => array(array('_route' => 'sylius_admin_api_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'), 'form' => array('type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType'))), array('version'), array('POST' => 0), null),
                            2724 => array(array('_route' => 'sylius_admin_api_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('serialization_version' => '$version', 'paginate' => '$limit', 'filterable' => true, 'criteria' => array('customer' => '$id'), 'sortable' => true, 'sorting' => array('updatedAt' => 'desc'), 'csrf_protection' => false)), array('version', 'id'), array('GET' => 0), null),
                            2872 => array(array('_route' => 'sylius_admin_api_payment_method_show', '_controller' => 'sylius.controller.payment_method:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            2886 => array(array('_route' => 'sylius_admin_api_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_payment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version'), array('GET' => 0), null),
                            2903 => array(array('_route' => 'sylius_admin_api_payment_show', '_controller' => 'sylius.controller.payment:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            3014 => array(array('_route' => 'sylius_admin_api_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'accept'), 'csrf_protection' => false)), array('version', 'productCode', 'id'), array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            3029 => array(array('_route' => 'sylius_admin_api_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'reject'), 'csrf_protection' => false)), array('version', 'productCode', 'id'), array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            3109 => array(array('_route' => 'sylius_admin_api_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3138 => array(array('_route' => 'sylius_admin_api_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => array('serialization_version' => '$version', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')))), array('version', 'type'), array('POST' => 0), null),
                            3363 => array(array('_route' => 'sylius_admin_api_taxon_products_update_position', '_controller' => 'sylius.controller.update_product_taxon_position:updatePositionsAction', '_sylius' => array('serialization_version' => '$version')), array('version', 'taxonCode'), array('PUT' => 0), null),
                            3462 => array(array('_route' => 'sylius_admin_api_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3479 => array(array('_route' => 'sylius_admin_api_tax_rate_show', '_controller' => 'sylius.controller.tax_rate:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            3507 => array(array('_route' => 'sylius_admin_api_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_shipment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version'), array('GET' => 0), null),
                            3524 => array(array('_route' => 'sylius_admin_api_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            3604 => array(array('_route' => 'sylius_admin_api_shipping_method_show', '_controller' => 'sylius.controller.shipping_method:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            3624 => array(array('_route' => 'sylius_admin_api_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3653 => array(array('_route' => 'sylius_admin_api_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => array('serialization_version' => '$version', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')))), array('version', 'type'), array('POST' => 0), null),
                            3708 => array(array('_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user:showAction', '_format' => 'json', '_sylius' => array('repository' => array('method' => 'findOneByEmail', 'arguments' => array('email' => '$email')), 'serialization_groups' => array('Secured'))), array('_locale'), array('GET' => 0), null),
                            3756 => array(array('_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_format' => 'json', '_sylius' => array('factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => array('product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'redirect' => array('route' => 'sylius_shop_cart_summary', 'parameters' => array()), 'flash' => 'sylius.cart.add_item')), array('_locale'), array('POST' => 0), null),
                            3816 => array(array('_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_format' => 'json', '_sylius' => array('flash' => 'sylius.cart.remove_item')), array('_locale', 'id'), array('DELETE' => 0), null),
                            3878 => array(array('_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => array('template' => '@SyliusShop/Common/Form/_province.html.twig')), array('_locale'), array('GET' => 0), null),
                            3942 => array(array('_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneBySlug', 'arguments' => array('$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'slug'), array('GET' => 0), null),
                            4010 => array(array('_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findChildren', 'arguments' => array('$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'code'), array('GET' => 0), null),
                            4066 => array(array('_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order:widgetAction', '_sylius' => array('template' => '$template')), array('_locale'), array('GET' => 0), null),
                            4124 => array(array('_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_sylius' => array('template' => '$template', 'factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => array('product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'redirect' => array('route' => 'sylius_shop_cart_summary', 'parameters' => array()))), array('_locale'), array('GET' => 0), null),
                            4192 => array(array('_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findLatestByChannel', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count')))), array('_locale', 'count'), array('GET' => 0), null),
                            4253 => array(array('_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneByChannelAndSlug', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug')))), array('_locale', 'slug'), array('GET' => 0), null),
                            4343 => array(array('_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findLatestByProductId', 'arguments' => array('$productId', '!!int $count'))), 'count' => 3), array('_locale', 'productId', 'count'), array('GET' => 0), null),
                            4426 => array(array('_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association:showAction', '_sylius' => array('template' => '$template')), array('_locale', 'productId', 'id'), array('GET' => 0), null),
                            4461 => array(array('_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage:indexAction'), array('_locale'), array('GET' => 0), null),
                            4501 => array(array('_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => array('template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard')), array('_locale'), array('GET' => 0), null),
                            4548 => array(array('_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security:checkAction'), array('_locale'), array('POST' => 0), null),
                            4589 => array(array('_route' => 'sylius_shop_logout'), array('_locale'), array('GET' => 0), null),
                            4632 => array(array('_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => array('route' => 'sylius_shop_account_dashboard'), 'flash' => 'sylius.customer.register')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            4701 => array(array('_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => array('method' => array('expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'), 'arguments' => array('expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)')), 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => array('route' => 'sylius_shop_account_dashboard'), 'flash' => 'sylius.customer.register')), array('_locale', 'tokenValue'), array('GET' => 0), null),
                            4755 => array(array('_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction', '_sylius' => array('template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            4818 => array(array('_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user:resetPasswordAction', '_sylius' => array('template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login')), array('_locale', 'token'), array('GET' => 0, 'POST' => 1), null),
                            4859 => array(array('_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction'), array('_locale'), array('POST' => 0), null),
                            4909 => array(array('_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user:verifyAction', '_sylius' => array('redirect' => 'sylius_shop_account_dashboard')), array('_locale', 'token'), array('GET' => 0), null),
                            4961 => array(array('_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '@SyliusShop/Product/show.html.twig', 'repository' => array('method' => 'findOneByChannelAndSlug', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug')))), array('_locale', 'slug'), array('GET' => 0), null),
                            5007 => array(array('_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product')), array('_locale', 'slug'), array('GET' => 0), null),
                            5068 => array(array('_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => array('method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => array('$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()')))), array('_locale', 'slug'), array('GET' => 0), null),
                            5132 => array(array('_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => array('template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => array('options' => array('validation_groups' => array('sylius', 'sylius_review'))), 'factory' => array('method' => 'createForSubjectWithReviewer', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_product_show', 'parameters' => array('slug' => '$slug')), 'flash' => 'sylius.review.wait_for_the_acceptation')), array('_locale', 'slug'), array('GET' => 0, 'POST' => 1), null),
                            5220 => array(array('_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'), array('_locale'), array('GET' => 0), null),
                            5271 => array(array('_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => array('customer' => 'expr:service(\'sylius.context.customer\').getCustomer()')), 'repository' => array('method' => 'findCartForAddressing', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'address'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5331 => array(array('_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => array('method' => 'findCartForSelectingShipping', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_shipping'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5390 => array(array('_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => array('method' => 'findCartForSelectingPayment', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_payment'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5442 => array(array('_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => array('method' => 'findCartForSummary', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'complete'), 'redirect' => array('route' => 'sylius_shop_order_pay', 'parameters' => array('tokenValue' => 'resource.tokenValue')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => array('validation_groups' => 'sylius_checkout_complete')))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5485 => array(array('_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact:requestAction', '_sylius' => array('redirect' => 'sylius_shop_homepage')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5536 => array(array('_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order:thankYouAction', '_sylius' => array('template' => '@SyliusShop/Order/thankYou.html.twig')), array('_locale'), array('GET' => 0), null),
                            5589 => array(array('_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum:prepareCaptureAction', '_sylius' => array('redirect' => array('route' => 'sylius_shop_order_after_pay'))), array('_locale', 'tokenValue'), array('GET' => 0), null),
                            5640 => array(array('_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum:afterCaptureAction'), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5689 => array(array('_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('template' => '@SyliusShop/Order/show.html.twig', 'repository' => array('method' => 'findOneBy', 'arguments' => array(array('tokenValue' => '$tokenValue'))), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'options' => array('validation_groups' => array())), 'redirect' => array('route' => 'sylius_shop_order_pay', 'parameters' => array('tokenValue' => 'resource.tokenValue')), 'flash' => false)), array('_locale', 'tokenValue'), array('GET' => 0, 'PUT' => 1), null),
                            5739 => array(array('_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order')), array('_locale'), array('GET' => 0), null),
                            5797 => array(array('_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => array('method' => 'findOneByNumberAndCustomer', 'arguments' => array('$number', 'expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale', 'number'), array('GET' => 0), null),
                            5854 => array(array('_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address:indexAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => array('method' => 'findByCustomer', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale'), array('GET' => 0), null),
                            5914 => array(array('_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address:createAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => array('method' => 'createForCustomer', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()), 'flash' => 'sylius.customer.add_address')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5984 => array(array('_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address:updateAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => array('method' => 'findOneByCustomer', 'arguments' => array('$id', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()))), array('_locale', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            6049 => array(array('_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address:deleteAction', '_sylius' => array('section' => 'shop_account', 'repository' => array('method' => 'findOneByCustomer', 'arguments' => array('$id', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => 'sylius_shop_account_address_book_index')), array('_locale', 'id'), array('DELETE' => 0), null),
                            6131 => array(array('_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => array('customer' => 'expr:service(\'sylius.context.customer\').getCustomer()')), 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()), 'flash' => 'sylius.customer.set_address_as_default')), array('_locale', 'id'), array('GET' => 0, 'PATCH' => 1), null),
                            6174 => array(array('_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true), array('_locale'), array('GET' => 0), null),
                            6226 => array(array('_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale'), array('GET' => 0), null),
                            6281 => array(array('_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_profile_update', 'parameters' => array()))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            6340 => array(array('_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user:changePasswordAction', '_sylius' => array('template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            6400 => array(array('_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch:switchAction'), array('_locale', 'code'), array('GET' => 0), null),
                            6458 => array(array('_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'), array('_locale', 'code'), array('GET' => 0), null),
                            6495 => array(array('_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'), array('payum_token'), null, null),
                            6529 => array(array('_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'), array('gateway'), null, null),
                            6546 => array(array('_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'), array('payum_token'), null, null),
                            6588 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            6609 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            6656 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            6671 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            6692 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            6706 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            6717 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            6761 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_update', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:update.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_block_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.blocks_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.blocks_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Block:Crud/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            6770 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_block_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.blocks_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.blocks_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Block:Crud/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            6805 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_update', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:update.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_page_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.pages_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.pages_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Page:Crud/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            6814 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.pages_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.pages_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Page:Crud/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            6846 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_page_preview', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:previewAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Page/preview.html.twig'), 'id' => null), array('id'), array('POST' => 0, 'PUT' => 1), null),
                            6901 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_update', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.faq_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.faq_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:FrequentlyAskedQuestion:Crud/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            6910 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_frequently_asked_question_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.faq_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.faq_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:FrequentlyAskedQuestion:Crud/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            6945 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_section_update', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_section_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.sections_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.sections_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Section:Crud/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            6954 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_section_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.sections_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.sections_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Section:Crud/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            6989 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_update', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'BitBagSyliusCmsPlugin:CrudUi:update.html.twig', 'redirect' => 'bitbag_sylius_cms_plugin_admin_media_update', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.media_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.media_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Media:Crud/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            6998 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_delete', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'bitbag_sylius_cms_plugin.ui.media_header', 'subheader' => 'bitbag_sylius_cms_plugin.ui.media_subheader', 'templates' => array('form' => 'BitBagSyliusCmsPlugin:Media:Crud/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            7029 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_media_preview', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:previewAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Media/preview.html.twig'), 'id' => null), array('id'), array('POST' => 0, 'PUT' => 1), null),
                            7054 => array(array('_route' => 'bitbag_sylius_cms_plugin_admin_import_data', '_controller' => 'bitbag_sylius_cms_plugin.controller.action.admin.import_data'), array('resourceName'), array('GET' => 0, 'POST' => 1), null),
                            7094 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_block_render', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:renderBlockAction', '_sylius' => array('repository' => array('method' => 'findOneByCode', 'arguments' => array('$code')))), array('_locale', 'code'), array('GET' => 0), null),
                            7124 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_block_index_by_section_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findBySectionCode', 'arguments' => array('$sectionCode', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'sectionCode'), array('GET' => 0), null),
                            7149 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_block_index_by_product_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.block:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findByProductCode', 'arguments' => array('$productCode', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'productCode'), array('GET' => 0), null),
                            7179 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_page_show', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:showAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Shop/Page/show.html.twig', 'repository' => array('method' => 'findOneEnabledBySlugAndChannelCode', 'arguments' => array('$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'slug'), array('GET' => 0), null),
                            7201 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_page_show_link_by_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:renderLinkAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneEnabledByCode', 'arguments' => array('$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'code'), array('GET' => 0), null),
                            7221 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_page_index_by_section_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.page:indexAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig', 'grid' => 'bitbag_sylius_cms_plugin_shop_page')), array('_locale', 'sectionCode'), array('GET' => 0), null),
                            7234 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_frequently_asked_question_index', '_controller' => 'bitbag_sylius_cms_plugin.controller.frequently_asked_question:indexAction', '_sylius' => array('template' => '@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/index.html.twig', 'repository' => array('method' => 'findEnabledOrderedByPosition', 'arguments' => array('expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale'), null, null),
                            7259 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_section_show', '_controller' => 'bitbag_sylius_cms_plugin.controller.section:showAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneByCode', 'arguments' => array('$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'code'), array('GET' => 0), null),
                            7285 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_media_render', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:renderMediaAction', '_sylius' => array('repository' => array('method' => 'findOneByCode', 'arguments' => array('$code', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'code'), array('GET' => 0), null),
                            7311 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_media_download', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:downloadMediaAction'), array('_locale', 'code'), array('GET' => 0), null),
                            7336 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_media_index_by_section_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findBySectionCode', 'arguments' => array('$sectionCode', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'sectionCode'), array('GET' => 0), null),
                            7361 => array(array('_route' => 'bitbag_sylius_cms_plugin_shop_media_index_by_product_code', '_controller' => 'bitbag_sylius_cms_plugin.controller.media:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findByProductCode', 'arguments' => array('$productCode', 'expr:service(\'sylius.context.channel\').getChannel().getCode()')))), array('_locale', 'productCode'), array('GET' => 0), null),
                            7396 => array(array('_route' => 'sylius_sitemap_index', '_controller' => 'sylius.controller.sitemap_index:showAction'), array('_format'), array('GET' => 0), null),
                            7415 => array(array('_route' => 'sylius_sitemap_no_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_sitemap_index', 'permanent' => true), array('_format'), null, null),
                            7438 => array(array('_route' => 'sylius_sitemap_all', '_controller' => 'sylius.controller.sitemap:showAction'), array('_format'), array('GET' => 0), null),
                            7466 => array(array('_route' => 'sylius_sitemap_cms_pages', '_controller' => 'sylius.controller.sitemap:showAction', 'name' => 'cms_pages'), array('_format'), array('GET' => 0), null),
                            7490 => array(array('_route' => 'sylius_sitemap_cms_sections', '_controller' => 'sylius.controller.sitemap:showAction', 'name' => 'cms_sections'), array('_format'), array('GET' => 0), null),
                            7515 => array(array('_route' => 'sylius_sitemap_products', '_controller' => 'sylius.controller.sitemap:showAction', 'name' => 'products'), array('_format'), array('GET' => 0), null),
                            7537 => array(array('_route' => 'sylius_sitemap_taxons', '_controller' => 'sylius.controller.sitemap:showAction', 'name' => 'taxons'), array('_format'), array('GET' => 0), null),
                            7559 => array(array('_route' => 'sylius_sitemap_static', '_controller' => 'sylius.controller.sitemap:showAction', 'name' => 'static'), array('_format'), array('GET' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (7559 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
