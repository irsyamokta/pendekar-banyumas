/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      poppins: ['Poppins', 'sans-serif'],
    },
    fontWeight:{
      regular: 400,
      medium: 500,
      semibold: 600,
      bold: 700
    },
    extend: {
      colors: {
        primary: '#EEF5FF',
        secondary: '#176B87',
        dark: '#000000',
        accent: '#1EC3E7',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}