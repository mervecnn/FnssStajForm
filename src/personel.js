(() => {
    const ids = Array.from(document.getElementById('inputs').children)
		.filter(e => e.className === 'form-group')
        .map(e => {
			// TODO: refactor
			let x = Array.from(e.getElementsByClassName('col-md-4'))[1];
			let y = Array.from(x.getElementsByClassName('input-md'))[0];
			return y.id;
		});
    console.log(ids);
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