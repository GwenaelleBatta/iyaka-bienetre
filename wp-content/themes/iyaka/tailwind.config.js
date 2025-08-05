module.exports = {
	content: [
		// https://tailwindcss.com/docs/content-configuration
		'./*.php',
		'./inc/**/*.php',
		'./template-parts/**/*.php',
		'./page-templates/**/*.php',
		'./safelist.txt',
		//'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
	],
	safelist: [
		'text-center',
	],
	theme: {
		screens: {
			sm: '460px',
			sd: '540px',
			md: '768px',
			rg: '1024px',
			rl: '1240px',
			lg: '1440px',
			xg: '1680px',
			xl: '1920px',
			'2xl': '2060px',
			'3xl': '2300px',
		},
		extend: {
			fontFamily: {
				'quicksand': ['Quicksand', 'serif'],
				'opensans': ["Open Sans", 'sans-serif']
			},
			colors: {
				brand: {
					DEFAULT: '#F0ECE3',
					light : '#A8C1A1',
					dark : '#D6A98C',
					middle : '#CBBFA2'
				},
				grey:{
					DEFAULT : '#929292',
					dark : '#5E5E5E'
				}
			},
			spacing: {
				4.5: '1.125rem', // 18px
				5.5: '1.375rem', // 22px
				9.5: '2.375rem', // 38px
				18: '4.5rem', // 72px
				26: '6.5rem', // 104px
			},
			letterSpacing: {
				lg: '0.1rem', //1.5px
				xl: '0.15rem', //2.5px
				'2xl': '0.25rem', //4px
			},
			fontSize: {
				'1.5xl': ['1.375rem', '2.2rem'], // 22px
				'2.5xl': ['1.75rem', '2.125rem'], // 28px
				'3.5xl': ['2rem', '2.375rem'], // 32px
				'4.5xl': ['2.5rem', '1'], // 44px
				'5.5xl': ['3.25rem', '1.5'],
				'6.5xl' : ['4.125rem', '1'],// 52px
				'7.5xl': ['5rem', '1'], // 84px
				'8.5xl': ['6.375rem', '1'], // 84px
			},
			keyframes: {
				bounceY: {
					'0%, 100%': { transform: 'translateY(0)' },
					'50%': { transform: 'translateY(-10px)' },
				},
			},
			animation: {
				bounceY: 'bounceY 1s infinite',
			},
			zIndex: {
				1: 1,
				2: 2,
				3: 3,
				4: 4,
				5: 5,
				100: 100,
			},
			gridTemplateColumns: {
				14: 'repeat(14, 1fr)',
			},
			gridColumnEnd: {
				14: '14',
			},

		},
	},
	plugins: [],
};
