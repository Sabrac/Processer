/// <reference path="../../../global/plugins/tsdefinition/jquery/index.d.ts" />
/// <reference path="../../../global/plugins/tsdefinition/jquery.blockui/index.d.ts" />
/// <reference path="../../../global/plugins/tsdefinition/knockout/index.d.ts" />
/// <reference path="../../../global/scripts/utils/index.ts" />
/// <reference path="../../../global/scripts/models/index.ts" />
'use strict';

module com.sabrac.zerodios2015 {
    export class NewsCategoryScreenModel {
        lsCategory: KnockoutObservableArray<NewsCategory>;

        constructor() {
            var self = this;
            self.lsCategory = ko.observableArray<NewsCategory>([]);
        }

        startPage(): JQueryPromise<any> {
            var self = this;
            var dfd = $.Deferred();
            dfd.resolve(self.lsCategory());
            return dfd.promise();
        }
    }

    $(document).ready(function() {
        var screenModel = new NewsCategoryScreenModel();
        $.blockUI();
        screenModel.startPage().done(function() {
            ko.applyBindings(screenModel);
            $.unblockUI();
        });
    });
}