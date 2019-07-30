(() => {
	const ids = [
		'ad',
		'soyad',
		'tc',
		'dtarihi',
		'email',
		'dyeri',
		'ikametgah',
		'il',
		'ilce',
		'sgkno',
		'iletisimnumarasi',
		'universiteadi',
		'bolumadi',
		'sinif',
		'departman',
		'anneadi',
		'babaadi'
	];
    const connectCookieEvent = (id) => {
		console.log(id);	
        const element = document.getElementById(id);
        element.onchange = _ =>  {
            Cookies.set(id, element.value);
        };
        let oldText = Cookies.get(id);
		if (oldText)
			element.value = oldText;
        console.log('connected cookie event to: ' + id);
    };
	ids.forEach(connectCookieEvent);
})()