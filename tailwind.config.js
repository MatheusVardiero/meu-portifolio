/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      // Personalize as cores aqui
      colors: {
        primary: "#4ade80", // Exemplo de cor primária
        secondary: "#16181D", // Exemplo de cor secundária
        accent: "#657786", // Exemplo de cor de destaque
        danger: "#E0245E", // Exemplo de cor de perigo
      },
      // Personalize as fontes aqui
      fontFamily: {
        sans: ["Helvetica", "Arial", "sans-serif"], // Fonte sans-serif personalizada
        serif: ["Georgia", "serif"], // Fonte serif personalizada
      },
      // Personalize espaçamentos aqui
      spacing: {
        72: "18rem", // Exemplo de espaçamento
        84: "21rem",
        96: "24rem",
      },
      container: {
        center: true, // Centraliza o container
        screens: {
          sm: "100%", // Full width no mobile
          md: "100%", // Full width no tablet
          lg: "1024px", // Largura fixa no desktop
          xl: "1280px", // Largura maior em telas grandes
          "2xl": "1536px", // Largura extra em telas ultra largas
        },
      },
    },
    screens: {
      sm: "640px", // Pequeno (celulares)
      md: "768px", // Médio (tablets)
      lg: "1024px", // Grande (notebooks)
      xl: "1280px", // Extra grande (desktops)
      "2xl": "1536px", // Extra extra grande (telas ultra-wide)
    },
  },
  plugins: [],
};
