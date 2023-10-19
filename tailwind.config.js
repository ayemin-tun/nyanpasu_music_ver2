/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      padding: '4rem',
    },
    extend: {
      colors: {
        transparentBlack: 'rgba(0, 0, 0, 0.5)',
        transparentwhite: 'rgba(225,225,225,0.7)',
        transparentBlack3: 'rgba(0, 0, 0, 0.1)',
        transparentBlack2: 'rgba(0, 0, 0, 0.7)',
      },

    },
  },
  plugins: [],
  darkMode: 'class'
}

