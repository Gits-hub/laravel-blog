/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js'
  ],
  theme: {
    extend: {
      colors:{
        brightOrange: 'rgb(255, 202, 88)',
        lightGray: 'rgb(223, 223, 223)'
      }
    },
  },
  plugins: [],
}

