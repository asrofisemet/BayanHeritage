/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
  content: [
    "./app/Views/**/*.php", // All .php files in the Views folder and its subfolders
    "./app/Views/*.php", // All .php files directly in the Views folder
    "public/js/**/*.js", // All .js files in your public/js folder
  ],
  theme: {
    extend: {
      colors: {
        golden: "#5B8C51",
        grayish: "#5C4A3A",
        "page-bg": "#F2EDE3",
        "border-card": "#D8E0D4",
        "bh-primary": "#4A6741",
        "bh-primary-dark": "#3A5535",
        "bh-secondary": "#7BA373",
        "bh-accent": "#5B8C51",
        "bh-accent-text": "#3D6B35",
        "bh-brown": "#5C4A3A",
        "bh-bg": "#F2EDE3",
        "bh-surface": "#FFFFFF",
        "bh-text": "#2D3B2D",
        "bh-text-muted": "#6B7E6B",
        "bh-border": "#D8E0D4",
      },
      fontFamily: {
        josefin: ['"Josefin Sans"', "sans-serif"],
        jaldi: ['"Jaldi"', "sans-serif"],
      },
      transitionProperty: {
        "bg-img": "background-image",
      },
      backgroundImage: {
        Landing: "url('./Assets/bayan3.jpeg')",
      },
    },
  },
  plugins: [],
};
