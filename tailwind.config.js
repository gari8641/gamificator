/** @type {import('tailwindcss').Config} */
module.exports = {
   purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],

  // リンク文字のデフォルトを青にする。↓↓
  theme: {
          extend: {
              colors: {
                  link: '#1DA1F2', // ここでリンクの色を設定
              },
          },
      },
      variants: {},
      plugins: [],
  // リンク文字のデフォルトを青にする。↑↑
}

