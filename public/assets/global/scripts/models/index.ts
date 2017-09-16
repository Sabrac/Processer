module com.sabrac.zerodios2015 {
    export class NewsCategory {
        cateId: KnockoutObservable<number>;
        cateName: KnockoutObservable<string>;

        constructor(cateId: number, cateName: string) {
            var self = this;
            self.cateId = ko.observable<number>(cateId);
            self.cateName = ko.observable<string>(cateName);
        }
    }
}