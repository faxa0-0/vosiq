tailwind.config = {
  content: [
    './storage/framework/views/*.php',
    './resources/views/admin/auth/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
],
  theme: {
    extend: {
      fontFamily: {
        inter: '"Inter", serif',
        alice: '"Alice", sans-serif',
      },
      backgroundImage: {
        auth: "linear-gradient(rgba(17, 17, 17, 0.7), rgba(17, 17, 17, 0.7)),url('./assets/auth-bg.jpg')",
      },
    },
  },
};
