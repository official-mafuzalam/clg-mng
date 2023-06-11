/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      "node_modules/preline/dist/*.js",
  ],
  darkMode: 'class',
  theme: {
      container: {
          center: true,
      },
      extend: {},
  },
  plugins: [require("preline/plugin")],
};
