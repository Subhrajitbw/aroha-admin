<?php

return [
    /**
     * Dashboard.
     */
    [
        'key'        => 'dashboard',
        'name'       => 'admin::app.components.layouts.sidebar.dashboard',
        'route'      => 'admin.dashboard.index',
        'sort'       => 1,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>
',
    ],

    /**
     * Sales.
     */
    [
        'key'        => 'sales',
        'name'       => 'admin::app.components.layouts.sidebar.sales',
        'route'      => 'admin.sales.orders.index',
        'sort'       => 2,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
</svg>
',
    ], [
        'key'        => 'sales.orders',
        'name'       => 'admin::app.components.layouts.sidebar.orders',
        'route'      => 'admin.sales.orders.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'sales.shipments',
        'name'       => 'admin::app.components.layouts.sidebar.shipments',
        'route'      => 'admin.sales.shipments.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'sales.invoices',
        'name'       => 'admin::app.components.layouts.sidebar.invoices',
        'route'      => 'admin.sales.invoices.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'sales.refunds',
        'name'       => 'admin::app.components.layouts.sidebar.refunds',
        'route'      => 'admin.sales.refunds.index',
        'sort'       => 4,
        'icon'       => '',
    ], [
        'key'        => 'sales.transactions',
        'name'       => 'admin::app.components.layouts.sidebar.transactions',
        'route'      => 'admin.sales.transactions.index',
        'sort'       => 5,
        'icon'       => '',
    ],

    /**
     * Catalog.
     */
    [
        'key'        => 'catalog',
        'name'       => 'admin::app.components.layouts.sidebar.catalog',
        'route'      => 'admin.catalog.products.index',
        'sort'       => 3,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
</svg>
',
    ], [
        'key'        => 'catalog.products',
        'name'       => 'admin::app.components.layouts.sidebar.products',
        'route'      => 'admin.catalog.products.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'catalog.categories',
        'name'       => 'admin::app.components.layouts.sidebar.categories',
        'route'      => 'admin.catalog.categories.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'catalog.attributes',
        'name'       => 'admin::app.components.layouts.sidebar.attributes',
        'route'      => 'admin.catalog.attributes.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'catalog.families',
        'name'       => 'admin::app.components.layouts.sidebar.attribute-families',
        'route'      => 'admin.catalog.families.index',
        'sort'       => 4,
        'icon'       => '',
    ],

    /**
     * Customers.
     */
    [
        'key'        => 'customers',
        'name'       => 'admin::app.components.layouts.sidebar.customers',
        'route'      => 'admin.customers.customers.index',
        'sort'       => 4,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
</svg>
',
    ], [
        'key'        => 'customers.customers',
        'name'       => 'admin::app.components.layouts.sidebar.customers',
        'route'      => 'admin.customers.customers.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'customers.groups',
        'name'       => 'admin::app.components.layouts.sidebar.groups',
        'route'      => 'admin.customers.groups.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'customers.reviews',
        'name'       => 'admin::app.components.layouts.sidebar.reviews',
        'route'      => 'admin.customers.customers.review.index',
        'sort'       => 3,
        'icon'       => '',
    ],

    /**
     * CMS.
     */
    [
        'key'        => 'cms',
        'name'       => 'admin::app.components.layouts.sidebar.cms',
        'route'      => 'admin.cms.index',
        'sort'       => 5,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
</svg>
',
    ],

    /**
     * Marketing.
     */
    [
        'key'        => 'marketing',
        'name'       => 'admin::app.components.layouts.sidebar.marketing',
        'route'      => 'admin.marketing.promotions.catalog_rules.index',
        'sort'       => 6,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
</svg>
',
    ], [
        'key'        => 'marketing.promotions',
        'name'       => 'admin::app.components.layouts.sidebar.promotions',
        'route'      => 'admin.marketing.promotions.catalog_rules.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'marketing.promotions.catalog_rules',
        'name'       => 'admin::app.marketing.promotions.index.catalog-rule-title',
        'route'      => 'admin.marketing.promotions.catalog_rules.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'marketing.promotions.cart_rules',
        'name'       => 'admin::app.marketing.promotions.index.cart-rule-title',
        'route'      => 'admin.marketing.promotions.cart_rules.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'marketing.communications',
        'name'       => 'admin::app.components.layouts.sidebar.communications',
        'route'      => 'admin.marketing.communications.email_templates.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'marketing.communications.email_templates',
        'name'       => 'admin::app.components.layouts.sidebar.email-templates',
        'route'      => 'admin.marketing.communications.email_templates.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'marketing.communications.events',
        'name'       => 'admin::app.components.layouts.sidebar.events',
        'route'      => 'admin.marketing.communications.events.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'marketing.communications.campaigns',
        'name'       => 'admin::app.components.layouts.sidebar.campaigns',
        'route'      => 'admin.marketing.communications.campaigns.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'marketing.communications.subscribers',
        'name'       => 'admin::app.components.layouts.sidebar.newsletter-subscriptions',
        'route'      => 'admin.marketing.communications.subscribers.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'marketing.search_seo',
        'name'       => 'admin::app.components.layouts.sidebar.search-seo',
        'route'      => 'admin.marketing.search_seo.url_rewrites.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'marketing.search_seo.url_rewrites',
        'name'       => 'admin::app.components.layouts.sidebar.url-rewrites',
        'route'      => 'admin.marketing.search_seo.url_rewrites.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'marketing.search_seo.search_terms',
        'name'       => 'admin::app.components.layouts.sidebar.search-terms',
        'route'      => 'admin.marketing.search_seo.search_terms.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'marketing.search_seo.search_synonyms',
        'name'       => 'admin::app.components.layouts.sidebar.search-synonyms',
        'route'      => 'admin.marketing.search_seo.search_synonyms.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'marketing.search_seo.sitemaps',
        'name'       => 'admin::app.components.layouts.sidebar.sitemaps',
        'route'      => 'admin.marketing.search_seo.sitemaps.index',
        'sort'       => 4,
        'icon'       => '',
    ],

    /**
     * Reporting.
     */
    [
        'key'        => 'reporting',
        'name'       => 'admin::app.components.layouts.sidebar.reporting',
        'route'      => 'admin.reporting.sales.index',
        'sort'       => 7,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
  <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
</svg>
',
    ], [
        'key'        => 'reporting.sales',
        'name'       => 'admin::app.components.layouts.sidebar.sales',
        'route'      => 'admin.reporting.sales.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'reporting.customers',
        'name'       => 'admin::app.components.layouts.sidebar.customers',
        'route'      => 'admin.reporting.customers.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'reporting.products',
        'name'       => 'admin::app.components.layouts.sidebar.products',
        'route'      => 'admin.reporting.products.index',
        'sort'       => 3,
        'icon'       => '',
    ],

    /**
     * Settings.
     */
    [
        'key'        => 'settings',
        'name'       => 'admin::app.components.layouts.sidebar.settings',
        'route'      => 'admin.settings.locales.index',
        'sort'       => 8,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
</svg>
',
        'icon-class' => 'settings-icon',
    ], [
        'key'        => 'settings.locales',
        'name'       => 'admin::app.components.layouts.sidebar.locales',
        'route'      => 'admin.settings.locales.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'settings.currencies',
        'name'       => 'admin::app.components.layouts.sidebar.currencies',
        'route'      => 'admin.settings.currencies.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'settings.exchange_rates',
        'name'       => 'admin::app.components.layouts.sidebar.exchange-rates',
        'route'      => 'admin.settings.exchange_rates.index',
        'sort'       => 3,
        'icon'       => '',
    ], [
        'key'        => 'settings.inventory_sources',
        'name'       => 'admin::app.components.layouts.sidebar.inventory-sources',
        'route'      => 'admin.settings.inventory_sources.index',
        'sort'       => 4,
        'icon'       => '',
    ], [
        'key'        => 'settings.channels',
        'name'       => 'admin::app.components.layouts.sidebar.channels',
        'route'      => 'admin.settings.channels.index',
        'sort'       => 5,
        'icon'       => '',
    ], [
        'key'        => 'settings.users',
        'name'       => 'admin::app.components.layouts.sidebar.users',
        'route'      => 'admin.settings.users.index',
        'sort'       => 6,
        'icon'       => '',
    ], [
        'key'        => 'settings.roles',
        'name'       => 'admin::app.components.layouts.sidebar.roles',
        'route'      => 'admin.settings.roles.index',
        'sort'       => 7,
        'icon'       => '',
    ], [
        'key'        => 'settings.themes',
        'name'       => 'admin::app.components.layouts.sidebar.themes',
        'route'      => 'admin.settings.themes.index',
        'sort'       => 8,
        'icon'       => '',
    ], [
        'key'        => 'settings.taxes',
        'name'       => 'admin::app.components.layouts.sidebar.taxes',
        'route'      => 'admin.settings.taxes.categories.index',
        'sort'       => 9,
        'icon'       => '',
    ], [
        'key'        => 'settings.taxes.tax_categories',
        'name'       => 'admin::app.components.layouts.sidebar.tax-categories',
        'route'      => 'admin.settings.taxes.categories.index',
        'sort'       => 1,
        'icon'       => '',
    ], [
        'key'        => 'settings.taxes.tax_rates',
        'name'       => 'admin::app.components.layouts.sidebar.tax-rates',
        'route'      => 'admin.settings.taxes.rates.index',
        'sort'       => 2,
        'icon'       => '',
    ], [
        'key'        => 'settings.data_transfer',
        'name'       => 'admin::app.components.layouts.sidebar.data-transfer',
        'route'      => 'admin.settings.data_transfer.imports.index',
        'sort'       => 10,
        'icon'       => '',
    ], [
        'key'        => 'settings.data_transfer.imports',
        'name'       => 'admin::app.components.layouts.sidebar.imports',
        'route'      => 'admin.settings.data_transfer.imports.index',
        'sort'       => 1,
        'icon'       => '',
    ],

    /**
     * Configuration.
     */
    [
        'key'        => 'configuration',
        'name'       => 'admin::app.components.layouts.sidebar.configure',
        'route'      => 'admin.configuration.index',
        'sort'       => 9,
        'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
</svg>
',
    ],
];
