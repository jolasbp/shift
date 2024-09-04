/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            "lato": ["Lato", "sans-serif"]
        },
        fontSize: {
            "2xs" : "10px"
        }
    },
  },
  plugins: [],
}

