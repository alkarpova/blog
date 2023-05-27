const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			colors: {
				'theme': '#cfac9f',
				'theme-2': '#a6796f',
			},
			fontFamily: {
				serif: ['Montserrat', ...defaultTheme.fontFamily.serif],
				sans: ['Cormorant Garamond', ...defaultTheme.fontFamily.sans],
			},
		},
	},
	plugins: [],
}
