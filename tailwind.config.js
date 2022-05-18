const defaultTheme = require('tailwindcss/defaultTheme')


module.exports = {
  content: require('fast-glob').sync([
    './source/**/*.php',
    './source/**/*.js',
  ]),
  theme: {
    extend: {
      'minHeight': (theme) => ({
        'screen/1': '75vh',
        'screen/2': '50vh',
      }),
      height: (theme) => ({
        'screen/1': '75vh',
        'screen/2': '50vh',
        'screen/3': 'calc(100vh / 3)',
        'screen/4': 'calc(100vh / 4)',
        'screen/5': 'calc(100vh / 5)',
      }),
      fontFamily: {
        railway: ['"Raleway"'],
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        serif: ['Source Serif Pro', ...defaultTheme.fontFamily.serif],
      },
      colors: {
        'downy': {
          DEFAULT: '#4DB692',
          50: '#CFEBE2',
          100: '#C1E5D9',
          200: '#A4DAC7',
          300: '#87CEB5',
          400: '#6AC2A4',
          500: '#4DB692',
          600: '#3B9073',
          700: '#2B6853',
          800: '#1A4033',
          900: '#0A1914'
        },
        'swiss-coffee': {
          DEFAULT: '#E1D7D5',
          50: '#FFFFFF',
          100: '#FFFFFF',
          200: '#FFFFFF',
          300: '#FFFFFF',
          400: '#F2EEED',
          500: '#E1D7D5',
          600: '#CAB8B4',
          700: '#B29994',
          800: '#9B7A73',
          900: '#7D5F59',
        },
        mojo: {
          DEFAULT: '#C2513A',
          50: '#EECDC6',
          100: '#E9BFB6',
          200: '#E0A397',
          300: '#D68777',
          400: '#CD6C58',
          500: '#C2513A',
          600: '#973F2D',
          700: '#6C2D20',
          800: '#401B13',
          900: '#150906',
        },
      },
    },
  },
  plugins: [],
};
