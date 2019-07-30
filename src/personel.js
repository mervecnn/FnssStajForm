/* (() => {
    const adElement = document.getElementById('ad');
	console.log('adElement: ' + adElement);
    adElement.onchange = (_) => {
        console.log('setting name to: ' + adElement.value);
        Cookies.set('ad', adElement.value);
    };
    let oldText = Cookies.get('ad');
    console.log('oldText: ' + oldText);
    adElement.value = oldText;
})() */
(() => {
    const connectCookieEvent = (id) => {
        const element = document.getElementById(id);
        element.onchange = _ =>  {
            Cookies.set(id, element.value);
        };
        let oldText = Cookies.get(id);
        element.value = oldText;
        console.log('connected cookie event to: ' + id);
    };
    connectCookieEvent('ad');
})()