export class PageRouter {   
    constructor(pageRoutes) {
        this.pageRoutes = pageRoutes;

        this.pageRoutes[0].isActive = true;
    }

    showPage(page) {
      this.pageRoutes.forEach(route => {
        route.isActive = route.key === page.key;
      });
    }

    renderActive() {
        return this.pageRoutes.find(route => route.isActive).component;
    }
}

export class PageRoute {
    constructor(key, label, component) {
        this.key = key;
        this.label = label;
        this.component = component;
        this.isActive = false;
    }
}