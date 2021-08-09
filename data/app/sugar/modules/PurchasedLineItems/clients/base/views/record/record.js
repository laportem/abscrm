/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Base.PurchasedLineItems.RecordView
 * @alias SUGAR.App.view.views.PurchasedLineItemsRecordView
 * @extends View.Views.Base.RecordView
 */
({
    extendsFrom: 'RecordView',

    /**
     * @inheritdoc
     * @param options
     */
    initialize: function(options) {
        // Adds this plugin to handle changes to Service and Purchase Name fields
        this.plugins = _.union(this.plugins || [], ['PurchaseAndServiceChangeHandler']);
        this._super('initialize', [options]);

        // Binds handlers for service and purchase_name changes
        this.bindDataChange();
    },
})
