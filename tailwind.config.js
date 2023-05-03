/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {
        backgroundImage: {
            'login-bacground': "url('/img/hero-pattern.svg')",
            'footer-texture': "url('/img/footer-texture.png')",
          }
    },
  },
  plugins: [],
}

