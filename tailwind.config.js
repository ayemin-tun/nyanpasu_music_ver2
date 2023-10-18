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
      },

    },
  },
  plugins: [],
  darkMode: 'class'
}

