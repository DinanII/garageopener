/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./app/**/*.php"
  ],
  theme: {
    extend: {
      fontFamily: {
        gabarito: ['Gabarito', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
