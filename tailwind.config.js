/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.{php,js}"],
  theme: {
    extend: {
      colors: {
        'primary': '#090909',
        'secondary' : '#6C6A6A',
        'cgray': '#F0F0F0',
        'egray': '#EBEBEB',
        'darkborder' : '#121212',
        'ctext' : '#404040',
        'cgray2' : '#333',
        'cgray3' : '#666',
        'cgray4' : '#4d4d4d',
        'white' : '#fff',
        'darkgreen' : '#94A0724D',
        'pink' : '#F4C0D5',
        'blue' : '#BAC5F6',
        'whiteopacity' : '#FFFFFFA3',
        'secondtext' : '#54585F',
        'bg-content' : '#D1D1D1',
        'white-24' : 'rgba(255, 255, 255, 0.24)',
        'white-64' : 'rgba(255, 255, 255, 0.64)',
      },
      fontFamily: {
        peyda: ['Peyda', 'sans-serif'],
      },
      listStyleType: {
        none: 'none',
        square: 'square',
      },
      fontSize: {
        'title': '4.5rem',
        'title1': '2.5rem',
        'title2': '1.75rem',
      },
      backgroundPosition: {
        'right150': '115%',
      },
      boxShadow: {
        'cxl': 'inset 0 0px 9px rgba(0, 0, 0, 0.1)',
      },
      borderRadius: {
        '4xl': '1.75rem',
      },
      lineHeight: {
        '424': '4.25rem',
      }
    },
  },
  plugins: [],
}

