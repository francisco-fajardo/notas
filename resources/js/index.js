import "../css/style.css";

document.addEventListener("DOMContentLoaded", () => {
    // Autoinit of JavaScript in MaterializeCSS
    M.AutoInit();

    // Init lazyload of images
    const lazyLoadInstance = new LazyLoad();
    lazyLoadInstance.update();
});
