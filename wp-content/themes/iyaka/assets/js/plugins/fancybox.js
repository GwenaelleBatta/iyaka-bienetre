import { Fancybox } from "@fancyapps/ui/dist/fancybox/fancybox.esm.js";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind("[data-fancybox]", {});

// Remove slick duplicated slides
Fancybox.bind(".slick-slide:not(.slick-cloned) a[data-fancybox]", {});

export default Fancybox;
