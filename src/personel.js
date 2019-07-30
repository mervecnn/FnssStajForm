(() => {
    const ids = Array.from(document.getElementById('inputs').children)
        .filter(e => e.tagName === 'div' && e.className === 'form-group')
        .map(e => e.getElementsByTagName('div')[0].id);
        
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