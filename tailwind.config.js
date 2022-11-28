/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      'franklin': ['Libre Franklin'],
    },
    container: {
      center:true,
    },
    extend: {},
    
  },
  plugins: [],
}
