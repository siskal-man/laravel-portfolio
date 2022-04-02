module.exports = {
  darkMode: "class",
  content: [
    './storage/framework/views/*.php',
    "./resources/**/*.blage.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("./plugin")
  ],
}
