/* empty css            */import { c as createAstro, a as createComponent, r as renderTemplate, m as maybeRenderHead, d as renderComponent } from './chunk.min.js';
import 'html-escaper';
import { $ as $$Breadcrumbs, a as $$PageLayout } from './chunk.min3.js';

const $$Astro$2 = createAstro();
const $$Post = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$2, $$props, $$slots);
  Astro2.self = $$Post;
  return renderTemplate`${maybeRenderHead($$result)}<div class="flex flex-col gap-6 p-5">
    <div class="flex flex-col gap-4 items-center text-center font-semibold">
        <a class="flex items-center justify-center gap-4 uppercase text-theme" href="category.html">
            <span class="w-[20px] h-[1px] bg-theme"></span>
            <span>Beauty</span>
            <span class="w-[20px] h-[1px] bg-theme"></span>
        </a>
        <a class="font-sans text-2xl lg:text-3xl xl:text-5xl" href="post.html">Ready for a getaway weekend</a>
        <div class="uppercase text-sm">March 1, 2023 | Alexa K.</div>
    </div>
    <a href="post.html">
        <img class="w-full" src="https://placehold.co/800x600" loading="lazy" alt="title">
    </a>
    <div class="flex flex-col gap-3 font-sans text-xl">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In dicta alias at voluptatem ab officia sed perspiciatis dolore nostrum corrupti, voluptatibus dolorem nobis eligendi perferendis ullam asperiores voluptas beatae non.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis praesentium dolores, a enim perspiciatis autem maiores velit, placeat soluta, consequatur omnis tenetur blanditiis quod ea modi. Quisquam possimus ex rem!</p>
    </div>
    <div class="flex justify-between gap-4">
        <a class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" href="post.html">Read more</a>
    </div>
</div>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/components/Post.astro");

const $$Astro$1 = createAstro();
const $$PostThumb = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$1, $$props, $$slots);
  Astro2.self = $$PostThumb;
  return renderTemplate`${maybeRenderHead($$result)}<a class="flex flex-col gap-4 p-5" href="#">
    <img class="w-full" src="https://placehold.co/400x400" loading="lazy" alt="title">
    <div class="flex flex-col text-center">
        <div class="uppercase text-theme text-sm">January 14, 2023</div>
        <div class="font-sans font-semibold text-2xl">Ready for a getaway weekend</div>
    </div>
</a>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/components/PostThumb.astro");

const $$Astro = createAstro();
const $$Category = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Category;
  return renderTemplate`${renderComponent($$result, "Layout", $$PageLayout, { "title": "Home Page" }, { "default": ($$result2) => renderTemplate`
    ${renderComponent($$result2, "Breadcrumbs", $$Breadcrumbs, {})}
    ${maybeRenderHead($$result2)}<div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            <div class="flex items-center justify-center gap-4 text-center uppercase font-sans font-semibold text-4xl xl:text-6xl text-theme">
                <span class="w-[40px] h-[1px] bg-theme"></span>
                <h1>LIFESTYLE</h1>
                <span class="w-[40px] h-[1px] bg-theme"></span>
            </div>
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
}, "C:/OpenServer/domains/blog.loc/public/template/src/pages/category.astro");

const $$file = "C:/OpenServer/domains/blog.loc/public/template/src/pages/category.astro";
const $$url = "/category";

const category = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
    __proto__: null,
    default: $$Category,
    file: $$file,
    url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

export { $$Post as $, $$PostThumb as a, category as c };
