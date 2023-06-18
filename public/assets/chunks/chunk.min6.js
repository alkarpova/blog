/* empty css            */import { c as createAstro, a as createComponent, r as renderTemplate, d as renderComponent, m as maybeRenderHead } from './chunk.min.js';
import 'html-escaper';
import { $ as $$Breadcrumbs, a as $$PageLayout } from './chunk.min3.js';
import { a as $$PostThumb } from './chunk.min4.js';

const $$Astro = createAstro();
const $$Post = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Post;
  return renderTemplate`${renderComponent($$result, "Layout", $$PageLayout, { "title": "Home Page" }, { "default": ($$result2) => renderTemplate`
    ${renderComponent($$result2, "Breadcrumbs", $$Breadcrumbs, {})}
    ${maybeRenderHead($$result2)}<div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-4 items-center text-center font-semibold">
                    <a class="flex items-center justify-center gap-4 uppercase text-theme" href="category.html">
                        <span class="w-[20px] h-[1px] bg-theme"></span>
                        <span>Beauty</span>
                        <span class="w-[20px] h-[1px] bg-theme"></span>
                    </a>
                    <h1 class="font-sans text-2xl lg:text-3xl xl:text-5xl">Ready for a getaway weekend</h1>
                    <div class="uppercase text-sm">March 1, 2023 | Alexa K.</div>
                </div>
                <img class="w-full" src="https://placehold.co/800x600" loading="lazy" alt="title">
                <div class="flex flex-col gap-3 font-sans text-xl">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In dicta alias at voluptatem ab officia sed perspiciatis dolore nostrum corrupti, voluptatibus dolorem nobis eligendi perferendis ullam asperiores voluptas beatae non.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis praesentium dolores, a enim perspiciatis autem maiores velit, placeat soluta, consequatur omnis tenetur blanditiis quod ea modi. Quisquam possimus ex rem!</p>
                </div>
            </div>
            <div>
                <h2 class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Comments</h2>
                <div class="flex flex-col gap-4">
                    <div class="border p-5">
                        <div class="font-semibold">Author</div>
                        <div class="uppercase text-sm text-theme font-semibold">MARCH 1, 2023</div>
                        <div class="border-b my-3"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptatem molestias eos est quae, nostrum laboriosam fuga harum ex numquam facere corporis veritatis accusamus blanditiis odio, dicta deleniti libero inventore.</p>
                    </div>
                    <div class="border p-5">
                        <div class="font-semibold">Author</div>
                        <div class="uppercase text-sm text-theme font-semibold">MARCH 1, 2023</div>
                        <div class="border-b my-3"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptatem molestias eos est quae, nostrum laboriosam fuga harum ex numquam facere corporis veritatis accusamus blanditiis odio, dicta deleniti libero inventore.</p>
                    </div>
                    <form action="" class="flex flex-col gap-4 border p-5">
                        <h3 class="mb-5 font-sans font-semibold text-2xl">Add comments</h3>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900">Name</label>
                            <input type="text" id="name" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="Name" required>
                        </div>
                        <div>
                            <label for="mesage" class="block mb-2 text-sm font-semibold text-gray-900">Message</label>
                            <textarea id="mesage" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="message" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <div class="flex justify-between">
                            <input type="hidden" name="user_id" value="">
                            <input type="hidden" name="post_id" value="">
                            <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">Send</button>
                        </div>
                    </form>
                </div>
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
    </div>
` })}`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/pages/post.astro");

const $$file = "C:/OpenServer/domains/blog.loc/public/template/src/pages/post.astro";
const $$url = "/post";

export { $$Post as default, $$file as file, $$url as url };
