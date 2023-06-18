/* empty css            */import { c as createAstro, a as createComponent, r as renderTemplate, m as maybeRenderHead, b as renderHead, d as renderComponent, e as renderSlot } from './chunk.min.js';
import 'html-escaper';

const $$Astro$4 = createAstro();
const $$Header = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$4, $$props, $$slots);
  Astro2.self = $$Header;
  return renderTemplate`${maybeRenderHead($$result)}<nav class="bg-white border-gray-200 border-b z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 lg:py-5 px-5">
        <a href="index.html" class="flex items-center font-sans">
            <span class="self-center text-2xl lg:text-4xl font-semibold whitespace-nowrap">Alexa Blog</span>
        </a>
        <div class="flex items-center md:order-2">
            <!-- Language -->
            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 uppercase cursor-pointer" href="#">
                <span>EN</span>
            </a>
            <!-- Profile -->
            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 cursor-pointer" href="profile.html">
                <span>Profile</span>
            </a>
        </div>
    </div>
</nav>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/components/Header.astro");

const $$Astro$3 = createAstro();
const $$Footer = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$3, $$props, $$slots);
  Astro2.self = $$Footer;
  return renderTemplate`${maybeRenderHead($$result)}<footer class="bg-neutral-900 text-white">
    <div class="py-10">
        <div class="container p-5 mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="flex flex-col justify-center text-center gap-4">
                <div class="font-sans text-2xl">Social</div>
                <ul class="flex flex-col gap-2 text-neutral-400 uppercase text-sm">
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Instagran</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-center gap-4 text-center font-sans">
                <span class="self-center text-5xl font-semibold whitespace-nowrap">Alexa Blog</span>
                <p class="text-neutral-400 text-2xl">The perfect place for telling & sharing all the stories that truly matter.</p>
            </div>
            <div class="flex flex-col justify-center text-center gap-4">
                <div class="font-sans text-2xl">Categories</div>
                <ul class="flex flex-col gap-2 text-neutral-400 uppercase text-sm">
                    <li>
                        <a href="#">Beauty</a>
                    </li>
                    <li>
                        <a href="#">Fashion</a>
                    </li>
                    <li>
                        <a href="#">Food</a>
                    </li>
                    <li>
                        <a href="#">Lifestyle</a>
                    </li>
                    <li>
                        <a href="#">Travel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="py-4 border-t border-neutral-700 text-center font-sans">
        <span>&copy; 2023 Alexa Blog, All Rights Reserved</span>
    </div>
</footer>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/components/Footer.astro");

const $$Astro$2 = createAstro();
const $$PageLayout = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$2, $$props, $$slots);
  Astro2.self = $$PageLayout;
  const { title = "Template Page" } = Astro2.props;
  return renderTemplate`<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>${title}</title>
        <meta name="description" content="A template page for Astro.">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
		<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	${renderHead($$result)}</head>
	<body class="antialiased bg-white font-serif text-base">
		${renderComponent($$result, "Header", $$Header, {})}
		${renderSlot($$result, $$slots["default"])}
		${renderComponent($$result, "Footer", $$Footer, {})}
	

</body></html>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/layouts/PageLayout.astro");

const $$Astro$1 = createAstro();
const $$Breadcrumbs = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$1, $$props, $$slots);
  Astro2.self = $$Breadcrumbs;
  return renderTemplate`${maybeRenderHead($$result)}<div class="bg-neutral-900">
    <div class="container mx-auto p-5">
        <ul class="flex gap-8 uppercase text-white">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <span class="text-neutral-400">Lifestyle</span>
            </li>
        </ul>
    </div>
</div>`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/components/Breadcrumbs.astro");

const $$Astro = createAstro();
const $$Auth = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$Auth;
  return renderTemplate`${renderComponent($$result, "Layout", $$PageLayout, { "title": "Home Page" }, { "default": ($$result2) => renderTemplate`
    ${renderComponent($$result2, "Breadcrumbs", $$Breadcrumbs, {})}
    ${maybeRenderHead($$result2)}<div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-6 flex flex-col gap-4">
            <form action="" class="flex flex-col gap-4 border p-5">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Login</div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">E-mail <span class="font-bold text-red-500">*</span></label>
                    <input type="email" id="email" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="E-mail" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">E-mail</label>
                    <input type="email" id="email" class="bg-gray-50 border border-neutral-900 border-red-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="E-mail" required>
                    <p class="text-red-500 text-xs italic mt-4">
                        Erorr message
                    </p>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-semibold text-gray-900">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="Password" placeholder="Password" required>
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-semibold text-gray-900">Content</label>
                    <textarea id="content" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="content" placeholder="Content" required></textarea>
                </div>
                <div class="mt-3">
                    <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-span-12 lg:col-span-6 flex flex-col gap-4">
            <div class="tab-wrapper" x-data="{ activeTab:  0 }">
                <div class="flex gap-4">
                  <label @click="activeTab = 0" class="font-bold text-neutral-500" :class="{ '!text-black': activeTab === 0 }">Tab 1</label>
                  <label @click="activeTab = 1" class="font-bold text-neutral-500" :class="{ '!text-black': activeTab === 1 }">Tab 2</label>
                  <label @click="activeTab = 2" class="font-bold text-neutral-500" :class="{ '!text-black': activeTab === 2 }">Tab 3</label>
                </div>
              
                <div class="flex flex-col" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
                  <p>This is the example content of the first tab.</p>
                </div>
                <div class="flex flex-col" :class="{ 'active': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">
                  <p>The second tab’s example content.</p>
                </div>
                <div class="flex flex-col" :class="{ 'active': activeTab === 2 }" x-show.transition.in.opacity.duration.600="activeTab === 2">
                  <p>The content of the third and final tab in this set.</p>
                </div>
              </div>
        </div>
    </div>
` })}`;
}, "C:/OpenServer/domains/blog.loc/public/template/src/pages/auth.astro");

const $$file = "C:/OpenServer/domains/blog.loc/public/template/src/pages/auth.astro";
const $$url = "/auth";

const auth = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
    __proto__: null,
    default: $$Auth,
    file: $$file,
    url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

export { $$Breadcrumbs as $, $$PageLayout as a, auth as b };
