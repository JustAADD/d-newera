
export default {
  theme: {
    extend: {
      fontSize: {
        'clamp-sm': 'clamp(0.875rem, 0.7778rem + 0.5556vw, 1rem)', // 14px to 16px
        'clamp-md': 'clamp(1rem, 0.8889rem + 1.1111vw, 1.25rem)', // 16px to 20px
        'clamp-lg': 'clamp(1.25rem, 1.1111rem + 1.6667vw, 1.5rem)', // 20px to 24px
        'clamp-xl': 'clamp(1.5rem, 1.3333rem + 2.2222vw, 2rem)', // 24px to 32px
        'clamp-2xl': 'clamp(2rem, 1.7778rem + 3.3333vw, 3rem)', // 32px to 48px
        'clamp-3xl': 'clamp(3rem, 2.6667rem + 4.4444vw, 4rem)', // 48px to 64px 
        'clamp-4xl': 'clamp(4rem, 3.3333rem + 6.6667vw, 6rem)', // 64px to 96px
      },
    },
  },
};
