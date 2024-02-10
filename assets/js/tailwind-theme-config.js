tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        dc_black: '#03050a',
        dc_black_1: '#05080f',
        dc_black_2: '#090e16',
        dc_white: '#fff',
        dc_light_gray: '#f2f2f2',
        dc_transparent: '#fff0',
        dc_blue: '#35505b',
        dc_green: '#66c69d',
        dc_green_hover: '#478b6f52',
        dc_gray: '#c1c1c1'
      },
      fontFamily: {
        sans: ['Raleway', 'sans-serif'], // Usar Raleway como fuente principal
        serif: ['Merriweather', 'serif'],
      },
      container: {
        center: true,
        padding: '1rem',
      },
    }
  }
}
