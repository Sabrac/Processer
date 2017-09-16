/// <reference path="../plugins/tsdefinition/jquery/index.d.ts" />
/// <reference path="../plugins/tsdefinition/jquery.blockui/index.d.ts/" />
var com;
(function (com) {
    var sabrac;
    (function (sabrac) {
        var processer;
        (function (processer) {
            var Utils = (function () {
                function Utils() {
                    this.self = this;
                }
                Utils.postData = function (url, data) {
                    var dfd = $.Deferred();
                    $.ajax({
                        url: url,
                        data: JSON.stringify(data),
                        type: 'post',
                        contentType: "application/json; charset=utf-8",
                        dataType: 'json',
                        cache: false,
                        success: function (result) {
                            dfd.resolve(JSON.parse(result));
                        },
                        error: function (result) {
                            dfd.reject(result);
                        }
                    });
                    return dfd.promise();
                };
                return Utils;
            }());
            processer.Utils = Utils;
        })(processer = sabrac.processer || (sabrac.processer = {}));
    })(sabrac = com.sabrac || (com.sabrac = {}));
})(com || (com = {}));
