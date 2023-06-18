/* empty css            */import { c as createAstro, a as createComponent, r as renderTemplate, d as renderComponent, m as maybeRenderHead } from './chunk.min.js';
import 'html-escaper';
import { $ as $$Breadcrumbs, a as $$PageLayout } from './chunk.min3.js';

const $$Astro = createAstro();
const $$Profile = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Profile;
  return renderTemplate`${renderComponent($$result, "Layout", $$PageLayout, { "title": "Home Page" }, { "default": ($$result2) => renderTemplate`
    ${renderComponent($$result2, "Breadcrumbs", $$Breadcrumbs, {})}
    ${maybeRenderHead($$result2)}<div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-6 flex flex-col gap-4">
            <form action="" class="flex flex-col gap-4 border p-5">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Login</div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">E-mail</label>
                    <input type="email" id="email" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="E-mail" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-semibold text-gray-900">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="Password" placeholder="Password" required>
                </div>
                <div class="mt-3">
                    <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-span-12 lg:col-span-6 flex flex-col gap-4">
            <form action="" class="flex flex-col gap-4 border p-5">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Register</div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-semibold text-gray-900">Name</label>
                    <input type="text" id="name" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="Name" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">E-mail</label>
                    <input type="email" id="email" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="E-mail" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-semibold text-gray-900">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="Password" placeholder="Password" required>
                </div>
                <div>
                    <label for="password_confirm" class="block mb-2 text-sm font-semibold text-gray-900">Password Confirm</label>
                    <input type="password" id="password_confirm" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password_confirm" placeholder="Password Confirm" required>
                </div>
                <div class="mt-3">
                    <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
` })}`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/pages/profile.astro");

const $$file = "C:/OpenServer/domains/blog.loc/public/template/src/pages/profile.astro";
const $$url = "/profile";

export { $$Profile as default, $$file as file, $$url as url };
