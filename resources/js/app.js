import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import "@protonemedia/laravel-splade/dist/jodit.css";
import "../../public/assets/js/toggle-dark-mode";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": true,
        "progress_bar": true,
        "progress_bar_color": "#006bff",
    })
    .mount(el);
