(() => {
    const ids = Array.from(document.getElementById('inputs')
        .getElementsByClassName('input-md'))
        .map(x => x.id);
    console.log("Found ids: " + ids.toString());

    const connectCookieEvent = (id) => {
		// console.log(id);	
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