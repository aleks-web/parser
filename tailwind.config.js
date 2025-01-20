/** @type {import('tailwindcss').Config} */
export default {
  content: ["./public/**/*.{php,js}"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '0.8rem',
        md: '0.9rem'
      },
    },
    extend: {
      lineHeight: {
        normal: '0.6',
      },
      fontFamily: {
        sans: ['Roboto', 'sans-serif'],
      },
      screens: {
        'sm': '576px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
    }
  },
  plugins: [],
}