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
 * @class View.Views.Base.ConsoleConfiguration.ConfigPaneView
 * @alias SUGAR.App.view.views.BaseConsoleConfigurationConfigPanelView
 * @extends View.Fields.Base.BaseField
 */
({
    extendsFrom: 'BaseConfigPanelView',

    selectedModules: [],

    activeTabIndex: 0,

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this.collection.on('add remove reset', this.render, this);
    },

    /**
     * @inheritdoc
     */
    render: function() {
        var self = this;
        this._super('render');
        this.$('#tabs').tabs({
            active: this.context.get('activeTabIndex'),

            // when selecting another tab, show/hide the corresponding side [ane div accordingly
            activate: function(event, ui) {
                var index = self.$('#tabs').tabs('option', 'active');
                var sidePanes = $('.config-side-pane-all .config-side-pane');
                _.each(sidePanes, function(sidePane) {
                    $(sidePane).css('display', 'none');
                });
                $(sidePanes[index]).css('display', 'flex');
            }
        });
    }
})
