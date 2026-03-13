/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './storage/framework/views/*.php',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        orange: {
          500: '#ff7e5f',
          600: '#feb47b',
          700: '#ff6a4a',
          800: '#fda65c',
        }
      }
    },
  },
  plugins: [],
}
