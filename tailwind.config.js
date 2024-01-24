/** @type {import('tailwindcss').Config} */ 
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
    colors: {
      green: {
        500: "#36c959",
        600: "#26b949"
      },
      blue: {
        500: "#1f6899",
        600: "#0f5889"
      },
      pool: {
        500: "#24B3E6",
        600: "#1C9DCB",
      },
      yellow: {
        500: "#bb9c19",
        600: "#997f12",
      },
      red: {
        500: "#c13a3a",
        600: "#a32828",
      },
      gray: {
        100: "#efefef",
        200: "#b0b0b0",
        200: "#909090",
        300: "#707070",
        400: "#505050",
        500: "#303030",
        700: "#202020",
      },
      whatsapp: {
        500: "#92C03E",
        600: "#82B02E",
      },
      white: "#ffffff",
      black: "#000000",
    },
    fontFamily: {
      'brandon': ['Poppins', 'Open Sans'],
    }
  },
  plugins: [],
}