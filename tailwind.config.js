export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      animation: {
        marquee: 'marquee 30s linear infinite',
        lineGlow: 'lineGlow 5s linear infinite',
        lineGlowY: 'lineGlowY 5s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        lineGlow: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(200%)' },
        },
        lineGlowY: {
          '0%': { transform: 'translateY(0%)' },
          '100%': { transform: 'translateY(200%)' },
        },
      },
    },
  },
  plugins: [],
}