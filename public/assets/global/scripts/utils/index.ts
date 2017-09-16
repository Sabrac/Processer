/// <reference path="../plugins/tsdefinition/jquery/index.d.ts" />
/// <reference path="../plugins/tsdefinition/jquery.blockui/index.d.ts/" />

module com.sabrac.processer {

    export class Utils {
        self: any;

        constructor() {
            this.self = this;
        }

        public static postData(url: string, data: any): JQueryPromise<any> {
            var dfd = $.Deferred();
            $.ajax({
                url: url,
                data: JSON.stringify(data),
                type: 'post',
                contentType: "application/json; charset=utf-8",
                dataType: 'json',
                cache: false,
                success: function(result) {
                    dfd.resolve(JSON.parse(result));
                },
                error: function(result) {
                    dfd.reject(result);
                }
            });
            return dfd.promise();
        }
    }
}