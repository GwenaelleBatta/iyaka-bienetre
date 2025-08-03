import jQueryBridget from "jquery-bridget";
import Masonry from "masonry-layout";
import imagesLoaded from "imagesloaded";

// make Masonry a jQuery plugin
jQueryBridget("masonry", Masonry, $);
jQueryBridget("imagesLoaded", imagesLoaded, $);
const $container = $(".masonry-grid");

$container.imagesLoaded(() => {
    console.log('Images loadées')
    $container.masonry({
        itemSelector: ".grid-item",
        columnWidth: ".grid-sizer",
        percentPosition: true,
    });
});
