var config = {
    lang: 'fr',
    time: {
        timeFormat: 24,
        displaySeconds: true,
        digitFade: false,
    },
    weather: {
        //change weather params here:
        //units: metric or imperial
        params: {
	    city: 'Lille',
            q: 'Lille,France',
            units: 'metric',
            // if you want a different lang for the weather that what is set above, change it here
            lang: 'fr',
            APPID: '9198586c1b4cacd93d367b6fbcfba2bb'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            'Bonjour',
            'Passe une bonne journée!',
            'as-tu bien dormi?'
        ],
        afternoon: [
            'Tu as l\'air radieux!',
            'Comment vas-tu?'
        ],
        evening: [
            'Wow!',
            'T\'as l\'air en forme!'
        ]
    },
    calendar: {
        maximumEntries: 10, // Total Maximum Entries
		displaySymbol: true,
		defaultSymbol: 'calendar', // Fontawsome Symbol see http://fontawesome.io/cheatsheet/
        urls: [
		{
			symbol: 'calendar-plus-o', 
			url: 'https://calendar.google.com/calendar/ical/fr.french%23holiday%40group.v.calendar.google.com/public/basic.ics'
		},
		{
			symbol:'moon-o',
			url:'https://calendar.google.com/calendar/ical/ht3jlfaac5lfd6263ulfh4tql8%40group.calendar.google.com/public/basic.ics',
		},
		//{
		//	symbol: 'soccer-ball-o',
		//	url: 'https://www.google.com/calendar/ical/akvbisn5iha43idv0ktdalnor4%40group.calendar.google.com/public/basic.ics',
		//},
		 //{
		//	 symbol: 'mars',
		//	 url: "https://server/url/to/his.ics",
		 //},
		// {
			// symbol: 'venus',
			// url: "https://server/url/to/hers.ics",
		// },
		// {
			// symbol: 'venus-mars',
			// url: "https://server/url/to/theirs.ics",
		// },
		]
    },
    news: {
        feed: 'http://www.lemonde.fr/rss/une.xml'
    }
}
