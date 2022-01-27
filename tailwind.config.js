module.exports = {
  content: require('fast-glob').sync([
    './**/*.php'
  ]),
  theme: {
    extend: {
      height: (theme) => ({
        'screen/1': '75vh',
        'screen/2': '50vh',
        'screen/3': 'calc(100vh / 3)',
        'screen/4': 'calc(100vh / 4)',
        'screen/5': 'calc(100vh / 5)',
      }),
      fontFamily: {
        railway: ['"Raleway"'],
      },
      colors: {
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
