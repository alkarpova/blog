/* empty css            */import { c as createAstro, a as createComponent, r as renderTemplate, d as renderComponent, m as maybeRenderHead } from './chunk.min.js';
import 'html-escaper';
import { a as $$PageLayout } from './chunk.min3.js';
import { $ as $$Post, a as $$PostThumb } from './chunk.min4.js';

const $$Astro = createAstro();
const $$Index = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Index;
  return renderTemplate`${renderComponent($$result, "Layout", $$PageLayout, { "title": "Home Page" }, { "default": ($$result2) => renderTemplate`
    ${maybeRenderHead($$result2)}<div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            ${renderComponent($$result2, "Post", $$Post, {})}
            ${renderComponent($$result2, "Post", $$Post, {})}
            ${renderComponent($$result2, "Post", $$Post, {})}
            ${renderComponent($$result2, "Post", $$Post, {})}
            ${renderComponent($$result2, "Post", $$Post, {})}
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            <div class="p-5 bg-white text-center">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Categories</div>
                <ul class="flex flex-col gap-3 uppercase text-theme">
                    <li>
                        <a class="font-semibold" href="#">Beauty</a>
                    </li>
                    <li>
                        <a class="font-semibold" href="#">Fashion</a>
                    </li>
                    <li>
                        <a class="font-semibold" href="#">Food</a>
                    </li>
                    <li>
                        <a class="font-semibold" href="#">Lifestyle</a>
                    </li>
                    <li>
                        <a class="font-semibold" href="#">Travel</a>
                    </li>
                </ul>
            </div>
            <div class="p-5 text-center">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Popular posts</div>
                ${renderComponent($$result2, "PostThumb", $$PostThumb, {})}
                ${renderComponent($$result2, "PostThumb", $$PostThumb, {})}
                ${renderComponent($$result2, "PostThumb", $$PostThumb, {})}
            </div>
        </div>
    </div>
` })}`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/pages/index.astro");

const $$file = "C:/OpenServer/domains/blog.loc/public/template/src/pages/index.astro";
const $$url = "";

export { $$Index as default, $$file as file, $$url as url };
