/// <reference path="../../../global/plugins/tsdefinition/jquery/index.d.ts" />
/// <reference path="../../../global/plugins/tsdefinition/jquery.blockui/index.d.ts" />
/// <reference path="../../../global/plugins/tsdefinition/knockout/index.d.ts" />
/// <reference path="../../../global/scripts/utils/index.ts" />
/// <reference path="../../../global/scripts/models/index.ts" />
'use strict';
var com;
(function (com) {
    var sabrac;
    (function (sabrac) {
        var zerodios2015;
        (function (zerodios2015) {
            var NewsCategoryScreenModel = (function () {
                function NewsCategoryScreenModel() {
                    var self = this;
                    self.lsCategory = ko.observableArray([]);
                }
                NewsCategoryScreenModel.prototype.startPage = function () {
                    var self = this;
                    var dfd = $.Deferred();
                    dfd.resolve(self.lsCategory());
                    return dfd.promise();
                };
                return NewsCategoryScreenModel;
            }());
            zerodios2015.NewsCategoryScreenModel = NewsCategoryScreenModel;
            $(document).ready(function () {
                var screenModel = new NewsCategoryScreenModel();
                $.blockUI();
                screenModel.startPage().done(function () {
                    ko.applyBindings(screenModel);
                    $.unblockUI();
                });
            });
        })(zerodios2015 = sabrac.zerodios2015 || (sabrac.zerodios2015 = {}));
    })(sabrac = com.sabrac || (com.sabrac = {}));
})(com || (com = {}));
