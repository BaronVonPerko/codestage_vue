export class PageRouter {   
    constructor(pageRoutes) {
        this.pageRoutes = pageRoutes;

        this.pageRoutes[0].isActive = true;
        this.activeRoute = this.pageRoutes[0];
    }

    showPage(page) {
      this.pageRoutes.forEach(route => {
        route.isActive = route.key === page.key;
      });
    }

    isCurrent(key) {
        return this.pageRoutes.find(route => route.key === key).isActive;
    }
}

export class PageRoute {
    constructor(key, label) {
        this.key = key;
        this.label = label;
        this.isActive = false;
    }
}