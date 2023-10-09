/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "./!(build|dist|.*)/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "main-green-secondary-700": "#3e4d3e",
        "main-green-secondary-50": "#eef0ee",
        "main-brown-primary-500": "#93733e",
        darkolivegreen: "#745b34",
        "main-brown-primary-300": "#b7a17e",
        "main-green-secondary-500": "#586d58",
        darkslategray: {
          "100": "#343b34",
          "200": "#2b2f2b",
        },
        dimgray: {
          "100": "#705c3d",
          "200": "#5a605a",
          "300": "#556255",
          "400": "#615540",
        },
        "main-brown-primary-50": "#f4f1ec",
        gray: {
          "100": "#222722",
          "200": "#181b18",
        },
        "main-green-secondary-300": "#8f9d8f",
        "main-background": "#fffdf9",
        "main-green-secondary-100": "#cbd2cb",
        "main-text": "#2f2f2f",
        "main-green-secondary-200": "#b2bcb2",
        "main-yellow-accent-400": "#d7ba82",
        gainsboro: "#e6e7e6",
        burlywood: "#bb9a5a",
        "main-brown-primary-700": "#68522c",
      },
      spacing: {},
      fontFamily: {
        button: "Mulish",
        "heading-2-bold": "'Frank Ruhl Libre'",
      },
      borderRadius: {
        "81xl": "100px",
        "481xl": "500px",
      },
    },
    fontSize: {
      base: "1rem",
      smi: "0.81rem",
      "9xl": "1.75rem",
      "2xs": "0.69rem",
      "4xl": "1.44rem",
      lgi: "1.19rem",
      "14xl": "2.06rem",
      sm: "0.88rem",
      xs: "0.75rem",
      xl: "1.25rem",
      "3xl": "1.38rem",
      inherit: "inherit",
    },
    screens: {
      lg: {
        max: "1200px",
      },
      md: {
        max: "960px",
      },
      sm: {
        max: "420px",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
};


